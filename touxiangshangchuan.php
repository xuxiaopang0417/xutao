<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/21 0021
 * Time: 下午 5:20
 */
include 'common/common.php';

$data = ' ';
//$pric = $_SESSION['picture'];
//通过session带来图片的路径
@$picturn = $_SESSION['picture'];
//var_dump($picturn);


display('touxiangshangchuan.html',compact('picturn'));