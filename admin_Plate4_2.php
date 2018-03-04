<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/19 0019
 * Time: 下午 1:41
 */
include 'common/common.php';
//可以用一个post传参过来;把所有的数据带过来
$name = $_POST;
//把post传过来的title下标的值拼接成字符串
$data = implode(',',$_POST['title']);
var_dump($data);
//修改一下isdel的值，0为显示，不为零不显示；
$isdel = ['isdel'=>1];

//在php中删除多使用逻辑删除，很少用到物理删除，因为逻辑删除不会把数据库的数据删除的，
//只是让视觉上看不到，因而使用的是修改函数
//在这里使用id in （$data）把要修改点中的小标选中
$update = myUpdate($link,'bbs_details',$isdel,"id in($data)");
//var_dump($update);
header('Location:after4_3.php');
