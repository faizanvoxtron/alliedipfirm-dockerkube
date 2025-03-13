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
    $pageTitle = 'Get Copyright Regisrtation & Protection Services | Allied IP Firm';
    // $pageKeywords = '';
    $pageDescription = "Need to register your copyright? Allied IP Firm provides you online applying facility and hire a legal copyright attorney near you for only $199.";
    $pageCanonical = 'https://alliedipfirm.com/copyright-registration';
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
					<h1>Get Your Brand Copyrights Protection from the
						<span>US Copyrights Office for as low as $199</span>
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


<section class="stripe-3">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<img loading="lazy" src="assets/img/mix/img4.webp" alt="">
			</div>
			<div class="col-lg-6">
				<div class="top-headings">
					<h6 class="cl-iPrimary">Our Work</h6>
					<h3>Getting A COPYRIGHT is as Important as Doing Business is.</h3>
					<p>Copyrights Protection provides unmatched privileges and responsibilities for businesses. It allows unapproved use of name/slogans etc. By other parties of the same category and protect innovation, prevents duplication and dissemination of their works. Assuming you have applied your originations, you wouldn't prefer the same to be opted or used by others without your approval.</p>
					<p>Hence copyright protection; whether artistic or illustrative, visual expressions, or narrative etc, is fundamental for safeguarding your copyrightedcreation. At this point when you present your copyright registration, you formally lay out responsibility for work and build up your future freedoms, like infringement and unapproved utilization of copyright by individuals or businesses.</p>
					<a href="contact-us" class="btn btn-primary">Contact Us</a>
				</div>
			</div>

		</div>
	</div>
</section>




<section class="custom-sol stripe bg-detail" style="background-image: url(assets/img/custom-desk.webp);">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 align-self-center">
				<h3 class="fs-40">1-Step-Sign-Up Process</h3>
				<p class="fs-16">With our 1 step sign up process, you may initiate the process of copyrights protection for your brand. By providing a few basic information, our attorneys will review your case and initiate the application process.Our services also include trademark registration, company formation for both businesses and individuals.</p>
				<!-- <a href="contact-us.php" class="btn btn-primary">GET YOUR TRADEMARK REGISTERED NOW</a> -->

			</div>
		</div>
	</div>
</section>
<section class="services stripe mb-5 pb-5">

	<div class="container">
		<div class="service-box">
			<div class="top-headings m-3">
				<h6 class="cl-white pb-2">COPYRIGHT REGISTRATION</h6>
				<h5 class="cl-white">Secure your brand ensuring it is Protected from any Theft or Scam.</h5>
				<p class="cl-white">At Allied IP Firm, our experts deliver their commitments in providing legit copyrights protection services to secure your brands/products a simple way. While you focus in generating revenues for your business, our experts take the hassle of registrations, copyrights protection and trademarks that further allows you to file a lawsuit against organizations/individuals found using your registered material without consent</p>
			</div>
			<div class="d-fflex">
				<div class="box-wrap">
					<div class="ic-wrap">
						<i class="ic-4"></i>
					</div>
					<div class="box-content pl-2">
						<p>
							Let us take upkeep of the tiresome process of organizing and filing your copyright application</p>
					</div>
				</div>
				<div class="box-wrap">
					<div class="ic-wrap">
						<i class="ic-4"></i>
					</div>
					<div class="box-content pl-2">
						<p>By registering your copyright, reinforce your rights to sue organizations for violation</p>
					</div>
				</div>
				<div class="box-wrap">
					<div class="ic-wrap">
						<i class="ic-4"></i>
					</div>
					<div class="box-content pl-2">
						<p>Registration with US Copyright Office secures your work in most countries</p>
					</div>
				</div>
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
								<li><i class="ic-tik"></i>Cease & Desist Letter A customer-specific form you can further customize if someone is infringing on your copyright.Avoid wasting time and money</li>
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
	
	<div class="row text-center disclaimer">
	    <div class="col-md-12">
	        <p>
	            *For new trademark applications, Allied IP Firm charges a flat filing fee of $350 per class on top of our package fees. Government filing fees is $350 per class. Classifications are the business categories which are assigned by the lawyers themselves. They review the applications and depending on the nature of the business, the goods/services being offered and the medium of existence like physical/online, they assign the classifications which protect the nature of the business and it's functionality as a whole. We are not the ones to judge which classification(s) should be assigned and neither do we have any authority in their assigning.
	        </p>
	    </div>
	</div>
</section>


<section class="stripe-3">
	<div class="container">

		<div class="row align-items-center">

			<div class="col-lg-7">
				<div class="top-headings">
					<!-- <h6 class="cl-iPrimary">Why Choose Us</h6> -->
					<h3 class="fs-26 mb-2">Pre-Copyrights Authorization</h3>
					<div class="row">
						<div class="col-lg-6">
							<ul class="packages-gurantee">
								
								<li>
									<span class="ic-wrap"><i class="ic-4"></i></span> Writers/Story Tellers
								</li>
								<li>
									<span class="ic-wrap"><i class="ic-4"></i></span> Images
								</li>
								<li>
									<span class="ic-wrap"><i class="ic-4"></i></span> Sound Recordings
								</li>
								<li>
									<span class="ic-wrap"><i class="ic-4"></i></span> Melodic Works / Lyrics
								</li>
								<li>
									<span class="ic-wrap"><i class="ic-4"></i></span> Songs / Tracks
								</li>
								<li>
									<span class="ic-wrap"><i class="ic-4"></i></span> Websites
								</li>
								<li>
									<span class="ic-wrap"><i class="ic-4"></i></span> Maps
								</li>
								<li>
									<span class="ic-wrap"><i class="ic-4"></i></span> Motion Graphics
								</li>
							</ul>
						</div>
						<div class="col-lg-6">
							<ul class="packages-gurantee">
								<li>
									<span class="ic-wrap"><i class="ic-4"></i></span> TV Shows
								</li>
								<li>
									<span class="ic-wrap"><i class="ic-4"></i></span> Articles
								</li>
								<li>
									<span class="ic-wrap"><i class="ic-4"></i></span> Videos
								</li>
								<li>
									<span class="ic-wrap"><i class="ic-4"></i></span> Animated Graphics
								</li>
								<li>
									<span class="ic-wrap"><i class="ic-4"></i></span> Architectural Drawings
								</li>
								<li>
									<span class="ic-wrap"><i class="ic-4"></i></span> Visual / Graphic Art
								</li>
								<li>
									<span class="ic-wrap"><i class="ic-4"></i></span> Programs & Software
								</li>
								<li>
									<span class="ic-wrap"><i class="ic-4"></i></span> Artistic Masterpiece
								</li>
								
							</ul>
						</div>
					</div>

				</div>
			</div>
			<div class="col-lg-5">
				<img loading="lazy" src="assets/img/mix/img5.webp" alt="">
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