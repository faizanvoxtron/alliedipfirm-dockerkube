


var newsletter_p = setInterval(function() {
    $("#ouibounce-modal").fadeIn("#bouncepopup-overlay").css("display","block")
    clearInterval(newsletter_p);
}, 60000);
$(document).ready(function() {





 if ($.cookie('popup_load') != '1') {

   count = 0; limit = 3;

var refreshId = setInterval( function() {
if(count < limit) {
jQuery("#ouibounce-modal").css('display', 'block');
       count++;
}
else {
    clearInterval(refreshId);
}
}, 60000);


$.cookie('popup_load', '1', { expires: 60});
 }





    $(".filters .filter_cnt .filters_cnt_in a").hover(function() {
    $(this).parent().parent().find(".tooltip_cnt").show()
}, function() {
    $(this).parent().parent().find(".tooltip_cnt").hide()
})

// var key = '5XpThOAEkfgOvEJ';
//       var currentIP = $("meta[name=ip2loc]").attr('content');

//       $.ajax({
//       method: 'get',
//       url: 'https://pro.ip-api.com/json/' + currentIP,
//       data: {key: key},
//       success: function (data) {
//       if (data) {
//       $('input[name=ip2loc_ip]').val(data.query);
//       $('input[name=ip2loc_isp]').val(data.isp);
//       $('input[name=ip2loc_org]').val(data.org);
//       $('input[name=ip2loc_country]').val(data.country);
//       $('input[name=ip2loc_region]').val(data.regionName);
//       $('input[name=ip2loc_city]').val(data.city);
//       }
//       }
//       });

// $(".footer-vld-frm").validate();
// $(".validate-banner-frm").validate();



$('.customerslider').owlCarousel({
    loop:true,
    margin:0,
    dots:true,
    responsiveClass:true,

    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:1,
            nav:false,
            loop:false
        }
    }
});


    $('.various').click(function() {
        var leadprice = $(this).attr('name');
        $(".popupform .leadprice").val(leadprice)
        $(".popupform .pp_pr").text(leadprice)

    });



    var str = location.href.toLowerCase();
    $(".navbar-nav li a").each(function() {
        if (str.indexOf(this.href.toLowerCase()) > -1) {
            $("li.active").removeClass("active");
            $(this).parent().addClass("active");
        }
    });

$('.customerslider').owlCarousel({
    loop:true,
    margin:0,
    dots:true,
    responsiveClass:true,

    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:1,
            nav:false,
            loop:false
        }
    }
})

    $('[data-fancybox]').fancybox();
    $(".validate-popupform").validate();
        $(".popup-bounce").validate();

    $('.contact-form').validate();
    $(".contactusform").validate();
    $(".validate-footer").validate();
    $(".contactusform-footer").validate();


 var $regexname=/^[a-z][a-z\s]*$/;
    $('.cn_pp').on('keypress keydown keyup',function(){
       
             if (!$(this).val().match($regexname)) {
                 $('.emsg').removeClass('hidden');
                 $('.emsg').show();
             }
           else{
                $('.emsg').addClass('hidden');
               }
         });
});



function setButtonURL() {
$zopim.livechat.window.toggle();
}


$('.chat').click( function(){
$zopim.livechat.window.toggle();
});

