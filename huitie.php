<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/23 0023
 * Time: 下午 1:50
 */
include 'common/common.php';
//mySelect($link,'')


@$classid = $_SESSION['classid'];

var_dump($classid);
//用get把最大下标取出来；
$a = $_GET['id'];
var_dump($a);
$rend = mySelect($link,'title','bbs_details',"first=1 and id =$a");
$yes = mySelect($link,'content','bbs_details',"first=1 and id =$a");

//查询发表时间
$time1 = mySelect($link,'addtime','bbs_details',"classid = $classid and first=1 and id=$a");
$time2 = $time1[0]['addtime'];
$time = getDiff($time2);
//var_dump($data);

//查询回帖tid= id
$huitie = mySelect($link,'*','bbs_details',"first = 0 and tid = $a");



//mySelect($link,$field,$table,$where = null)
$time1 = mySelect($link,'addtime','bbs_details'," first = 0 and tid = $a");
if (!empty($time1)){
    foreach ($time1 as $key => $value){
        $value['addtime'] = getDiff($value['addtime']);
        $time1[$key]['addtime'] = $value['addtime'];
    }
}


//var_dump($time1);
//$time2 = $time1[0]['addtime'];
//$huitime = getDiff($time2);
$m = 1516795220;
@$picturn = $_SESSION['picture'];




//查询大板块
$category = mySelect($link,'*','bbs_category','parentid=0');
//var_dump($category);
//var_dump($category);









display('huitie.html',compact('time','huitie','category','picturn','classid','rend','yes','time1','m','a'));