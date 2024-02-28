<?php
 class Page_Controller_Index extends Core_Controller_Front_Action
 {
    public function indexAction(){
        // echo dirname(__FILE__);
        $layout=$this->getLayout();
        $child=$layout->getChild('content');
        $banner=$layout->createBlock('core/template')
            ->setTemplate('banner/banner.phtml');
        $child->addChild('banner',$banner);
        $layout->toHtml();
        echo Mage::getSingleton('core/session')->get('abc');
    }

    public function testAction(){
        echo"<pre>";
        $prodcutModel=Mage::getSingleton('core/session')->set('abc','ke');
        print_r($_SESSION);
        // $prodcutModel=Mage::getSingleton('catalog/product');
        // print_r($prodcutModel);
        die;

    }
 }