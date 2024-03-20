<?php 

class Sales_Model_Quote_Methods_Payment extends Core_Model_Abstract{

    public function __construct(){
        $this->init();
    }

    public function init(){
        $this->modelClass="Sales/Quote_Methods_Payment";
        $this->resourceClass="Sales_Model_Resource_Quote_Methods_Payment";
        $this->collectionClass="Sales_Model_Resource_Collection_Quote_Methods_Payment";
    }
}