<?php 

class Sales_Controller_Quote extends Core_Controller_Front_Action{

    public function addAction(){
        $id=$this->getRequest()->getParams("id");
        $name=$this->getRequest()->getParams("quntity");
        print_r($id);
        echo "<br>";
        print_r($name);
    }
}