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
    echo "<hr>";

     //การเพิ่มและลบสมาชิกใน array ที่ตำแหน่งแรก
    array_unshift($fruits,"ทุเรียน"); //เพิ่ม
    foreach($fruits as $item){
        echo $item."\t";
    }
    echo "<hr>";

    array_shift($fruits); //ลบ
    foreach($fruits as $item){
        echo $item."\t";
    }
    echo "<hr>";
    //การเพิ่มและลบสมาชิกใน array ในตำแหน่งที่ต้องการ
    array_splice($fruits,1,0,"มะพร้าว"); //เพิ่ม
    array_splice($fruits,3,0,"มะนาว");
    array_splice($fruits,1,1);
    foreach($fruits as $item){
        echo $item."\t";
    }

?>