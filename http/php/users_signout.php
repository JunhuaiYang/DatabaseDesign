<?php
  //销毁session
  session_start();
  session_unset();
  session_destroy();

  echo '<h2>退出成功！</h2>';
  echo '<meta http-equiv="refresh" content="0.5;url=../index.html">';
?>