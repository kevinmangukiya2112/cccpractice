<?php
// for loop 
for ($i=1;$i<=5;$i++){
    echo "kevin <br>";
}

// while loop
$i=1;
while($i<=5){
    echo "kevin mangukiya <br>";
    $i++;
}

// do while 
$i=1;
do{
    echo "kevin <br>";
    $i++;
}while($i<=5);

// for each loop 
$name=array("kevin","sureshbhai","mangukiya");
foreach($name as $names){
    echo $names ."<br>";
}
?>