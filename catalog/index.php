<?php
error_reporting(E_ALL);
ob_start();
session_start();
if ($_SESSION['user'] != "logged") {
    header("Location: /work_23_03/login.php");
    exit;
}

?>
<!DOCTYPE html>
<html>
<?php
include_once 'include/head.ink.php';
require_once 'include/lib.ink.php';
require_once 'include/config.ink.php';
if(isset($_GET['clear_form'])){
    header("Location: /work_23_03/index.php");
    exit;
}
if ($_POST) {
    foreach ($_POST as $k => $v) {
        $_POST[$k] = input_validator($v);
    }
}
if (!isset($_SESSION['admin'])) {
    $sql = "SELECT admin FROM users WHERE login='{$_SESSION['login']}'";
    $res = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($res);
    $_SESSION['admin'] = $row['admin'];
}
?>
<body>
<div class="container">
    <div class="col-lg-3">
        <?php display_filter($link); ?>
    </div>
    <div class="col-lg-9">
        <?php

        if (isset($_POST['edit'])) {
            if (isset($_POST['id'])) {
                $res = change_db($link);
            } else {
                $res = change_db($link, true);
            }
            header("Locetion: ".$_SERVER['REQUEST_URI']);
        }


        $items = get_item($link);

        ?>
        <a href="/work_23_03/logout.php" class="pull-right btn btn-danger">Logout <?= $_SESSION['login'] ?></a>
        <div class="clearfix"></div>
        <?php
        if($_SESSION['admin'] == 'y') {
            display_form();
        }
        echo "<div class='clearfix'></div>";
        foreach ($items as $item) {
            if ($_SESSION['admin'] == 'y') {
                display_form(true, $item);
            } elseif ($item['is_active']) {
                display_product($item);
            }
        }


        ?>
    </div>
</div>
</body>
</html>