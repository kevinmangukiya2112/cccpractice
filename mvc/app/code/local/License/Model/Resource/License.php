<?php 

class License_Model_Resource_License extends Core_Model_Resource_Abstract{

    public function __construct(){
        $this->init() ;
    }
     public function init() {
        $this->_tablename = "ccc_license_request";
        $this->_primarykey = "id";
     }
}