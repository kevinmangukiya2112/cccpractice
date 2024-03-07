<?php 

class Sales_Model_Resource_Quote extends Core_Model_Resource_Abstract{


    public function init(){
     $this->_tablename = 'sales_quote';
     $this->_primarykey = 'quote_id';
    }
}