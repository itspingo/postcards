@extends('layouts.website')
@section('content')

<section class="header-container min">
        <div class="header-wrapper">
            <div class="text ml-40">
                <h1 class="text-bold"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Digital postcard</font>
                        </font>
                    </span></h1>
                <h2 class="text-regular"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Make postcards online for any occasion</font>
                        </font>
                    </span></h2>
                <ul>
                    <li>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">- </font>
                        </font><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">A new experience of sending postcards</font>
                            </font>
                        </span>
                    </li>
                    <li>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">- </font>
                        </font><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">No postage, with a digital postcard</font>
                            </font>
                        </span>
                    </li>
                    <li>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">- </font>
                        </font><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Personalized design of postcards with the possibility of sending online</font>
                            </font>
                        </span>
                    </li>
                    <li>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">- </font>
                        </font><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">A smart alternative to traditional postcards</font>
                            </font>
                        </span>
                    </li>
                </ul>
                <a class="button primary mt-20" href="/#download"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">start</font>
                        </font>
                    </span></a>
            </div>
            <picture class="picture mr-a">
                <source srcset="{{asset('website/assets/images/digipostal-top-1x.png')}}" type="image/jpg">
                <img width="660" height="600" src="{{asset('assets/digipostal-top-1x.png')}}" srcset="{{asset('website/assets/images/digipostal-top-1x.png')}} 1x,{{asset('website/assets/images/digipostal-top-2x.png')}} 2x" alt="Digital postcard">
            </picture>
        </div>
    </section>
    <section class="how-to-container pt">

        <div class="section-title center mb-40"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">how it works</font>
                </font>
            </span></div>
        <div class="content min">

            <div class="item">
                <div class="pic">
                    <div class="circle"></div>
                    <svg class="icon" viewBox="0 0 100 100">
                        <path style="fill:none;stroke:#000;" d="M92.833 74.833H8.167V23L50.5 59.667 92.833 23zM8.167 74.833 36.25 47.25M92.833 74.833 64.667 47.25M7.682 22h85.643"></path>
                        <path style="fill:#f48fb1;stroke:#000;" d="m65.099 84.013-1.224-25.502 21.831 13.91-7.631 4.299 4.83 7.39-5.405 3.348-5.173-8.323z"></path>
                    </svg>
                </div>
                <div class="text">
                    <h3><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Choose a postcard</font>
                            </font>
                        </span></h3>
                    <h4><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Choose a postcard from a variety of designs</font>
                            </font>
                        </span></h4>
                </div>
                <svg class="arrow" width="109.993" height="20.457" viewBox="0 0 109.993 20.457">
                    <path d="M10119.557-21648.219s46.818-32.051,105.949-7.578" transform="translate(-10117.472 21666.59)" fill="none" stroke="#c9c9c9" stroke-linecap="round" stroke-width="3" stroke-dasharray="10"></path>
                </svg>
            </div>

            <div class="item">
                <div class="pic">
                    <div class="circle"></div>
                    <svg class="icon" viewBox="0 0 100 100">
                        <path style="fill:none;stroke:#000;" d="M92.167 97.833H7.5V46l42.333-35 42.334 35z"></path>
                        <path style="fill:none;stroke:#000;" d="m7.5 46 28.083 24.25H64l28.125-24.292M7.5 97.833 35.583 70.25M64 70.25l28.167 27.583"></path>
                        <path style="fill:#f48fb1;stroke:#000;" d="M94.889 37.159 49.368 2.577l-36.526 48.08 22.575 19.635L64 70.25l16.573-14.247z"></path>
                    </svg>
                </div>
                <div class="text">
                    <h3><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Personalization</font>
                            </font>
                        </span></h3>
                    <h4><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Change all the elements of the postcard in your own style</font>
                            </font>
                        </span></h4>
                </div>
                <svg class="arrow" width="109.993" height="20.443" viewBox="0 0 109.993 20.443">
                    <path d="M10119.557-21665s46.818,32.049,105.949,7.578" transform="translate(-10117.472 21667.09)" fill="none" stroke="#c9c9c9" stroke-linecap="round" stroke-width="3" stroke-dasharray="10"></path>
                </svg>
            </div>

            <div class="item">
                <div class="pic">
                    <div class="circle"></div>
                    <svg class="icon" viewBox="0 0 100 100">
                        <path style="fill:none;stroke:#000;" d="M57.671 65.311 45.188 90.625l.52-29.128 40.267-50.02 1.171 61.983L8.604 51.268 86.214 11"></path>
                        <path style="fill:#f48fb1;stroke:#000;" d="m45.491 90.17.13-28.478 12.093 3.511z"></path>
                    </svg>
                </div>
                <div class="text">
                    <h3><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Send a postcard</font>
                            </font>
                        </span></h3>
                    <h4><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Send your card through social networks, email and SMS</font>
                            </font>
                        </span></h4>
                </div>
            </div>
        </div>

    </section>
    <section class="card-container pt">
        <h2 class="section-title center mb-40">
            <a href="/category/birthday-card"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Happy birthday postcard</font>
                    </font>
                </span></a>
        </h2>
        <div class="swiper swiper-envelope swiper-initialized swiper-horizontal swiper-pointer-events swiper-free-mode swiper-rtl">
            <div class="swiper-wrapper pb-10" id="swiper-wrapper-b8dff4379f77bb41" aria-live="polite">
                <a class="card swiper-slide swiper-slide-active" href="/card/naztarin" role="group" aria-label="1/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/naztarin.jpg')}} 1x,{{asset('website/assets/images/naztarin.jpg')}} 2x,{{asset('website/assets/images/naztarin.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="Beautiful birthday text" srcset="{{asset('website/assets/images/naztarin.jpg')}} 1x,{{asset('website/assets/images/naztarin.jpg')}} 2x,{{asset('website/assets/images/naztarin.jpg')}} 3x" src="{{asset('assets/naztarin.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Beautiful birthday text</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide swiper-slide-next" href="/card/myfriend" role="group" aria-label="2/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/myfriend.jpg')}} 1x,{{asset('website/assets/images/myfriend.jpg')}} 2x,{{asset('website/assets/images/myfriend.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="Happy birthday friend gif" srcset="{{asset('website/assets/images/myfriend.jpg')}} 1x,{{asset('website/assets/images/myfriend.jpg')}} 2x,{{asset('website/assets/images/myfriend.jpg')}} 3x" src="{{asset('assets/myfriend.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Happy birthday friend gif</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/dostibirth" role="group" aria-label="3/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/dostibirth.jpg')}} 1x,{{asset('website/assets/images/dostibirth.jpg')}} 2x,{{asset('website/assets/images/dostibirth.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="Birthday greetings for a friend" srcset="{{asset('website/assets/images/dostibirth.jpg')}} 1x,{{asset('website/assets/images/dostibirth.jpg')}} 2x,{{asset('website/assets/images/dostibirth.jpg')}} 3x" src="{{asset('assets/dostibirth.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Birthday greetings for a friend</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/asemoni" role="group" aria-label="4/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/asemoni.jpg')}} 1x,{{asset('website/assets/images/asemoni.jpg')}} 2x,{{asset('website/assets/images/asemoni.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="Birth of the heavenly angel" srcset="{{asset('website/assets/images/asemoni.jpg')}} 1x,{{asset('website/assets/images/asemoni.jpg')}} 2x,{{asset('website/assets/images/asemoni.jpg')}} 3x" src="{{asset('assets/asemoni.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Birth of the heavenly angel</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/shfsjdf" role="group" aria-label="5/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/shfsjdf.jpg')}} 1x,{{asset('website/assets/images/shfsjdf.jpg')}} 2x,{{asset('website/assets/images/shfsjdf.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="happy birthday my son" srcset="{{asset('website/assets/images/shfsjdf.jpg')}} 1x,{{asset('website/assets/images/shfsjdf.jpg')}} 2x,{{asset('website/assets/images/shfsjdf.jpg')}} 3x" src="{{asset('assets/shfsjdf.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">happy birthday my son</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/ordi1403" role="group" aria-label="6/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/ordi1403.jpg')}} 1x,{{asset('website/assets/images/ordi1403.jpg')}} 2x,{{asset('website/assets/images/ordi1403.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="May 1403 birthday greetings calendar" srcset="{{asset('website/assets/images/ordi1403.jpg')}} 1x,{{asset('website/assets/images/ordi1403.jpg')}} 2x,{{asset('website/assets/images/ordi1403.jpg')}} 3x" src="{{asset('assets/ordi1403.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">May 1403 birthday greetings calendar</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/pordi" role="group" aria-label="7/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/pordi.jpg')}} 1x,{{asset('website/assets/images/pordi.jpg')}} 2x,{{asset('website/assets/images/pordi.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="Ardibeheshti birth plate" srcset="{{asset('website/assets/images/pordi.jpg')}} 1x,{{asset('website/assets/images/pordi.jpg')}} 2x,{{asset('website/assets/images/pordi.jpg')}} 3x" src="{{asset('assets/pordi.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Ardibeheshti birth plate</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/ordibb" role="group" aria-label="8/20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/ordibb.jpg')}} 1x,{{asset('website/assets/images/ordibb.jpg')}} 2x,{{asset('website/assets/images/ordibb.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/ordibb.jpg')}}" data-srcset="{{asset('website/assets/images/ordibb.jpg')}} 1x,{{asset('website/assets/images/ordibb.jpg')}} 2x,{{asset('website/assets/images/ordibb.jpg')}} 3x" alt="April greetings online">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">April greetings online</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/farvardin1403" role="group" aria-label="9/20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/farvardin1403.jpg')}} 1x,{{asset('website/assets/images/farvardin1403.jpg')}} 2x,{{asset('website/assets/images/farvardin1403.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/farvardin1403.jpg')}}" data-srcset="{{asset('website/assets/images/farvardin1403.jpg')}} 1x,{{asset('website/assets/images/farvardin1403.jpg')}} 2x,{{asset('website/assets/images/farvardin1403.jpg')}} 3x" alt="April 1403 birthday calendar">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">April 1403 birthday calendar</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/tavalodet" role="group" aria-label="10/20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/tavalodet.jpg')}} 1x,{{asset('website/assets/images/tavalodet.jpg')}} 2x,{{asset('website/assets/images/tavalodet.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/tavalodet.jpg')}}" data-srcset="{{asset('website/assets/images/tavalodet.jpg')}} 1x,{{asset('website/assets/images/tavalodet.jpg')}} 2x,{{asset('website/assets/images/tavalodet.jpg')}} 3x" alt="happy birthday gif">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">happy birthday gif</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/daughter-image" role="group" aria-label="11/20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/daughter-image.jpg')}} 1x,{{asset('website/assets/images/daughter-image.jpg')}} 2x,{{asset('website/assets/images/daughter-image.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/daughter-image.jpg')}}" data-srcset="{{asset('website/assets/images/daughter-image.jpg')}} 1x,{{asset('website/assets/images/daughter-image.jpg')}} 2x,{{asset('website/assets/images/daughter-image.jpg')}} 3x" alt="Birthday greetings for girls with the desired photo">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Birthday greetings for girls with the desired photo</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/daughter-birthday" role="group" aria-label="12/20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/daughter-birthday.jpg')}} 1x,{{asset('website/assets/images/daughter-birthday.jpg')}} 2x,{{asset('website/assets/images/daughter-birthday.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/daughter-birthday.jpg')}}" data-srcset="{{asset('website/assets/images/daughter-birthday.jpg')}} 1x,{{asset('website/assets/images/daughter-birthday.jpg')}} 2x,{{asset('website/assets/images/daughter-birthday.jpg')}} 3x" alt="Happy birthday with my daughter&#39;s photo">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Happy birthday with my daughter's photo</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/mom-birthday" role="group" aria-label="13 / 20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/mom-birthday.jpg')}} 1x,{{asset('website/assets/images/mom-birthday.jpg')}} 2x,{{asset('website/assets/images/mom-birthday.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/mom-birthday.jpg')}}" data-srcset="{{asset('website/assets/images/mom-birthday.jpg')}} 1x,{{asset('website/assets/images/mom-birthday.jpg')}} 2x,{{asset('website/assets/images/mom-birthday.jpg')}} 3x" alt="Happy birthday from daughter to mother">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Happy birthday from daughter to mother</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/spring-child" role="group" aria-label="14 / 20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/spring-child.jpg')}} 1x,{{asset('website/assets/images/spring-child.jpg')}} 2x,{{asset('website/assets/images/spring-child.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/spring-child.jpg')}}" data-srcset="{{asset('website/assets/images/spring-child.jpg')}} 1x,{{asset('website/assets/images/spring-child.jpg')}} 2x,{{asset('website/assets/images/spring-child.jpg')}} 3x" alt="Happy birthday to the eldest son of Bahar">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Happy birthday to the eldest son of Bahar</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/javane" role="group" aria-label="15 / 20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/javane.jpg')}} 1x,{{asset('website/assets/images/javane.jpg')}} 2x,{{asset('website/assets/images/javane.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/javane.jpg')}}" data-srcset="{{asset('website/assets/images/javane.jpg')}} 1x,{{asset('website/assets/images/javane.jpg')}} 2x,{{asset('website/assets/images/javane.jpg')}} 3x" alt="Congratulations on April&#39;s birthday">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Congratulations on April's birthday</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/farvardin-birthday" role="group" aria-label="16 / 20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/farvardin-birthday.jpg')}} 1x,{{asset('website/assets/images/farvardin-birthday.jpg')}} 2x,{{asset('website/assets/images/farvardin-birthday.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/farvardin-birthday.jpg')}}" data-srcset="{{asset('website/assets/images/farvardin-birthday.jpg')}} 1x,{{asset('website/assets/images/farvardin-birthday.jpg')}} 2x,{{asset('website/assets/images/farvardin-birthday.jpg')}} 3x" alt="April&#39;s birthday">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">April's birthday</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/pfarvardin" role="group" aria-label="17 / 20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/pfarvardin.jpg')}} 1x,{{asset('website/assets/images/pfarvardin.jpg')}} 2x,{{asset('website/assets/images/pfarvardin.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/pfarvardin.jpg')}}" data-srcset="{{asset('website/assets/images/pfarvardin.jpg')}} 1x,{{asset('website/assets/images/pfarvardin.jpg')}} 2x,{{asset('website/assets/images/pfarvardin.jpg')}} 3x" alt="April son&#39;s birthday">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">April son's birthday</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/farvardin-alley" role="group" aria-label="18/20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/farvardin-alley.jpg')}} 1x,{{asset('website/assets/images/farvardin-alley.jpg')}} 2x,{{asset('website/assets/images/farvardin-alley.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/farvardin-alley.jpg')}}" data-srcset="{{asset('website/assets/images/farvardin-alley.jpg')}} 1x,{{asset('website/assets/images/farvardin-alley.jpg')}} 2x,{{asset('website/assets/images/farvardin-alley.jpg')}} 3x" alt="Farvardin&#39;s birthday plate">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Farvardin's birthday plate</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/bbahar" role="group" aria-label="19 / 20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/bbahar.jpg')}} 1x,{{asset('website/assets/images/bbahar.jpg')}} 2x,{{asset('website/assets/images/bbahar.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/bbahar.jpg')}}" data-srcset="{{asset('website/assets/images/bbahar.jpg')}} 1x,{{asset('website/assets/images/bbahar.jpg')}} 2x,{{asset('website/assets/images/bbahar.jpg')}} 3x" alt="Spring birthdays">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Spring birthdays</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/magicbirth" role="group" aria-label="20 / 20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/magicbirth.jpg')}} 1x,{{asset('website/assets/images/magicbirth.jpg')}} 2x,{{asset('website/assets/images/magicbirth.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/magicbirth.jpg')}}" data-srcset="{{asset('website/assets/images/magicbirth.jpg')}} 1x,{{asset('website/assets/images/magicbirth.jpg')}} 2x,{{asset('website/assets/images/magicbirth.jpg')}} 3x" alt="Magical birthday">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Magical birthday</font>
                            </font>
                        </span></h3>
                </a>
            </div>
            <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-b8dff4379f77bb41" aria-disabled="true"></div>
            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-b8dff4379f77bb41" aria-disabled="false"></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
        <a class="view-all" href="/category/birthday-card"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">All birthday cards</font>
                </font>
            </span><svg fill="currentColor" width="24" height="24" viewBox="0 0 24 24">
                <path d="M15.41,16.58L10.83,12L15.41,7.41L14,6L8,12L14,18L15.41,16.58Z"></path>
            </svg></a>
    </section>
    <section class="feature-container mt">

        <div class="wrapper">
            <div class="content min">
                <div class="text">
                    <h2 class="section-title mb-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Why digital postcards?</font>
                            </font>
                        </span></h2>
                    <ul>
                        <li>
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4C12.76,4 13.5,4.11 14.2,4.31L15.77,2.74C14.61,2.26 13.34,2 12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12M7.91,10.08L6.5,11.5L11,16L21,6L19.59,4.58L11,13.17L7.91,10.08Z"></path>
                            </svg>
                            <span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Your postcard will be ready quickly</font>
                                    </font>
                                </span></span>
                        </li>
                        <li>
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4C12.76,4 13.5,4.11 14.2,4.31L15.77,2.74C14.61,2.26 13.34,2 12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12M7.91,10.08L6.5,11.5L11,16L21,6L19.59,4.58L11,13.17L7.91,10.08Z"></path>
                            </svg>
                            <span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">It is easily sent via email or SMS</font>
                                    </font>
                                </span></span>
                        </li>
                        <li>
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4C12.76,4 13.5,4.11 14.2,4.31L15.77,2.74C14.61,2.26 13.34,2 12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12M7.91,10.08L6.5,11.5L11,16L21,6L19.59,4.58L11,13.17L7.91,10.08Z"></path>
                            </svg>
                            <span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">All elements of the postcard can be personalized</font>
                                    </font>
                                </span></span>
                        </li>
                        <li>
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4C12.76,4 13.5,4.11 14.2,4.31L15.77,2.74C14.61,2.26 13.34,2 12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12M7.91,10.08L6.5,11.5L11,16L21,6L19.59,4.58L11,13.17L7.91,10.08Z"></path>
                            </svg>
                            <span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Postcards are optimized and displayed quickly</font>
                                    </font>
                                </span></span>
                        </li>
                    </ul>
                </div>

                <div class="picture mr-a">
                    <div class="item small">
                        <svg viewBox="0 0 24 24">
                            <path fill="currentColor" d="M20.39,19.37L16.38,18L15,22L11.92,16L9,22L7.62,18L3.61,19.37L6.53,13.37C5.57,12.17 5,10.65 5,9A7,7 0 0,1 12,2A7,7 0 0,1 19,9C19,10.65 18.43,12.17 17.47,13.37L20.39,19.37M7,9L9.69,10.34L9.5,13.34L12,11.68L14.5,13.33L14.33,10.34L17,9L14.32,7.65L14.5,4.67L12,6.31L9.5,4.65L9.67,7.66L7,9Z">
                            </path>
                        </svg>
                    </div>
                    <div class="item large">
                        <svg viewBox="0 0 24 24">
                            <path fill="currentColor" d="M14.53 1.45L13.45 2.53L15.05 4.13C15.27 4.38 15.38 4.67 15.38 5S15.27 5.64 15.05 5.86L11.5 9.47L12.5 10.55L16.13 6.94C16.66 6.35 16.92 5.7 16.92 5C16.92 4.3 16.66 3.64 16.13 3.05L14.53 1.45M10.55 3.47L9.47 4.55L10.08 5.11C10.3 5.33 10.41 5.63 10.41 6S10.3 6.67 10.08 6.89L9.47 7.45L10.55 8.53L11.11 7.92C11.64 7.33 11.91 6.69 11.91 6C11.91 5.28 11.64 4.63 11.11 4.03L10.55 3.47M21 5.06C20.31 5.06 19.67 5.33 19.08 5.86L13.45 11.5L14.53 12.5L20.11 6.94C20.36 6.69 20.66 6.56 21 6.56S21.64 6.69 21.89 6.94L22.5 7.55L23.53 6.47L22.97 5.86C22.38 5.33 21.72 5.06 21 5.06M7 8L2 22L16 17L7 8M19 11.06C18.3 11.06 17.66 11.33 17.06 11.86L15.47 13.45L16.55 14.53L18.14 12.94C18.39 12.69 18.67 12.56 19 12.56C19.33 12.56 19.63 12.69 19.88 12.94L21.5 14.53L22.55 13.5L20.95 11.86C20.36 11.33 19.7 11.06 19 11.06Z"></path>
                        </svg>
                        <span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Animated effect</font>
                                </font>
                            </span></span>
                    </div>
                    <div class="item medium">
                        <svg viewBox="0 0 24 24">
                            <path fill="currentColor" d="M2,2V5.5C3.1,5.5 4,6.62 4,8C4,9.38 3.1,10.5 2,10.5V13.5C3.1,13.5 4,14.62 4,16C4,17.38 3.1,18.5 2,18.5V22H5.5C5.5,20.9 6.62,20 8,20C9.38,20 10.5,20.9 10.5,22H13.5C13.5,20.9 14.62,20 16,20C17.38,20 18.5,20.9 18.5,22H22V18.5C20.9,18.5 20,17.38 20,16V16C20,14.62 20.9,13.5 22,13.5V10.5C20.9,10.5 20,9.38 20,8V8C20,6.62 20.9,5.5 22,5.5V2H18.5C18.5,3.1 17.38,4 16,4C14.62,4 13.5,3.1 13.5,2H10.5C10.5,3.1 9.38,4 8,4C6.62,4 5.5,3.1 5.5,2H2M6,6H18V18H6V6M9,7A2,2 0 0,0 7,9A2,2 0 0,0 9,11A2,2 0 0,0 11,9A2,2 0 0,0 9,7M17,10L14,13L12,12L7,17H17V10Z">
                            </path>
                        </svg>
                        <span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">stamp</font>
                                </font>
                            </span></span>
                    </div>
                    <span class="flex-break"></span>
                    <div class="item small">
                        <svg viewBox="0 0 24 24">
                            <path fill="currentColor" d="M16.84,2.73C16.45,2.73 16.07,2.88 15.77,3.17L13.65,5.29L18.95,10.6L21.07,8.5C21.67,7.89 21.67,6.94 21.07,6.36L17.9,3.17C17.6,2.88 17.22,2.73 16.84,2.73M12.94,6L4.84,14.11L7.4,14.39L7.58,16.68L9.86,16.85L10.15,19.41L18.25,11.3M4.25,15.04L2.5,21.73L9.2,19.94L8.96,17.78L6.65,17.61L6.47,15.29">
                            </path>
                        </svg>
                    </div>
                    <div class="item large">
                        <svg viewBox="0 0 24 24">
                            <path fill="currentColor" d="M4,8L12,13L20,8V8L12,3L4,8V8M22,8V18A2,2 0 0,1 20,20H4A2,2 0 0,1 2,18V8C2,7.27 2.39,6.64 2.97,6.29L12,0.64L21.03,6.29C21.61,6.64 22,7.27 22,8Z">
                            </path>
                        </svg>
                        <span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Envelope design</font>
                                </font>
                            </span></span>
                    </div>
                    <div class="item small">
                        <svg fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19,19H5V5H19M19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M13.96,12.29L11.21,15.83L9.25,13.47L6.5,17H17.5L13.96,12.29Z">
                            </path>
                        </svg>
                    </div>
                    <div class="item medium">
                        <svg viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12 3V13.55C11.41 13.21 10.73 13 10 13C7.79 13 6 14.79 6 17S7.79 21 10 21 14 19.21 14 17V7H18V3H12Z">
                            </path>
                        </svg>
                        <span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Music</font>
                                </font>
                            </span></span>
                    </div>
                    <div class="item small">
                        <svg viewBox="0 0 24 24">
                            <path fill="currentColor" d="M19,19H5V5H19M19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M10,8V16L15,12L10,8Z">
                            </path>
                        </svg>
                    </div>
                    <span class="flex-break"></span>
                    <div class="item medium">
                        <svg viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10.59,13.41C11,13.8 11,14.44 10.59,14.83C10.2,15.22 9.56,15.22 9.17,14.83C7.22,12.88 7.22,9.71 9.17,7.76V7.76L12.71,4.22C14.66,2.27 17.83,2.27 19.78,4.22C21.73,6.17 21.73,9.34 19.78,11.29L18.29,12.78C18.3,11.96 18.17,11.14 17.89,10.36L18.36,9.88C19.54,8.71 19.54,6.81 18.36,5.64C17.19,4.46 15.29,4.46 14.12,5.64L10.59,9.17C9.41,10.34 9.41,12.24 10.59,13.41M13.41,9.17C13.8,8.78 14.44,8.78 14.83,9.17C16.78,11.12 16.78,14.29 14.83,16.24V16.24L11.29,19.78C9.34,21.73 6.17,21.73 4.22,19.78C2.27,17.83 2.27,14.66 4.22,12.71L5.71,11.22C5.7,12.04 5.83,12.86 6.11,13.65L5.64,14.12C4.46,15.29 4.46,17.19 5.64,18.36C6.81,19.54 8.71,19.54 9.88,18.36L13.41,14.83C14.59,13.66 14.59,11.76 13.41,10.59C13,10.2 13,9.56 13.41,9.17Z">
                            </path>
                        </svg>
                        <span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">link</font>
                                </font>
                            </span></span>
                    </div>
                    <div class="item large">
                        <svg viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z">
                            </path>
                        </svg>
                        <span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">location</font>
                                </font>
                            </span></span>
                    </div>
                    <div class="item small">
                        <svg viewBox="0 0 24 24">
                            <path fill="currentColor" d="M17.5,12A1.5,1.5 0 0,1 16,10.5A1.5,1.5 0 0,1 17.5,9A1.5,1.5 0 0,1 19,10.5A1.5,1.5 0 0,1 17.5,12M14.5,8A1.5,1.5 0 0,1 13,6.5A1.5,1.5 0 0,1 14.5,5A1.5,1.5 0 0,1 16,6.5A1.5,1.5 0 0,1 14.5,8M9.5,8A1.5,1.5 0 0,1 8,6.5A1.5,1.5 0 0,1 9.5,5A1.5,1.5 0 0,1 11,6.5A1.5,1.5 0 0,1 9.5,8M6.5,12A1.5,1.5 0 0,1 5,10.5A1.5,1.5 0 0,1 6.5,9A1.5,1.5 0 0,1 8,10.5A1.5,1.5 0 0,1 6.5,12M12,3A9,9 0 0,0 3,12A9,9 0 0,0 12,21A1.5,1.5 0 0,0 13.5,19.5C13.5,19.11 13.35,18.76 13.11,18.5C12.88,18.23 12.73,17.88 12.73,17.5A1.5,1.5 0 0,1 14.23,16H16A5,5 0 0,0 21,11C21,6.58 16.97,3 12,3Z">
                            </path>
                        </svg>
                    </div>
                    <div class="item large">
                        <svg viewBox="0 0 24 24">
                            <path fill="currentColor" d="M4,4H20A2,2 0 0,1 22,6V18A2,2 0 0,1 20,20H4A2,2 0 0,1 2,18V6A2,2 0 0,1 4,4M4,6V18H11V6H4M20,18V6H18.76C19,6.54 18.95,7.07 18.95,7.13C18.88,7.8 18.41,8.5 18.24,8.75L15.91,11.3L19.23,11.28L19.24,12.5L14.04,12.47L14,11.47C14,11.47 17.05,8.24 17.2,7.95C17.34,7.67 17.91,6 16.5,6C15.27,6.05 15.41,7.3 15.41,7.3L13.87,7.31C13.87,7.31 13.88,6.65 14.25,6H13V18H15.58L15.57,17.14L16.54,17.13C16.54,17.13 17.45,16.97 17.46,16.08C17.5,15.08 16.65,15.08 16.5,15.08C16.37,15.08 15.43,15.13 15.43,15.95H13.91C13.91,15.95 13.95,13.89 16.5,13.89C19.1,13.89 18.96,15.91 18.96,15.91C18.96,15.91 19,17.16 17.85,17.63L18.37,18H20M8.92,16H7.42V10.2L5.62,10.76V9.53L8.76,8.41H8.92V16Z">
                            </path>
                        </svg>
                        <span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Counter</font>
                                </font>
                            </span></span>
                    </div>

                    <span class="flex-break"></span>
                    <div class="item large">
                        <svg viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12,5.5A3.5,3.5 0 0,1 15.5,9A3.5,3.5 0 0,1 12,12.5A3.5,3.5 0 0,1 8.5,9A3.5,3.5 0 0,1 12,5.5M5,8C5.56,8 6.08,8.15 6.53,8.42C6.38,9.85 6.8,11.27 7.66,12.38C7.16,13.34 6.16,14 5,14A3,3 0 0,1 2,11A3,3 0 0,1 5,8M19,8A3,3 0 0,1 22,11A3,3 0 0,1 19,14C17.84,14 16.84,13.34 16.34,12.38C17.2,11.27 17.62,9.85 17.47,8.42C17.92,8.15 18.44,8 19,8M5.5,18.25C5.5,16.18 8.41,14.5 12,14.5C15.59,14.5 18.5,16.18 18.5,18.25V20H5.5V18.25M0,20V18.5C0,17.11 1.89,15.94 4.45,15.6C3.86,16.28 3.5,17.22 3.5,18.25V20H0M24,20H20.5V18.25C20.5,17.22 20.14,16.28 19.55,15.6C22.11,15.94 24,17.11 24,18.5V20Z">
                            </path>
                        </svg>
                        <span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Group send</font>
                                </font>
                            </span></span>
                    </div>
                    <div class="item small">
                        <svg viewBox="0 0 24 24">
                            <path fill="currentColor" d="M20,2H4A2,2 0 0,0 2,4V22L6,18H20A2,2 0 0,0 22,16V4A2,2 0 0,0 20,2M6,9H18V11H6M14,14H6V12H14M18,8H6V6H18">
                            </path>
                        </svg>
                    </div>
                    <div class="item large">
                        <svg viewBox="0 0 24 24">
                            <path fill="currentColor" d="M13 19C13 15.69 15.69 13 19 13C20.1 13 21.12 13.3 22 13.81V6C22 4.89 21.1 4 20 4H4C2.89 4 2 4.89 2 6V18C2 19.11 2.9 20 4 20H13.09C13.04 19.67 13 19.34 13 19M4 8V6L12 11L20 6V8L12 13L4 8M17.75 22.16L15 19.16L16.16 18L17.75 19.59L21.34 16L22.5 17.41L17.75 22.16">
                            </path>
                        </svg>
                        <span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Check in</font>
                                </font>
                            </span></span>
                    </div>
                    <span class="flex-break"></span>
                    <div class="item small">
                        <svg viewBox="0 0 24 24">
                            <path fill="currentColor" d="M18,16.08C17.24,16.08 16.56,16.38 16.04,16.85L8.91,12.7C8.96,12.47 9,12.24 9,12C9,11.76 8.96,11.53 8.91,11.3L15.96,7.19C16.5,7.69 17.21,8 18,8A3,3 0 0,0 21,5A3,3 0 0,0 18,2A3,3 0 0,0 15,5C15,5.24 15.04,5.47 15.09,5.7L8.04,9.81C7.5,9.31 6.79,9 6,9A3,3 0 0,0 3,12A3,3 0 0,0 6,15C6.79,15 7.5,14.69 8.04,14.19L15.16,18.34C15.11,18.55 15.08,18.77 15.08,19C15.08,20.61 16.39,21.91 18,21.91C19.61,21.91 20.92,20.61 20.92,19A2.92,2.92 0 0,0 18,16.08Z">
                            </path>
                        </svg>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <section class="card-container pt">
        <h2 class="section-title center mb-40">
            <a href="/category/wedding-invitation"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">wedding invitation card</font>
                    </font>
                </span></a>
        </h2>
        <div class="swiper swiper-envelope swiper-initialized swiper-horizontal swiper-pointer-events swiper-free-mode swiper-rtl">
            <div class="swiper-wrapper pb-10" id="swiper-wrapper-f07832b4d9231ba1" aria-live="polite">
                <a class="card swiper-slide swiper-slide-active" href="/card/wedding-celebration" role="group" aria-label="1/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/wedding-celebration.jpg')}} 1x,{{asset('website/assets/images/wedding-celebration.jpg')}} 2x,{{asset('website/assets/images/wedding-celebration.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="Online wedding invitation" srcset="{{asset('website/assets/images/wedding-celebration.jpg')}} 1x,{{asset('website/assets/images/wedding-celebration.jpg')}} 2x,{{asset('website/assets/images/wedding-celebration.jpg')}} 3x" src="{{asset('assets/wedding-celebration.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Online wedding invitation</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide swiper-slide-next" href="/card/invitation" role="group" aria-label="2/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/invitation.jpg')}} 1x,{{asset('website/assets/images/invitation.jpg')}} 2x,{{asset('website/assets/images/invitation.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="Minimal wedding invitation card" srcset="{{asset('website/assets/images/invitation.jpg')}} 1x,{{asset('website/assets/images/invitation.jpg')}} 2x,{{asset('website/assets/images/invitation.jpg')}} 3x" src="{{asset('assets/invitation.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Minimal wedding invitation card</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/marriage-step" role="group" aria-label="3/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/marriage-step.jpg')}} 1x,{{asset('website/assets/images/marriage-step.jpg')}} 2x,{{asset('website/assets/images/marriage-step.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="Stages of acquaintance to marriage" srcset="{{asset('website/assets/images/marriage-step.jpg')}} 1x,{{asset('website/assets/images/marriage-step.jpg')}} 2x,{{asset('website/assets/images/marriage-step.jpg')}} 3x" src="{{asset('assets/marriage-step.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Stages of acquaintance to marriage</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/english-invitation" role="group" aria-label="4/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/english-invitation.jpg')}} 1x,{{asset('website/assets/images/english-invitation.jpg')}} 2x,{{asset('website/assets/images/english-invitation.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="English digital invitation card" srcset="{{asset('website/assets/images/english-invitation.jpg')}} 1x,{{asset('website/assets/images/english-invitation.jpg')}} 2x,{{asset('website/assets/images/english-invitation.jpg')}} 3x" src="{{asset('assets/english-invitation.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">English digital invitation card</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/green-invitation" role="group" aria-label="5/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/green-invitation.jpg')}} 1x,{{asset('website/assets/images/green-invitation.jpg')}} 2x,{{asset('website/assets/images/green-invitation.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="Green and gold wedding card" srcset="{{asset('website/assets/images/green-invitation.jpg')}} 1x,{{asset('website/assets/images/green-invitation.jpg')}} 2x,{{asset('website/assets/images/green-invitation.jpg')}} 3x" src="{{asset('assets/green-invitation.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Green and gold wedding card</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/beautiful-invit" role="group" aria-label="6/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/beautiful-invit.jpg')}} 1x,{{asset('website/assets/images/beautiful-invit.jpg')}} 2x,{{asset('website/assets/images/beautiful-invit.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="Attractive and stylish wedding invitation" srcset="{{asset('website/assets/images/beautiful-invit.jpg')}} 1x,{{asset('website/assets/images/beautiful-invit.jpg')}} 2x,{{asset('website/assets/images/beautiful-invit.jpg')}} 3x" src="{{asset('assets/beautiful-invit.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Attractive and stylish wedding invitation</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/green-wedding" role="group" aria-label="7/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/green-wedding.jpg')}} 1x,{{asset('website/assets/images/green-wedding.jpg')}} 2x,{{asset('website/assets/images/green-wedding.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="Green leaf wedding card" srcset="{{asset('website/assets/images/green-wedding.jpg')}} 1x,{{asset('website/assets/images/green-wedding.jpg')}} 2x,{{asset('website/assets/images/green-wedding.jpg')}} 3x" src="{{asset('assets/green-wedding.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Green leaf wedding card</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/invitation-photo" role="group" aria-label="8/20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/invitation-photo.jpg')}} 1x,{{asset('website/assets/images/invitation-photo.jpg')}} 2x,{{asset('website/assets/images/invitation-photo.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/invitation-photo.jpg')}}" data-srcset="{{asset('website/assets/images/invitation-photo.jpg')}} 1x,{{asset('website/assets/images/invitation-photo.jpg')}} 2x,{{asset('website/assets/images/invitation-photo.jpg')}} 3x" alt="Wedding invitation with desired photo">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Wedding invitation with desired photo</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/modern-invitation" role="group" aria-label="9/20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/modern-invitation.jpg')}} 1x,{{asset('website/assets/images/modern-invitation.jpg')}} 2x,{{asset('website/assets/images/modern-invitation.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/modern-invitation.jpg')}}" data-srcset="{{asset('website/assets/images/modern-invitation.jpg')}} 1x,{{asset('website/assets/images/modern-invitation.jpg')}} 2x,{{asset('website/assets/images/modern-invitation.jpg')}} 3x" alt="Stylish and modern wedding card">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Stylish and modern wedding card</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/wedding-location" role="group" aria-label="10/20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/wedding-location.jpg')}} 1x,{{asset('website/assets/images/wedding-location.jpg')}} 2x,{{asset('website/assets/images/wedding-location.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/wedding-location.jpg')}}" data-srcset="{{asset('website/assets/images/wedding-location.jpg')}} 1x,{{asset('website/assets/images/wedding-location.jpg')}} 2x,{{asset('website/assets/images/wedding-location.jpg')}} 3x" alt="Digital wedding card with location">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Digital wedding card with location</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/free-invitation" role="group" aria-label="11/20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/free-invitation.jpg')}} 1x,{{asset('website/assets/images/free-invitation.jpg')}} 2x,{{asset('website/assets/images/free-invitation.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/free-invitation.jpg')}}" data-srcset="{{asset('website/assets/images/free-invitation.jpg')}} 1x,{{asset('website/assets/images/free-invitation.jpg')}} 2x,{{asset('website/assets/images/free-invitation.jpg')}} 3x" alt="Free wedding card">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Free wedding card</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/golden-invitation" role="group" aria-label="12/20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/golden-invitation.jpg')}} 1x,{{asset('website/assets/images/golden-invitation.jpg')}} 2x,{{asset('website/assets/images/golden-invitation.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/golden-invitation.jpg')}}" data-srcset="{{asset('website/assets/images/golden-invitation.jpg')}} 1x,{{asset('website/assets/images/golden-invitation.jpg')}} 2x,{{asset('website/assets/images/golden-invitation.jpg')}} 3x" alt="Golden digital invitation card">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Golden digital invitation card</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/frame-wedding" role="group" aria-label="13 / 20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/frame-wedding.jpg')}} 1x,{{asset('website/assets/images/frame-wedding.jpg')}} 2x,{{asset('website/assets/images/frame-wedding.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/frame-wedding.jpg')}}" data-srcset="{{asset('website/assets/images/frame-wedding.jpg')}} 1x,{{asset('website/assets/images/frame-wedding.jpg')}} 2x,{{asset('website/assets/images/frame-wedding.jpg')}} 3x" alt="Special and beautiful wedding invitation">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Special and beautiful wedding invitation</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/wedding-new" role="group" aria-label="14 / 20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/wedding-new.jpg')}} 1x,{{asset('website/assets/images/wedding-new.jpg')}} 2x,{{asset('website/assets/images/wedding-new.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/wedding-new.jpg')}}" data-srcset="{{asset('website/assets/images/wedding-new.jpg')}} 1x,{{asset('website/assets/images/wedding-new.jpg')}} 2x,{{asset('website/assets/images/wedding-new.jpg')}} 3x" alt="New generation wedding invitation">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">New generation wedding invitation</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/wedding-free" role="group" aria-label="15 / 20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/wedding-free.jpg')}} 1x,{{asset('website/assets/images/wedding-free.jpg')}} 2x,{{asset('website/assets/images/wedding-free.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/wedding-free.jpg')}}" data-srcset="{{asset('website/assets/images/wedding-free.jpg')}} 1x,{{asset('website/assets/images/wedding-free.jpg')}} 2x,{{asset('website/assets/images/wedding-free.jpg')}} 3x" alt="Layered wedding invitation">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Layered wedding invitation</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/smart-wedding-invit" role="group" aria-label="16 / 20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/smart-wedding-invit.jpg')}} 1x,{{asset('website/assets/images/smart-wedding-invit.jpg')}} 2x,{{asset('website/assets/images/smart-wedding-invit.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/smart-wedding-invit.jpg')}}" data-srcset="{{asset('website/assets/images/smart-wedding-invit.jpg')}} 1x,{{asset('website/assets/images/smart-wedding-invit.jpg')}} 2x,{{asset('website/assets/images/smart-wedding-invit.jpg')}} 3x" alt="Smart wedding card">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Smart wedding card</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/modern-wedding" role="group" aria-label="17 / 20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/modern-wedding.jpg')}} 1x,{{asset('website/assets/images/modern-wedding.jpg')}} 2x,{{asset('website/assets/images/modern-wedding.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/modern-wedding.jpg')}}" data-srcset="{{asset('website/assets/images/modern-wedding.jpg')}} 1x,{{asset('website/assets/images/modern-wedding.jpg')}} 2x,{{asset('website/assets/images/modern-wedding.jpg')}} 3x" alt="Wedding invitation with your photo">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Wedding invitation with your photo</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/en-invitation" role="group" aria-label="18/20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/en-invitation.jpg')}} 1x,{{asset('website/assets/images/en-invitation.jpg')}} 2x,{{asset('website/assets/images/en-invitation.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/en-invitation.jpg')}}" data-srcset="{{asset('website/assets/images/en-invitation.jpg')}} 1x,{{asset('website/assets/images/en-invitation.jpg')}} 2x,{{asset('website/assets/images/en-invitation.jpg')}} 3x" alt="English wedding invitation">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">English wedding invitation</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/online-wcard" role="group" aria-label="19 / 20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/online-wcard.jpg')}} 1x,{{asset('website/assets/images/online-wcard.jpg')}} 2x,{{asset('website/assets/images/online-wcard.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/online-wcard.jpg')}}" data-srcset="{{asset('website/assets/images/online-wcard.jpg')}} 1x,{{asset('website/assets/images/online-wcard.jpg')}} 2x,{{asset('website/assets/images/online-wcard.jpg')}} 3x" alt="Online wedding card">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Online wedding card</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/wedding-inv" role="group" aria-label="20 / 20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/wedding-inv.jpg')}} 1x,{{asset('website/assets/images/wedding-inv.jpg')}} 2x,{{asset('website/assets/images/wedding-inv.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/wedding-inv.jpg')}}" data-srcset="{{asset('website/assets/images/wedding-inv.jpg')}} 1x,{{asset('website/assets/images/wedding-inv.jpg')}} 2x,{{asset('website/assets/images/wedding-inv.jpg')}} 3x" alt="Online wedding invitation">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Online wedding invitation</font>
                            </font>
                        </span></h3>
                </a>
            </div>
            <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-f07832b4d9231ba1" aria-disabled="true"></div>
            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-f07832b4d9231ba1" aria-disabled="false"></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
        <a class="view-all" href="/category/wedding-invitation"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">All wedding invitation cards</font>
                </font>
            </span><svg fill="currentColor" width="24" height="24" viewBox="0 0 24 24">
                <path d="M15.41,16.58L10.83,12L15.41,7.41L14,6L8,12L14,18L15.41,16.58Z"></path>
            </svg></a>
    </section>
    <section class="text-pic-container pt min">
        <div class="wrapper">
            <picture class="picture ml-a">
                <source srcset="{{asset('website/assets/images/invition-1x.png')}} 1x,{{asset('website/assets/images/invition-2x.jpg')}} 2x" type="image/webp">
                <img width="512" height="490" src="{{asset('assets/invition-1x.png')}}" srcset="{{asset('website/assets/images/invition-1x.png')}} 1x,{{asset('website/assets/images/invition-2x.png')}} 2x" alt="Digital postcard">
            </picture>
            <div class="text mr-40">
                <h2 class="section-title mb-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Digital invitation card</font>
                        </font>
                    </span></h2>
                <ul>
                    <li>
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4C12.76,4 13.5,4.11 14.2,4.31L15.77,2.74C14.61,2.26 13.34,2 12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12M7.91,10.08L6.5,11.5L11,16L21,6L19.59,4.58L11,13.17L7.91,10.08Z"></path>
                        </svg>
                        <span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Design with your own taste or use existing designs</font>
                                </font>
                            </span></span>
                    </li>
                    <li>
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4C12.76,4 13.5,4.11 14.2,4.31L15.77,2.74C14.61,2.26 13.34,2 12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12M7.91,10.08L6.5,11.5L11,16L21,6L19.59,4.58L11,13.17L7.91,10.08Z"></path>
                        </svg>
                        <span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Add location with routing</font>
                                </font>
                            </span></span>
                    </li>
                    <li>
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4C12.76,4 13.5,4.11 14.2,4.31L15.77,2.74C14.61,2.26 13.34,2 12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12M7.91,10.08L6.5,11.5L11,16L21,6L19.59,4.58L11,13.17L7.91,10.08Z"></path>
                        </svg>
                        <span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Countdown for invitation card</font>
                                </font>
                            </span></span>
                    </li>
                    <li>
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4C12.76,4 13.5,4.11 14.2,4.31L15.77,2.74C14.61,2.26 13.34,2 12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12M7.91,10.08L6.5,11.5L11,16L21,6L19.59,4.58L11,13.17L7.91,10.08Z"></path>
                        </svg>
                        <span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Placing links and communication channels</font>
                                </font>
                            </span></span>
                    </li>
                    <li>
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4C12.76,4 13.5,4.11 14.2,4.31L15.77,2.74C14.61,2.26 13.34,2 12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12M7.91,10.08L6.5,11.5L11,16L21,6L19.59,4.58L11,13.17L7.91,10.08Z"></path>
                        </svg>
                        <span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">The possibility of adding a button to send SMS and WhatsApp</font>
                                </font>
                            </span></span>
                    </li>
                    <li>
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4C12.76,4 13.5,4.11 14.2,4.31L15.77,2.74C14.61,2.26 13.34,2 12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12M7.91,10.08L6.5,11.5L11,16L21,6L19.59,4.58L11,13.17L7.91,10.08Z"></path>
                        </svg>
                        <span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">The ability to put the name of each recipient on the envelope</font>
                                </font>
                            </span></span>
                    </li>
                    <li>
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4C12.76,4 13.5,4.11 14.2,4.31L15.77,2.74C14.61,2.26 13.34,2 12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12M7.91,10.08L6.5,11.5L11,16L21,6L19.59,4.58L11,13.17L7.91,10.08Z"></path>
                        </svg>
                        <span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Announcing the presence or absence of the guest</font>
                                </font>
                            </span></span>
                    </li>
                </ul>
                <a class="button primary mt-20 mb-40" href="/#download"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">start</font>
                        </font>
                    </span></a>
            </div>
        </div>
    </section>
    <section class="card-container pt">
        <h2 class="section-title center mb-40">
            <a href="/category/birthday-invitation"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Birthday Invitation Card</font>
                    </font>
                </span></a>
        </h2>
        <div class="swiper swiper-envelope swiper-initialized swiper-horizontal swiper-pointer-events swiper-free-mode swiper-rtl">
            <div class="swiper-wrapper pb-10" id="swiper-wrapper-75783ba10413e0eec" aria-live="polite">
                <a class="card swiper-slide swiper-slide-active" href="/card/green-invite" role="group" aria-label="1/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/green-invite.jpg')}} 1x,{{asset('website/assets/images/green-invite.jpg')}} 2x,{{asset('website/assets/images/green-invite.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="Birthday invitation with green theme" srcset="{{asset('website/assets/images/green-invite.jpg')}} 1x,{{asset('website/assets/images/green-invite.jpg')}} 2x,{{asset('website/assets/images/green-invite.jpg')}} 3x" src="{{asset('assets/green-invite.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Birthday invitation with green theme</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide swiper-slide-next" href="/card/unicorn" role="group" aria-label="2/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/unicorn.jpg')}} 1x,{{asset('website/assets/images/unicorn.jpg')}} 2x,{{asset('website/assets/images/unicorn.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="Unicorn themed birthday invitation for girls" srcset="{{asset('website/assets/images/unicorn.jpg')}} 1x,{{asset('website/assets/images/unicorn.jpg')}} 2x,{{asset('website/assets/images/unicorn.jpg')}} 3x" src="{{asset('assets/unicorn.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Unicorn themed birthday invitation for girls</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/astronautics" role="group" aria-label="3/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/astronautics.jpg')}} 1x,{{asset('website/assets/images/astronautics.jpg')}} 2x,{{asset('website/assets/images/astronautics.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="Astronaut theme birthday invitation" srcset="{{asset('website/assets/images/astronautics.jpg')}} 1x,{{asset('website/assets/images/astronautics.jpg')}} 2x,{{asset('website/assets/images/astronautics.jpg')}} 3x" src="{{asset('assets/astronautics.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Astronaut theme birthday invitation</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/theme-foods" role="group" aria-label="4/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/theme-foods.jpg')}} 1x,{{asset('website/assets/images/theme-foods.jpg')}} 2x,{{asset('website/assets/images/theme-foods.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="Food theme birthday invitation" srcset="{{asset('website/assets/images/theme-foods.jpg')}} 1x,{{asset('website/assets/images/theme-foods.jpg')}} 2x,{{asset('website/assets/images/theme-foods.jpg')}} 3x" src="{{asset('assets/theme-foods.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Food theme birthday invitation</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/theme-balonss" role="group" aria-label="5/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/theme-balonss.jpg')}} 1x,{{asset('website/assets/images/theme-balonss.jpg')}} 2x,{{asset('website/assets/images/theme-balonss.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="Balloon theme birthday invitation for girls" srcset="{{asset('website/assets/images/theme-balonss.jpg')}} 1x,{{asset('website/assets/images/theme-balonss.jpg')}} 2x,{{asset('website/assets/images/theme-balonss.jpg')}} 3x" src="{{asset('assets/theme-balonss.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Balloon theme birthday invitation for girls</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/flowerbirth" role="group" aria-label="6/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/flowerbirth.jpg')}} 1x,{{asset('website/assets/images/flowerbirth.jpg')}} 2x,{{asset('website/assets/images/flowerbirth.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="Girl&#39;s birthday invitation with flower theme" srcset="{{asset('website/assets/images/flowerbirth.jpg')}} 1x,{{asset('website/assets/images/flowerbirth.jpg')}} 2x,{{asset('website/assets/images/flowerbirth.jpg')}} 3x" src="{{asset('assets/flowerbirth.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Girl's birthday invitation with flower theme</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/babyimage" role="group" aria-label="7/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/babyimage.jpg')}} 1x,{{asset('website/assets/images/babyimage.jpg')}} 2x,{{asset('website/assets/images/babyimage.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="Children&#39;s birthday invitation with photo" srcset="{{asset('website/assets/images/babyimage.jpg')}} 1x,{{asset('website/assets/images/babyimage.jpg')}} 2x,{{asset('website/assets/images/babyimage.jpg')}} 3x" src="{{asset('assets/babyimage.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Children's birthday invitation with photo</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/birthdayimg" role="group" aria-label="8/20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/birthdayimg.jpg')}} 1x,{{asset('website/assets/images/birthdayimg.jpg')}} 2x,{{asset('website/assets/images/birthdayimg.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/birthdayimg.jpg')}}" data-srcset="{{asset('website/assets/images/birthdayimg.jpg')}} 1x,{{asset('website/assets/images/birthdayimg.jpg')}} 2x,{{asset('website/assets/images/birthdayimg.jpg')}} 3x" alt="Birthday invitation with photo">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Birthday invitation with photo</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/unicorns-theme" role="group" aria-label="9/20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/unicorns-theme.jpg')}} 1x,{{asset('website/assets/images/unicorns-theme.jpg')}} 2x,{{asset('website/assets/images/unicorns-theme.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/unicorns-theme.jpg')}}" data-srcset="{{asset('website/assets/images/unicorns-theme.jpg')}} 1x,{{asset('website/assets/images/unicorns-theme.jpg')}} 2x,{{asset('website/assets/images/unicorns-theme.jpg')}} 3x" alt="Unicorn theme birthday invitation">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Unicorn theme birthday invitation</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/theme-princess" role="group" aria-label="10/20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/theme-princess.jpg')}} 1x,{{asset('website/assets/images/theme-princess.jpg')}} 2x,{{asset('website/assets/images/theme-princess.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/theme-princess.jpg')}}" data-srcset="{{asset('website/assets/images/theme-princess.jpg')}} 1x,{{asset('website/assets/images/theme-princess.jpg')}} 2x,{{asset('website/assets/images/theme-princess.jpg')}} 3x" alt="Princess theme birthday invitation">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Princess theme birthday invitation</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/invitation-card" role="group" aria-label="11/20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/invitation-card.jpg')}} 1x,{{asset('website/assets/images/invitation-card.jpg')}} 2x,{{asset('website/assets/images/invitation-card.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/invitation-card.jpg')}}" data-srcset="{{asset('website/assets/images/invitation-card.jpg')}} 1x,{{asset('website/assets/images/invitation-card.jpg')}} 2x,{{asset('website/assets/images/invitation-card.jpg')}} 3x" alt="Electronic invitation card">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Electronic invitation card</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/purple-pink" role="group" aria-label="12/20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/purple-pink.jpg')}} 1x,{{asset('website/assets/images/purple-pink.jpg')}} 2x,{{asset('website/assets/images/purple-pink.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/purple-pink.jpg')}}" data-srcset="{{asset('website/assets/images/purple-pink.jpg')}} 1x,{{asset('website/assets/images/purple-pink.jpg')}} 2x,{{asset('website/assets/images/purple-pink.jpg')}} 3x" alt="Pink theme birthday invitation for girls">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Pink theme birthday invitation for girls</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/theme-scobido" role="group" aria-label="13 / 20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/theme-scobido.jpg')}} 1x,{{asset('website/assets/images/theme-scobido.jpg')}} 2x,{{asset('website/assets/images/theme-scobido.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/theme-scobido.jpg')}}" data-srcset="{{asset('website/assets/images/theme-scobido.jpg')}} 1x,{{asset('website/assets/images/theme-scobido.jpg')}} 2x,{{asset('website/assets/images/theme-scobido.jpg')}} 3x" alt="Invitation with Scobido theme">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Invitation with Scobido theme</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/spiderman-birth" role="group" aria-label="14 / 20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/spiderman-birth.jpg')}} 1x,{{asset('website/assets/images/spiderman-birth.jpg')}} 2x,{{asset('website/assets/images/spiderman-birth.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/spiderman-birth.jpg')}}" data-srcset="{{asset('website/assets/images/spiderman-birth.jpg')}} 1x,{{asset('website/assets/images/spiderman-birth.jpg')}} 2x,{{asset('website/assets/images/spiderman-birth.jpg')}} 3x" alt="Spiderman birthday themed invitation">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Spiderman birthday themed invitation</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/ladybug-cat-noir" role="group" aria-label="15 / 20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/ladybug-cat-noir.jpg')}} 1x,{{asset('website/assets/images/ladybug-cat-noir.jpg')}} 2x,{{asset('website/assets/images/ladybug-cat-noir.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/ladybug-cat-noir.jpg')}}" data-srcset="{{asset('website/assets/images/ladybug-cat-noir.jpg')}} 1x,{{asset('website/assets/images/ladybug-cat-noir.jpg')}} 2x,{{asset('website/assets/images/ladybug-cat-noir.jpg')}} 3x" alt="Invitation with the theme of the birthday of Ladybug and the black cat">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Invitation with the theme of the birthday of Ladybug and the black cat</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/theme-my-little-pony" role="group" aria-label="16 / 20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/theme-my-little-pony.jpg')}} 1x,{{asset('website/assets/images/theme-my-little-pony.jpg')}} 2x,{{asset('website/assets/images/theme-my-little-pony.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/theme-my-little-pony.jpg')}}" data-srcset="{{asset('website/assets/images/theme-my-little-pony.jpg')}} 1x,{{asset('website/assets/images/theme-my-little-pony.jpg')}} 2x,{{asset('website/assets/images/theme-my-little-pony.jpg')}} 3x" alt="My Little Pony birthday invitation">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">My Little Pony birthday invitation</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/hiros-theme" role="group" aria-label="17 / 20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/hiros-theme.jpg')}} 1x,{{asset('website/assets/images/hiros-theme.jpg')}} 2x,{{asset('website/assets/images/hiros-theme.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/hiros-theme.jpg')}}" data-srcset="{{asset('website/assets/images/hiros-theme.jpg')}} 1x,{{asset('website/assets/images/hiros-theme.jpg')}} 2x,{{asset('website/assets/images/hiros-theme.jpg')}} 3x" alt="Invitation with Avengers theme">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Invitation with Avengers theme</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/theme-lego-batman" role="group" aria-label="18/20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/theme-lego-batman.jpg')}} 1x,{{asset('website/assets/images/theme-lego-batman.jpg')}} 2x,{{asset('website/assets/images/theme-lego-batman.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/theme-lego-batman.jpg')}}" data-srcset="{{asset('website/assets/images/theme-lego-batman.jpg')}} 1x,{{asset('website/assets/images/theme-lego-batman.jpg')}} 2x,{{asset('website/assets/images/theme-lego-batman.jpg')}} 3x" alt="Lego Batman themed birthday invitation">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Lego Batman themed birthday invitation</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/minecrafts-theme" role="group" aria-label="19 / 20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/minecrafts-theme.jpg')}} 1x,{{asset('website/assets/images/minecrafts-theme.jpg')}} 2x,{{asset('website/assets/images/minecrafts-theme.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/minecrafts-theme.jpg')}}" data-srcset="{{asset('website/assets/images/minecrafts-theme.jpg')}} 1x,{{asset('website/assets/images/minecrafts-theme.jpg')}} 2x,{{asset('website/assets/images/minecrafts-theme.jpg')}} 3x" alt="Invitation with Minecraft theme">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Invitation with Minecraft theme</font>
                            </font>
                        </span></h3>
                </a><a class="card swiper-slide" href="/card/ice-age-theme" role="group" aria-label="20 / 20">
                    <picture>
                        <source class="swiper-lazy" data-srcset="{{asset('website/assets/images/ice-age-theme.jpg')}} 1x,{{asset('website/assets/images/ice-age-theme.jpg')}} 2x,{{asset('website/assets/images/ice-age-theme.jpg')}} 3x" type="image/webp">
                        <img width="240" height="240" class="swiper-lazy" data-src="{{asset('website/assets/images/ice-age-theme.jpg')}}" data-srcset="{{asset('website/assets/images/ice-age-theme.jpg')}} 1x,{{asset('website/assets/images/ice-age-theme.jpg')}} 2x,{{asset('website/assets/images/ice-age-theme.jpg')}} 3x" alt="Invitation with the theme of ice age">
                    </picture>
                    <div class="preloader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="300" height="300" viewBox="0 0 300 300" class="icon envelope-preloader">
                            <path d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z"></path>
                        </svg></div>
                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Invitation with the theme of ice age</font>
                            </font>
                        </span></h3>
                </a>
            </div>
            <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-75783ba10413e0eec" aria-disabled="true"></div>
            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-75783ba10413e0eec" aria-disabled="false"></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
        <a class="view-all" href="/category/birthday-invitation"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">All birthday invitation cards</font>
                </font>
            </span><svg fill="currentColor" width="24" height="24" viewBox="0 0 24 24">
                <path d="M15.41,16.58L10.83,12L15.41,7.41L14,6L8,12L14,18L15.41,16.58Z"></path>
            </svg></a>
    </section>
    <section class="text-icon-container pt min">
        <div class="wrapper">
            <h2 class="section-title center mb-40"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Customize everything</font>
                    </font>
                </span></h2>
            <div class="items">
                <div class="item">
                    <div class="icon color-1"><svg class="fill" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M4,8L12,13L20,8V8L12,3L4,8V8M22,8V18A2,2 0 0,1 20,20H4A2,2 0 0,1 2,18V8C2,7.27 2.39,6.64 2.97,6.29L12,0.64L21.03,6.29C21.61,6.64 22,7.27 22,8Z">
                            </path>
                        </svg></div>
                    <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Envelope design</font>
                            </font>
                        </span></div>
                    <div class="detail"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Choose colorful envelopes with various designs and materials according to your taste.</font>
                            </font>
                        </span></div>
                </div>
                <div class="item">
                    <div class="icon color-2"><svg class="fill" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12,15.4l-8-5V18h16v-7.6L12,15.4 M22,8v10c0,1.1-0.9,2-2,2H4c-1.1,0-2-0.9-2-2V8c0-0.7,0.4-1.4,1-1.7l9-5.7l9,5.7C21.6,6.6,22,7.3,22,8z">
                            </path>
                        </svg></div>
                    <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">The design inside the envelope</font>
                            </font>
                        </span></div>
                    <div class="detail"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">The designs inside the envelopes make your postcard unique.</font>
                            </font>
                        </span></div>
                </div>
                <div class="item">
                    <div class="icon color-3"><svg class="fill" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M19,19H5V5H19M19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M13.96,12.29L11.21,15.83L9.25,13.47L6.5,17H17.5L13.96,12.29Z">
                            </path>
                        </svg></div>
                    <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">background</font>
                            </font>
                        </span></div>
                    <div class="detail"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Choose an image for the background of the postcard to make it look more beautiful.</font>
                            </font>
                        </span></div>
                </div>
                <div class="item">
                    <div class="icon color-4"><svg class="fill" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M2,2V5.5C3.1,5.5 4,6.62 4,8C4,9.38 3.1,10.5 2,10.5V13.5C3.1,13.5 4,14.62 4,16C4,17.38 3.1,18.5 2,18.5V22H5.5C5.5,20.9 6.62,20 8,20C9.38,20 10.5,20.9 10.5,22H13.5C13.5,20.9 14.62,20 16,20C17.38,20 18.5,20.9 18.5,22H22V18.5C20.9,18.5 20,17.38 20,16V16C20,14.62 20.9,13.5 22,13.5V10.5C20.9,10.5 20,9.38 20,8V8C20,6.62 20.9,5.5 22,5.5V2H18.5C18.5,3.1 17.38,4 16,4C14.62,4 13.5,3.1 13.5,2H10.5C10.5,3.1 9.38,4 8,4C6.62,4 5.5,3.1 5.5,2H2M6,6H18V18H6V6M9,7A2,2 0 0,0 7,9A2,2 0 0,0 9,11A2,2 0 0,0 11,9A2,2 0 0,0 9,7M17,10L14,13L12,12L7,17H17V10Z">
                            </path>
                        </svg></div>
                    <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">stamp</font>
                            </font>
                        </span></div>
                    <div class="detail"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Each letter needs a stamp to send, so choose the best one.</font>
                            </font>
                        </span></div>
                </div>
                <div class="item">
                    <div class="icon color-5"><svg class="fill" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12,3A3,3 0 0,0 9,6C9,9 14,13 6,13A2,2 0 0,0 4,15V17H20V15A2,2 0 0,0 18,13C10,13 15,9 15,6C15,4 13.66,3 12,3M6,19V21H18V19H6Z">
                            </path>
                        </svg></div>
                    <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">stamp</font>
                            </font>
                        </span></div>
                    <div class="detail"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">The postmark shows the letter of credit, so stamp the letter yourself.</font>
                            </font>
                        </span></div>
                </div>
                <div class="item">
                    <div class="icon color-6"><svg class="fill" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M2 17V20H10V18.11H3.9V17C3.9 16.36 7.03 14.9 10 14.9C10.96 14.91 11.91 15.04 12.83 15.28L14.35 13.76C12.95 13.29 11.5 13.03 10 13C7.33 13 2 14.33 2 17M10 4C7.79 4 6 5.79 6 8S7.79 12 10 12 14 10.21 14 8 12.21 4 10 4M10 10C8.9 10 8 9.11 8 8S8.9 6 10 6 12 6.9 12 8 11.11 10 10 10M21.7 13.35L20.7 14.35L18.65 12.35L19.65 11.35C19.86 11.14 20.21 11.14 20.42 11.35L21.7 12.63C21.91 12.84 21.91 13.19 21.7 13.4M12 18.94L18.06 12.88L20.11 14.88L14.11 20.95H12V18.94">
                            </path>
                        </svg></div>
                    <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">receivers</font>
                            </font>
                        </span></div>
                    <div class="detail"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">Remember to write the names of the recipients on the envelope.</span></div>
                </div>
                <div class="item">
                    <div class="icon color-7"><svg class="fill" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M20.39,19.37L16.38,18L15,22L11.92,16L9,22L7.62,18L3.61,19.37L6.53,13.37C5.57,12.17 5,10.65 5,9A7,7 0 0,1 12,2A7,7 0 0,1 19,9C19,10.65 18.43,12.17 17.47,13.37L20.39,19.37M7,9L9.69,10.34L9.5,13.34L12,11.68L14.5,13.33L14.33,10.34L17,9L14.32,7.65L14.5,4.67L12,6.31L9.5,4.65L9.67,7.66L7,9Z">
                            </path>
                        </svg></div>
                    <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">Seal</span></div>
                    <div class="detail"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">The seal is used to verify the identity of the sender, change it as well.</span></div>
                </div>
                <div class="item">
                    <div class="icon color-8"><svg class="fill" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M7.5,5.6L5,7L6.4,4.5L5,2L7.5,3.4L10,2L8.6,4.5L10,7L7.5,5.6M19.5,15.4L22,14L20.6,16.5L22,19L19.5,17.6L17,19L18.4,16.5L17,14L19.5,15.4M22,2L20.6,4.5L22,7L19.5,5.6L17,7L18.4,4.5L17,2L19.5,3.4L22,2M13.34,12.78L15.78,10.34L13.66,8.22L11.22,10.66L13.34,12.78M14.37,7.29L16.71,9.63C17.1,10 17.1,10.65 16.71,11.04L5.04,22.71C4.65,23.1 4,23.1 3.63,22.71L1.29,20.37C0.9,20 0.9,19.35 1.29,18.96L12.96,7.29C13.35,6.9 14,6.9 14.37,7.29Z">
                            </path>
                        </svg></div>
                    <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">Animated effect</span></div>
                    <div class="detail"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;"> When the postcard is opened, animations are displayed.</span></div>
                </div>
                <div class="item">
                    <div class="icon color-9"><svg class="fill" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M21,3V15.5A3.5,3.5 0 0,1 17.5,19A3.5,3.5 0 0,1 14,15.5A3.5,3.5 0 0,1 17.5,12C18.04,12 18.55,12.12 19,12.34V6.47L9,8.6V17.5A3.5,3.5 0 0,1 5.5,21A3.5,3.5 0 0,1 2,17.5A3.5,3.5 0 0,1 5.5,14C6.04,14 6.55,14.12 7,14.34V6L21,3Z">
                            </path>
                        </svg></div>
                    <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">Music</span></div>
                    <div class="detail"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">When you show the card, you can choose a suitable and beautiful music to play.</span></div>
                </div>
                <div class="item">
                    <div class="icon color-1"><svg class="fill" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M14,2L20,8V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V4A2,2 0 0,1 6,2H14M18,20V9H13V4H6V20H18M17,13V19H7L12,14L14,16M10,10.5A1.5,1.5 0 0,1 8.5,12A1.5,1.5 0 0,1 7,10.5A1.5,1.5 0 0,1 8.5,9A1.5,1.5 0 0,1 10,10.5Z">
                            </path>
                        </svg></div>
                    <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">card sheet</span></div>
                    <div class="detail"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">Write a loving invitation message or text and beautify it with different tools.</span></div>
                </div>
                <div class="item">
                    <div class="icon color-2"><svg class="fill" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M16 17V19H2V17S2 13 9 13 16 17 16 17M12.5 7.5A3.5 3.5 0 1 0 9 11A3.5 3.5 0 0 0 12.5 7.5M15.94 13A5.32 5.32 0 0 1 18 17V19H22V17S22 13.37 15.94 13M15 4A3.39 3.39 0 0 0 13.07 4.59A5 5 0 0 1 13.07 10.41A3.39 3.39 0 0 0 15 11A3.5 3.5 0 0 0 15 4Z">
                            </path>
                        </svg></div>
                    <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">communication path</span></div>
                    <div class="detail"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;"> Enter the names of your contacts and send the card with their names.</span></div>
                </div>
                <div class="item">
                    <div class="icon color-3"><svg class="fill" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10.6 13.4A1 1 0 0 1 9.2 14.8A4.8 4.8 0 0 1 9.2 7.8L12.7 4.2A5.1 5.1 0 0 1 19.8 4.2A5.1 5.1 0 0 1 19.8 11.3L18.3 12.8A6.4 6.4 0 0 0 17.9 10.4L18.4 9.9A3.2 3.2 0 0 0 18.4 5.6A3.2 3.2 0 0 0 14.1 5.6L10.6 9.2A2.9 2.9 0 0 0 10.6 13.4M23 18V20H20V23H18V20H15V18H18V15H20V18M16.2 13.7A4.8 4.8 0 0 0 14.8 9.2A1 1 0 0 0 13.4 10.6A2.9 2.9 0 0 1 13.4 14.8L9.9 18.4A3.2 3.2 0 0 1 5.6 18.4A3.2 3.2 0 0 1 5.6 14.1L6.1 13.7A7.3 7.3 0 0 1 5.7 11.2L4.2 12.7A5.1 5.1 0 0 0 4.2 19.8A5.1 5.1 0 0 0 11.3 19.8L13.1 18A6 6 0 0 1 16.2 13.7Z">
                            </path>
                        </svg></div>
                    <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">add link</span></div>
                    <div class="detail"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">Put the link of your social networks or website in the card.</span></div>
                </div>
            </div>
        </div>
    </section>
    <section class="card-container pt">
        <h2 class="section-title center mb-40">
            <a href="/category/love-card"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">Romantic postcard</span></a>
        </h2>
        <div class="swiper swiper-envelope swiper-initialized swiper-horizontal swiper-pointer-events swiper-free-mode swiper-rtl">
            <div class="swiper-wrapper pb-10" id="swiper-wrapper-63ecca2b2c6b2dad" aria-live="polite">
                <a class="card swiper-slide swiper-slide-active" href="/card/nabnab" role="group" aria-label="1/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/nabnab.jpg')}} 1x,{{asset('website/assets/images/nabnab.jpg')}} 2x,{{asset('website/assets/images/nabnab.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="I love you pure" srcset="{{asset('website/assets/images/nabnab.jpg')}} 1x,{{asset('website/assets/images/nabnab.jpg')}} 2x,{{asset('website/assets/images/nabnab.jpg')}} 3x" src="{{asset('assets/nabnab.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">I love you Nab</span></h3>
                </a><a class="card swiper-slide swiper-slide-next" href="/card/loveoreo" role="group" aria-label="2/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/loveoreo.jpg')}} 1x,{{asset('website/assets/images/loveoreo.jpg')}} 2x,{{asset('website/assets/images/loveoreo.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="The best combination" srcset="{{asset('website/assets/images/loveoreo.jpg')}} 1x,{{asset('website/assets/images/loveoreo.jpg')}} 2x,{{asset('website/assets/images/loveoreo.jpg')}} 3x" src="{{asset('assets/loveoreo.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">The best combination</span></h3>
                </a><a class="card swiper-slide" href="/card/noreosenlove" role="group" aria-label="3/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/noreosenlove.jpg')}} 1x,{{asset('website/assets/images/noreosenlove.jpg')}} 2x,{{asset('website/assets/images/noreosenlove.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="Unreasonable romance" srcset="{{asset('website/assets/images/noreosenlove.jpg')}} 1x,{{asset('website/assets/images/noreosenlove.jpg')}} 2x,{{asset('website/assets/images/noreosenlove.jpg')}} 3x" src="{{asset('assets/noreosenlove.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">Senseless romance</span></h3>
                </a><a class="card swiper-slide" href="/card/malkhdam" role="group" aria-label="4/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/malkhdam.jpg')}} 1x,{{asset('website/assets/images/malkhdam.jpg')}} 2x,{{asset('website/assets/images/malkhdam.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="Mine is my love" srcset="{{asset('website/assets/images/malkhdam.jpg')}} 1x,{{asset('website/assets/images/malkhdam.jpg')}} 2x,{{asset('website/assets/images/malkhdam.jpg')}} 3x" src="{{asset('assets/malkhdam.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">My Love</span></h3>
                </a><a class="card swiper-slide" href="/card/aflower" role="group" aria-label="5/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/aflower.jpg')}} 1x,{{asset('website/assets/images/aflower.jpg')}} 2x,{{asset('website/assets/images/aflower.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="Offering a flower branch" srcset="{{asset('website/assets/images/aflower.jpg')}} 1x,{{asset('website/assets/images/aflower.jpg')}} 2x,{{asset('website/assets/images/aflower.jpg')}} 3x" src="{{asset('assets/aflower.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">Offering a flower branch</span></h3>
                </a><a class="card swiper-slide" href="/card/mylifelove" role="group" aria-label="6/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/mylifelove.jpg')}} 1x,{{asset('website/assets/images/mylifelove.jpg')}} 2x,{{asset('website/assets/images/mylifelove.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="Happy love day of my life" srcset="{{asset('website/assets/images/mylifelove.jpg')}} 1x,{{asset('website/assets/images/mylifelove.jpg')}} 2x,{{asset('website/assets/images/mylifelove.jpg')}} 3x" src="{{asset('assets/mylifelove.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;"> Happy love day of my life</span></h3>
                </a><a class="card swiper-slide" href="/card/rozeshghe" role="group" aria-label="7/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/rozeshghe.jpg')}} 1x,{{asset('website/assets/images/rozeshghe.jpg')}} 2x,{{asset('website/assets/images/rozeshghe.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="Love day online" srcset="{{asset('website/assets/images/rozeshghe.jpg')}} 1x,{{asset('website/assets/images/rozeshghe.jpg')}} 2x,{{asset('website/assets/images/rozeshghe.jpg')}} 3x" src="{{asset('assets/rozeshghe.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;"> Online love day</span></h3>
                </a>
                
                
                
            </div>
            <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-63ecca2b2c6b2dad" aria-disabled="true"></div>
            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-63ecca2b2c6b2dad" aria-disabled="false"></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
        <a class="view-all" href="/category/love-card"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;"> All love cards</span><svg fill="currentColor" width="24" height="24" viewBox="0 0 24 24">
                <path d="M15.41,16.58L10.83,12L15.41,7.41L14,6L8,12L14,18L15.41,16.58Z"></path>
            </svg></a>
    </section>


    <!-- <section class="download-container mt" id="download">
        <div class="download-wrapper">
            <h2 class="text-bold"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">دانلود اپلیکیشن کارت پستال موزیکال</span></h2>
            <h3 class="mt-5">
                <span wudooh="true" style="font-size:1.05em;line-height:1.1em;">اپلیکیشن کارت پستال موزیکال را رایگان دانلود کنید</span><br><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">کارت پستال طراحی کنید و مناسبت‌ها را متفاوت تبریک بگویید </span>
            </h3>

            <a class="market-button apk mt-40 mr-10 ml-10" href="/download">
                <span class="icon fl"></span>
                <div>
                    <span class="from pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">دانلود</span></span>
                    <span class="market text-bold pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">فایل نصبی</span></span>
                </div>
            </a>
            <a class="market-button bazaar mt-40 mr-10 ml-10" rel="nofollow" href="https://cafebazaar.ir/app/com.neno.digipostal">
                <span class="icon fl"></span>
                <div>
                    <span class="from pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">دانلود از</span></span>
                    <span class="market text-bold pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">بازار</span></span>
                </div>
            </a>
            <a class="market-button myket mt-40 mr-10 ml-10" rel="nofollow" href="https://myket.ir/app/com.neno.digipostal?utm_source=search-ads-gift&amp;utm_medium=cpc">
                <span class="icon fl"></span>
                <div>
                    <span class="from pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">دانلود از</span></span>
                    <span class="market text-bold pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">مایکت</span></span>
                </div>
            </a>
            <a class="market-button google-play mt-40 mr-10 ml-10" rel="nofollow" href="https://play.google.com/store/apps/details?id=com.neno.digipostal&amp;hl=fa">
                <span class="icon fl"></span>
                <div>
                    <span class="from pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">دانلود از</span></span>
                    <span class="market text-bold pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">گوگل پلی</span></span>
                </div>
            </a> <a class="market-button webapp mt-40 mr-10 ml-10" href="/app">
                <span class="icon fl"></span>
                <div>
                    <span class="from pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">پیشنهاد برای کاربران </span>IOS</span>
                    <span class="market text-bold pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">وب اپلیکیشن</span></span>
                </div>
            </a>
        </div>
    </section> -->

    <section class="card-container pt">
        <h2 class="section-title center mb-40">
            <a href="/category/business"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">Business postcards</span></a>
        </h2>
        <div class="swiper swiper-envelope swiper-initialized swiper-horizontal swiper-pointer-events swiper-free-mode swiper-rtl">
            <div class="swiper-wrapper pb-10" id="swiper-wrapper-5faf474b91427cd7" aria-live="polite">
                <a class="card swiper-slide swiper-slide-active" href="/card/tehran-book-fair" role="group" aria-label="1/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/tehran-book-fair.jpg')}} 1x,{{asset('website/assets/images/tehran-book-fair.jpg')}} 2x,{{asset('website/assets/images/tehran-book-fair.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="Invitation to Tehran Book Fair" srcset="{{asset('website/assets/images/tehran-book-fair.jpg')}} 1x,{{asset('website/assets/images/tehran-book-fair.jpg')}} 2x,{{asset('website/assets/images/tehran-book-fair.jpg')}} 3x" src="{{asset('assets/tehran-book-fair.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">Invitation to Tehran Book Fair</span></h3>
                </a><a class="card swiper-slide swiper-slide-next" href="/card/book-fair" role="group" aria-label="2/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/book-fair.jpg')}} 1x,{{asset('website/assets/images/book-fair.jpg')}} 2x,{{asset('website/assets/images/book-fair.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="Book fair invitation" srcset="{{asset('website/assets/images/book-fair.jpg')}} 1x,{{asset('website/assets/images/book-fair.jpg')}} 2x,{{asset('website/assets/images/book-fair.jpg')}} 3x" src="{{asset('assets/book-fair.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;"> Book fair invitation</span></h3>
                </a><a class="card swiper-slide" href="/card/opening-red" role="group" aria-label="3/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/opening-red.jpg')}} 1x,{{asset('website/assets/images/opening-red.jpg')}} 2x,{{asset('website/assets/images/opening-red.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="Opening invitation with red ribbon" srcset="{{asset('website/assets/images/opening-red.jpg')}} 1x,{{asset('website/assets/images/opening-red.jpg')}} 2x,{{asset('website/assets/images/opening-red.jpg')}} 3x" src="{{asset('assets/opening-red.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">Opening invitation with red ribbon</span></h3>
                </a><a class="card swiper-slide" href="/card/invitation-electroni" role="group" aria-label="4/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/invitation-electroni.jpg')}} 1x,{{asset('website/assets/images/invitation-electroni.jpg')}} 2x,{{asset('website/assets/images/invitation-electroni.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="Invitation to the International Electronics and Computer Exhibition" srcset="{{asset('website/assets/images/invitation-electroni.jpg')}} 1x,{{asset('website/assets/images/invitation-electroni.jpg')}} 2x,{{asset('website/assets/images/invitation-electroni.jpg')}} 3x" src="{{asset('assets/invitation-electroni.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;"> Invitation to the International Electronics and Computer Exhibition</span></h3>
                </a><a class="card swiper-slide" href="/card/opening-cafe" role="group" aria-label="5/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/opening-cafe.jpg')}} 1x,{{asset('website/assets/images/opening-cafe.jpg')}} 2x,{{asset('website/assets/images/opening-cafe.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="Invitation to the opening of the cafe" srcset="{{asset('website/assets/images/opening-cafe.jpg')}} 1x,{{asset('website/assets/images/opening-cafe.jpg')}} 2x,{{asset('website/assets/images/opening-cafe.jpg')}} 3x" src="{{asset('assets/opening-cafe.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;"> Invitation to the opening of the cafe</span></h3>
                </a><a class="card swiper-slide" href="/card/invitation-window" role="group" aria-label="6/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/invitation-window.jpg')}} 1x,{{asset('website/assets/images/invitation-window.jpg')}} 2x,{{asset('website/assets/images/invitation-window.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="Invitation to the international door and window exhibition" srcset="{{asset('website/assets/images/invitation-window.jpg')}} 1x,{{asset('website/assets/images/invitation-window.jpg')}} 2x,{{asset('website/assets/images/invitation-window.jpg')}} 3x" src="{{asset('assets/invitation-window.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">Invitation to the international door and window exhibition</span></h3>
                </a><a class="card swiper-slide" href="/card/agriculture-invit" role="group" aria-label="7/20">
                    <picture>
                        <source class="swiper-lazy swiper-lazy-loaded" type="image/webp" srcset="{{asset('website/assets/images/agriculture-invit.jpg')}} 1x,{{asset('website/assets/images/agriculture-invit.jpg')}} 2x,{{asset('website/assets/images/agriculture-invit.jpg')}} 3x">
                        <img width="240" height="240" class="swiper-lazy swiper-lazy-loaded" alt="Invitation to the international exhibition of agricultural industries" srcset="{{asset('website/assets/images/agriculture-invit.jpg')}} 1x,{{asset('website/assets/images/agriculture-invit.jpg')}} 2x,{{asset('website/assets/images/agriculture-invit.jpg')}} 3x" src="{{asset('assets/agriculture-invit.jpg')}}">
                    </picture>

                    <h3 class="no-wrap"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;"> Invitation to the international exhibition of agricultural industries</span></h3>
                </a>
                
            </div>
            <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-5faf474b91427cd7" aria-disabled="true"></div>
            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-5faf474b91427cd7" aria-disabled="false"></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
        <a class="view-all" href="/category/business"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;"> All business cards</span><svg fill="currentColor" width="24" height="24" viewBox="0 0 24 24">
                <path d="M15.41,16.58L10.83,12L15.41,7.41L14,6L8,12L14,18L15.41,16.58Z"></path>
            </svg></a>
    </section>

    <section class="blog-container min pt">
        <div>
            <a href="/blog/">
                <h2 class="section-title center"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">Read on the blog</span></h2>
            </a>
            <h3 class="head-detail mb-40"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">Read text, photos, SMS and creative ideas on the blog</span></h3>
        </div>
        <div class="blog-wrapper ">
            <div class="row">
            <div class="article fr mb-40">
                    <a href="/article/how-to-write-text-for-postcard">
                        <img class="fr color-1" width="350" height="233" src="{{asset('assets/-postcard-text-3uhcb.jpg')}}" srcset="/data/blog/main/thumb/-postcard-text-3uhcb.jpg')}} 1x,/data/blog/main/-postcard-text-3uhcb.jpg')}} 2x" alt="How to write a text for a postcard" title="How to write a text for a postcard">
                    </a>
                    <div class="text pl-20 pr-20 fr">
                        <a href="/article/how-to-write-text-for-postcard">
                            <h3 class="title no-wrap text-regular"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">How to write text for a postcard</span> </h3>
                        </a>
                        <p class="detail"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">Principles of writing postcard text, ready texts to write on postcards, examples Text for birthday greetings, wedding greetings, romance, poetry, thanks and gratitude and...</span></p>
                        <a href="/article/how-to-write-text-for-postcard" class="more"><span wudooh="true" style="font-size:1.05em; line-height:1.1em;">read more …</span></a>
                    </div>
                </div>

                <div class="article fr mb-40">
                    <a href="/article/50-beautiful-texts-for-wedding-cards">
                        <img class="fr color-1" width="350" height="233" src="{{asset('assets/11-min-(5)-8scrs.jpg')}}" srcset="/data/blog/main/thumb/11-min-(5)-8scrs.jpg')}} 1x,/data/blog/main/11-min-(5)-8scrs.jpg')}} 2x" alt ="50 beautiful texts for wedding cards; Along with some samples of wedding invitation cards" title="50 beautiful texts for wedding cards; Along with some samples of wedding invitation cards">
                    </a>
                    <div class="text pl-20 pr-20 fr">
                        <a href="/article/50-beautiful-texts-for-wedding-cards">
                            <h3 class="title no-wrap text-regular">50 <span wudooh="true" style="font-size:1.05em;line-height:1.1em;">Beautiful text for wedding cards; along with some examples of wedding invitation cards</span></h3>
                        </a>
                        <p class="detail"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">A selection of beautiful texts from wedding cards and text samples for wedding invitations, along with Creative tips for choosing the best text for your special day. From formal to informal and emotional texts, find them all here.</span></p>
                        <a href="/article/50-beautiful-texts-for-wedding-cards" class="more"><span wudooh="true" style="font-size:1.05em; line-height:1.1em;">read more …</span></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="article fr mb-40">
                    <a href="/article/7-important-reasons-to-use-digital-wedding-card">
                        <img class="fr color-1" width="350" height="233" src="{{asset('assets/wedding-gkj64.jpg')}}" srcset="/data/blog/main/thumb/wedding-gkj64.jpg')}} 1x,/data/blog/main/wedding-gkj64.jpg')}} 2x" alt="7 important reasons to use digital wedding cards" title="7 important reasons to use digital wedding cards">
                    </a>
                    <div class="text pl-20 pr-20 fr">
                        <a href="/article/7-important-reasons-to-use-digital-wedding-card">
                            <h3 class="title no-wrap text-regular">7 <span wudooh="true" style="font-size:1.05em;line-height:1.1em;">Important reason to use digital wedding card< /span></h3>
                        </a>
                        <p class="detail"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">Wedding is one of the most important events in the life of every person. The manner of celebrating the wedding ceremony is also very important. The wedding card is one of the important parts of the wedding ceremony. These days, most creative couples are looking for new invitation cards with special, up-to-date and different designs.</span></p>
                        <a href="/article/7-important-reasons-to-use-digital-wedding-card" class="more"><span wudooh="true" style="font-size :1.05em;line-height:1.1em;">read more …</span></a>
                    </div>
                </div>

                <div class="article fr mb-40">
                    <a href="/article/45-happy-girls-day-texts">
                        <img class="fr color-1" width="350" height="233" src="{{asset('assets/11-vz2ca.jpg')}}" srcset="/data/blog/main/thumb/11-vz2ca.jpg')}} 1x,/data/blog/main/11-vz2ca.jpg')}} 2x" alt="45 girl's day greetings along with girl's day greeting card" title="45 girl's day greetings along with girl's day greeting card">
                    </a>
                    <div class="text pl-20 pr-20 fr">
                        <a href="/article/45-happy-girls-day-texts">
                            <h3 class="title no-wrap text-regular">45 <span wudooh="true" style="font-size:1.05em;line-height:1.1em;">Girl's Day greeting text with greeting card Daughter</span></h3>
                        </a>
                        <p class="detail"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;">The first day of Dhul-Qaida coincides with the birth of Hazrat Masoumeh (PBUH) of Karima Ahl al-Bayt. In the Iranian national calendar, this day is called the girl's day. Be with us with a collection of Happy Girl's Day texts and SMS along with Happy Girl's Day card.</span></p>
                        <a href="/article/45-happy-girls-day-texts" class="more"><span wudooh="true" style="font-size:1.05em;line- height:1.1em;">read more …</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection