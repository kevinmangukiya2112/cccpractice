<?php 

class Sales_Model_Quote_Methods_Shipping extends Core_Model_Abstract{

    public function __construct(){
        $this->init();
    }

    public function init(){
        $this->modelClass="Sales/Quote_Methods_Shipping";
        $this->resourceClass="Sales_Model_Resource_Quote_Methods_Shipping";
        $this->collectionClass="Sales_Model_Resource_Collection_Quote_Methods_Shipping";
    }

    protected function _beforesave(){
        $quote_id=Mage::getSingleton('core/session')->get('quote_id');
        $this->addData('quote_id',$quote_id);
    }

    protected function _aftersave(){
    }

    
}