<?php
 class Mage{
       public static function init(){
        // $requst_model=new Core_Model_Request(); 
        // $uri = $requst_model->getRequestUri();
        // echo $uri;
        $requestModel=Mage::getmodel("core/request");
        echo get_class($requestModel);
        }

       public static function getmodel($modelname){
        $str="Model";
        $modelname=explode("/",$modelname);
        $classname=ucfirst($modelname[0])."_".($str)."_".ucfirst($modelname[1]);
        return new $classname();
       }

       public static function getSingleton(){

       }
       public static function register($key, $value) {

       }

       public static function registry($key){

       }

       public static function getBaseDir($subDir = null){
            
       }
}

?>