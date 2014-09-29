<div class="row">
<?php
  $html = '<div id="shopProducts">';
  if(count($items) > 0) {  
    foreach ($items as $item){
         $html.= '<div id="'.$item['product'].'-'.$item['id'].'" class="col-md-6">
                     <div class="thumbnail">
                        <a href="'.Option::get('siteurl').DS.miniShop::$shop.DS.'item?id='.$item['id'].'" title="'.$item['title'].'" >
                          <img  src="'.Option::get('siteurl').DS.'public/shop/large/'.$item['image1'].'">
                        </a>
                        <div class="caption clearfix">
                          <h4>'.$item['title'].'</h4>
                          <div class="btn btn-default btn-sm pull-left"  disabled="disabled"><b>Precio: </b><span> '.$item['price'].'</span></div>
                          <a class="btn btn-default btn-sm pull-right" href="'.Option::get('siteurl').DS.miniShop::$shop.DS.'item?id='.$item['id'].'" >
                            '.__("View details", "minishop").'
                          </a>
                          
                        </div>
                  </div>
                </div>';
    }

    $html.= '</div>
    <div class="clearfix"></div>';
    echo $html;
    echo $result;
    miniShop::getActions();
  }else{ 
    echo '<div class="well">'
          .__('Still not have products','minishop').
          '</div>';
  }
?>
</div>
