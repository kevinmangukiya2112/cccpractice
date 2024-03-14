<?php 

class Sales_Model_Resource_Quote_Methods_Payment extends Core_Model_Resource_Abstract{
    public function init(){
        $this->_tablename="sales_quote_payment_method";
        $this->_primarykey="payment_id";
    }
}