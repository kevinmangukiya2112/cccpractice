<?php

class Core_Controller_Front_Action{

    protected $_layout=null;
    public function __construct(){
        Mage::getSingleton("core/session");
        $this->init();
    }

    public function init(){
        
    }
    public function getLayout(){
        if(is_null($this->_layout)){
        return $this->_layout= Mage::getBlock('core/layout');
    }
    return $this->_layout;
    }

    public function getRequest(){
        return Mage::getModel('core/request');
    }

    public function setRedirect($url){
        $url=Mage::getBaseUrl().$url;
        header("location:". $url);
    }
}