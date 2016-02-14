<?php
$arr = array();
$arrCont = rand(10,30);
$multiplication = 0;
for($i = 0;$i <= $arrCont;$i++){
    $arr[] = rand(1,100);
}
for($i = 0;$i <= $arrCont;$i++) {
    if(!($i%2) && $arr[$i] > 0){
        if($multiplication == 0){
            $multiplication = $arr[$i];
        }else{
            $multiplication *=$arr[$i];
        }
    }
}
/*echo "<pre>";
    var_dump($arr);
echo "</pre>";
echo $multiplication."<br>";*/
for($i = 0;$i <= $arrCont;$i++) {
    if (($i % 2) && ($arr[$i] > 0)) {
        echo $arr[$i]."<br>";
    }
}