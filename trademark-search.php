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
    $pageTitle = 'Trademark Search Services - Trademark Attorney | Allied IP Firm';
    // $pageKeywords = '';
    $pageDescription = "How to start your trademark registration search? We will complete and file your documents, when you allow us, we will e-file your brand with the United States Patent and Trademark Office (USPTO)";
    $pageCanonical = 'https://alliedipfirm.com/trademark-search';
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
					<h1>Search for a Trademark for as low as
						<span>$99</span>
					</h1>
				</div>
				<form class="mt-4 fomr-box" id="bannerForm" method="POST" action="javascript:lead('bannerForm');">
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

<section class="services stripe mb-5 pb-5">

	<div class="container">
		<div class="service-box">
			<div class="top-headings m-3">
				<h6 class="cl-white pb-2">Services</h6>
				<h5 class="cl-white">How It Works</h5>
				<p class="cl-white">Easy Registration Process to Protect your Brand
Name</p>
			</div>
			<div class="d-fflex">
				<div class="box-wrap">
					<div class="ic-wrap">
						<i class="ic-4"></i>
					</div>
					<div class="box-content pl-2">
						<h5>Fill in the Form</h5>
						<p>Provide us with some required details allowing
us to initiate the brand registration process</p>
					</div>
				</div>
				<div class="box-wrap">
					<div class="ic-wrap">
						<i class="ic-4"></i>
					</div>
					<div class="box-content pl-2">
						<h5>-
File an Application</h5>
						<p>Our expert team of attorneys will complete and
submit the application to the USPTO and
Copyrights Office</p>
					</div>
				</div>
				<div class="box-wrap">
					<div class="ic-wrap">
						<i class="ic-4"></i>
					</div>
					<div class="box-content pl-2">
						<h5>Organize Your Application</h5>
						<p>Our in-depth and insightful research prior to
final submission allows to ensure that your
brand name is unique and not copied or in use
by a different party.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="stripe-3 tabs-sec">
	<div class="container">
		<div class="row align-items-center">

			<div class="col-lg-6">
				<div class="top-headings">

					<h3 class="">Trademark Research Is Critical!</h3>
					<p>Point by point examination of brand name is
enthusiastically suggested for any immature
and especially start-ups. Prior to heading
forward with any further formalities with the
authorities’ registry of your image or property; our experts conduct a thorough and in-depth
research to avoid any conflicts allowing surety
and guarantee that your brand isn't being used
by any other person in the corporate world.
Considering the preciousness of your time and
resources, our focus remains on your best
possible assistance.
Our strict protocols ensures that only after a
successful research process, the non-
refundable fee is charged.</p>
				</div>
			</div>
			<div class="col-lg-6">
				<img loading="lazy" src="assets/img/mix/img13.webp" alt="">
			</div>
		</div>
	</div>
</section>

<section class="stripe-3 tabs-sec">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<img loading="lazy" src="assets/img/mix/img8.webp" alt="">
			</div>
			<div class="col-lg-6">
				<div class="top-headings">
					<!-- <h6 class="cl-iPrimary">AMAZON BRAND REGISTRY</h6> -->
					<h3 class="">Keep in Mind while Logo or Brand Name
Registration</h3>
					<p>There are chances that your brand name
registration application may get rejected
because of a comparative name currently being
used or enlisted in the USPTO data set. Despite
the fact that the name isn't identical, or
anywhere near comparable names might be
confusing and eventually you could lose a
prospect.</p>

				</div>
			</div>

		</div>
	</div>
</section>

<section class="stripe-3 ">
	<div class="container-fluid">
		<div class="top-heading text-center">
			<h4><span class="">Our Plans & Pricing</span></h4>
			<!-- <h3></h3> -->
		</div>
		<div class="row justify-content-center">
			<div class="col-xl-3 col-lg-4">
				<div class="package-box package-1">
					<div class="pck-head">
						<h4 class="pck-title">
							<span>Federal & State Search</span>
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
							<span>STATE & COMMON LAW SEARCH</span>
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
							<img loading="lazy" src="/assets/img/packages/plus.png" alt="">
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
							<img loading="lazy" src="/assets/img/packages/plus.png" alt="">
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
				<h3>Protect your Brand through Copyrights and
Trademark protection NOW!</h3>
				<div class="bottom-links">
					<a href="tel:4085388655" class="btn-link"><i class="ic-5"></i>(408) 538-8655</a>
					<a href="mailto:legal@alliedipfirm.com" class="btn-link"><i class="ic-3"></i>legal@alliedipfirm.com</a>
				</div>
				<div class="btn-wrap mt-3">
					<a href="contact-us" class="btn btn-primary">Contact Us</a>
				</div>
			</div>
		</div>
	</div>
</section>


<?php
include('inc/testimonials.php');
?>

<?php
include('inc/footer.php');
?>