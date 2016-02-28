<!DOCTYPE html>
<html>
<head><title>Task 4</title></head>
<body>
<form action="" method="post">
    <input type="text" required name="dirName">
    <input type="submit" name="submit">
</form>
<?php
if(isset($_POST['submit'])){
    fileList($_POST['dirName']);
}
?>
</body>
</html>
<?php
function fileList($dirName){
    $dirPath =  __DIR__.DIRECTORY_SEPARATOR.$dirName.DIRECTORY_SEPARATOR;
    if(is_dir($dirPath)){
        $dirArr = scandir($dirPath);
        foreach($dirArr as $k => $v) {
            if(is_file($dirPath.$dirArr[$k])){
                echo $v."<br>";
            }
        }
    }
}