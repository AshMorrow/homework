<!DOCTYPE html>
<html>
<head><title>Task 5</title></head>
<body>
<form action="" method="post">
    <p>Введите cлово</p>
    <input type="text" required name="word">
    <input type="submit" name="submit">
</form>
<?php
 if(isset($_POST['submit'])){
     revWord($_POST['word']);
 }
?>
</body>
</html>
<?php
function revWord($word)
{
    if(isset($word)) {
        $word = iconv('utf-8','koi8-r',$word);
        $word = iconv('koi8-r','utf-8',strrev($word));
        echo $word;
    }
}