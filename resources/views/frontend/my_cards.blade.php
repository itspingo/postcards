@extends('layouts.user_area')
@section('content')


<div class="jetp-placeholder">
    <div id="div_cards"  class="jetp-explore-cards">
        <header class="jetp-header fixed"><button class="fr icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z">
                    </path>
                </svg></button>
                <!-- <button class="fl icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M17.65,6.35C16.2,4.9 14.21,4 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20C15.73,20 18.84,17.45 19.73,14H17.65C16.83,16.33 14.61,18 12,18A6,6 0 0,1 6,12A6,6 0 0,1 12,6C13.66,6 15.14,6.69 16.22,7.78L13,11H20V4L17.65,6.35Z">
                    </path>
                </svg></button> -->
                <!-- <button class="fl outline gray ml-5" style="display: none; min-width: 72px;"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Dedicated cards</font>
                    </font>
                </span></button> -->
            <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">my cards</font>
                    </font>
                </span></div>
        </header>
        <div class="jetp-mycard">




        @foreach($mycards as $mycard)
            <div class="item is-desktop">
                <div class="picture">

                    @if($mycard->background_image)
                        <div class="background lazy entered loaded" data-bg="{{$mycard->background_image}}" data-bg-hidpi="{{$mycard->background_image}}" style="background-color: rgb(163, 108, 66); background-image: url(&quot;{{$mycard->background_image}}&quot;);" data-ll-status="loaded"></div>
                    @else
                        <div class="background lazy entered loaded" data-bg="/data/assets/background_thumbnails/61624_tn_1x.webp" data-bg-hidpi="/data/assets/background_thumbnails/61624_tn_2x.webp" style="background-color: rgb(163, 108, 66); background-image: url(&quot;/data/assets/background_thumbnails/61624_tn_1x.webp&quot;);" data-ll-status="loaded"></div>
                    @endif
                    
                    @if($mycard->back_image)


                    
                    <img class="envelope lazy entered loaded" src="{{$mycard->flap_image}}" style="width:150px; height:120px; transform: scaleY(-1); margin-bottom:98px;">    
                    <img class="envelope lazy entered loaded" src="{{$mycard->envelop_inside_image}}" style="width:150px; height:200px; margin-bottom:20px;">                        
                        
                        <img class="envelope lazy entered loaded" data-src="{{$mycard->back_image}}" data-srcset="{{$mycard->back_image}}" data-ll-status="loaded" srcset="{{$mycard->back_image}}" src="{{$mycard->back_image}}" style="width:150px; height:100px">
                        
                        <img  class="envelope lazy entered loaded" src="{{url('website/assets/images/flap-shadow.png')}}" style="width:150px; height:200px; margin-bottom:98px;">        


                    @else
                        <img class="envelope lazy entered loaded" width="200" height="269" data-src="{{url('website/assets/images/1002.webp')}}" data-srcset="{{url('website/assets/images/1002.webp')}}" data-ll-status="loaded" srcset="{{url('website/assets/images/1002.webp')}}" src="{{url('website/assets/images/1002.webp')}}">
                    @endif
                    
                    @if($mycard->card_image)
                        <div class="inner">
                            <img class="card lazy front entered loaded" width="200" height="284" data-src="{{url('storage/'.str_replace('public/','',$mycard->card_image))}}" data-ll-status="loaded" src="{{url('storage/'.str_replace('public/','',$mycard->card_image))}}">
                        </div>
                    @else
                        <div class="inner">
                            <img class="card lazy front entered loaded" width="200" height="284" data-src="/userdata/thumb/B2405/29/n7eqfec7mfckfge.jpg" data-ll-status="loaded" src="{{url('website/assets/images/n7eqfec7mfckfge.jpg')}}">
                            <!-- <img class="card lazy back" width="200" height="284" data-src="" style="display: none;"> -->
                        </div>
                    @endif
                    <div></div>
                </div>
                <div class="info">
                    <div class="row mt-10 mb-10"> 
                        <div class="stamp">
                            <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Card Title</font>
                                    </font>
                                </span></div>
                            <div class="detail">
                                <!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon ml-5" style="color: rgb(205, 127, 50);">
                                    <path d="M2,2V5.5C3.1,5.5 4,6.62 4,8C4,9.38 3.1,10.5 2,10.5V13.5C3.1,13.5 4,14.62 4,16C4,17.38 3.1,18.5 2,18.5V22H5.5C5.5,20.9 6.62,20 8,20C9.38,20 10.5,20.9 10.5,22H13.5C13.5,20.9 14.62,20 16,20C17.38,20 18.5,20.9 18.5,22H22V18.5C20.9,18.5 20,17.38 20,16V16C20,14.62 20.9,13.5 22,13.5V10.5C20.9,10.5 20,9.38 20,8V8C20,6.62 20.9,5.5 22,5.5V2H18.5C18.5,3.1 17.38,4 16,4C14.62,4 13.5,3.1 13.5,2H10.5C10.5,3.1 9.38,4 8,4C6.62,4 5.5,3.1 5.5,2H2M6,6H18V18H6V6M9,7A2,2 0 0,0 7,9A2,2 0 0,0 9,11A2,2 0 0,0 11,9A2,2 0 0,0 9,7M17,10L14,13L12,12L7,17H17V10Z">
                                    </path>
                                </svg> -->
                                <span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">{{$mycard->title}}</font>
                                        </font>
                                    </span></span>
                                </div>
                        </div>
                        

                        <a class="menu mr-a " href="{{url('play/'.$mycard->id)}}" target="_blank" title="View card"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                                <path d="M8,5.14V19.14L19,12.14L8,5.14Z"></path>
                            </svg></a>

                        <div class="menu mr-5 " onclick="show_card_share_popup({{$mycard->id}})"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon" style="margin-right: 3px;">
                                <path d="M18,16.08C17.24,16.08 16.56,16.38 16.04,16.85L8.91,12.7C8.96,12.47 9,12.24 9,12C9,11.76 8.96,11.53 8.91,11.3L15.96,7.19C16.5,7.69 17.21,8 18,8A3,3 0 0,0 21,5A3,3 0 0,0 18,2A3,3 0 0,0 15,5C15,5.24 15.04,5.47 15.09,5.7L8.04,9.81C7.5,9.31 6.79,9 6,9A3,3 0 0,0 3,12A3,3 0 0,0 6,15C6.79,15 7.5,14.69 8.04,14.19L15.16,18.34C15.11,18.55 15.08,18.77 15.08,19C15.08,20.61 16.39,21.91 18,21.91C19.61,21.91 20.92,20.61 20.92,19A2.92,2.92 0 0,0 18,16.08Z">
                                </path>
                            </svg></div>

                        <!-- <div class="spinner mt-5 ml-5 mr-10 active" style="display: flex;"></div> -->
                        <div class="menu mr-5 elemid_88wpmg " onclick="show_mycard_options({{$mycard->id}})"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                                <path d="M12,16A2,2 0 0,1 14,18A2,2 0 0,1 12,20A2,2 0 0,1 10,18A2,2 0 0,1 12,16M12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12A2,2 0 0,1 12,10M12,4A2,2 0 0,1 14,6A2,2 0 0,1 12,8A2,2 0 0,1 10,6A2,2 0 0,1 12,4Z">
                                </path>
                            </svg>
                        </div>




                        <div id="{{'div_mycard_options'.$mycard->id}}" class="jetp-menu open id_88wpmg small active" style="right: 36px; top: 208px; display:none;">
                            <a class="option primary-color" href="{{url('play/'.$mycard->id)}}" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                                    <path d="M19,19H5V5H19M19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M10,8V16L15,12L10,8Z">
                                    </path>
                                </svg><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">View card</font>
                                        </font>
                                    </span></span></a>
                            <div class="option"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                                    <path d="M12,5.5A3.5,3.5 0 0,1 15.5,9A3.5,3.5 0 0,1 12,12.5A3.5,3.5 0 0,1 8.5,9A3.5,3.5 0 0,1 12,5.5M5,8C5.56,8 6.08,8.15 6.53,8.42C6.38,9.85 6.8,11.27 7.66,12.38C7.16,13.34 6.16,14 5,14A3,3 0 0,1 2,11A3,3 0 0,1 5,8M19,8A3,3 0 0,1 22,11A3,3 0 0,1 19,14C17.84,14 16.84,13.34 16.34,12.38C17.2,11.27 17.62,9.85 17.47,8.42C17.92,8.15 18.44,8 19,8M5.5,18.25C5.5,16.18 8.41,14.5 12,14.5C15.59,14.5 18.5,16.18 18.5,18.25V20H5.5V18.25M0,20V18.5C0,17.11 1.89,15.94 4.45,15.6C3.86,16.28 3.5,17.22 3.5,18.25V20H0M24,20H20.5V18.25C20.5,17.22 20.14,16.28 19.55,15.6C22.11,15.94 24,17.11 24,18.5V20Z">
                                    </path>
                                </svg><span onclick="show_recipient_info({{$mycard->id}})" ><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">insert recipient</font>
                                        </font>
                                    </span></span></a></div>
                            <div class="option"><a href="{{url('card_designer/'.$mycard->id)}}"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                                    <path d="M14.06,9L15,9.94L5.92,19H5V18.08L14.06,9M17.66,3C17.41,3 17.15,3.1 16.96,3.29L15.13,5.12L18.88,8.87L20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18.17,3.09 17.92,3 17.66,3M14.06,6.19L3,17.25V21H6.75L17.81,9.94L14.06,6.19Z">
                                    </path>
                                </svg><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Card editing</font>
                                        </font> 
                                    </span></span></a></div>
                            <div class="option"><a href="{{url('mycards/card_copy/'.$mycard->id)}}"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                                    <path d="M19,21H8V7H19M19,5H8A2,2 0 0,0 6,7V21A2,2 0 0,0 8,23H19A2,2 0 0,0 21,21V7A2,2 0 0,0 19,5M16,1H4A2,2 0 0,0 2,3V17H4V3H16V1Z">
                                    </path>
                                </svg><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Making a copy of the card</font>
                                        </font>
                                    </span></span></a></div>
                            <div class="option"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                                    <path d="M20,20H7A2,2 0 0,1 5,18V8.94L2.23,5.64C2.09,5.47 2,5.24 2,5A1,1 0 0,1 3,4H20A2,2 0 0,1 22,6V18A2,2 0 0,1 20,20M8.5,7A0.5,0.5 0 0,0 8,7.5V8.5A0.5,0.5 0 0,0 8.5,9H18.5A0.5,0.5 0 0,0 19,8.5V7.5A0.5,0.5 0 0,0 18.5,7H8.5M8.5,11A0.5,0.5 0 0,0 8,11.5V12.5A0.5,0.5 0 0,0 8.5,13H18.5A0.5,0.5 0 0,0 19,12.5V11.5A0.5,0.5 0 0,0 18.5,11H8.5M8.5,15A0.5,0.5 0 0,0 8,15.5V16.5A0.5,0.5 0 0,0 8.5,17H13.5A0.5,0.5 0 0,0 14,16.5V15.5A0.5,0.5 0 0,0 13.5,15H8.5Z">
                                    </path>
                                </svg><span onclick="load_messages({{$mycard->id}})">
                                    <span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">View messages</font>
                                        </font>
                                    </span></span></a></div>
                            <div class="line"></div>

                            <!-- <div class="option"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                                    <path d="M3,11H5V13H3V11M11,5H13V9H11V5M9,11H13V15H11V13H9V11M15,11H17V13H19V11H21V13H19V15H21V19H19V21H17V19H13V21H11V17H15V15H17V13H15V11M19,19V15H17V19H19M15,3H21V9H15V3M17,5V7H19V5H17M3,3H9V9H3V3M5,5V7H7V5H5M3,15H9V21H3V15M5,17V19H7V17H5Z">
                                    </path>
                                </svg><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Receive a Digipostal label</font>
                                        </font>
                                    </span></span></div> -->

                            <div class="option"><a href="{{url('mycards/card_delete/'.$mycard->id)}}"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                                    <path d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z">
                                    </path>
                                </svg><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Delete</font>
                                        </font>
                                    </span></span></a></div>

                                    
                            <div class="option" onclick="hide_mycard_options({{$mycard->id}})">
                            <i class="fa-regular fa-circle-xmark" style="margin-left:20px; font-size:16;"></i>    
                            <span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Close</font>
                                        </font>
                                    </span></span></div>
                        </div>




                    </div>
                    <div class="row text">
                        <div class="w-100" style="display: none;"></div>
                        <div class="w-100" style="display: none;"></div>
                    </div>
                    <div class="row date mt-10">
                        <div class="col create" style="display: block;">
                            <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">production date</font>
                                    </font>
                                </span></div>
                            <div class="detail"><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">{{$mycard->created_at}}
                                            </font>
                                        </font>
                                    </span></span></div>
                        </div>
                        @if($mycard->updated_at)
                        <div class="col update" style="display: block;">
                            <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Edit date</font>
                                    </font>
                                </span></div>
                            <div class="detail"><span>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">{{$mycard->updated_at}}</font>
                                    </font>
                                </span></div>
                        </div>
                        @endif 

                    </div>
                    <div class="row state mt-10 mb-5">
                        <!-- <div class="col cursor">
                            <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">viewers' statistics
                                        </font>
                                    </font>
                                </span></div>
                            <div class="detail"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon" style="width: 20px; height: 20px;">
                                    <path d="M12,17C10.89,17 10,16.1 10,15C10,13.89 10.89,13 12,13A2,2 0 0,1 14,15A2,2 0 0,1 12,17M18,20V10H6V20H18M18,8A2,2 0 0,1 20,10V20A2,2 0 0,1 18,22H6C4.89,22 4,21.1 4,20V10C4,8.89 4.89,8 6,8H7V6A5,5 0 0,1 12,1A5,5 0 0,1 17,6V8H18M12,3A3,3 0 0,0 9,6V8H15V6A3,3 0 0,0 12,3Z">
                                    </path>
                                </svg></div>
                        </div> -->
                        <div class="col cursor">
                            <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">receivers</font>
                                    </font>
                                </span></div>
                            <div class="detail"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">0</font>
                                    </font>
                                </span></div>
                        </div>
                        <div class="col cursor" >
                            <div class="title"  onclick="load_messages({{$mycard->id}})"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;" >
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Messages</font>
                                    </font>
                                </span></div>
                            <div class="detail"><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">0</font>
                                        </font>
                                    </span></span></div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach





        </div>
    </div>


    <div id="div_messages" style="display:none;">
        <div class="row">
            <header class="jetp-header fixed col-12"> <!-- Use col-12 to ensure full width -->
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <button class="fr icon" onclick="showhide('div_cards',['div_messages'])">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                                <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="title">
                        <span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:'Sahl Naskh';">
                            <font style="vertical-align: inherit;">
                                <!-- <font style="vertical-align: inherit;">Messages</font> -->
                            </font>
                        </span>
                    </div>
                </div>
            </header>
        </div>
        <div class="row">
            <div class="jetp-mycard col-12"> <!-- Use col-12 to ensure full width -->
                <div id="div_messages_box">
                    No Message is found
                </div>
            </div>
        </div>
    </div>


</div>




<div id="div_card_share" class="jetp-dialog-overlay show" style="display: none;">
        <div class="jetp-dialog modal auto-size small">
            <div class="jetp-header">
                <div class="jetp-back" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                        height="24" viewBox="0 0 24 24" class="icon localize">
                        <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                    </svg></div>
                <div class="jetp-title no-wrap pr-20"><span wudooh="true"
                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Digital postcard</font>
                        </font>
                    </span></div>
                <div style="display: none;"></div>
                <div class="jetp-close"><svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_card_share')"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                        height="24" viewBox="0 0 24 24" class="icon">
                        <path
                            d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                        </path>
                    </svg></div>
            </div>
            <div class="jetp-content nice-scrollbar">
                <div class="jetp-share-dialog link-mode"><b class="share-title mt-10"><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Posting on social networks</font>
                            </font>
                        </span></b>
                    <div class="share-buttons mb-10" style="width: 238px;"><a class="share primary-color-bg"
                            href="https://digipostal.ir/app/mycards" style="display: none;"><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                                class="icon">
                                <path
                                    d="M18,16.08C17.24,16.08 16.56,16.38 16.04,16.85L8.91,12.7C8.96,12.47 9,12.24 9,12C9,11.76 8.96,11.53 8.91,11.3L15.96,7.19C16.5,7.69 17.21,8 18,8A3,3 0 0,0 21,5A3,3 0 0,0 18,2A3,3 0 0,0 15,5C15,5.24 15.04,5.47 15.09,5.7L8.04,9.81C7.5,9.31 6.79,9 6,9A3,3 0 0,0 3,12A3,3 0 0,0 6,15C6.79,15 7.5,14.69 8.04,14.19L15.16,18.34C15.11,18.55 15.08,18.77 15.08,19C15.08,20.61 16.39,21.91 18,21.91C19.61,21.91 20.92,20.61 20.92,19A2.92,2.92 0 0,0 18,16.08Z">
                                </path>
                            </svg></a><a class="message" href="sms://;?&amp;body={{url('play/'.$mycard->id)}}"><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                                class="icon">
                                <path
                                    d="M20,20H7A2,2 0 0,1 5,18V8.94L2.23,5.64C2.09,5.47 2,5.24 2,5A1,1 0 0,1 3,4H20A2,2 0 0,1 22,6V18A2,2 0 0,1 20,20M8.5,7A0.5,0.5 0 0,0 8,7.5V8.5A0.5,0.5 0 0,0 8.5,9H18.5A0.5,0.5 0 0,0 19,8.5V7.5A0.5,0.5 0 0,0 18.5,7H8.5M8.5,11A0.5,0.5 0 0,0 8,11.5V12.5A0.5,0.5 0 0,0 8.5,13H18.5A0.5,0.5 0 0,0 19,12.5V11.5A0.5,0.5 0 0,0 18.5,11H8.5M8.5,15A0.5,0.5 0 0,0 8,15.5V16.5A0.5,0.5 0 0,0 8.5,17H13.5A0.5,0.5 0 0,0 14,16.5V15.5A0.5,0.5 0 0,0 13.5,15H8.5Z">
                                </path>
                            </svg></a><a class="whatsapp" href="whatsapp://send?text={{url('play/'.$mycard->id)}}"><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1" fill="currentColor" width="48" height="48" viewBox="0 0 48 48"
                                class="icon">
                                <path
                                    d="M34.7507 13.2115C32.1777 10.5628 28.621 9.125 24.9885 9.125C17.2696 9.125 11.0642 15.4061 11.1399 23.0493C11.1399 25.4709 11.821 27.8169 12.9561 29.9358L10.9885 37.125L18.3291 35.2331C20.3723 36.3682 22.6426 36.898 24.9128 36.898C32.5561 36.898 38.7615 30.6169 38.7615 22.9736C38.7615 19.2655 37.3237 15.7845 34.7507 13.2115ZM24.9885 34.552C22.9453 34.552 20.902 34.0223 19.1615 32.9628L18.7074 32.7358L14.3183 33.8709L15.4534 29.5574L15.1507 29.1034C11.821 23.7304 13.4101 16.6169 18.8588 13.2872C24.3074 9.95743 31.3453 11.5466 34.675 16.9953C38.0047 22.4439 36.4156 29.4818 30.9669 32.8115C29.2264 33.9466 27.1074 34.552 24.9885 34.552ZM31.648 26.152L30.8156 25.7736C30.8156 25.7736 29.6047 25.2439 28.848 24.8655C28.7723 24.8655 28.6966 24.7899 28.621 24.7899C28.3939 24.7899 28.2426 24.8655 28.0912 24.9412C28.0912 24.9412 28.0156 25.0169 26.9561 26.2277C26.8804 26.3791 26.7291 26.4547 26.5777 26.4547H26.502C26.4264 26.4547 26.275 26.3791 26.1993 26.3034L25.821 26.152C24.9885 25.7736 24.2318 25.3196 23.6264 24.7142C23.475 24.5628 23.248 24.4115 23.0966 24.2601C22.5669 23.7304 22.0372 23.125 21.6588 22.4439L21.5831 22.2926C21.5074 22.2169 21.5074 22.1412 21.4318 21.9899C21.4318 21.8385 21.4318 21.6872 21.5074 21.6115C21.5074 21.6115 21.8101 21.2331 22.0372 21.0061C22.1885 20.8547 22.2642 20.6277 22.4156 20.4764C22.5669 20.2493 22.6426 19.9466 22.5669 19.7196C22.4912 19.3412 21.5831 17.298 21.3561 16.8439C21.2047 16.6169 21.0534 16.5412 20.8264 16.4655H20.5993C20.448 16.4655 20.221 16.4655 19.9939 16.4655C19.8426 16.4655 19.6912 16.5412 19.5399 16.5412L19.4642 16.6169C19.3128 16.6926 19.1615 16.8439 19.0101 16.9196C18.8588 17.0709 18.7831 17.2223 18.6318 17.3736C18.102 18.0547 17.7993 18.8872 17.7993 19.7196C17.7993 20.325 17.9507 20.9304 18.1777 21.4601L18.2534 21.6872C18.9345 23.125 19.8426 24.4115 21.0534 25.5466L21.3561 25.8493C21.5831 26.0764 21.8101 26.2277 21.9615 26.4547C23.5507 27.8169 25.3669 28.8007 27.4101 29.3304C27.6372 29.4061 27.9399 29.4061 28.1669 29.4818C28.3939 29.4818 28.6966 29.4818 28.9237 29.4818C29.302 29.4818 29.7561 29.3304 30.0588 29.1791C30.2858 29.0277 30.4372 29.0277 30.5885 28.8764L30.7399 28.725C30.8912 28.5736 31.0426 28.498 31.1939 28.3466C31.3453 28.1953 31.4966 28.0439 31.5723 27.8926C31.7237 27.5899 31.7993 27.2115 31.875 26.8331C31.875 26.6818 31.875 26.4547 31.875 26.3034C31.875 26.3034 31.7993 26.2277 31.648 26.152Z">
                                </path>
                            </svg></a><a class="telegram"
                            href="https://t.me/share/url?text={{url('play/'.$mycard->id)}}&amp;url={{url('play/'.$mycard->id)}}"
                            target="_blank"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="48"
                                height="48" viewBox="0 0 48 48" class="icon">
                                <path
                                    d="M10.7874 23.4709C17.7667 20.3663 22.4206 18.3195 24.7493 17.3305C31.3979 14.507 32.7795 14.0165 33.68 14.0002C33.878 13.9968 34.3208 14.0469 34.6077 14.2845C34.8499 14.4852 34.9165 14.7563 34.9484 14.9465C34.9803 15.1368 35.02 15.5702 34.9884 15.9088C34.6281 19.774 33.0692 29.1539 32.276 33.483C31.9404 35.3148 31.2796 35.929 30.6399 35.9891C29.2496 36.1197 28.1938 35.051 26.8473 34.1497C24.7401 32.7395 23.5498 31.8615 21.5044 30.4854C19.1407 28.895 20.673 28.0209 22.0201 26.5923C22.3726 26.2185 28.4983 20.5295 28.6169 20.0135C28.6317 19.9489 28.6455 19.7083 28.5055 19.5813C28.3655 19.4543 28.1589 19.4977 28.0098 19.5322C27.7985 19.5812 24.4323 21.8529 17.9113 26.3473C16.9558 27.0172 16.0904 27.3435 15.315 27.3264C14.4602 27.3076 12.8159 26.833 11.5935 26.4273C10.0942 25.9296 8.90254 25.6666 9.0063 24.8215C9.06035 24.3813 9.65403 23.9311 10.7874 23.4709Z">
                                </path>
                            </svg></a><a class="facebook"
                            href="https://facebook.com/sharer/sharer.php?description={{url('play/'.$mycard->id)}}&amp;u={{url('play/'.$mycard->id)}}"
                            target="_blank"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="32"
                                height="32" viewBox="0 0 32 32" class="icon">
                                <path
                                    d="M13.69 24.903h3.679v-8.904h2.454l.325-3.068h-2.779l.004-1.536c0-.8.076-1.229 1.224-1.229h1.534V7.097h-2.455c-2.949 0-3.986 1.489-3.986 3.992v1.842h-1.838V16h1.838v8.903z">
                                </path>
                            </svg></a><a class="twitter"
                            href="https://twitter.com/intent/tweet/?text={{url('play/'.$mycard->id)}}&amp;url={{url('play/'.$mycard->id)}}"
                            target="_blank"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                                height="24" viewBox="0 0 24 24" class="icon">
                                <path
                                    d="M 2.3671875 3 L 9.4628906 13.140625 L 2.7402344 21 L 5.3808594 21 L 10.644531 14.830078 L 14.960938 21 L 21.871094 21 L 14.449219 10.375 L 20.740234 3 L 18.140625 3 L 13.271484 8.6875 L 9.2988281 3 L 2.3671875 3 z M 6.2070312 5 L 8.2558594 5 L 18.033203 19 L 16.001953 19 L 6.2070312 5 z">
                                </path>
                            </svg></a><a class="eitaa"
                            href="https://eitaa.com/share/url?url={{url('play/'.$mycard->id)}}" target="_blank"><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1" fill="currentColor" width="100" height="100" viewBox="0 0 100 100"
                                class="icon">
                                <path
                                    d="M47.6,67.6c-1.4,1-4.6,5.1-4.8,8.2C36.8,75,30.1,68.2,30.9,61   c-9.8-7.1-1.7-20.2,6.1-25.4C53.6,24.3,76.7,34,63.8,42C56,46.9,39.3,50.2,41,38.2c-4.6,1.3-7.5,9.9-2,14.3   c-5.1,5-4.1,14.3,1.3,17.3c5.5-14.3,24.8-12.4,32.5-29.5c5.8-12.9-2.8-27.5-20.2-25.3c-13.1,1.7-25.3,12.7-31.5,25.8   c-6.2,13.3-5.3,31.1,7.5,40c15,10.5,31,0.8,40.7-12c5.7-7.5,10.7-15.9,18.3-20.7v-5.8C76.2,47.5,64.6,73.1,47.6,67.6z">
                                </path>
                            </svg></a></div><b class="share-title mt-10"><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Copy the text below</font>
                            </font>
                        </span></b>


                    <div class="copytext-box">
                        <textarea readonly="readOnly" rows="4">{{url('play/'.$mycard->id)}}</textarea>
                        <div class="btn"><span><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">to copy</font>
                                    </font>
                                </span></span></div><a class="btn view" href="{{url('play/'.$mycard->id)}}"
                            target="_blank"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">View card</font>
                                </font>
                            </span></a>
                    </div>


                </div>
            </div>
            <div class="jetp-footer p-20-10" style="display: none;"></div>
            <div class="jetp-loading-wrapper" style="display: none;">
                <div class="spinner large"></div>
            </div>
        </div>
    </div>




    <div id="div_recipient_info" class="jetp-dialog-overlay show" style="display: none;">
        <div class="jetp-dialog auto-size small">
            <div class="jetp-header">
                <div class="jetp-back" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                        height="24" viewBox="0 0 24 24" class="icon localize">
                        <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                    </svg></div>
                <div class="jetp-title no-wrap pr-20"><span wudooh="true"
                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Receiver Specifications</font>
                        </font>
                    </span></div>
                <div style="display: none;"></div>
                <div class="jetp-close"><svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_recipient_info')"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                        height="24" viewBox="0 0 24 24" class="icon">
                        <path
                            d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                        </path>
                    </svg></div>
            </div>
            <div class="jetp-content nice-scrollbar">
                <div class="jetp-receiver-dialog w-100">
                    <div class="jetp-cover-input m-20-10 mt-20">
                        <div class="label"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Prefix</font>
                                </font>
                            </span></div><select id="prefix">
                            <option value=""><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">No prefix</font>
                                    </font>
                                </span></option>
                            <option value="MS"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">MS</font>
                                    </font>
                                </span></option>
                            <option value="Mr"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Mr</font>
                                    </font>
                                </span></option>
                            <option value="Lady"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Lady</font>
                                    </font>
                                </span></option>
                            <!-- <option value="4"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Mr</font>
                                    </font>
                                </span></option> -->
                            <option value="Dedicated to"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Dedicated to</font>
                                    </font>
                                </span></option>
                            <option value="I am a good student"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">I am a good student</font>
                                    </font>
                                </span></option>
                            <option value="Dear family"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Dear family</font>
                                    </font>
                                </span></option>
                            <option value="Honorable presence of Mr"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Honorable presence of Mr</font>
                                    </font>
                                </span></option>
                            <option value="The honorable presence of Sarkar against"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">The honorable presence of Sarkar against
                                        </font>
                                    </font>
                                </span></option>
                            <option value="Dear Mr"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Dear Mr</font>
                                    </font>
                                </span></option>
                            <option value="At your service, Mrs"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">At your service, Mrs</font>
                                    </font>
                                </span></option>
                        </select>
                    </div>
                    <div class="jetp-cover-input m-20-10 mt-20">
                        <div class="label"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Recipient Name</font>
                                </font>
                            </span></div><input type="text" name="name" id="recipient_name" maxlength="100" value="">
                    </div>
                    <div class="jetp-cover-input m-20-10 mt-20">
                        <div class="label"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Mobile No: (optional)</font>
                                </font>
                            </span></div><input type="tel" name="mobile" id="mobile_no" maxlength="11" value="">
                            <input type="hidden" name="cardid" id="recipient_cardid" value="">
                    </div>

                </div>
            </div>
            <div class="jetp-footer p-20-10" style="display: flex;"><button class="success ml-10" onclick="save_nclose_recipient()"><span wudooh="true"
                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">confirmation</font>
                        </font>
                    </span></button><button class="gray mr-10"><span wudooh="true"  onclick="save_ncontinue_recipient()"
                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Confirm and continue</font>
                        </font>
                    </span></button></div>
            <div class="jetp-loading-wrapper" style="display: none;">
                <div class="spinner large"></div>
            </div>
        </div>
    </div>

<style>
    #div_messages {
        padding: 15px;
    }

    /* .jetp-header {
        background-color: #f5f5f5;
        
        padding: 10px;
    } */

    .title {
        font-weight: bold;
        text-align: left;
    }

    .jetp-mycard {
        margin-top: 15px; 
     } 
     /* #div_messages_box {
        background-color: #fff;
        padding: 20px;
        border: 1px solid #ddd;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    } */
</style>

<script>

function show_mycard_options(cardId){
    // alert('card id: '+cardId);
    // document.getElementById("div_mycard_options_"+cardId).classList.toggle("show");
    // document.getElementById("div_mycard_options").classList.toggle("show");
    document.getElementById("div_mycard_options"+cardId).style.display = "block";
}

function hide_mycard_options(cardId){
    // alert('card id: '+cardId);
    // document.getElementById("div_mycard_options_"+cardId).classList.toggle("show");
    // document.getElementById("div_mycard_options").classList.toggle("show");
    document.getElementById("div_mycard_options"+cardId).style.display = "none";
    
}


function load_messages(cardId){
    // alert('card id: '+cardId);
    $.ajax({
        url: "{{ url('mycards/messages') }}"+"/"+cardId,
        type: "get",
        data: { 
            cardid: cardId,
            _token: "{{ csrf_token() }}"
        },
        success: function(result) {
            // alert('Link added successfully');
            document.getElementById('div_messages_box').innerHTML = result;
            showhide('div_messages',['div_cards']);
        },
        error: function(xhr, status, error) {
            // Handle the error
            console.log('Error: ' + error);
        }
    });
}


function show_card_share_popup(cardid){
    // alert('card id: '+cardId);
    // document.getElementById("div_mycard_options_"+cardId).classList.toggle("show");
    // document.getElementById("div_mycard_options").classList.toggle("show");
    document.getElementById("div_card_share").style.display = "flex";
}

function show_recipient_info(cardid){
    // alert('cardid: '+cardid);
    document.getElementById("div_recipient_info").style.display = "flex";
    document.getElementById("div_mycard_options"+cardid).style.display = "none";
    document.getElementById("recipient_cardid").value = cardid;
}


function save_nclose_recipient(){
    var cardId = document.getElementById("recipient_cardid").value;
    var prefix = document.getElementById("prefix").value;
    var recipient_name = document.getElementById("recipient_name").value;
    var mobile_no = document.getElementById("mobile_no").value;

    $.ajax({
        url: "{{ url('mycards/save_recipient') }}",
        type: "get",
        data: { 
            cardid: cardId,
            prefix: prefix, 
            recipient_name: recipient_name,
            mobile_no: mobile_no,
            _token: "{{ csrf_token() }}"
        },
        success: function(result) {
            // alert('Link added successfully');
            document.getElementById('prefix').value = '';
            document.getElementById('recipient_name').value = '';
            document.getElementById('mobile_no').value = '';
            document.getElementById('div_recipient_info').style.display = "none";
        },
        error: function(xhr, status, error) {
            // Handle the error
            console.log('Error: ' + error);
        }
    });
}

function save_ncontinue_recipient(){
    var cardId = document.getElementById("recipient_cardid").value;
    var prefix = document.getElementById("prefix").value;
    var recipient_name = document.getElementById("recipient_name").value;
    var mobile_no = document.getElementById("mobile_no").value;

    $.ajax({
        url: "{{ url('mycards/save_recipient') }}",
        type: "get",
        data: { 
            cardid: cardId,
            prefix: prefix, 
            recipient_name: recipient_name,
            mobile_no: mobile_no,
            _token: "{{ csrf_token() }}"
        },
        success: function(result) {
            // alert('Link added successfully');
            document.getElementById('prefix').value = '';
            document.getElementById('recipient_name').value = '';
            document.getElementById('mobile_no').value = '';
        },
        error: function(xhr, status, error) {
            // Handle the error
            console.log('Error: ' + error);
        }
    });
}
    

</script>
@endsection

