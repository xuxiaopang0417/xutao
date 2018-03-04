<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>用户签名</title>
    <link rel="stylesheet" type="text/css" href="views/css/head.css" />
    <link rel="stylesheet" type="text/css" href="views/css/modified_data.css" />
    <style>

        .header10{
            width: 1000px;
            height: 100px;
            /*	border-top: 1px solid #ccc;*/

            position: relative;


        }
        .admin-center{
            width: 260px;
            height: 60px;
            position: absolute;
            top: 20px;
            left: 740px;

        }

        .shuxian{

            color: #cdcdcd;

        }
        .admin-center p{

            line-height: 30px;
        }

        .admin-user-pic{
            position: absolute;
            top: 7px;
            left: -18px;
        }
        .admin-user-pic2{
            position: absolute;
            top: 3px;
            left: 200px;

        }



        /*论坛小图标部分*/
        .luntan-logo1{
            width: 1000px;
            height: 40px;
            line-height: 40px;
            background-color: #fff;

        }
        .luntan-logo1 li{
            float: left;
        }
        .luntan-logo1 img{
            display: block;
            position: relative;
            top: 12px;
            left: 0px;
        }










        .footer{
            width: 1000px;
            height: 60px;
            border-top: 1px solid #cdcdcd;
            margin-top: 15px;
            line-height: 23px;

        }
        .footer p{
            font-size: 13px;
            color: #666;
        }

        .footer-left{
            width: 200px;
            height: 40px;
            float: left;

        }

        .footer-right{
            width: 180px;
            height: 40px;
            float: right;

        }
        .heise{
            color: #333;
        }





    </style>
</head>



<body>
<body>

<div class="all-content">

    <div class="header1">

        <div class="frist-nav">

            <a href="index.php">设为首页</a>&nbsp;
            <a href="index.php">收藏本站</a>

        </div>

        <div class="header10">

            <div class="logo">
                <img src="views/img/logo.jpg"/>

            </div>


            <div class="admin-center">

                <p>
                    <a href="shouye2.php">admin</a>
                    <span class="shuxian">|</span>
                    <a href="#">设置</a>
                    <span class="shuxian">|</span>
                    <a href="guanlizhongxin.php">管理中心</a>
                    <span class="shuxian">|</span>
                    <a href="index.php" >退出</a>

                </p>
                <p>
                    <a href="#">积分：4</a>
                    <span class="shuxian">|</span>
                    <a href="#">用户管理：管理员</a>




                </p>
                <div class="admin-user-pic">

                    <img src="views/img/admin-pic.jpg" />
                </div>


                <div class="admin-user-pic2">

                     <?php if (@!$_SESSION['picture']):?>
                    <img src="views/img/xiang.jpg" style="width: 60px;height: 60px"/>
                    <?php endif;?>
                    <?php if (@$_SESSION['picture']):?>
                    <img src="<?php echo $picturn;?>" style="width: 60px;height: 60px"/>
                    <?php endif;?>

                </div>




            </div>









        </div>


        <div class="header3">


            <div class="shouye">
                <a href="#">首页</a>

            </div>
            <div class="header3-nav">
                <ul>

                    <li><a href="#">PHP技术交流</a></li>
                    <li><a href="#">程序人生</a></li>
                    <li><a href="#">王者荣耀</a></li>
                </ul>


            </div>

        </div>




        <div class="header4">
            <div class="soushuo">
                <img src="views/img/soushou.jpg" width=""/>

            </div>

            <div class="search">
                <input type="text" id="" value="" placeholder="请输入搜索内容" class="search-1" />
                <input type="submit" name="" id="" value="搜索" class="search-2" />

            </div>


            <div class="hot-resou">

                <div class="resou-nav">


                    <ul>
                        <li> <b>热搜</b></li>
                        <li> <a href="#">活动</a></li>
                        <li> <a href="#">交友</a></li>
                        <li> <a href="#">教程</a></li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="luntan-logo1">
            <ul>
                <li><img src="views/img/home.jpg" /> </li>
                <li><a href="#" >   >论坛 > 修改头像 </a></li>

            </ul>


        </div>



        <div class="modified_data">

            <div  class="modified_data_left">
                <div  class="modified_data_left_center">
                    <ul>
                        <li class="modified_data_left_center-1"> &nbsp;&nbsp;<a href="touxiangshangchuan.php"><b>设置</b></a></li>
                        <li class="modified_data_left_center-2">  &nbsp;&nbsp;<a href="touxiangshangchuan.php">修改头像</a></li>
                        <li class="modified_data_left_center-3">  &nbsp;&nbsp;<a href="gerenziliao.php">个人资料</a></li>
                        <li class="modified_data_left_center-4">  &nbsp;&nbsp;<a href="#">个人签名</a></li>
                        <li class="modified_data_left_center-5">  &nbsp;&nbsp;<a href="mimaanquan.php">密码安全</a></li>
                    </ul>


                </div>

            </div>





            <div  class="modified_data_right">



                <h2>设置我的头像</h2>
                <p>如果您还没有设置自己的头像，系统会显示为默认头像，您需要自己上传一张新照片来作为自己的个人头像</p>
                <div class="modified_data_right-pic">
                    <img src="<?php echo $picturn;?>" />
                </div>

                <h2>设置我的新头像</h2>

                <form action="Picture-upload.php" method="post"enctype="multipart/form-data">

                    <input type="file" name="up" /> <br />
                    <input type="submit" value="保存" class="modified_data_right-button" />
                </form>

            </div>



        </div>







        <div class="footer">
            <div class="footer-left">
                <p>Powered &nbsp;by &nbsp;<span class="heise">ccfff</span>&nbsp;</p>
                <p>@&nbsp;2017&nbsp;ccfff&nbsp;Inc </p>

            </div>


            <div class="footer-right">
                <p><span class="heise">京ICP备</span>&nbsp;89273<span class="heise">号</span>&nbsp;&nbsp;|&nbsp;&nbsp;<span class="heise">ccfff</span></p>
                <p>Time&nbsp;Now&nbsp;Is&nbsp;07-8&nbsp;00:06</p>

            </div>
        </div>


    </div>

















</div>






</body>
</html>
