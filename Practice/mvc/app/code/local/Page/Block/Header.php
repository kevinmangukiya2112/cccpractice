<?php
class Page_Block_Header extends Core_Block_Template{

        protected $_form=[];
        public function __construct(){
            $this->setTemplate('page/header.phtml');
        }

        public function addForm($file){
            $this->_form[]=$file;
         }
        public function getForm(){  
        return $this->_form;
        }
}
?>