<html>
<body>
<?php
// exercise 2
      $text="Hello, World! How are you doing";
      print_r(strlen($text));
      echo"<br>";
      print_r(strtolower($text));
      echo"<br>";
      print_r(strtoupper($text));
      echo"<br>";
      print_r(str_replace("How are you doing?", "Fine, thank you!",$text));
      echo"<br>";
      print_r(substr($text,0,10));
      echo"<br>";
      print_r(substr($text,8));
?>