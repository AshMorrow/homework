<!DOCTYPE html>
<html>
<head><title>Task 5</title></head>
<body>
<form action="" method="post">
    <p>Название директории</p>
    <input type="text" required name="dirName"><br>
    <p>Искомое слово</p>
    <input type="text" required name="word">
    <input type="submit" name="submit">
</form>
<?php
if(isset($_POST['submit'])){
    fileList($_POST['dirName'],$_POST['word']);
}
?>
</body>
</html>
<?php
function fileList($dirName,$word){
    $dirPath =  __DIR__.DIRECTORY_SEPARATOR.$dirName.DIRECTORY_SEPARATOR;
    $word = mb_strtolower($word);
    if(is_dir($dirPath)){
        $dirArr = scandir($dirPath);
        foreach($dirArr as $k => $v) {
            if(is_file($dirPath.$dirArr[$k])){
                $text = mb_strtolower(file_get_contents($dirPath.$dirArr[$k]));
                if(mb_substr_count($text,$word)){
                    echo $v . "<br>";
                }
            }
        }
    }
}