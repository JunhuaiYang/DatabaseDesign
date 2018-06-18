<div class="row">
    <div class="col-xs-1 "> {$temp->cid} </div>
    <div class="col-xs-2"> {$temp->cplant} </div>
    <div class="col-xs-1 "> {$temp->cbrand} </div>
    <div class="col-xs-2"> {$temp->cmodel} </div>
    <div class="col-xs-1"> {$temp->crent} </div>
    <div class="col-xs-2"> 
    {if $temp->cstatus eq '0'}
    <span class="label label-default">未出租</span> 
    {elseif $temp->cstatus eq '1'}
    <span class="label label-warning">已出租</span> 
    {else}
    <span class="label label-danger">待维修</span> 
    {/if}    
    </div>
    <!--					按钮-->
    <div class="col-xs-3">
    <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#viewSource_{$temp->cid}">查看详细</button>
    <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#changeSource_{$temp->cid}">修改</button>
    <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteSource_{$temp->cid}">删除</button>
  </div>
  </div>