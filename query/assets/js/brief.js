

function brief(id){
    $('#'+id).find('.loader').show();
    var data=$('#'+id).serializeArray();
    console.log(data);
    grecaptcha.ready(function() {
        grecaptcha.execute('6LfLgMMhAAAAAPTfbvvJjuSgmIFFqugSPR3kTJUC', {action: 'submit'}).then(function(token) {
            data.push({name: 'token', value: token});
            const FormDataPost = $.post("../service/brief.php",data);
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
                        window.location.href = "payment.php?package="+$('#'+id).find('input[name="Package"]').val()+"&search=Direct%20Hit%20Search&id="+$('#'+id).find('input[name="UserId"]').val();
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

$(document).ready(function(){
    $('.logo-box').click(function(){
        $('.logo-box').removeClass('active');
        $(this).addClass('active')
        $('#prefered').val($(this).find('p').html());
    });
});
