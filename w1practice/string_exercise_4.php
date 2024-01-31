<html>
<body>
<?php
// exercise 4
    $name = "John";
    print_r(str_pad($name,10,"_",STR_PAD_LEFT));
    echo"<br>";
    print_r(str_pad($name,8,"*",STR_PAD_RIGHT));
?>