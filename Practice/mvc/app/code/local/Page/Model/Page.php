<?php

class Page_Model_Page extends Core_Model_Abstract{
    public function init(){
        $this->resourceClass="Page_Model_Resource_Page";
        $this->collectionClass= "Page_Model_Resource_Collection_Page"; 
    }
}