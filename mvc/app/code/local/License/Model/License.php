<?php 
 class License_Model_License extends Core_Model_Abstract{

    public function init(){
        $this->modelClass = "license/license";
        $this->resourceClass = "License_Model_Resource_License";
        $this->collectionClass = "License_Model_Resource_Collection_License";
    }
 }