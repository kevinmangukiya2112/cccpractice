<?php 

class Sales_Model_Cart_View extends Core_Model_Abstract{   
    protected $_productitems=[];
    protected $_grandtotal;

     public function getProductCollection(){
        $id=Mage::getSingleton('core/session')->get('quote_id');
        $cart=Mage::getModel('sales/quote_item')->getcollection()->addFieldToFilter('quote_id',$id);
        foreach($cart->getData() as $_item){
            $this->_productitems[]=Mage::getModel('catalog/product')->load($_item->getProductId());
            foreach($this->_productitems as $product){
                // print_r($product);
                if(!$product->getQty()){
                    $product->addData('qty',$_item->getQty());
                    $product->addData('row_total',$_item->getRowTotal());
                }
            }
        }
        // print_r($this->_productitmes);
        return $this;
     }

     public function getProductitem(){
         return $this->_productitems;
     }

    // public function getitem(){
    //     $id=Mage::getSingleton('core/session')->get('quote_id');
    //     $cart=Mage::getModel('sales/quote_item')->getcollection()->addFieldToFilter('quote_id',$id);
    //     // return $cart;
    //     $data=$cart->getData();
    //     foreach ($data as $_cart){
    //         $this->_data[]=$_cart;
    //         $this->_data[]=Mage::getModel('catalog/product')->load($_cart->getProductId());
    //     }
    //     return $this->_data;
    // }

    // public function getRawtotal(){
    //     $id=Mage::getSingleton('core/session')->get('quote_id');
    //     $cart=Mage::getModel('sales/quote_item')->getcollection()->addFieldToFilter('quote_id',$id);
    //     foreach($cart->getData() as $_cart){
    //         $this->_data[]=$_cart;
    //     }
    //     return $this->_data;
    // }

    public function getGrandtotal(){
        $id=Mage::getSingleton('core/session')->get('quote_id');
        $cart=Mage::getModel('sales/quote')->getcollection()->addFieldToFilter('quote_id',$id);
        foreach($cart->getData() as $_cart){
            $this->_grandtotal=$_cart->getGrandTotal();
        }
        return $this->_grandtotal;
    }
}