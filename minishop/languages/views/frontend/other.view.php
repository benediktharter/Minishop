<?php
    if(count($items)>0){
      $html = '<div id="otherProducts">';
      foreach ($items as $item){
         $html .= '<div class="media simpleCart_shelfItem">
                      <a class="pull-left" href="'.Option::get('siteurl').DS.miniShop::$shop.DS.'item?id='.$item['id'].'" title="'.$item['title'].'" >
                        <img class="item_tumb media-object miniTumb" src="'.Option::get('siteurl').DS.'public/shop/small/'.$item['image1'].'"></a>
                      <div class="media-body">
                      <p class="media-heading item_name">'.$item['title'].'</p>
                      <strong>'.__("Price", "minishop").':</strong><span class="item_price">'.Html::nbsp(2).$item['price'].'</span>'.Html::nbsp(2).'
                      <a class="" href="'.Option::get('siteurl').DS.miniShop::$shop.DS.'item?id='.$item['id'].'" >  '.__("View details", "minishop").'</a>
                      </div>
                  </div>';
        }
      $html.= '</div>';
      echo $html;
    }else{echo  __('No products added ','minishop');}
?>

