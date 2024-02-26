<?php

class Core_Controller_front{
    public function init(){
        $request=Mage::getModel("core/request");
        $actionName=$request->getActionName() .'Action';
        $fullclassName=$request->getFullControllerClass();
        $controller=new $fullclassName();
        $controller->$actionName();
        // print_r ($controller);
    }
}