<?php
    $a = 500;
    $b ="500";

    echo "ตัวดำเนินการที่ 1 ".var_dump($a == $b)."<br>";//เท่ากับ    1
    echo "ตัวดำเนินการที่ 2 ".var_dump($a === $b)."<br>";//เหมือนกัน 0
    echo "ตัวดำเนินการที่ 3 ".var_dump($a != $b)."<br>";//ไม่เท่ากับ  0
    echo "ตัวดำเนินการที่ 4 ".var_dump($a <> $b)."<br>";//ไม่เท่ากับ  0
    echo "ตัวดำเนินการที่ 5 ".var_dump($a !== $b)."<br>";//ไม่เหมือนกัน 1
    echo "ตัวดำเนินการที่ 6 ".var_dump($a > $b)."<br>";//มากกว่า  0
    echo "ตัวดำเนินการที่ 7 ".var_dump($a < $b)."<br>";//น้อยกว่า  0
    echo "ตัวดำเนินการที่ 8 ".var_dump($a >= $b)."<br>";//มากกว่าหรือเท่ากับ 1
    echo "ตัวดำเนินการที่ 9 ".var_dump($a <= $b)."<br>";//น้อยกว่าหรือเท่ากับ 1
    echo "ตัวดำเนินการที่ 10 ".var_dump($a <=> $b)."<br>";//Spaceship (php7)  < -1    |    =  0   |  > 1  0
?>