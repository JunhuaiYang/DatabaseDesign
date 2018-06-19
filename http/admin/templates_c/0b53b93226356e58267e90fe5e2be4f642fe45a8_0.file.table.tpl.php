<?php
/* Smarty version 3.1.32, created on 2018-06-19 14:04:19
  from '/var/www/html/admin/templates/table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b289ce32a3ca0_73670668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b53b93226356e58267e90fe5e2be4f642fe45a8' => 
    array (
      0 => '/var/www/html/admin/templates/table.tpl',
      1 => 1529388182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b289ce32a3ca0_73670668 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row" >
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
