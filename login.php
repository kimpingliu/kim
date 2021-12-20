<?php
header ('Content-type:text/html;charset=utf-8');

session_start();


$dsn = "mysql:host=localhost;dbname=kim;charset=utf8";
$user = 'root';
$pwd = '123456';



try{
    $pdo = new PDO($dsn,$user,$pwd);

    
    if(!empty($_POST)){

        $username = isset($_POST['username']) ? trim($_POST['username']) : '';
        $password = isset($_POST['password']) ? ($_POST['password']) : '';

        $sql = $pdo->query("select id,username,password from user where username='$username' and password='$password'");
        $row = $sql->fetch();
        if($row) {
            session_start();
            $_SESSION["admin"] = 2;
            echo '<script>alert("登录成功");window.location.href="index.php";</script>';

            }else{

            die('登录失败！');
        }
    }

}catch(PDOException $e){
    echo $e->getMessage().'<br>';
    echo $e->getLine().'<br>';
    echo $e->__toString().'<br>';
}
define('APP', 'kim');
require 'login_html.php';

?>