<?php 
echo 
'<p>'.Option::get('ms_befchk').'</p>'.

'<p><a href="javascript:void(0);" class="ms_checkout simpleCart_checkout btn btn-default">
  <span class="pay"></span>'.__('Paypal','minishop').'</a></p>'.
  
'<script src="'.Site::url().'/plugins/minishop/lib/js/simplecart.min.js"></script>'.
'<script src="'.Site::url().'/plugins/minishop/lib/js/minishop.js"></script>'.
  '<script type="text/javascript">
          simpleCart({
            cartColumns: [
              {
                attr:"name",
                label:"'.__('Name','minishop').'"
              },{
                attr:"price",label:"'.__('Price','minishop').'",
                view: "currency"
              },{
                view:"input",
                attr:"quantity",
                label:"'.__('Qty','minishop').'"
              },{
                attr:"total",
                label:"'.__('Subtotal','minishop').'",
                view:"currency" 
              },{
                view:"remove", 
                text:"'.__('Remove','minishop').'",
                label:"'.__('Options','minishop').'"
              }
            ],
            cartStyle:"table",
            checkout:{
              type:"PayPal",
              email:"'.Option::get('ms_mail').'",
              method: "GET",
              success:"'.Option::get('siteurl').'/shop?gt=sc",
              excludeFromCheckout:"tumb",
              cancel:"'.Option::get('siteurl').'/shop?gt=cn"
            },
            currency:"'.Option::get('ms_currency').'",
            taxRate:'.Option::get('ms_tax').',
            taxShipping:true,
            afterAdd:function(){
              alert("'.Option::get('ms_afadd').'");
                      location.reload();
            },
            checkoutFail:function(){
              alert("'.Option::get('ms_chkfail').'");
                      location.reload();
            },
            beforeCheckout:function(){
              alert("'.Option::get('ms_befchk').'");
                      location.reload();
            }
          });
  </script>'

?>
