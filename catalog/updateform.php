<?php
include("./sqlfunctions.php");
include("./connection.php");
$obj=new queryfunctions();
$obj1=new queryexecution();
$data=$_POST['nam'];
$idurl=$_GET['id'];
$sql=$obj->update('ccc_practice',$data,['id'=>$idurl]);
// print_r($data);
// print_r($idurl);
$scl=$obj1->query($conn,$sql);
if($scl===true){
    echo "data updated successfully";
}
?>