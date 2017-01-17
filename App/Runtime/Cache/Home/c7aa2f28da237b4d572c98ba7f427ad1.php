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
		<title> 重置密码</title>
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
				<h2>重置密码</h2>
			</div>

			<div class="change_password">
				<form action="" method="post">
					<ul>
						<li>
							<input class="cz-input mobel" type="text" name="reset_phone" id="reset_phone" value="" placeholder="请输入手机号" />
							<i class="qchm" id="qchm"></i>
						</li>
						<li>
							<input class="cz-input" type="password" name="reset_pass" id="reset_pass" value="" placeholder="请输入新密码" />
							<i class="user-eyek "></i>
						</li>
						<li class="last">
							<input class="cz-input" type="text" name="reset_code" id="reset_code" value="" placeholder="请输入验证码" />
							<div class="cz-button" name="103" id="getcode">获取验证码</div>
						</li>
					</ul>
					<input type="button" class="btn" id="reset_btn" value="确定" />
				</form>
			</div>

			<div class="mask" id="mask" onClick="closeDiv('chg_dialog');" style="display: none;">

			</div>

			<div class="chg_dialog" id="chg_dialog" style="display: none;">
				<em onClick="closeDiv('chg_dialog');"></em>
				<h2>密码重置成功</h2>
				<h4>密码重置后需重新登录</h4>
				<a href="<?php echo U('/home/login/login');?>">返回登录</a>
			</div>

		</div>
		<!--loyout结束-->

		<script type="text/javascript" src="/Public/Mstyle/layout/user/m/js/jquery-1.7.2.js"></script>
		<script type="text/javascript" src="/Public/Mstyle/layout/user/m/js/script.js"></script>
		<script type="text/javascript" src="/Public/Mstyle/layout/user/m/js/new.js"></script>

	</body>

</html>