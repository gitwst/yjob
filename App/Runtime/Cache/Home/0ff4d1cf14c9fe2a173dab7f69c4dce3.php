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
		<title> 个人注册</title>
		<link rel="stylesheet" href="/Public/Mstyle/layout/blue/css/common.css">
		<link rel="stylesheet" href="/Public/Mstyle/layout/blue/css/style.css">
		<link rel="stylesheet" href="/Public/Mstyle/layout/user/m/css/three.css">
		<link rel="stylesheet" href="/Public/Mstyle/layout/user/m/css/new.css">

	</head>

	<body>
		<div class="layout">

			<div class="mycenter yapiskan ">
				<div class="return" id="return">
					<img src="/Public/Mstyle/layout/user/m/imgs/img_wz1.png" />
				</div>
				<h2 class="grzc">个人注册</h2>
				<h2 class="qhsf"><a href="<?php echo U('qyzc');?>">切换身份</a></h2>
			</div>

			<div class="change_password">
				<form action="" method="post">
					<ul>
						<li>
							<input class="grzc-input mobel" type="text" name="gr_register_phone" value="" id="gr_register_phone" placeholder="请输入手机号" />
							<i class="qchm" id="qchm"></i>
						</li>
						<li>
							<input class="grzc-input" type="text" name="gr_register_code" id="gr_register_code" value="" placeholder="请输入验证码" />
							<div class="grzc-button" name="101" id="getcode">获取验证码</div>
						</li>
						<li>
							<input class="grzc-input mcmm" name="gr_register_pass" class="txt1" id="gr_register_pass" type="password" value="" placeholder="请输入密码" />
							<i class="user-eyek "></i>
						</li>
						<li><input class="grzc-input" type="text" name="gr_register_invite_code" id="gr_register_invite_code" value="" placeholder="邀请码(可不填)" /></li>
					</ul>
					<input type="button" class="btn" id="gr_register_btn" name="100" value="确认" />
				</form>
				<div class="grzc-footer">注册表示同意
					<a href="#">
						<<云兼职协议>></a>
				</div>
			</div>
		</div>
		<!--loyout结束-->

		<script type="text/javascript" src="/Public/Mstyle/layout/user/m/js/jquery-1.7.2.js"></script>
		<script type="text/javascript" src="/Public/Mstyle/layout/user/m/js/script.js"></script>
		<script type="text/javascript" src="/Public/Mstyle/layout/user/m/js/new.js"></script>

	</body>

</html>