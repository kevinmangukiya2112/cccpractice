<?php 

class License_Model_Resource_Rate_License extends Core_Model_Resource_Abstract{

    public function __construct(){
        $this->init();
    }
    public function init(){
        $this->_tablename = "ccc_statewise_license_rate";
        $this->_primarykey = "id";
    }
}