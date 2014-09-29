<?php Chunk::get('header'); ?>
<?php Action::run('theme_pre_content'); ?>
<?php echo Html::br()?>
<div class="container-fluid">
    <div class="row">

   
    		        <!-- Show product -->
        <?php echo miniShop::getProduct(); ?>



        <div class="col-md-3">

						<div class="panel panel-default">
							<div class="panel-heading">
								<?php echo __('Categories','minishop');?>
							</div>
							<div class="panel-body">
							<!-- Show info intens purchased -->
							<?php echo miniShop::getCategories(); ?>
							</div>
						</div>


						<div class="panel panel-default">
							<div class="panel-heading">
							<?php echo __('In this category','minishop');?>
							</div>
							<div class="panel-body">
							<!-- Show others products -->
							<?php echo miniShop::getOthers(); ?>
							</div>
						</div>

        </div>

    </div>
</div>
<?php Action::run('theme_post_content'); ?>
<?php Chunk::get('footer'); ?>