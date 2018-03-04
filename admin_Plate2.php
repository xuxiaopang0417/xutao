<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/17 0017
 * Time: 下午 4:20
 */
include 'common/common.php';
//接收post的传值
//var_dump($_POST);
$title = $_POST['title'];
//var_dump($title);
//把下标进行拼接
$implode = implode(',',$title);
//var_dump($implode);
//$date = ['udertype=>3'];
 $red = myDelete($link,'bbs_user',"uid = $implode");
 if ($red){
      echo "<script>alert('删除成功');history.back();</script>";
 }else{
     echo "<script>alert('删除失败');history.back();</script>";
 }