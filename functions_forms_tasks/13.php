<?php
$string = 'яблоко вишня вишня черешня груша  черешня яблоко черешня вишня яблоко вишня вишня черешня груша
яблоко черешня черешня   вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко
вишня вишня черешня черешня груша яблоко черешня вишня';
?>
<!DOCTYPE html>
<html>
<head><title>Task 10</title></head>
<body>
    <?php displayFrutCounter(frutCounter($string)); ?>
</body>
</html>
<?php
function frutCounter($string){
    $string = str_replace(PHP_EOL," ", $string);
    $arr = array_unique(array_filter(explode(" ",$string)));
    $frutArrSorted = array();
    foreach($arr as $v){
        $v = trim($v);
        $frutArrSorted[$v] = mb_substr_count($string,$v);
    }
    array_multisort($frutArrSorted,SORT_DESC);
    return $frutArrSorted;
}

function displayFrutCounter($frutArrSorted){
    echo "<ul>";
    foreach($frutArrSorted as $k => $v){
        echo "<li>".$k." – ".$v."</li>";
    }
    echo "</ul>";
}
?>