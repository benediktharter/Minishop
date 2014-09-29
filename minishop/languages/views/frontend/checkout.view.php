<?php
if(Page::url(Site::url().'/shop/items')){

	echo Html::br(2);
	$html = '<div id="getCheckout">'.
	          '<a href="javascript:;" class="simpleCart_empty btn btn-danger">'.__('Empty','minishop').'</a>'.
	          '<a href="'.Option::get('siteurl').DS.'shop/items?v=ck" class="ms_checkout btn btn-primary">
	          	'.__('Checkout','minishop').'</a>
	        </div>';
	echo $html;
}
?>