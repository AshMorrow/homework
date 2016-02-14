<?php
$arr = array(4, 2, 5, 19, 13, 0, 10);
$e = 2;
foreach($arr as $v){
    if($v == $e){
        echo "Есть!<br>";
    }else{
        echo "Нет!<br>";
    }
}