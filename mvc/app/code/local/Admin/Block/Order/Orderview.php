<?php 

class Admin_Block_Order_Orderview extends Core_Block_Template{
    public function __construct(){
        $this->setTemplate('admin/order/orderview.phtml');
    }

    public function getorder(){
        return Mage::getModel('sales/order')->getcollection();
    }

    public function getOrderCustomer($id){
        return Mage::getModel('sales/order_customer')->getCollection()->addFieldToFilter('order_id',$id)->getData();
    }
    public function getItem($id){
        return Mage::getModel('sales/order_item')->getCollection()->addFieldToFilter('order_id',$id)->getData();
    }

}