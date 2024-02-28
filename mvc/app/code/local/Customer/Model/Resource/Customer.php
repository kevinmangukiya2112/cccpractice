<?php

class Customer_Model_Resource_Customer extends Core_Model_Resource_Abstract{
    public function __construct(){
        $this->init();
    }
    public function init(){
        $this->_tablename="customer";
        $this->_primarykey="customer_id";
    }
}
