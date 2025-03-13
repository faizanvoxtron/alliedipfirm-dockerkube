// Internationl Phone Field List With Validation For Banner Form
document.addEventListener("DOMContentLoaded", function () {
  const input = document.querySelector("#phone");
  const button = document.querySelector("#banner-submit");
  const errorMsg = document.querySelector("#error-msg");
  const validMsg = document.querySelector("#valid-msg");
  const form = document.querySelector("#bannerForm"); // Assuming the form has an ID of 'yourFormId'

  const iti = window.intlTelInput(input, {
    initialCountry: "auto",
    geoIpLookup: (callback) => {
      fetch("https://ipapi.co/json")
        .then((res) => res.json())
        .then((data) => callback(data.country_code))
        .catch(() => callback("us"));
    },
    strictMode: true,
    separateDialCode: true,
    fixDropdownWidth: true,
    validationNumberType: "MOBILE",
    nationalMode: true,
    hiddenInput: () => ({ phone: "phonenumber", country: "country_code" }),
  });

  const errorMap = [
    "phone number is not valid.",
    "phone number is not valid.",
    "phone number is not valid.",
    "phone number is not valid.",
    "phone number is not valid.",
  ];

  const reset = () => {
    input.classList.remove("error");
    errorMsg.innerHTML = "";
    errorMsg.classList.add("hide");
    validMsg.classList.add("hide");
  };

  const showError = (msg) => {
    input.classList.add("error");
    errorMsg.innerHTML = msg;
    errorMsg.classList.remove("hide");
  };

  form.addEventListener("submit", (event) => {
    reset();
    let valid = true;

    if (!input.value.trim()) {
      showError("please enter phone number.");
      valid = false;
    } else if (iti.isValidNumber()) {
      // validMsg.classList.remove("hide");
    } else {
      const errorCode = iti.getValidationError();
      const msg = errorMap[errorCode] || "phone number is not valid.";
      showError(msg);
      valid = false;
    }

    if (!valid) {
      event.preventDefault();
    }
  });

  input.addEventListener("change", reset);
  input.addEventListener("keyup", reset);
});

// Internationl Phone Field List With Validation For Footer Form
document.addEventListener("DOMContentLoaded", function () {
  const input = document.querySelector("#phone-footer");
  const button = document.querySelector("#footer-submit");
  const errorMsg = document.querySelector("#error-msg-footer");
  const validMsg = document.querySelector("#valid-msg-footer");
  const form = document.querySelector("#footerForm"); // Assuming the form has an ID of 'yourFormId'

  const iti = window.intlTelInput(input, {
    initialCountry: "auto",
    geoIpLookup: (callback) => {
      fetch("https://ipapi.co/json")
        .then((res) => res.json())
        .then((data) => callback(data.country_code))
        .catch(() => callback("us"));
    },
    strictMode: true,
    separateDialCode: true,
    fixDropdownWidth: true,
    validationNumberType: "MOBILE",
    nationalMode: true,
    hiddenInput: () => ({ phone: "phonenumber", country: "country_code" }),
  });

  const errorMap = [
    "phone number is not valid.",
    "phone number is not valid.",
    "phone number is not valid.",
    "phone number is not valid.",
    "phone number is not valid.",
  ];

  const reset = () => {
    input.classList.remove("error");
    errorMsg.innerHTML = "";
    errorMsg.classList.add("hide");
    validMsg.classList.add("hide");
  };

  const showError = (msg) => {
    input.classList.add("error");
    errorMsg.innerHTML = msg;
    errorMsg.classList.remove("hide");
  };

  form.addEventListener("submit", (event) => {
    reset();
    let valid = true;

    if (!input.value.trim()) {
      showError("please enter phone number.");
      valid = false;
    } else if (iti.isValidNumber()) {
      // validMsg.classList.remove("hide");
    } else {
      const errorCode = iti.getValidationError();
      const msg = errorMap[errorCode] || "phone number is not valid.";
      showError(msg);
      valid = false;
    }

    if (!valid) {
      event.preventDefault();
    }
  });

  input.addEventListener("change", reset);
  input.addEventListener("keyup", reset);
});

// Internationl Phone Field List With Validation For Popup Form
document.addEventListener("DOMContentLoaded", function () {
  const input = document.querySelector("#popup-footer");
  const button = document.querySelector("#footer-submit");
  const errorMsg = document.querySelector("#error-msg-popup");
  const validMsg = document.querySelector("#valid-msg-popup");
  const form = document.querySelector("#popupForm"); // Assuming the form has an ID of 'yourFormId'

  const iti = window.intlTelInput(input, {
    initialCountry: "auto",
    geoIpLookup: (callback) => {
      fetch("https://ipapi.co/json")
        .then((res) => res.json())
        .then((data) => callback(data.country_code))
        .catch(() => callback("us"));
    },
    strictMode: true,
    separateDialCode: true,
    fixDropdownWidth: true,
    validationNumberType: "MOBILE",
    nationalMode: true,
    hiddenInput: () => ({ phone: "phonenumber", country: "country_code" }),
  });

  const errorMap = [
    "phone number is not valid.",
    "phone number is not valid.",
    "phone number is not valid.",
    "phone number is not valid.",
    "phone number is not valid.",
  ];

  const reset = () => {
    input.classList.remove("error");
    errorMsg.innerHTML = "";
    errorMsg.classList.add("hide");
    validMsg.classList.add("hide");
  };

  const showError = (msg) => {
    input.classList.add("error");
    errorMsg.innerHTML = msg;
    errorMsg.classList.remove("hide");
  };

  form.addEventListener("submit", (event) => {
    reset();
    let valid = true;

    if (!input.value.trim()) {
      showError("please enter phone number.");
      valid = false;
    } else if (iti.isValidNumber()) {
      // validMsg.classList.remove("hide");
    } else {
      const errorCode = iti.getValidationError();
      const msg = errorMap[errorCode] || "phone number is not valid.";
      showError(msg);
      valid = false;
    }

    if (!valid) {
      event.preventDefault();
    }
  });

  input.addEventListener("change", reset);
  input.addEventListener("keyup", reset);
});

// Time Circles JS
$(function () {
  $("#CountDownTimer").TimeCircles({
    time: { Days: { show: false }, Hours: { show: true } },
  });
});

// Portfolio Carousel JS
$(document).ready(function () {
  $("#portfolio-carousel").owlCarousel({
    loop: true,
    margin: 25,
    dots: false,
    nav: false,
    autoplay: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 4,
      },
    },
  });
  $(".owl-prev").html('<i class="fa-solid fa-arrow-left"></i>');
  $(".owl-next").html('<i class="fa-solid fa-arrow-right"></i>');
});

// Reviews Carousel JS
$(document).ready(function () {
  $("#reviews-carousel").owlCarousel({
    loop: true,
    margin: 0,
    dots: true,
    responsiveClass: true,

    responsive: {
      0: {
        items: 1,
        nav: false,
      },
      600: {
        items: 1,
        nav: false,
      },
      1000: {
        items: 1,
        nav: false,
        loop: false,
      },
    },
  });
});
