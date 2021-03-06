<?php if (!defined('THINK_PATH')) exit();?>﻿

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
    <title>意见和建议</title>

    <!-- BEGIN STYLESHEET -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> <!-- bootstrap css-->
    <link href="css/bootstrap-reset.css" rel="stylesheet"> <!-- BOOTSTRAP CSS -->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet"> <!-- FONT AWESOME CSS -->
    <link href="css/style.css" rel="stylesheet"> <!-- THEME BASIC STYLESHEET -->
    <link href="css/style-responsive.css" rel="stylesheet"> <!-- THEME RESPONSIVE CSS -->
    <link href="css/zp.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <!-- END STYLESHEET -->
</head>
<body>
<!-- BEGIN SECTION -->
<section id="container" class="">

    <!-- BEGIN HEADER -->
    <header class="header white-bg toubu-color">
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
            <!-- BEGIN ROW -->
            <form method="post" action="" class="form-horizontal ">
                <!--<div class="row">-->
                <div class="col-lg-12">
                    <section class="panel">

                        <header class="panel-heading ">
                            <span class="opinion-font">意见和建议</span>
                            <hr  class="opinion-hr"/>
                            <div class="classify-d">

                                <span class="pull-left classify-s">分类显示:</span>
                                <div data-toggle="buttons" class="btn-group classify-jz">
                                    <label class="btn active btn-default" >
                                        <input type="radio" name="classify" value="不限" >不限
                                    </label>
                                    <label class="btn btn-default" >
                                        <input type="radio" name="classify" value="意见">意见
                                    </label>
                                    <label class="btn btn-default" >
                                        <input type="radio" name="classify" value="建议">建议
                                    </label>
                                    <label class="btn btn-default" >
                                        <input type="radio" name="classify" value="求助">求助
                                    </label>
                                    <label class="btn btn-default" >
                                        <input type="radio" name="classify" value="投诉">投诉
                                    </label>
                                </div>
                            </div>
                            <div>

                                <span class="pull-left classify-s">添加时间:</span>
                                <div data-toggle="buttons" class="btn-group classify-jz">
                                    <label class="btn active btn-default" >
                                        <input type="radio" name="time" value="不限">不限
                                    </label>
                                    <label class="btn btn-default" >
                                        <input type="radio" name="time" value="三天内">三天内
                                    </label>
                                    <label class="btn btn-default" >
                                        <input type="radio" name="time" value="一周内">一周内
                                    </label>
                                    <label class="btn btn-default" >
                                        <input type="radio" name="time" value="一月内">一月内
                                    </label>
                                    <label class="btn btn-default" >
                                        <input type="radio" name="time" value="半年内">半年内
                                    </label>
                                    <label class="btn btn-default" >
                                        <input type="radio" name="time" value="一年内">一年内
                                    </label>
                                </div>
                            </div>


                        </header>
                        <table class="table table-striped table-advance table-hover opinion-border">
                            <thead>
                            <tr>
                                <th style="width:6%"> 类别</th>
                                <th style="width:56%"> 内容</th>
                                <th style="width:10%"> 联系方式</th>
                                <th style="width:13%"> 添加时间</th>
                                <th style="width:6%">处理</th>
                                <th style="width:7%">操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="task-checkbox">
                                        <input type="checkbox" class="list-child" id="checkbox_a1"value="">
                                        <span>求助</span>
                                    </div>
                                </td>
                                <td class="hx-td">的撒大所多撒多撒大所多撒多撒大所大所多</td>
                                <td>15322222222</td>
                                <td>2016-11-04 18:29:30</td>
                                <td><span class="label label-danger label-mini">No</span></td>
                                <td>
                                    <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="task-checkbox">
                                        <input type="checkbox" class="list-child" id="checkbox_a2" value="">
                                        <span>建议</span>
                                    </div>
                                </td>
                                <td class="hx-td">的撒大所多撒多撒大所多撒多撒大所大所多</td>
                                <td>15322222222</td>
                                <td>2016-11-04 18:31:30</td>
                                <td><span class="label label-success label-mini">Yes</span></td>
                                <td>
                                    <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="task-checkbox">
                                        <input type="checkbox" class="list-child" id="checkbox_a3" value="">
                                        <span>投诉</span>
                                    </div>
                                </td>
                                <td class="hx-td">的撒大所多撒多撒大所多撒多撒大所大所多</td>
                                <td>15322222222</td>
                                <td>2016-11-04 18:31:30</td>
                                <td><span class="label label-danger label-mini">No</span></td>
                                <td>
                                    <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="task-checkbox">
                                        <input type="checkbox" class="list-child" id="checkbox_a4" value="">
                                        <span>投诉</span>
                                    </div>
                                </td>
                                <td class="hx-td">的撒大所多撒多撒大所多撒多撒大所大所多</td>
                                <td>15322222222</td>
                                <td>2016-11-04 18:31:30</td>
                                <td><span class="label label-success label-mini">Yes</span></td>
                                <td>
                                    <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="task-checkbox">
                                        <input type="checkbox" class="list-child" id="checkbox_a5" value="">
                                        <span>投诉</span>
                                    </div>
                                </td>
                                <td class="hx-td">的撒大所多撒多撒大所多撒多撒大所大所多上电脑撒可兑换萨科技大数据肯定撒开了多久萨拉丁大家撒扩虑多菌扩绿伞</td>
                                <td>15322222222</td>
                                <td>2016-11-04 18:31:30</td>
                                <td><span class="label label-success label-mini">Yes</span></td>
                                <td>
                                    <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="task-checkbox">
                                        <input type="checkbox" class="list-child" id="checkbox_a6" value="">
                                        <span>投诉</span>
                                    </div>
                                </td>
                                <td class="hx-td">的撒大所多撒多撒大所多撒多撒大所大所多</td>
                                <td>15322222222</td>
                                <td>2016-11-04 18:31:30</td>
                                <td><span class="label label-danger label-mini">No</span></td>
                                <td>
                                    <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <div class="bottombtn" >
                            <div class="quanxuan">
                                <input type="checkbox" id="checkbox_qx" name="full-select" >
                                <label>全选</label>
                            </div>
                            <button class="delete-btn">删除所选</button>
                        </div>
                        <!--checkbox全选-->

                        <ul class="pagination success pull-right page-dbu">
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

                    </section>
                </div>
                <!--</div>-->
            </form>
        </section>
    </section>
</section>
<!-- END SECTION -->

<!-- BEGIN JS -->
<script type="text/javascript" src="js/jquery-1.8.3.min.js" ></script>
<script src="js/jquery.js" ></script><!-- BASIC JS LIABRARY -->
<script src="js/bootstrap.min.js" ></script><!-- BOOTSTRAP JS  -->
<script src="js/jquery.dcjqaccordion.2.7.js"></script><!-- ACCORDING JS -->
<script src="js/jquery.scrollTo.min.js" ></script><!-- SCROLLTO JS  -->
<script src="js/jquery.nicescroll.js" > </script><!-- NICESCROLL JS  -->
<script src="js/respond.min.js" ></script><!-- RESPOND JS  -->
<script src="js/common-scripts.js" ></script><!-- BASIC COMMON JS  -->
<!-- END JS -->
<script type="text/javascript" src="js/zp/zp.js"></script>
</body>
</html>