<?php
  //修改

  //计算
function diffBetweenTwoDays ($day1, $day2)
{
  $second1 = strtotime($day1);
  $second2 = strtotime($day2);
   
  return ($second1 - $second2) / 86400;
}

$contractid = $_POST['contractid'];
$cid = $_POST['cid'];
$uid = $_POST['uid'];
$aid =  $_POST['aid'];
$status = $_POST['status'];
$deposit = $_POST['deposit'];
$plan_day = $_POST['plan_day'];
$setout = $_POST['setout'];
$setin =  $_POST['setin'];
$state = $_POST['state'];
$deposit_back = $_POST['deposit_back'];
$fine =  $_POST['fine'];
$note = $_POST['note'];

//服务器判断

//注意，php的empty在判断0时也是空
if (empty($contractid) || empty($setin) || $state === '' ||  $fine === ''
|| empty($cid) || empty($uid) || empty($aid) || empty($plan_day) || empty($deposit)
|| empty($deposit_back) || empty($status) || empty($setout)) {
  echo "<script>alert('数据输入不完整！');history.go(-1);</script>";
  exit;
} 
if($state<0 || $state>10){
  echo "<script>alert('车辆损伤必须在0-10间');history.go(-1);</script>";
  exit;
}
if($status<0 || $status>2){
  echo "<script>alert('订单状态必须在0-2间');history.go(-1);</script>";
  exit;
}

//连接数据库
include "conn_db.php";

//查询是否有这个订单
$sarch_rental = "SELECT * from car_rent, car, users, admin
            where car_rent.aid = admin.aid and car_rent.cid = car.cid and
            car_rent.uid = users.uid and contractid = '$contractid'";
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
//查询这个订单的租出日期
$row = mysqli_fetch_array($retval, MYSQLI_ASSOC);
//查询这辆车的单价
$crent = $row['crent'];
//查询是否会员
$isvip = $row['isvip'];
//获得用户信誉度
$ucredit = $row['ucredit'];
$uid = $row['uid'];
$cid = $row['cid'];
$cstate = $row['cstate'];


//获得实际天数
$real_day = diffBetweenTwoDays($setin,$setout);
if($real_day < 0){
  echo "<script>alert('日期不能为负！');history.go(-1);</script>";
}elseif($real_day == 0){
  $real_day = 1;   //0天时最低为1天
}

//计算预定价格
$money_b = $crent * $plan_day;

//计算实际价格
if($isvip == 'y')  //会员
{
  $money_a = $crent * $real_day * 0.9;
}
else
{
  $money_a = $crent * $real_day;
}

//计算押金退还金额
$deposit_back = (10-$state)*0.1*$deposit;

//数据更新
$sql = "UPDATE `car_rental`.`car_rent` 
SET `money_a`='$money_a', `setin`='$setin', `state`='$state', `deposit_back`='$deposit_back', 
`fine`='$fine', `note`='$note', `real_day`='$real_day', `status`='$status' , `money_b`='$money_b'
, `cid`='$cid' , `uid`='$uid' , `aid`='$aid' , `deposit`='$deposit' , `plan_day`='$plan_day' 
WHERE `contractid`='$contractid'";
$retval = mysqli_query($conn, $sql);
if (!$retval) {
  die('无法读取数据: ' . mysqli_error($conn));
}

//用户信誉度更新
$ucredit_new = $ucredit + (2-$state)*10;
$sql = "UPDATE `car_rental`.`users` SET `ucredit`='$ucredit_new' WHERE `uid`='$uid'";
$retval = mysqli_query($conn, $sql);
if (!$retval) {
  die('无法读取数据: ' . mysqli_error($conn));
}

//车辆更新
$cstate_new = $cstate - $state;
//判读是否需要维修
if($cstate_new < 8){
  $cstatus = 2;
}else{
  $cstatus = 0;
}
$sql = "UPDATE `car_rental`.`car` SET `cstate`='$cstate_new', `cstatus`='$cstatus' WHERE `cid`='$cid'";
$retval = mysqli_query($conn, $sql);
if (!$retval) {
  die('无法读取数据: ' . mysqli_error($conn));
}


echo "<script>alert('订单修改成功！');history.go(-1);</script>";

?>