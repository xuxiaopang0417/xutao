<?php
/**
 * Created by PhpStorm.
 * User: chenbingjie
 * Date: 2018/1/15
 * Time: 下午1:38
 */
/*
 * 参数1：上传文件的名字
 * 参数2：允许的mime类型
 * 参数3：允许的文件后缀类型
 * 参数4：允许的文件的大小
 * 参数5：上传文件保存的路径
 * 参数6：是否启用随机的名字
 *
 *返回值：
 *  若成功：
 *      [1,上传文件保存的路径]
 *  若失败
 *      [0,错误信息]
 * */
/*$arr = array_keys($_FILES);
$key = $arr[0];
$mimeArray = ['image/png','image/jpeg','image/gif','image/wbmp'];
$suffixArray = ['png','jpeg','jpg','gif','wbmp'];
$maxSize = pow(1024,2);
$path = './upload/';
$isRand = true;
var_dump(upload($key,$mimeArray,$suffixArray,$maxSize,$path,$isRand));*/

function upload($key,$mimeArray,$suffixArray,$maxSize,$path,$isRand)
{
    $errors = $_FILES[$key]['error'];
    if ($errors) {
        switch($errors) {
            case 1:
                $msg = '超过了php.ini文件大小的限制';
                break;
            case 2:
                $msg = '超过了html文件大小的限制';
                break;
            case 3:
                $msg = '部分文件被上传';
                break;
            case 4:
                $msg = '没有文件被上传';
                break;
            case 6:
                $msg = '找不到临时文件';
                break;
            case 7:
                $msg = '文件写入失败';
                break;
            return [0,$msg];
        }
    }

    //判断文件的大小是否符合程序的要求
    $size = $_FILES[$key]['size'];
    if ($size > $maxSize) {
        return [0,'文件超过了指定的大小'];
    }
    //判断mime类型是否符合
    $mime = $_FILES[$key]['type'];
    if (!in_array($mime,$mimeArray)) {
        return [0,'mime类型不符合要求'];
    }
    //判断文件后缀类型是否符合要求
    $name = $_FILES[$key]['name'];    //nv.jpg
    $arr = explode('.',$name);
    $suffix = array_pop($arr);

    if(!in_array($suffix,$suffixArray)) {
        return [0,'文件后缀类型不符合'];
    }

    //得到上传文件保存的路径
    $path = rtrim($path,'/').'/';

    if ($isRand) {
        $name = uniqid().'.'.$suffix;
    }

    $filePath = $path.$name;
    if (is_uploaded_file($_FILES[$key]['tmp_name'])) {
        if (move_uploaded_file($_FILES[$key]['tmp_name'],$filePath)) {
            return [1,$filePath];
        } else {
            return [0,'上传文件移动失败'];
        }
    } else {
        return [0,'不是上传文件'];
    }
}
















