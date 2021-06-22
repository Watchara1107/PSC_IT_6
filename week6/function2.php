<?php 
     //ฟังก์ชันแบบที่ 2 มีการรับค่าแต่ไม่มีการส่งค่า
    
     function show($name,$name1 = "HTML"){
        echo $name1."<br> <hr>";
        echo $name."<br> <hr>";
        
    }

    show("PHP","JAVA");
    //echo "HTML <br><hr>";
    //show();
?>