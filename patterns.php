<?php
// $n=10;
// for($i=$n;$i>=1;$i--){
//     for($j=1;$j<=$n;$j++){
//         if($j<=$i){
//             echo $j;
//         }
//     }echo"<br>";
// }

// $a=10;
// for($i=1; $i<=$a; $i++){
//     for($j=1;$j<=$a; $j++){
//         if($j<=($a+1)-$i){
//             echo $j;
//         }
//     }
//     echo "<br>";
// }
$a=10;
$k=0;
for($i=1; $i<=$a; $i++){ 
    print_r(str_repeat("&nbsp;",$k)); 
    for($j=1;$j<=$a; $j++){
        if($j<=($a+1)-$i && $j>=($a-10)+$i){
            echo $j;
        }    
    }
    $k+=2;
    echo "<br>";
}

?>