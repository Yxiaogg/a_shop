<?php
/**
 * Created by PhpStorm.
 * User: vio
 * Date: 2018/8/25
 * Time: 13:32
 */
session_start();
include_once 'conn.php';

//$ids = $_GET['ids'];
////$goods_name = $_GET['goods_name'];
////$arr = $_SESSION['shop_cart'];
////
////
////if(array_key_exists($goods_name,$arr)){
////    $a = $arr['goods_name']['goods_num']++;
////    echo '存在该商品'.$arr['goods_name']['goods_num'];
////}
////else{
////    $sql = "select * from shop_info where 'id' =".$ids;
////    $res = mysqli_query($link,$sql);
////    $row = mysqli_fetch_assoc($res);
////
////}
//print_r($_GET);
$goods_id=$_GET['goods_id'];
$goods_name = $_GET['goods_name'];
$arr = $_SESSION['shop_cart'];
if(@array_key_exists($goods_id,$arr)){
$arr[$goods_id]['goods_num']++;
}else{
    $arr[$goods_id]['goods_num']=1;
//    $sql = "select * from shop_info where 'id'=".$goods_id;
//    $res = mysqli_query($link,$sql);
//    $row = mysqli_fetch_array($res);
//    print_r($row);
}

$_SESSION['shop_cart']=$arr;
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
header('location:my_buy.php');




