<?php
$mounthArray = array("Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь",
    "Декабрь");
$month = (date('n'))-1;
echo "<table>";
foreach($mounthArray as $v){
    if($mounthArray[$month] == $v){
        echo "<tr><td style='font-weight: 800;'>{$v}</td></tr>";
    }else {
        echo "<tr><td>{$v}</td></tr>";
    }
}
echo "</table>";