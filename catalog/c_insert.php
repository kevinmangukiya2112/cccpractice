<?php
include ('functions.php');
$cdata=$_POST['category'];
$obj=new func();
$sql=$obj-> insert('ccc_category',$cdata);
$obj=new query_execute();
$result=$obj->query($sql);
if ($result== TRUE) {
  return header("Location: category_list.php");                                                                               
} else {
  return header('error');
} 
//mysqli_close( $conn);
?>