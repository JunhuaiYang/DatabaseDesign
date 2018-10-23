<?php
 /*
 *  车辆维修
 * 生成支出价格
 */

  //维修车辆

$cid = $_POST['cid'];
$fmoney = $_POST['fmoney'];
$fdate = $_POST['fdate'];

if (empty($cid) || empty($fmoney) || empty($fdate)) {
  echo "<script>alert('数据输入不完整！');history.go(-1);</script>";
  exit;
}

  //连接数据库
include "conn_db.php";

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

//将信息加入表中
$sql = "INSERT INTO `car_rental`.`fixed_car` (`cid`, `fdate`, `fmoney`) 
VALUES ('$cid', '$fdate', '$fmoney')";
$retval = mysqli_query($conn, $sql);
if (!$retval) {
  die('无法读取数据: ' . mysqli_error($conn));
}

//修改车辆状态
$sql = "UPDATE `car_rental`.`car` SET `cstate`='10', `cstatus`='0' WHERE `cid`='$cid'";
$retval = mysqli_query($conn, $sql);
if (!$retval) {
  die('无法读取数据: ' . mysqli_error($conn));
}

echo "<script>alert('维修信息修改成功！');history.go(-1);</script>";


?>