<?php
  //编辑车辆
  $cid    = $_POST['cid'];
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
  //11项

  //服务器端判断完整性
  if (empty($cplant) || empty($cbrand) || empty($cmodel) || empty($cstate)
  || empty($crent)|| empty($cid)) {
  echo "<script>alert('数据输入不完整！');history.go(-1);</script>";
  exit;
  } 

  //连接数据库
  include "conn_db.php";

  //先检查该数据是否存在
  $sql = "select * from car where cid = '$cid'";
  //查询数据库
  $retval = mysqli_query( $conn, $sql );
  if(! $retval )
  {
      die('无法读取数据: ' . mysqli_error($conn));
  }
  $num = mysqli_num_rows( $retval); 
  if(!$num)  //没找到的的话
  {
    echo "<script>alert('没有找到该车辆！');history.go(-1);</script>";
    exit;
  }
  // echo '找到！';

  //更新车辆状态
  if($cstate < 8){
    $cstatus = 2;
  }else{
    $cstatus = 0;
  }

  //更新内容
  $sql_update = "UPDATE `car_rental`.`car` SET
   `cplant`='$cplant', `cbrand`='$cbrand', `cmodel`='$cmodel', `ccolor`='$ccolor', `cvolume`='$cvolume',
    `cdate`='$cdate', `coil`='$coil', `cstate`='$cstate', `crent`='$crent', `cnote`='$cnote', `cstatus`='$cstatus'
    WHERE `cid`='$cid'";

  $retval = mysqli_query($conn, $sql_update);
  if (!$retval) {
    die('无法读取数据: ' . mysqli_error($conn));
    echo "<script>alert('错误！');history.go(-1);</script>";
    exit;
  }

  echo "<script>alert('修改成功！');history.go(-1);</script>";

?>