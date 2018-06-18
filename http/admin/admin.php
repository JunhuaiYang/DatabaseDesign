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
        <p> <a href="../php/admin_signout.php">退出登录</a> </p>
      </div>
    <div class="meun-title"> <strong>租车系统管理</strong> </div>
    <div class="meun-item" aria-controls="sour" role="tab" href="#sour" data-toggle="tab"> <img src="../images/icon_change.png">车辆管理</div>
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
		
		
        <!-- 资源管理模块 -->
        <div class="tab-pane" id="sour" role="tabpanel">
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
            
            <!-- 每一行-->
            <!-- 通过模板输出-->
            
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
              $temp_car->cstatus = $row['cstatus'];
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
                  <button type="submit" onclick="return new_car()" class="btn btn-xs btn-xs btn-green"  >保 存</button>
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
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 "> 订单编号 </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"> 用户姓名 </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"> 车辆型号 </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"> 押金 </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"> 订单状态 </div>
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
				<button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#sureSetout">确认租车</button>
				<button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#sureSetin">确认还车</button>
                <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#viewOrder">查看详细</button>
                <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#changeOrder">修改</button>
                <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteOrder">删除</button>
              </div>
              </div>
          </div>
          </div>
        
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
                    <form class="form-horizontal">
                    <div class="form-group ">
                        <label for="cid" class="col-xs-3 control-label">车辆ID：</label>
                        <div class="col-xs-8 ">
                        <input type="email" class="form-control input-sm duiqi" id="cid" placeholder="">
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="uid" class="col-xs-3 control-label">用户ID：</label>
                        <div class="col-xs-8 ">
                        <input type="" class="form-control input-sm duiqi" id="uid" placeholder="">
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="deposit" class="col-xs-3 control-label">押金：</label>
                        <div class="col-xs-8">
                        <input type="" class="form-control input-sm duiqi" id="deposit" placeholder="">
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="oday" class="col-xs-3 control-label">预定天数：</label>
                        <div class="col-xs-8">
                        <input type="" class="form-control input-sm duiqi" id="oday" placeholder="">
                      </div>
                      </div>
                    
                  </form>
                  </div>
              </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-xs btn-xs btn-white" data-dismiss="modal">取 消</button>
                <button type="button" class="btn btn-xs btn-xs btn-green">保 存</button>
              </div>
              </div>
            <!-- /.modal-content --> 
          </div>
            <!-- /.modal-dialog --> 
          </div>
			
			        <!--弹出窗口 确认租车-->
        <div class="modal fade" id="sureSetout" role="dialog" aria-labelledby="gridSystemModalLabel">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                <h4 class="modal-title" id="gridSystemModalLabel">确认租车</h4>
              </div>
                <div class="modal-body">
                <div class="container-fluid">
                    <form class="form-horizontal">
                    <div class="form-group ">
                        <label for="setout" class="col-xs-3 control-label">出车时间：</label>
                        <div class="col-xs-8 ">
                        <input type="date" class="form-control input-sm duiqi" id="cid" placeholder="">
                      </div>
                      </div>
                
                    
                  </form>
                  </div>
              </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-xs btn-xs btn-white" data-dismiss="modal">取 消</button>
                <button type="button" class="btn btn-xs btn-xs btn-green">保 存</button>
              </div>
              </div>
            <!-- /.modal-content --> 
          </div>
            <!-- /.modal-dialog --> 
          </div>
			
			        <!--弹出窗口 确认还车-->
        <div class="modal fade" id="sureSetin" role="dialog" aria-labelledby="gridSystemModalLabel">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                <h4 class="modal-title" id="gridSystemModalLabel">确认还车</h4>
              </div>
                <div class="modal-body">
                <div class="container-fluid">
                    <form class="form-horizontal">
                    <div class="form-group ">
                        <label for="setin" class="col-xs-3 control-label">还车时间：</label>
                        <div class="col-xs-8 ">
                        <input type="date" class="form-control input-sm duiqi" id="setin" placeholder="">
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="state" class="col-xs-3 control-label">车辆损坏情况：</label>
                        <div class="col-xs-8 ">
                        <input type="" class="form-control input-sm duiqi" id="state" placeholder="">
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="deposit_back" class="col-xs-3 control-label">押金退还金额：</label>
                        <div class="col-xs-8">
                        <input type="" class="form-control input-sm duiqi" id="deposit_back" placeholder="">
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="fine" class="col-xs-3 control-label">交通违规罚款：</label>
                        <div class="col-xs-8">
                        <input type="" class="form-control input-sm duiqi" id="fine" placeholder="">
                      </div>
                      </div>
						 <div class="form-group">
                        <label for="note" class="col-xs-3 control-label">备注：</label>
                        <div class="col-xs-8">
                        <input type="" class="form-control input-sm duiqi" id="note" placeholder="">
                      </div>
                      </div>
                    
                  </form>
                  </div>
              </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-xs btn-xs btn-white" data-dismiss="modal">取 消</button>
                <button type="button" class="btn btn-xs btn-xs btn-green">保 存</button>
              </div>
              </div>
            <!-- /.modal-content --> 
          </div>
            <!-- /.modal-dialog --> 
          </div>
			
        <!-- /.modal --> 
        <!--查看车辆资源弹出窗口-->
        <div class="modal fade" id="viewOrder" role="dialog" aria-labelledby="gridSystemModalLabel">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                <h4 class="modal-title" id="gridSystemModalLabel">查看订单信息</h4>
              </div>
                <div class="modal-body">
                <div class="container-fluid">
                    <form class="form-horizontal">
                    <div class="form-group ">
                        <label for="cid" class="col-xs-4 control-label">合同号：</label>
                        <div class="col-xs-7 ">
                        <label>xxx</label>
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="cplant" class="col-xs-4 control-label">车辆ID：</label>
                        <div class="col-xs-7 ">
                        <label>xxx</label>
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="cbrand" class="col-xs-4 control-label">用户ID：</label>
                        <div class="col-xs-7">
                        <label>xxx</label>
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="ccolor" class="col-xs-4 control-label">经手人：</label>
                        <div class="col-xs-7">
                        <label>xxx</label>
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="cvolume" class="col-xs-4 control-label">订单状态：</label>
                        <div class="col-xs-7">
                        <label>xxx</label>
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="cdate" class="col-xs-4 control-label">押金：</label>
                        <div class="col-xs-7">
                        <label>xxx</label>
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="coil" class="col-xs-4 control-label">订单前金额：</label>
                        <div class="col-xs-7">
                        <label>xxx</label>
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="cstate" class="col-xs-4 control-label">订单后金额：</label>
                        <div class="col-xs-7">
                        <label>xxx</label>
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="crent" class="col-xs-4 control-label">出车时间：</label>
                        <div class="col-xs-7">
                        <label>xxx</label>
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="cnote" class="col-xs-4 control-label">还车时间：</label>
                        <div class="col-xs-7">
                        <label>xxx</label>
                      </div>
                      </div>
						<div class="form-group">
                        <label for="cnote" class="col-xs-4 control-label">车辆损坏情况：</label>
                        <div class="col-xs-7">
                        <label>xxx</label>
                      </div>
                      </div>
						<div class="form-group">
                        <label for="cnote" class="col-xs-4 control-label">押金退还金额：</label>
                        <div class="col-xs-7">
                        <label>xxx</label>
                      </div>
                      </div>
						<div class="form-group">
                        <label for="cnote" class="col-xs-4 control-label">交通违规罚款：</label>
                        <div class="col-xs-7">
                        <label>xxx</label>
                      </div>
                      </div>
						<div class="form-group">
                        <label for="cnote" class="col-xs-4 control-label">备注信息：</label>
                        <div class="col-xs-7">
                        <label>xxx</label>
                      </div>
                      </div>
                  </form>
                  </div>
              </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
                <button type="button" class="btn btn-xs btn-green">保 存</button>
              </div>
              </div>
            <!-- /.modal-content --> 
          </div>
            <!-- /.modal-dialog --> 
          </div>
        <!-- /.modal --> 
        
        <!--修改资源弹出窗口-->
        <div class="modal fade" id="changeOrder" role="dialog" aria-labelledby="gridSystemModalLabel">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                <h4 class="modal-title" id="gridSystemModalLabel">修改订单信息</h4>
              </div>
                <div class="modal-body">
                <div class="container-fluid"> 
					<form class="form-horizontal">
                    <div class="form-group">
                        <label for="cid" class="col-xs-4 control-label">车辆ID：</label>
                        <div class="col-xs-7 ">
                        <input type="" class="form-control input-sm duiqi" id="cid" placeholder="">
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="uid" class="col-xs-4 control-label">用户ID：</label>
                        <div class="col-xs-7">
                        <input type="" class="form-control input-sm duiqi" id="uid" placeholder="">
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="aid" class="col-xs-4 control-label">经手人：</label>
                        <div class="col-xs-7">
                        <input type="" class="form-control input-sm duiqi" id="aid" placeholder="">
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="conditions" class="col-xs-4 control-label">订单状态：</label>
                        <div class="col-xs-7">
                        <input type="" class="form-control input-sm duiqi" id="conditions" placeholder="">
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="deposit" class="col-xs-4 control-label">押金：</label>
                        <div class="col-xs-7">
                        <input type="" class="form-control input-sm duiqi" id="deposit" placeholder="">
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="money_b" class="col-xs-4 control-label">订单前金额：</label>
                        <div class="col-xs-7">
                        <input type="" class="form-control input-sm duiqi" id="money_b" placeholder="">
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="money_a" class="col-xs-4 control-label">订单后金额：</label>
                        <div class="col-xs-7">
                        <input type="" class="form-control input-sm duiqi" id="money_a" placeholder="">
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="setout" class="col-xs-4 control-label">出车时间：</label>
                        <div class="col-xs-7">
                        <input type="" class="form-control input-sm duiqi" id="setout" placeholder="">
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="setin" class="col-xs-4 control-label">还车时间：</label>
                        <div class="col-xs-7">
                        <input type="" class="form-control input-sm duiqi" id="setin" placeholder="">
                      </div>
                      </div>
						<div class="form-group">
                        <label for="state" class="col-xs-4 control-label">车辆损坏情况：</label>
                        <div class="col-xs-7">
                        <input type="" class="form-control input-sm duiqi" id="state" placeholder="">
                      </div>
                      </div>
						<div class="form-group">
                        <label for="deposit_back" class="col-xs-4 control-label">押金退还金额：</label>
                        <div class="col-xs-7">
                        <input type="" class="form-control input-sm duiqi" id="deposit_back" placeholder="">
                      </div>
                      </div>
						<div class="form-group">
                        <label for="fine" class="col-xs-4 control-label">交通违规罚款：</label>
                        <div class="col-xs-7">
                        <input type="" class="form-control input-sm duiqi" id="fine" placeholder="">
                      </div>
                      </div>
						<div class="form-group">
                        <label for="note" class="col-xs-4 control-label">备注信息：</label>
                        <div class="col-xs-7">
                        <input type="" class="form-control input-sm duiqi" id="note" placeholder="">
                      </div>
                      </div>
                  </form></div>
              </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
                <button type="button" class="btn btn-xs btn-green">保 存</button>
              </div>
              </div>
            <!-- /.modal-content --> 
          </div>
            <!-- /.modal-dialog --> 
          </div>
        <!-- /.modal --> 
        
        <!--弹出删除资源警告窗口-->
        <div class="modal fade" id="deleteOrder" role="dialog" aria-labelledby="gridSystemModalLabel">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                <h4 class="modal-title" id="gridSystemModalLabel">提示</h4>
              </div>
                <div class="modal-body">
                <div class="container-fluid"> 确定要删除该订单？删除后不可恢复！ </div>
              </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
                <button type="button" class="btn btn-xs btn-danger">保 存</button>
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
            <!--				行-->
            <div class="row">
                <div class="col-xs-1 "> 1 </div>
                <div class="col-xs-2"> sdf </div>
                <div class="col-xs-2"> sdf </div>

                <div class="col-xs-2"> 875 </div>
				 <div class="col-xs-1"> 是 </div>
				<div class="col-xs-1"> 是 </div>
                <!--					按钮-->
                <div class="col-xs-3">
                <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#viewUser">查看详细</button>
                <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#reviseUser">修改会员</button>
				<button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#reviseUser">查看历史订单</button>
              </div>
              </div>
          </div>
          </div>
			
<!--			查看用户信息-->
			<div class="modal fade" id="viewUser" role="dialog" aria-labelledby="gridSystemModalLabel">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                <h4 class="modal-title" id="gridSystemModalLabel">查看用户信息</h4>
              </div>
                <div class="modal-body">
                <div class="container-fluid">
                    <form class="form-horizontal">
                    <div class="form-group ">
                        <label for="cid" class="col-xs-3 control-label">用户ID：</label>
                        <div class="col-xs-8 ">
                        <label>xxx</label>
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="cplant" class="col-xs-3 control-label">用户姓名：</label>
                        <div class="col-xs-8 ">
                        <label>xxx</label>
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="cbrand" class="col-xs-3 control-label">身份证号：</label>
                        <div class="col-xs-8">
                        <label>xxx</label>
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="ccolor" class="col-xs-3 control-label">联系电话：</label>
                        <div class="col-xs-8">
                        <label>xxx</label>
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="cvolume" class="col-xs-3 control-label">驾驶证号：</label>
                        <div class="col-xs-8">
                        <label>xxx</label>
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="cdate" class="col-xs-3 control-label">年龄：</label>
                        <div class="col-xs-8">
                        <label>xxx</label>
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="coil" class="col-xs-3 control-label">是否会员：</label>
                        <div class="col-xs-8">
                        <label>xxx</label>
                      </div>
                      </div>

                  </form>
                  </div>
              </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
                <button type="button" class="btn btn-xs btn-green">保 存</button>
              </div>
              </div>
            <!-- /.modal-content --> 
          </div>
            <!-- /.modal-dialog --> 
          </div>
                
        <!--弹出修改用户窗口-->
        <div class="modal fade" id="reviseUser" role="dialog" aria-labelledby="gridSystemModalLabel">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                <h4 class="modal-title" id="gridSystemModalLabel">修改用户</h4>
              </div>
                <div class="modal-body">
                <div class="container-fluid">
                    <form class="form-horizontal">
<div class="form-group">
                      <label for="situation" class="col-xs-3 control-label">是否会员：</label>
                        <div class="col-xs-8">
                        <label class="control-label" for="anniu">
                            <input type="radio" name="situation" id="normal">
                            会员 </label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label class="control-label" for="meun">
                            <input type="radio" name="situation" id="forbid">
                            非会员 </label>
                      </div>
                      </div>
                  </form>
                  </div>
              </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
                <button type="button" class="btn btn-xs btn-green">保 存</button>
              </div>
              </div>
            <!-- /.modal-content --> 
          </div>
            <!-- /.modal-dialog --> 
          </div>
        <!-- /.modal --> 
        
        <!--弹出删除用户警告窗口-->
        <div class="modal fade" id="deleteUser" role="dialog" aria-labelledby="gridSystemModalLabel">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                <h4 class="modal-title" id="gridSystemModalLabel">提示</h4>
              </div>
                <div class="modal-body">
                <div class="container-fluid"> 确定要删除该用户？删除后不可恢复！ </div>
              </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
                <button type="button" class="btn  btn-xs btn-danger">保 存</button>
              </div>
              </div>
            <!-- /.modal-content --> 
          </div>
            <!-- /.modal-dialog --> 
          </div>
        <!-- /.modal --> 
        
      </div>
		
		        <!-- 维修信息 -->
        <div class="tab-pane" id="isfixed" role="tabpanel">
        <div class="check-div form-inline">
          </div>
        <div class="data-div">
            <div class="row tableHeader"> 
            <!--	col-lg-几就是几个宽度，bootstrap里面定义的-->
            <div class="col-xs-1 "> 编号 </div>
			<div class="col-xs-1 "> 车辆编号 </div>
            <div class="col-xs-2"> 车牌号 </div>
            <div class="col-xs-2"> 车辆型号 </div>
            <div class="col-xs-1"> 车辆状况 </div>
            <div class="col-xs-4"> 备注 </div>

            <div class="col-xs-1"> 操作 </div>
          </div>
            <div class="tablebody"> 
            
            <!-- 每一行-->
            <div class="row">
                <div class="col-xs-1 "> 1 </div>
                <div class="col-xs-1"> sdf </div>
                <div class="col-xs-2"> sdf </div>
                <div class="col-xs-2"> 13688889999 </div>
				<div class="col-xs-1"> sdf </div>
                <div class="col-xs-4"> 875 </div>
                <!--					按钮-->
                <div class="col-xs-1">
                <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#hasFixed">已维修</button>
              </div>
              </div>
          </div>
          </div>

        <!--弹出已维修窗口-->
        <div class="modal fade" id="hasFixed" role="dialog" aria-labelledby="gridSystemModalLabel">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                <h4 class="modal-title" id="gridSystemModalLabel">提示</h4>
              </div>
                <div class="modal-body">
                <div class="container-fluid"> 确定已经对该车辆完成维修？</div>
              </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
                <button type="button" class="btn btn-xs btn-danger">保 存</button>
              </div>
              </div>
            <!-- /.modal-content --> 
          </div>
            <!-- /.modal-dialog --> 
          </div>
        <!-- /.modal --> 
      </div>
		
		        <!-- 财务报表--日 -->
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
            <div class="col-xs-4"> 累计收入 </div>
          </div>
            <div class="tablebody"> 
            
            <!-- 每一行-->
            <div class="row">
                <div class="col-xs-2 "> 2018 </div>
            <div class="col-xs-2"> 56 </div>
            <div class="col-xs-2"> 12 </div>
            <div class="col-xs-2"> 456 </div>
            <div class="col-xs-4"> 123 </div>
              </div>
          </div>
        </div>
        
      </div>
		
		        <!-- 财务报表--月 -->
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
            <div class="col-xs-4"> 累计收入 </div>
          </div>
            <div class="tablebody"> 
            
            <!-- 每一行-->
            <div class="row">
                <div class="col-xs-2 "> 2018 </div>
            <div class="col-xs-2"> 56 </div>
            <div class="col-xs-2"> 12 </div>
            <div class="col-xs-2"> 456 </div>
            <div class="col-xs-4"> 123 </div>
              </div>
          </div>
        </div>

      </div>
		
		        <!-- 财务报表--季度 -->
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
            <div class="col-xs-4"> 累计收入 </div>
          </div>
            <div class="tablebody"> 
            
            <!-- 每一行-->
            <div class="row">
                <div class="col-xs-2 "> 2018 </div>
            <div class="col-xs-2"> 56 </div>
            <div class="col-xs-2"> 12 </div>
            <div class="col-xs-2"> 456 </div>
            <div class="col-xs-4"> 123 </div>
              </div>
          </div>
        </div>

      </div>
		
		        <!-- 财务报表--年 -->
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
            <div class="col-xs-4"> 累计收入 </div>
          </div>
            <div class="tablebody"> 
            
            <!-- 每一行-->
            <div class="row">
                <div class="col-xs-2 "> 2018 </div>
            <div class="col-xs-2"> 56 </div>
            <div class="col-xs-2"> 12 </div>
            <div class="col-xs-2"> 456 </div>
            <div class="col-xs-4"> 123 </div>
              </div>
          </div>
        </div>

      </div>
		
      </div>
  </div>
  </div>
<script src="js/jquery.nouislider.js"></script>
	  
</body>
</html>