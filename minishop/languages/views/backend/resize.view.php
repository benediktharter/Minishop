<?php 
    echo (
    Form::open(null,array('class' => 'form')).
    '<div class="well well-lg">'.
        Form::submit('resizephotos', __('Save', 'minishop'), array('class' => 'btn btn-default')).
        Html::anchor( __('Back', 'minishop'),'index.php?id=minishop',array('class' => 'btn btn-info')).
    '</div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">'.
                    Form::label('wsmall', __('Insert width in px', 'minishop')).
                    Form::input('wsmall', Option::get('ms_width'), array('class'=>'form-control')).
            '</div>
            <div class="form-group">'.
                    Form::label('hsmall', __('Insert height in px', 'minishop')).
                    Form::input('hsmall', Option::get('ms_height'), array('class'=>'form-control')).
            '</div>
            <div class="form-group">'.
                    Form::label('Resize', __('Resize options', 'minishop')).Html::nbsp(2).
                    Form::select('Resize', $Resize, Option::get('ms_resize')).Html::Br().Html::br(2).
            '</div>
        </div>
        <div class="col-md-6">
            <div class="form-group">'.
                    Form::label('wlarge', __('Insert max width in px', 'minishop')).
                    Form::input('wlarge', Option::get('ms_wmax'), array('class'=>'form-control')).
            '</div>
            <div class="form-group">'.
                    Form::label('hlarge', __('Insert max height in px', 'minishop')).
                    Form::input('hlarge', Option::get('ms_hmax'), array('class'=>'form-control')).
            '</div>'.
                Form::hidden('csrf', Security::token()).
                Form::close().
        '</div>
    </div>');
?>





