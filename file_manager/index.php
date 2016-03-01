<?php
if($_POST){
    header("Location:".$_SERVER["REQUEST_URI"]);
}
define('ROOT',dirname(__FILE__));
define('DS',DIRECTORY_SEPARATOR);
require_once "lib.ink.php";
if(isset($_GET['dir'])) {
    $arr = parse_url($_SERVER['REQUEST_URI']);
    $dir = scandir(ROOT.DS.$_GET['dir']);
    $cdir = $_GET['dir'];
}else {
    $dir = scandir(".");
    $cdir = false;
}
?>
<!DOCTYPE html>
<html>
<?php
    require_once "head.ink.php";
?>
<body>
<div class="container" style="margin: 5% auto;padding: 0px 0;">
    <?=upFolder($cdir)?>
    <div class="col-md-12 cont">
    <div class="col-sx-12">

    </div>
    <div class="col-md-3 divBorder">
        <h3>Папки</h3>
          <?php getFolder($dir,$cdir); ?>
    </div>
    <div class="col-md-3 divBorder">
        <h3>Файлы</h3>
          <?php getFile($dir,$cdir); ?>
    </div>
    <div class="col-md-6 ">
        <h3>Картинки</h3>
        <div style="border-top: 1px solid rgb(221, 221, 221);">
            <?php getImage($dir,$cdir); ?>
        </div>
    </div>

        </table>
    </div>
    <div class="col-md-12 fomBlock">
    <?php
    if(isset($_GET['filename'])){
        ?>

        <form action="" method="post" >
            <textarea name="content" id="editForm"><?=htmlspecialchars(file_get_contents($_GET['filename'])); ?></textarea>
            <input type="submit" name="edit" class="delFormBtn" value="Сохранить">
            <input type="hidden" name="filename" value="<?=$_GET['filename'];?>">
        </form>

        <?php
        if(isset($_POST["edit"])){
            file_put_contents($_POST['filename'],htmlspecialchars_decode($_POST['content']));
        }
    }
    if(isset($_POST['rename'])){
        echo $_POST['oldName']." ".$_POST['newName'];
        renameDir($cdir,$_POST['oldName'],$_POST['newName']);
    }
?>
    </div>
</div>
</body>
</html>