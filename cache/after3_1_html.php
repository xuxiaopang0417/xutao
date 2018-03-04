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


        /*输入框的长度和颜色*/
        .color-f7f8fd-1{
            width: 120px;
            background-color: #f7f8fd;

        }
        .color-f7f8fd-2{
            width: 80px;
            height: 23px;
            background-color: #f7f8fd;


        }




        /*中间右边的代码*/
        .site-information-content-right-index3{
            width: 1060px;
            height: 650px;
            margin: 0 auto;
        }
        .site-information-content-right-index3 li{

            color: #666;
            width: 1060px;
            height: 40px;
            border-bottom: 1px dashed #deeffb;
            line-height:40px ;

        }
        .site-information-content-right-index3 li:hover{
            background-color:#deeffb ;
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
            <h1 style="font-size: 20px; padding-top: 15px;color: #0099cc; height: 40px;border-bottom: 1px dashed #deeffb; ">添加模块</h1>
            <form action="admin_Plate3_1.php" method="post" enctype="multipart/form-data">
            <ul>
                <li>
                    <span style="padding-left: 10px; color:#0099cc; ">技巧提示</span>

                </li>
                <li>● 添加时不选择大版块即为添加大版块</li>
                <li>
                    版块名称

                    <span style="padding-left: 200px;">
                        <input type="text" name="username" class="color-f7f8fd-1" />
                    </span>
                </li>

                <li>
                    选择大版块
                    <span style="padding-left: 188px;">
                        <select name="hoose" class="color-f7f8fd-2">
                            <option value="0">-不选择-</option>
                             <?php foreach ($data as $key => $value):?>
                            <option value="<?php echo $value['cid'];?>"><?php echo $value['classname'];?></option>
                             <?php endforeach;?>

                        </select>
                        <input type="submit" value="提交版块"  />
                    </span>
                </li>
            </ul>
                </form>















        </div>


    </div>



</div>

</body>
</html>