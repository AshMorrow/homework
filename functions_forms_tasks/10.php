<!DOCTYPE html>
<html>
<head><title>Task 10</title></head>
<body>
<form action="" method="post">
    <textarea name="text"></textarea>
    <input type="submit" name="submit">
</form>
<?php
if(isset($_POST['submit']) AND isset($_POST['text'])) {
    echo countWords($_POST['text']);
}
?>
</body>
</html>
<?php
function countWords($text){
    $text = mb_strtolower($text);
    $wordArr = explode(" ",$text);
    $uniqueCount = 0;
    foreach($wordArr as $v){
        if(mb_strlen($v) AND mb_substr_count($text,$v) == 1){
            $uniqueCount++;
        }
    }
    return $uniqueCount;
}
