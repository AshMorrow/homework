<?php

function deleteMassage(){/* Функция удаления коментария */
    if(isset($_POST['remove'])){
        $massage = array_reverse(getContent());
        $id = $_POST['remove'];
        unset($massage[$id]);
        $massageDB = serialize($massage);
        file_put_contents("1massage.db", $massageDB);
    }
}

function cenZor($post,$key){/* Функция цензурирования */
    $cens = getBadWord();
    $postTemp["userName"] = md5($post["userName"]);
    $postTemp["userMassage"] = md5($post["userMassage"]);
    foreach ($cens as $word) {
        $post["userName"] = str_ireplace($word, "МАТ", $post['userName']);
        $post["userMassage"] = str_ireplace($word, "МАТ", $post['userMassage']);
    }
    if($postTemp["userName"] != md5($post["userName"])){
        $post["cencored"] = $key;
    }elseif( $postTemp["userMassage"] != md5($post["userMassage"])){
        $post["cencored"] = $key;
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
        $newPost['userName'] = htmlspecialchars($_POST['userName']);
        $newPost['userMassage'] = htmlspecialchars($_POST['userMassage']);
        $massage[] = $newPost;
        $massageDB = serialize($massage);
        file_put_contents("1massage.db", $massageDB);
    }
    return $massage;
}

function showComment($massage,$adm = 0){
    if (isset($massage)) {
        $massage = array_reverse($massage);
        foreach ($massage as $k => $post) {
            //if(!$adm){

            //}
            $post = cenZor($post,$k);
            showCommentHtml($post,$adm,$k);
        }
    }
}

function showCommentHtml($post,$adm,$k){ /**HTML часть вывода коментариев****/
    ?>
    <div class="<?php
    if($adm == 0){ echo 'commentBlock '; }else{ echo 'adminCommentBlock ';}
    if(isset($post['cencored'])){ echo "cencored";}else {echo "notCencored";} ?>">
        <div class="userNameBlock"><span class="users">Пользователь</span> <strong
                class="userName"><?= $post['userName']
                ?></strong>
            <?php if ($adm) { ?>
                <form action="" method="post" class="delForm">
                    <button type="submit" value="<?=$k; ?>" name="remove" class="delFormBtn">Удалить
                    </button>
                </form>
            <?php } ?></div>
        <div class="panel-body">
            <p><?= nl2br($post['userMassage']) ?></p>
        </div>
    </div>
    <?php
}

function getBadWord(){
    if(is_readable(ROOT . DS . 'cencored' . DS . 'cen.db')){
        $cen = explode(PHP_EOL, file_get_contents(ROOT . DS . 'cencored' . DS . 'cen.db'));
    }
    return $cen;
}
function addBadWord($cen){
    if(isset($_POST['submit'])) {
        $newBadWord = explode(PHP_EOL,strip_tags($_POST['badWord']));
        $newBadWord = array_unique($newBadWord);
        foreach($newBadWord as $val) {
            file_put_contents(ROOT . DS . 'cencored' . DS . 'cen.db', $val.PHP_EOL,FILE_APPEND);
        }
        return $newBadWord;
    }
}
function showBadWods($cen){
    print_r($cen);
}
function userLogin(){
    if(isset($_POST["submit"])){
        $users = json_decode(file_get_contents("users/passwd"),true);
        if($users["login"] == md5($_POST["userLogin"]) && $users["password"] == md5($_POST["userPass"])){
            $_SESSION["sessionId"] = session_id();
            header("Location: ./adm.php");
            exit;
        }
    }
}
function userLogout(){
    if(isset($_POST["exit"])){
        unset($_SESSION["sessionId"]);
        header("Location: ./login.php");
    }elseif(!isset($_SESSION["sessionId"])){
        header("Location: ./login.php");
    }
}
?>

