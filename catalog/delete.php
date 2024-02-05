<?php

include ('functions.php');

$id=$_GET['id'];

$obj=new func();
$sql=$obj->delete('ccc_practice',['id'=>$id]);
$obj2=new query_execute();
$result=$obj2->query($sql);
if ($result== TRUE) {
  return header("Location: product_list.php");                                                                               
} else {
  return header('error');
} 
//mysqli_close( $conn);
?>