<?php
include("./sql_functions.php");
include("./connection.php");
$data=$_POST['nam'];
$sql=delete('ccc_practice',$data);
?>