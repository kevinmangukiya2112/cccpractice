<?php 

class Customer_Controller_Account_Customer extends Core_Controller_Front_Action{
    public function loginAction(){
        if($this->getRequest()->isPost()){
            $data=$this->getRequest()->getParams('cdata');
            $credentials=Mage::getSingleton('customer/customer')->getCollection()->addFieldToFilter('customer_email',$data['email'])->addFieldToFilter('password',$data['password'])
            ;
            echo "<pre>";
            // print_r($credentials);
            // print_r($data);
            // die;
            $result=null;
            $customer_id=0;
            foreach($credentials->getData() as $data){
                $result=$data;
                $customer_id=$data->getId();
            }
            // print_r($result);
            if($result){
                Mage::getSingleton('core/session')->set('customer_id',$customer_id);
                echo "login successfull";
                header("location:dashboard");
            }
            else{
                echo "Wrong Credentials";
            }
        }
        else{
        $layout=$this->getlayout();
        $child=$layout->getChild("content");
        $layout->getChild('head')->addCss('/skin/css/product/form.css');
        $loginform=$layout->createBlock("customer/login")->setTemplate("customer/login.phtml");
        $child->addChild("form",$loginform);
        $layout->toHtml();
        }
    }

    public function registerAction(){
        $layout=$this->getlayout();
        $child=$layout->getChild("content");
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
        $layout->toHtml();
        }
        else{
            echo "you are not allowed to view this page";
        }
    }

    public function forgotpasswordAction(){
        if($this->getRequest()->isPost()){
            $data=$this->getRequest()->getParams('cdata');
            print_r($data['password']);
            $customer=Mage::getSingleton("customer/customer")->getCollection()->addFieldToFilter('customer_email',$data['email']);
            if($customer){
                echo "password updated successfull";
            }
        }
        else{
        $layout=$this->getLayout();
        $child=$layout->getChild("content");
        $forgotpassword=$layout->createBlock("customer/forgotpassword")->setTemplate("customer/forgotpassword.phtml");
        $child->addChild("forgotpassword",$forgotpassword);
        $layout->toHtml();
        }
        
    }
}