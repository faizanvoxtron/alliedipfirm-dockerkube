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
    $pageTitle = "Privacy Policy | Allied IP Firm";
    // $pageKeywords = '';
    // $pageDescription = "";
    $pageCanonical = 'https://alliedipfirm.com/privacy-policy';
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
				<h1 class="cl-white">Privacy Policy</h1>
			</div>
		</div>
	</div>
</div>
 

<div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
	<div class="container">
		<div class="page-title-content">
		
			<h3 class="clr-pp"> Privacy Policy.</h3>
	
		</div>
	</div>
</div>
<section class="pricing-area ptb-70">
	<div class="container">
		<p>Allied IP Firm is committed to taking reasonable steps toward protecting your privacy online and managing your information responsibly. This Privacy Notice is intended to notify you of our online privacy practices, the type of information that may be collected and stored, how the information is used, with whom the information may be shared, what choices are available to you regarding the collection, use and distribution of the information, what kind of security procedures are in place to protect the loss, misuse or alteration of information under our control, and who to contact with questions or concerns.</p>
		<p>This Privacy governs your use of, or interaction with, digital advertisements served by Allied IP Firm (the “Ads”), including but not limited to any advertisement you view, click on or link to, together with any information you may voluntarily provide in connection therewith, as well as websites owned or operated (the “Website(s)”) by Allied IP Firm and/or its affiliates (collectively, the “Company” or “we” or “us” or “our”).</p>
		<p>This Privacy Notice describes our information handling practices related to advertising serving and tracking, as well as how we handle personal information we may obtain when you use any of the Websites, and how we may share it thereafter. This Privacy Notice does not apply to information we may obtain through other means, including offline or online in another forum.</p>
		<p>This Privacy Notice does not apply to other third-party websites to which we may link, including the websites of our clients for whom we serve Ads. When linking to another website, you must review that website’s privacy notice as other websites may not treat information collected online in the same manner as we do.</p>
		<p class="bold">By using the Websites, contacting us and/or by providing any personal information to us, you consent to the collection and use of information by us in accordance with this Privacy Notice. If we decide to change our Privacy Notice, we will post those changes on this page.
		</p>	
		<h2 class="sub-heading">Why We Collect Information</h2>		
		<p>We collect information because it helps us communicate to you about products, special offers, and information and events about which you might like to hear. We also collect your personal information to help us design and deliver our products and services, including the Websites, as well as measure the efficiency and conversion rate of the advertisements that we serve.		
		</p>
		
		<h2 class="sub-heading">What Information We Collect</h2>		
		<p>The following generally describes the type of information we may collect about you. Those who wish to communicate with us but do not wish to provide personally identifiable information online may contact us through the address or phone numbers provided on our corporate website, located at www.alliedipfirm.com However, you should note that if you contact us by phone, email or via postal mail, you may still be submitting personally identifiable information to us.</p>

		<h2 class="sub-heading">Non-Personally Identifiable Information</h2>		
		<p>We do not automatically collect personally identifiable information about you when you visit the Websites unless otherwise stated or you voluntarily input or submit such information, such as through registration on one of the Websites or otherwise. Should you voluntarily provide us with personally identifiable information, you consent to our use of it in accordance with this Privacy Notice.</p>
		<p>Even if you do not submit personal information through the Network Websites, we may collect and store certain information automatically. This information, which is automatically obtained, may be used for marketing and analytical purposes and shared with our partners, vendors, clients and other third parties with whom we conduct business, and as otherwise required by law (such as to comply with a judicial proceeding, court order or subpoena). This information may include, but is not necessarily limited to:</p>
		<div class="listing">
			<ul>
				<li>Internet Protocol (IP) address of the domain from which you access the Internet, either your individual address or the proxy provided by your Internet Service Provider (ISP). However, this information does not include your name or other personally identifiable information.</li>
				<li>Date and time you access a Website and the site of any advertiser whose website you accessed through one of our Ads.</li>
				<li>Web pages you view (recorded by the text and graphics files that compose that page), as well as click-stream data.</li>
				<li>Web address of the site from which you linked directly to our Website, as well as certain exit links.
					Browser version and operating system of the computer or mobile device you are using.
					</li>
			</ul>	</div>
		
		
		<p>The information described above is generally used to drive advertising relevance, to maintain the quality of our offerings, and to provide general aggregate statistics regarding the use of the Websites and the interaction with the Ads. Such information is not personally identifiable. Geographic, demographic and category preference information across user profiles may be summarized for merchants advertising with us and for our partners and companies with whom we do, or seek to do, business. This helps prospective sponsors understand the viewership they will reach. The Company is the owner, co-owner or a licensee of the information it collects through the Websites and Ads.</p>

		<h2 class="sub-heading">Personally Identifiable Information</h2>	
		<p>In order to use some areas of our Websites, you may first be required to provide certain registration information, including certain personally identifiable information such as your name, age, email address, home address, educational and professional degree/certification information and related personal information. We may use this information to provide a more personalized experience (for example, providing better newsletter content, advertising and/or special offers that we think may be of interest to you).</p>
		<h2 class="sub-heading">How We Collect Information</h2>	
		<div class="listing">
			<ul>
				<li><span class="bold">You Give Us Information:</span> We collect information from you when you submit it to us through one of our Websites.</li>
				<li><span class="bold">We Collect Information Automatically: </span> We automatically collect certain types of information when you visit our Websites or view our Ads. For example, we automatically collect various types of technical information when you use our Websites and place cookies when we serve our Ads, as otherwise described in this Privacy Notice.</li>
				<li><span class="bold">We Collect Information from Other Sources:</span>  We may obtain information about you from outside sources. We may also receive information from third parties who provide services for us as otherwise discussed in this Privacy Notice.</li>
					
			</ul>	</div>

		<h2 class="sub-heading">Information Collection Processes</h2>	
		<p class="bold">Registration-based Targeting, User Targeting and Retargeting Using Cookies
			</p>
		<p>
			In addition to the information collected by us and registration information submitted by you, we may employ both first-party and third-party cookies. We may use cookies on our Websites to provide relevant content, offers and advertising messages, or to remember preferences. Cookies may also be placed on your computer in connection with any Ads we serve to you, or when you click on any such Ads. We may also improve the relevance of the advertising and content you receive based on the past website pages you visited. We use cookies that are persistent (i.e., remains on your computer unless you remove it sooner) and non-persistent (i.e., remains on your computer for a shorter amount of time). For example, we generally will use a persistent cookie to allow us to recognize your computer. Both types of cookies can be deleted by you at any time. You can often set your browser not to accept cookies or to notify you when you are sent a cookie, giving you the opportunity to decide whether or not to accept it; however, doing so will likely restrict us in better serving your needs and interests, and may limit the content and sites you may access. You may also opt-out of either type of cookie at any time by following the instructions in the Opt-Out section of this Privacy Notice.
			Although we believe that cookies help enhance your experience on the Web by delivering more relevant messages to you, we do not need cookies to deliver ads to you. If you decline our cookie(s), you will still be able to view ads; however, they will not be optimized for your particular tastes or preferences, and you may see generic ads repeatedly.
		
			</p>
			<p>We will not use shared local objects (commonly referred to as “FLASH cookies”) in a manner inconsistent with the purposes for which they were designed unless you are specifically notified that we intend to use them for a specific service. FLASH cookies are cookies that are placed on your computer that are not removed through normal browser management tools.</p>

			<h2 class="sub-heading">Web Beacons or Clear GIFs</h2>	
			
<p>In addition to cookies, Website pages and/or emails, as well as client websites linked to by the Ads, may contain electronic images known as pixel tags (also called “action pixels,” “web beacons” or “clear gifs”) and/or similar devices to identify you, to track your online activity for purposes of formulating future campaigns, and to help determine the effectiveness of a joint-promotional or advertising campaign. These web beacons and plug-ins are small graphic images (typically that you cannot see) or code on a website or in an email message that are used for such things as recording web pages and advertisements clicked on by a user or for tracking the performance of email marketing campaigns. These devices help us analyze online behavior and measure the effectiveness of the Ads, our Websites and our marketing efforts. We also work with third-party service providers that help us track, collect and analyze this information. Third-party entities with whom we have agreements may place these devices on the website and/or in e-mails to use information obtained from them such as pages viewed, items purchased, e-mails opened and items upon which you may click in e-mails. These third-party providers may also place cookies onto your computer. Those third-party cookies may enable us to obtain aggregate demographic information and user statistics about you and your preferences from these third-party sources as well as our information we have about you.</p>
<h2 class="sub-heading">Ad Serving Software</h2>
<p>Allied IP Firm utilizes Google’s Display Ad Network in conjunction with Allied IP Firm’s proprietary Trading Desk application for delivery of advertising, including their interest-based targeting software. To view Google’s privacy policy, visit http://www.google.com/intl/en/policies/privacy/.</p>	

<h2 class="sub-heading">How We Use the Information We Collect</h2>
<p>
We retain personal information submitted by you on a secure server. The personal information that you submit to us remains your property, but by submitting that personal information to us, you grant to us the right to use that information for marketing purposes, including sharing such information with third parties. For example, when you select to receive information about offerings from a third-party company during the registration process, we will share your personal information with that third-party company to carry out your information request. We may use your personal information to verify your professional and educational status and identity and/or to directly market certain offers to you (via advertising units or email). We may join together with other businesses to bring select offers to you based upon the personal information that you submit to us. 
The Company has agreements with organizations and businesses for whom it serves the Ads. When you interact with these other organizations, businesses or websites, different or additional rules and privacy policies may apply. The Company does not control the collection or use of information provided under these circumstances and recommends that you review those organizations’, businesses’ and websites’ privacy policies and terms of use.</p>
<p>We reserve the right to release your personal information in the event that we believe that you are violating any of the terms or conditions (including this Privacy Notice) of the Websites, using the Websites to commit unlawful acts, if such information is subpoenaed, if we are acquired, or when we deem it necessary or appropriate. By agreeing to the terms of this Privacy Notice, you hereby consent to disclosure of any record or communication to any third party when we, in our sole discretion, determine the disclosure to be appropriate including, without limitation, sharing your email address with other third parties for suppression purposes in compliance with the CAN-SPAM Act of 2003, as amended from time to time and Federal Trade Commission enabling regulations, or any other applicable law, rule or regulation.
You also agree that we, and other third parties, may contact you via email, direct mail and telemarketing for feedback purposes and surveys.</p>
<p>We will not rent, sell or share any personal information we gather from you to third parties, except as indicated herein or to provide information regarding the products or services you have. Notwithstanding the foregoing, we may provide your personal information to third parties for data services, which may include, but not are not limited to, data cleansing, merge-purge, appending, campaign effectiveness analysis, and mapping or for other purposes we deem important to the services we provide.
We may transfer your personal information to our subsidiaries and corporate affiliates, or in connection with the reorganization or sale of the Company, or the sale of all or substantially all of the Company’s assets.
You may opt-out of receiving marketing email messages from the Websites either when you register with the Website or at a later date. To opt-out of receiving emails after registration, you must follow the process established by the Website. At minimum, there should be an unsubscribe process defined in any commercial email.</p>
<h2 class="sub-heading">Your Choices about the Information We Collect</h2>

<p>If you do not consent to the way in which we may use your personal information, please do not submit any personal information to us. If you do not wish to receive emails about special offers and other promotions from us, click the unsubscribe link located in our emails or opt-out in your account profile, or as set forth herein.</p>
<p>If you do not wish to receive other marketing materials from us and/or if you do not want us to share your personal information with other entities as stated in this Privacy Notice, please provide us with your exact name and address and advise us that you wish to opt-out for information sharing or receiving information from us or both as the case may be.</p>
<h2 class="sub-heading">How to Opt-out</h2>

<h2 class="sub-heading">Cookies</h2>
<p>If you no longer want to have the data you have provided through registration-based or user targeting used to help improve the relevance of your online advertising experiences, you can manage your permissions and opt-out. If you choose to opt-out, we will drop a cookie on your browser indicating that you do not want to be tracked. While it sounds counterintuitive, this is the standard industry practice. The cookie that we will drop will just have one field indicating that you have chosen not to be tracked. Please note that if you delete, block or otherwise restrict cookies, or if you use a different computer or Internet browser, you may need to renew your opt-out choice, as our opt-out is cookie based, and may be removed or disabled by such actions. If you have opted out and wish to opt back in you may use the cookie settings in your browser to clear your opt-out cookie.</p>

<h2 class="sub-heading">Adserving Software</h2>

<p>If you no longer want to have the data you have provided through advertising software (as detailed above) help improve the relevance of your online advertising experiences, you can manage your permissions and opt-out at https://www.google.com/settings/ads/onweb.</p>
<h2 class="sub-heading">Privacy of Children Who Visit the Website</h2>

<p>We recognize the unique privacy concerns regarding children. We are committed to carefully protecting privacy where children are involved no matter the point of contact. In particular, our intention is to fully comply with the Children’s Online Privacy Protection Act (“COPPA”). Pursuant COPPA guidelines, we do not knowingly collect personal information from children under the age of 13. If a parent or guardian is made aware that a child under the age of 13 has provided us with personal information through any point of contact, please contact us and we will delete the information about the child referenced from our files.</p>
<h2 class="sub-heading">Limitation of Liability</h2>

<p>IN NO EVENT SHALL THE COMPANY BE LIABLE FOR ANY INCIDENTAL, CONSEQUENTIAL, INDIRECT OR SPECIAL DAMAGES (INCLUDING LOST PROFITS), WHETHER BASED ON WARRANTY, CONTRACT, TORT OR ANY OTHER LEGAL THEORY, AND WHETHER OR NOT WE ARE ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. BECAUSE SOME STATES OR JURISDICTIONS DO NOT ALLOW THE EXCLUSION OR LIMITATION OF LIABILITY FOR CONSEQUENTIAL OR INCIDENTAL DAMAGES, THE LIMITATIONS SET FORTH IN THIS PARAGRAPH MAY NOT APPLY TO YOU. IF THE FOREGOING LIMITATIONS ARE HELD INAPPLICABLE OR UNENFORCEABLE FOR ANY REASON, THEN THE MAXIMUM LIABILITY OF US TO YOU FOR ANY TYPE OF DAMAGES SHALL BE LIMITED TO THE GREATER OF THE ACTUAL DAMAGES SUFFERED BY YOU OR THE AMOUNT OF MONEY YOU PAID TO US IN CONNECTION WITH THE SERVICES OR ACT WHICH RESULTED IN THE ALLEGED DAMAGES.</p>

<h2 class="sub-heading">Acceptance of this Privacy Notice</h2>

<p> viewing any page on any website that contains Ads, or by interacting with our Websites, including, without limitation, signing up for offers and/or continuing to receive information from our Websites, you hereby agree to this Privacy Notice. We reserve the right, at our discretion, to change, modify, add and/or remove portions of this Privacy Notice at any time. All changes will take effect immediately upon their posting on the Privacy Notice page. Please check this page periodically for changes. Your continued use of the Websites following the posting of changes to this Privacy Notice will mean that you accept any and all such changes and agree to continue receiving direct marketing from us and other third-party companies. If you do not agree to the terms of this Privacy Notice, together with the privacy policy of each Website you visit, you are not permitted to view or use any page on our Websites or any other website that contains any of our Ads.</p>
<h2 class="sub-heading">Rights to Information</h2>

<p>You hereby grant Company an irrevocable, perpetual, worldwide right and license to use and display all information submitted by you in accordance with this Privacy Notice.</p>
<h2 class="sub-heading">Third-Party Services</h2>

<p>You may be able to link from Websites to third-party websites (“Linked Websites”). In addition, the Company may work with third parties (for example, advertising agencies, audience measuring and auditing services, etc.) who may also gather information, including potentially personally identifiable information, about you from or through your use or viewing of our Websites or Ads contained on any other website. You acknowledge and agree that we have no responsibility for the information, content, products, services, advertising, code or other materials which may or may not be provided by or through Linked Websites. Links to Linked Websites do not constitute an endorsement by us of such websites or the information, content, products, services, advertising, code or other materials presented on or through such websites.</p>

<p>The Company disclaims any liability for: (1) links from another website to our Websites; (2) links to a Linked Website from our Websites; and (3) any of our Websites or information contained thereon. The Company cannot guarantee the standards of any website to which links are provided on any of our Websites, nor shall the Company be held responsible for the contents of such non-Company sites, or any subsequent links. For this reason, the Company does not represent or warrant that the contents of any third-party website are accurate, compliant with state or federal law, or compliant with copyright or other intellectual property laws. Also, the Company is not responsible for webcasting or any other form of transmission received from any Linked Website. Any reliance on the contents of a third-party website is done at your own risk, and you assume all responsibilities and consequences resulting from such reliance.</p>

<p>Once you select a link that takes you to a linked website, you are subject to the privacy policy of the linked website. Please note that these linked websites may have privacy policies that differ from those of the Company in the level of security, use of cookies and use of personally identifiable information. We have no control over any information you choose to provide those linked websites, and we encourage you to review the privacy policies of these websites before providing them with your personally identifiable information.</p>

<h2 class="sub-heading">Visitors to the Website Outside of the United States</h2>

<p>If you are visiting the Website from a location outside of the United States, your connection will be through and to servers located in the United States. All information you receive from the Website will be created on servers located in the United States, and all information you provide will be maintained on web servers and systems located within the United States. The data protection laws in the United States and other countries might not be the same as those in your country. By using this Website and/or submitting information to us, you specifically consent to the transfer of your information to the United States, to the facilities and servers we use, and to those with whom we may share your information.</p>
<h2 class="sub-heading">Security</h2>

<p>We employ procedural and technical safeguards to secure your personal information against loss, theft, alteration, and unauthorized access, use and disclosure. We also employ many security procedures to protect your information from unauthorized access by users inside and outside the Company. We also protect your information offline. All of our users’ information is restricted in our offices. Only employees or contractors who need the information to perform a specific job are granted passwords to access personally identifiable information.</p>

<p>While we use the foregoing security measures to protect your information, please note that no data transmitted over the Internet or stored and utilized for business purposes can be guaranteed to be completely secure. No security measures are perfect or impenetrable, and we cannot guarantee that only authorized persons will view your information. You can reduce these risks by using commonsense security practices such as choosing a strong password, using different passwords for different services and using up-to-date antivirus software. Regardless of the precautions taken by us and by you, we cannot ensure or warrant the security of any information you transmit to us, and you transmit such information at your own risk.</p>
</div>
</section>
<div class="container">
<div class="last-lane "></div>
</div>

<?php
include('inc/footer.php');
?>