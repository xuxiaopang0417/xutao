<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--<script type='text/javascript' src='./public/ckeditor/ckeditor.js'></script>-->
    <title>Document</title>

    <style>

        *{margin:0px ;padding:0px;}
        .nav{width:100%;height:20px; background-color:#F1F5F7;}
        .nav-xin{width:960px; /*border:1px solid red; */margin:0 auto;}
        .nav-ads ,a{text-decoration:none;color:#000;font-family:'微软雅黑';font-size:12px;line-height:20px;}

        .tu-l{float:left;
            margin-top: 10px;}
        .tu-r{float: right;}
        .tou{float: right;margin-top: 30px;}
        .dengru ul{float: right;margin-top: 30px;/*margin-right:10px*/}
        .dengru ul li{float: left;list-style: none;}
        .dengru ul li a{padding: 3px; line-height: 10px;}
        .dengru ul li a img{margin-left: 3px; vertical-align: middle;}

        .xia ul{ float: right;margin-top:0px;}
        .xia ul li{list-style: none;}
        .xia ul li a{/*padding:5px;*/ color:#000;font-family:'微软雅黑';font-size:12px;line-height:20px; }
        .xia ul li a img{margin-left: 3px; vertical-align: middle;}

        .clear{clear:both;}
        .tiao{height: 30px;background-color:#2977C9; }
        .tiao ul li{float: left; list-style-type:none;}
        .tiao ul li a{ line-height:30px; margin-left: 30px;}
        .zhong{/*border: 1px solid red;*/width: 960px;height: 45px;
            background-color: #eff4f7;
            margin: 0 auto;
            margin-bottom: 10px;}
        .zhong-left img{float: left;}
        .zhong-left input{width: 410px;height: 30px;
            line-height: 45px;margin-top: 5px;float: left;}
        .zhong-z{float: left;}
        .ku{width: 60px;height: 33px;margin-top: 5px;}
        .zhong-r{float:left;}
        .zhong-r ul li{float: left;margin:12px 0 0 8px;list-style: none;padding-right: 5px;font-size: 12px;	}
        .zhong-r ul li a{color:blue;text-decoration:none;line-height: 9px;}
        .z{width: 960px;height: 34px;/*border:1px solid red;*/line-height: 34px;margin-top: -10px;}
        .z ul li{float: left;list-style: none;margin-left: 10px;}
        .z ul li img{vertical-align: middle;}
        .fabiao{width:940px;height: 44px;line-height: 44px; }
        .fa-t .fa{float: left;}
        .fa-t .hui{float: left;}
        .sanjiao{float: right;}
        .sanjiao a{display:inline-block;width: 80px; height: 33px;border:1px solid #C2D5E3;line-height: 33px;text-align: center;}
        .shanc{width: 960px;height:38px;border-top: 1px solid #CDCDCD;line-height: 38px;}
        .shanc ul li{float: left;margin-left:5px;list-style: none;}
        .shanc ul li a{color: #336699}
        .shanc ul li a:hover{text-decoration:underline;}
        .louzhu{width: 960px;height: 273px;border:1px solid #CDCDCD;}
        .lou-l{width: 162px;height: 273px;background-color: #E5EDF2;border-right: 1px solid #CDCDCD;float: left;}
        .am{height:75px;width: 162px;border-bottom: 1px dashed #CDCDCD;}
        .am .ck{font-size:12px;line-height: 44px;text-align: center;}
        .am .ck span{margin:0 3px 0 3px;color: red;}
        .jiacu{margin-left: 10px;}
        .tupian{margin-left: 22px;margin-top:27px;}
        .bo p{font-size: 12px; color:red;margin-top: 10px;}
        .lou-r{
            float: left;
        }
        .lou-sh{width: 780px;height: 80px;border-bottom:1px dashed #CDCDCD;margin-left:5px; }
        .zhanghao{margin-top:10px;}
        .guanli{float: left;}
        .dasan{float: right;margin-right: 10px;}
        .haungre{display: inline-block;float: left;}
        .haungre img{ vertical-align: middle; }
        .louxia{float: left;width: 780px;height: 40px;line-height: 40px;}


        .zhida input{width: 30px;height: 15px;}
        .fabiao p{display: inline-block;float: left;font-size: 12px;}
        .zhida{display: inline-block;float:left;font-size: 12px;margin-left: 460px;}
        .zhida a{display: inline-block;}
        .zhida a:hover{width: 30px;height: 20px;border: 1px solid #CDCDCD;text-decoration: underline;}
        .zhida img{vertical-align: middle;}
        .kongbai{width: 778px;height: 130px;border-bottom:1px dashed #CDCDCD;float: left;margin-left: 5px;}
        .xiat{width:930px;height: 40px;/*border: 1px solid red;*/margin-top: -47px;line-height: 40px;}
        .huihu{float: left;}
        .huihu span{font-size: 12px;}
        .huihu img{vertical-align: middle;}
        .jns{float: right;}
        .jns ul li{float: left;margin-left: 10px;line-height: 40px;list-style: none;}
        .jns ul li a:hover{text-decoration: underline;}
        .jns ul li img{vertical-align: middle;}
        .juli{margin-top: 10px;}
        .go2{
            width: 960px;height: 54px;border-bottom: 1px solid #CDCDCD;
        }
        .go2 .jilv{
            width: 373px;height: 26px;/*border: 1px solid #CDCDCD;*/
            margin:16px 0 0 580px;font-size:0;
        }
        .go2 .input{float: left;}
        .go2 .input input{width: 29px;height: 24px;/*font-size: 0;*/display: inline-block;}
        .go2 .input .in-w{width:33px;height: 20px; /*color: #444444;*/background-color: #E7E7E7;line-height: 20px;}
        .hanzi{height: 27px;width: 280px;/*border: 1px solid pink;*/float:left;font-size:12px;line-height: 27px;margin-left: 20px;color: #444444;}
        .annue{margin-left:10px;padding-left:10px;color:#fff;text-align:center; padding-right:10px;background-color: #296EBE; }
        .di{font-size: 12px;color:#666666;margin-top: 10px;padding-top: 5px;height: 60px;width: 960px;height: 54px;border-top: 1px solid #CDCDCD;}
        .di span{color: #333;}
        .di-l{float: left;}
        .di-r{float: right;}
    </style>
</head>
<body>
<div class="nav">
    <div class="nav-xin">
        <a href="index.php">设为主页</a>
        <a href="index.php">收藏本站</a>
    </div>
</div>
<div class="tu  nav-xin">
    <div class="tu-l">
        <img src="views/img/4.png"/>
    </div>
    <div class="tu-r">


        <div class="dengru">
            <div class="tou">
                <?php if (@!$_SESSION['picture']):?>
                <a href="touxiangshangchuan.php"><img src="views/img/xiang.jpg" style="width: 60px;height: 60px"/></a>
                <?php endif;?>
                <?php if (@$_SESSION['picture']):?>
                <img src="<?php echo $picturn;?>" style="width: 60px;height: 60px"/>
                <?php endif;?>
            </div>

            <ul>
                <li><a href="index.php"><img src="views/img/dengru.png">admin<img src="views/img/biankuang.png"/></a></li>
                <li><a href="touxiangshangchuan.php">设置<img src="views/img/biankuang.png"/></a></li>
                <li><a href="guanlizhongxin.php">管理中心<img src="views/img/biankuang.png"/></a></li>
                <li><a href="loginout.php">退出</a></li>
            </ul>
            <div class="xia">
                <ul>
                    <li><a herf="#">积分2<img src="views/img/biankuang.png"/></a></li>
                    <li><a herf="#">用户权限:管理员</a></li>
                </ul>
            </div>


        </div>
    </div>
</div>
<div class="clear"></div>
<div class="shouye">
    <div class="nav-xin tiao">
        <ul>
            <li><a href="##">首页</a></li>
            <?php foreach ($category as $key=>$value):?>

            <li><a href="shouye3.php?cid=<?php echo $value['cid'];?>"><?php echo $value['classname'];?></a></li>
            <?php endforeach;?>
        </ul>
    </div>

</div>
<div class="xin">
    <div class="zhong">
        <div class="zhong-left">
            <img src="views/img/suo.png">
            <input type="text" name="biao"placeholder="请输入搜索内容" >
        </div>
        <div class="zhong-z">
            <input type="button" value="搜索" class="ku" />
        </div>
        <div class="zhong-r">
            <ul>
                <li>热搜:</li>
                <li><a href="#">活动</a></li>
                <li><a href="#">交友</a></li>
                <li><a href="#">教程</a></li>
            </ul>
        </div>
    </div>
</div>


<div class="z nav-xin">
    <ul>
        <li><a href="##" class="nav-tu"><img src="views/img/dengru3.png"></a></li>
        <li><a href=""><img src="views/img/yu.png"></a></li>
        <li><a href="#" class="l-t">论坛</a></li>
        <li><a href=""><img src="views/img/yu.png"></a></li>
        <li><a href="#">你的名字</a></li>
        <li><a href=""><img src="views/img/yu.png"></a></li>
        <li><a href="#">黑娃刘瑞海</a></li>
        <li><a href=""><img src="views/img/yu.png"></a></li>
        <li><a href="#">发表求贴</a></li>
    </ul>
</div>
<div class="clear"></div>
<div class="fabiao nav-xin">
    <div class="fa-t">
        <div class="fa">
            <a href="shouye.php"><img src="views/img/fatie1.png"></a>
        </div>
        <div class="hui">
            <a href="##"><img src="views/img/huifu	.png"></a>
        </div>
        <div class="sanjiao">
            <a href="##"><img src="views/img/heisan.png">返回列表</a>
        </div>
    </div>
</div>
<div class="clear"></div>
<div class="shanc nav-xin">
    <ul>
        <li><a href="##">删除主题</a></li>
        <li><img src="views/img/jihuax.png" alt=""></li>
        <li><a href="##">置顶</a></li>
        <li><img src="views/img/jihuax.png" alt=""></li>
        <li><a href="##">高亮</a></li>
        <li><img src="views/img/jihuax.png" alt=""></li>
        <li><a href="##">精华</a></li>
        <li><img src="views/img/jihuax.png" alt=""></li>
    </ul>
</div>
<div class="louzhu nav-xin">
    <div class="lou-l">
        <div class="am">
            <div class="ck">
                <p>查看:<span>16</span>|回复:<span>0</span></p>
            </div>
            <div class="jiacu">
                <h5>admin</h5>
            </div>
            <div class="tupian">
                <?php if (@!$_SESSION['picture']):?>
                <a href="touxiangshangchuan.php"><img src="views/img/xiang.jpg" style="width: 60px;height: 60px"/></a>
                <?php endif;?>
                <?php if (@$_SESSION['picture']):?>
                <img src="<?php echo $picturn;?>" style="width: 60px;height: 60px"/>
                <?php endif;?>
                <div class="bo">
                    <p>管理员</p>
                    <p>学士</p>
                </div>

            </div>
        </div>
    </div>

    <div class="lou-r">
        <div class="lou-sh">
            <div class="zhanghao">
                <div class="guanli">

                    <h4><?php echo $rend[0]['title'];?></h4>
                </div>
                <div class="dasan">

                    <img src="views/img/sanj.png">

                </div>

            </div>
            <div class="clear"></div>
            <div class="louxia">
                <div class="haungre">
                    <img src="views/img/huangre.png">
                </div>
                <div class="fabiao">
                    <p>发表于 <?php echo $time;?></p>
                    <div class="zhida">
                        <a href="##">楼主</a>
                        楼主直达
                        <input type="text" class="ku">
                        <img src="views/img/lou.png" />
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="kongbai nav-xin">
        <?php echo $yes[0]['content'];?>
    </div>
    <div class="clear"></div>
    <div class="xiat nav-xin">
        <div class="huihu">
            <img src="views/img/xinxi.png"><span>回复</span>
        </div>
        <div class="jns">
            <ul>
                <li><a href="##">删除</a></li>
                <li><a href=""><img src="views/img/biankuang.png"></a></li>
                <li><a href="##">置顶</a></li>
                <li><a href=""><img src="views/img/biankuang.png"></a></li>
                <li><a href="##">精华</a></li>
            </ul>
        </div>
    </div>
    <div class="clear"></div>











    <?php if (!empty($huitie)):?>
     <?php foreach ($huitie as $key=>$value):?>

    <div class="louzhu nav-xin">
        <div class="lou-l">
            <div class="am">
                <div class="ck">
                    <p>查看:<span>16</span>|回复:<span>0</span></p>
                </div>
                <div class="jiacu">
                    <h5>admin</h5>
                </div>
                <div class="tupian">
                    <img src="views/img/dengru2.png">
                    <div class="bo">
                        <p>管理员</p>
                        <p>学士</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="lou-r">
            <div class="lou-sh">
                <div class="zhanghao">
                    <div class="guanli">


                    </div>
                    <div class="dasan">

                        <img src="views/img/sanj.png">

                    </div>

                </div>
                <div class="clear"></div>
                <div class="louxia">
                    <div class="haungre">
                        <img src="views/img/huangre.png">
                    </div>
                    <div class="fabiao">
                        <p>发表于 <?php echo $time1[$key]['addtime'];?></p>
                        <div class="zhida">
                            <a href="##">楼主</a>
                            楼主直达
                            <input type="text" value="<?php echo getDiff($m);?>" class="ku">
                            <img src="views/img/lou.png" />
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="kongbai nav-xin">
         <?php echo $value['content'];?>
        </div>
        <div class="clear"></div>
        <div class="xiat nav-xin">
            <div class="huihu">
                <img src="views/img/xinxi.png"><span>回复</span>
            </div>
            <div class="jns">
                <ul>
                    <li><a href="##">删除</a></li>
                    <li><a href=""><img src="views/img/biankuang.png"></a></li>
                    <li><a href="##">置顶</a></li>
                    <li><a href=""><img src="views/img/biankuang.png"></a></li>
                    <li><a href="##">精华</a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
<?php endforeach;?>
<?php endif;?>






























    <div class="fabiao nav-xin">
        <div class="fa-t juli">
            <div class="fa">
                <a href="##"><img src="views/img/fatie1.png"></a>
            </div>
            <div class="hui">
                <a href="##"><img src="views/img/huifu	.png"></a>
            </div>
            <div class="sanjiao">
                <a href="##"><img src="views/img/heisan.png">返回列表</a>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="go2 nav-xin">

        <div class="jilv">
            <div class="input">
                <input type="text" name="gozi" value="1"/>
                <input type="button" name="gzi" class="in-w" value="GO" />
            </div> -->
            <div class="hanzi">
                <span>1&nbsp;&nbsp;</span><span> 共有9条记录&nbsp;&nbsp;</span>
                <span> 每页显示10条&nbsp;&nbsp; </span>
                <span>本页1-9条 </span> <span> 1/1页</span>
            </div>

        </div>
    </div>
    <div class="louzhu nav-xin">
        <div class="lou-l">
            <div class="tupian">
                <img src="views/img/dengru2.png">
                <div class="bo">
                    <p>管理员</p>
                    <p>学士</p>
                </div>


            </div>

        </div>


        <form action="Return-card.php" method="post"enctype="multipart/form-data">
            <input type="hidden" name="title" value="    "/>

            <input type="hidden" name="id" value="<?php echo $a;?>"/>
            <textarea name="content" class='ckeditor' id='textarea'></textarea>
            <input type="submit" value="发帖" />
        </form>


    </div>

    <div class="lou-r">

    </div>
</div>
</div>

</div>

</div>
<div class="nav-xin">
</div>
<div class="clear"></div>
<div class="xiat nav-xin">

</div>
<div class="clear"></div>
<div class="di nav-xin">
    <div class="di-l">
        Powered by <span>ccfff</span> V2<br />
        &copy 2017 ccfff Inc.
    </div>
    <div class="di-r">
        京ICP备 89273号|<span>ccfff</span><br />
        Time Now Is: 12-23 07:26

    </div>
</div>
</body>
</html>