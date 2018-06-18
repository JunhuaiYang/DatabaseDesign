<?php
/* Smarty version 3.1.32, created on 2018-06-18 17:02:37
  from '/var/www/html/admin/templates/user_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b27752d0540c0_64655513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '060b7bf07aee05e668811fbb8e035aec6b5c5c00' => 
    array (
      0 => '/var/www/html/admin/templates/user_edit.tpl',
      1 => 1529312554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b27752d0540c0_64655513 (Smarty_Internal_Template $_smarty_tpl) {
?><!--<?php echo $_smarty_tpl->tpl_vars['temp']->value->uid;?>
-->
<!--			查看用户信息-->
<div class="modal fade" id="viewUser_<?php echo $_smarty_tpl->tpl_vars['temp']->value->uid;?>
" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="gridSystemModalLabel">查看用户信息</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <form class="form-horizontal">
            <div class="form-group ">
              <label for="cid" class="col-xs-3 control-label">用户ID：</label>
              <div class="col-xs-8 ">
                <label><?php echo $_smarty_tpl->tpl_vars['temp']->value->uid;?>
</label>
              </div>
            </div>
            <div class="form-group">
              <label for="cplant" class="col-xs-3 control-label">用户姓名：</label>
              <div class="col-xs-8 ">
                <label><?php echo $_smarty_tpl->tpl_vars['temp']->value->uname;?>
</label>
              </div>
            </div>
            <div class="form-group">
              <label for="cbrand" class="col-xs-3 control-label">身份证号：</label>
              <div class="col-xs-8">
                <label><?php echo $_smarty_tpl->tpl_vars['temp']->value->uidnum;?>
</label>
              </div>
            </div>
            <div class="form-group">
              <label for="ccolor" class="col-xs-3 control-label">联系电话：</label>
              <div class="col-xs-8">
                <label><?php echo $_smarty_tpl->tpl_vars['temp']->value->utel;?>
</label>
              </div>
            </div>
            <div class="form-group">
              <label for="cvolume" class="col-xs-3 control-label">驾驶证号：</label>
              <div class="col-xs-8">
                <label><?php echo $_smarty_tpl->tpl_vars['temp']->value->ulicese;?>
</label>
              </div>
            </div>
            <div class="form-group">
              <label for="cdate" class="col-xs-3 control-label">年龄：</label>
              <div class="col-xs-8">
                <label><?php echo $_smarty_tpl->tpl_vars['temp']->value->uage;?>
</label>
              </div>
            </div>
            <div class="form-group">
              <label for="coil" class="col-xs-3 control-label">信誉度：</label>
              <div class="col-xs-8">
                <label><?php echo $_smarty_tpl->tpl_vars['temp']->value->ucredit;?>
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

<!--弹出修改用户窗口-->
<div class="modal fade" id="reviseUser_<?php echo $_smarty_tpl->tpl_vars['temp']->value->uid;?>
" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="gridSystemModalLabel">修改用户</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">

          <form method="post" action="../php/edit_user.php" class="form-horizontal">
            <div class="form-group">
                <label for="uid" class="col-xs-3 control-label">会员ID：</label>
                <div class="col-xs-8">
                  <input type="" class="form-control input-sm duiqi" value="<?php echo $_smarty_tpl->tpl_vars['temp']->value->uid;?>
" name="uid" id="uid" placeholder="">
                </div>
              </div>
            <div class="form-group">
              <label for="situation" class="col-xs-3 control-label">是否会员：</label>
              <div class="col-xs-8">
                <label class="control-label" for="anniu">
                  <input type="radio" name="isvip" id="isvip" value="y"> 会员 </label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label class="control-label" for="meun">
                  <input type="radio" name="isvip" id="isvip" value="n"> 非会员 </label>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
              <button type="submit" class="btn btn-xs btn-green">保 存</button>
            </div>
          </form>
        </div>
      </div>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?php }
}
