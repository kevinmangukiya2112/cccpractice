<?php 

class Sales_Model_Resource_Order_Item extends Core_Model_Resource_Abstract{

    public function init(){
        $this->_tablename="sales_order_item";
        $this->_primarykey="item_id";
    }
}