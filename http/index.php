<?php
  //记录ip
  require_once "php/get_ip.php";
  //日志
  clientlog();
?>

<!DOCTYPE html>
<html class="no-js"> 
<head>
<meta charset="utf-8">

<title>用户登录</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="租车系统登录" />
<meta name="keywords" content="登录" />

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="shortcut icon" href="favicon.ico">
<link rel='stylesheet' href="css/google.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/style.css">

<!-- Modernizr JS -->
<script src="js/modernizr-2.6.2.min.js"></script>

<!-- myjs -->
<script src="js/myjs/signin.js"></script>

</head>
<body class="style-3">
<div class="container">
  <div class="row">
    
	
    <div class="col-md-4 col-md-push-8"> 
      
      <!-- Start Sign In Form -->
      <form class="fh5co-form animate-box" method="post" action="php/users_signin.php" data-animate-effect="fadeInRight">
        <h2>用户登录</h2>
        <div class="form-group">
          <label for="username" class="sr-only">用户名</label>
          <input type="text" class="form-control" name="username" id="username" placeholder="用户名" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="password" class="sr-only">密码</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="密码" autocomplete="off">
        </div>
        <div class="form-group"> </div>
        <div class="form-group">
          <p>没有注册？ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="signup.html"> 去注册！</a></p>
        </div>
        <div class="form-group">
          <input type="submit"  onclick="return signin()" value="登录" class="btn btn-primary">
        </div>
      </form>
      <!-- END Sign In Form --> 
      <div id="leftdev"></div>
    </div>
  </div>
  <footer class="row" style="padding-top: 60px; clear: both;">
    <div class="col-md-12 text-center">
      <p><small>YangJunhuai&copy; All Rights Reserved. </small></p>
    </div>
  </footer>
</div>

<!-- jQuery --> 
<script src="js/jquery.min.js"></script> 
<!-- Bootstrap --> 
<script src="js/bootstrap.min.js"></script> 
<!-- Placeholder --> 
<script src="js/jquery.placeholder.min.js"></script> 
<!-- Waypoints --> 
<script src="js/jquery.waypoints.min.js"></script> 
<!-- Main JS --> 
<script src="js/main.js"></script>

</body>
</html>
