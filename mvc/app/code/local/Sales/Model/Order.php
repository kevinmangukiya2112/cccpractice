<?php 

class Sales_Model_Order extends Core_Model_Abstract{

    public function __construct(){
        $this->init();
    }

    public function init(){
        $this->modelClass="Sales/Order";
        $this->resourceClass="Sales_Model_Resource_Order";
        $this->collectionClass="Sales_Model_Resource_Collection_Order";
    }

    protected function _beforesave(){
        $this->removeData('quote_id');
        $this->removeData('order_id');
        $order_number='order'.time();
        $this->addData('order_number',$order_number);
    }
}