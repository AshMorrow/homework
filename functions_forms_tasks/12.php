<!DOCTYPE html>
<html>
<head><title>Task 12</title></head>
<body>
<form action="" method="post">
    <textarea name="text"></textarea>
    <input type="submit" name="submit">
</form>
<?php
if(isset($_POST['submit']) AND isset($_POST['text'])){
    echo upLatter($_POST['text']);
}
?>
</body>
</html>
<?php
function upLatter($text){
    $text = explode(".",$text);
    foreach($text as $k => $v){
        $text[$k] = my_mb_ucfirst(trim($v));
        if(mb_strlen(trim($v))){
            $text[$k] .= ".";
        }
    }
    $text = array_reverse($text);
    $text = implode(" ",$text);
    return $text;
}
function my_mb_ucfirst($str) {
    $fc = mb_strtoupper(mb_substr($str, 0, 1));
    return $fc.mb_substr($str, 1);
}