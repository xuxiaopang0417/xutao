<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>内核资源</title>
		 <link rel="Stylesheet" type="text/css" href="views/css/neiheziyuan.css" />
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
			<?php if (@!$_SESSION['username']):?>
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
<?php endif;?>








			<?php if (@$_SESSION['username']):?>

			<div class="sec-left">
				<img src="views/img/1.jpg" />

			<div class="sec-right">

				<ul>

					<li><a href="shouye2.php"><img src="views/img/tou.jpg"/>admin</a></li>
					<li style="width: 1px; height: 15px;background-color: #CDCDCD; margin-top:3px;" ></li>
					<li><a href="#" >设置</a></li>
					<li style="width: 1px; height: 15px;background-color: #CDCDCD;margin-top:3px;"></li>
					<li>
						<?php if ($_SESSION['udertype']):?>
						<a href="guanlizhongxin.php">管理中心</a>
						<?php endif;?>

					</li>
					<li style="width: 1px; height: 15px;background-color: #CDCDCD;margin-top:3px;"></li>
					<li><a href="loginout.php">退出</a></li>

				</ul>

				<p class="sec-right-p">
				<p href="#">积分:6<a/>

					<span>用户权限:
							<?php if ($_SESSION['udertype']):?>
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

			<?php endif;?>
















        	<div class="botton">
        	<ul>
				<li style="background: #1252A7;"><a href="#">首页</a></li>
				<?php foreach ($category as $key=>$value ):?>

        	    <li><a href="shouye3.php?cid=<?php echo $value['cid'];?>"><?php echo $value['classname'];?></a></li>
        	    <li class="botton-li"></li>
				<?php endforeach;?>
        	</ul>

             </div>
            <div class="foot">
            	<img src="views/img/2.jpg" />
            	<input type="text" neme="uname" value="1" /><button class="sou">搜索</button>
            	 <div class="foot-right">
            	<ul>
            		<li>热搜:</li>
            		<li><a href="#">活动</a></li>
            		<li><a href="#">交友</a></li>
            		<li><a href="#">教程</a></li>
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

			<img src="views/img/3.jpg" />
			<ul>
				<li><a href="#">论坛></a> </li>
				<li><a href="#"><?php echo $da;?></a></li>
				<li><a href="#"><?php echo $xiao;?></a></li>
			</ul>
		</div>
<!--上部分结束。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。-->
	<div class="wonder">
		<div class="wonder1">
			<ul>
				<li style="width: 132px; height: 40px; background:#F5F9FB; line-height: 40px;"><p style="width: 120px;margin-left:10px">板块导航</p></li>
				<?php foreach ($category as $key=>$value):?>
				<li style="background: #F3F8FA;border:1px solid #BDD7E3;"><a href="#"><?php echo $value['classname'];?></a></li>
				<?php foreach ($category1 as $key=>$v):?>
				<?php if ($value['cid']==$v['parentid']):?>
				<li style="background: #F3F8FA; "><a href="neiheziyuan.php?cid=<?php echo $v['cid'];?>&da=<?php echo $value['classname'];?>&xiao=<?php echo $v['classname'];?>" style="color:#336699;"><?php echo $v['classname'];?></a></li>
				<?php endif;?>
			<?php endforeach;?>
				<?php endforeach;?>



			</ul>

		</div>
		
		<div class="wonder2">
			<ul>
				<li><a href="#"><?php echo $xiao;?></a><span>今日:5|主题:<?php echo $num1;?></span></li>
				<li>版主：text001，admin</li>
			</ul>
		</div>
		<div class="wonder2-1">
			<a href="fatiezijiemian.php?cid=<?php echo $cid;?>&da=<?php echo $da;?>&xiao=<?php echo $xiao;?>"><img src="views/img/f2.jpg" /></a>
		     <a href="#" style="width: 72px; height: 30px;line-height:30px;border:1px solid #CDCDCD; float: right; margin-top: 5px;"><img src="views/img/d3.jpg" >返回</a>
		</div>
		<div class="wonder2-2">
			<div class="wonder2-2-1">
					<ul>
				    <li>筛选：</li>
					<li><a href="#">全部</a> </li>
					<li style="width: 1px;height: 15px;border: 1px solid #D3CCD3;margin-top: 8px; background-color:#D3CCD3 ;"></li>
				    <li><a href="#">精华</a></li>
				</ul>
				<div class="wonder2-2-2">
					<ul>
					<li>最后发表</li>
					<li>回复/查看</li>
					<li>作者</li>
				</ul>
				</div>
				
			</div>
			<div class="wonder2-2-center">





			  <?php foreach ($details as $key=>$value):?>
				<div class="wonder2-2-center1">
					<img src="views/img/j.jpg" />
					<a href="huitie.php?id=<?php echo $value['id'];?>" style="color:#FF0000";><?php echo $value['title'];?></a>

					<div class="wonder2-2-center2">

						<p style="width: 100px;">徐涛</p>

						<span><?php echo $value['addtime'];?></span>

						<a href="#" style="position: absolute;right: 150px;top: 0px;">0</a>
						 <em style="position: absolute;right: 150px;">11</em>

						<p style="width:60px; position: absolute;top: 0;right:50px;">徐涛</p>
						<p style="width: 115px; position: absolute;top: 20px;right: 0;"><?php echo $value['addtime'];?> </p>
					</div>

				</div>

				<?php endforeach;?>










				</div>

				</div>
			
		</div>
		
	</div>
	
			<div class="wonder-down">
			<a href="#"><img src="views/img/f2.jpg" /></a>
		     <a href="#" style="width: 72px; height: 30px;line-height:30px;border:1px solid #CDCDCD; float: right; margin-top: 5px;"><img src="views/img/d3.jpg" >返回</a>
		</div>
		
	
	  <div class="won">
			<p class="p">powered by  <b>ccfff</b>  v2 <br> @2017 ccfffinc</p>
			<p  class="po">京ipc备 89273号 |<b>ccfff</b> <br>time no is 07-28 10:06</p>
			</div>
</body>
</html>