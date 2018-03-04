<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/17 0017
 * Time: 下午 9:27
 */
include 'common/common.php';

$data = ' ';
//通过session带过来管理员和普通用
$name =$_SESSION['username'];
$user = '管理员';
$uname = '普通用户';
@$picturn = $_SESSION['picture'];






//查询大板块
$category = mySelect($link,'*','bbs_category','parentid=0');
//var_dump($category);
//查询小版块板块
$category1 = mySelect($link,'*','bbs_category','parentid!=0');

//var_dump($category1);
//查询会员数量
$usernum = mySelect($link,'count(*)','bbs_user');
//var_dump($usernum);
$namer = $usernum[0]['count(*)'];

//查询最新会员（通过uid自增，最大的即为最新会员）
$newvip1 = mySelect($link,'*','bbs_user',"uid>0 order by uid desc");
$newvip = $newvip1[0]['username'];


//var_dump($newvip);
//查询帖子数量
$numdetails = mySelect($link,'count(*)','bbs_details','id!=0');
$num = $numdetails[0]['count(*)'];
//var_dump($num);
//var_dump($numdetails);












display ('shouye2.html',compact('name','user','picturn','uname','namer','category','category1','usernum','newvip','numdetails','num'));
