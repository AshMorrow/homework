<?php
session_start();
if (isset($_SESSION['user']) AND $_SESSION['user'] == "logged") {//Было присваивание а не сравнение
    header("Location: /work_23_03/index.php");
    exit;
}
require_once 'include/config.ink.php';
require_once 'include/lib.ink.php';
?>
    <!DOCTYPE html>
    <html>
    <?php include_once 'include/head.ink.php'; ?>
    <body class="container">
    <h2 style="text-align: center">Регистрация</h2>
    <form method="post" action="" class="col-md-4" style="margin: 0px auto; float: none;">
        <input class="form-control" type="text" name="login" placeholder="Login" required>
        <input class="form-control" type="text" name="password" placeholder="Password" required>
        <input class="btn btn-success" type="submit" value="Registrate">
    </form>
    </body>
    </html>
<?php
if ($_POST) {
    foreach ($_POST as $k => $v) {
        $_POST[$k] = input_validator($v);
    }
    if($_POST['login'] == "" OR $_POST['password'] == ""){
        exit;
    }

    if(add_user($link)){
        $_SESSION['user'] = "logged";
        $_SESSION['login'] = $_POST['login'];
        header("Location: /work_23_03/index.php");
    }else{
        echo "<h2 style='text-align: center'>Такой юзер уже зареган!</h2>";
    }
}
