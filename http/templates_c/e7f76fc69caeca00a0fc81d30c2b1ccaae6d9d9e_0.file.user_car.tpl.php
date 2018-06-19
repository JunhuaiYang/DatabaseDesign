<?php
/* Smarty version 3.1.32, created on 2018-06-19 16:19:16
  from '/var/www/html/templates/user_car.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b28bc846d0e20_53414011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7f76fc69caeca00a0fc81d30c2b1ccaae6d9d9e' => 
    array (
      0 => '/var/www/html/templates/user_car.tpl',
      1 => 1529396347,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b28bc846d0e20_53414011 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
  <div class="col-xs-1"> <?php echo $_smarty_tpl->tpl_vars['temp']->value->cid;?>
 </div>
  <div class="col-xs-2"> <?php echo $_smarty_tpl->tpl_vars['temp']->value->cplant;?>
 </div>
  <div class="col-xs-1"> <?php echo $_smarty_tpl->tpl_vars['temp']->value->cbrand;?>
 </div>
  <div class="col-xs-1"> <?php echo $_smarty_tpl->tpl_vars['temp']->value->cmodel;?>
 </div>
  <div class="col-xs-1"> <?php echo $_smarty_tpl->tpl_vars['temp']->value->ccolor;?>
 </div>
  <div class="col-xs-1"> <?php echo $_smarty_tpl->tpl_vars['temp']->value->cvolume;?>
 </div>
  <div class="col-xs-1"> <?php echo $_smarty_tpl->tpl_vars['temp']->value->coil;?>
 </div>
  <div class="col-xs-2"> <?php echo $_smarty_tpl->tpl_vars['temp']->value->cdate;?>
 </div>
  <div class="col-xs-1"> <?php echo $_smarty_tpl->tpl_vars['temp']->value->crent;?>
 </div>
  <!--					按钮-->
  <div class="col-xs-1">
    <a href="submit.php?cid=<?php echo $_smarty_tpl->tpl_vars['temp']->value->cid;?>
">
      <button class="btn btn-success btn-xs" data-toggle="modal">预定！</button>
    </a>
  </div>
</div><?php }
}
