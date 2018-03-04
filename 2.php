<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/14 0014
 * Time: 下午 1:16
 */

include 'common/common.php';
$name = trim($_POST['username']);
var_dump($name);

$pwd = trim($_POST['pwd']);

$repwd = trim($_POST['repwd']);
$email = trim($_POST['email']);

$retext = trim($_POST['retext']);

$code = $_POST['retext'];
$code1 = $_SESSION['code'];


$exist = mySelect($link,'username','bbs_user',"username='$name'");


//判断用户有没有被注册

if($exist){
    echo "<script>alert('该用户已被注册！');history.back();</script>";

    die();
}



if (empty($name)){
    die('用户名不能为空');
}
if (strlen($name)<6) {
    die('用户名不能长度不符合要求');
}



if (empty($pwd)){
    die('密码不能为空');
}
if (strlen($pwd)<6){
    die('密码长度不能少于6位数');
}
if (strcmp($pwd,$repwd)){
    die('两次密码不一致');
}
if (empty($email)){
    die('邮箱不能为空');
}
if (strlen($email)<6){
    die('邮箱长度不符合要求');
}
if (strcasecmp($code,$code1)){
   die('验证码输入不正确');

}


//给用户密码加密
$pwd = md5($pwd);
//获取用户id地址

$ip = $_SERVER['REMOTE_ADDR'];

if ($ip =='::1'){
    $ip = '127.0.0.1';
}
//把ip转换为整型
$ip = ip2long($ip);


//$data =['username'=>"$name",'password'=>"$pwd",'regip'=>"$ip",'email'=>"$email"];
$data['username'] = $name;
$data['password'] = $pwd;
$data['regip'] = $ip;
$data['email'] = $email;
$red = myInsert($link,'bbs_user',$data);

if ($red){
    echo "<script>alert('注册成功');history.back();</script>";
}else{
    echo"<script>alert('注册失败');history.back();</script>";
}






