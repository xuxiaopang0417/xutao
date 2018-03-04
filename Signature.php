<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/22 0022
 * Time: 下午 4:17
 */
include 'common/common.php';
$uid = $_SESSION['uid'];
$autograph = $_POST['autograph'];

$data['autograph'] = $autograph;
$red = myUpdate($link,'bbs_user',$data,"uid = $uid");
if ($red){
    echo "<script>alert('个性签名修改成功');history.back();</script>";
}
