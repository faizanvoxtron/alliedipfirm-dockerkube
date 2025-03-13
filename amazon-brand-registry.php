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
    $pageTitle = 'Amazon Brand Registry Support & Services | Allied IP Firm';
    // $pageKeywords = '';
    $pageDescription = "Now register your brand on amazon and boost up your sales.  Amazon brand protection provides you complete security for your brand name, logos, services and information etc. ";
    $pageCanonical = 'https://alliedipfirm.com/amazon-brand-registry';
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
				<div class="banner-content amzaon-brand-head">
					<h1><strong>Boost-Up Your Sales by 300%</strong> <br>
						<span>Get an Official Registry Today!</span>
					</h1>
					<ul class="banner-ul">
						<li><i class="ic-1"></i> Fastest & Easiest Brand Registry on
Amazon</li>
						<li><i class="ic-1"></i> Witness Our Lowest Prices</li>
						<li><i class="ic-1"></i> No Dependability and 100% Satisfaction
Guaranteed!</li>
					</ul>
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

<section class="stripe-3 tabs-sec">
	<div class="container">
		<div class="row align-items-center">

			<div class="col-lg-6">
				<div class="top-headings">
					<h6 class="cl-iPrimary">Amazon Brand Registry </h6>
					<h3 class="">Step ahead in the competition through</h3>
					<p>Amazon Brand Registry that gives you an access
to tools enabling you accurate representation
of your brand and further providing you the
access to reportings and allowing in becoming a pro improving your customers experience.</p>
					<a href="contact-us" class="btn btn-primary">Begin Here</a>
				</div>
			</div>
			<div class="col-lg-6">
				<img loading="lazy" src="assets/img/mix/img9.webp" alt="">
			</div>
		</div>
	</div>
</section>

<section class="stripe-3 tabs-sec">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<img loading="lazy" src="assets/img/mix/img10.webp" alt="">
			</div>
			<div class="col-lg-6">
				<div class="top-headings">
					<!-- <h6 class="cl-iPrimary">AMAZON BRAND REGISTRY</h6> -->
					<h3 class="">Improve your Brand’s Persona</h3>
					<p>Brand Persona is a value provided by a
company. A brand can keep it high if it manages
to build a positive price perception, shares the
same values as customers, and offers the best
quality on the market.</p>
					<h4 class="sty1">Sponsored Brands</h4>
					<p>Customizable ads that feature your brand logo,
a custom headline, and multiple products. Ads
appearing in prominent places within shopping
results and on product detail pages helps drive
discovery of your brand among customers
shopping for products like yours.</p>
					<h4 class="sty1">Amazon Stores</h4>
					<p>Your brand home within Amazon. A custom
multipage shopping destination for individual
brands to share their stories. Sellers enrolled in
Amazon Brand Registry can create a dedicated
Store within Amazon at no additional cost with
a unique Amazon URL.</p>
					<h4 class="sty1">Amazon Brand Stats</h4>
					<p>Maximize use of powerful information and
make timely analytical decisions. Gather more
and detailed information about your clients,
revenues and client behavior data reports.</p>
					<a href="contact-us" class="btn btn-primary">Get Started</a>
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
					<h6 class="cl-iPrimary">Why US? Because we are good at it!</h6>
					<h3 class="">Brand Protection</h3>
					<p>Our team of experts are aware of the industry
norms and effusively equipped to secure your
Brand.</p>
					<h4 class="sty1">Precise Entries</h4>
					<p>Maintaining your inventory sometimes is a
hassle, we have a solution for that</p>
					<h4 class="sty1">Team of Experts</h4>
					<p>Our skilled force knows where things might go
wrong, with a collective experience of 50+
years we are ahead in the competition.</p>
					<h4 class="sty1">A Name of Trust</h4>
					<p>Existence in the industry for over a decade itself
is a name that our customers will fall easily for
us.</p>
					<h4 class="sty1">Availability</h4>
					<p>Our 24/7/365 availability allows our customers
to be relaxed as their concerns are being
addressed on immediate basis.</p>
<h4 class="sty1">Client Satisfaction</h4>
					<p>Our client will always have everything good for us!</p>
				</div>
			</div>
			<div class="col-lg-6">
				<img loading="lazy" src="assets/img/mix/img11.webp" alt="">
			</div>
		</div>
	</div>
</section>

<section class="services stripe mb-5 pb-5">

	<div class="container">
		<div class="service-box">
			<div class="top-headings m-3">
				<h6 class="cl-white pb-2">Our Services</h6>
				<h5 class="cl-white">Secured Numerous Brands</h5>
				<p class="cl-white">Having a proven record we have safeguarded
the brand names of various busineses within as
well as outside US. Our essential focus has
forever been on reliable improvements in our
abilities and services.

				</p>
			</div>
			<div class="d-fflex">
				<div class="box-wrap">
					<div class="ic-wrap">
						<i class="ic-4"></i>
					</div>
					<div class="box-content pl-2">
						<h5>Proactive</h5>
						<p>Proactive
A few dubious records, practically in excess of 6
billion bad postings have been accounted for
and impeded before they are advanced in the
corporate world.</p>
					</div>
				</div>
				<div class="box-wrap">
					<div class="ic-wrap">
						<i class="ic-4"></i>
					</div>
					<div class="box-content pl-2">
						<h5>Equipped</h5>
						<p>Overall, brands are finding and announcing
almost 100% less suspected violations.</p>
					</div>
				</div>
				<div class="box-wrap">
					<div class="ic-wrap">
						<i class="ic-4"></i>
					</div>
					<div class="box-content pl-2">
						<h5>Committed</h5>
						<p>Our experts are accessible all day, every day,
nonstop to cater and answer our esteemed
clients and manage their suspected violations.</p>
					</div>
				</div>
			</div>


		</div>
	</div>

</section>

<!-- <section class="stripe-3 ">
	<div class="container-fluid">
		<div class="top-heading text-center">
			<h4><span class="">Pricing</span></h4>
			<h3>Amazon Brand Registry Packages</h3>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-3">
				<div class="package-box package-1">
					<div class="pck-head">
						<h4 class="pck-title">
							<span>Standard</span>
						</h4>
						
						<div class="pck-price">
							<h5>
								<span class="dollar">$</span>
								<strong class="price">99</strong>
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
</section> -->


<section class="services-sec stripe-3">
	<div class="right-shad"></div>
	<div class="container">
		<div class="title-heading pb-5">
			<div class="border-line"></div>
			<h3 class="">Amazon Brand Registry Benefits</h3>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="service-box2">
					<div class="icon-box">
						<i class="ser-img1"></i>
					</div>
					<div class="content-box">
						<h6 class="">Don't Let Your Competitors Claim Your Listings</h6>
						<p>
							Once listed and registered on Amazon, you will
stand ahead in the competition and your rivals
won’t be able to replicate any of your
registered product or listings and if found will
be reported to Amazon resulting in your rivals
disqualification.
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="service-box2">
					<div class="icon-box">
						<i class="ser-img2"></i>
					</div>
					<div class="content-box">
						<h6 class="">Features</h6>
						<p>
							Alongside wide range of features and benefits,
registered brand qualifies for reporting and
management, search optimization that further
enhance and uplift your brand sales revenues.
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="service-box2">
					<div class="icon-box">
						<i class="ser-img3"></i>
					</div>
					<div class="content-box">
						<h6 class="">Advertising Tools & Models</h6>
						<p>
						    Multiple tools are available for registered
brands with an additional opportunity to
promote the business by appearing in top
Amazon’s search results allowing you to uplift
your conversions upto 300%
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="service-box2">
					<div class="icon-box">
						<i class="ser-img4"></i>
					</div>
					<div class="content-box">
						<h6 class="">Improve the Performance of Amazon Brand
Stores</h6>
						<p>
							Having a registered brand on Amazon comes
with a bundle of options, brands can utilize
multi-page store even if it is a paid service. A
quick process to make your brand looks more
structured. Each will have own brand analytics
and insights for better results.
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="service-box2">
					<div class="icon-box">
						<i class="ser-img5"></i>
					</div>
					<div class="content-box">
						<h6 class="">Sponsor your Brand Through Amazon</h6>
						<p>
							Seeing the Logo, Tagline, product listed on
Amazon is a dream for any Brand Owner and
having a Registered Brand surely comes with
multiple incentives that broaden your audience
and improves brand image.
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="service-box2">
					<div class="icon-box">
						<i class="ser-img6"></i>
					</div>
					<div class="content-box">
						<h6 class="">New Joiners Advantages</h6>
						<p>
						    Alongside wide range of benefits, new signups
enjoys financial rewards, incentives, discount
coupons, discounted advertisements to further
assist in reducing your expenses applicable on
Registered Brands.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="stripe-3">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<img loading="lazy" src="assets/img/mix/img4.webp" alt="">
			</div>
			<div class="col-lg-6">
				<div class="top-headings">
					<h3>Eligibility Check</h3>
					<p>Trademarks with either only Text or Text plus
Image. Just Images are not acceptable.</p>
					<p>Requirements</p>
					<ul>
						<li>
							• Your country of Origin should be the
country or trademark registry. (a US
Brand should be registered with
USPTO)
						</li>
					</ul>
					<ul>
						<li>• Upon Qualification, below would be
required:</li>
						<li>• Brand Name</li>
						<li>• Serial Number of the Functioning
Trademark</li>
						<li>• Products / Sub-Products of your
Trademark</li>
<li>• Countries list where the Trademark is
Registered</li>
					</ul>
				</div>
			</div>

		</div>
	</div>
</section>


<section class="custom-sol stripe bg-detail" style="background-image: url(assets/img/custom-desk.webp);">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 align-self-center">
				<p>Secure Your Presence</p>
				<h3>Protect your Brand at Amazon through our
Brand Registry Services!</h3>
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