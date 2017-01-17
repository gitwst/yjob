<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Olive Enterprise">
    <!-- END META -->
    <!-- BEGIN SHORTCUT ICON -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- END SHORTCUT ICON -->
    <title>企业认证</title>

    <!-- BEGIN STYLESHEET -->
    <link href="css/awesome-bootstrap-checkbox.css" rel="stylesheet"><!-- awesome-bootstrap-checkbox.css -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> <!-- bootstrap css-->
    <link href="css/bootstrap-reset.css" rel="stylesheet"> <!-- BOOTSTRAP CSS -->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet"> <!-- FONT AWESOME CSS -->
    <link href="css/style.css" rel="stylesheet"> <!-- THEME BASIC STYLESHEET -->
    <link href="css/style-responsive.css" rel="stylesheet"> <!-- THEME RESPONSIVE CSS -->
    <link href="css/zp.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js">
    </script>
    <script src="js/respond.min.js">
    </script>
    <![endif]-->



    <!-- END STYLESHEET -->
</head>
<body>
<!-- BEGIN SECTION -->
<section id="container" class="">

    <!-- BEGIN HEADER -->
    <header class="header white-bg">
        <a href="index.html" class="logo">
            <img src="img/images/header_06.png" alt="">
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
                      <img alt="avatar" src="./img/avatar-mini.jpg">
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
                      <img alt="avatar" src="./img/avatar-mini2.jpg">
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
                      <img alt="avatar" src="./img/avatar-mini3.jpg">
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
                      <img alt="avatar" src="./img/avatar-mini4.jpg">
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
                        <img alt="" src="img/avatar1_small.jpg">
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
                            <a href="login.html">
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
                    <a href="index.html" class="active">
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
			          2
			        </span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="job_listings.html">
                                职位列表
                            </a>
                        </li>
                        <li>
                            <a href="enterprise_certification.html">
                                企业认证
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
                            <a href="name_authentication.html">
                                实名认证
                            </a>
                        </li>
                        <li>
                            <a href="part-time-lib.html">
                                兼职列表
                            </a>
                        </li>
                        <li>
                            <a href="supervisor-lib.html">
                                督导列表
                            </a>
                        </li>
                        <li>
                            <a href="bd-lib.html">
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
                            <a href="content_management.html">
                                内容管理
                            </a>
                        </li>
                        <li>
                            <a href="add_content.html">
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
                            <a href="opinion_suggest.html">
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
                            <a href="Being_pushed.html">
                                消息推送
                            </a>
                        </li>
                        <li>
                            <a href="bank_card.html">
                                银行卡查询
                            </a>
                        </li>
                        <li>
                            <a href="generalize_query.html">
                                推广查询
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
			          12
			        </span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="basic_settings.html">
                                基本配置
                            </a>
                        </li>
                        <li>
                            <a href="enterprises_setup.com.html">
                                企业设置
                            </a>
                        </li>
                        <li>
                            <a href="personal_settings.html">
                                个人设置
                            </a>
                        </li>
                        <li>
                            <a href="registry_settings.html">
                                注册设置
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                安全设置
                            </a>
                        </li>
                        <li>
                            <a href="email_settings.html">
                                邮件设置
                            </a>
                        </li>
                        <li>
                            <a href="sms_settings.html">
                                短信设置
                            </a>
                        </li>
                        <li>
                            <a href="three_registr.html">
                                第三方接口设置
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                微信公众号设置
                            </a>
                        </li>
                        <li>
                            <a href="substation_management.html">
                                分站管理
                            </a>
                        </li>
                        <li>
                            <a href="all_class.html">
                                分类管理
                            </a>
                        </li>
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
    <!-- BEGIN MAIN CONTENT -->
    <section id="main-content">
        <!-- BEGIN WRAPPER  -->
        <section class="wrapper">
            <div class="panel with-nav-tabs panel-info panel-square panel-no-border">
                <div class="panel-heading">
                    <!-- 右侧小按钮 -->
                    <div class="pull-right">
                        <input class="form-control search" placeholder="请输入搜索的注册号或公司名称" type="text">
                    </div>
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#example-search-all" data-toggle="tab">
                                全部
                            </a>
                        </li>
                        <li class="">
                            <a href="#example-search-await" data-toggle="tab">
                                等待审核
                            </a>
                        </li>
                        <li class="">
                            <a href="#example-search-notpass" data-toggle="tab">
                                未通过
                            </a>
                        </li>
                        <li class="">
                            <a href="#example-search-pass" data-toggle="tab">
                                已经通过
                            </a>
                        </li>
                        <li class="">
                            <a href="#example-search-forbidden" data-toggle="tab">
                                禁用
                            </a>
                        </li>
                    </ul>
                </div>
                <div id="panel-collapse-1" class="collapse in">
                    <div class="panel-body">
                        <div class="container-fluid">
                            <div class="tab-content">
                                <!-- 第一栏 -->
                                <div class="tab-pane fade active in" id="example-search-all">
                                    <!-- 表格 -->
                                    <table class="f-tab table-hover table-condensed table-striped table-bordered table dataTable" >
                                        <thead>
                                        <tr role="row">
                                            <th>&nbsp;</th>
                                            <th>公司全称</th>
                                            <th>认证状态</th>
                                            <th>注册时间</th>
                                            <th>注册IP</th>
                                            <th>最后登录时间</th>
                                            <th>人才库</th>
                                            <th>管理</th>
                                        </tr>
                                        </thead>
                                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_a1" type="checkbox">
                                                    <label for="checkbox_a1"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>已通过</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myModal" data-toggle="modal" class="text-primary">查看</a>
                                                <div class="modal fade" id="myModal">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header enterprise-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                                    ×

                                                                </button>
                                                                <h4 class="modal-title">北京激活地带信息咨询有限公司</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <ul class="p-info">
                                                                    <li class="enterprise-li">
                                                                        <div class="left">公司简称:</div>
                                                                        <div class="right">激活地带</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">公司全称:</div>
                                                                        <div class="right">北京激活地带信息咨询有限公司</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">公司地址:</div>
                                                                        <div class="right">北京&nbsp;北京市&nbsp;海淀区&nbsp;知春里甲23号</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">公司简介:</div>
                                                                        <div class="right">北京激活地带信息咨询有限公司北京激活地带信息咨询有限公司北京激活地带信息咨询有限公司北京激活地带信息咨询有限公司北京激活地带信息咨询有限公司北京激活地带信息咨询有限公司</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">联系人:</div>
                                                                        <div class="right">云兼职</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">联系电话:</div>
                                                                        <div class="right">13546481502</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">座机号码:</div>
                                                                        <div class="right">010-48315488</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">邮箱地址:</div>
                                                                        <div class="right">yunjianzhi@yjob.net</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">注册号:</div>
                                                                        <div class="right">1511546465</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="enterprise-logo-left">
                                                                            <div class="enterprise-logo">企业LOGO:</div>
                                                                            <div class="enterprise-img">
                                                                                <a href="#"><img src="img/avatar1.jpg"></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="enterprise-logo-right">
                                                                            <div class="enterprise-zhizhao">营业执照:</div>
                                                                            <div class="enterprise-img">
                                                                                <a href="#"><img src="img/avatar1.jpg"></a>
                                                                            </div>
                                                                        </div>
                                                                    </li>
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
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_a2" type="checkbox">
                                                    <label for="checkbox_a2"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>已通过</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myModal" data-toggle="modal" class="text-primary">查看</a>
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
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>已通过</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myModal" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_a4" type="checkbox">
                                                    <label for="checkbox_a4"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>已通过</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myModal" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_a5" type="checkbox">
                                                    <label for="checkbox_a5"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>已通过</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myModal" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_a6" type="checkbox">
                                                    <label for="checkbox_a6"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>已通过</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myModal" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_a7" type="checkbox">
                                                    <label for="checkbox_a7"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>已通过</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myModal" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_a8" type="checkbox">
                                                    <label for="checkbox_a8"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>已通过</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myModal" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->

                                        </tbody>
                                    </table>
                                    <!-- 表格 -->
                                    <div class="pull-left bottom-btn-group">
                                        <div class="checkbox checkbox-info checkbox-inline">
                                            <input id="checkbox_all" name="full-select" type="checkbox">
                                            <label for="checkbox_all">全选</label>
                                        </div>
                                        <button type="button" class="btn">
                                            通过
                                        </button>
                                        <div class="btn-group">
                                            <button type="button" class="btn">
                                                拒绝
                                            </button>
                                            <div class="btn-group ">
                                                <select class="btn  dropdown-toogle enterprise-jujue">
                                                    <option selected="selected" value="0">请输入拒绝理由</option>
                                                    <option value="1">你长得太丑</option>
                                                    <option value="2">实力太差</option>
                                                    <option value="3">简历不完整</option>
                                                    <option value="4">sadasds</option>
                                                </select>

                                            </div>
                                        </div>
                                        <button type="button" class="btn">
                                            禁用
                                        </button>

                                    </div>
                                    <!-- 分页 -->
                                    <ul class="pagination success pull-right">
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
                                <!-- 第二栏开始 -->
                                <div class="tab-pane fade" id="example-search-await">
                                    <!-- 表格 -->
                                    <table class="f-tab table-hover table-condensed table-striped table-bordered table dataTable" >
                                        <thead>
                                        <tr role="row">
                                            <th>&nbsp;</th>
                                            <th>公司全称</th>
                                            <th>认证状态</th>
                                            <th>注册时间</th>
                                            <th>注册IP</th>
                                            <th>最后登录时间</th>
                                            <th>人才库</th>
                                            <th>管理</th>
                                        </tr>
                                        </thead>
                                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_b1" type="checkbox">
                                                    <label for="checkbox_b1"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>等待审核</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myAwiat" data-toggle="modal" class="text-primary">查看</a>
                                                <div class="modal fade" id="myAwiat">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header enterprise-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                                    ×

                                                                </button>
                                                                <h4 class="modal-title">北京激活地带信息咨询有限公司</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <ul class="p-info">
                                                                    <li class="enterprise-li">
                                                                        <div class="left">公司简称:</div>
                                                                        <div class="right">激活地带</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">公司全称:</div>
                                                                        <div class="right">北京激活地带信息咨询有限公司</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">公司地址:</div>
                                                                        <div class="right">北京&nbsp;北京市&nbsp;海淀区&nbsp;知春里甲23号</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">公司简介:</div>
                                                                        <div class="right">北京激活地带信息咨询有限公司北京激活地带信息咨询有限公司北京激活地带信息咨询有限公司北京激活地带信息咨询有限公司北京激活地带信息咨询有限公司北京激活地带信息咨询有限公司</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">联系人:</div>
                                                                        <div class="right">云兼职</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">联系电话:</div>
                                                                        <div class="right">13546481502</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">座机号码:</div>
                                                                        <div class="right">010-48315488</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">邮箱地址:</div>
                                                                        <div class="right">yunjianzhi@yjob.net</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">注册号:</div>
                                                                        <div class="right">1511546465</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="enterprise-logo-left">
                                                                            <div class="enterprise-logo">企业LOGO:</div>
                                                                            <div class="enterprise-img">
                                                                                <a href="#"><img src="img/avatar1.jpg"></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="enterprise-logo-right">
                                                                            <div class="enterprise-zhizhao">营业执照:</div>
                                                                            <div class="enterprise-img">
                                                                                <a href="#"><img src="img/avatar1.jpg"></a>
                                                                            </div>
                                                                        </div>
                                                                    </li>
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
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_b2" type="checkbox">
                                                    <label for="checkbox_b2"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>等待审核</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myAwiat" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <!-- <input type="checkbox" name="" class="chk"> -->
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_b3" type="checkbox">
                                                    <label for="checkbox_b3"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>等待审核</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myAwait" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_b4" type="checkbox">
                                                    <label for="checkbox_b4"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>等待审核</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myAwiat" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_b5" type="checkbox">
                                                    <label for="checkbox_b5"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>等待审核</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myAwiat" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_b6" type="checkbox">
                                                    <label for="checkbox_b6"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>等待审核</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myAwiat" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_b7" type="checkbox">
                                                    <label for="checkbox_b7"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>等待审核</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myAwait" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_b8" type="checkbox">
                                                    <label for="checkbox_b8"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>等待审核</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myAwiat" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->

                                        </tbody>
                                    </table>
                                    <!-- 表格 -->
                                    <div class="pull-left bottom-btn-group">
                                        <div class="checkbox checkbox-info checkbox-inline">
                                            <input id="checkbox_awiat" name="full-select" type="checkbox">
                                            <label for="checkbox_awiat">全选</label>
                                        </div>
                                        <button type="button" class="btn">
                                            通过
                                        </button>
                                        <div class="btn-group">
                                            <button type="button" class="btn">
                                                拒绝
                                            </button>
                                            <div class="btn-group ">
                                                <select class="btn  dropdown-toogle enterprise-jujue">
                                                    <option selected="selected" value="0">请输入拒绝理由</option>
                                                    <option value="1">你长得太丑</option>
                                                    <option value="2">实力太差</option>
                                                    <option value="3">简历不完整</option>
                                                    <option value="4">sadasds</option>
                                                </select>

                                            </div>
                                        </div>
                                        <button type="button" class="btn">
                                            禁用
                                        </button>

                                    </div>
                                    <!-- 分页 -->
                                    <ul class="pagination success pull-right">
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
                                <div class="tab-pane fade" id="example-search-notpass">
                                    <!-- 表格 -->

                                    <table class="f-tab table-hover table-condensed table-striped table-bordered table dataTable" >
                                        <thead>
                                        <tr role="row">
                                            <th>&nbsp;</th>
                                            <th>公司全称</th>
                                            <th>认证状态</th>
                                            <th>注册时间</th>
                                            <th>注册IP</th>
                                            <th>最后登录时间</th>
                                            <th>人才库</th>
                                            <th>管理</th>
                                        </tr>
                                        </thead>
                                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_c1" type="checkbox">
                                                    <label for="checkbox_c1"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>未通过</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myNotpass" data-toggle="modal" class="text-primary">查看</a>
                                                <div class="modal fade" id="myNotpass">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header enterprise-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                                    ×

                                                                </button>
                                                                <h4 class="modal-title">北京激活地带信息咨询有限公司</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <ul class="p-info">
                                                                    <li class="enterprise-li">
                                                                        <div class="left">公司简称:</div>
                                                                        <div class="right">激活地带</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">公司全称:</div>
                                                                        <div class="right">北京激活地带信息咨询有限公司</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">公司地址:</div>
                                                                        <div class="right">北京&nbsp;北京市&nbsp;海淀区&nbsp;知春里甲23号</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">公司简介:</div>
                                                                        <div class="right">北京激活地带信息咨询有限公司北京激活地带信息咨询有限公司北京激活地带信息咨询有限公司北京激活地带信息咨询有限公司北京激活地带信息咨询有限公司北京激活地带信息咨询有限公司</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">联系人:</div>
                                                                        <div class="right">云兼职</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">联系电话:</div>
                                                                        <div class="right">13546481502</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">座机号码:</div>
                                                                        <div class="right">010-48315488</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">邮箱地址:</div>
                                                                        <div class="right">yunjianzhi@yjob.net</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">注册号:</div>
                                                                        <div class="right">1511546465</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="enterprise-logo-left">
                                                                            <div class="enterprise-logo">企业LOGO:</div>
                                                                            <div class="enterprise-img">
                                                                                <a href="#"><img src="img/avatar1.jpg"></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="enterprise-logo-right">
                                                                            <div class="enterprise-zhizhao">营业执照:</div>
                                                                            <div class="enterprise-img">
                                                                                <a href="#"><img src="img/avatar1.jpg"></a>
                                                                            </div>
                                                                        </div>
                                                                    </li>
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
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_c2" type="checkbox">
                                                    <label for="checkbox_c2"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>未通过</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myNotpass" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <!-- <input type="checkbox" name="" class="chk"> -->
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_c3" type="checkbox">
                                                    <label for="checkbox_c3"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>未通过</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myNotpass" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_c4" type="checkbox">
                                                    <label for="checkbox_c4"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>未通过</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myNotpass" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_c5" type="checkbox">
                                                    <label for="checkbox_c5"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>未通过</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myNotpass" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_c6" type="checkbox">
                                                    <label for="checkbox_c6"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>未通过</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myNotpass" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_c7" type="checkbox">
                                                    <label for="checkbox_c7"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>未通过</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myNotpass" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_c8" type="checkbox">
                                                    <label for="checkbox_c8"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>未通过</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myNotpass" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->

                                        </tbody>
                                    </table>
                                    <!-- 表格 -->
                                    <div class="pull-left bottom-btn-group">
                                        <div class="checkbox checkbox-info checkbox-inline">
                                            <input id="checkbox_notpass" name="full-select" type="checkbox">
                                            <label for="checkbox_notpass">全选</label>
                                        </div>
                                        <button type="button" class="btn">
                                            通过
                                        </button>
                                        <div class="btn-group">
                                            <button type="button" class="btn">
                                                拒绝
                                            </button>
                                            <div class="btn-group ">
                                                <select class="btn  dropdown-toogle enterprise-jujue">
                                                    <option selected="selected" value="0">请输入拒绝理由</option>
                                                    <option value="1">你长得太丑</option>
                                                    <option value="2">实力太差</option>
                                                    <option value="3">简历不完整</option>
                                                    <option value="4">sadasds</option>
                                                </select>

                                            </div>
                                        </div>
                                        <button type="button" class="btn">
                                            禁用
                                        </button>

                                    </div>
                                    <!-- 分页 -->
                                    <ul class="pagination success pull-right">
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
                                <div class="tab-pane fade" id="example-search-pass">
                                    <!-- 表格 -->
                                    <table class="f-tab table-hover table-condensed table-striped table-bordered table dataTable" >
                                        <thead>
                                        <tr role="row">
                                            <th>&nbsp;</th>
                                            <th>公司全称</th>
                                            <th>认证状态</th>
                                            <th>注册时间</th>
                                            <th>注册IP</th>
                                            <th>最后登录时间</th>
                                            <th>人才库</th>
                                            <th>管理</th>
                                        </tr>
                                        </thead>
                                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_d1" type="checkbox">
                                                    <label for="checkbox_d1"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>已通过</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myPass" data-toggle="modal" class="text-primary">查看</a>
                                                <div class="modal fade" id="myPass">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header enterprise-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                                    ×

                                                                </button>
                                                                <h4 class="modal-title">北京激活地带信息咨询有限公司</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <ul class="p-info">
                                                                    <li class="enterprise-li">
                                                                        <div class="left">公司简称:</div>
                                                                        <div class="right">激活地带</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">公司全称:</div>
                                                                        <div class="right">北京激活地带信息咨询有限公司</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">公司地址:</div>
                                                                        <div class="right">北京&nbsp;北京市&nbsp;海淀区&nbsp;知春里甲23号</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">公司简介:</div>
                                                                        <div class="right">北京激活地带信息咨询有限公司北京激活地带信息咨询有限公司北京激活地带信息咨询有限公司北京激活地带信息咨询有限公司北京激活地带信息咨询有限公司北京激活地带信息咨询有限公司</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">联系人:</div>
                                                                        <div class="right">云兼职</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">联系电话:</div>
                                                                        <div class="right">13546481502</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">座机号码:</div>
                                                                        <div class="right">010-48315488</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">邮箱地址:</div>
                                                                        <div class="right">yunjianzhi@yjob.net</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">注册号:</div>
                                                                        <div class="right">1511546465</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="enterprise-logo-left">
                                                                            <div class="enterprise-logo">企业LOGO:</div>
                                                                            <div class="enterprise-img">
                                                                                <a href="#"><img src="img/avatar1.jpg"></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="enterprise-logo-right">
                                                                            <div class="enterprise-zhizhao">营业执照:</div>
                                                                            <div class="enterprise-img">
                                                                                <a href="#"><img src="img/avatar1.jpg"></a>
                                                                            </div>
                                                                        </div>
                                                                    </li>
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
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_d2" type="checkbox">
                                                    <label for="checkbox_d2"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>已通过</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myPass" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <!-- <input type="checkbox" name="" class="chk"> -->
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_d3" type="checkbox">
                                                    <label for="checkbox_d3"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>已通过</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myModal" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_d4" type="checkbox">
                                                    <label for="checkbox_d4"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>已通过</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myPass" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_d5" type="checkbox">
                                                    <label for="checkbox_d5"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>已通过</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myPass" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_d6" type="checkbox">
                                                    <label for="checkbox_d6"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>已通过</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myPass" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_d7" type="checkbox">
                                                    <label for="checkbox_d7"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>已通过</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myPass" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_d8" type="checkbox">
                                                    <label for="checkbox_d8"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>已通过</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myPass" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->

                                        </tbody>
                                    </table>
                                    <!-- 表格 -->
                                    <div class="pull-left bottom-btn-group">
                                        <div class="checkbox checkbox-info checkbox-inline">
                                            <input id="checkbox_pass" name="full-select" type="checkbox">
                                            <label for="checkbox_pass">全选</label>
                                        </div>
                                        <button type="button" class="btn">
                                            通过
                                        </button>
                                        <div class="btn-group">
                                            <button type="button" class="btn">
                                                拒绝
                                            </button>
                                            <div class="btn-group ">
                                                <select class="btn  dropdown-toogle enterprise-jujue">
                                                    <option selected="selected" value="0">请输入拒绝理由</option>
                                                    <option value="1">你长得太丑</option>
                                                    <option value="2">实力太差</option>
                                                    <option value="3">简历不完整</option>
                                                    <option value="4">sadasds</option>
                                                </select>

                                            </div>
                                        </div>
                                        <button type="button" class="btn">
                                            禁用
                                        </button>

                                    </div>
                                    <!-- 分页 -->
                                    <ul class="pagination success pull-right">
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
                                <div class="tab-pane fade" id="example-search-forbidden">
                                    <!-- 表格 -->

                                    <table class="f-tab table-hover table-condensed table-striped table-bordered table dataTable" >
                                        <thead>
                                        <tr role="row">
                                            <th>&nbsp;</th>
                                            <th>公司全称</th>
                                            <th>认证状态</th>
                                            <th>注册时间</th>
                                            <th>注册IP</th>
                                            <th>最后登录时间</th>
                                            <th>人才库</th>
                                            <th>管理</th>
                                        </tr>
                                        </thead>
                                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_e1" type="checkbox">
                                                    <label for="checkbox_e1"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>禁用</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myForbidden" data-toggle="modal" class="text-primary">查看</a>
                                                <div class="modal fade" id="myForbidden">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header enterprise-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                                    ×

                                                                </button>
                                                                <h4 class="modal-title">北京激活地带信息咨询有限公司</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <ul class="p-info">
                                                                    <li class="enterprise-li">
                                                                        <div class="left">公司简称:</div>
                                                                        <div class="right">激活地带</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">公司全称:</div>
                                                                        <div class="right">北京激活地带信息咨询有限公司</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">公司地址:</div>
                                                                        <div class="right">北京&nbsp;北京市&nbsp;海淀区&nbsp;知春里甲23号</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">公司简介:</div>
                                                                        <div class="right">北京激活地带信息咨询有限公司北京激活地带信息咨询有限公司北京激活地带信息咨询有限公司北京激活地带信息咨询有限公司北京激活地带信息咨询有限公司北京激活地带信息咨询有限公司</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">联系人:</div>
                                                                        <div class="right">云兼职</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">联系电话:</div>
                                                                        <div class="right">13546481502</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">座机号码:</div>
                                                                        <div class="right">010-48315488</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">邮箱地址:</div>
                                                                        <div class="right">yunjianzhi@yjob.net</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">注册号:</div>
                                                                        <div class="right">1511546465</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="enterprise-logo-left">
                                                                            <div class="enterprise-logo">企业LOGO:</div>
                                                                            <div class="enterprise-img">
                                                                                <a href="#"><img src="img/avatar1.jpg"></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="enterprise-logo-right">
                                                                            <div class="enterprise-zhizhao">营业执照:</div>
                                                                            <div class="enterprise-img">
                                                                                <a href="#"><img src="img/avatar1.jpg"></a>
                                                                            </div>
                                                                        </div>
                                                                    </li>
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
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_e2" type="checkbox">
                                                    <label for="checkbox_e2"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>禁用</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myForbidden" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <!-- <input type="checkbox" name="" class="chk"> -->
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_e3" type="checkbox">
                                                    <label for="checkbox_e3"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>禁用</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myForbidden" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_e4" type="checkbox">
                                                    <label for="checkbox_e4"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>禁用</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myForbidden" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_e5" type="checkbox">
                                                    <label for="checkbox_e5"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>禁用</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myForbidden" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_e6" type="checkbox">
                                                    <label for="checkbox_e6"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>禁用</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myForbidden" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_e7" type="checkbox">
                                                    <label for="checkbox_e7"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>禁用</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myForbidden" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_e8" type="checkbox">
                                                    <label for="checkbox_e8"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">北京激活地带信息咨询有限公司</a></td>
                                            <td>禁用</td>
                                            <td>2016/11/08 11:43:56</td>
                                            <td>117.114.136.38</td>
                                            <td>
                                                2016/11/08 11:44:56
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                                <a href="#myForbidden" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->

                                        </tbody>
                                    </table>
                                    <!-- 表格 -->
                                    <div class="pull-left bottom-btn-group">
                                        <div class="checkbox checkbox-info checkbox-inline">
                                            <input id="checkbox_firdieen" name="full-select" type="checkbox">
                                            <label for="checkbox_firdieen">全选</label>
                                        </div>
                                        <button type="button" class="btn">
                                            通过
                                        </button>
                                        <div class="btn-group">
                                            <button type="button" class="btn">
                                                拒绝
                                            </button>
                                            <div class="btn-group ">
                                                <select class="btn  dropdown-toogle enterprise-jujue">
                                                    <option selected="selected" value="0">请输入拒绝理由</option>
                                                    <option value="1">你长得太丑</option>
                                                    <option value="2">实力太差</option>
                                                    <option value="3">简历不完整</option>
                                                    <option value="4">sadasds</option>
                                                </select>

                                            </div>
                                        </div>
                                        <button type="button" class="btn">
                                            禁用
                                        </button>

                                    </div>
                                    <!-- 分页 -->
                                    <ul class="pagination success pull-right">
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
                            </div>
                            <!-- /.tab-content -->
                        </div>
                        <!-- /.container-fluid -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.collapse in -->
            </div>
            <!-- /.panel -->

        </section>
        <!-- END WRAPPER  -->
    </section>
</section>
</body>
</html>

<!-- BEGIN JS -->
<script type="text/javascript" src="js/jquery-1.8.3.min.js" ></script>
<script src="js/bootstrap.min.js" ></script><!-- BOOTSTRAP JS  -->
<script src="js/jquery.dcjqaccordion.2.7.js"></script><!-- ACCORDING JS -->
<script src="js/common-scripts.js" ></script><!-- BASIC COMMON JS  -->
<script type="text/javascript" src="js/zp/zp.js"></script>
</body>
</html>