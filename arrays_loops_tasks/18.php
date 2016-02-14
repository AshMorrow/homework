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
$weekdayCount = 0;
echo "<table>";
foreach ($weekdayArray as $v){
    if($weekdayCount<5) {
        echo "<tr><td>{$v}</td></tr>";
    }else{
        echo "<tr><td style='font-weight: 800;'>{$v}</td></tr>";
    }
    $weekdayCount++;
}
echo "</table>";
