<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/21 0021
 * Time: 下午 8:50
 */
include 'common/common.php';

$data = ' ';
//$pric = $_SESSION['picture'];
//通过session带来图片的路径和需要的资源

@$picturn = $_SESSION['picture'];
//var_dump($picturn);
@$uid = $_SESSION['uid'];
//$name = $_SESSION['username'];
@$pwd = $_SESSION['password'];
@$email = $_SESSION['email'];
//查看个性签名
 $red = mySelect($link,'autograph','bbs_user',"uid = $uid");

display('gexingqianming.html',compact('picturn','uid','pwd','email','red '));