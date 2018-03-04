<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/22 0022
 * Time: 上午 8:59
 */
include'common/common.php';
$uid = $_SESSION['uid'];
//var_dump($uid);
//接收用户真实姓名
$realname = $_POST['realname'];
//var_dump($realname);
if (empty($realname)){
    die( "<script>alert('你的用户名不能为空');history.back();</script>");
}
//接收用户的男女
$sex = $_POST['sex'];
//接收用户生日

$nian = $_POST['nian'];
//var_dump($nian);
$yue = $_POST['yue'];
$ri = $_POST['ri'];
$birthday1 = [$nian,$yue,$ri];
//var_dump($birthday);
$birthday = join(',',$birthday1);

//var_dump($birthday);
//var_dump($ri);
//接收用户所在地
$place = $_POST['place'];

//接收用户的qq
$qq = $_POST['qq'];
$a=preg_match('/^\d\d{5,10}$/',$qq);//返回值是int型（0或1）
if (!$a){
    echo "<script>alert('你的qq格式有误');history.back();</script>";
}
$data['realname'] = $realname;
$data['sex'] = $sex;
$data['birthday'] = $birthday;
$data['place'] = $place;
$data['qq'] = $qq;
$red = myUpdate($link,'bbs_user',$data,"uid = $uid");
if ($red){
    echo "<script>alert('你的信息正确，插入成功');history.back();</script>";
}
