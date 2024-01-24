<?php
include("./connection.php");
include("./sql_functions.php");
$data=$_POST['nam'];
print_r($data);
$sql=insert('ccc_practice',$data);
print_r($sql);

if($conn->query($sql) === true){
    header("Location:display.php");
}
?>