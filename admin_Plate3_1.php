<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16 0016
 * Time: 下午 5:20
 */
include 'common/common.php';
$name = $_POST['username'];
//hoose是下面的选择，当hoose为零的时候选择是大板块，当hoose不是零的时候是小版块
$hoose = $_POST['hoose'];

//判断版块不能为空
if (empty($name)){
die ("<script>alert('版块名字不能为空！');history.back();</script>");
}
//判断一下hoose == 0那么就默认大板块，不为0为小版块
if ($hoose == 0){
  $data =  ['classname'=>$name];
  $red = myInsert($link,'bbs_category',$data);
 if ($red){
     echo "<script>alert('添加大版块成功！');history.back();</script>";
 }else{
     echo "<script>alert('添加大版块失败了！');history.back();</script>";
 }

}else{
    //当$hoose !== 0 时，插入的小版块
    $data = ['classname'=>$name,'parentid'=>$hoose];

   $red =  myInsert($link,'bbs_category',$data);

    if ($red){
        echo "<script>alert('恭喜添加小版块成功');history.back();</script>";
    }else{
        echo "<script>alert('添加小版块失败！');history.back();</script>";
    }
}









