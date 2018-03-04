<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/17 0017
 * Time: 下午 4:09
 */
include 'common/common.php';



//$user1 = mySelect($link,'*','bbs_user');
//var_dump($user);
//$udertype = $user[0]['udertype'];
//var_dump($udertype);




$sum = mySelect($link,'count(uid)','bbs_user');


$count = $sum[0]['count(uid)'];//获取总行数

$num = 5;

$total=ceil($count/$num);



$page = empty($_GET['page']) ? 1 : $_GET['page'];


if ($page < 1)
{
    $page = 1;
}

if ($page > $total) {
    $page = $total;
}


$offset = ($page-1)*$num;



//查询用户表，区分是否是管理员
$user = mySelect($link,'*',"bbs_user limit $offset,$num");







display('after2.html',compact('user','page','total'));