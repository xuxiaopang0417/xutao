<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16 0016
 * Time: 上午 1:49
 */
include 'common/common.php';
//接收一下post传过来的inpu来值t原，也就是大小板块的名字
$classname = $_POST['classname'];
var_dump($classname);

//接收一下他的排序，在这里排序为空
$orderby = $_POST['orderby'];
//接收一下大小板块对应的cid
$select = $_POST['cid'];
var_dump($_POST['cid']);

//遍历cid,目的是得到唯一能确定的值
if(!empty($_POST['up'])) {
    if ($_POST['up']) {

        foreach ($_POST['cid'] as $key => $value) {

            //用取得value的值，当做cid值
            $cid = $value;
                var_dump($cid);

            //把两个数组的值合并成一个

            $update['classname'] = $classname[$key];


            $update['orderby'] = $orderby[$key];
            //数据库

            $result = myUpdate($link, 'bbs_category', $update, "cid = $cid");

       echo "<script>alert('修改成功');history.back();</script>";
            header('location:after3.php');

        }
    }
}
if(!empty($_POST['del'])) {
    foreach ($_POST['select']as $key=>$value) {

        //用取得value的值，当做cid值
        $cid = $key;
        var_dump($cid);
        $name = $value;
        $result = myDelete($link,'bbs_category',"cid='$cid'");
        if($result){
           // echo "<script>alert('删除成功');history.back();</script>";
           // header('location:after3.php');
        }
    }

}





