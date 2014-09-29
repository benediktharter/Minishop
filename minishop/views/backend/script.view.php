
<?php
  if (Page::Slug() == 'items') {
    echo'<script type="text/javascript">
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
	    				label:"'.__('Quantity','minishop').'"
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
            var t = setTimeout(function(){
                  if(simpleCart.items().length === 0){
                    document.querySelector("#getCheckout .ms_checkout").style.display="none";
                  }else{
                    document.querySelector("#getCheckout .ms_checkout").style.display="inline-block";
                  }              
                clearTimeout(t);
            },500);


</script>';
  }else if (Page::Slug() == 'shop'){
    echo'<script type="text/javascript">
    		simpleCart({
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

</script>';
  }else if (Page::Slug() == 'item'){
    echo'<script type="text/javascript">
    		simpleCart({
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
</script>';
  }
?>