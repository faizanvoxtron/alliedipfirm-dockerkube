<?php 
	require_once('ip/getIpInfo.php');
	$ipdetails = getInfo();
	$pageurl = $_SERVER['REQUEST_URI'];
	$website = $_SERVER['HTTP_HOST'];
	$ip = $ipdetails['ip'];
	$city = $ipdetails['city_name'];
	$region = $ipdetails['region_name'];
	$country = $ipdetails['country_name'];
	$organization = $ipdetails['as'];
	$latitude = $ipdetails['latitude'];
	$longitude = $ipdetails['longitude'];
	$timezone = $ipdetails['time_zone'];
	$postal = $ipdetails['zip_code'];
	$clientIP = $_SERVER['HTTP_CLIENT_IP']
    ?? $_SERVER["HTTP_CF_CONNECTING_IP"] # when behind cloudflare
    ?? $_SERVER['HTTP_X_FORWARDED']
    ?? $_SERVER['HTTP_X_FORWARDED_FOR']
    ?? $_SERVER['HTTP_FORWARDED']
    ?? $_SERVER['HTTP_FORWARDED_FOR']
    ?? $_SERVER['REMOTE_ADDR']
    ?? '0.0.0.0';

?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Trademark & Copyright Registration | Allied IP Firm</title>
    <meta name="robots" content="noindex">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="ip2loc" content="175.107.203.28">
    <link rel="stylesheet" href="assets/css/style-web.css?v=1.41">
    <link rel="stylesheet" href="assets/css/style.css?v=1.10">
    <link rel="stylesheet" href="assets/css/responsive.css?v=1.16">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/images/favicon.png">
    
    <!-- Start of  Zendesk Widget script -->
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=7463533f-519c-4755-820e-b4f7e8bdbc07"> </script>
    <!-- End of  Zendesk Widget script -->
    
</head>

<body>

    <section class="notice-imp"><i class="fas fa-exclamation-triangle"></i> We are not Accepting new Applications until further notice. Thank you, and stay safe!</section>

    <header>
        <div class="container">
            <div class="row">
                <div class="logodiv">
                     <a href="javascript:void(0)"><img class="logo-img" src="assets/images/logo-white.svg" alt="Logo" height="55px"></a>
                    
                </div>
            </div>
            <div class="contact-sec">
                <a href="tel:(800) 291-3781">(800) 291-3781</a> 
                
                <a href="#popupform" class="various grad-btn" name="39" data-fancybox="">Get Started Now</a>
            </div>
        </div>
    </header>
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    
                    <h1>Trademark Registration Starts <br>from <span style="color:#f6cf0b">$39 ONLY</span></h1>
                    <h2> <i class="fa fa-exclamation-triangle"></i>Get Your Business Protected.
Trademark Protection eliminates your rivals
from the competition.</h2>
                    <ul class="yel-list">
                        <li><img src="assets/images/yellow-tick.webp" alt="">Simple Sign-up Process</li>
                        <li><img src="assets/images/yellow-tick.webp" alt="">In-Depth & Insightful Database
Research</li>
                        <li><img src="assets/images/yellow-tick.webp" alt="">Filing & Submission of your application
with the USPTO</li>
                    </ul>
                    <a href="#popupform" class="various grad-btn" name="39" data-fancybox="">Activate your 50% Coupon
                        Now.</a>
                    <a href="javascript:;" class="chat grad-btn">Chat Now</a>
                    <div id="CountDownTimer" data-timer="5600"></div>
                </div>
                <div class="col-md-5 ">
                    <div class="banner-form frm-brdr-grd">
                        <form class="validate-banner-frm" id="bannerForm" method="POST" action="javascript:lead('bannerForm');">
        					<input type="hidden" id="referer" name="referer" value="google">
        					<input type="hidden" id="price" name="price" value="$39">
        					<input type="hidden" id="title" name="package" value="Trademark Basic Package">
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
                            <h3>Limited Time Special<span> Register and Get 50% Off</span></h3>
                            <div class="newlay">
                                <input type="text" name="name" class="required cn_pp" placeholder="Your Name *" required>
                                <span class="emsg hidden">Please Enter a Valid Name without Dot & Dash </span>
                                <input type="email" class="required email" name="email" required placeholder="Email Address *">
                                <input type="text" class="required number" placeholder="Phone No. *" name="phone"  maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1')" required>
                                <textarea name="message" autocomplete="nope" class="required" required placeholder="What are you looking to protect? (e.g. Name, Logo and Slogan) *"></textarea>
                                
                                <input type="submit" value="Avail 50% Off Deal">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="our-work">
        <div class="container">
            <h2>Trademark is Essential</h2>
            <p>Registering with the USPTO for your brand, logo, tagline, product or business, phases or
symbol is essential for protecting your business
and a sigh of relief for smooth and protected
operations across the United States.</p>
<h4>Process</h4>
            <div class="row">
                <div class="col-sm-4">
                    <img src="assets/images/prepare-app.svg" alt="">
                    <h5><span>01</span> Prepare Your Application</h5>
                    <p>Fill out our simple form in minutes to initiate registration process for your trademark with Allied IP Firm.</p>
                </div>
                <div class="col-sm-4">
                    <img src="assets/images/complete.svg" alt="">
                    <h5><span>02</span> Complete Your Application</h5>
                    <p>Prior to submission, our experts will
conduct an in-depth and insightful
research in the state / federal database to
ascertain the trademark is not in use and
further compile your official registration
application.</p>
                </div>
                <div class="col-sm-4">
                    <img src="assets/images/file-app.svg" alt="">
                    <h5><span>03</span> File Your Application</h5>
                    <p>We will file your completed application for trademarks with the United States Patent & Trademark Office.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="new-pf satisfied-customer">
        <div class="container">
            <h2><strong>Trademark</strong> Registered <strong>Businesses</strong> across the <br>
Globe Operating with a <strong>Peace of Mind</strong></h2>
            <p>A quick overview of our decade’s long enriched
portfolio that has helped businesses within and
outside of U.S. operate in a protected
environment.</p>
            <!-- FLIP LOGO:: Start -->
            <!--<div class="logo-card-cover">-->
            <!--    <div class="logo-cards clearfix">-->
            <!--        <div>-->
            <!--            <div class="logo-card">-->
            <!--                <div class="front"><img src="assets/images/pf1.webp" alt="" /></div>-->
            <!--                <div class="back"><img src="assets/images/pf2.webp" alt="" /></div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--        <div>-->
            <!--            <div class="logo-card">-->
            <!--                <div class="front"><img src="assets/images/pf3.webp" alt="" /></div>-->
            <!--                <div class="back"><img src="assets/images/pf4.webp" alt="" /></div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--        <div>-->
            <!--            <div class="logo-card">-->
            <!--                <div class="front"><img src="assets/images/pf5.webp" alt="" /></div>-->
            <!--                <div class="back"><img src="assets/images/pf5.webp" alt="" /></div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--        <div>-->
            <!--            <div class="logo-card">-->
            <!--                <div class="front"><img src="assets/images/pf6.webp" alt="" /></div>-->
            <!--                <div class="back"><img src="assets/images/pf6.webp" alt="" /></div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--        <div>-->
            <!--            <div class="logo-card">-->
            <!--                <div class="front"><img src="assets/images/pf7.webp" alt="" /></div>-->
            <!--                <div class="back"><img src="assets/images/pf8.webp" alt="" /></div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--        <div>-->
            <!--            <div class="logo-card">-->
            <!--                <div class="front"><img src="assets/images/pf9.webp" alt="" /></div>-->
            <!--                <div class="back"><img src="assets/images/pf10.webp" alt="" /></div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!-- FLIP LOGO:: END -->
            
            <!--Carousel Logo Start-->
            <!--<div class="customerslider owl-carousel owl-theme owl-loaded owl-drag">-->
            <!--<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0.25s ease 0s; width: 5850px;"><div class="owl-item active" style="width: 1170px;"><div class="item">-->
            <!--<div class="portfolio-img">-->
            <!--<img src="assets/images/pf1.webp" class="testiimg" alt="">-->
            <!--</div>-->
            <!--<div class="portfolio-img">-->
            <!--<img src="assets/images/pf2.webp" class="testiimg" alt="">-->
            <!--</div><div class="portfolio-img">-->
            <!--<img src="assets/images/pf3.webp" class="testiimg" alt="">-->
            <!--</div>-->
            <!--<div class="portfolio-img">-->
            <!--<img src="assets/images/pf4.webp" class="testiimg" alt="">-->
            <!--</div>-->
            <!--<div class="portfolio-img">-->
            <!--<img src="assets/images/pf5.webp" class="testiimg" alt="">-->
            <!--</div>-->
            <!--<div class="portfolio-img">-->
            <!--<img src="assets/images/pf6.webp" class="testiimg" alt="">-->
            <!--</div>-->
            
            <!--</div></div></div></div><div class="owl-nav disabled"><div class="owl-prev">prev</div><div class="owl-next">next</div></div><div class="owl-dots text-center"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div></div></div>-->
            <!--Carousel Logo End-->

            <div id="filters" class="button-group filters-button-group'" style="display:none">
                <button class="button is-checked" data-filter=".all">All</button>
            </div>
            <div class="grid" style="display:none">
                <div class="element-item col-md-4 all store" data-category="all store"><a href="assets/images/pf1.webp"
                        data-fancybox="images"><img src="assets/images/pf1.webp"></a></div>
                <div class="element-item col-md-4 all store" data-category="all store"><a href="assets/images/pf2.webp"
                        data-fancybox="images"><img src="assets/images/pf2.webp"></a></div>
                <div class="element-item col-md-4 all store" data-category="all store"><a href="assets/images/pf3.webp"
                        data-fancybox="images"><img src="assets/images/pf3.webp"></a></div>
                <div class="element-item col-md-4 all store" data-category="all store"><a href="assets/images/pf4.webp"
                        data-fancybox="images"><img src="assets/images/pf4.webp"></a></div>
                <div class="element-item col-md-4 all store" data-category="all store"><a href="assets/images/pf5.webp"
                        data-fancybox="images"><img src="assets/images/pf5.webp"></a></div>
                <div class="element-item col-md-4 all store" data-category="all store"><a href="assets/images/pf6.webp"
                        data-fancybox="images"><img src="assets/images/pf6.webp"></a></div>
                <div class="element-item col-md-4 all store" data-category="all store"><a href="assets/images/pf7.webp"
                        data-fancybox="images"><img src="assets/images/pf7.webp"></a></div>
                <div class="element-item col-md-4 all store" data-category="all store"><a href="assets/images/pf8.webp"
                        data-fancybox="images"><img src="assets/images/pf8.webp"></a></div>
                <div class="element-item col-md-4 all store" data-category="all store"><a href="assets/images/pf9.webp"
                        data-fancybox="images"><img src="assets/images/pf9.webp"></a></div>
                <div class="element-item col-md-4 all store" data-category="all store"><a href="assets/images/pf10.webp"
                        data-fancybox="images"><img src="assets/images/pf10.webp"></a></div>
                <div class="element-item col-md-4 all store" data-category="all store"><a href="assets/images/pf11.webp"
                        data-fancybox="images"><img src="assets/images/pf11.webp"></a></div>
                <div class="element-item col-md-4 all store" data-category="all store"><a href="assets/images/pf12.webp"
                        data-fancybox="images"><img src="assets/images/pf12.webp"></a></div>
                <div class="element-item col-md-4 all store" data-category="all store"><a href="assets/images/pf13.webp"
                        data-fancybox="images"><img src="assets/images/pf13.webp"></a></div>
                <div class="element-item col-md-4 all store" data-category="all store"><a href="assets/images/pf14.webp"
                        data-fancybox="images"><img src="assets/images/pf14.webp"></a></div>
                <div class="element-item col-md-4 all store" data-category="all store"><a href="assets/images/pf15.webp"
                        data-fancybox="images"><img src="assets/images/pf15.webp"></a></div>
            </div> 
        </div>
    </section>
    
    
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <!-- <h4>1</h4> -->
                    <img src="assets/images/pf1.webp" alt="" />
                </div>
                <div class="item">
                    <!-- <h4>2</h4> -->
                    <img src="assets/images/pf2.webp" alt="" />
                </div>
                <div class="item">
                    <!-- <h4>3</h4> -->
                    <img src="assets/images/pf3.webp" alt="" />
                </div>
                <div class="item">
                    <!-- <h4>4</h4> -->
                    <img src="assets/images/pf4.webp" alt="" />
                </div>
                <div class="item">
                    <!-- <h4>5</h4> -->
                    <img src="assets/images/pf5.webp" alt="" />
                </div>
                <div class="item">
                    <!-- <h4>6</h4> -->
                    <img src="assets/images/pf6.webp" alt="" />
                </div>
                <div class="item">
                    <!-- <h4>6</h4> -->
                    <img src="assets/images/pf7.webp" alt="" />
                </div>
                <div class="item">
                    <!-- <h4>6</h4> -->
                    <img src="assets/images/pf8.webp" alt="" />
                </div>
                <div class="item">
                    <!-- <h4>6</h4> -->
                    <img src="assets/images/pf9.webp" alt="" />
                </div>
                <div class="item">
                    <!-- <h4>6</h4> -->
                    <img src="assets/images/pf10.webp" alt="" />
                </div>
                <div class="item">
                    <!-- <h4>6</h4> -->
                    <img src="assets/images/pf11.webp" alt="" />
                </div>
                <div class="item">
                    <!-- <h4>6</h4> -->
                    <img src="assets/images/pf12.webp" alt="" />
                </div>
                <div class="item">
                    <!-- <h4>6</h4> -->
                    <img src="assets/images/pf13.webp" alt="" />
                </div>
                <div class="item">
                    <!-- <h4>6</h4> -->
                    <img src="assets/images/pf14.webp" alt="" />
                </div>
                <div class="item">
                    <!-- <h4>6</h4> -->
                    <img src="assets/images/pf15.webp" alt="" />
                </div>
            </div>
    
    
    
    <section class="design-industry">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>Association with businesses and a collective
experience of 10+ years</h4>
                </div>
                <div class="col-md-6">
                    <img src="assets/images/design-industr-lgs.webp" alt="">
                </div>
            </div>
        </div>
    </section>



    <div class="main_content">
        <div class="container">
            <div class="row">
                <section class="our-packages">
                    <h2><strong>Register</strong> your <strong>Trademark</strong> Today! </h2>
                    <p>We Provide Trademark Services with <strong>Efficiency & Affordability</strong></p>
                    <div class="choose-packages-box hide-price">
                        <div class="table-responsive">
                            <div class="package-titles">
                                <div class="column first">
                                </div>
                                <div class="column second">
                                    <h3>Basic</h3>
                                    <strong><span>$</span>39 <strike>$78</strike></strong>

                                    <span>(Plus Filing Fee Per Class*)</span>
                                    <a name="39" data-fancybox="" href="#popupform"
                                        class="various grad-btn" onclick="priceChange('Trademark Basic Package','39');">GET STARTED</a>
                                </div>
                                <div class="column third">
                                    <h3><span>Popular</span>Professional</h3>
                                    <strong><span>$</span>99 <strike>$198</strike></strong>

                                    <span>(Plus Filing Fee Per Class*)</span>
                                    <a name="99" data-fancybox=""  href="#popupform"
                                        class="various grad-btn" onclick="priceChange('Trademark Professional Package','99');">GET STARTED</a>
                                </div>
                                <div class="column four">
                                    <h3>Business</h3>
                                    <strong><span>$</span>199 <strike>$398</strike></strong>

                                    <span>(Plus Filing Fee Per Class*)</span>
                                    <a  name="199" data-fancybox=""  href="#popupform"
                                        class="various grad-btn" onclick="priceChange('Trademark Business Package','199');">GET STARTED</a>
                                </div>
                            </div>
                            <div class="package-info">

                                <div class="tr even">
                                    <div class="td first">
                                        <p><span>+</span> CASE REVIEW</p>
                                    </div>
                                    <div class="td second">
                                        <img alt="right" src="assets/images/pricing_ico1.webp">
                                    </div>
                                    <div class="td third">
                                        <img alt="right" src="assets/images/pricing_ico2.webp">
                                    </div>
                                    <div class="td four">
                                        <img alt="right" src="assets/images/pricing_ico3.webp">
                                    </div>
                                </div>
                                <div class="tr">
                                    <div class="td first">
                                        <p><span>+</span> CASE PREPARATION</p>
                                    </div>
                                    <div class="td second">
                                        <img alt="right" src="assets/images/pricing_ico1.webp">
                                    </div>
                                    <div class="td third">
                                        <img alt="right" src="assets/images/pricing_ico2.webp">
                                    </div>
                                    <div class="td four">
                                        <img alt="right" src="assets/images/pricing_ico3.webp">
                                    </div>
                                </div>

                                <div class="tr even">
                                    <div class="td first">
                                        <p><span>+</span> CASE FILLING</p>
                                    </div>
                                    <div class="td second">
                                        <img alt="right" src="assets/images/pricing_ico1.webp">
                                    </div>
                                    <div class="td third">
                                        <img alt="right" src="assets/images/pricing_ico2.webp">
                                    </div>
                                    <div class="td four">
                                        <img alt="right" src="assets/images/pricing_ico3.webp">
                                    </div>
                                </div>
                                <div class="tr">
                                    <div class="td first">
                                        <p><span>+</span> TRADEMARK ALERT®</p>
                                    </div>
                                    <div class="td second">
                                        <img alt="right" src="assets/images/pricing_ico1.webp">
                                    </div>
                                    <div class="td third">
                                        <img alt="right" src="assets/images/pricing_ico2.webp">
                                    </div>
                                    <div class="td four">
                                        <img alt="right" src="assets/images/pricing_ico3.webp">
                                    </div>
                                </div>

                                <div class="tr even">
                                    <div class="td first">
                                        <p><span>+</span> TRADEMARK SECURED®</p>
                                    </div>
                                    <div class="td second">
                                        <img alt="right" src="assets/images/pricing_ico1.webp">
                                    </div>
                                    <div class="td third">
                                        <img alt="right" src="assets/images/pricing_ico2.webp">
                                    </div>
                                    <div class="td four">
                                        <img alt="right" src="assets/images/pricing_ico3.webp">
                                    </div>
                                </div>
                                <div class="tr">
                                    <div class="td first">
                                        <p><span>+</span> 100% Satisfaction Guarantee</p>
                                    </div>
                                    <div class="td second">
                                        <img alt="right" src="assets/images/pricing_ico1.webp">
                                    </div>
                                    <div class="td third">
                                        <img alt="right" src="assets/images/pricing_ico2.webp">
                                    </div>
                                    <div class="td four">
                                        <img alt="right" src="assets/images/pricing_ico3.webp">
                                    </div>
                                </div>

                                <div class="tr even">
                                    <div class="td first">
                                        <p><span>+</span> Direct Hit Search</p>
                                    </div>
                                    <div class="td second">
                                        <img alt="right" src="assets/images/pricing_ico1.webp">
                                    </div>
                                    <div class="td third">
                                        <img alt="right" src="assets/images/pricing_ico2.webp">
                                    </div>
                                    <div class="td four">
                                        <img alt="right" src="assets/images/pricing_ico3.webp">
                                    </div>
                                </div>


                                <div class="tr ">
                                    <div class="td first">
                                        <p><span>+</span> REFUSAL RISK METER®</p>
                                    </div>
                                    <div class="td second">
                                        &nbsp;
                                    </div>
                                    <div class="td third">
                                        <img alt="right" src="assets/images/pricing_ico2.webp">
                                    </div>
                                    <div class="td four">
                                        <img alt="right" src="assets/images/pricing_ico3.webp">
                                    </div>
                                </div>







                                <div class="tr even">
                                    <div class="td first">
                                        <p>Cease & Desist Letter ($35 value)</p>
                                    </div>
                                    <div class="td second">
                                        &nbsp;
                                    </div>
                                    <div class="td third"> </div>
                                    <div class="td four">
                                        <img alt="right" src="assets/images/pricing_ico3.webp">
                                    </div>
                                </div>





                                <div class="tr ">
                                    <div class="td first">
                                        <p><span>+</span> Trademark Monitoring <br> (1 Year - $175 value)</p>
                                    </div>
                                    <div class="td second">
                                        &nbsp;
                                    </div>
                                    <div class="td third"> </div>
                                    <div class="td four">
                                        <img alt="right" src="assets/images/pricing_ico3.webp">
                                    </div>
                                </div>



                                <div class="tr even">
                                    <div class="td first">
                                        <p><span>+</span> Complete Documentation Digital File</p>
                                    </div>
                                    <div class="td second">
                                        &nbsp;
                                    </div>
                                    <div class="td third">
                                        &nbsp;
                                    </div>
                                    <div class="td four">
                                        <img alt="right" src="assets/images/pricing_ico3.webp">
                                    </div>
                                </div>


                                <div class="tr ">
                                    <div class="td first">
                                        <p><span>+</span> 24-hour Expedited Processing</p>
                                    </div>
                                    <div class="td second">
                                        &nbsp;
                                    </div>
                                    <div class="td third">
                                        &nbsp;
                                    </div>
                                    <div class="td four">
                                        <img alt="right" src="assets/images/pricing_ico3.webp">
                                    </div>
                                </div>


                                <div class="tr even">
                                    <div class="td first">
                                        <p><span>+</span> Dedicated Case Manager </p>
                                    </div>
                                    <div class="td second">
                                        &nbsp;
                                    </div>
                                    <div class="td third">
                                        &nbsp;
                                    </div>
                                    <div class="td four">
                                        <img alt="right" src="assets/images/pricing_ico3.webp">
                                    </div>
                                </div>
                                <!--<div class="tr ">-->
                                <!--    <div class="td first">-->
                                <!--        <p><span>+</span> GLOBAL PROTECTION (Additional $1500)</p>-->
                                <!--    </div>-->
                                <!--    <div class="td second">-->
                                <!--        &nbsp;-->
                                <!--    </div>-->
                                <!--    <div class="td third">-->
                                <!--        &nbsp;-->
                                <!--    </div>-->
                                <!--    <div class="td four">-->

                                <!--    </div>-->
                                <!--</div>-->



                                <!--<div class="tr even">-->
                                <!--    <div class="td first">-->
                                <!--        <p><span>+</span> OFFICE ACTION RESPONSE</p>-->
                                <!--    </div>-->
                                <!--    <div class="td second">-->
                                <!--        &nbsp;-->
                                <!--    </div>-->
                                <!--    <div class="td third">-->
                                <!--        &nbsp;-->
                                <!--    </div>-->
                                <!--    <div class="td four"> &nbsp;-->
                                <!--    </div>-->
                                <!--</div>-->

                                <!------------------------->

                            </div>


                            <div class="package-titles">
                                <div class="column first">
                                </div>
                                <div class="column second">


                                    <a name="39" data-fancybox="" title="Basic Pack For Only $39" href="#popupform"
                                        class="various grad-btn" onclick="priceChange('Trademark Basic Package','39');">Activate your 50% Coupon Now</a>
                                </div>
                                <div class="column third">



                                    <a name="99" data-fancybox="" title="popular Pack For Only $99" href="#popupform"
                                        class="various grad-btn" onclick="priceChange('Trademark Professional Package','99');">Activate your 50% Coupon Now</a>
                                </div>
                                <div class="column four">

                                    <a name="199" data-fancybox="" title="Premium Pack For Only $199" href="#popupform"
                                        class="various grad-btn" onclick="priceChange('Trademark Business Package','199');">Activate your 50% Coupon Now</a>
                                </div>
                            </div>



                        </div>
                    </div>
                </section>
                <div class="show-mobile">
                    <div class="choose-packages-box">
                        <table cellpadding="0" cellspacing="0" class="pricing-table">
                            <thead>
                                <tr>
                                    <th class="first-head"></th>
                                    <th>
                                        <div class="package-titles">
                                            <div class="column second">
                                                <h3>Basic</h3>
                                                <strong><span>$</span>39</strong>
                                                <strike>$78</strike>
                                                <a name="39" data-fancybox="" title="Trademark Basic Pack For Only $39"
                                                    href="#popupform" class="various grad-btn">GET STARTED</a>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr even">
                                                <div class="td first">
                                                    <p><span>+</span> CASE REVIEW</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr even">
                                                <div class="td second">
                                                    <img alt="right" src="assets/images/pricing_ico1.webp">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> CASE PREPARATION</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    <img alt="right" src="assets/images/pricing_ico1.webp">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> CASE FILLING</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    <img alt="right" src="assets/images/pricing_ico1.webp">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> TRADEMARK ALERT®</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    <img alt="right" src="assets/images/pricing_ico1.webp">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> TRADEMARK SECURED®</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    <img alt="right" src="assets/images/pricing_ico1.webp">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> 100% Satisfaction Guarantee</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    <img alt="right" src="assets/images/pricing_ico1.webp">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> ADVANCE SEARCH</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    &nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> REFUSAL RISK METER®</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    &nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> LITIGANT SCAN &#8482;</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    &nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> OFFICE ACTION RESPONSE</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    &nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> 24-hour Expedited Processing</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    &nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> Complete Documentation Digital File</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    &nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> Dedicated Case Manager</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    &nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> GLOBAL PROTECT (Additional $1500)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    &nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> *NO MONTHLY OR ANY RECURRING FEE*</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    &nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="choose-packages-box">
                        <table class="pricing-table">
                            <thead>
                                <tr>
                                    <th class="first-head"></th>
                                    <th>
                                        <div class="package-titles">
                                            <div class="column third">
                                                <h3><span>popular</span>Deluxe</h3>
                                                <strong><span>$</span>99</strong>
                                                <strike>$198</strike>
                                                <!--<span>+ government fee</span>-->
                                                <span>(Plus Filing Fee Per Class*)</span>
                                                <a name="99" data-fancybox="" title="popular Pack For Only $99"
                                                    href="#popupform" class="various grad-btn">GET STARTED</a>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr even">
                                                <div class="td first">
                                                    <p><span>+</span> CASE REVIEW</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr even">
                                                <div class="td second">
                                                    <img alt="right" src="assets/images/pricing_ico1.webp">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> CASE PREPARATION</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    <img alt="right" src="assets/images/pricing_ico1.webp">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> CASE FILLING</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    <img alt="right" src="assets/images/pricing_ico1.webp">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> TRADEMARK ALERT®</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    <img alt="right" src="assets/images/pricing_ico1.webp">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> TRADEMARK SECURED®</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    <img alt="right" src="assets/images/pricing_ico1.webp">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> 100% Satisfaction Guarantee</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    <img alt="right" src="assets/images/pricing_ico1.webp">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> ADVANCE SEARCH</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    <img alt="right" src="assets/images/pricing_ico1.webp">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> REFUSAL RISK METER®</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    <img alt="right" src="assets/images/pricing_ico1.webp">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> LITIGANT SCAN &#8482;</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    &nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> OFFICE ACTION RESPONSE</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    &nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> 24-hour Expedited Processing</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    &nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> Complete Documentation Digital File</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    &nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> Dedicated Case Manager</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    &nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> GLOBAL PROTECT (Additional $1500)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    &nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> *NO MONTHLY OR ANY RECURRING FEE*</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    &nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="choose-packages-box">
                        <table class="pricing-table">
                            <thead>
                                <tr>
                                    <th class="first-head"></th>
                                    <th>
                                        <div class="package-titles">
                                            <div class="column four">
                                                <h3>Premium</h3>
                                                <strong><span>$</span>199</strong>
                                                <strike>$398</strike>
                                                <span>+ government fee</span>
                                                <a name="199" data-fancybox="" title="Premium Pack For Only $199"
                                                    href="#popupform" class="various grad-btn">GET STARTED</a>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr even">
                                                <div class="td first">
                                                    <p><span>+</span> CASE REVIEW</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr even">
                                                <div class="td second">
                                                    <img alt="right" src="assets/images/pricing_ico1.webp">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> CASE PREPARATION</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    <img alt="right" src="assets/images/pricing_ico1.webp">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> CASE FILLING</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    <img alt="right" src="assets/images/pricing_ico1.webp">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> TRADEMARK ALERT®</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    <img alt="right" src="assets/images/pricing_ico1.webp">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> TRADEMARK SECURED®</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    <img alt="right" src="assets/images/pricing_ico1.webp">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> 100% Satisfaction Guarantee</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    <img alt="right" src="assets/images/pricing_ico1.webp">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> ADVANCE SEARCH</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    <img alt="right" src="assets/images/pricing_ico1.webp">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> REFUSAL RISK METER®</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    <img alt="right" src="assets/images/pricing_ico1.webp">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> LITIGANT SCAN &#8482;</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    <img alt="right" src="assets/images/pricing_ico1.webp">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> OFFICE ACTION RESPONSE</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    <img alt="right" src="assets/images/pricing_ico1.webp">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> 24-hour Expedited Processing</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    <img alt="right" src="assets/images/pricing_ico1.webp">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> Complete Documentation Digital File</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    <img alt="right" src="assets/images/pricing_ico1.webp">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> Dedicated Case Manager</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    <img alt="right" src="assets/images/pricing_ico1.webp">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> GLOBAL PROTECT (Additional $1500)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    &nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td first">
                                                    <p><span>+</span> *NO MONTHLY OR ANY RECURRING FEE*</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="package-info">
                                            <div class="tr">
                                                <div class="td second">
                                                    &nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    
    <!--Combo Package-->
    <section class="section-package choose-packages-box">
            <div class="container">
            <div class="row">
            <div class="col-md-8">
            <div class="package-content">
            <h2>Corporate  Package</h2>
            
            <div class="left-one">
            <ul>
    		    <li><i class="ic-tik"></i> Case Review</li>
    			<li><i class="ic-tik"></i> Case Filing</li>
    			<li><i class="ic-tik"></i> Trademark Alert</li>
    			<li><i class="ic-tik"></i> Trademark Secured</li>
    			<li><i class="ic-tik"></i> Direct Hit Search</li>
    			<li><i class="ic-tik"></i> 100% Satisfaction Guarantee</li>
    			<li><i class="ic-tik"></i> Refusal Risk Meter</li>
    		</ul>
</div>
<div class="right-one">

<ul>
                <li><i class="ic-tik"></i> Trademark Monitoring</li>
				<li><i class="ic-tik"></i> Complete Documentation Digital File</li>
				<li><i class="ic-tik"></i> Dedicated Case Manager</li>
                <li><i class="ic-tik"></i> 100% Approval Guarantee </li>
				<li><i class="ic-tik"></i> Comprehensive Trademark Search Report (Federal &amp; State)</li>
				<li><i class="ic-tik"></i> 24 Hrs. Expedited Service</li>
</ul>

</div>
</div>
</div>

<div class="column four combo-package">
                                    <h3>Corporate</h3>
                                    <strong><span>$</span>349 <strike>$698</strike></strong>

                                                <span>(Plus Filing Fee Per Class*)</span>
                                    <!--<span>+ government fee</span>-->
                                    <a  name="349" data-fancybox="" href="#popupform" class="various grad-btn" onclick="priceChange('Trademark Corporate Package','349');">GET STARTED</a>
                                </div>
</div>
</div>
</section>
    <!--Combo Package-->
    
<!--Disclaimer Start-->
<section>
    <div class="container">
    	<div class="row text-center disclaimer">
    	    <div class="col-md-12">
    	        <p>
    	            *For new trademark applications, Allied IP Firm charges a flat filing fee of $350 per class on top of our package fees. US Government filing fees is $350 per class for 10 years. Classifications are the business categories which are assigned by the lawyers themselves. They review the applications and depending on the nature of the business, the goods/services being offered and the medium of existence like physical/online, they assign the classifications which protect the nature of the business and it's functionality as a whole. We are not the ones to judge which classification(s) should be assigned and neither do we have any authority in their assigning.
    	        </p>
    	    </div>
    	</div>
	</div>
</section>
<!--Disclaimer End-->






    <section class="helpingbrand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Get Your Trademark Registered
Today - It's Never Too Late!</h2>
                    <p>Experienced facilitators at Allied IP firm has helped thousands of clients in getting their trademarks registered, be it LLC’s or corporations, start-ups or ventures, we’ve enabled them to strive through the challenging competition better than they were before.</p>
                    <ul>
                        <li><i><img src="assets/images/helpbrand1.webp" alt=""></i>Constant<br>Coordination</li>
                        <li><i><img src="assets/images/helpbrand2.webp" alt=""></i>100% Satisfaction <br> GUARANTEED!
                        </li>
                        <li><i><img src="assets/images/helpbrand3.webp" alt=""></i>100% Ownership<br> Rights</li>
                        <li><i><img src="assets/images/helpbrand5.webp" alt=""></i>Industry Experienced <br>Professionals</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-n">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h4>Get in Touch for Free professional Consultancy
                    </h4>
                </div>
                <div class="col-md-7">
                    <ul>
                        <li>
                            <a href="tel:(800) 291-3781"><i><img src="assets/images/phn-ico.webp" alt=""></i> <span>CALL
                                    US</span> (800) 291-3781</a>
                        </li>
                        <li>


                            <a href="mailto:consultant@alliedipfirm.com"><i><img src="assets/images/em-ico.webp" alt=""></i> <span>DISCUSS YOUR IDEAS</span> consultant@alliedipfirm.com</a>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="satisfied-customer">
        <div class="container">
            <div class="row">
                <div class="customerslider owl-carousel owl-theme">
                    <div class="item">
                        <div class="leftsec">
                            <h2>Edward</h2>
                            <p>Frankly, these guysare direct, no-nonsense trademark specialist that I recommend to any business without any hesitation</p>
                        </div>
                        <div class="rightsec">
                            <img src="assets/images/t1.webp" class="testiimg" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="leftsec">
                            <h2>Phillip Dennis</h2>
                            <p>Excellent service from Allied IP Firm! They answered all my question and resolved every issue!! I’m extremely happy with the service provided and will recommend others who need Trademarks</p>
                        </div>
                        <div class="rightsec">
                            <img src="assets/images/t2.webp" class="testiimg" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="leftsec">
                            <h2>Michael</h2>
                            <p>Allied IP Firm is highly recommended A+. Their responsiveness and competency is A+. They should be your go-to firm!</p>
                        </div>
                        <div class="rightsec">
                            <img src="assets/images/t3.webp" class="testiimg" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="leftsec">
                            <h2>Andrew</h2>
                            <p>Thank you for everything you've done in assisting me with getting my company's name/logo and tagline trademarked. I'm official! :)</p>
                        </div>
                        <div class="rightsec">
                            <img src="assets/images/t4.webp" class="testiimg" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="leftsec">
                            <h2>Tommy Bones</h2>
                            <p>Very Good and Fast Service. Very very competent...I Highly Recommend Allied IP Firm.</p>
                        </div>
                        <div class="rightsec">
                            <img src="assets/images/t5.webp" class="testiimg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cform-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>We Consult for Free - Let's Talk</h2>
                    <p>For your queries, our professionals will take a
look at your application, so feel free to write to
us and progress with confidence.</p>
                    <form class="footer-vld-frm" id="bannerForm" method="POST" action="javascript:lead('bannerForm');">
        					<input type="hidden" id="referer" name="referer" value="google">
        					<input type="hidden" id="price" name="price" value="$39">
        					<input type="hidden" id="title" name="package" value="Trademark Basic Package">
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
                            <li><input type="text" class="required" name="name" required placeholder="Name *" required></li>
                            <!--<li><input type="email" class="required email" required placeholder="Email Address"></li>-->
                            <li><input type="email" required class="required email" placeholder="Email Address *" name="email"></li>
                            <li><input type="text" class="required number" placeholder="Phone No. *" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1')" required></li>
                            <li class="full-li"><textarea autocomplete="nope" name="message" class="required" required placeholder="What are you looking to protect? (e.g. Name, Logo and Slogan) *"></textarea>
                                
                            </li>
                            <li>
                                <input type="submit" value="Submit">
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="col-md-12 disclaimer">
                <div class="col-md-12 text-center">© Copyright 2014-2022 Allied IP Firm. Allied IP Firm provides information and software only. Allied IP Firm is not a "lawyer referral service" and does not provide legal advice or participate in any legal representation. Use of Allied IP Firm is subject to our Terms of Service and Privacy Policy.</div>
            </div>
        </div>
    </footer>
    <div style="display: none;" class="popupform" id="popupform">
        <div class="row">
            <div class="col-md-4">
                <img class="popopimg" src="assets/images/popup-image.webp" alt="">
            </div>
            <div class="col-md-8">
                <h2>Activate your Trademark Registration 50% Off Coupon <span>& Get your Trademark from Only $<b
                            class="pp_pr">39</b></span></h2>
                <p>Providing you the perfect solution for your business needs. Let's work together and unlock doors to
                    success.</p>
                <form class="validate-popupform" id="popupForm" method="POST" action="javascript:lead('popupForm');">
					<input type="hidden" id="referer" name="referer" value="google">
					<input type="hidden" id="price" name="price" value="$39">
					<input type="hidden" id="title" name="package" value="Trademark Basic Package">
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
                            <ul>
                                <li>
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <input type="text" required="" name="name" class="required cn_pp" placeholder="Your Name *" required>
                                    <span class="emsg hidden">Please Enter a Valid Name without Dot & Dash </span>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <input type="email" required class="required email" placeholder="Email Address *" name="email">
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <input type="text" class="required number" required placeholder="Phone No. *" name="phone" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1')" >
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>
                                    <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                                    <textarea autocomplete="nope" name="message" class="required" required placeholder="What are you looking to protect? (e.g. Name, Logo and Slogan) *"></textarea>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <ul>
                                <li>
                                    <input type="submit" value="Submit">
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>





    <div id="ouibounce-modal" style="display:none">
        <div class="underlay" onclick="document.getElementById('ouibounce-modal').style.display = 'none';"></div>
        <div class="modal">
            <div class="modal-body">
                <img class="popopimg" src="assets/images/popup-image.webp" alt="" width="302px">
                <div class="popup-content">
                    <h2>Activate your Trademark Registration 50% Off Coupon <span>& Get your Trademark from Only $<b class="pp_pr">39</b></span></h2>
                    <h5>Last 9 Slots Left.</h5>
                    <form class="popup-bounce" id="onLoadpopupForm" method="POST" action="javascript:lead('onLoadpopupForm');">
    					<input type="hidden" id="referer" name="referer" value="google">
    					<input type="hidden" id="price" name="price" value="$39">
    					<input type="hidden" id="title" name="package" value="Trademark Basic Package">
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
                                <input type="text" required name="name" class="required cn_pp" placeholder="Your Name *" required>
                                <span class="emsg hidden">Please Enter a Valid Name without Dot & Dash </span>
                                <input type="email" class="required email" required name="email" data-validation="required" pattern="^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$" >
                                     
                                <input type="text" class="required  ftpn" name="phone" placeholder="Your Phone *" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1')" data-validation="required" required >
                            </div>
                            <div class="col-md-6">
                                <textarea name="message" autocomplete="nope" class="required" required placeholder="To help us understand better, enter a brief description about your business. *"></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                
                                <input type="submit" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer"> <a
                    onclick="document.getElementById('ouibounce-modal').style.display = 'none';">x</a> </div>
        </div>
    </div>




    <script type="text/javascript" src="assets/js/lib.js"></script>
    <script type="text/javascript" src="assets/js/TimeCircles.js"></script>
    <script type="text/javascript" src="assets/js/functions.js?v4"></script>
    <script type="text/javascript" src="assets/js/isotype.js"></script>
    <script type="text/javascript" src="assets/js/isotypefunction.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js?v=1.5"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8-beta.17/jquery.inputmask.min.js" integrity="sha512-zdfH1XdRONkxXKLQxCI2Ak3c9wNymTiPh5cU4OsUavFDATDbUzLR+SYWWz0RkhDmBDT0gNSUe4xrQXx8D89JIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
            $(window).load(function(){
             
            setTimeout(function(){
                jQuery('div#ouibounce-modal').css('display','block');
            }, 5000);
            
        });
    	$(document).ready(function() {
    		$(".email").inputmask("email");
    		//FILIP IMAGES
    		$(window).load(function() {
                var reverseLogoCard = true;
                var lastLogoCardIndex = -1;
                $('.logo-card .back').show();
                $('.logo-card').data('reverseLogoCard', reverseLogoCard).flip({
                    trigger: 'manual',
                    reverse: reverseLogoCard
                });

                function flipLogoCard() {
                    var max = $('.logo-card').length;
                    if ($('body').width() < 551) max = 6;
                    var index = Math.floor(Math.random() * max);
                    if (index == lastLogoCardIndex) {
                        index = Math.floor(Math.random() * max);
                    }
                    lastLogoCardIndex = index;
                    var wait = Math.random() * 1000 * Math.floor(Math.random() * 4) + 750;
                    var card = $('.logo-card').eq(index);
                    reverseLogoCard = card.data('reverseLogoCard') ? false : true;
                    card.data('reverseLogoCard', reverseLogoCard);
                    card.flip('toggle', function() {
                        card.flip({
                            reverse: reverseLogoCard
                        });
                        setTimeout(function() {
                            flipLogoCard();
                        }, wait);
                    });
                }
                setTimeout(function() {
                    flipLogoCard();
                }, 1000);
            });
    	});
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

    <script>
    	$('.chat, .chatt, .live_chatt').click(function() {
    		$zopim.livechat.window.show();
    	});
    </script>

<!-- recaptcha script -->
<script src="https://www.google.com/recaptcha/api.js?render=6LfLgMMhAAAAAPTfbvvJjuSgmIFFqugSPR3kTJUC"></script>
<script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                items: 4,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 1000,
                autoplayHoverPause: true
            });
            $('.play').on('click', function() {
                owl.trigger('play.owl.autoplay', [1000])
            })
            $('.stop').on('click', function() {
                owl.trigger('stop.owl.autoplay')
            })
        })
    </script>
</body>

</html>