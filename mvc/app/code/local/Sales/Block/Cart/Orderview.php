<?php 
 
class Sales_Block_Cart_Orderview extends Core_Block_Template{

    public function __construct(){
    }

    public function getordersdetail(){
        $customerid=Mage::getSingleton('core/session')->get('customer_id');
        return Mage::getModel('sales/order_customer')->getcollection()->addFieldToFilter('customer_id',$customerid);
    }

    public function getproductsdetail(){
        $customerid=Mage::getSingleton('core/session')->get('customer_id');
        $order=Mage::getModel('sales/order_customer')->getcollection()->addFieldToFilter('customer_id',$customerid);
        foreach ($order->getData() as $_order){
            $item=Mage::getModel('sales/order_item')->getcollection()->addFieldToFilter('order_id',$_order->getOrderId());
            if($item){
                foreach($item->getData() as $_item){
                    $product=Mage::getModel('catalog/product')->getcollection()->addFieldToFilter('product_id',$_item->getProductId());
                }
            }
        }
        return $product;
    }

    public function getgrandtotal(){
        $customerid=Mage::getSingleton('core/session')->get('customer_id');
        $order=Mage::getModel('sales/order_customer')->getcollection()->addFieldToFilter('customer_id',$customerid);
        foreach ($order->getData() as $_order){
            $item=Mage::getModel('sales/order')->getcollection()->addFieldToFilter('order_id',$_order->getOrderId());
        }
        return $item;
    }
}
?>