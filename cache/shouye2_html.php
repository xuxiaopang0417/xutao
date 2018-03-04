<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>首页</title>
		 <link rel="Stylesheet" type="text/css" href="views/css/shouye2.css" />
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
					<ul>
						<li><a href="shouye2.php"><img src="views//img/tou.jpg"/>admin</a></li>
						<li style="width: 1px; height: 15px;background-color: #CDCDCD; margin-top:3px;" ></li>
						<li><a href="#" >设置</a></li>
						<li style="width: 1px; height: 15px;background-color: #CDCDCD;margin-top:3px;"></li>

						<li><?php if ($_SESSION['udertype']):?><a href="guanlizhongxin.php">管理中心</a><?php endif;?></li>


						<li style="width: 1px; height: 15px;background-color: #CDCDCD;margin-top:3px;"></li>
						<li><a href="loginout.php">退出</a></li>
					</ul>
					<p class="sec-right-p">
						<a href="#">积分:6<a/>

							<span><?php if ($_SESSION['udertype']):?>
						<a href="#">管理员</a>
						<?php endif;?>
						<?php if (!$_SESSION['udertype']):?>
						<a href="#">普通用户</a>
						<?php endif;?>
							</span>
					</p>
					<div class="sec-right-img">
						<?php if (@!$_SESSION['picture']):?>
						<a href="touxiangshangchuan.php"><img src="views/img/xiang.jpg" style="width: 60px;height: 60px"/></a>
						<?php endif;?>
						<?php if (@$_SESSION['picture']):?>
						<img src="<?php echo $picturn;?>" style="width: 60px;height: 60px"/>
						<?php endif;?>

					</div>




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
            		<li>帖子:<?php echo $num;?></li>
            		<li>新会员:<?php echo $newvip;?></li>
            		<li>会员:<?php echo $namer;?></li>

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
		<a href="shouye.html">论坛</a>
	</div>
</div>

<!--
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
			<p class="p">powered by  <b>ccfff</b>  v2 <br> @2017 ccfffinc</p>
			<p  class="po">京ipc备 89273号 |<b>ccfff</b> <br>time no is 07-28 10:06</p>
			</div>


	</body>
</html>
