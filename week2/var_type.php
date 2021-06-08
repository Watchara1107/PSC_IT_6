<?php
    $num1 = 10; //ตัวแปรชนิด integer
    $num2 = 15.5; //ตัวแปรชนิด floatและDouble
    $num3 = "25"; //ตัวแปรชนิด String
    $name = "room6"; //ตัวแปรชนิด String

    //แสดงผลลัพธ์จากตัวแปร
    echo "ค่าจากตัวแปร num1 มีค่าเท่ากับ ". $num1."<br>";
    echo "ค่าจากตัวแปร num2 มีค่าเท่ากับ ". $num2."<br>";
    echo "ค่าจากตัวแปร num3 มีค่าเท่ากับ ". $num3."<br>";
    echo "ค่าจากตัวแปร name มีค่าเท่ากับ ". $name."<br>";
    echo "<hr>";

    //แสดงชนิดของข้อมูล โดยการใช้คำสั่ง gettype
    echo "ค่าจากตัวแปร num1 มีชนิดของข้อมูลเป็น ".gettype($num1)."<br>";
    echo "ค่าจากตัวแปร num2 มีชนิดของข้อมูลเป็น ".gettype($num2)."<br>";
    echo "ค่าจากตัวแปร num3 มีชนิดของข้อมูลเป็น ".gettype($num3)."<br>";
    echo "ค่าจากตัวแปร name มีชนิดของข้อมูลเป็น ".gettype($name)."<br>";
    echo "<hr>";

    //เปลี่ยนแปลงชนิดของข้อมูล โดยใช้คำสั่ง settype
    echo "ก่อนเปลี่ยนแปลงค่า num1 มีชนิดของข้อมูลเป็น ".gettype($num1)."<br>";
    echo "ก่อนเปลี่ยนแปลงค่า num2 มีชนิดของข้อมูลเป็น ".gettype($num2)."<br>";
    echo "ก่อนเปลี่ยนแปลงค่า num3 มีชนิดของข้อมูลเป็น ".gettype($num3)."<br>";
    echo "ก่อนเปลี่ยนแปลงค่า name มีชนิดของข้อมูลเป็น ".gettype($name)."<br>";
    echo "<hr>";
    
    settype($num1,"string")."<br>";
    settype($num2,"integer")."<br>";
    settype($num3,"integer")."<br>";
    settype($name,"integer")."<br>";

    echo "หลังเปลี่ยนแปลงค่า num1 มีชนิดของข้อมูลเป็น ".gettype($num1)."<br>";
    echo "หลังเปลี่ยนแปลงค่า num2 มีชนิดของข้อมูลเป็น ".gettype($num2)."<br>";
    echo "หลังเปลี่ยนแปลงค่า num3 มีชนิดของข้อมูลเป็น ".gettype($num3)."<br>";
    echo "หลังเปลี่ยนแปลงค่า name มีชนิดของข้อมูลเป็น ".gettype($name)."<br>";
    echo "<hr>";

    echo "ค่าจากตัวแปร num1 มีค่าเท่ากับ ". $num1."<br>";
    echo "ค่าจากตัวแปร num2 มีค่าเท่ากับ ". $num2."<br>";
    echo "ค่าจากตัวแปร num3 มีค่าเท่ากับ ". $num3."<br>";
    echo "ค่าจากตัวแปร name มีค่าเท่ากับ ". $name."<br>";
    echo "<hr>";
?>