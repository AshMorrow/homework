<!DOCTYPE html>
<html>
<head>
    <title>Sum</title>
</head>
<body>
<form action="" method="post">
    <label for="num">Введите число</label><br>
    <input id="num" type="text" name="num" required>
    <input type="submit">
</form>
<?php if($_POST){echo "Сумма всех чисел: ". sumAll();} ?>
</body>
</html>
<?php
function sumAll(){
    $num = trim(strip_tags($_POST["num"]));
    if (!(is_numeric($num))) {
        die("Вы вели не число");
    }
    $len = strlen($num);
    $sum = 0;
    for ($i = 0; $i < $len; $i++) {
        $sum += $num{$i};
    }
    return $sum;
}
