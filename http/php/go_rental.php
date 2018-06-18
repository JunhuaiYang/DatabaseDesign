<?php
  //确认订单

$contractid = $_POST['contractid'];
$setout = $_POST['setout'];
$deposit = $_POST['deposit'];

echo $contractid;
echo $setout;
echo $deposit;

if (empty($contractid) || empty($setout) || empty($deposit)) {
  //echo "<script>alert('数据输入不完整！');history.go(-1);</script>";
  exit;
} 

//连接数据库
include "conn_db.php";

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
$sql = "UPDATE `car_rental`.`car_rent` SET `deposit`='$deposit', `setout`='$setout', `status`='1' 
WHERE `contractid`='$contractid'";
$retval = mysqli_query($conn, $sql);
if (!$retval) {
  die('无法读取数据: ' . mysqli_error($conn));
}

echo "<script>alert('订单确认成功！');history.go(-1);</script>";

?>