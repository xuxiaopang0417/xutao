<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16 0016
 * Time: 下午 3:50
 */
include 'common/common.php';
//查看bbs_link表
$lin = mySelect($link,'*','bbs_link');

display('after1_2.html',compact('lin'));