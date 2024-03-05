<?php

class Catalog_Model_Resource_Category  extends Core_Model_Resource_Abstract{
    protected $_tablename=null;
    protected $_primarykey=null;

    public function __construct(){
        $this->init();
    }

    public function init(){
        $this->_tablename="catalog_category";
        $this->_primarykey="category_id";
    }

}

