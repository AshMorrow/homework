<?php
session_start();
define('ROOT',dirname(__FILE__));
define('DS',DIRECTORY_SEPARATOR);
include_once "libs.php";
userLogout();
deleteMassage();
addBadWord(getBadWord());
if(isset($_SESSION["sessionId"]) && $_SESSION["sessionId"] == session_id()){
?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Guest book admin</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/bootstrap-theme.min.css">
        <script src="./js/jquery.min.js" type="text/javascript"></script>
        <script src="./js/bootstrap.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function(){
                $("#showNoCencored").removeAttr("checked");
                $("#showCencored").removeAttr("checked");

                $("#showCencored").click(function(){
                    if($("#showCencored").prop("checked")){
                        if($("#showNoCencored").prop("checked")) {
                            $("#showNoCencored").removeAttr("checked");
                            $(".cencored").css("display", "block");
                        }
                       $(".notCencored").css("display","none");
                    }else{
                        $(".notCencored").css("display","block");
                    }
                });

                $("#showNoCencored").click(function(){
                    if($("#showNoCencored").prop("checked")){
                        if($("#showCencored").prop("checked")) {
                            $("#showCencored").removeAttr("checked");
                            $(".notCencored").css("display", "block");
                        }
                        $(".cencored").css("display","none");
                    }else{
                        $(".cencored").css("display","block");
                    }
                });
            });
        </script>
    </head>
    <body>
    <div class="container">
        <header>
            <div>
                <form action="" method="post" class="pull-right">
                    <input type="submit" name="exit" value="Выйти" class="exitBtn">
                </form>
            </div>
            <div class="clearfix"></div>
        </header>
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#massages" aria-controls="home" role="tab"
                                                      data-toggle="tab">Коментарии</a></li>
            <li role="presentation"><a href="#addBadWords" aria-controls="profile" role="tab"
                                       data-toggle="tab">Антимат</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="massages">
                <div class="checkBoxBlock">
                    <div class="col-sm-6" style="border-right: 1px solid rgb(188, 188, 188);">
                        <label for="showCencored">Проказать матерные коменты</label>
                        <input type="checkbox" id="showCencored">
                    </div>
                    <div class="col-sm-6">
                        <label for="showNoCencored">Проказать коменты без мата</label>
                        <input type="checkbox" id="showNoCencored">
                    </div>
                </div>
                <div class="clearfix"></div>
                <?php
                $massage = getContent();
                showComment($massage,true);
                ?>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="addBadWords">
                <div id="addBadWordInfo">
                    <div class="col-sm-6" id="badWordCount"><p>В словаре <?=count(getBadWord()); ?> слов(а)</p></div>
                    <div class="col-sm-6"><a href="cencored/cen.db" download>Скачать список слов</a></div>
                </div>
                <div class="clearfix"></div>
                <form action="<?=$_SERVER['REQUEST_URI']?>" method="post" class="form-group">
                    <h2 class="headH2">Добывить слова</h2>
                    <textarea name="badWord" cols="36" rows="10" placeholder="Вводите слова с новой строчки"
                              class="form-control" required></textarea><br>
                    <input type="submit" name="submit" class="addBtn button">
                </form>
                <?php

                ?>
            </div>
        </div>

    </div>
    </body>
    </html>
<?php
}
?>

