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
    $pageTitle = 'Kick Start your Business - Company Formation & Registration | Allied IP Firm';
    // $pageKeywords = '';
    $pageDescription = "Don’t worry about the formation of your company. Start your business today. We will give you complete online service for company registration ";
    $pageCanonical = 'https://alliedipfirm.com/company-formation';
    meta($pageTitle, $pageKeywords, $pageDescription, $pageCanonical);
    // We don't want the search engines to see our website just yet
    //$pageRobots = 'noindex,nofollow';
    ?>
    <?php include("inc/head-links.php"); ?>
</head>
<?php include("inc/menu.php"); ?>

<div class="banner gradient-1" style="background-image: url(assets/img/banner-bg.webp);">
	<!-- <div class="shape-pri"> <i class="ic-1 cl-iPrimary"></i></div>
		<div class="shape-pri sty-1"> <i class="ic-1 cl-iPrimary"></i></div> -->
	<!-- <div class="shape position-5"> <img loading="lazy" src="/assets/img/icons/11.png" alt=""></div> -->
	<div class="shape position-6"><img loading="lazy" src="assets/img/icons/12.png" width="467" height="539" alt=""></div>
	<div class="shape banner-img">
		<img loading="lazy" src="assets/img/banner1.webp" alt="">
	</div>
	<div class="container h-100">
		<div class="row h-100 align-items-center">
			<div class="col-lg-7">
				<div class="banner-content">
					<h1>Start Your Business,
						<span>We’ll take care of the Rest</span>
					</h1>
					<p>Schedule a call with our expert to learn more
about starting a new business / venture
					</p>
					<ul class="banner-ul">
						<li><i class="ic-1"></i>In-depth & Insightful Research</li>
						<li><i class="ic-1"></i>Sit Back & Relax, we’ll take care of the
rest</li>
						<li><i class="ic-1"></i>Within and Outside US Database
examination.</li>
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
			<div class="col-lg-4">
				<img loading="lazy" src="assets/img/mix/img6.webp" alt="">
			</div>
			<div class="col-lg-8">
				<div class="company-tabs">
					<div class="tabs-links">
						<ul class="tabbing-list sty1 mb-5 mt-4">
							<li><a class="js-tab-link is--active" href="javascript:;" data-tab-name="formation" data-tab-id="limited">Limited Liability Company</a></li>
							<li><a class="js-tab-link" href="javascript:;" data-tab-name="formation" data-tab-id="scorporation">S-Corporation</a></li>
							<li><a class="js-tab-link" href="javascript:;" data-tab-name="formation" data-tab-id="ccorporation">C-Corporation</a></li>
							<li><a class="js-tab-link" href="javascript:;" data-tab-name="formation" data-tab-id="nonprofit">Non-Profit Corporation</a></li>
						</ul>
					</div>
				</div>
				<div class="tabs-content">
					<div class="tab-limited is--active" data-tab-name="formation" data-tab-id="limited">
						<div class="top-headings">
							<h4 class="sty1">Thinking of a New Start-up?</h4>
							<p>Forming an LLC or different corporations or
associating into a venture can postively impact
your liability and taxation as an owner.</p>
							<h4 class="sty1">Limited Liability Company – LLC</h4>
							<p>A structure in the U.S. that protects owners
from personal responsibility for any liabilities or
debts and also pass-through taxation. LLC’s are
usually hybrid entities that combine the
characteristics of a corporation with those of a
partnership or sole proprietorship. Our
dedicated team is there to assist you filing for
an LLC.</p>
						</div>
					</div>
					<div class="tab-scorporation" data-tab-name="formation" data-tab-id="scorporation">
						<div class="top-headings">
							<h4 class="sty1">S-Corporation</h4>
							<p>This caters to U.S. federal income tax, and
a closely held corporation, sometime a limited
liability company (LLC) or a partnership making
valid election to be taxed under Subchapter S of
Chapter 1 of the IR Code. In general, these do
not pay any taxes. Instead, the corporation's
income and losses are divided among and
passed through to its shareholders who must
then report the income or loss on their own
individual income tax returns.</p>
						</div>
					</div>
					<div class="tab-ccorporation" data-tab-name="formation" data-tab-id="ccorporation">
						<div class="top-headings">
							<h4 class="sty1">C-Corporation</h4>
							<p>A C-Corporation, under U.S. federal income tax
law; a corporation that is taxed separately from
its ownersand is distinguished from an S
corporation, which generally is not taxed
separately. Many companies, including most
major corporations, are treated as C
corporations for U.S. federal tax purposes. C
corporations and S corporations both
enjoy limited liability, but only C corporations are subject to corporate income taxations.</p>
						</div>
					</div>
					<div class="tab-nonprofit" data-tab-name="formation" data-tab-id="nonprofit">
						<div class="top-headings">
							<h4 class="sty1">Non-Profit Corporation</h4>
							<p>Any legal entity which has
been incorporated under the law of its
jurisdiction for purposes other than making
profits for its owners or shareholders.
Depending on the laws of the jurisdiction, a
nonprofit may seek official recognition as such,
and may be taxed differently from traditional
and for-profit corporations, and treated
differently in other ways.</p>
						</div>
					</div>
				</div>

			</div>

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

<section class="stripe-3 ">
	<div class="container-fluid">
		<div class="top-heading text-center">
			<h4><span class="">Our Plans & Pricing</span></h4>
			<!-- <h3>Company Formation Packages</h3> -->
		</div>
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
	<div class="row text-center disclaimer">
	    <div class="col-md-12">
	        <p>
	            *For new trademark applications, Allied IP Firm charges a flat filing fee of $350 per class on top of our package fees. Government filing fees is $350 per class. Classifications are the business categories which are assigned by the lawyers themselves. They review the applications and depending on the nature of the business, the goods/services being offered and the medium of existence like physical/online, they assign the classifications which protect the nature of the business and it's functionality as a whole. We are not the ones to judge which classification(s) should be assigned and neither do we have any authority in their assigning.
	        </p>
	    </div>
	</div>
</section>



<?php
include('inc/testimonials.php');
?>


<?php
include('inc/footer.php');
?>