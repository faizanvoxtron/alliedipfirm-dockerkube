$(document).ready(function () {
  // $(".various").click(function () {
  //   var leadprice = $(this).attr("name");

  //   $(".popupform .leadprice").val(leadprice);
  //   var zz = $(".popupform .pop_price").text("$" + leadprice);

  //   $(".popupform .pp_pr").text(leadprice);
  // });

  $(".footer-vld-frm").validate();

  $(".banner-form-validate").validate();

  //owlcarousel
  $(".owl-testimonial").owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    margin: 30,
    responsiveClass: true,
    autoplay: true,
    autoplayTimeout: 8000,
    autoplaySpeed: 800,
    responsive: {
      0: {
        items: 3,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 3,
      },
      360: {
        items: 1,
      },
    },
  });
  $(".owl-logo").owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    margin: 20,
    responsiveClass: true,
    autoplay: true,
    autoplayTimeout: 8000,
    autoplaySpeed: 800,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      },
      360: {
        items: 1,
      },
    },
  });
});

function setButtonURL() {
  $zopim.livechat.window.toggle();
}

$(".chat").click(function () {
  $zopim.livechat.window.toggle();
});
