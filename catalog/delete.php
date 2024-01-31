<?php
include("./sqlfunctions.php");
include("./connection.php");
$obj=new queryfunctions();
$obj1=new queryexecution();
$data=$_GET['id'];
$sql=$obj->delete('ccc_practice',['id'=>$data]);
$scl=$obj1->query($conn,$sql);
if($scl===true){
    echo "data deleted successfully";
}
?>