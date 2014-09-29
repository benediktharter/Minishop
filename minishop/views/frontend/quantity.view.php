<?php
$html = '<div id="getQuantity">
          <a class="btn btn-default" href="'.Option::get('siteurl').DS.miniShop::$shop.'" >
            '.__('Back to the shop','minishop').'
          </a>
        '.Html::br(2).'
          <div id="checkCart">
                  <div class="checkCart">
                      <h3><span class="simpleCart_quantity"></span> items</h3>
                      <div class="simpleCart_items" ></div>
                      <br>
                  </div>
              </div>
        </div>';
echo $html;
?>

<?php echo miniShop::getCheckout(); ?>   