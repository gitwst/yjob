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
    <link href="http://static.yjob.net/Admin/css/bootstrap.min.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
    <link href="http://static.yjob.net/Admin/css/bootstrap-reset.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
    <link href="http://static.yjob.net/Admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet"><!-- FONT AWESOME ICON CSS -->
    <link href="http://static.yjob.net/Admin/css/style.css" rel="stylesheet"><!-- THEME BASIC CSS -->
    <link href="http://static.yjob.net/Admin/css/style-responsive.css" rel="stylesheet"><!-- THEME RESPONSIVE CSS -->
    <link href="http://static.yjob.net/Admin/assets/morris.js-0.4.3/morris.css" rel="stylesheet"><!-- MORRIS CHART CSS -->
    <!--dashboard calendar-->
    <link href="http://static.yjob.net/Admin/css/clndr.css" rel="stylesheet"><!-- CALENDER CSS -->
    <link href="http://static.yjob.net/Admin/css/css.css" rel="stylesheet">
    <script type="text/javascript" src="http://static.yjob.net/Admin/js/echarts.js" ></script><!-- ECHARTS JS  图表js库-->
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=1.3"></script>
    <script type="text/javascript" src="http://static.yjob.net/Admin/js/jquery.min.js"></script>
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
          <img src="http://static.yjob.net/Admin/img/images/header_06.png" alt="">
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
                      <img alt="avatar" src="http://static.yjob.net/Admin/img/avatar-mini.jpg">
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
                      <img alt="avatar" src="http://static.yjob.net/Admin/img/avatar-mini2.jpg">
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
                      <img alt="avatar" src="http://static.yjob.net/Admin/img/avatar-mini3.jpg">
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
                      <img alt="avatar" src="http://static.yjob.net/Admin/img/avatar-mini4.jpg">
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
                <img alt="" src="http://static.yjob.net/Admin/img/avatar1_small.jpg">
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
            <div class="un-right-padding col-lg-8 qycol-lg-8">
                <div class="col-lg-4 col-sm-6">
                  <section class="panel qypanel">
                    <div class="task-thumb qytask-thumb">
                      <img src="/Public/admin/img/images/main_07.gif" alt="">
                    </div>
                    <div class="value">
                      <div class="text-left">已发布的职位：8</div>
                      <p>
                        <ul class="list-inline text-left">
                          <li><a class="text-primary" href="">查看</a></li>&nbsp;|
                          <li><a class="text-primary" href="">管理</a></li>&nbsp;|
                          <li><a class="text-primary " href="">发布</a></li>
                        </ul>
                      </p>
                    </div>
                  </section>
                </div>
                <div class="col-lg-4 col-sm-6">
                  <section class="panel qypanel">
                    <div class="task-thumb qytask-thumb">
                      <img src="/Public/admin/img/images/main_10.gif" alt="">
                    </div>
                    <div class="value">
                      <div class="text-left">简历库：3220</div>
                      <p>
                        <ul class="list-inline text-left">
                          <li><a class="text-primary" href="">查看</a></li>&nbsp;|
                          <li><a class="text-primary" href="">管理</a></li>&nbsp;|
                          <li><a class="text-primary" href="">审核</a></li>
                        </ul>
                      </p>
                    </div>
                  </section>
                </div>
                <div class="un-right-padding col-lg-4 col-sm-6">
                  <section class="panel qypanel">
                    <div class="task-thumb qytask-thumb">
                      <img src="/Public/admin/img/images/main_12.gif" alt="">
                    </div>
                    <div class="value">
                      <div class="text-left">督导人才库：21</div>
                      <p>
                        <ul class="list-inline text-left">
                          <li><a class="text-primary" href="">查看</a></li>&nbsp;|
                          <li><a class="text-primary" href="">管理</a></li>&nbsp;|
                          <li><a class="text-primary" href="">审核</a></li>
                        </ul>
                      </p>
                    </div>
                  </section>
                </div>
            <div class="col-sm-12 un-right-padding">
                     <section class="panel ">
                       <div class="tablediv">
                        <table class="table table-responsive table-striped table-hover table330" cellpadding="0" cellspacing="0">
                           <thead class="table-header">
                              <tr>
                                 <th class="padleft">职位管理</th>
                                 <th></th>
                                 <th></th>
                                 <th class="text-left see-all"><a href="">查看全部>></a></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class="padleft">职位名称</td>
                                 <td>编号</td>
                                 <td>未读简历</td>
                                 <td class="text-left table-opera">操作</td>
                              </tr>
                              <tr>
                                 <td class="text-primary padleft">云兼职大总监</td>
                                 <td>9507</td>
                                 <td class="text-danger">0</td>
                                 <td class="text-left"><a class="text-primary" href="">点击查看</a></td>
                              </tr>
                              <tr>
                                 <td class="text-primary padleft">云兼职大总监</td>
                                 <td>9507</td>
                                 <td class="text-danger">0</td>
                                 <td class="text-left"><a class="text-primary" href="">点击查看</a></td>
                              </tr>
                              <tr>
                                 <td class="text-primary padleft">云兼职大总监</td>
                                 <td>9507</td>
                                 <td class="text-danger">0</td>
                                 <td class="text-left"><a class="text-primary" href="">点击查看</a></td>
                              </tr>
                              <tr>
                                 <td class="text-primary padleft">云兼职大总监</td>
                                 <td>9507</td>
                                 <td class="text-danger">0</td>
                                 <td class="text-left"><a class="text-primary" href="">点击查看</a></td>
                              </tr>
                              <tr>
                                 <td class="text-primary padleft">云兼职大总监</td>
                                 <td>9507</td>
                                 <td class="text-danger">0</td>
                                 <td class="text-left"><a class="text-primary" href="">点击查看</a></td>
                              </tr>

                           </tbody>
                        </table>
                       </div>
                     </section>
                  </div>
            <div class="un-right-padding col-lg-12 col-sm-6 data-div">
              <div class="panel">
                <div id="data" style="width: 100%;height:400px;"></div>
                  <script type="text/javascript">
                      // 基于准备好的dom，初始化echarts实例
                      var myChart = echarts.init(document.getElementById('data'));

                      // 指定图表的配置项和数据
                      var option = {
                                  title: {
                                      text: '数据统计'
                                  },
                                  tooltip: {
                                      trigger: 'axis'
                                  },
                                  grid: {
                                    left: '5%',
                                    right: '5%'
                                  },
                                  legend: {
                                      data:[{
                                        name: '需求人数',
                                        textStyle: {
                                          color: "#7266ba",
                                        },
                                      }, 
                                      {
                                        name: '应聘人数',
                                        textStyle: {
                                          color: "#23b7e5",
                                        },
                                      }, 
                                      {
                                        name: '到岗人数',
                                        textStyle: {
                                          color: "#fad733",
                                        },
                                      }, '需求人数','应聘人数','到岗人数'],
                                  },
                                  toolbox: {
                                      show: true,
                                      feature: {
                                          // dataZoom: {
                                          //     yAxisIndex: 'none'
                                          // },
                                          dataView: {readOnly: false},
                                          magicType: {type: ['line', 'bar']},
                                          restore: {},
                                          saveAsImage: {}
                                      }
                                  },
                                  xAxis:  {
                                      type: 'category',
                                      boundaryGap: false,
                                      data: [
                                      '10月20日','10月21日','10月22日','10月23日','10月24日','10月25日','10月26日',
                                      '10月27日','10月28日','10月29日','10月30日','10月31日'
                                      ]
                                  },
                                  yAxis: {
                                      type: 'value',
                                      axisLabel: {
                                          formatter: '{value}'
                                      }
                                  },
                                  series: [
                                      {
                                          name:'需求人数',
                                          type:'line',
                                          data:[
                                          11, 1, 34, 1, 8, 7, 34,
                                          18, 1, 21, 2, 7
                                          ],
                                           itemStyle : {
                                              normal : {
                                                  color:'#7266ba',
                                                  lineStyle:{
                                                      color:'#7266ba'  
                                                  }  
                                              }  
                                          }, 
                                          // markPoint: {
                                          //     data: [
                                          //         {type: 'max', name: '最大值'},
                                          //         {type: 'min', name: '最小值'}
                                          //     ]
                                          // },
                                          // markLine: {
                                          //     data: [
                                          //         {type: 'average', name: '平均值'}
                                          //     ]
                                          // }
                                      },
                                      {
                                          name:'应聘人数',
                                          type:'line',
                                          data:[
                                          11, 1, 14, 11, 18, 7, 37,
                                          11, 21, 14, 5, 8
                                          ],
                                          itemStyle : {
                                              normal : {
                                                  color:'#23b7e5',
                                                  lineStyle:{
                                                      color:'#23b7e5'  
                                                  }  
                                              }  
                                          },
                                          // markPoint: {
                                          //     data: [
                                          //         {type: 'max', name: '最大值'},
                                          //         {type: 'min', name: '最小值'}
                                          //     ]
                                          // },
                                          // markLine: {
                                          //     data: [
                                          //         {type: 'average', name: '平均值'}
                                          //     ]
                                          // }
                                      },
                                      {
                                          name:'到岗人数',
                                          type:'line',
                                          data:[
                                          11, 18, 14, 11, 1, 7, 37,
                                          17, 17, 11, 5, 7
                                          ],
                                          itemStyle : {
                                              normal : {
                                                  color:'#f5bf58',
                                                  lineStyle:{  
                                                      color:'#f5bf58'  
                                                  }  
                                              }  
                                          },
                                          // markPoint: {
                                          //     data: [
                                          //         {name: '周最低', value: -2, xAxis: 1, yAxis: -1.5}
                                          //     ]
                                          // },
                                          // markLine: {
                                          //     data: [
                                          //         {type: 'average', name: '平均值'},
                                          //         [{
                                          //             symbol: 'none',
                                          //             x: '90%',
                                          //             yAxis: 'max'
                                          //         }, {
                                          //             symbol: 'circle',
                                          //             label: {
                                          //                 normal: {
                                          //                     position: 'start',
                                          //                     formatter: '最大值'
                                          //                 }
                                          //             },
                                          //             type: 'max',
                                          //             name: '最高点'
                                          //         }]
                                          //     ]
                                          // }
                                      }
                                  ]
                              };
                      // 使用刚指定的配置项和数据显示图表。
                      myChart.setOption(option);
                  </script>
              </div>
            </div>
            </div>

            <div class="col-lg-4">
                <div class="col-lg-12 col-sm-6">
                <section class="panel height392">
                    <h4 class="h4 qyh4">人才推荐</h4>
                    <div class="qytuijian">
                      <div class="task-thumb">
                        <a href=""><img src="/Public/admin/img/avatar1.jpg" alt="图片加载失败"></a>
                      </div>
                      <div class="value value_width">
                        <div class="col-lg-12 text-left font-color-black"><a class="font-yahei" href="">梦游</a></div>
                        <div class="col-lg-6 text-left">上岗次数：20</div>
                        <div class="col-lg-6 text-left un-padding">上次登录：1分钟前</div>
                      </div>
                      <div class="hr"></div>
                    </div>
                    <div class="qytuijian">
                      <div class="task-thumb">
                        <a href=""><img src="/Public/admin/img/avatar1.jpg" alt="图片加载失败"></a>
                      </div>
                      <div class="value value_width">
                        <div class="col-lg-12 text-left font-color-black"><a class="font-yahei" href="">梦游</a></div>
                        <div class="col-lg-6 text-left">上岗次数：20</div>
                        <div class="col-lg-6 text-left un-padding">上次登录：50分钟前</div>
                      </div>
                      <div class="hr"></div>
                    </div>
                    <div class="qytuijian">
                      <div class="task-thumb">
                        <a href=""><img src="/Public/admin/img/avatar1.jpg" alt="图片加载失败"></a>
                      </div>
                      <div class="value value_width">
                        <div class="col-lg-12 text-left font-color-black"><a class="font-yahei" href="">梦游</a></div>
                        <div class="col-lg-6 text-left">上岗次数：20</div>
                        <div class="col-lg-6 text-left un-padding">上次登录：5小时前</div>
                      </div>
                      <div class="hr"></div>
                    </div>
                    <div class="qytuijian">
                      <div class="task-thumb">
                        <a href=""><img src="/Public/admin/img/avatar1.jpg" alt="图片加载失败"></a>
                      </div>
                      <div class="value value_width">
                        <div class="col-lg-12 text-left font-color-black"><a class="font-yahei" href="">梦游</a></div>
                        <div class="col-lg-6 text-left">上岗次数：20</div>
                        <div class="col-lg-6 text-left un-padding">上次登录：昨天</div>
                      </div>
                      <div class="hr"></div>
                    </div>
                    <div class="qytuijian">
                      <div class="task-thumb">
                        <a href=""><img src="/Public/admin/img/avatar1.jpg" alt="图片加载失败"></a>
                      </div>
                      <div class="value value_width">
                        <div class="col-lg-12 text-left font-color-black"><a class="font-yahei" href="">梦游</a></div>
                        <div class="col-lg-6 text-left">上岗次数：20</div>
                        <div class="col-lg-6 text-left un-padding">上次登录：2016/09/01</div>
                      </div>
                      <!-- <div class="hr"></div> -->
                    </div>
                </section>
              </div>
              <div class="col-lg-12 col-sm-6 right-notice">
                <section class="panel height410">
                    <h4 class="h4 qyh4 font-color-black">网站公告<a href=""><span>查看更多>></span></a></h4>
                    <ul class="list-unstyled li-gonggao">
                      <li><a class="text-danger font-overflow-hidden" href=""><b>· </b>云兼职新版APP上线了...</a><span class="text-danger">2016/10/26</span></li>
                      <li><a class="text-danger font-overflow-hidden" href=""><b>· </b>云兼职新版APP上线了...如果这部分的字太多了咋办？</a><span class="text-danger">2016/10/26</span></li>
                      <li><a class="font-color-black font-overflow-hidden" href=""><b>· </b>云兼职新版APP上线了...</a><span class="font-color-black">2016/10/26</span></li>
                      <li><a class="font-color-black font-overflow-hidden" href=""><b>· </b>云兼职新版APP上线了...</a><span class="font-color-black">2016/10/26</span></li>
                      <li><a class="font-color-black font-overflow-hidden" href=""><b>· </b>云兼职新版APP上线了...</a><span class="font-color-black">2016/10/26</span></li>
                      <li class="un-botton-line"><a class="font-color-black font-overflow-hidden" href=""><b>· </b>云兼职新版APP上线了...</a><span class="font-color-black">2016/10/26</span></li>
                    </ul>
                </section>
              </div>
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
    <script type="text/javascript" src="http://static.yjob.net/Admin/js/jquery-1.8.3.min.js" ></script><!-- BASIC JQUERY 1.8.3 LIB. JS -->
    <script src="http://static.yjob.net/Admin/js/bootstrap.min.js" ></script><!-- BOOTSTRAP JS -->
    <script src="http://static.yjob.net/Admin/js/jquery.dcjqaccordion.2.7.js"></script><!-- ACCORDIN JS -->
    <script src="http://static.yjob.net/Admin/js/jquery.scrollTo.min.js" ></script><!-- SCROLLTO JS -->
    <script src="http://static.yjob.net/Admin/js/jquery.nicescroll.js" ></script><!-- NICESCROLL JS -->
    <script src="http://static.yjob.net/Admin/js/respond.min.js" ></script><!-- RESPOND JS -->
    <script src="http://static.yjob.net/Admin/js/jquery.sparkline.js"></script><!-- SPARKLINE JS -->
    <script src="http://static.yjob.net/Admin/js/sparkline-chart.js"></script><!-- SPARKLINE CHART JS -->
    <script src="http://static.yjob.net/Admin/js/common-scripts.js"></script><!-- BASIC COMMON JS -->
    <script src="http://static.yjob.net/Admin/js/count.js"></script><!-- COUNT JS -->
    <!--Morris-->
    <script src="http://static.yjob.net/Admin/assets/morris.js-0.4.3/morris.min.js" ></script><!-- MORRIS JS -->
    <script src="http://static.yjob.net/Admin/assets/morris.js-0.4.3/raphael-min.js" ></script><!-- MORRIS  JS -->
    <script src="http://static.yjob.net/Admin/js/chart.js" ></script><!-- CHART JS -->
    <!--Calendar-->
    <script src="http://static.yjob.net/Admin/js/calendar/clndr.js"></script><!-- CALENDER JS -->
    <script src="http://static.yjob.net/Admin/js/calendar/evnt.calendar.init.js"></script><!-- CALENDER EVENT JS -->
    <script src="http://static.yjob.net/Admin/js/calendar/moment-2.2.1.js"></script><!-- CALENDER MOMENT JS -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script><!-- UNDERSCORE JS -->
    <script src="http://static.yjob.net/Admin/assets/jquery-knob/js/jquery.knob.js" ></script><!-- JQUERY KNOB JS -->
    <script src="http://static.yjob.net/Admin/js/btn-radio.js" ></script><!-- BTN_RADIO JS -->
      

      <!-- END  FOOTER -->
    
    <script >
    <script >
      //knob
      $(".knob").knob();
      
    </script>
      //knob
      $(".knob").knob();
      
    </script>
    <!-- END JS -->
  </body>
</html>