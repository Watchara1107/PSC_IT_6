<?php
    $fruits = [
        "มะละกอ",
        "กล้วย",
        "ส้ม"
    ];
    //การเพิ่มและลบสมาชิกใน array ที่ตำแหน่งสุดท้าย
    print_r($fruits);
    echo "<hr>";
    array_push($fruits,"มังคุด"); //การเพิ่ม
    array_push($fruits,"เงาะ");
    $total = count($fruits);
    echo $total."<br>";
    echo "<hr>";
    foreach($fruits as $item){
        echo $item."\t";
    }
    echo "<hr>";

    array_pop($fruits); //การลบ
    array_pop($fruits);
    foreach($fruits as $item){
        echo $item."\t";
    }
?>