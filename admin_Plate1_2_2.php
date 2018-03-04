<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/23 0023
 * Time: 下午 12:09
 */
include 'common/common.php';
//接收一下post传过来的参数
$displayorder = $_POST['displayorder'];
//var_dump($displayorder);
$name = $_POST['name'];
$url = $_POST['url'];
$description = $_POST['description'];
$logo = $_POST['logo'];
//var_dump($_POST);
$data['displayorder'] = $displayorder;
$data['name'] = $name;
$data['url'] = $url;
$data['description'] = $description;
$data['logo'] = $logo;
$red = myInsert($link,'bbs_link',$data);
//var_dump($red);
if ($red){
    echo "<script>alert('添加成功');history.back();</script>";
}else{
    echo "<script>alert('添加失败');history.back();</script>";
}









