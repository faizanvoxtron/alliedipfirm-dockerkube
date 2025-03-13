<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
require_once("service/connectionClass.php");
$intentId = $_GET['intentId'];
$ctx = new database();
$date_created = date("Y-m-d H:i:s");

// echo $ctx->updateRow("payIntents",array("paid"=>1),array("intentId='".$intentId."'"));

$dataSelected = $ctx->selectData("payIntents",array('id','intentid', 'paid'),array("intentId='".$intentId."'"));

// var_dump($dataSelected);

if ( $dataSelected['status'] == true && count($dataSelected['data']) > 0 && $dataSelected['data'][0]['paid'] == "1" ) {
    header("Location: https://www.alliedipfirm.com/");
} else {
    $ctx->updateRow("payIntents",array("paid"=>1),array("intentId='".$intentId."'"));
    $tx = $ctx->insertRow('email',array( 'intentid' => $intentId, 'status' => 'pending', 'date_created' => $date_created ));
?>
    
<!doctype html>
<html lang="en">

<head>
  <title>Thank You</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">
  <link rel="stylesheet" href="assets/css/thanks.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
<!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10981298973"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-10981298973');
    </script>
    
    <!-- Event snippet for Website lead conversion page -->
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-10981298973/opyoCMizoNwDEJ2mpfQo'
        });
    </script>


</head>

<body>
  <header>
    <div class="container-fluid">
      <div class="row">
        <div class=col-md-6 >
          <div class="logo-wrapper">
            <a href="/"><img src="assets/img/logo.svg?v=0.1" class="img-fluid" alt="Logo"></a>
          </div>
        </div>
        <div class=col-md-6>
          <!--<a href="" class="get-quote c-button js-next-screen shine me-3" data-bs-toggle="modal" data-bs-target="#leadModal">Get a free quote</a>-->
          <a href="tel:4085388655" class="get-quote c-button js-next-screen shine float-right"><i class="fa-solid fa-phone me-2"></i>(408) 538-8655</a>
        </div>
      </div>
    </div>
  </header>
  <main>

    <!-- THANK YOU -->
    <section class="thankyou-col">
      <div class="container">
        <div class="thanks-top">
          <h2 class="sm-title mt-5">Be In Touch With Us 24/7!</h2>
          <p>Our support team will get in touch with you shortly in order to disucss about your application(s). If you have any further concerns or queries, please feel free to get in touch with us</p>
          <h1 class="big-title">THANK YOU</h1>
          <h4 class="f-title">For Your Interest</h4>
        </div>
      </div>
    </section>
    <section class="cta-red">
      <div class="container">
        <div class="inner clearfix no-border">
          <div class="touch">
            <h2>Be In Touch With Us 24/7!</h2><br>
          </div>
          <div class="row justify-centent-center mt-5">
            <div class="col-lg-12 col-md-12">
              <div class="row">
                <div class="col-md-4 col-sm-4">
                  <div class="icon-box rounded-red"> 
                    <a href="tel:4085388655">
                    <span class="icon">
                    <img class="lazy" src="assets/img/phone-icon.svg">
                    </span>
                    <p>Toll Free<br>
                      <span><a href="tel:4085388655">(408) 538-8655</a></span>
                    </p>
                    </a>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 req-callback pointer">
                  <div class="icon-box rounded-red">
                    <a href="tel:4085388655">
                    <span class="icon">
                      <img class="lazy" src="assets/img/call-back.svg">
                    </span>
                    <p>Request<br>
                      <span>Call Back </span>
                    </p>
                    </a>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 pointer no-border pointer">
                  <div class="icon-box rounded-red">
                    <a href="javascript:$zopim.livechat.window.show();">
                    <span class="icon">
                    <img class="lazy" src="assets/img/chat-icon.svg">
                    </span>
                    <p>Start a<br>
                      <span href="jvascript:setButtonURL();">Live Chat</span>
                    </p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br><br><br>
    <section class="disclaimer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>Disclaimer:<br>Allied IP Firm does not have any affiliation with any domain company mentioned on this page to offer such promotion. All other company names, brand names, trademarks and logos mentioned on this page are the property of their respective owners and do not constitute or imply endorsement, sponsorship or recommendation thereof by mindsonline of the respective trademark owners. </p>
          </div>
        </div>
      </div>
    </section>
    <!-- END:: MAIN CONTAINER -->
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- recaptcha script -->
    <script src="https://www.google.com/recaptcha/api.js?render=6LfLgMMhAAAAAPTfbvvJjuSgmIFFqugSPR3kTJUC"></script>
<!-- Start of  Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=7463533f-519c-4755-820e-b4f7e8bdbc07"> </script>
<!-- End of  Zendesk Widget script -->
<script>
      $('.chat, .chatt, .live_chatt').click(function() {
         $zopim.livechat.window.show();
      });
      
      setTimeout(function(){
          window.location.href = '/';
      },20000);
</script>

   

</body>

</html>
    
<?php
}
?>
