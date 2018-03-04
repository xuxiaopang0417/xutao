<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16 0016
 * Time: 上午 9:38
 */

include 'common/common.php';
$cid = $_GET['cid'];
@$username = $_SESSION['username'];
//通过session带过来管理员和普通用户
$uname = '普通用户';

@$picturn = $_SESSION['picture'];
//查询大板块
$category = mySelect($link,'*','bbs_category','parentid=0');
//var_dump($category);
//查询小版块板块
$category1 = mySelect($link,'*','bbs_category','parentid!=0');

//var_dump($category1);
//查询会员数量
$usernum = mySelect($link,'count(*)','bbs_user','uid != 0');
//var_dump($usernum);

//查询最新会员（通过uid自增，最大的即为最新会员）
$newvip=mySelect($link,'*','bbs_user',"uid>0 order by uid desc");
//select * from bugdata where id>0 order by id desc
//var_dump($newvip);
//查询帖子数量
$numdetails = mySelect($link,'count(*)','bbs_details','id!=0');



display('shouye3.html',compact('uname','username','picturn','category','category1','usernum','newvip','numdetails','cid'));
