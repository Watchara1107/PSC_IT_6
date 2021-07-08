<?php 
    $day = array(
        'Su'=>'วันอาทิตย์',
        'Mo'=> 'วันจันทร์',
        'Th'=>'วันอังคาร',
    );

    foreach($day as $en=>$th){
        echo $th."\t".$en."<br>";
    }
?>