<!DOCTYPE html>
<!-- saved from url=(0039)https://post.ddev.site//app/account/login -->
<html lang="en" class="translated-ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title></title>
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
    <!-- <link href="./login_files/css2" rel="stylesheet"> -->
    <style id="wudoohCustomFontsStyle"></style>
    <meta id="wudoohMetaElement" wudooh="true">
    <link type="text/css" rel="stylesheet" charset="UTF-8" href="./login_files/m=el_main_css">
</head>

<body>
<form method="POST" action="{{ route('login.post') }}" >
    @csrf
    <div id="app">
        <div class="jetp-login-page">

            <header class="jetp-header fixed" style="position: fixed; left: 0px; right: 0px;">
                <a href="{{url('home')}}"
                    class="fr icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                        class="icon localize">
                        <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                    </svg></a>
                </header>

                    <h1 class="mb-20"><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Login to account</font>
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
                        </span></div><input type="email" name="email" id="txtEmail" class="mb-10">
                    <div class="title"><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">password</font>
                            </font>
                        </span></div>
                    <div class="input-password"><input type="password" name="password" id="txtPassword">
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
                    </div>
                    <a href="{{url('forgot')}}"  class="change title mb-20" style="font-size: 12px;"><span><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Forgot your password?</font>
                                </font>
                            </span></span></a>

                            <button type="submit" class="fill mb-40"><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">log in</font>
                            </font>
                        </span></button><a href="{{url('register')}}" class="change"><span class="ml-5"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Not registered? </font>
                                </font>
                            </span></span><b><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Register</font>
                                </font>
                            </span></b></a>

        </div>
    </div>
    </form>
    <link href="{{url('website/assets/css/login.css')}}" rel="stylesheet">


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
