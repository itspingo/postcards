@extends('layouts.user_area')
@section('content')
    <div class="jetp-placeholder">
        <div class="jetp-receiver-page">
            <header class="jetp-header fixed"><button class="fr icon"><svg xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                        height="24" viewBox="0 0 24 24" class="icon localize">
                        <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z">
                        </path>
                    </svg></button>
                <button class="fl outline gray ml-20 elemid_gw2t8a" style="min-width: 72px;" onclick="show_hide_opts()">
                    <span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Options</font>
                        </font>
                    </span>
                </button>

                <!-- <button class="fl outline gray ml-10 elemid_xoga9" style="min-width: 72px;"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <font style="vertical-align: inherit;">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <font style="vertical-align: inherit;">view</font>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </font>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </span></button> -->

                <div class="title"><span wudooh="true"
                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">insert recipient</font>
                        </font>
                    </span></div>
            </header>
            <div class="jetp-receiver-header" style="display: none;"></div>
            <div class="jetp-receiver-add m-20-10" style="display: flex;"
                onclick="reset_addrecipient_form();showhide('div_receiver_info',['receivers_list_options'])"><svg
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z"></path>
                </svg><b class="mr-5"><span wudooh="true"
                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Add new recipient</font>
                        </font>
                    </span></b></div>
            <div class="jetp-receiver-wrraper detail">

                @foreach ($recipients as $recipient)
                    <div id="div_recipient_{{ $recipient->id }}" class="receiver-row m-20-10 mb-20">
                        <div class="row head">
                            <div class="full-name"><select data-id="{{ $recipient->id }}"
                                    onchange="save_recipient_prefix(this)">
                                    @foreach ($prefix_options as $prefix)
                                        <option value="{{ $prefix['value'] }}"
                                            {{ Str::lower($recipient->prefix) == Str::lower($prefix['value']) ? ' selected' : '' }}>
                                            <span wudooh="true"
                                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">{{ $prefix['value'] }}</font>
                                                </font>
                                            </span>
                                        </option>
                                    @endforeach
                                </select>
                                <div class="name no-wrap">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">{{ $recipient->recipient_name }}</font>
                                    </font>
                                </div>
                            </div>
                            <div class="spinner" style="margin: 0px 15px; display: none;"></div>
                            <div class="menu mr-5 " data-url="{{ $recipient->url }}" onclick="show_card_share_popup(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                                    class="icon" style="margin-right: 3px;">
                                    <path
                                        d="M18,16.08C17.24,16.08 16.56,16.38 16.04,16.85L8.91,12.7C8.96,12.47 9,12.24 9,12C9,11.76 8.96,11.53 8.91,11.3L15.96,7.19C16.5,7.69 17.21,8 18,8A3,3 0 0,0 21,5A3,3 0 0,0 18,2A3,3 0 0,0 15,5C15,5.24 15.04,5.47 15.09,5.7L8.04,9.81C7.5,9.31 6.79,9 6,9A3,3 0 0,0 3,12A3,3 0 0,0 6,15C6.79,15 7.5,14.69 8.04,14.19L15.16,18.34C15.11,18.55 15.08,18.77 15.08,19C15.08,20.61 16.39,21.91 18,21.91C19.61,21.91 20.92,20.61 20.92,19A2.92,2.92 0 0,0 18,16.08Z">
                                    </path>
                                </svg>
                            </div>
                            <div class="menu mr-a elemid_afvyzh"
                                onclick="open_recipient_option(event, '{{ $recipient->id }}');"><svg
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                                    class="icon">
                                    <path
                                        d="M12,16A2,2 0 0,1 14,18A2,2 0 0,1 12,20A2,2 0 0,1 10,18A2,2 0 0,1 12,16M12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12A2,2 0 0,1 12,10M12,4A2,2 0 0,1 14,6A2,2 0 0,1 12,8A2,2 0 0,1 10,6A2,2 0 0,1 12,4Z">
                                    </path>
                                </svg></div>
                        </div>
                        <!-- <div class="row cats" style="display: flex;">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <div class="cat mb-5 ml-5" style="background-color: rgb(123, 160, 1);"><span
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    wudooh="true"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <font style="vertical-align: inherit;">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <font style="vertical-align: inherit;">bride's family</font>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </font>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </span></div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <div class="cat mb-5 ml-5" style="background-color: rgb(210, 58, 2);"><span
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    wudooh="true"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <font style="vertical-align: inherit;">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <font style="vertical-align: inherit;">groom's family</font>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </font>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </span></div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div> -->
                        <div class="row info">
                            <div class="col">
                                <div class="pic"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                        width="24" height="24" viewBox="0 0 24 24" class="icon"
                                        style="width: 20px; height: 20px;">
                                        <path
                                            d="M6,2H18V8H18V8L14,12L18,16V16H18V22H6V16H6V16L10,12L6,8V8H6V2M16,16.5L12,12.5L8,16.5V20H16V16.5M12,11.5L16,7.5V4H8V7.5L12,11.5M10,6H14V6.75L12,8.75L10,6.75V6Z">
                                        </path>
                                    </svg></div>
                                <div class="detail"><span wudooh="true"
                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                {{ get_card_recipient_card_status($recipient->card_status) }}
                                            </font>
                                        </font>
                                    </span></div>
                            </div>
                            <div class="col">
                                <div class="pic" style="margin-bottom: 2px;"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                        width="24" height="24" viewBox="0 0 24 24" class="icon"
                                        style="width: 20px; height: 20px;">
                                        <path
                                            d="M17,19H7V5H17M17,1H7C5.89,1 5,1.89 5,3V21A2,2 0 0,0 7,23H17A2,2 0 0,0 19,21V3C19,1.89 18.1,1 17,1Z">
                                        </path>
                                    </svg></div>
                                <div class="detail"><span wudooh="true"
                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">{{ $recipient->mobile_no }}
                                            </font>
                                        </font>
                                    </span></div>
                            </div>
                            <div class="col">
                                <div class="pic"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                        width="24" height="24" viewBox="0 0 24 24" class="icon"
                                        style="width: 20px; height: 20px;">
                                        <path
                                            d="M20,20H7A2,2 0 0,1 5,18V8.94L2.23,5.64C2.09,5.47 2,5.24 2,5A1,1 0 0,1 3,4H20A2,2 0 0,1 22,6V18A2,2 0 0,1 20,20M8.5,7A0.5,0.5 0 0,0 8,7.5V8.5A0.5,0.5 0 0,0 8.5,9H18.5A0.5,0.5 0 0,0 19,8.5V7.5A0.5,0.5 0 0,0 18.5,7H8.5M8.5,11A0.5,0.5 0 0,0 8,11.5V12.5A0.5,0.5 0 0,0 8.5,13H18.5A0.5,0.5 0 0,0 19,12.5V11.5A0.5,0.5 0 0,0 18.5,11H8.5M8.5,15A0.5,0.5 0 0,0 8,15.5V16.5A0.5,0.5 0 0,0 8.5,17H13.5A0.5,0.5 0 0,0 14,16.5V15.5A0.5,0.5 0 0,0 13.5,15H8.5Z">
                                        </path>
                                    </svg></div>
                                <div class="detail"><span wudooh="true"
                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                {{ get_recipient_messages_count($recipient->card->id, $recipient->id) }}
                                                messages</font>
                                        </font>
                                    </span></div>
                            </div>
                        </div>
                        <div class="row date">
                            <div class="text">
                                <div class="title"><span wudooh="true"
                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">production date</font>
                                        </font>
                                    </span></div>
                                <div class="detail"><span wudooh="true"
                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">{{ $recipient->created_at }}</font>
                                        </font>
                                    </span></div>
                            </div>
                            <div class="buttons mr-a"><button class="play ml-10" style="display: none;"><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" fill="currentColor" width="24" height="24"
                                        viewBox="0 0 24 24" class="icon">
                                        <path d="M8,5.14V19.14L19,12.14L8,5.14Z"></path>
                                    </svg></button><button onclick="showhide('div_insert_recipient_name', [])"
                                    class="send" style="display: flex;"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                        width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                                        <path d="M23,3,2,12l21,9V14L8,12l15-2Z"></path>
                                    </svg>
                                    <div class="spinner small white"></div>
                                </button></div>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </div>



    <div id="receivers_list_options" class="jetp-menu open id_gw2t8a" style="right: 20px; top: 50px;display:none;">
        <div class="option">
            <a href="{{ url('mycards/receivers/' . $cardId) }}">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path
                        d="M17.65,6.35C16.2,4.9 14.21,4 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20C15.73,20 18.84,17.45 19.73,14H17.65C16.83,16.33 14.61,18 12,18A6,6 0 0,1 6,12A6,6 0 0,1 12,6C13.66,6 15.14,6.69 16.22,7.78L13,11H20V4L17.65,6.35Z">
                    </path>
                </svg><span><span wudooh="true"
                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">reload</font>
                        </font>
                    </span></span></a>
        </div>
        <div class="line"></div>
        <div class="option" onclick="reset_addrecipient_form();showhide('div_receiver_info',['receivers_list_options'])">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                <path d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z"></path>
            </svg><span><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Add new recipient</font>
                    </font>
                </span></span>
        </div>
        <!-- <div class="option"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <path d="M22,3H2C0.91,3.04 0.04,3.91 0,5V19C0.04,20.09 0.91,20.96 2,21H22C23.09,20.96 23.96,20.09 24,19V5C23.96,3.91 23.09,3.04 22,3M22,19H2V5H22V19M14,17V15.75C14,14.09 10.66,13.25 9,13.25C7.34,13.25 4,14.09 4,15.75V17H14M9,7A2.5,2.5 0 0,0 6.5,9.5A2.5,2.5 0 0,0 9,12A2.5,2.5 0 0,0 11.5,9.5A2.5,2.5 0 0,0 9,7M14,7V8H20V7H14M14,9V10H20V9H14M14,11V12H18V11H14">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </path>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </svg><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <font style="vertical-align: inherit;">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <font style="vertical-align: inherit;">Add from contacts</font>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </font>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </span></span></div> -->
        <div class="option" onclick="showhide('div_multiple_receiver_info',['receivers_list_options'])"><svg
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                <path
                    d="M12,5.5A3.5,3.5 0 0,1 15.5,9A3.5,3.5 0 0,1 12,12.5A3.5,3.5 0 0,1 8.5,9A3.5,3.5 0 0,1 12,5.5M5,8C5.56,8 6.08,8.15 6.53,8.42C6.38,9.85 6.8,11.27 7.66,12.38C7.16,13.34 6.16,14 5,14A3,3 0 0,1 2,11A3,3 0 0,1 5,8M19,8A3,3 0 0,1 22,11A3,3 0 0,1 19,14C17.84,14 16.84,13.34 16.34,12.38C17.2,11.27 17.62,9.85 17.47,8.42C17.92,8.15 18.44,8 19,8M5.5,18.25C5.5,16.18 8.41,14.5 12,14.5C15.59,14.5 18.5,16.18 18.5,18.25V20H5.5V18.25M0,20V18.5C0,17.11 1.89,15.94 4.45,15.6C3.86,16.28 3.5,17.22 3.5,18.25V20H0M24,20H20.5V18.25C20.5,17.22 20.14,16.28 19.55,15.6C22.11,15.94 24,17.11 24,18.5V20Z">
                </path>
            </svg><span><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Add multiple</font>
                    </font>
                </span></span></div>
        <div class="option" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                height="24" viewBox="0 0 24 24" class="icon">
                <path
                    d="M21.17 3.25Q21.5 3.25 21.76 3.5 22 3.74 22 4.08V19.92Q22 20.26 21.76 20.5 21.5 20.75 21.17 20.75H7.83Q7.5 20.75 7.24 20.5 7 20.26 7 19.92V17H2.83Q2.5 17 2.24 16.76 2 16.5 2 16.17V7.83Q2 7.5 2.24 7.24 2.5 7 2.83 7H7V4.08Q7 3.74 7.24 3.5 7.5 3.25 7.83 3.25M7 13.06L8.18 15.28H9.97L8 12.06L9.93 8.89H8.22L7.13 10.9L7.09 10.96L7.06 11.03Q6.8 10.5 6.5 9.96 6.25 9.43 5.97 8.89H4.16L6.05 12.08L4 15.28H5.78M13.88 19.5V17H8.25V19.5M13.88 15.75V12.63H12V15.75M13.88 11.38V8.25H12V11.38M13.88 7V4.5H8.25V7M20.75 19.5V17H15.13V19.5M20.75 15.75V12.63H15.13V15.75M20.75 11.38V8.25H15.13V11.38M20.75 7V4.5H15.13V7Z">
                </path>
            </svg><span><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Add from Excel file</font>
                    </font>
                </span></span></div>
        <div class="line"></div>
        <div class="option" onclick="showhide('div_text_options',['receivers_list_options'])"><svg
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                <path
                    d="M5,3C3.89,3 3,3.89 3,5V19C3,20.11 3.89,21 5,21H19C20.11,21 21,20.11 21,19V5C21,3.89 20.11,3 19,3H5M5,5H19V19H5V5M7,7V9H17V7H7M7,11V13H17V11H7M7,15V17H14V15H7Z">
                </path>
            </svg><span><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Text format</font>
                    </font>
                </span></span></div>
        <div class="option" onclick="hide_div('receivers_list_options');send_email_to_recipients();">

            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="24" height="24"
                viewBox="0 0 512 512" class="icon">
                <path
                    d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
            </svg>

            <span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Send email to recipient</font>
                    </font>
                </span></span>
        </div>
        <!-- <div class="option"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <path d="M5.5,9A1.5,1.5 0 0,0 7,7.5A1.5,1.5 0 0,0 5.5,6A1.5,1.5 0 0,0 4,7.5A1.5,1.5 0 0,0 5.5,9M17.41,11.58C17.77,11.94 18,12.44 18,13C18,13.55 17.78,14.05 17.41,14.41L12.41,19.41C12.05,19.77 11.55,20 11,20C10.45,20 9.95,19.78 9.58,19.41L2.59,12.42C2.22,12.05 2,11.55 2,11V6C2,4.89 2.89,4 4,4H9C9.55,4 10.05,4.22 10.41,4.58L17.41,11.58M13.54,5.71L14.54,4.71L21.41,11.58C21.78,11.94 22,12.45 22,13C22,13.55 21.78,14.05 21.42,14.41L16.04,19.79L15.04,18.79L20.75,13L13.54,5.71Z">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </path>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </svg><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <font style="vertical-align: inherit;">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <font style="vertical-align: inherit;">Manage tags</font>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </font>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </span></span></div> -->
    </div>

    <div id="div_receiver_info" class="jetp-dialog-overlay show" style="display: none;">
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
                <div class="jetp-close"><svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_receiver_info')"
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

                            @foreach ($prefix_options as $prefix)
                                <option value="{{ $prefix['value'] }}"
                                    @isset($recipient)
                                    
                                    {{ Str::lower($recipient->prefix) == Str::lower($prefix['value']) ? ' selected' : '' }}
                                @endisset>
                                    <span wudooh="true"
                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">{{ $prefix['value'] }}</font>
                                        </font>
                                    </span>
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="jetp-cover-input m-20-10 mt-20">
                        <div class="label"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Recipient Name</font>
                                </font>
                            </span></div><input type="text" name="name" id="recipient_name" maxlength="100"
                            value="">
                    </div>
                    <div class="jetp-cover-input m-20-10 mt-20">
                        <div class="label"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Mobile No: (optional)</font>
                                </font>
                            </span></div><input type="tel" name="mobile" id="mobile_no" maxlength="11"
                            value="">
                        <input type="hidden" name="cardid" id="recipient_cardid" value="{{ $cardId }}">
                        <input type="hidden" name="cardid" id="rec_recipient_id" value="">
                    </div>
                    <div class="jetp-cover-input m-20-10 mt-20">
                        <div class="label"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Email: (optional)</font>
                                </font>
                            </span></div><input type="email" name="recipient_email" id="recipient_email"
                            maxlength="50" value="">
                    </div>
                </div>
            </div>
            <div class="jetp-footer p-20-10" style="display: flex;"><button class="success ml-10"
                    onclick="save_nclose_recipient()"><span wudooh="true"
                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">confirmation</font>
                        </font>
                    </span></button><button id="btn_recinfo_confirm_continue" style="display:none;"
                    class="gray mr-10"><span wudooh="true" onclick="save_ncontinue_recipient()"
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


    <!-- Add multile recipient div -->
    <div id="div_multiple_receiver_info" class="jetp-dialog-overlay show" style="display: none;">
        <div class="jetp-dialog auto-size small">
            <div class="jetp-header">
                <div class="jetp-back" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                        height="24" viewBox="0 0 24 24" class="icon localize">
                        <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                    </svg></div>
                <div class="jetp-title no-wrap pr-20">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Add multiple</font>
                    </font>
                </div>
                <div style="display: none;"></div>
                <div class="jetp-close"><svg onclick="hide_div('div_multiple_receiver_info')"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                        <path
                            d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                        </path>
                    </svg></div>
            </div>
            <div class="jetp-content nice-scrollbar">
                <div class="jetp-bulk-receiver-dialog w-100">
                    <div class="jetp-cover-input m-20-10 mt-20">
                        <div class="label">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Enter your recipient list</font>
                            </font>
                        </div>
                        <textarea id="name_multiple" class="nice-scrollbar" rows="8"></textarea><small>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Write each recipient's name on a separate line
                                </font>
                            </font>
                        </small>
                    </div>
                </div>
            </div>
            <div class="jetp-footer p-20-10" style="display: flex;"><button onclick="save_nclose_multiple_recipient()"
                    class="success">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">confirmation</font>
                    </font>
                </button><button onclick="hide_div('div_multiple_receiver_info')" class="gray mr-10">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">opt out</font>
                    </font>
                </button></div>
            <div class="jetp-loading-wrapper" style="display: none;">
                <div class="spinner large"></div>
            </div>
        </div>
    </div>
    <!-- End Add multiple recipient div -->



    <div class="jetp-dialog-overlay show" style="display: none;">
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
                            <font style="vertical-align: inherit;">Recipient profile</font>
                        </font>
                    </span></div>
                <div style="display: none;"></div>
                <div class="jetp-close"><svg xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                        height="24" viewBox="0 0 24 24" class="icon">
                        <path
                            d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                        </path>
                    </svg></div>
            </div>
            <div class="jetp-content nice-scrollbar">
                <div class="jetp-receiver-dialog w-100">
                    <div class="jetp-cover-input m-20-10 mt-20" style="display: none;">
                        <div class="label"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Prefix</font>
                                </font>
                            </span></div><select>
                            <option value="0"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">No prefix</font>
                                    </font>
                                </span></option>
                            <option value="1"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Sir, Mrs</font>
                                    </font>
                                </span></option>
                            <option value="2"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Mr. Mr</font>
                                    </font>
                                </span></option>
                            <option value="3"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Mrs</font>
                                    </font>
                                </span></option>
                            <option value="4"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Mr</font>
                                    </font>
                                </span></option>
                            <option value="5"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">dedicated to</font>
                                    </font>
                                </span></option>
                            <option value="6"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">I am a good student</font>
                                    </font>
                                </span></option>
                            <option value="7"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Dear family</font>
                                    </font>
                                </span></option>
                            <option value="8"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Honorable presence of Mr</font>
                                    </font>
                                </span></option>
                            <option value="9"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Honorable Sarkar's presence against
                                        </font>
                                    </font>
                                </span></option>
                            <option value="10"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Dear Mr</font>
                                    </font>
                                </span></option>
                            <option value="11"><span wudooh="true"
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
                                    <font style="vertical-align: inherit;">recipient name</font>
                                </font>
                            </span></div><input type="text" name="name" maxlength="100" value="NADEEM IQBAL">
                    </div>
                    <div class="jetp-cover-input m-20-10 mt-20">
                        <div class="label"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Mobile number (optional)</font>
                                </font>
                            </span></div><input type="tel" name="mobile" maxlength="11" value="09123244645">
                    </div>
                    <div class="jetp-cover-input m-20-10 mt-20">
                        <div class="label"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">label (optional)</font>
                                </font>
                            </span></div>
                        <div class="jetp-tag-selector">
                            <div class="content nice-scrollbar">
                                <div class="item" style="background-color: rgb(186, 204, 71);"><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" fill="currentColor" width="24" height="24"
                                        viewBox="0 0 24 24" class="icon on">
                                        <path
                                            d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z">
                                        </path>
                                    </svg><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                        width="24" height="24" viewBox="0 0 24 24" class="icon off">
                                        <path
                                            d="M12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z">
                                        </path>
                                    </svg><span class="ml-10"><span wudooh="true"
                                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">close friends</font>
                                            </font>
                                        </span></span></div>
                                <div class="item" style="background-color: rgb(210, 58, 2);"><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" fill="currentColor" width="24" height="24"
                                        viewBox="0 0 24 24" class="icon on">
                                        <path
                                            d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z">
                                        </path>
                                    </svg><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                        width="24" height="24" viewBox="0 0 24 24" class="icon off">
                                        <path
                                            d="M12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z">
                                        </path>
                                    </svg><span class="ml-10"><span wudooh="true"
                                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">close family</font>
                                            </font>
                                        </span></span></div>
                                <div class="item" style="background-color: rgb(0, 155, 124);"><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" fill="currentColor" width="24" height="24"
                                        viewBox="0 0 24 24" class="icon on">
                                        <path
                                            d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z">
                                        </path>
                                    </svg><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                        width="24" height="24" viewBox="0 0 24 24" class="icon off">
                                        <path
                                            d="M12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z">
                                        </path>
                                    </svg><span class="ml-10"><span wudooh="true"
                                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">distant family</font>
                                            </font>
                                        </span></span></div>
                                <div class="item active" style="background-color: rgb(123, 160, 1);"><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" fill="currentColor" width="24" height="24"
                                        viewBox="0 0 24 24" class="icon on">
                                        <path
                                            d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z">
                                        </path>
                                    </svg><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                        width="24" height="24" viewBox="0 0 24 24" class="icon off">
                                        <path
                                            d="M12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z">
                                        </path>
                                    </svg><span class="ml-10"><span wudooh="true"
                                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">bride's family</font>
                                            </font>
                                        </span></span></div>
                                <div class="item active" style="background-color: rgb(210, 58, 2);"><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" fill="currentColor" width="24" height="24"
                                        viewBox="0 0 24 24" class="icon on">
                                        <path
                                            d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z">
                                        </path>
                                    </svg><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                        width="24" height="24" viewBox="0 0 24 24" class="icon off">
                                        <path
                                            d="M12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z">
                                        </path>
                                    </svg><span class="ml-10"><span wudooh="true"
                                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">groom's family</font>
                                            </font>
                                        </span></span></div>
                            </div>
                            <div class="tool" style="display: flex;">
                                <div class="add"><span wudooh="true"
                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Add</font>
                                        </font>
                                    </span></div>
                                <div class="manage mr-a ml-5"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                        width="24" height="24" viewBox="0 0 24 24" class="icon">
                                        <path
                                            d="M12,8A4,4 0 0,1 16,12A4,4 0 0,1 12,16A4,4 0 0,1 8,12A4,4 0 0,1 12,8M12,10A2,2 0 0,0 10,12A2,2 0 0,0 12,14A2,2 0 0,0 14,12A2,2 0 0,0 12,10M10,22C9.75,22 9.54,21.82 9.5,21.58L9.13,18.93C8.5,18.68 7.96,18.34 7.44,17.94L4.95,18.95C4.73,19.03 4.46,18.95 4.34,18.73L2.34,15.27C2.21,15.05 2.27,14.78 2.46,14.63L4.57,12.97L4.5,12L4.57,11L2.46,9.37C2.27,9.22 2.21,8.95 2.34,8.73L4.34,5.27C4.46,5.05 4.73,4.96 4.95,5.05L7.44,6.05C7.96,5.66 8.5,5.32 9.13,5.07L9.5,2.42C9.54,2.18 9.75,2 10,2H14C14.25,2 14.46,2.18 14.5,2.42L14.87,5.07C15.5,5.32 16.04,5.66 16.56,6.05L19.05,5.05C19.27,4.96 19.54,5.05 19.66,5.27L21.66,8.73C21.79,8.95 21.73,9.22 21.54,9.37L19.43,11L19.5,12L19.43,13L21.54,14.63C21.73,14.78 21.79,15.05 21.66,15.27L19.66,18.73C19.54,18.95 19.27,19.04 19.05,18.95L16.56,17.95C16.04,18.34 15.5,18.68 14.87,18.93L14.5,21.58C14.46,21.82 14.25,22 14,22H10M11.25,4L10.88,6.61C9.68,6.86 8.62,7.5 7.85,8.39L5.44,7.35L4.69,8.65L6.8,10.2C6.4,11.37 6.4,12.64 6.8,13.8L4.68,15.36L5.43,16.66L7.86,15.62C8.63,16.5 9.68,17.14 10.87,17.38L11.24,20H12.76L13.13,17.39C14.32,17.14 15.37,16.5 16.14,15.62L18.57,16.66L19.32,15.36L17.2,13.81C17.6,12.64 17.6,11.37 17.2,10.2L19.31,8.65L18.56,7.35L16.15,8.39C15.38,7.5 14.32,6.86 13.12,6.62L12.75,4H11.25Z">
                                        </path>
                                    </svg></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="jetp-footer p-20-10" style="display: flex;"><button class="success"><span wudooh="true"
                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">confirmation</font>
                        </font>
                    </span></button></div>
            <div class="jetp-loading-wrapper" style="display: none;">
                <div class="spinner large"></div>
            </div>
        </div>
    </div>



    <div id="div_recipient_options" class="jetp-menu open id_sf7rm"
        style="position: absolute;display:none; left: 31px; top: 216.797px;">
        <div class="option" onclick="edit_recipient()"><svg xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                height="24" viewBox="0 0 24 24" class="icon">
                <path
                    d="M14.06,9L15,9.94L5.92,19H5V18.08L14.06,9M17.66,3C17.41,3 17.15,3.1 16.96,3.29L15.13,5.12L18.88,8.87L20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18.17,3.09 17.92,3 17.66,3M14.06,6.19L3,17.25V21H6.75L17.81,9.94L14.06,6.19Z">
                </path>
            </svg><span><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Edit</font>
                    </font>
                </span></span></div>
        <div class="option disabled"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                <path
                    d="M22 6C22 4.9 21.1 4 20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6M20 6L12 11L4 6H20M20 18H4V8L12 13L20 8V18Z">
                </path>
            </svg><span><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Change to Unopened</font>
                    </font>
                </span></span></div>
        <div class="option"><a href="{{ url('mycards/messages/' . $cardId) }}"><svg xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                    height="24" viewBox="0 0 24 24" class="icon">
                    <path
                        d="M20,20H7A2,2 0 0,1 5,18V8.94L2.23,5.64C2.09,5.47 2,5.24 2,5A1,1 0 0,1 3,4H20A2,2 0 0,1 22,6V18A2,2 0 0,1 20,20M8.5,7A0.5,0.5 0 0,0 8,7.5V8.5A0.5,0.5 0 0,0 8.5,9H18.5A0.5,0.5 0 0,0 19,8.5V7.5A0.5,0.5 0 0,0 18.5,7H8.5M8.5,11A0.5,0.5 0 0,0 8,11.5V12.5A0.5,0.5 0 0,0 8.5,13H18.5A0.5,0.5 0 0,0 19,12.5V11.5A0.5,0.5 0 0,0 18.5,11H8.5M8.5,15A0.5,0.5 0 0,0 8,15.5V16.5A0.5,0.5 0 0,0 8.5,17H13.5A0.5,0.5 0 0,0 14,16.5V15.5A0.5,0.5 0 0,0 13.5,15H8.5Z">
                    </path>
                </svg><span><span wudooh="true"
                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">View messages</font>
                        </font>
                    </span></span></a></div>
        <div class="line"></div>
        <div class="option" onclick="remove_card_recipient()"><svg xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                height="24" viewBox="0 0 24 24" class="icon">
                <path
                    d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z">
                </path>
            </svg><span><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">remove</font>
                    </font>
                </span></span></div>
        <input type="hidden" id="current_selected_recipient_id" />
    </div>

    <div class="jetp-menu open id_8gxz8" style="display:none; left: 20px; top: 54px;">
        <div class="option"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                <path
                    d="M17.65,6.35C16.2,4.9 14.21,4 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20C15.73,20 18.84,17.45 19.73,14H17.65C16.83,16.33 14.61,18 12,18A6,6 0 0,1 6,12A6,6 0 0,1 12,6C13.66,6 15.14,6.69 16.22,7.78L13,11H20V4L17.65,6.35Z">
                </path>
            </svg><span><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">reload</font>
                    </font>
                </span></span></div>
        <div class="line"></div>
        <div class="option"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                <path d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z"></path>
            </svg><span><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Add new recipient</font>
                    </font>
                </span></span></div>
        <div class="option"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                <path
                    d="M22,3H2C0.91,3.04 0.04,3.91 0,5V19C0.04,20.09 0.91,20.96 2,21H22C23.09,20.96 23.96,20.09 24,19V5C23.96,3.91 23.09,3.04 22,3M22,19H2V5H22V19M14,17V15.75C14,14.09 10.66,13.25 9,13.25C7.34,13.25 4,14.09 4,15.75V17H14M9,7A2.5,2.5 0 0,0 6.5,9.5A2.5,2.5 0 0,0 9,12A2.5,2.5 0 0,0 11.5,9.5A2.5,2.5 0 0,0 9,7M14,7V8H20V7H14M14,9V10H20V9H14M14,11V12H18V11H14">
                </path>
            </svg><span><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Add from contacts</font>
                    </font>
                </span></span></div>
        <div class="option"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                <path
                    d="M12,5.5A3.5,3.5 0 0,1 15.5,9A3.5,3.5 0 0,1 12,12.5A3.5,3.5 0 0,1 8.5,9A3.5,3.5 0 0,1 12,5.5M5,8C5.56,8 6.08,8.15 6.53,8.42C6.38,9.85 6.8,11.27 7.66,12.38C7.16,13.34 6.16,14 5,14A3,3 0 0,1 2,11A3,3 0 0,1 5,8M19,8A3,3 0 0,1 22,11A3,3 0 0,1 19,14C17.84,14 16.84,13.34 16.34,12.38C17.2,11.27 17.62,9.85 17.47,8.42C17.92,8.15 18.44,8 19,8M5.5,18.25C5.5,16.18 8.41,14.5 12,14.5C15.59,14.5 18.5,16.18 18.5,18.25V20H5.5V18.25M0,20V18.5C0,17.11 1.89,15.94 4.45,15.6C3.86,16.28 3.5,17.22 3.5,18.25V20H0M24,20H20.5V18.25C20.5,17.22 20.14,16.28 19.55,15.6C22.11,15.94 24,17.11 24,18.5V20Z">
                </path>
            </svg><span><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Add multiple</font>
                    </font>
                </span></span></div>
        <div class="option" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                height="24" viewBox="0 0 24 24" class="icon">
                <path
                    d="M21.17 3.25Q21.5 3.25 21.76 3.5 22 3.74 22 4.08V19.92Q22 20.26 21.76 20.5 21.5 20.75 21.17 20.75H7.83Q7.5 20.75 7.24 20.5 7 20.26 7 19.92V17H2.83Q2.5 17 2.24 16.76 2 16.5 2 16.17V7.83Q2 7.5 2.24 7.24 2.5 7 2.83 7H7V4.08Q7 3.74 7.24 3.5 7.5 3.25 7.83 3.25M7 13.06L8.18 15.28H9.97L8 12.06L9.93 8.89H8.22L7.13 10.9L7.09 10.96L7.06 11.03Q6.8 10.5 6.5 9.96 6.25 9.43 5.97 8.89H4.16L6.05 12.08L4 15.28H5.78M13.88 19.5V17H8.25V19.5M13.88 15.75V12.63H12V15.75M13.88 11.38V8.25H12V11.38M13.88 7V4.5H8.25V7M20.75 19.5V17H15.13V19.5M20.75 15.75V12.63H15.13V15.75M20.75 11.38V8.25H15.13V11.38M20.75 7V4.5H15.13V7Z">
                </path>
            </svg><span><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Add from Excel file</font>
                    </font>
                </span></span></div>
        <div class="line"></div>
        <div class="option"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                <path
                    d="M5,3C3.89,3 3,3.89 3,5V19C3,20.11 3.89,21 5,21H19C20.11,21 21,20.11 21,19V5C21,3.89 20.11,3 19,3H5M5,5H19V19H5V5M7,7V9H17V7H7M7,11V13H17V11H7M7,15V17H14V15H7Z">
                </path>
            </svg><span><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Text format</font>
                    </font>
                </span></span></div>
        <div class="option"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                <path
                    d="M5.5,9A1.5,1.5 0 0,0 7,7.5A1.5,1.5 0 0,0 5.5,6A1.5,1.5 0 0,0 4,7.5A1.5,1.5 0 0,0 5.5,9M17.41,11.58C17.77,11.94 18,12.44 18,13C18,13.55 17.78,14.05 17.41,14.41L12.41,19.41C12.05,19.77 11.55,20 11,20C10.45,20 9.95,19.78 9.58,19.41L2.59,12.42C2.22,12.05 2,11.55 2,11V6C2,4.89 2.89,4 4,4H9C9.55,4 10.05,4.22 10.41,4.58L17.41,11.58M13.54,5.71L14.54,4.71L21.41,11.58C21.78,11.94 22,12.45 22,13C22,13.55 21.78,14.05 21.42,14.41L16.04,19.79L15.04,18.79L20.75,13L13.54,5.71Z">
                </path>
            </svg><span><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Manage tags</font>
                    </font>
                </span></span></div>
    </div>



    <!-- text options div -->
    <div id="div_text_options" class="jetp-dialog-overlay show" style="display: none;">
        <div class="jetp-dialog auto-size large">
            <div class="jetp-header">
                <div class="jetp-back" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                        height="24" viewBox="0 0 24 24" class="icon localize">
                        <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                    </svg></div>
                <div class="jetp-title no-wrap pr-20">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Text format</font>
                    </font>
                </div>
                <div style="display: none;"></div>
                <div class="jetp-close" onclick="hide_div('div_text_options')"><svg xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                        height="24" viewBox="0 0 24 24" class="icon">
                        <path
                            d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                        </path>
                    </svg></div>
            </div>
            <div class="jetp-content nice-scrollbar">
                <div class="jetp-share-text-dialog">
                    <div class="help">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">To automatically replace the information, you can use
                                the values:
                            </font>
                        </font><b>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">[link]</font>
                            </font>
                        </b>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"> equal to the link of the postcard
                            </font>
                        </font><b>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">[recipient]</font>
                            </font>
                        </b>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"> equal to the name of the recipient of the postcard.
                            </font>
                        </font>
                    </div>
                    <textarea id="textarea_user_text_input" rows="6">
@if ($text_format)
{{ $text_format->text_format }}
@endif
</textarea>
                </div>
            </div>
            <div class="jetp-footer p-20-10" style="display: flex;"><button class="success"
                    onclick="save_nclose_text_format();hide_div('div_text_options')">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">confirmation</font>
                    </font>
                </button></div>
            <div class="jetp-loading-wrapper" style="display: none;">
                <div class="spinner large"></div>
            </div>
        </div>
    </div>
    <!-- end text options -->

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
                <div class="jetp-close" onclick="hide_div('div_card_share')"><svg xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                        height="24" viewBox="0 0 24 24" class="icon">
                        <path
                            d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                        </path>
                    </svg></div>
            </div>
            <div class="jetp-content nice-scrollbar">
                <div class="jetp-share-dialog"><b class="share-title mt-10"><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Posting on social networks</font>
                            </font>
                        </span></b>
                    <div class="share-buttons mb-10" style="width: 238px;"><a class="share primary-color-bg"
                            href="https://digipostal.ir/app/receiver/cnwb2qq" style="display: none;"><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                                class="icon">
                                <path
                                    d="M18,16.08C17.24,16.08 16.56,16.38 16.04,16.85L8.91,12.7C8.96,12.47 9,12.24 9,12C9,11.76 8.96,11.53 8.91,11.3L15.96,7.19C16.5,7.69 17.21,8 18,8A3,3 0 0,0 21,5A3,3 0 0,0 18,2A3,3 0 0,0 15,5C15,5.24 15.04,5.47 15.09,5.7L8.04,9.81C7.5,9.31 6.79,9 6,9A3,3 0 0,0 3,12A3,3 0 0,0 6,15C6.79,15 7.5,14.69 8.04,14.19L15.16,18.34C15.11,18.55 15.08,18.77 15.08,19C15.08,20.61 16.39,21.91 18,21.91C19.61,21.91 20.92,20.61 20.92,19A2.92,2.92 0 0,0 18,16.08Z">
                                </path>
                            </svg></a><a id="link_share_message" class="message"
                            href="sms://+989123244645/?body=%D8%AA%D9%82%D8%AF%DB%8C%D9%85%20%D8%A8%D9%87%20NADEEM%20IQBAL%20%D8%B9%D8%B2%DB%8C%D8%B2%0D%0A%D8%A7%DB%8C%D9%86%20%DA%A9%D8%A7%D8%B1%D8%AA%20%D9%BE%D8%B3%D8%AA%D8%A7%D9%84%20%D8%A8%D8%B1%D8%A7%DB%8C%20%D8%B4%D9%85%D8%A7%20%D8%B3%D8%A7%D8%AE%D8%AA%D9%87%20%D8%B4%D8%AF%D9%87%20%D8%A7%D8%B3%D8%AA.%0D%0A%D8%A8%D8%B1%D8%A7%DB%8C%20%D9%85%D8%B4%D8%A7%D9%87%D8%AF%D9%87%20%D8%B1%D9%88%DB%8C%20%D9%84%DB%8C%D9%86%DA%A9%20%D8%B2%DB%8C%D8%B1%20%D8%A8%D8%B2%D9%86%DB%8C%D8%AF%0D%0Ahttps://DigiPostal.ir/x6z2vfy"><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                                class="icon">
                                <path
                                    d="M20,20H7A2,2 0 0,1 5,18V8.94L2.23,5.64C2.09,5.47 2,5.24 2,5A1,1 0 0,1 3,4H20A2,2 0 0,1 22,6V18A2,2 0 0,1 20,20M8.5,7A0.5,0.5 0 0,0 8,7.5V8.5A0.5,0.5 0 0,0 8.5,9H18.5A0.5,0.5 0 0,0 19,8.5V7.5A0.5,0.5 0 0,0 18.5,7H8.5M8.5,11A0.5,0.5 0 0,0 8,11.5V12.5A0.5,0.5 0 0,0 8.5,13H18.5A0.5,0.5 0 0,0 19,12.5V11.5A0.5,0.5 0 0,0 18.5,11H8.5M8.5,15A0.5,0.5 0 0,0 8,15.5V16.5A0.5,0.5 0 0,0 8.5,17H13.5A0.5,0.5 0 0,0 14,16.5V15.5A0.5,0.5 0 0,0 13.5,15H8.5Z">
                                </path>
                            </svg></a><a id="link_share_whatsapp" class="whatsapp"
                            href="whatsapp://send?text=%D8%AA%D9%82%D8%AF%DB%8C%D9%85%20%D8%A8%D9%87%20NADEEM%20IQBAL%20%D8%B9%D8%B2%DB%8C%D8%B2%0D%0A%D8%A7%DB%8C%D9%86%20%DA%A9%D8%A7%D8%B1%D8%AA%20%D9%BE%D8%B3%D8%AA%D8%A7%D9%84%20%D8%A8%D8%B1%D8%A7%DB%8C%20%D8%B4%D9%85%D8%A7%20%D8%B3%D8%A7%D8%AE%D8%AA%D9%87%20%D8%B4%D8%AF%D9%87%20%D8%A7%D8%B3%D8%AA.%0D%0A%D8%A8%D8%B1%D8%A7%DB%8C%20%D9%85%D8%B4%D8%A7%D9%87%D8%AF%D9%87%20%D8%B1%D9%88%DB%8C%20%D9%84%DB%8C%D9%86%DA%A9%20%D8%B2%DB%8C%D8%B1%20%D8%A8%D8%B2%D9%86%DB%8C%D8%AF%0D%0Ahttps://DigiPostal.ir/x6z2vfy&amp;phone=+989123244645"><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1" fill="currentColor" width="48" height="48"
                                viewBox="0 0 48 48" class="icon">
                                <path
                                    d="M34.7507 13.2115C32.1777 10.5628 28.621 9.125 24.9885 9.125C17.2696 9.125 11.0642 15.4061 11.1399 23.0493C11.1399 25.4709 11.821 27.8169 12.9561 29.9358L10.9885 37.125L18.3291 35.2331C20.3723 36.3682 22.6426 36.898 24.9128 36.898C32.5561 36.898 38.7615 30.6169 38.7615 22.9736C38.7615 19.2655 37.3237 15.7845 34.7507 13.2115ZM24.9885 34.552C22.9453 34.552 20.902 34.0223 19.1615 32.9628L18.7074 32.7358L14.3183 33.8709L15.4534 29.5574L15.1507 29.1034C11.821 23.7304 13.4101 16.6169 18.8588 13.2872C24.3074 9.95743 31.3453 11.5466 34.675 16.9953C38.0047 22.4439 36.4156 29.4818 30.9669 32.8115C29.2264 33.9466 27.1074 34.552 24.9885 34.552ZM31.648 26.152L30.8156 25.7736C30.8156 25.7736 29.6047 25.2439 28.848 24.8655C28.7723 24.8655 28.6966 24.7899 28.621 24.7899C28.3939 24.7899 28.2426 24.8655 28.0912 24.9412C28.0912 24.9412 28.0156 25.0169 26.9561 26.2277C26.8804 26.3791 26.7291 26.4547 26.5777 26.4547H26.502C26.4264 26.4547 26.275 26.3791 26.1993 26.3034L25.821 26.152C24.9885 25.7736 24.2318 25.3196 23.6264 24.7142C23.475 24.5628 23.248 24.4115 23.0966 24.2601C22.5669 23.7304 22.0372 23.125 21.6588 22.4439L21.5831 22.2926C21.5074 22.2169 21.5074 22.1412 21.4318 21.9899C21.4318 21.8385 21.4318 21.6872 21.5074 21.6115C21.5074 21.6115 21.8101 21.2331 22.0372 21.0061C22.1885 20.8547 22.2642 20.6277 22.4156 20.4764C22.5669 20.2493 22.6426 19.9466 22.5669 19.7196C22.4912 19.3412 21.5831 17.298 21.3561 16.8439C21.2047 16.6169 21.0534 16.5412 20.8264 16.4655H20.5993C20.448 16.4655 20.221 16.4655 19.9939 16.4655C19.8426 16.4655 19.6912 16.5412 19.5399 16.5412L19.4642 16.6169C19.3128 16.6926 19.1615 16.8439 19.0101 16.9196C18.8588 17.0709 18.7831 17.2223 18.6318 17.3736C18.102 18.0547 17.7993 18.8872 17.7993 19.7196C17.7993 20.325 17.9507 20.9304 18.1777 21.4601L18.2534 21.6872C18.9345 23.125 19.8426 24.4115 21.0534 25.5466L21.3561 25.8493C21.5831 26.0764 21.8101 26.2277 21.9615 26.4547C23.5507 27.8169 25.3669 28.8007 27.4101 29.3304C27.6372 29.4061 27.9399 29.4061 28.1669 29.4818C28.3939 29.4818 28.6966 29.4818 28.9237 29.4818C29.302 29.4818 29.7561 29.3304 30.0588 29.1791C30.2858 29.0277 30.4372 29.0277 30.5885 28.8764L30.7399 28.725C30.8912 28.5736 31.0426 28.498 31.1939 28.3466C31.3453 28.1953 31.4966 28.0439 31.5723 27.8926C31.7237 27.5899 31.7993 27.2115 31.875 26.8331C31.875 26.6818 31.875 26.4547 31.875 26.3034C31.875 26.3034 31.7993 26.2277 31.648 26.152Z">
                                </path>
                            </svg></a><a id="link_share_telegram" class="telegram"
                            href="https://t.me/share/url?text=%D8%AA%D9%82%D8%AF%DB%8C%D9%85%20%D8%A8%D9%87%20NADEEM%20IQBAL%20%D8%B9%D8%B2%DB%8C%D8%B2%0D%0A%D8%A7%DB%8C%D9%86%20%DA%A9%D8%A7%D8%B1%D8%AA%20%D9%BE%D8%B3%D8%AA%D8%A7%D9%84%20%D8%A8%D8%B1%D8%A7%DB%8C%20%D8%B4%D9%85%D8%A7%20%D8%B3%D8%A7%D8%AE%D8%AA%D9%87%20%D8%B4%D8%AF%D9%87%20%D8%A7%D8%B3%D8%AA.%0D%0A%D8%A8%D8%B1%D8%A7%DB%8C%20%D9%85%D8%B4%D8%A7%D9%87%D8%AF%D9%87%20%D8%B1%D9%88%DB%8C%20%D9%84%DB%8C%D9%86%DA%A9%20%D8%B2%DB%8C%D8%B1%20%D8%A8%D8%B2%D9%86%DB%8C%D8%AF%0D%0Ahttps://DigiPostal.ir/x6z2vfy&amp;url=https://DigiPostal.ir/x6z2vfy"
                            target="_blank"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                width="48" height="48" viewBox="0 0 48 48" class="icon">
                                <path
                                    d="M10.7874 23.4709C17.7667 20.3663 22.4206 18.3195 24.7493 17.3305C31.3979 14.507 32.7795 14.0165 33.68 14.0002C33.878 13.9968 34.3208 14.0469 34.6077 14.2845C34.8499 14.4852 34.9165 14.7563 34.9484 14.9465C34.9803 15.1368 35.02 15.5702 34.9884 15.9088C34.6281 19.774 33.0692 29.1539 32.276 33.483C31.9404 35.3148 31.2796 35.929 30.6399 35.9891C29.2496 36.1197 28.1938 35.051 26.8473 34.1497C24.7401 32.7395 23.5498 31.8615 21.5044 30.4854C19.1407 28.895 20.673 28.0209 22.0201 26.5923C22.3726 26.2185 28.4983 20.5295 28.6169 20.0135C28.6317 19.9489 28.6455 19.7083 28.5055 19.5813C28.3655 19.4543 28.1589 19.4977 28.0098 19.5322C27.7985 19.5812 24.4323 21.8529 17.9113 26.3473C16.9558 27.0172 16.0904 27.3435 15.315 27.3264C14.4602 27.3076 12.8159 26.833 11.5935 26.4273C10.0942 25.9296 8.90254 25.6666 9.0063 24.8215C9.06035 24.3813 9.65403 23.9311 10.7874 23.4709Z">
                                </path>
                            </svg></a><a id="link_share_facebook" class="facebook"
                            href="https://facebook.com/sharer/sharer.php?description=%D8%AA%D9%82%D8%AF%DB%8C%D9%85%20%D8%A8%D9%87%20NADEEM%20IQBAL%20%D8%B9%D8%B2%DB%8C%D8%B2%0D%0A%D8%A7%DB%8C%D9%86%20%DA%A9%D8%A7%D8%B1%D8%AA%20%D9%BE%D8%B3%D8%AA%D8%A7%D9%84%20%D8%A8%D8%B1%D8%A7%DB%8C%20%D8%B4%D9%85%D8%A7%20%D8%B3%D8%A7%D8%AE%D8%AA%D9%87%20%D8%B4%D8%AF%D9%87%20%D8%A7%D8%B3%D8%AA.%0D%0A%D8%A8%D8%B1%D8%A7%DB%8C%20%D9%85%D8%B4%D8%A7%D9%87%D8%AF%D9%87%20%D8%B1%D9%88%DB%8C%20%D9%84%DB%8C%D9%86%DA%A9%20%D8%B2%DB%8C%D8%B1%20%D8%A8%D8%B2%D9%86%DB%8C%D8%AF%0D%0Ahttps://DigiPostal.ir/x6z2vfy&amp;u=https://DigiPostal.ir/x6z2vfy"
                            target="_blank"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                width="32" height="32" viewBox="0 0 32 32" class="icon">
                                <path
                                    d="M13.69 24.903h3.679v-8.904h2.454l.325-3.068h-2.779l.004-1.536c0-.8.076-1.229 1.224-1.229h1.534V7.097h-2.455c-2.949 0-3.986 1.489-3.986 3.992v1.842h-1.838V16h1.838v8.903z">
                                </path>
                            </svg></a><a id="link_share_twitter" class="twitter"
                            href="https://twitter.com/intent/tweet/?text=%D8%AA%D9%82%D8%AF%DB%8C%D9%85%20%D8%A8%D9%87%20NADEEM%20IQBAL%20%D8%B9%D8%B2%DB%8C%D8%B2%0D%0A%D8%A7%DB%8C%D9%86%20%DA%A9%D8%A7%D8%B1%D8%AA%20%D9%BE%D8%B3%D8%AA%D8%A7%D9%84%20%D8%A8%D8%B1%D8%A7%DB%8C%20%D8%B4%D9%85%D8%A7%20%D8%B3%D8%A7%D8%AE%D8%AA%D9%87%20%D8%B4%D8%AF%D9%87%20%D8%A7%D8%B3%D8%AA.%0D%0A%D8%A8%D8%B1%D8%A7%DB%8C%20%D9%85%D8%B4%D8%A7%D9%87%D8%AF%D9%87%20%D8%B1%D9%88%DB%8C%20%D9%84%DB%8C%D9%86%DA%A9%20%D8%B2%DB%8C%D8%B1%20%D8%A8%D8%B2%D9%86%DB%8C%D8%AF%0D%0Ahttps://DigiPostal.ir/x6z2vfy&amp;url=https://DigiPostal.ir/x6z2vfy"
                            target="_blank"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                width="24" height="24" viewBox="0 0 24 24" class="icon">
                                <path
                                    d="M 2.3671875 3 L 9.4628906 13.140625 L 2.7402344 21 L 5.3808594 21 L 10.644531 14.830078 L 14.960938 21 L 21.871094 21 L 14.449219 10.375 L 20.740234 3 L 18.140625 3 L 13.271484 8.6875 L 9.2988281 3 L 2.3671875 3 z M 6.2070312 5 L 8.2558594 5 L 18.033203 19 L 16.001953 19 L 6.2070312 5 z">
                                </path>
                            </svg></a><a id="link_share_eitaa" class="eitaa"
                            href="https://eitaa.com/share/url?url=https://DigiPostal.ir/x6z2vfy" target="_blank"><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1" fill="currentColor" width="100" height="100"
                                viewBox="0 0 100 100" class="icon">
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
                        <textarea readonly="readOnly" rows="4" id="textbox_share"></textarea>
                        <div class="btn" onclick="copy_from_textbox()"><span><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">to copy</font>
                                    </font>
                                </span></span></div><a id="link_view_card_share" class="btn view" href=""
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


    <div id="div_insert_recipient_name" class="jetp-dialog-overlay show" style="display: none;">
        <div class="jetp-dialog modal medium">
            <div class="jetp-header" style="display: none;">
                <div class="jetp-back" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                        height="24" viewBox="0 0 24 24" class="icon localize">
                        <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                    </svg></div>
                <div class="jetp-title no-wrap pr-20"></div>
                <div style="display: none;"></div>
                <div class="jetp-close"><svg xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                        height="24" viewBox="0 0 24 24" class="icon">
                        <path
                            d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                        </path>
                    </svg></div>
            </div>
            <div class="jetp-content nice-scrollbar">
                <div class="dialog-modal-message">
                    <div class="mt-20"><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">To insert the recipient's name on the postcard, a
                                </font>
                            </font>
                        </span><b><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">bronze stamp</font>
                                </font>
                            </span></b> <span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;"> will be deducted from your account.</font>
                            </font>
                        </span></div><label class="mt-20"
                        style="display: flex; align-items: center; cursor: pointer;"><input class="ml-5"
                            type="checkbox" style="width: 17px; height: 17px;"><b><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Do not display this message again</font>
                                </font>
                            </span></b></label>
                </div>
            </div>
            <div class="jetp-footer p-20-10" style="display: flex;"><button
                    onclick="hide_div('div_insert_recipient_name')" class="success ml-5"><span wudooh="true"
                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">confirmation</font>
                        </font>
                    </span></button><button onclick="hide_div('div_insert_recipient_name')" class="gray mr-5"><span
                        wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">opt out</font>
                        </font>
                    </span></button></div>
            <div class="jetp-loading-wrapper" style="display: none;">
                <div class="spinner large"></div>
            </div>
        </div>
    </div>
    <script>
        function open_recipient_option(event, recipient_id) {
            var div = document.getElementById('div_recipient_options');
            div.style.display = 'block';
            //Track current selected recipient 
            document.getElementById("current_selected_recipient_id").value = recipient_id;
            positionDiv(event, div, {
                leftOffset: -250,
                topOffset: 30
            });
            addClickOutsideListener(div, event.target);
        }

        //TODO: move to generic helper file
        function positionDiv(event, div, options) {
            // Get the dimensions of the viewport
            const viewportWidth = window.innerWidth;
            const viewportHeight = window.innerHeight;

            // Get the dimensions of the div
            const divWidth = div.offsetWidth;
            const divHeight = div.offsetHeight;

            // Calculate initial position based on the event coordinates and scroll position
            let left = event.pageX;
            let top = event.pageY;

            // Adjust if the div is going out of the viewport on the right
            if (left + divWidth > viewportWidth + window.scrollX) {
                left = viewportWidth + window.scrollX - divWidth;
            }

            // Adjust if the div is going out of the viewport at the bottom
            if (top + divHeight > viewportHeight + window.scrollY) {
                top = viewportHeight + window.scrollY - divHeight;
            }

            // Apply the calculated positions
            div.style.left = left + 'px';
            div.style.top = top + 'px';
        }

        //TODO: move to generic helper file
        function addClickOutsideListener(div, triggerElement) {
            function hideDiv(e) {
                if (!div.contains(e.target) && e.target !== triggerElement) {
                    div.style.display = 'none';
                    document.removeEventListener('click', hideDiv);
                }
            }

            document.addEventListener('click', hideDiv);
        }

        function hide_menu(div, className) {
            var classNameToHide = className || '.jetp-menu';
            var closestMenu = div.closest(classNameToHide);
            if (closestMenu) {
                closestMenu.style.display = 'none';
            }
        }

        function remove_card_recipient() {
            var div = document.getElementById('div_recipient_options');
            var cardId = document.getElementById("recipient_cardid").value;
            var current_selected_recipient_id = document.getElementById("current_selected_recipient_id").value;
            hide_menu(div);

            $.ajax({
                url: "{{ url('mycards/remove_card_recipient') }}",
                type: "post",
                data: {
                    card_id: cardId,
                    recipient_id: current_selected_recipient_id,
                    _token: "{{ csrf_token() }}"
                },
                success: function(result) {
                    // alert('Link added successfully');
                    document.getElementById('div_recipient_' + current_selected_recipient_id).style.display =
                        "none";
                },
                error: function(xhr, status, error) {
                    // Handle the error
                    console.log('Error: ' + error);
                }
            });

        }

        function save_nclose_text_format() {
            var text_format_value = document.getElementById("textarea_user_text_input").value;
            $.ajax({
                url: "{{ url('mycards/save_text_format') }}",
                type: "post",
                data: {
                    text_format: text_format_value,
                    _token: "{{ csrf_token() }}"
                },
                success: function(result) {
                    // alert('Link added successfully');
                    document.getElementById('div_text_options').style.display = "none";
                },
                error: function(xhr, status, error) {
                    // Handle the error
                    console.log('Error: ' + error);
                }
            });


        }


        function save_nclose_multiple_recipient() {
            var cardId = document.getElementById("recipient_cardid").value;
            var name_multiple = document.getElementById("name_multiple").value;
            $.ajax({
                url: "{{ url('mycards/save_multiple_recipient') }}",
                type: "post",
                data: {
                    cardid: cardId,
                    name_multiple: name_multiple,
                    _token: "{{ csrf_token() }}"
                },
                success: function(result) {
                    // alert('Link added successfully');
                    document.getElementById('name_multiple').value = '';
                    // Difference is of id div**rec**info with my_cards.blade.php
                    // document.getElementById('div_recipient_info').style.display = "none";
                    document.getElementById('div_multiple_receiver_info').style.display = "none";
                    location.reload();
                },
                error: function(xhr, status, error) {
                    // Handle the error
                    console.log('Error: ' + error);
                }
            });
        }
        //Functions copied from my_Cards.blade.php
        //TODO: Refactor it to avoid in multiple places
        function save_nclose_recipient() {
            var cardId = document.getElementById("recipient_cardid").value;
            var prefix = document.getElementById("prefix").value;
            var recipient_name = document.getElementById("recipient_name").value;
            var mobile_no = document.getElementById("mobile_no").value;
            var email = document.getElementById("recipient_email").value;
            var recipient_id = document.getElementById("rec_recipient_id").value;

            if (email != '' && email.length > 0 && validateEmail(email) == false) {
                alert("Please enter valid email address.");
                return;
            }

            $.ajax({
                url: "{{ url('mycards/save_recipient') }}",
                type: "get",
                data: {
                    cardid: cardId,
                    prefix: prefix,
                    recipient_name: recipient_name,
                    mobile_no: mobile_no,
                    email: email,
                    recipient_id: recipient_id,
                    _token: "{{ csrf_token() }}"
                },
                success: function(result) {
                    // alert('Link added successfully');
                    document.getElementById('prefix').value = '';
                    document.getElementById('recipient_name').value = '';
                    document.getElementById('mobile_no').value = '';
                    document.getElementById("recipient_email").value = '';
                    document.getElementById('rec_recipient_id').value = '';
                    // Difference is of id div**rec**info with my_cards.blade.php
                    // document.getElementById('div_recipient_info').style.display = "none";
                    document.getElementById('div_receiver_info').style.display = "none";
                    location.reload();
                },
                error: function(xhr, status, error) {
                    // Handle the error
                    console.log('Error: ' + error);
                }
            });
        }

        function save_ncontinue_recipient() {
            var cardId = document.getElementById("recipient_cardid").value;
            var prefix = document.getElementById("prefix").value;
            var recipient_name = document.getElementById("recipient_name").value;
            var mobile_no = document.getElementById("mobile_no").value;
            var email = document.getElementById("recipient_email").value;
            var recipient_id = document.getElementById("rec_recipient_id").value;

            if (email != '' && email.length > 0 && validateEmail(email) == false) {
                alert("Please enter valid email address.");
                return;
            }

            $.ajax({
                url: "{{ url('mycards/save_recipient') }}",
                type: "get",
                data: {
                    cardid: cardId,
                    prefix: prefix,
                    recipient_name: recipient_name,
                    mobile_no: mobile_no,
                    email: email,
                    recipient_id: recipient_id,
                    _token: "{{ csrf_token() }}"
                },
                success: function(result) {
                    // alert('Link added successfully');
                    document.getElementById('prefix').value = '';
                    document.getElementById('recipient_name').value = '';
                    document.getElementById('mobile_no').value = '';
                    document.getElementById('rec_recipient_id').value = '';
                    document.getElementById("recipient_email").value = '';
                },
                error: function(xhr, status, error) {
                    // Handle the error
                    console.log('Error: ' + error);
                }
            });
        }

        function edit_recipient() {
            var current_selected_recipient_id = document.getElementById("current_selected_recipient_id").value;
            var cardId = document.getElementById("recipient_cardid").value;
            // var div = document.getElementById('div_recipient_' + current_selected_recipient_id)
            showhide('div_receiver_info', ['receivers_list_options', 'btn_recinfo_confirm_continue']);

            var div = document.getElementById('div_recipient_options');
            hide_menu(div)

            $.ajax({
                url: "{{ url('mycards/recipient_detail') }}" + "/" + current_selected_recipient_id,
                type: "get",
                data: {
                    card_id: cardId,
                    // recipient_id: current_selected_recipient_id,
                    _token: "{{ csrf_token() }}"
                },
                success: function(result) {
                    // alert('Link added successfully');
                    document.getElementById('prefix').value = result.prefix;
                    document.getElementById('recipient_name').value = result.recipient_name;
                    document.getElementById('mobile_no').value = result.mobile_no;
                    document.getElementById("recipient_email").value = result.email;
                    document.getElementById('rec_recipient_id').value = result.id;
                },
                error: function(xhr, status, error) {
                    // Handle the error
                    console.log('Error: ' + error);
                }
            });

        }

        function reset_addrecipient_form() {
            document.getElementById('prefix').value = '';
            document.getElementById('recipient_name').value = '';
            document.getElementById('mobile_no').value = '';
            document.getElementById("recipient_email").value = '';
            document.getElementById('rec_recipient_id').value = '';
            document.getElementById('btn_recinfo_confirm_continue').style.display = 'block';
        }

        function save_recipient_prefix(selectedObj) {
            var cardId = document.getElementById("recipient_cardid").value;
            var recipient_id = selectedObj.dataset.id;
            var prefix = selectedObj.options[selectedObj.selectedIndex].value;


            $.ajax({
                url: "{{ url('mycards/save_recipient_prefix') }}" + "/" + recipient_id,
                type: "post",
                data: {
                    card_id: cardId,
                    prefix: prefix,
                    // recipient_id: current_selected_recipient_id,
                    _token: "{{ csrf_token() }}"
                },
                success: function(result) {
                    // alert('Link added successfully');
                },
                error: function(xhr, status, error) {
                    // Handle the error
                    console.log('Error: ' + error);
                }
            });

        }


        function show_card_share_popup(selectedObj) {
            //Generate url
            var cardId = document.getElementById("recipient_cardid").value;
            var recipient_url = selectedObj.dataset.url;

            var url = "{{ url('play/' . $cardId) }}";
            recipient_url = url + "/" + recipient_url;

            document.getElementById("textbox_share").value = recipient_url;
            document.getElementById("link_view_card_share").href = recipient_url;

            //update widgets url
            var eitaa_link_url = "https://eitaa.com/share/url?url=" + encodeURIComponent(recipient_url);
            document.getElementById('link_share_eitaa').href = eitaa_link_url;

            var facebook_link_url = "https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(recipient_url);
            document.getElementById('link_share_facebook').href = facebook_link_url;

            var twitter_link_url = "https://twitter.com/share?text=" + encodeURIComponent(recipient_url) + "&url=" +
                encodeURIComponent(recipient_url);
            document.getElementById('link_share_twitter').href = twitter_link_url;


            var telegram_link_url = "https://telegram.me/share/url?text=" + encodeURIComponent(recipient_url) + "&url=" +
                encodeURIComponent(recipient_url);
            document.getElementById('link_share_telegram').href = telegram_link_url;

            var whatsapp_link_url = "whatsapp://send?text=" + encodeURIComponent(recipient_url);
            document.getElementById('link_share_whatsapp').href = whatsapp_link_url;

            var message_link_url = "sms://+123&body=" + encodeURIComponent(recipient_url);
            document.getElementById('link_share_message').href = message_link_url;

            document.getElementById("div_card_share").style.display = "flex";
        }

        function copy_from_textbox() {
            var copyText = document.getElementById("textbox_share");

            copyText.select();
            copyText.setSelectionRange(0, 99999);

            navigator.clipboard.writeText(copyText.value);

            // Alert the copied text
            alert("Copied the text: " + copyText.value);


        }

        function send_email_to_recipients() {

            var cardId = document.getElementById("recipient_cardid").value;
            $.ajax({
                url: "{{ url('mycards/send_email_to_recipients') }}",
                type: "post",
                data: {
                    card_id: cardId,
                    // recipient_id: current_selected_recipient_id,
                    _token: "{{ csrf_token() }}"
                },
                success: function(result) {
                    alert("Email sent to recipients");
                },
                error: function(xhr, status, error) {
                    // Handle the error
                    console.log('Error: ' + error);
                }
            });
        }

        //TODO: add in shared js
        function validateEmail(email) {
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            return emailPattern.test(email);
        }
    </script>
@endsection
