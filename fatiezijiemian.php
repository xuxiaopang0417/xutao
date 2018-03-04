<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/20 0020
 * Time: 下午 5:05
 */
include 'common/common.php';

if (empty($_SESSION['username'])){
die("<script>alert('你还没有登陆');history.back();</script>");
}
if (empty($_SESSION['password'])){
    die("<script>alert('你还没有登陆');history.back();</script>");
}

//接收get传过来的版块cid的值
$cid = $_GET['cid'];
$classid = $cid;
@$picturn = $_SESSION['picture'];
$_SESSION['classid'] = $classid;
//通过get传过来大板块传过来的值
$da = $_GET['da'];
//通过get传过来小版块的值名称
$xiao = $_GET['xiao'];
$data = ' ';
//通过session把用户名密码传过来
$name = $_SESSION['username'];

//查询大板块
$category = mySelect($link,'*','bbs_category','parentid=0');
//var_dump($category);
//查询小版块板块
$category1 = mySelect($link,'*','bbs_category','parentid!=0');

display('fatiejiemian.html',compact('cid','picturn','category','category1','da','xiao','classid'));