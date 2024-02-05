<?php
function conn(){
$server="localhost";
$username="root";
$password="";
$database="ccc_practice";

return mysqli_connect($server,$username,$password,$database);
if(!$conn){
    return die("connection failed:".mysqli_connect_error());
}
}
?>
