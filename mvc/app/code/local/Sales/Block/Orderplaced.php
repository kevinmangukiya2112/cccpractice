<?php 

class Sales_Block_Orderplaced extends Core_Block_Template{
    public function __construct(){
        $this->setTemplate('cart/orderplaced.phtml');
    }

    public function getorderdetails(){
        $order_id=Mage::getSingleton('core/session')->get('order_id');
        return Mage::getModel('sales/order')->load($order_id,'order_id');
    }
}