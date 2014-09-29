<?php 

    $img1 = 'background:url('.Option::get("siteurl")."/public/shop/large/".$image1.') no-repeat center !important';
    $img2 = 'background:url('.Option::get("siteurl")."/public/shop/large/".$image2.') no-repeat center !important';
    $img3 = 'background:url('.Option::get("siteurl")."/public/shop/large/".$image3.') no-repeat center !important';
    $img4 = 'background:url('.Option::get("siteurl")."/public/shop/large/".$image4.') no-repeat center !important';

    echo (
    Form::open(null, array('enctype' => 'multipart/form-data',array('class' => 'form','data-parsley-validate'))).

    '<div class="well well-lg">'.
        Form::submit('editProdct', __('Save', 'minishop'), array('class' => 'btn btn-default')).
         Html::anchor( __('Back', 'minishop'),'index.php?id=minishop',array('class' => 'btn btn-danger')).
    '</div>'.

  

    '<div class="from-group">
        <div class="col-md-6">

            <div class="form-group">'.
                Form::label('product', __('Add new category', 'minishop')).
                Form::input('product', $product, array('class'=>'form-control','required')).
            '</div>

            <div class="form-group">'.
                Form::label('tag', __('Or select Category', 'minishop')).
                Form::select('tag', $tags,null, array('class'=>'form-control','onChange' =>'OnDropDownChange(this);')).
            '</div>

            <div class="form-group">'.
                Form::label('price', __('Price', 'minishop')).
                Form::input('price', $price, array('class'=>'form-control','required')).
             '</div>
             <div class="form-group">'.
                Form::label('size', __('size', 'minishop')).
                Form::input('size', $size, array('class'=>'form-control','required')).
            '</div>

            <div class="form-group">'.
                Form::label('color', __('color', 'minishop')).
                Form::input('color', $color, array('class'=>'form-control','required')).
            '</div>

            <div class="form-group">'.
                Form::label('stock', __('Add stock', 'minishop')).
                Form::input('stock', $stock, array('class'=>'form-control','required')).
            '</div>

    </div>

    <div class="col-md-6">

            <div class="form-group">'.
                Form::label('title', __('Title', 'minishop')).
                Form::input('title', $title, array('class'=>'form-control','required')).
            '</div>


            <div class="form-group">'.
                Form::label('description', __('Insert description', 'minishop')).
                Form::textarea('description',$description, array('class'=>'form-control','rows'=>'5','required')).
            '</div>


            <div class="form-group col-md-6">
                <div class="fileinput fileinput-new pull-left" data-provides="fileinput">
                  <span class="btn btn-default btn-file" style="'.$img1.';color:white"><span class="fileinput-new">
                  '.__('Add Image 1', 'minishop').'
                  </span>
                  <span class="fileinput-exists">'. __('Change', 'filesmanager').'</span>
                  '.Form::file('image1',array('class'=>'from-control')).'    
                  <span class="fileinput-filename"></span>   
                  <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                </div>

                <div class="fileinput fileinput-new pull-left" data-provides="fileinput">
                  <span class="btn btn-default btn-file" style="'.$img2.';color:white"><span class="fileinput-new">
                  '.__('Add Image 2', 'minishop').'
                  </span>
                  <span class="fileinput-exists">'. __('Change', 'filesmanager').'</span>
                  '.Form::file('image2',array('class'=>'from-control')).'    
                  <span class="fileinput-filename"></span>   
                  <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                </div>

                <div class="fileinput fileinput-new pull-left" data-provides="fileinput">
                  <span class="btn btn-default btn-file" style="'.$img3.';color:white"><span class="fileinput-new">
                  '.__('Add Image 3', 'minishop').'
                  </span>
                  <span class="fileinput-exists">'. __('Change', 'filesmanager').'</span>
                  '.Form::file('image3',array('class'=>'from-control')).'    
                  <span class="fileinput-filename"></span>   
                  <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                </div>

                <div class="fileinput fileinput-new pull-left" data-provides="fileinput">
                  <span class="btn btn-default btn-file" style="'.$img4.';color:white"><span class="fileinput-new">
                  '.__('Add Image 4', 'minishop').'
                  </span>
                  <span class="fileinput-exists">'. __('Change', 'filesmanager').'</span>
                  '.Form::file('image4',array('class'=>'from-control')).'    
                  <span class="fileinput-filename"></span>   
                  <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                </div>
            </div>

        </div>
    </div><!-- row-->'.
        Form::hidden('csrf', Security::token()).
    '</div>'.
        Form::close());
    ?>


<script src="<?php echo Option::get('siteurl');?>/plugins/minishop/lib/js/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
 <script type="text/javascript">
    function OnDropDownChange(dropDown) {
        var selectedValue = dropDown.options[dropDown.selectedIndex].text;
        document.getElementById("product").value = selectedValue;
    }
 </script>
