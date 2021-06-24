<?php 
    $a = 100;
    $b = 50;
    function sum(){
        global $a ;
        global $b ;
        $GLOBALS["x"] = 10;
        $GLOBALS['y'] = 5;
        return $a+$b;
    }

     $total = sum();
     echo "ค่าจากฟังก์ชัน".$total."<br>";
     $sum = $x+$y;
     echo "ค่านอกฟังก์ชัน".$sum."<br>";

?>