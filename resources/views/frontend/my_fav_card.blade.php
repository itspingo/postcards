@extends('layouts.user_area')
@section('content')


<div class="jetp-placeholder">
                    <div class="jetp-card-info-page">
                        <header class="jetp-header fixed"><button class="fr icon"><svg
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                                    class="icon localize">
                                    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z">
                                    </path>
                                </svg></button><button class="fl favorite-btn icon on" style="display: block;"><svg
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                                    class="icon animate__bounceIn" style="width: 28px; height: 28px;">
                                    <path
                                        d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z">
                                    </path>
                                </svg></button>
                            <div class="title">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Happy birthday pink and green</font>
                                </font>
                            </div>
                        </header>
                        <div class="jetp-card-info nice-scrollbar">
                            <div class="image-wrapper full"><svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                    width="300" height="300" viewBox="0 0 300 300" class="icon envelope-full"
                                    style="display: none;">
                                    <path
                                        d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z">
                                    </path>
                                </svg><img class="envelope-full" src="./my_fav_card_files/pink-green-floral.webp"
                                    srcset="/data/files/card_info/3x/pink-green-floral.webp 1x,/data/files/card_info/4x/pink-green-floral.webp 2x"
                                    width="660" height="660" style="display: block;"></div>
                            <div class="button-wrapper"><button class="button edit ml-5 mr-5"><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                                        class="icon ml-10">
                                        <path
                                            d="M14.06,9L15,9.94L5.92,19H5V18.08L14.06,9M17.66,3C17.41,3 17.15,3.1 16.96,3.29L15.13,5.12L18.88,8.87L20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18.17,3.09 17.92,3 17.66,3M14.06,6.19L3,17.25V21H6.75L17.81,9.94L14.06,6.19Z">
                                        </path>
                                    </svg><span class="no-wrap ml-10"><span wudooh="true"
                                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Card editing</font>
                                            </font>
                                        </span></span></button><button class="button play ml-5 mr-5"><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                                        class="icon ml-10">
                                        <path d="M8,5.14V19.14L19,12.14L8,5.14Z"></path>
                                    </svg><span class="no-wrap ml-10"><span wudooh="true"
                                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">View card</font>
                                            </font>
                                        </span></span></button></div>
                            <div class="cards-title"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Posting on social networks</font>
                                    </font>
                                </span></div>
                            <div class="share-buttons"><a class="share primary-color-bg"
                                    href="https://digipostal.ir/app/card/pink-green-floral" style="display: none;"><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                                        class="icon">
                                        <path
                                            d="M18,16.08C17.24,16.08 16.56,16.38 16.04,16.85L8.91,12.7C8.96,12.47 9,12.24 9,12C9,11.76 8.96,11.53 8.91,11.3L15.96,7.19C16.5,7.69 17.21,8 18,8A3,3 0 0,0 21,5A3,3 0 0,0 18,2A3,3 0 0,0 15,5C15,5.24 15.04,5.47 15.09,5.7L8.04,9.81C7.5,9.31 6.79,9 6,9A3,3 0 0,0 3,12A3,3 0 0,0 6,15C6.79,15 7.5,14.69 8.04,14.19L15.16,18.34C15.11,18.55 15.08,18.77 15.08,19C15.08,20.61 16.39,21.91 18,21.91C19.61,21.91 20.92,20.61 20.92,19A2.92,2.92 0 0,0 18,16.08Z">
                                        </path>
                                    </svg></a><a class="whatsapp"
                                    href="whatsapp://send?text=https://DigiPostal.ir/pink-green-floral"><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" fill="currentColor" width="48" height="48" viewBox="0 0 48 48"
                                        class="icon">
                                        <path
                                            d="M34.7507 13.2115C32.1777 10.5628 28.621 9.125 24.9885 9.125C17.2696 9.125 11.0642 15.4061 11.1399 23.0493C11.1399 25.4709 11.821 27.8169 12.9561 29.9358L10.9885 37.125L18.3291 35.2331C20.3723 36.3682 22.6426 36.898 24.9128 36.898C32.5561 36.898 38.7615 30.6169 38.7615 22.9736C38.7615 19.2655 37.3237 15.7845 34.7507 13.2115ZM24.9885 34.552C22.9453 34.552 20.902 34.0223 19.1615 32.9628L18.7074 32.7358L14.3183 33.8709L15.4534 29.5574L15.1507 29.1034C11.821 23.7304 13.4101 16.6169 18.8588 13.2872C24.3074 9.95743 31.3453 11.5466 34.675 16.9953C38.0047 22.4439 36.4156 29.4818 30.9669 32.8115C29.2264 33.9466 27.1074 34.552 24.9885 34.552ZM31.648 26.152L30.8156 25.7736C30.8156 25.7736 29.6047 25.2439 28.848 24.8655C28.7723 24.8655 28.6966 24.7899 28.621 24.7899C28.3939 24.7899 28.2426 24.8655 28.0912 24.9412C28.0912 24.9412 28.0156 25.0169 26.9561 26.2277C26.8804 26.3791 26.7291 26.4547 26.5777 26.4547H26.502C26.4264 26.4547 26.275 26.3791 26.1993 26.3034L25.821 26.152C24.9885 25.7736 24.2318 25.3196 23.6264 24.7142C23.475 24.5628 23.248 24.4115 23.0966 24.2601C22.5669 23.7304 22.0372 23.125 21.6588 22.4439L21.5831 22.2926C21.5074 22.2169 21.5074 22.1412 21.4318 21.9899C21.4318 21.8385 21.4318 21.6872 21.5074 21.6115C21.5074 21.6115 21.8101 21.2331 22.0372 21.0061C22.1885 20.8547 22.2642 20.6277 22.4156 20.4764C22.5669 20.2493 22.6426 19.9466 22.5669 19.7196C22.4912 19.3412 21.5831 17.298 21.3561 16.8439C21.2047 16.6169 21.0534 16.5412 20.8264 16.4655H20.5993C20.448 16.4655 20.221 16.4655 19.9939 16.4655C19.8426 16.4655 19.6912 16.5412 19.5399 16.5412L19.4642 16.6169C19.3128 16.6926 19.1615 16.8439 19.0101 16.9196C18.8588 17.0709 18.7831 17.2223 18.6318 17.3736C18.102 18.0547 17.7993 18.8872 17.7993 19.7196C17.7993 20.325 17.9507 20.9304 18.1777 21.4601L18.2534 21.6872C18.9345 23.125 19.8426 24.4115 21.0534 25.5466L21.3561 25.8493C21.5831 26.0764 21.8101 26.2277 21.9615 26.4547C23.5507 27.8169 25.3669 28.8007 27.4101 29.3304C27.6372 29.4061 27.9399 29.4061 28.1669 29.4818C28.3939 29.4818 28.6966 29.4818 28.9237 29.4818C29.302 29.4818 29.7561 29.3304 30.0588 29.1791C30.2858 29.0277 30.4372 29.0277 30.5885 28.8764L30.7399 28.725C30.8912 28.5736 31.0426 28.498 31.1939 28.3466C31.3453 28.1953 31.4966 28.0439 31.5723 27.8926C31.7237 27.5899 31.7993 27.2115 31.875 26.8331C31.875 26.6818 31.875 26.4547 31.875 26.3034C31.875 26.3034 31.7993 26.2277 31.648 26.152Z">
                                        </path>
                                    </svg></a><a class="telegram"
                                    href="https://t.me/share/url?url=https://DigiPostal.ir/pink-green-floral"
                                    target="_blank"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                        width="48" height="48" viewBox="0 0 48 48" class="icon">
                                        <path
                                            d="M10.7874 23.4709C17.7667 20.3663 22.4206 18.3195 24.7493 17.3305C31.3979 14.507 32.7795 14.0165 33.68 14.0002C33.878 13.9968 34.3208 14.0469 34.6077 14.2845C34.8499 14.4852 34.9165 14.7563 34.9484 14.9465C34.9803 15.1368 35.02 15.5702 34.9884 15.9088C34.6281 19.774 33.0692 29.1539 32.276 33.483C31.9404 35.3148 31.2796 35.929 30.6399 35.9891C29.2496 36.1197 28.1938 35.051 26.8473 34.1497C24.7401 32.7395 23.5498 31.8615 21.5044 30.4854C19.1407 28.895 20.673 28.0209 22.0201 26.5923C22.3726 26.2185 28.4983 20.5295 28.6169 20.0135C28.6317 19.9489 28.6455 19.7083 28.5055 19.5813C28.3655 19.4543 28.1589 19.4977 28.0098 19.5322C27.7985 19.5812 24.4323 21.8529 17.9113 26.3473C16.9558 27.0172 16.0904 27.3435 15.315 27.3264C14.4602 27.3076 12.8159 26.833 11.5935 26.4273C10.0942 25.9296 8.90254 25.6666 9.0063 24.8215C9.06035 24.3813 9.65403 23.9311 10.7874 23.4709Z">
                                        </path>
                                    </svg></a><a class="facebook"
                                    href="https://facebook.com/sharer/sharer.php?u=https://DigiPostal.ir/pink-green-floral"
                                    target="_blank"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                        width="32" height="32" viewBox="0 0 32 32" class="icon">
                                        <path
                                            d="M13.69 24.903h3.679v-8.904h2.454l.325-3.068h-2.779l.004-1.536c0-.8.076-1.229 1.224-1.229h1.534V7.097h-2.455c-2.949 0-3.986 1.489-3.986 3.992v1.842h-1.838V16h1.838v8.903z">
                                        </path>
                                    </svg></a><a class="twitter"
                                    href="https://twitter.com/intent/tweet/?text=https://DigiPostal.ir/pink-green-floral"
                                    target="_blank"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                        width="24" height="24" viewBox="0 0 24 24" class="icon">
                                        <path
                                            d="M 2.3671875 3 L 9.4628906 13.140625 L 2.7402344 21 L 5.3808594 21 L 10.644531 14.830078 L 14.960938 21 L 21.871094 21 L 14.449219 10.375 L 20.740234 3 L 18.140625 3 L 13.271484 8.6875 L 9.2988281 3 L 2.3671875 3 z M 6.2070312 5 L 8.2558594 5 L 18.033203 19 L 16.001953 19 L 6.2070312 5 z">
                                        </path>
                                    </svg></a><a class="eitaa"
                                    href="https://eitaa.com/share/url?url=https://DigiPostal.ir/pink-green-floral"
                                    target="_blank"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                        width="100" height="100" viewBox="0 0 100 100" class="icon">
                                        <path
                                            d="M47.6,67.6c-1.4,1-4.6,5.1-4.8,8.2C36.8,75,30.1,68.2,30.9,61   c-9.8-7.1-1.7-20.2,6.1-25.4C53.6,24.3,76.7,34,63.8,42C56,46.9,39.3,50.2,41,38.2c-4.6,1.3-7.5,9.9-2,14.3   c-5.1,5-4.1,14.3,1.3,17.3c5.5-14.3,24.8-12.4,32.5-29.5c5.8-12.9-2.8-27.5-20.2-25.3c-13.1,1.7-25.3,12.7-31.5,25.8   c-6.2,13.3-5.3,31.1,7.5,40c15,10.5,31,0.8,40.7-12c5.7-7.5,10.7-15.9,18.3-20.7v-5.8C76.2,47.5,64.6,73.1,47.6,67.6z">
                                        </path>
                                    </svg></a></div>
                            <div class="cards-title"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Copy the link below and send it to your
                                            contacts</font>
                                    </font>
                                </span></div>
                            <div class="copylink-box"><input type="text" readonly="true"
                                    value="https://DigiPostal.ir/pink-green-floral">
                                <div class="btn-copy"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                        width="24" height="24" viewBox="0 0 24 24" class="icon copy">
                                        <path
                                            d="M19,21H8V7H19M19,5H8A2,2 0 0,0 6,7V21A2,2 0 0,0 8,23H19A2,2 0 0,0 21,21V7A2,2 0 0,0 19,5M16,1H4A2,2 0 0,0 2,3V17H4V3H16V1Z">
                                        </path>
                                    </svg><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                        width="24" height="24" viewBox="0 0 24 24" class="icon check">
                                        <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                                    </svg></div>
                            </div>
                            <div class="cards-title"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Related cards</font>
                                    </font>
                                </span></div>
                            <div class="tags">
                                <div class="tag"><span wudooh="true"
                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">happy birthday</font>
                                        </font>
                                    </span></div>
                                <div class="tag"><span wudooh="true"
                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Birthday photo frame</font>
                                        </font>
                                    </span></div>
                            </div>
                            <div class="jetp-card-slider">
                                <div
                                    class="swiper-container swiper-initialized swiper-horizontal swiper-pointer-events swiper-rtl">
                                    <div class="swiper-wrapper" id="swiper-wrapper-6758a163668e989f" aria-live="polite"
                                        style="transition-duration: 0ms; transform: translate3d(2397.5px, 0px, 0px);">
                                        <div class="swiper-slide" style="width: 299.688px;" role="group"
                                            aria-label="1/20">
                                            <div class="card"><img class="swiper-lazy swiper-lazy-loaded" width="240"
                                                    height="240"
                                                    srcset="/data/files/card_info/1x/boy-digi-card.webp 1x,/data/files/card_info/2x/boy-digi-card.webp 2x,/data/files/card_info/3x/boy-digi-card.webp 3x,/data/files/card_info/4x/boy-digi-card.webp 4x"
                                                    src="./my_fav_card_files/boy-digi-card.webp">
                                                <h3 class="no-wrap"><span wudooh="true"
                                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Digital birthday
                                                                wishes for boys</font>
                                                        </font>
                                                    </span></h3>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="width: 299.688px;" role="group"
                                            aria-label="2/20">
                                            <div class="card"><img class="swiper-lazy swiper-lazy-loaded" width="240"
                                                    height="240"
                                                    srcset="/data/files/card_info/1x/birthday5.webp 1x,/data/files/card_info/2x/birthday5.webp 2x,/data/files/card_info/3x/birthday5.webp 3x,/data/files/card_info/4x/birthday5.webp 4x"
                                                    src="./my_fav_card_files/birthday5.webp">
                                                <h3 class="no-wrap"><span wudooh="true"
                                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Boy's birthday card
                                                            </font>
                                                        </font>
                                                    </span></h3>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="width: 299.688px;" role="group"
                                            aria-label="3/20">
                                            <div class="card"><img class="swiper-lazy swiper-lazy-loaded" width="240"
                                                    height="240"
                                                    srcset="/data/files/card_info/1x/frame-image-cake.webp 1x,/data/files/card_info/2x/frame-image-cake.webp 2x,/data/files/card_info/3x/frame-image-cake.webp 3x,/data/files/card_info/4x/frame-image-cake.webp 4x"
                                                    src="./my_fav_card_files/frame-image-cake.webp">
                                                <h3 class="no-wrap"><span wudooh="true"
                                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Birthday with cake
                                                                and photos</font>
                                                        </font>
                                                    </span></h3>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="width: 299.688px;" role="group"
                                            aria-label="4/20">
                                            <div class="card"><img class="swiper-lazy swiper-lazy-loaded" width="240"
                                                    height="240"
                                                    srcset="/data/files/card_info/1x/birthday-image.webp 1x,/data/files/card_info/2x/birthday-image.webp 2x,/data/files/card_info/3x/birthday-image.webp 3x,/data/files/card_info/4x/birthday-image.webp 4x"
                                                    src="./my_fav_card_files/birthday-image.webp">
                                                <h3 class="no-wrap"><span wudooh="true"
                                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Happy birthday with
                                                                my photo</font>
                                                        </font>
                                                    </span></h3>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="width: 299.688px;" role="group"
                                            aria-label="5/20">
                                            <div class="card"><img class="swiper-lazy swiper-lazy-loaded" width="240"
                                                    height="240"
                                                    srcset="/data/files/card_info/1x/daughter-image.webp 1x,/data/files/card_info/2x/daughter-image.webp 2x,/data/files/card_info/3x/daughter-image.webp 3x,/data/files/card_info/4x/daughter-image.webp 4x"
                                                    src="./my_fav_card_files/daughter-image.webp">
                                                <h3 class="no-wrap"><span wudooh="true"
                                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Birthday greetings
                                                                for girls with the desired photo</font>
                                                        </font>
                                                    </span></h3>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="width: 299.688px;" role="group"
                                            aria-label="6/20">
                                            <div class="card"><img class="swiper-lazy swiper-lazy-loaded" width="240"
                                                    height="240"
                                                    srcset="/data/files/card_info/1x/daughter-birthday.webp 1x,/data/files/card_info/2x/daughter-birthday.webp 2x,/data/files/card_info/3x/daughter-birthday.webp 3x,/data/files/card_info/4x/daughter-birthday.webp 4x"
                                                    src="./my_fav_card_files/daughter-birthday.webp">
                                                <h3 class="no-wrap"><span wudooh="true"
                                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Happy birthday with
                                                                my daughter's photo</font>
                                                        </font>
                                                    </span></h3>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="width: 299.688px;" role="group"
                                            aria-label="7/20">
                                            <div class="card"><img class="swiper-lazy swiper-lazy-loaded" width="240"
                                                    height="240"
                                                    srcset="/data/files/card_info/1x/mom-birthday.webp 1x,/data/files/card_info/2x/mom-birthday.webp 2x,/data/files/card_info/3x/mom-birthday.webp 3x,/data/files/card_info/4x/mom-birthday.webp 4x"
                                                    src="./my_fav_card_files/mom-birthday.webp">
                                                <h3 class="no-wrap"><span wudooh="true"
                                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Happy birthday from
                                                                daughter to mother</font>
                                                        </font>
                                                    </span></h3>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-prev" style="width: 299.688px;"
                                            role="group" aria-label="8/20">
                                            <div class="card"><img class="swiper-lazy swiper-lazy-loaded" width="240"
                                                    height="240"
                                                    srcset="/data/files/card_info/1x/babybirth.webp 1x,/data/files/card_info/2x/babybirth.webp 2x,/data/files/card_info/3x/babybirth.webp 3x,/data/files/card_info/4x/babybirth.webp 4x"
                                                    src="./my_fav_card_files/babybirth.webp">
                                                <h3 class="no-wrap"><span wudooh="true"
                                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Happy birthday son
                                                                Bahmani</font>
                                                        </font>
                                                    </span></h3>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-active" style="width: 299.688px;"
                                            role="group" aria-label="9/20">
                                            <div class="card"><img class="swiper-lazy swiper-lazy-loaded" width="240"
                                                    height="240"
                                                    srcset="/data/files/card_info/1x/birth-image.webp 1x,/data/files/card_info/2x/birth-image.webp 2x,/data/files/card_info/3x/birth-image.webp 3x,/data/files/card_info/4x/birth-image.webp 4x"
                                                    src="./my_fav_card_files/birth-image.webp">
                                                <h3 class="no-wrap"><span wudooh="true"
                                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">happy birthday photo
                                                            </font>
                                                        </font>
                                                    </span></h3>
                                            </div>
                                        </div>



                                        <div class="swiper-slide swiper-slide-next" style="width: 299.688px;"
                                            role="group" aria-label="10/20">
                                            <div class="card"><img class="swiper-lazy swiper-lazy-loaded" width="240"
                                                    height="240"
                                                    srcset="/data/files/card_info/1x/sptabri.webp 1x,/data/files/card_info/2x/sptabri.webp 2x,/data/files/card_info/3x/sptabri.webp 3x,/data/files/card_info/4x/sptabri.webp 4x"
                                                    src="./my_fav_card_files/sptabri.webp">
                                                <h3 class="no-wrap"><span wudooh="true"
                                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Special birthday
                                                                greetings</font>
                                                        </font>
                                                    </span></h3>
                                            </div>
                                        </div>


                                        
                                        <div class="swiper-slide" style="width: 299.688px;" role="group"
                                            aria-label="11/20">
                                            <div class="card"><img class="swiper-lazy swiper-lazy-loaded" width="240"
                                                    height="240"
                                                    srcset="/data/files/card_info/1x/tblak.webp 1x,/data/files/card_info/2x/tblak.webp 2x,/data/files/card_info/3x/tblak.webp 3x,/data/files/card_info/4x/tblak.webp 4x"
                                                    src="./my_fav_card_files/tblak.webp">
                                                <h3 class="no-wrap"><span wudooh="true"
                                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Happy birthday with
                                                                black and gold balloon theme</font>
                                                        </font>
                                                    </span></h3>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="width: 299.688px;" role="group"
                                            aria-label="12/20">
                                            <div class="card"><img class="swiper-lazy swiper-lazy-loaded" width="240"
                                                    height="240"
                                                    srcset="/data/files/card_info/1x/qabaxt.webp 1x,/data/files/card_info/2x/qabaxt.webp 2x,/data/files/card_info/3x/qabaxt.webp 3x,/data/files/card_info/4x/qabaxt.webp 4x"
                                                    src="./my_fav_card_files/qabaxt.webp">
                                                <h3 class="no-wrap"><span wudooh="true"
                                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Happy birthday with
                                                                blank photo frame</font>
                                                        </font>
                                                    </span></h3>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="width: 299.688px;" role="group"
                                            aria-label="13 / 20">
                                            <div class="card"><img class="swiper-lazy swiper-lazy-loaded" width="240"
                                                    height="240"
                                                    srcset="/data/files/card_info/1x/hpdeshghcard.webp 1x,/data/files/card_info/2x/hpdeshghcard.webp 2x,/data/files/card_info/3x/hpdeshghcard.webp 3x,/data/files/card_info/4x/hpdeshghcard.webp 4x"
                                                    src="./my_fav_card_files/hpdeshghcard.webp">
                                                <h3 class="no-wrap"><span wudooh="true"
                                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Custom romantic
                                                                birthday greetings</font>
                                                        </font>
                                                    </span></h3>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="width: 299.688px;" role="group"
                                            aria-label="14/20">
                                            <div class="card"><img class="swiper-lazy swiper-lazy-loaded" width="240"
                                                    height="240"
                                                    srcset="/data/files/card_info/1x/tvspsp.webp 1x,/data/files/card_info/2x/tvspsp.webp 2x,/data/files/card_info/3x/tvspsp.webp 3x,/data/files/card_info/4x/tvspsp.webp 4x"
                                                    src="./my_fav_card_files/tvspsp.webp">
                                                <h3 class="no-wrap"><span wudooh="true"
                                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Custom birthday
                                                                greeting card</font>
                                                        </font>
                                                    </span></h3>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="width: 299.688px;" role="group"
                                            aria-label="15 / 20">
                                            <div class="card"><img class="swiper-lazy"
                                                    data-src="/data/files/card_info/1x/frameflover.webp"
                                                    data-srcset="/data/files/card_info/1x/frameflover.webp 1x,/data/files/card_info/2x/frameflover.webp 2x,/data/files/card_info/3x/frameflover.webp 3x,/data/files/card_info/4x/frameflover.webp 4x"
                                                    width="240" height="240"><svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                    fill="currentColor" width="300" height="300" viewBox="0 0 300 300"
                                                    class="icon envelope-preloader">
                                                    <path
                                                        d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z">
                                                    </path>
                                                </svg>
                                                <h3 class="no-wrap"><span wudooh="true"
                                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Happy birthday with
                                                                flower frame</font>
                                                        </font>
                                                    </span></h3>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="width: 299.688px;" role="group"
                                            aria-label="16 / 20">
                                            <div class="card"><img class="swiper-lazy"
                                                    data-src="/data/files/card_info/1x/birthpic.webp"
                                                    data-srcset="/data/files/card_info/1x/birthpic.webp 1x,/data/files/card_info/2x/birthpic.webp 2x,/data/files/card_info/3x/birthpic.webp 3x,/data/files/card_info/4x/birthpic.webp 4x"
                                                    width="240" height="240"><svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                    fill="currentColor" width="300" height="300" viewBox="0 0 300 300"
                                                    class="icon envelope-preloader">
                                                    <path
                                                        d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z">
                                                    </path>
                                                </svg>
                                                <h3 class="no-wrap"><span wudooh="true"
                                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Happy birthday with
                                                                photo</font>
                                                        </font>
                                                    </span></h3>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="width: 299.688px;" role="group"
                                            aria-label="17 / 20">
                                            <div class="card"><img class="swiper-lazy"
                                                    data-src="/data/files/card_info/1x/birthday-frame.webp"
                                                    data-srcset="/data/files/card_info/1x/birthday-frame.webp 1x,/data/files/card_info/2x/birthday-frame.webp 2x,/data/files/card_info/3x/birthday-frame.webp 3x,/data/files/card_info/4x/birthday-frame.webp 4x"
                                                    width="240" height="240"><svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                    fill="currentColor" width="300" height="300" viewBox="0 0 300 300"
                                                    class="icon envelope-preloader">
                                                    <path
                                                        d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z">
                                                    </path>
                                                </svg>
                                                <h3 class="no-wrap"><span wudooh="true"
                                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Happy birthday frame
                                                            </font>
                                                        </font>
                                                    </span></h3>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="width: 299.688px;" role="group"
                                            aria-label="18 / 20">
                                            <div class="card"><img class="swiper-lazy"
                                                    data-src="/data/files/card_info/1x/spbirthday.webp"
                                                    data-srcset="/data/files/card_info/1x/spbirthday.webp 1x,/data/files/card_info/2x/spbirthday.webp 2x,/data/files/card_info/3x/spbirthday.webp 3x,/data/files/card_info/4x/spbirthday.webp 4x"
                                                    width="240" height="240"><svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                    fill="currentColor" width="300" height="300" viewBox="0 0 300 300"
                                                    class="icon envelope-preloader">
                                                    <path
                                                        d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z">
                                                    </path>
                                                </svg>
                                                <h3 class="no-wrap"><span wudooh="true"
                                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Birthday with your
                                                                favorite photo</font>
                                                        </font>
                                                    </span></h3>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="width: 299.688px;" role="group"
                                            aria-label="19 / 20">
                                            <div class="card"><img class="swiper-lazy"
                                                    data-src="/data/files/card_info/1x/birthframe.webp"
                                                    data-srcset="/data/files/card_info/1x/birthframe.webp 1x,/data/files/card_info/2x/birthframe.webp 2x,/data/files/card_info/3x/birthframe.webp 3x,/data/files/card_info/4x/birthframe.webp 4x"
                                                    width="240" height="240"><svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                    fill="currentColor" width="300" height="300" viewBox="0 0 300 300"
                                                    class="icon envelope-preloader">
                                                    <path
                                                        d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z">
                                                    </path>
                                                </svg>
                                                <h3 class="no-wrap"><span wudooh="true"
                                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Happy birthday frame
                                                            </font>
                                                        </font>
                                                    </span></h3>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="20 / 20"
                                            style="width: 299.688px;">
                                            <div class="card"><img class="swiper-lazy"
                                                    data-src="/data/files/card_info/1x/sefareshiirth.webp"
                                                    data-srcset="/data/files/card_info/1x/sefareshiirth.webp 1x,/data/files/card_info/2x/sefareshiirth.webp 2x,/data/files/card_info/3x/sefareshiirth.webp 3x,/data/files/card_info/4x/sefareshiirth.webp 4x"
                                                    width="240" height="240"><svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                    fill="currentColor" width="300" height="300" viewBox="0 0 300 300"
                                                    class="icon envelope-preloader">
                                                    <path
                                                        d="M127.1 16.4c-9.7-11.6-17.8 0-17.8 0S46.5 90.6 36 101.9s-9.3 21.4-9.3 21.4v130.3h78.7V46.8h47.3c-5.6-6.6-18.4-21.8-25.6-30.4z M107.6 49h166.9v239H107.6z">
                                                    </path>
                                                </svg>
                                                <h3 class="no-wrap"><span wudooh="true"
                                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Happy birthday custom
                                                            </font>
                                                        </font>
                                                    </span></h3>
                                            </div>
                                        </div>
                                    </div><span class="swiper-notification" aria-live="assertive"
                                        aria-atomic="true"></span>
                                </div>
                            </div>
                            <div class="jetp-comments">
                                <div class="cards-title"><span wudooh="true"
                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Register your opinion</font>
                                        </font>
                                    </span></div>
                                <div class="rating">
                                    <div class="stars"><svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                            width="16" height="16" viewBox="0 0 16 16" class="icon fr">
                                            <path
                                                d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z">
                                            </path>
                                        </svg><svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                            width="16" height="16" viewBox="0 0 16 16" class="icon fr">
                                            <path
                                                d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z">
                                            </path>
                                        </svg><svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                            width="16" height="16" viewBox="0 0 16 16" class="icon fr">
                                            <path
                                                d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z">
                                            </path>
                                        </svg><svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                            width="16" height="16" viewBox="0 0 16 16" class="icon fr">
                                            <path
                                                d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z">
                                            </path>
                                        </svg><svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                            width="16" height="16" viewBox="0 0 16 16" class="icon fr">
                                            <path
                                                d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z">
                                            </path>
                                        </svg></div>
                                    <div class="stars-fill-cover" style="width: 100%;">
                                        <div class="stars-fill"><svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                fill="currentColor" width="16" height="16" viewBox="0 0 16 16"
                                                class="icon fr">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                </path>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                fill="currentColor" width="16" height="16" viewBox="0 0 16 16"
                                                class="icon fr">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                </path>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                fill="currentColor" width="16" height="16" viewBox="0 0 16 16"
                                                class="icon fr">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                </path>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                fill="currentColor" width="16" height="16" viewBox="0 0 16 16"
                                                class="icon fr">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                </path>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                fill="currentColor" width="16" height="16" viewBox="0 0 16 16"
                                                class="icon fr">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                </path>
                                            </svg></div>
                                    </div>
                                </div>
                                <div class="rating-text"><span wudooh="true"
                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Overall rating: 5 out of 5 Number of
                                                votes: 2</font>
                                        </font>
                                    </span></div><b class="rating-help primary-color" style="display: none;"><span
                                        wudooh="true"
                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Click on "Send Comment" to register
                                                points</font>
                                        </font>
                                    </span></b>
                                <div class="approval-message" style="display: none;">
                                    <div><svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                            width="24" height="24" viewBox="0 0 24 24" class="icon ml-10"
                                            style="width: 36px; height: 36px;">
                                            <path
                                                d="M4,4H9.5C9.25,4.64 9.09,5.31 9.04,6H4V16H10V19.08L13.08,16H18V13.23L20,15.23V16A2,2 0 0,1 18,18H13.9L10.2,21.71C10,21.9 9.75,22 9.5,22H9A1,1 0 0,1 8,21V18H4A2,2 0 0,1 2,16V6C2,4.89 2.9,4 4,4M15.5,2C18,2 20,4 20,6.5C20,7.38 19.75,8.2 19.31,8.89L22.41,12L21,13.39L17.89,10.31C17.2,10.75 16.38,11 15.5,11C13,11 11,9 11,6.5C11,4 13,2 15.5,2M15.5,4A2.5,2.5 0 0,0 13,6.5A2.5,2.5 0 0,0 15.5,9A2.5,2.5 0 0,0 18,6.5A2.5,2.5 0 0,0 15.5,4Z">
                                            </path>
                                        </svg>
                                        <div><span wudooh="true"
                                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Your comment is pending
                                                        review and will be displayed after approval</font>
                                                </font>
                                            </span></div>
                                    </div>
                                </div>
                                <div class="inputs">
                                    <div class="label"><span wudooh="true"
                                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Enter your name</font>
                                            </font>
                                        </span></div><input type="text" maxlength="50" readonly="readOnly">
                                    <div class="label"><span wudooh="true"
                                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Enter the comment text</font>
                                            </font>
                                        </span></div><textarea rows="5" maxlength="1000"></textarea><button
                                        class="jetp-button save mw-200 mt-20"><span wudooh="true"
                                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Submit a comment</font>
                                            </font>
                                        </span></button>
                                </div>
                                <div class="comments">
                                    <div class="comment">
                                        <div class="head"><svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                                                class="icon">
                                                <path
                                                    d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M7.07,18.28C7.5,17.38 10.12,16.5 12,16.5C13.88,16.5 16.5,17.38 16.93,18.28C15.57,19.36 13.86,20 12,20C10.14,20 8.43,19.36 7.07,18.28M18.36,16.83C16.93,15.09 13.46,14.5 12,14.5C10.54,14.5 7.07,15.09 5.64,16.83C4.62,15.5 4,13.82 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,13.82 19.38,15.5 18.36,16.83M12,6C10.06,6 8.5,7.56 8.5,9.5C8.5,11.44 10.06,13 12,13C13.94,13 15.5,11.44 15.5,9.5C15.5,7.56 13.94,6 12,6M12,11A1.5,1.5 0 0,1 10.5,9.5A1.5,1.5 0 0,1 12,8A1.5,1.5 0 0,1 13.5,9.5A1.5,1.5 0 0,1 12,11Z">
                                                </path>
                                            </svg>
                                            <div class="text mr-10"><b class="title"><span wudooh="true"
                                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">11</font>
                                                        </font>
                                                    </span></b>
                                                <div class="date"><span wudooh="true"
                                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">August 31, 1403
                                                            </font>
                                                        </font>
                                                    </span></div>
                                            </div>
                                            <div class="rate">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">5 </font>
                                                </font><span wudooh="true"
                                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">stars</font>
                                                    </font>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="content"><span wudooh="true"
                                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Dad, what did you do?</font>
                                                </font>
                                            </span></div>
                                    </div>
                                    <div class="comment">
                                        <div class="head"><svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                                                class="icon">
                                                <path
                                                    d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M7.07,18.28C7.5,17.38 10.12,16.5 12,16.5C13.88,16.5 16.5,17.38 16.93,18.28C15.57,19.36 13.86,20 12,20C10.14,20 8.43,19.36 7.07,18.28M18.36,16.83C16.93,15.09 13.46,14.5 12,14.5C10.54,14.5 7.07,15.09 5.64,16.83C4.62,15.5 4,13.82 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,13.82 19.38,15.5 18.36,16.83M12,6C10.06,6 8.5,7.56 8.5,9.5C8.5,11.44 10.06,13 12,13C13.94,13 15.5,11.44 15.5,9.5C15.5,7.56 13.94,6 12,6M12,11A1.5,1.5 0 0,1 10.5,9.5A1.5,1.5 0 0,1 12,8A1.5,1.5 0 0,1 13.5,9.5A1.5,1.5 0 0,1 12,11Z">
                                                </path>
                                            </svg>
                                            <div class="text mr-10"><b class="title"><span wudooh="true"
                                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Delsa John</font>
                                                        </font>
                                                    </span></b>
                                                <div class="date"><span wudooh="true"
                                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">August 25, 1403
                                                            </font>
                                                        </font>
                                                    </span></div>
                                            </div>
                                            <div class="rate">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">5 </font>
                                                </font><span wudooh="true"
                                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">stars</font>
                                                    </font>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="content"><span wudooh="true"
                                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">My daughter, the light of our
                                                        lives</font>
                                                </font>
                                            </span></div>
                                    </div>
                                </div>
                                <div class="more primary-hover" style="display: none;"><span wudooh="true"
                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Show more comments</font>
                                        </font>
                                    </span></div>
                            </div>
                        </div>
                    </div>
                </div>
    @endsection