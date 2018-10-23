<?php

/*
 *  链接数据库
 */
header("content-type:text/html;charset=utf-8");  

    //链接数据库
$conn = mysqli_connect(localhost, 'rental', '66778899');
if (!$conn) {
    die('连接失败: ' . mysqli_error($conn));
    exit;
}
    // 设置编码，防止中文乱码
mysqli_query($conn, "set names utf8");

    //选择数据库
mysqli_select_db($conn, 'car_rental');

    // echo '链接成功！';

?>