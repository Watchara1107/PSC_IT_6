<?php
    $num1 = 20.2;
    $num2 = 10.5;
    $sum = $num1+$num2;

    echo "$num1"."+"."$num2"."=".$sum;
    echo "<hr>";

    // แปลงชนิดของตัวแปรโดยการใช้ Type Casting
    $num1=(integer)$num1;
    $num2=(integer)$num2;
    $sum = $num1+$num2;

    echo "$num1"."+"."$num2"."=".$sum;
    
    
    //echo gettype($num2);
?>