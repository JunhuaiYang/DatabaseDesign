<?php
 /*
 *  新增车辆
 * 新增车辆信息到数据表中
 */

//取得数据
  $cplant = $_POST['cplant'];
  $cbrand = $_POST['cbrand'];
  $cmodel = $_POST['cmodel'];
  $ccolor = $_POST['ccolor'];
  $cvolume = $_POST['cvolume'];
  $cdate = $_POST['cdate'];
  $coil = $_POST['coil'];
  $cstate = $_POST['cstate'];
  $crent = $_POST['crent'];
  $cnote = $_POST['cnote'];

  if (empty($cplant) || empty($cbrand) || empty($cmodel) || empty($cstate)
  || empty($crent)) {
  echo "<script>alert('数据输入不完整！');history.go(-1);</script>";
  exit;
  } 
  else{
   //连接数据库
  include "conn_db.php";

  //先插入必要的
  //cstatus 表示车辆状态 0为未出租，1为已出租
  $insert_ness = "INSERT INTO `car_rental`.`car` (`cplant`, `cbrand`, `cmodel`,
   `ccolor`, `cvolume`, `cdate`, `coil`, `cstate`, `crent`, `cnote`, `cstatus`) 
  VALUES ('$cplant', '$cbrand', '$cmodel', '$ccolor', '$cvolume', '$cdate',
   '$coil', '$cstate', '$crent', '$cnote', '0')";

  $retval = mysqli_query($conn, $insert_ness);
  if (!$retval) {
    die('无法读取数据: ' . mysqli_error($conn));
    echo "<script>alert('错误！');history.go(-1);</script>";
    exit;
  }

  echo "<script>alert('插入成功！');history.go(-1);</script>";
  }

?>