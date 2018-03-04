<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>版块管理</title>
    <link rel="stylesheet" type="text/css" href="views/css/site_information.css" />
    <style>
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




        /*中间右边的代码*/
        .site-information-content-right-index3{
            width: 1060px;
            height: 650px;
            margin: 0 auto;
        }
        .site-information-content-right-index3 li{


            width: 1060px;
            height: 40px;
            border-bottom: 1px dashed #deeffb;
            line-height:40px ;
        }
        .site-information-content-right-index3 li:hover{
            background-color:#deeffb ;
        }




      /*第一个开始的文本框长度和背景色*/
        .color-f7f8fd{
            width: 60px;
            background: #f7f8fd;
        }
        /*两个输入框的长度，并且进行了文字加粗*/
        .color-f7f8fd-2{
            width: 120px;
            background: #f7f8fd;
            font-weight: bold;
        }
        /*第三个输入框*/
        .color-f7f8fd-3{
            width: 120px;
            background: #f7f8fd;

        }
        /*第二个不加粗文字的*/
        .color-f7f8fd-4{
            width: 120px;
            background: #f7f8fd;

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
            <li ><a href="after1.php" >站点信息</a></li>
            <li><a href="after2.php">用户管理</a></li>
            <li style="background-color:#1297c9;"><a href="after3.php" style="color: #fff;" >板块管理</a></li>
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




    <div class="site-information-content-left">
        <div class="site-information-content-left-1">
        <ul>
            <li><a href="after3.php"> ● 管理版块</a></li>
            <li><a href="after3_1.php"> ● 添加版块</a></li>

        </ul>



    </div>







    </div>









    <!--中间主体右边部分-->

    <div class="site-information-content-right">
        <div class="site-information-content-right-index3">
            <h1 style="font-size: 20px; padding-top: 15px;color: #0099cc; height: 40px;border-bottom: 1px dashed #deeffb; ">版块管理</h1>

                    <ul>
                        <li>显示顺序
                            <span style="padding-left: 70px;">版块名称</span>
                            <span span style="padding-left: 740px;">版主</span></li>
                        <form action="admin_Plate3.php" method="post" >
                        <?php foreach ($big as $key => $value):?>

                        <li>
                            <!--给一个隐藏域，这个隐藏域主要功能实现修改，value主要给定他修改的某一个值,[]以取数组形式-->
                            <input type="hidden" name="cid[]" value="<?php echo $value['cid'];?>" />
                            <!--给大板块一个删除的框，name值给大板块的cid，后面接收后直接删除cid-->
                            <input  type="checkbox"  name="select[<?php echo $value['cid'];?>]" value="<?php echo $value['classname'];?>"/>

                            <input type="text"  name="orderby[]" value="<?php echo $value['orderby'];?>" class="color-f7f8fd" />
                            <span  style="padding-left: 34px;">

                                <input type="text" name="classname[]" value="<?php echo $value['classname'];?>" class="color-f7f8fd-2" />
                            </span>
                        </li>

                        <?php foreach ($small as $key => $v):?>
                        <?php if ($value['cid'] == $v['parentid']):?>
                        <li>
                            <!--给一个隐藏域，这个隐藏域主要功能实现修改，value主要给定他修改的某一个值-->
                            <input type="hidden" name="cid[]" value="<?php echo $v['cid'];?>"/>
                            <!--给一个小版块的删除多选框name给定一个小版块的cid-->
                            <input  type="checkbox" name="select[<?php echo $v['cid'];?>]" value="<?php echo $v['classname'];?>"/>


                            <input type="text"  name="orderby[]" value="<?php echo $v['orderby'];?>" class="color-f7f8fd" />
                            <span  style="padding-left: 64px;">

                                <input type="text" name="classname[]" value="<?php echo $v['classname'];?>" class="color-f7f8fd-4" />
                            </span>
                            <span style="padding-left: 670px;"><input type="text" value="<?php echo $v['compere'];?>"  class="color-f7f8fd-3" compere[] /></span>
                        </li>
                        <?php endif;?>
                        <?php endforeach;?>
                        <?php endforeach;?>

                        <li>

                            <span><input type="submit" name="up" value="修改"/>&nbsp;&nbsp;
                            <li> <input type="submit" name="del" value="删除" /></li>
                            </span>
                        </li>


                        </form>


                    </ul>
















        </div>


        </div>



</div>

</body>
</html>