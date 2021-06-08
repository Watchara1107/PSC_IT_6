<?php
    $total1 = null;
    $total2 = "";
    $total3 = 100;
    $total4 = "room6";
    
    //var_dump() แสดงรายละเอียดของตัวแปร
    //isset() ตรวจสอบว่ามีค่าหรือไม่ ถ้ามีค่า 1(T) ถ้าไม่มีค่า 0 (F)
    //empty() ตรวจสอบมีค่าว่างหรือมีเลขศูนย์หรือไม่ ถ้ามีค่า 1(T) ถ้าไม่มีค่า 0(F)
    echo "ตัวแปร total1 มีค่าเท่ากับ".empty($total1)."<br>";//1
    echo "ตัวแปร total2 มีค่าเท่ากับ".empty($total2)."<br>";//1
    echo "ตัวแปร total3 มีค่าเท่ากับ".empty($total3)."<br>";//0
    echo "ตัวแปร total4 มีค่าเท่ากับ".empty($total4)."<br>";//0
    echo "<hr>";
    //is_null() ตรวจสอบว่ามีค่าว่างหรือไม่ ถ้ามีค่า 1(T) ถ้าไม่มีค่า 0 (F)
    echo "ตัวแปร total1 มีค่าเท่ากับ".is_null($total1)."<br>";//1
    echo "ตัวแปร total2 มีค่าเท่ากับ".is_null($total2)."<br>";//0
    echo "ตัวแปร total3 มีค่าเท่ากับ".is_null($total3)."<br>";//0
    echo "ตัวแปร total4 มีค่าเท่ากับ".is_null($total4)."<br>";//0
    echo "<hr>";
    //unset() ยกเลิกตัวแปรและคืนค่ากลับให้กับหน่วยความจำ
    echo "ตัวแปร total4 มีค่าเท่ากับ".$total4."<br>";
    //unset($total4);
    echo "ตัวแปร total4 มีค่าเท่ากับ".$total4."<br>";
?>