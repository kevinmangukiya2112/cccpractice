<?php 

class License_Model_Rate_License extends Core_Model_Abstract{
    public function init(){
        $this->modelClass = "license/rate_license";
        $this->resourceClass = "License_Model_Resource_Rate_License";
        $this->collectionClass = "License_Model_Resource_Collection_Rate_License";
    }

}