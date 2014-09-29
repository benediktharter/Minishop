<?php if($tags > 0){
  foreach($tags as $tag) { ?>
    <a class="label label-primary" href="<?php echo $url.$tag;?>" ><?php echo $tag; ?> </a>
<?php }
	}else{
		echo __('No tags yet','minishop');
	}
?>

