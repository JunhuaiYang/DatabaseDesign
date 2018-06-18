<?php
/* Smarty version 3.1.32, created on 2018-06-18 17:35:57
  from '/var/www/html/admin/templates/car_row.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b277cfd96ad45_06969448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60573c8f40fdd64b6f8512e4bd3eab940909dc2e' => 
    array (
      0 => '/var/www/html/admin/templates/car_row.tpl',
      1 => 1529314520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b277cfd96ad45_06969448 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-xs-1 "> <?php echo $_smarty_tpl->tpl_vars['temp']->value->cid;?>
 </div>
    <div class="col-xs-2"> <?php echo $_smarty_tpl->tpl_vars['temp']->value->cplant;?>
 </div>
    <div class="col-xs-1 "> <?php echo $_smarty_tpl->tpl_vars['temp']->value->cbrand;?>
 </div>
    <div class="col-xs-2"> <?php echo $_smarty_tpl->tpl_vars['temp']->value->cmodel;?>
 </div>
    <div class="col-xs-1"> <?php echo $_smarty_tpl->tpl_vars['temp']->value->crent;?>
 </div>
    <div class="col-xs-2"> 
    <?php if ($_smarty_tpl->tpl_vars['temp']->value->cstatus == '0') {?>
    <span class="label label-default">未出租</span> 
    <?php } elseif ($_smarty_tpl->tpl_vars['temp']->value->cstatus == '1') {?>
    <span class="label label-warning">已出租</span> 
    <?php } else { ?>
    <span class="label label-danger">待维修</span> 
    <?php }?>    
    </div>
    <!--					按钮-->
    <div class="col-xs-3">
    <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#viewSource_<?php echo $_smarty_tpl->tpl_vars['temp']->value->cid;?>
">查看详细</button>
    <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#changeSource_<?php echo $_smarty_tpl->tpl_vars['temp']->value->cid;?>
">修改</button>
    <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteSource_<?php echo $_smarty_tpl->tpl_vars['temp']->value->cid;?>
">删除</button>
  </div>
  </div><?php }
}
