<!doctype html>
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
if ($_SESSION['type'] != 'users') {
  echo "<script>alert('你没有权限访问该页面！');history.go(-1);</script>";
  exit;
}
    //获得用户名
$uname = $_SESSION['uname'];
$uid = $_SESSION['uid'];

//smarty
require 'admin/smarty/libs/Smarty.class.php';

?>

<html lang="ch">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="数据库课程设计-租车系统">
  <meta name="keywords" content="租车系统">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <title>查看订单</title>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <script src="js/myjs/main_check.js"></script>
  <script src="js/myjs/signin.js"></script>

  <script>
    $(function () {
      $(".meun-item").click(function () {
        $(".meun-item").removeClass("meun-item-active");
        $(this).addClass("meun-item-active");
        var itmeObj = $(".meun-item").find("img");
        itmeObj.each(function () {
          var items = $(this).attr("src");
          items = items.replace("_grey.png", ".png");
          items = items.replace(".png", "_grey.png")
          $(this).attr("src", items);
        });
        var attrObj = $(this).find("img").attr("src");
        ;
        attrObj = attrObj.replace("_grey.png", ".png");
        $(this).find("img").attr("src", attrObj);
      });
      $("#topAD").click(function () {
        $("#topA").toggleClass(" glyphicon-triangle-right");
        $("#topA").toggleClass(" glyphicon-triangle-bottom");
      });
      $("#topBD").click(function () {
        $("#topB").toggleClass(" glyphicon-triangle-right");
        $("#topB").toggleClass(" glyphicon-triangle-bottom");
      });
      $("#topCD").click(function () {
        $("#topC").toggleClass(" glyphicon-triangle-right");
        $("#topC").toggleClass(" glyphicon-triangle-bottom");
      });
      $(".toggle-btn").click(function () {
        $("#leftMeun").toggleClass("show");
        $("#rightContent").toggleClass("pd0px");
      })
    })
  </script>
  <!--[if lt IE 9]>
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="admin/css/common.css" />
  <link rel="stylesheet" type="text/css" href="css/slide.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/flat-ui.min.css" />
  <link rel="stylesheet" type="text/css" href="css/jquery.nouislider.css">
  </head>

  <body>
<div id="wrap"> 
    <!-- 左侧菜单栏目块 -->
    <div class="leftMeun" id="leftMeun">
    <div id="logoDiv">
        <p id="logoP"><a href="users.php"> <img id="logo" alt="租车系统后台" src="admin/images/timg.jpg"> <span>格里芬租车</span></a> </p>
      </div>
    <div id="personInfor">
        <p id="userName">杨钧淮</p>
        <p> <span>yangjunhuai@qq.com</span> </p>
        <p> <span>项目地址：<a href="https://github.com/JunhuaiYang/DatabaseDesign"><img id="logo" src="admin/images/github.jpeg" alt="github"></a></span> </p>
        <small>YangJunhuai<br> &copy; All Rights Reserved. </small>
		<p><br></p>
        <p> <span>欢迎你： 
            <?php
            echo $uname;
            ?>
			</span>
      </p>
        <p> <a href="../php/admin_signout.php">退出登录</a> </p>
      </div>
    <div class="meun-title"> <strong>租车系统管理</strong> </div>
<div class="meun-item meun-item-active" aria-controls="order" role="tab" href="#order" data-toggle="tab"> <img src="../images/icon_user_grey.png">订单信息</div>
</div>
    
    <!-- 右侧具体内容栏目 -->
    <div id="rightContent"> <a class="toggle-btn" id="nimei"> <i class="glyphicon glyphicon-align-justify"></i> </a> 
    <!-- Tab panes -->
    <div class="tab-content"> 
		
<!-- 订单信息 -->
        <div class="tab-pane active" id="order" role="tabpanel">
        <div class="check-div form-inline">
          <a href="users.php"><button class="btn btn-yellow btn-xs" data-toggle="modal" data-target="#addOrder">返回</button></a>
          </div>
        <div class="data-div">
            <div class="row tableHeader"> 
            <!--	col-lg-几就是几个宽度，bootstrap里面定义的-->
            <div class="col-xs-1"> 订单编号 </div>
            <div class="col-xs-1"> 车辆ID </div>
            <div class="col-xs-1"> 车牌号 </div>
            <div class="col-xs-1"> 车辆品牌 </div>
            <div class="col-xs-1"> 车辆型号 </div>
            <div class="col-xs-1"> 经手人 </div>
            <div class="col-xs-1"> 押金 </div>
            <div class="col-xs-1"> 预定金额 </div>
            <div class="col-xs-1"> 订单状态 </div>
            <div class="col-xs-1"> 退换押金 </div>
            <div class="col-xs-1"> 订单金额 </div>
            <div class="col-xs-1"> 操作 </div>
          </div>
            <div class="tablebody"> 
            
            <!-- 每一行-->
            <?php
              //生成每一行订单信息

            class rental
            {
              public $contractid;
              public $cid;
              public $uid;
              public $aid;
              public $deposit;
              public $money_b;
              public $money_a;
              public $setout;
              public $setin;
              public $state;
              public $deposit_back;
              public $fine;
              public $note;
              public $status;
              public $plan_day;
              public $real_day;
              public $cplandate;

              public $uname;
              public $cbrand;
              public $cmodel;
              public $cplant;
              public $username;
              public $aname;
              public $uidnum;
            }

            $temp_rental = new rental();
            $smarty_rental = new Smarty();

            $sarch_rental = "SELECT distinct * from car_rent, car, users, admin
            where car_rent.cid = car.cid and
            car_rent.uid = users.uid and admin.aid = car_rent.aid and users.uid = '$uid'
            order by status,contractid ";

            $retval = mysqli_query($conn, $sarch_rental);
            if (!$retval) {
              die('无法读取数据: ' . mysqli_error($conn));
            }

            while ($row = mysqli_fetch_assoc($retval)) {
              $temp_rental->contractid = $row['contractid'];
              $temp_rental->cid = $row['cid'];
              $temp_rental->uid = $row['uid'];
              $temp_rental->deposit = $row['deposit'];
              $temp_rental->money_a = $row['money_a'];
              $temp_rental->money_b = $row['money_b'];
              $temp_rental->setout = $row['setout'];
              $temp_rental->setin = $row['setin'];
              $temp_rental->state = $row['state'];
              $temp_rental->deposit_back = $row['deposit_back'];
              $temp_rental->fine = $row['fine'];
              $temp_rental->note = $row['note'];
              $temp_rental->status = $row['status'];
              $temp_rental->plan_day = $row['plan_day'];
              $temp_rental->uname = $row['uname'];
              $temp_rental->cbrand = $row['cbrand'];
              $temp_rental->cmodel = $row['cmodel'];
              $temp_rental->cplant = $row['cplant'];
              $temp_rental->username = $row['username'];
              $temp_rental->aname = $row['aname'];
              $temp_rental->uidnum = $row['uidnum'];
              $temp_rental->cplandate = $row['cplandate'];

              $smarty_rental->assign('temp', $temp_rental);
              $smarty_rental->display('rental_row_users.tpl');
            }

            ?>

          </div>
          </div>
          
           <!--生成各种弹窗-->
           <?php
          $retval = mysqli_query($conn, $sarch_rental);
          if (!$retval) {
            die('无法读取数据: ' . mysqli_error($conn));
          }

          while ($row = mysqli_fetch_assoc($retval)) {
            $temp_rental->contractid = $row['contractid'];
            $temp_rental->cid = $row['cid'];
            $temp_rental->uid = $row['uid'];
            $temp_rental->aid = $row['aid'];
            $temp_rental->deposit = $row['deposit'];
            $temp_rental->money_b = $row['money_b'];
            $temp_rental->money_a = $row['money_a'];
            $temp_rental->setout = $row['setout'];
            $temp_rental->setin = $row['setin'];
            $temp_rental->state = $row['state'];
            $temp_rental->deposit_back = $row['deposit_back'];
            $temp_rental->fine = $row['fine'];
            $temp_rental->note = $row['note'];
            $temp_rental->status = $row['status'];
            $temp_rental->plan_day = $row['plan_day'];
            $temp_rental->uname = $row['uname'];
            $temp_rental->cbrand = $row['cbrand'];
            $temp_rental->cmodel = $row['cmodel'];
            $temp_rental->cplant = $row['cplant'];
            $temp_rental->username = $row['username'];
            $temp_rental->aname = $row['aname'];
            $temp_rental->real_day = $row['real_day'];
            $temp_rental->cplandate = $row['cplandate'];

            $smarty_rental->assign('temp', $temp_rental);
            $smarty_rental->display('rental_edit_users.tpl');
          }

          ?>
        <!--弹出窗口 添加订单-->
        <!-- /.modal --> 
      </div>
		

      </div>
  </div>
  </div>
<script src="js/jquery.nouislider.js"></script>
	  
</body>
</html>