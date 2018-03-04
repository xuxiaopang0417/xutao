<?php
/**
 * Created by PhpStorm.
 * User: chenbingjie
 * Date: 2018/1/4
 * Time: 下午1:59
 */
function myConnect($host,$user,$pwd,$dbname,$charset)
{
    $link = mysqli_connect($host,$user,$pwd);
    if (!$link) {
        die('连接数据库失败');
    }
    $db = mysqli_select_db($link,$dbname);
    if (!$db) {
        die('选择数据库失败');
    }
    mysqli_set_charset($link,$charset);

    return $link;
}
/*
 * 新增数据的函数  myInsert
 * insert into user(name,age,height)  values('六子',23,178);
 *参数1：数据库连接的资源 link
 * 参数2：表名
 * 参数3：要写入的数据（是一个关联数组）
 *
 * 返回值：若插入成功，返回id值，若失败返回false
 * */

function myInsert($link,$table,$data)
{
    //得到传递进来的数组中的所有的键  （是表里面的字段名）
    $keys = array_keys($data);
    //得到传递进来的数组中的所有的值 （是表里面的字段对应的数据）
    $values = array_values($data);
    //把所有的值是字符串的添加上引号
    $val = parseValue($values);
    //将所有的键拼接成字符串的形式
    $keyStr = join(',',$keys);
    //将所有的值拼接成字符串的形式
    $valStr = join(',',$val);
    $sql = "insert into $table($keyStr) values($valStr)";

    //执行sql语句
    $result = mysqli_query($link,$sql);

    //判断sql语句是否执行成功
    if ($result && mysqli_affected_rows($link)) {
        //将插入的数据的id值返回
        return mysqli_insert_id($link);
    } else {
        //若插入失败，返回false
        return false;
    }
}

//此函数将数组中的字符串添加上引号
function parseValue($values)
{
    //将数组中的元素全部遍历一下
    foreach ($values as $key => $val) {
        //判断一下元素是否是字符串，若是，添加上引号
        if (is_string($val)) {
            //给是字符串的数据添加上引号
            //$v = "'".$val."'";
            $v = '\''.$val.'\'';
            //将处理完毕的数据放到新的数组中
            $newVal[$key] = $v;
        } else {
            //将不是字符串的数据放到新的数组中
            $newVal[$key] = $val;
        }
    }
    //将新的数组返回
    return $newVal;
}
/*
 * 数据库查询的函数
 *
 * select * from  user;
 * select name, age from user  where id = 1;
 * 参数1：数据库连接的资源   link
 * 参数2：字段名  field
 * 参数3：表名   table
 * 参数4： 查询的条件
 *
 * 返回值：若成功返回一个数组，失败返回false
 *
 * */
function mySelect($link,$field,$table,$where = null)
{
    //判断where条件是否为空，若为空执行下面的语句
    if (is_null($where)) {
        $sql = "select $field from $table";
    } else {
        //如果有where条件，执行下面的语句
        $sql = "select $field from $table where  $where";

    }

    //执行sql语句
    $result = mysqli_query($link,$sql);
    //判断是否执行成功
    if ($result && mysqli_affected_rows($link)) {
        while($data = mysqli_fetch_assoc($result)) {
            //将数据放到一个新的空数组中
            $newData[] = $data;
        }
        //将新数组返回
        return $newData;
    } else {
        //若没有结果，返回false
        return false;
    }
}

/*
 * 数据库删除的函数
 * delete from user;
 * delete from User where id = 1；
 * 参数1：数据库连接的资源  link
 * 参数2： 表名  table
 * 参数3： 条件
 *
 * 返回值：删除成功  返回true,   删除失败返回 false
 *
 * */

function myDelete($link,$table,$where)
{
    $sql = "delete from $table where  $where";
    $result = mysqli_query($link,$sql);
    if ($result && mysqli_affected_rows($link)) {
        return true;
    } else {
        return false;
    }
}

/*
 * 数据库修改的函数   myUpdate
 * update User set name='二狗'，age=18 where id = 1;
 * 参数1：数据库连接的资源  link
 * 参数2：表名   user
 * 参数3：要修改的数据，  以关联数组的形式传递进来
 * 参数4: where 条件
 *
 * 返回值：修改成功返回true,  修改失败返回false
 * */

function myUpdate($link,$table,$data,$where)
{
    //将传递进来的数组中的数据是字符串的数据添加上引号
    $newData = parseValue($data);
    //将新数组处理成 字段名1=值1，字段名2 = 值2；
    $updateString = parseUpdate($newData);
    $sql = "update $table set  $updateString where  $where";
echo $sql;
    $result = mysqli_query($link,$sql);
    if ($result && mysqli_affected_rows($link)) {
        return true;
    } else {
        return false;
    }
}

//将数组处理成字段名1=值1，字段名2 = 值2的函数
function parseUpdate($data)
{
    foreach($data as $key=>$value)
    {
        //将处理好的字符串放到一个新的数组中去
        $newArr[] = $key.'='.$value;
    }
    //将数组拼接成指定的字符串的形式   字段名1=值1，字段名2=值2
    return join(',',$newArr);
}





function getDiff($time)
{
    date_default_timezone_set("PRC");
    $now = time();
    $sub = $now - $time;
    if ($sub < 60) {
        $str = '刚刚发表';
    }elseif ($sub < (60 * 60)) {
        $str = floor($sub / 60).'分钟之前';
    }elseif ($sub < (24 * 60 * 60)) {
        $str = floor($sub / (60*60)).'小时之前';
    } elseif ($sub < 3 * 24 * 60 * 60) {
        $str = floor($sub / (24 * 60 *60)).'天之前';
    } else {
        $str = date("Y-m-d H:i:s",$time);
    }
    return $str;
}






