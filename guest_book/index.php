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
<div class="container">
    <div class="col-md-6">
    <form action="<?=$_SERVER['REQUEST_URI']?>" method="post" class="form-group">
        <p>Введите свое имя</p>
        <input type="userName" type="text" name="userName" class="form-control">
        <p>Оставте свой комент</p>
        <textarea name="userMassage" cols="36" rows="10" class="form-control"></textarea><br>
        <input type="submit" name="submit" class="btn btn-success">
    </form>
    </div>
    <div class="col-md-6">
<?php
    include ROOT.DS."libs.php";
    $message = getContent();
    $message =addComment($message);
    showComment($message);
?>
    </div>
</div>
</body>
</html>
