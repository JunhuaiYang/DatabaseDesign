<?php
 /*
 *  用户管理中编辑用户信息
 * 更改用户的会员体系
 */

  //编辑用户
  $uid  = $_POST['uid'];
  $isvip  = $_POST['isvip'];

  //服务器端判断完整性
  if (empty($uid)) 
  {
  echo "<script>alert('数据输入不完整！');history.go(-1);</script>";
  exit;
  } 

  //连接数据库
  include "conn_db.php";

  //先检查该数据是否存在
  $sql = "select * from users where uid = '$uid'";
  //查询数据库
  $retval = mysqli_query( $conn, $sql );
  if(! $retval )
  {
      die('无法读取数据: ' . mysqli_error($conn));
  }
  $num = mysqli_num_rows( $retval); 
  if(!$num)  //没找到的的话
  {
    echo "<script>alert('没有找到该用户！');history.go(-1);</script>";
    exit;
  }

  //更新
  $sql_updata = "UPDATE `car_rental`.`users` SET `isvip`='$isvip' WHERE `uid`='$uid'";
  $retval = mysqli_query($conn, $sql_updata);
  if (!$retval) {
    die('2无法读取数据: ' . mysqli_error($conn));
    echo "<script>alert('错误！');history.go(-1);</script>";
    exit;
  }

  echo "<script>alert('修改成功！');history.go(-1);</script>";

?>