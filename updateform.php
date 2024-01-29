<?php
include("./sql_functions.php");
include("./connection.php");
$data=$_POST['nam'];
$idurl=$_GET['id'];
$sql=update('ccc_practice',$data,['id'=>$idurl]);
// print_r($data);
// print_r($idurl);
$scl=$conn->query($sql);
if($scl===true){
    echo "data updated successfully";
}
?>