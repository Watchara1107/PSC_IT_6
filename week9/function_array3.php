<?php
     $country = array(
        "TH"=>"ไทย",
        "JP"=>"ญี่ปุ่น",
        "USA"=>"สหรัฐอเมริกา",
        "CN"=>"จีน",
       
    );
    if(array_key_exists("US",$country)){
        echo "พบข้อมูลที่ท่านค้นหา";
    }else{
        echo "ไม่พบข้อมูล";
    }
    echo "<hr>";
    if(in_array("จีน",$country)){
        echo "พบข้อมูลที่ท่านค้นหา";
    }else{
        echo "ไม่พบข้อมูล";
    }
    echo "<hr>";







    $country1 = [
        "TH"=>"ไทย",
        "JP"=>"ญี่ปุ่น",
        "USA"=>"สหรัฐอเมริกา",
        "CN"=>"จีน",
       
    ];
    $country2 = [
        "TH"=>"ไทย",
        "JP"=>"ญี่ปุ่น",
        "USA"=>"สหรัฐอเมริกา",
        "EN"=>"อังกฤษ",
        "KR"=>"เกาหลี"
    ];
    $result = array_merge($country1,$country2);
    print_r($result);
    echo "<hr>";

    $result1 = array_merge_recursive($country1,$country2);
    print_r($result1);
    echo "<hr>";

    $arr = ["A"=>20,"B"=>15,"C"=>30,"D"=>25];
    $country4 = ["TH"=>"ไทย", "JP"=>"ญี่ปุ่น","US"=>"สหรัฐอเมริกา","CN"=>"จีน"];

    $result2 = array_combine($arr,$country4);
    print_r($result2);
    echo "<hr>";


?>