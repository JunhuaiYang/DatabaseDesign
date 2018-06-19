<div class="row">
  <div class="col-xs-1 "> {$temp->contractid} </div>
  <div class="col-xs-1 "> {$temp->uname} </div>
  <div class="col-xs-1 "> {$temp->cid} </div>
  <div class="col-xs-2">  {$temp->cplant} </div>
  <div class="col-xs-1 "> {$temp->cbrand} </div>
  <div class="col-xs-1 "> {$temp->cmodel} </div>
  <div class="col-xs-1 "> {$temp->aname} </div>

  <div class="col-xs-1 "> 
    {if $temp->status eq '0'}
    <span class="label label-primary">待确认</span> 
    {elseif $temp->status eq '1'}
    <span class="label label-warning">待还车</span> 
    {else}
    <span class="label label-success">已完成</span> 
    {/if}   
  </div>

  <!--					按钮-->
  <div class="col-xs-3">
    {if $temp->status eq '0'}
    <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#sureSetout_{$temp->contractid}">确认租车</button>
    {elseif $temp->status eq '1'}
    <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#sureSetin_{$temp->contractid}">确认还车</button>
    {/if}  
    <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#viewOrder_{$temp->contractid}">查看详细</button>
    <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#changeOrder_{$temp->contractid}">修改</button>
    <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteOrder_{$temp->contractid}">删除</button>
  </div>
</div>