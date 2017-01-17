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
<title>03-我的推广</title>
<link rel="stylesheet" href="/1_NEW_Project/new_system/Public/Perredcenter/layout/blue/css/common.css">
<link rel="stylesheet" href="/1_NEW_Project/new_system/Public/Perredcenter/layout/blue/css/style.css">
<link rel="stylesheet" href="/1_NEW_Project/new_system/Public/Perredcenter/layout/user/m/css/three.css">



</head>
<body>
<div class="layout">
	
	<div class="mycenter yapiskan ">
		<div class="return" id="return">
			<img src="/1_NEW_Project/new_system/Public/Perredcenter/layout/user/m/imgs/img_wz1.png"/>
		</div>	
	    <h2>我的推广</h2>
		
	</div>
	
	<div class="mypromotion ">
		<div class="head">
			邀请好友得介绍金
			<span class="fx" onClick="openDiv('job_mask',99999); openDiv('alert',9999999);"></span>
		</div>
		<div class="body">
			<div class="bd">
				<img src="/1_NEW_Project/new_system/Public/Perredcenter/layout/user/m/imgs/wz6.jpg"/>
			</div>
			<div class="ft">
			<div class="ico">
				<a href="#"><img src="/1_NEW_Project/new_system/Public/Perredcenter/layout/user/m/imgs/wz5.jpg"/></a>
			</div>
			<div class="txt">
				<div class="fz">邀请码：
					<input value="B2312F" class="nu" id="awardQqQun1" type="text" readonly="">
				    <button type="button" class="btn" id="qqQunCopyBtn1" >
                 </div>
				<h4>已成功邀请<span>10</span>人</h4>
			</div>
		</div>
		</div>

  

	
	</div>
	
	
<!--弹窗-->
<div class="job_mask" id="job_mask">
	
</div>

<div class="alert" id="alert" >
	<div class="close-alert">
	</div>
	<ul>
		<li>
			<a href="#"><div class="ico">
				<img src="/1_NEW_Project/new_system/Public/Perredcenter/layout/user/m/imgs/wz39.png"/>
			</div>
			<h4>QQ</h4></a>
		</li>
		<li>
			<a href="#">
				<div class="ico">
				<img src="/1_NEW_Project/new_system/Public/Perredcenter/layout/user/m/imgs/wz40.png"/>
			</div>
			<h4>微信</h4>
			</a>
		</li>
		<li>
			<a href="#">
				<div class="ico">
				<img src="/1_NEW_Project/new_system/Public/Perredcenter/layout/user/m/imgs/wz41.png"/>
			</div>
			<h4>微博</h4>
			</a>
		</li>
		<li>
			<a href="#">
				<div class="ico">
				<img src="/1_NEW_Project/new_system/Public/Perredcenter/layout/user/m/imgs/wz42.png"/>
			</div>
			<h4>朋友圈</h4>
			</a>
		</li>
		<li>
			<a href="#">
				<div class="ico">
				<img src="/1_NEW_Project/new_system/Public/Perredcenter/layout/user/m/imgs/wz40.png"/>
			</div>
			<h4>微信</h4>
			</a>
		</li>
		<li>
			<a href="#">
				<div class="ico">
				<img src="/1_NEW_Project/new_system/Public/Perredcenter/layout/user/m/imgs/wz41.png"/>
			</div>
			<h4>微博</h4>
			</a>
		</li>
	</ul>
</div>	

	
	
	
</div><!--loyout结束-->



<script type="text/javascript" src="/1_NEW_Project/new_system/Public/Perredcenter/layout/user/m/js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="/1_NEW_Project/new_system/Public/Perredcenter/layout/user/m/js/script.js"></script>
<script type="text/javascript">
	$("#qqQunCopyBtn1").on('click',function(){
        var e=document.getElementById("awardQqQun1");//对象是content
        e.select(); //选择对象
        document.execCommand("Copy"); //执行浏览器复制命令
        alert("复制成功");
    })
</script>
</body>
</html>