<?php 

class Sales_Controller_Quote extends Core_Controller_Front_Action{

    public function addAction(){
        $data=$this->getRequest()->getParams("qdata");
        // print_r($data);
        Mage::getSingleton("sales/quote")->addProduct($data);
    }
}