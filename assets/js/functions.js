var winWidth = $(window).width(),
    winHeight = $(window).height(),
	popCls,
    arrayUrl = window.location.href.split("/"),
    baseUrl = arrayUrl[0] + "//" + arrayUrl[2],
    ccount = 0;
    JsonLocation : any = '';

$(function () {
	// Do after Page ready
	doOnReady();
});

// $(window).on('load', function () {
// 	// Do after Page ready
// 	doOnLoad();
// });

$(window).on('resize orientationchange', function () {
	// Do on resize
	doOnResize();
});

$(window).on('scroll', function () {
	// Do on scroll
	doOnScroll();
});

$(document).keyup(function (e) {
	if (e.keyCode == 27) {
		// Do on ESC press
	}
});

function doOnReady() {
	// OnReady Functions
	initHtmlReader();
	initCarousel('.js-carousel', 1, 1, false, true);
	headerFixed();
	targetScroll();
	tabsInit();
	acordianInit();
	ChangeToSvg();
	getCopyYear();
	checkviewport('.js-viewport');
	initEqualHeight();
	initToggleClass('.ac-hold','is--active','.pAc-hold');
	initMenuActive('.js-menu');
	bindPopupEve();
	showMobileTootip();
	$('body').on('click', '.js-menubtn:not(.is--active)', function () {
		sideMenuOpen();
	}).on('click', '.js-menubtn.is--active', function () {
		sideMenuClose();
	}).on('click', '.js-menuclose', function () {
		sideMenuClose();
	}).on('click touchstart', '.js-defaultOverlay', function () {
		sideMenuClose();
		hideMobileTootip();
	}).on('paste','.js-byphone', function(event) {
		if (event.originalEvent.clipboardData.getData('Text').match(/[^\d]/)) {
			event.preventDefault();
		}
	}).on('keypress','.js-byphone', function(event) {
		if (event.which < 48 || event.which > 58) {
			return false;
		}
	}).on('drop','.js-byphone', function(event) {
		event.preventDefault();
	}).on('click','.is-ttShow .js-ttClose', function(){
        var self = $(this);
        self.find('.js-mbtt').removeClass('is-ttShow');
        self.parent('.tooltiptext').parent('.is-ttShow').removeClass('is-ttShow');
        setTimeout(function(){
            if($('.js-mbtt.is-ttShow').length < 1){
                $('body').removeClass('is-mbttShow');
            }
        }, 1000);
    })
	// .delegate(".submit", "click", function (e) {
	// 	getFormValues(this);
	// 	e.preventDefault();
	// })
	;

	$(document).on("focus", ".js-input-check", function (e) {
        $(this).parent().addClass('is--focus');
    }).on("blur", ".js-input-check", function (e) {
        $(this).parent().removeClass('is--focus');
    });
}

function doOnLoad() {
	// OnLoad Functions
	headerFixed();
	ChangeToSvg();
	activeLink();
    initEqualHeight();
	checkviewport('.js-viewport');
	initLazyLoad('[data-src]');
	initIntlInput('.js-byphone');
    initSameOnWhatsapp();
    checkFieldval($('.js-input-check'));
	$('.js-loaderscreen').fadeOut();
	initHtmlAppender('.js-reanderhtml');
}

function doOnResize() {
	// OnResize Functions
	winWidth = $(window).width(), winHeight = $(window).height();
	initLazyLoad('[data-src]');
	initEqualHeight();
	targetScroll();
	initMenuActive('.js-menu');
	ChangeToSvg();
	showMobileTootip();
}

function doOnScroll() {
	// OnScroll Functions
	headerFixed();
	checkviewport('.js-viewport');
	initLazyLoad('[data-src]');
	initMenuActive('.js-menu');
	initHtmlAppender('.js-reanderhtml');
}

function showMobileTootip(){
	if($(window).width() <= 991){
		$('body').on('click','.js-mbtt:not(.is-ttShow)', function(){
			var $this = $(this);
			$this.addClass('is-ttShow');
			$('body').addClass('is-mbttShow');
		});	
	}
}

function hideMobileTootip(){
    $('.js-mbtt').removeClass('is-ttShow');
    $('body').removeClass('is-mbttShow');
}

function ChangeToSvg() {
	jQuery('img.js-tosvg').each(function () {
		var $img = jQuery(this);
		var imgID = $img.attr('id');
		var imgClass = $img.attr('class');
		var imgURL = $img.attr('src');
		jQuery.get(imgURL, function (data) {
			var $svg = jQuery(data).find('svg');
			if (typeof imgID !== 'undefined') {
				$svg = $svg.attr('id', imgID);
			}
			if (typeof imgClass !== 'undefined') {
				$svg = $svg.attr('class', imgClass + ' replaced-svg');
			}
			$svg = $svg.removeAttr('xmlns:a');
			if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
				$svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'));
			}
			$img.replaceWith($svg);
		}, 'xml');
	});
}

function sideMenuOpen() {
	$('.js-menubtn').addClass('is--active');
	$('.navigation').not('.is--open').addClass('is--open');
	$('body').addClass('is--menu');
}

function sideMenuClose() {
	$('.js-menubtn').removeClass('is--active');
	$('.navigation.is--open').removeClass('is--open');
	$('body').removeClass('is--menu');
}

function tabsInit() {
    $('.js-tab-link').click(function(e) {
        e.preventDefault();
        var $this = $(this);
        var targetId = $this.attr('data-tab-id');
        var tabsName = $this.attr('data-tab-name');
        $('[data-tab-name="' + tabsName + '"]').removeClass('is--active');
        // $this.addClass('is-active');
        $('[data-tab-id="'+targetId+'"]').addClass('is--active');
        $('.tab-'+targetId).addClass('is--active');
    });
}

function acordianInit() {
    $('body').on('click','.js-accor-link:not(.is-active)',function(e) {
        e.preventDefault();
        var $this = $(this);
        var targetId = $this.attr('data-accor-id');
        var accorsName = $this.attr('data-accor-name');
        $('[data-accor-name="' + accorsName + '"]').removeClass('is-active');
        $('[data-accor-name="' + accorsName + '"]').parents('.accor-row').removeClass('open-acordian');
        $this.addClass('is-active');
        $this.parents('.accor-row').addClass('open-acordian');
        $this.parents('.accor-row').next('.accor-'+targetId).addClass('is-active');
    }).on('click','.js-accor-link.is-active',function(e) {
        e.preventDefault();
        var $this = $(this);
        var targetId = $this.attr('data-accor-id');
        $this.removeClass('is-active');
        $this.parents('.accor-row').removeClass('open-acordian');
        $this.parents('.accor-row').next('.accor-'+targetId).removeClass('is-active');
    });
}

function initCarousel(target, stshow, stscroll, centerstatus, dotstatus) {
	var $target = $(target).not('.slick-initialized');
	$target.each(function (i, e) {
		var $e = $(e);
		var itemDesktop = $e.data('item-desktop');
		var itemIpadPro = $e.data('item-ipad-pro');
		var itemTablet = $e.data('item-tablet');
		var itemMobile = $e.data('item-mobile');
		var sliderArrows = $e.parents('.carousel-sec').find('.js-sliderArrows');
		var sliderDots = $e.parents('.carousel-sec').find('.js-sliderDots');
		var sliderArrowLeft = $e.parents('.carousel-sec').find('.js-sliderArrows').data('arrow-left');
		var sliderArrowsRight = $e.parents('.carousel-sec').find('.js-sliderArrows').data('arrow-right');
		var bannerPrev = '<button class="slick-prev slick-arrow" aria-label="Previous" type="button"><i class="'+sliderArrowLeft+'"></i></button>';
		var bannerNext = '<button class="slick-next slick-arrow" aria-label="Next" type="button"><i class="'+sliderArrowsRight+'"></i></button>';
		$e.slick({
			infinite: true,
			slidesToShow: stshow,
			slidesToScroll: stscroll,
			appendArrows: sliderArrows,
			appendDots: sliderDots,
			prevArrow: bannerPrev,
            nextArrow: bannerNext,
			centerMode: centerstatus,
			centerPadding: '60px',
			dots: dotstatus,
			autoplay: false,
			autoplaySpeed: 1000,
			responsive: [{
				breakpoint: 1600,
				settings: {
					slidesToShow: itemDesktop
				}
			}, {
				breakpoint: 992,
				settings: {
					slidesToShow: itemIpadPro
				}
			}, {
				breakpoint: 768,
				settings: {
					slidesToShow: itemTablet
				}
			}, {
				breakpoint: 375,
				settings: {
					slidesToShow: itemMobile
					// arrows: false,
					// dots: true
				}
			}]
		});
	});
}

function headerFixed() {
    var scroll = $(window).scrollTop();
	var headerht = $('.header').outerHeight();
	if (scroll > headerht) {
		$('.js-fixed').addClass("sticky-header");
	} else {
		$('.js-fixed').removeClass("sticky-header");
	}
}

function targetScroll() {
    $('[data-scrollbtn]').on('click',function () {
		var t = $(this).data('scrollbtn'),
			o = $('[data-scrolltarget='+t+']'),
			oTop = 0;
		if(winWidth < 992){
			oTop = o.attr('data-md-ofsettop');
		} else {
			oTop = o.attr('data-ofsettop');
		}
		if(oTop){
			$('html,body').stop().animate({
				scrollTop: o.offset().top - oTop
			}, 500, 'swing');
		} else {
			$('html,body').stop().animate({
				scrollTop: o.offset().top
			}, 500, 'swing');
		}
	});
}

function activeLink(){
	var currentUrl = window.location.pathname;
	$('[href="'+currentUrl+'"]').parent('li').siblings().removeClass('is--active');
	$('[href="'+currentUrl+'"]').parent('li').addClass('is--active');
}

$.fn.isInViewport = function() {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();
    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();
    return elementBottom > viewportTop && elementTop < viewportBottom;
};

function checkviewport(target){
	var $target = $(target);
	$target.each(function (i, ele) {
		var $ele = $(ele);
		if ($ele.isInViewport()){
			$ele.addClass('isOnScreen');
		} else {
			$ele.removeClass('isOnScreen');
		}
	});
}

function getCopyYear() {
    var copyright = new Date().getFullYear();
    $(".copyrightyear").text(copyright);
}

function initLazyLoad(target){
	var $target = $(target);
	$target.each(function (i, e) {
		var $e = $(e);
		if ($e.isInViewport()){
			var datasrc = $e.data('src');
			$e.attr('src', datasrc);
			$e.removeAttr('data-src');
		}
	});
}

function initEqualHeight(){
    $('.js-eqRow').each(function(){  
        var highestBox = 0;
        $('.js-eqColumn', this).each(function(){
            var htmlString = $( this ).html();
            $(this).height('auto');
            if($(this).height() > highestBox) 
                highestBox = $(this).height(); 
        });  
        $('.js-eqColumn',this).height(highestBox);
    }); 
}

function initToggleClass(targrt,tClass,tParent){
    $('body').on('click',targrt,function(){
        var self = $(this);
		self.parents(tParent).toggleClass(tClass);
        self.toggleClass(tClass);
    });
}

function initMenuActive(target) {
	var sections = $('[data-scrolltarget]'),
		nav = $(target),
		nav_height = nav.outerHeight(),
		sec_pos = $(this).scrollTop(),
		oTop = 0,
		top,
		bottom,
		winWidth = $(window).width();
	sections.each(function(i,e) {
		var $e = $(e);
		if(winWidth < 992){
			oTop = $e.attr('data-md-ofsettop');
		} else {
			oTop = $e.attr('data-ofsettop');
		}
		if(oTop){
			top = $e.offset().top - (nav_height + parseInt(oTop));
		} else {
			top = $e.offset().top - nav_height;
		}
		bottom = top + $e.outerHeight();
		if (sec_pos >= top && sec_pos <= bottom) {
			nav.find('li').removeClass('is--active');
			sections.removeClass('is--oTop');
			$e.addClass('is--oTop');
			nav.find('[data-scrollbtn="'+$e.attr('data-scrolltarget')+'"]').parent('li').addClass('is--active');
		}
	});
}

function openPopup(target) {
    var popnam = target;
    //popCls = popnam.substring(1, popnam.length);
    popCls = popnam;
    $('body').addClass(popCls);
    $('html').addClass('popup-is-active');
    $('.' + target).show();
    $('.' + target).closest('.c-popup').show();
    setTimeout(function() {
        $('.popup.' + target).addClass('active');
        $('.' + target).closest('.c-popup').addClass('popup--open');
    }, 10);
}

function closePopup() {
    $('body').removeClass(popCls);
    if ($('.c-popup .active').length) {
        // Close Popup
        $('.c-popup .active').removeClass('active');
        $('.c-popup').removeClass('popup--open');
        setTimeout(function() {
            $('.c-popup .popup').hide();
            $('.c-popup').hide();
            $('html').removeClass('popup-is-active');
        }, 310);
    }
    $('.cnt-form').find('input').val('');
}

function closeSelfPopup(target) {
    var self = $(target.currentTarget); 
    $('body').removeClass(popCls);
    self.parent('.popup').removeClass('active');
    setTimeout(function() {
        self.parent('.popup').hide();
        if($('.popup').hasClass('active') == false){
            $('.c-popup').removeClass('popup--open');
            $('.c-popup').hide();
            $('html').removeClass('popup-is-active');
        }
    },310);
}

function bindPopupEve() {
    $('.js-popup-link').click(function(e) {
        e.preventDefault();
        if ($(this).data('popup')) {
            var target = $(this).data('popup');
        } else {
            var target = $(this).attr('href');
        }
        openPopup(target);
    });
    // Popup Close
    $('.js-close-popup').click(function(e) {
        e.preventDefault();
        closePopup();
    });
    $('.js-close-selfpopup').click(function(e) {
        e.preventDefault();
        closeSelfPopup(e);
    });
}

function checkFieldval(element) {
    $(element).each(function(i, index) {
        inputValue = $(index).val().length;
        if(inputValue > 0) {
            $(index).parent().addClass('is--used');
        } else {
            $(index).parent().removeClass('is--used');
        }
    });
    $(element).keyup(function(i, index){
        var getTar = $(i.currentTarget);
        inputValue = $(getTar).val().length;
        if(inputValue > 0) {
            $(getTar).parent().addClass('is--used');
        } else {
            $(getTar).parent().removeClass('is--used');
        }
    });
}

// function initIntlInput(target) {
//     if ($(target).length > 0) {
//         var $target = $(target);
//         $target.each(function(i, e) {
//             var $e = $(e);
//             var dcountry = $e.data('defaultcountry');
//             $e.intlTelInput({
//                 geoIpLookup: function(callback) {
//                     var referrer;
//                     $.ajax({
//                         url: 'https://crmalert.gocrmlive.com/api/GeoLocations/FindGeoLocation',
//                         type: 'GET',
//                         data: {}, // Additional parameters here
//                         dataType: 'json',
//                         aync: false,
//                         success: function(data) {
//                             referrer = document.referrer;
//                             JsonLocation = JSON.stringify(data);
//                             createCookie('ipcountrydata', JSON.stringify(data), 0.5);
//                             if (data.country_code) {
//                                 callback(data.country_code);
//                             }
//                             console.log(JsonLocation);
//                             sendVisitor(data.ip,data.country_code,JsonLocation);
//                         },
//                         error: function(err) {
//                             console.log(err);
//                         }
//                     });
//                 },
//                 //dropdownContainer: $('body'),
//                 initialCountry: 'auto',
//                 nationalMode: true,
//                 separateDialCode: true,
//                 autoPlaceholder: 'polite',
//                 utilsScript: "/assets/js/utils.js",
//             });
//             setTimeout(function() {
//                 var changeCountry = $e.intlTelInput("getSelectedCountryData");
//                 $e.parents('.iti-group').find('.countryname').val(changeCountry.name);
//                 $e.parents('.iti-group').find('.countrycode').val(changeCountry.iso2);
//                 $e.parents('.iti-group').find('.dialcode').val(changeCountry.dialCode);
//             }, 1000);
//         });
//         $target.on('countrychange', function(e, countryData) {
//             var $e = $(e.currentTarget);
//             var changeCountry = $e.intlTelInput("getSelectedCountryData");
//             $e.parents('.iti-group').find('.countryname').val(changeCountry.name);
//             $e.parents('.iti-group').find('.countrycode').val(changeCountry.iso2);
//             $e.parents('.iti-group').find('.dialcode').val(changeCountry.dialCode);
//         });
//     }
// }

// function initSameOnWhatsapp(){
// 	$('.js-sameonwhatsapp').on('change', function () {
//         var self = $(this);
// 		self.each(function(i, e){
// 			var $e = $(e);
// 			var selform = $e.parents('form');
// 			var intlgroupnotwhatsapp = selform.find('.iti-group:not(.whatsappfield)');
// 			var intlgroupwithwhatsapp = selform.find('.iti-group.whatsappfield');
// 			var intl01 = intlgroupnotwhatsapp.find('.js-byphone');
// 			var intl02 = intlgroupwithwhatsapp.find('.js-byphone');
// 			var intl01get = intl01.intlTelInput("getSelectedCountryData");
// 			if ($e.is(":checked") == true) {
// 				intl02get = intl02.intlTelInput("getSelectedCountryData");
// 				oldnumber = intlgroupwithwhatsapp.find('.form-control').val();
// 				oldcountryname = intlgroupwithwhatsapp.find('.countryname').val();
// 				oldcountrycode = intlgroupwithwhatsapp.find('.countrycode').val();
// 				olddialcode = intlgroupwithwhatsapp.find('.dialcode').val();
// 				intl02.intlTelInput("setCountry", intl01get.iso2);
// 				intlgroupwithwhatsapp.find('.form-control').val(intl01.val());
// 				intlgroupwithwhatsapp.find('.countryname').val(intl01get.name.replace(/ .*/,''));
// 				intlgroupwithwhatsapp.find('.countrycode').val(intl01get.iso2);
// 				intlgroupwithwhatsapp.find('.dialcode').val(intl01get.dialCode);
// 			} else if ($e.is(":not(:checked)")) {
// 				intl02.intlTelInput("setCountry", intl02get.iso2);
// 				intlgroupwithwhatsapp.find('.form-control').val(oldnumber);
// 				intlgroupwithwhatsapp.find('.countryname').val(oldcountryname);
// 				intlgroupwithwhatsapp.find('.countrycode').val(oldcountrycode);
// 				intlgroupwithwhatsapp.find('.dialcode').val(olddialcode);
// 			}
// 		});
//     });
// }

// function getFormValues(target) {
// 	//debugger;
// 	var formdata = '';
// 	var self = $(target);
// 	var gtform = self.parents('form');
// 	var isFormValid = true;
// 	self.css('pointer-events', 'none');
// 	gtform.find('.js-valGet[required]').each(function (i, e) {
// 		$e = $(e);
// 		formdata = formdata + '\n' + $e.val();
// 		if ($.trim($e.val()).length == 0) {
// 			$e.addClass('error-field');
// 			isFormValid = false;
// 			$e.focus();
// 			self.css('pointer-events', 'auto');
// 		} else {
// 			$e.removeClass('error-field');
// 		}
// 	});
// 	if (isEmail(gtform.find('.em').val())) {
// 		gtform.find('.js-emailvalid').removeClass('error-field');
// 	} else {
// 		gtform.find('.js-emailvalid').addClass('error-field');
// 		isFormValid = false;
// 		$e.focus();
// 		self.css('pointer-events', 'auto');
// 	}
// 	if (isPhone(gtform.find('.pn').val())) {
// 		gtform.find('.js-numbervalid').removeClass('error-field');
// 	} else {
// 		gtform.find('.js-numbervalid').addClass('error-field');
// 		isFormValid = false;
// 		$e.focus();
// 		self.css('pointer-events', 'auto');
// 	}
// 	if (isFormValid == true) {
// 		var cName = gtform.find('.cn').val();
// 		var cEmail = gtform.find('.em').val();
// 		var cPhone = gtform.find('.pn').val();
// 		var cTryingRegister = gtform.find('.tr').val();
// 		var cCountryName = gtform.find('.countryname').val();
// 		var CountryISO2 = gtform.find('.countrycode').val();
// 		var cPhoneCode = gtform.find('.dialcode').val();
// 		sendEmail(cName, cEmail, CountryISO2, cCountryName, cPhoneCode, cPhone, cTryingRegister);
// 	}
// }

// function sendEmail(customerName, customerEmailaddress, customerCountryCode, customerCountryName, customerPhoneCode, customerPhoneNumber, customerResiger) {
// 	// debugger
// 	var data = {};
// 	data.name = customerName;
// 	data.emailAddress = customerEmailaddress;
// 	data.countryCode = customerCountryCode;
// 	data.countryName = customerCountryName;
// 	data.dialCode = customerPhoneCode;
// 	data.phoneNumber = customerPhoneNumber;
// 	data.WhatToRegister = customerResiger;
// 	data.referrerUrl = document.referrer;
// 	data.fingerPrintId = fingerprint();
// 	data.LocationJson = JsonLocation;
// 	data.Landing_Page = document.URL;

// 	$.ajax({
// 		async: true,
// 		type: 'POST',
// 		data: data,
// 		// url: baseUrl + '/api/ClientSignUp',
// 		url: 'https://area.orangewebsitedesigns.com/v1/customerRoute/ClientSignUpV2',
// 		success: function (response) {
// 			if (response.IsSuccess == true) {
// 				//$('.submit').prop("disabled", true);
// 				//moveToThanks();
// 				window.open(response.Data, '_self')
// 			} else {
// 				$('.submit').css('pointer-events', 'auto');
// 				alert(response.Message);
// 			}
// 		},
// 		failure: function (response) {
// 			$('.submit').css('pointer-events', 'auto');
// 			console.log(response);
// 		},
// 		error: function (response) {
// 			$('.submit').css('pointer-events', 'auto');
// 			console.log(response);
// 		},
// 	});
// }

// function isEmail(email) {
// 	return /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i.test(email);
// }

// function isPhone(phone) {
// 	return /[0-9 -()+]+$/i.test(phone);
// }

// function sendVisitor(IP, iso2, JsonLocation) {
//     var data = {};
//     data.FingerPrintId = fingerprint();
//     data.IP = IP;
//     data.iso2 = iso2;
//     data.UserAgent = fingerprint_useragent;
//     data.LocationJson = JsonLocation;
//     data.ReferrerUrl = document.referrer;
//     data.LandingUrl = document.URL;

//     $.ajax({
//         async: true,
//         type: "POST",
//         data: data,
//         // url: baseUrl + "/api/Visitor",
//         url: 'https://area.orangewebsitedesigns.com/v1/customerRoute/InsertVisitor',
//         success: function(response) {
//             if (response.response_data == true) {
//                 var email = response.email;
//             } else {
//                 console.log(response);
//             }
//         },
//         failure: function(response) {
//             console.log(response);
//         },
//         error: function(response) {
//             console.log(response);
//         }
//     });
// }

// function createCookie(j, i, h) {
// 	if (h) {
// 		var f = new Date();
// 		f.setTime(f.getTime() + (h * 24 * 60 * 60 * 1000));
// 		var g = "; expires=" + f.toGMTString()
// 	} else {
// 		var g = ""
// 	}
// 	document.cookie = j + "=" + i + g + "; path=/"
// }

// function readCookie(c) {
// 	var i = c + "=";
// 	var g = document.cookie.split(";");
// 	for (var j = 0; j < g.length; j++) {
// 		var h = g[j];
// 		while (h.charAt(0) == " ") {
// 			h = h.substring(1, h.length)
// 		}
// 		if (h.indexOf(i) == 0) {
// 			return h.substring(i.length, h.length)
// 		}
// 	}
// 	return null
// }

// function getCookie(NameOfCookie) {
// 	if (document.cookie.length > 0) {
// 		begin = document.cookie.indexOf(NameOfCookie + "=");
// 		if (begin != -1) { // Note: != means "is not equal to"
// 			begin += NameOfCookie.length + 1;
// 			end = document.cookie.indexOf(";", begin);
// 			if (end == -1) end = document.cookie.length;
// 			return unescape(document.cookie.substring(begin, end));
// 		}
// 	}
// 	return null;
// }

////// fancybox
$('[data-fancybox="swf-file"]').fancybox({
	iframe : {
		css : {
			width : '336px', 
			height : '280px'
		}
	}
});

$('[data-fancybox="video-file"]').fancybox({
	iframe : {
		css : {
			width : '580px',
			height : '340px'
		}
	}
});	
////// fancybox end




function initHtmlReader(){
	var readHTMLFile = function(url){
		var toReturn;
		$.ajax({
			url: url,
			async: false
		}).done(function(data){
			toReturn = data;
		});
		return toReturn;
	};
	$.appSection = function(url){
		fileContent = readHTMLFile(url);
		initAppendFile(fileContent, url);
	};
}

function initHtmlAppender(target){
	var $target = $(target);
	$target.each(function (i, ele){
		var $ele = $(ele);
		if ($ele.isInViewport()){
			var htmlreander = $ele.attr('data-htmlreander');
			if(htmlreander != ''){
				$.appSection(htmlreander);
				$ele.attr('data-htmlreander','');
			}
		}
	});
}

function initAppendFile(content, target){
	$('[data-htmlreander="'+target+'"]').append(content);
	$('[data-htmlreander="'+target+'"] > div,[data-htmlreander="'+target+'"] > section').unwrap();
	// $('[data-htmlreander="'+target+'"]').removeClass('minht-400p');
	initCarousel('.js-carousel', 1, 1, false, true);
	bindPopupEve();
	tabsInit();
}

