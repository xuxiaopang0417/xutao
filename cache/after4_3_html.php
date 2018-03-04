<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>站点信息</title>
    <link rel="stylesheet" type="text/css" href="views/css/site_information.css" />
    <style>

        /*中间左边的代码*/
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
        .site-information-content-right-index4{
            width: 1060px;
            height: 650px;
            margin: 0 auto;
        }
        .site-information-content-right-index4 li{

            color: #666;
            width: 1060px;
            height: 40px;
            border-bottom: 1px dashed #deeffb;
            line-height:40px ;

        }
        .site-information-content-right-index4 li a{
            color: #0000CC;
        }
        .site-information-content-right-index4 li:hover{
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
            <li><a href="after1.php">站点信息</a></li>
            <li><a href="after2.php">用户管理</a></li>
            <li><a href="after3.php">板块管理</a></li>
            <li  style="background-color:#1297c9; "><a href="after4.php" style="color: #fff;">帖子管理</a></li>


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

        <div class="site-information-content-left">
            <div class="site-information-content-left-1">
                <ul>
                    <li><a href="after4.php"> ● 帖子管理</a></li>
                    <li><a href="after4_1.php"> ● 帖子回收站</a></li>
                    <li><a href="after4_2.php"> ● 回收站管理</a></li>
                    <li><a href="after4_3.php"> ● 回帖回收站</a></li>

                </ul>



            </div>







        </div>







    </div>









    <!--中间主体右边部分-->

    <div class="site-information-content-right">
        <div class="site-information-content-right-index4">
            <h1 style="font-size: 16px; padding-top: 15px;color: #0099cc; height: 40px;border-bottom: 1px dashed #deeffb; ">帖子管理</h1>
            <form action="admin_Plate4_3.php"method="post"enctype="multipart/form-data">
            <ul>
                <li>
                    <span style="padding-left: 10px; color:#0099cc; ">主题数：<?php echo $num[0]['count(*)'];?></span>

                </li>

                <li>
                    <span style="padding-left: 40px;">回复内容</span>
                    <span  style="padding-left: 580px;">版块</span>
                    <span  style="padding-left: 70px;">作者</span>

                    <span  style="padding-left: 60px;">回复时间</span>


                </li>
                <?php if (!empty($details)):?>            <!--数组是否为空如果不为空进行遍历-->

                <?php foreach ($details as $key=>$value):?>

                <li>
                    <input type="checkbox" name="title[]" value="<?php echo $value['id'];?>" />

                    <span style="padding-left: 22px;display: inline-block;width: 340px;height: 30px;overflow: hidden;"><a href="#"><?php echo $value['content'];?></a></span>

                    <?php foreach ($category as $key=>$v):?>
                    <?php if ($value['classid']==$v['cid']):?>
                    <span style="padding-left: 250px;"><a href="#"><?php echo $v['classname'];?></a></span>
                    <?php endif;?>
                    <?php endforeach;?>
                    <?php foreach ($result as $key => $vv):?>

                    <?php endforeach;?>
                    <span style="padding-left: 40px;"><?php echo $vv['username'];?></span>


                    <span style="padding-left: 40px;"><?php echo $value['addtime'];?></span>

                </li>


                <?php endforeach;?>
                <?php endif;?>

                <li>
                    <input type="submit" name="deltheme" value="删除主题" />&nbsp;
                    <input type="submit" name="recover" value="恢复主题" />
                </li>
            </ul>
            </form>
        </div>







    </div>



</div>

</body>
</html>