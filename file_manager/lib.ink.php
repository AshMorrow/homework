<?php
function upFolder($cdir){
    $upPath = explode(DS,$cdir);
    $countPath = count($upPath)-1;
    if($upPath != ""){
        unset($upPath[$countPath]);
        $upPath = implode(DS,$upPath);
    }else{
        $upPath = implode(DS,$upPath);
    }
    if(isset($_GET['dir']) AND $_GET['dir'] != '') {
        echo "<a href=?dir=$upPath><span class='glyphicon glyphicon-level-up backBtn' aria-hidden='true'
style='margin-right: 8px;'> Наверх</span></a>";
    }else{
        echo "<span class='glyphicon glyphicon-ban-circle backBtn' aria-hidden='true'
style='margin-right: 8px;'> Корень</span>";
    }
}

function getFolder($dir,$cdir){
    echo '<table class="table myTable">';
    foreach ($dir as $filename) {
        echo '<tr>';

        if ($filename != "." AND $filename != "..") {
            if ($cdir) {
                if (is_dir(ROOT . DS . $cdir . DS . $filename)) {
                    echo"
                    <td>
                    <a href=?dir=".$cdir.DIRECTORY_SEPARATOR.$filename." style='color: red'>"
                    .'<span class="glyphicon glyphicon-folder-open" aria-hidden="true" style="margin-right: 8px;
                    "></span>'. $filename . "</a>
                    <span class='glyphicon glyphicon-pencil spRename' value='$filename' aria-hidden='true'
                    style='float:right;'></span>
                    <div class='clearfix'>
                    <form action='' method='post' class='$filename renameForm' style='display:none;'>
                    <input type='text' name='newName' class='form-control inputName'>
                    <input type='hidden' name='oldName' value={$filename}>
                    <button type='submit' name='rename' class='btn'> <span class=' glyphicon glyphicon-ok' aria-hidden='true'
                    style='float:right;'></span></button>
                    </form>
                    </td>";
                }
            }else if (is_dir(ROOT . DS . $filename)) {
                echo "<td><a href=?dir=$filename style='color: red'>" . '<span class="glyphicon
                glyphicon-folder-open" aria-hidden="true" style="margin-right: 8px;"></span>' . $filename . "</a>
                <span class='glyphicon glyphicon-pencil spRename' value='$filename' aria-hidden='true'
                    style='float:right;'></span>
                    <div class='clearfix'>
                    <form action='' method='post' class='$filename renameForm' style='display:none;'>
                    <input type='text' name='newName' class='form-control inputName'>
                    <input type='hidden' name='oldName' value={$filename}>
                    <button type='submit' name='rename' class='btn'> <span class=' glyphicon glyphicon-ok' aria-hidden='true'
                    style='float:right;'></span></button>
                    </form>
                </td>";
            }
            echo '</tr>';
        }
    }
    echo '</table>';
}


function getImage($dir,$cdir,$tag='li'){
    echo '<ul class="imgUl">';
    foreach($dir as $filename) {
        // echo '<tr>';

        if ($filename != "." AND $filename != "..") {
            if($cdir) {
                $cdirReplaced = './'.str_replace(DIRECTORY_SEPARATOR,'/',$cdir).'/'.$filename;
                if(@getimagesize(ROOT.DS.$cdir.DS.$filename)){
                    echo "<{$tag} class='imgLi'><a rel=group href={$cdirReplaced}  class='fancybox image'><img src={$cdirReplaced}
                    alt='{$filename}' width='50' height='50'><br>" . $filename . "</a>
                    </{$tag}>";
                }
            }else if(@getimagesize(ROOT.DS.$filename)) {
                echo "<{$tag} class='imgLi'><a rel=group href=$filename class='fancybox image'><img src={$filename}
alt='{$filename}'
                width='50' height='50'><br>" . $filename . "</a></{$tag}>";
            }
        }
        // echo '</tr>';
    }
    echo '</ul>';
}


function getFile($dir,$cdir,$tag='td'){
    echo '<table class="table myTable">';
    foreach($dir as $filename) {
        echo '<tr>';

        if ($filename != "." AND $filename != "..") {
            if($cdir) {
                if (is_file(ROOT . DS . $cdir . DS . $filename) AND !(@getimagesize(ROOT . DS . $cdir . DS . $filename))) {
                    echo "<{$tag}><a href=?dir={$cdir}&filename=" . ROOT . DS . $cdir . DS . $filename . "><span class='glyphicon glyphicon-file' aria-hidden='true' style='margin-right: 8px;'></span>" . $filename .
                        "</a></{$tag}>";
                }
            }else if(is_file(ROOT.DS.$filename) AND !(@getimagesize(ROOT.DS.$filename))) {
                echo "<{$tag}><a href=?filename=$filename><span class='glyphicon glyphicon-file' aria-hidden='true'
style='margin-right: 8px;'></span>" . $filename . "</a></{$tag}>";
            }
        }
        echo '</tr>';
    }
    echo '</table>';
}

function renameDir($cdir,$filename,$newName){
    if($cdir){
        rename(ROOT.DS.$cdir.DS.$filename,ROOT.DS.$cdir.DS.$newName);
    }else{
        echo ROOT.DS.$filename;
        rename(ROOT.DS.$filename,ROOT.DS.$newName);
    }
}

