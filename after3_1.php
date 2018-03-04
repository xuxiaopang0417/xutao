<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16 0016
 * Time: 下午 4:12
 */
include 'common/common.php';


$data = mySelect($link,'*','bbs_category',"parentid=0");

display('after3_1.html',compact('data'));