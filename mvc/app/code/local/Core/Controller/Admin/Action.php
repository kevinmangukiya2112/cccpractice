<?php 

class Core_Controller_Admin_Action extends Core_Controller_Front_Action{
    protected $_allowActions=[];
    protected $_layout=null;
    public function init(){
        if($this->getRequest()->getmoduleName()== "admin" && !in_array($this->getRequest()->getActionName(), $this->_allowActions)){
            $admin=Mage::getSingleton("core/session")->get("admin_username");
        if(!$admin){
            $this->setRedirect("admin/account/login");
        }
        }
    }
    public function getLayout(){
        if(is_null($this->_layout)){
            
        return $this->_layout= Mage::getBlock('admin/layout');
    }
    return $this->_layout;
    }
}