<?php 

class Sales_Block_Cart_Checkout extends Core_Block_Template{
    public function __construct(){
    }

    public function getaddress(){
        $customer_id=Mage::getSingleton("core/session")->get("customer_id");
        // return $customer_id;
        return Mage::getModel("customer/address")->getcollection()->addFieldToFilter('customer_id',$customer_id);
    }
}