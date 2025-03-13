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
    $pageTitle = "Delivery Policy | Allied IP Firm";
    // $pageKeywords = '';
    // $pageDescription = "";
    $pageCanonical = 'https://alliedipfirm.com/copyright-registration';
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
				<h1 class="cl-white">Delivery Policy</h1>
			</div>
		</div>
	</div>
</div>
 

<div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
	<div class="container">
		<div class="page-title-content">
		
			<h3 class="clr-pp"> Delivery Policy. </h3>
	
		</div>
	</div>
</div>
<section class="pricing-area ptb-70">
	<div class="container">
		<p>As soon as your order is received, our system will begin creating your website according to the options you selected during registration. After you've made your first payment, one of our project managers will get back to you within 48 hours.</p>

		<p>Upon completing your registration, you will receive a confirmation email and if need be, our representative will discuss your requirement over phone. Delivered services are considered complete when </p>
		<ul>
			<li>Your website is operational and your credentials are working as expected. </li>
			<li>Your logo is delivered and you have acknowledged</li>
			<li>Your Trademark Registration Documents are reviewed and you have received a satisfactory response from our team</li>
			<li>Your Amazon Store is up and running. </li>
		</ul>
		<p></p>
		<p>The delivery deadlines will be as per the selected package. However, should you choose any customizations, the delivery deadlines may vary. </p>
	</div>
</section>
<div class="container">
	<div class="last-lane "></div>
</div>

<?php
include('inc/footer.php');
?>