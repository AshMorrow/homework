<?php
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
function showComment($massage){
    if(isset($massage)){
        $cens=["bad","worst","fuck"];

        $massage = array_reverse($massage);
        foreach($massage as $post){
            foreach($cens as $word){
                $post["userName"] = str_ireplace($word,"МАТ",$post['userName']);
                $post["userMassage"] = str_ireplace($word,"МАТ",$post["userMassage"]);

            }
            echo "<p>Пользователь  ".$post['userName']."<br>пришет</p>";
            echo "<p>".$post['userMassage']."</p>";
        }
    }
}
?>