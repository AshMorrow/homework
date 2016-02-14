<?php
$fullNumber = 5442158755745;
$number = 5;
echo "Цифра {$number} в числе {$fullNumber} встречается <b>".substr_count($fullNumber,$number)."</b> раз(а).";