<?php 

class Sales_Model_Resource_Order extends Core_Model_Resource_Abstract{

    public function init(){
        $this->_tablename="sales_order";
        $this->_primarykey="order_id";
    }
}