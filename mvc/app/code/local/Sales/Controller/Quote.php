<?php 

class Sales_Controller_Quote extends Core_Controller_Front_Action{

    protected $_loginActionRequired=[
        'checkout',
        'orderview',
        'view'
    ];

    public function init(){
        $action=$this->getRequest()->getActionName();
        if(in_array($action,$this->_loginActionRequired)){
            $customerid=Mage::getSingleton('core/session')->get('customer_id');
            if(!$customerid){
                $this->setRedirect('customer/account/login');
            }
        }
    }

    public function addAction(){
        $data=$this->getRequest()->getParams("qdata");
        Mage::getSingleton("sales/quote")->addProduct($data);
        $this->setRedirect("sales/quote/view");
    }

    public function saveItemAction()
    {
        $postData = $this->getRequest()->getParams();
        $QuoteModel = Mage::getModel('sales/quote_item');
        $QuoteModel->setData($postData)->save();
        $this->updateAction();
    }
    public function updateAction()
    {
        $postData = $this->getRequest()->getParams();
        Mage::getSingleton('sales/quote')->updateProduct($postData);
    }

    public function viewAction(){
        $layout=$this->getLayout();
        $child=$layout->getChild("content");
        $layout->getChild("head")->addCss('skin/css/cart/view.css');
        $cartView=$layout->createBlock("sales/cart_view")->setTemplate("cart/view.phtml");
        $child->addChild('cart',$cartView);
        $layout->toHtml();
    }

    public function deleteAction(){
        $id = $this->getRequest()->getParams('id',0);
        Mage::getModel('sales/quote_item')->load($id)->delete();
        $this->updateAction();
        $this->setRedirect('sales/quote/view');
    }

    public function checkoutAction(){
        $layout=$this->getLayout();
        $child=$layout->getChild("content");
        $layout->getChild('head')->addCss('skin/css/product/form.css');
        $layout->getChild('head')->addJs('skin/js/addressduplicate.js');
        $checkout=$layout->createBlock("sales/cart_checkout")->setTemplate("cart/checkout.phtml");
        $child->addChild('checkout',$checkout);
        $layout->toHtml();
    }

    public function addresssaveAction(){
        $data=$this->getRequest()->getParams('add');
        Mage::getSingleton("sales/quote")->addcustomerorderadd($data);
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
        Mage::getSingleton("sales/quote")->addShippingData($shippingmethod);
        Mage::getSingleton("sales/quote")->addPaymentData($paymentmethod)->convert();
        $this->setRedirect("sales/quote/orderplaced");
    }

    public function orderplacedAction(){
        $layout=$this->getLayout();
        $child=$layout->getChild('content');
        $layout->removeChild('header');
        $layout->removeChild('footer');
        $layout->getChild('head')->addCss('skin/css/cart/orderplaced.css');
        $orderplaced=$layout->createBlock('sales/orderplaced');
        $child->addChild('orderplaced',$orderplaced);
        $layout->toHtml();
    }

    public function cancelorderAction(){
        $data=$this->getRequest()->getParams('id');
        Mage::getSingleton('sales/quote')->cancelorder($data);
        $this->setRedirect("customer/account/orderview");
    }

}
