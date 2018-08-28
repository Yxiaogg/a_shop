<?php
/**
 * Created by PhpStorm.
 * User: vio
 * Date: 2018/8/25
 * Time: 13:59
 */
session_start();
include_once 'conn.php';
@$arr = $_SESSION['shop_cart'];
if(@!$_SESSION['name']){
    echo '未登录    ';
    echo '<a href="login.php">登陆</a>';
}else{
    echo '你好'.@$_SESSION['name'];
    echo '<a href="logout.php">注销</a>';
}
?>
<h1>我的购物车</h1>
<table border="1" cellpadding="0" cellspacing="0" width="100%" >

    <th>商品名字</th>
    <th>商品数量</th>
    <th>商品价格</th>
<?php
$pay_money=0;
foreach (@$arr as $key=>$value){
//    echo $key;
//    echo ' ';
//    echo $arr[$key]['goods_num'];
    $sql = "select * from shop_info where id=$key";
    $res = mysqli_query($link,$sql);
    $row = mysqli_fetch_assoc($res);

    echo "<tr>";
    echo "<td>{$row['name']}</td>";
    echo "<td>{$arr[$key]['goods_num']}</td>";
    echo "<td>{$row['price']}</td>";
    echo "</tr>";
    $pay_money=$pay_money+$arr[$key]['goods_num']*$row['price'];
}
?>
    <tr>
        <h3>总共应付：<?php  echo $pay_money;?></h3>
    </tr>
</table>







