<div id="shopProducts">
<?php
    $html = '';
    if(count($items)>0) foreach ($items as $item) {
        $html.= '<div id="'.$item['product'].'-'.$item['id'].'" class="col-md-4">
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
    echo $html;
?>
</div>
