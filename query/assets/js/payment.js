function pay(id){
    $('#'+id).find('.loader').show();
    var data=$('#'+id).serializeArray();
    console.log(data);
    grecaptcha.ready(function() {
        grecaptcha.execute('6LfLgMMhAAAAAPTfbvvJjuSgmIFFqugSPR3kTJUC', {action: 'submit'}).then(function(token) {
            data.push({name: 'token', value: token});
            const FormDataPost = $.post("../service/payment.php",data);
            FormDataPost.done(function(response) {
                console.log(response);
                if(response.status == 'false'){
                    $('#'+id).find('.loader').hide();                    
                    $('#'+id).find('.error-msg .alert').html(response.message);
                    $('#'+id).find('.error-msg').show();

                }
                if(response.status == 'true'){
                    $('#'+id).find('.loader').hide();                    
                    $('#'+id).find('.error-msg .alert').html(response.message);
                    $('#'+id).find('.error-msg .alert').removeClass('alert-danger');
                    $('#'+id).find('.error-msg .alert').addClass('alert-success');
                    $('#'+id).find('.error-msg').show();
                    
                    setTimeout(function(){
                        window.location.href = "../thankyou.php";
                    },800);
                }
            });
            FormDataPost.fail( function(xhr, textStatus, errorThrown) {
                $('#'+id).find('.loader').hide();                    
                $('#'+id).find('.error-msg .alert').html(textStatus);
                $('#'+id).find('.error-msg').show();
            });
        })

    })

}



function changeService (el) {
    
    if (el.value == "Direct Hit Search") {
        $('#searchPrice').val('$0');
    }
    
    if (el.value == "Basic Search") {
        $('#searchPrice').val('$9.99');
    }

    if (el.value == "Federal & State Search") {
        $('#searchPrice').val('$149');
    }

    if (el.value == "State & Common Law Search") {
        $('#searchPrice').val('$299');
    }
    
    if (el.value == "Global Search") {
        $('#searchPrice').val('$499');
    }
    
    

    // calculate price
    calculate();
}

function changePackage (el) {
    console.log(el.value);
    
    if (el.value == "Trademark Basic Package") {
        $('#pprice').val('$39');
    }

    if (el.value == "Trademark Professional Package") {
        $('#pprice').val('$99');
    }

    if (el.value == "Trademark Business Package") {
        $('#pprice').val('$199');
    }
    
    if (el.value == "Trademark Corporate Package") {
        $('#pprice').val('$349');
    }
    
    // calculate price
    calculate();
    
    // const params = new Proxy(new URLSearchParams(window.location.search), {
    //     get: (searchParams, prop) => searchParams.get(prop),
    // });
    // if (params.package == el.value) {
    //     return false;
    // }
    // window.location.href = window.location.pathname+"?package="+el.value+"&id="+params.id;
}

function changeExpedite(el) {
    if (el.checked === true) {
        $('#expedite').val('75');
    } else {
        $('#expedite').val('0')
    }
    calculate();
}

function calculate() {
    let pPrice = $('#pprice').val().split('$');
    let packagePrice = parseInt(pPrice[1]);
    let sPrice = $('#searchPrice').val().split('$');
    let servicePrice = parseFloat(sPrice[1]);
    let expedite = parseInt($('#expedite').val());
    
    let total = packagePrice+servicePrice+expedite;
    
    
    $('#subTotal').val('$'+total.toFixed(2));
}

function showmodal(id) {
    $('#'+id).modal('show');
}

function closemodal(id) {
    $('#'+id).modal('hide');
}

function acceptTerms(id) {
    $('#tos').prop('checked', true);
    $('#'+id).modal('hide');
}

$(document).ready(function(e){
    setTimeout(function(){
        
        if ($('#search').val() == "Direct Hit Search") {
            $('#searchPrice').val('$0');
        }
        
        if ($('#search').val() == "Basic Search") {
            $('#searchPrice').val('$9.99');
        }
    
        if ($('#search').val() == "Federal & State Search") {
            $('#searchPrice').val('$149');
        }
    
        if ($('#search').val() == "State & Common Law Search") {
            $('#searchPrice').val('$299');
        }
        
        if ($('#search').val() == "Global Search") {
            $('#searchPrice').val('$499');
        }
        if ($('#package').val() == "Trademark Basic Package") {
            $('#pprice').val('$39');
        }
    
        if ($('#package').val() == "Trademark Professional Package") {
            $('#pprice').val('$99');
        }
    
        if ($('#package').val() == "Trademark Business Package") {
            $('#pprice').val('$199');
        }
        
        if ($('#package').val() == "Trademark Corporate Package") {
            $('#pprice').val('$349');
        }
        if ($('#expedited').prop('checked') === true) {
            $('#expedite').val('75');
        }
        calculate();
    },300);
    
   calculate(); 
});