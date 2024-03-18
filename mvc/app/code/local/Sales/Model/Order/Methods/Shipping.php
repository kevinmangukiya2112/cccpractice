<?php 

class Sales_Model_Order_Methods_Shipping extends Core_Model_Abstract{

    public function __construct(){
        $this->init();
    }

    public function init(){
        $this->modelClass="Sales/Order_Methods_Shipping";
        $this->resourceClass="Sales_Model_Resource_Order_Methods_Shipping";
        $this->collectionClass="Sales_Model_Resource_Collection_Order_Methods_Shipping";
    }
    
}