
var api_base_url = "https://dashboard.alliedipfirm.com/dynamic_form/api/"
    var form = $('#form-upload')




$(document).on('click', '#post_brief', function(e) {
            e.preventDefault();
            submitBrief();
        })
    })

    async function getApiToken() {
        let endpoint = "token";

        let response = await $.get(api_base_url + endpoint);
        return JSON.parse(response);
    }

    async function submitBrief() {
        let selected_package = $('input[name="package_price"]:checked');

        let package_name = selected_package.data('package_name');
        let package_price = selected_package.val();
        // let api_token = await getApiToken();
        var formData = new FormData(form[0]);
        formData.append("package_name", package_name);
        await $.ajax({
            url: api_base_url + "post/1/", // here 1 is form ID which represents type of form
            cache: false,
            type: "post",
            dataType: 'json',
            contentType: false,
            processData: false,
            data: formData,
            success: function(response) {
                if (response.status == true) {
                    // let payment_page_url = "../checkout.php?lead_id=" + <?= $_GET['lead_id'] ?> + "&package=<?= urlencode($_GET['package']) ?>" + "&price=<?= urlencode($_GET['price']) ?>";
                    let payment_page_url = "../checkout.php?lead_id=" + <?= $_GET['lead_id'] ?> + "&package=" + package_name + "&price=" + package_price;
                    window.location = payment_page_url;
                } else {
                    alert(response.message);
                }
            }
        });
    }