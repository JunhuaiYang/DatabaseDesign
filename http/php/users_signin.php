<?php
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
        //链接数据库
        $conn = mysqli_connect(localhost , 'rental' , '66778899');
        if(! $conn )
        {
            die('连接失败: ' . mysqli_error($conn));
        }
        // 设置编码，防止中文乱码
        mysqli_query($conn , "set names utf8");

        //选择数据库
        mysqli_select_db( $conn, 'car_rental');

        // echo '链接成功！';

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
            // 自动跳转
            echo '<meta http-equiv="refresh" content="1;url=../users.html">'; 
        }  
        else 
        {  
            echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";  
        }  

        mysqli_close($conn); //关闭链接

    }
?>