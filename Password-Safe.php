<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/22 0022
 * Time: 上午 11:22
 */
include 'common/common.php';
$uid = $_SESSION['uid'];
//var_dump($uid);
//session接收传过来的密码
$oldpwd = $_SESSION['password'];
//var_dump($oldpwd);
//通过post接收过来的密码
$oldpwd1 = md5($_POST['oldpwd']);
//var_dump ($oldpwd1);
//通过post接收过来的新密码
$newpwd =  md5($_POST['newpwd']);
//var_dump($newpwd);
//通过post接收过来的确定新密码
$newpwd1 = md5($_POST['newpwd1']);
//var_dump($newpwd1);
//session接收传过来的email
$email = $_SESSION['email'];
//var_dump($email);
//通过post接收过来的新的email
$newemail = $_POST['newemail'];
//var_dump($newemail);
//通过post带过来的新的email
$problem = $_POST['problem'];
//var_dump($problem);
//通过post带过来的新的result

$result = $_POST['result'];
//var_dump($result);

if (strcmp($oldpwd,$oldpwd1)){
die("<script>alert('你的原密码错误，请填写正确的原密码');history.back();</script>");
}
if (strlen($newpwd)<6){
    die("<script>alert('你的密吗长度不符合要求');history.back();</script>");
}
if (strlen($newpwd1)<6){
    die("<script>alert('你的密吗长度不符合要求');history.back();</script>");
}
if (strcmp($newpwd,$newpwd1)){
    die("<script>alert('两次密码不一致');history.back();</script>");
}




$date['password'] = $newpwd;
$data['email'] = $newemail;
$date['problem'] = $problem;
$date['result']= $result;
$red = myUpdate($link,'bbs_user',$date,"uid = $uid");
//var_dump($red);
if ($red){
    header("refresh:3;url=shouye.php");
    print('正在加载，请稍等...<br>三秒后自动跳转首页~~~');
}else{
    die("<script>alert('修改失败');history.back();</script>");
}


















