<?php

class Catalog_Model_Catalog extends Core_Model_Abstract{
    public function init(){
        $this->resourceClass="Catalog_Model_Resource_Catalog";
        $this->collectionClass= "Catalog_Model_Resource_Collection_Catalog"; 
    }   
}