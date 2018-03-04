<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>登录管理中心</title>
		 <link rel="Stylesheet" type="text/css" href="views/css/guanli.css" />
	</head>
	<body>
		
			<div class="center1">
			<img src="views/img/guan.jpg" />
			<p>Discuz! 是<a href="https://www.tencent.com/zh-cn/index.html">腾讯</a>旗下<a href=""></a> Comsenz 公司推出的以社区为基础的专业建站平台，帮助网站实现一站式服务。</p>
			
		</div>
		<div class="left">
			<form action="adminManagement.php" method="post"enctype="multipart/form-data">
				用户名:&nbsp;&nbsp;<input type="text" name="username"/><br />
				   密码:&nbsp;&nbsp;<input type="password"  name="pwd"/>
				   <p>提问:&nbsp;
				   <select>
				   	<option>无安全提问</option>
				   	<option>父亲姓名</option>
				   	<option>母亲姓名</option>
				   	<option>家住那个城市</option>
				   	<option>父亲出生年月</option>
				   	<option>爷爷的姓名</option>
				   	<option>奶奶的姓名</option>
				   	
				   </select>
				</p>
				回答:&nbsp;&nbsp;<input type="text" value="1"/><br />
		     <input type="submit" value="提交">
			</form>
			
			
		
		</div>
		
		
	</body>
</html>
