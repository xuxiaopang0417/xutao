<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/19 0019
 * Time: 上午 9:43
 */
include 'common/common.php';

$data = ' ';
//首先查询出帖子的全部内容(frist=1是帖子（发帖）  0是回帖，在发帖回帖中会用到)
$details = mySelect($link,'*','bbs_details','first!=0 and isdel=1');//当isdel = 0的时候在这个页面显示，不为零的时候不显示

//查询出大板块的内容，主要是查询出帖子的内容时，还有涉及到大板块的一些信息之类的:例如板块名称
$category  =mySelect($link,'*','bbs_category','parentid !=0');

//查询帖子的数量，利用count函数
$num = mySelect($link,'count(*)','bbs_details','first!=0 and isdel=1');

//var_dump($num);
//连表查询，通过帖子表和用户表查询，查出用户的信息
$result = mySelect($link,'*','bbs_user inner join bbs_details','bbs_user.uid=bbs_details.id');
//var_dump($result);


display('after4_3.html',compact('details','category','num','result'));