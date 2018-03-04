<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/23 0023
 * Time: 下午 11:39
 */
include 'common/common.php';

//接收post传过来的值
$content = $_POST['content'];
//var_dump($content);
//接收uid和authorid相同
$uid = $_SESSION['uid'];
$title = $_POST['title'];
//var_dump($title);
$authorid = $uid;
//var_dump($authorid);
@$tid = $_SESSION['id'];
//var_dump($tid);


//var_dump($uid);
$classid = $_SESSION['classid'];

$cid = $classid;
//var_dump($cid);
//var_dump($classid);
//$tid = $classid;
//$tid = $_POST['tid'];
//var_dump($tid);
//接收的tid=发帖的id
$tid = $_POST['id'];
//var_dump($tid);




$time = time();

//接收一下ip地址
$ip = $_SERVER['SERVER_ADDR'];
if ($ip = '::1'){
    $ip = "127.0.0.1";
}


$data['first'] = 0;
$data['tid'] = $tid;
$data['authorid'] = $authorid;
$data['title'] = $title;
$data['addip'] = $ip;
$data['content'] = $content;
$data['classid'] = $classid;
$data['addtime'] = $time;







$read = myInsert($link,'bbs_details',$data);




if ($read){
    echo "<script>alert('回复成功');history.back();</script>";


}else{
    echo "<script>alert('回复失败');history.back();</script>";
}








$replycount1 = mySelect($link,'replycount','bbs_category',"cid=$cid");
//原来数据库+1
$replycount = ($replycount1[0]['replycount'])+1;

$data = ['replycount'=>"$replycount"];

//更新数据库
$a = myUpdate($link,'bbs_category',$data,"cid=$cid");

//var_dump($read);



