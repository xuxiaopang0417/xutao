<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>首页</title>
		 <link rel="Stylesheet" type="text/css" href="views/css/shouye.css" />
	</head>
	<body>
		<!--
        	作者：offline
        	时间：2017-12-23
        	描述：顶部标签
        -->
		<div  class="header">
			<div class="header-left">
				<ul>
				<li><a href="index.php">设为首页</a></li>
				<li><a href="index.php">收藏本页</a></li>
			   </ul>
			</div>
		</div>
		<!--
        	作者：offline
        	时间：2017-12-23
        	描述：顶部结束
        -->
        <!--
        	作者：offline
        	时间：2017-12-23
        	描述：中部导航栏
        -->
        <div class="sec">
        	<div class="sec-left">
        		<img src="views/img/1.jpg" />
        		<div class="sec-right">
					<form action="register.php" method="post" enctype="multipart/form-data">
        			用户名：<input type="text" name="username" />
        			<input type="checkbox"  value="1" id="q"><label for="q">自动登录</label>
        			<a href="mimaanquan.php">找回密码</a>
        			  密码:<input type="password" name="pwd"  /><input type="submit" value="立即登录" />
        			  <a href="2.2.php">立即注册</a>
					</form>
        		</div>
        	</div>
        	<div class="botton">

        	<ul>
				<li style="background: #1252A7;"><a href="index.php">首页</a></li>
				<?php foreach ($category as $key=>$value):?>

				<li><a href="shouye3.php?cid=<?php echo $value['cid'];?>"><?php echo $value['classname'];?></a></li>
				<?php endforeach;?>

        	</ul>

             </div>
            <div class="foot">
            	<img src="views/img/2.jpg" />
            	<input type="text" neme="uname" value="1" /><button class="sou">搜索</button>
            	 <div class="foot-right">
            	<ul>
            		<li>热搜:</li>
            		<li><a href="huodongsousuojieguo.html">活动</a></li>
            		<li><a href="jiaoyousousuojieguo.html">交友</a></li>
            		<li><a href="jiaochengsousuojieguo.html">教程</a></li>
            	</ul>
            </div>
        
            </div>
        </div>
       <!--
       	作者：offline
       	时间：2017-12-23
       	描述：头部结束
       -->
       <!--
       	作者：offline
       	时间：2017-12-23
       	描述中间部分：
       -->
       
<div class="center">
	<div class="center-left">
		<img src="views/img/3.jpg" />
		<a href="index.php">论坛</a>
	</div>

</div>

<<!--
	作者：offline
	时间：2017-12-23
	描述：中部结束
-->
		<!--
            作者：offline
            时间：2017-12-23
            描述：下部开始
        -->

		<!--<div class="down">-->
		<?php foreach ($category as $key=>$value):?>
		<div class="down-top">
			<a href="index.php?cid=<?php echo $value['cid'];?>"><?php echo $value['classname'];?></a>
		</div>

		<?php foreach ($category1 as $key=>$v):?>
		<?php if ($value['cid'] == $v['parentid']):?>
		<div class="border">
			<div class="border-1">
				<img src="views/img/d.jpg" />
				<div class="border-1-2">
					<h3><a href="neiheziyuan.php?cid=<?php echo $v['cid'];?>&da=<?php echo $value['classname'];?>&xiao=<?php echo $v['classname'];?>"><?php echo $v['classname'];?></a></h3>
					<p>版主 徐涛</p>
				</div>
			</div>
			<div class="border-1-2-1">
				<span><?php echo $v['motifcount'];?>/<?php echo $v['replycount'];?></span>
				<div class="border-1-2-2">

					<p>从/未</p>

				</div>
			</div>
		</div>
		<?php endif;?>
		<?php endforeach;?>
		<?php endforeach;?>
		<!--</div>-->
		<!--...............................................................................................................-->





		<div class="monder">
			<div class="monder-top">
				<img src="views/img/8.jpg" />
				<div class="monder-top-1">
					<a href="http://www.discuz.net/forum.php">官方论坛</a>
					<p>提供最新的技术下载，产品新闻，技术下载等</p>
				</div>

			</div>
			<div class="monder-top-2">
				<ul>
					<li> <a href="https://www.baidu.com/">百度</a></li>
					<li><a href="http://www.manyou.com/">漫游平台</a></li>
					<li><a href="http://www.yeswan.com/">yeswan</a></li>
					<li><a href="http://www.5d6d.com/">我的领地</a></li>


				</ul>
			</div>
		</div>







		<div class="won">
			<p class="p">powered by <?php echo $site[0]['sitename'];?>  v2 <br> <?php echo $site[0]['webname'];?></p>
			<p  class="po"><?php echo $site[0]['webnumber'];?>|<b><?php echo $site[0]['sitename'];?></b> <br>time no is 07-28 10:06</p>
		</div>


	</body>
</html>
