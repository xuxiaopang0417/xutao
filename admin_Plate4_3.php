<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/18 0018
 * Time: 下午 9:38
 */
include 'common/common.php';
//可以用一个post传参过来;把所有的数据带过来

var_dump($_POST);




if ($_POST['recover'] == '恢复主题'){

//把post传过来的title下标的值拼接成字符串
    $data = implode(',',$_POST['title']);

//var_dump($data);
//修改一下isdel的值，0为显示，不为零不显示；
    $isdel = ['isdel'=>0];

//在php中删除多使用逻辑删除，很少用到物理删除，因为逻辑删除不会把数据库的数据删除的，
//只是让视觉上看不到，因而使用的是修改函数
//在这里使用id in （$data）把要修改点中的小标选中
    $update = myUpdate($link,'bbs_details',$isdel,"id in($data)");
    header('Location:after4_1.php');

}else{
    //把title传来的下标进行拼接，不然会以一个数组形式过来
    $data = join(',',$_POST['title']);

//修改一下isdel的值，1为显示，为零不显示；
    $isdel = ['isdel'=>2];

//在php中删除多使用逻辑删除，很少用到物理删除，因为逻辑删除不会把数据库的数据删除的，
//只是让视觉上看不到，因而使用的是修改函数
//在这里使用id in （$data）把要修改点中的小标选中
    $update = myUpdate($link,'bbs_details',$isdel,"id in($data)");
    header('Location:after4_1.php');

}
