<?php Chunk::get('header'); ?>
<?php Action::run('theme_pre_content'); ?>
<?php echo Html::br()?>
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
               <?php Action::run('theme_pre_content'); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-9">
                <!-- Get products -->
                <?php echo miniShop::getProducts(); ?>
            </div>

            <div class="col-md-3">

                <div class="panel panel-default">
                    <div class="panel-heading"><?php echo __('last product','minishop');?></div>
                    <div class="panel-body"> <?php echo miniShop::getLastProduct(); ?></div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><?php echo __('Categories','minishop');?></div>
                    <div class="panel-body"><?php echo miniShop::getCategories(); ?></div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><?php echo __('last comments','minishop');?></div>
                    <div class="panel-body"><?php echo miniShop::getLastComment(); ?></div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <?php Action::run('theme_post_content'); ?>
            </div>
        </div>
</div>
<?php Action::run('theme_post_content'); ?>
<?php Chunk::get('footer'); ?>





















