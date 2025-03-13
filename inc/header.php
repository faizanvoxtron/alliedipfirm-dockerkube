<?php
define("NITROPACK_HOME_URL", "https://alliedipfirm.com/"); 
define("NITROPACK_SITE_ID", "kpsNVKsztTooqTwynrllPawVekPPNNPv"); 
define("NITROPACK_SITE_SECRET", "WQuv6A0gQOYTbazFMv6UgrF74zgUcjulYfAOu0j2cU68aFid7YV6LVRttiGiMEeu"); 
include_once "../nitropack-sdk/bootstrap.php";

?>
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

<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="robots" content="noindex,nofollow">
    <title><?php echo $title; ?>
</title>
	<!--<title>Allied Ip Firm</title>-->
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <link rel="preload" href="assets/css/style.min.css?v=3.0" as="style">
    
     <link rel="icon" type="image/x-icon" size="16x16" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/css/style.min.css?v=3.0">
    <style>
   
	</style>
</head>

<body>
    <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
	<!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
	<style type="text/css">
	.logo svg {
        height: 55px;
        /* display: block; */
    }
	/*.loaderscreen {*/
	/*	position: fixed;*/
	/*	z-index: 99999;*/
	/*	width: 100%;*/
	/*	height: 100%;*/
	/*	background-color: #FFF;*/
		/*background-image: url('/assets/img/icons/ic-loading.gif');*/
	/*	background-position: center;*/
	/*	background-repeat: no-repeat;*/
	/*}*/
	
	@media (max-width:991px) {
		.loaderscreen {
			background-size: 10%;
		}
	}
</style>
<!-- <div class="loaderscreen js-loaderscreen"></div> -->
<header class="header js-fixed">
	<div class="container">
		<div class="fflex">
			<a href="index.php" class="logo">
				 <img loading="lazy" src="assets/img/logo.svg?v=0.1" alt="" class="js-tosvg" width="200" height="60"> 
				<!--<h2>Eliteipfirm</h2>-->
			</a>
			<div class="navigation">
				<ul>
					<li>
						<a class="<?= ($activePage == 'trademark-registration') ? 'active':''; ?>" href="trademark-registration">Trademark Registration</a>
					</li>
					<li>
						<a class="<?= ($activePage == 'copyright-registration') ? 'active':''; ?>" href="copyright-registration">Copyright Registration</a>
					</li>
					<li>
						<a class="<?= ($activePage == 'companyformation') ? 'active':''; ?>" href="companyformation">Company Formation</a>
					</li>
					<li>
						<a class="<?= ($activePage == 'trademark-search') ? 'active':''; ?>" href="trademark-search">Trademark Search</a>
					</li>
					<li>
						<a class="<?= ($activePage == 'amazon-brandregistry') ? 'active':''; ?>" href="amazon-brandregistry">Amazon Brand Registry</a>
					</li>
					<li>
						<a class="<?= ($activePage == 'faqs') ? 'active':''; ?>" href="faqs">FAQ's</a>
					</li>
					
					<!-- <li>
						<a href="javascript:;"><i class="ic-11"></i></a>
						<div class="sub-menu sty1 js-cart-dropdown">
							<div class="cart-dropdown">
								<div class="drop-head">
									<h6>Items added to my cart</h6>
								</div>
								<div class="drop-content">
									<div class="empty-cart-box">
										<p>Your cart is empty</p>
									</div>
									<div class="package-add-list">
										<div>
											
										</div>
									</div>
									<div class="drop-sub-total">
										<h6><strong>Sum-total</strong> <strong class="js-packageTotal">$1,538</strong></h6>
									</div>
									<div class="text-right">
										<a href="javascript:;">Proceed To Checkout</a>
									</div>
								</div>
							</div>
						</div>
					</li> -->
				</ul>
			</div>
			<div class="nav-hamburger js-menubtn">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
			<!-- <div class="cart-ico dropdownbox">
				<a href="javascript:;" class="js-dropdownbtn">
					<img loading="lazy" src="/assets/img/icons/cart-icon.png" alt="" height="37" width="37">
				</a>
				<div class="cart-widget dropdown-box">
					<div class="cart-widgetbox">
						<span class="d-none js-cartpacknames"></span>
						<div class="emptycart">Your cart is empty</div>
						<div class="cart-widgetcontent">
							<div class="cartHead">Items Added To My Cart</div>
							<ul class="js-cartlist cartlist"></ul>
							<ul class="cartFoot">
								<li>Grand Total:</li>
								<li>$<span class="js-total"></span></li>
							</ul>
							<a href="javascript:;" class="js-popup-link js-package-data cart-btn" data-popup="package-form">Proceed to checkout</a>
							<a href="javascript:;" class="con-payment cart-btn js-leadsubmitbtn">Continue Payment</a>
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</div>
	<div class="defaultOverlay js-defaultOverlay"></div>
</header>