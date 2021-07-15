<?php 
        $city = [
            "นนทบุรี",
            "กรุงเทพ",
            "ปทุมธานี"
        ];
        shuffle($city); //สุ่มค่า
        print_r($city);
        echo "<hr>";

        $c = array_reverse($city); //กลับด้าน
        print_r($c);
        echo "<hr>";

     $country = array(
        "TH"=>"ไทย",
        "JP"=>"ญี่ปุ่น",
        "USA"=>"สหรัฐอเมริกา",
        "CN"=>"จีน",
        "JP"=>"ญี่ปุ่น",
        "USA"=>"สหรัฐอเมริกา",
    );
    $arr = array_keys($country);
    print_r($arr);
    echo "<hr>";

    $arr1 = array_values($country);
    print_r($arr1);
    echo "<hr>";

    $arr2 = array_flip($country);
    print_r($arr2);
    echo "<hr>";

    $arr3 = array_unique($country);
    print_r($arr3);
    echo "<hr>";

?>