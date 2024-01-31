<?php
include("./connection.php");
include("./sqlfunctions.php");
$obj=new queryfunctions();
$obj1=new queryexecution();
$data=$_POST['nam'];
// print_r($data);
$sql=$obj->insert('ccc_category',$data);
// print_r($sql);
$scl=$obj1->query($conn,$sql);
if($scl==true){
     echo "Category Name Entered Successfully";
    }
?>