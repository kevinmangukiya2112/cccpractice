<?php 

class Cart_Model_View extends Core_Model_Abstract{

    public function item(){
        $data=[];
        $id=Mage::getSingleton('core/session')->get('quote_id');
        $cart=Mage::getModel('sales/quote_item')->getcollection()->addFieldToFilter('quote_id',$id);
        // return $cart;
        $data=$cart->getData();
        foreach ($data as $_cart){
           $data[]=Mage::getModel('catalog/product')->load($_cart->getProductId());
        }
        return $data;
    }
}