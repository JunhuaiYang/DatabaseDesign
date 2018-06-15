<?php
 header('Content-type:text/json;charset=utf-8');
 $username= 'sdf';
 $password= 'htfg';


 $data='{username:"' . $username . '",password:"' . $password .'"}';//组合成json格式数据
 echo json_encode($data);//输出json数据
?>