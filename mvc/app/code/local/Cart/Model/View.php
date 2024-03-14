<?php 

class Cart_Model_View extends Core_Model_Abstract{

    // public function getitem(){
    //     $_data=[];
    //     $id=Mage::getSingleton('core/session')->get('quote_id');
    //     $cart=Mage::getModel('sales/quote_item')->getcollection()->addFieldToFilter('quote_id',$id);
    //     // return $cart;
    //     $data=$cart->getData();
    //     foreach ($data as $_cart){
    //         $_data[]=Mage::getModel('catalog/product')->load($_cart->getProductId());
    //     }
    //     return $_data;
    // }

    // public function getRawtotal(){
    //     $_total=[];
    //     $id=Mage::getSingleton('core/session')->get('quote_id');
    //     $cart=Mage::getModel('sales/quote_item')->getcollection()->addFieldToFilter('quote_id',$id);
    //     foreach($cart->getData() as $_cart){
    //         $_total[]=$_cart->getRawtotal();
    //     }
    //     return $_total;
    // }
}