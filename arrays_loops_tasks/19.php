<?php
$weekdayArray = array(
    "Понедельник",
    "Вторник",
    "Среда",
    "Четверг",
    "Пятница",
    "Суббота",
    "Воскресенье"
);
$day = (date('w'))-1;
echo "<table>";
foreach($weekdayArray as $v){
    if($day < 0){
        $day = count($weekdayArray)-1;
    }
    if($weekdayArray[$day] == $v){
        echo "<tr><td style='font-style: italic;border-bottom: 1px solid'>{$v}</td></tr>";
    }else {
        echo "<tr><td>{$v}</td></tr>";
    }
}
echo "</table>";