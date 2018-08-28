<?php
session_start();
    if(@!$_SESSION['name']){
        echo '未登录    ';
        echo '<a href="login.php">登陆</a>';
    }else{
        echo '你好'.@$_SESSION['name'];
        echo '<a href="logout.php">注销</a>';
    }

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>购物主页</title>
</head>

<body>
<h1>小黑购物商城</h1>
<table border="1" cellpadding="0" cellspacing="0" width="100%" >
    <tr>
        <td>代号</td>
        <td>水果名称</td>
        <td>水果价格</td>
        <td>水果产地</td>
        <td>水果库存</td>
        <td>操作</td>
    </tr>
    <?php
    include_once ("conn.php");
    $sql = "select * from shop_info";
    mysqli_query($link,'set names utf8');
    $res =mysqli_query($link,$sql);
    while ($arr =mysqli_fetch_assoc($res)){
        echo " <tr>
        <td>{$arr['id']}</td>
        <td>{$arr['name']}</td>
        <td>{$arr['price']}</td>
        <td>{$arr['location']}</td>
        <td>{$arr['sum']}</td>
        <td>
        <a href='shop_cart.php?goods_id={$arr["id"]}&goods_name={$arr["name"]}'>加入购物车</a>
</td>
    </tr>";
    }
    ?>
</table>

<a href="#">查看账户</a>
<a href="my_buy.php">查看购物车</a>


</body>
</html>
