<?php
echo 'try';

require 'smarty/libs/Smarty.class.php';
$smarty=new Smarty();
$name='刘二狗';
$smarty->assign( 'name' , $name );
$smarty->display('test.tpl');