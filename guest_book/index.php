<?php
define('ROOT',dirname(__FILE__));
define('DS',DIRECTORY_SEPARATOR);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Guest book</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/bootstrap-theme.min.css">
        <script src="./js/jquery.min.js" type="text/javascript"></script>
        <script src="./js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
<div class="page-wrap">
    <div class="container">
        <header>
            <div class="pull-right">
                <a href="./login.php" class="loginBtn">Войти</a>
            </div>
            <div class="clearfix"></div>
        </header>
        <div class="col-md-12" style="float: none; margin: 0px auto;">
            <h1 class="headH1">Гостевая книга</h1>
            <?php
                include ROOT.DS."libs.php";
                $message = getContent();
                $message = addComment($message);
                showComment($message);
            ?>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12" style="float: none; margin: 0px auto;">
        <h2 class="headH2">Добывить сообщение</h2>
        <form action="<?=$_SERVER['REQUEST_URI']?>" method="post" class="form-group">
            <input type="userName" type="text" name="userName" placeholder="Введите свое имя" class="form-control"
                   required>
            <br>
            <textarea name="userMassage" cols="36" rows="10" placeholder="Оставте свой комент" class="form-control" required></textarea><br>
            <input type="submit" name="submit" class="addBtn button">
        </form>
        </div>
    </div>
</div>
<footer>

</footer>
</body>
</html>
