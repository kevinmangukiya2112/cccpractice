<html>
<body>
<?php
   // integer type --> Represents whole numbers without a decimal point.
   $int=40;
   var_dump($int);
   echo"<br>";

   // float type --> Represents numbers with a decimal point.
   $flt=10.32;
   var_dump($flt);
   echo"<br>";

   // string type --> Represents a sequence of characters.
   $str="kevin";
   var_dump($str);
   echo"<br>";

   // boolean type --> Represents either `true` or `false`.
   $bool=false;
   var_dump($bool);
   echo"<br>";

   // array type --> Represents an ordered map that can hold multiple values.
   $arr=array(1,3,4,5,2,7);
   var_dump($arr);
   echo"<br>";

   // null type --> Represents the absence of a value or a variable without a value.
   $nul=NULL;
   var_dump($nul);
   echo"<br>";

   // date
   $date=date ("dS F Y g:i A");
   echo "today date is $date";
?>
</body>
</html>