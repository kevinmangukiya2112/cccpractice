<?php

class Customer_Block_Dashboard extends Core_Block_Template{
    public function customer(){
        return Mage::getModel("customer/customer")->load("customer_id");
    }
}