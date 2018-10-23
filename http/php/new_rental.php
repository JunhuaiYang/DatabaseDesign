<?php
 /*
 *  管理员新增租车订单
 * 由管理员填写租车订单
 */

  //新订单

$cid = $_POST['cid'];
$uid = $_POST['uid'];
$plan_day = $_POST['plan_day'];
$cplandate = $_POST['cplandate'];

//get 方法取得
$uid_get = $_GET['uid_get'];

if(empty($uid))
  $uid = $uid_get;


if (empty($cid) || empty($uid) || empty($plan_day)|| empty($cplandate)) {
  echo "<script>alert('数据输入不完整！');history.go(-1);</script>";
  exit;
} 

//连接数据库
include "conn_db.php";

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
//获得单价
$crent = $row['crent'];

//生成预定金额
$money_b = $crent*$plan_day;


//数据插入
$sql = "INSERT INTO `car_rental`.`car_rent` (`cid`, `uid`, `plan_day` , `cplandate` , `aid`, `money_b`) 
VALUES ('$cid', '$uid', '$plan_day', '$cplandate', '0', '$money_b')";
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

if(!empty($uid_get))  //客户端
  echo "<script>alert('订单生成成功！');history.go(-2);</script>";
else
echo "<script>alert('订单生成成功！');history.go(-1);</script>";

?>