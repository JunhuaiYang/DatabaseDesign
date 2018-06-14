<?php
$dbhost = 'localhost:3306';  // mysql服务器主机地址
$dbuser = 'rental';            // mysql用户名
$dbpass = '66778899';          // mysql用户名密码
$database = 'car_rental';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $database);
if(! $conn )
{
    die('连接失败: ' . mysqli_error($conn));
}
// 设置编码，防止中文乱码
mysqli_query($conn , "set names utf8");
 
$sql = 'SELECT * FROM car_rental.users_login';
 
echo '<h2>菜鸟教程 mysqli_fetch_array 测试<h2>';

$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
    die('无法读取数据: ' . mysqli_error($conn));
}
$num = mysqli_num_rows( $retval);

printf("%d",$num);

mysqli_close($conn);
?>