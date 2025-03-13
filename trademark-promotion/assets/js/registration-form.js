$(document).ready(function () {
  //Initialize tooltips
  $(".nav-tabs > li a[title]").tooltip();

  //Wizard
  $('a[data-toggle="tab"]').on("show.bs.tab", function (e) {
    var $target = $(e.target);

    if ($target.parent().hasClass("disabled")) {
      return false;
    }
  });

  $(".next-step").click(function (e) {
    var $active = $(".wizard .nav-tabs li.active");
    $active.next().removeClass("disabled");
    nextTab($active);
  });
  $(".prev-step").click(function (e) {
    var $active = $(".wizard .nav-tabs li.active");
    prevTab($active);
  });
});

function nextTab(elem) {
  $(elem).next().find('a[data-toggle="tab"]').click();
}

function prevTab(elem) {
  $(elem).prev().find('a[data-toggle="tab"]').click();
}

// Countries Select Script
new MultiSelectTag("countries"); // id

// Form Responsive
function checkAndAdjustOverflow() {
  if ($(window).width() <= 767) {
    if ($(".tab-pane.active#step4").length > 0) {
      $("body, html").css("overflow", "visible");
    } else {
      $("body, html").css("overflow", "hidden");
    }
  }
}

// Check on window resize
$(window).resize(function () {
  checkAndAdjustOverflow();
});

// Use MutationObserver to detect changes in the DOM
const observer = new MutationObserver((mutations) => {
  mutations.forEach((mutation) => {
    if (mutation.attributeName === "class") {
      checkAndAdjustOverflow();
    }
  });
});

// Observe changes to elements with class 'tab-pane'
const config = { attributes: true, childList: false, subtree: false };

$(document).ready(function () {
  $(".tab-pane").each(function () {
    observer.observe(this, config);
  });

  // Initial check on page load
  checkAndAdjustOverflow();
});

$(document).ready(function () {
  $(".mt-3.enter-website-optional").css("display", "block");
});

$(document).ready(function () {
  $(".mt-3.enter-website-optional").show();
});

