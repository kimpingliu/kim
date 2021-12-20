<?php

header ('Content-type:text/html;charset=utf-8');

$dsn = "mysql:host=localhost;dbname=kim;charset=utf8";
$user = 'root';
$pwd = '123456';

$pdo = new PDO($dsn, $user, $pwd);

$pwd1 = $_POST('oldpassword');

$pwd2 = $_POST('newpassword');

$pwd3 = $_POST('assertpassword');

$sql1 = $pdo->query("select * from user where username='$username' and password='$pwd1'");
$q = $sql1->fetch()


if($pwd2 != $pwd3) {
    alert('两次输入的新密码不正确,请重新输入!','');
}else {
    if ($q) {
        $sql = "Update user set password='$pwd2' where username='$username'";
        mysql_query($sql) or die(mysql_error());
        alert('密码修改成功!', '');
    } else {
        alert('旧密码不正确,请重新输入!', '');
    }
}

?>
