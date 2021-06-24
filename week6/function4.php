<?php 
//ฟังก์ชันแบบที่ 4 มีการรับค่าและมีการส่งค่า
    function select($classroom,$Job="สาขา IT"){
        echo $Job."<br>";
        return $classroom;
    }

    $class = select("ห้องปวช.3/6");
    echo $class."<br>";
?>