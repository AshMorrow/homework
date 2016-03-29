<?php
/**
 * Created by PhpStorm.
 * Date: 23.03.2016
 */
session_start();
session_destroy();
header("Location: /work_23_03/login.php");
