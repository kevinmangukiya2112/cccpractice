<?php 

class Admin_Controller_Order_Orderview extends Core_Controller_Admin_Action{

    protected $_allowActions=[
        'orderview'
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
        }
    }
    public function orderviewAction(){
        $layout=$this->getLayout();
        $child=$layout->getChild('content');
        $layout->getChild('head')->addCss('skin/css/cart/orderplaced.css');
        $vieworders=$layout->createBlock('admin/order_orderview');
        $child->addChild('vieworder',$vieworders);
        $layout->toHtml();
    }

    public function updateAction(){
        $layout=$this->getLayout();
        $child=$layout->getChild('content');
        $layout->getChild('head')->addCss('/skin/css/product/form.css');
        $updateform=$layout->createBlock('sales/admin_orderupdate');
        $child->addChild('form',$updateform);
        $layout->toHtml();
    }

    public function saveAction(){
        $data=$this->getRequest()->getParams('data');
        $productmodel=Mage::getModel("sales/order");
        $productmodel->setData($data)->save();
        $this->setRedirect('admin/order_orderview/orderview');
    }
}