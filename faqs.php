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
    $pageTitle = "FAQ's | Allied IP Firm";
    // $pageKeywords = '';
    // $pageDescription = "";
    $pageCanonical = 'https://alliedipfirm.com/faqs';
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
				<h1 class="cl-white">FAQ's</h1>
			</div>
		</div>
	</div>
</div>
 
<div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
	<div class="container">
		<div class="page-title-content">
		
			<h3 class="clr-pp">FAQ's</h3>
	
		</div>
	</div>
</div>
<section class="pricing-area ptb-70">
	<div class="container">
      <div class="accordion">
        <div class="accordion-item">
          <button id="accordion-button-1" aria-expanded="false">
            <span class="accordion-title">FAQ 1: How long the process can take? Can I expedite my order for faster service? How will I know when you've filed my trademark application? </span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>We're a renown, established law firm and sometimes we get sick or bogged down in litigation. We aim for a one-week turnaround time, but it may take us as long as or longer than two weeks to give you a major update, whether that means that we have a legal opinion for you, that we’ve filed your trademark application, or that we need more information. For packages that include a search and legal opinion, we generally file the application within two weeks after you’ve given us consent to file. After we’ve filed, we will email you to let you know, with proof-of-filing attached.</p>
 
            <p>If you need the application filed immediately, choose any of our packages and add our expedited filing option for $99 for our Basic package or $300 for our Value and Safe packages on our form.</p>
             
            <p>Once the application is submitted, we should hear an initial answer from the USPTO after six months (6) months, though lately they've been taking about eight (8) months because of a high volume of trademark applications. If everything goes right, you should have a fully registered trademark in 9 to 12 months, at which point you can stop using the TM symbol and start using the ® symbol next to your brand.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-2" aria-expanded="false">
            <span class="accordion-title">FAQ 2: Do I need any documents in order to file? What information do you need from me?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>No, most of our clients do not need to have any documents ready. You do not need any business formation documents or sales invoices in order to register a trademark in the US. If we do need any documents from you, we’ll ask you for them after you’ve retained us.</p>
            <p>All of the information we need from you is asked for on our online form, and it’s pretty basic information (what word/logo/slogan you want to register, what goods/services you want to register with them for, what your mailing address is, etc.).</p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-3" aria-expanded="false">
            <span class="accordion-title">FAQ 3:  When can I use the TM and ® symbols? Am I unprotected until the application process is finished?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>You can use the TM symbol once the application is filed and you receive the serial number and the filing receipt of your trademark. The TM symbol simply means that you consider yourself to have “trademark” rights to your trademark as the filing process has started, and it has very little legal significance. In the United States, you can only use the ® symbol next to your trademark when it is fully registered at the federal level, which is what we help you with.</p>
 
            <p>While your mark will not be fully protected until you’ve reached registration, you do gain two things on the day you file your trademark application. First, your application will have priority over any trademark application that has a later filing date than yours. Second, once you do reach registration, you will have retroactive trademark protection going back to the day you filed your application, meaning you can threaten anybody who started using an infringing mark after you filed your application, even if they started using it before you actually reached registration.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-4" aria-expanded="false">
            <span class="accordion-title">FAQ 4: Do I have to renew my trademark after it’s registered?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>Between the 5th and 6th year following registration, you have to file a maintenance document with the USPTO to keep your trademark alive. Between the 9th and 10th year following registration, you have to file a renewal for your trademark. Costs depend on how many classes your trademark has and what basis you registered the trademark under. Our form for trademark maintenance and renewal is here. We will try to remind you when your maintenance and renewal deadlines are coming up, but it’s not something we can guarantee because they’re so far in the future.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">FAQ 5: What kind of search do you perform? What databases do you use? What does your legal opinion look like?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>Allied IP Firm uses specialized, powerful search software to help us advise you on the viability of your proposed trademark. Our software automatically searches for partial matches, spelling variations, phonetic equivalents, translations, and other common causes of refusal. This software searches the USPTO trademark database as well as various common law databases.</p>
 
            <p>However, the search that comes with the Value and Safe packages is valuable not because the attorney searches a specialized database (or Google) and tells you if the name you want is taken — it’s valuable because the attorney uses their experience to advise you when the situation is unclear. We know what to search for and how to identify whether any existing trademarks and brands are problems.</p>
             
            <p>Often, it’s not the exact phrase being used that’s the issue, but rather a similar phrase, partial match, phonetic equivalent, spelling variation, or translation in a related, but not identical, industry.</p>
             
            <p>Clients also frequently don’t realize that one of the words in their name is descriptive or generic in their industry, thus reducing the distinctiveness of their brand name. For example, if you’re a furniture company with the brand name SASSYCHAIR, the USPTO will consider SASSY the more significant part of your brand when they analyze your trademark application. If all words in your mark are considered descriptive or generic, you may not be able to reach registration at all, even if there are no similar trademarks in the database.</p>
             
            <p>We give you a summary of the potential issues with the trademark, and break it down to an estimated percent chance of reaching registration. We also evaluate whether you’re likely to be sued for using the name.</p>
             
            <p>Note that the Basic package (filing and responses to minor office actions with no search) is meant for people who are already heavily invested in their brand names, have been selling their product for years, know that they’re not going to change it at this point, and for whatever reason don’t have a large enough legal budget to pick the Safe package</p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">FAQ 6: What forms of payment do you accept?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>We accept credit/debit card. If you would like to pay by some other method, such as wire transfer, let us know by emailing us.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">FAQ 7: I’m a citizen or business of a foreign country and I don’t have an address in the United States. Can I still apply for a U.S. trademark?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>Yes. As long as you are represented by a US-licensed attorney (like us), there is absolutely no problem with using a foreign home address or foreign business address for a U.S. trademark application. You may file as a foreign individual or as a foreign business entity. There is no extra cost or paperwork required for foreign people and individuals</p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">FAQ 8: Should I file a trademark application as an individual or as an LLC/business entity?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>Either way is fine, but there are some advantages to filing with an LLC or other business entity listed as the owner of the trademark. Filing with a business entity is helpful because you won’t have to re-assign ownership of the trademark if you sell the business to somebody else.</p>
 
<p>Filing as a business entity is also good for individuals who do not wish for their personal details to be made public. Several websites “crawl” the USPTO trademark database, ensuring that applicants who file as individuals have their names, mailing addresses, and countries of citizenship listed prominently on Google and other search engines in connection with their trademark.</p>

<p>We offer instant business entity formation services on our business services page if you are interested in forming a U.S. LLC or corporation. As soon as you’ve requested an entity formation from us, you may then list that entity’s details on our trademark form.</p>
 
<p>If you wish to assign/transfer the rights of your trademark later on, we charge $450 to draft and customize a trademark assignment document for you and record it with the USPTO, plus a $100 filing fee per trademark.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">FAQ 9: Why are you so much less expensive than other trademark attorneys?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p><strong>There are two main reasons:</strong></p>
            <ol>
                <li>Ease of client acquisition. Most attorneys have a difficult time acquiring clients. They spend a lot of time and money attempting to acquire clients and they try to bill their existing clients for as many little tasks as they can in order to make a living from a relatively small book of clients. The attorneys who do have plenty of clients have spent decades networking and tend to bill at “partner” rates of anywhere from $500 to $1500 an hour because this is how the legal profession rewards them for acquiring enough clients to make themselves rich and provide livings for the associates working under them. Allied IP Firm has no trouble acquiring clients so we don’t worry about maximizing our revenue from each individual client the way other firms do.</li>
                <li>Trademarking doesn’t actually take that much time. It simply doesn’t take much time to perform a conflict search or file a trademark application. The client is paying our attorneys for experience and expertise, not time. Traditional trademark attorneys waste a lot of time and bill their clients for it, primarily because of the fore-mentioned difficulty traditional attorneys have in acquiring clients. Because we work efficiently and have plenty of clients, we can charge 25-50% of what other trademark attorneys charge and manage to earn a good net hourly rate.</li>
            </ol>
            
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">FAQ 10: Do you really answer the phone?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>Yes. Call us at <a href="tel:4085388655">(408) 538-8655</a>. However, our business model primarily involves communicating by email, so that’s our preferred method of communication whenever possible. Most attorneys love speaking on the phone because they bill their clients for the time spent on the phone. On the other end of the spectrum, “legal services” companies don’t charge for phone calls because they have underpaid, under-qualified customer service representatives answering their phones.</p>
            <p>We offer unlimited phone time for our clients (and prospective clients) at no cost, but we hope that clients understand that we are able to keep our fees low because we’ve managed to digitize most of our processes. If we are having trouble returning your call because we have upcoming deadlines or a deluge of tasks during a particular week, we urge you to put your thoughts into an email if possible. Also note that though you may call us at any time, as a policy we do not schedule phone calls ahead of time.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">FAQ 11: Is the Basic package good enough for me? I already checked and my name isn’t taken. Should I bother paying for a search?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>The Basic package (filing and monitoring with no search) is meant for people who are already heavily invested in their brand names, have been selling their product for years, know that they’re not going to change it at this point, and for whatever reason don’t have a large enough legal budget to pick the Safe package (which includes responses to major office actions).</p>
            <p>The search that comes with the Value and Safe packages is valuable not because the attorney searches a database (or Google) and tells you if the name you want is taken — it’s valuable because the attorney uses their experience to advise you when the situation is unclear. We know what to search for and how to identify whether any existing trademarks and brands are problems.</p>
            <p>Often, it’s not the exact phrase being used that’s the issue, but rather a similar phrase, partial match, phonetic equivalent, spelling variation, or translation in a related, but not identical, industry.</p>
            <p>Clients also frequently don’t realize that one of the words in their name is descriptive or generic in their industry, thus reducing the distinctiveness of their brand name. For example, if you’re a furniture company with the brand name SASSYCHAIR, the USPTO will consider SASSY the more significant part of your brand when they analyze your trademark application. If all words in your mark are considered descriptive or generic, you may not be able to reach registration at all, even if there are no similar trademarks in the database.</p>
            <p>We give you a summary of the potential issues with the trademark, and break it down to an estimated percent chance of reaching registration. We also evaluate whether you’re likely to be sued for using the name.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">FAQ 12: How much do you charge to respond to a major Office Action if I didn't get the Safe package?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>Normally we charge a fee of $650-$1,100 to draft and file a response to a major office action that requires a legal argument depending on the action, e.g. a refusal based on a likelihood of confusion with an existing mark. This price applies whether you're having us take over an application you already filed, or if you had us file the application originally.</p>
            <p>For Basic and Value package clients who receive a major office action, the $650 full-length argument option is available, but we also offer a shorter argument for $300. The shorter argument is about one page long, doesn’t involve significant legal research, and makes use of arguments that we’ve used in the past and that we know are likely to be successful. It’s not as effective as the full-length argument, but still sometimes succeeds at overturning major office actions.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">FAQ 13: Should I register my logo or should I register my name in plain text? What if I want to trademark both? What if my logo has my name in it?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p><strong>Filing both a name/word mark and a logo requires two separate applications</strong></p>
            <p>For most businesses, the most important thing to trademark is their name in plain text. Registering the logo should usually be done as a separate trademark application. Technically you can save money and protect both your name and logo by registering the logo if it contains the name in it, but we don't recommend this because if you ever change the design of your logo, you will risk losing your federal protection for the name. You can choose whether you want to trademark a word/phrase, a logo or a slogan.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">FAQ 14: Can I register a slogan or tagline? Can I bundle a slogan into the same trademark package as a name and/or logo?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p><strong>A slogan is usually a word mark, the same type of trademark as a brand name.</strong></p>
            <p>Technically, by registering a logo that includes your slogan in it, you can register a slogan at the same time as your logo and perhaps even your brand name. However, we don't recommend this because it weakens your federal protection for all of your marks. You could also lose your federal trademark protection for all of your marks if you change your logo design or stop using your slogan in your logo. You might also be unable to renew your trademark six years after registration if this is the case.</p>
            
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">FAQ 15: Do I need to submit a specimen showing use of my trademark in commerce? What if I’m not selling the product yet?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>If you are already using the trademark in commerce, we find your website or online listing ourselves and take a screenshot as proof of use. In the rare scenario where we fail to find this proof, we can help you out with that by having our developing team get in touch with you to develop a website as per the USPTO and other search engines guidelines at very nominal rates.</p>
            <p>If you are not using the trademark in commerce yet, we’ll most likely need to file the application under an intent-to-use basis and if our trademark application is successful, we will have to file a follow-up specimen several months after filing, which will cost $300 per good/service class ($100 government fee plus our $200 fee for labor and payment processing) to file. If you are not using the mark in commerce yet for your goods/services within six months of receiving approval from the USPTO (called a Notice of Allowance), you can get up to five six-month extensions of time, for $250 each ($125 for the government fee plus $125 for labor and payment processing) per class.</p>
            
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">FAQ 16: What if I want to file trademark applications for more than one brand? Do you offer bulk pricing?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p><strong>Fill out a separate one of our trademark forms for each brand.</strong></p>
            <p>If you want to register several trademarks at once, we offer a “bulk” discount for three or more trademark packages purchased within a few weeks of each other or at once in the start.</p>
            
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">FAQ 17: Can I copyright a brand name or a logo?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>You generally should not copyright a brand name. Brand names should be registered as trademarks, not copyrights. Logos should also be registered as trademarks because they are brand identifiers. You can copyright a logo, but that's much less useful than registering it as a trademark.</p>
          </div>
        </div>
      </div>
    </div>

</section>
<div class="container">
	<div class="last-lane "></div>
</div>

<script>
    const items = document.querySelectorAll('.accordion button');

function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');

  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }

  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}

items.forEach((item) => item.addEventListener('click', toggleAccordion));

</script>

<?php
include('inc/footer.php');
?>