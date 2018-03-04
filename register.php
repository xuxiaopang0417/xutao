<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/14 0014
 * Time: 下午 11:15
 */
include 'common/common.php';
$name = $_POST['username'];
$pwd = md5($_POST['pwd']);




if (empty($name)){
    die('用户名不能为空');
}
if (strlen($name)<6) {
    die('用户名不能长度不符合要求');
}
if (empty($pwd)){
    die('密码不能为空');
}
if (strlen($pwd)<6){
    die('密码长度不能少于6位数');
}

$result = mySelect($link,'*','bbs_user',"username = '$name'");
var_dump($result);

$result1 = mySelect($link,'*','bbs_user',"username = '$name'and udertype = 1");
/*
if ($result) {
    //判断密码是否正确
    $password = $result[0]['password'];

    if ($pwd == $password) {
        $_SESSION['username'] = $name;
        header('Location:shouye1.php');
    } else {
        echo "<script>alert('登陆失败');history.back();</script>";
    }
} else {
    echo "<script>alert('你还没有注册');history.back();</script>";
}
*/


//判断密码是否正确


    if ($result) {
        $password = $result[0]['password'];
        if ($pwd == $password) {
            $_SESSION['udertype'] = $result1[0]['udertype'];
            $_SESSION['uid'] = $result[0]['uid'];
            $_SESSION['username'] = $name;
            $_SESSION['password'] = $pwd;
            $_SESSION['email'] = $result1[0]['email'];

            header('Location:shouye2.php');
        }else{
            echo "<script>alert('登陆失败');history.back();</script>";
        }
    }else{
        if ($result == $result1 ) {
            $password = $result[0]['password'];
            if ($password == $pwd){
                $_SESSION['udertype']=$result1[0]['udertype'];
                $_SESSION['username'] = $name;
                $_SESSION['uid'] = $result[0]['uid'];
                $_SESSION['password'] = $pwd;
                $_SESSION['email'] = $result1[0]['email'];
                header('Location:shouye2.php');
            }else{
                echo "<script>alert('你还没有注册');history.back();</script>";

            }
        }
    }


















