<?php
header ('Content-type:text/html;charset=utf-8');

$dsn = "mysql:host=localhost;dbname=kim;charset=utf8";
$user = 'root';
$pwd = '123456';

try{
    $pdo = new PDO($dsn,$user,$pwd);

    if(!empty($_POST)){

        $fields = array('username','password','email');

        $values = array();

        foreach($fields as $k=>$v){

            $data = isset($_POST[$v]) ? $_POST[$v] : '';

            if($data=='') die($v.'字段不能为空！');

            $fields[$k] = "$v";

            $values[] = "'$data'";

        }

        $fields = implode(',', $fields);

        $values = implode(',', $values);

        $sql = "insert into user ($fields) values ($values)";

        if($res = $pdo->query($sql)){
            echo '<script>alert("注册成功！");window.location.href="login_html.php";</script>';
        }else{
            die ('注册失败！');
        }
    }

}catch(PDOException $e){
    echo $e->getMessage().'<br>';
    echo $e->getLine().'<br>';
    echo $e->__toString().'<br>';
}
define('APP', 'kim');
require 'register_html.php';
?>