
    <?php
      echo '<div class="well well-lg">'.
                Html::anchor( __('Back', 'minishop'),'index.php?id=minishop',array('class' => 'btn btn-info')).
            '</div>';
    ?>

    <!-- Filter -->
    <div class="form-group col-sm-12 col-md-6">
        <div class="input-group">
            <div class="input-group-addon"><?php echo __('Filter', 'minishop');?>:</div>
            <input type="search" name="filt" id="Filter" class="form-control" placeholder="<?php echo __('enter filter terms','minishop');?>" onkeyup="filter(this, 'ProcessBody', '1')"  />
        </div>
    </div>
        

        
    <div class="table-responsive">
        <table  id="miniShop"  class="table">
        <thead>
            <tr>
                <th><?php echo __('Purchased','minishop'); ?></th>
                <th><?php echo __('Date','minishop'); ?></th>
                <th><?php echo __('Name','minishop'); ?></th>
                <th><?php echo __('Email','minishop'); ?></th>
                <th><?php echo __('Total','minishop'); ?></th>
                <th><?php echo __('State','minishop'); ?></th>
                <th></th>
            </tr>
        </thead>
        <tbody  id="ProcessBody">
            <?php if (count($sl) > 0) foreach ($sl as $row) { ?>
                    <tr>
                        <td><?php echo $row['s_purchased'];?></td>
                        <td><?php echo $row['s_date'];?></td>
                        <td><?php echo $row['s_name'];?></td>
                        <td><?php echo $row['s_email'];?></td>
                        <td><?php echo $row['s_total'];?></td>
                        <td><?php echo $row['s_pstate'];?></td>
                    <td>
                    <div class="pull-right">
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                Opciones
                                <span class="caret"></span>
                            </button>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><?php echo Html::anchor(__('Details', 'minishop'),'index.php?id=minishop&action=sales&details='.$row['id']); ?></li>
                                <li role="presentation"><?php echo Html::anchor(__('Change state', 'minishop'),'index.php?id=minishop&action=sales&state='.$row['id'],array('onClick'=>'return confirmDelete(\''. __('Are you sure', 'minishop').'\')')); ?></li>
                                <li role="presentation"><?php echo Html::anchor(__('Delete', 'minishop'),'index.php?id=minishop&action=sales&delSale='.$row['id'], array('onClick'=>'return confirmDelete(\''.__('Are you sure', 'minishop').'\')')); ?></li>
                              </ul>
                            </div>
                        </div>
                    </div>
                </td>
             </tr>
            <?php } ?>
        </tbody>
        </table>
    </div>

    <div id="pageNavPosition"></div>


<script type="text/javascript"><!--
    // Paginate function
    var pager = new Pager('miniShop', 5);
    pager.init();
    pager.showPageNav('pager', 'pageNavPosition');
    pager.showPage(1);
//--></script>