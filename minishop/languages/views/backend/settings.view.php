<?php
echo (
    Form::open(null,array('class'=>'form')).
    '<div class="well well-lg">'.
        Form::submit('editJs', __('Save', 'minishop'), array('class' => 'btn btn-default')).
        Html::anchor( __('Back', 'minishop'),'index.php?id=minishop',array('class' => 'btn btn-info')).
    '</div>'.


    '<div class="row">
        <div class="col-md-6">'.

            '<div class="form-group">'.
                Form::label('ms_mail', __('Email of Paypal', 'minishop')).
                Form::input('ms_mail', Option::get('ms_mail'), array('class'=>'form-control','required')).
            '</div> '.

            '<div class="form-group">'.
                Form::label('ms_currency', __('Currency', 'minishop')).
                '<select name="ms_currency" id="ms_currency" class="form-control">
                    <option value="'.Option::get('ms_currency').'">'.Option::get('ms_currency').'</option>
                    '.$current.'
                </select>'.
            '</div>'.

            '<div class="form-group">'.
                Form::label('ms_tax', __('Tax', 'minishop')).
                Form::input('ms_tax', Option::get('ms_tax'), array('class'=>'form-control','required')).
            '</div>'.


            '<div class="form-group">'.
                Form::label('ms_cashontax', __('Cash on delivery Tax', 'minishop')).
                Form::input('ms_cashontax', Option::get('ms_cashontax'), array('class'=>'form-control','required')).
            '</div>'.


            '<div class="form-group">'.
                Form::label('ms_afadd', __('Text after add', 'minishop')).
                Form::input('ms_afadd', Option::get('ms_afadd'), array('class'=>'form-control','required')).
            '</div>'.
            '<div class="form-group">'.
                Form::label('ms_chkfail', __('Text error', 'minishop')).
                Form::input('ms_chkfail', Option::get('ms_chkfail'), array('class'=>'form-control','required')).
            '</div>'.
        '</div>'.
        '<div class="col-md-6">'.
            '<div class="form-group">'.
                Form::label('ms_befchk', __('Text before chekout', 'minishop')).
                Form::textarea('ms_befchk', Option::get('ms_befchk'), array('class'=>'form-control','rows'=>'3','required')).
            '</div>'.

            '<div class="form-group">'.
                Form::label('ms_cashon', __('Text cash on delivery', 'minishop')).
                Form::textarea('ms_cashon', Option::get('ms_cashon'), array('class'=>'form-control','rows'=>'3','required')).
            '</div>'.

            '<div class="form-group">'.
                Form::label('ms_success', __('Success text', 'minishop')).
                Form::textarea('ms_success', Option::get('ms_success'), array('class'=>'form-control','rows'=>'3','required')).
            '</div>'.

            '<div class="form-group">'.
                Form::label('ms_cancel', __('Cancel text', 'minishop')).
                Form::textarea('ms_cancel', Option::get('ms_cancel'), array('class'=>'form-control','rows'=>'3','required')).
            '</div>'.
        '</div>'.
                Form::hidden('csrf', Security::token()).
                form::close().
    '</div>');
    ?>








