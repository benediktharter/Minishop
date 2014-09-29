<div class="modal show">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3><?php echo $errorTitle;?></h3>
            </div>
            <div class="modal-body">
                <?php echo $errorText;?>
            </div>
            <div class="modal-footer">
                <a class="backTo btn btn-default" href="<?php echo Option::get('siteurl').DS.miniShop::$shop;?>" >
                    <span class="backTshop"></span><?php echo __('Back to the shop','minishop');?></a>
            </div>
        </div>
    </div>
</div>
