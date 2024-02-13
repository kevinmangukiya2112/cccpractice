<?php
 class Page_Controller_Index extends Core_Controller_Front_Action
 {
    public function indexAction(){
        // echo dirname(__FILE__);
        $layout=$this->getLayout();
        $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')->addJs('js/head.js');
        $layout->getChild('head')->addCss('css/page.css');
        $layout->getChild('head')->addCss('css/head.css');
        // echo "<pre>";
        // print_r($layout);
        return $layout->toHtml();
        

    }

    public function savAction(){
        echo "save data";
    }

    public function indexList(){
    }

    public function indexSave(){
    }

    public function indexDelete(){
    }
 }