<?php
 class Page_Controller_Index extends Core_Controller_Front_Action
 {
    public function indexAction(){
        // echo dirname(__FILE__);
        $layout=$this->getLayout();
        $child=$layout->getChild('content');
        $layout->getChild("head")->addJs("/skin/js/banner/carousel.js");
        $layout->getChild("head")->addCss("/skin/css/banner/carousel.css");
        $banner=$layout->createBlock('banner/banner')
            ->setTemplate('banner/view.phtml');
        $child->addChild('banner',$banner);
        $layout->toHtml();
    }
    
}