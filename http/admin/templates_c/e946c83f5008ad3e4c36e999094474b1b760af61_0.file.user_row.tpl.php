<?php
/* Smarty version 3.1.32, created on 2018-06-18 15:42:55
  from '/var/www/html/admin/templates/user_row.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b27627f1c9ba7_81390872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e946c83f5008ad3e4c36e999094474b1b760af61' => 
    array (
      0 => '/var/www/html/admin/templates/user_row.tpl',
      1 => 1529307770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b27627f1c9ba7_81390872 (Smarty_Internal_Template $_smarty_tpl) {
?>        <!--		<?php echo $_smarty_tpl->tpl_vars['temp']->value->uid;?>
		行-->
            <div class="row">
                <div class="col-xs-1"> <?php echo $_smarty_tpl->tpl_vars['temp']->value->uid;?>
 </div>
                <div class="col-xs-2"> <?php echo $_smarty_tpl->tpl_vars['temp']->value->username;?>
 </div>
                <div class="col-xs-2"> <?php echo $_smarty_tpl->tpl_vars['temp']->value->uname;?>
 </div>
                <div class="col-xs-2"> <?php echo $_smarty_tpl->tpl_vars['temp']->value->utel;?>
 </div>

                <div class="col-xs-1"> 
                <?php if ($_smarty_tpl->tpl_vars['temp']->value->isvip == 'y') {?>
                <span class="label label-success">会员</span> 
                <?php } else { ?>
                <span class="label label-default">非会员</span> 
                <?php }?>  
                </div>

                                                                
                <div class="col-xs-1"> 
                <?php if ($_smarty_tpl->tpl_vars['temp']->value->ucredit >= '80') {?>
                <span class="label label-success">优</span> 
                <?php } elseif ($_smarty_tpl->tpl_vars['temp']->value->ucredit <= '30') {?>
                <span class="label label-danger">差</span> 
                <?php } else { ?>
                <span class="label label-warning">良</span> 
                <?php }?> 

                </div>

                <!--					按钮-->
                <div class="col-xs-3">
                <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#viewUser_<?php echo $_smarty_tpl->tpl_vars['temp']->value->uid;?>
">查看详细</button>
                <button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#reviseUser_<?php echo $_smarty_tpl->tpl_vars['temp']->value->uid;?>
">修改会员</button>
				        <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#_<?php echo $_smarty_tpl->tpl_vars['temp']->value->uid;?>
">查看历史订单</button>
              </div>
              </div><?php }
}
