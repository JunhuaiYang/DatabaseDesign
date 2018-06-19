<?php
  //确认订单

$contractid = $_POST['contractid'];
$setout = $_POST['setout'];
$deposit = $_POST['deposit'];

echo $contractid;
echo $setout;
echo $deposit;

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


if (empty($contractid) || empty($setout) || empty($deposit)) {
  //echo "<script>alert('数据输入不完整！');history.go(-1);</script>";
  exit;
} 



//查询是否有这个订单
$sql = "SELECT * from car_rent where contractid = '$contractid'";
//查询数据库
$retval = mysqli_query($conn, $sql);
if (!$retval) {
  die('无法读取数据: ' . mysqli_error($conn));
}
$num = mysqli_num_rows($retval);
if (!$num)  //没找到的话
{
  echo "<script>alert('没有该订单！');history.go(-1);</script>";
  exit;
}

//数据更新
$sql = "UPDATE `car_rental`.`car_rent` SET `deposit`='$deposit',
 `setout`='$setout', `status`='1' , `aid`='$aid' 
WHERE `contractid`='$contractid'";
$retval = mysqli_query($conn, $sql);
if (!$retval) {
  die('无法读取数据: ' . mysqli_error($conn));
}

echo "<script>alert('订单确认成功！');history.go(-1);</script>";

?>