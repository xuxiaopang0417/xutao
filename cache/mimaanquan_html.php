<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>用户签名</title>
    <link rel="stylesheet" type="text/css" href="views/css/head.css" />

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




        /*修改密码部分*/
        .modified_data{

            width: 1000px;
            height: 500px;
            /*background-color: palevioletred;*/
            border:  1px solid #cdcdcd;
            position: relative;
            background-color: #fff;

        }
        .modified_data_left{

            width: 150px;
            height: 500px;
            font-size: 16px;
            background-color: #e8f0f7;
            border: 1px solid #cdcdcd;

        }
        .modified_data_left_center{

            width: 150px;
            height: 250px;
            margin: 0 auto;
        }
        .modified_data_left_center li{

            text-align: left;
            font-size: 16px;
            color: #444;
        }
        .modified_data_left_center-1{
            width:150px;
            height: 45px;
            line-height: 45px;



        }
        .modified_data_left_center-2{
            width:150px;
            height: 35px;
            line-height: 35px;
            background-color: #fff;
        }
        .modified_data_left_center-3{
            width:150px;
            height: 35px;
            line-height: 35px;
        }
        .modified_data_left_center-4{
            width:150px;
            height: 35px;
            line-height: 35px;
        }
        .modified_data_left_center-5{
            width:150px;
            height: 35px;
            line-height: 35px;
        }


        /*右边的内容部分*/


        .modified_data_right{
            width: 840px;
            height: 500px;

            position: absolute;
            top: 0;
            left: 165px;
            /*background-color: springgreen;*/


        }
        .modified_data_right h2{
            font-size: 16px;
            margin: 10px 0;
        }
        .modified_data_right p{
            margin-bottom:20px ;
        }
        .modified_data_right-button{
            width: 60px;
            height: 30px;
            background-color: #2b74c5;

            margin: 20px 0;
        }.modified_data{

             width: 1000px;
             height: 500px;
             /*background-color: palevioletred;*/
             border:  1px solid #cdcdcd;
             position: relative;
             background-color: #fff;

         }
        .modified_data_left{

            width: 150px;
            height: 500px;
            font-size: 16px;
            background-color: #e8f0f7;
            border: 1px solid #cdcdcd;

        }
        .modified_data_left_center{

            width: 150px;
            height: 500px;
            margin: 0 auto;
        }
        .modified_data_left_center li{

            text-align: left;
            font-size: 16px;
            color: #444;
        }
        .modified_data_left_center-1{
            width:150px;
            height: 45px;
            line-height: 45px;



        }
        .modified_data_left_center-2{
            width:150px;
            height: 35px;
            line-height: 35px;
            background-color: #fff;
        }
        .modified_data_left_center-3{
            width:150px;
            height: 35px;
            line-height: 35px;
        }
        .modified_data_left_center-4{
            width:150px;
            height: 35px;
            line-height: 35px;
        }
        .modified_data_left_center-5{
            width:150px;
            height: 35px;
            line-height: 35px;
        }


        /*右边的内容部分*/








        .modified_data_right-pwd-right{
            position: absolute;
            top: 67px;
            left: 150px;

            /*background-color: #00CC00;*/
        }
        .modified_data_right-pwd-right p{
            line-height:  5px;
            color: #888;
        }
        .modified_data_right-pwd-right-equal{

            width: 350px;
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

            <a href="#">设为首页</a>&nbsp;
            <a href="#">收藏本站</a>

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
                        <li class="modified_data_left_center-1"> &nbsp;&nbsp;<a href="#"><b>设置</b></a></li>
                        <li class="modified_data_left_center-2" style="background-color: #e8f0f7;">  &nbsp;&nbsp;<a href="touxiangshangchuan.php">修改头像</a></li>
                        <li class="modified_data_left_center-3" style="background-color: #e8f0f7;">  &nbsp;&nbsp;<a href="gerenziliao.php">个人资料</a></li>
                        <li class="modified_data_left_center-4">  &nbsp;&nbsp;<a href="gexingqianming.php">个人签名</a></li>
                        <li class="modified_data_left_center-5" style="background-color: #fff;">  &nbsp;&nbsp;<a href="mimaanquan.php">密码安全</a></li>
                    </ul>


                </div>

            </div>





            <div  class="modified_data_right">

                <p style="color: #555; width: 830px;height: 45px;line-height: 45px;border-bottom: 1px dashed #cdcdcd;">您必须填写旧密码才能修改下面的资料</p>

                <div class="modified_data_right-pwd-left">

                    <p>旧密码</p>
                    <p style="padding-top: 5px">新密码</p>
                    <p style="padding-top: 27px";>确认新密码</p>
                    <p style="padding-top: 26px";>Email</p>
                    <p style="padding-top: 25px";>安全提问</p>
                    <p style="padding-top: 26px";>回答</p>
                </div>


                <div class="modified_data_right-pwd-right">
                    <form action="Password-Safe.php" method="post"enctype="multipart/form-data">
                        <p><input type="password" name="oldpwd" class="modified_data_right-pwd-right-equal" /></p>
                        <p><input type="password" name="newpwd" class="modified_data_right-pwd-right-equal" /></p>
                        <p>如不需要更改密码，此处请留空白</p>
                        <p><input type="password" name="newpwd1" class="modified_data_right-pwd-right-equal" /></p>
                        <p>如不需要更改密码，此处请留空白</p>
                        <p><input type="email" name="newemail" class="modified_data_right-pwd-right-equal" /></p>
                        <p>取回密码时用</p>
                        <p>  <select name="problem" class="login_input" class="modified_data_right-pwd-right-equal">
                            <option name="08">保持原有的安全提问和答案</option>
                            <option name="01">无安全提问</option>
                            <option name="02">爷爷的名字</option>
                            <option name="03">父亲出生的城市</option>
                            <option name="04">你其中一位老师的名字</option>
                            <option name="05">你个人计算机的型号</option>
                            <option name="06">你最喜欢餐厅的名字</option>
                            <option name="07">你驾照后四位数</option>
                            <option name="09">母亲的名字</option>



                        </select></p>
                        <p>如果您启用安全提问，登录时需填入相应的项目才能登录</p>
                        <p><input type="text" name="result" class="modified_data_right-pwd-right-equal" /></p>
                        <p>如您设置新的安全提问，请在此输入答案</p>
                        <p><input type="submit" value="保存" style="width: 60px;height: 30px;background-color: #2b74c5;" /></p>
                    </form>

                </div>





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
