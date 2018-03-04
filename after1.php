<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16 0016
 * Time: 上午 10:06
 */

include 'common/common.php';


//管理员的名字
@$name = $_SESSION['username'];

//网站的信息
$webinfo = mySelect($link,'*','bbs_site');

display('after1.html',compact('webinfo','name'));

