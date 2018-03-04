<?php
/**
 * Created by PhpStorm.
 * User: chenbingjie
 * Date: 2018/1/4
 * Time: 下午2:05
 */

//echo __DIR__;
session_start();

define('BASE_PATH',str_replace('\\','/',__DIR__).'/');
//html文件存放的目录
define('TPL_VIEW','./views/');
//缓存文件存放的目录
define('TPL_CACHE','./cache/');
//缓存文件存放的目录


include BASE_PATH.'../helper/func.php';
include BASE_PATH.'../config/config.php';
include BASE_PATH.'../helper/tpl.php';
include BASE_PATH.'../helper/upFunc.php';
$link = myConnect(DB_HOST,DB_USER,DB_PWD,DB_NAME,DB_CHARSET);

//var_dump($link);

















