<?php
$num=7;
function prime($number){
    for($i=2;$i<$number;$i++){
        $flag = 0;
        if($number==1 || $number==2){
            $flag=0;  
        }elseif($number%$i==0){
            $flag=1;
        }
    }if($flag==0){
        echo "number is prime ";
    }else{
        echo"number is not prime";
    }
}
prime($num);

?>