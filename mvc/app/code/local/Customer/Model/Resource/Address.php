<?php

class Customer_Model_Resource_Address extends Core_Model_Resource_Abstract{

    public function __construct(){
        $this->init();
    }
    public function init(){
        $this->_tablename="customer_address";
        $this->_primarykey="address_id";
    }
}