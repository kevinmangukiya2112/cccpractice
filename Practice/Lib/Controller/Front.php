<?php
class Controller_Front{
        public function init(){
            $requst_model=new Model_request(); 
            $uri = $requst_model->getRequestUri();
            $classname = "View_";
            $classname .= str_replace("/","_",$uri);
            $obj = new $classname;
            $obj->toHtml();
        }
}

?>