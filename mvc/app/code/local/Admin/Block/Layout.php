<?php
class Admin_Block_Layout extends Core_Block_Template{
    public function __construct(){
        $this->setTemplate('core/admin.pht+ml');
        $this->prepareChildren();
    }

    public function prepareChildren(){
        $header=$this->createBlock('page/admin_header');
        $this->addChild('header',$header);

        $footer=$this->createBlock('page/admin_footer');
        $this->addChild('footer',$footer);

        $content=$this->createBlock('page/admin_content');
        $this->addChild('content',$content);

        $head=$this->createBlock('page/admin_head');
        $this->addChild('head',$head);
    }

    public function createBlock($className){
        return Mage::getBlock($className);
              // ->setlayout($this);
    }
   
}