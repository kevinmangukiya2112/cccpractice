<?php 

class Sales_Model_Order extends Core_Model_Abstract{

    const DEFAULT_ORDER_STATUS='pending';

    public function __construct(){
        $this->init();
    }

    public function init(){
        $this->modelClass="Sales/Order";
        $this->resourceClass="Sales_Model_Resource_Order";
        $this->collectionClass="Sales_Model_Resource_Collection_Order";
    }

}