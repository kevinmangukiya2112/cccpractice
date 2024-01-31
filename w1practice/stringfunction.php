<html>
<body>
<?php
    // length of string
    // $x="kevin mangukiya";
    // echo strlen($x);
    // echo strlen("kevin");

    // search and replace word 
    // $replace="hello kevin!";
    // echo str_replace("kevin","mangukiya","hello kevin!");

    // search string and find position of substring 
    // $search="hello kevin mangukiya";
    // echo strpos($search,"kevin");

    // find substring with given specific position and length 
    // $subst="kevin s mangukiya";
    // echo substr($subst,"6","8");

    // convert a string into lower case
    // $lwstr="KEVIN MANGUKIYA";
    // echo strtolower($lwstr);

    // convert a string into upper case 
    // $upstr="kevin mangukiya";
    // echo strtoupper($upstr);

    // remove whitespace or predefine word from both the end
    // $trimex="   kevin mangukiya";
    // print_r ("string without trim::" .$trimex ."<br>");
    // echo trim($trimex,"k ya");
    // echo rtrim($trimex,"ya");
    // echo ltrim($trimex,"ke");

    // join array element as string 
    // $arr=array("kevin","sureshbhai","mangukiya");
    // echo implode(" ",$arr);

    // string to array by speicfic delimeter    ?query for negative delimeter 
    // $strtoar="kevin,s,mangukiya";
    // print_r(explode(",",$strtoar));
    // echo"<br>";
    // print_r(explode(",",$strtoar,2));
    // echo"<br>";
    // print_r(explode(",",$strtoar,-1));

    // converts special characters to html entity        ?query in this part
    // $entityofhtm="kevin <b>s</b> mangukiya";
    // print_r(htmlspecialchars($entityofhtm));

    // convert all applicable character to html entity       ? query in this part 
    // $chartoenty='<p><a href="kevin.php"> hello kevin</a> </p>';
    // print_r(htmlentities($chartoenty));
    // echo $chartoenty;
    // print_r ($chartoenty);

    // repeat string by given number odf times 
    // $repeat="kevin mangukiya";
    // print_r(str_repeat($repeat,"3"));

    // reverse string 
    // $revstr="kevin mangukiya";
    // print_r(strrev($revstr));

    // shuffle string
    // $shustr="kevin mangukiya";
    // print_r(str_shuffle($shustr));
    
    // string to array by splitting 
    // $strsplit="kevin s mangukiya";
    // print_r(str_split($strsplit,"3"));
    // print_r(str_split($strsplit));

    // word count in string 
    // $strwdcount="kevin mangukiya";
    // print_r(str_word_count($strwdcount));

    // replace portion of string by substring and length 
    // $strreplace="kevin mangukiya";
    // print_r(substr_replace($strreplace,"sureshbhai",6,5));

    // padding into the string by giving pading string and type of padding 
    // $padstr="kevin";
    // print_r(str_pad($padstr,15,"sm",STR_PAD_BOTH));
    // echo "<br>";
    // print_r(str_pad($padstr,15,"sm",STR_PAD_RIGHT));
    // echo "<br>";
    // print_r(str_pad($padstr,15,"sm",STR_PAD_LEFT));

    // compare two string 
    // $str1="kevin mangukiya";
    // $str2="kevin s mangukiya";
    // print_r(strcoll($str1,$str2));

    // Finds the length of the initial segment not matching a mask  ?query for upper boundry
    // $strmask="kevin mangukiya";
    // print_r(strcspn($strmask,"m"));
    // echo"<br>";
    // print_r(strcspn($strmask,"m",0,4));
    // echo"<br>";
    // print_r(strcspn($strmask,"m",8,11));

    // case insensitive search    ? query for before needle
    // $insestr="kevin MANGUKIYA";
    // print_r(stristr($insestr,"mangukiya"));

    // convert first character of string into upper case
    // $fustr="kevin mangukiya";
    // print_r(ucfirst($fustr));

    // convert first character of all word to upper case which is in given string 
    // $wfustr="kevin sureshbhai mangukiya from bhavnagar";
    // print_r(ucwords($wfustr));

    // convert first character of stirng into lower case 
    // $flstr="Kevin sureshbhai mangukiya";
    // print_r ($flstr);
    // echo "<br>";
    // print_r(lcfirst($flstr));

    // concate string
    // $cnstr="kevin";
    // $cnstr1="sureshbhai";
    // $cnstr2="mangukiya";
    // $cntstr="$cnstr $cnstr1 $cnstr2";
    // print_r($cntstr);
    // echo"<br>";
    // $cntstr1="$cnstr.$cnstr1.$cnstr2";
    // print_r($cntstr1);
    
 
    // To insert characters that are illegal in a string, use an escape character.
    // $escstr="kevin "sureshbhai" mangukiya";   //--> it will produce error 
    // echo $escstr ."<br>";
    // $escstr1="kevin \"sureshbhai\" mangukiya";
    // printf($escstr1);
     
    // type of element
    // $a=10;
    // var_dump($a);
    // echo"<br>";
     
    // $b=10.5;
    // var_dump($b);
    // echo"<br>";

    // $c=10;
    // var_dump(is_int($c));

    // $d=acos(10);
    // var_dump($d);

    // $arr=array(1,2,5,9,10,43,3);
    // print_r(min($arr));
    // echo"<br>";
    // print_r(max($arr));

    // crerate constant with case sensetive name 
    // define("GREETING", "Welcome to W3Schools.com!");
    // echo greeting;
     
    // directory path 
    // echo __DIR__;

?>
</body>
</html>