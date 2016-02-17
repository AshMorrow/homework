<!DOCTYPE html>
<html>
<head><title>Task 1</title></head>
<body>
<form action="" method="get">
    <textarea name="firstText"></textarea>
    <textarea name="lastText"></textarea>
    <input type="submit">
</form>
</body>
</html>
<?php
function getCommonWords($a, $b){
    $words = array();
    $a = explode(" ",$a);
    foreach($a as $k){
        if(strstr($b,$k)){
            $words[] = $k;
        }
    }
    return $words;
}
if($_GET) {
    var_dump(getCommonWords($_GET['firstText'], $_GET['lastText']));
}
