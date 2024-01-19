<?php
   
    function percent($a){
        $c=100+$a;
        $d=(($c-100)/$c)*100;
        return $d;
    }
    $a=$_GET['higherpercent'];
    //$a=readline('enter higher percent');
    $b=(int) $a;
    print_r(percent($b));
?>

