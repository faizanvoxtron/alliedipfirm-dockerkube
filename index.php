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
<!doctype html>
<html lang="en">

<head>
    <?php
    include('inc/meta.php');
    $pageTitle = 'Protect Your Brand through Copyrights &Trademark | Allied IP Firm';
    // $pageKeywords = '';
    $pageDescription = "Protect your brand, protect your IP and grow your business by registering your copyrights, trademarks and service marks with us.";
    $pageCanonical = 'https://alliedipfirm.com/';
    meta($pageTitle, $pageKeywords, $pageDescription, $pageCanonical);
    // We don't want the search engines to see our website just yet
    // $pageRobots = 'noindex,nofollow';
    ?>
    <?php include("inc/head-links.php"); ?>
</head>
<script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "Attorney",
"name": "Allied IP Firm",
"image": "https://alliedipfirm.com/assets/img/logo-white.svg",
"@id": "",
"url": "https://alliedipfirm.com/",
"telephone": "(408) 538-8655",
"address": {
"@type": "PostalAddress",
"streetAddress": "3200 14th Street ste 414",
"addressLocality": "plano",
"addressRegion": "TX",
"postalCode": "75074",
"addressCountry": "US"
}
}
</script>
<?php include("inc/menu.php"); ?>
<div class="banner gradient-1" style="background-image: url(assets/img/banner-bg.webp);">
	<!-- <div class="shape-pri"> <i class="ic-1 cl-iPrimary"></i></div>
		<div class="shape-pri sty-1"> <i class="ic-1 cl-iPrimary"></i></div> -->
	<!-- <div class="shape position-5"> <img loading="lazy" src="assets/img/icons/11.png" alt=""></div> -->
	<div class="shape position-6"><img loading="lazy" src="assets/img/icons/12.png" width="467" height="539" alt=""></div>
	<div class="shape banner-img">
		<img loading="lazy" src="assets/img/banner1.webp" alt="" width="704" height="827">
	</div>
	<div class="container h-100">
		<div class="row h-100 align-items-center">
			<div class="col-lg-7">
				<div class="banner-content">
					<h1>Register With USPTO Today & Get your
						<span>Trademark Protected</span>
					</h1>
					<ul class="banner-ul">
						<li><i class="ic-1"></i>Highly Qualified Team of Experts</li>
						<li><i class="ic-1"></i>Seamless Process</li>
						<li><i class="ic-1"></i>100% Success GUARANTEED!</li>
					</ul>
				</div>
				<form class="mt-4 fomr-box" id="bannerForm" method="POST" action="javascript:lead('bannerForm');">
					<input type="hidden" id="referer" name="referer" value="google">
					<input type="hidden" id="price" name="price" value="$78">
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
					<fieldset class="header-form">
						<div class="row">
							<div class="col-lg-6 mb-3">
								<input type="text" class="form-control" placeholder="Enter Your Full Name" name="name" id="cn" required>
							</div>
							<div class="col-lg-6 mb-3">
								<input type="email" class="form-control required" placeholder="Enter Your Email Address" name="email" id="em" maxlength="60" required pattern="^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$">
							</div>
							<div class="col-lg-6 mb-3 iti-group">
								<!-- <input type="hidden" value="" class="countryname">
								<input type="hidden" value="" class="countrycode">
								<input type="hidden" value="" class="dialcode"> -->
								<input type="text" class="form-control" placeholder="Enter Your Phone Number" name="phone" id="pn" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1')" required >
							</div>
							<div class="form-group col-lg-6">
							<!-- <input type="submit" class="btn btn-primary submitform submit w-100" value="Submit Now"> -->

								<button class="btn btn-primary submitform submit w-100" id="submit" type="submit">Submit Now <i class="fa fa-chevron-right"></i></button>
							</div>
						</div>
						<div class="btn-part">

						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>
<section class="stripe-3 sec-about">
	<div class="shape position-1">
		<img loading="lazy" src="assets/img/icons/10.png" alt="" width="190" height="376">
	</div>
	<div class="shape position-2">
		<img loading="lazy" src="assets/img/icons/10.png" alt="" width="190" height="376">
	</div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="about-img">
					<img loading="lazy" src="assets/img/about.webp" alt="" width="630" height="600">
				</div>
			</div>
			<div class="col-lg-5 align-self-center">
				<div class="top-headings">
					<h6 class="cl-iPrimary">How We Work? </h6>
					<h3>At your Service – 24/7</h3>
					<p>Allied IP Firm specializes in providing registrations and consultancy to trademark their businesses at their convenience. Our methodology is to give trouble-free, safe  and consistent administrative services to our clients so they can work with a peace of mind they are looking for, realizing that their trademark are safeguarded by an exceptionally proficient group of professionals.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="services stripe mb-5 pb-5">

	<div class="container">
		<div class="service-box">
			<div class="top-headings m-3">
				<h6 class="cl-white pb-2">Our Services</h6>
				<h5 class="cl-white">Trademark Services</h5>
			</div>
			<div class="d-fflex">
				<div class="box-wrap">
					<div class="ic-wrap">
						<i class="ic-4"></i>
					</div>
					<div class="box-content pl-2">
						<h5>Brand Name / Trademark Registration</h5>
						<p>Providing a reasonable and profound brand trademark services across USA with 100 % Satisfaction Surety!</p>
					</div>
				</div>
				<div class="box-wrap">
					<div class="ic-wrap">
						<i class="ic-4"></i>
					</div>
					<div class="box-content pl-2">
						<h5>Copyright Registration</h5>
						<p>Safeguard your innovative work by enlisting its copyrights with the United States Copyright Office.</p>
					</div>
				</div>
				<div class="box-wrap">
					<div class="ic-wrap">
						<i class="ic-4"></i>
					</div>
					<div class="box-content pl-2">
						<h5>Formation / Registration</h5>
						<p>Process of Registration has never been this reasonable and simple. Our specialized assistance in formation of your company in the United States with a humble and trouble-free interaction.</p>
					</div>
				</div>
				<div class="box-wrap">
					<div class="ic-wrap">
						<i class="ic-4"></i>
					</div>
					<div class="box-content pl-2">
						<h5>Trademark Search</h5>
						<p>Prior to documenting your brand name, our experts research numerous brand name(s) and information to actually look at the odds for a successful completion of your application.</p>
					</div>
				</div>
				<div class="box-wrap">
					<div class="ic-wrap">
						<i class="ic-4"></i>
					</div>
					<div class="box-content pl-2">
						<h5>Amazon Registry</h5>
						<p>Secure your image on Amazon by petitioning for Brand Registry today!</p>
					</div>
				</div>
			</div>


		</div>
	</div>

</section>
<section class="product-sec stripe-3 bgc-iGray1">
	<div class="container-fluid">
		<div class="top-heading text-center">
			<h4><span class="bgc-iGray1">Our Process</span></h4>
			<h3>Protect Your Brand by Registering its Trademark Today!</h3>
			<!-- <p>Our process is very simple, Select your desired package or contact us for a customized package.</p> -->
		</div>
		<div class="row mt-5 justify-content-center">
			<div class="col-lg-11">
				<div class="row">
					<div class="col-lg-3">
						<div class="process-box">
							<div class="content-box">
								<div class="icon-box">
									<i class="ic-14"></i>
								</div>
								<h4>Sign Up</h4>
								<p class="text-center">Fill in a simple sign-up form, provide your information and sit back.</p>
							</div>
							<div class="steps">
								<h2>01</h2>
								<h3>STEP</h3>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="process-box">
							<div class="content-box">
								<div class="icon-box">
									<i class="ic-15"></i>
								</div>
								<h4>Planning</h4>
								<p class="text-center">We plan, research, and organize the data based on your provided information</p>
							</div>
							<div class="steps">
								<h2>02</h2>
								<h3>STEP</h3>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="process-box">
							<div class="content-box">
								<div class="icon-box">
									<i class="ic-16"></i>
								</div>
								<h4>Compile</h4>
								<p class="text-center">We coordinate and get the application reviewed by you.</p>
							</div>
							<div class="steps">
								<h2>03</h2>
								<h3>STEP</h3>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="process-box">
							<div class="content-box">
								<div class="icon-box">
									<i class="ic-17"></i>
								</div>
								<h4>Apply</h4>
								<p class="text-center">We finalize and apply your trademark/copyrights.</p>
							</div>
							<div class="steps">
								<h2>04</h2>
								<h3>STEP</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="stripe tabs-sec">
	<div class="container-fluid">
		<div class="top-heading text-center">
			<h4><span class="">Our Plans & Pricing</span></h4>
			<!-- <h3>Pricing Plans</h3> -->
		</div>
		<div class="text-center">
			<div class="tabs-links">
				<ul class="tabbing-list mb-5 mt-4">
					<li><a class="js-tab-link is--active" href="javascript:;" data-tab-name="package-web" data-tab-id="package-startup">Trademark Registration</a></li>
					<li><a class="js-tab-link" href="javascript:;" data-tab-name="package-web" data-tab-id="package-small">Copyright Registration</a></li>
					<li><a class="js-tab-link" href="javascript:;" data-tab-name="package-web" data-tab-id="package-medium">Company Formation </a></li>
					<li><a class="js-tab-link" href="javascript:;" data-tab-name="package-web" data-tab-id="package-elite">Trademark Search</a></li>

					<!-- <li><a class="js-tab-link" href="javascript:;" data-tab-name="package-web" data-tab-id="package-amazon">Amazon Registry</a></li> -->

					<!-- <li><a class="js-tab-link" href="javascript:;" data-tab-name="package-web" data-tab-id="package-web">Web Design Services</a></li> -->
				</ul>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="tabs-content">
			<div class="tab-package-startup is--active" data-tab-name="package-web" data-tab-id="package-startup">
				<div class="row justify-content-center">
					<div class="col-lg-3">
						<div class="package-box package-1">
							<div class="pck-head">
								<h4 class="pck-title">
									<span>Basic</span>
								</h4>
								<div class="pck-price">
									<h5>
										<span class="dollar">$</span>
										<strong class="price">78</strong>
									</h5>
								</div>
								<span class="pNote">(Plus $350 Filing Fee Per Class*)</span>
							</div>
							<div class="pck-content">
								<div class="pck-topContent">
									<ul>
										<li><i class="ic-tik"></i> Case Review</li>
										<li><i class="ic-tik"></i> Case Filing</li>
										<li><i class="ic-tik"></i> Trademark Alert</li>
										<li><i class="ic-tik"></i> Trademark Secured</li>
										<li><i class="ic-tik"></i> 100% Satisfaction Guarantee</li>
									</ul>
								</div>

							</div>
							<div class="pck-foot">
								<a class="btn btn-primary w-100 js-popup-link" data-popup="view-package" href="javascript:;" onclick="priceChange('Trade Mark Basic Package','78');">Select Package</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="package-box package-2">
							<div class="pck-head">
								<h4 class="pck-title">
									<span>Professional</span>
								</h4>
								<div class="pck-price">
									<h5>
										<span class="dollar">$</span>
										<strong class="price">298</strong>
									</h5>
								</div>
								<span class="pNote">(Plus $350 Filing Fee Per Class*)</span>
							</div>
							<div class="pck-content">
								<div class="pck-topContent">
									<ul>
										<li><i class="ic-tik"></i> Case Review</li>
										<li><i class="ic-tik"></i> Case Preparation</li>
										<li><i class="ic-tik"></i> Case Filing</li>
										<li><i class="ic-tik"></i> Trademark Alert</li>
										<li><i class="ic-tik"></i> Direct Hit Search</li>
										<li><i class="ic-tik"></i> 100% Satisfaction Guarantee</li>
										<li><i class="ic-tik"></i> Refusal Risk Meter </li>
									</ul>
								</div>

							</div>
							<div class="pck-foot">
								<a class="btn btn-primary w-100 js-popup-link" data-popup="view-package" href="javascript:;" onclick="priceChange('Trade Mark Professional Package','298');">Select Package</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="package-box package-3">
						<div class="ribbon">Best Seller</div>
							<div class="pck-head">
								<h4 class="pck-title">
									<span>Business</span>
								</h4>
								<div class="pck-price">
									<h5>
										<span class="dollar">$</span>
										<strong class="price">398</strong>
									</h5>
								</div>
								<span class="pNote">(Plus $350 Filing Fee Per Class*)</span>
							</div>
							<div class="pck-content">
								<div class="pck-topContent">
									<ul>
										<ul>
											<li><i class="ic-tik"></i> Case Review</li>
											<li><i class="ic-tik"></i> Case Preparation</li>
											<li><i class="ic-tik"></i> Case Filing</li>
											<li><i class="ic-tik"></i> Trademark Alert</li>
											<li><i class="ic-tik"></i> Trademark Secured</li>
											<li><i class="ic-tik"></i> Direct Hit Search</li>
											<li><i class="ic-tik"></i> 100% Satisfaction Guarantee</li>
											<li><i class="ic-tik"></i> Refusal Risk Meter</li>
											<li><i class="ic-tik"></i> Trademark Monitoring</li>
											<li><i class="ic-tik"></i> Complete Documentation</li>
											<li><i class="ic-tik"></i> Digital File</li>
											<li><i class="ic-tik"></i> Dedicated Case Manager </li>
										</ul>
									</ul>
								</div>

							</div>
							<div class="pck-foot">
								<a class="btn btn-primary w-100 js-popup-link" data-popup="view-package" href="javascript:;" onclick="priceChange('Trade Mark Business Package','398');">Select Package</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="package-box package-3">
							<div class="pck-head">
								<h4 class="pck-title">
									<span>Corporate</span>
								</h4>
								<div class="pck-price">
									<h5>
										<span class="dollar">$</span>
										<strong class="price">698</strong>
									</h5>
								</div>
								<span class="pNote">(Plus $350 Filing Fee Per Class*)</span>
							</div>
							<div class="pck-content">
								<div class="pck-topContent">
									<ul>
										<ul>
											<li><i class="ic-tik"></i> Case Review</li>
											<li><i class="ic-tik"></i> Case Filing</li>
											<li><i class="ic-tik"></i> Trademark Alert</li>
											<li><i class="ic-tik"></i> Trademark Secured</li>
											<li><i class="ic-tik"></i> Direct Hit Search</li>
											<li><i class="ic-tik"></i> 100% Satisfaction Guarantee</li>
											<li><i class="ic-tik"></i> Refusal Risk Meter</li>
											<li><i class="ic-tik"></i> Trademark Monitoring</li>
											<li><i class="ic-tik"></i> Complete Documentation Digital File</li>
											<li><i class="ic-tik"></i> Dedicated Case Manager</li>
											<li><i class="ic-tik"></i> 100% Approval Guarantee </li>
											<li><i class="ic-tik"></i> Comprehensive Trademark Search Report (Federal &amp; State)
											</li>
											<li><i class="ic-tik"></i> 24 Hrs. Expedited Service</li>
										</ul>
									</ul>
								</div>

							</div>
							<div class="pck-foot">
								<a class="btn btn-primary w-100 js-popup-link" data-popup="view-package" href="javascript:;" onclick="priceChange('Trade Mark Corporate Package','698');">Select Package</a>
							</div>
						</div>
					</div>
				</div>
				<div class="defaultOverlay js-defaultOverlay"></div>
			</div>
			<div class="tab-package-small" data-tab-name="package-web" data-tab-id="package-small">
				<div class="row justify-content-center">
					<div class="col-xl-3 col-lg-4">
						<div class="package-box package-1">
							<div class="pck-head">
								<h4 class="pck-title">
									<span>GOLD</span>
								</h4>
								<div class="pck-price">
									<h5>
										<span class="dollar">$</span>
										<strong class="price">199</strong>
									</h5>
								</div>
								<span class="pNote">(Plus Federal Fee*)</span>
							</div>
							<div class="pck-content">
								<div class="pck-topContent">
									<ul>
										<li><i class="ic-tik"></i> Professional Preparation of your federal copyright application including a review by the copyright team for accuracy, completeness and common mistakes</li>
										<li><i class="ic-tik"></i> Federal E-Filing Electronic filing of your application with the USPTO with no need to wait for mail or dealing with paper files</li>
										<li><i class="ic-tik"></i> Certificate of Registration that will be mailed to you directly from the U.S. Copyright Office.</li>
									</ul>
								</div>

							</div>
							<div class="pck-foot">
								<a class="btn btn-primary w-100 js-popup-link" data-popup="view-package" href="javascript:;" onclick="priceChange('Copyright Gold Package','199');">Select Package</a>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4">
						<div class="package-box package-2">
							<div class="pck-head">
								<h4 class="pck-title">
									<span>DIAMOND</span>
								</h4>
								<div class="pck-price">
									<h5>
										<span class="dollar">$</span>
										<strong class="price">298</strong>
									</h5>
								</div>
								<span class="pNote">(Plus Federal Fee*)</span>
							</div>
							<div class="pck-content">
								<div class="pck-topContent">
									<ul>
										<li><i class=""></i> web-includes the everything from the Basic Package PLUS:</li>
										<li><i class="ic-tik"></i>Cease &amp; Desist Letter A customer-specific form you can further customize if someone is infringing on your copyright.Avoid wasting time and money</li>
										<li><i class="ic-tik"></i> Transfer/Assignment Custom assignment template. If you need to sell or otherwise convey your copyright, you have access to your pre-filled in template that you can further customize</li>
										<li><i class="ic-tik"></i> 24-hour Expedited Processing of the preparation of your copyright application. Normal processing time is 5 business days in our Basic package</li>

									</ul>
								</div>

							</div>
							<div class="pck-foot">
								<a class="btn btn-primary w-100 js-popup-link" data-popup="view-package" href="javascript:;" onclick="priceChange('Copyright Diamond Package','298');">Select Package</a>
							</div>
						</div>
					</div>
				</div>
				<div class="defaultOverlay js-defaultOverlay"></div>
			</div>
			<div class="tab-package-medium" data-tab-name="package-web" data-tab-id="package-medium">
				<div class="row justify-content-center">
					<div class="col-xl-3 col-lg-4">
						<div class="package-box package-1">
							<div class="pck-head">
								<h4 class="pck-title">
									<span>Start Your Business with Ease</span>
								</h4>

							</div>
							<div class="pck-content">
								<div class="pck-topContent">
									<ul>
										<li><i class="ic-tik"></i> <strong>Make sure you're not liable for any business debts.</strong> <br> Ensure you're not on the hook for business liabilities</li>
										<li><i class="ic-tik"></i> <strong>Company Formation through a Simple Process:</strong> <br> Our 3 step process discards with entering your details, Then selecting a service and lastly payment.</li>
										<li><i class="ic-tik"></i> <strong>Save Money on Taxes:</strong> <br> For potential savings you get to decide whether you’re are taxed as a LLC or a Corporation</li>
									</ul>
								</div>

							</div>
							<div class="pck-foot">
								<a class="btn btn-primary w-100 js-popup-link" data-popup="view-package" href="javascript:;" onclick="priceChange('Company Formation Package','');">Select Package</a>
							</div>
						</div>
					</div>

				</div>
				<div class="defaultOverlay js-defaultOverlay"></div>
			</div>
			<div class="tab-package-elite" data-tab-name="package-web" data-tab-id="package-elite">
				<div class="row justify-content-center">
					<div class="col-xl-3 col-lg-4">
						<div class="package-box package-1">
							<div class="pck-head">
								<h4 class="pck-title">
									<span>Federal &amp; State Search</span>
								</h4>
								<div class="pck-price">
									<h5>
										<span class="dollar">$</span>
										<strong class="price">149</strong>
									</h5>
								</div>
							</div>
							<div class="pck-content">
								<div class="pck-topContent">
									<ul>
										<li><i class="ic-tik"></i> Trademark Search:<br>
											The federal search provides any similar names, logos, or slogans that are registered or pending with the USPTO</li>
										<li><i class="ic-tik"></i> State Search:<br>
											The state search does the same for all 50 states</li>
										<li><i class="ic-tik"></i> Detailed Online Report:<br>
											Identifies any matches with all the information you need to strategize your next step</li>
									</ul>
								</div>
								<div class="pck-foot">
									<a class="btn btn-primary w-100 js-popup-link" data-popup="view-package" href="javascript:;" onclick="priceChange('Federal & State Search','149');">Select Package</a>
								</div>
							</div>

						</div>
					</div>
					<div class="col-xl-3 col-lg-4">
						<div class="package-box package-2">
							<div class="pck-head">
								<!-- <span class="pck-tags bgcpack-yellow clcpack-black">Best Seller</span> -->
								<h4 class="pck-title">
									<span>STATE &amp; COMMON LAW SEARCH</span>
								</h4>
								<div class="pck-price">
									<h5>
										<span class="dollar">$</span>
										<strong class="price">299</strong>
									</h5>
								</div>
							</div>
							<div class="pck-content">
								<div class="pck-topContent">
									<!-- <div class="mid-text">
										<h5>All Features</h5>
										<h6>From</h6>
										<h4>Basic</h4>
										<i class="clcpack-iRed plus-icon">
											<img loading="lazy" src="assets/img/packages/plus.png" alt="">
										</i>
									</div> -->
									<ul>
										<li><i class=""></i>Includes the information from the Federal and State Search, and also includes:</li>
										<li><i class="ic-tik"></i>Corporate name search We run a search for all corporate and other business entity names in all 50 states.</li>
										<li><i class="ic-tik"></i>Corporate Directories We search the corporate directories for listing of others who might be using your name.</li>
										<li><i class="ic-tik"></i>Common law Proprietary internet searches reveal the use of your name that may be protected by common law trademarks.</li>
										<li><i class="ic-tik"></i>Domain names We search the most common top level domain names to see if anyone is using your name online.</li>
									</ul>
								</div>
							</div>
							<div class="pck-foot">
								<a class="btn btn-primary w-100 js-popup-link" data-popup="view-package" href="javascript:;" onclick="priceChange('State & Common Law Search','299');">Select Package</a>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4">
						<div class="package-box package-3">
							<div class="pck-head">
								<!-- <span class="pck-tags bgcpack-iGreen">Highly Recommended</span> -->
								<h4 class="pck-title">
									<span>Global
										Search</span>
								</h4>
								<div class="pck-price">
									<h5>
										<span class="dollar">$</span>
										<strong class="price">499</strong>
									</h5>
								</div>
							</div>
							<div class="pck-content">
								<div class="pck-topContent">
									<!-- <div class="mid-text">
						<h5>All Features</h5>
						<h6>From</h6>
						<h4>Basic &amp; Pro</h4>
						<i class="clcpack-iRed plus-icon">
							<img loading="lazy" src="assets/img/packages/plus.png" alt="">
						</i>
					</div> -->
									<ul>
									    <li><i class=""></i>Includes the information from the State and Common Law Search, and also includes:</li>
										<li><i class="ic-tik"></i>Global Search:<br>
											We search for pending and registered marks in these multi-national jurisdictions</li>
										<li><i class="ic-tik"></i>Domain Names:<br> The European community</li>
										<li><i class="ic-tik"></i>Domain names:<br> World Intellectual Property Organization (WIPO)</li>
									</ul>
								</div>

							</div>
							<div class="pck-foot">
								<a class="btn btn-primary w-100 js-popup-link" data-popup="view-package" href="javascript:;" onclick="priceChange('Global Search','499');">Select Package</a>
							</div>
						</div>
					</div>
				</div>
				<div class="defaultOverlay js-defaultOverlay"></div>
			</div>
			<div class="tab-package-amazon" data-tab-name="package-web" data-tab-id="package-amazon">
				<div class="row justify-content-center">
					<div class="col-lg-3">
						<div class="package-box package-1">
							<div class="pck-head">
								<h4 class="pck-title">
									<span>Standard</span>
								</h4>
								<!-- <h6>Starting at</h6> -->
								<div class="pck-price">
									<h5>
										<span class="dollar">$</span>
										<strong class="price">199</strong>
									</h5>
								</div>
							</div>
							<div class="pck-content">
								<div class="pck-topContent">
									<ul>
										<li><i class="ic-tik"></i> Amazon Brand Case Review</li>
										<li><i class="ic-tik"></i> Amazon Brand Case Filing</li>
										<li><i class="ic-tik"></i> 100% Satisfaction Guaranteed</li>
									</ul>
								</div>

							</div>
							<div class="pck-foot">
								<a class="btn btn-primary w-100 js-popup-link" data-popup="view-package" href="javascript:;">Select Package</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="package-box package-2">
							<div class="pck-head">
								<h4 class="pck-title">
									<span>Diamond</span>
								</h4>
								<!-- <h6>Starting at</h6> -->
								<div class="pck-price">
									<h5>
										<span class="dollar">$</span>
										<strong class="price">298</strong>
									</h5>
								</div>
							</div>
							<div class="pck-content">
								<div class="pck-topContent">
									<ul>
										<li><i class="ic-tik"></i> Amazon Brand Case Review</li>
										<li><i class="ic-tik"></i> Amazon Brand Case Preparation</li>
										<li><i class="ic-tik"></i> Amazon Brand Case Filing</li>
										<li><i class="ic-tik"></i> 100% Satisfaction Guaranteed</li>
										<li><i class="ic-tik"></i> Refusal Risk Meter</li>
									</ul>
								</div>

							</div>
							<div class="pck-foot">
								<a class="btn btn-primary w-100 js-popup-link" data-popup="view-package" href="javascript:;">Select Package</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="package-box package-3">
							<div class="pck-head">
								<h4 class="pck-title">
									<span>Premium</span>
								</h4>
								<!-- <h6>Starting at</h6> -->
								<div class="pck-price">
									<h5>
										<span class="dollar">$</span>
										<strong class="price">398</strong>
									</h5>
								</div>
							</div>
							<div class="pck-content">
								<div class="pck-topContent">
									<ul>
										<ul>
											<li><i class="ic-tik"></i> Amazon Brand Case Review</li>
											<li><i class="ic-tik"></i> Amazon Brand Case Preparation</li>
											<li><i class="ic-tik"></i> Amazon Brand Case Filing</li>
											<li><i class="ic-tik"></i> 100% Satisfaction Guaranteed</li>
											<li><i class="ic-tik"></i> Refusal Risk Meter</li>
											<li><i class="ic-tik"></i> Amazon Brand Case Monitoring</li>
											<li><i class="ic-tik"></i> Complete Documentation</li>
											<li><i class="ic-tik"></i> Digital File</li>
											<li><i class="ic-tik"></i> Dedicated Case Manager</li>
										</ul>
									</ul>
								</div>

							</div>
							<div class="pck-foot">
								<a class="btn btn-primary w-100 js-popup-link" data-popup="view-package" href="javascript:;">Select Package</a>
							</div>
						</div>
					</div>

				</div>
				<div class="defaultOverlay js-defaultOverlay"></div>
			</div>
			
		</div>
	</div>
	<div class="row text-center disclaimer">
	    <div class="col-md-12">
	        <p>
	            *For new trademark applications, Allied IP Firm charges a flat filing fee of $350 per class on top of our package fees. Government filing fees is $350 per class. Classifications are the business categories which are assigned by the lawyers themselves. They review the applications and depending on the nature of the business, the goods/services being offered and the medium of existence like physical/online, they assign the classifications which protect the nature of the business and it's functionality as a whole. We are not the ones to judge which classification(s) should be assigned and neither do we have any authority in their assigning.
	        </p>
	    </div>
	</div>
</section>

<section class="custom-sol stripe bg-detail" style="background-image: url(assets/img/custom-desk.webp);">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 align-self-center">

				<p>Let’s Get Started</p>
				<h3>Protect your <strong>Brand</strong> through <strong>Copyrights</strong> and <strong>Trademark</strong> protection form us NOW!</h3>
				<div class="bottom-links">
					<a href="tel:4085388655" class="btn-link"> <i class="ic-5"></i> (408) 538-8655 </a>
					<a href="mailto:legal@alliedipfirm.com" class="btn-link"> <i class="ic-3"></i>legal@alliedipfirm.com</a>
				</div>
				<div class="btn-wrap mt-3">
					<a href="contact-us" class="btn btn-primary">Contact Us</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('inc/testimonials.php');?>
<!--<div class="js-reanderhtml minht-400p" data-htmlreander="/includes/rh.asp"></div>-->

<?php
include('inc/footer.php');
?>