<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登陆</title>
</head>
<body>
<form action="#" method="post">
    <div>账号：<input type="text" name="user" placeholder="请输入账户"></div>
    <div>密码：<input type="password" name="pwd" placeholder="请输入密码"></div>
    <input type="submit" value="登陆">
</form>
</body>
</html>
<?php
include_once ("conn.php");
    @$name = $_POST['user'];
   @$pwd = $_POST['pwd'];
   $sql = "select id,username from user where username='$name' and pwd='$pwd'";
   $res = mysqli_query($link,$sql);
   @$a = mysqli_fetch_assoc($res);
if($a){
    session_start();
    $_SESSION['id']=$a['id'];
    $_SESSION['name']=$a['username'];
    header("Location:index.php");
}
else{
    echo '登录失败';
}
?>
