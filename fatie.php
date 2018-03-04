<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/20 0020
 * Time: 下午 5:25
 */
include 'common/common.php';
//用post接受一下标题和写入的内容
//$classid = $_POST['classid'];
//var_dump($classid);
$title = trim($_POST['title']);
$content = trim($_POST['content']);
//$authorid = trim($_POST['authorid']);
$uid = $_SESSION['uid'];
$authorid = $uid;
//var_dump($uid);
//var_dump($_POST);
$time = time();
//var_dump($title);
//var_dump($content);
//

//接收一下ip地址
$ip = $_SERVER['SERVER_ADDR'];
if ($ip = '::1'){
    $ip = "127.0.0.1";
}


//接受一下前面cid的值，
$cid = trim($_POST['cid']);
//判断标题是否为空，不为空继续往下写
if (empty($title)){
    die( "<script>alert('标题不能为空！');history.back();</script>");
}
if (empty($content)){
    die( "<script>alert('内容不能为空');history.back();</script>");
}
$data['first'] = 1;
$data['title'] = $title;
$data['content'] = $content;
$data['classid'] = $cid;
$data['authorid '] = $authorid;
$data['addtime'] = $time;
$data['addip'] = $ip;
//var_dump($data);

$red = myInsert($link,'bbs_details',$data);


//查询一下帖子表里面的最大id
$lin = mySelect($link,'max(id)','bbs_details',"first = 1");
//var_dump($lin);
//把最大id的下标取出来
$aaa = $lin[0]['max(id)'];





$motifcount1 = mySelect($link,'motifcount','bbs_category',"cid=$cid");
//var_dump($motifcount);
//原来数据库+1
$motifcount = ($motifcount1[0]['motifcount'])+1;

$data = ['motifcount'=>"$motifcount"];

//更新数据库
$a = myUpdate($link,'bbs_category',$data,"cid=$cid");







if ($red){
   header("location:huitie.php?id=$aaa");

}else{
    echo "<script>alert('发帖失败，再接再厉');history.back();</script>";
}

















