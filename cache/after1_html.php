<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>站点信息</title>
    <link rel="stylesheet" type="text/css" href="views/css/site_information.css" />
    <link rel="stylesheet" type="text/css" href="views/css/site_all.css" />
    <style>
        .site-information-content-left-1{
            padding-left: 20px;
        }

        .site-information-content-left-1 li{
            width: 140px;
            height: 25px;
            margin-bottom: 5px;


        }
        .site-information-content-left-1 li a{
            color: #2366a8;
        }
        .site-information-content-left-1 li a:hover{
            color: red;
        }


        /*右边部分*/
        .site-information-content-right-body {
            width: 1060px;
            height: 650px;
            /*background-color:#DDC4A9 ;*/
            margin: 0 auto;

        }
        .site-information-content-right-body li{
            width: 1060px;
            height: 60px;
            border-bottom: 1px dashed #deeffb;

        }
        .site-information-content-right-body li p{
            padding-top: 8px;

        }
        /*设置右边灰色字体离左边的边距*/
        .color1-999-2{
            color: #888;
            padding-left: 90px;
        }
        /*设置文本框的长度一样*/
        .information1-cha{
            width: 280px;
            height:16px ;
            background-color: #F7F7F7;
        }
    </style>



</head>
<body>


<div class="site-information-head" >

    <!--左边logo部分-->
    <div  class="site-information-head-logo">
        <img src="views//img/site_logo.jpg" width="150px" height="60px"/>
    </div>


    <!--中间部分-->
    <div class="site-information-head-nav">


        <ul>
            <li style="background-color:#1297c9; "><a href="after1.php" style="color: #fff;">站点信息</a></li>
            <li><a href="after2.php">用户管理</a></li>
            <li><a href="after3.php">板块管理</a></li>
            <li><a href="after4.php" >帖子管理</a></li>


        </ul>


    </div>

    <div class="site-information-head-welcome">
        <p><span class="color1-999">你好,创始人</span> <?php echo $name;?> <a href="#"><span class="color1-999">[退出]</span></a> <a href="#" class="welcome-border">站点首页</a></p>

    </div>



</div>




<!--中间主体部分-->

<div class="site-information-content">


    <!--中间左边部分-->




    <div class="site-information-content-left">

        <div class="site-information-content-left-1">
            <ul>
                <li><a href="after1.php"> ● 站点信息</a></li>
                <li><a href="after1_2.php"> ● 友情链接</a></li>

            </ul>



        </div>





    </div>









    <!--中间主体右边部分-->

    <div class="site-information-content-right">

        <div class="site-information-content-right-body">
            <form action="admin_Plate1.php" method="post">
                <ul>


                    <li><h1 style="font-size: 20px; padding-top: 15px;color: #0099cc;">站点信息</h1></li>
                    <li>
                        <p>站点名称</p>
                        <p><input type="text" name="sitename" class="information1-cha" value="<?php echo $webinfo[0]['sitename'];?>" />  <span class="color1-999-2">站点名称，将显示在浏览器窗口标题等位置</span></p>

                    </li>
                    <li>
                        <p>网站名称</p>
                        <p><input type="text" name="webname" class="information1-cha" value="<?php echo $webinfo[0]['webname'];?>" />  <span class="color1-999-2">网站名称，将显示在页面底部的联系方式处</span></p>

                    </li>
                    <li>
                        <p>网站URL</p>
                        <p><input type="text" name="url" class="information1-cha" value="<?php echo $webinfo[0]['url'];?>" />  <span class="color1-999-2">网站URL,将作为链接显示在页面底部</span></p>

                    </li>
                    <li>
                        <p>网站备案信息代码</p>
                        <p><input type="text" name="webnumber" class="information1-cha" value="<?php echo $webinfo[0]['webnumber'];?>" /> <span class="color1-999-2"> 页面底部可以显示ICP备案信息，如果备案，在此输入你的授权码,它将显示到页面底部，没有请留空</span></p>

                    </li>
                    <li><p style="padding-top: 18px">关闭站点</p></li>
                    <li>
                        <p style="padding-bottom: 2px;">关闭站点</p>
                        <p>  <input type="radio" name="closeweb" value="1" />  是&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="closeweb" value="0" checked /> <span style="color: green"> 否</span> <span style="padding-left: 300px;color: #888;">站点将即时关闭，其他人无法访问，但不影响管理员访问</span></p>


                    </li>
                    <li> <input type="submit" name="submit" value="提交" style="display: block;width: 80px;height: 30px;background-color: #00b3ff;margin-top: 10px;" /></li>



                </ul>
            </form>


        </div>







    </div>



</div>

</body>
</html>