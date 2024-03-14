<?php 

class Sales_Model_Resource_Order_Customer extends Core_Model_Resource_Abstract{

    public function init(){
        $this->_tablename="sales_order_customer";
        $this->_primarykey="order_customer_id";
    }
}