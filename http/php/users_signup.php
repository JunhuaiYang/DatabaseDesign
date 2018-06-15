<?php
    //注册操作
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $userid = $_POST['userid'];
    $licese = $_POST['licese'];
    $age = $_POST['age'];

    // echo $username;
    // echo $password;
    // echo $name;
    // echo $tel;
    // echo $userid;
    // echo $licese;
    // echo $age;

    //服务器端再检测一次
    if (empty( $username) || empty( $password) || empty( $name) || empty( $tel) 
       || empty( $userid)|| empty( $licese) || empty( $age) )
    {
        echo '数据输入不完整';
        exit;
    }
    else
    {
        //连接数据库
        include "conn_db.php";

        //查询是否有这个用户名
        $sql = "select * from users_login where username = '" .$username."'";
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
        $insert_sql = "INSERT INTO `car_rental`.`users` (`uname`, `uidnum`, `utel`, `ulicese`, `uage`, `isvip`, `username`) 
        VALUES ('$name', '$userid', '$tel', '$licese', '$age', 'n', '$username')";
        $retval = mysqli_query( $conn, $insert_sql );
        if(! $retval )
        {
            die('无法读取数据: ' . mysqli_error($conn));
            echo "<script>alert('错误！');history.go(-1);</script>";  
            exit;
        }

        //插入密码
        $insert_psw = "INSERT INTO `users_login` (`username`, `upassword`) VALUES ('$username', '$password')";
        $retval = mysqli_query( $conn, $insert_psw );
        if(! $retval )
        {
            die('无法读取数据: ' . mysqli_error($conn));
            echo "<script>alert('错误！');history.go(-1);</script>";  
            exit;
        }

        echo '<h3> 注册成功！</h3>';
        echo '<meta http-equiv="refresh" content="1;url=../users.html">'; 
        
        //设置SESSION变量
        session_start();
        $_SESSION['login'] = 'true';
        $_SESSION['user'] = $username;

        mysqli_close($conn); //关闭链接

    }
?>