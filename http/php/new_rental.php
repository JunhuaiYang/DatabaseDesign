<?php
  //新订单

$cid = $_POST['cid'];
$uid = $_POST['uid'];
$plan_day = $_POST['plan_day'];

//获得管理员id
session_start();
//获得用户名
$username = $_SESSION['user'];

//连接数据库
include "conn_db.php";
//获得职位
$sql_ad = "select * from admin where ausername = '" . $username . "'";
//查询数据库
$retval = mysqli_query($conn, $sql_ad);
if (!$retval) {
  die('无法读取数据: ' . mysqli_error($conn));
}
//取得结果
$row = mysqli_fetch_array($retval, MYSQLI_ASSOC);
$aid = $row['aid'];
if (empty($aid) )
{
  echo "<script>alert('请检查登录的是否是管理员账户');history.go(-1);</script>";
}

if (empty($cid) || empty($uid) || empty($plan_day)) {
  echo "<script>alert('数据输入不完整！');history.go(-1);</script>";
  exit;
} 

//查询是否有这个用户
$sql = "SELECT * from users where uid = '$uid'";
//查询数据库
$retval = mysqli_query($conn, $sql);
if (!$retval) {
  die('无法读取数据: ' . mysqli_error($conn));
}
$num = mysqli_num_rows($retval);
if (!$num)  //找到的话
{
  echo "<script>alert('没有该用户！');history.go(-1);</script>";
  exit;
}

//查询是否有这辆车
$sql = "SELECT * from car where cid = '$cid'";
//查询数据库
$retval = mysqli_query($conn, $sql);
if (!$retval) {
  die('无法读取数据: ' . mysqli_error($conn));
}
$num = mysqli_num_rows($retval);
if (!$num)  //找到的话
{
  echo "<script>alert('没有该车辆！');history.go(-1);</script>";
  exit;
}
//查询这辆车是否可以使用
$row = mysqli_fetch_array($retval, MYSQLI_ASSOC);
$cstatus = $row['cstatus'];
if($cstatus != '0')
{
  echo "<script>alert('该车辆状态无法租车！');history.go(-1);</script>";
  exit;
}


//数据插入
$sql = "INSERT INTO `car_rental`.`car_rent` (`cid`, `uid`, `aid`, `plan_day`) 
VALUES ('$cid', '$uid', '$aid', '$plan_day')";
$retval = mysqli_query($conn, $sql);
if (!$retval) {
  die('无法读取数据: ' . mysqli_error($conn));
}

//修改车辆状态
$sql = "UPDATE `car_rental`.`car` SET `cstatus`='1' WHERE `cid`='$cid'";
$retval = mysqli_query($conn, $sql);
if (!$retval) {
  die('无法读取数据: ' . mysqli_error($conn));
}

echo "<script>alert('订单生成成功！');history.go(-1);</script>";

?>