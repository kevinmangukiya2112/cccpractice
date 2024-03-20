<?php 

class Customer_Controller_Account extends Core_Controller_Front_Action{

    protected $_loginActionRequired=[
        'dashborad'
    ];

    public function __construct(){
        $this->init() ;
    }
    public function init(){
        $action=$this->getRequest()->getActionName();
        if(in_array($action,$this->_loginActionRequired)){
            $customerid=Mage::getSingleton('core/session')->get('customer_id');
            if(!$customerid){
                $this->setRedirect('customer/account/login');
            }
            else{
                $this->setRedirect('customer/account/dashboard');
            }
        }
    }
    public function loginAction(){
        $customerid=Mage::getSingleton('core/session')->get('customer_id');
        if($customerid){
            $this->setRedirect('customer/account/dashboard');
        }
        else{
        if($this->getRequest()->isPost()){
            $data=$this->getRequest()->getParams('cdata');
            $credentials=Mage::getSingleton('customer/customer')->getCollection()->addFieldToFilter('customer_email',$data['email'])->addFieldToFilter('password',$data['password'])
            ;
            $result=null;
            $customer_id=0;
            foreach($credentials->getData() as $data){
                $result=$data;
                $customer_id=$data->getId();
            }
            // print_r($result);
            if($result){
                Mage::getSingleton('core/session')->set('customer_id',$customer_id);
                $this->setRedirect('customer/account/dashboard');
            }
            else{
                echo "Wrong Credentials";
            }
        }
        else{
        $layout=$this->getlayout();
        $child=$layout->getChild("content");
        $layout->removeChild('header');
        $layout->removeChild('footer');
        $layout->getChild('head')->addCss('/skin/css/product/form.css');
        $loginform=$layout->createBlock("customer/login")->setTemplate("customer/login.phtml");
        $child->addChild("form",$loginform);
        $layout->toHtml();
        }
    }
    }

    public function registerAction(){
        $layout=$this->getlayout();
        $child=$layout->getChild("content");
        $layout->removeChild('header');
        $layout->removeChild('footer');
        $layout->getChild('head')->addCss('/skin/css/product/form.css');
        $registerform=$layout->createBlock("customer/register")->setTemplate("customer/register.phtml");
        $child->addChild("form",$registerform);
        $layout->toHtml();
    }

    public function saveAction(){
        $data=$this->getRequest()->getParams("cdata");
        $cdata=Mage::getModel("customer/customer");
        $cdata->setData($data)->save(); 
    }

    public function deleteAction(){
        $id = $this->getRequest()->getParams('id',0);
        Mage::getModel('customer/customer')->load($id)
            ->delete();
    }

    public function dashboardAction(){
        $customer_id=Mage::getSingleton('core/session')->get('customer_id');
        if($customer_id){
        Mage::getModel('customer/customer')->load($customer_id);
        $layout=$this->getLayout();
        $child=$layout->getChild("content");
        $customerlist=$layout->createBlock("customer/dashboard")->setTemplate("customer/dashboard.phtml");
        $child->addChild("list",$customerlist);
        // $layout->removeChild("header");  
        $layout->toHtml();
        }
        else{
            echo "you are not allowed to view this page";
        }
    }

    public function logoutAction(){
        Mage::getSingleton("core/session")->remove("customer_id");
        Mage::getSingleton("core/session")->remove("quote_id");
        $this->setRedirect("page/index/index");
    }

    public function orderviewAction(){
        $layout=$this->getLayout();
        $child=$layout->getChild("content");
        $layout->getChild('head')->addCss('skin/css/cart/orderplaced.css');
        $orderview=$layout->createBlock("customer/orderview")->setTemplate("customer/orderview.phtml");
        $child->addChild('orderview',$orderview);
        $layout->toHtml();
    }
}