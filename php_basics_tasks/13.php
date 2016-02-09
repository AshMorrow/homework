<?php
    $s = 300;
    $t = 4;
    $speed = array(
        'KPH' => $s / $t,
        'MPS' => ($s / $t) / 3600 * 1000
    );
?>
<!DOCTYPE html>
<html>
<head>
    <title>speed</title>
</head>
<body>
    <p>Скорость автомобиля на заданном участке в км/час: <?=$speed['KPH']?></p>
    <p>Скорость автомобиля на заданном участке в м/сек: <?=$speed['MPS']?></p>
</body>
</html>
