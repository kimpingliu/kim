<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>修改密码</title>
    <style type="text/css">
        form{
            text-align: center;
        }
    </style>
</head>
<body>

<form  action="xiugai.php" method="post" onsubmit="return alter()">
    用户名<input type="text" name="username" id ="username" /><br/> 旧密码<input
        type="password" name="oldpassword" id ="oldpassword"/><br/> 新密码<input
        type="password" name="newpassword" id="newpassword"/><br/> 确认新密码<input
        type="password" name="assertpassword" id="assertpassword"/><br/> <input
        type="submit" value="修改密码" onclick="return alter()">
</form>


</body>
</html>