<?php
// 1.array creation and initialization
// $arr1 =array("kevin",12,23);
// $arr2 =["kevin",12,23];

// // array  merge function  --> merge two array
// print_r(array_merge($arr1,$arr1));
// echo "<br>";

// // array combine --> combine two array one as a key and one as a value 
// print_r(array_combine($arr1,$arr2));
// echo"<br>";

// //range function --> create a array containing a range of elements
// $rangearrr=range(0,5);  // --> print within range
// print_r($rangearrr);
// echo"<br>";

// $rangarr=range(0,50,10); // --> print within range with given difference of each element
// print_r($rangarr);
// echo "<br>";

// // array modification
// // array push function
// print_r(array_push($arr1,"kevin"));
// echo "<br>";
// print_r($arr1);
// echo"<br>";

// // array pop function --> return pop value
// print_r(array_pop($arr1));
// echo"<br>";

// // array unshift -->add one or more element at the start of the array
// print_r(array_unshift($arr1,12));
// echo"<br>";
// print_r($arr1);
// echo"<br>";

// // array shift --> remove the first element of array and return the removed element 
// print_r(array_shift($arr1)); 
// echo"<br>";

// // array splice --> remove the portion of array and replace it with something else 
// print_r(array_splice($arr1,1,2,$arr2));
// echo"<br>";
// print_r($arr1);
// echo"<br>";

// // array slice --> slice the array by given range 
// print_r(array_slice($arr1,1,2));
// echo"<br>";

// array access 

// $arc1=array("kevin","mangukiya","GEC","Bhavnagar");

// // count --> count the number of element in array
// print_r(count($arc1));
// echo"<br>";

// // sixeof --> return the size of array 
// print_r(sizeof($arc1));
// echo"<br>";

// // array key exist -->check the key if that exist
// $keyex=array("1"=>"kevin","2"=>"mangukiya"); 
// if(array_key_exists(1,$arc1)){
//     echo"key exist";
// }else{
//     echo"key doesn't exist";
// }
// echo"<br>";

// // array keys --> returns all keys 
// print_r(array_keys($arc1)); // print all keys 
// print_r(array_keys($arc1,"mangukiya")); // print only key of mangukiya value 
// echo"<br>";

// // array values --> return all the values 
// print_r(array_values($arc1));
// echo"<br>";

// // array search 

// // in_array --> check if value exist in array
// if (in_array("kevin", $arc1))
//   {
//   echo "Match found <br>";
//   }
// else
//   {
//   echo "Match not found <br>";
//   }

// // array_search --> search value of array 
// if (array_search("mangukiya", $arc1))
//   {
//   echo "Match found <br>";
//   }
// else
//   {
//   echo "Match not found <br>";
//   }

// // array_reverse --> reverse the array
// print_r(array_reverse($arc1));

// // array sorting 
// $sarr1=array(1,3,2,4);

// // sort --> sort an array
// print_r(sort($sarr1));
// echo"<br>";
// print_r($sarr1);
// echo"<br>";

// // rsort --> sort array in reverse order 
// print_r(rsort($sarr1));
// echo"<br>";
// print_r($sarr1);
// echo"<br>";

// // asort --> sort an assosiative array by values 
// asort($arc1);
// print_r($arc1);
// echo"<br>";

// // ksort --> sort an assosiative array by keys 
// ksort($arc1);
// print_r($arc1);
// echo"<br>";

// // arsort --> sort an assosiative array in reverse order by value 
// arsort($arc1);
// print_r($arc1);
// echo"<br>";

// // krsort --> sort and assosiative array in reverse order by keys 
// krsort($arc1);
// print_r($arc1);
// echo"<br>";

// array filtering 
// function Even($array) 
// { 
//     // returns if the input integer is even 
//     if($array%2==0) 
//        return TRUE; 
//     else 
//        return FALSE;  
// } 
  
// $array = array(12, 0, 0, 18, 27, 0, 46); 
// print_r(array_filter($array, "Even"));  // --> with callback
// echo"<br>";

// function Even($array) 
// { 
//     // returns if the input integer is even 
//     if($array%2==0) 
//        return TRUE; 
//     else 
//        return FALSE;  
// } 
  
// $array = array(12, 0, 0, 18, 27, 0, 46); 
// print_r(array_filter($array));     // wiothout callback it will also filter 0 with false 
// echo"<br>";

// // array map 
// function maping($num) 
// { 
//     return($num*$num); 
// } 
  
// $array = array(12, 0, 0, 18, 27, 0, 46); 
// print_r(array_map("maping",$array)); 

// // array reduce 
// function myfunction($v1,$v2)
// {
// return $v1+$v2;
// }
// $a=array(10,15,20);
// print_r(array_reduce($a,"myfunction"));  // without initiate 

// function myfunction($v1,$v2)
// {
// return $v1+$v2;
// }
// $a=array(10,15,20);
// print_r(array_reduce($a,"myfunction",5)); // with initiate

// The array_merge_recursive() function merges one or more arrays into one array. --> The difference between this function and the array_merge() function is when two or more array elements have the same key. Instead of override the keys, the array_merge_recursive() function makes the value as an array.

$a1=array(1=>"kevin","hello"=>"sureshbhai",2=>"mangukiya");
$a2=array(3=>"ksm","hello"=>"sureshbhai",4=>"mks");
print_r(array_merge_recursive($a1,$a2));

?>