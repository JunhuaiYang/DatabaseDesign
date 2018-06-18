        <!--{$temp->cid}-->
        <!--查看车辆资源弹出窗口-->
        <div class="modal fade" id="viewSource_{$temp->cid}" role="dialog" aria-labelledby="gridSystemModalLabel">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                <h4 class="modal-title" id="gridSystemModalLabel">查看车辆信息</h4>
              </div>
                <div class="modal-body">
                <div class="container-fluid">
                    <form class="form-horizontal">
                    <div class="form-group ">
                        <label for="cid" class="col-xs-3 control-label">车辆ID:</label>
                        <div class="col-xs-8 ">
                        <label>{$temp->cid}</label>
                      </div>
                      </div>
                    <div class="form-group ">
                        <label for="cplant" class="col-xs-3 control-label">车牌号：</label>
                        <div class="col-xs-8 ">
                        <label>{$temp->cplant}</label>
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="cbrand" class="col-xs-3 control-label">车辆品牌：</label>
                        <div class="col-xs-8 ">
                        <label>{$temp->cbrand}</label>
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="cmoder" class="col-xs-3 control-label">车辆型号：</label>
                        <div class="col-xs-8">
                        <label>{$temp->cmodel}</label>
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="ccolor" class="col-xs-3 control-label">车辆颜色：</label>
                        <div class="col-xs-8">
                        <label>{$temp->ccolor}</label>
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="cvolume" class="col-xs-3 control-label">排量：</label>
                        <div class="col-xs-8">
                        <label>{$temp->cvolume}</label>
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="cdate" class="col-xs-3 control-label">出厂日期：</label>
                        <div class="col-xs-8">
                        <label>{$temp->cdate}</label>
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="coil" class="col-xs-3 control-label">燃油类型：</label>
                        <div class="col-xs-8">
                        <label>{$temp->coil}</label>
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="cstate" class="col-xs-3 control-label">车辆状况：</label>
                        <div class="col-xs-8">
                        <label>{$temp->cstate}</label>
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="crent" class="col-xs-3 control-label">每日租金：</label>
                        <div class="col-xs-8">
                        <label>{$temp->crent}</label>
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="cnote" class="col-xs-3 control-label">备注信息：</label>
                        <div class="col-xs-8">
                        <label>{$temp->cnote}</label>
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
        
		
			
        <!--弹出窗口 修改资源-->
        <div class="modal fade" id="changeSource_{$temp->cid}" role="dialog" aria-labelledby="gridSystemModalLabel">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                <h4 class="modal-title" id="gridSystemModalLabel">修改车辆信息</h4>
              </div>
                <div class="modal-body">
                <div class="container-fluid">


                    <form method="post" action="../php/reset_car.php" target="_top" class="form-horizontal" >
                    <div class="form-group ">
                        <label for="cid" class="col-xs-3 control-label">*车辆ID：</label>
                        <div class="col-xs-8 ">
                        <input type="" class="form-control input-sm duiqi" value="{$temp->cid}" name="cid" id="cid" placeholder="">
                      </div>
                      </div>
                    <div class="form-group ">
                        <label for="cplant" class="col-xs-3 control-label">*车牌号：</label>
                        <div class="col-xs-8 ">
                        <input type="" class="form-control input-sm duiqi" value="{$temp->cplant}" name="cplant" id="cplant" placeholder="">
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="cbrand" class="col-xs-3 control-label">*车辆品牌：</label>
                        <div class="col-xs-8 ">
                        <input type="" class="form-control input-sm duiqi" value="{$temp->cbrand}" name="cbrand" id="cbrand" placeholder="">
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="cmodel" class="col-xs-3 control-label">*车辆型号：</label>
                        <div class="col-xs-8">
                        <input type="" class="form-control input-sm duiqi" value="{$temp->cmodel}" name="cmodel" id="cmodel" placeholder="">
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="ccolor" class="col-xs-3 control-label">车辆颜色：</label>
                        <div class="col-xs-8">
                        <input type="" class="form-control input-sm duiqi" value="{$temp->ccolor}" name="ccolor" id="ccolor" placeholder="">
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="cvolume" class="col-xs-3 control-label">排量：</label>
                        <div class="col-xs-8">
                        <input type="" class="form-control input-sm duiqi" value="{$temp->cvolume}" name="cvolume" id="cvolume" placeholder="">
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="cdate" class="col-xs-3 control-label">出厂日期：</label>
                        <div class="col-xs-8">
                        <input type="date" class="form-control input-sm duiqi" value="{$temp->cdate}" name="cdate" id="cdate" placeholder="">
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="coil" class="col-xs-3 control-label">燃油类型：</label>
                        <div class="col-xs-8">
                        <input type="" class="form-control input-sm duiqi" value="{$temp->coil}" name="coil" id="coil" placeholder="">
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="cstate" class="col-xs-3 control-label">*车辆状况：</label>
                        <div class="col-xs-8">
                        <input type="" class="form-control input-sm duiqi" value="{$temp->cstate}" name="cstate" id="cstate" placeholder="">
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="crent" class="col-xs-3 control-label">*每日租金：</label>
                        <div class="col-xs-8">
                        <input type="" class="form-control input-sm duiqi" value="{$temp->crent}" name="crent" id="crent" placeholder="">
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="cnote" class="col-xs-3 control-label">备注信息：</label>
                        <div class="col-xs-8">
                        <input type="" class="form-control input-sm duiqi" value="{$temp->cnote}" name="cnote" id="cnote" placeholder="">
                      </div>
                      </div>

                  <div class="modal-footer">
                  <button type="button" class="btn btn-xs btn-xs btn-white" data-dismiss="modal">取 消</button>
                  <button type="submit" onclick="return new_car()" class="btn btn-xs btn-xs btn-green"  >保 存</button>
                  </div>

                  </form>
                  </div>
              </div>
              </div>
            <!-- /.modal-content --> 
          </div>
            <!-- /.modal-dialog --> 
          </div>

        
        <!--弹出删除资源警告窗口-->
        <div class="modal fade" id="deleteSource_{$temp->cid}" role="dialog" aria-labelledby="gridSystemModalLabel">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                <h4 class="modal-title" id="gridSystemModalLabel">提示</h4>
              </div>
              <form method="post" action="../php/delete_car.php" target="_top" class="form-horizontal" >
                <div class="modal-body">
                <div class="container-fluid"> 确定要删除该车辆？删除后不可恢复！ </div>
              </div>
              <div class="form-group">
                <label for="cid" class="col-xs-3 control-label">车辆ID：</label>
                <div class="col-xs-8">
                <input type="" class="form-control input-sm duiqi" value="{$temp->cid}" name="cid" id="cid" placeholder="">
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