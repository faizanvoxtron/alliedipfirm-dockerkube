<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trademark Registration Form | Allied IP Firm</title>
    <link href="assets/images/favicon.webp" rel="icon">

    <!-- Bootstrap 3.3 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Multi Select Countries CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/css/multi-select-tag.css">

    <!-- Font Awesome 4.7 CSS -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Sctiptop CSS -->
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

    <!-- Registration Form Global CSS -->
    <link rel="stylesheet" href="assets/css/global.css">

    <!-- Registration Form Custom CSS -->
    <link rel="stylesheet" href="assets/css/registration-form.css">

    <!-- Dropify CSS -->
    <link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">

    <!--Google Font Lexand Deca-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="row">
            <section>
                <div class="wizard">
                    <div class="wizard-inner">
                        <div class="connecting-line"></div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="What to Trademark?">
                                    <span class="round-tab">
                                        <i class="glyphicon glyphicon-folder-open"></i>
                                    </span>
                                </a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Describe Usage">
                                    <span class="round-tab">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </span>
                                </a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Select Countries">
                                    <span class="round-tab">
                                        <i class="glyphicon glyphicon-globe"></i>
                                    </span>
                                </a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step4" data-toggle="tab" aria-controls="step3" role="tab" title="Select Package">
                                    <span class="round-tab">
                                        <i class="glyphicon glyphicon-usd"></i>
                                    </span>
                                </a>
                            </li>

                            <li role="presentation" class="disabled">
                                <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Checkout">
                                    <span class="round-tab">
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <form method="post" action="#" id="form-upload" enctype="multipart/form-data">
                        <input type="hidden" name="lead_id" value="<?= $_GET['lead_id'] ?>">
                        <!--<input type="hidden" name="hasham_zaman" value="Muhammad Hamza">-->
                        <input type="hidden" name="source" value="https://alliedipfirm.com/trademark-promotion">
                        <div class="tab-content">
                            <div class="tab-pane active" role="tabpanel" id="step1">
                                <div class="p-5 md:pt-8 md:p-10 flex flex-col gap-y-8 rounded-3xl w-full section-shadow bg-white">
                                    <div class="mt-3">
                                        <h1 class="font-semibold flex items-center gap-x-1 mb-3"><span class="text-tm-red-required">*</span>Select what you are trying to
                                            protect?</h1>
                                        <div class="grid md:grid-cols-2 gap-y-3 gap-x-5 items-center font-medium">
                                            <div>
                                                <div class="opacity-100 lg:h-[88px] overflow-y-auto undefined">
                                                    <div class="border-[1.5px] rounded-[15px] text-tm-blue border-tm-blue  bg-blue-50">
                                                        <label class="form-control items-center cursor-pointer pl-2 pt-2 pb-2 justify-between pr-4">
                                                            <div>
                                                                <div class="flex md:items-center md:justify-center gap-5 py-1 md:py-3 px-2">
                                                                    <div class="flex flex-col justify-between">
                                                                        <p class="font-bold">Name</p>
                                                                        <p class="text-xs">Business name identifying
                                                                            your brand</p>
                                                                    </div>
                                                                </div>
                                                            </div><input type="checkbox" name="trademark_name" value="yes" class="undefined  !ring-transparent h-5 w-5 !rounded-[6px] bg-white checked:bg-tm-blue checked:border-tm-blue focus:outline-none transition duration-200 bg-no-repeat bg-center bg-contain float-left cursor-pointer" data-gtm-form-interact-field-id="4">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="opacity-100 lg:h-[88px] overflow-y-auto undefined">
                                                    <div class="border-[1.5px] rounded-[15px] text-tm-blue border-tm-blue  bg-blue-50">
                                                        <label class="form-control items-center cursor-pointer pl-2 pt-2 pb-2 justify-between pr-4">
                                                            <div>
                                                                <div class="flex md:items-center md:justify-center gap-5 py-1 md:py-3 px-2">
                                                                    <div class="flex flex-col justify-between">
                                                                        <p class="font-bold">Logo</p>
                                                                        <p class="text-xs">Graphical design identifying
                                                                            your brand</p>
                                                                    </div>
                                                                </div>
                                                            </div><input type="checkbox" name="trademark_logo" value="yes" class="undefined  !ring-transparent h-5 w-5 !rounded-[6px] bg-white checked:bg-tm-blue checked:border-tm-blue focus:outline-none transition duration-200 bg-no-repeat bg-center bg-contain float-left cursor-pointer" data-gtm-form-interact-field-id="0">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class=" lg:h-[88px] overflow-y-auto undefined , text-321">
                                                    <div class="border-[1.5px] rounded-[15px]  text-tm-blue border-tm-blue  bg-blue-50">
                                                        <label class="form-control items-center cursor-pointer pl-2 pt-2 pb-2 justify-between pr-4">
                                                            <div>
                                                                <div class="flex md:items-center md:justify-center gap-5 py-1 md:py-3 px-2">
                                                                    <div class="flex flex-col justify-between">
                                                                        <p class="font-bold">Slogan</p>
                                                                        <p class="text-xs">Short phrase identifying your
                                                                            brand</p>
                                                                    </div>
                                                                </div>
                                                            </div><input type="checkbox" name="trademark_slogan" value="yes" class="undefined !ring-transparent h-5 w-5 !rounded-[6px] bg-white checked:bg-tm-blue checked:border-tm-blue focus:outline-none transition duration-200 bg-no-repeat bg-center bg-contain float-left cursor-pointer" data-gtm-form-interact-field-id="5">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div></div>
                                    </div>
                                    <div class="mt-3">
                                        <h1 class="font-semibold flex gap-x-1 mb-3"><span class="text-tm-red-required">*</span>Enter the name you want to protect:
                                        </h1>
                                        <div class="relative flex flex-col gap-y-1 justify-start flex-1">
                                            <h1 class="font-semibold flex items-start gap-x-1"></h1><input id="trademark_information.mark_name" type="text" class="w-full pl-3 p-1.5 md:p-4 md:pl-5 rounded-md md:rounded-base border bb protect" name="brand_name" placeholder="Enter your trademark's name" value="">
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <h1 class="text-center font-semibold flex gap-x-1 mb-3"><span class="text-tm-red-required">*</span>Upload the logo you want to
                                            trademark:</h1>
                                        <div>
                                            <div>
                                                <div id="imgId" class=" flex flex-col items-center justify-center mb-3 cursor-pointer">
                                                    <div role="presentation" tabindex="0" class="w-full">
                                                        <div class="bg-[#F9F9F9] border-[#D3D3D3] border rounded-xl px-5 pt-10 pb-10 flex flex-col items-center justify-center">
                                                            <h1>Upload logo or drag &amp; drop</h1>
                                                            <div class='preview'>
                                                            </div>
                                                            <input type="file" name="file" id="demo2" class="dropify protect" data-allowed-file-extensions="pdf png jpg jpeg webp" />
                                                        </div>
                                                        <p style="text-align: center;" class="brandlogo"></p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <h1 class="font-semibold flex gap-x-1 mb-3"><span class="text-tm-red-required">*</span>Enter the slogan you want to
                                            protect:</h1>
                                        <div class="relative flex flex-col gap-y-1 justify-start flex-1">
                                            <h1 class="font-semibold flex items-start gap-x-1"></h1><input id="trademark_information.slogan" type="text" class="w-full pl-3 p-1.5 md:p-4 md:pl-5 rounded-md md:rounded-base border bb protect" name="brand_slogan" placeholder="Enter your trademark's slogan" value="">
                                        </div>
                                    </div>
                                </div>

                                <ul class="list-inline pull-right">
                                    <li><button type="submit" class="btn btn-primary next-step" disabled>Save and
                                            continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step2">
                                <div class="p-5 md:pt-8 md:p-10 flex flex-col gap-y-8 rounded-3xl w-full section-shadow bg-white">
                                    <div>
                                        <div class="mt-33 enter-website-optional">
                                            <h1 class="font-semibold flex gap-x-1 mb-3">Enter your website (Optional)
                                            </h1>
                                            <div class="relative flex flex-col gap-y-1 justify-start flex-1">
                                                <h1 class="font-semibold flex items-start gap-x-1"></h1><input id="trademark_information.website" type="text" class="w-full pl-3 p-1.5 md:p-4 md:pl-5 rounded-md md:rounded-base border bb  " name="website_url" placeholder="https://" value="">
                                            </div>
                                        </div>
                                        <div class="mt-10 relative">
                                            <h1 class="font-semibold flex gap-x-1 mb-3">Describe more about what you
                                                will sell using your brand trademark.<span class="text-tm-red-required">*</span></h1>
                                            <div class="flex flex-col gap-y-1"><textarea name="brand_description" class="text-1 w-full pt-3 pb-5 px-4 rounded-2xl border min-h-[150px] undefined" placeholder="Enter a description of the products and or services that you plan to sell using your trademark."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                    <li><button type="submit" class="btn btn-primary next-step" disabled>Save and
                                            continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step3">
                                <select name="to_be_trademarked_in[]" id="countries" multiple>
                                    <option value="199,United States">United States</option>
                                    <option value="999,Canada">Canada</option>
                                    <option value="199,Australia">Australia</option>
                                    <option value="22,Mexico">Mexico</option>
                                    <option value="100,European Union">European Union</option>
                                    <option value="349,China">China</option>
                                    <option value="99,South Korea">South Korea</option>
                                    <option value="99,Japan">Japan</option>
                                    <option value="249,India">India</option>
                                    <option value="99,United Kingdom">United Kingdom</option>
                                    <option value="99,Israel">Israel</option>
                                    <option value="1299,United Arab Emirates">United Arab Emirates</option>
                                    <option value="699,New Zealand">New Zealand</option>
                                    <option value="99,Brazil">Brazil</option>
                                    <option value="99,Taiwan">Taiwan</option>
                                    <option value="99,Ukraine">Ukraine</option>
                                    <option value="699,Indonesia">Indonesia</option>
                                    <option value="110,South Africa">South Africa</option>
                                    <option value="799,Singapore">Singapore</option>
                                    <option value="999,Saudi Arabia">Saudi Arabia</option>
                                    <option value="199,Afghanistan">Afghanistan</option>
                                    <option value="199,Algeria">Algeria</option>
                                    <option value="199,Argentina">Argentina</option>
                                    <option value="199,Austria">Austria</option>
                                    <option value="199,Bangladesh">Bangladesh</option>
                                    <option value="199,Belgium">Belgium</option>
                                    <option value="199,Chile">Chile</option>
                                    <option value="199,Colombia">Colombia</option>
                                    <option value="199,Czechia">Czechia</option>
                                    <option value="199,Denmark">Denmark</option>
                                    <option value="199,France">France</option>
                                    <option value="199,Germany">Germany</option>
                                    <option value="199,Italy">Italy</option>
                                    <option value="199,Russia">Russia</option>
                                    <option value="199,Spain">Spain</option>
                                    <option value="199,The United States">The United States</option>
                                </select>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                    <li><button type="submit" class="btn btn-primary btn-info-full next-step">Save and
                                            continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step4">
                                <div class="mt-33 packages-container">
                                    <div class="rounded-[40px]">
                                        <table style="box-shadow: rgba(222, 222, 222, 0.08) 0px 10px 10px, rgba(100, 106, 114, 0.12) 0px 10px 70px; width: 85%; margin: 0 auto;">
                                            <thead>
                                                <tr class="first-row">
                                                    <th class="bg-[#F8FAFF] border-r-4 border-r-[#EEF3FF] rouned-l-[40px] px-8 py-5 table-first-col">
                                                        <div class="img-container">
                                                            <img class="flag-img" src="assets/images/flag-us.svg" alt="Allied IP Firm">
                                                        </div>
                                                        <h3 class="custom-heading">Compare Trademark Registration Plans</h3>
                                                    </th>
                                                    <th class="align-bottom">
                                                        <div class="flex flex-col items-center  gap-y-1 py-5 px-3 items-start border-b-2 border-b-[#E2E2E2] package-selected-pay">
                                                            <p class="font-semibold package_name">Basic</p>
                                                            <p class="font-bold text-4xl">$39<span class="text-base">/class</span></p>
                                                            <strike>$78</strike>
                                                            <div class="flex justify-center mt-2">
                                                                <button class="custom-package-btn py-2 px-3 md:py-3.5 md:px-8 font-bold flex items-center justify-center rounded-lg md:rounded-2xl relative overflow-hidden disabled:border-tm-gray-300 disabled:bg-tm-gray-300 disabled:hover:bg-tm-gray-300 disabled:cursor-not-allowed focus-visible:outline-none !px-8 !py-2 !rounded-base border border-solid border-tm-blue bg-tm-blue hover:bg-tm-royal-blue active:bg-tm-blue-200 text-white " type="button"><span class="button_ripple__Kgdu_" style="height: 147px; width: 147px; left: 22.5px; top: -49.5px;"></span>
                                                                    <input required="" type="radio" value="39" name="package_price" data-package_name="Basic" class="package-select" id="box1">
                                                                    <p class="font-bold whitespace-nowrap">
                                                                    </p>
                                                                    <p class="cursor-pointer">Select Plan</p>
                                                                    <p></p>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th class="align-bottom">
                                                        <div class="flex flex-col items-center  gap-y-1 py-5 px-3 items-start border-b-2 border-b-[#E2E2E2] package-selected-pay startup-package-col">
                                                            <div class="bestseller bgyelloe">
                                                                <small>BEST SELLER</small>
                                                            </div>
                                                            <p class="font-semibold package_name">Professional</p>
                                                            <p class="font-bold text-4xl">$99<span class="text-base">/class</span></p>
                                                            <strike>$198</strike>
                                                            <div class="flex justify-center mt-2">
                                                                <button class="custom-package-btn py-2 px-3 md:py-3.5 md:px-8 font-bold flex items-center justify-center rounded-lg md:rounded-2xl relative overflow-hidden disabled:border-tm-gray-300 disabled:bg-tm-gray-300 disabled:hover:bg-tm-gray-300 disabled:cursor-not-allowed focus-visible:outline-none !px-8 !py-2 !rounded-base border border-solid border-tm-blue bg-tm-blue hover:bg-tm-royal-blue active:bg-tm-blue-200 text-white " type="button"><span class="button_ripple__Kgdu_" style="height: 147px; width: 147px; left: 22.5px; top: -49.5px;"></span>
                                                                    <input required="" type="radio" value="99" name="package_price" data-package_name="Professional" class="package-select" id="box2">
                                                                    <p class="font-bold whitespace-nowrap">
                                                                    </p>
                                                                    <p class="cursor-pointer">Select Plan</p>
                                                                    <p></p>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th class="align-bottom">
                                                        <div class="flex flex-col items-center  gap-y-1 py-5 px-3 items-start border-b-2 border-b-[#E2E2E2] package-selected-pay premium-package-col">
                                                            <div class="bestseller bgyelloe">
                                                                <small>RECOMMENDED</small>
                                                            </div>
                                                            <p class="font-semibold package_name">Business</p>
                                                            <p class="font-bold text-4xl">$199<span class="text-base">/class</span></p>
                                                            <strike>$398</strike>
                                                            <div class="flex justify-center mt-2">
                                                                <button class="custom-package-btn py-2 px-3 md:py-3.5 md:px-8 font-bold flex items-center justify-center rounded-lg md:rounded-2xl relative overflow-hidden disabled:border-tm-gray-300 disabled:bg-tm-gray-300 disabled:hover:bg-tm-gray-300 disabled:cursor-not-allowed focus-visible:outline-none !px-8 !py-2 !rounded-base border border-solid border-tm-blue bg-tm-blue hover:bg-tm-royal-blue active:bg-tm-blue-200 text-white " type="button"><span class="button_ripple__Kgdu_" style="height: 147px; width: 147px; left: 22.5px; top: -49.5px;"></span>
                                                                    <input required="" type="radio" value="249" name="package_price" data-package_name="Business" class="package-select">
                                                                    <p class="font-bold whitespace-nowrap" id="box3">
                                                                    </p>
                                                                    <p class="cursor-pointer">Select Plan</p>
                                                                    <p></p>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th class="align-bottom">
                                                        <div class="flex flex-col items-center gap-y-1 py-5 px-3 items-start border-b-2 border-b-[#E2E2E2] package-selected-pay">
                                                            <div class="flex items-center gap-x-1">
                                                                <p class="font-semibold package_name">Corporate</p>
                                                            </div>
                                                            <p class="font-bold text-4xl">$349<span class="text-base">/class</span></p>
                                                            <strike>$698</strike>
                                                            <div class="flex justify-center mt-2">
                                                                <button class="custom-package-btn py-2 px-3 md:py-3.5 md:px-8 font-bold flex items-center justify-center rounded-lg md:rounded-2xl relative overflow-hidden disabled:border-tm-gray-300 disabled:bg-tm-gray-300 disabled:hover:bg-tm-gray-300 disabled:cursor-not-allowed focus-visible:outline-none !px-8 !py-2 !rounded-base border border-solid border-tm-blue bg-tm-blue hover:bg-tm-royal-blue active:bg-tm-blue-200 text-white " type="button"><span class="button_ripple__Kgdu_" style="height: 147px; width: 147px; left: 22.5px; top: -49.5px;"></span>
                                                                    <input required="" type="radio" value="449" name="package_price" data-package_name="Corporate" class="package-select">
                                                                    <p class="font-bold whitespace-nowrap" id="box4">
                                                                    </p>
                                                                    <p class="cursor-pointer">Select Plan</p>
                                                                    <p></p>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="flex items-center bg-[#F8FAFF] border-r-4 border-r-[#EEF3FF] px-8 py-5 table-first-col">
                                                        <p class="font-bold text-sm xl:max-w-[400px]">
                                                        <p>CASE REVIEW</p>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center bg-[#FFF7EF]"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td class="flex items-center bg-[#F8FAFF] border-r-4 border-r-[#EEF3FF] px-8 py-5 table-first-col">
                                                        <div class="td first">
                                                            <p>CASE PREPARATION</p>
                                                        </div>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center bg-[#FFF7EF]"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td class="flex items-center bg-[#F8FAFF] border-r-4 border-r-[#EEF3FF] px-8 py-5 table-first-col">
                                                        <p>CASE FILLING</p>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center bg-[#FFF7EF]"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td class="flex items-center bg-[#F8FAFF] border-r-4 border-r-[#EEF3FF] px-8 py-5 table-first-col">
                                                        <p>TRADEMARK ALERT</p>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span> <img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span> <img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span> <img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center bg-[#FFF7EF]"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td class="flex items-center bg-[#F8FAFF] border-r-4 border-r-[#EEF3FF] px-8 py-5 table-first-col">
                                                        <p>TRADEMARK SECURED</p>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/RedCross.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                        <p class="text-sm font-semibold">
                                                        <div class="flex flex-col justify-center">
                                                            <p class="text-sm font-semibold"> </p>

                                                        </div>
                                                        </p>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                        <p class="text-sm font-semibold">
                                                        <div class="flex flex-col justify-center">
                                                            <p class="text-sm font-semibold"> </p>

                                                        </div>
                                                        </p>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span> <img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                        <p class="text-sm font-semibold">
                                                        <div class="flex flex-col justify-center">
                                                            <p class="text-sm font-semibold"> </p>

                                                        </div>
                                                        </p>
                                                    </td>
                                                    <td class="text-center bg-[#FFF7EF]"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                        <p class="text-sm font-semibold">
                                                        <div class="flex flex-col justify-center">
                                                            <p class="text-sm font-semibold"> </p>

                                                        </div>
                                                        </p>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td class="flex items-center bg-[#F8FAFF] border-r-4 border-r-[#EEF3FF] px-8 py-5 table-first-col">
                                                        <p>100% Satisfaction Guarantee</p>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span> <img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span> <img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center bg-[#FFF7EF]"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td class="flex items-center bg-[#F8FAFF] border-r-4 border-r-[#EEF3FF] px-8 py-5 table-first-col">
                                                        <p>Direct Hit Search</p>

                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span> <img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center bg-[#FFF7EF]"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td class="flex items-center bg-[#F8FAFF] border-r-4 border-r-[#EEF3FF] px-8 py-5 table-first-col">
                                                        <p>REFUSAL RISK METER速</p>
                                                    </td>
                                                    <td class="text-center"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/RedCross.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center bg-[#FFF7EF]"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td class="flex items-center bg-[#F8FAFF] border-r-4 border-r-[#EEF3FF] px-8 py-5 table-first-col">
                                                        <p>Cease & Desist Letter ($35 value)</p>
                                                    </td>
                                                    <td class="text-center"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/RedCross.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/RedCross.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>

                                                    </td>
                                                    <td class="text-center bg-[#FFF7EF]"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td class="flex items-center bg-[#F8FAFF] border-r-4 border-r-[#EEF3FF] px-8 py-5 table-first-col">
                                                        <p>Complete Documentation Digital File</p>
                                                    </td>
                                                    <td class="text-center"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/RedCross.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/RedCross.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>

                                                    </td>
                                                    <td class="text-center bg-[#FFF7EF]"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td class="flex items-center bg-[#F8FAFF] border-r-4 border-r-[#EEF3FF] px-8 py-5 table-first-col">
                                                        <p>24-hour Expedited Processing</p>
                                                    </td>
                                                    <td class="text-center"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/RedCross.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/RedCross.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center "><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>

                                                    </td>
                                                    <td class="text-center bg-[#FFF7EF]"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td class="flex items-center bg-[#F8FAFF] border-r-4 border-r-[#EEF3FF] px-8 py-5 table-first-col">
                                                        <p>Dedicated Case Manager </p>
                                                    </td>
                                                    <td class="text-center"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/RedCross.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/RedCross.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/RedCross.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center bg-[#FFF7EF]"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td class="flex items-center bg-[#F8FAFF] border-r-4 border-r-[#EEF3FF] px-8 py-5 table-first-col">
                                                        <p>Comprehensive Trademark Search Report (Federal &amp; State) </p>
                                                    </td>
                                                    <td class="text-center"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/RedCross.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/RedCross.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/RedCross.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center bg-[#FFF7EF]"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td class="flex items-center bg-[#F8FAFF] border-r-4 border-r-[#EEF3FF] px-8 py-5 table-first-col">
                                                        <p>Trademark Monitoring (1 Year - $175 value)</p>
                                                    </td>
                                                    <td class="text-center"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/RedCross.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/RedCross.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/RedCross.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>
                                                    </td>
                                                    <td class="text-center bg-[#FFF7EF]"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="./assets/images/GreenCheck.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img src="./assets/images/GreenCheck.svg" decoding="async" data-nimg="intrinsic" class="bg-white rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;"></span>

                                                    </td>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                    <!-- <li><button type="button" class="btn btn-default next-step">Skip</button></li> -->
                                    <li>
                                        <button id="post_brief" type="button" name="submit" value="" class="btn btn-primary btn-info-full next-step">Save and
                                            continue</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
        
    <!-- Jquery 2.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- Bootstrap 3.3 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <!-- Multi Select Countries JS -->
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/js/multi-select-tag.js"></script>

    <!-- Registration Form Custom JS -->
    <script src="assets/js/registration-form.js"></script>

    <!-- Dropify JS -->
    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
</body>

<!-- CRM Service -->
<script>
    var api_base_url = "https://dashboard.alliedipfirm.com/dynamic_form/api/"
    var form = $('#form-upload')

    $(document).ready(function() {

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
                    let payment_page_url = "checkout.php?lead_id=" + <?= $_GET['lead_id'] ?> + "&package=" + package_name + "&price=" + package_price;
                    window.location = payment_page_url;
                } else {
                    alert(response.message);
                }
            }
        });
    }


    $('.wrapper').before('<h2 class="country-orign">Select Country of Origin <span class="text-tm-red-required">*</span></h2>');

    $('.mt-3').eq(1).hide();
    $('.mt-3').eq(2).hide();
    $('.mt-3').eq(3).hide();
    $('.mt-3').eq(4).hide();

    $('input[type="checkbox"]').change(function() {
        if ($('input[type="checkbox"]').eq(0).is(':checked')) {
            $('input[type="checkbox"]').eq(0).parent().css('background', '#EFF6FF');
            $('.mt-3').eq(1).show();

        } else {
            $('input[type="checkbox"]').eq(0).parent().css('background', '#fff');
            $('.mt-3').eq(1).hide();
        }

        if ($('input[type="checkbox"]').eq(1).is(':checked')) {
            $('input[type="checkbox"]').eq(1).parent().css('background', '#EFF6FF');
            $('.mt-3').eq(2).show();

        } else {
            $('input[type="checkbox"]').eq(1).parent().css('background', '#fff');
            $('.mt-3').eq(2).hide();

        }

        if ($('input[type="checkbox"]').eq(2).is(':checked')) {
            $('input[type="checkbox"]').eq(2).parent().css('background', '#EFF6FF');
            $('.mt-3').eq(3).show();
        } else {
            $('input[type="checkbox"]').eq(2).parent().css('background', '#fff');
            $('.mt-3').eq(3).hide();
        }

        if ($('input[type="checkbox"]').eq(3).is(':checked')) {
            $('input[type="checkbox"]').eq(3).parent().css('background', '#EFF6FF');
            $('.mt-3').eq(4).show();
        } else {
            $('input[type="checkbox"]').eq(3).parent().css('background', '#fff');
            $('.mt-3').eq(4).hide();
        }
    })


    $('input[type="file"]').change(function() {
        var logoUpload = $('input[type="file"]').eq(0).val().split('\\')[2]
        $('.brandlogo').text(logoUpload)
    })

    $('input[type="file"]').change(function() {
        var logoUpload = $('input[type="file"]').eq(1).val().split('\\')[2]
        $('.brandaudio').text(logoUpload)
    })
</script>

<!-- File Upload -->
<script type="application/javascript">
    let ajaxConfig = {
        ajaxRequester: function(config, uploadFile, pCall, sCall, eCall) {
            let progress = 0
            let interval = setInterval(() => {
                progress += 10;
                pCall(progress)
                if (progress >= 100) {
                    clearInterval(interval)
                    const windowURL = window.URL || window.webkitURL;
                    sCall({
                        data: windowURL.createObjectURL(uploadFile.file)
                    })
                    // eCall("上传异常")
                }
            }, 300)
        }
    }
    $("#demo1").uploader({
        multiple: true,
        ajaxConfig: ajaxConfig,
        autoUpload: false
    })
    $("#demo2").uploader({
        ajaxConfig: ajaxConfig
    })
    $("#demo3").uploader({
        multiple: true,
        defaultValue: [{
            name: "jQuery",
            url: "https://www.jqueryscript.net/dummy/5.jpg"
        }, {
            name: "script",
            url: "https://www.jqueryscript.net/dummy/6.jpg"
        }],
        ajaxConfig: ajaxConfig
    })
</script>

<!-- Onclick Field Show -->
<script>
    $('input[name="trademark_name"]').on('change', function() {
        const displayBlock = $('.mt-3').eq(1);
        let validate = displayBlock.children().find('input.protect')
        // Check if the display block element is currently active
        const isActive = displayBlock.css('display') === 'block';

        // If active, remove the "active" class, otherwise add it
        if (isActive) {
            displayBlock.addClass('active');
            validate.addClass('validate')
        } else {
            displayBlock.removeClass('active');
            validate.removeClass('validate')
        }
    })

    $('input[name="trademark_logo"]').on('change', function() {
        const displayBlock = $('.mt-3').eq(2);
        let validate = displayBlock.children().find('input.protect')
        // Check if the display block element is currently active
        const isActive = displayBlock.css('display') === 'block';

        // If active, remove the "active" class, otherwise add it
        if (isActive) {
            displayBlock.addClass('active');
            validate.addClass('validate')
        } else {
            displayBlock.removeClass('active');
            validate.removeClass('validate')
        }
    })

    $('input[name="trademark_slogan"]').on('change', function() {
        const displayBlock = $('.mt-3').eq(3);
        let validate = displayBlock.children().find('input.protect')
        // Check if the display block element is currently active
        const isActive = displayBlock.css('display') === 'block';

        // If active, remove the "active" class, otherwise add it
        if (isActive) {
            displayBlock.addClass('active');
            validate.addClass('validate')
        } else {
            displayBlock.removeClass('active');
            validate.removeClass('validate')
        }
    })

    $('input[name="trademark_information.is_sound_protected"]').on('change', function() {
        const displayBlock = $('.mt-3').eq(4);
        let validate = displayBlock.children().find('input.protect')
        // Check if the display block element is currently active
        const isActive = displayBlock.css('display') === 'block';

        // If active, remove the "active" class, otherwise add it
        if (isActive) {
            displayBlock.addClass('active');
            validate.addClass('validate')
        } else {
            displayBlock.removeClass('active');
            validate.removeClass('validate')
        }
    })

    $('#demo2').change(function() {
        var logoUpload = $('#demo2').eq(0).val().split('\\')[2]
        $('.brandlogo').text(logoUpload)

    })


    $(document).ready(function() {

        $('textarea[name="brand_description"]').on('keyup change', function() {
            if ($('textarea[name="brand_description"]').val() === '') {
                $('#step2 .next-step').attr('disabled', 'true');
            } else {
                $('#step2 .next-step').removeAttr('disabled');
            }
        })

        $('.drawer.rounded ul').on('DOMSubtreeModified', function() {
            if ($('.input-container').is(':empty')) {
                $('div#step3 .next-step').attr('disabled', 'true')
            } else {
                $('div#step3 .next-step').removeAttr('disabled')
            }
        })


        $('.protect').on("change keyup", async function() {
            let disable = 1;
            var fields = $(document).find('.validate')
            await $(fields).each(function(i, field) {
                console.log($(field).val())
                if ($(field).val() != "" || $(field).val() == null) {
                    disable = 0;
                } else {
                    disable = 1;
                }
            })
            if (disable == 0) {
                $('#step1 .next-step').removeAttr('disabled');
            } else {
                $('#step1 .next-step').attr('disabled', 'true');
            }
        })


        $('#demo2').change(function() {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').attr('src', e.target.result);
                $('#imagePreview').show();
            }
            reader.readAsDataURL(this.files[0]);
        });
    });


    $(document).ready(function() {

        $("#demo2").change(async function() {

            var fd = new FormData();

            var files = $('#demo2')[0].files;

            // Check file selected or not
            if (files.length > 0) {

                fd.append('file', files[0]);
                $('#step1 .next-step').attr('disabled', 'true');

                await $.ajax({
                    url: 'upload.php',
                    type: 'post',
                    data: fd,
                    dataType: 'json',
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == 1) {
                            var extension = response.extension;
                            var path = response.path;

                            $('.prevel').hide();
                            if (extension == 'pdf' || extension == 'docx') {
                                $("#fileprev").attr("href", path);
                                $("#fileprev").show();
                                $('#step1 .next-step').removeAttr('disabled');
                            } else {
                                $("#imgprev").attr("src", path);
                                $("#imgprev").show();
                            }

                        } else {

                            $('.prev-step').click()

                            alert('The file type must be in jpeg and png');

                        }
                    }
                });
            }
        });
    });
</script>

<!-- Dropify -->
<script>
    jQuery('.dropify').dropify();
</script>

<!--Package Select Form Button Script-->
<script>
    // Disable the button by default
    document.getElementById("post_brief").disabled = true;

    // Add event listener to elements with class "package-select"
    var packageSelectInputs = document.getElementsByClassName("package-select");
    for (var i = 0; i < packageSelectInputs.length; i++) {
        packageSelectInputs[i].addEventListener("click", function() {
            // Enable the button when any element with class "package-select" is clicked
            document.getElementById("post_brief").disabled = false;
        });
    }
</script>

</html>