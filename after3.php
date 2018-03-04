<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16 0016
 * Time: 下午 4:08
 */
include 'common/common.php';

//查询所有大板块的信息
$big = mySelect($link,'*','bbs_category','parentid = 0');

//查询所有小版块的信息
$small = mySelect($link,'*','bbs_category','parentid !=0 ');

//以前是用include，现在走模板引擎


display('after3.html',compact('big','small'));
