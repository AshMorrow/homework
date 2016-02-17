<!DOCTYPE html>
<html>
<head><title>Task 2</title></head>
<body>
<form action="" method="get">
    <textarea name="word"></textarea>
    <input type="submit">
</form>
</body>
</html>
<?php
function topWords($word){
    $top = array();
    $word = explode(" ",$word);
    $lenght = array();
    foreach($word as $k){
        $lenght[] = mb_strlen($k);
    }
    for($i;$i<count($word);$i++){
        
    }
    return $top;
}
if($_GET) {
    var_dump(topWords($_GET['word']));
}
