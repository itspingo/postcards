<!DOCTYPE html>
<!-- saved from url=(0040)https://post.ddev.site//app/account/forget -->
<html lang="en" class="translated-ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Forgot Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">

    <link rel="shortcut icon" href="https://post.ddev.site//resources/images/fav-fa/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180"
        href="https://post.ddev.site//resources/images/fav-fa/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="https://post.ddev.site//resources/images/fav-fa/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="https://post.ddev.site//resources/images/fav-fa/favicon-16x16.png">
    <link rel="manifest" href="https://post.ddev.site//resources/images/fav-fa/site.webmanifest">
    <link rel="mask-icon" href="https://post.ddev.site//resources/images/fav-fa/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="theme-color" content="#FFFFFF">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <!-- <link href="./forgot_files/css2" rel="stylesheet"> -->
    <style id="wudoohCustomFontsStyle"></style>
    <meta id="wudoohMetaElement" wudooh="true">
    <link type="text/css" rel="stylesheet" charset="UTF-8" href="./forgot_files/m=el_main_css">
</head>

<body>
    <div id="app">
        <div class="jetp-login-page">
            <header class="jetp-header fixed" style="position: fixed; left: 0px; right: 0px;"><a href="{{url('login')}}"
                    class="fr icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                        class="icon localize">
                        <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                    </svg></a></header>
            <h1><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Forgot your password?</font>
                    </font>
                </span></h1>


                @if(session('flash_success'))
                    <div id="flash_success" class="flash-message flash-success">{{session('flash_success')}}</div>
                @endif
                @if(session('flash_failure'))
                    <div id="flash_failure" class="flash-message flash-failure">{{session('flash_failure')}}</div>
                @endif

            <div class="mb-20"><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Enter your e-mail address so that the user account
                            will be updated with new password.</font>
                    </font>
                </span></div>
            <div class="title"><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">email</font>
                    </font>
                </span></div><input type="email" id="txtEmail" class="mb-20"><button class="fill"><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">submit</font>
                    </font>
                </span></button>


            <!-- <div class="mb-20 mt-10" style="display: none; text-align: center;"><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">The user account reset procedure has been sent to you.
                        </font>
                    </font>
                </span><br><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Open your email and follow the instructions.</font>
                    </font>
                </span></div>

                <button class="with-icon" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24"
                    viewBox="0 0 24 24" class="icon ml-10" style="color: rgb(223, 81, 59);">
                    <path
                        d="M20,18H18V9.25L12,13L6,9.25V18H4V6H5.2L12,10.25L18.8,6H20M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z">
                    </path>
                </svg><span><span wudooh="true"
                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">View email inbox</font>
                        </font>
                    </span></span></button> -->
        </div>
    </div>
    <link href="{{url('website/assets/css/forgot.css')}}" rel="stylesheet">


    <style>
        .flash-message {
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            color: #fff;
            display: flex;
        }
        .flash-success {
            background-color: #4CAF50;
        }
        .flash-failure {
            background-color: #f44336;
        }
    </style>

</body>

</html>
