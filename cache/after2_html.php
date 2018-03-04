<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户管理</title>


    <style>


        /*公共部分*/
        *{
            padding: 0;
            margin: 0;
            font-size: 14px;
        }

        ul,ol{
            list-style-type: none;
        }
        a{
            text-decoration: none;
            color: #333;
        }

        /*头部开始*/

        .site-information-head{

            width: 1250px;
            height: 100px;
            background-color: #e6f2fb;
            margin: 0 auto;
            border: 1px solid #cdcdcd;
            position: relative;
        }
        .site-information-head-logo{
            width: 140px;
            height: 65px;

            position: absolute;
            top: 40px;
            left: 0;
        }
        .site-information-head-nav{


            width: 1090px;
            height: 40px;
            position: absolute;
            top:56px;
            left: 160px;
            border-bottom: 4px solid #1297c9;

        }
        .site-information-head-nav li{
            width: 80px;
            height: 40px;
            text-align: center;
            float: left;
            line-height: 40px;
            border-top-left-radius:10px;
            border-top-right-radius:10px;
        }
        .site-information-head-nav li a{

            font-size: 15px;
            color: #1297c9;
            font-weight: bold;
        }
        /*头部右边*/
        .site-information-head-welcome{

            position: absolute;
            top: 20px;
            left: 980px;
        }
        .welcome-border{

            display: block;
            width: 60px;
            height: 25px;
            background: #f6f9fa;
            text-align: center;
            border:  1px solid #cdcdcd;
            line-height: 25px;
            position: absolute;
            top: -5px;
            left: 185px;
        }
        .color1-999{
            color: #999;
        }

        .site-information-content{
            width: 1250px;
            height: 650px;
            position: relative;
            margin: 3px auto;
            border: 1px solid #b5cfd9;



        }
        .site-information-content-left{
            width: 154px;
            height: 650px;
            background-color: #e6f2fb;
            border-right: 6px solid #cae4f5;
        }

        /*中间左边代码样式*/
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



        .site-information-content-right{

            width: 1088px;
            height: 650px;
            border: 1px solid #e6f2fb;
            position: absolute;
            top: 0;
            left: 160px;
        }



        /*下面代码是中间右边部分*/
        .site-information-content-right-index2{
            width: 1060px;
            height: 650px;
            margin: 0 auto;
        }
        .site-information-content-right-index2 li{


            width: 1060px;
            height: 40px;
            border-bottom: 1px dashed #deeffb;
            line-height:40px ;
        }
        .site-information-content-right-index2 li:hover{
            background-color:#deeffb ;
        }

        site-information-content-right-index2-li{
            font-weight: bold;
            /*加粗一行文字*/
        }

        /*li里颜色为0099cc的头和尾部字体*/
        .color-0099cc{
            color: #0099cc;
        }






    </style>

</head>
<body>


<div class="site-information-head" >

    <!--左边logo部分-->
    <div  class="site-information-head-logo">
        <img src="views/img/site_logo.jpg" width="150px" height="60px"/>
    </div>


    <!--中间部分-->
    <div class="site-information-head-nav">

        <ul>
            <li><a href="after1.php" style="color: #1297c9;">站点信息</a></li>
            <li  style="background-color:#1297c9;"><a href="after2.php" style="color: #fff;">用户管理</a></li>
            <li><a href="after3.php">板块管理</a></li>
            <li><a href="after4.php">帖子管理</a></li>


        </ul>


    </div>

    <div class="site-information-head-welcome">
        <p><span class="color1-999">你好,创始人</span> admin <a href="#"><span class="color1-999">[退出]</span></a> <a href="#" class="welcome-border">站点首页</a></p>

    </div>



</div>




<!--中间主体部分-->

<div class="site-information-content">


    <!--中间左边部分-->





    <!--中间左边部分-->




    <div class="site-information-content-left">

        <div class="site-information-content-left-1">
            <ul>
                <li><a href="after2.php"> ● 编辑用户</a></li>
                <li><a href="after2_1.php"> ● 禁止IP</a></li>

            </ul>
        </div>

    </div>


    <!--中间主体右边部分-->

    <div class="site-information-content-right">

        <div class="site-information-content-right-index2">
            <h1 style="font-size: 20px; padding-top: 15px;color: #0099cc; height: 40px;border-bottom: 1px dashed #deeffb; ">用户管理</h1>


            <form action="admin_plate2.php" method="post"enctype="multipart/form-data">

            <ul>

                <li style=" background: #f0f7fd;">
                    <span style="padding-left: 10px; color: #0099cc;">共有3条用户记录</span>
                </li>
                <li class="site-information-content-right-index2-li">
                    <span style="padding-left:70px; ">用户名</span>
                    <span style="padding-left:70px; ">积分</span>
                    <span style="padding-left:90px; ">注册时间</span>
                    <span style="padding-left:250px; ">用户类型</span>
                </li>

                    <?php if (!empty($user)):?>
                    <?php foreach ($user as $key=>$value):?>
                <li>
                    <!--value="<?php echo $value['uid'];?>把用户遍历的id带给多选框进行多个操作-->
                    <input type="checkbox" name="title[]"value="<?php echo $value['uid'];?>" />
                    <span style="padding-left:50px;"><a href="#" class="color-0099cc"><?php echo $value['username'];?></a></span>
                    <span style="padding-left:70px;"><?php echo $value['grade'];?></span>
                    <span style="padding-left:90px;"><?php echo $value['regtime'];?></span>
                    <span style="padding-left:177px;">
                         <?php if ($value['udertype']==0):?>
                         <a href="#">普通用户</a>
                          <?php endif;?>
                         <?php if ($value['udertype']==1):?>
                         <a href="#">管理员</a>
                      <?php endif;?>
                    </span>
                    <span style="padding-left:100px;"><a href="#" class="color-0099cc">积分</a></span>
                    <span><a href="#" class="color-0099cc">详情</a></span>
                    <span><a href="#" class="color-0099cc">锁定用户</a></span>
                </li>
                    <?php endforeach;?>
                    <?php endif;?>

                <li>
                    <a href="after2.php?page=1" >首页</a>
                    <a href="after2.php?page=<?php echo $page-1;?>" >上一页</a>
                    <a href="after2.php?page=<?php echo $page+1;?>" >下一页</a>
                    <a href="after2.php?page=<?php echo $total;?>" >尾页</a>
                </li>

                    <li> <input type="submit" value="删除" /></li>





            </ul>

            </form>





















        </div>









    </div>



</div>

</body>
</html>