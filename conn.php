<?php
/**
 * Created by PhpStorm.
 * User: vio
 * Date: 2018/8/25
 * Time: 11:10
 */
header("content-type:text/html;charset=utf-8");
$link = mysqli_connect('localhost','root','','shop','3306');
mysqli_query($link,'set names utf8');

