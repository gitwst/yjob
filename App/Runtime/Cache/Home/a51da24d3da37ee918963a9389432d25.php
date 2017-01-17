<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="h_nickname">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, height=device-height, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="">
<meta name="format-detection" content="telephone=no">
<title>03-个人中心</title>
<link rel="stylesheet" href="/Public/Perredcenter/layout/blue/css/common.css">
<link rel="stylesheet" href="/Public/Perredcenter/layout/blue/css/style.css">
<link rel="stylesheet" href="/Public/Perredcenter/layout/user/m/css/three.css">

</head>
<body>
<div class="layout">
	
	<div class="mycenter yapiskan">
		<div class="return" id="return">
			<img src="/Public/Perredcenter/layout/user/m/imgs/img_wz1.png"/>
		</div>	
	    <h2>个人中心</h2>
	
	</div>
	


	
	<div class="mycenter_list">
		<ul>
			<li>
				<dl>
					<dd>						
						<div class="ico ico1">
							
						</div>
						<div class="txt">
							<a href="<?php echo U('hongbao/index');?>">
								抢红包
								<span></span>
							</a>
						</div>							
					</dd>
					<dd>						
						<div class="ico ico2">
							
						</div>
						<div class="txt">
							<a href="<?php echo U('Wechat/bind_we_chat');?>">
								微信绑定
								<div style="float:right;margin-right:15px;">未绑定</div>
							</a>
						</div>							
					</dd>
					
				</dl>
			</li>
			<li>
				<dl>
					<dd>						
						<div class="ico ico4">
							
						</div>
						<div class="txt">
							<a href="<?php echo U('popu/index');?>">
								我的推广
								<span></span>
							</a>
						</div>							
					</dd>
					<dd class="last">						
						<div class="ico ico5">
							
						</div>
						<div class="txt">
							<a href="<?php echo U('hongbao/hblist');?>">
								红包纪录
								<span></span>
							</a>
						</div>							
					</dd>					
				</dl>
			</li>
			<li>
				<dl>
					
					<dd class="last">						
						<div class="ico ico7">
							
						</div>
						<div class="txt">
							<a href="<?php echo U('resetpass/index');?>">
							账号设置
								<span></span>
							</a>
						</div>							
					</dd>					
				</dl>
			</li>
		</ul>
	</div>
	

		
		
	<div class="navs">
		<ul>
			<li >
				<a href="#">
					<div class="ico n1">
					
				</div>
				<h4>首页</h4>
				</a>
			</li>
			<li>
				<a href="#">
					<div class="ico n2">
					
				</div>
				<h4>活动</h4>
				</a>
			</li>
			<li>
				<a href="#">
					<div class="ico n3">
					
				</div>
				<h4>消息</h4>
				</a>
			</li>
			<li class="selected">
				<a href="#">
					<div class="ico n4">
					
				</div>
				<h4>我的</h4>
				</a>
			</li>
		</ul>
		
	</div>	
	
	
	
	
	
	
	
	
	
	
	

	
	
	
</div><!--loyout结束-->



<script type="text/javascript" src="/Public/Perredcenter/layout/user/m/js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="/Public/Perredcenter/layout/user/m/js/script.js"></script>




</body>
</html>