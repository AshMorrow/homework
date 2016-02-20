<?php
    define('ROOT',dirname(__FILE__));
    define('DS',DIRECTORY_SEPARATOR);
?>
<!DOCTYPE html>
<html>
<head><title>Task 2</title></head>
<body>
<form action="<?=$_SERVER['REQUEST_URI']?>" method="post">
    <p>Введите свое имя</p>
    <input type="userName" type="text" name="userName">
    <p>Оставте свой комент</p>
    <textarea name="userMassage" cols="36" rows="10"></textarea><br>
    <input type="submit" name="submit">
</form>
<?php
    include ROOT.DS."libs.php";
    $message = getContent();
    addComment($message);
    showComment($message);
?>
</body>
</html>
