@extends('layouts.website')
@section('content')
<!-- <div class="inner_banner-section">
      <img class="inner_banner-background-image" src="{{url('website/image/common/inner-bg.png')}}" alt="image alt">
      <div class="container">
        <div class="inner_banner-content-block">
          <h3 class="inner_banner-title">Card Details</h3>
          <ul class="banner__page-navigator">
            <li>
              <a href="{{url('home')}}">Home</a>
            </li>
            <li class="active">
              <a href='career-details.html'>
                Career Details
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div> -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 Career Details Page : main section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="career-details_main-section section-padding-120">
  <div class="container">
    <div class="row row--custom2">
      <div class="col-xl-5 col-lg-10">


        <div class="course-card h-100">
          <div class="course-card__image" style="background-image: url({{ $card->background_image }})">



            <div class="item is-desktop">
              <div class="picture" style="position: relative;">

                @if ($card->background_image)
                <div class="background lazy entered loaded" data-bg="{{ $card->background_image }}"
                  data-bg-hidpi="{{ $card->background_image }}"
                  style="background-color: rgb(163, 108, 66); background-image: url(&quot;{{ $card->background_image }}&quot;);"
                  data-ll-status="loaded"></div>
                @else
                <div class="background lazy entered loaded"
                  data-bg="/data/assets/background_thumbnails/61624_tn_1x.webp"
                  data-bg-hidpi="/data/assets/background_thumbnails/61624_tn_2x.webp"
                  style="background-color: rgb(163, 108, 66); background-image: url(&quot;/data/assets/background_thumbnails/61624_tn_1x.webp&quot;);"
                  data-ll-status="loaded"></div>
                @endif

                @if ($card->back_image)
                <img class="envelope lazy entered loaded" src="{{ $card->flap_image }}"
                  style="width:150px; height:120px; transform: scaleY(-1); margin-bottom:98px;">
                <img class="envelope lazy entered loaded" src="{{ $card->envelop_inside_image }}"
                  style="width:150px; height:200px; margin-bottom:20px;">

                <img class="envelope lazy entered loaded" data-src="{{ $card->back_image }}"
                  data-srcset="{{ $card->back_image }}" data-ll-status="loaded"
                  srcset="{{ $card->back_image }}" src="{{ $card->back_image }}"
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

                @if ($card->card_image)
                <div class="inner">
                  <img class="card lazy front entered loaded" width="200" height="284"
                    data-src="{{ url('storage/' . str_replace('public/', '', $card->card_image)) }}"
                    data-ll-status="loaded"
                    src="{{ url('storage/' . str_replace('public/', '', $card->card_image)) }}">
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
                  @if(isFavorited($card->id))
                  <i data-card-id="{{$card->id}}" class="fas fa-heart" style="color: red;   font-size: 24px; cursor: pointer;" onclick="addToFavorites({{ $card->id }})"></i>
                  @else
                  <i data-card-id="{{$card->id}}" class="far fa-heart" style="color: red;   font-size: 24px; cursor: pointer;" onclick="addToFavorites({{ $card->id }})"></i>
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

                    }
                    if (heartIcon.hasClass('far fa-heart')) {
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

        </div>




      </div>
      <div class="col-xl-7">


        <div class="career-details_main-block">
          <div class="career-details">
            <h2 class="career-details_section__title">{{$card->title}}</h2>
            <p>{{$card->short_descr}}</p>

            <!-- <div class="course-card__body">
              <div class="course-card__meta">
                <div class="course-card__meta-tag">
                  <span>{{'card category'}}</span>
                  <span>2 comments</span>
                </div>
                <div class="course-card__meta-rating">
                  <i class="fa-solid fa-star"></i>4
                </div>
              </div>
              
            </div> -->


            <div class="social_meida_icons">
              <h5 style="align:center" align="center">Send via</h5>
              <div align="center">
                <a href="https://facebook.com/sharer/sharer.php?u={{url('play/'.$card->id)}}"><img src="{{url('website/image/facebook.png')}}" width="50px" height="50px"></a>
                <a href="https://twitter.com/intent/tweet/?text={{url('play/'.$card->id)}}"><img src="{{url('website/image/twitter.png')}}" width="50px" height="50px"></a>
                <a href="https://t.me/share/url?url={{url('play/'.$card->id)}}"><img src="{{url('website/image/telegram.png')}}" width="50px" height="50px"></a>
                <a href="whatsapp://send?text={{url('play/'.$card->id)}}"><img src="{{url('website/image/whatsapp.png')}}" width="50px" height="50px"></a>
              </div>
              <p style="align:center" align="center"><b>Copy the link bellow and send it to your friends</b></p>
              <div align="center">
                <input type="text" disabled value="{{url('play/'.$card->id)}}" id="myInput" align="center">
              </div>
              <br>
            </div>

            <div class="course-card__footer">
              <div class="row">
                <div class="col-6">
                  <a class='btn-masco btn-primary-l04 btn-shadow rounded-pill w-100 btn-shadow--reverse btn-shadow--reverse-center ' href="{{url('card_designer/load_card/'.$card->id)}}">Load This Card</a>
                </div>
                <div class="col-6">
                  <a class='btn-masco btn-primary-l04 btn-shadow rounded-pill w-100 btn-shadow--reverse btn-shadow--reverse-center ' href="{{url('play/'.$card->id)}}">Play This Card</a>
                </div>
              </div>



              <!-- <div class="career-details_job-info">
                  <span><img src="{{url('website/image/icons/clock.svg')}}" alt="clock">Full Time</span>
                  <span><img src="{{url('website/image/icons/location.svg')}}" alt="location">London, UK</span>
                  <span><img src="{{url('website/image/icons/cash.svg')}}" alt="cash">$25k-$40k</span>
                </div> -->

            </div>

          </div>


        </div>
      </div>

    </div>
  </div>
</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~
     CTA Base 
~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


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

      @if($other_cards)
      @foreach ($other_cards as $mycard)
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

                    }
                    if (heartIcon.hasClass('far fa-heart')) {
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
      @endif


    </div>
  </div>

</div>

<br><br>

<div style="margin-left:70px;margin-right:70px;">
  <div class="comment-widget__wrapper">
    <h3 class="heading-xs-2 mb-40">{{count($feedbacks)}} comments on this card:</h3>
    <div class="comment-widget">

      @if($feedbacks)
      @foreach($feedbacks as $vfeedback)
      <div class="comment-widget__inner">
        <div class="comment-widget__image">
          <!-- <img src="image/blog/user-1.png" alt="user"> -->
        </div>
        <div class="comment-widget__body">
          <div class="comment-widget__meta">
            <div class="comment-widget__user">
              <h3 class="comment-widget__user-name">{{$vfeedback->full_name}}</h3>
              <span class="comment-widget__date">{{$vfeedback->created_at}}</span>
            </div>
            <div class="course-card__meta-rating">
              <i class="fa-solid fa-star"></i>{{$vfeedback->rating}}
            </div>
            <!-- <div class="comment-widget__button">
                        <i class="fa-solid fa-star" style="color:yellowgreen;"></i>{{$vfeedback->rating}}
                        </div> -->
          </div>
          <p>{{$vfeedback->feedback}}</p>
        </div>
      </div>
      @endforeach
      @endif

    </div>
    <br>

    <form method="post" action="{{url('save_feedback')}}" class="blog-content-comment-box2" style="margin-left:70px;margin-right:70px;">
      @csrf
      <span class="heading-xs-2 mb-40">Leave a comment</span>
      <div class="blog-content_reply-form2">
        <div class="row">

          <div class="col-xl-4 col-l-4 col-md-4 col-4">
            <div class="form-group mb-20">
              <input type="text" class="form-control bg-light-2" placeholder="Full Name" name="full_name" required>
            </div>
          </div>

          <div class="col-xl-4 col-4">
            <div class="form-group mb-20">
              <input type="email" class="form-control bg-light-2" placeholder="Email Address" name="email_address" required>
            </div>
          </div>

          <div class="col-xl-4 col-4">
            <div class="form-group mb-20">
              <!-- <label class="rating-label">Star Rating</label> -->
              <select class="form-control bg-light-2" name="rating" required>
                <option value="1">1 Star</option>
                <option value="2">2 Stars</option>
                <option value="3">3 Stars</option>
                <option value="4">4 Stars</option>
                <option value="5">5 Stars</option>
              </select>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-12">
            <div class="form-group mb-20">
              <textarea class="form-control bg-light-2 textarea" placeholder="Write a comment..." name="feedback" required></textarea>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-12">
            <div class="blog-content_reply-form_button-group" align="center">
              <button class="btn btn-success">Publish</button>
            </div>
          </div>
        </div>

      </div>
      <input type="hidden" name="card_id" id="card_id" value="{{$card->id}}" />
    </form>

    <br><br>
  </div>





  <div class="cta-base">
    <div class="container">
      <div class="cta-base__wrapper border-bottom-dark">
        <div class="row align-items-center justify-content-center justify-content-md-between gutter-y-20">
          <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-7 col-10">
            <div class="cta-base__text-block">
              <h2 class="heading-md text-white">Design your own card now.</h2>
            </div>
          </div>
          <div class="col-xl-auto col-lg-4 col-md-5 col-xs-8 col-10">
            <div class="cta-base__button">
              <a class='btn-masco rounded-pill btn-fill--up' href='contact.html'>
                <span>Let's start </span></a>
              <div class="cta-base__button-shape">
                <img src="image/home-1/cta-shape.svg" alt="image alt">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



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
      z-index: 1;
      /* Back part of the envelope */

      margin-bottom: 98px;
    }

    .envelope:nth-child(2) {
      z-index: 2;
      /* Inside part of the envelope */
      margin-top: 15px;
      margin-bottom: 20px;
    }

    .envelope:nth-child(3) {
      z-index: 3;
      /* Flap part of the envelope */

    }

    .envelope:nth-child(4) {
      z-index: 4;
      /* Flap shadow */

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
      transform: translateX(-20%);
      /* Move the card image to cover half of the envelope */
    }
  </style>



  @endsection