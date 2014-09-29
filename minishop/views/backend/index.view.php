    <div class="well well-lg">
        <?php echo Html::anchor(__('Add product', 'minishop'), 'index.php?id=minishop&action=add',array('class' => 'btn btn-default'));?>
        <a href="#snippet" data-toggle="modal" class="btn btn-default"><?php echo __('Codes','minishop');?></a>
        <?php echo Html::anchor( __('Settings', 'minishop'),'index.php?id=minishop&action=Js',array('class' => 'btn btn-default')); ?>
        <?php echo Html::anchor( __('Photo settings', 'minishop'),'index.php?id=minishop&action=resize',array('class' => 'btn btn-default')); ?>
        <?php echo Html::anchor( __('Sellers', 'minishop'),'index.php?id=minishop&action=sales',array('class' => 'btn btn-default')); ?>
        <?php echo Html::anchor( __('Comments', 'minishop'),'index.php?id=minishop&action=comments',array('class' => 'btn btn-default')); ?>
    </div>

    <!-- Filter -->
    <div class="form-group col-sm-12 col-md-6">
        <div class="input-group">
            <div class="input-group-addon"><?php echo __('Filter', 'minishop');?>:</div>
                <input type="search" name="filt" id="Filter"  class="form-control" placeholder="<?php echo __('Enter filter terms','minishop');?>" onkeyup="filter(this, 'ProcessBody', '1')"  />
            </div>
        </div>
    </div>



    <table  id="miniShop"  class="table table-bordered">
    <thead>
        <tr>
            <th><?php echo __('Image','minishop'); ?></th>
            <th><?php echo __('Product','minishop'); ?></th>
            <th><?php echo __('Title','minishop'); ?></th>
            <th><?php echo __('Stock','minishop'); ?></th>
            <th ><?php echo __('Price','minishop'); ?></th>
            <th class="visible-lg"><?php echo __('Description','minishop'); ?></th>
            <th></th>
        </tr>
    </thead>
    <tbody  id="ProcessBody">
        <?php if (count($ms) > 0) foreach ($ms as $row) { ?>
        <tr>
            <td  class="image">
                <img width="64" src="<?php echo Option::get('siteurl').'/public/shop/small/'.$row['image1']; ?>" alt="<?php echo $row['title']; ?>"/>
            </td>
            <td><?php echo $row['product']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['stock']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td style="width:50%;" class="visible-lg">
                <?php
                    $str = $row['description'];
                    $count = preg_replace('[^\s]', '', $str);
                    if(strlen($count) > 200){echo Text::cut($count, 200 , '.....');}
                    else{echo $row['description'];};
                ?>
            </td>
            <td>
                <div class="pull-right">
                    <div class="dropdown">
                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                        Opciones
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                        <li role="presentation"><?php echo Html::anchor(__('Edit', 'minishop'), 'index.php?id=minishop&action=edit&uid='.$row['uid']); ?></li>
                        <li role="presentation"><?php echo Html::anchor(__('Delete', 'minishop'), 'index.php?id=minishop&delProdct='.$row['id'], array('onClick'=>'return confirmDelete(\''.__('Are you sure', 'minishop').'\')')); ?></li>
                      </ul>
                    </div>
                        
                    
                </div>
            </td>
         </tr>
        <?php } ?>
    </tbody>
    </table>
     <div id="pageNavPosition"></div>
</div>







<div class="modal fade" id="snippet">
  <div class="modal-dialog">
    <div class="modal-content">

            <div class="modal-header">
                <a class="close" data-dismiss="modal">&times;</a>
                <h3 class="modal-title"><?php echo __('minishop','minishop');?></h3>
            </div>

            <div class="modal-body">
                <h4> <?php echo __('Get product','minishop');?></h4>
                <pre>&lt;?php echo miniShop::getProduct(); ?&gt;</pre>
                <h4><?php echo __('Get products','minishop');?></h4>
                <pre>&lt;?php echo miniShop::getProducts(); ?&gt;</pre>
                <h4><?php echo __('Get info','minishop');?></h4>
                <pre>&lt;?php echo miniShop::getInfo(); ?&gt;</pre>
                <h4> <?php echo __('Get categories','minishop');?></h4>
                <pre>&lt;?php echo miniShop::getCategories(); ?&gt;</pre>
                <h4> <?php echo __('Get last comment','minishop');?></h4>
                <pre> &lt;?php echo miniShop::getLastComment(); ?&gt;</pre>
                <h4> <?php echo __('Get quantity','minishop');?></h4>
                <pre> &lt;?php echo miniShop::getQuantity(); ?&gt;</pre>
                <h4> <?php echo __('Get total','minishop');?></h4>
                <pre> &lt;?php echo miniShop::getTotal(); ?&gt;</pre>
                <h4> <?php echo __('Get checkout buttoms','minishop');?></h4>
                <pre> &lt;?php echo miniShop::getCheckout(); ?&gt;</pre>
                <h4> <?php echo __('Get new items','minishop');?></h4>
                <pre> &lt;?php echo miniShop::getNewItems(number or all); ?&gt;</pre>
                <h4> <?php echo __('Get slide','minishop');?></h4>
                <pre> &lt;?php echo miniShop::getSlide(); ?&gt;</pre>
            </div>
        </div>
    </div>
</div>




<script type="text/javascript"><!--
    // Paginate function
    var pager = new Pager('miniShop', 5);
    pager.init();
    pager.showPageNav('pager', 'pageNavPosition');
    pager.showPage(1);
//--></script>
