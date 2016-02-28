<?php
    define('DS',DIRECTORY_SEPARATOR);
    if(isset($_POST['submit'])){
        uploadImage();
    }
?>
<!DOCTYPE html>
<html>
<head><title>Task 6</title>
<style>
    img{
        max-width: 150px;
    }
</style>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <input multiple="multiple"  type="file" name="images[]"><br>
    <input type="submit" name="submit" value="Загрузить">
</form>
<div>
    <?php
        displayImage();
    ?>
</div>
</body>
</html>
<?php
function displayImage(){
    $dirArr = scandir(__DIR__.DS."gallery".DS);
    $counter = 0;
    if(count($dirArr)-2){
        echo "<table>";
        foreach($dirArr as $k => $v){
            if($counter == 0){
                echo "<tr>";
            }
            if($counter < 3){
                if($v != '.' AND $v != '..' AND getimagesize(__DIR__.DS."gallery".DS.$v)){
                    echo "<td><img src=http://".$_SERVER['HTTP_HOST']."/functions_forms_tasks/6/gallery/".$v."></td>";
                    $counter++;
                }
            }
            if($counter >= 3){
                $counter = 0;
                echo "</tr>";
            }
        }
        echo "</table>";
    }
}
function uploadImage(){
    if(isset($_FILES['images']) AND $_FILES['images']['size'][0]) {
        $countDir = count(scandir(__DIR__.DS."gallery".DS))-2;
        foreach($_FILES['images']['tmp_name'] as $k => $v) {
            if(getimagesize($v)){
                move_uploaded_file($v,__DIR__.DS."gallery".DS.$countDir."_".$_FILES['images']['name'][$k]);
                $countDir++;
            }
        }
        header("Location :".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    }
}
?>
