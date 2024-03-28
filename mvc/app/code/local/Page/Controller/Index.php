<?php
 class Page_Controller_Index extends Core_Controller_Front_Action
 {
    public function indexAction(){
        // echo dirname(__FILE__);
        $layout=$this->getLayout();
        $child=$layout->getChild('content');
        $banner=$layout->createBlock('banner/banner')
            ->setTemplate('banner/view.phtml');
        $child->addChild('banner',$banner);
        $layout->toHtml();
    }
    
}