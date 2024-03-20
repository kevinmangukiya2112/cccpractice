<?php

class Sales_Model_Quote extends Core_Model_Abstract
{
    public function init()
    {
        $this->modelClass = "sales/quote";
        $this->resourceClass = "Sales_Model_Resource_Quote";
        $this->collectionClass = "Sales_Model_Resource_Collection_Quote";
    }

    protected function _beforesave()
    {
        $grandTotal = 0;
        foreach ($this->getItemCollection()->getData() as $_item) {
            $grandTotal += $_item->getRowTotal();
            // var_dump($_item->getRowTotal());
        }
        ;
        $this->addData('grand_total', $grandTotal);
    }

    // public function initQuote()
    // {
    //     $customer_id = Mage::getSingleton('core/session')->get('customer_id');
    //     $quotedata = Mage::getModel('sales/quote')->getcollection()->addFieldToFilter('customer_id', $customer_id)->addFieldToFilter('order_id',0)->getFirstItem();
    //     // print_r($quotedata);
    //     // print_r($quotedata->getQuoteId());
    //     // $quoteId =  (!$quotedata->getQuoteId()) ? 0 : $quotedata->getQuoteId();
    //     // print_r($this->load($quoteId));
    //     if ($quotedata){
    //         $quoteId = (!$quotedata->getQuoteId()) ? 0 : $quotedata->getQuoteId();
    //         if ($quoteId !== 0 && $quotedata->getOrderId() == 0) {
    //             $quote = Mage::getModel('sales/quote')
    //                 ->setData($quotedata->getData())
    //                 ->addData('customer_id',$customer_id)
    //                 ->save();
    //         }
    //     } 
    //     else {
    //         $quoteId = (!$this->getId()) ? 0 : $this->getId();
    //         $quote = Mage::getModel('sales/quote')
    //             ->setData(
    //                 [
    //                     'tax_percent' => 0,
    //                     'grand_total' => 0,
    //                     'customer_id' => $customer_id
    //                 ]
    //             )
    //             ->save();
    //         }
    //         Mage::getSingleton('core/session')->set('quote_id', $quote->getId());
    //         $this->load($quote->getId());
    //         // print_r($quote);
    // }

    public function addProduct($product)
    {
        $this->initQuote();
        // print_r($product);
        // print_r($this->getId());
        // die;
        if ($this->getId()) {
            Mage::getModel('sales/quote_item')->addItem($this, $product['product_id'], $product['qty']);
            $this->save();
        }
    }

    public function initQuote()
    {
        $quoteId = Mage::getSingleton('core/session')->get('quote_id');
        $quoteId = (!$quoteId) ? 0 : $quoteId;
        $customer_id = Mage::getSingleton('core/session')->get('customer_id');
        $customer_id = (!$customer_id) ? 0 : $customer_id;
        if ($customer_id) {
            $customerQuote1 = Mage::getSingleton('sales/quote')->getCollection()->addFieldToFilter('customer_id', $customer_id)->addFieldToFilter('order_id', 0)->getFirstItem();
            // print_r($customerQuote1);
            if (!$customerQuote1) {
                $data1 = [
                    'quote_id' => $quoteId,
                    'customer_id' => $customer_id
                ];
                $this->setData($data1)->save();
            } else {
                $customerQuote = Mage::getSingleton('sales/quote')->getCollection()->addFieldToFilter('customer_id', $customer_id)->addFieldToFilter('order_id', 0)->addFieldToFilter('quote_id', $customerQuote1->getQuoteId())->getFirstItem();
                // echo "<pre>";
                // print_r($customerQuote->getId());
                $this->load($customerQuote->getId());
            }
        } else {
            $this->load($quoteId);
            if (!$this->getId()) {
                $quote = Mage::getModel('sales/quote')
                    ->setData(
                        [
                            'tax_percent' => 0,
                            'grand_total' => 0,
                        ]
                    )
                    ->save();
                Mage::getSingleton('core/session')->set('quote_id', $quote->getId());
                $this->load($quote->getId());
            }
        }
    }

    public function getItemCollection()
    {
        return Mage::getModel('sales/quote_item')->getCollection()
            ->addFieldToFilter('quote_id', $this->getId());
    }
    public function addShippingData($shippingData)
    {
        $this->initQuote();
        $shipping = Mage::getModel('sales/quote_methods_shipping')->setData($shippingData)
        ->addData('quote_id',$this->getId())
        ->save();
        $this->addData('shipping_id',$shipping->getId())->save();
        return $this;
    }
    public function addPaymentData($paymentData)
    {
        $this->initQuote();
        $payment = Mage::getModel('sales/quote_methods_payment')->setData($paymentData)
        ->addData('quote_id',$this->getId())
        ->save();
        $this->addData('payment_id',$payment->getId())->save();
        return $this;
    }

    public function convert()
    {
        $this->initQuote();
        if ($this->getId()) {
            $order_number = 'order' . time();
            $order = Mage::getSingleton('sales/order')->setData($this->getData())
                ->removeData('quote_id')
                ->removeData('order_id')
                ->removeData('customer_id')
                ->addData('order_number', $order_number)
                ->save();
            foreach ($this->getItemCollection()->getData() as $_item) {
                $_item->addData('order_id', $order->getId());
                Mage::getModel('sales/order_item')->setData($_item->getData())->save();
            }
            foreach ($this->getCustomerCollection()->getData() as $_item) {
                $_item->addData('order_id', $order->getId());
                Mage::getModel('sales/order_customer')->setData($_item->getData())->save();
            }
        }
        $shipping = Mage::getModel('sales/order_methods_shipping')
            ->setData($this->getshippingMethod()->getData())
            ->removeData('quote_id')
            ->removeData('shipping_id')
            ->addData('order_id', $order->getId())
            ->save();
        $payment = Mage::getModel('sales/order_methods_payment')
            ->setData($this->getpaymentMethod()->getData())
            ->removeData('quote_id')
            ->removeData('payment_id')
            ->addData('order_id', $order->getId())
            ->save();
        $order = Mage::getSingleton('sales/order')
            ->setData($order->getData())
            ->addData('order_id', $order->getId())
            ->addData('shipping_id', $shipping->getId())
            ->addData('payment_id', $payment->getId())
            ->save();
        $this->updateInventory();
        Mage::getSingleton('core/session')->set('order_id', $order->getId());
        $this->addData('order_id', $order->getId());
        $this->save();
        Mage::getSingleton('core/session')->remove('quote_id');
    }

    public function updateInventory(){
        $order=$this->getItemCollection()->getData();
        foreach($order as $_qty){
            $quntityinorder=$_qty->getQty();
            $productmodel=Mage::getModel('catalog/product');
            $product=$productmodel->load($_qty->getProductId(),"product_id");
            $inventory=$product->getInventory();
            $updateinventory=$inventory-$quntityinorder;
            $product->addData('inventory',$updateinventory)
            ->save();
        }
        
        
    }
    public function getCustomerCollection()
    {
        $quote_id = $this->getId();
        return Mage::getModel('sales/quote_Customer')->getCollection()
            ->addFieldToFilter('quote_id', $quote_id);
    }

    public function getshippingMethod()
    {
        $quote_id = $this->getId();
        return Mage::getSingleton('sales/quote_methods_shipping')
            ->load($this->getId(), "quote_id");
    }
    public function getpaymentMethod()
    {
        $quote_id = $this->getId();
        return Mage::getSingleton('sales/quote_methods_payment')
            ->load($this->getId(), "quote_id");
    }

}