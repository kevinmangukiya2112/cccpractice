<?php
class Core_Block_Abstract {
    public function setTemplate($template){

    }

    public function getTemplate(){

    }

    public function __get($key){

    }

    public function __unset($key){

    }

    public function __set($key, $value){

    }

    public function addData($key, $value){

    }

    public function getData($key=null){

    }

    public function setData($data){

    }

    public function getUrl($action = null, $controller = null, $params = [], $resetParams = false){

    }

    public function getRequest(){
      return Mage::getmodel('core/request');
    }

    public function render(){
        // echo Mage::getBaseDir('app');
        // echo $this->getTemplate();
        include Mage::getBaseDir('app').'/design/frontend/template/' .$this->getTemplate();

        //C:\xampp\htdocs\phppractice\mvc\app\design\frontend\tempalte\core/1column.phtml
    }
}
?>