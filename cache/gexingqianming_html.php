<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>个性签名</title>
    <link rel="stylesheet" type="text/css" href="views/css/head.css" />
    <link rel="stylesheet" type="text/css" href="views/css/modified_data.css" />
    <script type='text/javascript' src='./public/ckeditor/ckeditor.js'></script>
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

        /*基本资料*/
        .modified_data_right-right-1{
            /*background-color: #00A6C7;*/
            position: absolute;
            top: 63px;
            left: 130px;
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

            <a href="shouye.php">设为首页</a>&nbsp;
            <a href="shouye.php">收藏本站</a>

        </div>

        <div class="header10">

            <div class="logo">
                <img src="views/img/logo.jpg"/>

            </div>


            <div class="admin-center">

                <p>
                    <a href="#">admin</a>
                    <span class="shuxian">|</span>
                    <a href="#">设置</a>
                    <span class="shuxian">|</span>
                    <a href="#">管理中心</a>
                    <span class="shuxian">|</span>
                    <a href="#" >退出</a>

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
                        <li class="modified_data_left_center-1"> &nbsp;&nbsp;<a href=""><b>设置</b></a></li>
                        <li class="modified_data_left_center-2" style="background-color: #e8f0f7;">  &nbsp;&nbsp;<a href="touxiangshangchuan.php">修改头像</a></li>


                        <li class="modified_data_left_center-4">  &nbsp;&nbsp;<a href="gerenziliao.php">个人资料</a></li>
                        <li class="modified_data_left_center-3" style="background-color: #fff;">  &nbsp;&nbsp;<a href="gexingqianming.php">个性签名</a></li>
                        <li class="modified_data_left_center-5">  &nbsp;&nbsp;<a href="mimaanquan.php">密码安全</a></li>
                    </ul>


                </div>

            </div>





            <div  class="modified_data_right">


                <p style="height: 45px; width: 830px;border-bottom: 1px solid #cdcdcd;line-height: 45px;">基本资料</p>

                <form action="Signature.php"method="post">
                    <textarea name="autograph" class='ckeditor'></textarea>
                    <input type="submit"  value="保存"style="width: 60px;height: 30px;background-color: #2b74c5;" />

                </form>











            </div>








        </div>



    </div>









</div>
















</div>






</body>
</html>
