<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
    <meta name="description" content="Suha - Multipurpose Ecommerce Mobile HTML Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#100DD1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- The above tags *must* come first in the head, any other head content must come *after* these tags-->
    <!-- Title-->
    <title>Suha - Multipurpose Ecommerce Mobile HTML Template</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <!-- Favicon-->
    <link rel="icon" href="asset/img/icons/icon-72x72.png">
    <!-- Apple Touch Icon-->
    <link rel="apple-touch-icon" href="asset/img/icons/icon-96x96.png">
    <link rel="apple-touch-icon" sizes="152x152" href="asset/img/icons/icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="asset/img/icons/icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="asset/img/icons/icon-180x180.png">
    <!-- CSS Libraries-->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/animate.css">
    <link rel="stylesheet" href="asset/css/owl.carousel.min.css">
    <link rel="stylesheet" href="asset/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/lineicons.min.css">
    <link rel="stylesheet" href="asset/css/magnific-popup.css">
    <!-- Stylesheet-->
    <link rel="stylesheet" href="style.css">
    <!-- Web App Manifest-->
    <link rel="manifest" href="manifest.json">
  </head>
  <body>
    <!-- Preloader-->
    <div class="preloader" id="preloader">
      <div class="spinner-grow text-secondary" role="status">
        <div class="sr-only">Loading...</div>
      </div>
    </div>
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
    <!-- Header Area-->
    <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Back Button-->
        <div class="back-button"><a href="/">
            <svg class="bi bi-arrow-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"></path>
            </svg></a></div>
        <!-- Page Title-->
        <div class="page-heading">
          <h6 class="mb-0">Live Chat</h6>
        </div>
        <!-- Navbar Toggler-->
        <div class="suha-navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#suhaOffcanvas" aria-controls="suhaOffcanvas"><span></span><span></span><span></span></div>
      </div>
    </div>
    <div class="offcanvas offcanvas-start suha-offcanvas-wrap" tabindex="-1" id="suhaOffcanvas" aria-labelledby="suhaOffcanvasLabel">
      <!-- Close button-->
      <button class="btn-close btn-close-white text-reset" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      <!-- Offcanvas body-->
      <div class="offcanvas-body">
        <!-- Sidenav Profile-->
        <div class="sidenav-profile">
          <div class="user-profile"><img src="img/bg-img/9.jpg" alt=""></div>
          <div class="user-info">
            <h6 class="user-name mb-1">Suha Sarah</h6>
            <p class="available-balance">Total balance $<span class="counter">583.67</span></p>
          </div>
        </div>
        <!-- Sidenav Nav-->
        <ul class="sidenav-nav ps-0">
          <li><a href="profile.html"><i class="lni lni-user"></i>My Profile</a></li>
          <li><a href="notifications.html"><i class="lni lni-alarm lni-tada-effect"></i>Notifications<span class="ms-3 badge badge-warning">3</span></a></li>
          <li class="suha-dropdown-menu"><a href="#"><i class="lni lni-cart"></i>Shop Pages</a>
            <ul>
              <li><a href="shop-grid.html">- Shop Grid</a></li>
              <li><a href="shop-list.html">- Shop List</a></li>
              <li><a href="single-product.html">- Product Details</a></li>
              <li><a href="featured-products.html">- Featured Products</a></li>
              <li><a href="flash-sale.html">- Flash Sale</a></li>
            </ul>
          </li>
          <li><a href="pages.html"><i class="lni lni-empty-file"></i>All Pages</a></li>
          <li class="suha-dropdown-menu"><a href="wishlist-grid.html"><i class="lni lni-heart"></i>My Wishlist</a>
            <ul>
              <li><a href="wishlist-grid.html">- Wishlist Grid</a></li>
              <li><a href="wishlist-list.html">- Wishlist List</a></li>
            </ul>
          </li>
          <li><a href="settings.html"><i class="lni lni-cog"></i>Settings</a></li>
          <li><a href="intro.html"><i class="lni lni-power-switch"></i>Sign Out</a></li>
        </ul>
      </div>
    </div>
    <div class="page-content-wrapper">
      <!-- Live Chat Intro-->
      <div class="live-chat-intro mb-3">
        <p>Start a conversation</p><img src="asset/img/bg-img/profile.jpg" alt="">
        <div class="status online">We're online</div>
        <!-- Use this code for "Offline" Status-->
        <!-- .status.offline We’ll be back soon-->
      </div>
      <!-- Support Wrapper-->
      <div class="support-wrapper py-3">
        <div class="container">
          <!-- Live Chat Wrapper-->
          <div class="live-chat-wrapper">
            <!-- Agent Message Content-->
            <div class="agent-message-content d-flex align-items-start">
              <!-- Agent Thumbnail-->
              <div class="agent-thumbnail me-2 mt-2"><img src="asset/img/bg-img/profile.jpg" alt=""></div>
              <!-- Agent Message Text-->
              <div class="agent-message-text">
                <div class="d-block">
                  <p>Hi there! You can start asking your question below. I am ready to help.</p>
                </div>
                <div class="d-block">
                  <p>How can I help you with?</p>
                </div><span>12:00</span>
              </div>
            </div>
            <!-- User Message Content-->
            <div class="user-message-content">
              <!-- User Message Text-->
              <div class="user-message-text">
                <div class="d-block">
                  <p>I liked your template.</p>
                </div><span>12:18</span>
              </div>
            </div>
            <!-- Agent Message Content-->
            <div class="agent-message-content d-flex align-items-start">
              <!-- Agent Thumbnail-->
              <div class="agent-thumbnail me-2 mt-2"><img src="asset/img/bg-img/profile.jpg" alt=""></div>
              <!-- Agent Message Text-->
              <div class="agent-message-text">
                <div class="d-block">
                  <p>Thank you.</p>
                </div><span>12:36</span>
              </div>
            </div>
            <!-- User Message Content-->
            <div class="user-message-content">
              <!-- User Message Text-->
              <div class="user-message-text">
                <div class="d-block">
                  <p>How can I buy this?</p>
                </div><span>12:42</span>
              </div>
            </div>
            <!-- Agent Message Content-->
            <div class="agent-message-content d-flex align-items-start">
              <!-- Agent Thumbnail-->
              <div class="agent-thumbnail me-2 mt-2"><img src="asset/img/bg-img/profile.jpg" alt=""></div>
              <!-- Agent Message Text-->
              <div class="agent-message-text">
                <div class="d-block">
                  <div class="writing-mode"><span class="dot"></span><span class="dot"></span><span class="dot"></span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Type Message Form-->
    <div class="type-text-form">
      <form action="#">
        <div class="form-group file-upload mb-0">
          <input type="file"><i class="lni lni-plus"></i>
        </div>
        <textarea class="form-control" name="message" cols="30" rows="10" placeholder="Type your message"></textarea>
        <button type="submit">
          <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
          </svg>
        </button>
      </form>
    </div>
    <!-- All JavaScript Files-->
    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/jquery.min.js"></script>
    <script src="asset/js/waypoints.min.js"></script>
    <script src="asset/js/jquery.easing.min.js"></script>
    <script src="asset/js/owl.carousel.min.js"></script>
    <script src="asset/js/jquery.magnific-popup.min.js"></script>
    <script src="asset/js/jquery.counterup.min.js"></script>
    <script src="asset/js/jquery.countdown.min.js"></script>
    <script src="asset/js/jquery.passwordstrength.js"></script>
    <script src="asset/js/dark-mode-switch.js"></script>
    <script src="asset/js/no-internet.js"></script>
    <script src="asset/js/active.js"></script>
    <script src="asset/js/pwa.js"></script>
  </body>
</html>
