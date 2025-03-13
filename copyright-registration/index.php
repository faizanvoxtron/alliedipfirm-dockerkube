<?php
define("NITROPACK_HOME_URL", "https://alliedipfirm.com/copyright-registration/"); 
define("NITROPACK_SITE_ID", "vbiOqOrHwQolvCvCmVePTHJnBZvUkKxC"); 
define("NITROPACK_SITE_SECRET", "LRerHH73ejGYtGn20p1a5iPxa1qS3mF5NDjVKtqZvi5u5PZ3S80DDhOQ22LxDe71"); 
include_once "nitropack-sdk/bootstrap.php";

?>
<?php
require_once('ip/getIpInfo.php');
$ipdetails = getInfo();
$pageurl = $_SERVER['REQUEST_URI'];
$website = $_SERVER['HTTP_HOST'];
$ip = $ipdetails['ip'];
$city = $ipdetails['city'];
$region = $ipdetails['region'];
$country = $ipdetails['country'];
$organization = $ipdetails['organization'];
$latitude = $ipdetails['latitude'];
$longitude = $ipdetails['longitude'];
$timezone = $ipdetails['timezone'];
$postal = $ipdetails['postal_code'];
$clientIP = $_SERVER['HTTP_CLIENT_IP']
    ?? $_SERVER["HTTP_CF_CONNECTING_IP"] # when behind cloudflare
    ?? $_SERVER['HTTP_X_FORWARDED']
    ?? $_SERVER['HTTP_X_FORWARDED_FOR']
    ?? $_SERVER['HTTP_FORWARDED']
    ?? $_SERVER['HTTP_FORWARDED_FOR']
    ?? $_SERVER['REMOTE_ADDR']
    ?? '0.0.0.0';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/all.css">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="preload" rel="stylesheet" type="text/css" href="css/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" rel="stylesheet" type="text/css" href="css/style-web.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" rel="stylesheet" type="text/css" href="css/responsive.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" rel="stylesheet" type="text/css" href="css/custom.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="font-awesome/css/font-awesome.min.css" rel="stylesheet" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Copyright Registration Services | Allied IP Firm</title>
    
    <!-- Start of  Zendesk Widget script -->
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=7463533f-519c-4755-820e-b4f7e8bdbc07"> </script>
    <!-- End of  Zendesk Widget script -->
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="" class="logo">
                        <img src="images/logo-white.svg" alt="Allied IP FIrm">
                    </a>
                </div>
                <div class="col-md-9">
                    <ul>
                        <li>
                            <img src="images/head-icon1.png" alt="">
                            <a href="tel:(800) 291-3781">(800) 291-3781</a>
                        </li>
                        <li>
                            <img src="images/head-icon2.png" alt="">
                            <a href="mailto:consultant@alliedipfirm.com">consultant@alliedipfirm.com</a>
                        </li>
                        <li>
                            <a href="javascript:" class="btn btn-blue various" data-fancybox="" title="COPYRIGHT IT NOW" name="99" data-src="#popupform">COPYRIGHT IT NOW</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <section class="our-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>HURRY UP! COPYRIGHT REGISTRATION STARTING <br> FROM <span>$99 ONLY!</span> <span style="color: white; font-size: 12px;">+USCO Filing Fee</span></h1>
                    <h2>PROTECT YOUR BRAND WITH AllIED IP FIRM REGISTRATION IN 180 NATIONS</h2>
                    <p>Filing your Allied IP Firm application is critical because it will help you stand apart from others and secure you by improving your legitimate limits. Get your USCO Allied IP Firm now!</p>

                    <div class="inline-btns">
                        <a href="javascript:" class="btn btn-blue chat">Talk to us</a>
                        <a href="javascript:" class="btn btn-yellow various" data-fancybox="" title="Get Your Discount Coupon" data-src="#popupform">Get Your Discount Coupon </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner-form">
                        <form class="banner-form-validate" id="bannerForm" method="POST" action="javascript:lead('bannerForm');">
                            <input type="hidden" id="referer" name="referer" value="google">
                            <input type="hidden" id="price" name="price" value="$99">
                            <input type="hidden" id="title" name="package" value="Basic Package">
                            <input type="hidden" name="page" value="<?php echo $website . $pageurl; ?>">
                            <input type="hidden" name="ip" value="<?php echo $ip; ?>">
                            <input type="hidden" name="realip" value="<?php echo $clientIP; ?>">
                            <input type="hidden" name="org" value="<?php echo $organization; ?>">
                            <input type="hidden" name="country" value="<?php echo $country; ?>">
                            <input type="hidden" name="region" value="<?php echo $region; ?>">
                            <input type="hidden" name="city" value="<?php echo $city; ?>">
                            <input type="hidden" name="latitude" value="<?php echo $latitude; ?>">
                            <input type="hidden" name="longitude" value="<?php echo $longitude; ?>">
                            <input type="hidden" name="timezone" value="<?php echo $timezone; ?>">
                            <input type="hidden" name="postal" value="<?php echo $postal; ?>">
                            <div class="head">
                                <h3>Secure your <small>Content NOW!</small> <br>
                                    <strong>Save Upto 50% OFF</strong>
                                </h3>
                                <img src="images/limited-offer.png" alt="">
                            </div>
                            <input type="text" class="required" required="" placeholder="Your Name *" name="name">
                            <input type="email" class="required email" required="" placeholder="Email Address *" name="email">
                            <input type="text" class="required phone" required="" placeholder="Phone No *" name="phone" maxlength=10>
                            <textarea name="message" class="required" required="" placeholder="What you are looking to copyright (Artistic Work, Image, Lyrics or ETC. "></textarea>
                            <!-- <p class="form_tagline"> <input type="checkbox" name="newsletter"> <i class="fa fa-check" aria-hidden="true"></i> To receive our weekly Newsletter/SMS and offers check here. You can unsubscribe at any time.</p> -->
                            <input type="submit" class="btn btn-blue" value="Avail 50% Off Deal">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-client">
        <div class="container">
            <ul>
                <li><img src="images/client-1.png" alt=""><span>Customer-centric <br> Approach</span></li>
                <li><img src="images/client-2.png" alt=""><span>Cost-Effective <br> Packages</span></li>
                <li><img src="images/client-3.png" alt=""><span>Professional <br> Consultation</span></li>
            </ul>
        </div>
    </section>
    <section class="our-work">
        <div class="container">
            <h2>HOW COPYRIGHT WORKS WITH ALLIED IP FIRM</h2>
            <p>Simple and quick process to protect your content and intellectual property</p>
            <div class="row">
                <div class="col-sm box">
                    <img src="images/engine-work-1.png" alt="">
                    <h5><span>01</span> Complete our online questionnaire</h5>
                    <p>We collaborate with you on ground levels and assist well with the enrollment processes. It takes a few minutes to start your determination cycle.</p>
                </div>
                <div class="col-sm box">
                    <img src="images/engine-work-2.png" alt="">
                    <h5><span>02</span> Preparing your Application</h5>
                    <p>We search USCO Allied IP Firm and identify any conflict or struggle you may find in the future. Once we get a clear lead from the database, we take steps forward towards filing a Allied IP Firm.</p>
                </div>
                <div class="col-sm box">
                    <img src="images/engine-work-3.png" alt="">
                    <h5><span>03</span> APPLICATION FILING WITH USCO</h5>
                    <p>Your application process with the US Patent and Allied IP Firm Office (USCO) begins with completing our checklist and resolving all archives.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="trademark-registation text-center">
        <div class="container">
            <h2>Endeavor The Ownership For Your content! <br> Tell The World That You Own A Company!</h2>
            <ul>
                <li>
                    <p>1000+ <span>Businesses Trademarked</span></p>
                </li>
                <li>
                    <p>1500+ <span>Businesses Consulted</span></p>
                </li>
                <li>
                    <p>90% <span>Success Ratio</span></p>
                </li>
            </ul>
            <a href="javascript:" class="btn btn-yellow various" data-fancybox="" title="Let’s Start, Content Owner?" name="99" data-src="#popupform">Let’s Start, Content Owner?</a>
        </div>
    </section>
    <section class="what-can-copyright">
        <div class="container">
            <h2>What Can I Copyright?</h2>
            <p>Allied IP Firm helps to protect your original work that you have created after putting your ideas, time, effort and money. We file your registration for copyright for all kinds of intellectual property:</p>
            <ul>
                <li>Works of Art</li>
                <li>Literary Works</li>
                <li>Photos</li>
                <li>Audio or Sound Recordings</li>
                <li>Musical Composition or Lyrics</li>
                <li>Songs</li>
                <li>Websites</li>
                <li>Maps</li>
                <li>Motion Pictures</li>
                <li>TV Shows</li>
                <li>Scripts/Screenplays</li>
                <li>Videos</li>
                <li>Animations</li>
                <li>Technical Drawings</li>
                <li>Visual Arts</li>
                <li>Software and Programs</li>
            </ul>
        </div>
    </section>
    <section class="main_content">
        <div class="container">
            <section class="our-packages">
                <div class="text-center">
                    <h2>Trust, Efficiency, Affordability, <br> Allied IP Firm Serves It With All!</h2>
                    <p>We are here to shield you against all the odds, Browse through our affordable plans and packages and begin with the one that suits your needs.</p>
                </div>
                <div class="price-table">
                    <div class="container">
                        <div class="row text-center justify-content-center">
                            <div class="col-md-4 aos-init aos-animate" data-aos="flip-up" data-aos-duration="1000">

                                <div class="pricing-box">

                                    <h3>Basic Package</h3>

                                    <div class="pricing-amout">

                                        <span>Starting at</span>

                                        <h4>$99</h4>

                                        <span>+ USCO Federal Filing Fee</span>

                                    </div>

                                    <div class="pricing-content">

                                        <ul>

                                            <li><strong>Professional Preparation</strong> of your federal copyright application including a review by the copyright team for accuracy, completeness and common mistakes.</li>

                                            <li><strong>Federal E-Filing</strong> Electronic filing of your application with the U.S Copyright Office with no need to wait for mail or dealing with paper files</li>

                                            <li><strong>Certificate of Registration</strong> of your federal copyright application including a review by the copyright team for accuracy, completeness and common mistakes.</li>

                                        </ul>

                                    </div>
                                    <a href="javascript:;" name="99" title="Basic Pack For Only $99" class="btn btn-green various" data-fancybox="" data-src="#popupform" onclick="priceChange('Basic Package','99');">get started</a>
                                </div>

                            </div>
                            <div class="col-md-4 aos-init aos-animate" data-aos="flip-up" data-aos-duration="1000">

                                <div class="pricing-box pricing-box-orange">

                                    <h3>Deluxe Package</h3>

                                    <div class="pricing-amout">

                                        <span>Starting at</span>

                                        <h4>$198</h4>

                                        <span>+ USCO Federal Filing Fee</span>

                                    </div>

                                    <div class="pricing-content">

                                        <p>Includes the everything from the Basic Package PLUS:</p>

                                        <ul>

                                            <li><strong>Cease &amp; Desist Letter</strong> A customer-specific form you can further customize if someone is infringing on your copyright.</li>

                                            <li><strong>Transfer/Assignment</strong> Custom assignment template. If you need to sell or otherwise convey your copyright, you have access to your pre-filled in template that you can further customize.</li>

                                            <li><strong>24-hour Expedited Processing</strong> of the preparation of your copyright application. Normal processing time is 5 business days in our Basic package.</li>

                                        </ul>

                                    </div>
                                    <a href="javascript:;" name="99" title="Basic Pack For Only $99" class="btn btn-green various" data-fancybox="" data-src="#popupform" onclick="priceChange('Deluxe Package','198');">get started</a>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <section class="cform-section">
        <div class="container">
            <div class="text-center">
                <h2>We Are Here To Answer Your Queries! </h2>
                <p>Reach out to us whenever you want to. You have a copyright application-related question, we are obliged to answer. Let’s talk for free.</p>
            </div>
            <form class="footer-vld-frm" id="footerForm" method="POST" action="javascript:lead('footerForm');">
                <input type="hidden" id="referer" name="referer" value="google">
                <input type="hidden" id="price" name="price" value="$99">
                <input type="hidden" id="title" name="package" value="Basic Package">
                <input type="hidden" name="page" value="<?php echo $website . $pageurl; ?>">
                <input type="hidden" name="ip" value="<?php echo $ip; ?>">
                <input type="hidden" name="realip" value="<?php echo $clientIP; ?>">
                <input type="hidden" name="org" value="<?php echo $organization; ?>">
                <input type="hidden" name="country" value="<?php echo $country; ?>">
                <input type="hidden" name="region" value="<?php echo $region; ?>">
                <input type="hidden" name="city" value="<?php echo $city; ?>">
                <input type="hidden" name="latitude" value="<?php echo $latitude; ?>">
                <input type="hidden" name="longitude" value="<?php echo $longitude; ?>">
                <input type="hidden" name="timezone" value="<?php echo $timezone; ?>">
                <input type="hidden" name="postal" value="<?php echo $postal; ?>">
                <ul>
                    <li><input type="text" name="name" class="required" required="" placeholder="Name"></li>
                    <li><input type="email" name="email" class="required email" required="" placeholder="Email Address"></li>
                    <li><input type="text" name="phone" class="required number" required="" placeholder="Phone No." maxlength=10></li>
                    <li class="full-li"><textarea autocomplete="nope" name="message" class="required" required="" placeholder="What you are looking to copyright (Artistic Work, Image, Lyrics or ETC)"></textarea>
                        <!-- <p class="form_tagline"> <input type="checkbox" name="newsletter"> <i class="fa fa-check" aria-hidden="true"></i> To receive our weekly Newsletter/SMS and offers check here. You can unsubscribe at any time.</p> -->
                    </li>
                    <li>
                        <input type="submit" class="btn btn-blue" name="submit" value="Submit">
                    </li>
                </ul>
            </form>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row disclaimer">
                <div class="col-md-12">
                    <p style="text-align: center;">Copyright © Allied IP Firm. All Rights Reserved 2023</p>
                </div>

            </div>
        </div>
    </footer>

    <div class="modal fade" id="overlay">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div style="display: none;" class="popupform" id="popupform">
                        <div class="modal-body">
                            <div class="popup-bann">
                                <img src="images/main-popop-img.png" alt="">
                            </div>
                            <div class="popup-content">
                                <h2>Activate your Copyright <br> Registration 50% Off Coupon</h2>
                                <!--<h3>& Get your Copyright for Only $<b class="pp_pr">99</b> </h3>-->
                                <form class="validate_popupform_writing" id="popupLead" method="POST" action="javascript:lead('popupLead');">
                                    <input type="hidden" id="referer" name="referer" value="google">
                                    <input type="hidden" id="price" name="price" value="$99">
                                    <input type="hidden" id="title" name="package" value="Basic Package">
                                    <input type="hidden" name="page" value="<?php echo $website . $pageurl; ?>">
                                    <input type="hidden" name="ip" value="<?php echo $ip; ?>">
                                    <input type="hidden" name="realip" value="<?php echo $clientIP; ?>">
                                    <input type="hidden" name="org" value="<?php echo $organization; ?>">
                                    <input type="hidden" name="country" value="<?php echo $country; ?>">
                                    <input type="hidden" name="region" value="<?php echo $region; ?>">
                                    <input type="hidden" name="city" value="<?php echo $city; ?>">
                                    <input type="hidden" name="latitude" value="<?php echo $latitude; ?>">
                                    <input type="hidden" name="longitude" value="<?php echo $longitude; ?>">
                                    <input type="hidden" name="timezone" value="<?php echo $timezone; ?>">
                                    <input type="hidden" name="postal" value="<?php echo $postal; ?>">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="required" required="" name="name" placeholder="Your Name">
                                            <input type="email" class="required email" required="" name="email" placeholder="Your Email">
                                            <input type="tel" class="required  number ftpn" required="" name="phone" minlength="7" maxlength="10" placeholder="Your Phone">
                                        </div>
                                        <div class="col-md-6">
                                            <textarea autocomplete="nope" name="message" class="required" required="" placeholder="What are you looking to protect? (e.g. Name, Logo and Slogan)"></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <!-- <p class="form_tagline">
                                                <input type="checkbox" name="newsletter">
                                                <i class="fa fa-check" aria-hidden="true"></i> To receive our weekly Newsletter/SMS and offers check here. You can unsubscribe at any time.
                                            </p> -->
                                            <input type="submit" name="send_data" value="Submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/libs.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
    <script type="text/javascript" src="js/isotype.js"></script>
    <script type="text/javascript" src="js/isotypefunction.js"></script>
    <script type="text/javascript" src="js/script.js?ver=1.0"></script>
    <!-- <script>
        $(document).ready(function() {
            setTimeout(function() {
                $('#overlay').modal('show');
            }, 9000);
        });
    </script> -->
    <script type="text/javascript">
        window._mfq = window._mfq || [];
        (function() {
            var mf = document.createElement("script");
            mf.type = "text/javascript";
            mf.defer = true;
            mf.src = "//cdn.mouseflow.com/projects/784d5a41-2e6d-4d7c-b08a-677d91661b99.js";
            document.getElementsByTagName("head")[0].appendChild(mf);
        })();
    </script>
    <script>
    zE(function() {
        $zopim.livechat.setOnUnreadMsgs(function(numUnread){
     if(numUnread > 0 && !$zopim.livechat.window.getDisplay()) {
      $zopim.livechat.window.show();
    }
  })
});
</script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LfLgMMhAAAAAPTfbvvJjuSgmIFFqugSPR3kTJUC"></script>
    
    <script>
    jQuery(document).ready(function(){

setTimeout(function(){

     //var tag_new = jQuery("template").eq(38).attr("id");
     var tag_new = jQuery("template").last().attr("id");
     console.log(tag_new);

     //alert(tag_new);
     jQuery("#" + tag_new).css("display", "none");
     jQuery("#" + tag_new).next().next().css("display", "none");
}, 100);

});
</script>
</body>

</html>