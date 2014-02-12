<?php

// no direct access
defined('_JEXEC') or die;

// TODO:响应式的scroll offset设置,解决使用resize时的performance问题
// TODO:将网页压缩html css js

// TODO:增加入门，可以仿制mac qq，用ajax作为loading主要页面内容的方式
// TODO:在每个service的图片上加入动画
// TODO:走马灯部分，用js计算宽高
// TODO:当有多张图片时加入走马灯，修改走马灯的indicator的形状css
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="网站APP设计开发 企业形象设计 用户体验优化 交互设计">
    <meta name="author" content="纵横启元">
    <link rel="shortcut icon" href="templates/<?php echo $this->template ?>/favicon.ico">

    <title>纵横启元 精于设计 勤于实现</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/bootstrap.min.css" type="text/css"/>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/s.css" type="text/css"/>
</head>

<body>
<!-- S-->
<div id="waypoint-navbar" class="navbar-wrapper">
    <div class="container">

        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container navbar-container">
                <!--Start mobile device-->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"></a>
                </div>
                <!--End mobile device-->
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li id="navbar-top" class="active"><a href="#waypoint-banner">首页</a></li>
                        <li id="navbar-service"><a href="#waypoint-service">服务</a></li>
                        <li id="navbar-about"><a href="#waypoint-about">关于</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- E-->

<!-- S -->
<div id="waypoint-banner">
    <div id="slogan_1" class="slogan" >&nbsp;</div>
    <div id="slogan_2" class="slogan" >&nbsp;</div>
    <div class="univ_1">&nbsp;</div>
</div>
<!-- E-->

<!-- S -->
<div id="waypoint-service" class="service">
<div class="container">
    <!-- START THE FEATURETTES -->

    <hr class="serivce-divider">

    <div class="row featurette">
        <div class="col-md-6">
            <img class="featurette-image img-responsive" src="templates/<?php echo $this->template ?>/images/apps.png" alt="App Outsourcing">
        </div>
        <div class="col-md-6">
            <h2 class="featurette-heading">网站/移动应用App <span class="text-muted">解决方案</span></h2>
            <p class="lead">网站策划、移动应用场景分析、界面设计、交互流程设计、动态场景设计、视觉设计、程序定制开发</p>
        </div>

    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-6 desktop-pull-right">
            <img class="featurette-image img-responsive" src="templates/<?php echo $this->template ?>/images/uiue.png" alt="UI UE Design">
        </div>
        <div class="col-md-6">
            <h2 class="featurette-heading">用户体验优化 <span class="text-muted">交互设计</span></h2>
            <p class="lead">交互流程分析、用户分析、技术可行性分析、信息架构再造、交互流程优化、UI/UE规范制定</p>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-6">
            <img class="featurette-image img-responsive" src="templates/<?php echo $this->template ?>/images/vi.png" alt="VI Design">
        </div>
        <div class="col-md-6">
            <h2 class="featurette-heading">企业定制设计 <span class="text-muted">平面设计</span></h2>
            <p class="lead">标志LOGO设计、VI设计、产品包装设计、商业空间设计、宣传册设计、相册设计、礼品包装设计、活动布展设计</p>
        </div>
    </div>

</div>
</div>
<!-- E -->


<!-- S -->
<footer id="waypoint-about" class="oxy-footer container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="email contact col-md-7">
                        <span class="contact-h">邮件: </span><a href="mailto:info@oxycolor.com">info@oxycolor.com</a>
                    </div>
                    <div class="qq contact col-md-5">
                        <span class="contact-h">QQ: </span><span class="contact-c-m">2863471878</span><a class="contact-c-w" href="tencent://message/?uin=2863471878&Site=&Menu=yes">2863471878</a>
                    </div>
                </div>
                <div class="row">
                    <div class="addr contact col-md-7">
                        <span class="contact-h">地址: </span><span>北京市朝阳区三间房东路1号25栋</span>
                    </div>
                    <div class="wc contact col-md-5">
                        <span class="contact-h">微信: </span><span>oxycolor</span>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="row ">
                    <div class="qr wc-qr col-md-6">&nbsp;</div>
                    <div class="qr web-qr col-md-6">&nbsp;</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 copyright">
                <span >&copy; 2014 Oxycolor Inc. All right reserved</span>
            </div>
        </div>
    </div>

</footer>
<!-- E -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="templates/<?php echo $this->template ?>/js/jquery-1.10.2.min.js"></script>
<script src="templates/<?php echo $this->template ?>/js/bootstrap.min.js"></script>
<script src="templates/<?php echo $this->template ?>/js/s.js"></script>

</body>
</html>
