<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>欢迎注册</title>
</head>
<form action="register.php" method="post">
    <table >
        <tr><td class="title" colspan="2">欢迎注册新用户</td></tr>
        <tr><th>用户名：</th><td><input type="text" name="username" /></td></tr>
        <tr><th>邮箱：</th><td><input type="text" name="email" /></td></tr>
        <tr><th>密码：</th><td><input type="password" name="password" id="pw1" /></td></tr>
        <tr><th>确认密码：</th><td><input type="password" id="pw2" /></td></tr>
        <tr><td colspan="2" class="td-btn">
                <input type="submit" value="提交注册" class="button" />
                <input type="button" value="返回登录" class="button" onclick="location.href='login.php'"  />
            </td></tr>
    </table>
</form>
