@extends('layouts.website')
@section('content')

    <div class="inner_banner-section">
      <img class="inner_banner-background-image" src="{{url('website/image/common/inner-bg.png')}}" alt="image alt">
      <div class="container">
        <div class="inner_banner-content-block">
          <h3 class="inner_banner-title">About Us</h3>
          <ul class="banner__page-navigator">
            <li>
              <a href="index.html">Home</a>
            </li>
            <li class="active">
              <a href='about.html'>
                About
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~
    About : Banner Section
~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="about_banner-section">
      <div class="container">
        <div class="row justify-content-center row--custom">
          <div class="col-12">
            <div class="row banner_image-row padding-top-100">
              <div class="col-xs-4 col-7">
                <div class="single-image-1">
                  <img src="{{url('website/image/about/banner-image-1.png')}}" alt="alternative text">
                </div>
              </div>
              <div class="col-xs-4 col-7">
                <div class="single-image-2">
                  <img src="{{url('website/image/about/banner-image-2.png')}}" alt="alternative text">
                </div>
              </div>
              <div class="col-xs-4 col-7">
                <div class="single-image-3">
                  <img src="{{url('website/image/about/banner-image-3.png')}}" alt="alternative text">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~
    ABout : Brand Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="brand-section">
      <div class="container">
        <div class="brands-wrapper-inner">
          <div class="brand-heading">
            <h3 class="brand-heading__title heading-md">From start-ups to Fortune 500, we partner with brands of all sizes</h3>
          </div>
          <div class="brands-wrapper">
            <div class="single-brand" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="800">
              <img src="{{url('website/image/home/brand-1.png')}}" alt="brand-logo">
            </div>
            <div class="single-brand" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="700">
              <img src="{{url('website/image/home/brand-2.png')}}" alt="brand-logo">
            </div>
            <div class="single-brand" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="600">
              <img src="{{url('website/image/home/brand-3.png')}}" alt="brand-logo">
            </div>
            <div class="single-brand" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="500">
              <img src="{{url('website/image/home/brand-4.png')}}" alt="brand-logo">
            </div>
            <div class="single-brand" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="400">
              <img src="{{url('website/image/home/brand-5.png')}}" alt="brand-logo">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~
  About : Content Section
~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="about_content-section bg-light-2  section-padding-120">
      <div class="container">
        <div class="row row--custom ">
          <div class="col-xxl-6 col-lg-5 col-md-6 col-7">
            <div class="about_content-image-block ">
              <div class="about_content-image content-image--mobile-width">
                <img src="{{url('website/image/about/video-image.png')}}" alt="alternative text">
              </div>
              <a href="https://www.youtube.com/watch?v=zo9dJFo8H8g" data-fancybox class="btn-play absolute-center btn-play">
                <i class="fa-solid fa-play"></i>
              </a>
            </div>
          </div>
          <div class="col-xxl-6 col-lg-7 col-md-10 col-auto" data-aos-duration="1000" data-aos="fade-left">
            <div class="content">
              <div class="content-text-block">
                <h2 class="content-title heading-md text-black">Our vision is to build brands and provide world-class experiences to our clients</h2>
                <p>SINCE 1998, we transform bold business ideas into exceptional digital products.
                  We ideate, design, and develop data-driven digital products made to answer business challenges.</p>
                <div class="content-divider"></div>
              </div>
              <div class="content-testimonial">
                <div class="content-testimonial__text">
                  <p>
                    “We love what we do & create partnerships with our clients to ensure their
                    digital transformation is positioned for long-term success.”
                  </p>
                </div>
                <div class="content-testimonial__user-metadata">
                  <div class="content-testimonial__user">
                    <img src="{{url('website/image/about/user-image.png')}}" alt="alternative text">
                  </div>
                  <div class="content-testimonial__body">
                    <h4 class="content-testimonial__user-name">Karen Lynn</h4>
                    <span>CEO & Co-founder @ Company</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~
  About : Fact Section
~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="about_fact-section  section-padding-120">
      <div class="container">
        <div class="row row--custom ">
          <div class="col-xxl-auto  col-lg-7 col-md-10 col-auto">
            <div class="content">
              <div class="content-text-block">
                <h2 class="content-title heading-md text-black">Our creative talent has been influencing branding around the world for a long time</h2>
                <p>With more than a decade of experience. We are worry about the details so you need don't have to. When you work with our agency,
                  you can be sure that your website meets every standard.</p>
              </div>
              <div class="content-button-block">
                <a href="#" class="btn-masco btn-primary rounded-pill btn-fill--up"><span>Get in touch</span></a>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-8 col-auto">
            <div class="about_stats-wrapper">
              <div class="col-6">
                <div class="about_stats-single">
                  <h2 class="about_stats-single__count">36K+</h2>
                  <span>Satisfied clients</span>
                </div>
              </div>
              <div class="col-6">
                <div class="about_stats-single">
                  <h2 class="about_stats-single__count">80%</h2>
                  <span>Active Engagement</span>
                </div>
              </div>
              <div class="col-6">
                <div class="about_stats-single">
                  <h2 class="about_stats-single__count">54K+</h2>
                  <span>Success projects</span>
                </div>
              </div>
              <div class="col-6">
                <div class="about_stats-single">
                  <h2 class="about_stats-single__count">72+</h2>
                  <span>Awards winning</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~
   About : Feature Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="about_feature-section section-padding-120 bg-light-2">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-8 col-sm-10 col-xs-10">
            <div class="section-heading">
              <h2 class="section-heading__title heading-md text-black">Our core values that drive everything we do</h2>
            </div>
          </div>
        </div>
        <div class="row feature-widget-7-row  ">
          <div class="col-lg-4 col-md-6 col-xs-8 col-9">
            <div class="feature-widget-7">
              <div class="feature-widget-7__icon-wrapper">
                <img src="{{url('website/image/about/feature-icon-1.svg')}}" alt="feature icon">
              </div>
              <div class="feature-widget-7__body">
                <h4 class="feature-widget-7__title">Passionate about work</h4>
                <p>Passion for work is a enthusiasm and excitement for what you do.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-8 col-9">
            <div class="feature-widget-7">
              <div class="feature-widget-7__icon-wrapper">
                <img src="{{url('website/image/about/feature-icon-2.svg')}}" alt="feature icon">
              </div>
              <div class="feature-widget-7__body">
                <h4 class="feature-widget-7__title">Creative team members</h4>
                <p>A creative team is to design and execute campaigns &amp; encourage</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-8 col-9">
            <div class="feature-widget-7">
              <div class="feature-widget-7__icon-wrapper">
                <img src="{{url('website/image/about/feature-icon-3.svg')}}" alt="feature icon">
              </div>
              <div class="feature-widget-7__body">
                <h4 class="feature-widget-7__title">Innovation solutions</h4>
                <p>using either completely concepts finding new ways of using existing</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-8 col-9">
            <div class="feature-widget-7">
              <div class="feature-widget-7__icon-wrapper">
                <img src="{{url('website/image/about/feature-icon-4.svg')}}" alt="feature icon">
              </div>
              <div class="feature-widget-7__body">
                <h4 class="feature-widget-7__title">Qualitiful products</h4>
                <p>Product quality refers to how well a product satisfies our customer</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-8 col-9">
            <div class="feature-widget-7">
              <div class="feature-widget-7__icon-wrapper">
                <img src="{{url('website/image/about/feature-icon-5.svg')}}" alt="feature icon">
              </div>
              <div class="feature-widget-7__body">
                <h4 class="feature-widget-7__title">Customer satisfaction</h4>
                <p>Happy customers are delighted because of the customer service</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-8 col-9">
            <div class="feature-widget-7">
              <div class="feature-widget-7__icon-wrapper">
                <img src="{{url('website/image/about/feature-icon-6.svg')}}" alt="feature icon">
              </div>
              <div class="feature-widget-7__body">
                <h4 class="feature-widget-7__title">Simplicity interface</h4>
                <p>Simplicity is used loosely to refer to the need to minimize a process</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~
    About : Portfolio Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="about_portfolio-section section-padding-120">
      <div class="container">
        <div class="section-heading section-heading--row text-center  text-md-initial">
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-8">
              <h2 class="section-heading__title heading-md text-black">We create world-class web design, & branding</h2>
            </div>
            <div class="col-xl-3 col-md-4">
              <div class="section-heading__button">
                <a href="#" class="btn-masco rounded-pill btn-fill--up">
                  <span>See more works</span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row row--portfolio-gutter">
          <div class="col-md-6 col-xs-10" data-aos-duration="1000" data-aos="fade-up" data-aos-delay="300">
            <a class='portfolio-widget ' href='portfolio-details.html'>
              <div class="portfolio-widget_image-block">
                <img src="{{url('website/image/home-1/porfolio-img2.png')}}" alt="portfolio image">
              </div>
              <div class="portfolio-widget__title-block">
                <h3 class="portfolio-widget__title">
                  App — The power of communication
                </h3>
                <span class="portfolio-widget__category">UI/UX Design</span>
              </div>
              <div class="portfolio-widget__link">
                <span  class="btn-link btn-arrow">View work
        </span>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-xs-10" data-aos-duration="1000" data-aos="fade-down" data-aos-delay="300">
            <a class='portfolio-widget ' href='portfolio-details.html'>
              <div class="portfolio-widget_image-block">
                <img src="{{url('website/image/home-1/porfolio-img1.png')}}" alt="portfolio image">
              </div>
              <div class="portfolio-widget__title-block">
                <h3 class="portfolio-widget__title">
                  Website — The future lifestyle platform.
                </h3>
                <span class="portfolio-widget__category">Branding</span>
              </div>
              <div class="portfolio-widget__link">
                <span  class="btn-link btn-arrow">View work
        </span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~
    About : Team Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="about_team-section section-padding-120 bg-light-2">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xxl-5 col-lg-6 col-md-8 col-10">
            <div class="section-heading text-center">
              <h2 class="section-heading__title heading-md text-black">Amazing team behind our creative products</h2>
            </div>
          </div>
        </div>
        <div class="row team-card-2-row">
          <div class="col-lg-3 col-sm-6 col-8">
            <div class="team-card-2">
              <img src="{{url('website/image/about/team-image-1.png')}}" alt="Team Member Image">
              <div class="team-card-2__body">
                <h4 class="team-card-2__name">Eleanor Pena</h4>
                <span class="team-card-2__position">CEO &amp; Co-founder</span>
                <div class="team-card-2__social-links">
                  <a href="#">
                    <i class="fa-brands fa-twitter"></i>
                  </a>
                  <a href="#">
                    <i class="fa-brands fa-facebook"></i>
                  </a>
                  <a href="#">
                    <i class="fa-brands fa-instagram"></i>
                  </a>
                  <a href="#">
                    <i class="fa-brands fa-github"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-8">
            <div class="team-card-2">
              <img src="{{url('website/image/about/team-image-2.png')}}" alt="Team Member Image">
              <div class="team-card-2__body">
                <h4 class="team-card-2__name">Leslie Alexander</h4>
                <span class="team-card-2__position">Product Manager</span>
                <div class="team-card-2__social-links">
                  <a href="#">
                    <i class="fa-brands fa-twitter"></i>
                  </a>
                  <a href="#">
                    <i class="fa-brands fa-facebook"></i>
                  </a>
                  <a href="#">
                    <i class="fa-brands fa-instagram"></i>
                  </a>
                  <a href="#">
                    <i class="fa-brands fa-github"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-8">
            <div class="team-card-2">
              <img src="{{url('website/image/about/team-image-3.png')}}" alt="Team Member Image">
              <div class="team-card-2__body">
                <h4 class="team-card-2__name">Jane Cooper</h4>
                <span class="team-card-2__position">Web Developer</span>
                <div class="team-card-2__social-links">
                  <a href="#">
                    <i class="fa-brands fa-twitter"></i>
                  </a>
                  <a href="#">
                    <i class="fa-brands fa-facebook"></i>
                  </a>
                  <a href="#">
                    <i class="fa-brands fa-instagram"></i>
                  </a>
                  <a href="#">
                    <i class="fa-brands fa-github"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-8">
            <div class="team-card-2">
              <img src="{{url('website/image/about/team-image-4.png')}}" alt="Team Member Image">
              <div class="team-card-2__body">
                <h4 class="team-card-2__name">Floyd Miles</h4>
                <span class="team-card-2__position">Marketing Expert</span>
                <div class="team-card-2__social-links">
                  <a href="#">
                    <i class="fa-brands fa-twitter"></i>
                  </a>
                  <a href="#">
                    <i class="fa-brands fa-facebook"></i>
                  </a>
                  <a href="#">
                    <i class="fa-brands fa-instagram"></i>
                  </a>
                  <a href="#">
                    <i class="fa-brands fa-github"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    About  : FAQ Section 
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="about_faq-section section-padding-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xxl-6 col-md-8">
            <div class="section-heading section-heading text-center">
              <h2 class="section-heading__title heading-md text-black">Frequently asked questions about our digital agency</h2>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="accordion-style-1" id="home-1-faq">
              <div class="accordion-item">
                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#home-1-faq-item" aria-expanded="true" aria-controls="home-1-faq-item">
                  Q. What is a digital agency?
                </button>
                <div id="home-1-faq-item" class="accordion-collapse collapse show" data-bs-parent="#home-1-faq">
                  <div class="accordion-item__body">
                    A digital agency is a company that leverages digital channels to grow their clients’ brands online.
                    ls and technologies such as web design, digital marketing, creative design and app development.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#home-1-faq-item-2" aria-expanded="false" aria-controls="home-1-faq-item-2">
                  Q. What services does a digital agency provide?
                </button>
                <div id="home-1-faq-item-2" class="accordion-collapse collapse" data-bs-parent="#home-1-faq">
                  <div class="accordion-item__body">
                    A digital agency is a company that leverages digital channels to grow their clients’ brands online.
                    ls and technologies such as web design, digital marketing, creative design and app development.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#home-1-faq-item-3" aria-expanded="false" aria-controls="home-1-faq-item-3">
                  Q. Hiring a digital agency vs hiring in-house: What is the difference?
                </button>
                <div id="home-1-faq-item-3" class="accordion-collapse collapse" data-bs-parent="#home-1-faq">
                  <div class="accordion-item__body">
                    A digital agency is a company that leverages digital channels to grow their clients’ brands online.
                    ls and technologies such as web design, digital marketing, creative design and app development.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#home-1-faq-item-4" aria-expanded="false" aria-controls="home-1-faq-item-4">
                  Q. What questions should you ask when interviewing a digital agency?
                </button>
                <div id="home-1-faq-item-4" class="accordion-collapse collapse" data-bs-parent="#home-1-faq">
                  <div class="accordion-item__body">
                    A digital agency is a company that leverages digital channels to grow their clients’ brands online.
                    ls and technologies such as web design, digital marketing, creative design and app development.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#home-1-faq-item-5" aria-expanded="false" aria-controls="home-1-faq-item-5">
                  Q. How do digital agencies charge for their services?
                </button>
                <div id="home-1-faq-item-5" class="accordion-collapse collapse" data-bs-parent="#home-1-faq">
                  <div class="accordion-item__body">
                    A digital agency is a company that leverages digital channels to grow their clients’ brands online.
                    ls and technologies such as web design, digital marketing, creative design and app development.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section-button">
          <a href="#" class="btn-masco rounded-pill btn-fill--up">Still, have any questions? Contact us</a>
        </div>
      </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~
     CTA Base 
~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
 
      @endsection