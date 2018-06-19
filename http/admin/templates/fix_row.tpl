<div class="row">
  <div class="col-xs-1"> {$temp->cid} </div>
  <div class="col-xs-2"> {$temp->cplant} </div>
  <div class="col-xs-1"> {$temp->cbrand} </div>
  <div class="col-xs-1"> {$temp->cmodel} </div>
  <div class="col-xs-1"> {$temp->cstate} </div>
  <div class="col-xs-4"> {$temp->cnote} </div>
  <!--					按钮-->
  <div class="col-xs-2">
    <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#hasFixed_{$temp->cid}">已维修</button>
  </div>
</div>