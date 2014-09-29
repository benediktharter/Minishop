<div class="col-md-6">
<?php 

echo
    Form::open(null ,array('id' =>'ms_formCheckout','class' => 'form')).


  '<div class="form-group">'.
    Form::label('ms_name',__('Name *', 'minishop')).
    Form::input('ms_name','',array('class'=>'form-control')).
    '<small class="help-block">'.__('Write your name and lastname','minishop').'</small>'.
    '<small id="ms_errorName" class="label label-danger" style="display:none">'.__('Error empty fields *', 'minishop').'</small>
  </div>'.


  '<div class="form-group">'.
    Form::label('ms_email',__('Email *','minishop')).
    Form::input('ms_email','',array('class'=>'form-control')).
    '<small class="help-block">'.__('Write your real email please','minishop').'</small>'.
    '<small id="ms_errorEmail" class="label label-danger" style="display:none">'.__('Error empty fields or wrong email', 'minishop').'</small>
  </div>'.



  '<div class="form-group">'.
    Form::label('ms_adress1',__('Address 1','minishop')).
    Form::input('ms_adress1','',array('class'=>'form-control')).
    '<small class="help-block">'.__('Write your Shipping Address','minishop').' 1</small>'.
  '</div>'.


  '<div class="form-group">'.
    Form::label('ms_adress2',__('Address 2','minishop')).
    Form::input('ms_adress2','',array('class'=>'form-control')).
    '<small class="help-block">'.__('Write your Shipping Address','minishop').' 2</small>'.
  '</div>'.


 '<div class="form-group">'.
    '<span id="items" class="simpleCart_quantity hide"></span></p>'.
    '<span id="total" class="simpleCart_grandTotal hide"></span></p>'.
  '</div>'.


  '<p><b>'.__('Select paid method','minishop').':</b></p>'.
  '<div class="radio">'.
      '<label>'.
        Form::radio('paidmethod','cashondelivery').'<span>'.__('Cash on delivery','minishop').'  (<small> '.Option::get('ms_cashontax').'</small>)</span>'.
      '</label>'.
  '</div>'.

  '<div class="radio">'.
        '<label>'.
          Form::radio('paidmethod','paypal').'<span>'.__('Paypal','minishop').'</span>'.
        '</label>'.
    '</div>'.


  '<div class="checkbox">'.
      '<label>'.
        Form::checkbox('imnotarobot').'<span style="color:#f55">'.__('Check if are not a robot *','minishop').'</span>'.
      '</label>'.
  '</div>'.
        Form::hidden('ms_purchased').
        Form::hidden('ms_total').
        Form::hidden('csrf', Security::token()).Html::br().
        Form::submit('ms_submit',__('Save', 'minishop'), array('class' => 'btn','onclick' => 'validate();')).




'</div>'.

'<div class="col-md-6">'.


  '<div class="form-group">'.
    Form::label('ms_locality',__('Locality','minishop')).
    Form::input('ms_locality','',array('class' => 'form-control')).
    '<small class="help-block">'.__('Write your Locality','minishop').'</small>'.
 '</div>'.



  '<div class="form-group">'.
    Form::label('ms_country',__('Country','minishop')).
    Form::input('ms_country','',array('class'=>'form-control')).
    '<small class="help-block">'.__('Write your Country','minishop').'</small>'.
  '</div>'.




  '<div class="form-group">'.
    Form::label('ms_phone',__('Phone','minishop')).
    Form::input('ms_phone','',array('class'=>'form-control')).
    '<small class="help-block">'.__('Write your Contact Phone','minishop').'</small>'.
  '</div>'.




  '<div class="form-group">'.
    Form::label('ms_comment',__('Comments','minishop')).
    '<div class="controls">'.
    Form::textarea('ms_comment','',array('rows'=>'5','class'=>'form-control')).
    '<small class="help-block">'.__('Write a Shipping Details','minishop').'</small>'.
    '</div>
  </div>'.

  Form::close().Html::br(2);
?>
</div>

