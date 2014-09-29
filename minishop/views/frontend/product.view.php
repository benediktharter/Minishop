
<?php

 if (Notification::get('success')) Alert::success(Notification::get('success'));
 if (Notification::get('error')) Alert::error(Notification::get('error'));

  function percentage($val1, $val2){
    if(!$val2 == 0){
      $res = round( ($val1 / $val2) * 100);
      $rating = substr($res, 0 , 1);
      return $rating;
    }
  }

  if(count($items)>0)

    foreach ($items as $item) {

    $html ='<div id="shopProduct">

              <!-- share and back -->
              <div class="col-md-12 clearfix">

                <!-- breadcrumb -->
                <ol class="breadcrumb pull-left">
                  <li><a href="'.Site::url().'" >'.__('Home','minishop').'</a></li>
                  <li><a href="'.Site::url().DS.'shop" >'.__('Shop','minishop').':</a></li>
                  <li class="active">'.$item['title'].'</li>
                </ol>
               
                <div class="dropdown pull-right">
                  <a id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#"  class="btn btn-default" >
                    '.__('Share on','minishop').' <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                    <li> <a href="https://www.facebook.com/sharer/sharer.php?s=100&amp;p[url]='.Site::url().'/shop/item?id='.$item['id'].'&amp;p[images][0]='.Site::url().'/public/shop/large/'.$item['image1'].'&amp;p[title]='.Text::ampEncode($item['title']).'&amp;p[summary]='.Text::ampEncode(__('Only for','minishop').' '.$item['price']).'" target="_blank">Facebook</a></li>
                    <li> <a href="http://twitter.com/share?text='.Text::ampEncode($item['title'].'  '.__('Only for','minishop').' '.$item['price']).'   '.__('From','minishop').'">Twitter</a></li>
                  </ul>
                </div>

              </div>

              <!-- slide -->
              <div class="col-md-6">

                  <div id="myProduct" class="carousel slide">
                    <div class="carousel-inner">

                      <div class="active item">
                        <a href="#" data-js="img" data-img="'.Option::get('siteurl').DS.'public/shop/large/'.$item['image1'].'" data-title="'.$item['title'].'" >
                          <img class="item_tumb" src="'.Option::get('siteurl').DS.'public/shop/large/'.$item['image1'].'"></a>
                      </div>

                      <div class="item">
                        <a href="#" data-js="img" data-img="'.Option::get('siteurl').DS.'public/shop/large/'.$item['image2'].'" data-title="'.$item['title'].'" >
                          <img  src="'.Option::get('siteurl').DS.'public/shop/large/'.$item['image2'].'"></a>
                      </div>

                      <div class="item">
                        <a href="#" data-js="img" data-img="'.Option::get('siteurl').DS.'public/shop/large/'.$item['image3'].'" data-title="'.$item['title'].'" >
                          <img src="'.Option::get('siteurl').DS.'public/shop/large/'.$item['image3'].'"></a>
                      </div>

                      <div class="item">
                        <a href="#" data-js="img" data-img="'.Option::get('siteurl').DS.'public/shop/large/'.$item['image4'].'" data-title="'.$item['title'].'" >
                          <img  src="'.Option::get('siteurl').DS.'public/shop/large/'.$item['image4'].'"></a>
                      </div>

                    </div>
                  </div>

                  <hr/>

                  <!-- thumbnails -->  
                  <ul class="list-inline">
                    <li data-target="#myProduct" data-slide-to="0" class="active">
                      <a href="#">
                        <img src="'.Option::get('siteurl').DS.'public/shop/small/'.$item['image1'].'">
                      </a>
                    </li>

                    <li data-target="#myProduct" data-slide-to="1" >
                      <a href="#">
                        <img src="'.Option::get('siteurl').DS.'public/shop/small/'.$item['image2'].'">
                      </a>
                    </li>

                    <li data-target="#myProduct" data-slide-to="2" >
                      <a href="#">
                        <img src="'.Option::get('siteurl').DS.'public/shop/small/'.$item['image3'].'">
                      </a>
                    </li>

                    <li data-target="#myProduct" data-slide-to="3" >
                      <a href="#">
                        <img src="'.Option::get('siteurl').DS.'public/shop/small/'.$item['image4'].'">
                      </a>
                    </li>
                  </ul>
            

              <hr />

              <!-- tabs -->
              <ul class="nav nav-tabs">
                <li><a href="#descripttion" data-toggle="tab">'.__('Description','minishop').'</a></li>
                <li><a href="#comments" data-toggle="tab">'.__('Comments','minishop').'</a></li>
                <li><a href="#newComment" data-toggle="tab">'.__('New comment','minishop').'</a></li>
              </ul> 

              <!-- tabs content -->    
              <div class="tab-content">

                <!-- description -->
                <div class="tab-pane well active" id="descripttion">
                    '.$item['description'].'
                </div>

                <!-- comments -->
                <div class="tab-pane well" id="comments">';

                  if(count($test) > 0) {

                    foreach ($test as $t) {
                      $html.='<div class="media">
                                <a class="pull-left" href="#">
                                  <img class="media-object" src="http://www.gravatar.com/avatar/'.md5(strtolower($t['ts_gravatar'])).'?s=40"/>
                                </a>
                                <div class="media-body borderComment">
                                  <b class="media-heading">'.$t['ts_name'].Html::nbsp(2).$t['ts_date'].'</b>
                                  <p>'.$t['ts_comment'].'</p>
                                  <p><b>'.__('Rating','minishop').':</b>'
                                  .Html::nbsp(2).'<span class="stars">'.$t['ts_rating'].'</span></p>
                                </div>
                              </div>';
                      };
                  }else{ 
                    $html.= '<div class="media">'.__('No product reviews','minishop').'</div>';
                  }

      $html .= '</div>

                <!-- new comment -->
                <div class="tab-pane well" id="newComment">'.

                        Form::open(null ,array('id' =>'ts_form','class' => 'form')).
                        Form::hidden('ts_product',$id).

                        '<div class="form-group">'.
                            Form::label('ts_name',__('Name', 'minishop')).
                            Form::input('ts_name','',array('class'=>'form-control')).
                        '</div>'.


                        '<div class="form-group">'.
                            Form::label('ts_email',__('Email','minishop')).
                            Form::input('ts_email','',array('class'=>'form-control')).
                            '<span id="ts_error" style="display:none"><br> Error empty fields or wrong email</span>
                        </div>


                        <!-- stars -->
                        <div class="form-group">'.
                          '<div class="rating form-control">'.
                              Form::label(null,__('Your opinion','minishop').':').
                              Form::checkbox('r_5',null,false,array('class'=>'rating-input')).
                              Form::label('r_5',null,array('class'=>'rating-star')).
                              Form::checkbox('r_4',null,false,array('class'=>'rating-input')).
                              Form::label('r_4',null,array('class'=>'rating-star')).
                              Form::checkbox('r_3',null,false,array('class'=>'rating-input')).
                              Form::label('r_3',null,array('class'=>'rating-star')).
                              Form::checkbox('r_2',null,false,array('class'=>'rating-input')).
                              Form::label('r_2',null,array('class'=>'rating-star')).
                              Form::checkbox('r_1',null,false,array('class'=>'rating-input')).
                              Form::label('r_1',null,array('class'=>'rating-star')).
                          '</div>
                        </div>'.

                  

                        '<div class="form-group">'.
                          Form::label(null,__('Maximum characters:','minishop')).
                          Form::input('count','200',array('class' => 'counterComment form-control','disabled')).
                        '</div>'.


                        '<div class="form-group">'.
                          Form::label('ts_comment',__('Comments','minishop')).
                          Form::textarea('ts_comment','',array(
                              'rows'=>'5',
                              'class'=>'form-control',
                              'onKeyDown' => 'return countText(this.form.ts_comment,this.form.count,200);',
                              'onKeyUp' => 'return countText(this.form.ts_comment,this.form.count,200);'
                              )).
                        '</div>'.

                        '<div class="checkbox">'.
                          '<label>'.
                          Form::checkbox('imnotarobot').__('Check if are not a robot *','minishop').
                          '</label>'.
                        '</div>'.

                          Form::hidden('ts_comentFor',$item['title']).
                          Form::hidden('csrf', Security::token()).
                        '<div class="form-group">'.
                          Form::submit('ts_send',__('Save', 'minishop'), array('class' => 'btn btn-default','onclick' => 'valComment();')).
                        '</div>'.
                          Form::close().
                      '</div>'.
                '</div>';

              }

      $html .= '</div>
                <div class="col-md-3">
                  <div class="panel panel-default">
                    <div class="panel-heading">'.$item['title'].'</div>
                    <div class="panel-body">
                        <p><b>'.__('Category','minishop').':  </b>'.Html::nbsp().$item['product'].'</p>
                        <p><b>'.__('Price','minishop').':  </b>'.$item['price'].'</p>
                        <p><b>'.__('Stock','minishop').':  </b>'.$item['stock'].'</p>
                        <p><b>'.__('Size','minishop').':  </b>'.$item['size'].'</p>
                        <p><b>'.__('Color','minishop').':  </b>'.$item['color'].'</p>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">'.__('Rating of users','minishop').'</div>
                    <div class="panel-body">
                        <p><b>'.__('Bad','minishop').': </b><span class="stars">'.percentage($item['bad'],$item['hit']).'</span></p>
                        <p><b>'.__('Good','minishop').': </b><span class="stars">'.percentage($item['good'],$item['hit']).'</span></p>
                        <p><b>'.__('Very good','minishop').':</b><span class="stars">'.percentage($item['veryGood'],$item['hit']).'</span></p>
                        <p><b>'.__('Amazing','minishop').': </b><span class="stars">'.percentage($item['amazing'],$item['hit']).'</span></p>
                        <p>'.miniShop::raTing().'</p>


                      <div class="simpleCart_shelfItem">
                         <h2 class="item_name hide">'.$item['title'].'</h2>
                         <img src="'.Option::get('siteurl').DS.'/public/shop/small/'.$item['image1'].'" alt="Item Alt" class="hide">
                         <span class="item_price hide">'.$item['price'].'</span>
                         <a href="javascript:;" class="item_add btn btn-default">'.__('Add to cart','minishop').'</a>
                      </div>

                 
                    </div>
                  </div>
              </div>';
 
    echo $html;
?>



</div>


<!-- Modal -->
<div id="modal" class="modal fade">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <span id="data-header"></span>
          <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">&times;</span>
              <span class="sr-only">Cerrar</span>
          </button>
          <h4 id="title" class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <div id="data-body"></div>
        </div>
    </div>
  </div>
</div>



