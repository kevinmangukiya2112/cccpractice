<?php
class Core_Block_Template extends Core_Block_Abstract{
    public $_template;
    protected $_child=[];
    public function toHtml(){
        $this->render();
    }
    public function addChild($key, $value){
        $this->_child[$key]=$value;
    }
    public function removeChild($key){

    }

    
    public function getChild($key){
        return $this->_child[$key];
    }

    public function setTemplate($template){
        $this->_template = $template;
    }

    public function getTemplate(){
        return $this->_template;
    }

    public function getChildHtml($key){
        return $this->_child[$key]->toHtml();
    }
}
?>