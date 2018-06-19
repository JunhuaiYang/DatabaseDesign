<div class="row">
  <div class="col-xs-1 "> {$temp->contractid} </div>
  <div class="col-xs-1 "> {$temp->cid} </div>
  <div class="col-xs-1 "> {$temp->cplant} </div>
  <div class="col-xs-1 "> {$temp->cbrand} </div>
  <div class="col-xs-1 "> {$temp->cmodel} </div>
  <div class="col-xs-1 "> {$temp->aname} </div>
  <div class="col-xs-1 "> {$temp->deposit} </div>
  <div class="col-xs-1 "> {$temp->money_b} </div>
  <div class="col-xs-1 "> 
    {if $temp->status eq '0'}
    <span class="label label-primary">待确认</span> 
    {elseif $temp->status eq '1'}
    <span class="label label-warning">待还车</span> 
    {else}
    <span class="label label-success">已完成</span> 
    {/if}   
  </div>
  <div class="col-xs-1 "> {$temp->deposit_back} </div>
  <div class="col-xs-1 "> {$temp->money_a} </div>
  <!--					按钮-->
  <div class="col-xs-1">
    <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#viewOrder_{$temp->contractid}">查看详细</button>
  </div>
</div>