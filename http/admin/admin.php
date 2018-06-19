<!doctype html>
<?php
  //连接数据库
include "../php/conn_db.php";

  //登录检测
session_start();
if (empty($_SESSION['login'])) {
  echo "<script>alert('你还没有登录！不能访问该页面！');history.go(-1);</script>";
  exit;
}
  //获得用户名
$username = $_SESSION['user'];


//获得职位
$sql_ad = "select * from admin where ausername = '" . $username . "'";
//查询数据库
$retval = mysqli_query($conn, $sql_ad);
if (!$retval) {
  die('无法读取数据: ' . mysqli_error($conn));
}
//取得结果
$row = mysqli_fetch_array($retval, MYSQLI_ASSOC);
$position = $row['aposition'];
$aname = $row['aname'];

?>

<html lang="ch">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="数据库课程设计-租车系统">
  <meta name="keywords" content="租车系统">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <title>租车系统-后台管理</title>
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
  <link rel="stylesheet" type="text/css" href="css/common.css" />
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
        <p id="logoP"> <img id="logo" alt="租车系统后台" src="images/timg.jpg"> <span>租车系统后台</span> </p>
      </div>
    <div id="personInfor">
        <p id="userName">杨钧淮</p>
        <p> <span>yangjunhuai@qq.com</span> </p>
        <p> <span>项目地址：<a href="https://github.com/JunhuaiYang/DatabaseDesign"><img id="logo" src="images/github.jpeg" alt="github"></a></span> </p>
        <small>YangJunhuai<br> &copy; All Rights Reserved. </small>
		<p><br></p>
        <p> <span>当前登录用户： 
            <?php
            echo $username;
            ?>
			</span>
      </p>
		<p> <span>职位： 
            <?php
            echo $position;
            ?>
			</span>
      </p>
      <p> <span>姓名： 
            <?php
            echo $aname;
            ?>
			</span>
      </p>
        <p> <a href="../php/admin_signout.php">退出登录</a> </p>
      </div>
    <div class="meun-title"> <strong>租车系统管理</strong> </div>
    <div class="meun-item meun-item-active" aria-controls="sour" role="tab" href="#sour" data-toggle="tab"> <img src="../images/icon_change.png">车辆管理</div>
    <div class="meun-item" href="#order" aria-controls="order" role="tab" data-toggle="tab"> <img src="../images/icon_user_grey.png">订单信息</div>
		
    <div class="meun-title"> <strong>用户</strong> </div>
    <div class="meun-item" href="#user" aria-controls="user" role="tab" data-toggle="tab"> <img src="../images/icon_chara_grey.png">用户管理</div>
		
    <div class="meun-title"> <strong>信息</strong> </div>
    <div class="meun-item" href="#isfixed" aria-controls="isfixed" role="tab" data-toggle="tab"> <img src="../images/icon_rule_grey.png">维修信息</div>
		
    <div class="meun-title"> <strong>财务报表</strong> </div>
    <div class="meun-item " href="#form_day" aria-controls="form_day" role="tab" data-toggle="tab"> <img src="images/icon_source.png">财务报表--日</div>
    <div class="meun-item " href="#form_month" aria-controls="form_month" role="tab" data-toggle="tab"> <img src="images/icon_source.png">财务报表--月</div>
    <div class="meun-item" href="#form_season" aria-controls="form_season" role="tab" data-toggle="tab"> <img src="images/icon_source.png">财务报表--季度</div>
    <div class="meun-item" href="#form_year" aria-controls="form_year" role="tab" data-toggle="tab"> <img src="images/icon_source.png">财务报表--年</div>
  </div>
    
    <!-- 右侧具体内容栏目 -->
    <div id="rightContent"> <a class="toggle-btn" id="nimei"> <i class="glyphicon glyphicon-align-justify"></i> </a> 
    <!-- Tab panes -->
    <div class="tab-content"> 
		
		
        <!-- 车辆管理模块 -->
        <div class="tab-pane active" id="sour" role="tabpanel">
        <div class="check-div form-inline">
            <button class="btn btn-yellow btn-xs" data-toggle="modal" data-target="#addSource">添加车辆</button>
          </div>
        <div class="data-div">
            <div class="row tableHeader"> 
            <!--	col-lg-几就是几个宽度，bootstrap里面定义的-->
            <div class="col-xs-1 "> 车辆编号 </div>
            <div class="col-xs-2"> 车牌号 </div>
            <div class="col-xs-1"> 品牌 </div>
            <div class="col-xs-2"> 车辆型号 </div>
            <div class="col-xs-1"> 每日租金 </div>
            <div class="col-xs-2"> 车辆状态 </div>
            <!--3个宽度来操作-->
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"> 操作 </div>
          </div>
            <div class="tablebody"> 
            
            <!-- 每一行简略信息-->
            <!-- 模板输出-->
            
            <?php
            require 'smarty/libs/Smarty.class.php';
            //申明对象
            class car_show
            {
              public $cplant;
              public $cbrand;
              public $cmodel;
              public $cstate;
              public $crent;
              public $cid;
            }

            $smarty_new_car = new Smarty();

            //数据库操作
            $sarch_car = "SELECT * FROM car_rental.car";

            $retval = mysqli_query($conn, $sarch_car);
            if (!$retval) {
              die('无法读取数据: ' . mysqli_error($conn));
            }

            $temp = new car_show();

            //模板  
            while ($row = mysqli_fetch_assoc($retval)) {
              $temp->cid = $row['cid'];
              $temp->cplant = $row['cplant'];
              $temp->cbrand = $row['cbrand'];
              $temp->cmodel = $row['cmodel'];
              $temp->cstatus = $row['cstatus'];
              $temp->crent = $row['crent'];

              $smarty_new_car->assign('temp', $temp);
              $smarty_new_car->display('car_row.tpl');
            }
            ?>
          </div>
          </div>

          <!-- 每一个弹窗-->
          <?php
            //各种弹出窗口处理
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

          $sarch_car = "SELECT * FROM car_rental.car";

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
            $smarty_new_car->display('car_edit.tpl');
          }

          ?>
			
			
        
        <!--弹出窗口 添加资源-->
        <div class="modal fade" id="addSource" role="dialog" aria-labelledby="gridSystemModalLabel">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                <h4 class="modal-title" id="gridSystemModalLabel">添加车辆</h4>
              </div>
                <div class="modal-body">
                <div class="container-fluid">


                    <form method="post" action="../php/new_car.php" target="_top" class="form-horizontal" >
                    <div class="form-group ">
                        <label for="cplant" class="col-xs-3 control-label">*车牌号：</label>
                        <div class="col-xs-8 ">
                        <input type="" class="form-control input-sm duiqi" name="cplant" id="cplant" placeholder="">
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="cbrand" class="col-xs-3 control-label">*车辆品牌：</label>
                        <div class="col-xs-8 ">
                        <input type="" class="form-control input-sm duiqi" name="cbrand" id="cbrand" placeholder="">
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="cmodel" class="col-xs-3 control-label">*车辆型号：</label>
                        <div class="col-xs-8">
                        <input type="" class="form-control input-sm duiqi" name="cmodel" id="cmodel" placeholder="">
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="ccolor" class="col-xs-3 control-label">车辆颜色：</label>
                        <div class="col-xs-8">
                        <input type="" class="form-control input-sm duiqi" name="ccolor" id="ccolor" placeholder="">
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="cvolume" class="col-xs-3 control-label">排量：</label>
                        <div class="col-xs-8">
                        <input type="" class="form-control input-sm duiqi" name="cvolume" id="cvolume" placeholder="">
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="cdate" class="col-xs-3 control-label">出厂日期：</label>
                        <div class="col-xs-8">
                        <input type="date" class="form-control input-sm duiqi" name="cdate" id="cdate" placeholder="">
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="coil" class="col-xs-3 control-label">燃油类型：</label>
                        <div class="col-xs-8">
                        <input type="" class="form-control input-sm duiqi" name="coil" id="coil" placeholder="">
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="cstate" class="col-xs-3 control-label">*车辆状况：</label>
                        <div class="col-xs-8">
                        <input type="" class="form-control input-sm duiqi" name="cstate" id="cstate" placeholder="">
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="crent" class="col-xs-3 control-label">*每日租金：</label>
                        <div class="col-xs-8">
                        <input type="" class="form-control input-sm duiqi" name="crent" id="crent" placeholder="">
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="cnote" class="col-xs-3 control-label">备注信息：</label>
                        <div class="col-xs-8">
                        <input type="" class="form-control input-sm duiqi"name="cnote" id="cnote" placeholder="">
                      </div>
                      </div>

                  <div class="modal-footer">
                  <button type="button" class="btn btn-xs btn-xs btn-white" data-dismiss="modal">取 消</button>
                  <button  type="submit" onclick="return new_car()" class="btn btn-xs btn-xs btn-green"  >保 存</button>
                  </div>

                  </form>
                  </div>
              </div>
              </div>
            <!-- /.modal-content --> 
          </div>
            <!-- /.modal-dialog --> 
          </div>
        <!-- /.modal --> 

        <!-- /.modal --> 
      </div>
        
		
		
<!-- 订单信息 -->
        <div class="tab-pane" id="order" role="tabpanel">
        <div class="check-div form-inline">
            <button class="btn btn-yellow btn-xs" data-toggle="modal" data-target="#addOrder">添加订单</button>
          </div>
        <div class="data-div">
            <div class="row tableHeader"> 
            <!--	col-lg-几就是几个宽度，bootstrap里面定义的-->
            <div class="col-xs-1 "> 订单编号 </div>
            <div class="col-xs-1"> 用户姓名 </div>
            <div class="col-xs-1"> 车辆ID </div>
            <div class="col-xs-2"> 车牌号 </div>
            <div class="col-xs-1"> 车辆品牌 </div>
            <div class="col-xs-1"> 车辆型号 </div>
            <div class="col-xs-1"> 经手人 </div>
            <div class="col-xs-1"> 订单状态 </div>
            <!--3个宽度来操作-->
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"> 操作 </div>
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

            $sarch_rental = "select * from car_rent, car, users, admin
            where car_rent.aid = admin.aid and car_rent.cid = car.cid and
            car_rent.uid = users.uid";

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
              $temp_rental->uidnum = $row['uidnum'];

              $smarty_rental->assign('temp', $temp_rental);
              $smarty_rental->display('rental_row.tpl');
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

            $smarty_rental->assign('temp', $temp_rental);
            $smarty_rental->display('rental_edit.tpl');
          }

          ?>

        
        <!--弹出窗口 添加订单-->
        <div class="modal fade" id="addOrder" role="dialog" aria-labelledby="gridSystemModalLabel">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                <h4 class="modal-title" id="gridSystemModalLabel">添加订单</h4>
              </div>
                <div class="modal-body">
                <div class="container-fluid">
                    <form method="post" action="../php/new_rental.php" class="form-horizontal">
                    <div class="form-group ">
                        <label for="cid" class="col-xs-3 control-label">*车辆ID：</label>
                        <div class="col-xs-8 ">
                        <input type="" class="form-control input-sm duiqi" name="cid" id="cid" placeholder="">
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="uid" class="col-xs-3 control-label">*用户ID：</label>
                        <div class="col-xs-8 ">
                        <input type="" class="form-control input-sm duiqi" name="uid" id="uid" placeholder="">
                      </div>
                      </div>
                    
                    <div class="form-group">
                        <label for="plan_day" class="col-xs-3 control-label">*预定天数：</label>
                        <div class="col-xs-8">
                        <input type="" class="form-control input-sm duiqi" name="plan_day" id="plan_day" placeholder="">
                      </div>
                      </div>

                    <div class="modal-footer">
                    <button type="button" class="btn btn-xs btn-xs btn-white" data-dismiss="modal">取 消</button>
                    <button type="submit" onclick="return new_rental()" class="btn btn-xs btn-xs btn-green">保 存</button>
                  </div>
                    
                  </form>
                  </div>
              </div>

              </div>
            <!-- /.modal-content --> 
          </div>
            <!-- /.modal-dialog --> 
          </div>
			

        <!-- /.modal --> 
      </div>
		
		
<!--用户管理模块-->
        <div role="tabpanel" class="tab-pane" id="user">
        <div class="check-div form-inline">

          </div>
        <div class="data-div">
            <div class="row tableHeader">
            <div class="col-xs-1 "> 编号 </div>
            <div class="col-xs-2"> 用户名 </div>
            <div class="col-xs-2"> 姓名 </div>
            <div class="col-xs-2"> 电话 </div>
            <div class="col-xs-1"> 是否会员 </div>
				<div class="col-xs-1"> 信誉度 </div>
            <div class="col-xs-3"> 操作 </div>
          </div>
            <div class="tablebody"> 

            <?php
              //生成用户行

              //申明对象
            class user_show
            {
              public $uid;
              public $username;
              public $uname;
              public $utel;
              public $isvip;
              public $ucredit;

              public $ulicese;
              public $uage;
              public $uidnum;
            }

            $smarty_user = new Smarty();

              //数据库操作
            $sarch_user = "SELECT * FROM car_rental.users";

            $retval = mysqli_query($conn, $sarch_user);
            if (!$retval) {
              die('无法读取数据: ' . mysqli_error($conn));
            }

            $temp_users_row = new user_show();

              //模板  
            while ($row = mysqli_fetch_assoc($retval)) {
              $temp_users_row->uid = $row['uid'];
              $temp_users_row->username = $row['username'];
              $temp_users_row->uname = $row['uname'];
              $temp_users_row->utel = $row['utel'];
              $temp_users_row->isvip = $row['isvip'];
              $temp_users_row->ucredit = $row['ucredit'];

              $smarty_user->assign('temp', $temp_users_row);
              $smarty_user->display('user_row.tpl');
            }

            ?>

          </div>
          </div>

          <?php
            //生成各个弹窗
          $smarty_user_edit = new Smarty();
          $temp_users = new user_show();

            //数据库操作
          $sarch_user = "SELECT * FROM car_rental.users";
          $retval = mysqli_query($conn, $sarch_user);
          if (!$retval) {
            die('无法读取数据: ' . mysqli_error($conn));
          }
            //模板  
          while ($row = mysqli_fetch_assoc($retval)) {
            $temp_users->uid = $row['uid'];
            $temp_users->username = $row['username'];
            $temp_users->uname = $row['uname'];
            $temp_users->utel = $row['utel'];
            $temp_users->isvip = $row['isvip'];
            $temp_users->ucredit = $row['ucredit'];

            $temp_users->ulicese = $row['ulicese'];
            $temp_users->uage = $row['uage'];
            $temp_users->uidnum = $row['uidnum'];

            $smarty_user_edit->assign('temp', $temp_users);
            $smarty_user_edit->display('user_edit.tpl');
          }
          ?>
			
        
      </div>
		
		        <!-- 维修信息 -->
        <div class="tab-pane" id="isfixed" role="tabpanel">
        <div class="check-div form-inline">
          </div>
        <div class="data-div">
            <div class="row tableHeader"> 
            <!--	col-lg-几就是几个宽度，bootstrap里面定义的-->
			      <div class="col-xs-1 "> 车辆编号 </div>
            <div class="col-xs-2"> 车牌号 </div>
            <div class="col-xs-1"> 车辆品牌 </div>
            <div class="col-xs-1"> 车辆型号 </div>
            <div class="col-xs-1"> 车辆状况 </div>
            <div class="col-xs-4"> 备注 </div>

            <div class="col-xs-2"> 操作 </div>
          </div>
            <div class="tablebody"> 
            
            <!-- 每一行-->
            <?php

              //格式化生成
            $temp_car = new car_reset();
            $sarch_car = "SELECT * FROM car_rental.car where cstatus = '2'";

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
              $smarty_new_car->display('fix_row.tpl');
            }

            ?>

          </div>
          </div>

        <!--弹出已维修窗口-->
        <?php
                        //格式化生成
        $temp_car = new car_reset();
        $sarch_car = "SELECT * FROM car_rental.car where cstatus = '2'";

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
          $smarty_new_car->display('fixed.tpl');
        }
        ?>
        <!-- /.modal --> 
      </div>
		
		  <!-- 财务报表-日 -->
      <div class="tab-pane" id="form_day" role="tabpanel">
        <div class="check-div form-inline">
        </div>
        <div class="data-div">
            <div class="row tableHeader"> 
            <!--	col-lg-几就是几个宽度，bootstrap里面定义的-->
            <div class="col-xs-2 "> 日期 </div>
            <div class="col-xs-2"> 租金收入 </div>
            <div class="col-xs-2"> 不退押金收入 </div>
            <div class="col-xs-2"> 总收入 </div>
            <div class="col-xs-2"> 维修支出 </div>
            <div class="col-xs-2"> 净利润 </div>
          </div>
            <div class="tablebody"> 
            
            <!-- 每一行-->
            <?php
            class table_out
            {
              public $dates;
              public $rent_in;
              public $deposit_in;
              public $all_in;
              public $fixed_out;
              public $profit;

              public $years;
            }

            $table_ = new table_out();
            $smarty_table = new Smarty();

            $find_view = "SELECT * FROM car_rental.date_table;";
            $retval = mysqli_query($conn, $find_view);
            if (!$retval) {
              die('无法读取数据: ' . mysqli_error($conn));
            }

            while ($row = mysqli_fetch_assoc($retval)) {
              $table_->dates = $row['dates'];
              $table_->rent_in = $row['rent_in'];
              $table_->deposit_in = $row['deposit_in'];
              $table_->all_in = $row['all_in'];
              $table_->fixed_out = $row['fixed_out'];
              $table_->profit = $row['profit'];

              $smarty_table->assign('temp', $table_);
              $smarty_table->display('table.tpl');
            }

            //再生成一栏求和
            $find_view = "SELECT * FROM car_rental.sum_table;";
            $retval = mysqli_query($conn, $find_view);
            if (!$retval) {
              die('无法读取数据: ' . mysqli_error($conn));
            }

            $row = mysqli_fetch_assoc($retval);
            $table_->dates = "求和";
            $table_->rent_in = $row['rent_in'];
            $table_->deposit_in = $row['deposit_in'];
            $table_->all_in = $row['all_in'];
            $table_->fixed_out = $row['fixed_out'];
            $table_->profit = $row['profit'];

            $smarty_table->assign('temp', $table_);
            $smarty_table->display('table_foot.tpl');

            ?>
          </div>
        </div>
        
      </div>
		
		        <!-- 财务报表月 -->
        <div class="tab-pane" id="form_month" role="tabpanel">
        <div class="check-div form-inline">
          </div>
			
          <div class="data-div">
            <div class="row tableHeader"> 
            <!--	col-lg-几就是几个宽度，bootstrap里面定义的-->
            <div class="col-xs-2 "> 日期 </div>
            <div class="col-xs-2"> 租金收入 </div>
            <div class="col-xs-2"> 不退押金收入 </div>
            <div class="col-xs-2"> 总收入 </div>
            <div class="col-xs-2"> 维修支出 </div>
            <div class="col-xs-2"> 净利润 </div>
          </div>
            <div class="tablebody"> 
            
            <!-- 每一行-->
            <?php
            $find_view = "SELECT * FROM car_rental.month_table;";
            $retval = mysqli_query($conn, $find_view);
            if (!$retval) {
              die('无法读取数据: ' . mysqli_error($conn));
            }

            while ($row = mysqli_fetch_assoc($retval)) {
              $table_->dates = $row['dates'];
              $table_->rent_in = $row['rent_in'];
              $table_->deposit_in = $row['deposit_in'];
              $table_->all_in = $row['all_in'];
              $table_->fixed_out = $row['fixed_out'];
              $table_->profit = $row['profit'];

              $smarty_table->assign('temp', $table_);
              $smarty_table->display('table.tpl');
            }

            //再生成一栏求和
            $find_view = "SELECT * FROM car_rental.sum_table;";
            $retval = mysqli_query($conn, $find_view);
            if (!$retval) {
              die('无法读取数据: ' . mysqli_error($conn));
            }

            $row = mysqli_fetch_assoc($retval);
            $table_->dates = "求和";
            $table_->rent_in = $row['rent_in'];
            $table_->deposit_in = $row['deposit_in'];
            $table_->all_in = $row['all_in'];
            $table_->fixed_out = $row['fixed_out'];
            $table_->profit = $row['profit'];

            $smarty_table->assign('temp', $table_);
            $smarty_table->display('table_foot.tpl');

            ?>
          </div>
        </div>

      </div>
		
		        <!-- 财务报表季度 -->
        <div class="tab-pane" id="form_season" role="tabpanel">
        <div class="check-div form-inline">
          </div>
			
          <div class="data-div">
            <div class="row tableHeader"> 
            <!--	col-lg-几就是几个宽度，bootstrap里面定义的-->
            <div class="col-xs-2 "> 日期 </div>
            <div class="col-xs-2"> 租金收入 </div>
            <div class="col-xs-2"> 不退押金收入 </div>
            <div class="col-xs-2"> 总收入 </div>
            <div class="col-xs-2"> 维修支出 </div>
            <div class="col-xs-2"> 净利润 </div>
          </div>
            <div class="tablebody"> 
            
            <!-- 每一行-->
            <?php
            $find_view = "SELECT * FROM car_rental.quarter_table;";
            $retval = mysqli_query($conn, $find_view);
            if (!$retval) {
              die('无法读取数据: ' . mysqli_error($conn));
            }

            while ($row = mysqli_fetch_assoc($retval)) {
              $t_dates = $row['dates'];
              $table_->years = $row['years'];
              $table_->rent_in = $row['rent_in'];
              $table_->deposit_in = $row['deposit_in'];
              $table_->all_in = $row['all_in'];
              $table_->fixed_out = $row['fixed_out'];
              $table_->profit = $row['profit'];

              $table_->dates = $table_->years.'年第'.$t_dates.'季度';

              $smarty_table->assign('temp', $table_);
              $smarty_table->display('table.tpl');
            }

            //再生成一栏求和
            $find_view = "SELECT * FROM car_rental.sum_table;";
            $retval = mysqli_query($conn, $find_view);
            if (!$retval) {
              die('无法读取数据: ' . mysqli_error($conn));
            }

            $row = mysqli_fetch_assoc($retval);
            $table_->dates = "求和";
            $table_->rent_in = $row['rent_in'];
            $table_->deposit_in = $row['deposit_in'];
            $table_->all_in = $row['all_in'];
            $table_->fixed_out = $row['fixed_out'];
            $table_->profit = $row['profit'];

            $smarty_table->assign('temp', $table_);
            $smarty_table->display('table_foot.tpl');

            ?>
          </div>
        </div>

      </div>
		
		        <!-- 财务报表-年 -->
        <div class="tab-pane" id="form_year" role="tabpanel">
        <div class="check-div form-inline">
          </div>
			
          <div class="data-div">
            <div class="row tableHeader"> 
            <!--	col-lg-几就是几个宽度，bootstrap里面定义的-->
            <div class="col-xs-2 "> 日期 </div>
            <div class="col-xs-2"> 租金收入 </div>
            <div class="col-xs-2"> 不退押金收入 </div>
            <div class="col-xs-2"> 总收入 </div>
            <div class="col-xs-2"> 维修支出 </div>
            <div class="col-xs-2"> 净利润 </div>
          </div>
            <div class="tablebody"> 
            
            <!-- 每一行-->
            <?php
            $find_view = "SELECT * FROM car_rental.year_table;";
            $retval = mysqli_query($conn, $find_view);
            if (!$retval) {
              die('无法读取数据: ' . mysqli_error($conn));
            }

            while ($row = mysqli_fetch_assoc($retval)) {
              $table_->dates = $row['dates'];
              $table_->rent_in = $row['rent_in'];
              $table_->deposit_in = $row['deposit_in'];
              $table_->all_in = $row['all_in'];
              $table_->fixed_out = $row['fixed_out'];
              $table_->profit = $row['profit'];

              $smarty_table->assign('temp', $table_);
              $smarty_table->display('table.tpl');
            }

            //再生成一栏求和
            $find_view = "SELECT * FROM car_rental.sum_table;";
            $retval = mysqli_query($conn, $find_view);
            if (!$retval) {
              die('无法读取数据: ' . mysqli_error($conn));
            }

            $row = mysqli_fetch_assoc($retval);
            $table_->dates = "求和";
            $table_->rent_in = $row['rent_in'];
            $table_->deposit_in = $row['deposit_in'];
            $table_->all_in = $row['all_in'];
            $table_->fixed_out = $row['fixed_out'];
            $table_->profit = $row['profit'];

            $smarty_table->assign('temp', $table_);
            $smarty_table->display('table_foot.tpl');

            ?>
          </div>
        </div>

      </div>
		
      </div>
  </div>
  </div>
<script src="js/jquery.nouislider.js"></script>
	  
</body>
</html>