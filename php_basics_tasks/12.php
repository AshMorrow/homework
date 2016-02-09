<?php
$day = 55;
$msgWorkDay = 'Это рабочий день';
$msgHoliday = 'Это выходной день';
switch($day){
    case 1:echo $msgWorkDay; break;
    case 2:echo $msgWorkDay; break;
    case 3:echo $msgWorkDay; break;
    case 4:echo $msgWorkDay; break;
    case 5:echo $msgWorkDay; break;
    case 6:echo $msgHoliday; break;
    case 7:echo $msgHoliday; break;
    default: echo "Неизвестный день";
}