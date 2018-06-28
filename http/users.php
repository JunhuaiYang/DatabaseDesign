<!DOCTYPE html>

<?php
  //连接数据库
include "php/conn_db.php";
  //登录检测
session_start();
if (empty($_SESSION['login'])) {
  echo "<script>alert('你还没有登录！不能访问该页面！');history.go(-1);</script>";
  exit;
}
//权限检测
if($_SESSION['type'] != 'users'){
  echo "<script>alert('你没有权限访问该页面！');history.go(-1);</script>";
  exit;
}
  //获得用户名
$username = $_SESSION['user'];

//获得用户信息
$sql_ad = "select * from users where username = '" . $username . "'";
//查询数据库
$retval = mysqli_query($conn, $sql_ad);
if (!$retval) {
  die('无法读取数据: ' . mysqli_error($conn));
}
//取得结果
$row = mysqli_fetch_array($retval, MYSQLI_ASSOC);
$uid = $row['uid'];
$uname = $row['uname'];
//设置uid
$_SESSION['uid'] = $uid;
$_SESSION['uname'] = $uname;


//smarty
require 'admin/smarty/libs/Smarty.class.php';
//记录ip
require_once "php/get_ip.php";


?>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home</title>
<link href="css/master.css" rel="stylesheet">

<!-- SWITCHER -->
<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color1.css" title="color1" media="all"  />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color2.css" title="color2" media="all" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color3.css" title="color3" media="all" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color4.css" title="color4" media="all" data-default-color="true"/>
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color5.css" title="color5" media="all" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color6.css" title="color6" media="all" />

	  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/flat-ui.min.css" />
  <link rel="stylesheet" type="text/css" href="css/jquery.nouislider.css">
	<link rel="stylesheet" type="text/css" href="css/common.css" />
  <link rel="stylesheet" type="text/css" href="css/slide.css" />
	
<!--[if lt IE 9]>
		<script src="/oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="/oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>
<body class="m-index" data-scrolling-animations="true" data-equal-height=".b-auto__main-item">

<!-- Loader -->
<div id="page-preloader"><span class="spinner"></span></div>
<!-- Loader end --> 


<!--b-topBar-->

<header class="b-nav">
  <div class="container">
    <div class="row">
      <div class="col-sm-3 col-xs-4">
        <div class="b-nav__logo wow slideInLeft" data-wow-delay="0.3s">
          <h3><a href="users.php">格里芬<span>租车</span></a></h3>
          <h2><a href="users.php">租车新体验</a></h2>
        </div>
      </div>
      <div class="col-sm-9 col-xs-8">
        <div class="b-nav__list wow slideInRight" data-wow-delay="0.3s">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div class="collapse navbar-collapse navbar-main-slide" id="nav">
            <ul class="navbar-nav-menu">
            <li>欢迎你：<a>
              <?php
              echo $uname;
              ?>
            </a></li>
              <li><a href="users.php">首页</a></li>
              
              <li><a href="rental.php">订单查询</a></li>
	
              <li><a href="php/users_signout.php">退出登录</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!--b-nav-->

<section class="b-slider">
  <div id="carousel" class="slide carousel carousel-fade">
    <div class="carousel-inner">
      <div class="item active"> <img src="media/main-slider/1.jpg" alt="sliderImg" />
        <div class="container">
          <div class="carousel-caption b-slider__info">
            <h3>Find your dream</h3>
            <h2>来租车吧！</h2>
            <h5>加入会员 享受九折优惠</h5>
            </div>
        </div>
      </div>
      <div class="item"> <img src="media/main-slider/2.jpg" alt="sliderImg" />
        <div class="container">
          <div class="carousel-caption b-slider__info">
            <h3>Find your dream</h3>
            <h2>来租车吧！</h2> </div>
            <h4>加入会员 享受九折优惠</h4>
        </div>
      </div>
      <div class="item"> <img src="media/main-slider/3.jpg"  alt="sliderImg">
        <div class="container">
          <div class="carousel-caption b-slider__info">
            <h3>Find your dream</h3>
            <h2>来租车吧！</h2> </div>
            <h4>加入会员 享受九折优惠</h4>
        </div>
      </div>
    </div>
    <a class="carousel-control right" href="#carousel" data-slide="next"> <span class="fa fa-angle-right m-control-right"></span> </a> <a class="carousel-control left" href="#carousel" data-slide="prev"> <span class="fa fa-angle-left m-control-left"></span> </a> </div>
</section>
<!--b-slider--> 
<!--b-search-->

<section class="b-featured">
  <div class="container">
    <h2 class="s-title wow zoomInUp" data-wow-delay="0.3s">车辆列表</h2>
<!--	  begin-->
	          <div class="data-div">
            <div class="row tableHeader"> 
            <!--	col-lg-几就是几个宽度，bootstrap里面定义的-->
            <div class="col-xs-1"> 车辆编号 </div>
            <div class="col-xs-2"> 车牌号 </div>
            <div class="col-xs-1"> 车辆品牌 </div>
            <div class="col-xs-1"> 车辆型号 </div>
            <div class="col-xs-1"> 车辆颜色 </div>
            <div class="col-xs-1"> 排量 </div>
            <div class="col-xs-1"> 燃油类型 </div>
            <div class="col-xs-2"> 出厂日期 </div>
            <div class="col-xs-1"> 每日租金 </div>

            <div class="col-xs-1"> 操作 </div>
          </div>
            <div class="tablebody"> 
            
            <!-- 每一行-->
            <?php

            class car_reset
            {
              public $cid;
              public $cplant;
              public $cbrand;
              public $cmodel;
              public $cstate;
              public $crent;
              public $ccolor;
              public $cvolume;
              public $cdate;
              public $coil;
              public $cnote;
            }

            $temp_car = new car_reset();
            $smarty_new_car = new Smarty();

            $sarch_car = "SELECT * FROM car_rental.car where cstatus = 0";

            $retval = mysqli_query($conn, $sarch_car);
            if (!$retval) {
              die('无法读取数据: ' . mysqli_error($conn));
            }

            while ($row = mysqli_fetch_assoc($retval)) {
              $temp_car->cid = $row['cid'];
              $temp_car->cplant = $row['cplant'];
              $temp_car->cbrand = $row['cbrand'];
              $temp_car->cmodel = $row['cmodel'];
              $temp_car->cstate = $row['cstate'];
              $temp_car->crent = $row['crent'];
              $temp_car->ccolor = $row['ccolor'];
              $temp_car->cvolume = $row['cvolume'];
              $temp_car->cdate = $row['cdate'];
              $temp_car->coil = $row['coil'];
              $temp_car->cnote = $row['cnote'];

              $smarty_new_car->assign('temp', $temp_car);
              $smarty_new_car->display('user_car.tpl');
            }


            ?>
          </div>
          </div>
	  
</div>
</section>
<!--b-featured--> <!--b-welcome--> <!--b-world--> <!--b-asks--> <!--b-auto--> <!--b-count--> <!--b-contact--> <!--b-review--> <!--b-features--> 
<!--b-info-->

<footer class="b-footer"> <a id="to-top" href="#this-is-top"><i class="fa fa-chevron-up"></i></a>
  <div class="container">
    <div class="row">
      <div class="col-xs-4">
        <div class="b-footer__company wow fadeInLeft" data-wow-delay="0.3s">
          <div class="b-nav__logo">
            <h3><a href="index.html">格里芬<span>租车</span></a></h3>
          </div>
          <p>Copyright &copy; 2018.YangJunhuai All rights reserved.</p>
        </div>
      </div>
      <div class="col-xs-8">
			<div class="b-footer__content wow zoomInRight" data-wow-delay="0.5s">
								<div class="b-footer__content-social">项目地址：
									<a href="#https://github.com/JunhuaiYang"><span class="fa fa-github"></span></a>
								</div>
</div>
						</div>
    </div>
  </div>
</footer>
<!--b-footer--> 
<!--Main--> 
<script src="js/jquery-1.11.3.min.js"></script> 
<script src="js/jquery-ui.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/modernizr.custom.js"></script> 
<script src="assets/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js"></script> 
<script src="js/waypoints.min.js"></script> 
<script src="js/jquery.easypiechart.min.js"></script> 
<script src="js/classie.js"></script> 

<!--Switcher--> 
<script src="assets/switcher/js/switcher.js"></script> 
<!--Owl Carousel--> 
<script src="assets/owl-carousel/owl.carousel.min.js"></script> 
<!--bxSlider--> 
<script src="assets/bxslider/jquery.bxslider.js"></script> 
<!-- jQuery UI Slider --> 
<script src="assets/slider/jquery.ui-slider.js"></script> 

<!--Theme--> 
<script src="js/jquery.smooth-scroll.js"></script> 
<script src="js/wow.min.js"></script> 
<script src="js/jquery.placeholder.min.js"></script> 
<script src="js/theme.js"></script>
</body>
</html>