﻿<!DOCTYPE html>
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
          <h3><a href="submit.html">格里芬<span>租车</span></a></h3>
          <h2><a href="submit.html">租车新体验</a></h2>
        </div>
      </div>
      <div class="col-sm-9 col-xs-8">
        <div class="b-nav__list wow slideInRight" data-wow-delay="0.3s">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div class="collapse navbar-collapse navbar-main-slide" id="nav">
            <ul class="navbar-nav-menu">
              <li><a href="submit.html">首页</a></li>
              
              <li><a href="submit.html">订单查询</a></li>
	
              <li><a href="contacts.html">退出登录</a></li>
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
            </div>
        </div>
      </div>
      <div class="item"> <img src="media/main-slider/2.jpg" alt="sliderImg" />
        <div class="container">
          <div class="carousel-caption b-slider__info">
            <h3>Find your dream</h3>
            <h2>来租车吧！</h2> </div>
        </div>
      </div>
      <div class="item"> <img src="media/main-slider/3.jpg"  alt="sliderImg">
        <div class="container">
          <div class="carousel-caption b-slider__info">
            <h3>Find your dream</h3>
            <h2>来租车吧！</h2> </div>
        </div>
      </div>
    </div>
    <a class="carousel-control right" href="#carousel" data-slide="next"> <span class="fa fa-angle-right m-control-right"></span> </a> <a class="carousel-control left" href="#carousel" data-slide="prev"> <span class="fa fa-angle-left m-control-left"></span> </a> </div>
</section>
<!--b-slider--> 
<!--b-search-->

<section class="b-featured">
  <div class="container">
    <h2 class="s-title wow zoomInUp" data-wow-delay="0.3s">Featured Vehicles</h2>
<!--	  begin-->
	          <div class="data-div">
            <div class="row tableHeader"> 
            <!--	col-lg-几就是几个宽度，bootstrap里面定义的-->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 "> 车辆编号 </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"> 车牌号 </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"> 车辆型号 </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"> 每日租金 </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"> 车辆状态 </div>
            <!--3个宽度来操作-->
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"> 操作 </div>
          </div>
            <div class="tablebody"> 
            
            <!-- 每一行-->
            <div class="row">
                <div class="col-xs-1 "> 1 </div>
                <div class="col-xs-2"> sdf </div>
                <div class="col-xs-2"> sdf </div>
                <div class="col-xs-2"> 13688889999 </div>
                <div class="col-xs-2"> 875 </div>
                <!--					按钮-->
                <div class="col-xs-3">
                <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#viewSource">查看详细</button>
                <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#changeSource">修改</button>
                <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteSource">删除</button>
              </div>
              </div>
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
								<div class="b-footer__content-social">
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