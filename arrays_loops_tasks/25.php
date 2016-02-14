<?php
$arr = array();
$arrCont = rand(10,100);
for($i = 0;$i <= $arrCont;$i++){
    $arr[] = rand();
}
/*echo "<pre>";
    var_dump($arr);
echo "</pre>";*/
$min = min($arr);
$max = max($arr);
$minId = 0;
$maxId = 0;
/*echo "Min: ".$min."<br>";
echo "Max: ".$max;*/
for($i = 0;$i <= $arrCont; $i++){
    if($arr[$i] == $min){
        $minId = $i;
    }elseif($arr[$i] == $max){
        $maxId = $i;
    }
}
$arr[$minId] = $max;
$arr[$maxId] = $min;
/*echo "<pre>";
    var_dump($arr);
echo "</pre>";*/