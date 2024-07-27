<div id="div_post_card" class="jetp-envelope-editor" style="background-color: rgb(163, 108, 66); 
@if (isset($card_info->background_image))
background-image: url('{{$card_info->background_image}}');  display: flex;
@else
background-image: url('/data/assets/background/61624_tn.webp'); display: flex;
@endif
">
                            <div class="envelope-background-gradiant"></div>

                            <header class="jetp-header shadow">
                                <button class="fl filled save animate__pulse" onclick="showhide('div_envelop_front',['div_post_card'])">
                                    <span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">next level</font>
                                            </font>
                                        </span></span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon mr-5 localize">
                                        <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z">
                                        </path>
                                    </svg></button><button class="fl icon" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon" style="color: rgb(96, 125, 139);">
                                        <path d="M22,12V20A2,2 0 0,1 20,22H4A2,2 0 0,1 2,20V12A1,1 0 0,1 1,11V8A2,2 0 0,1 3,6H6.17C6.06,5.69 6,5.35 6,5A3,3 0 0,1 9,2C10,2 10.88,2.5 11.43,3.24V3.23L12,4L12.57,3.23V3.24C13.12,2.5 14,2 15,2A3,3 0 0,1 18,5C18,5.35 17.94,5.69 17.83,6H21A2,2 0 0,1 23,8V11A1,1 0 0,1 22,12M4,20H11V12H4V20M20,20V12H13V20H20M9,4A1,1 0 0,0 8,5A1,1 0 0,0 9,6A1,1 0 0,0 10,5A1,1 0 0,0 9,4M15,4A1,1 0 0,0 14,5A1,1 0 0,0 15,6A1,1 0 0,0 16,5A1,1 0 0,0 15,4M3,8V10H11V8H3M13,8V10H21V8H13Z">
                                        </path>
                                    </svg></button><button class="fr icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                                        <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                                        </path>
                                    </svg></button><button class="fr icon" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                                        <path d="M17 3H5C3.89 3 3 3.9 3 5V19C3 20.1 3.89 21 5 21H19C20.1 21 21 20.1 21 19V7L17 3M19 19H5V5H16.17L19 7.83V19M12 12C10.34 12 9 13.34 9 15S10.34 18 12 18 15 16.66 15 15 13.66 12 12 12M6 6H15V10H6V6Z">
                                        </path>
                                    </svg></button>

                            </header>
 

                            <div class="jetp-content nice-scrollbar" style="padding: 15px 0px 3px; display: block; ">


                                <div class="jetp-wrapper" style="width: 580px; height: 820px; ">


                                <div id="div_canvas_container" class="canvas-container" style="width: 100%; height: 100%; position: relative; user-select: none; background-color: white;
                                @if (isset($card_info->card_context))
                                background-image: url('{{$card_info->card_context}}'); background-size: cover; background-repeat: no-repeat; background-position: center;
                                @endif
                                ">


                                        <canvas id="upper_canvas" class="upper-canvas " width="570" height="810" style="position: absolute; width: 100%; height: 100%; left: 0px; top: 0px; touch-action: none; user-select: none; cursor: default;"></canvas>

                                        <!-- <canvas id="lower_canvas" class="lower-canvas" width="570" height="810" style="position: absolute; width: 100%; height: 100%; left: 0px; top: 0px; touch-action: none; user-select: none;"></canvas> -->


                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            <script>
                                @if(isset($card_info))
                                    // window.cardObjects = {!! json_encode($card_info->card_objects) !!};
                                    window.cardInfo = {!! json_encode($card_info) !!};
                                //    console.log(window.cardInfo.sender_name);
                                // alert(window.cardInfo.sender_name);
                                // alert(document.getElementById('span_sender_name').innerHTML); // = 'Nadeem'; //window.cardInfo.sender_name;



                                @else
                                    window.cardInfo = null;
                                @endif
                                
                                document.addEventListener("DOMContentLoaded", function() {

                                    // Function to set objects selectable
                                    function setObjectsSelectable(canvas) {
                                        canvas.getObjects().forEach(function(obj) {
                                            obj.set({
                                                selectable: true,
                                                evented: true
                                            });
                                        });
                                        canvas.renderAll();
                                    }

                                    if (window.cardInfo && window.cardInfo.card_objects) {
                                        try {
                                            // console.log("Card Objects JSON:", window.cardObjects); // Debug log
                                            let cardObjectsJson = JSON.parse(window.cardInfo.card_objects);
                                            fabcanvas.loadFromJSON(cardObjectsJson, function() {
                                                fabcanvas.renderAll.bind(fabcanvas);
                                                setObjectsSelectable(fabcanvas); // Ensure all objects are selectable after loading
                                            }, function(o, object) {
                                                // console.log("Object loaded:", o, object);
                                                null;
                                            });
                                        } catch (e) {
                                            console.error("Failed to parse card objects JSON", e);
                                        }
                                    } else {
                                        console.log("No card objects found.");
                                    }

                                   
                                });


                            </script>
                            



                            <div id="toolbar_card" class="jetp-toolbar justify-center h-l" style="display:flex;"> 
                                <button class="circle ml-5" onclick="showhide('div_upload_bg_image',['div_upload_image','div_add_text','div_stickers'])">
                                    <div class="icon-cover">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon primary-color">
                                            <path d="M14,2L20,8V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V4A2,2 0 0,1 6,2H14M18,20V9H13V4H6V20H18M17,13V19H7L12,14L14,16M10,10.5A1.5,1.5 0 0,1 8.5,12A1.5,1.5 0 0,1 7,10.5A1.5,1.5 0 0,1 8.5,9A1.5,1.5 0 0,1 10,10.5Z">
                                            </path>
                                        </svg>
                                    </div>

                                    <span>
                                        <span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Add context</font>
                                            </font>
                                        </span>
                                    </span>
                                </button>
                                <button class="circle ml-5" onclick="showhide('div_upload_image',['div_upload_bg_image','div_add_text','div_stickers'])">
                                    <div class="icon-cover"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon primary-color">
                                            <path d="M19,19H5V5H19M19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M13.96,12.29L11.21,15.83L9.25,13.47L6.5,17H17.5L13.96,12.29Z">
                                            </path>
                                        </svg></div><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Add image</font>
                                            </font>
                                        </span></span>
                                </button>
                                <button class="circle ml-5" onclick="showhide('div_add_text',['div_upload_image','div_upload_bg_image','div_stickers'])">
                                    <div class="icon-cover"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon primary-color">
                                            <path d="M4,5A2,2 0 0,0 2,7V17A2,2 0 0,0 4,19H20A2,2 0 0,0 22,17V7A2,2 0 0,0 20,5H4M4,7H20V17H4V7M5,8V10H7V8H5M8,8V10H10V8H8M11,8V10H13V8H11M14,8V10H16V8H14M17,8V10H19V8H17M5,11V13H7V11H5M8,11V13H10V11H8M11,11V13H13V11H11M14,11V13H16V11H14M17,11V13H19V11H17M8,14V16H16V14H8Z">
                                            </path>
                                        </svg></div><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Add text</font>
                                            </font>
                                        </span></span>
                                </button>
                                <button class="circle ml-5" onclick="showhide('div_stickers',['div_upload_image','div_add_text','div_upload_bg_image'])">
                                    <div class="icon-cover"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon primary-color">
                                            <path d="M12.12,18.46L18.3,12.28C16.94,12.59 15.31,13.2 14.07,14.46C13.04,15.5 12.39,16.83 12.12,18.46M20.75,10H21.05C21.44,10 21.79,10.27 21.93,10.64C22.07,11 22,11.43 21.7,11.71L11.7,21.71C11.5,21.9 11.26,22 11,22L10.64,21.93C10.27,21.79 10,21.44 10,21.05C9.84,17.66 10.73,14.96 12.66,13.03C15.5,10.2 19.62,10 20.75,10M12,2C16.5,2 20.34,5 21.58,9.11L20,9H19.42C18.24,6.07 15.36,4 12,4A8,8 0 0,0 4,12C4,15.36 6.07,18.24 9,19.42C8.97,20.13 9,20.85 9.11,21.57C5,20.33 2,16.5 2,12C2,6.47 6.5,2 12,2Z">
                                            </path>
                                        </svg></div><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Add sticker</font>
                                            </font>
                                        </span></span>
                                </button>
                            </div>


                            <div id="selected_toolbar" class="jetp-toolbar justify-center h-l" style="display: none;">

                                <button onclick="showhide('toolbar_card',['selected_toolbar'])" class="linear ml-10 no-border localize"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                                        <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z">
                                        </path>
                                    </svg></button>

                                <!-- <button id="replaceBtn" onclick="replace_ojbect()" class="linear ml-10"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon ml-10">
                                        <path d="M14,3L12,1H4A2,2 0 0,0 2,3V15A2,2 0 0,0 4,17H11V19L15,16L11,13V15H4V3H14M21,10V21A2,2 0 0,1 19,23H8A2,2 0 0,1 6,21V19H8V21H19V12H14V7H8V13H6V7A2,2 0 0,1 8,5H16L21,10Z">
                                        </path>
                                    </svg><span class="ml-10"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">to replace</font>
                                            </font>
                                        </span></span></button> -->

                                <!-- <button onclick="bring_tofront()" class="linear ml-10 icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                                        <path d="M2,2H16V16H2V2M22,8V22H8V18H10V20H20V10H18V8H22Z"></path>
                                    </svg></button> -->
                                <button onclick="object_duplicate()" class="linear ml-10 icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                                        <path d="M2,2H16V16H2V2M22,8V22H8V18H10V20H20V10H18V8H22Z"></path>
                                    </svg></button>
                                <button class="linear ml-10 danger icon" onclick="object_delete()"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                                        <path d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z">
                                        </path>
                                    </svg></button>

                            </div>



                            <div class="jetp-toolbar justify-center h-l" style="display: none;"><button class="linear ml-10 no-border localize"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                                        <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z">
                                        </path>
                                    </svg></button><button class="linear ml-10"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon ml-10">
                                        <path d="M14.06,9L15,9.94L5.92,19H5V18.08L14.06,9M17.66,3C17.41,3 17.15,3.1 16.96,3.29L15.13,5.12L18.88,8.87L20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18.17,3.09 17.92,3 17.66,3M14.06,6.19L3,17.25V21H6.75L17.81,9.94L14.06,6.19Z">
                                        </path>
                                    </svg><span class="ml-10"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Change the text</font>
                                            </font>
                                        </span></span></button><button class="linear ml-10 icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                                        <path d="M2,2H16V16H2V2M22,8V22H8V18H10V20H20V10H18V8H22Z"></path>
                                    </svg></button><button class="linear ml-10 danger icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                                        <path d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z">
                                        </path>
                                    </svg></button>
                            </div>


                            <div class="jetp-toolbar justify-center h-l" style="display: none;">
                                <button class="linear ml-10 no-border localize"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                                        <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z">
                                        </path>
                                    </svg></button><button class="linear ml-10 icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                                        <path d="M2,2H16V16H2V2M22,8V22H8V18H10V20H20V10H18V8H22Z"></path>
                                    </svg></button><button class="linear ml-10 danger icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                                        <path d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z">
                                        </path>
                                    </svg></button>
                            </div>


                            <div class="jetp-toolbar justify-center h-l" style="display: none;">
                                <button class="linear ml-10 no-border localize"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                                        <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z">
                                        </path>
                                    </svg></button>
                                    
                                    <button class="linear ml-10"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon ml-10">
                                        <path d="M14,3L12,1H4A2,2 0 0,0 2,3V15A2,2 0 0,0 4,17H11V19L15,16L11,13V15H4V3H14M21,10V21A2,2 0 0,1 19,23H8A2,2 0 0,1 6,21V19H8V21H19V12H14V7H8V13H6V7A2,2 0 0,1 8,5H16L21,10Z">
                                        </path>
                                    </svg><span class="ml-10"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">to replace</font>
                                            </font>
                                        </span></span></button>
                                        
                                        <button class="linear ml-10 icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                                        <path d="M2,2H16V16H2V2M22,8V22H8V18H10V20H20V10H18V8H22Z"></path>
                                    </svg></button><button class="linear ml-10 danger icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                                        <path d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>


                       