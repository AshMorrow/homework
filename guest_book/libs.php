<?php

function deleteMassage(){
    if($_POST){
        $massage = array_reverse(getContent());
        $id = $_POST['remove'];
        unset($massage[$id]);
        $massageDB = serialize($massage);
        file_put_contents("1massage.db", $massageDB);
    }
}
function cenZor($post){
    /*(file_put_contents(ROOT.DS.'cencored'.DS.'cen.db',str_ireplace(',',PHP_EOL,file_get_contents(ROOT.DS.'cencored'.DS.'cen.db')));
    $arr = explode(PHP_EOL,file_get_contents(ROOT.DS.'cencored'.DS.'cen.db'));
    foreach($arr as $k => $v){
        $arr[$k] = trim($v);
    }*/
    $cens = explode(PHP_EOL,file_get_contents(ROOT.DS.'cencored'.DS.'cen.db'));
    foreach($cens as $word){
        $post["userName"] = str_ireplace($word,"МАТ",$post['userName']);
        $post["userMassage"] = str_ireplace($word,"МАТ",$post["userMassage"]);
    }
    return $post;
}
function getContent(){
    if(is_readable("1massage.db")){
        $massage = file_get_contents("1massage.db");
        $massage = unserialize($massage);
        return $massage;
    }
    return [];
}
function addComment($massage){
    if(isset($_POST['submit'])) {
        //echo var_dump($_POST);
        $newPost['userName'] = htmlspecialchars($_POST['userName']);
        $newPost['userMassage'] = htmlspecialchars($_POST['userMassage']);
        $massage[] = $newPost;
        $massageDB = serialize($massage);
        file_put_contents("1massage.db", $massageDB);
    }
    return $massage;
}
function showComment($massage,$adm = 0){
    if(isset($massage)){
        $massage = array_reverse($massage);
        foreach ($massage as $k => $post) {
            $post = cenZor($post);
            ?>
                <div class=""><sub>Пользователь</sub> <strong><?= $post['userName'] ?></strong> <?php if($adm){ ?>
                        <form action="" method="post">
                            <button type="submit" value="<?= $k; ?>" name="remove" class="btn-danger btn">Удалить
                            </button>
                        </form>
                    <?php } ?></div>
                <div class="panel-body">
                    <p><?=nl2br($post['userMassage']) ?></p>
                </div>
            <?php
        }
    }
}
?>