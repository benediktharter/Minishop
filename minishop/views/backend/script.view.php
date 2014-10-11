
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

            swal({
              title: "Success",
              text: "'.Option::get('ms_afadd').'",
              type: "success",
              confirmButtonColor: "#DD6B55",
              closeOnConfirm: false
            },function(){
              location.reload();
            })


    			},
    			checkoutFail:function(){

            swal({
              title: "Error",
              text: "'.Option::get('ms_chkfail').'",
              type: "error",
              confirmButtonColor: "#DD6B55",
              closeOnConfirm: false
            },function(){
              location.reload();
            })

    			},
    			beforeCheckout:function(){

            swal({
              title: "Success",
              text: "'.Option::get('ms_befchk').'",
              type: "success",
              confirmButtonColor: "#DD6B55",
              closeOnConfirm: false
            },function(){
              location.reload();
            })


    			}
    		});
            var t = setTimeout(function(){
                var check = document.querySelector("#getCheckout .ms_checkout");
                if(check){
                    if(simpleCart.items().length === 0){
                        check.style.display="none";
                    }else{
                        check.style.display="inline-block";
                    }
                }
                clearTimeout(t);
            },500);


</script>';
  }else if (Page::Slug() == 'shop'){
    echo'<script type="text/javascript">
    		simpleCart({
            afterAdd:function(){

              swal({
                title: "Success",
                text: "'.Option::get('ms_afadd').'",
                type: "success",
                confirmButtonColor: "#DD6B55",
                closeOnConfirm: false
              },function(){
                location.reload();
              })


            },
            checkoutFail:function(){

              swal({
                title: "Error",
                text: "'.Option::get('ms_chkfail').'",
                type: "error",
                confirmButtonColor: "#DD6B55",
                closeOnConfirm: false
              },function(){
                location.reload();
              })

            },
            beforeCheckout:function(){
            
              swal({
                title: "Success",
                text: "'.Option::get('ms_befchk').'",
                type: "success",
                confirmButtonColor: "#DD6B55",
                closeOnConfirm: false
              },function(){
                location.reload();
              })


            }
    		});

</script>';
  }else if (Page::Slug() == 'item'){
    echo'<script type="text/javascript">
    		simpleCart({
            afterAdd:function(){

              swal({
                title: "Success",
                text: "'.Option::get('ms_afadd').'",
                type: "success",
                confirmButtonColor: "#DD6B55",
                closeOnConfirm: false
              },function(){
                location.reload();
              })


            },
            checkoutFail:function(){

              swal({
                title: "Error",
                text: "'.Option::get('ms_chkfail').'",
                type: "error",
                confirmButtonColor: "#DD6B55",
                closeOnConfirm: false
              },function(){
                location.reload();
              })

            },
            beforeCheckout:function(){
            
              swal({
                title: "Success",
                text: "'.Option::get('ms_befchk').'",
                type: "success",
                confirmButtonColor: "#DD6B55",
                closeOnConfirm: false
              },function(){
                location.reload();
              })


            }
    		});
</script>';
  }
?>
