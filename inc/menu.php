
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
			<a href="/" class="logo">
				 <img loading="lazy" src="assets/img/logo.svg?v=0.1" alt="" class="js-tosvg" width="200" height="60">
			</a>
			<div class="navigation">
				<ul>
					<li>
						<a class="<?= ($activePage == 'trademark-registration') ? 'active':''; ?>" href="trademark-registration">Trademark Registration</a>
					</li>
					<li>
						<a class="<?= ($activePage == 'copyright-registration') ? 'active':''; ?>" href="copyright-registry">Copyright Registration</a>
					</li>
					<li>
						<a class="<?= ($activePage == 'company-formation') ? 'active':''; ?>" href="company-formation">Company Formation</a>
					</li>
					<li>
						<a class="<?= ($activePage == 'trademark-search') ? 'active':''; ?>" href="trademark-search">Trademark Search</a>
					</li>
					<li>
						<a class="<?= ($activePage == 'amazon-brand-registry') ? 'active':''; ?>" href="amazon-brand-registry">Amazon Brand Registry</a>
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