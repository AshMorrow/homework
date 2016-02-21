<?php
define('ROOT',dirname(__FILE__));
define('DS',DIRECTORY_SEPARATOR);
include_once "libs.php";
deleteMassage();
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
    </head>
    <body>
    <div class="container">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#massages" aria-controls="home" role="tab" data-toggle="tab">Massages</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="massages">
                <?php
                $massage = getContent();
                showComment($massage,true);
                ?>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="profile">...</div>
            <div role="tabpanel" class="tab-pane fade" id="home">...</div>
            <div role="tabpanel" class="tab-pane fade" id="settings">...</div>
        </div>

    </div>
    </body>
    </html>


