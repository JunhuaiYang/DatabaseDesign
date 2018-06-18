<!--{$temp->uid}-->
<!--			查看用户信息-->
<div class="modal fade" id="viewUser_{$temp->uid}" role="dialog" aria-labelledby="gridSystemModalLabel">
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
                <label>{$temp->uid}</label>
              </div>
            </div>
            <div class="form-group">
              <label for="cplant" class="col-xs-3 control-label">用户姓名：</label>
              <div class="col-xs-8 ">
                <label>{$temp->uname}</label>
              </div>
            </div>
            <div class="form-group">
              <label for="cbrand" class="col-xs-3 control-label">身份证号：</label>
              <div class="col-xs-8">
                <label>{$temp->uidnum}</label>
              </div>
            </div>
            <div class="form-group">
              <label for="ccolor" class="col-xs-3 control-label">联系电话：</label>
              <div class="col-xs-8">
                <label>{$temp->utel}</label>
              </div>
            </div>
            <div class="form-group">
              <label for="cvolume" class="col-xs-3 control-label">驾驶证号：</label>
              <div class="col-xs-8">
                <label>{$temp->ulicese}</label>
              </div>
            </div>
            <div class="form-group">
              <label for="cdate" class="col-xs-3 control-label">年龄：</label>
              <div class="col-xs-8">
                <label>{$temp->uage}</label>
              </div>
            </div>
            <div class="form-group">
              <label for="coil" class="col-xs-3 control-label">信誉度：</label>
              <div class="col-xs-8">
                <label>{$temp->ucredit}</label>
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
<div class="modal fade" id="reviseUser_{$temp->uid}" role="dialog" aria-labelledby="gridSystemModalLabel">
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
                  <input type="" class="form-control input-sm duiqi" value="{$temp->uid}" name="uid" id="uid" placeholder="">
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
