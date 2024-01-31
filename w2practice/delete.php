<?php
include("./sql_functions.php");
include("./connection.php");
$obj=new queryfunctions();
$data=$_GET['id'];
$sql=$obj->delete('ccc_practice',['id'=>$data]);
$scl=$conn->query($sql);
if($scl===true){
    echo "data deleted successfully";
}
?>