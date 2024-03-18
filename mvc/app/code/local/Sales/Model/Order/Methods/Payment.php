<?php 

class Sales_Model_Order_Methods_Payment extends Core_Model_Abstract{

    public function __construct(){
        $this->init();
    }

    public function init(){
        $this->modelClass="Sales/Order_Methods_Payment";
        $this->resourceClass="Sales_Model_Resource_Order_Methods_Payment";
        $this->collectionClass="Sales_Model_Resource_Collection_Order_Methods_Payment";
    }
}