<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>内核资源</title>
    <link rel="Stylesheet" type="text/css" href="views/css/fatiezijiemian.css" />
    <script type='text/javascript' src='./public/ckeditor/ckeditor.js'></script>
</head>
<body>
<!--
    作者：offline
    时间：2017-12-23
    描述：顶部标签
-->
<div  class="header">
    <div class="header-left">
        <ul>
            <li><a href="index.php">设为首页</a></li>
            <li><a href="index.php">收藏本页</a></li>
        </ul>
    </div>
</div>
<!--
    作者：offline
    时间：2017-12-23
    描述：顶部结束
-->
<!--
    作者：offline
    时间：2017-12-23
    描述：中部导航栏
-->
<div class="sec">
    <div class="sec-left">
        <img src="views/img/1.jpg" />
        <div class="sec-right">
            用户名：<input type="text" name="useneme" />
            <input type="checkbox" name="uneme" value="1" id="q"><label for="q">自动登录</label>
            <a href="#">找回密码</a>
            密码:<input type="password" name="password" value="2"  /><button>立即登录</button>
            <a href="#">立即注册</a>
        </div>
    </div>
    <div class="botton">
        <ul>
            <li style="background: #1252A7;"><a href="#">首页</a></li>
            <?php foreach ($category as $key=>$value):?>

            <li><a href="shouye3.php?cid=<?php echo $value['cid'];?>"><?php echo $value['classname'];?></a></li>
            <?php endforeach;?>
        </ul>
    </div>
    <div class="foot">
        <img src="views/img/2.jpg" />
        <input type="text" neme="uname" value="1" /><button class="sou">搜索</button>
        <div class="foot-right">
            <ul>
                <li>热搜:</li>
                <li><a href="#">活动</a></li>
                <li><a href="#">交友</a></li>
                <li><a href="#">教程</a></li>
            </ul>
        </div>

    </div>
</div>
<!--
    作者：offline
    时间：2017-12-23
    描述：头部结束
-->
<!--
    作者：offline
    时间：2017-12-23
    描述中间部分：
-->

<div class="center">

    <img src="views/img/3.jpg" />
    <ul>
        <li><a href="#">论坛></a> </li>
        <li><a href="#"><?php echo $da;?></a></li>
        <li><a href="#"><?php echo $xiao;?></a></li>
    </ul>
</div>
<!--上部分结束。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。-->
<div class="wonder">
    <form  action="fatie.php" method="post">
        <input type="hidden" name="cid" value="<?php echo $cid;?>" />

       主题 <input type="text" name="title"/>
        <textarea name="content" class='ckeditor' id='textarea'></textarea>
        <input type="submit" value="发帖" style="width: 100px;height: 50px;"  />
    </form>
</div>
<div class="wonder-down">

    <a href="#" style="width: 72px; height: 30px;line-height:30px;border:1px solid #CDCDCD; float: right; margin-top: 5px;"><img src="views/views/imgd3.jpg" >返回</a>
</div>


<div class="won">
    <p class="p">powered by  <b>ccfff</b>  v2 <br> @2017 ccfffinc</p>
    <p  class="po">京ipc备 89273号 |<b>ccfff</b> <br>time no is 07-28 10:06</p>
</div>
</body>
</html>