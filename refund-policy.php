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
    <?php
    include('inc/meta.php');
    $pageTitle = "Refund Policy | Allied IP Firm";
    // $pageKeywords = '';
    // $pageDescription = "";
    $pageCanonical = 'https://alliedipfirm.com/refund-policy';
    meta($pageTitle, $pageKeywords, $pageDescription, $pageCanonical);
    // We don't want the search engines to see our website just yet
    //$pageRobots = 'noindex,nofollow';
    ?>
    <?php include("inc/head-links.php"); ?>
</head>
<?php include("inc/menu.php"); ?>

<div class="banner gradient-1 services-pag" style="background-image:
				url(assets/img/bg/serviices-ban.webp);">
	<div class="container h-100">
		<div class="row justify-content-center align-items-center h-100">
			<div class="services-cont text-center">
				<h1 class="cl-white">Refund Policy</h1>
			</div>
		</div>
	</div>
</div>

<div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
	<div class="container">
		<div class="page-title-content">

			<h3 class="clr-pp">Refund Policy.</h3>

		</div>
	</div>
</div>
<section class="pricing-area ptb-70">
	<div class="container">
		<p>Allied IP Firm ensures 100% customer satisfaction. In case of any duplicate charge due to processing error, failing to fulfill any of your special designing requirements or not able to complete your design order as per the delivery policy, your complete design order amount will be refunded.</p>
		<p>In case of any dissatisfaction from any design services provided by Allied IP Firm, you can submit a refund request within five days of your initial designs completion. However, it shall be assumed between both parties that you are satisfied with your initial designs if a refund request is not received within five days of initial designs delivery. For any Special / Combo packages, refund will be applicable the same as it is on the single packages.</p>
		<p>Your refund would be processed as per the chart below:</p>
		<p>All refund requests will be fulfilled as per the following arrangement:</p>
		<div class="listing">
			<ul>
				<li>If request for refund is made before the order delivery, you would be eligible for Full Refund.</li>
				<li>If request for refund is made within 48 hours, you would be eligible for 66% refund.</li>
				<li>If request for refund is made between 48- 120 hours of the initial design delivery, you would be eligible 33% refund.</li>
				<li>No refund request will be entertained after 120 hours of your initial design delivery, however since we believe in 100% customer satisfaction you`re encouraged to contact us in case of any concern.</li>
			</ul>
		</div>
		<p>All refund requests should be communicated to the support department. Allied IP Firm, based on the violation of your user agreement reserves the right to approve/disapprove your request on an individual case to case basis. How to claim your refund</p>
		<p>To assure your refund request is approved, please make sure you meet the following requirements:</p>
		<div class="listing">
			<ul>
				<li>Claim your refund specifying your concern by contacting us</li>
				<li>We will try to resolve your concern by virtue of our revision policy immediately or else will email you a refund request approval from our refund department.</li>
			</ul>
		</div>
		<p>After the refund, your design rights would be obtained by Allied IP Firm and you would not be able to display any version of the design sent by company. Let us also specify that:</p>
		<div class="listing">
			<ul>
				<li>Since the design rights would now be transferred to the company, you agree that you will have no right (direct or indirect) to use any response or other content, work product or media, nor will you have any ownership interest in or to the same.</li>
				<li>Working in collaboration with the Government Copyright Agencies Allied IP Firm would share Copyright Acquisition information for the refunded designs that would restrict the re-use of the designs as original designs in the future.</li>
			</ul>
		</div>
		<p>If you have any questions or concerns about our Refund Policy, please contact us by clicking here.</p>



	</div>
</section>
<div class="container">
	<div class="last-lane "></div>
</div>

<?php
include('inc/footer.php');
?>