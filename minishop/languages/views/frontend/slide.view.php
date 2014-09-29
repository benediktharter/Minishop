<div id="minishop_slide" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#minishop_slide" data-slide-to="0" class="active"></li>
    <li data-target="#minishop_slide" data-slide-to="1"></li>
    <li data-target="#minishop_slide" data-slide-to="2"></li>
  </ol>

    <!-- Wrapper for slides -->
  <div class="carousel-inner">
<?php
        if(count($items) > 0)
            foreach ($items as $item) {
                $html = '<div class="item active">
                            <img src="'.Option::get('siteurl').DS.'public/shop/large/'.$item['image1'].'">
                            <div class="carousel-caption">
                                <h3><a href="'.DS.'shop/item?id='.$item['id'].'">'.$item['title'].'</a></h3>
                                <p>'.$item['description'].'</p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="'.Option::get('siteurl').DS.'public/shop/large/'.$item['image2'].'">
                            <div class="carousel-caption">
                                <h3><a href="'.DS.'shop/item?id='.$item['id'].'">'.$item['title'].'</a></h3>
                                <p>'.$item['description'].'</p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="'.Option::get('siteurl').DS.'public/shop/large/'.$item['image3'].'">
                            <div class="carousel-caption">
                                <h3><a href="'.DS.'shop/item?id='.$item['id'].'">'.$item['title'].'</a></h3>
                                <p>'.$item['description'].'</p>
                            </div>
                        </div>

                       <div class="item">
                            <img src="'.Option::get('siteurl').DS.'public/shop/large/'.$item['image4'].'">
                            <div class="carousel-caption">
                                <h3><a href="'.DS.'shop/item?id='.$item['id'].'">'.$item['title'].'</a></h3>
                                <p>'.$item['description'].'</p>
                            </div>
                        </div>';
            }
            echo $html;
?>
    </div><!--/.carousel-inner -->

    <!-- Controls -->
    <a class="left carousel-control" href="#minishop_slide" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#minishop_slide" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>

