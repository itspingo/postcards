@extends('layouts.website')
@section('content')


    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 4 : Hero Section 
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<div class="home-4_hero-section bg-cream" id="hero">
      <div class="home-4_hero-shape">
        <img class="hero-shape-1" src="{{url('website/image/home-4/hero-shape.png')}}" alt="image alt" />
        <img class="hero-shape-2" src="{{url('website/image/home-4/hero-shape-2.png')}}" alt="image shape" />
      </div>
      <div class="container">
        <div class="row row--custom">
          <div class="col-xxl-auto col-xl-5 col-lg-5 col-md-5 col-sm-6 col-xs-8 col-8" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="300">
            <div class="home-4_hero-image">
              <img class="hero-image" src="{{url('website/image/birthday_card.png')}}" alt="hero image" />
              <div class="home-4_hero-image-shape">
                <!-- <img src="{{url('website/image/home-4/hero-image-shape.svg')}}" alt="hero image shape" /> -->
              </div>
            </div>
          </div>
          <div class="col-xxl-auto col-xl-7 col-lg-7 col-md-10" data-aos-duration="1000" data-aos="fade-right" data-aos-delay="300">
            <div class="home-4_hero-content">
              <div class="home-4_hero-content-text">
                <h1 class="hero-content__title text-black heading-xl heading-xl heading-xl--dm-sans">
                  Keep learning and boost your knowledge
                </h1>
                <p>
                  Looking to add new skills? We’re a leading destination for online
                  education and world-class education anywhere. We give you many
                  cards and the freedom to learn what you want.
                </p>
              </div>
              <div class="home-4_hero-content-button">
                <a class='btn-masco btn-primary-l04 btn-shadow btn-shadow--reverse btn-shadow--reverse-center rounded-pill' href='contact.html'>
                  <span>Start free now</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~
   Home 4 : Feature Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<!-- <div class="section-divider bg-cream-dark">
      <img src="{{url('website/image/home-4/section-divider-cream.svg')}}" alt="section divider">
    </div> -->
    
<div class="home-4_feature-section section-padding bg-cream-dark" id="feature">
      <div class="container position-relative z-1">
        <div class="home-4_feature-section__shape">
          <img src="{{url('website/image/home-4/feature-shape.svg')}}" alt="image alt">
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9">
            <div class="section-heading">
              <h2 class="section-heading__title heading-md text-black heading-md--dm-sans">Special features that make our digital cards the best</h2>
            </div>
          </div>
        </div>
        <div class="row justify-content-center  gutter-y-default">
          <div class="col-md-6 col-lg-5 col-xl-3" data-aos="fade-up" data-aos-delay="100">
            <div class="feature-card-3">
              <div class="feature-card-3__icon-wrapper">
                <img src="{{url('website/image/home-4/skill-icon.svg')}}" alt="feature icon">
              </div>
              <h4 class="feature-card-3__title">New Designs</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 col-xl-3" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-card-3">
              <div class="feature-card-3__icon-wrapper">
                <img src="{{url('website/image/home-4/expert-icon.svg')}}" alt="feature icon">
              </div>
              <h4 class="feature-card-3__title">Easy To Use</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 col-xl-3" data-aos="fade-up" data-aos-delay="300">
            <div class="feature-card-3">
              <div class="feature-card-3__icon-wrapper">
                <img src="{{url('website/image/home-4/job-icon.svg')}}" alt="feature icon">
              </div>
              <h4 class="feature-card-3__title">Custom Design</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 col-xl-3" data-aos="fade-up" data-aos-delay="400">
            <div class="feature-card-3">
              <div class="feature-card-3__icon-wrapper">
                <img src="{{url('website/image/home-4/lifelong-icon.svg')}}" alt="feature icon">
              </div>
              <h4 class="feature-card-3__title">Low Cost</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 4  : Content Section 1
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~
    Home 4 : Topic Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="home-4_topic-section section-padding-120 bg-white">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9">
            <div class="section-heading">
              <h2 class="section-heading__title heading-md text-black heading-md--dm-sans">Here are numerous card categories you can select from</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="ticker-02_section">
        <div class="ticker-02_wrapper">
          <div class="ticker-02_content">
            <div class="ticker-tag ">
              Condolences
            </div>
            <div class="ticker-tag ">
              Birthday Invitations
            </div>
           
            <div class="ticker-tag ">
              Wedding Invitations
            </div>
            <div class="ticker-tag ">
              Happy Birthday
            </div>
            <div class="ticker-tag ">
              Good day and night
            </div>
            <div class="ticker-tag ">
              School
            </div>
            <div class="ticker-tag ">
              Romance
            </div>
            <div class="ticker-tag ">
              Business
            </div>
          </div>
          <div class="ticker-02_content">
            <div class="ticker-tag ">
              Misc
            </div>
            <div class="ticker-tag ">
              Home Sickness
            </div>
            <div class="ticker-tag ">
             Religious Holidays
            </div>
            <div class="ticker-tag ">
              Congratulations
            </div>
            <div class="ticker-tag ">
              Greetings
            </div>
            <div class="ticker-tag ">
              Father's Day
            </div>
            <div class="ticker-tag ">
              Mother's Day
            </div>
            <div class="ticker-tag ">
              Anniversary
            </div>
           
          </div>

<!-- 
          <div class="ticker-02_content">
            <div class="ticker-tag ">
              Programming Languages
            </div>
            <div class="ticker-tag ">
              Time Management
            </div>
            <div class="ticker-tag ">
              iOS Development
            </div>
            <div class="ticker-tag ">
              Leadership Skills
            </div>
            <div class="ticker-tag ">
              Business
            </div>
            <div class="ticker-tag ">
              Photography
            </div>
            <div class="ticker-tag ">
              Digital Marketing
            </div>
            <div class="ticker-tag ">
              Lifestyle
            </div>
            <div class="ticker-tag ">
              Healthcare
            </div>
          </div>
          <div class="ticker-02_content">
            <div class="ticker-tag ">
              Programming Languages
            </div>
            <div class="ticker-tag ">
              Time Management
            </div>
            <div class="ticker-tag ">
              iOS Development
            </div>
            <div class="ticker-tag ">
              Leadership Skills
            </div>
            <div class="ticker-tag ">
              Business
            </div>
            <div class="ticker-tag ">
              Photography
            </div>
            <div class="ticker-tag ">
              Digital Marketing
            </div>
            <div class="ticker-tag ">
              Lifestyle
            </div>
            <div class="ticker-tag ">
              Healthcare
            </div>
          </div>
          <div class="ticker-02_content">
            <div class="ticker-tag ">
              Programming Languages
            </div>
            <div class="ticker-tag ">
              Time Management
            </div>
            <div class="ticker-tag ">
              iOS Development
            </div>
            <div class="ticker-tag ">
              Leadership Skills
            </div>
            <div class="ticker-tag ">
              Business
            </div>
            <div class="ticker-tag ">
              Photography
            </div>
            <div class="ticker-tag ">
              Digital Marketing
            </div>
            <div class="ticker-tag ">
              Lifestyle
            </div>
            <div class="ticker-tag ">
              Healthcare
            </div>
          </div>
          <div class="ticker-02_content">
            <div class="ticker-tag ">
              Programming Languages
            </div>
            <div class="ticker-tag ">
              Time Management
            </div>
            <div class="ticker-tag ">
              iOS Development
            </div>
            <div class="ticker-tag ">
              Leadership Skills
            </div>
            <div class="ticker-tag ">
              Business
            </div>
            <div class="ticker-tag ">
              Photography
            </div>
            <div class="ticker-tag ">
              Digital Marketing
            </div>
            <div class="ticker-tag ">
              Lifestyle
            </div>
            <div class="ticker-tag ">
              Healthcare
            </div>
          </div>
        </div>
        <div class="ticker-02_wrapper">
          <div class="ticker-02_content  ticker-02_content--reverse">
            <div class="ticker-tag ">
              Programming Languages
            </div>
            <div class="ticker-tag ">
              Time Management
            </div>
            <div class="ticker-tag ">
              iOS Development
            </div>
            <div class="ticker-tag ">
              Leadership Skills
            </div>
            <div class="ticker-tag ">
              Business
            </div>
            <div class="ticker-tag ">
              Photography
            </div>
            <div class="ticker-tag ">
              Digital Marketing
            </div>
            <div class="ticker-tag ">
              Lifestyle
            </div>
            <div class="ticker-tag ">
              Healthcare
            </div>
          </div>
          <div class="ticker-02_content  ticker-02_content--reverse">
            <div class="ticker-tag ">
              Programming Languages
            </div>
            <div class="ticker-tag ">
              Time Management
            </div>
            <div class="ticker-tag ">
              iOS Development
            </div>
            <div class="ticker-tag ">
              Leadership Skills
            </div>
            <div class="ticker-tag ">
              Business
            </div>
            <div class="ticker-tag ">
              Photography
            </div>
            <div class="ticker-tag ">
              Digital Marketing
            </div>
            <div class="ticker-tag ">
              Lifestyle
            </div>
            <div class="ticker-tag ">
              Healthcare
            </div>
          </div>
          <div class="ticker-02_content  ticker-02_content--reverse">
            <div class="ticker-tag ">
              Programming Languages
            </div>
            <div class="ticker-tag ">
              Time Management
            </div>
            <div class="ticker-tag ">
              iOS Development
            </div>
            <div class="ticker-tag ">
              Leadership Skills
            </div>
            <div class="ticker-tag ">
              Business
            </div>
            <div class="ticker-tag ">
              Photography
            </div>
            <div class="ticker-tag ">
              Digital Marketing
            </div>
            <div class="ticker-tag ">
              Lifestyle
            </div>
            <div class="ticker-tag ">
              Healthcare
            </div>
          </div>
          <div class="ticker-02_content  ticker-02_content--reverse">
            <div class="ticker-tag ">
              Programming Languages
            </div>
            <div class="ticker-tag ">
              Time Management
            </div>
            <div class="ticker-tag ">
              iOS Development
            </div>
            <div class="ticker-tag ">
              Leadership Skills
            </div>
            <div class="ticker-tag ">
              Business
            </div>
            <div class="ticker-tag ">
              Photography
            </div>
            <div class="ticker-tag ">
              Digital Marketing
            </div>
            <div class="ticker-tag ">
              Lifestyle
            </div>
            <div class="ticker-tag ">
              Healthcare
            </div>
          </div>
          <div class="ticker-02_content  ticker-02_content--reverse">
            <div class="ticker-tag ">
              Programming Languages
            </div>
            <div class="ticker-tag ">
              Time Management
            </div>
            <div class="ticker-tag ">
              iOS Development
            </div>
            <div class="ticker-tag ">
              Leadership Skills
            </div>
            <div class="ticker-tag ">
              Business
            </div>
            <div class="ticker-tag ">
              Photography
            </div>
            <div class="ticker-tag ">
              Digital Marketing
            </div>
            <div class="ticker-tag ">
              Lifestyle
            </div>
            <div class="ticker-tag ">
              Healthcare
            </div>
          </div>
          <div class="ticker-02_content  ticker-02_content--reverse">
            <div class="ticker-tag ">
              Programming Languages
            </div>
            <div class="ticker-tag ">
              Time Management
            </div>
            <div class="ticker-tag ">
              iOS Development
            </div>
            <div class="ticker-tag ">
              Leadership Skills
            </div>
            <div class="ticker-tag ">
              Business
            </div>
            <div class="ticker-tag ">
              Photography
            </div>
            <div class="ticker-tag ">
              Digital Marketing
            </div>
            <div class="ticker-tag ">
              Lifestyle
            </div>
            <div class="ticker-tag ">
              Healthcare
            </div>
          </div> -->



        </div>
      </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  Home 4 : Section Divider
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="section-divider bg-cream-dark">
      <img src="{{url('website/image/home-4/section-divider-cream.svg')}}" alt="section divider">
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 4 : Course Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-4_course-section bg-cream-dark section-padding" id="courses">
      <div class="container">
        <div class="section-heading section-heading--row text-center text-md-initial">
          <div class="row">
            <div class="col-xxl-5 col-md-6">
              <h2 class="section-heading__title heading-md text-black heading-md--dm-sans">Browse our cards that suites you best.</h2>
            </div>
            <div class="col-xl-5 col-md-6">
              <p>Choose from over hundereds of cards, with dozens added every week. Top it off with cards that round out your need for the event today.</p>
            </div>
          </div>
        </div>

       

        <div class="row gutter-y-default">

        @foreach ($mycards as $mycard)
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="course-card h-100">
              <div class="course-card__image" style="background-image: url({{ $mycard->background_image }})">


              
              <div class="item is-desktop">
                  <div class="picture" style="position: relative;">

                      @if ($mycard->background_image)
                      <div class="background lazy entered loaded" data-bg="{{ $mycard->background_image }}"
                          data-bg-hidpi="{{ $mycard->background_image }}"
                          style="background-color: rgb(163, 108, 66); background-image: url(&quot;{{ $mycard->background_image }}&quot;);"
                          data-ll-status="loaded"></div>
                      @else
                      <div class="background lazy entered loaded"
                          data-bg="/data/assets/background_thumbnails/61624_tn_1x.webp"
                          data-bg-hidpi="/data/assets/background_thumbnails/61624_tn_2x.webp"
                          style="background-color: rgb(163, 108, 66); background-image: url(&quot;/data/assets/background_thumbnails/61624_tn_1x.webp&quot;);"
                          data-ll-status="loaded"></div>
                      @endif

                      @if ($mycard->back_image)
                      <img class="envelope lazy entered loaded" src="{{ $mycard->flap_image }}"
                          style="width:150px; height:120px; transform: scaleY(-1); margin-bottom:98px;">
                      <img class="envelope lazy entered loaded" src="{{ $mycard->envelop_inside_image }}"
                          style="width:150px; height:200px; margin-bottom:20px;">

                      <img class="envelope lazy entered loaded" data-src="{{ $mycard->back_image }}"
                          data-srcset="{{ $mycard->back_image }}" data-ll-status="loaded"
                          srcset="{{ $mycard->back_image }}" src="{{ $mycard->back_image }}"
                          style="width:150px; height:100px">

                      <img class="envelope lazy entered loaded"
                          src="{{ url('website/assets/images/flap-shadow.png') }}"
                          style="width:150px; height:200px; margin-bottom:98px;">
                      @else
                      <img class="envelope lazy entered loaded" width="200" height="269"
                          data-src="{{ url('website/assets/images/1002.webp') }}"
                          data-srcset="{{ url('website/assets/images/1002.webp') }}" data-ll-status="loaded"
                          srcset="{{ url('website/assets/images/1002.webp') }}"
                          src="{{ url('website/assets/images/1002.webp') }}">
                      @endif

                      @if ($mycard->card_image)
                      <div class="inner">
                          <img class="card lazy front entered loaded" width="200" height="284"
                              data-src="{{ url('storage/' . str_replace('public/', '', $mycard->card_image)) }}"
                              data-ll-status="loaded"
                              src="{{ url('storage/' . str_replace('public/', '', $mycard->card_image)) }}">
                      </div>
                      @else
                      <div class="inner">
                          <img class="card lazy front entered loaded" width="200" height="284"
                              data-src="/userdata/thumb/B2405/29/n7eqfec7mfckfge.jpg" data-ll-status="loaded"
                              src="{{ url('website/assets/images/n7eqfec7mfckfge.jpg') }}">
                          <!-- <img class="card lazy back" width="200" height="284" data-src="" style="display: none;"> -->
                      </div>
                      @endif

                      <!-- Heart Icon  <i class="fas fa-heart"></i> -->
                      <div class="heart-icon" style="position: absolute; top: 10px; right: 10px; z-index: 10;">
                        @if(isFavorited($mycard->id))
                          <i data-card-id="{{$mycard->id}}" class="fas fa-heart" style="color: red;   font-size: 24px; cursor: pointer;" onclick="addToFavorites({{ $mycard->id }})"></i>
                        @else
                          <i data-card-id="{{$mycard->id}}" class="far fa-heart" style="color: red;   font-size: 24px; cursor: pointer;" onclick="addToFavorites({{ $mycard->id }})"></i>
                        @endif
                      </div>

                      <div></div>
                  </div>
              </div>

              <script>
                function addToFavorites(cardId) {
                    $.ajax({
                        url: '{{ url("home/addto_favorites") }}', // Use the named route
                        type: 'POST',
                        data: {
                            card_id: cardId,
                            _token: '{{ csrf_token() }}' // Include CSRF token for security
                        },
                        success: function(response) {
                            if (response.success) {
                                // Change the heart icon to filled
                                var heartIcon = $('.heart-icon i[data-card-id="' + cardId + '"]'); //.removeClass('far fa-heart').addClass('fas fa-heart');
                                // alert(response.message); // Optional: Show success message

                            }if (heartIcon.hasClass('far fa-heart')) {
                                // Change the heart icon to filled
                                heartIcon.removeClass('far fa-heart').addClass('fas fa-heart');
                            } else {
                                // Change the heart icon to outlined
                                heartIcon.removeClass('fas fa-heart').addClass('far fa-heart');
                            }
                        },
                        error: function(xhr) {
                            // Handle errors
                            alert('An error occurred while adding to favorites. Please try again.');
                        }
                    });
                }
            </script>



                <!-- <img src="{{url('website/image/home-4/course-1.png')}}" alt="image alt" class="w-100"> -->
              </div>
              <div class="course-card__body">
                <div class="course-card__meta">
                  <div class="course-card__meta-tag">
                    <span>{{'card category'}}</span>
                    <span>2 comments</span>
                  </div>
                  <div class="course-card__meta-rating">
                    <i class="fa-solid fa-star"></i>4
                  </div>
                </div>
                <h3 class="course-card__title">{{$mycard->title}}</h3>
              </div>
              <div class="course-card__footer">
                <a class='btn-masco btn-primary-l04 btn-shadow rounded-pill w-100 btn-shadow--reverse btn-shadow--reverse-center ' href="{{url('card_designer/load_card/'.$mycard->id)}}">Load This Card</a>
              </div>
            </div>
          </div>
          @endforeach

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="course-card h-100">
              <div class="course-card__image">
                <img src="{{url('website/image/home-4/course-2.png')}}" alt="image alt" class="w-100">
              </div>
              <div class="course-card__body">
                <div class="course-card__meta">
                  <div class="course-card__meta-tag">
                    <span>Photography</span>
                    <span>124 cards</span>
                  </div>
                  <div class="course-card__meta-rating">
                    <i class="fa-solid fa-star"></i>3.5
                  </div>
                </div>
                <h3 class="course-card__title">Improve photography skills &amp; you&#39;ll learn to use lenses</h3>
              </div>
              <div class="course-card__footer">
                <a class='btn-masco btn-primary-l04 btn-shadow rounded-pill w-100 btn-shadow--reverse btn-shadow--reverse-center ' href='pricing-2.html'>Purchase for free</a>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="course-card h-100">
              <div class="course-card__image">
                <img src="{{url('website/image/home-4/course-3.png')}}" alt="image alt" class="w-100">
              </div>
              <div class="course-card__body">
                <div class="course-card__meta">
                  <div class="course-card__meta-tag">
                    <span>Video Editing</span>
                    <span>22 cards</span>
                  </div>
                  <div class="course-card__meta-rating">
                    <i class="fa-solid fa-star"></i>5.0
                  </div>
                </div>
                <h3 class="course-card__title">Programing language helps to solve problems logically</h3>
              </div>
              <div class="course-card__footer">
                <a class='btn-masco btn-primary-l04 btn-shadow rounded-pill w-100 btn-shadow--reverse btn-shadow--reverse-center ' href='pricing-2.html'>Purchase only $650.00</a>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="course-card h-100">
              <div class="course-card__image">
                <img src="{{url('website/image/home-4/course-4.png')}}" alt="image alt" class="w-100">
              </div>
              <div class="course-card__body">
                <div class="course-card__meta">
                  <div class="course-card__meta-tag">
                    <span>Art &amp; Music</span>
                    <span>502 cards</span>
                  </div>
                  <div class="course-card__meta-rating">
                    <i class="fa-solid fa-star"></i>4.9
                  </div>
                </div>
                <h3 class="course-card__title">This course improves your skills in a variety of ways</h3>
              </div>
              <div class="course-card__footer">
                <a class='btn-masco btn-primary-l04 btn-shadow rounded-pill w-100 btn-shadow--reverse btn-shadow--reverse-center ' href='pricing-2.html'>Purchase for free</a>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="course-card h-100">
              <div class="course-card__image">
                <img src="{{url('website/image/home-4/course-5.png')}}" alt="image alt" class="w-100">
              </div>
              <div class="course-card__body">
                <div class="course-card__meta">
                  <div class="course-card__meta-tag">
                    <span>Lifestyle</span>
                    <span>832 cards</span>
                  </div>
                  <div class="course-card__meta-rating">
                    <i class="fa-solid fa-star"></i>3.0
                  </div>
                </div>
                <h3 class="course-card__title">It helps improve self-esteem &amp; increase life-satisfaction</h3>
              </div>
              <div class="course-card__footer">
                <a class='btn-masco btn-primary-l04 btn-shadow rounded-pill w-100 btn-shadow--reverse btn-shadow--reverse-center ' href='pricing-2.html'>Purchase only $45.00</a>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="course-card h-100">
              <div class="course-card__image">
                <img src="{{url('website/image/home-4/course-6.png')}}" alt="image alt" class="w-100">
              </div>
              <div class="course-card__body">
                <div class="course-card__meta">
                  <div class="course-card__meta-tag">
                    <span>UI/UX Design</span>
                    <span>649 cards</span>
                  </div>
                  <div class="course-card__meta-rating">
                    <i class="fa-solid fa-star"></i>4.0
                  </div>
                </div>
                <h3 class="course-card__title">UI/UX design teaches how to make a product attractive </h3>
              </div>
              <div class="course-card__footer">
                <a class='btn-masco btn-primary-l04 btn-shadow rounded-pill w-100 btn-shadow--reverse btn-shadow--reverse-center ' href='pricing-2.html'>Purchase only $250.00</a>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  Home 4 : Section Divider
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="section-divider bg-cream">
      <img src="{{url('website/image/home-4/section-divider-gray.svg')}}" alt="section divider">
    </div>

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 4 : Testimonial Section 
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-4_testimonial-section padding-bottom-120 bg-cream">
      <div class="container position-relative z-1">
        <div class="home-4_testimonial-section__shape">
          <img src="{{url('website/image/home-4/testimonial-shape.svg')}}" alt="section divider">
        </div>
        <div class="home-4_testimonial-section__shape-2">
          <img src="{{url('website/image/home-4/testimonial-shape-2.svg')}}" alt="section divider">
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-xxl-7 col-lg-8 col-md-10">
            <div class="section-heading">
              <h2 class="section-heading__title heading-md text-black heading-md--dm-sans">What people say about us</h2>
            </div>
          </div>
        </div>
        <div class="row gutter-y-30 justify-content-center">
          <div class="col-lg-6 col-md-10" data-aos="fade-left" data-aos-delay="100">
            <div class="testimonial-widget-2">
              <div class="testimonial-widget-2__star">
                <img src="{{url('website/image/icons/star-yellow.svg')}}" alt="image alt">
              </div>
              <div class="testimonial-widget-2__body">
                <p>
                  The online class professionals were truly a lifesaver. Without their expertise and kind help I could not have achieved the best results in my class. I followed what they said and they helped me get the best grades.
                </p>
                <div class="testimonial-widget-2__user-block">
                  <img src="{{url('website/image/home-4/testimonial-authour-1.png')}}" alt="image alt">
                  <div class="author-info">
                    <h4 class="testimonial-widget-2__user-name">Kristin Watson</h4>
                    <span class="testimonial-widget-2__user-position">Student of Cambridge University, UK</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-10" data-aos="fade-left" data-aos-delay="200">
            <div class="testimonial-widget-2">
              <div class="testimonial-widget-2__star">
                <img src="{{url('website/image/icons/star-yellow.svg')}}" alt="image alt">
              </div>
              <div class="testimonial-widget-2__body">
                <p>
                  I actually wanted to learn more than what was taught. I knew I couldn&#39;t be a designer, but I wanted to at least understand some of the basics. Then I bought UI / UX design course &amp; completed the whole course now I am a good designer.”
                </p>
                <div class="testimonial-widget-2__user-block">
                  <img src="{{url('website/image/home-4/testimonial-authour-2.png')}}" alt="image alt">
                  <div class="author-info">
                    <h4 class="testimonial-widget-2__user-name">Kristin Watson</h4>
                    <span class="testimonial-widget-2__user-position">UI/UX designer, USA</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  Home 4 : Section Divider
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="section-divider bg-cream-dark">
      <img src="{{url('website/image/home-4/section-divider-cream.svg')}}" alt="section divider">
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 4 : FAQ Section 
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-4_faq-section section-padding-100 bg-cream-dark" id="faq">
      <div class="container">
        <div class="row">
          <div class=" col-lg-6 col-md-10">
            <div class="section-heading">
              <h2 class="section-heading__title heading-md text-black heading-md--dm-sans">Frequently asked questions about our cards</h2>
              <p>We encourage our students and teachers to ask us any questions regarding our cards and classes. Our skilled mentors are ready to answer all your questions 24/7.</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-10">
            <div class="accordion-style-2" id="home-4_faq">
              <button class="accordion-item " type="button" data-bs-toggle="collapse" data-bs-target="#home-4_faq-item" aria-expanded="true" aria-controls="home-4_faq-item">
                <div class="accordion-button ">
                  Q. What is a digital agency?
                </div>
                <div id="home-4_faq-item" class="accordion-collapse collapse show" data-bs-parent="#home-4_faq">
                  <div class="accordion-item__body">
                    Click the 'register yourself' button to go to the online catalog. Click the 'add to cart' link for one or more packages of cards.
                  </div>
                </div>
              </button>
              <button class="accordion-item collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#home-4_faq-item-2" aria-expanded="false" aria-controls="home-4_faq-item-2">
                <div class="accordion-button ">
                  Q. What is the time commitment for the cards?
                </div>
                <div id="home-4_faq-item-2" class="accordion-collapse collapse" data-bs-parent="#home-4_faq">
                  <div class="accordion-item__body">
                    Click the 'register yourself' button to go to the online catalog. Click the 'add to cart' link for one or more packages of cards.
                  </div>
                </div>
              </button>
              <button class="accordion-item collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#home-4_faq-item-3" aria-expanded="false" aria-controls="home-4_faq-item-3">
                <div class="accordion-button ">
                  Q. Can I receive college credit for these cards?
                </div>
                <div id="home-4_faq-item-3" class="accordion-collapse collapse" data-bs-parent="#home-4_faq">
                  <div class="accordion-item__body">
                    Click the 'register yourself' button to go to the online catalog. Click the 'add to cart' link for one or more packages of cards.
                  </div>
                </div>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  Home 4 : Section Divider
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="section-divider bg-cream">
      <img src="{{url('website/image/home-4/section-divider-gray.svg')}}" alt="section divider">
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~
    Home 4 : CTA 
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="cta-home-4 bg-cream">
      <div class="container position-relative">
        <div class="cta-home-4__shape shape-1">
          <img src="{{url('website/image/cta/cta-4-shape-1.png')}}" alt="image alt">
        </div>
        <div class="cta-home-4__shape shape-2">
          <img src="{{url('website/image/cta/cta-4-shape-2.png')}}" alt="image alt">
        </div>
        <div class="cta-content-block">
          <div class="cta-text-block">
            <h2 class="cta-home-4-title heading-md text-black heading-md--dm-sans">Start preparing a digital card and surprize your love.</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          </div>
          <!-- <div class="cta-button-group">
            <a href="#">
              <img src="{{url('website/image/common/app-store-rounded.png')}}" alt="image alt">
            </a>
            <a href="#">
              <img src="{{url('website/image/common/play-store-rounded.png')}}" alt="image alt">
            </a>
          </div> -->
        </div>
      </div>
    </section>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  Home 4 : Section Divider
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

<style>
            .item.is-desktop {
    display: flex;
    
    justify-content: space-between;
    align-items: center;
}

.picture {
    position: relative;
    width: 100%;
    display: flex;
    justify-content: flex-start;
    align-items: center;
}

.envelope {
    position: absolute;
    left: 20px; 
    
    height: 50%;
    z-index: 1;
}

.envelope:nth-child(1) {
    z-index: 1; /* Back part of the envelope */
    
    margin-bottom: 98px;
}

.envelope:nth-child(2) {
    z-index: 2; /* Inside part of the envelope */
    margin-top: 15px;
    margin-bottom: 20px;
}

.envelope:nth-child(3) {
    z-index: 3; /* Flap part of the envelope */
    
}

.envelope:nth-child(4) {
    z-index: 4; /* Flap shadow */
    
    margin-bottom: -98px;
}

.inner {
    position: relative;
    z-index: 5;
    width: 50%;
    margin-left: auto;
    display: flex;
    justify-content: flex-start;
}

.card {
    position: relative;
    z-index: 5;
    width: 100%;
    height: 50%;
    /* height: auto; */
    transform: translateX(-20%); /* Move the card image to cover half of the envelope */
}

            </style>
            

@endsection