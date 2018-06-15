<?php
    //注册操作
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $position = $_POST['position'];
    $userid = $_POST['userid'];

    //服务器端再检测一次
    if (empty( $username) || empty( $password) || empty( $name) || empty( $position) 
       || empty( $userid))
    {
        echo '数据输入不完整';
        exit;
    }
    else
    {
        //连接数据库
        include "conn_db.php";

        //查询是否有这个用户名
        $sql = "SELECT * from admin_login where ausername = '" .$username."'";
        //查询数据库
        $retval = mysqli_query( $conn, $sql );
        if(! $retval )
        {
            die('无法读取数据: ' . mysqli_error($conn));
        }
        $num = mysqli_num_rows( $retval); 
        if($num)  //找到的话
        {  
            echo "<script>alert('用户名已经被占用！');history.go(-1);</script>";  
            exit;
        }  

        //插入创建
        $insert_sql = "INSERT INTO `car_rental`.`admin` (`aname`, `aposition`, `aidnum`, `ausername`) 
        VALUES ('$name', '$position', '$userid', '$username')";
        $retval = mysqli_query( $conn, $insert_sql );
        if(! $retval )
        {
            die('无法读取数据: ' . mysqli_error($conn));
            echo "<script>alert('错误！');history.go(-1);</script>";  
            exit;
        }

        //插入密码
        $insert_psw = "INSERT INTO `car_rental`.`admin_login` (`ausername`, `apassword`) 
        VALUES ('$username', '$password')";
        $retval = mysqli_query( $conn, $insert_psw );
        if(! $retval )
        {
            die('无法读取数据: ' . mysqli_error($conn));
            echo "<script>alert('错误！');history.go(-1);</script>";  
            exit;
        }

        echo '<h3> 注册成功！</h3>';
        echo '<meta http-equiv="refresh" content="1;url=../admin/admin.php">'; 
        
        //设置SESSION变量
        session_start();
        $_SESSION['login'] = 'true';
        $_SESSION['user'] = $username;

        mysqli_close($conn); //关闭链接

    }
?>