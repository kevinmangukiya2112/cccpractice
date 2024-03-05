<?php

class Page_Block_Admin_Head extends Core_Block_Template{

    protected $_css=[];
    protected $_js=[];
    public function __construct(){
        $this->setTemplate("admin/head.phtml");
    }
    public function addJs($file){
        $this->_js[]=$file;
     }
 
     public function addCss($file){
         $this->_css[]=$file;
     }
 
     public function getJs(){  
         return $this->_js;
     }
 
     public function getcss(){
         return $this->_css;
     }
}