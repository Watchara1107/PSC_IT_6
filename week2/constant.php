<?php
    //define("ชื่อของตัวแปร",ค่ากำหนด);
    define("number",100);
    $num1 = 100;
    echo "ตัวแปร number มีค่าเท่ากับ".number."<br>";
    echo "ตัวแปร number มีชนิดของข้อมูลเป็น".gettype(number)."<br>";
    echo "<hr>";
    echo number+$num1;

    //เปลี่ยนแปลค่าโดยใช้ settype
    //settype(number,"string");
    //echo number;
?>