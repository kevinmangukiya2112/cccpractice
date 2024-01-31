<?php
$num=10;
function fibonacci($next){
    $first=0;
    $second=1;
    echo $first ," ",$second ," ";
    for($i=3;$i<=$next;$i++){
        for($j=3;$j<=$next;$j++){
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