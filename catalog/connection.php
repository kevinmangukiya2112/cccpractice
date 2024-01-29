<?php
$conn=mysqli_connect("localhost","root","","ccc_practice");
// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
?>