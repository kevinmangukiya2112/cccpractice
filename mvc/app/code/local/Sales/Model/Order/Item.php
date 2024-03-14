<?php

class Sales_Model_Order_Item extends Core_Model_Abstract{
    
    public function __construct(){
        $this->init();
    }

    public function init(){
        $this->modelClass="Sales/Order_Item";
        $this->resourceClass="Sales_Model_Resource_Order_Item";
        $this->collectionClass="Sales_Model_Resource_Collection_Order_Item";
    }

    protected function _beforesave(){
        $this->removeData('quote_id');
        $this->removeData('item_id');
    }
}