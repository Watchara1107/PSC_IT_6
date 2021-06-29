<?php 
  echo "รูปแบบที่ 1 ใช้ฟังก์ชัน array <br>";
  $city = array("กรุงเทพ","นนทบุรี","ปทุมธานี","นครปฐม");
  print_r($city);
  echo "<br>";
  echo $city[0]." ".$city[1]." ".$city[2]." ".$city[3];
  echo "<hr>";
  $a = count($city);
  echo $a."<br>";
  for($i=0;$i<$a;$i++){
    echo $city[$i]."<br>";
  }
  
?>