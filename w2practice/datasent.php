<?php
include("./connection.php");
include("./sql_functions.php");
$obj=new queryfunctions();
$data=$_POST['nam'];
print_r($data);
$sql=$obj->insert('ccc_practice',$data);
print_r($sql);

if($conn->query($sql) === true){
    header("Location:display.php");
}
?>