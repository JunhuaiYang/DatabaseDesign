<?php
/* Smarty version 3.1.32, created on 2018-06-19 19:02:37
  from '/var/www/html/templates/rental_row_users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b28e2cd38ff68_25810356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd228254344118bba762f433e8dfb0dab032854f' => 
    array (
      0 => '/var/www/html/templates/rental_row_users.tpl',
      1 => 1529406148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b28e2cd38ff68_25810356 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
  <div class="col-xs-1 "> <?php echo $_smarty_tpl->tpl_vars['temp']->value->contractid;?>
 </div>
  <div class="col-xs-1 "> <?php echo $_smarty_tpl->tpl_vars['temp']->value->cid;?>
 </div>
  <div class="col-xs-1 "> <?php echo $_smarty_tpl->tpl_vars['temp']->value->cplant;?>
 </div>
  <div class="col-xs-1 "> <?php echo $_smarty_tpl->tpl_vars['temp']->value->cbrand;?>
 </div>
  <div class="col-xs-1 "> <?php echo $_smarty_tpl->tpl_vars['temp']->value->cmodel;?>
 </div>
  <div class="col-xs-1 "> <?php echo $_smarty_tpl->tpl_vars['temp']->value->aname;?>
 </div>
  <div class="col-xs-1 "> <?php echo $_smarty_tpl->tpl_vars['temp']->value->deposit;?>
 </div>
  <div class="col-xs-1 "> <?php echo $_smarty_tpl->tpl_vars['temp']->value->money_b;?>
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
  <div class="col-xs-1 "> <?php echo $_smarty_tpl->tpl_vars['temp']->value->deposit_back;?>
 </div>
  <div class="col-xs-1 "> <?php echo $_smarty_tpl->tpl_vars['temp']->value->money_a;?>
 </div>
  <!--					按钮-->
  <div class="col-xs-1">
    <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#viewOrder_<?php echo $_smarty_tpl->tpl_vars['temp']->value->contractid;?>
">查看详细</button>
  </div>
</div><?php }
}
