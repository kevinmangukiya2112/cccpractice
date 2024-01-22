<?php
$num=10;
function fibonacci($next){
    $first=0;
    $second=1;
    echo $first ," ",$second ," ";
    for($i=2;$i<=$next;$i++){
        for($j=2;$j<=$next-1;$j++){
            $i=$first+$second;
            echo $i ," ";
            $first=$second;
            $second=$i;
            $i=$i+1;
        }
    }
}
fibonacci($num);

?>