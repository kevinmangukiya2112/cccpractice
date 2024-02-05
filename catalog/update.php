<?php

include ('functions.php');

$pdata=$_POST['product'];

$id=$_GET['id'];

$obj=new func();
if($id==0){
$sql=$obj->insert('ccc_practice',$pdata);
$obj2=new query_execute();
$result=$obj2->query($sql);
}
else{
$sql=$obj->update('ccc_practice',$pdata,['id'=>$id]);
$obj2=new query_execute();
$result=$obj2->query($sql);
}
if ($result== TRUE) {
  return header("Location: product_list.php");                                                                               
} else {
  return header('error');
} 
?>