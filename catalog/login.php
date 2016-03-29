<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<?php include_once 'include/head.ink.php'; ?>
<body class="container">
<div class="col-md-4" style="margin: 0px auto; float: none;">
    <?php
    require_once 'include/config.ink.php';
    require_once 'include/lib.ink.php';
    if ($_POST) {
        foreach ($_POST as $k => $v) {
            $_POST[$k] = input_validator($v);
        }

        if (isset($_POST['login']) AND isset($_POST['password'])) {
            $login = stripslashes(strip_tags(trim($_POST['login'])));
            $pass = stripslashes(strip_tags(trim($_POST['password'])));

            if (login($login, $pass, $link)) {
                session_start();
                $_SESSION['user'] = "logged";
                $_SESSION['login'] = $login;
                header("Location: /work_23_03/index.php");
            } else {
                echo "Логин / Пароль неверный";
            }
        }
    }
    ?>
    <form method="post" action="">
        <input class="form-control" type="text" name="login" placeholder="Login" required>
        <input class="form-control" type="text" name="password" placeholder="Password" required>
        <input class="btn btn-success" type="submit" value="Login">
        <a href="/work_23_03/registrate.php" class="btn btn-warning">Зарегистрироватся</a>
    </form>

</div>
</body>
</html>