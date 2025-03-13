<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/favicon.webp" type="image/png">
    <title>Checkout | Allied IP Firm</title>

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Font Awesome CSS 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- Lexend Deca Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">

</head>

<!-- Livechat Start -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 18108504;
    window.__lc.integration_name = "manual_onboarding";
    window.__lc.product_name = "livechat";;
    (function(n, t, c) {
        function i(n) {
            return e._h ? e._h.apply(null, n) : e._q.push(n)
        }
        var e = {
            _q: [],
            _h: null,
            _v: "2.0",
            on: function() {
                i(["on", c.call(arguments)])
            },
            once: function() {
                i(["once", c.call(arguments)])
            },
            off: function() {
                i(["off", c.call(arguments)])
            },
            get: function() {
                if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
                return i(["get", c.call(arguments)])
            },
            call: function() {
                i(["call", c.call(arguments)])
            },
            init: function() {
                var n = t.createElement("script");
                n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js", t.head.appendChild(n)
            }
        };
        !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
    }(window, document, [].slice))

    // Function to open chat when button clicked
    function openChat() {
        LiveChatWidget.call('maximize');
    }

    // Automatically open chat when page loads
    window.onload = function() {
        openChat();
    };
</script>
<noscript><a href="https://www.livechat.com/chat-with/18108504/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- Livechat End -->

<body>

    <!-- Header Start -->
    <header>
        <div class="container">
            <div class="row">
                <div class="header-box">
                    <div class="logodiv">
                        <a href="javascript:void(0)">
                            <img src="assets/images/logo-main.svg" alt="Allied IP Firm" height="70px" class="logo-img">
                        </a>
                    </div>
                    <div class="contact-sec">
                        <a href="tel:4085388655" class="telephone-num"><i class="fa-solid fa-phone"></i>(408) 538-8655</a>
                        <a href="javascript:;" class="chat yellow-btn inner-page-chat" onclick="openChat()">Chat Now</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Banner Section Start -->
    <section class="banner inner-page-banner">
        <div class="container">
            <div class="row banner-row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="banner-content">
                        <h1 class="main-heading">Checkout</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Checkout Section Start -->
    <Section class="checkout">
        <div class="container">
            <!-- <h1>Checkout</h1> -->
            <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="privacy-policy">privacy policy.</a></p>
            <div class="pay">
                <h2>We Accept</h2>
                <img class="img-fluid" src="assets/images/payments-icons-new.png" />
            </div>
            <?php

            if (!empty($_SESSION['error'])) {
                echo '<p class="text-danger alert-danger"> ' . $_SESSION['error'] .
                    '</p>';
                unset($_SESSION['error']);
            }
            ?>
            <form method="post" action="form-bootstrap/payment.php" enctype="multipart/form-data">
                <input type="hidden" name="lead_id" value="<?= $_GET['lead_id'] ?>">
                <input type="hidden" id="package" name="package" value="<?= $_GET['package'] ?>">
                <input type="hidden" id="package_price" name="package_price" value="<?= $_GET['price'] ?>">
                <div class="pay-btn">
                    <button type="submit" class="theme-btn">Proceed to payment</button>
                </div>
            </form>
        </div>
    </Section>
    <!-- Checout Section End -->

    <!-- Copyright Start -->
    <section class="copyright">
        <div class="container">
            <p>© Copyright 2014-2024 Allied IP Firm. Allied IP Firm provides information and software only. Allied IP Firm is not a "lawyer referral service" and does not provide legal advice or participate in any legal representation. Use of Allied IP Firm is subject to our Terms of Service and Privacy Policy.</p>
        </div>
    </section>
    <!-- Copyright End -->

    <!-- Bootstrap 5.3 JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <!-- JQuery 3.7 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>