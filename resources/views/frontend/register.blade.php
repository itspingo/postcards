<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from masco-template.netlify.app/sign-up by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Aug 2024 17:27:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="color-scheme" content="dark light">
  <title>
    User Registration
  </title>
  <link rel="shortcut icon" href="{{url('website/image/favicon.png')}}" type="image/x-icon">
  <link href="../unpkg.com/aos%402.3.1/dist/aos.css" rel="stylesheet">
  <!-- Plugin'stylesheets  -->
  <link rel="stylesheet" type="text/css" href="{{url('website/fonts/typography/fonts.css')}}">
  <link rel="stylesheet" href="{{url('website/fonts/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('website/plugins/aos/aos.min.css')}}">
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
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~
    Sign up 
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="account-section bg-light-2 section-padding-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-10">
            <div class="account-heading-block">
              <a class='account-brand d-block' href='index.html'>
                <img src="image/icons/brand.svg" alt="masco">
              </a>
              <div class="account-heading">
                <h2 class="account-heading__title heading-md">
                  Create an account
                </h2>
                <p>
                  Enter the information below to create your account
                </p>
              </div>
            </div>
            <form  method="POST" action="{{ route('register.post') }}"  class="account_comment-box">
            @csrf
              <div class="account_comment-box__form-inner">
                <div class="account_comment-box__form-input">
                  <h2 class="account-title">Your name</h2>
                  <input class="form-control bg-white" type="text" name="name" id="name" placeholder="Enter your full name">
                </div>
                <div class="account_comment-box__form-input">
                  <h2 class="account-title">Email address</h2>
                  <input class="form-control bg-white" type="text" name="email" id="email" placeholder="Enter your email">
                </div>
                <div class="account_comment-box__form-input">
                  <h2 class="account-title">Password*</h2>
                  <input class="form-control bg-white" type="text" name="password" id="password" placeholder="typepassword">
                </div>
                <div class="account-condition-block">
                  <div id="item-list">
                    <span class="account-condition">
                        <input type="checkbox" id="checkbox">I agree to the <span>Terms</span> and <span>Conditions of Privacy</span></span>
                  </div>
                </div>
                <div class="account_comment-box__form-input-button">
                  <button type="submit" class="btn-masco rounded-pill w-100">Create Account</button>
                  <div class="button-bottom-text">
                    <span>Already have an account? <a href="{{ route('login') }}">Sign in now</a></span>
                  </div>
                </div>
              </div>
            </form>
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
  <script src="../unpkg.com/aos%402.3.1/dist/aos.js')}}"></script>
  <script src="{{url('website/plugins/aos/aos.min.js')}}"></script>
  <script src="{{url('website/plugins/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{url('website/plugins/isotope/packery.pkgd.min.js')}}"></script>
  <script src="{{url('website/plugins/isotope/image.loaded.js')}}"></script>
  <script src="{{url('website/plugins/slick/slick.min.js')}}"></script>
  <script src="{{url('website/plugins/countdown/jquery.countdown.js')}}" defer></script>
  <script src="{{url('website/js/menu.js')}}"></script>
  <script src="{{url('website/js/custom.js')}}"></script>

  <style>
        .flash-message {
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            color: #fff;
            display: flex;
        }

        .flash-success {
            background-color: #4CAF50;
        }

        .flash-failure {
            background-color: #f44336;
        }
    </style>

</body>


<!-- Mirrored from masco-template.netlify.app/sign-up by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Aug 2024 17:27:57 GMT -->
</html>