Order<?php 

class Sales_Model_Resource_Order_Methods_Shipping extends Core_Model_Resource_Abstract{
    public function init(){
        $this->_tablename="sales_order_shipping_method";
        $this->_primarykey="shipping_id";
    }
}