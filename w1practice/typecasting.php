<html>
<body>
<?php
   // (string) - Converts to data type String
   $a=1;
   $b=2.3;
   $nul=NULL;
   $bol=true;

  // casting to string 
   $z= (string) $a;
   var_dump($z);
   echo"<br>";
   
   $y= (string) $b;
   var_dump($y);
   echo"<br>";

   $x= (string) $nul;
   var_dump($x);
   echo"<br>";

   $w= (string) $bol;
   var_dump($w);
   echo"<br>";
echo" ------------------------------------------------------------------------------------------------------------------------------.<br>";
   // (int) - Converts to data type Integer

   $str="25kevin";
   $flt=12.43;
   $str2="kevin25";
   $nul=NULL;
   $bol=true;

  // casting to integer 
   $a= (int) $str;
   var_dump($a);
   echo"<br>";

   $b= (int) $flt;
   var_dump($b);
   echo"<br>";

   $c= (int) $str2;
   var_dump($c);
   echo"<br>";

   $d= (int) $nul;
   var_dump($d);
   echo"<br>";

   $e= (int) $bol;
   var_dump($e);
   echo"<br>";
echo" ----------------------------------------------------------------------------------------------------------------------------- .<br>";
   // (float) - Converts to data type Float

   $fa= (float) $str;
   var_dump($fa);
   echo"<br>";

   $fb= (float) $flt;
   var_dump($fb);
   echo"<br>";

   $fc= (float) $str2;
   var_dump($fc);
   echo"<br>";

   $fd= (float) $nul;
   var_dump($fd);
   echo"<br>";

   $fe= (float) $bol;
   var_dump($fe);
   echo"<br>";

echo" ----------------------------------------------------------------------------------------------------------------------------- .<br>";
   // (bool) - Converts to data type Boolean

   $ba= (Boolean) $str;
   var_dump($ba);
   echo"<br>";

   $bb= (Boolean) $flt;
   var_dump($bb);
   echo"<br>";

   $bc= (Boolean) $str2;
   var_dump($bc);
   echo"<br>";

   $bd= (Boolean) $nul;
   var_dump($bd);
   echo"<br>";

   $be= (Boolean) $bol;
   var_dump($be);
   echo"<br>";

echo" ----------------------------------------------------------------------------------------------------------------------------- .<br>";
    
    // (array) - Converts to data type Array
    $aa= (array) $str;
    var_dump($aa);
    echo"<br>";
 
    $ab= (array) $flt;
    var_dump($ab);
    echo"<br>";
 
    $ac= (array) $str2;
    var_dump($ac);
    echo"<br>";
 
    $ad= (array) $nul;
    var_dump($ad);
    echo"<br>";
 
    $ae= (array) $bol;
    var_dump($ae);
    echo"<br>";


echo" ----------------------------------------------------------------------------------------------------------------------------- .<br>"; 

    // (object) - ocnvert to data type object
    $oa= (object) $str;
    var_dump($oa);
    echo"<br>";
 
    $ob= (object) $flt;
    var_dump($ob);
    echo"<br>";
 
    $oc= (object) $str2;
    var_dump($oc);
    echo"<br>";
 
    $od= (object) $nul;
    var_dump($od);
    echo"<br>";
 
    $oe= (object) $bol;
    var_dump($oe);
    echo"<br>";
?>
</body>
</html>