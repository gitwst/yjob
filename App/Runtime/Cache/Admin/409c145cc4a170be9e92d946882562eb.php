<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Olive Enterprise">
    <!-- END META -->

    <!-- BEGIN SHORTCUT ICON -->
    <link rel="shortcut icon" href="/newcompany/Public/Admin/img/favicon.ico">
    <!-- END SHORTCUT ICON -->
    <title>
        <?php echo ($title); ?>
    </title>
    <!-- BEGIN STYLESHEET-->
    <link href="/newcompany/Public/Admin/css/bootstrap.min.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
    <link href="/newcompany/Public/Admin/css/bootstrap-reset.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
    <link href="/newcompany/Public/Admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet"><!-- FONT AWESOME ICON CSS -->
    <link href="/newcompany/Public/Admin/css/style.css" rel="stylesheet"><!-- THEME BASIC CSS -->
    <link href="/newcompany/Public/Admin/css/style-responsive.css" rel="stylesheet"><!-- THEME RESPONSIVE CSS -->
    <link href="/newcompany/Public/Admin/assets/morris.js-0.4.3/morris.css" rel="stylesheet"><!-- MORRIS CHART CSS -->
    <!--dashboard calendar-->
    <link href="/newcompany/Public/Admin/css/clndr.css" rel="stylesheet"><!-- CALENDER CSS -->
    <link href="/newcompany/Public/Admin/css/css.css" rel="stylesheet">
    <link href="/newcompany/Public/Admin/css/zp.css" rel="stylesheet">
    <link href="/newcompany/Public/Admin/css/awesome-bootstrap-checkbox.css" rel="stylesheet"><!-- awesome-bootstrap-checkbox.css -->
    <link rel="stylesheet" type="text/css" href="/newcompany/Public/Admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css"><!-- BOOTSTRAP WYSIHTML5 PLUGIN CSS -->
    <link rel="stylesheet" type="text/css" href="/newcompany/Public/Admin/assets/bootstrap-fileupload/bootstrap-fileupload.css"><!-- BOOTSTRAP FILEUPLOAD PLUGIN CSS -->
    <link rel="stylesheet" type="text/css" href="/newcompany/Public/Admin/assets/bootstrap-timepicker/compiled/timepicker.css"><!-- BOOTSTRAP TIMEPICKER PLUGIN CSS -->

    <!--[if lt IE 9]>
    <script src="/newcompany/Public/Admin/js/html5shiv.js">
    </script>
    <script src="/newcompany/Public/Admin/js/respond.min.js">
    </script>
    <![endif]-->
    <!-- END STYLESHEET-->
</head>
<body>
<!-- BEGIN SECTION -->
<section id="container" class="">

<!-- BEGIN HEADER -->
<header class="header white-bg">
    <a href="index.html" class="logo">
        <img src="/newcompany/Public/Admin/img/images/header_06.png" alt="">
    </a>
    <!--LOGO结束-->
    <!-- 信息下拉 -->
    <nav class="nav notify-row" id="top_menu">
        <ul class="nav top-menu">
            <!-- 开始通知邮箱 -->
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
                      <img alt="avatar" src="/newcompany/Public/Admin/img/avatar-mini.jpg">
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
                      <img alt="avatar" src="/newcompany/Public/Admin/img/avatar-mini2.jpg">
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
                      <img alt="avatar" src="/newcompany/Public/Admin/img/avatar-mini3.jpg">
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
                      <img alt="avatar" src="/newcompany/Public/Admin/img/avatar-mini4.jpg">
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
            <!-- 通知邮箱结束-->

            <!-- 开始消息提醒 -->
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
            <!-- 消息提醒结束 -->
        </ul>
    </nav>
    <!--信息下拉结束-->
    <!--开始用户-->
    <div class="top-nav ">
        <ul class="nav pull-right top-menu">
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <img alt="" src="/newcompany/Public/Admin/img/avatar1_small.jpg">
                    <span class="username">
                  云兼职平台
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
                        <a href="<?php echo U('Admin/Index/loginout');?>">
                            <i class="fa fa-key">
                            </i>
                            Log Out
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- 用户结束 -->
</header>
<!-- END HEADER -->
<!-- BEGIN SIDEBAR -->
<aside>
    <div id="sidebar" class="nav-collapse">
        <ul class="sidebar-menu" id="nav-accordion">
            <li >
                <a href="<?php echo U('Index/index');?>" class="active">
                    <i class="fa fa-home">
                    </i>
                    <span>
			          系统后台管理
			        </span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-briefcase">
                    </i>
                    <span>
			          企业管理
			        </span>
                    <span class="label label-success span-sidebar">
			        1
			        </span>
                </a>
                <ul class="sub">
                    <!--<li>-->
                    <!--<a href="job_listings.html">-->
                    <!--职位列表-->
                    <!--</a>-->
                    <!--</li>-->
                    <li>
                        <a href="<?php echo U('Business/enterprise_certification');?>">
                            企业认证
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-briefcase">
                    </i>
                    <span>
							  职位管理
			        		</span>
                    <span class="label label-success span-sidebar">
			          1
			        </span>
                </a>
                <ul class="sub">
                    <li>
                        <a href="<?php echo U('Position/job_listings');?>">
                            职位列表
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-user">
                    </i>
                    <span>
			          会员管理
			        </span>
                    <span class="label label-info span-sidebar">
			          4
			        </span>
                </a>
                <ul class="sub">
                    <li>
                        <a href="<?php echo U('Member/name_authentication');?>">
                            实名认证
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('Member/part_time_lib');?>">
                            兼职列表
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('Member/supervisor_lib');?>">
                            督导列表
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('Member/bd_lib');?>">
                            BD列表
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-star">
                    </i>
                    <span>
			          积分系统
			        </span>
                    <span class="label label-warning span-sidebar">
			          3
			        </span>
                </a>
                <ul class="sub">
                    <li>
                        <a href="#">
                            积分配置
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            会员积分
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            企业积分
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-money">
                    </i>
                    <span>
			          财务中心
			        </span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-file-text">
                    </i>
                    <span>
			          内容管理
			        </span>
                    <span class="label label-inverse span-sidebar">
			          4
			        </span>
                </a>
                <ul class="sub">
                    <li>
                        <a href="<?php echo U('Content/content_management');?>">
                            内容管理
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('Content/add_content');?>">
                            内容添加
                        </a>
                    </li>
                    <!--<li>-->
                    <!--<a href="sort_management.html">-->
                    <!--分类管理-->
                    <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                    <!--<a href="region_class.html">-->
                    <!--地区分类-->
                    <!--</a>-->
                    <!--</li>-->
                    <li>
                        <a href="<?php echo U('Content/opinion_suggest');?>">
                            意见反馈
                        </a>
                    </li>

                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-wrench">
                    </i>
                    <span>
			          工具
			        </span>
                    <span class="label label-primary span-sidebar">
			          4
			        </span>
                </a>
                <ul class="sub">
                    <li>
                        <a href="#">
                            计划任务
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('Instrument/Being_pushed');?>">
                            消息推送
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('Instrument/bank_card');?>">
                            银行卡查询
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('Instrument/generalize_query');?>">
                            推广查询
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('Instrument/hbgl');?>">
                            红包管理
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-cog">
                    </i>
                    <span>
			          系统设置
			        </span>
                    <span class="label label-danger span-sidebar">
			          4
			        </span>
                </a>
                <ul class="sub">
                    <!--<li>-->
                    <!--<a href="basic_settings.html">-->
                    <!--基本配置-->
                    <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                    <!--<a href="enterprises_setup.com.html">-->
                    <!--企业设置-->
                    <!--</a>-->
                    <!--</li>-->
                    <li>
                        <a href="<?php echo U('System/personal_settings');?>">
                            企业设置
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('System/registry_settings');?>">
                            注册设置
                        </a>
                    </li>
                    <!--<li>-->
                    <!--<a href="#">-->
                    <!--安全设置-->
                    <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                    <!--<a href="email_settings.html">-->
                    <!--邮件设置-->
                    <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                    <!--<a href="sms_settings.html">-->
                    <!--短信设置-->
                    <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                    <!--<a href="three_registr.html">-->
                    <!--第三方接口设置-->
                    <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                    <!--<a href="#">-->
                    <!--微信公众号设置-->
                    <!--</a>-->
                    <!--</li>-->
                    <li>
                        <a href="<?php echo U('System/substation_management');?>">
                            分站管理
                        </a>
                    </li>
                    <!--<li>-->
                    <!--<a href="all_class.html">-->
                    <!--分类管理-->
                    <!--</a>-->
                    <!--</li>-->
                    <li>
                        <a href="#">
                            管理员设置
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
<!-- END SIDEBAR -->
    <!-- END SIDEBAR -->

    <!-- BEGIN MAIN CONTENT -->
    <section id="main-content">
        <section class="wrapper">
            <section class="panel panel-first">
                <div class="">
                    <div class="panel with-nav-tabs panel-info panel-square panel-no-border">
                        <div class="panel-body body-waiwei">
                            <ul>
                                <li class="first-font">
                                    分站管理
                                </li>
                                <div class="opinion-hr">
                                    <hr />
                                </div>
                            </ul>

                            <table class="f-tab table-hover table-condensed table-striped table-bordered table dataTable"  >

                                <thead>
                                <tr role="row">
                                    <th>&nbsp;</th>
                                    <th>分站名称</th>
                                    <th>域名</th>
                                    <th>触屏版域名</th>
                                    <th>状态</th>
                                    <th>地区</th>
                                    <th>模板</th>
                                    <th>管理</th>
                                </tr>


                                </thead>
                                <tbody role="alert" aria-live="polite" aria-relevant="all">
                                <!-- 新起一行 -->
                                <tr>
                                    <td>
                                        <!-- <input type="checkbox" name="" class="chk"> -->
                                        <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                            <input id="checkbox_a1" type="checkbox">
                                            <label for="checkbox_a1"></label>
                                        </div>
                                    </td>
                                    <td ><a href="#" class="text-blue">北京</a></td>
                                    <td>bj.yjob.net</td>
                                    <td>bi.yjob.net/m</td>
                                    <td>可用</td>
                                    <td>
                                        北京市
                                    </td>
                                    <td>
                                        default
                                    </td>
                                    <td>
                                        <a href="#myAlter" class="text-primary" data-toggle="modal">修改</a>&nbsp;|&nbsp;
                                        <a href="" class="text-primary">删除</a>
                                        <div class="modal fade" id="myAlter">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header enterprise-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                            ×

                                                        </button>
                                                        <h4 class="modal-title">修改分站</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <ul class="p-info">
                                                            <form method="post" action="" class="form-horizontal">
                                                                <li class="substation-li">
                                                                    <div class="substation-settings">
                                                                        <div class="personal-left">
                                                                            <span>分站名称:</span>
                                                                        </div>
                                                                        <div class="basic-content">
                                                                            <input type="text" name="" class="form-control">
                                                                        </div>
                                                                        <div class="personal-right">
                                                                            <span>如:北京人才网</span>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="substation-li">
                                                                    <div class="substation-settings">
                                                                        <div class="personal-left">
                                                                            <span>分站状态:</span>
                                                                        </div>
                                                                        <div class="personal-radio">
                                                                            <input type="radio" name="member" value="0" checked="checked">可用
                                                                            <input type="radio" name="member" value="1">禁用
                                                                        </div>
                                                                    </div>

                                                                </li>
                                                                <li class="substation-li">
                                                                    <div class="substation-settings">
                                                                        <div class="personal-left">
                                                                            <span>分站地区:</span>
                                                                        </div>
                                                                        <div class="basic-content">
                                                                            <select class="form-control">
                                                                                <option>北京市</option>
                                                                                <option>上海市</option>
                                                                                <option>广州市</option>
                                                                            </select>

                                                                        </div>
                                                                        <div class="basic-content">
                                                                            <select class="form-control">
                                                                                <option>海淀区</option>
                                                                                <option>朝阳区</option>
                                                                                <option>昌平区</option>
                                                                            </select>

                                                                        </div>
                                                                    </div>

                                                                </li>

                                                                <li class="substation-li">
                                                                    <div class="substation-settings">
                                                                        <div class="personal-left">
                                                                            <span>域名绑定:</span>
                                                                        </div>
                                                                        <div class="basic-content">
                                                                            <input type="text" name=""  class="form-control">
                                                                        </div>
                                                                        <div class="personal-right">
                                                                            <span>输入二级域名,如:010.rencai.com</span>
                                                                        </div>
                                                                    </div>


                                                                </li>

                                                                <li class="substation-li">
                                                                    <div class="substation-settings">
                                                                        <div class="personal-left">
                                                                            <span>触屏版域名:</span>
                                                                        </div>
                                                                        <div class="basic-content">
                                                                            <input type="text" name="" class="form-control">
                                                                        </div>
                                                                        <div class="personal-right">
                                                                            <span>输入二级域名,如:010.rencai.com</span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="substation-li">
                                                                    <div class="substation-settings">
                                                                        <div class="personal-left">
                                                                            <span>风格模板:</span>
                                                                        </div>
                                                                        <div class="basic-content">
                                                                            <select class="form-control">
                                                                                <option value="0">请选择</option>
                                                                                <option value="1">默认</option>
                                                                                <option value="2">default</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="substation-li">
                                                                    <div class="substation-settings">
                                                                        <div class="personal-left">
                                                                            <span>分站排序:</span>
                                                                        </div>
                                                                        <div class="substation-content">
                                                                            <input type="text" name="" class="form-control">
                                                                        </div>
                                                                        <div class="personal-right">
                                                                            <span>数字越大越靠前</span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="substation-li">
                                                                    <div class="basic-settings">
                                                                        <div class="personal-left">
                                                                            <span>网站LOGO:</span>
                                                                        </div>
                                                                        <div class="basic-content">
                                                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                                                <div class="fileupload-new thumbnail" >
                                                                                    <img class="basic-img" src="http://www.placehold.it/150x100/EFEFEF/AAAAAA&amp;text=no+image" alt="" >
                                                                                </div>
                                                                                <div class="fileupload-preview fileupload-exists thumbnail" >
                                                                                </div>
                                                                                <div>
                            <span class="btn btn-white btn-file">
                              <span class="fileupload-new">
                                <i class="fa fa-paper-clip">
                                </i>
                                点击上传
                              </span>

                              <span class="fileupload-exists">
                                <i class="fa fa-undo">
                                </i>
                               更换
                              </span>
                              <input type="file" class="default">
                            </span>
                                                                                    <span class="btn btn-white">

                                <a href="">查看大图</a>
                              </span>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <div class="personal-bc">
                                                                    <button type="submit" class=" btn  substation-btn">保存</button>
                                                                </div>
                                                            </form>
                                                        </ul>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                    </td>
                                </tr>
                                <!-- 新起一行 -->
                                <tr>
                                    <td>
                                        <!-- <input type="checkbox" name="" class="chk"> -->
                                        <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                            <input id="checkbox_a2" type="checkbox">
                                            <label for="checkbox_a2"></label>
                                        </div>
                                    </td>
                                    <td ><a href="#" class="text-blue">广州</a></td>
                                    <td>gz.yjob.net</td>
                                    <td>gz.yjob.net/m</td>
                                    <td>可用</td>
                                    <td>
                                        广东省
                                    </td>
                                    <td>
                                        default
                                    </td>
                                    <td>
                                        <a href="" class="text-primary">修改</a>&nbsp;|&nbsp;
                                        <a href="" class="text-primary">删除</a>

                                    </td>
                                </tr>
                                <!-- 新起一行 -->
                                <tr>
                                    <td>
                                        <!-- <input type="checkbox" name="" class="chk"> -->
                                        <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                            <input id="checkbox_a3" type="checkbox">
                                            <label for="checkbox_a3"></label>
                                        </div>
                                    </td>
                                    <td ><a href="#" class="text-blue">上海</a></td>
                                    <td>sh.yjob.net</td>
                                    <td>sh.yjob.net/m</td>
                                    <td>禁用</td>
                                    <td>
                                        上海市
                                    </td>
                                    <td>
                                        默认
                                    </td>
                                    <td>
                                        <a href="" class="text-primary">修改</a>&nbsp;|&nbsp;
                                        <a href="" class="text-primary">删除</a>

                                    </td>
                                </tr>
                                <!-- 新起一行 -->
                                <tr>
                                    <td>
                                        <!-- <input type="checkbox" name="" class="chk"> -->
                                        <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                            <input id="checkbox_a4" type="checkbox">
                                            <label for="checkbox_a4"></label>
                                        </div>
                                    </td>
                                    <td ><a href="#" class="text-blue">北京</a></td>
                                    <td>bj.yjob.net</td>
                                    <td>bi.yjob.net/m</td>
                                    <td>可用</td>
                                    <td>
                                        北京市
                                    </td>
                                    <td>
                                        default
                                    </td>
                                    <td>
                                        <a href="" class="text-primary">修改</a>&nbsp;|&nbsp;
                                        <a href="" class="text-primary">删除</a>
                                    </td>
                                </tr>
                                <!-- 新起一行 -->
                                <tr>
                                    <td>
                                        <!-- <input type="checkbox" name="" class="chk"> -->
                                        <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                            <input id="checkbox_a5" type="checkbox">
                                            <label for="checkbox_a5"></label>
                                        </div>
                                    </td>
                                    <td ><a href="#" class="text-blue">广州</a></td>
                                    <td>gz.yjob.net</td>
                                    <td>gz.yjob.net/m</td>
                                    <td>可用</td>
                                    <td>
                                        广东省
                                    </td>
                                    <td>
                                        default
                                    </td>
                                    <td>
                                        <a href="" class="text-primary">修改</a>&nbsp;|&nbsp;
                                        <a href="" class="text-primary">删除</a>

                                    </td>
                                </tr>
                                <!-- 新起一行 -->
                                <tr>
                                    <td>
                                        <!-- <input type="checkbox" name="" class="chk"> -->
                                        <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                            <input id="checkbox_a6" type="checkbox">
                                            <label for="checkbox_a6"></label>
                                        </div>
                                    </td>
                                    <td ><a href="#" class="text-blue">上海</a></td>
                                    <td>sh.yjob.net</td>
                                    <td>sh.yjob.net/m</td>
                                    <td>禁用</td>
                                    <td>
                                        上海市
                                    </td>
                                    <td>
                                        默认
                                    </td>
                                    <td>
                                        <a href="" class="text-primary">修改</a>&nbsp;|&nbsp;
                                        <a href="" class="text-primary">删除</a>

                                    </td>
                                </tr>
                                <!-- 新起一行 -->
                                <tr>
                                    <td>
                                        <!-- <input type="checkbox" name="" class="chk"> -->
                                        <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                            <input id="checkbox_a7" type="checkbox">
                                            <label for="checkbox_a7"></label>
                                        </div>
                                    </td>
                                    <td ><a href="#" class="text-blue">北京</a></td>
                                    <td>bj.yjob.net</td>
                                    <td>bi.yjob.net/m</td>
                                    <td>可用</td>
                                    <td>
                                        北京市
                                    </td>
                                    <td>
                                        default
                                    </td>
                                    <td>
                                        <a href="" class="text-primary">修改</a>&nbsp;|&nbsp;
                                        <a href="" class="text-primary">删除</a>
                                    </td>
                                </tr>
                                <!-- 新起一行 -->
                                <tr>
                                    <td>
                                        <!-- <input type="checkbox" name="" class="chk"> -->
                                        <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                            <input id="checkbox_a8" type="checkbox">
                                            <label for="checkbox_a8"></label>
                                        </div>
                                    </td>
                                    <td ><a href="#" class="text-blue">广州</a></td>
                                    <td>gz.yjob.net</td>
                                    <td>gz.yjob.net/m</td>
                                    <td>可用</td>
                                    <td>
                                        广东省
                                    </td>
                                    <td>
                                        default
                                    </td>
                                    <td>
                                        <a href="" class="text-primary">修改</a>&nbsp;|&nbsp;
                                        <a href="" class="text-primary">删除</a>

                                    </td>
                                </tr>
                                <!-- 新起一行 -->
                                <tr>
                                    <td>
                                        <!-- <input type="checkbox" name="" class="chk"> -->
                                        <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                            <input id="checkbox_a9" type="checkbox">
                                            <label for="checkbox_a9"></label>
                                        </div>
                                    </td>
                                    <td ><a href="#" class="text-blue">上海</a></td>
                                    <td>sh.yjob.net</td>
                                    <td>sh.yjob.net/m</td>
                                    <td>禁用</td>
                                    <td>
                                        上海市
                                    </td>
                                    <td>
                                        默认
                                    </td>
                                    <td>
                                        <a href="" class="text-primary">修改</a>&nbsp;|&nbsp;
                                        <a href="" class="text-primary">删除</a>

                                    </td>
                                </tr>



                                </tbody>
                            </table>
                            <div class="pull-left bottom-btn-group">
                                <div class="checkbox checkbox-info checkbox-inline">
                                    <input id="checkbox_qx" name="full-select" type="checkbox">
                                    <label for="checkbox_qx">全选</label>
                                </div>

                                <button type="button" class="btn">
                                    删除
                                </button>
                                <button type="button" class="btn" href="#myModal" data-toggle="modal">
                                    添加分站

                                </button>
                                <div class="modal fade" id="myModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header enterprise-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                    ×

                                                </button>
                                                <h4 class="modal-title">添加分站</h4>
                                            </div>
                                            <div class="modal-body">
                                                <ul class="p-info">
                                                    <form method="post" action="" class="form-horizontal">
                                                        <li class="substation-li">
                                                            <div class="substation-settings">
                                                                <div class="personal-left">
                                                                    <span>分站名称:</span>
                                                                </div>
                                                                <div class="basic-content">
                                                                    <input type="text" name="" class="form-control">
                                                                </div>
                                                                <div class="personal-right">
                                                                    <span>如:北京人才网</span>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li class="substation-li">
                                                            <div class="substation-settings">
                                                                <div class="personal-left">
                                                                    <span>分站状态:</span>
                                                                </div>
                                                                <div class="personal-radio">
                                                                    <input type="radio" name="member" value="0" checked="checked">可用
                                                                    <input type="radio" name="member" value="1">禁用
                                                                </div>
                                                            </div>

                                                        </li>
                                                        <li class="substation-li">
                                                            <div class="substation-settings">
                                                                <div class="personal-left">
                                                                    <span>分站地区:</span>
                                                                </div>
                                                                <div class="basic-content">
                                                                    <select class="form-control">
                                                                        <option>北京市</option>
                                                                        <option>上海市</option>
                                                                        <option>广州市</option>
                                                                    </select>

                                                                </div>
                                                                <div class="basic-content">
                                                                    <select class="form-control">
                                                                        <option>海淀区</option>
                                                                        <option>朝阳区</option>
                                                                        <option>昌平区</option>
                                                                    </select>

                                                                </div>
                                                            </div>

                                                        </li>

                                                        <li class="substation-li">
                                                            <div class="substation-settings">
                                                                <div class="personal-left">
                                                                    <span>域名绑定:</span>
                                                                </div>
                                                                <div class="basic-content">
                                                                    <input type="text" name=""  class="form-control">
                                                                </div>
                                                                <div class="personal-right">
                                                                    <span>输入二级域名,如:010.rencai.com</span>
                                                                </div>
                                                            </div>


                                                        </li>

                                                        <li class="substation-li">
                                                            <div class="substation-settings">
                                                                <div class="personal-left">
                                                                    <span>触屏版域名:</span>
                                                                </div>
                                                                <div class="basic-content">
                                                                    <input type="text" name="" class="form-control">
                                                                </div>
                                                                <div class="personal-right">
                                                                    <span>输入二级域名,如:010.rencai.com</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="substation-li">
                                                            <div class="substation-settings">
                                                                <div class="personal-left">
                                                                    <span>风格模板:</span>
                                                                </div>
                                                                <div class="basic-content">
                                                                    <select class="form-control">
                                                                        <option value="0">请选择</option>
                                                                        <option value="1">默认</option>
                                                                        <option value="2">default</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="substation-li">
                                                            <div class="substation-settings">
                                                                <div class="personal-left">
                                                                    <span>分站排序:</span>
                                                                </div>
                                                                <div class="substation-content">
                                                                    <input type="text" name="" class="form-control">
                                                                </div>
                                                                <div class="personal-right">
                                                                    <span>数字越大越靠前</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="substation-li">
                                                            <div class="basic-settings">
                                                                <div class="personal-left">
                                                                    <span>网站LOGO:</span>
                                                                </div>
                                                                <div class="basic-content">
                                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                                        <div class="fileupload-new thumbnail" >
                                                                            <img class="basic-img" src="http://www.placehold.it/150x100/EFEFEF/AAAAAA&amp;text=no+image" alt="" >
                                                                        </div>
                                                                        <div class="fileupload-preview fileupload-exists thumbnail" >
                                                                        </div>
                                                                        <div>
                            <span class="btn btn-white btn-file">
                              <span class="fileupload-new">
                                <i class="fa fa-paper-clip">
                                </i>
                                点击上传
                              </span>

                              <span class="fileupload-exists">
                                <i class="fa fa-undo">
                                </i>
                               更换
                              </span>
                              <input type="file" class="default">
                            </span>
                                                                            <span class="btn btn-white">

                                <a href="">查看大图</a>
                              </span>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <div class="personal-bc">
                                                            <button type="submit" class=" btn  substation-btn">保存</button>
                                                        </div>
                                                    </form>
                                                </ul>

                                            </div>

                                        </div>

                                    </div>

                                </div>


                            </div>
                            <ul class="pagination success pull-right ">
                                <li class="disabled">
                                    <a href="#fakelink">
                                        首页
                                    </a>
                                </li>
                                <li class="disabled">
                                    <a href="#fakelink">
                                        上一页
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="#fakelink">
                                        1
                                    </a>
                                </li>
                                <li>
                                    <a href="#fakelink">
                                        2
                                    </a>
                                </li>
                                <li>
                                    <a href="#fakelink">
                                        3
                                    </a>
                                </li>
                                <li>
                                    <a href="#fakelink">
                                        4
                                    </a>
                                </li>
                                <li>
                                    <a href="#fakelink">
                                        下一页
                                    </a>
                                </li>
                                <li>
                                    <a href="#fakelink">
                                        尾页
                                    </a>
                                </li>
                            </ul>
                        </div>
                        </li>
                        </ul>
                    </div>

                </div>
                </div>
            </section>
        </section>
    </section>
</section>


<script src="/newcompany/Public/Admin/js/jquery-1.8.3.min.js" ></script><!-- BASIC JQUERY 1.8.3 LIB. JS -->
<script src="/newcompany/Public/Admin/js/zp/zp.js"></script>
<script src="/newcompany/Public/Admin/js/bootstrap.min.js" ></script><!-- BOOTSTRAP JS -->
<script src="/newcompany/Public/Admin/js/jquery.dcjqaccordion.2.7.js"></script><!-- ACCORDIN JS -->
<script src="/newcompany/Public/Admin/js/jquery.scrollTo.min.js" ></script><!-- SCROLLTO JS -->
<script src="/newcompany/Public/Admin/js/jquery.nicescroll.js" ></script><!-- NICESCROLL JS -->
<script src="/newcompany/Public/Admin/js/respond.min.js" ></script><!-- RESPOND JS -->
<script src="/newcompany/Public/Admin/js/common-scripts.js" ></script><!-- BASIC COMMON JS  -->
<script src="/newcompany/Public/Admin/assets/fuelux/js/spinner.min.js"></script><!-- FUELUX JS  -->
<script src="/newcompany/Public/Admin/assets/bootstrap-fileupload/bootstrap-fileupload.js"></script><!-- BOOTSTRAP FILEUPLOAD JS  -->
<!--Morris-->
<script src="/newcompany/Public/Admin/js/jquery.sparkline.js"></script><!-- SPARKLINE JS -->
<script src="/newcompany/Public/Admin/js/sparkline-chart.js"></script><!-- SPARKLINE CHART JS -->
<script src="/newcompany/Public/Admin/js/count.js"></script><!-- COUNT JS -->

<script src="/newcompany/Public/Admin/assets/morris.js-0.4.3/morris.min.js" ></script><!-- MORRIS JS -->
<script src="/newcompany/Public/Admin/assets/morris.js-0.4.3/raphael-min.js" ></script><!-- MORRIS  JS -->
<script src="/newcompany/Public/Admin/js/calendar/clndr.js"></script><!-- CALENDER JS -->
<script src="/newcompany/Public/Admin/js/calendar/moment-2.2.1.js"></script><!-- CALENDER MOMENT JS -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script><!-- UNDERSCORE JS -->
<script src="/newcompany/Public/Admin/assets/jquery-knob/js/jquery.knob.js" ></script><!-- JQUERY KNOB JS -->

<script src="/newcompany/Public/Admin/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script><!-- BOOTSTRAP wysihtml5 JS  -->
<script src="/newcompany/Public/Admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script><!-- BOOTSTRAP wysihtml5 JS  -->
<script src="/newcompany/Public/Admin/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script><!-- BOOTSTRAP DATEPICKER JS  -->
<script src="/newcompany/Public/Admin/assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script><!-- BOOTSTRAP DATETIMEPICKER JS  -->
<script src="/newcompany/Public/Admin/assets/bootstrap-daterangepicker/moment.min.js"></script>
<script src="/newcompany/Public/Admin/assets/bootstrap-daterangepicker/daterangepicker.js"></script><!-- BOOTSTRAP DATERANGEPICKER JS  -->
<script src="/newcompany/Public/Admin/assets/bootstrap-colorpicker/js/daterangepicker.js"> </script><!-- BOOTSTRAP COLORPICKER JS  -->
<script src="/newcompany/Public/Admin/assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script><!-- BOOTSTRAP TIMEPICKER JS  -->
<script src="/newcompany/Public/Admin/assets/jquery-multi-select/js/bootstrap-timepicker.js"></script><!-- BOOTSTRAP MULTISELECT JS  -->
<script src="/newcompany/Public/Admin/assets/jquery-multi-select/js/jquery.multi-select.js"></script>
<script src="/newcompany/Public/Admin/assets/jquery-multi-select/js/jquery.quicksearch.js"></script>
<script type="text/javascript" src="/newcompany/Public/Admin/js/zp/btn-radio.js"></script>
<script src="/newcompany/Public/Admin/assets/ckeditor/ckeditor.js"></script><!-- CKEDITOR JS  -->
<script src="/newcompany/Public/Admin/js/advanced-form-components.js" ></script><!-- ADVANCE FORM COMPONENTS PAGE JS  -->


<script >
    //knob
    $(".knob").knob();
</script>
<!-- END JS -->
</body>
</html>