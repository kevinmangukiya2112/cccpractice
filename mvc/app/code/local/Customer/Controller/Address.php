<?php 

class Customer_Controller_Address extends Core_Controller_Front_Action{

    public function formAction(){
        $layout=$this->getLayout();
        $child=$layout->getChild("content");
        $layout->getChild('head')->addCss('skin/css/product/form.css');
        $form=$layout->createBlock("customer/address_form")
        //->setTemplate("customer/address/form.phtml")
        ;
        $child->addChild("form",$form);
        $layout->toHtml();
    }

    public function saveAction(){
        if($this->getRequest()->isPost()){
            $_data=$this->getRequest()->getParams('add');
            Mage::getModel("customer/address")->setData($_data)->save();
            $this->setRedirect("sales/quote/checkout");
        }
    }
}

?>