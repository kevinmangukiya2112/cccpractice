<?php 
 
class Customer_Block_Orderview extends Core_Block_Template{

    public function __construct(){
    }
    public function getOrderCustomer(){
        $customer_id=Mage::getSingleton('core/session')->get('customer_id');
        return Mage::getModel('sales/order_customer')->getCollection()->addFieldToFilter('customer_id',$customer_id)->getData();
    }
    public function getOrder($id){
        return Mage::getSingleton('sales/order')->load($id);
    }
    public function getItem($id){
        return Mage::getSingleton('sales/order_item')->getCollection()->addFieldToFilter('order_id',$id)->getData();
    }
}
?>