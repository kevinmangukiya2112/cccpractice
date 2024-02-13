<?php
class Core_Block_Template extends Core_Block_Abstract{
    public $_template;
    public function toHtml(){
        $this->render();
    }
    public function addChild($key, $value){

    }
    public function removeChild($key){

    }

    public function getChild($key){
        
    }

    public function setTemplate($template){
        $this->_template = $template;
    }

    public function getTemplate(){
        return $this->_template;
    }
}
?>