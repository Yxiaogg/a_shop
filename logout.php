<?php
/**
 * Created by PhpStorm.
 * User: vio
 * Date: 2018/8/25
 * Time: 13:26
 */
session_start();
unset($_SESSION['name']);
session_destroy();
header('location:index.php');
