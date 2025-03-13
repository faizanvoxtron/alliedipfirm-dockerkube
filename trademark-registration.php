<?php 
	require_once('ip/getIpInfo.php');
	$ipdetails = getInfo();
// 	var_dump($ipdetails);
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
    $pageTitle = 'Trademark Registration & Protection Services | Allied IP Firm';
    // $pageKeywords = '';
    $pageDescription = "To register trademark of your brand just follow a single step, then we will provide to whole trademark filling services from US Patent and Trademark services (UDPTO)";
    $pageCanonical = 'https://alliedipfirm.com/trademark-registration';
    meta($pageTitle, $pageKeywords, $pageDescription, $pageCanonical);
    // We don't want the search engines to see our website just yet
    //$pageRobots = 'noindex,nofollow';
    ?>
    <?php include("inc/head-links.php"); ?>
</head>
<?php include("inc/menu.php"); ?>
<div class="banner gradient-1" style="background-image: url(assets/img/banner-bg.webp);">
	<div class="shape position-6"><img loading="lazy" src="assets/img/icons/12.png" width="467" height="539" alt=""></div>
	<div class="shape banner-img">
		<img loading="lazy" src="assets/img/banner1.webp" alt="">
	</div>
	<div class="container h-100">
		<div class="row h-100 align-items-center">
			<div class="col-lg-7">
				<div class="banner-content">
					<h1>Register With USPTO Today & Get your
						<span>Trademark Protected</span>
					</h1>
					<ul class="banner-ul">
						<li><i class="ic-1"></i>Available in 100+ Countries</li>
						<li><i class="ic-1"></i>In-depth and Insightful Research</li>
						<li><i class="ic-1"></i>Hassle-Free Process</li>
						<li><i class="ic-1"></i>Worldwide Database Research</li>
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
								<input type="text" class="form-control name js-valGet cn" placeholder="Enter Your Full Name" name="name" id="cn" required>
							</div>
							<div class="col-lg-6 mb-3">
								<input type="email" class="form-control email js-valGet js-emailvalid em" placeholder="Enter Your Email Address" name="email" id="em" maxlength="60" required pattern="^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$">
							</div>
							<div class="col-lg-6 mb-3 iti-group">
								<!-- <input type="hidden" value="" class="countryname">
								<input type="hidden" value="" class="countrycode">
								<input type="hidden" value="" class="dialcode"> -->
								<input type="text" class="form-control js-byphone js-valGet js-numbervalid pn" placeholder="Enter Your Phone Number" name="phone" id="pn" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1')" required >
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


<section class="stripe-3">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<img loading="lazy" src="assets/img/about.webp" alt="">
			</div>
			<div class="col-lg-6">
				<div class="top-headings">
					<h6 class="cl-iPrimary">How We Work?</h6>
					<h3>SECURE YOUR BRAND BY FILING YOUR TRADEMARK TIMELY </h3>
					<p>We assist you with safeguarding every fundamental aspect(s) of your business by enlisting for a trademark and furthermore help you in laying out your ownership rights, either it is a logo, name, item, or image for your business. In the event that the USPTO acknowledges your trademark registry, your future legal petitions for a trademark infringement against any entity will automatically be protected.</p>
					<p>Our experts will completely review and search many state and government brand names data sets to decide whether your trademark application is clashing at the beginning of the enlistment process. The initial analysis allows your eligibility and qualification for USPTO enlistment.</p>
					<p>Our 1-step-sign-up process allows you to focus on your business and leave the rest on us.</p>
					<a href="contact-us.php" class="btn btn-primary">PREPARE MY CLEARANCE REPORT</a>
				</div>
			</div>

		</div>
	</div>
</section>




<section class="custom-sol stripe bg-detail" style="background-image: url(assets/img/custom-desk.webp);">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 align-self-center">
				<h3 class="fs-40">APPLY FOR TRADEMARK WITH 24/7/365 SUPPORT</h3>
				<p class="fs-16">Our mission drives in giving new company and business visionaries, speedy, and practical method for protecting their identity. Our experts figures out that running and keeping a fruitful business is a significant obligation. You don't have to stress over these difficulties while taking our services, our continuous battling efforts in safeguarding and getting your trademark as exceptional, affordable, trouble-free, useful, and sensible as possible. To facilitate the most common way accomplishing a trademark for your business, we have a solution of each and every essential thing you expect can protect your identity.</p>
				<a href="contact-us" class="btn btn-primary">GET YOUR TRADEMARK REGISTERED NOW</a>
				<!-- <div class="bottom-links">
					<a href="tel:(800) 291-3781" class="btn-link"><i class="ic-5"></i>(800) 291-3781</a>
					<a href="mailto:legal@alliedipfirm.com" class="btn-link"><i class="ic-3"></i>legal@alliedipfirm.com</a>
				</div>
				<div class="btn-wrap mt-3">
					<a href="contact-us.php" class="btn btn-primary">Contact Us</a> 
				</div> -->
			</div>
		</div>
	</div>
</section>

<section class="stripe-3">
	<div class="container-fluid">
		<div class="top-heading text-center">
			<h4><span class="">Our Plans & Pricing</span></h4>
			<!-- <h3></h3> -->
		</div>
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
	<div class="row text-center disclaimer">
	    <div class="col-md-12">
	        <p>
	            *For new trademark applications, Allied IP Firm charges a flat filing fee of $350 per class on top of our package fees. Government filing fees is $350 per class. Classifications are the business categories which are assigned by the lawyers themselves. They review the applications and depending on the nature of the business, the goods/services being offered and the medium of existence like physical/online, they assign the classifications which protect the nature of the business and it's functionality as a whole. We are not the ones to judge which classification(s) should be assigned and neither do we have any authority in their assigning.
	        </p>
	    </div>
	</div>
</section>

<section class="stripe-3 trademark-check">
	<div class="container">

		<div class="row align-items-center">

			<div class="col-lg-6">
				<div class="top-headings">
					<!-- <h6 class="cl-iPrimary">Why Choose Us</h6> -->
					<h3 class="fs-26 mb-2">Trademark Eligibility Check</h3>
					<p>Eligibility check is an in-depth and insightful research of a brand or any associated registered brands in the past to avoid any conflicts in the databases of all states and federal levels.</p>
					<p>Our experts thoroughly review the guidelines prior to filing your trademark (Brand Name, Logo, Copy, Tagline etc.) with the USPTO.
						This process determines either your brand fulfils the eligibility criteria and can save both your time and Filing Fees (Non-Refundable).</p>
				</div>
			</div>
			<div class="col-lg-6">
				<img loading="lazy" src="assets/img/mix/img2.webp" alt="">
			</div>
		</div>
	</div>
</section>

<section class="stripe-3">
	<div class="container">
		<div class="top-heading text-center">
			<h3>Secure Your Brand, TRADEMARK NOW!</h3>
		</div>
		<div class="row align-items-center">

			<div class="col-lg-6">
				<div class="top-headings">
					<!-- <h6 class="cl-iPrimary">Why Choose Us</h6> -->
					<h3 class="fs-26 mb-2">Pre-Trademark Authorization</h3>
					<ul class="packages-gurantee">
						<li>
							<span class="ic-wrap"><i class="ic-4"></i></span>Company Name(s)
						</li>
						<li>
							<span class="ic-wrap"><i class="ic-4"></i></span>Slogans / Taglines
						</li>
						<li>
							<span class="ic-wrap"><i class="ic-4"></i></span>Logos / Imagery
						</li>
						<li>
							<span class="ic-wrap"><i class="ic-4"></i></span>Designs / Graphics
						</li>
						<li>
							<span class="ic-wrap"><i class="ic-4"></i></span>Products / Brands
						</li>
						<li>
							<span class="ic-wrap"><i class="ic-4"></i></span>Product Grouping
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6">
				<img loading="lazy" src="assets/img/mix/img3.webp" alt="">
			</div>
		</div>
	</div>
</section>


<?php include('inc/testimonials.php');?>


<?php
include('inc/footer.php');
?>