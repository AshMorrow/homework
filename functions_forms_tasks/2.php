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
    $wordLenght = array();

    foreach($word as $k => $v){
        $word[$k] = array('word' => $v,'length' => mb_strlen($v));
        $wordLenght[] = mb_strlen($v);
    }
    //$wordLenght = array_unique($wordLenght);
    rsort($wordLenght);
    for($i = 0;$i < 3;$i++){
        for($k = 0;$k < count($word);$k++){
            if(isset($word[$k]) && $word[$k]['length'] == $wordLenght[$i]){
                $top[] = array('word' => $word[$k]['word'],'lenght' => $word[$k]['length']);
                unset($word[$k]);
                break;
            }
        }
    }
    return $top;
}
if($_GET) {
    echo  "<pre>";
    var_dump(topWords($_GET['word']));
    echo "</pre>";
}
