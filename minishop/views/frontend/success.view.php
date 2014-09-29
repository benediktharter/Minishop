<div id="sucessCheckout" class="modal show">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3><?php echo $successTitle;?></h3>
            </div>
            <div class="modal-body">
                <?php echo $successText;?>
            </div>
            <div class="modal-footer">
                <a class="backTo btn btn-default" href="<?php echo Option::get('siteurl').DS.miniShop::$shop;?>" >
                    <span class="backTshop"></span><?php echo __('Back to the shop','minishop');?></a>
            </div>
        </div>
    </div>
</div>

<script>localStorage.removeItem('simpleCart_items');</script>