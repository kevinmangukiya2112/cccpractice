<?php

include "Lib/autoload.php";

class Ccc{
	public function init(){
        // $dir="/phppractice";
        // $request=$_SERVER['REQUEST_URI'];
		// echo str_replace($dir,"",$request);
		$FrontController=new Controller_front();
		$FrontController->init();
		// $FrontController->classname();
	}
}
$ccc_obj=new Ccc();
$ccc_obj->init();



// $request = new Model_Request();

// if(!$request->isPost()) {
// 	$product = new View_Product();
// 	echo $product->toHtml();
// } else {
// 	$product = new Model_Product();
// 	$product->save($request->getParams('pdata'));
// 	// print_r();
// }