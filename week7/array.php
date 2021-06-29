<?php 
    // ตัวแปร City  มีข้อมูล กรุงเทพ  นนทบุรี  ปทุมธานี นครปฐม  
    // แสดงผลลัพธ์ นนทบุรี

    echo "ประเภทที่ 1 array แบบเดี่ยว <br>";
    echo "รูปแบบที่ 1 ใช้ฟังก์ชัน array <br>";
    $city = array("กรุงเทพ","นนทบุรี","ปทุมธานี","นครปฐม");
    print_r($city);
    echo "<br>";
    echo $city[0]." ".$city[1]." ".$city[2]." ".$city[3];
    echo "<hr>";
    echo "รูปแบบที่ 2 ใช้ฟังก์ชัน range <br>";
    $number = range(10,1);
    print_r($number);
    echo "<br>";
    echo $number[2];
    echo "<hr>";
    echo "รูปแบบที่ 3 ใช้วงเล็บก้ามปู [] <br>";
    $room = ["3/5","3/6","3/7"];
    print_r($room);
    echo "<br>";
    echo $room[1]."<br>";

?>