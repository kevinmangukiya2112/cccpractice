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
        unset($this->_child[$key]);
        return $this;
    }

    public function getChild($key){
        return $this->_child[$key];
    }

    public function setTemplate($template){
        $this->_template = $template;
        return $this;
    }

    public function getTemplate(){
        return $this->_template;
    }

    public function getChildHtml($key){
        $html='';
        if($key=='' && count($this->_child)){
            foreach($this->_child as $_child){
                $html.= $_child->toHtml();
        }
    }
        else{
        if(isset($this->_child[$key])){
            $html=$this->_child[$key]->toHtml();
        }
    }
    return $html;
    }

    public function getUrl($path){
        return $this->getRequest()->getUrl($path);
    }

}
?>