<?php
$n=5;
function factorial($num){
    $sum=1;
    for($i=1;$i<=$num;$i++){
       $sum=$sum*$i;
    }
    echo $sum;
}
factorial($n)
?>