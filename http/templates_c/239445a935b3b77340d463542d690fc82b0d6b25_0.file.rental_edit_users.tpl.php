<?php
/* Smarty version 3.1.32, created on 2018-06-19 19:02:37
  from '/var/www/html/templates/rental_edit_users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b28e2cd3a4160_24434977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '239445a935b3b77340d463542d690fc82b0d6b25' => 
    array (
      0 => '/var/www/html/templates/rental_edit_users.tpl',
      1 => 1529405835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b28e2cd3a4160_24434977 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- /.modal -->
<!--查看车辆资源弹出窗口-->
<div class="modal fade" id="viewOrder_<?php echo $_smarty_tpl->tpl_vars['temp']->value->contractid;?>
" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="gridSystemModalLabel">查看订单信息</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <form class="form-horizontal">
            <div class="form-group ">
              <label for="cid" class="col-xs-4 control-label">合同号：</label>
              <div class="col-xs-7 ">
                <label><?php echo $_smarty_tpl->tpl_vars['temp']->value->contractid;?>
</label>
              </div>
            </div>
            <div class="form-group">
              <label for="cplant" class="col-xs-4 control-label">车辆ID：</label>
              <div class="col-xs-7 ">
                <label><?php echo $_smarty_tpl->tpl_vars['temp']->value->cid;?>
</label>
              </div>
            </div>
            <div class="form-group">
              <label for="cplant" class="col-xs-4 control-label">车牌号：</label>
              <div class="col-xs-7 ">
                <label><?php echo $_smarty_tpl->tpl_vars['temp']->value->cplant;?>
</label>
              </div>
            </div>
            <div class="form-group">
              <label for="cplant" class="col-xs-4 control-label">车辆品牌：</label>
              <div class="col-xs-7 ">
                <label><?php echo $_smarty_tpl->tpl_vars['temp']->value->cbrand;?>
</label>
              </div>
            </div>
            <div class="form-group">
              <label for="cplant" class="col-xs-4 control-label">车辆型号：</label>
              <div class="col-xs-7 ">
                <label><?php echo $_smarty_tpl->tpl_vars['temp']->value->cmodel;?>
</label>
              </div>
            </div>
            <div class="form-group">
              <label for="cbrand" class="col-xs-4 control-label">用户名：</label>
              <div class="col-xs-7">
                <label><?php echo $_smarty_tpl->tpl_vars['temp']->value->username;?>
</label>
              </div>
            </div>
            <div class="form-group">
              <label for="cbrand" class="col-xs-4 control-label">用户姓名：</label>
              <div class="col-xs-7">
                <label><?php echo $_smarty_tpl->tpl_vars['temp']->value->uname;?>
</label>
              </div>
            </div>
            <div class="form-group">
              <label for="cbrand" class="col-xs-4 control-label">身份证号：</label>
              <div class="col-xs-7">
                <label><?php echo $_smarty_tpl->tpl_vars['temp']->value->uidnum;?>
</label>
              </div>
            </div>
            <div class="form-group">
              <label for="ccolor" class="col-xs-4 control-label">经手人：</label>
              <div class="col-xs-7">
                <label><?php echo $_smarty_tpl->tpl_vars['temp']->value->aname;?>
</label>
              </div>
            </div>
            <div class="form-group">
              <label for="cdate" class="col-xs-4 control-label">押金：</label>
              <div class="col-xs-7">
                <label><?php echo $_smarty_tpl->tpl_vars['temp']->value->deposit;?>
</label>
              </div>
            </div>
            <div class="form-group">
                <label for="state" class="col-xs-4 control-label">预定金额：</label>
                <div class="col-xs-7">
                  <label><?php echo $_smarty_tpl->tpl_vars['temp']->value->money_b;?>
</label>
                </div>
              </div>
            <div class="form-group">
              <label for="cstate" class="col-xs-4 control-label">订单金额：</label>
              <div class="col-xs-7">
                <label><?php echo $_smarty_tpl->tpl_vars['temp']->value->money_a;?>
</label>
              </div>
            </div>
            <div class="form-group">
                <label for="crent" class="col-xs-4 control-label">预定时间：</label>
                <div class="col-xs-7">
                  <label><?php echo $_smarty_tpl->tpl_vars['temp']->value->cplandate;?>
</label>
                </div>
              </div>
            <div class="form-group">
              <label for="crent" class="col-xs-4 control-label">出车时间：</label>
              <div class="col-xs-7">
                <label><?php echo $_smarty_tpl->tpl_vars['temp']->value->setout;?>
</label>
              </div>
            </div>
            <div class="form-group">
              <label for="cnote" class="col-xs-4 control-label">还车时间：</label>
              <div class="col-xs-7">
                <label><?php echo $_smarty_tpl->tpl_vars['temp']->value->setin;?>
</label>
              </div>
            </div>
            <div class="form-group">
                <label for="cnote" class="col-xs-4 control-label">实际租车天数：</label>
                <div class="col-xs-7">
                  <label><?php echo $_smarty_tpl->tpl_vars['temp']->value->real_day;?>
</label>
                </div>
              </div>
            <div class="form-group">
              <label for="cnote" class="col-xs-4 control-label">车辆损坏情况：</label>
              <div class="col-xs-7">
                <label><?php echo $_smarty_tpl->tpl_vars['temp']->value->state;?>
</label>
              </div>
            </div>
            <div class="form-group">
              <label for="cnote" class="col-xs-4 control-label">押金退还金额：</label>
              <div class="col-xs-7">
                <label><?php echo $_smarty_tpl->tpl_vars['temp']->value->deposit_back;?>
</label>
              </div>
            </div>
            <div class="form-group">
              <label for="cnote" class="col-xs-4 control-label">交通违规罚款：</label>
              <div class="col-xs-7">
                <label><?php echo $_smarty_tpl->tpl_vars['temp']->value->fine;?>
</label>
              </div>
            </div>
            <div class="form-group">
              <label for="cnote" class="col-xs-4 control-label">备注信息：</label>
              <div class="col-xs-7">
                <label><?php echo $_smarty_tpl->tpl_vars['temp']->value->note;?>
</label>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-xs btn-white" data-dismiss="modal">确 定</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal --><?php }
}
