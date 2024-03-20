<?php 

class Sales_Block_Admin_Orderupdate extends Core_Block_Template{
    public function __construct(){
        $this->setTemplate('admin/order/orderupdate.phtml');
    }

    public function getOrder(){
        return (Mage::getModel("sales/order")
        ->load($this->getRequest()->getParams('id',0)));
    }
}