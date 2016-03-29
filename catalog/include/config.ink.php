<?php
define('DBHOST', '127.0.0.1');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBBASE', 'work_23_03');

$link = mysqli_connect(DBHOST, DBUSER, DBPASS, DBBASE);
mysqli_set_charset($link, "utf8");//Добавлена кодировка текущего соединения
