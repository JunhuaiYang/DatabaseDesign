<?php
/* Smarty version 3.1.32, created on 2018-06-19 10:18:17
  from '/var/www/html/admin/templates/fix_row.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b2867e9c53431_46988345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f4eb4302902f15a306a723e8357f7c2d40dfe4c' => 
    array (
      0 => '/var/www/html/admin/templates/fix_row.tpl',
      1 => 1529373889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b2867e9c53431_46988345 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
  <div class="col-xs-1"> <?php echo $_smarty_tpl->tpl_vars['temp']->value->cid;?>
 </div>
  <div class="col-xs-2"> <?php echo $_smarty_tpl->tpl_vars['temp']->value->cplant;?>
 </div>
  <div class="col-xs-1"> <?php echo $_smarty_tpl->tpl_vars['temp']->value->cbrand;?>
 </div>
  <div class="col-xs-1"> <?php echo $_smarty_tpl->tpl_vars['temp']->value->cmodel;?>
 </div>
  <div class="col-xs-1"> <?php echo $_smarty_tpl->tpl_vars['temp']->value->cstate;?>
 </div>
  <div class="col-xs-4"> <?php echo $_smarty_tpl->tpl_vars['temp']->value->cnote;?>
 </div>
  <!--					按钮-->
  <div class="col-xs-2">
    <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#hasFixed_<?php echo $_smarty_tpl->tpl_vars['temp']->value->cid;?>
">已维修</button>
  </div>
</div><?php }
}
