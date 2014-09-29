<?php
    $html = '';

    if(count($last)>0) {   
      foreach ($last as $item){
         $html.= '<figure>
                    <img class="img-rounded" src="'.Option::get('siteurl').DS.'public/shop/large/'.$item['image1'].'"/>
                  <figcaption class="clearfix">
                    <h4>'.$item['title'].'</h4>
                    <span><b>'.__('Price','minishop').': </b>'.$item['price'].'</span>
                    <a class="btn btn-default pull-right" href="'.Option::get('siteurl').DS.miniShop::$shop.DS.'item?id='.$item['id'].'" title="'.$item['title'].'" >
                      '.__('View details','minishop').'
                    </a>
                  </figcaption>
                  </figure>';
      }
      echo $html;
    }else{ 
      echo '<p>'.__('Still not have products','minishop').'</p>';
    }
?>
