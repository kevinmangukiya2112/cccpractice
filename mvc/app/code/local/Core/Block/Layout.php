<?php
class Core_Block_Layout extends Core_Block_Template{
    public function __construct(){
        $this->setTemplate('core/1column.phtml');
        $this->prepareChildren();
    }

    public function prepareChildren(){
        $header=$this->createBlock('page/header');
        $this->addChild('header',$header);

        $footer=$this->createBlock('page/footer');
        $this->addChild('footer',$footer);

        $content=$this->createBlock('page/content');
        $this->addChild('content',$content);

        $head=$this->createBlock('page/head');
        $this->addChild('head',$head);

        $home=$this->createBlock('page/home');
        $this->addChild('home',$home);
    }

    public function createBlock($className){
        return Mage::getBlock($className);
              // ->setlayout($this);
    }
   
}