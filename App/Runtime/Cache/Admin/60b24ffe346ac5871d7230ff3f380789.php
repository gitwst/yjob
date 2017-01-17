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
    <title>推广查询</title>

    <!-- BEGIN STYLESHEET -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> <!-- bootstrap css-->
    <link href="css/bootstrap-reset.css" rel="stylesheet"> <!-- BOOTSTRAP CSS -->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet"> <!-- FONT AWESOME CSS -->
    <link href="css/awesome-bootstrap-checkbox.css" rel="stylesheet"><!-- awesome-bootstrap-checkbox.css -->
    <link href="css/style.css" rel="stylesheet"> <!-- THEME BASIC STYLESHEET -->
    <link href="css/style-responsive.css" rel="stylesheet"> <!-- THEME RESPONSIVE CSS -->
    <link href="css/zp.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">
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
        <section class="wrapper">
            <section class="panel panel-first">
                <div class="">
                    <div class="panel with-nav-tabs panel-info panel-square panel-no-border">
                        <div class="panel-body body-waiwei">
                            <ul>
                                <li class="first-font">
                                    推广查询
                                </li>
                                <div class="opinion-hr">
                                    <hr />
                                </div>
                                <li>
                                    <div class="panel-body">
                                        <form method="post" action="" class="form-horizontal">
                                            <input type="text" class="form-control generalize-input" placeholder="输入手机号">
                                            <div class="generalize-send">
                                                <button type="submit" class=" btn  alter-btn">点击查询</button>
                                            </div>
                                            <table class=" table-hover table-condensed table-striped table-bordered table dataTable"  >

                                                <thead>
                                                <tr role="row">
                                                    <th width="20%">姓名</th>
                                                    <th width="20%">电话</th>
                                                    <th width="20%">上岗次数</th>
                                                    <th width="40%">统计结果</th>
                                                </tr>
                                                </thead>
                                                <tbody role="alert" aria-live="polite" aria-relevant="all">
                                                <!-- 新起一行 -->
                                                <tr>
                                                    <td ><a href="#" class="text-blue">张三</a></td>
                                                    <td>13815354102</td>
                                                    <td>62次</td>
                                                    <td>共推广成功一级下线<span style="text-decoration:underline;">32</span>名，其中<span style="text-decoration:underline;">28</span>名又上岗纪录</td>
                                                </tr>
                                                <!-- 新起一行 -->
                                                <tr>
                                                    <td ><a href="#" class="text-blue">张三</a></td>
                                                    <td>13815354102</td>
                                                    <td>62次</td>
                                                    <td>共推广成功一级下线<span style="text-decoration:underline;">32</span>名，其中<span style="text-decoration:underline;">28</span>名又上岗纪录</td>
                                                </tr>
                                                <!-- 新起一行 -->
                                                <tr>
                                                    <td ><a href="#" class="text-blue">张三</a></td>
                                                    <td>13815354102</td>
                                                    <td>62次</td>
                                                    <td>共推广成功一级下线<span style="text-decoration:underline;">32</span>名，其中<span style="text-decoration:underline;">28</span>名又上岗纪录</td>
                                                </tr>
                                                <!-- 新起一行 -->
                                                <tr>
                                                    <td ><a href="#" class="text-blue">张三</a></td>
                                                    <td>13815354102</td>
                                                    <td>62次</td>
                                                    <td>共推广成功一级下线<span style="text-decoration:underline;">32</span>名，其中<span style="text-decoration:underline;">28</span>名又上岗纪录</td>
                                                </tr>
                                                </tbody>
                                            </table>
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
                                        </form>
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

<!-- BEGIN JS -->
<script type="text/javascript" src="js/jquery-1.8.3.min.js" ></script>
<script src="js/jquery.js" ></script><!-- BASIC JS LIABRARY -->
<script src="js/bootstrap.min.js" ></script><!-- BOOTSTRAP JS  -->
<script src="js/jquery.dcjqaccordion.2.7.js"></script><!-- ACCORDING JS -->
<script src="js/jquery.scrollTo.min.js" ></script><!-- SCROLLTO JS  -->
<script src="js/jquery.nicescroll.js" > </script><!-- NICESCROLL JS  -->
<script src="js/respond.min.js" ></script><!-- RESPOND JS  -->
<script src="js/common-scripts.js" ></script><!-- BASIC COMMON JS  -->
<script type="text/javascript" src="js/zp/zp.js"></script>
<!-- END JS -->
</body>
</html>