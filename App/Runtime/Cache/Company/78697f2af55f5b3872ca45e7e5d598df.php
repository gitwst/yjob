<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>注册</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>

<link href="http://static.yjob.net/Login/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="http://static.yjob.net/Login/pages/css/login.css" rel="stylesheet" type="text/css"/>
<link href="http://static.yjob.net/Login/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="http://static.yjob.net/Login/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color"/>
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<body class="login">
<div class="menu-toggler sidebar-toggler">
</div>
<div class="logo">
	<a href="index.html">
	<img src="http://static.yjob.net/Login/layout/img/logo-big.png" alt=""/>
	</a>
</div>
<div class="content">
	<form class="login-form" action="" method="post">
		<h3 class="form-title">注册</h3>
		<!--<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
			请输入用户名和密码 </span>
		</div>-->
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">手机号</label>
			<input class="form-control form-control-solid placeholder-no-fix" type="tel" autocomplete="off" placeholder="手机号" name="model"/>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">用户名</label>
			<input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="用户名" name="username"/>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">密码</label>
			<input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="密码" name="password"/>
		</div>
		<div class="form-actions">
			<button type="submit" class="btn btn-success uppercase btn-block">注册</button>
		</div>
	</form>
	
</div>
<div class="copyright">
	 2016 © 激活地带
</div>


</body>
<!-- END BODY -->
</html>