<?php
/* Smarty version 3.1.32, created on 2018-06-19 09:11:46
  from '/var/www/html/admin/templates/rental_row.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b285852af6ad3_68696640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df4250dce802e706a13ef8507a301d443786bdbc' => 
    array (
      0 => '/var/www/html/admin/templates/rental_row.tpl',
      1 => 1529370702,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b285852af6ad3_68696640 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
  <div class="col-xs-1 "> <?php echo $_smarty_tpl->tpl_vars['temp']->value->contractid;?>
 </div>
  <div class="col-xs-1 "> <?php echo $_smarty_tpl->tpl_vars['temp']->value->uname;?>
 </div>
  <div class="col-xs-1 "> <?php echo $_smarty_tpl->tpl_vars['temp']->value->cid;?>
 </div>
  <div class="col-xs-2">  <?php echo $_smarty_tpl->tpl_vars['temp']->value->cplant;?>
 </div>
  <div class="col-xs-1 "> <?php echo $_smarty_tpl->tpl_vars['temp']->value->cbrand;?>
 </div>
  <div class="col-xs-1 "> <?php echo $_smarty_tpl->tpl_vars['temp']->value->cmodel;?>
 </div>
  <div class="col-xs-1 "> <?php echo $_smarty_tpl->tpl_vars['temp']->value->aname;?>
 </div>

  <div class="col-xs-1 "> 
    <?php if ($_smarty_tpl->tpl_vars['temp']->value->status == '0') {?>
    <span class="label label-primary">待确认</span> 
    <?php } elseif ($_smarty_tpl->tpl_vars['temp']->value->status == '1') {?>
    <span class="label label-warning">待还车</span> 
    <?php } else { ?>
    <span class="label label-success">已完成</span> 
    <?php }?>   
  </div>

  <!--					按钮-->
  <div class="col-xs-3">
    <?php if ($_smarty_tpl->tpl_vars['temp']->value->status == '0') {?>
    <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#sureSetout_<?php echo $_smarty_tpl->tpl_vars['temp']->value->contractid;?>
">确认租车</button>
    <?php } elseif ($_smarty_tpl->tpl_vars['temp']->value->status == '1') {?>
    <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#sureSetin_<?php echo $_smarty_tpl->tpl_vars['temp']->value->contractid;?>
">确认还车</button>
    <?php }?>  
    <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#viewOrder_<?php echo $_smarty_tpl->tpl_vars['temp']->value->contractid;?>
">查看详细</button>
    <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#changeOrder_<?php echo $_smarty_tpl->tpl_vars['temp']->value->contractid;?>
">修改</button>
    <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteOrder_<?php echo $_smarty_tpl->tpl_vars['temp']->value->contractid;?>
">删除</button>
  </div>
</div><?php }
}
