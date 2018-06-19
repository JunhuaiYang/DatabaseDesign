<div class="row">
  <div class="col-xs-1"> {$temp->cid} </div>
  <div class="col-xs-2"> {$temp->cplant} </div>
  <div class="col-xs-1"> {$temp->cbrand} </div>
  <div class="col-xs-1"> {$temp->cmodel} </div>
  <div class="col-xs-1"> {$temp->ccolor} </div>
  <div class="col-xs-1"> {$temp->cvolume} </div>
  <div class="col-xs-1"> {$temp->coil} </div>
  <div class="col-xs-2"> {$temp->cdate} </div>
  <div class="col-xs-1"> {$temp->crent} </div>
  <!--					按钮-->
  <div class="col-xs-1">
    <a href="submit.php?cid={$temp->cid}">
      <button class="btn btn-success btn-xs" data-toggle="modal">预定！</button>
    </a>
  </div>
</div>