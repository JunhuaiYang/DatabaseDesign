<?php
 /*
 *  用户登录
 * 与数据库中的用户表比对并设置SESSION变量
 */

    //登录各种检测
    $username = $_POST['username']; //trim可以去头尾空格
    $password = $_POST['password'];

    //服务器端再检测一次
    if (empty( $username) || empty( $password) )
    {
        echo '数据输入不完整';
        exit;
    }
    else
    {
        //连接数据库
        include "conn_db.php";

        $sql = "select * from users_login where username = '" .$username. "' and upassword = '".$password ."'";

        //查询数据库
        $retval = mysqli_query( $conn, $sql );
        if(! $retval )
        {
            die('无法读取数据: ' . mysqli_error($conn));
        }
        
        $num = mysqli_num_rows( $retval); 
        
        if($num)  //找到的话
        {  
            echo '<h2>登录成功！</h2>' ;
            //设置SESSION变量
            session_start();
            $_SESSION['login'] = 'true';
            $_SESSION['user'] = $username;
            $_SESSION['type'] = 'users';
            // 自动跳转
            echo '<meta http-equiv="refresh" content="1;url=../users.php">'; 
        }  
        else 
        {  
            echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";  
        }  

        mysqli_close($conn); //关闭链接

    }
?>