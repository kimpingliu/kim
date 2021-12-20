<?php
$admin = false;
session_start();
if (isset($_SESSION["admin"]) && $_SESSION["admin"] === 2) {
    echo "成功";
}else{
    echo '没登录'.'<hr />';
}



