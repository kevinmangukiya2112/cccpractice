<?php 

class Sales_Model_Resource_Quote_Customer extends Core_Model_Resource_Abstract{
    
    public function __construct(){
        $this->init();
    }

    public function init(){
        $this->_tablename="sales_quote_customer";
        $this->_primarykey="quote_customer_id";
    }
}