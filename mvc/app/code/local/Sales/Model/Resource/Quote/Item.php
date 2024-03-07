<?php

class Sales_Model_Resource_Quote_Item extends Core_Model_Resource_Abstract
{

    public function init()
    {
        $this->_tablename = 'sales_quote_item';
        $this->_primarykey = 'item_id';
    }
}