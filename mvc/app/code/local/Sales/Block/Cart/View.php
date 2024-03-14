<?php 
 
class Sales_Block_Cart_View extends Core_Block_Template{

    public function __construct(){
    }

    public function getProductCollection(){
        return Mage::getModel('sales/cart_view')->getProductCollection();
    }

    public function getProductitem(){
        return Mage::getModel('sales/cart_view')->getProductitem();
    }

    public function getGrandtotal(){
        return Mage::getModel('sales/cart_view')->getGrandtotal();
    }

}
?>