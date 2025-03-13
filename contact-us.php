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
    $pageTitle = 'Contact Us | Allied IP Firm';
    // $pageKeywords = '';
    // $pageDescription = "";
    $pageCanonical = 'https://alliedipfirm.com/contact-us';
    meta($pageTitle, $pageKeywords, $pageDescription, $pageCanonical);
    // We don't want the search engines to see our website just yet
    //$pageRobots = 'noindex,nofollow';
    ?>
    <?php include("inc/head-links.php"); ?>
</head>
<?php include("inc/menu.php"); ?>

<div class="banner gradient-1 services-pag" style="background-image: url(assets/img/bg/serviices-ban.webp);">
	<div class="container h-100">
		<div class="row justify-content-center align-items-center h-100">
			<div class="services-cont text-center">
				<h1 class="cl-white contact-us-head">Contact Us</h1>
			</div>
		</div>
	</div>
</div>

<div class="sec-ab stripe-3">
	<div class="flakes">
		<span class="flake fl1"></span>
	</div>
	<div class="container">
		<div class="contact-sec">
			<div class="row">
				<div class="col-lg-6">
					<div class="cont-sec">
						<div class="heading1 leftbd">
							<p>WE CATER YOUR DIGITAL NEEDS</p>
							<h2 class="mb-4">Have A Question? <br>Drop Us A Message</h2>
						</div>
						<p>We are here to cater to all your advertising needs. One of our customer support executives will get in touch with you shortly.</p>
						<h4>Reach Us at:</h4>
						<p>Put life back into your online business strategies with our ingenious digital services that clicks the right audience interest.</p>
						<div class="fflex ico-row pt-3">
							<a href="mailto:legal@alliedipfirm.com">legal@alliedipfirm.com</a>
						</div>
						<div class="fflex ico-row pb-3">
							<a href="tel:4085388655">(408) 538-8655</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 aos-anim">
					<div class="contact-form">
						<form id="contactForm" method="POST" action="javascript:lead('contactForm');">
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
							<div class="form-group">
								<label class="label" for="cname">Name</label>
								<input type="text" class="form-control js-valGet cname" name="name" id="cname" required>
							</div>
							<div class="form-group">
								<label class="label" for="cemail">Email</label>
								<input type="email" class="form-control email js-valGet js-emailvalid cemail" name="email" id="cemail" required pattern="^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$">
							</div>
							<div class="form-group iti-group">
								<label class="label" for="phonenumber">Phone Number</label>
								<input type="text" class="form-control js-byphone js-valGet js-numbervalid pn" placeholder="Enter Your Phone Number" name="phone" id="pn" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1')" required >
							</div>
							<div class="form-group">
								<label class="label" for="cmessage">Message</label>
								<textarea class="form-control textarea js-valGet cmessage" name="message" id="cmessage" required=""></textarea>
							</div>
							<div class="captcha-area form-group"></div>
							<div class="action-row">
								<button type="submit" class="btn btn-secondary js-emailsubmitbtn">SUBMIT
									NOW</button>
							</div>
							<div class="form_message">Thank you for submitting your request. Our representative will get back to you shortly.</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include('inc/footer.php');
?>