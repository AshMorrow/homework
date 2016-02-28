<?php
session_start();
define('ROOT',dirname(__FILE__));
define('DS',DIRECTORY_SEPARATOR);
include_once "libs.php";
userLogin();
if(isset($_SESSION["sessionId"]) && $_SESSION["sessionId"] == session_id()){
    header("Location: ./adm.php");
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Guest book login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap-theme.min.css">
    <script src="./js/jquery.min.js" type="text/javascript"></script>
    <script src="./js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
<div class="container">
    <h2 class="headH2">Представьтесь</h2>
    <form action="<?=$_SERVER['REQUEST_URI']?>" method="post" class="form-group" style="text-align: center;">
        <input type="text" name="userLogin" placeholder="Введите свое логин" class="form-control"
                               required>
        <br>
        <input type="password" name="userPass" placeholder="Введите свой пароль" class="form-control"
               required>
        <br>
        <input type="submit" name="submit" class="addBtn button" value="Войти">
    </form>
</div>
</body>
</html>


