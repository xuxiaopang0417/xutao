<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/13 0013
 * Time: 上午 10:56
 */
include '/authcode.php';
session_start();
$_SESSION['code'] = authcode();