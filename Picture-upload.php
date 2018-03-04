<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/21 0021
 * Time: 下午 5:51
 */
include'common/common.php';
//用超全局变量来接收文件得到上传文件的名字
$arr = array_keys($_FILES);
$key = $arr[0];
//得到文件允许的mime类型
$mimeArray = ['image/png','image/jpeg','image/gif','image/wbmp'];
//得到文件允许的文件后缀类型
$suffixArray = ['png','jpeg','jpg','gif','wbmp'];
//允许的文件的大小
$maxSize = pow(1024,2);
//上传文件保存的路径
$path = 'upload/';
//是否启用随机的名字
$isRand = true;
$array = upload($key,$mimeArray,$suffixArray,$maxSize,$path,$isRand);

$_SESSION['picture'] = $array[1];





if ($array[0]){
    echo "<script>alert('上传成功');history.back();</script>";

}else{
    die('上传文件失败');
}






//
////得到文件上传的名字；
//
//$fileName = $array[1];
//
//$webPath = WEB_SITE.$fileName;
//
//$data['face'] = $webPath;
//
//$result = myUpdate($link,'user',$data,'id = 2');
//
//if ($result) {
//    $arr =  mySelect($link,'face','user','id = 2');
//    $face = $arr[0]['face'];
//    display('face.html',compact('face'));
//}
//








