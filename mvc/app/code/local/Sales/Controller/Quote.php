<?php 

class Sales_Controller_Quote extends Core_Controller_Front_Action{

    public function addAction(){
        $data=$this->getRequest()->getParams("qdata");
        Mage::getSingleton("sales/quote")->addProduct($data);
        $this->setRedirect("sales/quote/view");
    }

    public function viewAction(){
        $layout=$this->getLayout();
        $child=$layout->getChild("content");
        $cartView=$layout->createBlock("sales/cart_view")->setTemplate("cart/view.phtml");
        $child->addChild('cart',$cartView);
        $layout->toHtml();
    }

    public function checkoutAction(){
        $customerid=Mage::getSingleton('core/session')->get('customer_id');
        if(!$customerid){
            $this->setRedirect('customer/account/login');
        }
        else{
        $layout=$this->getLayout();
        $child=$layout->getChild("content");
        $layout->getChild('head')->addCss('skin/css/product/form.css');
        $layout->getChild('head')->addJs('skin/js/addressduplicate.js');
        $checkout=$layout->createBlock("sales/cart_checkout")->setTemplate("cart/checkout.phtml");
        $child->addChild('checkout',$checkout);
        $layout->toHtml();
        }
    }

    public function addresssaveAction(){
        $data=$this->getRequest()->getParams('add');
        Mage::getSingleton("sales/quote_address")->setData($data)->save();
        $this->setRedirect("sales/quote/shippingmethod");
    }

    public function shippingmethodAction(){
        $layout=$this->getLayout();
        $child=$layout->getChild("content");
        $layout->getChild('head')->addCss('skin/css/shippingmethod/shippingmethod.css');
        $layout->getChild('head')->addJs('skin/js/shippingmethod.js');
        $shippingmethod=$layout->createBlock("sales/cart_shippingmethod")->setTemplate("cart/shippingmethod.phtml");
        $child->addChild('shippingmethod',$shippingmethod);
        $layout->toHtml();
    }

    public function savemethodsAction(){
        $shippingmethod=$this->getRequest()->getParams('sdata');
        $paymentmethod=$this->getRequest()->getParams('pdata');
        Mage::getSingleton("sales/quote_methods_shipping")->setData($shippingmethod)->save();
        Mage::getSingleton("sales/quote_methods_payment")->setData($paymentmethod)->save();
        $this->setRedirect("page/index/index");
    }

    public function orderviewAction(){
        $customerid=Mage::getSingleton('core/session')->get('customer_id');
        if(!$customerid){
            $this->setRedirect('customer/account/login');
        }
        else{
        $layout=$this->getLayout();
        $child=$layout->getChild("content");
        $orderview=$layout->createBlock("sales/cart_orderview")->setTemplate("cart/orderview.phtml");
        $child->addChild('orderview',$orderview);
        $layout->toHtml();
    }
    }

    

}
