<?php
include("./connection.php");
include("./sqlfunctions.php");
$data=$_POST['nam'];
// print_r($data);
$sql=insert('ccc_category',$data);
// print_r($sql);
if($conn->query($sql)==true){
     echo "Category Name Entered Successfully";
    }
?>