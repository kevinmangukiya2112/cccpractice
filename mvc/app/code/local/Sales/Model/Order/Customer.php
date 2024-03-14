<?php

class Sales_Model_Order_Customer extends Core_Model_Abstract{
    public function __construct(){
        $this->init();
    }

    public function init(){
        $this->modelClass="Sales/Order_Customer";
        $this->resourceClass="Sales_Model_Resource_Order_Customer";
        $this->collectionClass="Sales_Model_Resource_Collection_Order_Customer";
    }

    protected function _beforesave(){
        $this->removeData('quote_id');
        $this->removeData('quote_customer_id');
    }
}