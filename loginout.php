<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/21 0021
 * Time: 下午 1:48
 */



include 'common.php';

session_start();

unset($_SESSION['name']);

unset($_SESSION['uid']);
session_destroy();
header("Location:index.php");
















