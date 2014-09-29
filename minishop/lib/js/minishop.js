/*
Author: Addam M. Driver
Date: 10/31/2006
*/

var sMax;
var holder;
var preSet;
var rated;

function rating(num) {
    sMax = 0;
    for (n = 0; n < num.parentNode.childNodes.length; n++)
        if (num.parentNode.childNodes[n].nodeName == "A") sMax++;
    if (!rated) {
        s = num.id.replace("_", "");
        a = 0;
        for (i = 1; i <= sMax; i++)
            if (i <= s) {
                document.getElementById("_" + i).className = "on";
                document.getElementById("rateStatus").innerHTML = num.title;
                holder = a + 1;
                a++
            } else document.getElementById("_" + i).className = ""
    }
}

function off(me) {
    if (!rated)
        if (!preSet)
            for (i = 1; i <= sMax; i++) {
                document.getElementById("_" + i).className = "";
                document.getElementById("rateStatus").innerHTML = me.parentNode.title
            } else {
                rating(preSet);
                document.getElementById("rateStatus").innerHTML = document.getElementById("ratingSaved").innerHTML
            }
}

function rateIt(me) {
    if (!rated) {
        document.getElementById("rateStatus").innerHTML = document.getElementById("ratingSaved").innerHTML + " :: " + me.title;
        preSet = me;
        rated = 1;
        sendRate(me);
        rating(me)
    }
};


/*
Show porcentage with stars
*/
(function($) {
    $.fn.stars = function() {
        return $(this).each(function() {
            $(this).html($('<span />').width(Math.max(0, (Math.min(5, parseFloat($(this).html())))) * 16));
        });
    }
    $(function() {
        $('span.stars').stars();
    });
})(jQuery);




(function($) {
    $(document).ready(function() {
        //console.log('Shop ready');
        $('a[href="#"]').on('click', function(e) {
            e.preventDefault();
        });

        $.js = function(el) {
            return $('[data-js=' + el + ']');
        };

        $.js('img').on('click', function() {
            img = $(this).data('img');
            title = $(this).data('title');
            $('#data-header').html(title);
            $('#data-body').html('<img src="' + img + '"/>');
            $('#modal').modal();
        });
    });
})(jQuery);



var thisForm = document.getElementById('ts_form');
if (thisForm) {
    thisForm.onsubmit = function() {
        return valComment();
    }
};


var checkForm = document.getElementById('ms_formCheckout');
if (checkForm) {
    checkForm.onsubmit = function() {
        return validate();
    }
};


function countText(limitField, limitCount, limitNum) {
    if (limitField.value.length > limitNum) {
        limitField.value = limitField.value.substring(0, limitNum);
    } else {
        limitCount.value = limitNum - limitField.value.length;
    }
}

function valComment() {
    var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var error = document.getElementById('ts_error');
    var thisEmail = document.getElementById('ts_email');
    if (reg.test(thisEmail.value) == '') {
        thisEmail.focus();
        error.style.display = 'inline-block';
        return false;
    }
    return true;
}

function validate() {
    var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    var errorName = document.getElementById('ms_errorName');
    var thisName = document.getElementById('ms_name');
    if (thisName.value == '') {
        thisName.focus();
        errorName.style.display = 'inline-block';
        return false;
    } else if (thisName.value > '') {
        errorName.style.display = 'none';
    }

    var errorEmail = document.getElementById('ms_errorEmail');
    var thisEmail = document.getElementById('ms_email');
    if (reg.test(thisEmail.value) == '') {
        thisEmail.focus();
        errorEmail.style.display = 'inline-block';
        return false;
    }

    getAttr();
    return true;
}

// Get attributes of  simplecart
function getAttr() {
    var total = document.getElementById('total').textContent,
        producto = '';
    simpleCart.each(function(item) {
        producto += item.get('name') + '-[' + item.get('quantity') + ']' + ',';
    });
    producto = producto.replace(/,\s*$/, "");
    document.getElementById('ms_purchased').value = producto;
    document.getElementById('ms_total').value = total;
}


/* Confirm delete */
function confirmDelete(msg) {
    var data = confirm(msg + " ?");
    if (data) {
        return data;
    } else {
        return false;
    }
}
