<?php

class Banner_Model_Resource_Banner extends Core_Model_Resource_Abstract{

    protected $_tablename=null;
    protected $_primarykey=null;
    public function __construct(){
        $this->init();
    }

    public function init(){
        $this->_tablename= "banner";
        $this->_primarykey= "banner_id";
    }

}