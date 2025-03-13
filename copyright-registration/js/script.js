function lead(id) {
  $("#loaderIcon").show();
  $("#loaderIcon1").show();
  $("#loaderIcon2").show();
  $("#loaderIcon3").show();
  let FormData = $("#" + id).serializeArray();
  console.log(FormData);
  grecaptcha.ready(function () {
    grecaptcha
      .execute("6LfLgMMhAAAAAPTfbvvJjuSgmIFFqugSPR3kTJUC", { action: "submit" })
      .then(function (token) {
        FormData.push({ name: "token", value: token });

        // For local server
        // const FormDataPost = $.post("service/lead.php", FormData);

        // For live server
         const FormDataPost = $.post(window.location.origin+"/copyright-registration/service/lead.php",FormData);
        FormDataPost.done(function (response) {
          console.log(response);
          if (response.status === "false") {
            $("#loaderIcon").hide();
            $("#loaderIcon1").hide();
            $("#loaderIcon2").hide();
            $("#loaderIcon3").hide();
            $(".modal").modal("hide");
          }
          if (response.status === "true") {
            $("#loaderIcon").hide();
            $("#loaderIcon1").hide();
            $("#loaderIcon2").hide();
            $("#loaderIcon3").hide();
            $(".modal").modal("hide");
            setTimeout(function () {
              // For live server
              window.location.href = window.location.origin+"/copyright-registration/query/brief.php?package="+$('#'+id).find('input[name="package"]').val()+'&id='+response.data.userid;

              // For local server
              // window.location.href =
              //   "query/brief.php?package=" +
              //   $("#" + id)
              //     .find('input[name="package"]')
              //     .val() +
              //   "&id=" +
              //   response.data.userid;
            }, 300);
          }
        });
        FormDataPost.fail(function (xhr, textStatus, errorThrown) {
          console.log(xhr.responseText);
          $("#loaderIcon").hide();
          $("#loaderIcon1").hide();
          $("#loaderIcon2").hide();
          $("#loaderIcon3").hide();
          $(".modal").modal("hide");
        });
      });
  });
}

function priceChange(pack, price) {
  $("#popupLead").find('input[name="package"]').val(pack);
  $("#popupLead").find('input[name="price"]').val(price);
  $("#popupLead1").find('input[name="package"]').val(pack);
  $("#popupLead1").find('input[name="price"]').val(price);
  // $("#bannerForm").find('input[name="package"]').val(pack);
  // $("#bannerForm").find('input[name="price"]').val(price);
  // $("#bottomForm").find('input[name="package"]').val(pack);
  // $("#bottomForm").find('input[name="price"]').val(price);
}

function emailValid(string) {
  let regex = new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
  return regex.test(string);
}

function chat() {
  $zopim.livechat.window.show();
}

// Forms Validation

function SpaceBlockBannerForm() {
  var inputTextBoxBannerForm = document.getElementById(
    "inputTextBoxBannerForm"
  );
  if (
    inputTextBoxBannerForm.selectionStart === 0 &&
    window.event.code === "Space"
  ) {
    window.event.preventDefault();
  }
}

function SpaceBlockFooterForm() {
  var inputTextBoxFooterForm = document.getElementById(
    "inputTextBoxFooterForm"
  );
  if (
    inputTextBoxFooterForm.selectionStart === 0 &&
    window.event.code === "Space"
  ) {
    window.event.preventDefault();
  }
}

function SpaceBlockFloatingForm() {
  var inputTextBoxFloatingForm = document.getElementById(
    "inputTextBoxFloatingForm"
  );
  if (
    inputTextBoxFloatingForm.selectionStart === 0 &&
    window.event.code === "Space"
  ) {
    window.event.preventDefault();
  }
}

function SpaceBlockModalForm() {
  var inputTextBoxModalForm = document.getElementById("inputTextBoxModalForm");
  if (
    inputTextBoxModalForm.selectionStart === 0 &&
    window.event.code === "Space"
  ) {
    window.event.preventDefault();
  }
}
