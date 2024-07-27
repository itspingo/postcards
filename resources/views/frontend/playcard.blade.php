<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Card</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <link href="{{url('website/assets/css/css2')}}" rel="stylesheet">
  <link type="text/css" rel="stylesheet" charset="UTF-8" href="{{url('website/assets/css/m=el_main_css')}}">


  <link rel="shortcut icon" href="https://digipostal.ir/resources/images/fav-fa/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="https://digipostal.ir/resources/images/fav-fa/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="https://digipostal.ir/resources/images/fav-fa/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="https://digipostal.ir/resources/images/fav-fa/favicon-16x16.png">
  <link rel="canonical" href="https://digipostal.ir/card/zaer-hajj">
  <script src="{{url('website/assets/js/macy@2.js')}}"></script>
  <script src="{{url('website/assets/js/cropper.min.js')}}"></script>
  <link rel="stylesheet" href="{{url('website/assets/css/cropper.min.css')}}">

  <style id="wudoohCustomFontsStyle"></style>
  <meta id="wudoohMetaElement" wudooh="true">
  <link type="text/css" rel="stylesheet" charset="UTF-8" href="{{url('website/assets/css/m=el_main_css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('website/assets/css/leaflet.css')}}" media="all">


  <style>
    .App {
      background-image: url({{$card_info->background_image ?? ''}});
      background-color: rgb(163, 108, 66);
      background-size: cover;
    }

    .flip-card {
      background-color: transparent;
      width: 500px;
      height: 300px;
      perspective: 1000px;
      transition: all 1s;
      position: relative;
      top: 35%;
      left: 30%;
    }

    .flip-card-inner {
      position: relative;
      width: 100%;
      height: 100%;
      text-align: center;
      transition: transform 2s;
      transform-style: preserve-3d;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    .flip-card-back,
    .flip-card-front {
      position: absolute;
      width: 100%;
      height: 100%;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
    }

    .flip-card-back {
      background-image: url({{$card_info->envelop_inside_image ?? 'website/assets/images/1001.webp'}});
    }

    .imageBack1 {
      width: 500px;
      height: 300px;
    }

    .imageBack2 {
      width: 180px;
      height: 80px;
      position: absolute;
      right: 40px;
      top: 10px;
      z-index: 10;
    }

    .stamp_image {
      width: 50px;
      height: 80px;
      position: absolute;
      right: 20px;
      top: 10px;
    }

    .imageFront1 {
      background-image: url({{$card_info->envelop_inside_image ?? 'website/assets/images/1001.webp'}});
      background-color: #061999;
      width: 500px;
      height: 300px;
      position: relative;
      background-position: 0 -350px;
      background-size: cover;
      top: 5px;
      object-fit: cover;
    }

    .frontImageContainer {
      width: 500px;
      height: 250px;
      position: absolute;
      top: 5px;
      right: 0;
      transform-origin: top;
      transition: all 0.5s ease-in-out;
      z-index: 3;
    }

    .openLetter {
      transform: perspective(1200px) translateZ(0px) translateX(0px) translateY(0px) rotateX(-180deg);
    }

    .imageFront3 {
      width: 100px;
      height: 100px;
      position: absolute;
      top: 75%;
      right: 40%;
      transform: all 2s;
      z-index: 1;
      cursor: pointer;
    }

    .backgroundImage {
      width: 600px;
      height: 600px;
      position: absolute;
      bottom: 5px;
      right: -50px;
      z-index: 1;
    }

    .imageFront {
      width: 500px;
      height: 250px;
      transition: transform 2s;
      position: relative;
      z-index: 1;
    }

    .flip-card-front {
      color: white;
      transform: rotateY(180deg);
    }

    .imgclass {
      position: absolute;
      object-fit: cover;
      height: 200px;
      width: 100%;
      object-position: 0px -64px;
      rotate: 180deg;
      z-index: 0;
    }

    .duplicateImage {
      width: 500px;
      height: 300px;
      position: relative;
      background-position: 0 -350px;
      background-size: cover;
      top: -299px;
      object-fit: cover;
      z-index: 2;
    }

    .innerPicture {
      position: absolute;
      width: 50%;
      right: 26%;
      transition: all 1s;
      rotate: 90deg;
    }

    .innerPicture1 {
      transform: translateX(-300px);
      z-index: 4;
      transition: all 1s;
    }

    .innerPicture2 {
      transform: translateY(-240px);
      width: 90%;
      right: -34%;
      rotate: -40deg;
    }

    #balloon-container {
      height: 120vh;
      display: flex;
      overflow: hidden;
      transition: opacity 500ms;
      flex-wrap: wrap;
      width: 100%;
    }
  </style>
</head>

<body>
  <div class="App" id="balloon-container">
    <div class="flip-card" id="flipCard">
      <div class="flip-card-inner" id="flip-card-inner">
        <div class="flip-card-back">
          <!-- letter back side container shows first time when open -->
          <div style="position: relative;">
            <!-- main image of letter backside -->
            <img src="@if(isset($card_info->front_image)) {{url($card_info->front_image)}} @else {{url('website/assets/images/2001_front.webp')}} @endif" alt="Avatar" class="imageBack1" />
            <!-- image of company signature that shows upside on first image in bottom right corner -->

            <img src="@if(isset($card_info->stamp_design)) {{url($card_info->stamp_design)}} @else {{url('website/assets/images/2001_front.webp')}} @endif" alt="Avatar" class="imageBack2" />
            <img id="img_stamp_image" class="jetp-stamp stamp_image" src="@if(isset($card_info->stamp_image)) {{url($card_info->stamp_image)}} @else {{url('website/assets/images/5396.webp')}} @endif">

            <div class="recepient-name-container">
              <span id="span_recepient_name" wudooh="true" class="sender-name">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">
                    <span>{{$card_info->recepient_name ?? 'Recepient Name'}}</span>
                  </font>
                </font>
              </span>
            </div>

          </div>
        </div>
        <!-- front container of letter -->
        <div class="flip-card-front" style="position: relative;height:auto;">
          <!-- image of person that shows after open the letter -->
          <img src="{{url('storage/'.str_replace('public/','',$card_info->card_image))}}" alt="Avatar" class="innerPicture" id="innerPicture" style="display: none;" />

          <!-- Start -->
          <!-- these two images are the same and also in the same position, that bottom part of the front side
                  first image is always shown and second is hide after letter open and innerPicture goes upside,
                  the purpose of using the method is innerPicture index high that it shows immediately onclick
                  that why using second image to hide immediate effect  -->
          <img src="@if(isset($card_info->back_image)) {{url($card_info->back_image)}} @else {{url('website/assets/images/2001_back.webp')}} @endif" alt="Avatar" class="imageFront1" />

          <img src="@if(isset($card_info->back_image)) {{url($card_info->back_image)}} @else {{url('website/assets/images/2001_back.webp')}} @endif" alt="Avatar" class="duplicateImage" id="duplicateImage" />
          <!-- End -->

          <!-- second container of images front side upper part that open -->
          <div class="frontImageContainer" id="frontImageContainer">

            <!-- backside image of letter upper part that show when that part open -->
            <img src="@if(isset($card_info->envelop_inside_image)) {{url($card_info->envelop_inside_image)}} @else {{url('website/assets/images/1001.webp')}} @endif" alt="Inner image" class="imgclass" id="imageContainer1" />



            <!-- front side of letter upper part image -->
            <img src="@if(isset($card_info->flap_image)) {{url($card_info->flap_image)}} @else {{url('website/assets/images/2001_flap.webp')}} @endif" alt="Avatar" class="imageFront" id="imageFront" />

            <!-- middle part of front side where click function work -->


            <img src="@if(isset($card_info->seal_design)) {{url($card_info->seal_design)}} @else {{url('website/assets/images/7222.front.webp')}} @endif" alt="Seal" class="imageFront3" id="imageFront3" />

            <div class="sender-name-container">
              <span id="span_sender_name" wudooh="true" class="sender-name">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">
                    <span>{{$card_info->sender_name ?? 'sender name'}}</span>
                  </font>
                </font>
              </span>
            </div>


          </div>


          <!-- <div class="jetp-back-text" style="color: rgb(0, 0, 0); font-size: 18.81px; font-family: font_14;">
                
            </div> -->

        </div>
      </div>
    </div>
    <!-- Control Strip -->
    <div class="control-strip">
      <button id="playButton" class="music_btn"><i class="fas fa-play" style="margin-right: 8px; cursor: pointer;"></i></button>
      <button id="stopButton" class="music_btn" style="display:none;"><i class="fas fa-stop" style="margin-right: 8px; cursor: pointer;"></i></button>
      <button id="popupButton" class="details_btn">Event Information</button>
      <!-- <button id="fullScreenButton"><i class="fa-solid fa-expand"></i></button> -->
    </div>



  </div>

  <!-- Popup Modal -->
  <!-- <div id="popupModal" class="popup-modal">
    <div class="popup-content">
      <span class="close">&times;</span>
      <h2>Options</h2>
      <label for="option1">Option 1:</label>
      <input type="text" id="option1" name="option1"><br><br>
      <label for="option2">Option 2:</label>
      <input type="text" id="option2" name="option2"><br><br>

      <div class="item"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="100" height="10" viewBox="0 0 100 10" class="divider p-10 primary-hover" style="width:100%;height:auto;">
          <path d="M96.46 3.7c-.61 0-1.1.43-1.24 1H52.08a2.05 2.05 0 0 0-2.03-1.76c-1.03 0-1.88.77-2.03 1.76H4.78c-.14-.57-.63-1-1.24-1-.71 0-1.3.58-1.3 1.3 0 .71.58 1.3 1.3 1.3.61 0 1.1-.43 1.24-1h43.24c.14.99.99 1.76 2.03 1.76 1.03 0 1.88-.77 2.03-1.76h43.14c.14.57.63 1 1.24 1 .71 0 1.3-.58 1.3-1.3-.01-.71-.59-1.3-1.3-1.3zM3.54 5.71c-.39 0-.71-.32-.71-.71 0-.39.32-.71.71-.71.39 0 .71.32.71.71 0 .39-.31.71-.71.71zm46.51.76c-.81 0-1.47-.66-1.47-1.47 0-.81.66-1.47 1.47-1.47.81 0 1.47.66 1.47 1.47 0 .81-.66 1.47-1.47 1.47zm46.41-.76a.7.7 0 0 1-.69-.6c.02-.04.04-.07.04-.11 0-.04-.03-.07-.04-.11a.7.7 0 0 1 .69-.6c.39 0 .71.32.71.71 0 .39-.32.71-.71.71z">
          </path>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon primary-color-bg" style="display: none;">
          <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
        </svg>
      </div>

      <button id="saveOptions">Save</button>
    </div>
  </div> -->


<!-- ---------------------------------------------  start: event info popup--------------------------------- -->
  <div id="div_event_info"
        style="background: rgba(0, 0, 0, 0.6); inset: 0px; cursor: pointer; transition: all 500ms ease 0s; position: fixed; padding: 10px; z-index: 10000; display: flex; justify-content: center; align-items: center; direction: rtl; visibility: visible; opacity: 1;">
        
        
        
        <div class="digipostal-lqec0t"
            style="overflow: hidden; cursor: default; transition: all 500ms ease-in-out 0s; border-radius: 10px; width: 450px; max-width: 100%; max-height: 100%; flex-direction: column; display: flex; transform-origin: 0px 100%; visibility: visible; opacity: 1; transform: scale(1);">
            <div style="display: flex; align-items: center;">
                <div  class="digipostal-eiaxmh" onclick="hide_div('div_event_info')"
                    style="cursor: pointer; width: 60px; height: 60px; min-height: 60px; display: flex; justify-content: center; align-items: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon ">
                        <path
                            d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                        </path> 
                    </svg>
                </div>
                <div class="digipostal-eiaxmh"
                    style="font-size: 17px; flex: 1 1 0%; margin: 0px 15px; text-align: left;"><span wudooh="true"
                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Event information</font>
                        </font>
                    </span></div>
            </div>

 

            <div style="display: none;"></div>
            <div class="wscrollbar" style="flex: 1 1 0%; overflow-y: auto; padding: 0px 20px 20px;">

            <div style="width:95%">
                <form id="widget_form" method="post" action="{{url('play/save_answers')}}" >
                    @csrf

                    <input type="hidden" name="hcard_id" value="{{$card_info->id}}">

 
            @foreach($sortedCollection as $wdgtRec)
            
            @if ($wdgtRec instanceof \App\Models\widget_user_text_model)
              <!-- user text -->
                <section class="digipostal-p2bmbg"
                    style="visibility: visible; display: block; opacity: 1; transform: translateY(0px); transition: all 0.5s ease 0s;">
                    <div class="digipostal-eiaxmh digipostal-oi9shj" style="text-align: {{$wdgtRec->user_text_alignment ?? center}};"><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{$wdgtRec->user_text}}</font>
                            </font>
                        </span></div>
                </section>
            @elseif($wdgtRec instanceof \App\Models\widget_image_model)

              <!-- user image -->
                <section class="digipostal-p2bmbg"
                    style="visibility: visible; display: block; opacity: 1; transform: translateY(0px); transition: all 0.5s ease 0s;">
                    <img class="digipostal-hj4hx" width="600" height="360"
                        src="{{url('storage/'.str_replace('public/','',$wdgtRec->image_url))}}"
                        style="max-width: 600px; max-height: 360px;">
                </section>


                @elseif($wdgtRec instanceof \App\Models\widget_separator_model)
                <!-- separator -->
                 
                <section class="digipostal-p2bmbg"
                    style="visibility: visible; display: block; opacity: 1; transform: translateY(0px); transition: all 0.5s ease 0s;">
                    {!!$wdgtRec->separator!!}
                </section>


                @elseif($wdgtRec instanceof \App\Models\widget_countdown_model)
                <!-- count down timer -->
                <section class="jetp-ngl4yv">
                    <div class="jetp-feffm jetp-qpo9lj jetp-zs0p7">
                        <span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{$wdgtRec->countdown_title}}</font>
                            </font>
                        </span>
                    </div>
                    <div class="countdown-container" id="countdown">
                        <div class="countdown-item">
                            <div id="days">0</div>
                            <div><span wudooh="true">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Day</font>
                                </font>
                            </span></div>
                        </div>
                        <div class="countdown-item">
                            <div id="hours">0</div>
                            <div><span wudooh="true">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Hours</font>
                                </font>
                            </span></div>
                        </div>
                        <div class="countdown-item">
                            <div id="minutes">0</div>
                            <div><span wudooh="true">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Minutes</font>
                                </font>
                            </span></div>
                        </div>
                        <div class="countdown-item">
                            <div id="seconds">0</div>
                            <div><span wudooh="true">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Second</font>
                                </font>
                            </span></div>
                        </div>
                    </div>
                </section>


            <script>
                // Set the date and time we're counting down to
                const countDownDate = new Date("{{$wdgtRec->js_date_format}}").getTime();

                // Update the countdown every 1 second
                const countdownFunction = setInterval(() => {
                    // Get today's date and time
                    const now = new Date().getTime();

                    // Find the distance between now and the countdown date
                    const distance = countDownDate - now;

                    // Time calculations for days, hours, minutes, and seconds
                    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    // Display the result in the elements with id="days", "hours", "minutes", "seconds"
                    document.getElementById("days").innerText = days;
                    document.getElementById("hours").innerText = hours;
                    document.getElementById("minutes").innerText = minutes;
                    document.getElementById("seconds").innerText = seconds;

                    // If the countdown is finished, write some text
                    if (distance < 0) {
                        clearInterval(countdownFunction);
                        document.getElementById("countdown").innerHTML = "EXPIRED";
                    }
                }, 1000);
            </script>
               
                
                <!-- address / routing -->
                <!-- <section class="digipostal-p2bmbg"
                    style="visibility: visible; display: block; opacity: 1; transform: translateY(0px); transition: all 0.5s ease 0s;">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        fill="currentColor" width="100" height="10" viewBox="0 0 100 10"
                        class="divider digipostal-wo3fe" style="width:100%;height:auto;">
                        <path
                            d="M40.98 4.71H5.03c-.14-.57-.62-1-1.23-1-.71 0-1.29.58-1.29 1.29 0 .71.58 1.29 1.29 1.29.61 0 1.1-.43 1.23-1h35.94c.16 0 .29-.13.29-.29s-.12-.29-.28-.29zm-37.18 1c-.39 0-.71-.32-.71-.71 0-.39.32-.71.71-.71.39 0 .71.32.71.71 0 .39-.32.71-.71.71zM56.93 3.16c-1.01 0-1.84.82-1.84 1.84 0 1.01.82 1.84 1.84 1.84 1.01 0 1.84-.82 1.84-1.84 0-1.01-.83-1.84-1.84-1.84zm0 3.1a1.261 1.261 0 0 1 0-2.52c.69 0 1.26.56 1.26 1.26 0 .69-.57 1.26-1.26 1.26zM43.46 3.16c-1.01 0-1.84.82-1.84 1.84 0 1.01.82 1.84 1.84 1.84 1.01 0 1.84-.82 1.84-1.84 0-1.01-.82-1.84-1.84-1.84zm0 3.1a1.261 1.261 0 0 1 0-2.52 1.261 1.261 0 0 1 0 2.52zM50.2 2c-1.66 0-3 1.35-3 3 0 1.66 1.35 3 3 3 1.66 0 3-1.35 3-3 0-1.66-1.35-3-3-3zm0 5.42c-1.34 0-2.42-1.09-2.42-2.42 0-1.34 1.09-2.42 2.42-2.42 1.34 0 2.42 1.09 2.42 2.42 0 1.34-1.09 2.42-2.42 2.42zM96.2 3.71c-.61 0-1.1.43-1.23 1H59.62a.29.29 0 0 0 0 .58h35.35c.14.57.62 1 1.23 1 .71 0 1.29-.58 1.29-1.29 0-.71-.58-1.29-1.29-1.29zm0 2c-.39 0-.71-.32-.71-.71 0-.39.32-.71.71-.71.39 0 .71.32.71.71 0 .39-.32.71-.71.71z">
                        </path>
                    </svg>
                </section> -->


                @elseif($wdgtRec instanceof \App\Models\widget_text_question_model)
                <!-- input name field -->
                
                <section class="jetp-ngl4yv"> 
                    <div class="jetp-feffm jetp-lxpam jetp-zs0p7"><svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                            width="24" height="24" viewBox="0 0 24 24" class="icon"
                            style="width: 14px; height: 14px; vertical-align: middle; margin: 0px 3px;">
                            <path
                                d="M21 13H14.4L19.1 17.7L17.7 19.1L13 14.4V21H11V14.3L6.3 19L4.9 17.6L9.4 13H3V11H9.6L4.9 6.3L6.3 4.9L11 9.6V3H13V9.4L17.6 4.8L19 6.3L14.3 11H21V13Z">
                            </path>
                        </svg>
                        <span style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{$wdgtRec->text_question_title}}</font>
                            </font>
                        </span></div>

                        @if($wdgtRec->text_question_type == 'name')
                            <input type="text" id="answer_text_question" name="answer_text_question[]" maxlength="60" class="jetp-k9u3p" >
                        @elseif($wdgtRec->text_question_type == 'number')
                            <input type="number"  id="answer_text_question" name="answer_text_question[]"  maxlength="60" class="jetp-k9u3p">
                        @elseif($wdgtRec->text_question_type == 'phone')
                            <input type="tel"  id="answer_text_question" name="answer_text_question[]"  maxlength="60" class="jetp-k9u3p">
                        @elseif($wdgtRec->text_question_type == 'email')
                            <input type="email"  id="answer_text_question" name="answer_text_question[]"  maxlength="60" class="jetp-k9u3p">
                        @elseif($wdgtRec->text_question_type == 'single_line')
                            <input type="text"  id="answer_text_question" name="answer_text_question[]"  maxlength="60" class="jetp-k9u3p">
                        @elseif($wdgtRec->text_question_type == 'multi_line')
                            <textarea  id="answer_text_question" name="answer_text_question[]"  class="jetp-k9u3p"></textarea>               
                        @endif

                    <div class="jetp-feffm jetp-qdqrai"
                        style="margin: -5px 0px 5px; opacity: 0.7; text-align: unset; display: none;">
                    </div>
                    <input type="hidden" name="text_question_id[]" value="{{$wdgtRec->id}}" >
                    <div class="jetp-tsi1" style="display: none;"></div>
                </section>

                @elseif($wdgtRec instanceof \App\Models\widget_attend_quest_model)
               

                <section class="jetp-ngl4yv">
                    <div class="jetp-feffm jetp-lxpam jetp-zs0p7">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            version="1.1"
                            fill="currentColor"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            class="icon">
                            <path d="M21 13H14.4L19.1 17.7L17.7 19.1L13 14.4V21H11V14.3L6.3 19L4.9 17.6L9.4 13H3V11H9.6L4.9 6.3L6.3 4.9L11 9.6V3H13V9.4L17.6 4.8L19 6.3L14.3 11H21V13Z"></path>
                        </svg>
                        <span style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{$wdgtRec->attend_quest_title}}</font>
                            </font>
                        </span>
                    </div>

                    <div class="jetp-k9u3p">
                        <input type="radio" name="answer_attend_quest[]" value="Yes">
                        <span>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{$wdgtRec->attend_quest_yes_title}}</font>
                            </font>
                        </span>
                    </div>
                    <div class="jetp-k9u3p">
                        <input type="radio" name="answer_attend_quest[]" value="No">
                        <span>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{$wdgtRec->attend_quest_no_title}}</font>
                            </font>
                        </span>
                    </div>
                    <input type="hidden" name="attend_quest_id[]" value="{{$wdgtRec->id}}" >

                    <div class="jetp-tsi1"></div>
                </section>


                @elseif($wdgtRec instanceof \App\Models\widget_memorial_model)

                <!-- write memorial -->
                <section class="digipostal-p2bmbg"
                    style="display: block; visibility: visible; opacity: 1; transform: translateY(0px); transition: all 0.5s ease 0s;">
                    <div class="digipostal-eiaxmh digipostal-q1qsqj digipostal-gsa05"><span><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">{{$wdgtRec->memorial_title}} * </font>
                                </font>
                            </span></span></div>
                    <div class="digipostal-nlrnuu" style="flex-direction: column; padding: 0px;">
                        <textarea rows="5" maxlength="300" name="answer_memorial[]" id="answer_memorial"  placeholder="Enter your message"
                            class="digipostal-nlrnuu"
                            style="resize: none; background: none; border: none; margin: 0px;"></textarea>
                    </div>
                    <div class="digipostal-5ir7v" style="display: none;"></div>
                    <input type="hidden" name="memorial_id[]" value="{{$wdgtRec->id}}" >
                </section>

                @elseif($wdgtRec instanceof \App\Models\widget_video_model)
                <div class="widget p-20-10" item="jetp-ck8mj">
                    <div>
                        <section class="jetp-ngl4yv">
                            <iframe src="{{$wdgtRec->video_link}}"
                                frameborder="0" allowfullscreen="true" width="100%" height="100%">
                            </iframe>
                        </section>
                    </div>
                    
                    <div class="overlay" ></div>
                    <script>
                        function openInNewTab(url) {
                            window.open(url, '_blank');
                        }
                    </script>
                </div>

                @elseif($wdgtRec instanceof \App\Models\widget_social_network_model)

                <section class="jetp-ngl4yv">
                    <div class="jetp-feffm jetp-qpo9lj jetp-zs0p7" align="center" style=";font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">{{$wdgtRec->sn_title}}</font>
                        </font>
                    </div>
                    <div
                        style="display: flex; flex-wrap: wrap; justify-content: center; align-items: center;">
                        
                        @if($wdgtRec->sn_instagram != '')
                            <a class="jetp-b6x308" href="{{$wdgtRec->sn_instagram}}"
                            target="_blank"
                            style="background: linear-gradient(45deg, rgb(240, 148, 51) 0px, rgb(230, 104, 60) 25%, rgb(220, 39, 67) 50%, rgb(204, 35, 102) 75%, rgb(188, 24, 136) 100%);"><svg
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                fill="currentColor" width="32" height="32" viewBox="0 0 32 32"
                                class="icon" style="width: 48px; height: 48px;">
                                <path
                                    d="M12.3 7C9.4 7 7 9.4 7 12.3v7.4c0 2.9 2.4 5.3 5.3 5.3h7.4c2.9 0 5.3-2.4 5.3-5.3v-7.4C25 9.4 22.6 7 19.7 7h-7.4zm0 1.6h7.4c2 0 3.7 1.6 3.7 3.7v7.4c0 2-1.6 3.7-3.7 3.7h-7.4c-2 0-3.7-1.6-3.7-3.7v-7.4c0-2 1.7-3.7 3.7-3.7zm8.5 1.8c-.4 0-.7.3-.7.7 0 .4.3.7.7.7s.7-.3.7-.7c.1-.3-.3-.7-.7-.7zm-4.8.7c-2.7 0-4.9 2.2-4.9 4.9s2.2 4.9 4.9 4.9 4.9-2.2 4.9-4.9-2.2-4.9-4.9-4.9zm0 1.6c1.8 0 3.3 1.5 3.3 3.3s-1.5 3.3-3.3 3.3-3.3-1.5-3.3-3.3 1.5-3.3 3.3-3.3z">
                                </path>
                            </svg></a>
                        @endif
                            
                        @if($wdgtRec->sn_telegram != '')
                            <a class="jetp-b6x308" href="{{$wdgtRec->sn_telegram}}"
                            target="_blank"
                            style="background: linear-gradient(315deg, rgb(64, 175, 238), rgba(64, 175, 238, 0.7)); padding: 0px;"><svg
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                fill="currentColor" width="48" height="48" viewBox="0 0 48 48"
                                class="icon" style="width: 48px; height: 48px;">
                                <path
                                    d="M10.7874 23.4709C17.7667 20.3663 22.4206 18.3195 24.7493 17.3305C31.3979 14.507 32.7795 14.0165 33.68 14.0002C33.878 13.9968 34.3208 14.0469 34.6077 14.2845C34.8499 14.4852 34.9165 14.7563 34.9484 14.9465C34.9803 15.1368 35.02 15.5702 34.9884 15.9088C34.6281 19.774 33.0692 29.1539 32.276 33.483C31.9404 35.3148 31.2796 35.929 30.6399 35.9891C29.2496 36.1197 28.1938 35.051 26.8473 34.1497C24.7401 32.7395 23.5498 31.8615 21.5044 30.4854C19.1407 28.895 20.673 28.0209 22.0201 26.5923C22.3726 26.2185 28.4983 20.5295 28.6169 20.0135C28.6317 19.9489 28.6455 19.7083 28.5055 19.5813C28.3655 19.4543 28.1589 19.4977 28.0098 19.5322C27.7985 19.5812 24.4323 21.8529 17.9113 26.3473C16.9558 27.0172 16.0904 27.3435 15.315 27.3264C14.4602 27.3076 12.8159 26.833 11.5935 26.4273C10.0942 25.9296 8.90254 25.6666 9.0063 24.8215C9.06035 24.3813 9.65403 23.9311 10.7874 23.4709Z">
                                </path>
                            </svg></a>
                            @endif
                            
                            @if($wdgtRec->sn_whatsapp != '')
                            <a class="jetp-b6x308"
                            href="whatsapp://send?phone={{$wdgtRec->sn_whatsapp}}" target="_blank"
                            style="background: linear-gradient(315deg, rgb(47, 190, 57), rgba(47, 190, 57, 0.7)); padding: 0px;"><svg
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                fill="currentColor" width="48" height="48" viewBox="0 0 48 48"
                                class="icon" style="width: 48px; height: 48px;">
                                <path
                                    d="M34.7507 13.2115C32.1777 10.5628 28.621 9.125 24.9885 9.125C17.2696 9.125 11.0642 15.4061 11.1399 23.0493C11.1399 25.4709 11.821 27.8169 12.9561 29.9358L10.9885 37.125L18.3291 35.2331C20.3723 36.3682 22.6426 36.898 24.9128 36.898C32.5561 36.898 38.7615 30.6169 38.7615 22.9736C38.7615 19.2655 37.3237 15.7845 34.7507 13.2115ZM24.9885 34.552C22.9453 34.552 20.902 34.0223 19.1615 32.9628L18.7074 32.7358L14.3183 33.8709L15.4534 29.5574L15.1507 29.1034C11.821 23.7304 13.4101 16.6169 18.8588 13.2872C24.3074 9.95743 31.3453 11.5466 34.675 16.9953C38.0047 22.4439 36.4156 29.4818 30.9669 32.8115C29.2264 33.9466 27.1074 34.552 24.9885 34.552ZM31.648 26.152L30.8156 25.7736C30.8156 25.7736 29.6047 25.2439 28.848 24.8655C28.7723 24.8655 28.6966 24.7899 28.621 24.7899C28.3939 24.7899 28.2426 24.8655 28.0912 24.9412C28.0912 24.9412 28.0156 25.0169 26.9561 26.2277C26.8804 26.3791 26.7291 26.4547 26.5777 26.4547H26.502C26.4264 26.4547 26.275 26.3791 26.1993 26.3034L25.821 26.152C24.9885 25.7736 24.2318 25.3196 23.6264 24.7142C23.475 24.5628 23.248 24.4115 23.0966 24.2601C22.5669 23.7304 22.0372 23.125 21.6588 22.4439L21.5831 22.2926C21.5074 22.2169 21.5074 22.1412 21.4318 21.9899C21.4318 21.8385 21.4318 21.6872 21.5074 21.6115C21.5074 21.6115 21.8101 21.2331 22.0372 21.0061C22.1885 20.8547 22.2642 20.6277 22.4156 20.4764C22.5669 20.2493 22.6426 19.9466 22.5669 19.7196C22.4912 19.3412 21.5831 17.298 21.3561 16.8439C21.2047 16.6169 21.0534 16.5412 20.8264 16.4655H20.5993C20.448 16.4655 20.221 16.4655 19.9939 16.4655C19.8426 16.4655 19.6912 16.5412 19.5399 16.5412L19.4642 16.6169C19.3128 16.6926 19.1615 16.8439 19.0101 16.9196C18.8588 17.0709 18.7831 17.2223 18.6318 17.3736C18.102 18.0547 17.7993 18.8872 17.7993 19.7196C17.7993 20.325 17.9507 20.9304 18.1777 21.4601L18.2534 21.6872C18.9345 23.125 19.8426 24.4115 21.0534 25.5466L21.3561 25.8493C21.5831 26.0764 21.8101 26.2277 21.9615 26.4547C23.5507 27.8169 25.3669 28.8007 27.4101 29.3304C27.6372 29.4061 27.9399 29.4061 28.1669 29.4818C28.3939 29.4818 28.6966 29.4818 28.9237 29.4818C29.302 29.4818 29.7561 29.3304 30.0588 29.1791C30.2858 29.0277 30.4372 29.0277 30.5885 28.8764L30.7399 28.725C30.8912 28.5736 31.0426 28.498 31.1939 28.3466C31.3453 28.1953 31.4966 28.0439 31.5723 27.8926C31.7237 27.5899 31.7993 27.2115 31.875 26.8331C31.875 26.6818 31.875 26.4547 31.875 26.3034C31.875 26.3034 31.7993 26.2277 31.648 26.152Z">
                                </path>
                            </svg></a>
                            @endif
                            
                            @if($wdgtRec->sn_twitter != '')
                            <a class="jetp-b6x308" href="{{$wdgtRec->sn_twitter}}"
                            target="_blank"
                            style="background: linear-gradient(315deg, rgb(34, 34, 34), rgba(0, 0, 0, 0.5));"><svg
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                                class="icon" style="width: 48px; height: 48px;">
                                <path
                                    d="M 2.3671875 3 L 9.4628906 13.140625 L 2.7402344 21 L 5.3808594 21 L 10.644531 14.830078 L 14.960938 21 L 21.871094 21 L 14.449219 10.375 L 20.740234 3 L 18.140625 3 L 13.271484 8.6875 L 9.2988281 3 L 2.3671875 3 z M 6.2070312 5 L 8.2558594 5 L 18.033203 19 L 16.001953 19 L 6.2070312 5 z">
                                </path>
                            </svg></a>
                            @endif

                            @if($wdgtRec->sn_facebook != '')
                            <a class="jetp-b6x308" href="{{$wdgtRec->sn_facebook}}"
                            target="_blank"
                            style="background: linear-gradient(315deg, rgb(48, 73, 125), rgba(48, 73, 125, 0.7)); padding: 0px;"><svg
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                fill="currentColor" width="32" height="32" viewBox="0 0 32 32"
                                class="icon" style="width: 48px; height: 48px;">
                                <path
                                    d="M13.69 24.903h3.679v-8.904h2.454l.325-3.068h-2.779l.004-1.536c0-.8.076-1.229 1.224-1.229h1.534V7.097h-2.455c-2.949 0-3.986 1.489-3.986 3.992v1.842h-1.838V16h1.838v8.903z">
                                </path>
                            </svg></a>
                            @endif

                            @if($wdgtRec->sn_pinterest != '')
                            <a class="jetp-b6x308" href="{{$wdgtRec->sn_pinterest}}"
                            target="_blank"
                            style="background: linear-gradient(315deg, rgb(200, 35, 44), rgba(200, 35, 44, 0.7)); padding: 0px;"><svg
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                fill="currentColor" width="32" height="32" viewBox="0 0 32 32"
                                class="icon" style="width: 48px; height: 48px;">
                                <path
                                    d="M24.007 12.481c0 4.658-2.59 8.139-6.407 8.139-1.283 0-2.488-.693-2.901-1.481 0 0-.69 2.736-.835 3.264-.514 1.866-2.027 3.733-2.144 3.886-.082.106-.263.073-.282-.068-.033-.238-.418-2.592.036-4.513l1.527-6.471s-.379-.758-.379-1.879c0-1.76 1.02-3.074 2.29-3.074 1.08 0 1.601.81 1.601 1.782 0 1.086-.691 2.71-1.048 4.214-.298 1.26.632 2.288 1.874 2.288 2.25 0 3.765-2.89 3.765-6.314 0-2.602-1.752-4.551-4.941-4.551-3.601 0-5.846 2.686-5.846 5.687 0 1.035.306 1.765.784 2.329.219.26.25.364.17.662-.058.219-.187.744-.243.953-.079.301-.323.408-.594.297-1.659-.677-2.432-2.495-2.432-4.537 0-3.373 2.845-7.418 8.487-7.418 4.535.003 7.518 3.283 7.518 6.805z">
                                </path>
                            </svg></a>
                            @endif


                    </div>
                </section>
                
                @elseif($wdgtRec instanceof \App\Models\widget_link_model)

                <section class="jetp-ngl4yv jetp-k9u3p">
                    <a class="jetp-ykszmm"  style="padding-top: 20px;padding-bottom: 20px;"
                        href="{{$wdgtRec->link_url}}" rel="nofollow"
                        target="_blank"><span style="flex: 1 1 0%; margin: 0px 5px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{$wdgtRec->link_text}}  </font>
                            </font>
                        </span><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                            width="24" height="24" viewBox="0 0 24 24" class="icon"
                            style="margin: 0px 5px;">
                            <path
                                d="M14,3V5H17.59L7.76,14.83L9.17,16.24L19,6.41V10H21V3M19,19H5V5H12V3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V12H19V19Z">
                            </path>
                        </svg>
                    </a>
                </section>
               
                @elseif($wdgtRec instanceof \App\Models\widget_optional_question_model)

                <section class="jetp-ngl4yv">
                    <div class="jetp-feffm jetp-lxpam jetp-zs0p7">
                        @if($wdgtRec->optnl_quest_mandatory != '')
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon" style="width: 14px; height: 14px; vertical-align: middle; margin: 0px 3px;">
                            <path d="M21 13H14.4L19.1 17.7L17.7 19.1L13 14.4V21H11V14.3L6.3 19L4.9 17.6L9.4 13H3V11H9.6L4.9 6.3L6.3 4.9L11 9.6V3H13V9.4L17.6 4.8L19 6.3L14.3 11H21V13Z">
                            </path>
                        </svg>
                        @endif

                        <span style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{$wdgtRec->optnl_quest_title}}</font>
                            </font>
                        </span></div>

                        @php
                        if($wdgtRec->optnl_quest_options){
                            $aroptnl_quest_options = explode(',',$wdgtRec->optnl_quest_options);
                        }else{
                            $aroptnl_quest_options = [];
                        }

                        @endphp
                        

                        @if($wdgtRec->optnl_quest_type=='checkbox')
                        @foreach($aroptnl_quest_options as $optnl_quest_option)
                        <div class="jetp-k9u3p" style="cursor: pointer;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon jetp-kxy58n active" style="display: none;">
                            <path d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3Z">
                            </path>
                        </svg><input type="checkbox" name="answer_optnl_quest[]" value="{{$optnl_quest_option}}">
                        <span style="flex: 1 1 0%; margin: 0px 5px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{$optnl_quest_option}}</font>
                            </font>
                        </span></div>
                        @endforeach
                        @endif

                        @if($wdgtRec->optnl_quest_type=='radio')
                        @foreach($aroptnl_quest_options as $optnl_quest_option)
                        <div class="jetp-k9u3p" style="cursor: pointer;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon jetp-kxy58n active" style="display: none;">
                                <path d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3Z">
                                </path>
                            </svg><input type="radio" name="answer_optnl_quest[]" value="{{$optnl_quest_option}}">
                            <span style="flex: 1 1 0%; margin: 0px 5px;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">{{$optnl_quest_option}}</font>
                                </font>
                            </span>
                        </div>
                        @endforeach
                        @endif

                        @if($wdgtRec->optnl_quest_type=='dropdown')
                        <div class="jetp-cover-input m-20-10 mt-20">
                            
                            <select id="optnl_quest_type" name="answer_optnl_quest[]">
                                @foreach($aroptnl_quest_options as $optnl_quest_option)
                                <option value="{{$optnl_quest_option}}"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">{{$optnl_quest_option}}</font>
                                    </font>
                                </span></option>
                            @endforeach
                            </select>
                        </div>
                        @endif

                        <input type="hidden" name="optnl_quest_id[]" value="{{$wdgtRec->id}}" >
                        <div class="jetp-tsi1" style="display: none;"></div>
                </section>
                
                @endif

                @endforeach

                </form>
            </div>

            </div>


            <div style="padding: 10px; display: block;">
                <button class="digipostal-nnad5t digipostal-2fshz" onclick="validate_widget_form()"
                    style="transform: scale(1);"><span style="display: block;"><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">submit information</font>
                            </font>
                        </span></span>
                    <div class="wspinner" style="display: none;"></div>
                </button></div>


            <div style="position: absolute; inset: 0px; display: none;"></div>
        </div>
        
    </div>



<!-- ---------------------------------------------  end: event info popup--------------------------------- -->


    
  
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.3/dist/confetti.browser.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      var duration = 15 * 10000;
      var animationEnd = Date.now() + duration;
      var defaults = {
        startVelocity: 30,
        spread: 360,
        ticks: 60,
        zIndex: 0
      };

      function randomInRange(min, max) {
        return Math.random() * (max - min) + min;
      }

      let style = false;
      let time = false;
      let logic = false;

      const changeStyle = async () => {
        style = !style;
        document.getElementById("frontImageContainer").classList.toggle('openLetter', style);
        setTimeout(() => {
          document.getElementById("duplicateImage").style.zIndex = style ? "4" : "2";
          document.getElementById("imageContainer1").style.zIndex = style ? '5' : '0';
          document.getElementById("imageFront3").style.zIndex = style ? "0" : "1";
          nextStyle()
        }, 300);
      };

      const nextStyle = () => {
        document.getElementById('span_sender_name').style.display = 'none';
        document.getElementById("innerPicture").style.display = style ? 'block' : 'none';
        setTimeout(() => {
          time = !time;
          document.getElementById("innerPicture").classList.toggle('innerPicture1', time);
          setTimeout(() => {
            logic = !logic;
            document.getElementById("duplicateImage").style.display = time ? "none" : "block";
            document.getElementById("innerPicture").classList.toggle('innerPicture2', logic);
            document.getElementById("flipCard").style.rotate = time ? "40deg" : "0deg";
            var interval = setInterval(function() {
              var timeLeft = animationEnd - Date.now();

              if (timeLeft <= 0) {
                return clearInterval(interval);
              }

              var particleCount = 50 * (timeLeft / duration);
              // since particles fall down, start a bit higher than random
              confetti({
                ...defaults,
                particleCount,
                origin: {
                  x: randomInRange(0.1, 0.3),
                  y: Math.random() - 0.2
                }
              });
              confetti({
                ...defaults,
                particleCount,
                origin: {
                  x: randomInRange(0.7, 0.9),
                  y: Math.random() - 0.2
                }
              });
            }, 250);
          }, 1000);
        }, 300);
      }

      setTimeout(() => {
        document.getElementById("flip-card-inner").style.transform = 'rotateY(180deg)';
      }, 1000);

      document.getElementById("imageFront3").addEventListener('click', !style && changeStyle);

      // Fullscreen
      // document.getElementById("fullScreenButton").addEventListener('click', () => {
      //   const balloonContainer = document.getElementById("balloon-container");
      //   balloonContainer.classList.toggle('fullscreen');
      // });

      // Popup Modal
      const popupModal = document.getElementById("div_event_info");
      const popupButton = document.getElementById("popupButton");
      const closeButton = document.getElementsByClassName("close")[0];

      popupButton.onclick = () => {
        popupModal.style.display = "flex";
      }

      // closeButton.onclick = () => {
      //   popupModal.style.display = "none";
      // }

      window.onclick = (event) => {
        if (event.target == popupModal) {
          popupModal.style.display = "none";
        }
      }

      // Play/Stop Music
      const playButton = document.getElementById("playButton");
      const stopButton = document.getElementById("stopButton");
      let audio = new Audio('{{url("storage".str_replace("public", "", $card_info->music_file))}}');
      audio.loop = true;

      playButton.onclick = () => {
        audio.play();
        document.getElementById("playButton").style.display = "none";
        document.getElementById("stopButton").style.display = "block";
      }

      stopButton.onclick = () => {
        audio.pause();
        document.getElementById("playButton").style.display = "block";
        document.getElementById("stopButton").style.display = "none";
      }
    });

    function hide_div(divid){
      document.getElementById(divid).style.display = 'none';
    }

    function show_div(divid){
      document.getElementById(divid).style.display = 'flex';
    }

  </script>

<script>
    function validate_widget_form(){
         // Get all input elements by name
        const textAreas = document.getElementsByName("answer_memorial[]");
        const radioYes = document.querySelectorAll('input[name="answer_attend_quest[]"][value="Yes"]');
        const radioNo = document.querySelectorAll('input[name="answer_attend_quest[]"][value="No"]');
        const textQuestions = document.getElementsByName("answer_text_question[]");
        const selectQuestTypes = document.getElementsByName("answer_optnl_quest[]");

        // Function to check if at least one input in a collection is filled
        function isFilled(inputs) {
            return Array.from(inputs).some(input => input.value && input.value.trim() !== "");
        }

        // Function to check if at least one radio is checked
        function isRadioChecked(radioButtons) {
            return Array.from(radioButtons).some(radio => radio.checked);
        }

        // Validate if any set of inputs is filled
        const isTextAreaFilled = isFilled(textAreas);
        const isRadioCheckedYes = isRadioChecked(radioYes);
        const isRadioCheckedNo = isRadioChecked(radioNo);
        const isTextQuestionFilled = isFilled(textQuestions);
        const isSelectQuestTypeSelected = isFilled(selectQuestTypes);

        // Check if any condition is met
        if (isTextAreaFilled || isRadioCheckedYes || isRadioCheckedNo || isTextQuestionFilled || isSelectQuestTypeSelected) {
            document.getElementById("widget_form").submit();
        } else {
            alert("Please fill out at least one input field.");
        }
    }
</script>


<style>
        .widget {
            padding: 20px 10px;
        }
        .jetp-ngl4yv {
            margin-bottom: 10px;
        }
        .jetp-feffm {
            margin: 0;
        }
        .jetp-qpo9lj {
            text-align: center;
        }
        .jetp-zs0p7 {
            font-size: 1.05em;
            line-height: 1.1em;
            font-family: "Sahl Naskh";
        }
        .countdown-container {
            line-height: 1;
            display: flex;
            font-size: 40px;
            direction: ltr;
            justify-content: center;
        }
        .countdown-item {
            width: 25%;
            text-align: center;
        }
        .countdown-item span {
            font-size: 15px;
            line-height: 1.1em;
            font-family: "Sahl Naskh";
        }
        .add-to-calendar {
            margin: 20px 0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            text-decoration: underline;
        }
        .add-to-calendar svg {
            margin: 0 5px;
        }
        .overlay {
            display: none;
        }
    </style>

<style>
/* Base styles for the section */
section.jetp-ngl4yv {
    visibility: visible;
    display: block;
    opacity: 1;
    transform: translateY(0px);
    transition: all 0.5s ease 0s;
}

/* Styles for the first div with icon */
.jetp-feffm.jetp-lxpam.jetp-zs0p7 {
    display: flex;
    align-items: center;
}

/* Common styles for SVG icons */
.jetp-feffm .icon {
    width: 14px;
    height: 14px;
    vertical-align: middle;
    margin: 0px 3px;
    fill: currentColor;
}

/* Styles for radio buttons container */
.jetp-k9u3p {
    cursor: pointer;
    display: flex;
    align-items: center;
    margin: 5px 0;
}

/* Styles for the span within radio buttons container */
.jetp-k9u3p span {
    flex: 1 1 0%;
    margin: 0px 5px;
}

/* Styles for hidden div (used for spacing or future content) */
.jetp-tsi1 {
    display: none;
}

.jetp-k9u3p {
    margin: 10px 5px;
    border: 2px solid #ddd;
    width: 100%;
    padding: 10px 15px; /* Adjust padding to control spacing from border */
    box-sizing: border-box; /* Ensures padding and border are included in the element's total width and height */
}

/* Optional: Style for the span to ensure consistent font sizing */
.jetp-k9u3p span {
    font-size: 1.05em;
    line-height: 1.1em;
    font-family: "Sahl Naskh";
    display: inline-flex;
    align-items: center; /* Center align content vertically */
}

    </style>
  <style>
    .control-strip {
      position: fixed;
      bottom: 0;
      width: 100%;
      display: flex;
      justify-content: space-around;
      background-color: white;
      color: white;
      padding: 10px;
      z-index: 1000;
    }

    .popup-modal {
      display: none;
      position: fixed;
      z-index: 1000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgb(0, 0, 0);
      background-color: rgba(0, 0, 0, 0.4);
    }

    .popup-content {
      background-color: #fefefe;
      margin: 15% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
    }

    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }

    .fullscreen {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 1000;
    }




    .sender-name-container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 50%;
      z-index: 10;
    }

    #span_sender_name {
      font-size: 1.05em;
      line-height: 1.1em;
      font-family: "Sahl Naskh";

      text-align: center;
      z-index: 10;
    }


    .recepient-name-container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 50%;
      z-index: 10;
    }

    #span_recepient_name {
      font-size: 1.05em;
      line-height: 1.1em;
      font-family: "Sahl Naskh";

      text-align: center;
      z-index: 10;
    }


    .music_btn {
      width: 40px;
      height: 40px;
      border-radius: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: all 0.3s;
    }

    .details_btn {
      width: 200px;
      height: 40px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: all 0.3s;
    }
  </style>

<style type="text/css" id="widgetDialogStyleId">
        @-webkit-keyframes shakeX {

            0%,
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0)
            }

            30%,
            50%,
            70% {
                -webkit-transform: translate3d(-5px, 0, 0);
                transform: translate3d(-5px, 0, 0)
            }

            20%,
            40%,
            60%,
            80% {
                -webkit-transform: translate3d(5px, 0, 0);
                transform: translate3d(5px, 0, 0)
            }
        }

        @keyframes shakeX {

            0%,
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0)
            }

            30%,
            50%,
            70% {
                -webkit-transform: translate3d(-5px, 0, 0);
                transform: translate3d(-5px, 0, 0)
            }

            20%,
            40%,
            60%,
            80% {
                -webkit-transform: translate3d(5px, 0, 0);
                transform: translate3d(5px, 0, 0)
            }
        }

        .digipostal-llva4 .check-group {
            animation: .32s ease-in-out 1.03s check-group;
            transform-origin: center
        }

        .digipostal-llva4 .check {
            animation: .34s cubic-bezier(0.65, 0, 1, 1) .8s forwards check;
            stroke-dasharray: 0, 75px;
            stroke-linecap: round;
            stroke-linejoin: round
        }

        .digipostal-llva4 .outline {
            animation: .38s ease-in outline;
            transform: rotate(0deg);
            transform-origin: center
        }

        .digipostal-llva4 .white-circle {
            animation: .35s ease-in .35s forwards circle;
            transform: none;
            transform-origin: center
        }

        @keyframes outline {
            from {
                stroke-dasharray: 0, 345.576px
            }

            to {
                stroke-dasharray: 345.576px, 345.576px
            }
        }

        @keyframes circle {
            from {
                transform: scale(1)
            }

            to {
                transform: scale(0)
            }
        }

        @keyframes check {
            from {
                stroke-dasharray: 0, 75px
            }

            to {
                stroke-dasharray: 75px, 75px
            }
        }

        @keyframes check-group {
            from {
                transform: scale(1)
            }

            50% {
                transform: scale(1.09)
            }

            to {
                transform: scale(1)
            }
        }
    </style>
    <style type="text/css" id="widgetStyleId">
        .digipostal-lqec0t {
            background: #FFFFFF;
        }

        .digipostal-p2bmbg {
            margin-top: 25px;
            margin-bottom: 25px;
        }

        .digipostal-eiaxmh {
            color: #000;
            text-align: center;
        }

        .digipostal-9vya5p {
            font-size: 13px;
        }

        .digipostal-n8iz5r {
            font-size: 15px;
        }

        .digipostal-q1qsqj {
            font-size: 17px;
        }

        .digipostal-yymy5 {
            font-size: 19px;
        }

        .digipostal-19lly {
            font-size: 21px;
        }

        .digipostal-oi9shj {
            font-size: 23px;
        }

        .digipostal-db4zxq {
            font-size: 25px;
        }

        .digipostal-nnad5t {
            transition: all 0.3s;
            line-height: 1.5;
            font-size: 17px;
            width: 100%;
            background: #2196f3;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px 10px;
            min-height: 50px;
            cursor: pointer;
            opacity: 0.9;
            margin-bottom: 10px;
            font-family: font_50;
        }

        .digipostal-nnad5t:hover {
            opacity: 1;
            color: #fff;
        }

        .digipostal-q31d6q {
            background: #E6E4E0;
            width: 100%;
            height: auto;
            display: block;
            margin-bottom: 10px;
        }

        .digipostal-tvk3z {
            border-radius: 100%;
            width: 60px;
            height: 60px;
            border: solid 1px #ddd;
            margin: 0 5px;
            transition: all 0.3s;
            background: #fff;
        }

        .digipostal-tvk3z:hover {
            background: #eee;
            transform: scale(1.1);
        }

        .digipostal-hj4hx {
            width: 100%;
            height: auto;
            background: #f1f1f1;
            margin: auto;
            display: block;
        }

        .digipostal-uxdxe {
            display: flex;
            width: 55px;
            height: 55px;
            color: #fff;
            border-radius: 50%;
            align-items: center;
            justify-content: center;
            margin: 5px;
            opacity: 0.9;
        }

        .digipostal-uxdxe:hover {
            opacity: 1;
            color: #fff;
        }

        .digipostal-wo3fe {
            color: #444444;
        }

        .digipostal-gsa05 {
            margin-bottom: 10px;
        }

        .digipostal-nlrnuu {
            background: transparent;
            line-height: 1.5;
            font-size: 15px;
            width: 100%;
            border: solid 2px;
            color: #000;
            border-color: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px 10px;
            min-height: 50px;
            opacity: 0.9;
            margin-bottom: 10px;
            transition: all 0.5s;
            font-family: font_50;
        }

        .digipostal-nlrnuu:hover {
            opacity: 1;
        }

        .digipostal-nlrnuu.active {
            border-color: #2196F3;
        }

        .digipostal-4vod7 {
            color: #ddd;
        }

        .digipostal-4vod7.active {
            color: #2196F3;
        }

        .digipostal-2fshz {
            color: #fff;
            border: none;
            min-width: 150px;
            margin: 0 auto;
            border-radius: 25px;
            background: #4CAF50;
            width: 40%;
        }

        .digipostal-5ir7v {
            color: #E91E63;
            font-size: 13px;
            line-height: 1;
            font-weight: bold;
        }

        .digipostal-5ir7v.active {
            animation: shakeX 1.2s;
        }

        .digipostal-xb7ud5 {
            color: #000000;
        }

        .digipostal-3fit8b {
            opacity: 0.8;
            cursor: pointer;
            width: 35px;
            height: 35px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 100%;
            transition: all 0.3s;
        }

        .digipostal-3fit8b:hover {
            background: rgba(0, 0, 0, 0.15);
        }

        .wscrollbar::-webkit-scrollbar {
            width: 10px;
            height: 10px;
        }

        .wscrollbar::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.05);
        }

        .wscrollbar::-webkit-scrollbar-thumb {
            background: rgba(0, 0, 0, 0.15);
        }

        .wscrollbar:hover::-webkit-scrollbar-thumb {
            background: rgba(0, 0, 0, 0.2);
        }

        .wscrollbar::-webkit-scrollbar-thumb:hover {
            background: rgba(0, 0, 0, 0.4);
        }

        .wspinner {
            display: inline-block;
            width: 28px;
            height: 28px;
            border: solid 5px;
            border-radius: 100%;
            animation: wspinner 1s infinite linear;
            border-color: rgba(0, 0, 0, .1);
            border-top-color: #fff;
            -webkit-animation: wspinner 1s infinite linear;
        }

        @keyframes wspinner {
            0% {
                transform: rotate(0);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @-webkit-keyframes wspinner {
            0% {
                -webkit-transform: rotate(0);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }
    </style>

<style type="text/css">
            .digipostal-qtmyw {
                width: 100%;
                overflow: hidden;
                max-height: 80vh;
            }

            .digipostal-qbmkqb {
                font-family: font_50;
                transition: all 0.3s;
                min-width: 80px;
                background: #4CAF50;
                color: #fff;
                border: none;
                height: 40px;
                border-radius: 5px;
                cursor: pointer;
                font-size: 14px;
            }

            .digipostal-qbmkqb.cancel {
                background: #bbb;
                margin: 0 10px;
            }

            .digipostal-qbmkqb:hover {
                background: #43A047;
            }

            .digipostal-qbmkqb.cancel:hover {
                background: #aaa;
            }

            .digipostal-1vqjy .helper {
                transition: all 0.3s;
                border-radius: 10px;
                display: flex;
                border: dashed 1px #999;
                margin: 0 20px 20px;
                height: 100px;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                font-size: 15px;
                cursor: pointer;
            }

            .digipostal-1vqjy .helper .icon {
                width: 32px;
                height: 32px;
            }

            .digipostal-1vqjy .helper:hover {
                background: #f5f5f5;
            }
        </style>

<style type="text/css">
            .digipostal-39ps2s {
                width: 100%;
                margin: 0 10px;
                display: flex;
                background: #f1f1f1;
                height: 40px;
                border-radius: 20px;
            }

            .digipostal-39ps2s .close {
                width: 40px;
                height: 40px;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 20px;
                transition: all 0.3s;
                cursor: pointer;
            }

            .digipostal-39ps2s .close:hover {
                background: #ddd;
            }

            .digipostal-39ps2s .search {
                color: #999;
                margin: 8px;
            }

            .digipostal-39ps2s input {
                font-family: font_50;
                flex: 1;
                background: none;
                border: none;
            }

            .digipostal-ltjcaq {
                margin: 8px;
                display: inline-block;
                width: 24px;
                height: 24px;
                border: solid 3px;
                border-radius: 100%;
                animation: digipostal-ltjcaq 1s infinite linear;
                border-color: rgba(0, 0, 0, .1);
                border-top-color: #9E9E9E;
                -webkit-animation: digipostal-ltjcaq 1s infinite linear;
            }

            @keyframes digipostal-ltjcaq {
                0% {
                    transform: rotate(0);
                }

                100% {
                    transform: rotate(360deg);
                }
            }

            @-webkit-keyframes digipostal-ltjcaq {
                0% {
                    -webkit-transform: rotate(0);
                }

                100% {
                    -webkit-transform: rotate(360deg);
                }
            }

            .digipostal-jrxcda {
                cursor: pointer;
                display: flex;
                align-items: center;
                padding: 5px;
                position: relative;
                width: 50%;
            }

            .digipostal-jrxcda .cover {
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
                left: 0;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .digipostal-jrxcda .loading {
                width: 40px;
                height: 40px;
                background: rgba(255, 255, 255, 0.5);
                border-radius: 100%;
            }

            .digipostal-jrxcda .loading .digipostal-ltjcaq {
                border-top-color: #000;
            }

            .digipostal-jrxcda .play {
                width: 40px;
                height: 40px;
                background: rgba(255, 255, 255, 0.5);
                border-radius: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: all 0.3s;
            }

            .digipostal-jrxcda .play:hover {
                background: #fff
            }

            .digipostal-jrxcda img {
                width: 100%;
                height: auto;
            }

            .digipostal-9y7csm {
                display: flex;
                width: 100%;
                margin: 0 5px 10px;
                justify-content: center;
            }

            .digipostal-9y7csm button {
                color: #555;
                font-family: font_50;
                margin: 10px 2px 0;
                background: #f1f1f1;
                border: none;
                min-width: 60px;
                padding: 0 5px;
                height: 35px;
                border-radius: 20px;
                cursor: pointer;
                transition: all 0.3s;
            }

            .digipostal-9y7csm button:hover,
            .digipostal-9y7csm button.active {
                color: #000;
                background: #ccc
            }
        </style>
</body>


</html>