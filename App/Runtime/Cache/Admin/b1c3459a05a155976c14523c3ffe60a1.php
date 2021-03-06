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
    <link rel="shortcut icon" href="/Public/Admin/img/favicon.ico">
    <!-- END SHORTCUT ICON -->
    <title>
        <?php echo ($title); ?>
    </title>
    <!-- BEGIN STYLESHEET-->
    <link href="/Public/Admin/css/bootstrap.min.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
    <link href="/Public/Admin/css/bootstrap-reset.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
    <link href="/Public/Admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet"><!-- FONT AWESOME ICON CSS -->
    <link href="/Public/Admin/css/style.css" rel="stylesheet"><!-- THEME BASIC CSS -->
    <link href="/Public/Admin/css/style-responsive.css" rel="stylesheet"><!-- THEME RESPONSIVE CSS -->
    <link href="/Public/Admin/assets/morris.js-0.4.3/morris.css" rel="stylesheet"><!-- MORRIS CHART CSS -->
    <!--dashboard calendar-->
    <link href="/Public/Admin/css/clndr.css" rel="stylesheet"><!-- CALENDER CSS -->
    <link href="/Public/Admin/css/css.css" rel="stylesheet">
    <link href="/Public/Admin/css/zp.css" rel="stylesheet">
    <link href="/Public/Admin/css/page.css" rel="stylesheet">
    <link href="/Public/Admin/css/awesome-bootstrap-checkbox.css" rel="stylesheet"><!-- awesome-bootstrap-checkbox.css -->
    <link rel="stylesheet" type="text/css" href="/Public/Admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css"><!-- BOOTSTRAP WYSIHTML5 PLUGIN CSS -->
    <link rel="stylesheet" type="text/css" href="/Public/Admin/assets/bootstrap-fileupload/bootstrap-fileupload.css"><!-- BOOTSTRAP FILEUPLOAD PLUGIN CSS -->
    <link rel="stylesheet" type="text/css" href="/Public/Admin/assets/bootstrap-timepicker/compiled/timepicker.css"><!-- BOOTSTRAP TIMEPICKER PLUGIN CSS -->

    <!--[if lt IE 9]>
    <script src="/Public/Admin/js/html5shiv.js">
    </script>
    <script src="/Public/Admin/js/respond.min.js">
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
        <img src="/Public/Admin/img/images/header_06.png" alt="">
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
                      <img alt="avatar" src="/Public/Admin/img/avatar-mini.jpg">
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
                      <img alt="avatar" src="/Public/Admin/img/avatar-mini2.jpg">
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
                      <img alt="avatar" src="/Public/Admin/img/avatar-mini3.jpg">
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
                      <img alt="avatar" src="/Public/Admin/img/avatar-mini4.jpg">
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
                    <img alt="" src="/Public/Admin/img/avatar1_small.jpg">
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
                                    内容添加
                                </li>
                                <div class="opinion-hr">
                                    <hr />
                                </div>
                                <form method="post" action="" class="form-horizontal" id="FormData">
                                    <li>
                                        <div class="form-group">
                                            <label for="article-title" class="pull-left control-label">
                                                    <span class=" text-danger xxcolor">*&nbsp;&nbsp;
                                                    </span>
                                                文章标题:
                                            </label>
                                            <div class=" inputjz">
                                                <input type="text" class="form-control " id="article-title">

                                            </div>
                                        </div>

                                    </li>
                                    <hr />
                                    <li>
                                        <div class="form-group">
                                            <label  class="pull-left control-label">
                                                    <span class=" text-danger xxcolor">*&nbsp;&nbsp;
                                                    </span>
                                                内容分类:
                                            </label>
                                            <div class="content-class">

                                                <div style="position:relative;">
                                                    <input type="text" value="请选择" readonly="readonly"  name="type_id_cn" id="type_id_cn" class="input_text_200 input_text_select valid " >
                                                    <input name="type_id" id="type_id" type="hidden">
                                                    <div id="menu1" class="menu"  style="display:none">
                                                        <ul>
                                                            <li id="1" title="资讯中心">资讯中心</li>
                                                            <li id="2" title="|-最新活动">|-最新活动</li>
                                                            <li id="3" title="|-简历指南">|-简历指南</li>
                                                            <li id="4" title="|-面试宝典">|-面试宝典</li>
                                                            <li id="5" title="|-职场八卦">|-职场八卦</li>
                                                            <li id="6" title="|-劳动法苑">|-劳动法苑</li>
                                                            <li id="7" title="|-职场观察">|-职场观察</li>
                                                            <li id="8" title="热门职业">热门职业</li>
                                                            <li id="9" title="|-担保">|-担保</li>
                                                            <li id="13" title="|-直招">|-直招</li>
                                                            <li id="14" title="活动">活动</li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <hr />
                                    <li>
                                        <div class="form-group">
                                            <label  class="pull-left control-label">
                                                    <span class=" text-danger xxcolor">*&nbsp;&nbsp;
                                                    </span>
                                                显示站点:
                                            </label>
                                            <div class="content-zd">
                                                <input type="checkbox" id="checkbox_qx" value="" >全站
                                                <input type="checkbox" id="checkbox_a2" value="">北京
                                                <input type="checkbox" id="checkbox_a1" value="">上海
                                            </div>
                                        </div>
                                    </li>
                                    <div class="opinion-hr">
                                        <hr />
                                    </div>
                                    <li>
                                        <div class="form-group">
                                            <label  class="pull-left control-label">
                                                    <span class=" text-danger xxcolor">*&nbsp;&nbsp;
                                                    </span>
                                                缩略图:
                                            </label>
                                            <div class="inputjz">
                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-new thumbnail" >
                                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="">
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
                                Change
                              </span>
                              <input type="file" class="default">
                            </span>
                                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">
                                                            <i class="fa fa-trash">
                                                            </i>
                                                            Remove
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <hr />
                                    <li>
                                        <div class="form-group">
                                            <label  class="pull-left control-label">
                                                    <span class=" text-danger xxcolor">*&nbsp;&nbsp;
                                                    </span>
                                                关键字:
                                            </label>
                                            <div class="content-gjz">
                                                <input type="text" class="form-control">

                                            </div>
                                        </div>
                                    </li>
                                    <hr />
                                    <li>
                                        <div class="form-group">
                                            <label  class="pull-left control-label">
                                                    <span class=" text-danger xxcolor">*&nbsp;&nbsp;
                                                    </span>
                                                摘要:
                                            </label>
                                            <div class=" content-zy">
                                                <textarea name="" id="" cols="58" rows="6" style="width:429px;"></textarea>
                                            </div>
                                        </div>
                                    </li>
                                    <hr />
                                    <li>
                                        <div class="form-group">
                                            <label  class="pull-left control-label">
                                                    <span class=" text-danger xxcolor">*&nbsp;&nbsp;
                                                    </span>
                                                正文内容:
                                            </label>
                                            <div class="content-zw">
                                                <textarea class="wysihtml5 form-control" rows="7">
                        </textarea>
                                            </div>
                                        </div>
                                    </li>
                                    <hr />
                                    <li>
                                        <div class="form-group">
                                            <label  class="pull-left control-label">
                                                    <span class=" text-danger xxcolor">*&nbsp;&nbsp;
                                                    </span>
                                                文章排序:
                                            </label>
                                            <div class="content-class">
                                                <input type="text" class="form-control">

                                            </div>

                                        </div>
                                    </li>
                                    <hr />
                                    <li>
                                        <div class="form-group">
                                            <label  class="pull-left control-label">
                                                    <span class=" text-danger xxcolor">*&nbsp;&nbsp;
                                                    </span>
                                                作　　者:
                                            </label>
                                            <div class=" content-class">
                                                <input type="text" class="form-control">

                                            </div>
                                        </div>
                                    </li>
                                    <hr />
                                    <li>
                                        <div class="form-group">
                                            <label  class="pull-left control-label">
                                                    <span class=" text-danger xxcolor">*&nbsp;&nbsp;
                                                    </span>
                                                标题加粗:
                                            </label>
                                            <div class=" content-bt">
                                                <input type="radio" name="jiachu"value="0" checked="checked"  >加粗
                                                <input type="radio" name="jiachu" value="1">不加粗
                                            </div>
                                        </div>
                                    </li>
                                    <hr />
                                    <li>
                                        <div class="form-group">
                                            <label  class="pull-left control-label content-laiyuan">

                                                来　　源:
                                            </label>
                                            <div class=" inputjz">
                                                <input type="text" class="form-control" >
                                            </div>
                                            <label  class="pull-left control-label">
                                                外部链接:
                                            </label>
                                            <div class=" inputjz">
                                                <input type="text" class="form-control" >
                                            </div>
                                        </div>
                                    </li>
                                    <div class="opinion-hr">
                                        <hr />
                                    </div>
                                    <div class="send">
                                        <button type="submit" class=" btn  alter-btn">保存</button>
                                    </div>
                                </form>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </section>
</section>

<script src="/Public/Admin/js/jquery-1.8.3.min.js" ></script><!-- BASIC JQUERY 1.8.3 LIB. JS -->
<script src="/Public/Admin/js/zp/zp.js"></script>
<script src="/Public/Admin/js/bootstrap.min.js" ></script><!-- BOOTSTRAP JS -->
<script src="/Public/Admin/js/jquery.dcjqaccordion.2.7.js"></script><!-- ACCORDIN JS -->
<script src="/Public/Admin/js/jquery.scrollTo.min.js" ></script><!-- SCROLLTO JS -->
<script src="/Public/Admin/js/jquery.nicescroll.js" ></script><!-- NICESCROLL JS -->
<script src="/Public/Admin/js/respond.min.js" ></script><!-- RESPOND JS -->
<script src="/Public/Admin/js/common-scripts.js" ></script><!-- BASIC COMMON JS  -->
<script src="/Public/Admin/assets/fuelux/js/spinner.min.js"></script><!-- FUELUX JS  -->
<script src="/Public/Admin/assets/bootstrap-fileupload/bootstrap-fileupload.js"></script><!-- BOOTSTRAP FILEUPLOAD JS  -->
<!--Morris-->
<script src="/Public/Admin/js/jquery.sparkline.js"></script><!-- SPARKLINE JS -->
<script src="/Public/Admin/js/sparkline-chart.js"></script><!-- SPARKLINE CHART JS -->
<script src="/Public/Admin/js/count.js"></script><!-- COUNT JS -->

<script src="/Public/Admin/assets/morris.js-0.4.3/morris.min.js" ></script><!-- MORRIS JS -->
<script src="/Public/Admin/assets/morris.js-0.4.3/raphael-min.js" ></script><!-- MORRIS  JS -->
<script src="/Public/Admin/js/calendar/clndr.js"></script><!-- CALENDER JS -->
<script src="/Public/Admin/js/calendar/moment-2.2.1.js"></script><!-- CALENDER MOMENT JS -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script><!-- UNDERSCORE JS -->
<script src="/Public/Admin/assets/jquery-knob/js/jquery.knob.js" ></script><!-- JQUERY KNOB JS -->

<script src="/Public/Admin/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script><!-- BOOTSTRAP wysihtml5 JS  -->
<script src="/Public/Admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script><!-- BOOTSTRAP wysihtml5 JS  -->
<script src="/Public/Admin/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script><!-- BOOTSTRAP DATEPICKER JS  -->
<script src="/Public/Admin/assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script><!-- BOOTSTRAP DATETIMEPICKER JS  -->
<script src="/Public/Admin/assets/bootstrap-daterangepicker/moment.min.js"></script>
<script src="/Public/Admin/assets/bootstrap-daterangepicker/daterangepicker.js"></script><!-- BOOTSTRAP DATERANGEPICKER JS  -->
<script src="/Public/Admin/assets/bootstrap-colorpicker/js/daterangepicker.js"> </script><!-- BOOTSTRAP COLORPICKER JS  -->
<script src="/Public/Admin/assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script><!-- BOOTSTRAP TIMEPICKER JS  -->
<script src="/Public/Admin/assets/jquery-multi-select/js/bootstrap-timepicker.js"></script><!-- BOOTSTRAP MULTISELECT JS  -->
<script src="/Public/Admin/assets/jquery-multi-select/js/jquery.multi-select.js"></script>
<script src="/Public/Admin/assets/jquery-multi-select/js/jquery.quicksearch.js"></script>
<script src="/Public/Admin/js/zp/btn-radio.js"></script>
<script src="/Public/Admin/assets/ckeditor/ckeditor.js"></script><!-- CKEDITOR JS  -->
<script src="/Public/Admin/js/advanced-form-components.js" ></script><!-- ADVANCE FORM COMPONENTS PAGE JS  -->


<script >
    //knob
    $(".knob").knob();
</script>
<!-- END JS -->
</body>
</html>

<!-- BEGIN JS -->
<script type="text/javascript">
    $("#checkbox_qx").click(function(){
        // $("td .chk").prop("checked",$(this).prop("checked"));
        $("div :checkbox").prop("checked",$(this).prop("checked"));
    });
    $("div :checkbox").live('click',function(){
        if($(this).prop("checked")==false){
            $("#checkbox_qx").prop("checked","");
        }
    });
</script>