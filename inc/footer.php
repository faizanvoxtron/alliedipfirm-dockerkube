<footer class="footer aos-anim mt-0" style="background-image: url(assets/img/Footer.webp);">
	<div class="sec-footertop">
		<div class="footer-content">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-md-4">
						<div class="logo-widget">
							<a href="/">
								 <img loading="lazy" src="assets/img/logo-white.svg" alt="" width="200" height="60"> 
								<!--<h2 class="text-white">Allied Ip Firm</h2>-->
							</a>
							<p>At Allied, our focus remains on serving our clients and offer them best alongside timesaving & hassle-free solutions that further transforms their productivity.</p>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="link-widget">
							<h5>Quick Links</h5>
							<ul>
								<!-- <li><a href="/about-us/">About Orange</a></li> -->
								<!-- <li><a href="/services/">Our Services</a></li> -->
								<li><a href="contact-us">Contact Us </a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="link-widget">
							<h5>Contact</h5>
							<ul>
								<!-- <li><i class="ic-2"></i><a href="javascript:;"></a></li> -->
								<li><i class="ic-3"></i><a href="mailto:legal@alliedipfirm.com">legal@alliedipfirm.com</a></li>
								<li><i class="ic-5"></i><a href="tel:4085388655">(408) 538-8655</a></li>
								<li class="f-white"><i class="ic-6"></i>159 N. Sangamon Street Chicago IL 60607</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="sec-copyright">
		<div class="container">
			<div class="fflex">
				<p> © Copyright 2014-2024 <span class=""></span> Allied IP Firm. Allied IP Firm provides information and software only. Allied IP Firm is not a "lawyer referral service" <br> and does not provide legal advice or participate in any legal representation. Use of Allied IP Firm is subject to our Terms of Service and Privacy Policy.</p>
				<ul class="copyright-links">
				<!--	<li><a href="privacy-policy">Privacy Policy</a></li>-->
				<!--	<li><a href="delivery-policy">Delivery Policy </a></li>-->
					<li><a href="terms-conditions">Terms & Conditions</a></li>
				<!--	<li><a href="refund-policy">Refund Policy</a></li>-->
				</ul>
			</div>
		</div>
	</div>
	<div class="c-popup">
		<div class="overlay js-close-popup"></div>
		<section class="popup package-form sm-popup popup-style1 view-package">
			<a href="javascript:;" class="c-close js-close-popup">x</a>
			<div class="popup-wrap">
				<div class="popupContent">
					<h3 class="text-center mb20">Package Form</h3>
					<div class="cnt-form p-0">
						<form id="popupForm" method="POST" action="javascript:lead('popupForm');">
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
							<div class="form-group">
								<input type="text" class="form-control js-valGet cn" placeholder="Enter Your Full Name" name="name" id="cn" required>
							</div>
							<div class="form-group">
								<input type="email" class="form-control email js-valGet js-emailvalid em" placeholder="Enter Your Email Address" name="email" id="em" required pattern="^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$">
							</div>
							<div class="form-group iti-group">								
								<input type="tel" class="form-control js-byphone js-valGet js-numbervalid pn" placeholder="Phone Number" name="phone" id="pn" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1')" required">
							</div>
							<button class="btn btn-primary w-100 border-radius-0 submit" type="submit">Submit
								<i class="fas fa-arrow-right fa-btn"></i>
							</button>
						</form>
					</div>
				</div>
			</div>
		</section>
		<section class="popup view-package1 md-popup popup-style1">
			<a href="javascript:;" class="c-closes js-close-popup">
				x
			</a>
			<div class="popup-wrap">
				<div class="popupContent">
					<div class="popup-para">
						<p>Your Payment has been processed. Your order will be delivered to you on the promised deadline. We will send you order updates via email address. If you have any queries, you can get in touch with us</p>
					</div>
					<div class="bgc-purple float-box">
						<div class="float-links">
							<a href="javascript:;"><i class="ic-4 bgc-gr"></i>(408) 538-8655</a>
						</div>
						<div class="float-links sty1">
							<a href="javascript:;"><i class="ic-5 bgc-mr"></i>legal@alliedipfirm.com</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</footer>
<script type="text/javascript" src="assets/js/vendors.js?v=1.1"></script>
<!-- <script type="text/javascript" src="assets/js/fingerPrint.js?v=1.1"></script> -->
<script type="text/javascript" src="assets/js/functions.js?v=1.1"></script>
<script type="text/javascript" src="assets/js/script.js?v=1.5"></script>

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8-beta.17/jquery.inputmask.min.js" integrity="sha512-zdfH1XdRONkxXKLQxCI2Ak3c9wNymTiPh5cU4OsUavFDATDbUzLR+SYWWz0RkhDmBDT0gNSUe4xrQXx8D89JIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->
<!--<script>-->
<!--	$(document).ready(function() {-->
<!--		$(".email").inputmask("email");-->
<!--	});-->
<!--</script>-->
<!-- Start of  Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=7463533f-519c-4755-820e-b4f7e8bdbc07"> </script>
<!-- End of  Zendesk Widget script -->
<script>
    zE(function() {
        $zopim.livechat.setOnUnreadMsgs(function(numUnread){
     if(numUnread > 0 && !$zopim.livechat.window.getDisplay()) {
      $zopim.livechat.window.show();
    }
  })
});
</script>
<script>
	$('.chat, .chatt, .live_chatt').click(function() {
		$zopim.livechat.window.show();
	});
</script>

<!-- recaptcha script -->
<script src="https://www.google.com/recaptcha/api.js?render=6LfLgMMhAAAAAPTfbvvJjuSgmIFFqugSPR3kTJUC"></script>
<script>
    jQuery(document).ready(function(){

setTimeout(function(){

     //var tag_new = jQuery("template").eq(38).attr("id");
     var tag_new = jQuery("template").last().attr("id");
     console.log(tag_new);

     //alert(tag_new);
     jQuery("#" + tag_new).css("display", "none");
     jQuery("#" + tag_new).next().next().css("display", "none");
}, 100);

});
</script>

</body>

</html>