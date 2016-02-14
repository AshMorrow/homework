<!DOCTYPE html>
<html>
<head>
    <title>Sum</title>
    <style>
        body{
            width: 920px;
            margin: 0 auto;
        }
        form{
            margin-bottom: 20px;
            border-bottom: 1px solid;
        }
    </style>
</head>
<body>
<form action="" method="post">
    <label for="cols">Введите количество столбцов:</label><br>
    <input id="cols" type="text" name="cols" ><br>
    <label for="rows">Введите количество строк:</label><br>
    <input id="rows" type="text" name="rows" ><br>
    <input type="submit">
</form>
<?php if($_POST) {
    if ((is_numeric($_POST['rows'])) && (is_numeric($_POST['cols']))) {
        colorTable($_POST['cols'], $_POST['rows']);
    } else {
        echo "Вы вели не коректные значения выводистся таблица 5x5";
        colorTable();
    }
}
?>
</body>
</html>
<?php
function colorTable($rows=5,$cols=5){
    /*
     * $rows - столбцы
     * $cols - строки
     * так получилось
     */
    $colorArr = explode(PHP_EOL,file_get_contents("color"));
    $colorArrCount = (count($colorArr))-1;
    echo "<table>";
    for ($i = 0; $i < $cols; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $rows; $j++) {
            echo "<td style='background-color: {$colorArr[rand(0,$colorArrCount)]}'>" . rand() . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}