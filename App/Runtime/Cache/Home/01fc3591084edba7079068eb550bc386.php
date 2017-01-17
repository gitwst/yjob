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
		<title> 手机登录</title>
		<link rel="stylesheet" href="/1_NEW_Project/new_system/Public/Mstyle/layout/blue/css/common.css">
		<link rel="stylesheet" href="/1_NEW_Project/new_system/Public/Mstyle/layout/blue/css/style.css">
		<link rel="stylesheet" href="/1_NEW_Project/new_system/Public/Mstyle/layout/user/m/css/three.css">
		<link rel="stylesheet" href="/1_NEW_Project/new_system/Public/Mstyle/layout/user/m/css/new.css">

	</head>

	<body>
		<div class="layout">

			<div class="mycenter yapiskan ">
				<div class="return" id="return">
					<img src="/1_NEW_Project/new_system/Public/Mstyle/layout/user/m/imgs/img_wz1.png" />
				</div>
				<h2>登录</h2>

			</div>

			<div class="change_phone ">
				<form action="<?php echo U('Login/login');?>" method="post">
					<ul>
						<li>
							<div class="sjdl-mima" style="position: relative;">
								密码登录
								<div class="dl-xxkt dl-xxkt1" style="left:0px;width:100%;overflow: hidden;top:31px">
								</div>
							</div>
							<div class="sjdl-sj " style="position: relative;">手机号登录
								<div class="dl-xxkt dl-xxkt2" style="left:0px;width:100%;overflow: hidden;top:31px;display: none;">
								</div>
							</div>

						</li>
						<ul class="zw-mima">
							<li>
								<input type="text" class="mmdl-smm mobel" name="m_phone" id="m_phone1" value="" placeholder="请输入手机号码" />
								<i class="qchm" id="qchm"></i>
							</li>
							<li>
								<input class="mmdl-smm mcmm" id="m_pass" type="password" name="m_pass" value="" placeholder="请输入密码" />
								<i class="user-eyek "></i>
								<!--<div class="user-eye"></div>-->
								<input type="hidden" name="type" id="type" value="100">
								<?php if($we_chat): ?><input type="hidden" name="we_chat" id="" value="<?php echo ($we_chat); ?>"><?php endif; ?>
								<?php if($openid): ?><input type="hidden" name="openid" id="" value="<?php echo ($openid); ?>"><?php endif; ?>
								<?php if($nick_name): ?><input type="hidden" name="nick_name" id="" value="<?php echo ($nick_name); ?>"><?php endif; ?>
							</li>
							<div class="wjmm">
								<a href="<?php echo U('resetpass/index');?>">忘记密码？</a>
							</div>
						</ul>
						<ul style="display:none;" class="zw-sj">
							<li>
								<input type="text" class="mmdl-smm mobel1" name="m_phone" value="" id="m_phone2" placeholder="请输入手机号码" />
								<i class="qchm1" id="qchm"></i>
							</li>
							<li class="last">
								<input type="text" name="code" id="code" class="mmdl-smm" value="" placeholder="请输入验证码" />
								<input type="button" class="dl-button" name="102" id="getcode" value="获取验证码" />
							</li>
						</ul>
					</ul>

					<input type="button" class="btn-dl1" id="submit" value="登录" />
					<a href="<?php echo U('register/grzc');?>"><input type="button" class="btn-dl" id="register" value="注册" /></a>
				</form>
				<div style="" class="dl-footer">
					<div class="footer-left"></div>
					<div class="footer-center">使用第三方登录</div>
					<div class="footer-right"></div>
					<div class="footer-tu">
						<a href="#"></a>
					</div>
					<div class="footer-tu1">
						<a href="#"></a>
					</div>
					<div class="footer-tu2">
						<a href="#"></a>
					</div>
					<div class="footer-tu3">
						<a href="#"></a>
					</div>
				</div>
			</div>

		</div>
		<!--loyout结束-->
		<script type="text/javascript" src="/1_NEW_Project/new_system/Public/Mstyle/layout/user/m/js/jquery-1.7.2.js"></script>
		<script type="text/javascript" src="/1_NEW_Project/new_system/Public/Mstyle/layout/user/m/js/script.js"></script>
		<script type="text/javascript" src="/1_NEW_Project/new_system/Public/Mstyle/layout/user/m/js/new.js"></script>

	</body>

</html>