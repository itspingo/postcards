<!DOCTYPE html>
<!-- saved from url=(0032)https://post.ddev.site//app/create -->
<html lang="en" class="translated-ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Making cards - digital postcards</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">

    <link rel="shortcut icon" href="https://post.ddev.site//resources/images/fav-fa/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180"
        href="https://post.ddev.site//resources/images/fav-fa/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="https://post.ddev.site//resources/images/fav-fa/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="https://post.ddev.site//resources/images/fav-fa/favicon-16x16.png')}}">
    <link rel="manifest" href="https://post.ddev.site//resources/images/fav-fa/site.webmanifest">
    <link rel="mask-icon" href="https://post.ddev.site//resources/images/fav-fa/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="theme-color" content="#FFFFFF">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="{{ url('website/assets/css/css2') }}" rel="stylesheet">

    <style id="wudoohCustomFontsStyle"></style>
    <meta id="wudoohMetaElement" wudooh="true">
    <link type="text/css" rel="stylesheet" charset="UTF-8" href="{{ url('website/assets/css/m=el_main_css') }}">
    <script src="{{ url('/assets/ckeditor4/ckeditor.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Add jQuery CDN link -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Jcrop CSS and JS -->
    <link rel="stylesheet" href="{{ url('website/assets/css/jquery.Jcrop.min.css') }}">



    <script>
        window.module = {};
    </script>
    <script src="{{ url('website/assets/js/confetti.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.3.0/worker-javascript.js"></script>

    <script>
        window.confetti = module.exports;
    </script>

    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.3.0/ace.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/js-beautify/1.7.5/beautify.min.js"></script>

    <style>
        @font-face {
            font-family: 'Mea Culpa';
            src: url('{{ url('website/assets/fonts/MeaCulpa-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Lobster';
            src: url('{{ url('website/assets/fonts/Lobster-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Mea Culpa';
            src: url('{{ url('website/assets/fonts/MeaCulpa-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Lobster';
            src: url('{{ url('website/assets/fonts/Lobster-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Allison';
            src: url('{{ url('website/assets/fonts/Allison-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Amatic SC';
            src: url('{{ url('website/assets/fonts/AmaticSC-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Bad Script';
            src: url('{{ url('website/assets/fonts/BadScript-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Ballet';
            src: url('{{ url('website/assets/fonts/Ballet[opsz].ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Barriecito';
            src: url('{{ url('website/assets/fonts/Barriecito-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Berkshire Swash';
            src: url('{{ url('website/assets/fonts/BerkshireSwash-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Bhu Tuka';
            src: url('{{ url('website/assets/fonts/BhuTukaExpandedOne-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Bigelow Rules';
            src: url('{{ url('website/assets/fonts/BigelowRules-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Black Ops';
            src: url('{{ url('website/assets/fonts/BlackOpsOne-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Bonbon';
            src: url('{{ url('website/assets/fonts/Bonbon-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Calistoga';
            src: url('{{ url('website/assets/fonts/Calistoga-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Caramel';
            src: url('{{ url('website/assets/fonts/Caramel-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Caveat Brush';
            src: url('{{ url('website/assets/fonts/CaveatBrush-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Cedarville';
            src: url('{{ url('website/assets/fonts/Cedarville-Cursive.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Combo';
            src: url('{{ url('website/assets/fonts/Combo-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Dancing Script';
            src: url('{{ url('website/assets/fonts/DancingScript[wght].ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Economica';
            src: url('{{ url('website/assets/fonts/Economica-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Edu NSW ACT';
            src: url('{{ url('website/assets/fonts/EduNSWACTFoundation[wght].ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Ephesis';
            src: url('{{ url('website/assets/fonts/Ephesis-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Flavors';
            src: url('{{ url('website/assets/fonts/Flavors-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Gluten';
            src: url('{{ url('website/assets/fonts/Gluten[slnt,wght].ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Great Vibes';
            src: url('{{ url('website/assets/fonts/GreatVibes-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Hanalei Fill';
            src: url('{{ url('website/assets/fonts/HanaleiFill-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Handlee';
            src: url('{{ url('website/assets/fonts/Handlee-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Hi Melody';
            src: url('{{ url('website/assets/fonts/HiMelody-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Indie Flower';
            src: url('{{ url('website/assets/fonts/IndieFlower-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Jim Nightshade';
            src: url('{{ url('website/assets/fonts/JimNightshade-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Julius Sans';
            src: url('{{ url('website/assets/fonts/JuliusSansOne-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Kalam';
            src: url('{{ url('website/assets/fonts/Kalam-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Lilita One';
            src: url('{{ url('website/assets/fonts/LilitaOne-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Meddon';
            src: url('{{ url('website/assets/fonts/Meddon.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Miltonian Tattoo';
            src: url('{{ url('website/assets/fonts/MiltonianTattoo-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Mitr';
            src: url('{{ url('website/assets/fonts/Mitr-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Monoton';
            src: url('{{ url('website/assets/fonts/Monoton-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Montez';
            src: url('{{ url('website/assets/fonts/Montez-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Oi';
            src: url('{{ url('website/assets/fonts/Oi-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Pacifico';
            src: url('{{ url('website/assets/fonts/Pacifico-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Parisienne';
            src: url('{{ url('website/assets/fonts/Parisienne-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Princess Sofia';
            src: url('{{ url('website/assets/fonts/PrincessSofia-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Righteous';
            src: url('{{ url('website/assets/fonts/Righteous-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Risque';
            src: url('{{ url('website/assets/fonts/Risque-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Rock Salt';
            src: url('{{ url('website/assets/fonts/RockSalt-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Rouge Script';
            src: url('{{ url('website/assets/fonts/RougeScript-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Rubik Beastly';
            src: url('{{ url('website/assets/fonts/RubikBeastly-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Rubik Moonrocks';
            src: url('{{ url('website/assets/fonts/RubikMoonrocks-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Russo One';
            src: url('{{ url('website/assets/fonts/RussoOne-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Sacramento';
            src: url('{{ url('website/assets/fonts/Sacramento-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Sansita';
            src: url('{{ url('website/assets/fonts/Sansita-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Satisfy';
            src: url('{{ url('website/assets/fonts/Satisfy-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Sedgwick Ave';
            src: url('{{ url('website/assets/fonts/SedgwickAve-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Send Flowers';
            src: url('{{ url('website/assets/fonts/SendFlowers-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Shadows Into Light';
            src: url('{{ url('website/assets/fonts/ShadowsIntoLight.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Sigmar One';
            src: url('{{ url('website/assets/fonts/SigmarOne-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Sigmar';
            src: url('{{ url('website/assets/fonts/Sigmar-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Snowburst One';
            src: url('{{ url('website/assets/fonts/SnowburstOne-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Special Elite';
            src: url('{{ url('website/assets/fonts/SpecialElite-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Square Peg';
            src: url('{{ url('website/assets/fonts/SquarePeg-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Sriracha';
            src: url('{{ url('website/assets/fonts/Sriracha-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Style Script';
            src: url('{{ url('website/assets/fonts/StyleScript-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Sue Ellen Francisco';
            src: url('{{ url('website/assets/fonts/SueEllenFrancisco-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Tangerine';
            src: url('{{ url('website/assets/fonts/Tangerine-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Tourney';
            src: url('{{ url('website/assets/fonts/Tourney[wdth,wght].ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Unlock';
            src: url('{{ url('website/assets/fonts/Unlock-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Wendy One';
            src: url('{{ url('website/assets/fonts/WendyOne-Regular.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Wind Song';
            src: url('{{ url('website/assets/fonts/WindSong-Regular.ttf') }}') format('truetype');
        }
    </style>

</head>

<body dir="ltr">
    <div id="app">
        <div class="jetp-home fixed-wrapper">

            <div class="jetp-sidebar">
                <div class="logo-place"><img src="{{ url('website/assets/images/logo-v2.svg') }}" alt="DigiPostal"
                        width="512" height="512"><strong><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Digital postcard</font>
                            </font>
                        </span></strong></div>
                <div class="jetp-sidebar-items">
                    <div class="item primary-hover"><a href="{{ url('home') }}"><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                                class="icon primary-color">
                                <path
                                    d="M12 5.69L17 10.19V18H15V12H9V18H7V10.19L12 5.69M12 3L2 12H5V20H11V14H13V20H19V12H22L12 3Z">
                                </path>
                            </svg><span class="title"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Home</font>
                                    </font>
                                </span></span></a></div>
                    <div class="item primary-hover"><a href="{{ url('card_designer') }}"><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                                class="icon primary-color">
                                <path
                                    d="M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M13,7H11V11H7V13H11V17H13V13H17V11H13V7Z">
                                </path>
                            </svg><span class="title"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Card making</font>
                                    </font>
                                </span></span></a></div>
                    <div class="item primary-hover"><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                            height="24" viewBox="0 0 24 24" class="icon primary-color">
                            <path
                                d="M3 11H11V3H3M5 5H9V9H5M13 21H21V13H13M15 15H19V19H15M3 21H11V13H3M5 15H9V19H5M13 3V11H21V3M19 9H15V5H19Z">
                            </path>
                        </svg><span class="title"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Grouping</font>
                                </font>
                            </span></span></div>
                    <div class="item primary-hover"><a href="{{ url('mycards') }}"><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1" fill="currentColor" width="24" height="24"
                                viewBox="0 0 24 24" class="icon primary-color">
                                <path
                                    d="M20,18H4V8H20M20,6H12L10,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V8C22,6.89 21.1,6 20,6Z">
                                </path>
                            </svg><span class="title"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">my cards</font>
                                    </font>
                                </span></span></a></div>
                    <div class="item primary-hover"><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                            width="24" height="24" viewBox="0 0 24 24" class="icon primary-color">
                            <path
                                d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z">
                            </path>
                        </svg><span class="title"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Favorites</font>
                                </font>
                            </span></span></div>
                    <div class="line"></div>
                    <div class="item primary-hover"><a href="{{ url('chargplan') }}"><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1" fill="currentColor" width="24" height="24"
                                viewBox="0 0 24 24" class="icon primary-color">
                                <path
                                    d="M2,2V5.5C3.1,5.5 4,6.62 4,8C4,9.38 3.1,10.5 2,10.5V13.5C3.1,13.5 4,14.62 4,16C4,17.38 3.1,18.5 2,18.5V22H5.5C5.5,20.9 6.62,20 8,20C9.38,20 10.5,20.9 10.5,22H13.5C13.5,20.9 14.62,20 16,20C17.38,20 18.5,20.9 18.5,22H22V18.5C20.9,18.5 20,17.38 20,16V16C20,14.62 20.9,13.5 22,13.5V10.5C20.9,10.5 20,9.38 20,8V8C20,6.62 20.9,5.5 22,5.5V2H18.5C18.5,3.1 17.38,4 16,4C14.62,4 13.5,3.1 13.5,2H10.5C10.5,3.1 9.38,4 8,4C6.62,4 5.5,3.1 5.5,2H2M6,6H18V18H6V6M9,7A2,2 0 0,0 7,9A2,2 0 0,0 9,11A2,2 0 0,0 11,9A2,2 0 0,0 9,7M17,10L14,13L12,12L7,17H17V10Z">
                                </path>
                            </svg><span class="title"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Stamp charge</font>
                                    </font>
                                </span></span></a></div>
                    <div class="item primary-hover"><a href="{{ url('transactions') }}"><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1" fill="currentColor" width="24" height="24"
                                viewBox="0 0 24 24" class="icon primary-color">
                                <path
                                    d="M19.5 3.5L18 2L16.5 3.5L15 2L13.5 3.5L12 2L10.5 3.5L9 2L7.5 3.5L6 2L4.5 3.5L3 2V22L4.5 20.5L6 22L7.5 20.5L9 22L10.5 20.5L12 22L13.5 20.5L15 22L16.5 20.5L18 22L19.5 20.5L21 22V2L19.5 3.5M19 19.09H5V4.91H19V19.09M6 15H18V17H6M6 11H18V13H6M6 7H18V9H6Z">
                                </path>
                            </svg><span class="title"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Transactions</font>
                                    </font>
                                </span></span></a></div>
                    <div class="item primary-hover"><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                            width="24" height="24" viewBox="0 0 24 24" class="icon primary-color">
                            <path
                                d="M19 15V18H16V20H19V23H21V20H24V18H21V15H19M14 18H3V8L11 13L19 8V13H21V6C21 4.9 20.1 4 19 4H3C1.9 4 1 4.9 1 6V18C1 19.1 1.9 20 3 20H14V18M19 6L11 11L3 6H19Z">
                            </path>
                        </svg><span class="title"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Custom design order</font>
                                </font>
                            </span></span></div>
                    <div class="item primary-hover"><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                            width="24" height="24" viewBox="0 0 24 24" class="icon primary-color">
                            <path
                                d="M18.72,14.76C19.07,13.91 19.26,13 19.26,12C19.26,11.28 19.15,10.59 18.96,9.95C18.31,10.1 17.63,10.18 16.92,10.18C13.86,10.18 11.15,8.67 9.5,6.34C8.61,8.5 6.91,10.26 4.77,11.22C4.73,11.47 4.73,11.74 4.73,12A7.27,7.27 0 0,0 12,19.27C13.05,19.27 14.06,19.04 14.97,18.63C15.54,19.72 15.8,20.26 15.78,20.26C14.14,20.81 12.87,21.08 12,21.08C9.58,21.08 7.27,20.13 5.57,18.42C4.53,17.38 3.76,16.11 3.33,14.73H2V10.18H3.09C3.93,6.04 7.6,2.92 12,2.92C14.4,2.92 16.71,3.87 18.42,5.58C19.69,6.84 20.54,8.45 20.89,10.18H22V14.67H22V14.69L22,14.73H21.94L18.38,18L13.08,17.4V15.73H17.91L18.72,14.76M9.27,11.77C9.57,11.77 9.86,11.89 10.07,12.11C10.28,12.32 10.4,12.61 10.4,12.91C10.4,13.21 10.28,13.5 10.07,13.71C9.86,13.92 9.57,14.04 9.27,14.04C8.64,14.04 8.13,13.54 8.13,12.91C8.13,12.28 8.64,11.77 9.27,11.77M14.72,11.77C15.35,11.77 15.85,12.28 15.85,12.91C15.85,13.54 15.35,14.04 14.72,14.04C14.09,14.04 13.58,13.54 13.58,12.91A1.14,1.14 0 0,1 14.72,11.77Z">
                            </path>
                        </svg><span class="title"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Request support</font>
                                </font>
                            </span></span></div>
                </div>
            </div>






            <div id="content_area">

                @yield('content')

            </div>


        </div>

    </div>





    <!-- -----------------------------------------------------------------------  -->


    <script>
        let website_storage = '{{ url('storage') }}' + '/';

        document.getElementById('upload_bg_image').addEventListener("change", function(e) {
            var file = e.target.files[0];
            var reader = new FileReader();
            reader.onload = function(f) {
                var data = f.target.result;
                var img = new Image();
                img.src = data;

                img.onload = function() {
                    var containerWidth = 1183;
                    var containerHeight = 458;
                    var imgWidth = img.width;
                    var imgHeight = img.height;

                    var newWidth, newHeight;

                    if (imgWidth / imgHeight > containerWidth / containerHeight) {
                        // Image is wider relative to the container
                        newWidth = containerWidth;
                        newHeight = (imgHeight / imgWidth) * containerWidth;
                    } else {
                        // Image is taller relative to the container
                        newHeight = containerHeight;
                        newWidth = (imgWidth / imgHeight) * containerHeight;
                    }

                    // Create a canvas to draw the resized image
                    var canvas = document.createElement('canvas');
                    canvas.width = newWidth;
                    canvas.height = newHeight;
                    var ctx = canvas.getContext('2d');
                    ctx.drawImage(img, 0, 0, newWidth, newHeight);

                    // Get the resized image as data URL
                    var resizedDataUrl = canvas.toDataURL();

                    // Clear the previous image and initialize the new one
                    var imageToCrop = $('#image_to_crop_context');
                    imageToCrop.removeAttr('src').removeAttr('style').removeClass('jcrop-active');
                    if (imageToCrop.data('Jcrop')) {
                        imageToCrop.data('Jcrop')
                            .destroy(); // Ensure Jcrop is destroyed before re-initializing
                    }

                    // Set the image dimensions to fit within the container while maintaining aspect ratio
                    imageToCrop.css({
                        width: newWidth + 'px',
                        height: newHeight + 'px'
                    }).attr('src', resizedDataUrl).on('load', function() {
                        showhide('div_crop_image_context', ['div_upload_bg_image']);

                        // Initialize Jcrop with updated settings
                        imageToCrop.Jcrop({
                            allowSelect: true, // Allow cropper to be selected
                            setSelect: [50, 50, 200, newHeight - 20], // Default selection
                            onSelect: function(c) {
                                size = {
                                    x: c.x,
                                    y: c.y,
                                    w: c.w,
                                    h: c.h
                                };
                            },
                            onChange: function(c) {
                                size = {
                                    x: c.x,
                                    y: c.y,
                                    w: c.w,
                                    h: c.h
                                };
                            }
                        });


                        // Get the cropped image data URL
                        var croppedDataUrl = canvas.toDataURL();
                        var croppedImage = new Image();

                        croppedImage.src = croppedDataUrl;

                        // Save the cropped image to storage
                        var formData = new FormData();
                        formData.append('image', croppedImage);

                        // console.log(croppedDataUrl);

                        $.ajax({
                            url: '{{ route('card_designer.updateCanvasImage') }}', // Adjust the URL if necessary
                            type: 'POST',
                            data: {
                                _token: '{{ csrf_token() }}',
                                imageURL: croppedDataUrl
                            },
                            success: function(response) {
                                console.log('Cropped image saved successfully');
                            },
                            error: function(xhr, status, error) {
                                console.log('Failed to save cropped image error: ' +
                                    error);
                            }
                        });




                    });

                };
            };
            reader.readAsDataURL(file);
        });


        function setCanvasBackground(cardId) {
            $.ajax({
                url: '{{ route('getCanvasImage', ['cardId' => ':cardId']) }}'.replace(':cardId', cardId),
                type: 'GET',
                success: function(response) {
                    if (response.imageUrl) {
                        // alert(response.imageUrl);
                        fabric.Image.fromURL(response.imageUrl, function(img) {
                            fabcanvas.setBackgroundImage(img, fabcanvas.renderAll.bind(fabcanvas), {
                                scaleX: fabcanvas.width / img.width,
                                scaleY: fabcanvas.height / img.height
                            });
                        });
                    } else {
                        // set canvas background color to white
                        fabcanvas.setBackgroundColor('white', function() {
                            fabcanvas.renderAll();
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.log('Failed to fetch background image');
                    fabcanvas.setBackgroundColor('white', function() {
                        fabcanvas.renderAll();
                    });
                }
            });
        }


        function addcBackgroundImage(recid, imageURL) {

            document.getElementById('div_envelop_front').style.backgroundImage = 'url(' + imageURL + ')';
            document.getElementById('div_envelop_seal').style.backgroundImage = 'url(' + imageURL + ')';
            document.getElementById('div_envelop_back').style.backgroundImage = 'url(' + imageURL + ')';
            document.getElementById('div_post_card').style.backgroundImage = 'url(' + imageURL + ')';
            hide_div('div_more_backgrounds');

            // AJAX request to update the database using jQuery
            $.ajax({
                url: '{{ route('card_designer.updateBackgroundImage') }}', // Adjust the URL if necessary
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    imageURL: imageURL,
                    recid: recid
                },
                success: function(response) {
                    console.log('Background image updated successfully');
                },
                error: function(xhr, status, error) {
                    console.log('Failed to update background image');
                }
            });

        }


        function addcInsideImage(recid, imageURL) {

            document.getElementById('img_envelop_inside').src = imageURL;
            document.getElementById('img_envelop_inside3').src = imageURL;
            hide_div('div_more_inside_images');

            var updateImageUrl = '{{ route('card_designer.updateInsideImage') }}';
            var csrfToken = '{{ csrf_token() }}';

            // AJAX request to update the database using jQuery
            $.ajax({
                url: updateImageUrl,
                method: "POST",
                data: {
                    _token: csrfToken,
                    imageURL: imageURL,
                    recid: recid
                },
                success: function(response) {
                    console.log('Background image updated successfully');
                },
                error: function(xhr, status, error) {
                    console.log('Failed to update background image');
                }
            });

        }




        function addcCanvasImage(imageURL) {
            // alert(imageURL);
            // var imageURL2 = imageURL;

            fabric.Image.fromURL(imageURL, function(img) {
                img.scaleToHeight(100);
                img.scaleToWidth(100);
                fabcanvas.centerObject(img);
                fabcanvas.add(img);
                fabcanvas.renderAll();
            });
            hide_div('div_more_stickers');

        }


        function addStampImage(recid, imageURL) {
            // var imageURL2 = imageURL;

            document.getElementById('img_stamp_image').src = imageURL;
            hide_div('div_more_stamp_images');
            // AJAX request to update the database using jQuery
            $.ajax({
                url: '{{ route('card_designer.updateStampImage') }}', // Adjust the URL if necessary
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    imageURL: imageURL,
                    recid: recid
                },
                success: function(response) {
                    console.log('Background image updated successfully');
                },
                error: function(xhr, status, error) {
                    console.log('Failed to update background image');
                }
            });
        }


        function addstampdesign(recid, imageURL) {
            // var imageURL2 = imageURL;

            document.getElementById('img_stamp_design').src = imageURL;
            hide_div('div_more_stamp_designs');
            // AJAX request to update the database using jQuery
            $.ajax({
                url: '{{ route('card_designer.updateStampDesign') }}', // Adjust the URL if necessary
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    imageURL: imageURL,
                    recid: recid
                },
                success: function(response) {
                    console.log('Background image updated successfully');
                },
                error: function(xhr, status, error) {
                    console.log('Failed to update background image');
                }
            });
        }


        function addsealdesign(recid, imageURL) {
            // var imageURL2 = imageURL;

            document.getElementById('img_seal_design').src = imageURL;
            hide_div('div_more_seal_designs');
            // AJAX request to update the database using jQuery
            $.ajax({
                url: '{{ route('card_designer.updateSealDesign') }}', // Adjust the URL if necessary
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    imageURL: imageURL,
                    recid: recid
                },
                success: function(response) {
                    console.log('Background image updated successfully');
                },
                error: function(xhr, status, error) {
                    console.log('Failed to update background image');
                }
            });
        }

        function addcardmusic(recid, musictitle, musicfile) {
            // var imageURL2 = imageURL;
            alert(musictitle);

            hide_div('div_more_cardmusic');
            // AJAX request to update the database using jQuery
            $.ajax({
                url: '{{ route('card_designer.updateCardMusic') }}', // Adjust the URL if necessary
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    musictitle: musictitle,
                    musicfile: musicfile,
                    recid: recid
                },
                success: function(response) {
                    console.log('Background image updated successfully');
                },
                error: function(xhr, status, error) {
                    console.log('Failed to update background image');
                }
            });
        }



        function add_recipient_name() {
            // Get the HTML content from CKEditor
            let usrtxt = document.getElementById('recipient_name').value;
            document.getElementById('span_recipient_name').innerHTML = usrtxt;

            hide_div('div_recipient_name');
            // AJAX request to update the database using jQuery
            $.ajax({
                url: '{{ route('card_designer.updateRecipientName') }}', // Adjust the URL if necessary
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    recipient_name: usrtxt
                },
                success: function(response) {
                    console.log('Background image updated successfully');
                },
                error: function(xhr, status, error) {
                    console.log('Failed to update background image');
                }
            });

        }

        function add_sender_name() {
            // Get the HTML content from CKEditor
            let usrtxt = document.getElementById('sender_name').value;
            document.getElementById('span_sender_name').innerHTML = usrtxt;

            hide_div('div_sender_name');
            // AJAX request to update the database using jQuery
            $.ajax({
                url: '{{ route('card_designer.updateSenderName') }}', // Adjust the URL if necessary
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    sender_name: usrtxt
                },
                success: function(response) {
                    console.log('sender name i supdated');
                },
                error: function(xhr, status, error) {
                    console.log('Failed to update background image');
                }
            });

        }


        function addenvelopdesign(recid, frontimage, backimage, flapimage) {
            // var imageURL2 = imageURL;
            // alert(frontimage);

            document.getElementById('img_front_image').src = frontimage;
            document.getElementById('img_back_image').src = backimage;
            document.getElementById('img_flap_image').src = flapimage;

            document.getElementById('img_front_image1').src = frontimage;
            document.getElementById('img_back_image2').src = backimage;
            document.getElementById('img_flap_image2').src = flapimage;

            document.getElementById('img_front_image3').src = frontimage;
            document.getElementById('img_back_image3').src = backimage;
            document.getElementById('img_flap_image3').src = flapimage;

            hide_div('div_more_envelop_designs');
            // AJAX request to update the database using jQuery
            $.ajax({
                url: '{{ route('card_designer.updateEnvelopDesign') }}', // Adjust the URL if necessary
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    frontimage: frontimage,
                    backimage: backimage,
                    flapimage: flapimage,
                    recid: recid
                },
                success: function(response) {
                    console.log('Envelop desing is updated');
                },
                error: function(xhr, status, error) {
                    console.log('Failed to update envelop design');
                }
            });
        }


        function showmorecardmusic($recid, musicfiles) {
            // Parse the JSON input
            var parsedMusicFiles = JSON.parse(musicfiles);
            console.log(parsedMusicFiles);
            var card_music_files = '';

            parsedMusicFiles.forEach(function(musicfile) {
                // Construct the URL for the music file
                var vmuscfile = musicfile.music_file;
                var music_file = vmuscfile.replace('public/', '');
                //  //'http://127.0.0.1:8001/storage/Ethan_Sturock_Summer_Time.mp3';  //website_storage.''; // + musicfile.replace('public/', '');
                var recno = musicfile.id;
                // Add HTML for each music file
                card_music_files += '<div class="item" onclick="saveMusic(\'' + music_file + '\',\'' + musicfile
                    .title +
                    '\',' + recno +
                    ')"> \
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            					<div class="title no-wrap"> \
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            						<span id="span_play_icon' +
                    recno +
                    '" ><i class="fas fa-play" style="margin-right: 8px; cursor: pointer;" onclick="playMusic(event,\'' +
                    music_file + '\',\'' + recno + '\',\'' + musicfile.title +
                    '\')"></i> </span>\
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            						<span id="span_stop_icon' +
                    recno +
                    '" style="display:none;" ><i class="fas fa-stop" style="margin-right: 8px; cursor: pointer;" onclick="stopMusic(event, \'' +
                    recno +
                    '\')"></i> </span>\
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            						<span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:\'Sahl Naskh\';">' +
                    musicfile
                    .title +
                    '</span> \
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            					</div> \
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            				</div>';
            });

            // Insert the constructed HTML into the DOM
            document.getElementById('more_cardmusic').innerHTML = card_music_files;
            showhide('div_more_cardmusic', ['div_cardmusic']);
        }

        var currentAudio = null;

        function playMusic(event, musicFileUrl, recno, musicFileTitle) {
            if (typeof event != 'undefined' && event != null)
                event.stopPropagation();
            var baseUrl = '{{ url('storage') }}';
            var vmusicFileUrl = baseUrl + '/' + musicFileUrl;
            // alert(vmusicFileUrl);
            currentAudio = new Audio(vmusicFileUrl);
            // currentAudio = audio;
            currentAudio.play();

            document.getElementById('span_current_file_title').innerHTML = musicFileTitle;
            document.getElementById('span_play_icon' + recno).style.display = 'none';
            document.getElementById('span_stop_icon' + recno).style.display = 'inline';
        }

        function saveMusic(music_file, title, recno) {
            hide_div('div_more_cardmusic');
            $.ajax({
                url: '{{ route('card_designer.updateMusic') }}', // Adjust the URL if necessary
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    music_file: music_file,
                    music_title: title,
                    music_file_id: recno
                },
                success: function(response) {
                    document.getElementById('span_current_file_title').innerHTML = title;
                    console.log('Music updated successfully');
                },
                error: function(xhr, status, error) {
                    console.log('Failed to update Music');
                }
            });

        }

        function saveCard() {
            // Set the canvas background to transparent
            // fabcanvas.backgroundColor = 'rgba(0, 0, 0, 0)';
            fabcanvas.backgroundColor = 'rgba(255,255,255,1)';


            // Create a promise to handle the toBlob operation
            new Promise(function(resolve, reject) {
                $('#upper_canvas').get(0).toBlob(function(blob) {
                    // saveAs(blob, "myIMG.png");
                    resolve(blob);
                }, 'image/png', 0.8); // You can adjust the quality here
            }).then(function(blob) {

                // Serialize the Fabric canvas to JSON
                var canvasJson = JSON.stringify(fabcanvas.toJSON());

                var formData = new FormData();
                formData.append('card_objects', canvasJson);
                formData.append('card_image', blob, 'card.jpg'); // Third parameter is filename

                formData.append('_token', '{{ csrf_token() }}');

                // Send the FormData to your Laravel backend using an AJAX request
                $.ajax({
                    url: '{{ url('card_designer/saveCardObjects') }}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        alert('Card is saved');
                        console.log('Canvas objects saved successfully');
                    },
                    error: function(xhr, status, error) {
                        console.log('Failed to save canvas objects', error);
                        console.log('XHR:', xhr);
                        console.log('Status:', status);
                    }
                });
            }).catch(function(error) {
                console.error('Error generating blob:', error);
            });
        }
    </script>


    <script>
        var editors = [];
        var activeTheme = 'dark';
        var currentStep = parseInt(localStorage.getItem('canvas-confetti/theme'), 10) || 0;
        var prefersLightTheme = window.matchMedia && window.matchMedia('(prefers-color-scheme: light)');
        var themes = {
            light: 'ace/theme/xcode',
            dark: 'ace/theme/monokai'
        };

        var getPreferedTheme = function() {
            return prefersLightTheme ? prefersLightTheme.matches ? 'light' : 'dark' : 'dark';
        };

        var setTheme = function(isAuto, theme) {
            if (isAuto) {
                document.body.setAttribute('auto-theme', true);
                activeTheme = getPreferedTheme();
            } else {
                document.body.removeAttribute('auto-theme');
                activeTheme = theme;
            }

            document.body.setAttribute('data-theme', activeTheme);

        };

        var updateTheme = function(step) {
            currentStep = step;

            switch (step) {
                case 0:
                    setTheme(true);
                    prefersLightTheme && prefersLightTheme.addEventListener('change', setTheme);
                    break;
                case 1:
                case 2:
                    setTheme(false, step === 1 ? 'dark' : 'light');
                    prefersLightTheme && prefersLightTheme.removeListener(setTheme);
                    break;
            }

            localStorage.setItem('canvas-confetti/theme', currentStep);
        }

        updateTheme(currentStep);

        document.getElementById('themeToggle').addEventListener('click', function(event) {
            updateTheme(++currentStep % 3);
        });

        var modes = {
            cannon: function cannon() {
                confetti({
                    particleCount: 100,
                    spread: 70,
                    origin: {
                        y: 0.6
                    }
                });
                $.ajax({
                    url: '{{ route('card_designer.updateEffects') }}', // Adjust the URL if necessary
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        effect_name: 'cannon'
                    },
                    success: function(response) {
                        console.log('Effect updated successfully');
                    },
                    error: function(xhr, status, error) {
                        console.log('Failed to update Effect');
                    }
                });
            },
            random: function random() {
                function randomInRange(min, max) {
                    return Math.random() * (max - min) + min;
                }

                confetti({
                    angle: randomInRange(55, 125),
                    spread: randomInRange(50, 70),
                    particleCount: randomInRange(50, 100),
                    origin: {
                        y: 0.6
                    }
                });
                $.ajax({
                    url: '{{ route('card_designer.updateEffects') }}', // Adjust the URL if necessary
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        effect_name: 'random'
                    },
                    success: function(response) {
                        console.log('Effect updated successfully');
                    },
                    error: function(xhr, status, error) {
                        console.log('Failed to update Effect');
                    }
                });
            },
            realistic: function realistic() {
                var count = 200;
                var defaults = {
                    origin: {
                        y: 0.7
                    }
                };

                function fire(particleRatio, opts) {
                    confetti({
                        ...defaults,
                        ...opts,
                        particleCount: Math.floor(count * particleRatio)
                    });
                }

                fire(0.25, {
                    spread: 26,
                    startVelocity: 55,
                });
                fire(0.2, {
                    spread: 60,
                });
                fire(0.35, {
                    spread: 100,
                    decay: 0.91,
                    scalar: 0.8
                });
                fire(0.1, {
                    spread: 120,
                    startVelocity: 25,
                    decay: 0.92,
                    scalar: 1.2
                });
                fire(0.1, {
                    spread: 120,
                    startVelocity: 45,
                });

                $.ajax({
                    url: '{{ route('card_designer.updateEffects') }}', // Adjust the URL if necessary
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        effect_name: 'realistic'
                    },
                    success: function(response) {
                        console.log('Effect updated successfully');
                    },
                    error: function(xhr, status, error) {
                        console.log('Failed to update Effect');
                    }
                });
            },
            fireworks: function fireworks() {
                var duration = 15 * 1000;
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
                $.ajax({
                    url: '{{ route('card_designer.updateEffects') }}', // Adjust the URL if necessary
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        effect_name: 'fireworks'
                    },
                    success: function(response) {
                        console.log('Effect updated successfully');
                    },
                    error: function(xhr, status, error) {
                        console.log('Failed to update Effect');
                    }
                });
            },
            snow: function snow() {
                var duration = 15 * 1000;
                var animationEnd = Date.now() + duration;
                var skew = 1;

                function randomInRange(min, max) {
                    return Math.random() * (max - min) + min;
                }

                (function frame() {
                    var timeLeft = animationEnd - Date.now();
                    var ticks = Math.max(200, 500 * (timeLeft / duration));
                    skew = Math.max(0.8, skew - 0.001);

                    confetti({
                        particleCount: 1,
                        startVelocity: 0,
                        ticks: ticks,
                        origin: {
                            x: Math.random(),
                            // since particles fall down, skew start toward the top
                            y: (Math.random() * skew) - 0.2
                        },
                        colors: ['#ffffff'],
                        shapes: ['circle'],
                        gravity: randomInRange(0.4, 0.6),
                        scalar: randomInRange(0.4, 1),
                        drift: randomInRange(-0.4, 0.4)
                    });

                    if (timeLeft > 0) {
                        requestAnimationFrame(frame);
                    }
                }());
                $.ajax({
                    url: '{{ route('card_designer.updateEffects') }}', // Adjust the URL if necessary
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        effect_name: 'snow'
                    },
                    success: function(response) {
                        console.log('Effect updated successfully');
                    },
                    error: function(xhr, status, error) {
                        console.log('Failed to update Effect');
                    }
                });
            },
            stars: function stars() {
                var defaults = {
                    spread: 360,
                    ticks: 50,
                    gravity: 0,
                    decay: 0.94,
                    startVelocity: 30,
                    colors: ['FFE400', 'FFBD00', 'E89400', 'FFCA6C', 'FDFFB8']
                };

                function shoot() {
                    confetti({
                        ...defaults,
                        particleCount: 40,
                        scalar: 1.2,
                        shapes: ['star']
                    });

                    confetti({
                        ...defaults,
                        particleCount: 10,
                        scalar: 0.75,
                        shapes: ['circle']
                    });
                }

                setTimeout(shoot, 0);
                setTimeout(shoot, 100);
                setTimeout(shoot, 200);

                $.ajax({
                    url: '{{ route('card_designer.updateEffects') }}', // Adjust the URL if necessary
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        effect_name: 'stars'
                    },
                    success: function(response) {
                        console.log('Effect updated successfully');
                    },
                    error: function(xhr, status, error) {
                        console.log('Failed to update Effect');
                    }
                });

            },
            continuous: function continuous() {
                var end = Date.now() + (15 * 1000);

                // go Buckeyes!
                var colors = ['#bb0000', '#ffffff'];

                (function frame() {
                    confetti({
                        particleCount: 2,
                        angle: 60,
                        spread: 55,
                        origin: {
                            x: 0
                        },
                        colors: colors
                    });
                    confetti({
                        particleCount: 2,
                        angle: 120,
                        spread: 55,
                        origin: {
                            x: 1
                        },
                        colors: colors
                    });

                    if (Date.now() < end) {
                        requestAnimationFrame(frame);
                    }
                }());
                $.ajax({
                    url: '{{ route('card_designer.updateEffects') }}', // Adjust the URL if necessary
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        effect_name: 'continuous'
                    },
                    success: function(response) {
                        console.log('Effect updated successfully');
                    },
                    error: function(xhr, status, error) {
                        console.log('Failed to update Effect');
                    }
                });
            },
            custom: function() {
                var canvas = document.getElementById('my-canvas');

                canvas.confetti = canvas.confetti || confetti.create(canvas, {
                    resize: true
                });

                canvas.confetti({
                    spread: 70,
                    origin: {
                        y: 1.2
                    }
                });
            },
            paths: function() {

                var pumpkin = confetti.shapeFromPath({
                    path: 'M449.4 142c-5 0-10 .3-15 1a183 183 0 0 0-66.9-19.1V87.5a17.5 17.5 0 1 0-35 0v36.4a183 183 0 0 0-67 19c-4.9-.6-9.9-1-14.8-1C170.3 142 105 219.6 105 315s65.3 173 145.7 173c5 0 10-.3 14.8-1a184.7 184.7 0 0 0 169 0c4.9.7 9.9 1 14.9 1 80.3 0 145.6-77.6 145.6-173s-65.3-173-145.7-173zm-220 138 27.4-40.4a11.6 11.6 0 0 1 16.4-2.7l54.7 40.3a11.3 11.3 0 0 1-7 20.3H239a11.3 11.3 0 0 1-9.6-17.5zM444 383.8l-43.7 17.5a17.7 17.7 0 0 1-13 0l-37.3-15-37.2 15a17.8 17.8 0 0 1-13 0L256 383.8a17.5 17.5 0 0 1 13-32.6l37.3 15 37.2-15c4.2-1.6 8.8-1.6 13 0l37.3 15 37.2-15a17.5 17.5 0 0 1 13 32.6zm17-86.3h-82a11.3 11.3 0 0 1-6.9-20.4l54.7-40.3a11.6 11.6 0 0 1 16.4 2.8l27.4 40.4a11.3 11.3 0 0 1-9.6 17.5z',
                    matrix: [0.020491803278688523, 0, 0, 0.020491803278688523, -7.172131147540983, -
                        5.9016393442622945
                    ]
                });
                // tree shape from https://thenounproject.com/icon/pine-tree-1471679/
                var tree = confetti.shapeFromPath({
                    path: 'M120 240c-41,14 -91,18 -120,1 29,-10 57,-22 81,-40 -18,2 -37,3 -55,-3 25,-14 48,-30 66,-51 -11,5 -26,8 -45,7 20,-14 40,-30 57,-49 -13,1 -26,2 -38,-1 18,-11 35,-25 51,-43 -13,3 -24,5 -35,6 21,-19 40,-41 53,-67 14,26 32,48 54,67 -11,-1 -23,-3 -35,-6 15,18 32,32 51,43 -13,3 -26,2 -38,1 17,19 36,35 56,49 -19,1 -33,-2 -45,-7 19,21 42,37 67,51 -19,6 -37,5 -56,3 25,18 53,30 82,40 -30,17 -79,13 -120,-1l0 41 -31 0 0 -41z',
                    matrix: [0.03597122302158273, 0, 0, 0.03597122302158273, -4.856115107913669, -
                        5.071942446043165
                    ]
                });
                // heart shape from https://thenounproject.com/icon/heart-1545381/
                var heart = confetti.shapeFromPath({
                    path: 'M167 72c19,-38 37,-56 75,-56 42,0 76,33 76,75 0,76 -76,151 -151,227 -76,-76 -151,-151 -151,-227 0,-42 33,-75 75,-75 38,0 57,18 76,56z',
                    matrix: [0.03333333333333333, 0, 0, 0.03333333333333333, -5.566666666666666, -
                        5.533333333333333
                    ]
                });

                var defaults = {
                    scalar: 2,
                    spread: 180,
                    particleCount: 30,
                    origin: {
                        y: -0.1
                    },
                    startVelocity: -35
                };

                confetti({
                    ...defaults,
                    shapes: [pumpkin],
                    colors: ['#ff9a00', '#ff7400', '#ff4d00']
                });
                confetti({
                    ...defaults,
                    shapes: [tree],
                    colors: ['#8d960f', '#be0f10', '#445404']
                });
                confetti({
                    ...defaults,
                    shapes: [heart],
                    colors: ['#f93963', '#a10864', '#ee0b93']
                });
                $.ajax({
                    url: '{{ route('card_designer.updateEffects') }}', // Adjust the URL if necessary
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        effect_name: 'paths'
                    },
                    success: function(response) {
                        console.log('Effect updated successfully');
                    },
                    error: function(xhr, status, error) {
                        console.log('Failed to update Effect');
                    }
                });
            },
            emoji: function() {
                var scalar = 2;
                var unicorn = confetti.shapeFromText({
                    text: '🦄',
                    scalar
                });

                var defaults = {
                    spread: 360,
                    ticks: 60,
                    gravity: 0,
                    decay: 0.96,
                    startVelocity: 20,
                    shapes: [unicorn],
                    scalar
                };

                function shoot() {
                    confetti({
                        ...defaults,
                        particleCount: 30
                    });

                    confetti({
                        ...defaults,
                        particleCount: 5,
                        flat: true
                    });

                    confetti({
                        ...defaults,
                        particleCount: 15,
                        scalar: scalar / 2,
                        shapes: ['circle']
                    });
                }

                setTimeout(shoot, 0);
                setTimeout(shoot, 100);
                setTimeout(shoot, 200);
                $.ajax({
                    url: '{{ route('card_designer.updateEffects') }}', // Adjust the URL if necessary
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        effect_name: 'emoji'
                    },
                    success: function(response) {
                        console.log('Effect updated successfully');
                    },
                    error: function(xhr, status, error) {
                        console.log('Failed to update Effect');
                    }
                });
            }
        };

        function pretty(val) {
            return js_beautify(val, {
                indent_size: 2,
                brace_style: 'preserve-inline',
            });
        }

        function getCode(name) {
            // pretty-print the code, since we will use minified code in production
            var code = pretty(modes[name].toString());
            // take out the function wrapper, trim all whitespace
            code = code.split('\n').slice(1).slice(0, -1).map(function(s) {
                return s.trim();
            }).join('\n');
            // pretty-print again
            return pretty(code);
        }

        window.onload = function() {
            [].forEach.call(document.querySelectorAll('.group'), function(group) {
                var name = group.getAttribute('data-name');
                var button = group.querySelector('.run');
                var codeElem = group.querySelector('.editor');

                var editor = ace.edit(codeElem);
                editor.setTheme(themes[activeTheme]);
                editor.session.setMode('ace/mode/javascript');
                editor.session.setUseSoftTabs(true);
                editor.session.setTabSize(2);

                editor.session.setValue(getCode(name));

                var count = editor.session.getLength();

                // set height so that all code is visible 
                codeElem.style.minHeight = (14 * count) + 1 + 'px';
                codeElem.style.height = (count) + 'rem';

                var itemDiv = group.closest(".item");
                itemDiv.onclick = function(ev) {

                    ev.preventDefault();

                    try {
                        eval(editor.getValue());
                        itemDiv.closest(".jetp-dialog-overlay").style.display = 'none';
                    } catch (e) {
                        console.error(e);
                    }
                };

                editors.push(editor);
            });
        };


        function show_hide_opts() {
            var vopts_popup = document.getElementById('receivers_list_options').style.display;
            if (vopts_popup == 'none') {
                document.getElementById('receivers_list_options').style.display = 'block';
            } else {
                document.getElementById('receivers_list_options').style.display = 'none';
            }
        }
    </script>




    <link href="{{ url('website/assets/css/style-v19.25.css') }}" rel="stylesheet">
    <link href="{{ url('website/assets/css/style-v20.2.css') }}" rel="stylesheet">
    <script src="{{ url('website/assets/js/fabric.min.js') }}"></script>
    <script src="{{ url('website/assets/js/centering_guidelines.js') }}"></script>
    <script src="{{ url('website/assets/js/aligning_guidelines.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.2/FileSaver.min.js"></script>
    <script src="{{ url('website/assets/js/canvas-toBlob.js') }}"></script>
    <script src="{{ url('website/assets/js/jquery.Jcrop.min.js') }}"></script>
    <script src="{{ url('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>



    <script src="{{ url('website/assets/js/postcard_functions.js') }}"></script>


</body>

</html>
