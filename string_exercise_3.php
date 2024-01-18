<html>
<body>
<?php
// exercise 3
    $sentence = "The quick brown fox jumps over the lazy dog";
    print_r(strpos($sentence,"fox"));
    echo"<br>";
    print_r(substr_count($sentence,"cat"));
    echo"<br>";
    print_r(substr($sentence,0,20));
?>