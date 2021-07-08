<?php 
    $product = array(
        array("Keyboard","คีย์บอร์ด",1500),
        array("Mouse","เมาส์",900),
        array("Speaker","ลำโพง",2500)
    );

    // echo $product[1][1].'<br>';
    // echo $product[2][1].'<br>';

    for($row=0;$row<count($product);$row++){
        echo "แถวที่".$row."<br>";
        for($column=0;$column<count($product[$row]);$column++){
            echo $product[$row][$column]."<br>";
        }
        echo"<hr>";
    }
?>