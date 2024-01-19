<html>
<body>
<?php
// 1. Basic Arithmetic
    
//abs($number) --> Returns the absolute value of a number.

//    $num=-12.5324;
//    $num1=12.33545;
//    $num2=12.81239;
//    $num3=12;
//    print_r(abs($num));
//    echo"<br>";
//    print_r(abs($num1));
//    echo"<br>";
//    print_r(abs($num2));
//    echo"<br>";
//    print_r(abs($num3));


//ceil($number) -->Rounds a number up to the nearest integer.

//    print_r(ceil($num));
//    echo"<br>";
//    print_r(ceil($num1));
//    echo"<br>";
//    print_r(ceil($num2));
//    echo"<br>";
//    print_r(ceil($num3));

//floor($number) -->Rounds a number down to the nearest integer.

//    print_r(floor($num));
//    echo"<br>";
//    print_r(floor($num1));
//    echo"<br>";
//    print_r(floor($num2));
//    echo"<br>";
//    print_r(floor($num3));

//round($number, $precision) -->Rounds a number to the nearest integer or specified number of decimal places.

//    print_r(round($num));   // default precision is 0
//    echo"<br>";
//    print_r(round($num1,1));  // it will round up number by 1
//    echo"<br>";
//    print_r(round($num2,2));  // it will round up number by 2
//    echo"<br>";
//    print_r(round($num3,3));  // it will round up number by 3
//    echo"<br>";
//    print_r(round($num3,0,PHP_ROUND_HALF_DOWN));
//    echo"<br>";
//    print_r(round($num3,0,PHP_ROUND_HALF_UP));
//    echo"<br>";
//    print_r(round($num3,0,PHP_ROUND_HALF_EVEN));
//    echo"<br>"; 
//    print_r(round($num3,0,PHP_ROUND_HALF_ODD));

// 2. Power Functions
//pow($base, $exponent) -->Returns the value of a base raised to the power of an exponent.
//    $num=100;
//    $num1=5;
//    $num2=10.5;
//    $num3=10.5;
//    print_r(pow($num,$num1));
//    echo"<br>";
//    print_r(pow($num2,$num3));
//    echo"<br>";
//    print_r(pow($num2,$num));
//    echo"<br>";
//    print_r(pow($num,$num3));

// sqrt($number) -->Returns the square root of a number
    // print_r(sqrt($num));
    // echo"<br>";
    // print_r(sqrt($num1));
    // echo"<br>";
    // print_r(sqrt($num2));
    // echo"<br>";
    // print_r(sqrt($num3));
   

// pie function
   //print_r(pi());

// min and max function
//    $arr=array(1,2,3,90,7,6,-12,-78);
//    print_r(min($arr));
//    echo"<br>";
//    print_r(max($arr));
//    echo"<br>";
//    print_r(min(1,4,0,-8));
//    echo"<br>";
//    print_r(max(1,3,60,-98,198));

//3. Random Number Generation
//rand($min, $max) -->Generates a random integer between the specified minimum and maximum
    // print_r(rand()); // it will generate any random number without any boundry
    // echo"<br>";
    // print_r(rand(10,100)); // it will generate random number in the boundry of 10 to 100
    // echo"<br>";
    // print_r(random_bytes(2)); // it will generate any 2 random bytes 
    // echo"<br>";
    // print_r(random_int(23,76)); // it will generate any random integer in given boundry
   
    // --> here in random   {rand() function can generate any number without bundry} , but {random_bytes and random_int can't generate without boundry}

//4. Number Formatting
//number_format($number, $decimals, $decimal_point, $thousands_separator) -->Formats a number with grouped thousands and a specified number of decimals.
    // $number=234325;  
    // print_r(number_format($number)); // it will format number by default 
    // echo"<br>";
    // print_r(number_format($number,2,".",",")); // it will format number by given argument and also add 2 decimal point 
    // echo"<br>";
    // print_r(number_format($number,3,",",".")); // it will format number by given argument and also add 3 decimal point 



?>
</body>
</html>