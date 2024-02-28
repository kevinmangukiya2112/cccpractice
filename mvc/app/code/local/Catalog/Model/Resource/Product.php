<?php

class Catalog_Model_Resource_Product extends Core_Model_Resource_Abstract{

    public function __construct(){
        $this->init();
    }
    public function init(){
        $this->_tablename="catalog_product";
        $this->_primarykey="product_id";
    }
    
}