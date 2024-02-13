<?php
 class Page_Controller_Index extends Core_Controller_Front_Action
 {
    public function indexAction(){
        // echo dirname(__FILE__);
        $this->getLayout()->toHtml();

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