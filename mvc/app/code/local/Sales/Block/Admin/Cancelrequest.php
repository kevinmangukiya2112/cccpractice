<?php 

class Sales_Block_Admin_Cancelrequest extends Core_Block_Template{
    public function __construct(){
        $this->setTemplate('admin/order/cancelrequest.phtml');
    }

    public function getorder(){
        return Mage::getModel('sales/order')->getcollection()->addFieldToFilter('status',Customer_Model_Order::Order_Cancel_Request);
    }

    public function getOrderCustomer($id){
        return Mage::getModel('sales/order_customer')->getCollection()->addFieldToFilter('order_id',$id)->getData();
    }
    public function getItem($id){
        return Mage::getModel('sales/order_item')->getCollection()->addFieldToFilter('order_id',$id)->getData();
    }
}