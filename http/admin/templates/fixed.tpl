<!--弹出已维修窗口-->
<div class="modal fade" id="hasFixed_{$temp->cid}" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="gridSystemModalLabel">提示</h4>
      </div>
      <form method="post" action="../php/fixed.php" target="_top" class="form-horizontal">
        <div class="modal-body">
          <div class="container-fluid"> 是否已完成对该车辆的维修？ </div>
        </div>
        <div class="form-group">
          <label for="cid" class="col-xs-3 control-label">车辆ID：</label>
          <div class="col-xs-8">
            <input type="" class="form-control input-sm duiqi" value="{$temp->cid}" name="cid" id="cid" placeholder="">
          </div>
        </div>
        <div class="form-group">
          <label for="fmoney" class="col-xs-3 control-label">维修费用：</label>
          <div class="col-xs-8">
            <input type="" class="form-control input-sm duiqi" name="fmoney" id="fmoney" placeholder="">
          </div>
        </div>
        <div class="form-group">
          <label for="fdate" class="col-xs-3 control-label">维修日期：</label>
          <div class="col-xs-8">
            <input type="date" class="form-control input-sm duiqi" name="fdate" id="fdate" placeholder="">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
          <button type="submit" class="btn btn-xs btn-danger">保 存</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>