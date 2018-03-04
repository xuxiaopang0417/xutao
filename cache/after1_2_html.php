<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>站点信息</title>
    <link rel="stylesheet" type="text/css" href="views/css/site_information.css" />
    <link rel="stylesheet" type="text/css" href="views/css/site_all.css" />
    <style>


        /*左边的代码*/
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






        /*右边的代码*/

        .site-information-content-right-index1-2{
            width: 1060px;
            height: 650px;
            margin: 0 auto;


        }

        .site-information-content-right-index1-2 li{
            width: 1060px;
            height: 40px;
            border-bottom: 1px dashed #deeffb;
            line-height:40px ;

        }


        /*其中一个li输入框上面字的字体颜色*/
        .color3-6b8d81{

            color: #0a8458;
            font-weight: bold;

        }

        /*输入框之间的间隙*/

        .text-left-space{

            padding-left: 50px;


        }
        /*输入框的背景色和长度*/
        .text-left-color1{

            background-color: #f7f8fd;
            width: 40px;
        }
        .text-left-color2{

            background-color: #f7f8fd;
            width: 100px;
        }
        .text-left-color3{

            background-color: #f7f8fd;
            width: 150px;
        }
        .text-left-color4{

            background-color: #f7f8fd;
            width: 350px;
        }
        .text-left-color5{

            background-color: #f7f8fd;
            width: 100px;
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
            <li style="background-color:#1297c9; "><a href="after1.php" style="color: #fff;">站点信息</a></li>
            <li><a href="after2.php">用户管理</a></li>
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
        <!--这个DIV右边控制ul的大小-->
      <div class="site-information-content-right-index1-2">

          <h1 style="font-size: 20px; padding-top: 15px;color: #0099cc; height: 40px;border-bottom: 1px dashed #deeffb; ">友情链接</h1>
          <ul>


              <li style="font-size: 16px;color: #0099cc; background-color: #f1f7fd"> &nbsp;技巧提示</li>
              <li> ●  未填写的文字说明的项目将以紧凑型显示</li>
              <li class="color3-6b8d81">
                  <span style="padding-left: 65px;">显示顺序</span>
                  <span style="padding-left: 40px;">站点名称</span>
                  <span style="padding-left: 95px;">站点URL</span>
                  <span style="padding-left: 150px;">文字说明（可选）</span>
                  <span style="padding-left: 295px;">logo地址（可选）</span>


              </li>
              <form action="admin_Plate1_2.php" method="post">
                  <?php if (!empty($lin)):?>
            <?php foreach ($lin as $key=>$value):?>
              <li>
                  <input type="checkbox" name="title[]" value="<?php echo $value['lid'];?>" />
                  <span class="text-left-space"><input type="text" name="displayorder" value="<?php echo $value['displayorder'];?>" class="text-left-color1" /></span>
                  <span class="text-left-space"><input type="text" name="name" value="<?php echo $value['name'];?>" class="text-left-color2" /></span>
                  <span class="text-left-space"><input type="text" name="url" value="<?php echo $value['url'];?>" class="text-left-color3" /></span>
                  <span class="text-left-space"><input type="text" name="description" value="<?php echo $value['description'];?>" class="text-left-color4" /></span>
                  <span class="text-left-space"><input type="text" name="logo" value="<?php echo $value['logo'];?>" class="text-left-color5" /></span>
              </li>
                  <?php endforeach;?>
                  <?php endif;?>
              <li>
               <span style="padding-left: 67px;">
                  <input type="submit" name="chu" value="删除"  />&nbsp;
                  <input type="submit" name="xiu"  value="修改"  />
                   </span>

              </li>
              </form>

              <li class="color3-6b8d81">
                  <span style="padding-left: 65px;">显示顺序</span>
                  <span style="padding-left: 40px;">站点名称</span>
                  <span style="padding-left: 95px;">站点URL</span>
                  <span style="padding-left: 150px;">文字说明（可选）</span>
                  <span style="padding-left: 295px;">logo地址（可选）</span>
              </li>
              <li><p style="padding-left: 67px;"><img src="views/img/add-1.jpg" /></p><span style="display: block;color:#ff7200;margin-top: -51px;margin-left: 85px;">添加友情链接</span></li>
              <form action="admin_Plate1_2_2.php" method="post" enctype="multipart/form-data">
              <li>
                  <!--因为这里少了一个多选框所以下一个的向左的内边距要增加-->

                  <span class="text-left-space" style="padding-left: 65px;"><input type="text" name="displayorder"  class="text-left-color1" /></span>
                  <span class="text-left-space"><input type="text" name="name" class="text-left-color2" /></span>
                  <span class="text-left-space"><input type="text" name="url"  class="text-left-color3" /></span>
                  <span class="text-left-space"><input type="text" name="description" class="text-left-color4" /></span>
                  <span class="text-left-space"><input type="text" name="logo"  class="text-left-color5" /></span>


              </li>


              <li>

                  <span style="padding-left: 67px;"><input type="submit" value="添加"  /></span>
              </li>
              </form>
          </ul>







      </div>




    </div>



</div>

</body>
</html>