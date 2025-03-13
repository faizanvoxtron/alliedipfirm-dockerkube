<?php
require_once("includes/data.php");
require_once("../service/connectionClass.php");
 $ctx = new database();
$query = $ctx->selectData('leads',array(),array("id=".$_GET['id']));
$data = $query['data'];
?>

<!doctype html>
<html lang="en">

<head>
    <title>Payment Process - Allied IP Firm</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/service-style.css?v=1.8">
    
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
        .selectbox {
            position: relative;
        }
        .selectbox span.downmenu {
            font-size: 28px;
            color: black;
            position: absolute;
            right: 30px;
            top: 54px;
            line-height: 28px;
        }
        li.included {
            margin: 10px 0;
        }
        li.included i {
            font-weight: 700;
            color: #e42422;
            margin-right: 10px;
        }
        li.included span {
            font-weight: 600 !important;
            font-size: 18px;
        }
        .popup.terms {
            max-height:300px;
            overflow: scroll;
        }
        .popup.terms p {
            font-size: 13px;
        }
        .popup.terms span {
            font-size: 13px;
        }
        .popup.terms h4 {
            font-size: 15px;
        }
        .modal .close {
            background: red;
            color: white;
            border: 0px;
            outline: none;
            font-weight: 700;
            font-size: 26px;
            line-height: 26px;
            width: 30px;
            height: 30px;
            border-radius: 4px;
        }
    </style>
</head>

<body>
        <header>
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
    <main>

        <!-- -->
        <section class="briefForm">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 pe-5">
                        <div class="main-title">
                            <h2>Select your Package</h2>
                        </div>
                        <form style="padding-bottom: 60px;" id="payForm" method="POST" action="javascript:pay('payForm');">
                            <input type="hidden" id="user" name="userid" value="<?= $_GET['id'] ?>">
                            <div class="row">
                                <div class="col-md-6 mb-3 selectbox">
                                    <label for="pname" class="form-label">SELECT TRADEMARK PACKAGE</label>
                                    <select class="form-control" id="package" name="package" required onchange="changePackage(this);">
                                        <?php 
                                            foreach($packages as $item) {
                                                echo '<option value="'.$item.'"'.($item == $package ? 'selected':'').'>'.$item.'</option>';
                                            }
                                        ?>
                                    </select>
                                    <span class="downmenu">⌄</span>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="pprice" class="form-label">AMOUNT (USD)</label>
                                    <input type="text" style="text-align: right;" class="form-control" id="pprice" name="packagePrice" placeholder="☞ type here" value="<?= $dprice ?>" required readonly>
                                </div>
                                
                                <div class="col-md-6 mb-3 selectbox">
                                    <label for="search" class="form-label">SELECT TRADEMARK SEARCH TYPE</label>
                                    <select class="form-control" id="search" name="search" required onchange="changeService(this);">
                                        <?php 
                                            foreach($search as $item) {
                                                echo '<option value="'.$item.'"'.($item == $search ? 'selected':'').'>'.$item.'</option>';
                                            }
                                        ?>
                                    </select>
                                    <span class="downmenu">⌄</span>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="searchPrice" class="form-label">AMOUNT (USD)</label>
                                    <input type="text" style="text-align: right;" class="form-control" id="searchPrice" name="searchPrice" placeholder="☞ type here" value="<?= $searchPrice ?>" required readonly>
                                </div>
                                <div class="col-md-12">
                                    <input type="hidden" value="0" id="expedite" name="expeditePrice">
                                    <input type="checkbox" id="expedited" onchange="changeExpedite(this);">
                                    <label for="expedited">Add $75 now to expedite the Search process.</label>
                                </div>
                                <div class="col-md-6 mb-3" style="position: relative; margin-top:15px;">
                                    <label style="margin:0; position: absolute; left: 35px; top: 25px; color: white; font-size: 18px;" for="subTotal" class="form-label">SUB TOTAL (USD)</label>
                                    <input style="color: white; background-color: green; font-size: 32px; text-align: right; padding-right:35px;" type="text" class="form-control" id="subTotal" name="price" placeholder="☞ Total Price" value="" readonly>
                                </div>
                                <div class="col-md-12">
                                <hr />
                                </div>
                                <div class="col-md-12">
                                    <br>
                                    <h2>Billing Details</h2>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="tagline">FULL NAME <span class="req-field-star">*</span></label>
                                    <input class="form-control" name="name" type="text" value="<?=$data[0]['name']?>" id="tagline" placeholder="☞ type here" required> 

                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email">EMAIL <span class="req-field-star">*</span></label>
                                    <input class="form-control" name="email" type="email" value="<?=$data[0]['email']?>" class="email" placeholder="☞ type here" required pattern="^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$"> 
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phone">CELL PHONE (PRIMARY) <span class="req-field-star">*</span></label>
                                    <input class="form-control" name="phone" type="tel" value="<?=$data[0]['phone']?>" class="phone" placeholder="☞ type here" required  maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1')">

                                </div>
                                <div class="col-md-6 mb-3 selectbox">
                                    <label for="state">COUNTRY <span class="req-field-star">*</span></label>
                                    <select class="form-control" id="country" name="country" required onchange="changeCountry(this);">
                                        <?php 
                                           
                                        foreach ($countries as $item) {
                                            echo '<option value="'.$item.'"'.($item == "United States" ? 'selected':'').'>'.$item.'</option>';
                                        }
                                        
                                        ?>
                                    </select>
                                    <span class="downmenu">⌄</span>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="address">BILLING ADDRESS <span class="req-field-star">*</span></label>
                                    <input class="form-control" name="address" type="text" id="" placeholder="☞ type here" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="city">CITY <span class="req-field-star">*</span></label>
                                    <input class="form-control" name="city" type="text" id="" placeholder="☞ type here" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="state">STATE/PROVINCE <span class="req-field-star">*</span></label>
                                    <input class="form-control" name="state" type="text" id="stateName" placeholder="☞ type here" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="postal">ZIP/POSTAL CODE <span class="req-field-star">*</span></label>
                                    <input type="text" value="" name="postal" class="form-control" id="PostalCode" placeholder="☞ type here" required maxlength="5"> 
                                </div>
                                <div class="col-md-12">
                                    <hr>
                                </div>
                                <div class="col-md-12">
                                    <br>
                                    <h2>Proceed to Checkout</h2>
                                </div>
                                <div class="col-md-12">
                                    <span class="cards">
                                    <img class="img-fluid in-block" src="assets/images/cards.svg" style="text-align: center;margin: 0 auto; width:400px;">                                    </span>
                                </div>
                                <div class="col-md-6">
                                    <label>NAME ON CARD: <span class="req-field-star">*</span></label>
                                    <input type="text" class="form-control" name="cardname" placeholder="☞ type here" required>
                                </div>
                                <div class="col-md-6">
                                    <label>CARD NUMBER: <span class="req-field-star">*</span> <span class="card_type_box"></span></label>
                                    <input type="text" class="form-control" name="cardnumber" placeholder="☞ type here" id="card_number" onblur="validate_cc(this)" maxlength="16" onkeyup="validate_cc(this)" required>
                                    <span class="text-danger danger alert-danger"></span>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>EXP DATE: <span class="req-field-star">*</span></label>
                                            <select id="cmbCardMonth" data-validation="required" class="required month form-select" name="expirymonth" required>
                                                <option value="">Month</option>
                                                <option value="01">January</option>
                                                <option value="02">February</option>
                                                <option value="03">March</option>
                                                <option value="04">April</option>
                                                <option value="05">May</option>
                                                <option value="06">June</option>
                                                <option value="07">July</option>
                                                <option value="08">August</option>
                                                <option value="09">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <select id="cmbCardYear" data-validation="required" class="required year cardyear form-select" name="expiryyear" required>
                                                <option value="">Year</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                                <option value="2025">2025</option>
                                                <option value="2026">2026</option>
                                                <option value="2027">2027</option>
                                                <option value="2028">2028</option>
                                                <option value="2029">2029</option>
                                                <option value="2030">2030</option>
                                                <option value="2031">2031</option>
                                                <option value="2032">2032</option>
                                                <option value="2033">2033</option>
                                                <option value="2034">2034</option>
                                                <option value="2035">2035</option>
                                                <option value="2036">2036</option>
                                                <option value="2037">2037</option>
                                                <option value="2038">2038</option>
                                                <option value="2039">2039</option>
                                                <option value="2040">2040</option>
                                                <option value="2041">2041</option>
                                                <option value="2042">2042</option>
                                                <option value="2043">2043</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>CVV: <span class="req-field-star">*</span></label>
                                    <input type="text" class="form-control" name="cvc" placeholder="" id="cvv" maxlength="4" required>
                                </div>
                            </div>
                            <div class="privacy-terms paddingBottom">
                                <input type="checkbox" id="tos" required checked>
                                <label for="tos">I accept <a href="javascript:showmodal('terms-modal');">Terms & Conditions</a></label>
                                <!--and <a href="/privacy.php" target="blank">Privacy Policy</a>.</label>-->
                            </div>
                            <button type="submit" style="width:100%;" class="submit-buttons">Proceed</button>
                            <div class="form-bottom">
                                <span class="secu-img"><img width="288" class="img-responsive in-block" src="assets/images/verfication.svg"></span>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <div class="sidebar">
                            
                            
                            <!--<div class="need included-package">-->
                                <!--<h2><span>What's</span> Included?</h2>-->
                                
                                <?php
                                    // if ($package == "Trademark Basic Package") {
                                    //     echo'<h4>Trademark Basic Package</h4>';
                                        
                                    //     echo'<ul class="asstxt">';
                                    
                                    //         foreach($tmbasic as $item) {
                                    //             echo '<li class="included"><i class="fa fa-check" aria-hidden="true"></i>';
                                    //             echo '<span>'.$item.'</span></li>';
                                    //         }
                                    //     echo'</ul>';
                                    // }
                                ?>
                            <!--</div>-->
                            <!--<br>-->
                            <div class="need">
                                <h2><span>Need</span> Assistance?</h2>
                                <ul class="asstxt">
                                    <li>
                                        <a href="tel:(800) 291-3781">
                                            <i class="fa fa-phone" aria-hidden="true"></i> Toll Free:
                                            <span>(800) 291-3781</span> </a>
                                    </li>
                                    <br>
                                    <li>
                                        <a href="javascript:$zopim.livechat.window.show();" class="chat">
                                            <i class="fa fa-comments" aria-hidden="true"></i> Live Chat:
                                            <span>with our Trademark Consultants</a></span>
                                    </li>
                                    <br>
                                    <li>
                                        <a href="mailto:consultant@alliedipfirm.com" class="email">
                                            <i class="fa fa-message" aria-hidden="true"></i> Email Us:
                                            <span>consultant@alliedipfirm.com</a></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END:: MAIN CONTAINER -->
    </main>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script defer src="assets/js/payment.js"></script>
    <script defer src="assets/js/cc.js"></script>
    
    <!-- recaptcha script -->
    <script src="https://www.google.com/recaptcha/api.js?render=6LfLgMMhAAAAAPTfbvvJjuSgmIFFqugSPR3kTJUC"></script>
<!-- Start of  Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=7463533f-519c-4755-820e-b4f7e8bdbc07"> </script>
<!-- End of  Zendesk Widget script -->

<!-- modal terms and conditions -->
<div class="modal" tabindex="-1" role="dialog" id="terms-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Terms & Conditions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closemodal('terms-modal')">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="popup terms">
                <p class="bold">By continuing forward with the Allied IP Firm (the “Website”), you agree to all of the following terms and conditions as a binding agreement between you and alliedipfirm.com and Allied IP Firm, LLC (referred to as “we”, “us” or “our”). This Agreement also assimilates our Privacy Policy as is set forth at an extensive length herein. If you do not see yourself agreeing to these terms and conditions, kindly refrain from using the Website</p>
                <p>We are the providers of general information and updates related to and concerning trademarks, and provide a website that allows you to prepare and file trademarks. We are not a law entity. We do not provide, and are not qualified to provide you with legal advice.</p>
                <p><strong>THIS AGREEMENT BELOW IS INCLUSIVE OF A BINDING ARBITRATION PROVISION GOVERNED BY THE FEDERAL ARBITRATION ACT AND A WAIVER OF CLASS ACTIONS.</strong></p>
                <p><strong>THE CONDITIONS FOR THE USAGE OF OUR WEBSITE</strong></p>
                <p>You are allowed to use this Website on the pre-condition that you agree that you:</p>
                <p>Will abide by these Terms of Usage;</p>
                <p>You are 18 years of age or older;</p>
                <p>Will not replicate or redistribute any portion of this Website in any manner without legally seeking our prior written consent;</p>
                <p>Will provide correct and non-falsified information when creating a new account, submitting and uploading content, or registering for our website;</p>
                <p>Will strictly not allow any other personnel to access this Website utilizing your User ID;</p>
                <p>Are solely and individually responsible for your User ID, and all of the activity that takes place through your User ID;</p>
                <p>Will not utilize the Website for any commercial or merchandizing purposes other than the strictly specific commercial activities contained wherein on the Website</p>
                <p>Will not use the Website to obtain any form of data or personal information on any of the other users, or to solicit other users, merchants, or advertisers;</p>
                <p>Are solely and individually responsible for all content shared, posted, and provided by your ID on the Website, including, but not restricted to discussion posts, your biodata, external links, videos, and photographs including the ownership of any licenses or rights necessary to use the content creations of others and will not submit any copyrighted materials or work subject to other’s proprietary rights;</p>
                <p>Allow the Website and other users a non-exclusive license to read your materials and to use, reproduce, distribute, prepare derivative works of and/or display any materials provided by you;</p>
                <p>And agree that we have the complete authority to remove any and/or all of your content and suspend your account with or without any prior notification.</p>
                <h4 class="sub-heading">YOUR ACCOUNT PROFILE</h4>
                <p class="">To be granted access to certain sections of the Website, we might oblige you to create an account and/or profile. All of the information provided by you must be accurate, true, non-falsified, and you agree to maintain said information frequently updated. Any individual whose privilege to use the Website was previously revoked by the executive authority is not allowed to register for another profile or account, nor can they use someone else’s profile or account to use the site or create an account on their behalf.</p>
                <p>Because the communal sharing and collusion of User IDs is strictly not allowed, we shall presume that the log-ins to the Website through your User ID are, in fact, being performed by you. Regardless of the circumstances, you stand wholly responsible for any and all access to the Website by individuals using your User ID. If you believe your User ID is being maliciously used without your informed authorization, notify us immediately to have us on board at <strong>consultant@alliedipfirm.com</strong></p>
                <h4 class="sub-heading">YOUR CONTENT</h4>
                <p class="">We hold the complete rights to authorize the publishing of various contents provided by you (hereinafter “User Generated Content or UGC”). You abide by this agreement to not post or use any UGC in any way that:</p>
                <p>Infringes upon the copyright, trademark, trade secret, or other cognitive property or proprietary rights of others;</p>
                <p>Exploits the privacy, publicity, legal, or other rights of third parties;</p>
                <p>Is against the law, untrue, not accurate, derogatory, discriminatory, hateful, un-sanctimonious, libelous, pornographic or sexually implicit and/or explicit, obscene, abusive, threatening, harassing, or propagates conduct that would be considered incriminating, giving rise to civil disruption and liability, violates any law, or is in any other format inappropriate, as decided by us in our sole discretion; or</p>
                <p>Is capable of damaging or harming the reputation of our company, parent company, sister companies, affiliates, advertisers, merchants, or other parties.</p>
                <p>We are not required in any way to withdraw any UGC that may violate one or more of these limitations. We may, but are not committed to, remove any UGC in violations of these terms, terminate user accounts or take other actions. We are not to be held accountable for any loss caused to you by UGC.</p>
                <h4 class="sub-heading">YOUR CONDUCT</h4>
                <p><strong>By using the Website, you agree not to:</strong></p>
                <p>Initiate or participate in the promotion of any illegal activities;</p>
                <p>Make any attempts to reverse engineer or intrude in any way with the operation of the Website or otherwise endeavor to derive the source code of the software (including the tools, methods, processes, and infrastructure);</p>
                <p>Device schemes to gain access to codified portions of the Website;</p>
                <p>Use the Website to generate unsolicited email marketing schemes or spamming;</p>
                <p>Use any automated or manual process to surf or unearth codified data from the Website;</p>
                <p>Interfere in any way with the regular operation of the Website; or</p>
                <p>Masquerade as another user.</p>
                <h4 class="sub-heading">LINKS TO OTHER SITES</h4>
                <p class="">We may (or may not) have associations with third-party websites that are not possessed, regulated, or operated by us. We do not presume any responsibility for the content, privacy policies, or practices of any other websites or their owners. Do not suppose that we are advertising or advocating for any other websites, products, or services, based on the mere integration of a link to another website.</p>
                <h4 class="sub-heading">TERMINATION</h4>
                <p class="">We hold the complete authority to make adjustments to, or terminate the Website or any of the services furnished herein at any time without prior notice. We also hold the right to terminate this Agreement at our election and for any reason, without prior announced notification. This Agreement will automatically terminate if, in our sole judiciousness, you violate any of the terms and conditions drafted below. A termination will result in the immediate suspension of access to the Website. The Disclaimers of Warranty and Limitation of Liability, Indemnity, Dispute Resolution sections, and all terms and conditions related to your Content shall sustain the termination of this Agreement.</p>
                <h4 class="sub-heading">DISPLAY OF DATA AND SEARCH</h4>
                <p>We are dependent upon State records and may exhibit them on this website. While we continually attempt to make use of the latest information available, we cannot guarantee its accuracy, reliability, or timeliness.</p>
                <h4 class="sub-heading"> CALENDAR REMINDERS</h4>
                <p>As a significant segment of our services, we may offer reminders or notifications about upcoming and fast approaching deadlines that may apply to your trademark. These notifications are only for informational purposes and are the general standards applicable to most trademarks. It is advised that you consult a licensed attorney regarding applicable deadlines to your particular situation, as individualized situations have guidelines more specific than general ones. Please do not presume that the automated notifications are legal frameworks. We do not offer any form of legal advice or legal interpretation on specific situations.</p>
                <h4 class="sub-heading">CREATION OF FORMS AND DISCLAIMER</h4>
                <p>Please comprehend the distinction: We are a technology platform that aids in the creation of forms and not a law entity or legal service provider. In the event that you purchase one or more than one package that is inclusive of cease and desist, assignment of trademark letters, or other forms, you will be eligible to a form document that is inclusive of the information provided by you or from your uploaded files. We are not a legal alternative, making us ineligible for proving you with legal suggestions. Our customer service representatives are not required to answer any of your legal queries, nor will they entertain any law related conversations. Any information transmissions between yourself and our customer service representatives are not monitored and thus, you should refrain from sharing any confidential information with them. We provide assistance in the preparation of your trademark application but cannot file it for you as your counsel of record. We are not responsible for providing you with any legal advice related to your particular trademark.</p>
                <p>We may voluntarily, but by no contractual binding are required to review the data you provide us with for completeness, fraudulence, or administrative errors. Under no specified instances are we responsible for reviewing your provided answers for legal accuracy, legal counsel, advice, or opinions. We do not review your data for any legal purposes, nor do we provide legal recommendations about legal rights, remedies, defenses, options, selection of forms, or strategies, or apply the law to the facts of your particular case.</p>
                <p>In the event that you are under the assumption that you have received any legal assistance or consultancy from us, you will not make your purchase. You accept and understand that your purchase, download, or usage of a form document is not a legal action and is devoid of any legal advice. Additionally, you accept and understand that each form, and all applicable instructions or guiding texts are not designed to meet your individual needs.</p>
                <p><strong>KINDLY NOTE THAT WE RETAIN YOUR CREDIT CARD DATA IN ORDER TO BE ABLE TO PAY THE STATE FILING FEE ASSOCIATED WITH YOUR ORDER. WE RETAIN YOUR CREDIT CARD INFORMATION ONLY AFTER YOU ARE SATISFIED AND ABLE TO APPROVE THE APPLICATION, WITH THE COST OF THE FILING FEE BROUGHT INTO YOUR COGNIZANCE BEFORE BEING FILED.</strong></p>
                <p>We provide you with a draft of the application for your review. If you do not respond with timeliness, you authorize us to sign your name to the application, file it as provided in the draft, and to collect from you the governmental filing fee of $350 per class at that time.</p>
                <h4 class="sub-heading">SEARCH SERVICES</h4>
                <p>If you utilize our search services, we use commercially and professionally reasonable methods to identify marks that may be tallied with the ones you seek to use. We, however, cannot guarantee that your mark will make it through and be approved even if you use our search services. There may be a number of reasons the USPTO rejects your mark and there are circumstances where an automated search may not be able to identify a mark the USPTO qualifies as a reason for rejection.</p>
                <p>Similarly, when your order is inclusive of common law mark searches, we use commercially justifiable methods to identify marks that may be an equal match to the ones you seek to use. We, however, do not guarantee that your mark will be absent of or prevailing all claims or challenges made by holders of common law rights to all marks. There are amongst some of the instances where an automated search may not be able to identify a regular law mark that may be similar to your mark.</p>
                <p>The aim of the search report is to give you with the necessary marks to satisfy the parameters identified for the specific kind of search you use. It is not designed to be a legal framework or legal advice as to whether your proposed mark will be dismissed, or whether it would be considered resembling to another mark. You may want to seek the counsel of an attorney regarding the outcomes of the search report we furnish you.</p>
                <p>Our Allied IP Firm, LLC federal trademark search reviews the USPTO database and is restricted to direct matches, phonetically similar, similar in terms of translation, or appearance by way of design.</p>
                <p>Our Allied IP Firm, LLC federal, government and common law search reviews the USPTO database, the databases of all 50 states, a business registry and the database of domain names. It is restricted to only direct matches, phonetically similar, similar in terms of translation, or appearance by way of design.</p>
                <p>Our Allied IP Firm, LLC global search reviews the USPTO database, the databases of all 50 states, a business registry, the database of domain names, the World Intellectual Property Organization (“WIPO”) database and the European Community database. It is restricted to direct matches, phonetically similar, or appearance by way of design.</p>
                <h4 class="sub-heading">TRADEMARK MONITORING SERVICES</h4>
                <p>Our trademark monitoring services assess the filing of new applications that are direct matches, phonetically similar, similar in terms of translation, or appearance by way of design to your marks as published in the Official Gazette of the USPTO and Allied IP Firm, LLC.</p>
                <h4 class="sub-heading">DISCLAIMERS OF WARRANTY AND LIMITATIONS OF LIABILITY</h4>
                <p>We provide the Website and related services "as is", “where is”, and "as available." We undertake no express and/or implied warranties or guarantees about the Website, and the goods and services described therein, or the Merchants and Advertisers. <strong>TO THE MAXIMUM EXTENT ALLOWED BY THE LAW, WE AND OUR OFFICERS, DIRECTORS, AGENTS, VENDORS, AND THE BUSINESSES WHO MARKET WITH US DISCLAIM ANY AND ALL EXPRESS OR IMPLIED WARRANTIES THAT THE WEBSITE AND SERVICES ARE MERCHANTABLE, OF ACCEPTABLE QUALITY, ACCURATE, SEASONABLE, OR FIT FOR A SPECIFIC PURPOSE OR DEMAND. WE IN NO FORM GUARANTEE THAT WE WILL MEET YOUR REQUIREMENTS, ARE ERROR-FREE, ACCURATE, RELIABLE, WITHOUT INTERRUPTION, OR AVAILABLE 24/7. WE MAKE NO GUARANTEE THAT YOU WILL BE ABLE TO ACCESS OR USE THE WEBSITE AT TIMES OR LOCATIONS OF YOUR CHOOSING.</strong></p>
                <p><strong>YOUR SOLE AND CUSTOMIZED SOLUTION FOR ANY DISPUTE OR CLAIM WITH US IS TO HALT USE OF THE WEBSITE. WE, OUR AFFILIATES, OFFICERS, DIRECTORS, AGENTS, VENDORS, AND MERCHANTS WHO MARKET HERE, SHALL NOT BE LIABLE FOR ANY INDIRECT, SPECIAL, INCIDENTAL, CONSEQUENTIAL OR EXEMPLARY DAMAGES THAT ARISE FROM YOUR USE OF, INABILITY TO USE, OR RELIANCE UPON THE WEBSITE IN ANY WAY. THESE EXCLUSIONS APPLY TO ANY CLAIMS FOR LOST PROFITS, LOST DATA, LOSS OF GOODWILL, WORK STOPPAGE, COMPUTER FAILURE OR MALFUNCTION, HARM, OR LOSS TO ANY OTHER EQUIPMENT, OR ANY OTHER COMMERCIAL DAMAGES OR LOSSES, EVEN IF WE KNEW OR SHOULD HAVE FORESEEN THE POSSIBILITY OF SUCH DAMAGES. IF ANY JURISDICTION DOES NOT PERMIT THE DISTINGUISHING OR THE LIMITATION OF LIABILITY FOR CONSEQUENTIAL OR INCIDENTAL DAMAGES, IN SUCH JURISDICTION, OUR LIABILITY, AND THE LIABILITY OF OUR AFFILIATES, OFFICERS, DIRECTORS, AGENTS, VENDORS, AND MERCHANTS WHO ADVERTISE HERE, SHALL BE LIMITED TO THE EXTENT GRANTED BY LAW.</strong></p>
                <p>In connection with the ongoing release, you hereby waive California Civil Code Section 1542 (and any similar provision in any other jurisdiction) which states: “A general release does not extend to claims which the creditor does not know or suspect to exist in his favor at the time of executing the release, which, if known by him must have materially affected his settlement with the debtor.”</p>
                <h4 class="sub-heading">Indemnity</h4>
                <p>You agree to defend, indemnify, and hold blameless us, our officers, directors, representatives, employees, and agents and all of our parent companies, affiliates, related companies, merchants, and their executives, officers, directors, representatives, employees and agents from and against any and all claims, damages, obligations, losses, liabilities, costs or debt, legal obligations, and expenses (including, but not limited to, reasonable attorney's fees) arising from: (i) your violation of any term of these Terms of Service; (ii) your violation of any third party right, including without restriction any copyright, property, privacy right, or any and all incorporeal or intellectual property rights; or (iii) any claim that any of your UGC causes harm to a third party.</p>
                <h4 class="sub-heading">Dispute Resolution</h4>
                <p>For the purposes of this Section, all references to "Allied IP Firm," "you," and "us" are inclusive of our respective subsidiaries, affiliates, agents, employees, business partners, predecessors in interest, successors, and assigns, as well as all authorized or unauthorized users or beneficiaries of services or products under these Terms or any prior agreements between us.</p>
                <p>In this Agreement, Dispute is described as “any dispute, claim or controversy between you and Allied IP Firm, LLC, its members, officers, directors, agents, parent companies and vendors that arises out of or relates to this Agreement or use of the Site or Service, or otherwise regarding any aspect of your relationship with Allied IP Firm that has accrued or may thereafter accrue, whether based in contract, statute (including, but not limited to, any consumer protection statutes, regulation, ordinance, tort (including, but not limited to, fraud, misrepresentation, fraudulent inducement, negligence or any other intentional tort), or any other legal or equitable theory.”</p>
                <p>The un-predictiveness of any Disputes is governed by the Federal Arbitration Act and not any state laws applicable to arbitrations. Regarding the substantive and significant law of any Disputes, to the optimal extent authorized by law, the laws of the State of California govern the non-arbitration related interpretation of this Agreement and the substantive law of any Dispute, notwithstanding of clashes of laws and principles.</p>
                <p>Arbitration. Any Dispute shall be CONCLUSIVELY and EXCLUSIVELY solved by bonding individual arbitration conducted by the American Arbitration Association (“AAA”) under its Consumer Arbitration Rules. This arbitration agreement is made pursuant to a transaction involving interstate commerce, and shall be governed by the Federal Arbitration Act (9 U.S.C. 1-16).</p>
                <p>ARBITRATION OF YOUR CLAIM IS COMPULSORY AND IRREVOCABLE. NEITHER PARTY WILL HAVE THE RIGHT TO LITIGATE THAT CLAIM THROUGH A COURT. IN ARBITRATION, NEITHER PARTY WILL HAVE THE RIGHT TO A JURY TRIAL OR TO ENGAGE IN DISCOVERY, EXCEPT AS PROVIDED FOR IN THE AAA CODE OF PROCEDURE.</p>
                <p>All regulations as to the scope, interpretation, enforceability, applicableness, and validity of this Agreement shall be made final solely by the arbitrator, which award shall be contractually binding and final. Judgment on the arbitration award may be entered in any court having jurisdiction. This arbitration provision shall survive: i) the termination of the Agreement; or ii) the bankruptcy of any party. If any portion of this arbitration provision is declared void, invalid or unenforceable, the remaining sections shall remain enforceable.</p>
                <p>NO CLASS ACTION, OR OTHER REPRESENTATIVE ACTION OR PRIVATE ATTORNEY GENERAL ACTION OR JOINDER OR CONSOLIDATION OF ANY CLAIM WITH A CLAIM OF ANOTHER PERSON OR CLASS OF CLAIMANTS SHALL BE ALLOWABLE.</p>
                <p>THE RIGHT TO OPT OUT OF BINDING ARBITRATION AND CLASS ACTION WAIVER WITHIN 30 DAYS. IF YOU DO NOT WISH TO BE BOUND BY THE BINDING ARBITRATION AND CLASS ACTION WAIVER IN THIS SECTION, YOU ARE REQUIRED TO NOTIFY US IN WRITING WITHIN 30 DAYS OF THE DATE THAT YOU ACCEPT THIS AGREEMENT. YOUR WRITTEN NOTIFICATION MUST BE E-MAILED TO Allied IP Firm, LLC, consultant@alliedipfirm.com WITH THE SUBJECT LINE “OPT-OUT’ AND INCLUDE: (1) YOUR NAME, (2) YOUR ADDRESS, AND (4) A CLEAR STATEMENT THAT YOU DO NOT WISH TO RESOLVE DISPUTES WITH US THROUGH ARBITRATION.</p>
                <p>Any arbitration will be administered by the AAA under its Commercial Arbitration Rules. If the value of the dispute is $75,000 or less, its Supplementary Procedures for Consumer-Related Disputes shall also be applicable. On disputes involving $75,000 or less, we will punctually reimburse your filing fees and pay the AAA's and arbitrator’s fees and expenses. You agree to start arbitration only in your county of permanent residence or in California, US. We agree to commence arbitration only in your county of residence. You may request a telephonic or in-person hearing by following the AAA rules. In a dispute involving $10,000 or less, any hearing will be telephonic unless the arbitrator finds good cause to hold an in-person hearing instead. The arbitrator may award the same damages to you individually as a court could. The arbitrator may award declaratory or injunctive relief only to you individually, and only to the extent required to satisfy your individual claim. Nothing herein restricts Allied IP Firm, LLC from demanding the arbitrator to award Allied IP Firm, LLC all costs of the arbitration including any Administrative Fees paid on your behalf.</p>
                <p>If the Dispute is not arbitrated by the choice of the parties or a court does not compel arbitration if either party elects to arbitrate for whatever reason, the Dispute will be decided by a court without any right by either party to a trial by jury. Any such court proceeding, including any efforts to compel arbitration or initially filed lawsuits that arise out of or relate to this Agreement or use of the Sites shall be resolved exclusively by a court of proficient jurisdiction located within California.</p>
                <h4 class="sub-heading">Intellectual Property</h4>
                <p>We, or people from whom we obtained a license, retain ownership of all intellectual property rights of any kind affiliated with the Website, inclusive of all applicable trademarks, copyrights, and other proprietary rights such as trade secrets. Through the use of this Website pursuant to this Agreement, you have a privileged and restricted right to use the Website, but by no means are we granting any license to you under any of those intellectual property rights. We hold all rights that are not expressly granted to you in this Agreement. You may print limited numbers of one or more pages from the Website for your personal use.</p>
                <p>We retain, to the highest lengths possible, all ownership, without limitation, of all the text, software, scripts, graphics, photos, sounds, interactive features and the trademarks, service marks and logos contained therein ("Marks") unless they are marks used by Merchants who have provided them to us for use on this Website. The Marks are owned or licensed to us, subject to copyright and other intellectual property rights under the law of the United States of America, the law of the dominion where you reside, and international conventions. All content on the Website provided by us is provided to you “AS IS” for your information and personal use only and may not be used, copied, reproduced, modified, distributed, transmitted, broadcast, displayed, sold, licensed, plagiarized, or otherwise exploited for any other purposes whatsoever without the prior written and drafted consent of the respective owners. We reserve all rights not expressly granted in and to the Website.</p>
                <p>You retain any intellectual property rights in any copyrighted materials and trademarks that are contained in UGC that you post to the Website. You grant us an irrevocable, perpetual, non-exclusive, royalty-free, fully paid, worldwide license, with rights to sublicense through multiple levels of sub licensees, to reproduce, make derivative works of, translate, distribute, publicly perform and publicly display in any form or medium, whether now known or later developed, make, use, sell, import, offer for sale, otherwise commercially exploit and exercise any and all such rights, under any and all of your intellectual property rights related to the UGC in any manner decided by us.</p>
                <h4 class="sub-heading">Copyright Notice</h4>
                <p>If you believe we have infringed on your copyrights, please submit a notification pursuant to the Digital Millennium Copyright Act (17 U.S.C. § 512(c)(3) in writing to consultant@alliedipfirm.com or to the copyright agent on file with the U.S. Copyright Office with the Subject: “copyright notice.” Your notice needs to include: (1) A physical or electronic signature of a person authorized to act on behalf of the owner of an exclusive right that is reportedly contravened; (2) Identification of the copyrighted work claimed to have been infringed, or, if multiple copyrighted works at a single online site are covered by a single notification, a representative list of such works at that site; (3) Identification of the material that is claimed to be infringing or to be the subject of infringing activity and that is to be removed or access to which is to be disabled and information reasonably sufficient to permit the service provider to locate the material; (4) Information reasonably sufficient to permit the service provider to contact you, such as an address, telephone number, and, if available, an electronic mail; (5) A statement that you have affable sense of faith and belief that use of the material in the manner complained of is not authorized by the copyright owner, its agent, or the law; and (6) A statement that the information in the notification is accurate, and under penalty of perjury, that you are authorized to act on behalf of the owner of an exclusive right that is allegedly infringed.</p>
                <h4 class="sub-heading">Entire Agreement</h4>
                <p>This Agreement, including the Privacy Policy, constitutes the entire agreement of the parties with respect to the subject matter hereof. No waiver by either party of any breach or default hereunder is a waiver of any preceding or ensuing breach or default.</p>
                <h4 class="sub-heading">Modifications to the Agreement</h4>
                <p>We reserve the right at all times to discontinue or alter any of these terms and/or our Privacy Policy as we deem necessary or desirable. Such changes may include, among other things, the adding of certain fees or charges. We may, but are not necessarily obligated to notify you via email of any substantial changes, by sending you an e-mail to the e-mail address that is registered with your account and/or by posting notice of the change on the Website. Any changes to this Agreement will be effective upon the advancing of our transmittal of an e-mail notice to you or our posting of notice of the changes on our Website. We suggest you, therefore, re-read this section of our Website from time to time to stay informed of any such changes. Use of the Website by you after such notice shall be deemed to constitute acceptance by you of such modifications.</p>
                <h4 class="sub-heading">Authorization</h4>
                <p>By submitting an order, you acknowledge that you are giving us the authority to list ourselves, along with you, as a recipient of correspondence from the USPTO related to your trademarks. You may alter this at any time, but including us allows us to better serve you and may prevent us from providing certain services such as monitoring and calendaring.</p>
                <h4 class="sub-heading">Refund Policy</h4>
                <p>The Allied IP Firm strives to meet the trademark needs of our customers in a professional, cordial, and effective manner. We want every single customer to be 100% satisfied, so we will work with any customer who has any questions or concerns about their filings. Our customer service team is made up of dedicated and courteous trademark representatives with one goal - to meet each client's needs in a friendly, caring, and efficient manner. If you do not think we have met this goal, let us know and we will be happy to make every effort to resolve the issues to your satisfaction. You can send us an email at <strong>consultant@alliedipfirm.com or call us toll free at (800) 291-3781.</strong></p>
                <p>If we make any mistakes in your filing, we will do our level best to admit it and make the necessary improvements needed to fix the correction as soon as we can at no additional cost to you. Please note the Allied IP Firm fees and all government levied fees involved in your filing services are non-refundable. The USPTO may experience delays or deny your application without any fault of the Allied IP Firm. These issues are beyond our control and will not be the basis for a refund.</p>
                <p>If you decide that you want a refund, all such requests must be submitted before the initial trademark search clearance report is conducted. Your refund will be issued in the same form that it was received. For example, if the payment to Allied IP Firm, LLC was made by credit card then the refund will be issued to the same credit card used to make the payment. However, if you choose, you may request to receive a credit for future Allied IP Firm, LLC purchases/payments instead of a refund.</p>
                <h4 class="sub-heading">Miscellaneous</h4>
                <p>We hold the total rights, but are not necessitated, to restrict the sales of our products or services to any person, geographic region, or jurisdiction. We may exercise this right on a case-by-case basis. All descriptions of products or product pricing are subject to change at any time without notice, at our sole decision making. We maintain the rights to discontinue any product at any time without any prior notice. Any offer for any product or service made on this site is nullified where prohibited.</p>
                <p>The section headings used herein are for the sake of convenience only and shall be of no legal force or effect. If any provision of this Agreement is held lawfully invalid by a court of competent jurisdiction, such invalidity shall not have any effect on the enforceability of any other provisions contained in this Agreement, and the remaining portions of this Agreement shall continue function in full force and effect. There are no third-party beneficiaries of this Agreement. You may not assign this Agreement or your rights and obligations hereunder, in completeness or partially, to any third party without our prior written consent, and any attempt by you to do so will be invalid.</p>
                
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="acceptTerms('terms-modal')">Agree</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closemodal('terms-modal')">Close</button>
      </div>
    </div>
  </div>
</div>
</body>

</html>