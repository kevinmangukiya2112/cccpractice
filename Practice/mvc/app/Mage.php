<?php
 class Mage{
      private static $baseDir="C:/xampp/htdocs/phppractice/Practice/mvc";
       public static function init(){
        // $requst_model=new Core_Model_Request(); 
        // $uri = $requst_model->getRequestUri();
        // echo $uri;
        // $requestModel=Mage::getmodel("core/request");
        // echo get_class($requestModel);
          $frontController=new Core_Controller_front();
          $frontController->init();
        }

     //   public static function getmodel($modelname){
     //    $str="Model";
     //    $modelname=explode("/",$modelname);
     //    $classname=ucfirst($modelname[0])."_".($str)."_".ucfirst($modelname[1]);
     //    return new $classname();
     //   }

       public static function getmodel($modelname){
          $str="Model";
          $modelname=explode("/",$modelname);
          $classname=ucfirst($modelname[0])."_".($str);
          for ($i= 1;$i<count($modelname);$i++){
          $classname .="_".ucfirst($modelname[$i]);
          }
          return new $classname();
         }

     //   public static function getBlock($blockname){
     //        $str="Block";
     //        $modelname=explode("/",$blockname);
     //        $classname=ucfirst($modelname[0])."_".($str)."_".ucfirst($modelname[1]);
     //        return new $classname();
     //       }

       public static function getBlock($blockname){
            $str="Block";
            $blockname=explode("/",$blockname);
            $classname=ucfirst($blockname[0])."_".($str);
            for($i= 1;$i<count($blockname);$i++){
            $classname .="_".ucfirst($blockname[$i]);
            }
            return new $classname();
           }

       public static function getSingleton(){

       }
       public static function register($key, $value) {

       }

       public static function registry($key){

       }

       public static function getBaseDir($subDir = null){
            if($subDir){
                  return self::$baseDir. "/".$subDir;
            }
            return self::$baseDir;
            
       }
}

?>