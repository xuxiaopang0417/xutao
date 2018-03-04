<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/22 0022
 * Time: 下午 9:14
 */
include 'common/common.php';
//通过post接收一下传过来的ip地址
$ip1 = $_POST['ip1'];
$ip2 = $_POST['ip2'];
$ip3 = $_POST['ip3'];
$ip4 = $_POST['ip4'];
$day = $_POST['day'];
//拼接一下地址
$arr = [$ip1,$ip2,$ip3,$ip4];
$array = join('.',$arr);
//var_dump($array);
date_default_timezone_set('PRC');
$time1 = time()+("$day"*(60*60*24));
//var_dump($time);
//$data['addtime'] = time();

$time = date("Y-m-d H:i:s",$time1);
if (empty($time)){
    die("<script>alert('时间不能为空！');history.back();</script>");
}

//var_dump($time);
$data['ip'] = $array;
$data['overtime'] = $time;
$red = myInsert($link,'bbs_closeip',$data);
var_dump($red);
if ($red){
    echo "<script>alert('禁止成功！');history.back();</script>";
}else{
    echo "<script>alert('你的格式不对，禁止失败！');history.back();</script>";
}