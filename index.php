<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16 0016
 * Time: 上午 9:38
 */

include 'common/common.php';



//接收一下大板块传过来的值


//通过session带过来管理员和普通用户
$uname = '普通用户';


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


$site = mySelect($link,'*','bbs_site');
//var_dump($site);


//$huitie = mySelect($link,'count(*)','bbs_details',"first = 0");
//var_dump($huitie);
display('shouye.html',compact('uname','site','category','category1','usernum','newvip'));
