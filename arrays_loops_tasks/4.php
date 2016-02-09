<?php
    $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
    $result = 0;
    foreach($arr as $k => $v){
        echo $k."<br>";
    }
    foreach($arr as $v){
        echo $v."<br>";
    }