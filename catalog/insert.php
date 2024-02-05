<?php
include ('functions.php');

$pdata=$_POST['product'];

$obj=new func();
$sql=$obj->insert('ccc_practice',$pdata);
$obj2=new query_execute();
$result=$obj2->query($sql);
if($result==true){
  return header("Location: product_list.php");                                                                               
}
else{
  echo "error";
}

?>