<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16 0016
 * Time: 上午 11:13
 */

include 'common/common.php';

$name = $_POST['username'];
$pwd = md5($_POST['pwd']);

$result = mySelect($link,'*','bbs_user',"username = '$name'and udertype = 1");


if ($result) {
    //判断密码是否正确
    $password = $result[0]['password'];
    if ($pwd == $password) {
        //登陆成功

        $_SESSION['username'] = $name;
        header('Location:after1.php');
    } else {
        echo "<script>alert('登陆失败');history.back();</script>";
    }
} else {
    echo "<script>alert('你还不是管理员哦');history.back();</script>";

    //header('Location:admin-login.php');
}
