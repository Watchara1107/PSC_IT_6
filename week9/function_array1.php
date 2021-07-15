<?php 
    //array เดี่ยว
    $number = [40,20,5,7,3,25,30,32];
    sort($number); //น้อยไปมาก
    print_r($number);
    echo "<hr>";
    rsort($number); //มากไปน้อย
    print_r($number);
    echo "<hr>";

    $city = [
        "นนทบุรี",
        "กรุงเทพ",
        "ปทุมธานี"
    ];
    sort($city);//พยัญชนะไปสระ
    print_r($city);
    echo "<hr>";

    rsort($city);//สระไปพยัญชนะ
    print_r($city);
    echo "<hr>";

    //array คู่
    $num = ["A"=>30,"B"=>5,"C"=>10,"D"=>20];
    asort($num); //น้อยไปมาก
    print_r($num);
    echo "<hr>";
    arsort($num); //มากไปน้อย
    print_r($num);
    echo "<hr>";

    $country = array(
        "TH"=>"ไทย",
        "JP"=>"ญี่ปุ่น",
        "USA"=>"สหรัฐอเมริกา",
        "CN"=>"จีน"
    );
    ksort($country); //น้อยไปมาก
    print_r($country);
    echo "<hr>";

    krsort($country); //มากไปน้อย
    print_r($country);
    echo "<hr>";
?>