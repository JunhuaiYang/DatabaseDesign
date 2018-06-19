<!-- /.modal -->
<!--查看车辆资源弹出窗口-->
<div class="modal fade" id="viewOrder_{$temp->contractid}" role="dialog" aria-labelledby="gridSystemModalLabel">
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
                <label>{$temp->contractid}</label>
              </div>
            </div>
            <div class="form-group">
              <label for="cplant" class="col-xs-4 control-label">车辆ID：</label>
              <div class="col-xs-7 ">
                <label>{$temp->cid}</label>
              </div>
            </div>
            <div class="form-group">
              <label for="cplant" class="col-xs-4 control-label">车牌号：</label>
              <div class="col-xs-7 ">
                <label>{$temp->cplant}</label>
              </div>
            </div>
            <div class="form-group">
              <label for="cplant" class="col-xs-4 control-label">车辆品牌：</label>
              <div class="col-xs-7 ">
                <label>{$temp->cbrand}</label>
              </div>
            </div>
            <div class="form-group">
              <label for="cplant" class="col-xs-4 control-label">车辆型号：</label>
              <div class="col-xs-7 ">
                <label>{$temp->cmodel}</label>
              </div>
            </div>
            <div class="form-group">
              <label for="cbrand" class="col-xs-4 control-label">用户名：</label>
              <div class="col-xs-7">
                <label>{$temp->username}</label>
              </div>
            </div>
            <div class="form-group">
              <label for="cbrand" class="col-xs-4 control-label">用户姓名：</label>
              <div class="col-xs-7">
                <label>{$temp->uname}</label>
              </div>
            </div>
            <div class="form-group">
              <label for="cbrand" class="col-xs-4 control-label">身份证号：</label>
              <div class="col-xs-7">
                <label>{$temp->uidnum}</label>
              </div>
            </div>
            <div class="form-group">
              <label for="ccolor" class="col-xs-4 control-label">经手人：</label>
              <div class="col-xs-7">
                <label>{$temp->aname}</label>
              </div>
            </div>
            <div class="form-group">
              <label for="cdate" class="col-xs-4 control-label">押金：</label>
              <div class="col-xs-7">
                <label>{$temp->deposit}</label>
              </div>
            </div>
            <div class="form-group">
                <label for="state" class="col-xs-4 control-label">预定金额：</label>
                <div class="col-xs-7">
                  <label>{$temp->money_b}</label>
                </div>
              </div>
            <div class="form-group">
              <label for="cstate" class="col-xs-4 control-label">订单金额：</label>
              <div class="col-xs-7">
                <label>{$temp->money_a}</label>
              </div>
            </div>
            <div class="form-group">
                <label for="crent" class="col-xs-4 control-label">预定时间：</label>
                <div class="col-xs-7">
                  <label>{$temp->cplandate}</label>
                </div>
              </div>
            <div class="form-group">
              <label for="crent" class="col-xs-4 control-label">出车时间：</label>
              <div class="col-xs-7">
                <label>{$temp->setout}</label>
              </div>
            </div>
            <div class="form-group">
              <label for="cnote" class="col-xs-4 control-label">还车时间：</label>
              <div class="col-xs-7">
                <label>{$temp->setin}</label>
              </div>
            </div>
            <div class="form-group">
                <label for="cnote" class="col-xs-4 control-label">实际租车天数：</label>
                <div class="col-xs-7">
                  <label>{$temp->real_day}</label>
                </div>
              </div>
            <div class="form-group">
              <label for="cnote" class="col-xs-4 control-label">车辆损坏情况：</label>
              <div class="col-xs-7">
                <label>{$temp->state}</label>
              </div>
            </div>
            <div class="form-group">
              <label for="cnote" class="col-xs-4 control-label">押金退还金额：</label>
              <div class="col-xs-7">
                <label>{$temp->deposit_back}</label>
              </div>
            </div>
            <div class="form-group">
              <label for="cnote" class="col-xs-4 control-label">交通违规罚款：</label>
              <div class="col-xs-7">
                <label>{$temp->fine}</label>
              </div>
            </div>
            <div class="form-group">
              <label for="cnote" class="col-xs-4 control-label">备注信息：</label>
              <div class="col-xs-7">
                <label>{$temp->note}</label>
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
<!-- /.modal -->