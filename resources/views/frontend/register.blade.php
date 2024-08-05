<!DOCTYPE html>
<!-- saved from url=(0040)https://post.ddev.site//app/account/signup -->
<html lang="en" class="translated-ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Register</title>
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
    <!-- <link href="./signup_files/css2" rel="stylesheet"> -->
    <style id="wudoohCustomFontsStyle"></style>
    <meta id="wudoohMetaElement" wudooh="true">
    <link type="text/css" rel="stylesheet" charset="UTF-8" href="./signup_files/m=el_main_css">
</head>

<body>
    <div id="app">
        <div class="jetp-login-page">
            <h1 class="mb-20"><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Create an account</font>
                    </font>
                </span></h1>


                @if(session('flash_success'))
                    <div id="flash_success" class="flash-message flash-success">{{session('flash_success')}}</div>
                @endif
                @if(session('flash_failure'))
                    <div id="flash_failure" class="flash-message flash-failure">{{session('flash_failure')}}</div>
                @endif

            <div class="title"><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">email</font>
                    </font>
                </span></div><input type="email" id="txtEmail" class="mb-10">
            <div class="title"><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">password</font>
                    </font>
                </span></div>
            <div class="input-password mb-20"><input type="password" id="txtPassword">
                <div class="eye off"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon off">
                        <path
                            d="M2,5.27L3.28,4L20,20.72L18.73,22L15.65,18.92C14.5,19.3 13.28,19.5 12,19.5C7,19.5 2.73,16.39 1,12C1.69,10.24 2.79,8.69 4.19,7.46L2,5.27M12,9A3,3 0 0,1 15,12C15,12.35 14.94,12.69 14.83,13L11,9.17C11.31,9.06 11.65,9 12,9M12,4.5C17,4.5 21.27,7.61 23,12C22.18,14.08 20.79,15.88 19,17.19L17.58,15.76C18.94,14.82 20.06,13.54 20.82,12C19.17,8.64 15.76,6.5 12,6.5C10.91,6.5 9.84,6.68 8.84,7L7.3,5.47C8.74,4.85 10.33,4.5 12,4.5M3.18,12C4.83,15.36 8.24,17.5 12,17.5C12.69,17.5 13.37,17.43 14,17.29L11.72,15C10.29,14.85 9.15,13.71 9,12.28L5.6,8.87C4.61,9.72 3.78,10.78 3.18,12Z">
                        </path>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon on">
                        <path
                            d="M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9M12,4.5C17,4.5 21.27,7.61 23,12C21.27,16.39 17,19.5 12,19.5C7,19.5 2.73,16.39 1,12C2.73,7.61 7,4.5 12,4.5M3.18,12C4.83,15.36 8.24,17.5 12,17.5C15.76,17.5 19.17,15.36 20.82,12C19.17,8.64 15.76,6.5 12,6.5C8.24,6.5 4.83,8.64 3.18,12Z">
                        </path>
                    </svg></div>
            </div><button class="fill mb-20"><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Register</font>
                    </font>
                </span></button><a href="{{url('login')}}" class="change mb-20"><span class="ml-5"><span wudooh="true"
                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Already registered? </font>
                        </font>
                    </span></span><b><span wudooh="true"
                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">enter</font>
                        </font>
                    </span></b></a>


            <!-- <div class="or mb-40 mt-10">
                <div><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Or</font>
                        </font>
                    </span></div>
            </div>
            <button class="with-icon mb-10"><svg xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="210"
                    height="210" viewBox="0 0 210 210" class="icon ml-10"
                    style="color: rgb(223, 81, 59); padding: 2px;">
                    <path
                        d="M0,105C0,47.103,47.103,0,105,0c23.383,0,45.515,7.523,64.004,21.756l-24.4,31.696C133.172,44.652,119.477,40,105,40c-35.841,0-65,29.159-65,65s29.159,65,65,65c28.867,0,53.398-18.913,61.852-45H105V85h105v20c0,57.897-47.103,105-105,105S0,162.897,0,105z">
                    </path>
                </svg><span><span wudooh="true"
                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Login with Google account</font>
                        </font>
                    </span></span></button>
            <button class="with-icon mb-40"><svg xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24"
                    viewBox="0 0 24 24" class="icon ml-10" style="color: rgb(25, 111, 226);">
                    <path
                        d="M20,20H7A2,2 0 0,1 5,18V8.94L2.23,5.64C2.09,5.47 2,5.24 2,5A1,1 0 0,1 3,4H20A2,2 0 0,1 22,6V18A2,2 0 0,1 20,20M8.5,7A0.5,0.5 0 0,0 8,7.5V8.5A0.5,0.5 0 0,0 8.5,9H18.5A0.5,0.5 0 0,0 19,8.5V7.5A0.5,0.5 0 0,0 18.5,7H8.5M8.5,11A0.5,0.5 0 0,0 8,11.5V12.5A0.5,0.5 0 0,0 8.5,13H18.5A0.5,0.5 0 0,0 19,12.5V11.5A0.5,0.5 0 0,0 18.5,11H8.5M8.5,15A0.5,0.5 0 0,0 8,15.5V16.5A0.5,0.5 0 0,0 8.5,17H13.5A0.5,0.5 0 0,0 14,16.5V15.5A0.5,0.5 0 0,0 13.5,15H8.5Z">
                    </path>
                </svg><span><span wudooh="true"
                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Login with mobile number</font>
                        </font>
                    </span></span></button> -->


        </div>
    </div>

    <link href="{{url('website/assets/css/register.css')}}" rel="stylesheet">


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
