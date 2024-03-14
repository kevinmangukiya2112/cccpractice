<?php

class Sales_Model_Quote_Address extends Core_Model_Abstract{

    public function __construct(){
        $this->init();
    }

    public function init(){
        $this->modelClass="Sales/Quote_Address";
        $this->resourceClass="Sales_Model_Resource_Quote_Address";
        $this->collectionClass="Sales_Model_Resource_Collection_Quote_Address";
    }

    protected function _beforesave(){
        $customer_id=(Mage::getSingleton('core/session')->get('customer_id'));
        $this->addData('customer_id',$customer_id);
        $quote_id=Mage::getSingleton('core/session')->get('quote_id');
        $this->addData('quote_id',$quote_id);
    }
    
}