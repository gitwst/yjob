<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Olive Enterprise">
    <!-- END META -->
    
    <!-- BEGIN SHORTCUT ICON -->
    <!-- <link rel="shortcut icon" href="img/favicon.ico"> -->
    <!-- END SHORTCUT ICON -->
    <title>
       Olive Admin
    </title>
    <!-- BEGIN STYLESHEET-->
    <link href="/Public/admin/css/bootstrap.min.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
    <link href="/Public/admin/css/bootstrap-reset.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
    <link href="/Public/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet"><!-- FONT AWESOME ICON CSS -->
    <link href="/Public/admin/css/style.css" rel="stylesheet"><!-- THEME BASIC CSS -->
    <link href="/Public/admin/css/style-responsive.css" rel="stylesheet"><!-- THEME RESPONSIVE CSS -->
    <link href="/Public/admin/assets/morris.js-0.4.3/morris.css" rel="stylesheet"><!-- MORRIS CHART CSS -->
    <!--dashboard calendar-->
    <link href="/Public/admin/css/clndr.css" rel="stylesheet"><!-- CALENDER CSS -->
    <link href="/Public/admin/css/css.css" rel="stylesheet">
    <script type="text/javascript" src="/Public/admin/js/echarts.js" ></script><!-- ECHARTS JS  图表js库-->
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=1.3"></script>
    <script type="text/javascript" src="/Public/admin/js/jquery.min.js"></script>
     <!--[if lt IE 9]>
<script src="js/html5shiv.js">
</script>
<script src="js/respond.min.js">
</script>
<![endif]-->
     <!-- END STYLESHEET-->
  </head>
  <body>
    <!-- BEGIN SECTION -->
    <section id="container">
      <!-- BEGIN HEADER -->
      <header class="header white-bg">
        <!-- SIDEBAR TOGGLE BUTTON -->
      <div class="sidebar-toggle-box">
        <div  data-placement="right" class="fa fa-bars tooltips">
        </div>
      </div>
        <!-- SIDEBAR TOGGLE BUTTON  END-->
        <a href="index.html" class="logo">
          <img src="/Public/admin/img/images/header_06.png" alt="">
        </a>
     <!-- START USER LOGIN DROPDOWN  -->
        <nav class="nav notify-row" id="top_menu">
          
          <ul class="nav top-menu">
            
            <!-- START NOTIFY INBOX BAR -->
            
            <li id="header_inbox_bar" class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-envelope-o">
                </i>
                <span class="badge bg-important">
                  5
                </span>
              </a>
              <ul class="dropdown-menu extended inbox">
                <li class="notify-arrow notify-arrow-blue">
                </li>
                <li>
                  <a href="#">
                    <span class="photo">
                      <img alt="avatar" src="/Public/admin/img/avatar-mini.jpg">
                    </span>
                    <span class="subject">
                      <span class="from">
                        Chintan Pandya
                      </span>
                      <span class="time">
                        Just now
                      </span>
                    </span>
                    <span class="message">
                      Hello, this is an example msg.
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="photo">
                      <img alt="avatar" src="/Public/admin/img/avatar-mini2.jpg">
                    </span>
                    <span class="subject">
                      <span class="from">
                        Parth Jani
                      </span>
                      <span class="time">
                        10 mins
                      </span>
                    </span>
                    <span class="message">
                      Hi, Bro how are you ?
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="photo">
                      <img alt="avatar" src="/Public/admin/img/avatar-mini3.jpg">
                    </span>
                    <span class="subject">
                      <span class="from">
                        Jay Bardolia
                      </span>
                      <span class="time">
                        3 hrs
                      </span>
                    </span>
                    <span class="message">
                      This is awesome dashboard.
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="photo">
                      <img alt="avatar" src="/Public/admin/img/avatar-mini4.jpg">
                    </span>
                    <span class="subject">
                      <span class="from">
                        Pruthvi Bardolia
                      </span>
                      <span class="time">
                        Just now
                      </span>
                    </span>
                    <span class="message">
                      Hello, this is metrolab
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    See all messages
                  </a>
                </li>
              </ul>
            </li>
            <!-- END NOTIFY INBOX BAR -->
            
            <!-- START NOTIFY NOTIFICATION BAR -->
            
            <li id="header_notification_bar" class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-bell-o">
                </i>
                <span class="badge bg-warning">
                  7
                </span>
              </a>
              <ul class="dropdown-menu extended notification">
                <li class="notify-arrow notify-arrow-blue">
                </li>
                <li>
                  <a href="#">
                    <span class="label label-danger">
                      <i class="fa fa-bolt">
                      </i>
                    </span>
                    Server #3 overloaded.
                    <span class="small italic">
                      34 mins
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="label label-warning">
                      <i class="fa fa-bell">
                      </i>
                    </span>
                    Server #10 not respoding.
                    <span class="small italic">
                      1 Hours
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="label label-danger">
                      <i class="fa fa-bolt">
                      </i>
                    </span>
                    Database overloaded 24%.
                    <span class="small italic">
                      4 hrs
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="label label-success">
                      <i class="fa fa-plus">
                      </i>
                    </span>
                    New user registered.
                    <span class="small italic">
                      Just now
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="label label-primary">
                      <i class="fa fa-bullhorn">
                      </i>
                    </span>
                    Application error.
                    <span class="small italic">
                      10 mins
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    See all notifications
                  </a>
                </li>
              </ul>
            </li>
            <!-- END NOTIFY NOTIFICATION BAR -->
            
          </ul>
          
          
        </nav>
        <div class="top-nav ">
          <ul class="nav pull-right top-menu">
            <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="/Public/admin/img/avatar1_small.jpg">
                <span class="username">
                  云兼职——北京最大的兼职平台
                </span>
                <b class="caret">
                </b>
              </a>
              <ul class="dropdown-menu extended logout">
                <li class="log-arrow-up">
                </li>
                <li>
                  <a href="#">
                    <i class=" fa fa-suitcase">
                    </i>
                    Profile
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-cog">
                    </i>
                    Settings
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-bell-o">
                    </i>
                    Notification
                  </a>
                </li>
                <li>
                  <a href="<?php echo U('Login/Login');?>">
                    <i class="fa fa-key">
                    </i>
                    Log Out
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
    <!-- END USER LOGIN DROPDOWN  -->
      </header>
      <!-- END HEADER -->
      <!-- BEGIN SIDEBAR -->

<aside>
        <div id="sidebar" class="nav-collapse">
          <ul class="sidebar-menu" id="nav-accordion">
            <li >
              <a href="<?php echo U('Index/index');?>" class="active">
                <i class="fa fa-dashboard">
                </i>
                <span>
                  企业管理首页
                </span>
              </a>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-laptop">
                </i>
                <span>
                  招聘管理
                </span>
                <span class="label label-success span-sidebar">
                  4
                </span>
              </a>
              <ul class="sub">
                <li>
                  <a href="<?php echo U('Recruit/release');?>">
                    发布职位
                  </a>
                </li>
                <li>
                  <a href="<?php echo U('Recruit/management');?>">
                    管理职位
                  </a>
                </li>
                <li>
                  <a href="apply.html">
                     报名管理
                  </a>
                </li>
              </ul>
            </li>
            <!--<li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-book">
                </i>
                <span>
                  工资管理
                </span>
                <span class="label label-info span-sidebar">
                  7
                </span>
              </a>
              <ul class="sub">
                <li>
                  <a href="">
                    生成工资单
                  </a>
                </li>
                <li>
                  <a href="">
                    发放工资
                  </a>
                </li>
              </ul>
            </li>-->
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-cogs">
                </i>
                <span>
                  人员管理
                </span>
                <span class="label label-primary span-sidebar">
                  5
                </span>
              </a>
              <ul class="sub">
                <li>
                  <a href="<?php echo U('People/partTime');?>">
                    兼职库
                  </a>
                </li>
                <li>
                  <a href="<?php echo U('People/steering');?>">
                    督导库
                  </a>
                </li>
                <li>
                  <a href="<?php echo U('People/bd');?>">
                    BD库
                  </a>
                </li>
                <!--<li>
                  <a href="">
                    企业库
                  </a>
                </li>-->
              </ul>
            </li>
            <!--<li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-tasks">
                </i>
                <span>
                  财务管理
                </span>
                <span class="label label-info span-sidebar">
                  7
                </span>
              </a>
              <ul class="sub">
                <li>
                  <a href="">
                    账单
                  </a>
                </li>
                <li>
                  <a href="">
                    充值
                  </a>
                </li>
              </ul>
            </li>-->
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-th">
                </i>
                <span>
                  账号管理
                </span>
                <span class="label label-inverse span-sidebar">
                  5
                </span>
              </a>
              <ul class="sub">
                <li>
                  <a href="<?php echo U('Account/business');?>">
                    企业管理
                  </a>
                </li>
                <li>
                  <a href="<?php echo U('Account/security');?>">
                    安全认证
                  </a>
                </li>
                <li>
                  <a href="<?php echo U('Account/news');?>">
                    我的消息
                  </a>
                </li>
                <li>
                  <a href="">
                    退出
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </aside>
      <!-- END SIDEBAR -->
      <!-- BEGIN MAIN CONTENT -->


      <section id="main-content">
	  <!-- BEGIN WRAPPER  -->
        <section class="wrapper">
		  <!-- BEGIN ROW  -->
          <div class="row state-overview">
            <form role="form" action="1.php" method="post">
              <div class="col-lg-12 job-posted-pasic">
                 <section class="panel">
                    <div class="job-posted-info-title">基本信息</div>
                    <ul class="city-outer">
                      <li><span>* </span>
                        <p>展现城市：</p>
                        <div class="form-group inline-block">
                          <select class="form-control">
                            <option>请选择</option>
                            <option>北京</option>
                            <option>山东</option>
                            <option>山西</option>
                            <option>巴基斯坦--</option>
							 <option>请选择</option>
                            <option>北京</option>
                            <option>山东</option>
                            <option>山西</option>
                            <option>巴基斯坦--</option>
							 <option>请选择</option>
                            <option>北京</option>
                            <option>山东</option>
                            <option>山西</option>
                            <option>巴基斯坦--</option>
							 <option>请选择</option>
                            <option>北京</option>
                            <option>山东</option>
                            <option>山西</option>
                            <option>巴基斯坦--</option>
							 <option>请选择</option>
                            <option>北京</option>
                            <option>山东</option>
                            <option>山西</option>
                            <option>巴基斯坦--</option>
							 <option>请选择</option>
                            <option>北京</option>
                            <option>山东</option>
                            <option>山西</option>
                            <option>巴基斯坦--</option>
							 <option>请选择</option>
                            <option>北京</option>
                            <option>山东</option>
                            <option>山西</option>
                            <option>巴基斯坦--</option>
                          </select>
                        </div>
                        <div class="form-group inline-block job-town">
                          <select class="form-control">
                            <option>请选择</option>
                            <option>北京</option>
                            <option>山东</option>
                            <option>山西</option>
                            <option>巴基斯坦--</option>
                          </select>
                        </div>
                      </li>
                      <li>
                        <span>* </span>
                        <p>职位名称：</p>
                        <input type="text" class="form-control inline-block postjobw25" placeholder="请输入想要发布的职位名称">
                      </li>
                      <li>
                        <span>* </span>
                        <p>职位类型：</p>
                        <div class="form-group inline-block">
                          <select class="form-control">
                            <option>请选择</option>
                            <option>送外卖</option>
                            <option>抓小三 </option>
                            <option>做保洁</option>
                            <option>耍流氓</option>
                          </select>
                        </div>
                      </li>
                      <li>
                        <span>* </span>
                        <p>职位性质：</p>
                        <div class="btn-group" data-toggle="buttons">
	                        <label class="btn btn-default active">
	                          	<input type="radio" name="nature" id="option1">
	                          	短期
	                        </label>
		                    <label class="btn btn-default">
		                        <input type="radio" name="nature" id="option2">
		                        长期
		                    </label>
	                    </div>
                      </li>
                      <li>
                        <span>* </span>
                        <p>性别要求：</p>
                        <div class="btn-group" data-toggle="buttons">
	                        <label class="btn btn-default active">
	                          	<input type="radio" name="sex" id="option3">
	                          	不限
	                        </label>
		                    <label class="btn btn-default">
		                        <input type="radio" name="sex" id="option4">
		                        男
		                    </label>
		                    <label class="btn btn-default">
		                        <input type="radio" name="sex" id="option5">
		                        女
		                    </label>
	                    </div>
                      </li>
                      <li>
                        <span>* </span>
                        <p>年龄要求：</p>
                        <div class="form-group inline-block">
                          <select class="form-control">
                            <option>18岁</option>
                            <option>19岁</option>
                            <option>20岁</option>
                            <option>21岁</option>
                            <option>22岁</option>
                            <option>23岁</option>
                            <option>24岁</option>
                            <option>25岁</option>
                            <option>26岁</option>
                            <option>27岁</option>
                            <option>28岁</option>
                            <option>29岁</option>
                            <option>30岁</option>
                            <option>31岁</option>
                            <option>32岁</option>
                            <option>33岁</option>
                            <option>34岁</option>
                            <option>35岁</option>
                            <option>36岁</option>
                          </select>
                        </div>
                        &nbsp;至&nbsp;
                        <div class="form-group inline-block">
                          <select class="form-control">
                            <option>18岁</option>
                            <option>19岁</option>
                            <option>20岁</option>
                            <option>21岁</option>
                            <option>22岁</option>
                            <option>23岁</option>
                            <option>24岁</option>
                            <option>25岁</option>
                            <option>26岁</option>
                            <option>27岁</option>
                            <option>28岁</option>
                            <option>29岁</option>
                            <option>30岁</option>
                            <option>31岁</option>
                            <option>32岁</option>
                            <option>33岁</option>
                            <option>34岁</option>
                            <option>35岁</option>
                            <option>36岁</option>
                          </select>
                        </div>
                      </li>
                      <li class="clearfix">
                        <span>* </span>
                        <p>职位描述：</p>
                          <textarea name="" id="" cols="100" rows="10"></textarea>
                      </li>
                      <li>
                        <span>* </span>
                        <p>联 系 人：</p>
                        <input type="text" class="form-control inline-block postjobw15" placeholder="">
                        <div class="btn-group" data-toggle="buttons">
	                        <label class="btn btn-default  active">
	                          	<input type="radio" name="link-sex" id="option6">
	                          	先生
	                        </label>
		                    <label class="btn btn-default">
		                        <input type="radio" name="link-sex" id="option7">
		                        女士
		                    </label>
	                    </div>
                        <div>
	                        <span>* </span>
	                        <p>联系电话：</p>
	                        <input type="text" class="form-control inline-block postjobw25" placeholder="请输入联系电话">
                        </div>
                      </li>
                    </ul>
                 </section>
                 <section class="panel">
                    <div class="job-posted-info-title">配置区</div>
                    <div class="job-posted-detail detegate-puls">
                    	<div>
	                        <span>* </span>
	                        <p>项目负责人</p>
                        </div>
                        <div class="clearfloat"></div>
                        <div class="bdlist">
                    		<ul class="li-inline bdul-two">
                    			<li><b>姓 名：</b><input class="textname form-control inline-block input-width-68px" type="text" name="" value=""></li>
                    			<li><b>手机号：</b><input class="texttel form-control inline-block input-width-118px" type="text" name="" value=""></li>
                    			<li><b>权限：</b>
                    				  <div class="form-group inline-block">
			                          <select id="textjur" class="form-control">
		                                <option value="0">无</option>
		                                <option value="1">管理</option>
			                            <option value="2">查看</option>
			                           </select>
			                        </div>
                    			</li>
                    			<li>
                    				<div id='btn-plus' class="btn btn-success btn-xs"><i class="fa fa-plus"></i></div>
                    			</li>
                    		</ul>
                        <ul class="ul1"></ul>
                    		<div class="clearfloat"></div>
                        </div>
                        
                        <script>
                                var oT = $('.textname'); // input 元素节点
                                var iNow = -1;
                                var oldValue = '';

                                oT.keyup(function(ev){
                                	oUl = $(this).closest('ul').next('ul'); // 下拉提示框元素节点
	                                  var oEvent = ev || event;
	                                  if(oEvent.keyCode == 38 || oEvent.keyCode == 40){
	                                    return false;
	                                  }
	                                  oldValue = oT.val(); // input输出时的值
	                                  if (oldValue == '') { // 删除到没有值时隐藏ul元素
	                                    oUl.css('display', 'none');
	                                    return false;
	                                  };
	                                  $.ajax({ //根据input的value值进行数据库查询
	                                    url:'inputDb.php',
	                                    type: 'get',
	                                    data:{keyword:oT.val()},
	                                    dataType:'json',
	                                    success:function(json){
	                                      console.log(json);
	                                      arr = json;
	                                      if (arr.length == 0) {
	                                      	oUl.css('display', 'none');
	                                      }else{
	                                      	oUl.css('display', 'block');
	                                     	oUl.html('');
	                                  	}
	                                      // 创建div
	                                      for(var i=0; i<arr.length; i++){
	                                        var oLi = $('<div></div>');
	                                        oLi.html(arr[i].name);
	                                        oUl.append(oLi);
	                                      }
	                                    }
	                                    })
									})

								oT.keydown(function(ev){
										var oEvent = ev || event;
										var aLi = oUl.children('div');
										var inputPhone = $(this).closest('li').next('li').children('input');
										 if(oEvent.keyCode == 40){
		                                    iNow++;
		                                    if(aLi.length == 1){ // 只有一个搜索结果时
		                                      iNow = -1;
		                                      $(aLi[aLi.length-1]).addClass('oncolor');
		                                      oT.val($(aLi[aLi.length-1]).html());
		                                      inputPhone.attr('readonly', 'readonly');
		                                      inputPhone.val(arr[0].phone);
		                                      oUl.css('display', 'none');
		                                      return false;
		                                    }
		                                    if (iNow == aLi.length) {
		                                    	iNow = 0;
		                                    };
		                                    for(var i=0; i<aLi.length; i++){ // 多个搜索结果时 清空下拉数据的所有样式
		                                      $(aLi[i]).removeClass('oncolor');
		                                    }
		                                    $(aLi[iNow]).addClass('oncolor');
		                                    oT.val($(aLi[iNow]).html());
		                                    inputPhone.attr('readonly', 'readonly');
		                                    inputPhone.val(arr[iNow].phone);
		                                    return false;
		                                  }
		                                  if(oEvent.keyCode == 38){
		                                    iNow--;
		                                    if(aLi.length == 1){ // 只有一个搜索结果时
		                                      iNow = -1;
		                                      $(aLi[aLi.length-1]).addClass('oncolor');
		                                      oT.val($(aLi[aLi.length-1]).html());
		                                      inputPhone.attr('readonly', 'readonly');
		                                      inputPhone.val(arr[0].phone);
		                                      oUl.css('display', 'none');
		                                      return false;
		                                    }
		                                    if (iNow < 0) {
		                                    	iNow = aLi.length - 1;
		                                    };
		                                    for(var i=0; i<aLi.length; i++){ // 多个搜索结果时 清空下拉数据的所有样式
		                                      $(aLi[i]).removeClass('oncolor');
		                                    }
		                                    $(aLi[iNow]).addClass('oncolor');
		                                    oT.val($(aLi[iNow]).html());
		                                    inputPhone.attr('readonly', 'readonly');
		                                    inputPhone.val(arr[iNow].phone);
		                                    return false;
		                                  }
	                                  	})

	                                // input 失去焦点事件
	                                oT.blur(function(){
	                                	oUl.css('display', 'none');
	                                })

                              // 点击删除按钮删除当前元素
                              function substract(index){
                                  $(index).closest('ul').parent('div').remove();
                              }
                              // 点击加号添加当前节点数据
                              $('.detegate-puls').delegate('#btn-plus', 'click', function(){
                              	  var obtnPlus = $('#btn-plus');
                                  var othisDiv = obtnPlus.closest('ul').parent('div');
                                  oselectValue = othisDiv.find('select').val();
                                  othisDiv.clone(true).insertBefore(othisDiv);
                                  var oprevDiv = othisDiv.prev('div');
                                  oprevDiv.find('li:last').html("<div onclick=\"substract(this)\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-minus\"></i></div>");
                                  oprevDiv.find('option[value='+oselectValue+']').prop('selected',true);
                                  othisDiv.find('input').val('');
                                  bbs = othisDiv.find('.texttel').attr('readonly', false);
                                  othisDiv.find('option:first').prop('selected', true);
                              })
                        </script>	
                    </div>
                    <div class="job-posted-detail" id="detail-un-bottom">
                    	<div>
	                        <span>* </span>
	                        <p>工作配置</p>
                        </div>
                        <div class="first-conf">
                        	配 置 一：
							            <div class="obtnclick btn btn-success btn-xs"><i class="fa fa-plus"></i></div>
                        </div>
                        <!-- <div class="clearfloat"></div>
                        <div class="first-conf">
                        	<div class="postjobw70 pull-left">配 置 二 ：北京 海淀区 中关村，20人，100元/人，2016年07月01日-2016年08月01日</div>
                        	<div class="tar-encode"></div>
							<div class="btn btn-info btn-xs" onclick="updateStation(this)"><i class="fa fa-cogs"></i></div>
                        	<div class="btn btn-primary btn-xs"><i class="fa fa-clipboard"></i></div>
                        	<div class="btn btn-danger btn-xs" onclick="delStation(this)"><i class="fa fa-times"></i></div>
							
                        </div>
                        <div class="clearfloat"></div>
                        <div class="first-conf">
                          <div class="postjobw70 pull-left">配 置 二 ：北京 海淀区在在基要在 中关村，20人，100元/人，2016年07月01日-2016年08月01日</div>
                          <div class="tar-encode"></div>
                          <div class="obtnclick btn btn-info btn-xs" onclick="updateStation(this)"><i class="fa fa-cogs"></i></div>
                          <div class="btn btn-primary btn-xs"><i class="fa fa-clipboard"></i></div>
                          <div class="btn btn-danger btn-xs" onclick="delStation(this)"><i class="fa fa-times"></i></div>
                        </div> -->
                    </div>
                    <section class="panel posted-footer panel-body" style="display:none">
		                <header class="panel-heading col-lg-12">
		                  <span>
		                    配置二
		                  </span>
		                  <span class="tools pull-right">
		                    <a class="fa fa-chevron-down">
		                    </a>
		                  </span>
		                </header>
		                <div class="clearfloat"></div>
		                <div class="panel-body">
		                    <p><span>* </span>人员配置</p>
                        <ol class="list-inline">
                          <li><abbr>督导人数：</abbr><input class="form-control inline-block input-width-68px" type="text" id="dd_nums" name="dd_nums" value="1"></li>
                          <li><abbr>备用人数：</abbr><input class="form-control inline-block input-width-68px" type="text" id="dd_by_nums" name="dd_by_nums" value="2"></li>
                          <li>
                            <abbr>薪资：</abbr>
                            <input class="form-control inline-block input-width-68px" type="text" id="ddxz" name="ddxz" value="">
                            <div class="form-group inline-block">
                              <select class="form-control" id="dd_work_xzdw_menu" name="dd_work_xzdw_menu">
                                <option value="1">天</option>
                                <option value="2">周</option>
                                <option value="3">月</option>
								<option value="4">小时</option>
								<option value="5">次</option>
								<option value="6">个</option>
								<option value="7">件</option>
									
                              </select>
                            </div>
                          </li>
                          <li>
                            <abbr>结算方式：</abbr>
                            <div class="form-group inline-block">
                              <select class="form-control" id="dd_work_jsfs_menu" name="dd_work_jsfs_menu">
                                <option value="1">日结</option>
                                <option value="2">次日结</option>
                                <option value="3">周结</option>
                                <option value="4">半月结</option>
                                <option value="5">月结</option>
                                <option value="6">完工结</option>
                              </select>
                            </div>
                          </li>
                        </ol>
                        <ol class="list-inline list-inline-bottom">
                          <li><abbr>兼职人数：</abbr><input class="form-control inline-block input-width-68px" type="text" id="stations_jz_nums" name="stations_jz_nums" value=""></li>
                          <li><abbr>备用人数：</abbr><input class="form-control inline-block input-width-68px" type="text" id="stations_jz_by_nums" name="stations_jz_by_nums" value="5"></li>
                          <li>
                            <abbr>薪资：</abbr>
                            <input class="form-control inline-block input-width-68px" type="text" id="jz_xz" name="jz_xz" value="">
                            <div class="form-group inline-block">
                              <select class="form-control" id="jz_work_xzdw_menu" name="jz_work_xzdw_menu">
                                <option value="1">天</option>
                                <option value="2">周</option>
                                <option value="3">月</option>
								<option value="4">小时</option>
								<option value="5">次</option>
								<option value="6">个</option>
								<option value="7">件</option>
                              </select>
                            </div>
                          </li>
                          <li>
                            <abbr>结算方式：</abbr>
                            <div class="form-group inline-block">
                              <select class="form-control" id="jz_work_jsfs_menu" name="jz_work_jsfs_menu">
                                <option value="1">日结</option>
                                <option value="2">次日结</option>
                                <option value="3">周结</option>
                                <option value="4">半月结</option>
                                <option value="5">月结</option>
                                <option value="6">完工结</option>
                              </select>
                            </div>
                          </li>
                        </ol>
                        <!-- 时间配置 start -->
                        <p><span>* </span>时间配置</p>
                        <div class="form-group index-time">
                          <ol>
                            <li>
                              <abbr>日期配置：</abbr>
                              <div class="index-time-input">
                                <div class="input-group">
                                  
                                  <div id="get_self" class="input-group-btn">
                                    <div class="btn btn-danger date-reset">
                                      <i class="fa fa-times">
                                      </i>
                                    </div>
                                    <div class="btn btn-info date-set" onclick="startTotime()">
                                      <i class="fa fa-calendar">
                                      </i>
                                    </div>
                                    <div class="btn btn-warning" id="submit_totime" onclick="submitTotime()">
                                      确定
                                      </i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </ol>
                          <div id="date-weizhi" style="margin-left:54px;"></div>
                          <div class="time-selected">
                            <div id="innerhtml" class="divtime">已选时间：</div>
                            <div id="divspan"></div>
                          </div>
                          <div class="clearfloat"></div>
                          <script type="text/javascript" charset="utf-8">
                          	// 日期插件
							var firstDay = Kalendae.moment().startOf('month').weekday(0),
								secondDay = Kalendae.moment().startOf('month').weekday(0),
								endMonth = Kalendae.moment().startOf('month').weekday(0);
								selected = [];

							while(firstDay <= endMonth) {
								if (firstDay >= Kalendae.moment().startOf('month')) {
									selected.push(firstDay.clone());
									selected.push(secondDay.clone());
								}
								firstDay.add(7, 'd');
								secondDay.add(7, 'd');
							}

							new Kalendae({
								attachTo:document.body,
								months:3,
								mode:'multiple',
								dayHeaderClickable: true,
								selected: selected
							});

							var obtn = document.getElementById('date-btn-sub');
							var aselected = document.getElementsByClassName('k-selected k-in-month');
							var oinnerHtml = document.getElementById('innerhtml');
							obtn.onclick = function() {
								oinnerHtml.innerHTML = '';
								for(i=0;i<aselected.length;i++){
									oinnerHtml.innerHTML += aselected[i].getAttribute('data-date') + ' / ';
								}
							}
						</script>
						<script>
							// 加载完日历插件之后进行定位处理
                          	$('.kalendae').appendTo($('#date-weizhi')).hide();
                          	$('#submit_totime').hide();
                          	function startTotime(){
                          		$('.kalendae').show();
                          		$('#submit_totime').show();
                          	}
                          	$('.date-reset').click(function(){
                          		$('.kalendae').hide();
                          		$('#submit_totime').hide();
                          	})
                          	var aselected = document.getElementsByClassName('k-selected k-in-month');
							var oinnerHtml = document.getElementById('innerhtml');
							$('#submit_totime').click(function() {
								oinnerHtml.innerHTML = '已选时间：';
								for(i=0;i<aselected.length;i++){
									oinnerHtml.innerHTML += aselected[i].getAttribute('data-date') + ' / ';
								}
								$('.kalendae').hide();
                          		$('#submit_totime').hide();
							})
							// 点位删除
							function delStation(index){
								if(confirm("确定删除该点位信息？")){
									$(index).parent('div').next('input').remove();
									$(index).parent('div').remove();
								}
							}
						</script>
                          <ol>
                            <li>
                              <abbr>上班时间：</abbr>
                              <div class="input-group bootstrap-timepicker input-width clockpicker">
                                <input id="work_start_hour_menu" name="work_start_hour_menu" type="text" class="form-control timepicker-default" value="9:00">
                                <span class="input-group-btn">
                                  <div class="btn btn-info date-set input-group-addon time-works">
                                    <i class="fa fa-clock-o">
                                    </i>
                                  </div>
                                </span>
                              </div>
                            </li>
                            <li>
                              <abbr>下班时间：</abbr>
                              <div class="input-group bootstrap-timepicker input-width clockpicker">
                                <input id="work_end_hour_menu" name="work_end_hour_menu" type="text" class="form-control timepicker-default" value="6:00">
                                <span class="input-group-btn">
                                  <div class="btn btn-info date-set input-group-addon time-works">
                                    <i class="fa fa-clock-o">
                                    </i>
                                  </div>
                                </span>
                              </div>
                            </li>
                          </ol>
                          <ol class="list-inline-bottom">
                            <li>
                              <abbr>集合时间：</abbr>
                              <div class="input-group bootstrap-timepicker input-width clockpicker">
                                <input id="work_jh_hour_menu" name="work_jh_hour_menu" type="text" class="form-control timepicker-default" value="80:40">
                                <span class="input-group-btn">
                                  <div class="btn btn-info date-set input-group-addon time-works">
                                    <i class="fa fa-clock-o">
                                    </i>
                                  </div>
                                </span>
                              </div>
                            </li>
                          </ol>
                        </div>
                        <!-- 时间配置 end -->
                        <!-- 地点配置 start -->
                        <p><span>* </span>地点配置</p>
                        <div class="form-group index-address">
                          <ol>
                            <li>
                              <abbr>集合地点：</abbr>
                              <div class="input-group bootstrap-timepicker">
                                <input id="work_jh_dd" name="work_jh_dd" class="form-control inline-block" placeholder="请输入详细地址" type="text" name="">
                              </div>
                            </li>
                          </ol>
                          <ol class="list-inline-bottom un-bottom-line bdmap-select" id="dbmap-select">
                            <li>
                              <abbr>工作地点：</abbr>
                              <div class="form-group inline-block">
                                <select class="form-control" id="J_province" name="province">
                                  <option disabled="disabled">省份</option>
                                </select>
                              </div>
                              <div class="form-group inline-block">
                                <select class="form-control" id="J_city" name="city">
                                  <option>市区</option>
                                </select>
                              </div>
                              <div class="form-group inline-block">
                                <select class="form-control" id="J_area" name="county">
                                  <option>县区</option>
                                </select>
                              </div>
                              <div class="form-group inline-block">
                                <select class="form-control" id="J_quan" name="business">
                                  <option>商圈</option>
                                </select>
                              </div>
                              <div class="auto-addr">
                              	<input class="form-control inline-block" type="text" id="text_" name="suggest" value="中关村">
                              </div>
                              <div id="result" style="display:none;"></div>
                            </li>
                            <input type="hidden" id="station_lat" name="station_lat" value="">
                            <input type="hidden" id="station_lng" name="station_lng" value="">
                          </ol>
                        </div>
                          <div class="clearfloat"></div>
                          <div class="baidu-map">
                            <div id="container-map"
                                 style="
			                      margin-top:0px;
			                      width: 600px;
			                      height: 300px;
			                      border: 1px solid gray;
			                      overflow:hidden;">
                            </div>
                            <script type="text/javascript">
                              var lastinfo; // 马梓达最终地图数据
                              var map = new BMap.Map("container-map");
                              map.centerAndZoom("北京", 12);
                              map.enableScrollWheelZoom(true);    //启用滚轮放大缩小，默认禁用
                              map.enableContinuousZoom(true);    //启用地图惯性拖拽，默认禁用

                              map.addControl(new BMap.NavigationControl());  //添加默认缩放平移控件
                              map.addControl(new BMap.OverviewMapControl()); //添加默认缩略地图控件
                              map.addControl(new BMap.OverviewMapControl({ isOpen: false, anchor: BMAP_ANCHOR_BOTTOM_RIGHT }));   //右下角，打开

                              var localSearch = new BMap.LocalSearch(map);
                              localSearch.enableAutoViewport(); //允许自动调节窗体大小

                              function searchByStationName() {
                                map.clearOverlays();//清空原来的标注
                                // var keyword = document.getElementById("text_").value;
                                keyword = $('#result').html();
                                localSearch.setSearchCompleteCallback(function (searchResult) {
                                  var poi = searchResult.getPoi(0);
                                  map.centerAndZoom(poi.point, 12);
                                  var stationLng = $('#station_lng');
                                  var stationLat = $('#station_lat');
                                  stationLng.val(poi.point.lng);
                                  stationLat.val(poi.point.lat);
                                  var marker = new BMap.Marker(new BMap.Point(poi.point.lng, poi.point.lat));  // 创建标注，为要查询的地方对应的经纬度
                                  map.addOverlay(marker);
                                  marker.addEventListener("click", function () { this.openInfoWindow(infoWindow); });
                                  marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
                                });
                                localSearch.search(keyword);
                              }

                              var ac = new BMap.Autocomplete(    //建立一个自动完成的对象
                                      {"input" : "text_"
                                        ,"location" : map
                                      });
                              ac.addEventListener("onconfirm", function(e) {    //鼠标点击下拉列表后的事件
                                $('#result').html($('#text_').val());
                                searchByStationName();
                              });

                              // 城市级联
                              // 第一级
                              $.ajax({
                                url:'city.php',
                                type: 'get',
                                data:{upid:0},
                                dataType:'json',
                                success:
                                        function(data){
                                          for (var i = 0; i < data.length; i++) {
                                            var s = "<option value='"+data[i].id+"'>"+data[i].categoryname+"</option>";
                                            $("#J_province").append(s);
                                          }
                                        },
                                error:
                                        function(){
                                          alert('Ajax响应失败');
                                        }
                              })

                              // 子集
                              $("#J_province").on('change', function() {
                                var provinceId = $(this).val();
                                if (provinceId) {
                                  $("#J_city, #J_area, #J_quan").find("option").remove();
                                  var s = "<option value=''>"+'请选择'+"</option>";
                                  $("#J_city, #J_area, #J_quan").append(s);
                                };
                                $.ajax({
                                  url: 'city.php',
                                  type: 'get',
                                  data: {upid: provinceId},
                                  dataType: 'json',
                                  success: function(data) {
                                    for (var i = 0; i < data.length; i++) {
                                      var s = "<option value='"+data[i].id+"'>"+data[i].categoryname+"</option>";
                                      $("#J_city").append(s);
                                    }
                                  }
                                })
                              })

                              $("#J_city").on('change', function() {
                                var cityId = $(this).val();
                                if (cityId) {
                                  $("#J_area, #J_quan").find("option").remove();
                                  var s = "<option value=''>"+'请选择'+"</option>";
                                  $("#J_area, #J_quan").append(s);
                                };
                                $.ajax({
                                  url: 'city.php',
                                  type: 'get',
                                  data: {upid: cityId},
                                  dataType: 'json',
                                  success: function(data) {
                                  	console.log(data);
                                    for (var i = 0; i < data.length; i++) {
                                      var s = "<option value='"+data[i].id+"'>"+data[i].categoryname+"</option>";
                                      $("#J_area").append(s);
                                    }
                                  }
                                })
                              })

                              $("#J_area").on('change', function() {
                                var quanId = $(this).val();
                                if (quanId) {
                                  $("#J_quan").find("option").remove();
                                  var s = "<option value=''>"+'请选择'+"</option>";
                                  $("#J_quan").append(s);
                                };
                                $.ajax({
                                  url: 'city.php',
                                  type: 'get',
                                  data: {upid: quanId},
                                  dataType: 'json',
                                  success: function(data) {
                                    if (data.length == 0) {
                                      var s = "<option value=''>"+'暂无商圈'+"</option>";
                                      $("#J_quan").append(s);
                                    }else{
                                      for (var i = 0; i < data.length; i++) {
                                        var s = "<option value='"+data[i].id+"'>"+data[i].categoryname+"</option>";
                                        $("#J_quan").append(s);
                                      }
                                    }
                                  }
                                })
                              })


                              $("#dbmap-select select").on('change', function(){
                                var J_provinceVal = $("#J_province option:selected").text();
                                var J_cityVal = $("#J_city option:selected").text();
                                var J_areaVal = $("#J_area option:selected").text();
                                var J_quanVal = $("#J_quan option:selected").text();
                                var lastdata = J_provinceVal +  J_cityVal+  J_areaVal+  J_quanVal;
                                lastinfo = lastdata.replace(/请选择/g, '');
                                $('#result').html(lastinfo);
                                $('#text_').val('');
                                searchByStationName();
                              })
                            </script>
                            <div class="map-submit">
                              <dl>
                                <dd class="dd-list-inline map_save" onclick="saveStation(this)">保存</dd>
                                <dd class="dd-list-inline map_reset" onclick="clearStation(this)">清空</dd>
                              </dl>
                            </div>
                          </div>
                        <!-- 地点配置 end -->
		                </div>
		              </section>

                     <script type="text/javascript">
                     	// 添加点位操作
                       var obtnClick = $('.obtnclick');
                       var abtnBody = $('.panel-body');
                       obtnClick.click(function() {
	                       	if ($('.updateDiv')) {
						    	$('.updateDiv').removeClass('updateDiv');
						    };
						    $('.map_save').data('method', null);
	                        if(abtnBody.css('display') == 'none') {
	                           abtnBody.show();
	                        }

	                        $('.pull-right a').removeClass("fa-chevron-up").addClass("fa-chevron-down");
                       })
                     </script>
					<script>
						// 保存点位
						function saveStation(index){
							// 获取点位信息
							jstr = '';
						    jstr += 'dd_nums='+$("#dd_nums").val();
						    jstr += '&dd_by_nums='+$("#dd_by_nums").val();
						    jstr += '&ddxz='+$("#ddxz").val();
						    jstr += '&dd_work_xzdw_id='+$("#dd_work_xzdw_menu").val();
						    jstr += '&dd_work_xzdw_name='+$("#dd_work_xzdw_menu option:selected").text();
						    jstr += '&dd_work_jsfs_id='+$("#dd_work_jsfs_menu").val();
						    jstr += '&dd_work_jsfs_name='+$("#dd_work_jsfs_menu option:selected").text();
						    jstr += '&stations_jz_nums='+$("#stations_jz_nums").val();
						    jstr += '&stations_jz_by_nums='+$("#stations_jz_by_nums").val();
						    jstr += '&jz_xz='+$("#jz_xz").val();
						    jstr += '&jz_work_xzdw_id='+$("#jz_work_xzdw_menu").val();
						    jstr += '&jz_work_xzdw_name='+$("#jz_work_xzdw_menu option:selected").text();
						    jstr += '&jz_work_jsfs_id='+$("#jz_work_jsfs_menu").val();
						    jstr += '&jz_work_jsfs_name='+$("#jz_work_jsfs_menu option:selected").text();
						    jstr += '&innerhtml='+$("#innerhtml").text();
						    jstr += '&work_start_hour_menu='+$("#work_start_hour_menu").val();
						    jstr += '&work_end_hour_menu='+$("#work_end_hour_menu").val();
						    jstr += '&work_jh_hour_menu='+$("#work_jh_hour_menu").val();
						    jstr += '&work_jh_dd='+$("#work_jh_dd").val();
						    jstr += '&J_province='+$("#J_province").val();
						    jstr += '&J_provinceName='+$("#J_province option:selected").text();
						    jstr += '&J_city='+$("#J_city").val();
						    jstr += '&J_cityName='+$("#J_city option:selected").text();
						    jstr += '&J_area='+$("#J_area").val();
						    jstr += '&J_areaName='+$("#J_area option:selected").text();
						    jstr += '&J_quan='+$("#J_quan").val();
						    jstr += '&J_quanName='+$("#J_quan option:selected").text();
						    jstr += '&text_='+$("#text_").val();
						    jstr += '&station_lng='+$("#station_lng").val();
						    jstr += '&station_lat='+$("#station_lat").val();
						    
						    // 添加新数据，隐藏添加序列数据
						    var jsParent = $('#detail-un-bottom');
						    var str1 = "<div class=\"clearfloat\"></div><div class=\"first-conf\"><div class=\"postjobw70 pull-left\">配 置 二 ：" + $("#J_province option:selected").text() + $("#J_city option:selected").text() + $("#J_area option:selected").text() + $("#J_quan option:selected").text() + $("#stations_jz_nums").val() + "人，" + $("#jz_xz").val() + "元/人，2016年07月01日-2016年08月01日</div><div class=\"tar-encode\"></div><div class=\"obtnclick btn btn-info btn-xs\" onclick=\"updateStation(this)\"><i class=\"fa fa-cogs\"></i></div><div class=\"btn btn-primary btn-xs\"><i class=\"fa fa-clipboard\"></i></div><div class=\"btn btn-danger btn-xs\" onclick=\"delStation(this)\"><i class=\"fa fa-times\"></i></div></div>";
						    var str= "<input type=\"hidden\" name=\"stations[]\" value='"+encodeURIComponent(jstr)+"' />";

						    // 如果是修改时的保存
							if ($(index).data('method') == 'update') {
								// 在当前行之前插入新数据后，删除当前行
								var nowDiv = $('.updateDiv');
								nowDiv.prev().remove();
								nowDiv.before(str1);
								nowDiv.before(str);
								nowDiv.next("input[type='hidden']").remove();
								nowDiv.remove();
								$(index).data('method', null);
							}else{
							    jsParent.append(str1);
	    						jsParent.append(str);
    						}
    						$('.posted-footer').hide();
						}

					// 修改点位信息
					function updateStation(index) {
						var thisStation = $(index).parent('div').next('input');
						var str = decodeURIComponent(thisStation.val());
						var strs = [];
					    strs = str.split('&');
					    var area = {};
					    for(var i in strs){
					        var kv = strs[i].split("=");
					        area[kv[0]] = kv[1];
					    }
					    console.log(area);
					    // 将解析后的数据填回表单中
					    $('#dd_nums').val(area.dd_nums);
					    $('#dd_by_nums').val(area.dd_by_nums);
					    $('#ddxz').val(area.ddxz);
					    $('#dd_work_xzdw_menu').val(area.dd_work_xzdw_id);
					    $('#dd_work_xzdw_menu').find("option[vlaue=" + area.dd_work_xzdw_id + "]").prop('selected', true);
					    $('#dd_work_jsfs_menu').val(area.dd_work_jsfs_id);
					    $('#dd_work_jsfs_menu').find("option[vlaue=" + area.dd_work_jsfs_id + "]").prop('selected', true);
					    $('#stations_jz_nums').val(area.stations_jz_nums);
					    $('#stations_jz_by_nums').val(area.stations_jz_by_nums);
					    $('#jz_xz').val(area.jz_xz);
					    $('#jz_work_xzdw_menu').val(area.jz_work_xzdw_id);
					    $('#jz_work_xzdw_menu').find("option[vlaue=" + area.jz_work_xzdw_id + "]").prop('selected', true);
					    $('#jz_work_jsfs_menu').val(area.jz_work_jsfs_id);
					    $('#jz_work_jsfs_menu').find("option[vlaue=" + area.jz_work_jsfs_id + "]").prop('selected', true);
					    $('#innerhtml').html(area.innerhtml);
					    $('#work_start_hour_menu').val(area.work_start_hour_menu);
					    $('#work_end_hour_menu').val(area.work_end_hour_menu);
					    $('#work_jh_hour_menu').val(area.work_jh_hour_menu);
					    $('#work_jh_dd').val(area.work_jh_dd);
					    $('#text_').val(area.text_);
					    $('#J_province option').each(function(i, e){
					        if($(e).val() == area.J_province){
					            $(this).prop('selected', true);
					        }
					    });

				    // 根据父级id获取子类的地区数据
				    function areaOption (areaId, selectId, nextId) {
				        var tsTimeStamp= new Date().getTime();
				        $.get("city.php", {"act":"get_cat_qgdistrict","tstime":tsTimeStamp,"upid":areaId},
				            function(data) {
				            	data = eval(data);
				            	console.log(data);
				                selectId.find('option').remove("[value!='0']");
				                for(var i in data){
				                    if(data[i].id == nextId){
				                        $("<option selected='selected' value='" + data[i].id + "'>" + data[i].categoryname + "</option>").appendTo(selectId);
				                    }else{
				                        $("<option value='" + data[i].id + "'>" + data[i].categoryname + "</option>").appendTo(selectId);
				                    }
				                }
				            }
				        )
				    }

				    if(area.J_province !== 'null'){
						areaOption(0, $('#J_province'), area.J_province);
					    areaOption(area.J_province, $('#J_city'), area.J_city);
					    areaOption(area.J_city, $('#J_area'), area.J_area);
					    areaOption(area.J_area, $('#J_quan'), area.J_quan);
					}

				    $(".map_save").data("method","update");
				    if ($('.updateDiv')) {
				    	$('.updateDiv').removeClass('updateDiv');
				    };
				    var targetDiv = $(index).parent('div');
				    targetDiv.addClass("updateDiv");
					if(abtnBody.css('display') == 'none') {
                       abtnBody.show();
                    }
                    $('.pull-right a').removeClass("fa-chevron-up").addClass("fa-chevron-down");
					}
					</script>
                 </section>
              </div>
              <div id="form-submit"><input type="submit" value="发布职位"></div>
            </form>
           </div>
          </div>

		   <!-- END ROW  -->
        </section>
		<!-- END WRAPPER  -->
      </section>
      <!-- END MAIN CONTENT -->
      <!-- BEGIN FOOTER -->
      <footer class="site-footer">
        <div class="text-center">
          2016 &copy; 兼职平台 
          <a href="" target="_blank">
            激活地带
          </a>
          <a href="http://www.yjob.net" class="go-top">
            <i class="fa fa-angle-up">
            </i>
          </a>
        </div>
     </footer>
</section>
    <!-- END SECTION -->
    <!-- BEGIN JS -->
    <script type="text/javascript" src="/Public/admin/js/jquery-1.8.3.min.js" ></script><!-- BASIC JQUERY 1.8.3 LIB. JS -->
    <script src="/Public/admin/js/bootstrap.min.js" ></script><!-- BOOTSTRAP JS -->
    <script src="/Public/admin/js/jquery.dcjqaccordion.2.7.js"></script><!-- ACCORDIN JS -->
    <script src="/Public/admin/js/jquery.scrollTo.min.js" ></script><!-- SCROLLTO JS -->
    <script src="/Public/admin/js/jquery.nicescroll.js" ></script><!-- NICESCROLL JS -->
    <script src="/Public/admin/js/respond.min.js" ></script><!-- RESPOND JS -->
    <script src="/Public/admin/js/jquery.sparkline.js"></script><!-- SPARKLINE JS -->
    <script src="/Public/admin/js/sparkline-chart.js"></script><!-- SPARKLINE CHART JS -->
    <script src="/Public/admin/js/common-scripts.js"></script><!-- BASIC COMMON JS -->
    <script src="/Public/admin/js/count.js"></script><!-- COUNT JS -->
    <!--Morris-->
    <script src="/Public/admin/assets/morris.js-0.4.3/morris.min.js" ></script><!-- MORRIS JS -->
    <script src="/Public/admin/assets/morris.js-0.4.3/raphael-min.js" ></script><!-- MORRIS  JS -->
    <script src="/Public/admin/js/chart.js" ></script><!-- CHART JS -->
    <!--Calendar-->
    <script src="/Public/admin/js/calendar/clndr.js"></script><!-- CALENDER JS -->
    <script src="/Public/admin/js/calendar/evnt.calendar.init.js"></script><!-- CALENDER EVENT JS -->
    <script src="/Public/admin/js/calendar/moment-2.2.1.js"></script><!-- CALENDER MOMENT JS -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script><!-- UNDERSCORE JS -->
    <script src="/Public/admin/assets/jquery-knob/js/jquery.knob.js" ></script><!-- JQUERY KNOB JS -->
    <script src="/Public/admin/js/btn-radio.js" ></script><!-- BTN_RADIO JS -->
    <script >
      //knob
      $(".knob").knob();
    </script>
    <script type="text/javascript">
      $('.clockpicker').clockpicker()
      // var input = $('#single-input').clockpicker({
      //   placement: 'bottom',
      //   align: 'left',
      //   autoclose: true,
      //   'default': 'now'
      // });
    </script>
    <!-- END JS -->
  </body>
</html>