<div id="div_card_music" class="jetp-envelope-editor" style="display:none;" style="background-color: rgb(163, 108, 66); background-image: url(&quot;/data/assets/background/61624_tn.webp&quot;);">
    <div class="envelope-background-gradiant"></div>
    <header class="jetp-header"><button class="fl filled save animate__pulse"><span class="ml-5"><span wudooh="true" onclick="saveCard({{session()->get('sess_card_id')}})" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Store</font>
                    </font>
                </span></span>

            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon mr-5">
                <path d="M17 3H5C3.89 3 3 3.9 3 5V19C3 20.1 3.89 21 5 21H19C20.1 21 21 20.1 21 19V7L17 3M19 19H5V5H16.17L19 7.83V19M12 12C10.34 12 9 13.34 9 15S10.34 18 12 18 15 16.66 15 15 13.66 12 12 12M6 6H15V10H6V6Z">
                </path>
            </svg></button>

        <button class="fl icon" style="color: rgb(205, 127, 50); display: block;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                <path d="M2,2V5.5C3.1,5.5 4,6.62 4,8C4,9.38 3.1,10.5 2,10.5V13.5C3.1,13.5 4,14.62 4,16C4,17.38 3.1,18.5 2,18.5V22H5.5C5.5,20.9 6.62,20 8,20C9.38,20 10.5,20.9 10.5,22H13.5C13.5,20.9 14.62,20 16,20C17.38,20 18.5,20.9 18.5,22H22V18.5C20.9,18.5 20,17.38 20,16V16C20,14.62 20.9,13.5 22,13.5V10.5C20.9,10.5 20,9.38 20,8V8C20,6.62 20.9,5.5 22,5.5V2H18.5C18.5,3.1 17.38,4 16,4C14.62,4 13.5,3.1 13.5,2H10.5C10.5,3.1 9.38,4 8,4C6.62,4 5.5,3.1 5.5,2H2M6,6H18V18H6V6M9,7A2,2 0 0,0 7,9A2,2 0 0,0 9,11A2,2 0 0,0 11,9A2,2 0 0,0 9,7M17,10L14,13L12,12L7,17H17V10Z">
                </path>
            </svg>

            <div class="badge animate__pulsered"></div>
        </button>

        <button class="fr icon" onclick="showhide('div_envelop_front',['div_card_music'])""><svg xmlns=" http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
            <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z">
            </path>
            </svg>

        </button>

    </header>
    <div class="jetp-content jetp-envelope-template">
        <div class="jetp-envelope-full" style="opacity: 1;">
            <div class="flap-wrapper">
                <img id="img_flap_image3" class="flap" 
                src="@if(isset($card_info->flap_image)) {{url($card_info->flap_image)}} @else {{url('website/assets/images/2001_flap.webp')}} @endif"
                >

                <img id="img_envelop_inside3" class="lining" 
                src="@if(isset($card_info->envelop_inside_image)) {{url($card_info->envelop_inside_image)}} @else {{url('website/assets/images/1001.webp')}} @endif"
                >

                <img class="flap-shadow" src="{{url('website/assets/images/flap-shadow.png')}}">
            </div>
            <div class="content-wrapper">
                <img id="img_front_image3" class="front" 
                src="@if(isset($card_info->front_image)) {{url($card_info->front_image)}} @else {{url('website/assets/images/2001_front.webp')}} @endif"
                >
                <img id="img_back_image3" class="back" 
                src="@if(isset($card_info->back_image)) {{url($card_info->back_image)}} @else {{url('website/assets/images/2001_back.webp')}} @endif"
                >
            </div>
            <div class="lining-handle">

            </div>
        </div>
        <div class="info">
            <div>
                <div class="btn" style="float: left; margin-right: 6px; display: flex;">
                    <span id="span_current_play_icon"><i class="fas fa-play" style="margin-right: 8px; cursor: pointer;" onClick="playCurrentMusic()"></i> </span>
                    <span id="span_current_stop_icon" style="display:none;"><i class="fas fa-stop" style="margin-right: 8px; cursor: pointer;" onClick="stopCurrentMusic()"></i> </span>
                </div>
                <div class="btn" style="float: left; margin-right: 6px; display: none;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                        <path d="M14,19H18V5H14M6,19H10V5H6V19Z"></path>
                    </svg></div>
                <div class="sound" style="float: left; margin-right: 6px; display: block;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">
                            <span id="span_current_file_title"> No music selected </span>
                        </font>
                    </font>
                </div>
                <div class="btn" style="float: left; margin-right: 6px; display: none;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                        <path d="M9,5A4,4 0 0,1 13,9A4,4 0 0,1 9,13A4,4 0 0,1 5,9A4,4 0 0,1 9,5M9,15C11.67,15 17,16.34 17,19V21H1V19C1,16.34 6.33,15 9,15M16.76,5.36C18.78,7.56 18.78,10.61 16.76,12.63L15.08,10.94C15.92,9.76 15.92,8.23 15.08,7.05L16.76,5.36M20.07,2C24,6.05 23.97,12.11 20.07,16L18.44,14.37C21.21,11.19 21.21,6.65 18.44,3.63L20.07,2Z">
                        </path>
                    </svg></div>
                <div class="btn" style="float: left; margin-right: 6px; display: none;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                        <path d="M2,3.27L3.28,2L22,20.72L20.73,22L16.73,18C16.9,18.31 17,18.64 17,19V21H1V19C1,16.34 6.33,15 9,15C10.77,15 13.72,15.59 15.5,16.77L11.12,12.39C10.5,12.78 9.78,13 9,13A4,4 0 0,1 5,9C5,8.22 5.22,7.5 5.61,6.88L2,3.27M9,5A4,4 0 0,1 13,9V9.17L8.83,5H9M16.76,5.36C18.78,7.56 18.78,10.61 16.76,12.63L15.08,10.94C15.92,9.76 15.92,8.23 15.08,7.05L16.76,5.36M20.07,2C24,6.05 23.97,12.11 20.07,16L18.44,14.37C21.21,11.19 21.21,6.65 18.44,3.63L20.07,2Z">
                        </path>
                    </svg></div>
                <div class="btn text" style="float: left; margin-right: 6px; display: none;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">more information</font>
                    </font>
                </div>
                <!-- <div class="btn disable" style="float: right; margin-left: 6px;"><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                                                class="icon">
                                                <path
                                                    d="M19,3H15V5H19V9H21V5C21,3.89 20.1,3 19,3M19,19H15V21H19A2,2 0 0,0 21,19V15H19M5,15H3V19A2,2 0 0,0 5,21H9V19H5M3,5V9H5V5H9V3H5A2,2 0 0,0 3,5Z">
                                                </path>
                                            </svg></div> -->
            </div>
        </div>
        <!-- <div class="effect-title" style="display: flex;"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                        width="24" height="24" viewBox="0 0 24 24" class="icon ml-5">
                                        <path
                                            d="M7.5,5.6L5,7L6.4,4.5L5,2L7.5,3.4L10,2L8.6,4.5L10,7L7.5,5.6M19.5,15.4L22,14L20.6,16.5L22,19L19.5,17.6L17,19L18.4,16.5L17,14L19.5,15.4M22,2L20.6,4.5L22,7L19.5,5.6L17,7L18.4,4.5L17,2L19.5,3.4L22,2M13.34,12.78L15.78,10.34L13.66,8.22L11.22,10.66L13.34,12.78M14.37,7.29L16.71,9.63C17.1,10 17.1,10.65 16.71,11.04L5.04,22.71C4.65,23.1 4,23.1 3.63,22.71L1.29,20.37C0.9,20 0.9,19.35 1.29,18.96L12.96,7.29C13.35,6.9 14,6.9 14.37,7.29Z">
                                        </path>
                                    </svg><span><span wudooh="true"
                                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">heavy rain</font>
                                            </font>
                                        </span></span></div> -->
    </div>
    <div class="jetp-toolbar justify-center h-l"><button class="circle ml-5" onclick="showhide('div_effects',['div_widgets','div_cardmusic'])">
            <div class="icon-cover"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon primary-color">
                    <path d="M7.5,5.6L5,7L6.4,4.5L5,2L7.5,3.4L10,2L8.6,4.5L10,7L7.5,5.6M19.5,15.4L22,14L20.6,16.5L22,19L19.5,17.6L17,19L18.4,16.5L17,14L19.5,15.4M22,2L20.6,4.5L22,7L19.5,5.6L17,7L18.4,4.5L17,2L19.5,3.4L22,2M13.34,12.78L15.78,10.34L13.66,8.22L11.22,10.66L13.34,12.78M14.37,7.29L16.71,9.63C17.1,10 17.1,10.65 16.71,11.04L5.04,22.71C4.65,23.1 4,23.1 3.63,22.71L1.29,20.37C0.9,20 0.9,19.35 1.29,18.96L12.96,7.29C13.35,6.9 14,6.9 14.37,7.29Z">
                    </path>
                </svg></div><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Choose an effect</font>
                    </font>



                </span></span>
        </button><button class="circle ml-5" onclick="showhide('div_cardmusic',['div_widgets','div_effects'])">
            <div class="icon-cover"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon primary-color">
                    <path d="M21,3V15.5A3.5,3.5 0 0,1 17.5,19A3.5,3.5 0 0,1 14,15.5A3.5,3.5 0 0,1 17.5,12C18.04,12 18.55,12.12 19,12.34V6.47L9,8.6V17.5A3.5,3.5 0 0,1 5.5,21A3.5,3.5 0 0,1 2,17.5A3.5,3.5 0 0,1 5.5,14C6.04,14 6.55,14.12 7,14.34V6L21,3Z">
                    </path>
                </svg></div><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Sound selection</font>
                    </font>
                </span></span>
        </button>
        <!-- <button class="circle ml-5">
                                    <div class="icon-cover"><svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                            width="24" height="24" viewBox="0 0 24 24" class="icon primary-color">
                                            <path
                                                d="M12,2A3,3 0 0,1 15,5V11A3,3 0 0,1 12,14A3,3 0 0,1 9,11V5A3,3 0 0,1 12,2M19,11C19,14.53 16.39,17.44 13,17.93V21H11V17.93C7.61,17.44 5,14.53 5,11H7A5,5 0 0,0 12,16A5,5 0 0,0 17,11H19Z">
                                            </path>
                                        </svg></div><span><span wudooh="true"
                                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">voice recording</font>
                                            </font>
                                        </span></span>
                                </button> -->
        <button class="circle ml-5" onclick="showhide('div_widgets',['div_cardmusic','div_effects'])">
            <div class="icon-cover"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon primary-color">
                    <path d="M16.7 4.5L19.5 7.3L16.7 10.1L13.9 7.3L16.7 4.5M9 5V9H5V5H9M19 15V19H15V15H19M16.7 1.7L11 7.3L16.7 13H13V21H21V13H16.7L22.3 7.3L16.7 1.7M11 3H3V11H11V3M9 15V19H5V15H9M11 13H3V21H11V13Z">
                    </path>
                </svg></div><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Widgets</font>
                    </font>
                </span></span>
            <div class="badge" style="display: none;">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">0</font>
                </font>
            </div>
        </button>
    </div>
</div>