<?php

class Catalog_Model_Category extends Core_Block_Template{
    public function init(){
        $this->resourceClass="Catalog_Model_Resource_Category";
        $this->collectionClass= "Catalog_Model_Resource_Collection_Category"; 
    }
    
}