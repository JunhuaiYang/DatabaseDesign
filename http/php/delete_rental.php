<?php
 /*
 *  在订单管理中删除订单
 * 在数据库中删除该订单
 */

  //删除订单
$contractid = $_POST['contractid'];

  //连接数据库
include "conn_db.php";

//查询是否有这个订单
$sarch_rental = "SELECT * from car_rent
            where contractid = '$contractid'";
//查询数据库
$retval = mysqli_query($conn, $sarch_rental);
if (!$retval) {
  die('无法读取数据: ' . mysqli_error($conn));
}
$num = mysqli_num_rows($retval);
if (!$num)  //没找到的话
{
  echo "<script>alert('没有该订单！');history.go(-1);</script>";
  exit;
}

  //删除
$sql_delete = "DELETE FROM `car_rental`.`car_rent` WHERE `contractid`='$contractid'";
$retval = mysqli_query($conn, $sql_delete);
if (!$retval) {
  die('2无法读取数据: ' . mysqli_error($conn));
  echo "<script>alert('错误！');history.go(-1);</script>";
  exit;
}

echo "<script>alert('删除成功！');history.go(-1);</script>";

?>