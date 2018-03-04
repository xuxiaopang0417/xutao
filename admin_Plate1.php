<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/22 0022
 * Time: 上午 11:53
 */

include 'common/common.php';

//站点名称
$sitename = $_POST['sitename'];

//网站名称
$webname = $_POST['webname'];
//网站URL
$url = $_POST['url'];

//网站备案信息代码

$webnumber = $_POST['webnumber'];

//是否关闭网站（0是不关闭，1是关闭）

$closeweb = $_POST['closeweb'];

//简单用正则匹配一下url地址
$a = preg_match('/^(http:\/\/www|https:\/\/www)/',$url);



if(!$a){

    echo "<script>alert('你的url地址不正确');window.location.href='after1.php';</script>";
}

//修改的数据（因为这个地方只能让管理员修改，所以我自定义id=1只有一条这样的数据）

$data = ['sitename'=>"$sitename",'webname'=>"$webname",'url'=>"$url",'webnumber'=>"$webnumber",'closeweb'=>"$closeweb"];





$result = myUpdate($link,'bbs_site',$data,"id=1");



if($result){

    echo "<script>alert('修改成功');window.location.href='after1.php';</script>";

}else{

    echo "<script>alert('修改失败，请稍后再试');window.location.href='after1.php';</script>";
}
