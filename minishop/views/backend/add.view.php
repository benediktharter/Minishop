<?php 
    echo (
    Form::open(null, array('enctype' => 'multipart/form-data','class' => 'form')).

    '<div class="well well-lg">'.
        Form::submit('addProdct', __('Save', 'minishop'), array('class' => 'btn btn-default')).
        Html::anchor( __('Back', 'minishop'),'index.php?id=minishop',array('class' => 'btn btn-info')).
    '</div>

    <div class="from-group">
        <div class="col-md-6">

            <div class="form-group">'.
                Form::label('product', __('Add new category', 'minishop')).
                Form::input('product', '', array('class'=>'form-control')).
            '</div>

            <div class="form-group">'.
                Form::label('tag', __('Or select Category', 'minishop')).
                Form::select('tag', $tags,null, array('class'=>'form-control','onChange' =>'OnDropDownChange(this);')).
            '</div>

            <div class="form-group">'.
                Form::label('price', __('Price', 'minishop')).
                Form::input('price', '', array('class'=>'form-control')).
             '</div>
             <div class="form-group">'.
                Form::label('size', __('Size', 'minishop')).
                Form::input('size', '', array('class'=>'form-control')).
            '</div>

            <div class="form-group">'.
                Form::label('color', __('Color', 'minishop')).
                Form::input('color', '', array('class'=>'form-control')).
            '</div>
            <div class="form-group">'.
                Form::label('stock', __('Add stock', 'minishop')).
                Form::input('stock', '', array('class'=>'form-control')).
            '</div>
        </div>

        <div class="col-md-6">

            
            <div class="form-group">'.
                Form::label('title', __('Title', 'minishop')).
                Form::input('title', '', array('class'=>'form-control')).
            '</div>



            <div class="form-group">'.
                Form::label('description', __('Insert description', 'minishop')).
                Form::textarea('description', '', array('class'=>'form-control','rows'=>'5')).
            '</div>



            <div class="form-group col-md-6">
                <div class="fileinput fileinput-new pull-left" data-provides="fileinput">
                  <span class="btn btn-default btn-file"><span class="fileinput-new">
                  '.__('Add Image 1', 'minishop').'
                  </span>
                  <span class="fileinput-exists">'. __('Change', 'filesmanager').'</span>
                  '.Form::file('image1',array('class'=>'from-control')).'    
                  <span class="fileinput-filename"></span>   
                  <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                </div>

                <div class="fileinput fileinput-new pull-left" data-provides="fileinput">
                  <span class="btn btn-default btn-file"><span class="fileinput-new">
                  '.__('Add Image 2', 'minishop').'
                  </span>
                  <span class="fileinput-exists">'. __('Change', 'filesmanager').'</span>
                  '.Form::file('image2',array('class'=>'from-control')).'    
                  <span class="fileinput-filename"></span>   
                  <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                </div>

                <div class="fileinput fileinput-new pull-left" data-provides="fileinput">
                  <span class="btn btn-default btn-file"><span class="fileinput-new">
                  '.__('Add Image 3', 'minishop').'
                  </span>
                  <span class="fileinput-exists">'. __('Change', 'filesmanager').'</span>
                  '.Form::file('image3',array('class'=>'from-control')).'    
                  <span class="fileinput-filename"></span>   
                  <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                </div>

                <div class="fileinput fileinput-new pull-left" data-provides="fileinput">
                  <span class="btn btn-default btn-file"><span class="fileinput-new">
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
    // function for select category
    function OnDropDownChange(dropDown) {
        var selectedValue = dropDown.options[dropDown.selectedIndex].text;
        document.getElementById("product").value = selectedValue;
    }
 </script>