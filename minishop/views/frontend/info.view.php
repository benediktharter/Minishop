<?php
$html = '
<li class="dropdown" id="carrito">
  <a data-toggle="dropdown" href="# ">
  <span class="glyphicon glyphicon-shopping-cart"></span>
  <span class="simpleCart_quantity"></span>
  '.Html::nbsp(2).__('Checkout','minishop').'
   <span class="caret"></span>
  </a>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
    <li><a><strong>Items: </strong><span class="simpleCart_quantity"></span></a></li>
    <li><a><strong>Total: </strong><span class="simpleCart_total"></span></a></li>
    <li><a class="viewCart" href="'.Option::get('siteurl').DS.miniShop::$shop.DS.'items" class="product-view">'.__('View cart','minishop').'</a></li>'.
  '</ul>
</li>';
echo $html;
?>





