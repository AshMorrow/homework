<!DOCTYPE html>
<html>
<head><title>Task 3</title></head>
<body>
<form action="" method="post">
    <input type="number" required name="number">
    <input type="submit" name="submit">
</form>
</body>
</html>
<?php
if(isset($_POST['submit']) AND isset($_POST['number']) AND is_numeric($_POST['number'])){
    delWords($_POST['number']);
}
function delWords($n = NULL){
    if(!(is_null($n)) AND is_numeric($n)) {
        $text = getFile();
        foreach ($text as $k => $v) {
            if($n < mb_strlen($text[$k])){
                unset($text[$k]);
            }
        }
        file_put_contents("./words",implode(" ",$text));
    }
}
function getFile(){
    $file = file_get_contents("./words");
    $file = explode(" ",$file);
    return $file;
}