<?php

class Customer_Model_Address extends Core_Model_Abstract{
    public function init(){
        $this->modelClass="customer/address";
        $this->resourceClass="Customer_Model_Resource_Address";
        $this->collectionClass="Customer_Model_Resource_Collection_Address";
    }

    protected function _beforesave(){
        $customer_id=(Mage::getSingleton('core/session')->get('customer_id'));
        $this->addData('customer_id',$customer_id);
    }
}