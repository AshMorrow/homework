<?php
    $arr = array('Коля'=>'200', 'Вася'=>'300','Петя'=>'400');
    $result = 0;
    foreach($arr as $k => $v){
        echo $k.' — зарплата '.$v.' долларов<br>';
    }