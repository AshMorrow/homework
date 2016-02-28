<?php
define('ROOT',dirname(__FILE__));
define('DS',DIRECTORY_SEPARATOR);
include ROOT.DS."libs.php";

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
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12" style="float: none; margin: 0px auto;">
                <?php
                    delWord();
                ?>
                <h2 class="headH2">Добывить сообщение</h2>
                <form action="<?=$_SERVER['REQUEST_URI']?>" method="post" class="form-group">
                    <input type="text" name="delWord" placeholder="Введите свое имя" class="form-control"
                           required>
                    <br>
                    <input type="submit" name="delWordSubmit" class="addBtn button">
                </form>
            </div>
        </div>
    </div>
    <footer>

    </footer>
    </body>
    </html>

<?php
function delWord(){
    if(isset($_POST['delWordSubmit'])){
        $badWord = getBadWord();
        foreach($badWord as $k => $v){
            if(!strcasecmp(mb_strtolower($v),mb_strtolower($_POST['delWord']))){
                unset($badWord[$k]);
            }
        }
        $badWordDB = serialize($badWord);
        file_put_contents("cencored/del", $badWordDB);
    }
}

