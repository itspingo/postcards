@extends('layouts.website')
@section('content')


    <div class="inner_banner-section">
      <img class="inner_banner-background-image" src="{{url('website/image/common/inner-bg.png')}}" alt="image alt">
      <div class="container">
        <div class="inner_banner-content-block">
          <h3 class="inner_banner-title">FAQs</h3>
          <ul class="banner__page-navigator">
            <li>
              <a href="index.html">Home</a>
            </li>
            <li class="active">
              <a href='faq-3.html'>
                FAQs
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    FAQ  : FAQ Section 
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="faq-3_main-section section-padding-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-10">
            <div class="accordion-style-7-wrapper">
              <h2 class="heading-sm mb-40">General Question</h2>
              <div class="accordion-style-7">
                <div class="accordion-item">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-2_faq-item" aria-expanded="false" aria-controls="faq-2_faq-item">
                    Q. What is a digital agency?
                  </button>
                  <div id="faq-2_faq-item" class="accordion-collapse collapse" data-bs-parent="#faq-2_faq">
                    <div class="accordion-item__body">
                      A digital agency is a company that leverages digital channels to grow their clients’ brands online.
                      ls and technologies such as web design, digital marketing, creative design and app development.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-2_faq-item-2" aria-expanded="false" aria-controls="faq-2_faq-item-2">
                    Q. What services does a digital agency provide?
                  </button>
                  <div id="faq-2_faq-item-2" class="accordion-collapse collapse" data-bs-parent="#faq-2_faq">
                    <div class="accordion-item__body">
                      A digital agency is a company that leverages digital channels to grow their clients’ brands online.
                      ls and technologies such as web design, digital marketing, creative design and app development.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-2_faq-item-3" aria-expanded="false" aria-controls="faq-2_faq-item-3">
                    Q. Hiring a digital agency vs hiring in-house: What is the difference?
                  </button>
                  <div id="faq-2_faq-item-3" class="accordion-collapse collapse" data-bs-parent="#faq-2_faq">
                    <div class="accordion-item__body">
                      A digital agency is a company that leverages digital channels to grow their clients’ brands online.
                      ls and technologies such as web design, digital marketing, creative design and app development.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-style-7-wrapper">
              <h2 class="heading-sm mb-40">Account & Support</h2>
              <div class="accordion-style-7">
                <div class="accordion-item">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-2_faq-item-4" aria-expanded="false" aria-controls="faq-2_faq-item-4">
                    Q. What kind of support do I get from any plan?
                  </button>
                  <div id="faq-2_faq-item-4" class="accordion-collapse collapse" data-bs-parent="#faq-2_faq">
                    <div class="accordion-item__body">
                      A digital agency is a company that leverages digital channels to grow their clients’ brands online.
                      ls and technologies such as web design, digital marketing, creative design and app development.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-2_faq-item-5" aria-expanded="false" aria-controls="faq-2_faq-item-5">
                    Q. Do I have a promotional or discount code?
                  </button>
                  <div id="faq-2_faq-item-5" class="accordion-collapse collapse" data-bs-parent="#faq-2_faq">
                    <div class="accordion-item__body">
                      A digital agency is a company that leverages digital channels to grow their clients’ brands online.
                      ls and technologies such as web design, digital marketing, creative design and app development.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-2_faq-item-6" aria-expanded="false" aria-controls="faq-2_faq-item-6">
                    Q. What kind of support do I get from any plan?
                  </button>
                  <div id="faq-2_faq-item-6" class="accordion-collapse collapse" data-bs-parent="#faq-2_faq">
                    <div class="accordion-item__body">
                      A digital agency is a company that leverages digital channels to grow their clients’ brands online.
                      ls and technologies such as web design, digital marketing, creative design and app development.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section-button">
          <a href="#" class="btn-masco btn-fill--up rounded-pill"><span>Still, have any questions? Contact us</span></a>
        </div>
      </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~
     CTA Base 
~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="cta-base">
      <div class="container">
        <div class="cta-base__wrapper border-bottom-dark">
          <div class="row align-items-center justify-content-center justify-content-md-between gutter-y-20">
            <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-7 col-10">
              <div class="cta-base__text-block">
                <h2 class="heading-md text-white">Ready to grow your business digitally?</h2>
              </div>
            </div>
            <div class="col-xl-auto col-lg-4 col-md-5 col-xs-8 col-10">
              <div class="cta-base__button">
                <a class='btn-masco rounded-pill btn-fill--up' href='contact.html'>
                  <span>Let's start the project</span></a>
                <div class="cta-base__button-shape">
                  <img src="{{url('website/image/home-1/cta-shape.svg')}}" alt="image alt">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer  footer-padding-default footer--dark-v1">
      <div class="container">
        <div class="row row--footer-main">
          <div class="col-md-8 col-lg-5 col-xl-5 col-xxl-4">
            <div class="footer__content-block">
              <div class="footer__content-text">
                <div class="footer-brand">
                  <img src="{{url('website/image/logo-white.svg')}}" alt="image alt">
                </div>
                <p>
                  We are strategic & creative digital agency who are focused on user experience, mobile, social, data gathering and promotional offerings.
                </p>
              </div>
              <a href="#" class="footer-link">mascoexample@gmail.com</a>
              <br>
              <ul class="list-social">
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
      @endsection