<?php

class Sales_Model_Quote extends Core_Model_Abstract
{
    public function init(){
        $this->modelClass = "sales/quote";
        $this->resourceClass = "Sales_Model_Resource_Quote";
        $this->collectionClass = "Sales_Model_Resource_Collection_Quote";
    }

    protected function _beforesave(){
        $grandTotal = 0 ;
        foreach($this->getItemCollection()->getData() as $_item){
            $grandTotal += $_item->getRowTotal();
            // var_dump($_item->getRowTotal());
        };
        $this->addData('grand_total',$grandTotal);
    }

    public function initQuote(){
        $quoteId =  Mage::getSingleton('core/session')->get('quote_id');
        $quoteId =  (!$quoteId) ? 0 : $quoteId;
        $this->load($quoteId);
        if(!$this->getId()){
           $quote = Mage::getModel('sales/quote')
                ->setData(
                    [
                        'tax_percent' => 0,
                        'grand_total' => 0
                    ]
                )
                ->save();
            Mage::getSingleton('core/session')->set('quote_id',$quote->getId());
            $this->load($quote->getId());
            // print_r($quote);
        }
    }

    public function addProduct($product){
        $this->initQuote();
        // print_r($product);
        // print_r($this->getId());
        // die;
        if($this->getId()){
            Mage::getModel('sales/quote_item')->addItem($this,$product['product_id'],$product['qty']);
            $this->save();
        }
    }

    public function getItemCollection(){
       return Mage::getModel('sales/quote_item')->getCollection()
                    ->addFieldToFilter('quote_id',$this->getId());
    }

    public function convert(){
        $this->initQuote();
        if ($this->getId()) {
            $order_id=Mage::getModel('sales/order')->setData($this->getData())->save()->getId();
            foreach ($this->getItemCollection()->getData() as $_item) {
                $_item->addData('order_id',$order_id);
                Mage::getModel('sales/order_item')->setData($_item->getData())->save();          
            }
            foreach ($this->getCustomerCollection()->getData() as $_item) {
                $_item->addData('order_id',$order_id);
                Mage::getModel('sales/order_customer')->setData($_item->getData())->save();
            }
        }
        $this->addData('order_id',$order_id);
        $this->save();
    }
    public function getCustomerCollection()
    {
        $quote_id=Mage::getSingleton('core/session')->get('quote_id');
        return Mage::getModel('sales/quote_Customer')->getCollection()
            ->addFieldToFilter('quote_id', $quote_id);
    }
    
}