<?php
require_once("includes/data.php");
require_once("../service/connectionClass.php");
$ctx = new database();
$query = $ctx->selectData('leads', array(), array("id=" . $_GET['id']));
$data = $query['data'];
?>

<!doctype html>
<html lang="en">

<head>
    <title>Copyright Brief Form | Allied IP Firm</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/service-style.css?v=2.3">
    <link rel="stylesheet" href="assets/css/rs-spacing.css">
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Start of  Zendesk Widget script -->
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=7463533f-519c-4755-820e-b4f7e8bdbc07"> </script>
    <!-- End of  Zendesk Widget script -->

</head>

<body>
    <header style="margin-bottom: 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="logo-wrapper">
                        <a href="javascript:void()"><img src="./assets/images/logo-white.svg" class="img-fluid" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="action-btn">
                        <a href="javascript:$zopim.livechat.window.show();" class="get-quote c-button js-next-screen shine me-3"><i class="fa-regular fa-comment"></i>Chat Now</a>
                        <a href="tel:(800) 291-3781" class="get-quote c-button js-next-screen shine"><i class="fa-solid fa-headset"></i>(800) 291-3781</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="main-content">
        <style>
            label {
                font-size: 16px;
                margin-bottom: 15px;
            }
        </style>
        <!-- Contact Section Start -->
        <div class="rs-contact contact-style2 bg9 pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sec-title mb-45 md-mb-25">
                            <h2 class="title pb-20">
                                Copyright Application <span>Process.</span>
                            </h2>
                            <!-- Skillbar Section Start -->
                            <div class="rs-skillbar style1">
                                <div class="cl-skill-bar">
                                    <!-- Start Skill Bar -->
                                    <div class="skillbar" data-percent="90">
                                        <p class="skillbar-bar"></p>
                                        <span class="skill-bar-percent"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Skillbar Section End -->
                        </div>
                        <div class="contact-wrap">
                            <div id="form-messages"></div>
                            <form id="briefForm" method="POST" name="form1" action="javascript:copyRightBrief('briefForm');" enctype="multipart/form-data">
                                <input type="hidden" id="user" name="UserId" value="<?= $_GET['id'] ?>">
                                <input type="hidden" id="price" name="Price" value="<?= $dprice ?>">
                                <input type="hidden" id="title" name="Package" value="<?= $package ?>">
                                <fieldset>
                                    <!--<span class="sub-text" style="font-size: 24px;">*</span>-->
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                                            <label for="WantCopyright">What You are Wanting To Copyright.</label>
                                            <select class="from-control" id="WantCopyright" name="WantCopyright" required="">
                                                <option value="" selected="">Choose...</option>
                                                <optgroup label="Literary Work">
                                                    <option value="Written Work such as fiction, nonfiction, poetry, textbooks, refrence works or articles">Written Work such as fiction, nonfiction, poetry, textbooks, refrence works or articles</option>
                                                    <option value="Directories or Catalogs, Advertising Copy">Directories or Catalogs, Advertising Copy</option>
                                                    <option value="Computer Programs">Computer Programs</option>
                                                    <option value="Website or Online Material">Website or Online Material</option>
                                                </optgroup>

                                                <optgroup label="Work of Visual Arts">
                                                    <option value="Photograph">Photograph</option>
                                                    <option value="Art Work">Art Work</option>
                                                    <option value="Maps">Maps</option>
                                                    <option value="Technical Drawings">Technical Drawings</option>
                                                </optgroup>

                                                <optgroup label="Sound Recordings">
                                                    <option value="Recorded Performance of Music or Sound">Recorded Performance of Music or Sound</option>
                                                </optgroup>

                                                <optgroup label="Work of Performance Arts">
                                                    <option value="Written Music &amp; Lyrics">Written Music &amp; Lyrics</option>
                                                    <option value="Screenplay or Script">Screenplay or Script</option>
                                                    <option value="Choreographic Work">Choreographic Work</option>
                                                    <option value="A Recorded Score For a movie or Play">A Recorded Score For a movie or Play</option>
                                                </optgroup>

                                                <optgroup label="Motion Pictures/AV Work">
                                                    <option value="Feature Film, Documentry Film, Animated Film, Television Show, Video or Other Audi-Visual Work">Feature Film, Documentry Film, Animated Film, Television Show, Video or Other Audi-Visual Work</option>
                                                    <option value="Video Game">Video Game</option>
                                                </optgroup>

                                            </select>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                                            <label for="TitleCopyright">What is the Title of the Work You Would like to Copyright?</label>
                                            <input class="from-control" type="text" id="TitleCopyright" name="TitleCopyright" placeholder="What is the Title of the Work You Would like to Copyright?" required="">
                                            <!--<p class="pl-10 mt-4">Leave blank if there is no title. If you are registering on a website. list the URL(example.com) - Whatever you enter here will appear on your official Copyright Office Registration to identify the work. If-->
                                            <!--    this so collection of works in a single application. such as a single album with several songs or o single collection of several essays. you must provide a tale for the collection and you may provide tides-->
                                            <!--    to the individual parts. too. but you do not have to. </p>-->
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                            <label for="CopyrightYear">What Year Did You Complete Your Work?<span class="sub-text" style="font-size: 24px;">*</span></label>
                                            <select class="from-control" id="CopyrightYear" name="CopyrightYear" required="">
                                                <option value="2000">2000</option>
                                                <option value="2001">2001</option>
                                                <option value="2002">2002</option>
                                                <option value="2003">2003</option>
                                                <option value="2004">2004</option>
                                                <option value="2005">2005</option>
                                                <option value="2006">2006</option>
                                                <option value="2007">2007</option>
                                                <option value="2008">2008</option>
                                                <option value="2009">2009</option>
                                                <option value="2010">2010</option>
                                                <option value="2011">2011</option>
                                                <option value="2012">2012</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                        </option>
                                                <option value="2022">2023</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                                            <label for="SelectWorkPublish">Has the Work Been Published.<span class="sub-text" style="font-size: 24px;">*</span></label>
                                            <div class="d-flex inline-block">
                                                <input class="woocommerce-form__input woocommerce-form__input-checkbox mr-25 ml-25" type="radio" id="Publish1" value="Yes" name="WorkPublish" required="">
                                                <label for="Publish1">Yes</label>
                                                <input class="woocommerce-form__input woocommerce-form__input-checkbox mr-25 ml-25" type="radio" id="Publish2" value="No" name="WorkPublish" checked="" required="">
                                                <label for="Publish2">No</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                                            <label for="SelectWorkPeriod">Is Your Work A part of Larger Periodical (NewsPaper, Magzine) Or Serial? <span class="sub-text" style="font-size: 24px;">*</span></label>
                                            <div class="d-flex inline-block">
                                                <input class="woocommerce-form__input woocommerce-form__input-checkbox mr-25 ml-25" type="radio" id="Publish3" value="Yes" name="WorkPeriod" required="">
                                                <label for="Publish3">Yes</label>
                                                <input class="woocommerce-form__input woocommerce-form__input-checkbox mr-25 ml-25" type="radio" id="Publish4" value="No" name="WorkPeriod" checked="" required="">
                                                <label for="Publish4">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="CustomerInfo">
                                        <div class="">
                                            <h3 class="mt-20">
                                                Who is the Author of The Work?
                                            </h3>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                                            <label for="CustomerName">Full Name or Organization Name: <span class="sub-text" style="font-size: 24px;">*</span></label>
                                            <input class="from-control" type="text" id="CustomerName" name="CustomerName" placeholder="Enter Full Name or Organization Name" required="">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                                            <label for="CustomerEmail">Address: <span class="sub-text" style="font-size: 24px;">*</span></label>
                                            <input class="from-control" type="text" id="CustomerEmail" name="CustomerEmail" placeholder="Address" required="">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                                            <label for="SelectCitizenship">Country of Citizenship / Domicile<span class="sub-text" style="font-size: 24px;">*</span></label>
                                            <select class="from-control" id="SelectCitizenship" name="SelectCitizenship" required="">
                                                <option value="" selected="">Choose...</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Aland Islands">Aland Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Congo, Democratic Republic of the Congo">Congo, Democratic Republic of the Congo</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Curacao">Curacao</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories">French Southern Territories</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guernsey">Guernsey</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jersey">Jersey</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                <option value="Kosovo">Kosovo</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macao">Macao</option>
                                                <option value="Macedonia, the Former Yugoslav Republic of">Macedonia, the Former Yugoslav Republic of</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn">Pitcairn</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russian Federation">Russian Federation</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Barthelemy">Saint Barthelemy</option>
                                                <option value="Saint Helena">Saint Helena</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Martin">Saint Martin</option>
                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Sint Maarten">Sint Maarten</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                                <option value="outh Sudan">South Sudan</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Timor-Leste">Timor-Leste</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Viet Nam">Viet Nam</option>
                                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                <option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>
                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                <option value="Western Sahara">Western Sahara</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="">
                                            <h3 class="mt-20">
                                                Upload Work
                                            </h3>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 mb-30" id="SelectDocs">
                                            <label for="SelectDocs">Enter the Logo you wish to protect.<span class="sub-text" style="font-size: 24px;">*</span></label>
                                            <input class="from-control" type="file" id="SelectDocs" name="SelectDocs" accept=".xlsx, .xls, image/*, .doc, .docx, .ppt, .pptx, .txt, .pdf">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                                            <label for="SelectWorkmaterial">Does the Work Have Material Not Created By You That Pre-Existed The Creation of The Work? <span class="sub-text" style="font-size: 24px;">*</span></label>
                                            <div class="d-flex inline-block">
                                                <input class="woocommerce-form__input woocommerce-form__input-checkbox mr-25 ml-25" type="radio" value="Yes" id="Publish11" name="WorkMaterial" required="">
                                                <label for="Publish11">Yes</label>
                                                <input class="woocommerce-form__input woocommerce-form__input-checkbox mr-25 ml-25" type="radio" value="No" id="Publish12" name="WorkMaterial" checked="" required="">
                                                <label for="Publish12">No</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                                            <label for="SelectregiterdCopyright">Is The Copyright Going Through To Be Registered In a Name Other than the Author's? <span class="sub-text" style="font-size: 24px;">*</span></label>
                                            <div class="d-flex inline-block">
                                                <input class="woocommerce-form__input woocommerce-form__input-checkbox mr-25 ml-25" type="radio" value="Yes" id="Publish13" name="WorkCopyRegister" required="">
                                                <label for="Publish13">Yes</label>
                                                <input class="woocommerce-form__input woocommerce-form__input-checkbox mr-25 ml-25" type="radio" value="No" id="Publish14" name="WorkCopyRegister" checked="" required="">
                                                <label for="Publish14">No</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="btn-part" id="check-out-btn">
                                        <div class="form-group mb-0">
                                            <button class="readon submit w-100" id="submit-form" name="Copyright_sbmit_btn" type="submit">Next</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Contact Section End -->

    </div>
</body>
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script defer src="assets/js/brief.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8-beta.17/jquery.inputmask.min.js" integrity="sha512-zdfH1XdRONkxXKLQxCI2Ak3c9wNymTiPh5cU4OsUavFDATDbUzLR+SYWWz0RkhDmBDT0gNSUe4xrQXx8D89JIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6LfLgMMhAAAAAPTfbvvJjuSgmIFFqugSPR3kTJUC"></script>

</html>