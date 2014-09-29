<?php Chunk::get('header'); ?>
<?php Action::run('theme_pre_content'); ?>
<?php echo Html::br(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-9">
            <!-- Get  table of products -->
            <?php echo miniShop::getQuantity(); ?>    
        </div>
        <div class="col-md-3">
            <!-- Get total widget -->
            <?php echo miniShop::getTotal(); ?>
        </div>
    </div>
</div>

<?php Action::run('theme_post_content'); ?>
<?php Chunk::get('footer');