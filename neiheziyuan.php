<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/20 0020
 * Time: 下午 2:55
 */
include 'common/common.php';

@$newname = $_SESSION['username'];
@$picturn = $_SESSION['picture'];

$cid = $_GET['cid'];


//接收一下大板块传过来的值
$da = $_GET['da'];
//接收一下小版块传过来的值

$xiao = $_GET['xiao'];
//var_dump($xiao);


//查询大板块
$category = mySelect($link,'*','bbs_category','parentid=0');
//var_dump($category);
//查询小版块板块
$category1 = mySelect($link,'*','bbs_category','parentid!=0');


//查询帖子
$details = mySelect($link,'*','bbs_details',"first=1 and isdel = 0");
//var_dump($details);
//var_dump($category1);
//查询会员数量


//查询帖子的数量，利用count函数
$num = mySelect($link,'count(*)','bbs_details','first=1 and isdel=0');
//var_dump($num);
$num1 = $num[0]['count(*)'];
//var_dump($num);
//连表查询，通过帖子表和用户表查询，查出用户的信息
$result = mySelect($link,'*','bbs_user');


$usernum = mySelect($link,'count(*)','bbs_user','uid != 0');
//var_dump($usernum);

//查询最新会员（通过uid自增，最大的即为最新会员）
$newvip = mySelect($link,'*','bbs_user',"uid>0 order by uid desc");
//select * from bugdata where id>0 order by id desc
//var_dump($newvip);
//查询帖子数量
$numdetails = mySelect($link,'count(*)','bbs_details','id!=0');




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



display('neiheziyuan.html',compact('uname','num','newvip','usernum','namer','category','newname','picturn','category1','details','num1','usernum','newvip','numdetails','num','result','da','xiao','cid'));
