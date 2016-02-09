<?php
    $a = 100;
    $b = 0;
    $operator = '/';
    if($operator == '/' && $b == 0){
        echo "Делить на ноль не вариант....";
    }else{
        switch($operator){
            case '+': echo $a + $b;break;
            case '-': echo $a - $b;break;
            case '*': echo $a * $b;break;
            case '/': echo $a / $b;break;
        }

    }