<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="color-scheme" content="dark light">
  <title>
    Digital Postal Cards
  </title>
  <link rel="shortcut icon" href="image/favicon.png" type="image/x-icon">
  <link href="../unpkg.com/aos%402.3.1/dist/aos.css" rel="stylesheet">
  <!-- Plugin'stylesheets  -->
  <link rel="stylesheet" type="text/css" href="{{url('website/fonts/typography/fonts.css')}}">
  <link rel="stylesheet" href="{{url('website/fonts/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('website/plugins/aos/aos.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('website/plugins/fancybox/jquery.fancybox.min.css')}}">
  <!-- Vendor stylesheets  -->
  <link rel="stylesheet" type="text/css" href="{{url('website/plugins/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('website/css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('website/css/demo.css')}}">
  <style>
    @import url('https://fonts.cdnfonts.com/css/clash-display');
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Syne:wght@500;600;700&amp;display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Public+Sans:wght@500;600;700;800;900&amp;display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Cabin:wght@500;600;700&amp;display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap');
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;display=swap');
    @import url('https://fonts.cdnfonts.com/css/clash-display');
  </style>
</head>

<body>
  <div class="preloader-wrapper">
    <div class="lds-ellipsis">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <div class="page-wrapper overflow-hidden">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~
     Header Area
 ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <header class="site-header site-header--menu-left site-header--transparent site-header--sticky">
      <div class="container">
        <nav class="navbar site-navbar">
          <!--~~~~~~~~~~~~~~~~~~~~~~~~
            Brand Logo
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
          <div class="brand-logo">
            <a href="#">
              <!-- light version logo (logo must be black)-->
              <img class="logo-light" src="{{url('website/image/logo-4.png')}}" alt="brand logo">
              <!-- Dark version logo (logo must be White)-->
              <img class="logo-dark" src="{{url('website/image/logo-4.png')}}" alt="brand logo">
            </a>
          </div>
          <div class="menu-block-wrapper ">
            <div class="menu-overlay"></div>
            <nav class="menu-block" id="append-menu-header">
              <div class="mobile-menu-head">
                <a href='index.html'>
                  <img src="{{url('website/image/icons/logo-whites.svg')}}" alt="brand logo">
                </a>
                <div class="current-menu-title"></div>
                <div class="mobile-menu-close">&times;</div>
              </div>
              <ul class="site-menu-main">
                <li class="nav-item">
                  <a href="{{url('home')}}" class="nav-link-item">Home</i>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#feature" class="nav-link-item">Categories</i>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('about')}}" class="nav-link-item">About</i>
                  </a>
                </li>
                <!-- <li class="nav-item">
                  <a href="#courses" class="nav-link-item">Courses</i>
                  </a>
                </li> -->
                <li class="nav-item">
                  <a href="{{url('faqs')}}" class="nav-link-item">Faq</i>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
          <!--~~~~~~~~~~~~~~~~~~~~~~~~
          mobile menu trigger
         ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
          <div class="mobile-menu-trigger">
            <span></span>
          </div>
          <!--~~~~~~~~~~~~~~~~~~~~~~~~
            Mobile Menu Hamburger Ends
          ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
          <div class="header-cta-btn-wrapper">
            <a href="{{url('login')}}" class="btn-masco btn-masco--header btn-masco--header-secondary">
              <span>Login</span>
            </a>
            <a href="{{url('register')}}" class="btn-masco btn-masco btn-primary-l04 btn-shadow btn-shadow--reverse btn-shadow--reverse-center rounded-pill">
              <span>Sign up free</span></a>
          </div>
        </nav>
      </div>
    </header>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~
     navbar-
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

@yield('content')


    <div class="section-divider bg-cream-dark">
      <img src="{{url('website/image/home-4/section-divider-cream.svg')}}" alt="section divider">
    </div>
    <div class="footer footer-padding-default footer--light footer-l04">
      <div class="container">
        <div class="row row--footer-main">
          <div class="col-md-8 col-lg-5 col-xl-5 col-xxl-4">
            <div class="footer__content-block">
              <div class="footer__content-text">
                <div class="footer-brand">
                  <img src="{{url('website/image/logo-4.png')}}" alt="image alt">
                </div>
                <p>
                  We are strategic & creative digital agency who are focused on user experience, mobile, social, data gathering and promotional offerings.
                </p>
              </div>
              <a href="#" class="footer-link">mascoexample@gmail.com</a>
              <br>
              <ul class="list-social list-social--hvr-primary-l4">
                <li>
                  <a href="#">
                    <i class="fa-brands fa-facebook-f"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa-brands fa-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa-brands fa-instagram"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa-brands fa-github"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class=" col-lg-7 col-xl-6 col-xxl-7 offset-xl-1">
            <div class="row row--list-block">
              <div class="col-auto col-md-4 col-lg-auto col-xl-auto col-xxl-auto">
                <h3 class="footer-title">Primary Pages</h3>
                <ul class="footer-list">
                  <li>
                    <a href="#">Demos</a>
                  </li>
                  <li>
                    <a href="#">About Us</a>
                  </li>
                  <li>
                    <a href="#">Services</a>
                  </li>
                  <li>
                    <a href="#">Pages</a>
                  </li>
                  <li>
                    <a href="#">Contact</a>
                  </li>
                </ul>
              </div>
              <div class="col-auto col-md-4 col-lg-auto col-xl-auto col-xxl-auto">
                <h3 class="footer-title">Utility pages</h3>
                <ul class="footer-list">
                  <li>
                    <a href="#">Instructions</a>
                  </li>
                  <li>
                    <a href="#"> Style guide</a>
                  </li>
                  <li>
                    <a href="#"> Licenses</a>
                  </li>
                  <li>
                    <a href="#"> 404 Not found</a>
                  </li>
                  <li>
                    <a href="#"> Password protected</a>
                  </li>
                </ul>
              </div>
              <div class="col-auto col-md-4 col-lg-auto col-xl-auto col-xxl-auto">
                <h3 class="footer-title">Resources</h3>
                <ul class="footer-list">
                  <li>
                    <a href="#">Support</a>
                  </li>
                  <li>
                    <a href="#"> Privacy policy</a>
                  </li>
                  <li>
                    <a href="#"> Terms & Conditions</a>
                  </li>
                  <li>
                    <a href="#"> Strategic finance</a>
                  </li>
                  <li>
                    <a href="#"> Video guide</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright-block">
        <div class="container">
          <div class="copyright-inner text-center  copyright-border">
            <p>© Copyright 2023, All Rights Reserved by Mthemeus</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Vendor Scripts -->
  <script src="{{url('website/plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{url('website/plugins/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{url('website/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!-- Plugin's Scripts -->
  <script src="{{url('website/plugins/inlineSvg/inlineSvg.min.js')}}"></script>
  <script src="../unpkg.com/aos%402.3.1/dist/aos.js"></script>
  <script src="{{url('website/plugins/fancybox/jquery.fancybox.min.js')}}"></script>
  <script src="{{url('website/plugins/aos/aos.min.js')}}"></script>
  <script src="{{url('website/plugins/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{url('website/plugins/isotope/packery.pkgd.min.js')}}"></script>
  <script src="{{url('website/plugins/isotope/image.loaded.js')}}"></script>
  <script src="{{url('website/plugins/slick/slick.min.js')}}"></script>
  <script src="{{url('website/plugins/countdown/jquery.countdown.js')}}" defer></script>
  <script src="{{url('website/js/menu.js')}}"></script>
  <script src="{{url('website/js/custom.js')}}"></script>
  <!-- Activation Script -->
</body>

</html>