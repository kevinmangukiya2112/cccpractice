<?php
include("./sqlfunctions.php");
include("./connection.php");
$data=$_GET['id'];
$sql=delete('ccc_practice',['id'=>$data]);
$scl=$conn->query($sql);
if($scl===true){
    echo "data deleted successfully";
}
?>