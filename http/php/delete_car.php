<?php
 /*
 *  在车辆管理中删除车辆
 *  从数据库中删除该车辆
 */

$cid = $_POST['cid'];

  //服务器端判断完整性
if (empty($cid)) {
  echo "<script>alert('数据输入不完整！');history.go(-1);</script>";
  exit;
} 
  
  //连接数据库
include "conn_db.php";

  //先检查该数据是否存在
$sql = "select * from car where cid = '$cid'";
  //查询数据库
$retval = mysqli_query($conn, $sql);
if (!$retval) {
  die('1无法读取数据: ' . mysqli_error($conn));
}
$num = mysqli_num_rows($retval);
if (!$num)  //没找到的的话
{
  echo "<script>alert('没有找到该车辆！');history.go(-1);</script>";
  exit;
}

  //删除
$sql_delete = "DELETE FROM `car_rental`.`car` WHERE `cid`='$cid'";
$retval = mysqli_query($conn, $sql_delete);
if (!$retval) {
  die('2无法读取数据: ' . mysqli_error($conn));
  echo "<script>alert('错误！');history.go(-1);</script>";
  exit;
}

echo "<script>alert('删除成功！');history.go(-1);</script>";

?>