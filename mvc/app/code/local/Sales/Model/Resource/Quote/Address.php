<?php 
class Sales_Model_Resource_Quote_Address extends Core_Model_Resource_Abstract{

    public function init(){
        $this->_tablename="sales_quote_customer";
        $this->_primarykey="quote_customer_id";
    }
}