<!--弹出窗口 确认租车-->
<div class="modal fade" id="sureSetout_{$temp->contractid}" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="gridSystemModalLabel">确认租车</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <form method="post" action="../php/go_rental.php" class="form-horizontal">
            <div class="form-group ">
              <label for="contractid" class="col-xs-3 control-label">合同ID：</label>
              <div class="col-xs-8 ">
                <input type="" class="form-control input-sm duiqi" value="{$temp->contractid}" name="contractid" id="contractid" placeholder="">
              </div>
            </div>
            <div class="form-group ">
              <label for="setout" class="col-xs-3 control-label">出车时间：</label>
              <div class="col-xs-8 ">
                <input type="date" class="form-control input-sm duiqi" name="setout" id="setout" placeholder="">
              </div>
            </div>
            <div class="form-group">
                <label for="deposit" class="col-xs-3 control-label">押金：</label>
                <div class="col-xs-8">
                <input type="" class="form-control input-sm duiqi" name="deposit" id="deposit" placeholder="">
              </div>
              </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-xs btn-xs btn-white" data-dismiss="modal">取 消</button>
              <button type="submit" class="btn btn-xs btn-xs btn-green">保 存</button>
            </div>


          </form>
        </div>
      </div>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<!--弹出窗口 确认还车-->
<div class="modal fade" id="sureSetin_{$temp->contractid}" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="gridSystemModalLabel">确认还车</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <form method="post" action="../php/back_rental.php" class="form-horizontal">
            <div class="form-group ">
              <label for="contractid" class="col-xs-4 control-label">合同ID：</label>
              <div class="col-xs-7 ">
                <input type="" class="form-control input-sm duiqi" value="{$temp->contractid}" name="contractid" id="contractid" placeholder="">
              </div>
            </div>
            <div class="form-group ">
              <label for="setin" class="col-xs-4 control-label">*还车时间：</label>
              <div class="col-xs-7 ">
                <input type="date" class="form-control input-sm duiqi" name="setin" id="setin" placeholder="">
              </div>
            </div>
            <div class="form-group">
              <label for="state" class="col-xs-4 control-label">*车辆损坏情况：</label>
              <div class="col-xs-7 ">
                <input type="" class="form-control input-sm duiqi" name="state" id="state" placeholder="没有损坏为0 完全损坏为10">
              </div>
            </div>
            <div class="form-group">
              <label for="fine" class="col-xs-4 control-label">*交通违规罚款：</label>
              <div class="col-xs-7">
                <input type="" class="form-control input-sm duiqi" value="0" name="fine" id="fine" placeholder="">
              </div>
            </div>
            <div class="form-group">
              <label for="note" class="col-xs-4 control-label">备注：</label>
              <div class="col-xs-7">
                <input type="" class="form-control input-sm duiqi" name="note" id="note" placeholder="填写维修信息">
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-xs btn-xs btn-white" data-dismiss="modal">取 消</button>
                <button type="submit" class="btn btn-xs btn-xs btn-green">保 存</button>
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

<!--修改资源弹出窗口-->
<div class="modal fade" id="changeOrder_{$temp->contractid}" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="gridSystemModalLabel">修改订单信息</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <form method="post" action="../php/edit_rental.php" class="form-horizontal">
            <div class="form-group">
                <label for="contractid" class="col-xs-4 control-label">合同ID：</label>
                <div class="col-xs-7 ">
                  <input type="" class="form-control input-sm duiqi" value="{$temp->contractid}" name="contractid" id="contractid" placeholder="">
                </div>
              </div>
            <div class="form-group">
              <label for="cid" class="col-xs-4 control-label">车辆ID：</label>
              <div class="col-xs-7 ">
                <input type="" class="form-control input-sm duiqi" value="{$temp->cid}" name="cid" id="cid" placeholder="">
              </div>
            </div>
            <div class="form-group">
              <label for="uid" class="col-xs-4 control-label">用户ID：</label>
              <div class="col-xs-7">
                <input type="" class="form-control input-sm duiqi" value="{$temp->uid}" name="uid" id="uid" placeholder="">
              </div>
            </div>
            <div class="form-group">
              <label for="aid" class="col-xs-4 control-label">经手人：</label>
              <div class="col-xs-7">
                <input type="" class="form-control input-sm duiqi" value="{$temp->aid}" name="aid" id="aid" placeholder="">
              </div>
            </div>
            <div class="form-group">
              <label for="status" class="col-xs-4 control-label">订单状态：</label>
              <div class="col-xs-7">
                <input type="" class="form-control input-sm duiqi" value="{$temp->status}" name="status" id="status" placeholder="">
              </div>
            </div>
            <div class="form-group">
              <label for="deposit" class="col-xs-4 control-label">押金：</label>
              <div class="col-xs-7">
                <input type="" class="form-control input-sm duiqi" value="{$temp->deposit}" name="deposit" id="deposit" placeholder="">
              </div>
            </div>
            <div class="form-group">
                <label for="money_b" class="col-xs-4 control-label">预定金额：</label>
                <div class="col-xs-7">
                    <input type="" class="form-control input-sm duiqi" value="{$temp->money_b}" name="money_b" id="money_b" placeholder="">
                </div>
              </div>
            <div class="form-group">
                <label for="money_a" class="col-xs-4 control-label">订单金额：</label>
                <div class="col-xs-7">
                    <input type="" class="form-control input-sm duiqi" value="{$temp->money_a}" name="money_a" id="money_a" placeholder="">
                </div>
              </div>
            <div class="form-group">
              <label for="setout" class="col-xs-4 control-label">出车时间：</label>
              <div class="col-xs-7">
                <input type="" class="form-control input-sm duiqi" value="{$temp->setout}" name="setout" id="setout" placeholder="">
              </div>
            </div>
            <div class="form-group">
              <label for="setin" class="col-xs-4 control-label">还车时间：</label>
              <div class="col-xs-7">
                <input type="" class="form-control input-sm duiqi" value="{$temp->setin}" name="setin" id="setin" placeholder="">
              </div>
            </div>
            <div class="form-group">
              <label for="state" class="col-xs-4 control-label">车辆损坏情况：</label>
              <div class="col-xs-7">
                <input type="" class="form-control input-sm duiqi" value="{$temp->state}" name="state" id="state" placeholder="">
              </div>
            </div>
            <div class="form-group">
              <label for="deposit_back" class="col-xs-4 control-label">押金退还金额：</label>
              <div class="col-xs-7">
                <input type="" class="form-control input-sm duiqi" value="{$temp->deposit_back}" name="deposit_back" id="deposit_back" placeholder="">
              </div>
            </div>
            <div class="form-group">
              <label for="fine" class="col-xs-4 control-label">交通违规罚款：</label>
              <div class="col-xs-7">
                <input type="" class="form-control input-sm duiqi" value="{$temp->fine}" name="fine" id="fine" placeholder="">
              </div>
            </div>
            <div class="form-group">
              <label for="note" class="col-xs-4 control-label">备注信息：</label>
              <div class="col-xs-7">
                <input type="" class="form-control input-sm duiqi" value="{$temp->note}" name="note" id="note" placeholder="">
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

<!--弹出删除订单警告窗口-->
<div class="modal fade" id="deleteOrder_{$temp->contractid}" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="gridSystemModalLabel">提示</h4>
          </div>
          <form method="post" action="../php/delete_rental.php" target="_top" class="form-horizontal">
            <div class="modal-body">
              <div class="container-fluid"> 确定要删除该订单？删除后不可恢复！ </div>
            </div>
            <div class="form-group">
              <label for="cid" class="col-xs-3 control-label">订单ID：</label>
              <div class="col-xs-8">
                <input type="" class="form-control input-sm duiqi" value="{$temp->contractid}" name="cid" id="cid" placeholder="">
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