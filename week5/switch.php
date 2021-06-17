<?php  
    // switch...case
    // โจทย์ ให้ตรวจสอบเดือน 5 เดือน ม.ค. - พ.ค. โดยส่งค่าตัวเลข 1-5 
    /*
        โครงสร้าง Switch...Case
        switch(รับค่าตัวแปร){
            case ค่าตัวแปรที่ต้องการตรวจสอบ : แสดงผลลัพธ์;
            break;
            default:แสดงค่าที่ไม่ตรงกับ case;
        }
    */
    $month = 1;
    switch($month){
        case 1: echo "มกราคม <br>";
        break;
        case 2: echo "กุมภาพันธ์ <br>";
        break;
        case 3: echo "มีนาคม <br>";
        break;
        case 4: echo "เมษายน <br>";
        break;
        case 5: echo "พฤษภาคม <br>";
        break;
        default: echo "ไม่พบเดือน";
    }

?>