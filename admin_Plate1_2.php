<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/23 0023
 * Time: 上午 10:28
 */
include 'common/common.php';
//接收一下post传过来的数据
//$post = $_POST;
//var_dump($post);


$displayorder = $_POST['displayorder'];
//var_dump($displayorder);
$name = $_POST['name'];
//var_dump($name);
$url = $_POST['url'];
$description = $_POST['description'];
$logo = $_POST['logo'];
$title = $_POST['title'];
//拼接一下下标选项
$implode =  implode(',',$title);
//var_dump($implode);
if ($_POST['chu']=='删除'){
    //把接收过来的数据进行删除，这里无法改变字段值，只能进行物理删除
$red = myDelete($link,'bbs_link',"lid = $implode");
//var_dump($red);
header('location:after1_2.php');
}else{


    $data['displayorder'] = $displayorder;
    $data['name'] = $name;
    $data['url'] = $url;
    $data['description'] = $description;
    $data['logo'] = $logo;

$red = myUpdate($link,'bbs_link',$data,"lid = $implode");
//var_dump($red);
  header('location:after1_2.php');


}