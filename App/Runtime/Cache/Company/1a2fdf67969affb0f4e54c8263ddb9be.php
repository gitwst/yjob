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
          <div class="panel with-nav-tabs panel-info panel-square panel-no-border">
            <div class="panel-heading">
            <!-- 右侧小按钮 -->
              <div class="pull-right">
                <input class="form-control search" placeholder="请输入搜索的职位名称或工作内容" type="text">
              </div>
              <ul class="nav nav-tabs">
                <li class="active">
                  <a href="#example-search-talent" data-toggle="tab">
                    人才库
                  </a>
                </li>
                <li class="">
                  <a href="#example-search-blacklist" data-toggle="tab">
                    黑名单
                  </a>
                </li>
              </ul>
            </div>
            <div id="panel-collapse-1" class="collapse in">
              <div class="panel-body">
                <div class="container-fluid">
                  <div class="tab-content">
                    <!-- 第一栏 -->
                    <div class="tab-pane fade active in" id="example-search-talent">
                      <!-- 表格 -->
                      <table class="f-tab table-hover table-condensed table-striped table-bordered table dataTable" id="hidden-table-info" aria-describedby="hidden-table-info_info">
                       <thead>
                          <tr role="row">
                            <th>&nbsp;</th>
                            <th>基本信息</th>
                            <th>性别</th>
                            <th>实名认证</th>
                            <th>手机号</th>
                            <th>平台信誉</th>
                            <th>评价/工作记录</th>
                          </tr>
                       </thead>
                      <tbody role="alert" aria-live="polite" aria-relevant="all">
                        <!-- 新起一行 -->
                        <tr>
                          <td>
                            <!-- <input type="checkbox" name="" class="chk"> -->
                            <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                              <input id="talentCheckbox1" type="checkbox">
                              <label for="talentCheckbox1"></label>
                            </div>
                          </td>
                          <td class="text-blue">肖允瀚</td>
                          <td>男</td>
                          <td>未认证</td>
                          <td>15212234876</td>
                          <td>
                            上岗次数: 2022&nbsp;&nbsp;&nbsp;&nbsp;
                            放鸽子数:2022&nbsp;&nbsp;&nbsp;&nbsp;
                            取消次数: 2202&nbsp;&nbsp;&nbsp;&nbsp;
                            早退次数:2202
                          </td>
                          <td class="text-center"><i class="fa fa-plus-circle"></i></td>
                        </tr>
                        <!-- 新起一行 -->
                        <tr>
                          <td>
                            <!-- <input type="checkbox" name="" class="chk"> -->
                            <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                              <input id="talentCheckbox2" type="checkbox">
                              <label for="talentCheckbox2"></label>
                            </div>
                          </td>
                          <td class="text-blue">肖允瀚</td>
                          <td>男</td>
                          <td>未认证</td>
                          <td>15212234876</td>
                          <td>
                            上岗次数: 2022&nbsp;&nbsp;&nbsp;&nbsp;
                            放鸽子数:2022&nbsp;&nbsp;&nbsp;&nbsp;
                            取消次数: 2202&nbsp;&nbsp;&nbsp;&nbsp;
                            早退次数:2202
                          </td>
                          <td class="text-center"><i class="fa fa-plus-circle"></i></td>
                        </tr>
                        <!-- 新起一行 -->
                        <tr>
                          <td>
                            <!-- <input type="checkbox" name="" class="chk"> -->
                            <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                              <input id="talentCheckbox3" type="checkbox">
                              <label for="talentCheckbox3"></label>
                            </div>
                          </td>
                          <td class="text-blue">肖允瀚</td>
                          <td>男</td>
                          <td>未认证</td>
                          <td>15212234876</td>
                          <td>
                            上岗次数: 2022&nbsp;&nbsp;&nbsp;&nbsp;
                            放鸽子数:2022&nbsp;&nbsp;&nbsp;&nbsp;
                            取消次数: 2202&nbsp;&nbsp;&nbsp;&nbsp;
                            早退次数:2202
                          </td>
                          <td class="text-center"><i class="fa fa-plus-circle"></i></td>
                        </tr>
                        <!-- 新起一行 -->
                        <tr>
                          <td>
                            <!-- <input type="checkbox" name="" class="chk"> -->
                            <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                              <input id="talentCheckbox4" type="checkbox">
                              <label for="talentCheckbox4"></label>
                            </div>
                          </td>
                          <td class="text-blue">肖允瀚</td>
                          <td>男</td>
                          <td>未认证</td>
                          <td>15212234876</td>
                          <td>
                            上岗次数: 2022&nbsp;&nbsp;&nbsp;&nbsp;
                            放鸽子数:2022&nbsp;&nbsp;&nbsp;&nbsp;
                            取消次数: 2202&nbsp;&nbsp;&nbsp;&nbsp;
                            早退次数:2202
                          </td>
                          <td class="text-center"><i class="fa fa-plus-circle"></i></td>
                        </tr>
                        <!-- 新起一行 -->
                        <tr>
                          <td>
                            <!-- <input type="checkbox" name="" class="chk"> -->
                            <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                              <input id="talentCheckbox5" type="checkbox">
                              <label for="talentCheckbox5"></label>
                            </div>
                          </td>
                          <td class="text-blue">肖允瀚</td>
                          <td>男</td>
                          <td>未认证</td>
                          <td>15212234876</td>
                          <td>
                            上岗次数: 2022&nbsp;&nbsp;&nbsp;&nbsp;
                            放鸽子数:2022&nbsp;&nbsp;&nbsp;&nbsp;
                            取消次数: 2202&nbsp;&nbsp;&nbsp;&nbsp;
                            早退次数:2202
                          </td>
                          <td class="text-center"><i class="fa fa-plus-circle"></i></td>
                        </tr>
                        <!-- 新起一行 -->
                        <tr>
                          <td>
                            <!-- <input type="checkbox" name="" class="chk"> -->
                            <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                              <input id="talentCheckbox6" type="checkbox">
                              <label for="talentCheckbox6"></label>
                            </div>
                          </td>
                          <td class="text-blue">肖允瀚</td>
                          <td>男</td>
                          <td>未认证</td>
                          <td>15212234876</td>
                          <td>
                            上岗次数: 2022&nbsp;&nbsp;&nbsp;&nbsp;
                            放鸽子数:2022&nbsp;&nbsp;&nbsp;&nbsp;
                            取消次数: 2202&nbsp;&nbsp;&nbsp;&nbsp;
                            早退次数:2202
                          </td>
                          <td class="text-center"><i class="fa fa-plus-circle"></i></td>
                        </tr>
                        <!-- 新起一行 -->
                        <tr>
                          <td>
                            <!-- <input type="checkbox" name="" class="chk"> -->
                            <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                              <input id="talentCheckbox7" type="checkbox">
                              <label for="talentCheckbox7"></label>
                            </div>
                          </td>
                          <td class="text-blue">肖允瀚</td>
                          <td>男</td>
                          <td>未认证</td>
                          <td>15212234876</td>
                          <td>
                            上岗次数: 2022&nbsp;&nbsp;&nbsp;&nbsp;
                            放鸽子数:2022&nbsp;&nbsp;&nbsp;&nbsp;
                            取消次数: 2202&nbsp;&nbsp;&nbsp;&nbsp;
                            早退次数:2202
                          </td>
                          <td class="text-center"><i class="fa fa-plus-circle"></i></td>
                        </tr>
                        <!-- 新起一行 -->
                        <tr>
                          <td>
                            <!-- <input type="checkbox" name="" class="chk"> -->
                            <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                              <input id="talentCheckbox8" type="checkbox">
                              <label for="talentCheckbox8"></label>
                            </div>
                          </td>
                          <td class="text-blue">肖允瀚</td>
                          <td>男</td>
                          <td>未认证</td>
                          <td>15212234876</td>
                          <td>
                            上岗次数: 2022&nbsp;&nbsp;&nbsp;&nbsp;
                            放鸽子数:2022&nbsp;&nbsp;&nbsp;&nbsp;
                            取消次数: 2202&nbsp;&nbsp;&nbsp;&nbsp;
                            早退次数:2202
                          </td>
                          <td class="text-center"><i class="fa fa-plus-circle"></i></td>
                        </tr>
                        <!-- 新起一行 -->
                        <tr>
                          <td>
                            <!-- <input type="checkbox" name="" class="chk"> -->
                            <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                              <input id="talentCheckbox9" type="checkbox">
                              <label for="talentCheckbox9"></label>
                            </div>
                          </td>
                          <td class="text-blue">肖允瀚</td>
                          <td>男</td>
                          <td>未认证</td>
                          <td>15212234876</td>
                          <td>
                            上岗次数: 2022&nbsp;&nbsp;&nbsp;&nbsp;
                            放鸽子数:2022&nbsp;&nbsp;&nbsp;&nbsp;
                            取消次数: 2202&nbsp;&nbsp;&nbsp;&nbsp;
                            早退次数:2202
                          </td>
                          <td class="text-center"><i class="fa fa-plus-circle"></i></td>
                        </tr>                                                            
                      </tbody>
                      </table>
                      <!-- 表格 -->
                      <div class="pull-left bottom-btn-group">
                        <div class="checkbox checkbox-info checkbox-inline">
                          <input id="talentCheckbox0" name="full-select" type="checkbox">
                          <label for="talentCheckbox0">全选</label>
                        </div>
                        <button type="button" class="btn">
                          导出
                        </button>
                        <button type="button" class="btn">
                          删除
                        </button>
                        <button type="button" class="btn">
                          提升为督导
                        </button>
                        <button type="button" class="btn">
                          加人黑名单
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
                    <div class="tab-pane fade" id="example-search-blacklist">
                      <!-- 表格 -->
                      <table class="f-tab table-hover table-condensed table-striped table-bordered table dataTable" id="hidden-table-info" aria-describedby="hidden-table-info_info">
                       <thead>
                          <tr role="row">
                            <th>&nbsp;</th>
                            <th>基本信息</th>
                            <th>性别</th>
                            <th>实名认证</th>
                            <th>手机号</th>
                            <th>平台信誉</th>
                            <th>评价/工作记录</th>
                          </tr>
                       </thead>
                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                        <!-- 新起一行 -->
                        <tr>
                          <td>
                            <!-- <input type="checkbox" name="" class="chk"> -->
                            <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                              <input id="blacklistCheckbox1" type="checkbox">
                              <label for="blacklistCheckbox1"></label>
                            </div>
                          </td>
                          <td class="text-blue">肖允瀚</td>
                          <td>男</td>
                          <td>未认证</td>
                          <td>15212234876</td>
                          <td>
                            上岗次数: 2022&nbsp;&nbsp;&nbsp;&nbsp;
                            放鸽子数:2022&nbsp;&nbsp;&nbsp;&nbsp;
                            取消次数: 2202&nbsp;&nbsp;&nbsp;&nbsp;
                            早退次数:2202
                          </td>
                          <td class="text-center"><i class="fa fa-plus-circle"></i></td>
                        </tr>
                        <!-- 新起一行 -->
                        <tr>
                          <td>
                            <!-- <input type="checkbox" name="" class="chk"> -->
                            <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                              <input id="blacklistCheckbox2" type="checkbox">
                              <label for="blacklistCheckbox2"></label>
                            </div>
                          </td>
                          <td class="text-blue">肖允瀚</td>
                          <td>男</td>
                          <td>未认证</td>
                          <td>15212234876</td>
                          <td>
                            上岗次数: 2022&nbsp;&nbsp;&nbsp;&nbsp;
                            放鸽子数:2022&nbsp;&nbsp;&nbsp;&nbsp;
                            取消次数: 2202&nbsp;&nbsp;&nbsp;&nbsp;
                            早退次数:2202
                          </td>
                          <td class="text-center"><i class="fa fa-plus-circle"></i></td>
                        </tr>
                        <!-- 新起一行 -->
                        <tr>
                          <td>
                            <!-- <input type="checkbox" name="" class="chk"> -->
                            <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                              <input id="blacklistCheckbox3" type="checkbox">
                              <label for="blacklistCheckbox3"></label>
                            </div>
                          </td>
                          <td class="text-blue">肖允瀚</td>
                          <td>男</td>
                          <td>未认证</td>
                          <td>15212234876</td>
                          <td>
                            上岗次数: 2022&nbsp;&nbsp;&nbsp;&nbsp;
                            放鸽子数:2022&nbsp;&nbsp;&nbsp;&nbsp;
                            取消次数: 2202&nbsp;&nbsp;&nbsp;&nbsp;
                            早退次数:2202
                          </td>
                          <td class="text-center"><i class="fa fa-plus-circle"></i></td>
                        </tr>
                        <!-- 新起一行 -->
                        <tr>
                          <td>
                            <!-- <input type="checkbox" name="" class="chk"> -->
                            <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                              <input id="blacklistCheckbox4" type="checkbox">
                              <label for="blacklistCheckbox4"></label>
                            </div>
                          </td>
                          <td class="text-blue">肖允瀚</td>
                          <td>男</td>
                          <td>未认证</td>
                          <td>15212234876</td>
                          <td>
                            上岗次数: 2022&nbsp;&nbsp;&nbsp;&nbsp;
                            放鸽子数:2022&nbsp;&nbsp;&nbsp;&nbsp;
                            取消次数: 2202&nbsp;&nbsp;&nbsp;&nbsp;
                            早退次数:2202
                          </td>
                          <td class="text-center"><i class="fa fa-plus-circle"></i></td>
                        </tr>
                        <!-- 新起一行 -->
                        <tr>
                          <td>
                            <!-- <input type="checkbox" name="" class="chk"> -->
                            <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                              <input id="blacklistCheckbox5" type="checkbox">
                              <label for="blacklistCheckbox5"></label>
                            </div>
                          </td>
                          <td class="text-blue">肖允瀚</td>
                          <td>男</td>
                          <td>未认证</td>
                          <td>15212234876</td>
                          <td>
                            上岗次数: 2022&nbsp;&nbsp;&nbsp;&nbsp;
                            放鸽子数:2022&nbsp;&nbsp;&nbsp;&nbsp;
                            取消次数: 2202&nbsp;&nbsp;&nbsp;&nbsp;
                            早退次数:2202
                          </td>
                          <td class="text-center"><i class="fa fa-plus-circle"></i></td>
                        </tr>
                        <!-- 新起一行 -->
                        <tr>
                          <td>
                            <!-- <input type="checkbox" name="" class="chk"> -->
                            <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                              <input id="blacklistCheckbox6" type="checkbox">
                              <label for="blacklistCheckbox6"></label>
                            </div>
                          </td>
                          <td class="text-blue">肖允瀚</td>
                          <td>男</td>
                          <td>未认证</td>
                          <td>15212234876</td>
                          <td>
                            上岗次数: 2022&nbsp;&nbsp;&nbsp;&nbsp;
                            放鸽子数:2022&nbsp;&nbsp;&nbsp;&nbsp;
                            取消次数: 2202&nbsp;&nbsp;&nbsp;&nbsp;
                            早退次数:2202
                          </td>
                          <td class="text-center"><i class="fa fa-plus-circle"></i></td>
                        </tr>
                        <!-- 新起一行 -->
                        <tr>
                          <td>
                            <!-- <input type="checkbox" name="" class="chk"> -->
                            <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                              <input id="blacklistCheckbox7" type="checkbox">
                              <label for="blacklistCheckbox7"></label>
                            </div>
                          </td>
                          <td class="text-blue">肖允瀚</td>
                          <td>男</td>
                          <td>未认证</td>
                          <td>15212234876</td>
                          <td>
                            上岗次数: 2022&nbsp;&nbsp;&nbsp;&nbsp;
                            放鸽子数:2022&nbsp;&nbsp;&nbsp;&nbsp;
                            取消次数: 2202&nbsp;&nbsp;&nbsp;&nbsp;
                            早退次数:2202
                          </td>
                          <td class="text-center"><i class="fa fa-plus-circle"></i></td>
                        </tr>
                        <!-- 新起一行 -->
                        <tr>
                          <td>
                            <!-- <input type="checkbox" name="" class="chk"> -->
                            <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                              <input id="blacklistCheckbox8" type="checkbox">
                              <label for="blacklistCheckbox8"></label>
                            </div>
                          </td>
                          <td class="text-blue">肖允瀚</td>
                          <td>男</td>
                          <td>未认证</td>
                          <td>15212234876</td>
                          <td>
                            上岗次数: 2022&nbsp;&nbsp;&nbsp;&nbsp;
                            放鸽子数:2022&nbsp;&nbsp;&nbsp;&nbsp;
                            取消次数: 2202&nbsp;&nbsp;&nbsp;&nbsp;
                            早退次数:2202
                          </td>
                          <td class="text-center"><i class="fa fa-plus-circle"></i></td>
                        </tr>
                        <!-- 新起一行 -->
                        <tr>
                          <td>
                            <!-- <input type="checkbox" name="" class="chk"> -->
                            <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                              <input id="blacklistCheckbox9" type="checkbox">
                              <label for="blacklistCheckbox9"></label>
                            </div>
                          </td>
                          <td class="text-blue">肖允瀚</td>
                          <td>男</td>
                          <td>未认证</td>
                          <td>15212234876</td>
                          <td>
                            上岗次数: 2022&nbsp;&nbsp;&nbsp;&nbsp;
                            放鸽子数:2022&nbsp;&nbsp;&nbsp;&nbsp;
                            取消次数: 2202&nbsp;&nbsp;&nbsp;&nbsp;
                            早退次数:2202
                          </td>
                          <td class="text-center"><i class="fa fa-plus-circle"></i></td>
                        </tr>                                                            
                      </tbody>
                      </table>
                      <!-- 表格end -->
                      <div class="pull-left bottom-btn-group">
                        <div class="checkbox checkbox-info checkbox-inline">
                          <input id="blacklistCheckbox0" name="full-select" type="checkbox">
                          <label for="blacklistCheckbox0">全选</label>
                        </div>
                        <button type="button" class="btn">
                          导出
                        </button>
                        <button type="button" class="btn">
                          删除
                        </button>
                        <button type="button" class="btn">
                          移到人才库
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
      
    <!-- END JS -->
  </body>
</html>