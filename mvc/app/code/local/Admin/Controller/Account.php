<?php 

class Admin_Controller_Account extends Core_Controller_Admin_Action{
    protected $_allowActions=[
        "login",
    ];

    public function __construct(){
        $this->init();
    }

    public function init(){
        $action=$this->getRequest()->getActionName();
        if(!in_array($action,$this->_allowActions)){
            $user_name=Mage::getSingleton("core/session")->get("admin_username");
            if(!$user_name){
                $this->setRedirect("admin/account/login");
            }
            else{
                $this->setRedirect("admin/catalog_product/list");
            }
        }
    }

    public function loginAction(){
        if(Mage::getSingleton("core/session")->get("admin_username")){
            $this->setRedirect("admin/catalog_product/list");
        }
        else{
        if($this->getRequest()->isPost()){
            $message=[];
            $admin=$this->getRequest()->getParams('adata');
            if($admin['username']==Admin_Model_User::username && $admin['password']==Admin_Model_User::password){
                Mage::getSingleton('core/session')->set('admin_username',$admin['username']);
                $message=[
                    'type'=>"success",
                    'message'=>"login succesfull"

                ];
            }
            else{
                $message=[
                    'type'=>"error",
                    'message'=>"username password invalid"
                    

                ];
                
            }
            echo json_encode($message);
        }
        else{
            $layout=$this->getLayout();
            // print_r($layout);
            $child=$layout->getChild("content");
            $layout->removeChild('header');
            $layout->removeChild('footer');

            $layout->getChild('head')->addCss('/skin/css/product/form.css');
            $admin=$layout->createBlock('admin/login')->setTemplate('admin/login.phtml');
            $child->addChild('admin', $admin);
            $layout->toHtml();
        }
    }
    }

    public function logoutAction(){
        Mage::getSingleton('core/session')->remove('admin_username');
        $this->setRedirect('admin/account/login');
    }
}