<?php
/* Smarty version 3.1.32, created on 2018-06-19 14:08:33
  from '/var/www/html/admin/templates/table_foot.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b289de123b202_16527436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6575ff8016a001925b92727c43204b0099dbec7e' => 
    array (
      0 => '/var/www/html/admin/templates/table_foot.tpl',
      1 => 1529388511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b289de123b202_16527436 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row alert-danger" role="alert" >
    <div class="col-xs-2"> <?php echo $_smarty_tpl->tpl_vars['temp']->value->dates;?>
 </div>
    <div class="col-xs-2"> <?php echo $_smarty_tpl->tpl_vars['temp']->value->rent_in;?>
 </div>
    <div class="col-xs-2"> <?php echo $_smarty_tpl->tpl_vars['temp']->value->deposit_in;?>
 </div>
    <div class="col-xs-2"> <?php echo $_smarty_tpl->tpl_vars['temp']->value->all_in;?>
 </div>
    <div class="col-xs-2"> <?php echo $_smarty_tpl->tpl_vars['temp']->value->fixed_out;?>
 </div>
    <div class="col-xs-2"> <?php echo $_smarty_tpl->tpl_vars['temp']->value->profit;?>
 </div>
</div><?php }
}
