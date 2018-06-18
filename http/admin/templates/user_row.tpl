        <!--		{$temp->uid}		行-->
            <div class="row">
                <div class="col-xs-1"> {$temp->uid} </div>
                <div class="col-xs-2"> {$temp->username} </div>
                <div class="col-xs-2"> {$temp->uname} </div>
                <div class="col-xs-2"> {$temp->utel} </div>

                <div class="col-xs-1"> 
                {if $temp->isvip eq 'y'}
                <span class="label label-success">会员</span> 
                {else}
                <span class="label label-default">非会员</span> 
                {/if}  
                </div>

                {* 对信誉度进行评价 *}
                {* 分为优良差 *}
                {* 80 30 *}
                {* ge >=  le <= *}

                <div class="col-xs-1"> 
                {if $temp->ucredit ge '80'}
                <span class="label label-success">优</span> 
                {elseif $temp->ucredit le '30'}
                <span class="label label-danger">差</span> 
                {else}
                <span class="label label-warning">良</span> 
                {/if} 

                </div>

                <!--					按钮-->
                <div class="col-xs-3">
                <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#viewUser_{$temp->uid}">查看详细</button>
                <button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#reviseUser_{$temp->uid}">修改会员</button>
				        <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#_{$temp->uid}">查看历史订单</button>
              </div>
              </div>