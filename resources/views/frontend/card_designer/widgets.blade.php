 
  <script src="https://raw.githack.com/SortableJS/Sortable/master/Sortable.js"></script>

   
<!-- =============================== Widgets =============================== -->

<div id="div_widgets" class="jetp-dialog-overlay show" style="display: none;" dir="ltr">
    <div class="jetp-dialog medium" style="width: 600px;">
        <div class="jetp-header">
            <div class="jetp-back" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                </svg></div>
            <div class="jetp-title no-wrap pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Manage widgets</font>
                    </font>
                </span></div>
            <div style="display: none;"></div>
            <div class="jetp-close"><svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_widgets')" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg></div>
        </div>
        <div class="jetp-content wscrollbar jetp-lb0hm">
            <div class="jetp-manage-widget w-100">
                <div id="widget_default" class="empty-message p-20-10" >
                    <!-- <img src="./widgets1_files/digipostal-pos-7.svg" width="300" height="300"> -->
                    <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">We have all the tools here :)</font>
                            </font>
                        </span></div>
                    <div class="plan" style="display: flex;"><span class="ml-5"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Can be used with stamps</font>
                                </font>
                            </span></span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon" title="golden" style="color: rgb(255, 194, 0);">
                            <path d="M2,2V5.5C3.1,5.5 4,6.62 4,8C4,9.38 3.1,10.5 2,10.5V13.5C3.1,13.5 4,14.62 4,16C4,17.38 3.1,18.5 2,18.5V22H5.5C5.5,20.9 6.62,20 8,20C9.38,20 10.5,20.9 10.5,22H13.5C13.5,20.9 14.62,20 16,20C17.38,20 18.5,20.9 18.5,22H22V18.5C20.9,18.5 20,17.38 20,16V16C20,14.62 20.9,13.5 22,13.5V10.5C20.9,10.5 20,9.38 20,8V8C20,6.62 20.9,5.5 22,5.5V2H18.5C18.5,3.1 17.38,4 16,4C14.62,4 13.5,3.1 13.5,2H10.5C10.5,3.1 9.38,4 8,4C6.62,4 5.5,3.1 5.5,2H2M6,6H18V18H6V6M9,7A2,2 0 0,0 7,9A2,2 0 0,0 9,11A2,2 0 0,0 11,9A2,2 0 0,0 9,7M17,10L14,13L12,12L7,17H17V10Z">
                            </path>
                        </svg><span style="margin: 0px 2px;"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Or</font>
                                </font>
                            </span></span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon" title="silver" style="color: rgb(192, 192, 192);">
                            <path d="M2,2V5.5C3.1,5.5 4,6.62 4,8C4,9.38 3.1,10.5 2,10.5V13.5C3.1,13.5 4,14.62 4,16C4,17.38 3.1,18.5 2,18.5V22H5.5C5.5,20.9 6.62,20 8,20C9.38,20 10.5,20.9 10.5,22H13.5C13.5,20.9 14.62,20 16,20C17.38,20 18.5,20.9 18.5,22H22V18.5C20.9,18.5 20,17.38 20,16V16C20,14.62 20.9,13.5 22,13.5V10.5C20.9,10.5 20,9.38 20,8V8C20,6.62 20.9,5.5 22,5.5V2H18.5C18.5,3.1 17.38,4 16,4C14.62,4 13.5,3.1 13.5,2H10.5C10.5,3.1 9.38,4 8,4C6.62,4 5.5,3.1 5.5,2H2M6,6H18V18H6V6M9,7A2,2 0 0,0 7,9A2,2 0 0,0 9,11A2,2 0 0,0 11,9A2,2 0 0,0 9,7M17,10L14,13L12,12L7,17H17V10Z">
                            </path>
                        </svg></div>
                </div>
                <div id="selected_widgets" class="wrraper-widget w-100" style="display: block;">

                    <div id="simpleList" class="list-group">
                        <div class="list-group-item">
                            <!-- ----------------------------------------------------------------------------------------------  -->

                            
                           <!-- -------------------------------------------------------------------------------------------------- -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="jetp-footer p-20-10" style="display: flex; justify-content: center;">
            <!-- <div class="btn-theme-widget ml-10 primary-hover" title="Widget settings"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon" style="width: 30px; height: 30px;">
                    <path d="M12,8A4,4 0 0,1 16,12A4,4 0 0,1 12,16A4,4 0 0,1 8,12A4,4 0 0,1 12,8M12,10A2,2 0 0,0 10,12A2,2 0 0,0 12,14A2,2 0 0,0 14,12A2,2 0 0,0 12,10M10,22C9.75,22 9.54,21.82 9.5,21.58L9.13,18.93C8.5,18.68 7.96,18.34 7.44,17.94L4.95,18.95C4.73,19.03 4.46,18.95 4.34,18.73L2.34,15.27C2.21,15.05 2.27,14.78 2.46,14.63L4.57,12.97L4.5,12L4.57,11L2.46,9.37C2.27,9.22 2.21,8.95 2.34,8.73L4.34,5.27C4.46,5.05 4.73,4.96 4.95,5.05L7.44,6.05C7.96,5.66 8.5,5.32 9.13,5.07L9.5,2.42C9.54,2.18 9.75,2 10,2H14C14.25,2 14.46,2.18 14.5,2.42L14.87,5.07C15.5,5.32 16.04,5.66 16.56,6.05L19.05,5.05C19.27,4.96 19.54,5.05 19.66,5.27L21.66,8.73C21.79,8.95 21.73,9.22 21.54,9.37L19.43,11L19.5,12L19.43,13L21.54,14.63C21.73,14.78 21.79,15.05 21.66,15.27L19.66,18.73C19.54,18.95 19.27,19.04 19.05,18.95L16.56,17.95C16.04,18.34 15.5,18.68 14.87,18.93L14.5,21.58C14.46,21.82 14.25,22 14,22H10M11.25,4L10.88,6.61C9.68,6.86 8.62,7.5 7.85,8.39L5.44,7.35L4.69,8.65L6.8,10.2C6.4,11.37 6.4,12.64 6.8,13.8L4.68,15.36L5.43,16.66L7.86,15.62C8.63,16.5 9.68,17.14 10.87,17.38L11.24,20H12.76L13.13,17.39C14.32,17.14 15.37,16.5 16.14,15.62L18.57,16.66L19.32,15.36L17.2,13.81C17.6,12.64 17.6,11.37 17.2,10.2L19.31,8.65L18.56,7.35L16.15,8.39C15.38,7.5 14.32,6.86 13.12,6.62L12.75,4H11.25Z">
                    </path>
                </svg></div> -->
            <div class="btn-add-widget primary-hover">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon ml-5">
                    <path d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z"></path>
                </svg>
                <span class="no-wrap" onclick="showhide('div_widgets_list',[])">
                    <span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Add new widget</font>
                        </font>
                    </span></span>
            </div>
            <!-- <div class="btn-theme-widget red mr-10 primary-hover" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon" style="width: 30px; height: 30px;">
                    <path d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z">
                    </path>
                </svg></div> -->
        </div>
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>


<div id="div_widgets_list" class="jetp-dialog-overlay show" style="display: none;">
    <div class="jetp-dialog medium" style="width: 600px;">
        <div class="jetp-header">
            <div class="jetp-back" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                </svg></div>
            <div class="jetp-title no-wrap pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Select widget</font>
                    </font>
                </span></div>
            <div style="display: none;"></div>
            <div class="jetp-close"><svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_widgets_list')" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg></div>
        </div>
        <div class="jetp-content nice-scrollbar">
            <div class="jetp-select-widget w-100">
                <div class="widget-cover" onclick = "showhide('div_widgets_link',['div_widgets_list','div_widgets_question','div_widgets_timer','div_widgets_memorial',
                                'div_widgets_optional_question','div_widgets_text_question','div_widgets_text_description','div_widgets_comm_landline',
                                'div_widgets_comm_phoneno','div_widgets_comm_sms','div_widgets_comm_email','div_widgets_comm_whatsapp','div_widgets_social_network',
                                'div_widgets_image','div_widgets_video','div_widgets_separator'])"
                                >
                    <div class="widget primary-hover"><svg xmlns="http://www.w3.org/2000/svg"  xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon primary-color">
                            <path d="M10.59,13.41C11,13.8 11,14.44 10.59,14.83C10.2,15.22 9.56,15.22 9.17,14.83C7.22,12.88 7.22,9.71 9.17,7.76V7.76L12.71,4.22C14.66,2.27 17.83,2.27 19.78,4.22C21.73,6.17 21.73,9.34 19.78,11.29L18.29,12.78C18.3,11.96 18.17,11.14 17.89,10.36L18.36,9.88C19.54,8.71 19.54,6.81 18.36,5.64C17.19,4.46 15.29,4.46 14.12,5.64L10.59,9.17C9.41,10.34 9.41,12.24 10.59,13.41M13.41,9.17C13.8,8.78 14.44,8.78 14.83,9.17C16.78,11.12 16.78,14.29 14.83,16.24V16.24L11.29,19.78C9.34,21.73 6.17,21.73 4.22,19.78C2.27,17.83 2.27,14.66 4.22,12.71L5.71,11.22C5.7,12.04 5.83,12.86 6.11,13.65L5.64,14.12C4.46,15.29 4.46,17.19 5.64,18.36C6.81,19.54 8.71,19.54 9.88,18.36L13.41,14.83C14.59,13.66 14.59,11.76 13.41,10.59C13,10.2 13,9.56 13.41,9.17Z">
                            </path>
                        </svg>
                        <div><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Link or link</font>
                                </font>
                            </span></div>
                    </div>
                </div>
                <div class="widget-cover" onclick = "showhide('div_widgets_timer',['div_widgets_list','div_widgets_question','div_widgets_link','div_widgets_memorial',
                            'div_widgets_optional_question','div_widgets_text_question','div_widgets_text_description','div_widgets_comm_landline',
                            'div_widgets_comm_phoneno','div_widgets_comm_sms','div_widgets_comm_email','div_widgets_comm_whatsapp','div_widgets_social_network',
                            'div_widgets_image','div_widgets_video','div_widgets_separator'])"
                            >
                    <div class="widget primary-hover"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon primary-color">
                            <path d="M4,4H20A2,2 0 0,1 22,6V18A2,2 0 0,1 20,20H4A2,2 0 0,1 2,18V6A2,2 0 0,1 4,4M4,6V18H11V6H4M20,18V6H18.76C19,6.54 18.95,7.07 18.95,7.13C18.88,7.8 18.41,8.5 18.24,8.75L15.91,11.3L19.23,11.28L19.24,12.5L14.04,12.47L14,11.47C14,11.47 17.05,8.24 17.2,7.95C17.34,7.67 17.91,6 16.5,6C15.27,6.05 15.41,7.3 15.41,7.3L13.87,7.31C13.87,7.31 13.88,6.65 14.25,6H13V18H15.58L15.57,17.14L16.54,17.13C16.54,17.13 17.45,16.97 17.46,16.08C17.5,15.08 16.65,15.08 16.5,15.08C16.37,15.08 15.43,15.13 15.43,15.95H13.91C13.91,15.95 13.95,13.89 16.5,13.89C19.1,13.89 18.96,15.91 18.96,15.91C18.96,15.91 19,17.16 17.85,17.63L18.37,18H20M8.92,16H7.42V10.2L5.62,10.76V9.53L8.76,8.41H8.92V16Z">
                            </path>
                        </svg>
                        <div><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">countdown timer</font>
                                </font>
                            </span></div>
                    </div>
                </div>
                <!-- <div class="widget-cover">
                        <div class="widget primary-hover"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                                height="24" viewBox="0 0 24 24" class="icon primary-color">
                                <path
                                    d="M12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5M12,2A7,7 0 0,1 19,9C19,14.25 12,22 12,22C12,22 5,14.25 5,9A7,7 0 0,1 12,2M12,4A5,5 0 0,0 7,9C7,10 7,12 12,18.71C17,12 17,10 17,9A5,5 0 0,0 12,4Z">
                                </path>
                            </svg>
                            <div><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Map and navigation</font>
                                    </font>
                                </span></div>
                        </div>
                    </div> -->
                <div class="widget-cover" onclick = "showhide('div_widgets_question',['div_widgets_list','div_widgets_timer','div_widgets_link','div_widgets_memorial',
                        'div_widgets_optional_question','div_widgets_text_question','div_widgets_text_description','div_widgets_comm_landline',
                        'div_widgets_comm_phoneno','div_widgets_comm_sms','div_widgets_comm_email','div_widgets_comm_whatsapp','div_widgets_social_network',
                        'div_widgets_image','div_widgets_video','div_widgets_separator'])"
                        >
                    <div class="widget primary-hover"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon primary-color">
                            <path d="M11.7,8.1h11.1v2.2H11.7V8.1 M11.7,15.9h11.1v2.2H11.7V15.9 M5.1,11.3L1.2,7.4l1.6-1.6l2.3,2.3L10.2,3l1.6,1.6L5.1,11.3z M5.1,15.5l2.4-2.4L9,14.7L6.7,17L9,19.4L7.5,21l-2.4-2.4L2.7,21l-1.6-1.6L3.5,17l-2.4-2.4l1.6-1.6L5.1,15.5z">
                            </path>
                        </svg>
                        <div><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">attendance question</font>
                                </font>
                            </span></div>
                    </div>
                </div>
                <div class="widget-cover" onclick = "showhide('div_widgets_text_question',['div_widgets_list','div_widgets_question','div_widgets_timer','div_widgets_link','div_widgets_memorial',
                        'div_widgets_optional_question','div_widgets_text_description','div_widgets_comm_landline',
                        'div_widgets_comm_phoneno','div_widgets_comm_sms','div_widgets_comm_email','div_widgets_comm_whatsapp','div_widgets_social_network',
                        'div_widgets_image','div_widgets_video','div_widgets_separator'])"
                        >
                    <div class="widget primary-hover"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon primary-color">
                            <path d="M17,7H22V17H17V19A1,1 0 0,0 18,20H20V22H17.5C16.95,22 16,21.55 16,21C16,21.55 15.05,22 14.5,22H12V20H14A1,1 0 0,0 15,19V5A1,1 0 0,0 14,4H12V2H14.5C15.05,2 16,2.45 16,3C16,2.45 16.95,2 17.5,2H20V4H18A1,1 0 0,0 17,5V7M2,7H13V9H4V15H13V17H2V7M20,15V9H17V15H20Z">
                            </path>
                        </svg>
                        <div><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">text question</font>
                                </font>
                            </span></div>
                    </div>
                </div>
                <div class="widget-cover" onclick = "showhide('div_widgets_optional_question',['div_widgets_list','div_widgets_question','div_widgets_timer','div_widgets_link','div_widgets_memorial',
                            'div_widgets_text_question','div_widgets_text_description','div_widgets_comm_landline',
                            'div_widgets_comm_phoneno','div_widgets_comm_sms','div_widgets_comm_email','div_widgets_comm_whatsapp','div_widgets_social_network',
                            'div_widgets_image','div_widgets_video','div_widgets_separator'])"
                            >
                    <div class="widget primary-hover"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon primary-color">
                            <path d="M4 13C2.89 13 2 13.89 2 15V19C2 20.11 2.89 21 4 21H8C9.11 21 10 20.11 10 19V15C10 13.89 9.11 13 8 13M8.2 14.5L9.26 15.55L5.27 19.5L2.74 16.95L3.81 15.9L5.28 17.39M4 3C2.89 3 2 3.89 2 5V9C2 10.11 2.89 11 4 11H8C9.11 11 10 10.11 10 9V5C10 3.89 9.11 3 8 3M4 5H8V9H4M12 5H22V7H12M12 19V17H22V19M12 11H22V13H12Z">
                            </path>
                        </svg>
                        <div><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Optional question</font>
                                </font>
                            </span></div>
                    </div>
                </div>
                <div class="widget-cover" onclick = "showhide('div_widgets_memorial',['div_widgets_list','div_widgets_question','div_widgets_timer','div_widgets_link',
                            'div_widgets_optional_question','div_widgets_text_question','div_widgets_text_description','div_widgets_comm_landline',
                            'div_widgets_comm_phoneno','div_widgets_comm_sms','div_widgets_comm_email','div_widgets_comm_whatsapp','div_widgets_social_network',
                            'div_widgets_image','div_widgets_video','div_widgets_separator'])"
                            >
                    <div class="widget primary-hover"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon primary-color">
                            <path d="M18.5 2H5.5C3.6 2 2 3.6 2 5.5V18.5C2 20.4 3.6 22 5.5 22H16L22 16V5.5C22 3.6 20.4 2 18.5 2M20.1 15H18.6C16.7 15 15.1 16.6 15.1 18.5V20H5.8C4.8 20 4 19.2 4 18.2V5.8C4 4.8 4.8 4 5.8 4H18.3C19.3 4 20.1 4.8 20.1 5.8V15M7 7H17V9H7V7M7 11H17V13H7V11M7 15H13V17H7V15Z">
                            </path>
                        </svg>
                        <div><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">memorial request</font>
                                </font>
                            </span></div>
                    </div>
                </div>
                <div class="widget-cover" onclick = "showhide('div_widgets_social_network',['div_widgets_list','div_widgets_question','div_widgets_timer','div_widgets_link','div_widgets_memorial',
                            'div_widgets_optional_question','div_widgets_text_question','div_widgets_text_description','div_widgets_comm_landline',
                            'div_widgets_comm_phoneno','div_widgets_comm_sms','div_widgets_comm_email','div_widgets_comm_whatsapp',
                            'div_widgets_image','div_widgets_video','div_widgets_separator'])"
                            >
                    <div class="widget primary-hover"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon primary-color">
                            <path d="M18,16.08C17.24,16.08 16.56,16.38 16.04,16.85L8.91,12.7C8.96,12.47 9,12.24 9,12C9,11.76 8.96,11.53 8.91,11.3L15.96,7.19C16.5,7.69 17.21,8 18,8A3,3 0 0,0 21,5A3,3 0 0,0 18,2A3,3 0 0,0 15,5C15,5.24 15.04,5.47 15.09,5.7L8.04,9.81C7.5,9.31 6.79,9 6,9A3,3 0 0,0 3,12A3,3 0 0,0 6,15C6.79,15 7.5,14.69 8.04,14.19L15.16,18.34C15.11,18.55 15.08,18.77 15.08,19C15.08,20.61 16.39,21.91 18,21.91C19.61,21.91 20.92,20.61 20.92,19A2.92,2.92 0 0,0 18,16.08Z">
                            </path>
                        </svg>
                        <div><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Social Networks</font>
                                </font>
                            </span></div>
                    </div>
                </div>
                <div class="widget-cover" onclick = "showhide('div_widgets_comm_landline',['div_widgets_list','div_widgets_question','div_widgets_timer','div_widgets_link','div_widgets_memorial',
                            'div_widgets_optional_question','div_widgets_text_question','div_widgets_text_description',
                            'div_widgets_comm_phoneno','div_widgets_comm_sms','div_widgets_comm_email','div_widgets_comm_whatsapp','div_widgets_social_network',
                            'div_widgets_image','div_widgets_video','div_widgets_separator'])"
                            >
                    <div class="widget primary-hover"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon primary-color">
                            <path d="M22,3H2A2,2 0 0,0 0,5V19A2,2 0 0,0 2,21H22A2,2 0 0,0 24,19V5A2,2 0 0,0 22,3M22,19H2V5H22V19M19,18L21,16L19.5,14H17.85C17.63,13.37 17.5,12.7 17.5,12C17.5,11.3 17.63,10.63 17.85,10H19.5L21,8L19,6C17.7,7 16.73,8.38 16.28,10C16.1,10.64 16,11.31 16,12C16,12.69 16.1,13.36 16.28,14C16.73,15.61 17.7,17 19,18M9,12A3,3 0 0,0 12,9A3,3 0 0,0 9,6A3,3 0 0,0 6,9A3,3 0 0,0 9,12M9,8A1,1 0 0,1 10,9A1,1 0 0,1 9,10A1,1 0 0,1 8,9A1,1 0 0,1 9,8M15,16.59C15,14.09 11.03,13 9,13C6.97,13 3,14.09 3,16.59V18H15V16.59M5.5,16C6.22,15.5 7.7,15 9,15C10.3,15 11.77,15.5 12.5,16H5.5Z">
                            </path>
                        </svg>
                        <div><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Contact and communication</font>
                                </font>
                            </span></div>
                    </div>
                </div>
                <div class="widget-cover" onclick = "showhide('div_widgets_text_description',['div_widgets_list','div_widgets_question','div_widgets_timer','div_widgets_link','div_widgets_memorial',
                        'div_widgets_optional_question','div_widgets_text_question','div_widgets_comm_landline',
                        'div_widgets_comm_phoneno','div_widgets_comm_sms','div_widgets_comm_email','div_widgets_comm_whatsapp','div_widgets_social_network',
                        'div_widgets_image','div_widgets_video','div_widgets_separator'])"
                        >
                    <div class="widget primary-hover"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon primary-color">
                            <path d="M3,3H21V5H3V3M9,7H21V9H9V7M3,11H21V13H3V11M9,15H21V17H9V15M3,19H21V21H3V19Z">
                            </path>
                        </svg>
                        <div><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Text or description</font>
                                </font>
                            </span></div>
                    </div>
                </div>
                <div class="widget-cover" onclick = "showhide('div_widgets_separator',['div_widgets_list','div_widgets_question','div_widgets_timer','div_widgets_link','div_widgets_memorial',
                    'div_widgets_optional_question','div_widgets_text_question','div_widgets_text_description','div_widgets_comm_landline',
                    'div_widgets_comm_phoneno','div_widgets_comm_sms','div_widgets_comm_email','div_widgets_comm_whatsapp','div_widgets_social_network',
                    'div_widgets_image','div_widgets_video'])"
                    >
                    <div class="widget primary-hover"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon primary-color">
                            <path d="M8,18H11V15H2V13H22V15H13V18H16L12,22L8,18M12,2L8,6H11V9H2V11H22V9H13V6H16L12,2Z">
                            </path>
                        </svg>
                        <div><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Separator</font>
                                </font>
                            </span></div>
                    </div>
                </div>
                <div class="widget-cover" onclick = "showhide('div_widgets_video',['div_widgets_list','div_widgets_question','div_widgets_timer','div_widgets_link','div_widgets_memorial',
                        'div_widgets_optional_question','div_widgets_text_question','div_widgets_text_description','div_widgets_comm_landline',
                        'div_widgets_comm_phoneno','div_widgets_comm_sms','div_widgets_comm_email','div_widgets_comm_whatsapp','div_widgets_social_network',
                        'div_widgets_image','div_widgets_separator'])"
                        >
                    <div class="widget primary-hover"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon primary-color">
                            <path d="M19,19H5V5H19M19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M10,8V16L15,12L10,8Z">
                            </path>
                        </svg>
                        <div><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">video</font>
                                </font>
                            </span></div>
                    </div>
                </div>
                <div class="widget-cover" onclick = "showhide('div_widgets_image',['div_widgets_list','div_widgets_question','div_widgets_timer','div_widgets_link','div_widgets_memorial',
                        'div_widgets_optional_question','div_widgets_text_question','div_widgets_text_description','div_widgets_comm_landline',
                        'div_widgets_comm_phoneno','div_widgets_comm_sms','div_widgets_comm_email','div_widgets_comm_whatsapp','div_widgets_social_network',
                        'div_widgets_video','div_widgets_separator'])"
                        >
                    <div class="widget primary-hover"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon primary-color">
                            <path d="M19,19H5V5H19M19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M13.96,12.29L11.21,15.83L9.25,13.47L6.5,17H17.5L13.96,12.29Z">
                            </path>
                        </svg>
                        <div><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Image</font>
                                </font>
                            </span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="jetp-footer p-20-10" style="display: none;"></div>
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>


<div id="div_widgets_question" class="jetp-dialog-overlay show" style="display: none;">
    <div class="jetp-dialog auto-size small">
        <div class="jetp-header">
            <div class="jetp-back" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                </svg></div>
            <div class="jetp-title no-wrap pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Question settings</font>
                    </font>
                </span></div>
            <div style="display: none;"></div>
            <div class="jetp-close"><svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_widgets_question')" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg></div>
        </div>
        <div class="jetp-content nice-scrollbar">
            <div class="w-100">
                <div class="jetp-cover-input m-20-10 mt-20">
                    <div class="label"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Title</font>
                            </font>
                        </span></div><input type="text" id="attend_quest_title" name="attend_quest_title" value="Are you attending our ceremony?" maxlength="150">
                </div>
                <div class="jetp-cover-input m-20-10">
                    <div class="label"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">I  participate in the text</font>
                            </font>
                        </span></div><input type="text"  id="attend_quest_yes_title" name="attend_quest_yes_title" value="Yes, I will participate" maxlength="50">
                </div>
                <div class="jetp-cover-input m-20-10">
                    <div class="label"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">I do not participate in the text</font>
                            </font>
                        </span></div><input type="text"  id="attend_quest_no_title" name="attend_quest_no_title" value="No, I will not participate" maxlength="50">
                </div>
                <div class="jetp-cover-input m-20-10"><label>
                    <input class="ml-10" type="checkbox"  id="attend_quest_mandatory" name="attend_quest_mandatory" checked="true"><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">The answer is mandatory</font>
                                </font>
                            </span></span></label></div>
                            
                            <input type="text" name="recid_widget_attend_quest" id="recid_widget_attend_quest" value="" >
            </div>
        </div>
        <div class="jetp-footer p-20-10" style="display: flex;">
            <button class="success w-120px" onclick="add_widget_attend_quest()">
                <span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">confirmation</font>
                    </font>
                </span></button>
                <div id="div_btn_widget_question_delete" >
                <!-- <button class="linear-warning w-120px mr-a" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z">
                    </path>
                </svg><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Delete</font>
                        </font>
                    </span></span></button> -->
                </div>
                </div>
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>



<div id="div_widgets_timer" class="jetp-dialog-overlay show" style="display: none;">
    <div class="jetp-dialog auto-size small">
        <div class="jetp-header">
            <div class="jetp-back" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                </svg></div>
            <div class="jetp-title no-wrap pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Adding a countdown timer</font>
                    </font>
                </span></div>
            <div style="display: none;"></div>
            <div class="jetp-close"><svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_widgets_timer')" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg></div>
        </div>
        <div class="jetp-content nice-scrollbar">
            <div class="w-100">
                <datalist id="2foaw7">
                    <option value="<?php echo date('Y-m-') ?>15"></option>
                    <option value="<?php echo date('Y-m-') ?>16"></option>
                    <option value="<?php echo date('Y-m-') ?>17"></option>
                    <option value="<?php echo date('Y-m-') ?>18"></option>
                    <option value="<?php echo date('Y-m-') ?>19"></option>
                    <option value="<?php echo date('Y-m-') ?>20"></option>
                    <option value="<?php echo date('Y-m-') ?>21"></option>
                </datalist>
                <datalist id="kpmloa">
                    <option value="00:00"></option>
                    <option value="01:00"></option>
                    <option value="02:00"></option>
                    <option value="03:00"></option>
                    <option value="04:00"></option>
                    <option value="05:00"></option>
                    <option value="06:00"></option>
                    <option value="07:00"></option>
                    <option value="08:00"></option>
                    <option value="09:00"></option>
                    <option value="10:00"></option>
                    <option value="11:00"></option>
                    <option value="12:00"></option>
                    <option value="13:00"></option>
                    <option value="14:00"></option>
                    <option value="15:00"></option>
                    <option value="16:00"></option>
                    <option value="17:00"></option>
                    <option value="18:00"></option>
                    <option value="19:00"></option>
                    <option value="20:00"></option>
                    <option value="21:00"></option>
                    <option value="22:00"></option>
                    <option value="23:00"></option>
                </datalist>
                <div class="jetp-cover-input m-20-10 mt-20">
                    <div class="label"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Title</font>
                            </font>
                        </span></div><input type="text" id="countdown_title" name="countdown_title" maxlength="100">
                </div>
                <div class="jetp-cover-input m-20-10">
                    <div class="label"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Date</font>
                            </font>
                        </span></div><input type="text" id="countdown_date" name="countdown_date" maxlength="10" dir="ltr" list="2foaw7" ><small><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">For example, 2024-10-22</font>
                            </font>
                        </span></small><small class="not-valid" style="display: none;"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Enter a valid date and the date must be
                                    greater than the current date</font>
                            </font>
                        </span></small>
                </div>
                <div class="jetp-cover-input m-20-10 mb-10">
                    <div class="label"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Time</font>
                            </font>
                        </span></div><input type="text" id="countdown_time" name="countdown_time" maxlength="5" dir="ltr" list="kpmloa"><small><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">For example, 18:30</font>
                            </font>
                        </span></small><small class="not-valid" style="display: none;"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Enter the time correctly</font>
                            </font>
                        </span></small>
                </div>
            </div>
        </div>
        <input type="text" name="recid_widget_countdown" id="recid_widget_countdown" value="">
        <div class="jetp-footer p-20-10" style="display: flex;">
            <button class="success w-120px" onclick="add_widget_countdown()">
                <span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">confirmation</font>
                    </font>
                </span></button>
                <div id="div_btn_widget_timer_delete" >
                <!-- <button class="linear-warning w-120px mr-a" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z">
                    </path>
                </svg><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Delete</font>
                        </font>
                    </span></span></button> -->
                </div>
                </div>
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>

<div id="div_widgets_link" class="jetp-dialog-overlay show" style="display: none;">
    <div class="jetp-dialog auto-size small">
        <div class="jetp-header">
            <div class="jetp-back" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"   xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                </svg></div>
            <div class="jetp-title no-wrap pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Add link</font>
                    </font>
                </span></div>
            <div style="display: none;"></div>
            <div class="jetp-close"><svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_widgets_link')" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg></div> 
        </div>
        <div class="jetp-content nice-scrollbar">
            <div class="w-100"><datalist id="rjqkcf">
                    <option value="sign in to site"></option>
                    <option value="Our Instagram page"></option>
                    <option value="enter channel"></option>
                    <option value="Get discount code"></option>
                    <option value="receive a gift"></option>
                </datalist>
                <div class="jetp-cover-input m-20-10 mt-20">
                    <div class="label"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Link text</font>
                            </font>
                        </span></div><input type="text" id="link_text" name="link_text" maxlength="20" list="rjqkcf">
                </div>
                <div class="jetp-cover-input m-20-10">
                    <div class="label"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">link</font>
                            </font>
                        </span></div><input id="link_url" name="link_url" type="url" maxlength="300" dir="ltr"><small><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Example:</font>
                            </font>
                        </span>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"> https://yoursite.com</font>
                        </font>
                    </small>
                </div>
                <input type="text" name="recid_widget_link" id="recid_widget_link" value="">
            </div>
        </div>
        <div class="jetp-footer p-20-10" style="display: flex;">
            <button class="success w-120px" onclick="add_widget_link()">
                <span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">confirmation</font>
                    </font>
                </span>
            </button>

            <div id="div_btn_widget_link_delete" >
            <!-- <button id="btn_widget_link_delete" class="linear-warning w-120px mr-a" style="display: none;" >
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z">
                    </path>
                </svg><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Delete</font>
                        </font>
                    </span></span>
                    
            </button> -->
            </div>
                
            </div>
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>

<div id="div_widgets_memorial" class="jetp-dialog-overlay show" style="display: none;">
    <div class="jetp-dialog auto-size small">
        <div class="jetp-header">
            <div class="jetp-back" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                </svg></div>
            <div class="jetp-title no-wrap pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Memorial Message settings</font>
                    </font>
                </span></div>
            <div style="display: none;"></div>
            <div class="jetp-close"><svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_widgets_memorial')" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg></div>
        </div>
        <div class="jetp-content nice-scrollbar">
            <div class="w-100">
                <div class="jetp-cover-input m-20-10 mt-20">
                    <div class="label"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Title of the question</font>
                            </font>
                        </span></div><input id="memorial_title" name="memorial_title" type="text" maxlength="300" value="Write a message as a memorial">
                </div>
                <div class="jetp-cover-input m-20-10 mb-10"><label><input class="ml-10" type="checkbox" id="display_oncard" name="display_oncard">
                        <div class="with-detail"><span class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Displaying the text of memorials on postcards</font>
                                    </font>
                                </span></span><span class="detail"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Each memorial will be displayed after
                                            your review and approval.</font>
                                    </font>
                                </span></span></div>
                    </label></div>
                <div class="jetp-cover-input m-20-10" style="display: block;">
                    <div class="label"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">The title of the display of memorials</font>
                            </font>
                        </span></div><input type="text"  id="memorial_text" name="memorial_text"  maxlength="300" value="Memorials of dear relatives and acquaintances">
                </div>
                <div class="jetp-cover-input m-20-10 mb-10"><label><input class="ml-10" type="checkbox"  id="memorial_answer_mandatory" name="memorial_answer_mandatory" ><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">The answer is mandatory</font>
                                </font>
                            </span></span></label></div>
                <div class="jetp-cover-input m-20-10"><label><input class="ml-10" type="checkbox"  id="memorial_presence_status" name="memorial_presence_status" ><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Display based on presence status</font>
                                </font>
                            </span></span></label>
                    <div class="mr-20" style="display: block;">
                        <div><label style="padding: 0px;"><input class="ml-10" type="radio"  checked="checked"  id="memorial_presence_yes" name="memorial_presence_yesno" value="yes" ><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">I participate</font>
                                        </font>
                                    </span></span></label></div>
                        <div><label style="padding: 0px;"><input class="ml-10" type="radio"  id="memorial_presence_no" name="memorial_presence_yesno" value="no" ><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">I do not participate</font>
                                        </font>
                                    </span></span></label></div>
                    </div>
                </div>
                <input type="text" name="recid_widget_memorial" id="recid_widget_memorial" value="">
            </div>
        </div>
        
        <div class="jetp-footer p-20-10" style="display: flex;">
            <button class="success w-120px" onclick="add_widget_memorial()">
                <span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">confirmation</font>
                    </font>
                </span></button>
                <div id="div_btn_widget_memorial_delete" >
                <!-- <button class="linear-warning w-120px mr-a" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z">
                    </path>
                </svg><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Delete</font>
                        </font>
                    </span></span></button> -->
                </div>
                </div>
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>

<div id="div_widgets_optional_question" class="jetp-dialog-overlay show" style="display: none;">
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
                        <font style="vertical-align: inherit;">Question settings</font>
                    </font>
                </span></div>
            <div style="display: none;"></div>
            <div class="jetp-close"><svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_widgets_optional_question')" 
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                    height="24" viewBox="0 0 24 24" class="icon">
                    <path
                        d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg></div>
        </div>


        <div class="jetp-content nice-scrollbar">
            <div class="w-100">
                <div class="jetp-cover-input m-20-10 mt-20">
                    <div class="label"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Question type</font>
                            </font>
                        </span></div>
                    <select id="optnl_quest_type" name="optnl_quest_type">
                        <option value=""><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Select</font>
                                </font>
                            </span></option>
                        <option value="radio"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">single choice</font>
                                </font>
                            </span></option>
                        <option value="checkbox"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">multiple choice</font>
                                </font>
                            </span></option>
                        <option value="dropdown"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Drop down list</font>
                                </font>
                            </span></option>
                    </select>
                </div>
                <div class="jetp-cover-input m-20-10" style="display: block;">
                    <div class="label"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Title of the question</font>
                            </font>
                        </span></div>
                    <input type="text" id="optnl_quest_title" name="optnl_quest_title" maxlength="300">
                </div>
                <div class="jetp-cover-input m-20-10 options" style="display: block;">
                    <div class="label"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Options</font>
                            </font>
                        </span></div>


                    <div class="jetp-question-options" id="options-container">
                        <div class="item" item="5185" style="">
                            <input type="text" name="optnl_quest_options[]" maxlength="300" value="Option A">
                            
                            <button class="btn remove-option-btn"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                                    <path d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z"></path>
                                </svg></button>
                        </div>
                        <div class="item" item="5184" draggable="false" style="">
                            <input type="text"  name="optnl_quest_options[]" maxlength="300" value="Option B">
                            
                            <button class="btn remove-option-btn"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                                    <path d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z"></path>
                                </svg></button>
                        </div>
                    </div>


                    <button class="jetp-add-option-button" id="add-option-btn"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                            <path d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z"></path>
                        </svg><span class="ml-5"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">New option</font>
                                </font>
                            </span></span></button>
                </div>
                <div class="jetp-cover-input m-20-10 mb-10" style="display: block;">
                    <label><input class="ml-10" type="checkbox" id="optnl_quest_mandatory" name="optnl_quest_mandatory" value='Y' ><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">The answer is mandatory</font>
                                </font>
                            </span></span></label>
                </div>
                <div class="jetp-cover-input m-20-10" style="display: block;">
                    <label><input class="ml-10" type="checkbox" id="optnl_quest_presence_status" onchange="show_optnl_quest_participating_options()" ><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Display based on presence status</font>
                                </font>
                            </span></span></label> 
                    <div id="div_optnl_quest_isparticipating" class="mr-20" style="display: none;">
                        <div><label style="padding: 0px;"><input class="ml-10" type="radio" id="optnl_quest_foryes"  checked="checked" value="yes"><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">I participate</font>
                                    </font>
                                </span></span></label></div>
                        <div><label style="padding: 0px;"><input class="ml-10" type="radio" id="optnl_quest_forno" value="no"><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">I do not participate</font>
                                    </font>
                                </span></span></label></div>
                    </div>
                </div>
                <input type="text" name="recid_widget_optional_question" id="recid_widget_optional_question" value="">
            </div>
        </div>

        <script>
           document.addEventListener("DOMContentLoaded", function () {
            const optionsContainer = document.getElementById('options-container');
            const addOptionBtn = document.getElementById('add-option-btn');

            // Function to add event listener for remove button
            function addRemoveEventListener(button) {
                button.addEventListener('click', function () {
                    button.parentElement.remove();
                });
            }

            addOptionBtn.addEventListener('click', function () {
                const newOption = document.createElement('div');
                newOption.className = 'item';
                newOption.innerHTML = `
                    <input type="text"  name="optnl_quest_options[]" maxlength="300" value="">
                    
                    <button class="btn remove-option-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                            <path d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z"></path>
                        </svg>
                    </button>
                `;
                optionsContainer.appendChild(newOption);

                // Add event listeners for new remove buttons
                newOption.querySelectorAll('.remove-option-btn').forEach(addRemoveEventListener);
            });

            // Add event listeners for existing remove buttons
            document.querySelectorAll('.remove-option-btn').forEach(addRemoveEventListener);
        });

        </script>



        <div class="jetp-footer p-20-10" style="display: flex;">
            <button class="success w-120px" onclick="add_widget_optional_question()"><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">confirmation</font>
                    </font>
                </span></button>
                <div id="div_btn_widget_optional_question_delete" >
                <!-- <button class="linear-warning w-120px mr-a" style="display: none;"><svg
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path
                        d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z">
                    </path>
                </svg><span><span wudooh="true"
                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Delete</font>
                        </font>
                    </span></span></button> -->
                </div>
                </div>
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>

<div id="div_widgets_text_question" class="jetp-dialog-overlay show" style="display: none;">
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
                        <font style="vertical-align: inherit;">Question settings</font>
                    </font>
                </span></div>
            <div style="display: none;"></div>
            <div class="jetp-close"><svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_widgets_text_question')" 
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                    height="24" viewBox="0 0 24 24" class="icon">
                    <path
                        d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg></div>
        </div>
        <div class="jetp-content nice-scrollbar">
            <div class="w-100">
                <div class="jetp-cover-input m-20-10 mt-20">
                    <div class="label"><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Question type</font>
                            </font>
                        </span></div><select id="text_question_type" name="text_question_type" >
                        <option value=""><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Select</font>
                                </font>
                            </span></option>
                        <option value="name"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">name</font>
                                </font>
                            </span></option>
                        <option value="number"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">number of people</font>
                                </font>
                            </span></option>
                        <option value="phone"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">phone number</font>
                                </font>
                            </span></option>
                        <option value="email"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">email</font>
                                </font>
                            </span></option>
                        <option value="single_line"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Single line text</font>
                                </font>
                            </span></option>
                        <option value="multi_line"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Multi-line text</font>
                                </font>
                            </span></option>
                    </select>
                </div>
                <div class="jetp-cover-input m-20-10" style="display: block;">
                    <div class="label"><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Title of the question</font>
                            </font>
                        </span></div><input type="text" id="text_question_title" name="text_question_title" maxlength="300">
                </div>
                <div class="jetp-cover-input m-20-10 mb-10" style="display: block;"><label><input class="ml-10" id="text_question_mandatory" name="text_question_mandatory"
                            type="checkbox"><span><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">The answer is mandatory</font>
                                </font>
                            </span></span></label></div>
                <div class="jetp-cover-input m-20-10" style="display: block;"><label><input class="ml-10" id="presence_status" name="presence_status" 
                            type="checkbox" onchange="show_participating_options()" value="Y"><span><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Display based on presence status</font>
                                </font>
                            </span></span></label>
                           


                    <div id="div_isparticipating" class="mr-20" style="display: none;">
                        <div><label style="padding: 0px;"><input class="ml-10" type="radio" id="text_question_foryes" name="text_question_foryesno"  value="yes"
                                    checked="checked"><span><span wudooh="true"
                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">I participate</font>
                                        </font>
                                    </span></span></label></div>
                        <div><label style="padding: 0px;"><input class="ml-10" type="radio" id="text_question_forno" name="text_question_foryesno" value="no"
                                    ><span><span wudooh="true"
                                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">I do not participate</font>
                                        </font>
                                    </span></span></label></div>
                    </div>
                </div>
                <input type="text" name="recid_widget_text_question" id="recid_widget_text_question" value="">
            </div>
        </div>
        <div class="jetp-footer p-20-10" style="display: flex;">
            <button class="success w-120px" onclick="add_widget_text_question()"><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">confirmation</font>
                    </font>
                </span></button>
                <div id="div_btn_widget_text_question_delete" >
                <!-- <button class="linear-warning w-120px mr-a" style="display: none;"><svg
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path
                        d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z">
                    </path>
                </svg><span><span wudooh="true"
                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Delete</font>
                        </font>
                    </span></span></button> -->
                </div>
                </div>
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>

<div id="div_widgets_text_description" class="jetp-dialog-overlay show" style="display: none;">
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
                        <font style="vertical-align: inherit;">Add description</font>
                    </font>
                </span></div>
            <div style="display: none;"></div>
            <div class="jetp-close"><svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_widgets_text_description')" 
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                    height="24" viewBox="0 0 24 24" class="icon">
                    <path
                        d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg></div>
        </div>
        <div class="jetp-content nice-scrollbar">
            <div class="w-100">
                <div class="jetp-cover-input m-20-10 mt-20">
                    <div class="label"><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Text or description</font>
                            </font>
                        </span></div>
                        <textarea id="user_text" name="user_text" rows="5" maxlength="800" style="resize: none;"></textarea>
                </div>
                <div class="p-20-10">
                    <div class="jetp-cover-input w-50 fr pl-5">
                        <div class="label"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Text size</font>
                                </font>
                            </span></div>
                            <select name="user_text_font_size" id="user_text_font_size" >
                            <option value="13" style="font-size: 13px;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">1</font>
                                </font>
                            </option>
                            <option value="15" style="font-size: 15px;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">2</font>
                                </font>
                            </option>
                            <option value="17" style="font-size: 17px;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">3</font>
                                </font>
                            </option>
                            <option value="19" style="font-size: 19px;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">4</font>
                                </font>
                            </option>
                            <option value="21" style="font-size: 21px;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">5</font>
                                </font>
                            </option>
                            <option value="23" style="font-size: 23px;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">6</font>
                                </font>
                            </option>
                            <option value="25" style="font-size: 25px;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">7</font>
                                </font>
                            </option>
                        </select>
                    </div>
                    <div class="jetp-cover-input w-50 fr pr-5">
                        <div class="label"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Alignment</font>
                                </font>
                            </span></div><select id="user_text_alignment">
                            <option value="left"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Left </font>
                                    </font>
                                </span></option>
                            <option value="right"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Right </font>
                                    </font>
                                </span></option>
                            <option value="center" selected="selected"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Center</font>
                                    </font>
                                </span></option>
                            <!-- <option value="justify"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">China level</font>
                                    </font>
                                </span></option> -->
                        </select>
                    </div>
                </div>
                <input type="text" name="recid_widget_user_text" id="recid_widget_user_text" value="">
            </div>
        </div>
        <div class="jetp-footer p-20-10" style="display: flex;">
            <button class="success w-120px" onclick="add_widget_user_text()"><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">confirmation</font>
                    </font>
                </span></button>
                <div id="div_btn_widget_text_description_delete" >
                <!-- <button class="linear-warning w-120px mr-a" style="display: none;"><svg
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path
                        d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z">
                    </path>
                </svg><span><span wudooh="true"
                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Delete</font>
                        </font>
                    </span></span></button> -->
                </div>
                </div>
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>

<div id="div_widgets_comm_landline" class="jetp-dialog-overlay show" style="display: none;">
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
                        <font style="vertical-align: inherit;">Contact and communication</font>
                    </font>
                </span></div>
            <div style="display: none;"></div>
            <div class="jetp-close"><svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_widgets_comm_landline')" 
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                    height="24" viewBox="0 0 24 24" class="icon">
                    <path
                        d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg></div>
        </div>
        <div class="jetp-content nice-scrollbar">
            <div class="w-100">
                <div class="jetp-cover-input m-20-10 mt-20">
                    <div class="label"><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Choosing a communication method</font>
                            </font>
                        </span></div><select id="comm_type" name="comm_type" onchange="change_comm_method(this.value)">
                        <!-- <option value=""><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Select</font>
                                </font>
                            </span></option> -->
                        <option value="tel"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">landline number</font>
                                </font>
                            </span></option>
                        <option value="mobile"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">phone number</font>
                                </font>
                            </span></option>
                        <option value="sms"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">SMS</font>
                                </font>
                            </span></option>
                        <option value="email"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">email</font>
                                </font>
                            </span></option>
                        <option value="whatsapp"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Whatsapp</font>
                                </font>
                            </span></option>
                    </select>
                </div>


                <div class="jetp-cover-input m-20-10" style="display: block;">
                    <div class="label"><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Title</font>
                            </font>
                        </span></div><input type="text"  id="comm_title" name="comm_title" maxlength="50">
                </div>

                <div id="div_comm_tel" >
                   
                    <div>
                        <div class="jetp-cover-input m-20-10 mb-0">
                            <div class="label"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">landline number</font>
                                    </font>
                                </span></div><input id="comm_tel" name="comm_tel" type="tel" maxlength="12"><small><span
                                    wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">For example: 02155778899</font>
                                    </font>
                                </span></small>
                        </div>
                    </div>
                </div>
                
                <div id="div_comm_mobile"  style="display:none;">

                   
                    <div>
                        <div class="jetp-cover-input m-20-10 mb-0">
                            <div class="label"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">phone number</font>
                                    </font>
                                </span></div><input id="comm_mobile" name="comm_mobile" type="tel" maxlength="12"><small><span
                                    wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">For example: 09121234567</font>
                                    </font>
                                </span></small>
                        </div>
                    </div>

                </div>

                <div id="div_comm_sms"  style="display:none;">

                   
                    <div>
                        <div class="jetp-cover-input m-20-10">
                            <div class="label"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">SMS number</font>
                                    </font>
                                </span></div><input id="comm_sms_no" name="comm_sms_no" type="tel" maxlength="12"><small><span
                                    wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">The number to which the SMS is to be
                                            sent. For example: 09121234567</font>
                                    </font>
                                </span></small>
                        </div>
                        <div class="jetp-cover-input m-20-10 mb-0">
                            <div class="label"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">SMS text (optional)</font>
                                    </font>
                                </span></div><textarea id="comm_sms_text" name="comm_sms_text" rows="3" maxlength="200"
                                style="resize: none;"></textarea><small><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">The prepared text that is placed in the
                                            SMS sending section. For example: Hello, I received the invitation card, I
                                            will come to the event.</font>
                                    </font>
                                </span></small>
                        </div>
                    </div>

                </div>
                <div id="div_comm_email"  style="display:none;">
                
                   
                    <div>
                        <div class="jetp-cover-input m-20-10 mb-0">
                            <div class="label"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">E-mail</font>
                                    </font>
                                </span></div><input id="comm_email" name="comm_email" type="email" maxlength="100"
                                dir="ltr"><small><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">For example:</font>
                                    </font>
                                </span>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;"> example@gmail.com</font>
                                </font>
                            </small>
                        </div>
                    </div>

                </div>
                <div id="div_comm_whatsapp" style="display:none;">

                   
                    <div>
                        <div class="jetp-cover-input m-20-10">
                            <div class="label"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">WhatsApp mobile number</font>
                                    </font>
                                </span></div><input id="comm_whatsapp_no" name="comm_whatsapp_no" type="tel" maxlength="12"><small><span
                                    wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">The mobile number that WhatsApp has, for
                                            example: +989121234567</font>
                                    </font>
                                </span></small>
                        </div>
                        <div class="jetp-cover-input m-20-10 mb-0">
                            <div class="label"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Ready WhatsApp message</font>
                                    </font>
                                </span></div><textarea  id="comm_whatsapp_text" name="comm_whatsapp_text"  rows="3" maxlength="200"
                                style="resize: none;"></textarea><small><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Ready text that is placed in WhatsApp
                                            chat by default.</font>
                                    </font>
                                </span></small>
                        </div>
                        <input type="text" name="recid_widget_contact_comm" id="recid_widget_contact_comm" value="">
                    </div>
                    
                </div>
                
            </div>
        </div>
        <div class="jetp-footer p-20-10" style="display: flex;">
            <button class="success w-120px" onclick="add_widget_contact_comm()"><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">confirmation</font>
                    </font>
                </span></button>
                <div id="div_btn_widget_contact_comm_delete" >
                <!-- <button class="linear-warning w-120px mr-a" style="display: none;"><svg
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path
                        d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z">
                    </path>
                </svg><span><span wudooh="true"
                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Delete</font>
                        </font>
                    </span></span></button> -->
                </div>
                </div>
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>

<div id="div_widgets_comm_phoneno"  class="jetp-dialog-overlay show" style="display: none;">
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
                        <font style="vertical-align: inherit;">Contact and communication</font>
                    </font>
                </span></div>
            <div style="display: none;"></div>
            <div class="jetp-close"><svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_widgets_comm_phoneno')" 
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                    height="24" viewBox="0 0 24 24" class="icon">
                    <path
                        d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg></div>
        </div>
        <div class="jetp-content nice-scrollbar">
            <div class="w-100">
                <div class="jetp-cover-input m-20-10 mt-20">
                    <div class="label"><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Choosing a communication method</font>
                            </font>
                        </span></div><select>
                        <option value=""><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Select</font>
                                </font>
                            </span></option>
                        <option value="tel"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">landline number</font>
                                </font>
                            </span></option>
                        <option value="mobile"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">phone number</font>
                                </font>
                            </span></option>
                        <option value="sms"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">SMS</font>
                                </font>
                            </span></option>
                        <option value="email"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">email</font>
                                </font>
                            </span></option>
                        <option value="whatsapp"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Whatsapp</font>
                                </font>
                            </span></option>
                    </select>
                </div>
                <div class="jetp-cover-input m-20-10" style="display: block;">
                    <div class="label"><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Title</font>
                            </font>
                        </span></div><input type="text" maxlength="50">
                </div>
                <div>
                    <div class="jetp-cover-input m-20-10 mb-0">
                        <div class="label"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">phone number</font>
                                </font>
                            </span></div><input id="mobile" name="mobile" type="tel" maxlength="12"><small><span
                                wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">For example: 09121234567</font>
                                </font>
                            </span></small>
                    </div>
                </div>
                <input type="text" name="recid_widget_comm_phoneno" id="recid_widget_comm_phoneno" value="">
            </div>
        </div>
        <div class="jetp-footer p-20-10" style="display: flex;"><button class="success w-120px"><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">confirmation</font>
                    </font>
                </span></button>
                <div id="div_btn_widget_comm_phoneno_delete" >
                <!-- <button class="linear-warning w-120px mr-a" style="display: none;"><svg
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path
                        d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z">
                    </path>
                </svg><span><span wudooh="true"
                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Delete</font>
                        </font>
                    </span></span></button> -->
                </div>
                </div>
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>

<div id="div_widgets_comm_sms" class="jetp-dialog-overlay show" style="display: none;">
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
                        <font style="vertical-align: inherit;">Contact and communication</font>
                    </font>
                </span></div>
            <div style="display: none;"></div>
            <div class="jetp-close"><svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_widgets_comm_sms')" 
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                    height="24" viewBox="0 0 24 24" class="icon">
                    <path
                        d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg></div>
        </div>
        <div class="jetp-content nice-scrollbar">
            <div class="w-100">
                <div class="jetp-cover-input m-20-10 mt-20">
                    <div class="label"><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Choosing a communication method</font>
                            </font>
                        </span></div><select>
                        <option value=""><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Select</font>
                                </font>
                            </span></option>
                        <option value="tel"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">landline number</font>
                                </font>
                            </span></option>
                        <option value="mobile"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">phone number</font>
                                </font>
                            </span></option>
                        <option value="sms"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">SMS</font>
                                </font>
                            </span></option>
                        <option value="email"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">email</font>
                                </font>
                            </span></option>
                        <option value="whatsapp"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Whatsapp</font>
                                </font>
                            </span></option>
                    </select>
                </div>
                <div class="jetp-cover-input m-20-10" style="display: block;">
                    <div class="label"><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Title</font>
                            </font>
                        </span></div><input type="text" maxlength="50">
                </div>
                <div>
                    <div class="jetp-cover-input m-20-10">
                        <div class="label"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">phone number</font>
                                </font>
                            </span></div><input id="mobile" name="mobile" type="tel" maxlength="12"><small><span
                                wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">The number to which the SMS is to be
                                        sent. For example: 09121234567</font>
                                </font>
                            </span></small>
                    </div>
                    <div class="jetp-cover-input m-20-10 mb-0">
                        <div class="label"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">SMS text (optional)</font>
                                </font>
                            </span></div><textarea rows="3" maxlength="200"
                            style="resize: none;"></textarea><small><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">The prepared text that is placed in the
                                        SMS sending section. For example: Hello, I received the invitation card, I
                                        will come to the event.</font>
                                </font>
                            </span></small>
                    </div>
                </div>
                <input type="text" name="recid_widget_comm_sms" id="recid_widget_comm_sms" value="">
            </div>
        </div>
        <div class="jetp-footer p-20-10" style="display: flex;"><button class="success w-120px"><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">confirmation</font>
                    </font>
                </span></button>
                <div id="div_btn_widget_comm_sms_delete" >
                <!-- <button class="linear-warning w-120px mr-a" style="display: none;"><svg
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path
                        d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z">
                    </path>
                </svg><span><span wudooh="true"
                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Delete</font>
                        </font>
                    </span></span></button> -->
                </div>
                </div>
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>

<div id="div_widgets_comm_email" class="jetp-dialog-overlay show" style="display: none;">
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
                        <font style="vertical-align: inherit;">Contact and communication</font>
                    </font>
                </span></div>
            <div style="display: none;"></div>
            <div class="jetp-close"><svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_widgets_comm_email')" 
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                    height="24" viewBox="0 0 24 24" class="icon">
                    <path
                        d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg></div>
        </div>
        <div class="jetp-content nice-scrollbar">
            <div class="w-100">
                <div class="jetp-cover-input m-20-10 mt-20">
                    <div class="label"><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Choosing a communication method</font>
                            </font>
                        </span></div><select>
                        <option value=""><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Select</font>
                                </font>
                            </span></option>
                        <option value="tel"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">landline number</font>
                                </font>
                            </span></option>
                        <option value="mobile"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">phone number</font>
                                </font>
                            </span></option>
                        <option value="sms"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">SMS</font>
                                </font>
                            </span></option>
                        <option value="email"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">email</font>
                                </font>
                            </span></option>
                        <option value="whatsapp"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Whatsapp</font>
                                </font>
                            </span></option>
                    </select>
                </div>
                <div class="jetp-cover-input m-20-10" style="display: block;">
                    <div class="label"><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Title</font>
                            </font>
                        </span></div><input type="text" maxlength="50">
                </div>
                <div>
                    <div class="jetp-cover-input m-20-10 mb-0">
                        <div class="label"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">E-mail</font>
                                </font>
                            </span></div><input id="email" name="email" type="email" maxlength="100"
                            dir="ltr"><small><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">For example:</font>
                                </font>
                            </span>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;"> example@gmail.com</font>
                            </font>
                        </small>
                    </div>
                </div>
                <input type="text" name="recid_widget_comm_email" id="recid_widget_comm_email" value="">
            </div>
        </div>
        <div class="jetp-footer p-20-10" style="display: flex;"><button class="success w-120px"><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">confirmation</font>
                    </font>
                </span></button>
                <div id="div_btn_widget_comm_email_delete" >
                <!-- <button class="linear-warning w-120px mr-a" style="display: none;"><svg
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path
                        d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z">
                    </path>
                </svg><span><span wudooh="true"
                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Delete</font>
                        </font>
                    </span></span></button> -->
                </div>
                </div>
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>

<div id="div_widgets_comm_whatsapp" class="jetp-dialog-overlay show" style="display: none;">
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
                        <font style="vertical-align: inherit;">Contact and communication</font>
                    </font>
                </span></div>
            <div style="display: none;"></div>
            <div class="jetp-close"><svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_widgets_comm_whatsapp')" 
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                    height="24" viewBox="0 0 24 24" class="icon">
                    <path
                        d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg></div>
        </div>
        <div class="jetp-content nice-scrollbar">
            <div class="w-100">
                <div class="jetp-cover-input m-20-10 mt-20">
                    <div class="label"><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Choosing a communication method</font>
                            </font>
                        </span></div><select>
                        <option value=""><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Select</font>
                                </font>
                            </span></option>
                        <option value="tel"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">landline number</font>
                                </font>
                            </span></option>
                        <option value="mobile"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">phone number</font>
                                </font>
                            </span></option>
                        <option value="sms"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">SMS</font>
                                </font>
                            </span></option>
                        <option value="email"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">email</font>
                                </font>
                            </span></option>
                        <option value="whatsapp"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Whatsapp</font>
                                </font>
                            </span></option>
                    </select>
                </div>
                <div class="jetp-cover-input m-20-10" style="display: block;">
                    <div class="label"><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Title</font>
                            </font>
                        </span></div><input type="text" maxlength="50">
                </div>
                <div>
                    <div class="jetp-cover-input m-20-10">
                        <div class="label"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">WhatsApp mobile number</font>
                                </font>
                            </span></div><input id="mobile" name="mobile" type="tel" maxlength="12"><small><span
                                wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">The mobile number that WhatsApp has, for
                                        example: +989121234567</font>
                                </font>
                            </span></small>
                    </div>
                    <div class="jetp-cover-input m-20-10 mb-0">
                        <div class="label"><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Ready WhatsApp message</font>
                                </font>
                            </span></div><textarea rows="3" maxlength="200"
                            style="resize: none;"></textarea><small><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Ready text that is placed in WhatsApp
                                        chat by default.</font>
                                </font>
                            </span></small>
                    </div>
                </div>
                <input type="text" name="recid_widget_comm_whatsapp" id="recid_widget_comm_whatsapp" value="">
            </div>
        </div>
        <div class="jetp-footer p-20-10" style="display: flex;"><button class="success w-120px"><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">confirmation</font>
                    </font>
                </span></button>
                <div id="div_btn_widget_comm_whatsapp_delete" >
                <!-- <button class="linear-warning w-120px mr-a" style="display: none;"><svg
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path
                        d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z">
                    </path>
                </svg><span><span wudooh="true"
                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Delete</font>
                        </font>
                    </span></span></button> -->
                </div>
                </div>
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>

<div id="div_widgets_social_network" class="jetp-dialog-overlay show" style="display: none;">
    <div class="jetp-dialog auto-size medium">
        <div class="jetp-header">
            <div class="jetp-back" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                    height="24" viewBox="0 0 24 24" class="icon localize">
                    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                </svg></div>
            <div class="jetp-title no-wrap pr-20"><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Add social networks</font>
                    </font>
                </span></div>
            <div style="display: none;"></div>
            <div class="jetp-close"><svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_widgets_social_network')" 
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                    height="24" viewBox="0 0 24 24" class="icon">
                    <path
                        d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg></div>
        </div>
        <div class="jetp-content nice-scrollbar">
            <div class="w-100">
                <div class="jetp-cover-input m-20-10 mt-20">
                    <div class="label"><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Title</font>
                            </font>
                        </span></div><input type="text" id="sn_title" name="sn_title"  maxlength="100">
                </div>
                <div class="jetp-cover-input m-20-10">
                    <div class="label"><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Instagram</font>
                            </font>
                        </span></div>
                    <div class="input-with-icon"><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="32"
                            height="32" viewBox="0 0 32 32" class="icon">
                            <path
                                d="M12.3 7C9.4 7 7 9.4 7 12.3v7.4c0 2.9 2.4 5.3 5.3 5.3h7.4c2.9 0 5.3-2.4 5.3-5.3v-7.4C25 9.4 22.6 7 19.7 7h-7.4zm0 1.6h7.4c2 0 3.7 1.6 3.7 3.7v7.4c0 2-1.6 3.7-3.7 3.7h-7.4c-2 0-3.7-1.6-3.7-3.7v-7.4c0-2 1.7-3.7 3.7-3.7zm8.5 1.8c-.4 0-.7.3-.7.7 0 .4.3.7.7.7s.7-.3.7-.7c.1-.3-.3-.7-.7-.7zm-4.8.7c-2.7 0-4.9 2.2-4.9 4.9s2.2 4.9 4.9 4.9 4.9-2.2 4.9-4.9-2.2-4.9-4.9-4.9zm0 1.6c1.8 0 3.3 1.5 3.3 3.3s-1.5 3.3-3.3 3.3-3.3-1.5-3.3-3.3 1.5-3.3 3.3-3.3z">
                            </path>
                        </svg><input type="text" id="sn_instagram" name="sn_instagram"  maxlength="100" dir="ltr"><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                            height="24" viewBox="0 0 24 24" class="icon"
                            style="padding: 9px; color: rgb(119, 119, 119);">
                            <path
                                d="M12,15C12.81,15 13.5,14.7 14.11,14.11C14.7,13.5 15,12.81 15,12C15,11.19 14.7,10.5 14.11,9.89C13.5,9.3 12.81,9 12,9C11.19,9 10.5,9.3 9.89,9.89C9.3,10.5 9,11.19 9,12C9,12.81 9.3,13.5 9.89,14.11C10.5,14.7 11.19,15 12,15M12,2C14.75,2 17.1,3 19.05,4.95C21,6.9 22,9.25 22,12V13.45C22,14.45 21.65,15.3 21,16C20.3,16.67 19.5,17 18.5,17C17.3,17 16.31,16.5 15.56,15.5C14.56,16.5 13.38,17 12,17C10.63,17 9.45,16.5 8.46,15.54C7.5,14.55 7,13.38 7,12C7,10.63 7.5,9.45 8.46,8.46C9.45,7.5 10.63,7 12,7C13.38,7 14.55,7.5 15.54,8.46C16.5,9.45 17,10.63 17,12V13.45C17,13.86 17.16,14.22 17.46,14.53C17.76,14.84 18.11,15 18.5,15C18.92,15 19.27,14.84 19.57,14.53C19.87,14.22 20,13.86 20,13.45V12C20,9.81 19.23,7.93 17.65,6.35C16.07,4.77 14.19,4 12,4C9.81,4 7.93,4.77 6.35,6.35C4.77,7.93 4,9.81 4,12C4,14.19 4.77,16.07 6.35,17.65C7.93,19.23 9.81,20 12,20H17V22H12C9.25,22 6.9,21 4.95,19.05C3,17.1 2,14.75 2,12C2,9.25 3,6.9 4.95,4.95C6.9,3 9.25,2 12,2Z">
                            </path>
                        </svg></div><small><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Enter the Instagram ID, for example:</font>
                            </font>
                        </span>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"> digipostal</font>
                        </font>
                    </small>
                </div>
                <div class="jetp-cover-input m-20-10">
                    <div class="label"><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Telegram</font>
                            </font>
                        </span></div>
                    <div class="input-with-icon"><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="48"
                            height="48" viewBox="0 0 48 48" class="icon">
                            <path
                                d="M10.7874 23.4709C17.7667 20.3663 22.4206 18.3195 24.7493 17.3305C31.3979 14.507 32.7795 14.0165 33.68 14.0002C33.878 13.9968 34.3208 14.0469 34.6077 14.2845C34.8499 14.4852 34.9165 14.7563 34.9484 14.9465C34.9803 15.1368 35.02 15.5702 34.9884 15.9088C34.6281 19.774 33.0692 29.1539 32.276 33.483C31.9404 35.3148 31.2796 35.929 30.6399 35.9891C29.2496 36.1197 28.1938 35.051 26.8473 34.1497C24.7401 32.7395 23.5498 31.8615 21.5044 30.4854C19.1407 28.895 20.673 28.0209 22.0201 26.5923C22.3726 26.2185 28.4983 20.5295 28.6169 20.0135C28.6317 19.9489 28.6455 19.7083 28.5055 19.5813C28.3655 19.4543 28.1589 19.4977 28.0098 19.5322C27.7985 19.5812 24.4323 21.8529 17.9113 26.3473C16.9558 27.0172 16.0904 27.3435 15.315 27.3264C14.4602 27.3076 12.8159 26.833 11.5935 26.4273C10.0942 25.9296 8.90254 25.6666 9.0063 24.8215C9.06035 24.3813 9.65403 23.9311 10.7874 23.4709Z">
                            </path>
                        </svg><input type="text"  id="sn_telegram" name="sn_telegram" maxlength="100" dir="ltr"><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                            height="24" viewBox="0 0 24 24" class="icon"
                            style="padding: 9px; color: rgb(119, 119, 119);">
                            <path
                                d="M12,15C12.81,15 13.5,14.7 14.11,14.11C14.7,13.5 15,12.81 15,12C15,11.19 14.7,10.5 14.11,9.89C13.5,9.3 12.81,9 12,9C11.19,9 10.5,9.3 9.89,9.89C9.3,10.5 9,11.19 9,12C9,12.81 9.3,13.5 9.89,14.11C10.5,14.7 11.19,15 12,15M12,2C14.75,2 17.1,3 19.05,4.95C21,6.9 22,9.25 22,12V13.45C22,14.45 21.65,15.3 21,16C20.3,16.67 19.5,17 18.5,17C17.3,17 16.31,16.5 15.56,15.5C14.56,16.5 13.38,17 12,17C10.63,17 9.45,16.5 8.46,15.54C7.5,14.55 7,13.38 7,12C7,10.63 7.5,9.45 8.46,8.46C9.45,7.5 10.63,7 12,7C13.38,7 14.55,7.5 15.54,8.46C16.5,9.45 17,10.63 17,12V13.45C17,13.86 17.16,14.22 17.46,14.53C17.76,14.84 18.11,15 18.5,15C18.92,15 19.27,14.84 19.57,14.53C19.87,14.22 20,13.86 20,13.45V12C20,9.81 19.23,7.93 17.65,6.35C16.07,4.77 14.19,4 12,4C9.81,4 7.93,4.77 6.35,6.35C4.77,7.93 4,9.81 4,12C4,14.19 4.77,16.07 6.35,17.65C7.93,19.23 9.81,20 12,20H17V22H12C9.25,22 6.9,21 4.95,19.05C3,17.1 2,14.75 2,12C2,9.25 3,6.9 4.95,4.95C6.9,3 9.25,2 12,2Z">
                            </path>
                        </svg></div><small><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Enter Telegram channel ID, for example:
                                </font>
                            </font>
                        </span>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"> digipostal</font>
                        </font>
                    </small>
                </div>
                <div class="jetp-cover-input m-20-10">
                    <div class="label"><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Whatsapp</font>
                            </font>
                        </span></div>
                    <div class="input-with-icon"><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="48"
                            height="48" viewBox="0 0 48 48" class="icon">
                            <path
                                d="M34.7507 13.2115C32.1777 10.5628 28.621 9.125 24.9885 9.125C17.2696 9.125 11.0642 15.4061 11.1399 23.0493C11.1399 25.4709 11.821 27.8169 12.9561 29.9358L10.9885 37.125L18.3291 35.2331C20.3723 36.3682 22.6426 36.898 24.9128 36.898C32.5561 36.898 38.7615 30.6169 38.7615 22.9736C38.7615 19.2655 37.3237 15.7845 34.7507 13.2115ZM24.9885 34.552C22.9453 34.552 20.902 34.0223 19.1615 32.9628L18.7074 32.7358L14.3183 33.8709L15.4534 29.5574L15.1507 29.1034C11.821 23.7304 13.4101 16.6169 18.8588 13.2872C24.3074 9.95743 31.3453 11.5466 34.675 16.9953C38.0047 22.4439 36.4156 29.4818 30.9669 32.8115C29.2264 33.9466 27.1074 34.552 24.9885 34.552ZM31.648 26.152L30.8156 25.7736C30.8156 25.7736 29.6047 25.2439 28.848 24.8655C28.7723 24.8655 28.6966 24.7899 28.621 24.7899C28.3939 24.7899 28.2426 24.8655 28.0912 24.9412C28.0912 24.9412 28.0156 25.0169 26.9561 26.2277C26.8804 26.3791 26.7291 26.4547 26.5777 26.4547H26.502C26.4264 26.4547 26.275 26.3791 26.1993 26.3034L25.821 26.152C24.9885 25.7736 24.2318 25.3196 23.6264 24.7142C23.475 24.5628 23.248 24.4115 23.0966 24.2601C22.5669 23.7304 22.0372 23.125 21.6588 22.4439L21.5831 22.2926C21.5074 22.2169 21.5074 22.1412 21.4318 21.9899C21.4318 21.8385 21.4318 21.6872 21.5074 21.6115C21.5074 21.6115 21.8101 21.2331 22.0372 21.0061C22.1885 20.8547 22.2642 20.6277 22.4156 20.4764C22.5669 20.2493 22.6426 19.9466 22.5669 19.7196C22.4912 19.3412 21.5831 17.298 21.3561 16.8439C21.2047 16.6169 21.0534 16.5412 20.8264 16.4655H20.5993C20.448 16.4655 20.221 16.4655 19.9939 16.4655C19.8426 16.4655 19.6912 16.5412 19.5399 16.5412L19.4642 16.6169C19.3128 16.6926 19.1615 16.8439 19.0101 16.9196C18.8588 17.0709 18.7831 17.2223 18.6318 17.3736C18.102 18.0547 17.7993 18.8872 17.7993 19.7196C17.7993 20.325 17.9507 20.9304 18.1777 21.4601L18.2534 21.6872C18.9345 23.125 19.8426 24.4115 21.0534 25.5466L21.3561 25.8493C21.5831 26.0764 21.8101 26.2277 21.9615 26.4547C23.5507 27.8169 25.3669 28.8007 27.4101 29.3304C27.6372 29.4061 27.9399 29.4061 28.1669 29.4818C28.3939 29.4818 28.6966 29.4818 28.9237 29.4818C29.302 29.4818 29.7561 29.3304 30.0588 29.1791C30.2858 29.0277 30.4372 29.0277 30.5885 28.8764L30.7399 28.725C30.8912 28.5736 31.0426 28.498 31.1939 28.3466C31.3453 28.1953 31.4966 28.0439 31.5723 27.8926C31.7237 27.5899 31.7993 27.2115 31.875 26.8331C31.875 26.6818 31.875 26.4547 31.875 26.3034C31.875 26.3034 31.7993 26.2277 31.648 26.152Z">
                            </path>
                        </svg><input type="tel"  id="sn_whatsapp" name="sn_whatsapp" maxlength="100" dir="ltr"><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                            height="24" viewBox="0 0 24 24" class="icon"
                            style="padding: 9px; color: rgb(119, 119, 119);">
                            <path
                                d="M17,19H7V5H17M17,1H7C5.89,1 5,1.89 5,3V21A2,2 0 0,0 7,23H17A2,2 0 0,0 19,21V3C19,1.89 18.1,1 17,1Z">
                            </path>
                        </svg></div><small><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">The mobile number that WhatsApp has, for
                                    example: +989121234567</font>
                            </font>
                        </span></small>
                </div>
                <div class="jetp-cover-input m-20-10">
                    <div class="label"><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Facebook</font>
                            </font>
                        </span></div>
                    <div class="input-with-icon"><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="32"
                            height="32" viewBox="0 0 32 32" class="icon">
                            <path
                                d="M13.69 24.903h3.679v-8.904h2.454l.325-3.068h-2.779l.004-1.536c0-.8.076-1.229 1.224-1.229h1.534V7.097h-2.455c-2.949 0-3.986 1.489-3.986 3.992v1.842h-1.838V16h1.838v8.903z">
                            </path>
                        </svg><input type="url"  id="sn_facebook" name="sn_facebook" maxlength="100" dir="ltr"><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                            height="24" viewBox="0 0 24 24" class="icon"
                            style="padding: 9px; color: rgb(119, 119, 119);">
                            <path
                                d="M10.59,13.41C11,13.8 11,14.44 10.59,14.83C10.2,15.22 9.56,15.22 9.17,14.83C7.22,12.88 7.22,9.71 9.17,7.76V7.76L12.71,4.22C14.66,2.27 17.83,2.27 19.78,4.22C21.73,6.17 21.73,9.34 19.78,11.29L18.29,12.78C18.3,11.96 18.17,11.14 17.89,10.36L18.36,9.88C19.54,8.71 19.54,6.81 18.36,5.64C17.19,4.46 15.29,4.46 14.12,5.64L10.59,9.17C9.41,10.34 9.41,12.24 10.59,13.41M13.41,9.17C13.8,8.78 14.44,8.78 14.83,9.17C16.78,11.12 16.78,14.29 14.83,16.24V16.24L11.29,19.78C9.34,21.73 6.17,21.73 4.22,19.78C2.27,17.83 2.27,14.66 4.22,12.71L5.71,11.22C5.7,12.04 5.83,12.86 6.11,13.65L5.64,14.12C4.46,15.29 4.46,17.19 5.64,18.36C6.81,19.54 8.71,19.54 9.88,18.36L13.41,14.83C14.59,13.66 14.59,11.76 13.41,10.59C13,10.2 13,9.56 13.41,9.17Z">
                            </path>
                        </svg></div><small><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Enter the address of the Facebook page, for
                                    example:</font>
                            </font>
                        </span>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"> https://facebook.com/digipostal</font>
                        </font>
                    </small>
                </div>
                <div class="jetp-cover-input m-20-10">
                    <div class="label"><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">twitter</font>
                            </font>
                        </span></div>
                    <div class="input-with-icon"><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                            height="24" viewBox="0 0 24 24" class="icon">
                            <path
                                d="M 2.3671875 3 L 9.4628906 13.140625 L 2.7402344 21 L 5.3808594 21 L 10.644531 14.830078 L 14.960938 21 L 21.871094 21 L 14.449219 10.375 L 20.740234 3 L 18.140625 3 L 13.271484 8.6875 L 9.2988281 3 L 2.3671875 3 z M 6.2070312 5 L 8.2558594 5 L 18.033203 19 L 16.001953 19 L 6.2070312 5 z">
                            </path>
                        </svg><input type="url"  id="sn_twitter" name="sn_twitter" maxlength="100" dir="ltr"><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                            height="24" viewBox="0 0 24 24" class="icon"
                            style="padding: 9px; color: rgb(119, 119, 119);">
                            <path
                                d="M10.59,13.41C11,13.8 11,14.44 10.59,14.83C10.2,15.22 9.56,15.22 9.17,14.83C7.22,12.88 7.22,9.71 9.17,7.76V7.76L12.71,4.22C14.66,2.27 17.83,2.27 19.78,4.22C21.73,6.17 21.73,9.34 19.78,11.29L18.29,12.78C18.3,11.96 18.17,11.14 17.89,10.36L18.36,9.88C19.54,8.71 19.54,6.81 18.36,5.64C17.19,4.46 15.29,4.46 14.12,5.64L10.59,9.17C9.41,10.34 9.41,12.24 10.59,13.41M13.41,9.17C13.8,8.78 14.44,8.78 14.83,9.17C16.78,11.12 16.78,14.29 14.83,16.24V16.24L11.29,19.78C9.34,21.73 6.17,21.73 4.22,19.78C2.27,17.83 2.27,14.66 4.22,12.71L5.71,11.22C5.7,12.04 5.83,12.86 6.11,13.65L5.64,14.12C4.46,15.29 4.46,17.19 5.64,18.36C6.81,19.54 8.71,19.54 9.88,18.36L13.41,14.83C14.59,13.66 14.59,11.76 13.41,10.59C13,10.2 13,9.56 13.41,9.17Z">
                            </path>
                        </svg></div><small><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Enter the address of the Twitter page, for
                                    example:</font>
                            </font>
                        </span>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"> https://twitter.com/digipostal</font>
                        </font>
                    </small>
                </div>
                <div class="jetp-cover-input m-20-10">
                    <div class="label"><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Pinterest</font>
                            </font>
                        </span></div>
                    <div class="input-with-icon"><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="32"
                            height="32" viewBox="0 0 32 32" class="icon">
                            <path
                                d="M24.007 12.481c0 4.658-2.59 8.139-6.407 8.139-1.283 0-2.488-.693-2.901-1.481 0 0-.69 2.736-.835 3.264-.514 1.866-2.027 3.733-2.144 3.886-.082.106-.263.073-.282-.068-.033-.238-.418-2.592.036-4.513l1.527-6.471s-.379-.758-.379-1.879c0-1.76 1.02-3.074 2.29-3.074 1.08 0 1.601.81 1.601 1.782 0 1.086-.691 2.71-1.048 4.214-.298 1.26.632 2.288 1.874 2.288 2.25 0 3.765-2.89 3.765-6.314 0-2.602-1.752-4.551-4.941-4.551-3.601 0-5.846 2.686-5.846 5.687 0 1.035.306 1.765.784 2.329.219.26.25.364.17.662-.058.219-.187.744-.243.953-.079.301-.323.408-.594.297-1.659-.677-2.432-2.495-2.432-4.537 0-3.373 2.845-7.418 8.487-7.418 4.535.003 7.518 3.283 7.518 6.805z">
                            </path>
                        </svg><input type="url"  id="sn_pinterest" name="sn_pinterest" maxlength="100" dir="ltr"><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                            height="24" viewBox="0 0 24 24" class="icon"
                            style="padding: 9px; color: rgb(119, 119, 119);">
                            <path
                                d="M10.59,13.41C11,13.8 11,14.44 10.59,14.83C10.2,15.22 9.56,15.22 9.17,14.83C7.22,12.88 7.22,9.71 9.17,7.76V7.76L12.71,4.22C14.66,2.27 17.83,2.27 19.78,4.22C21.73,6.17 21.73,9.34 19.78,11.29L18.29,12.78C18.3,11.96 18.17,11.14 17.89,10.36L18.36,9.88C19.54,8.71 19.54,6.81 18.36,5.64C17.19,4.46 15.29,4.46 14.12,5.64L10.59,9.17C9.41,10.34 9.41,12.24 10.59,13.41M13.41,9.17C13.8,8.78 14.44,8.78 14.83,9.17C16.78,11.12 16.78,14.29 14.83,16.24V16.24L11.29,19.78C9.34,21.73 6.17,21.73 4.22,19.78C2.27,17.83 2.27,14.66 4.22,12.71L5.71,11.22C5.7,12.04 5.83,12.86 6.11,13.65L5.64,14.12C4.46,15.29 4.46,17.19 5.64,18.36C6.81,19.54 8.71,19.54 9.88,18.36L13.41,14.83C14.59,13.66 14.59,11.76 13.41,10.59C13,10.2 13,9.56 13.41,9.17Z">
                            </path>
                        </svg></div><small><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Enter the address of the Pinterest page, for
                                    example:</font>
                            </font>
                        </span>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"> https://pinterest.com/digipostal</font>
                        </font>
                    </small>
                </div>
                <input type="text" name="recid_widget_social_network" id="recid_widget_social_network" value="">
            </div>
        </div>
        <div class="jetp-footer p-20-10" style="display: flex;"><button class="success w-120px">
            <span wudooh="true" onclick="add_widget_social_network()"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">confirmation</font>
                    </font>
                </span></button>
                <div id="div_btn_widget_social_network_delete" >
                <!-- <button class="linear-warning w-120px mr-a" style="display: none;"><svg
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path
                        d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z">
                    </path>
                </svg><span><span wudooh="true"
                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Delete</font>
                        </font>
                    </span></span></button> -->
                </div>
                </div>
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>

<div  id="div_widgets_image"  class="jetp-dialog-overlay show" style="display: none;">
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
                        <font style="vertical-align: inherit;">Add image</font>
                    </font>
                </span></div>
            <div style="display: none;"></div>
            <div class="jetp-close"><svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_widgets_image')" 
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                    height="24" viewBox="0 0 24 24" class="icon">
                    <path
                        d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg></div>
        </div>
        <div class="jetp-content nice-scrollbar align-items-center">
            <div class="jetp-picture-dialog">
                <div class="jetp-crop-container" style="display: none;"></div>
                <div class="jetp-file-picker"><input type="file" accept="image/*" style="display: none;">
                    <div class="jetp-file-picker-helper"><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                            height="24" viewBox="0 0 24 24" class="icon">
                            <path
                                d="M19.35,10.04C18.67,6.59 15.64,4 12,4C9.11,4 6.6,5.64 5.35,8.04C2.34,8.36 0,10.91 0,14A6,6 0 0,0 6,20H19A5,5 0 0,0 24,15C24,12.36 21.95,10.22 19.35,10.04M19,18H6A4,4 0 0,1 2,14C2,11.95 3.53,10.24 5.56,10.03L6.63,9.92L7.13,8.97C8.08,7.14 9.94,6 12,6C14.62,6 16.88,7.86 17.39,10.43L17.69,11.93L19.22,12.04C20.78,12.14 22,13.45 22,15A3,3 0 0,1 19,18M8,13H10.55V16H13.45V13H16L12,9L8,13Z">
                            </path>
                        </svg><span><span wudooh="true"
                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        <input onchange="add_widget_image()" type="file" id="widget_image" name="widget_image" accept="image/*">
                                    </font>
                                </font>
                            </span></span></div>
                </div>
                <input type="text" name="recid_widget_image" id="recid_widget_image" value="">
            </div>
        </div>
        <div class="jetp-footer p-20-10" style="display: flex;"><button class="success w-120px"
                style="display: none;"><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">confirmation</font>
                    </font>
                </span></button>
                <div id="div_btn_widget_image_delete" >
                <!-- <button class="linear-warning w-120px mr-a" style="display: none;"><svg
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path
                        d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z">
                    </path>
                </svg><span><span wudooh="true"
                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Delete</font>
                        </font>
                    </span></span></button> -->
                </div>
                </div>
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>

<div id="div_widgets_video"  class="jetp-dialog-overlay show" style="display: none;">
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
                        <font style="vertical-align: inherit;">Add video</font>
                    </font>
                </span></div>
            <div style="display: none;"></div>
            <div class="jetp-close"><svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_widgets_video')" 
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                    height="24" viewBox="0 0 24 24" class="icon">
                    <path
                        d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg></div>
        </div>
        <div class="jetp-content nice-scrollbar">
            <div class="w-100">
                <div class="jetp-cover-input m-20-10">
                    <div class="label"><span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Video  link</font>
                            </font>
                        </span></div><input type="url" id="video_link" name="video_link" maxlength="200" dir="ltr"><small> <span wudooh="true"
                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Aparat video link, for example:</font>
                            </font>
                        </span>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"> https://aparat.com/v/1X5sT</font>
                        </font>
                    </small>
                </div>
                <input type="text" name="recid_widget_video" id="recid_widget_video" value="">
            </div>
        </div>
        <div class="jetp-footer p-20-10" style="display: flex;">
            <button class="success w-120px"><span wudooh="true" onclick="add_widget_video()"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">confirmation</font>
                    </font>
                </span></button>
                <div id="div_btn_widget_video_delete" >
                <!-- <button class="linear-warning w-120px mr-a" style="display: none;"><svg
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path
                        d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z">
                    </path>
                </svg><span><span wudooh="true"
                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Delete</font>
                        </font>
                    </span></span></button> -->
                </div>
                </div>
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>

<div id="div_widgets_separator"  class="jetp-dialog-overlay show" style="display: none;">
    <div class="jetp-dialog auto-size medium">
        <div class="jetp-header">
            <div class="jetp-back" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                    height="24" viewBox="0 0 24 24" class="icon localize">
                    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                </svg></div>
            <div class="jetp-title no-wrap pr-20"><span wudooh="true"
                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Add separator</font>
                    </font>
                </span></div>
            <div style="display: none;"></div>
            <div class="jetp-close"><svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_widgets_separator')" 
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                    height="24" viewBox="0 0 24 24" class="icon">
                    <path
                        d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg></div>
        </div>
        <div class="jetp-content nice-scrollbar">
            <div class="w-100 divider-selector">

                <div class="item" onclick="add_widget_separator(this)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="100" height="10" viewBox="0 0 100 10"
                        class="divider p-10 primary-hover" style="width:100%;height:auto;">
                        <path
                            d="M95.83 1.58c-.66 0-1.2.54-1.2 1.2 0 .43.35.77.77.77.29 0 .52-.23.52-.52 0-.1-.08-.18-.18-.18s-.18.08-.18.18c0 .09-.08.17-.17.17-.23 0-.42-.19-.42-.42 0-.47.38-.85.85-.85.88 0 1.59.71 1.59 1.59 0 1.58-1.29 2.87-2.87 2.87H54.87c-.13-.83-.82-1.47-1.66-1.47-.93 0-1.69.78-1.69 1.75s.76 1.75 1.69 1.75c.9 0 1.64-.74 1.68-1.67h39.67c1.78 0 3.22-1.44 3.22-3.22 0-1.08-.87-1.95-1.95-1.95zM53.21 8.07c-.74 0-1.34-.63-1.34-1.4 0-.77.6-1.4 1.34-1.4.74 0 1.34.63 1.34 1.4 0 .77-.6 1.4-1.34 1.4zM46.79 4.92c-.84 0-1.53.64-1.66 1.47H5.44c-1.58 0-2.87-1.29-2.87-2.87 0-.88.71-1.59 1.59-1.59.47 0 .85.38.85.85 0 .23-.19.42-.42.42-.09 0-.17-.08-.17-.17 0-.1-.08-.18-.18-.18-.1 0-.18.08-.18.18 0 .29.23.52.52.52.43 0 .77-.35.77-.77 0-.66-.54-1.2-1.2-1.2-1.07 0-1.94.87-1.94 1.94 0 1.78 1.44 3.22 3.22 3.22H45.1c.04.93.77 1.67 1.68 1.67.93 0 1.69-.78 1.69-1.75s-.75-1.74-1.68-1.74zm0 3.15c-.74 0-1.34-.63-1.34-1.4 0-.77.6-1.4 1.34-1.4.74 0 1.34.63 1.34 1.4-.01.77-.61 1.4-1.34 1.4z">
                        </path>
                        <ellipse cx="46.79" cy="6.67" rx=".98" ry="1.02"></ellipse>
                        <ellipse cx="53.21" cy="6.67" rx=".98" ry="1.02"></ellipse>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                        class="icon primary-color-bg" style="display: none;">
                        <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                    </svg>
                </div>
                <div class="item" onclick="add_widget_separator(this)">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="100" height="10" viewBox="0 0 100 10"
                        class="divider p-10 primary-hover" style="width:100%;height:auto;">
                        <path
                            d="M40.98 4.71H5.03c-.14-.57-.62-1-1.23-1-.71 0-1.29.58-1.29 1.29 0 .71.58 1.29 1.29 1.29.61 0 1.1-.43 1.23-1h35.94c.16 0 .29-.13.29-.29s-.12-.29-.28-.29zm-37.18 1c-.39 0-.71-.32-.71-.71 0-.39.32-.71.71-.71.39 0 .71.32.71.71 0 .39-.32.71-.71.71zM56.93 3.16c-1.01 0-1.84.82-1.84 1.84 0 1.01.82 1.84 1.84 1.84 1.01 0 1.84-.82 1.84-1.84 0-1.01-.83-1.84-1.84-1.84zm0 3.1a1.261 1.261 0 0 1 0-2.52c.69 0 1.26.56 1.26 1.26 0 .69-.57 1.26-1.26 1.26zM43.46 3.16c-1.01 0-1.84.82-1.84 1.84 0 1.01.82 1.84 1.84 1.84 1.01 0 1.84-.82 1.84-1.84 0-1.01-.82-1.84-1.84-1.84zm0 3.1a1.261 1.261 0 0 1 0-2.52 1.261 1.261 0 0 1 0 2.52zM50.2 2c-1.66 0-3 1.35-3 3 0 1.66 1.35 3 3 3 1.66 0 3-1.35 3-3 0-1.66-1.35-3-3-3zm0 5.42c-1.34 0-2.42-1.09-2.42-2.42 0-1.34 1.09-2.42 2.42-2.42 1.34 0 2.42 1.09 2.42 2.42 0 1.34-1.09 2.42-2.42 2.42zM96.2 3.71c-.61 0-1.1.43-1.23 1H59.62a.29.29 0 0 0 0 .58h35.35c.14.57.62 1 1.23 1 .71 0 1.29-.58 1.29-1.29 0-.71-.58-1.29-1.29-1.29zm0 2c-.39 0-.71-.32-.71-.71 0-.39.32-.71.71-.71.39 0 .71.32.71.71 0 .39-.32.71-.71.71z">
                        </path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                        class="icon primary-color-bg" style="display: none;">
                        <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                    </svg>
                </div>
                <div class="item" onclick="add_widget_separator(this)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="100" height="10" viewBox="0 0 100 10"
                        class="divider p-10 primary-hover" style="width:100%;height:auto;">
                        <path
                            d="M96.46 3.7c-.61 0-1.1.43-1.24 1H52.08a2.05 2.05 0 0 0-2.03-1.76c-1.03 0-1.88.77-2.03 1.76H4.78c-.14-.57-.63-1-1.24-1-.71 0-1.3.58-1.3 1.3 0 .71.58 1.3 1.3 1.3.61 0 1.1-.43 1.24-1h43.24c.14.99.99 1.76 2.03 1.76 1.03 0 1.88-.77 2.03-1.76h43.14c.14.57.63 1 1.24 1 .71 0 1.3-.58 1.3-1.3-.01-.71-.59-1.3-1.3-1.3zM3.54 5.71c-.39 0-.71-.32-.71-.71 0-.39.32-.71.71-.71.39 0 .71.32.71.71 0 .39-.31.71-.71.71zm46.51.76c-.81 0-1.47-.66-1.47-1.47 0-.81.66-1.47 1.47-1.47.81 0 1.47.66 1.47 1.47 0 .81-.66 1.47-1.47 1.47zm46.41-.76a.7.7 0 0 1-.69-.6c.02-.04.04-.07.04-.11 0-.04-.03-.07-.04-.11a.7.7 0 0 1 .69-.6c.39 0 .71.32.71.71 0 .39-.32.71-.71.71z">
                        </path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                        class="icon primary-color-bg" style="display: none;">
                        <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                    </svg>
                </div>
                <div class="item" onclick="add_widget_separator(this)" ><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="100" height="10" viewBox="0 0 100 10"
                        class="divider p-10 primary-hover" style="width:100%;height:auto;">
                        <path
                            d="M98 5.52c-.24-.83-1-1.25-2.27-1.25H4.28C3 4.26 2.24 4.69 2 5.52c-.21.75.2 1.52.94 1.74.31.09.63.06.92-.09.28-.15.49-.41.58-.71a1.035 1.035 0 0 0-.7-1.3.849.849 0 0 0-.68.06c-.22.12-.37.31-.44.54-.13.42.11.86.53.98.1.03.21-.03.24-.13s-.03-.21-.13-.24a.406.406 0 0 1-.27-.5c.04-.13.13-.24.25-.31.12-.06.26-.07.39-.03a.641.641 0 0 1 .44.81c-.06.21-.2.38-.4.48-.19.1-.41.13-.62.06-.53-.15-.83-.71-.67-1.26.19-.65.81-.97 1.9-.97h91.45c1.09 0 1.71.32 1.9.97.15.55-.14 1.1-.68 1.26-.21.06-.43.04-.62-.06a.862.862 0 0 1-.4-.48.656.656 0 0 1 .44-.82.518.518 0 0 1 .64.35c.06.21-.06.44-.27.5-.1.03-.16.14-.13.24.03.1.14.16.24.13.42-.13.65-.57.53-.98a.905.905 0 0 0-1.13-.61 1.035 1.035 0 0 0-.7 1.29c.09.31.3.56.58.71.18.1.37.14.57.14.12 0 .23-.02.35-.05.75-.2 1.16-.97.95-1.72z">
                        </path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                        class="icon primary-color-bg" style="display: none;">
                        <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                    </svg>
                </div>
                <div class="item" onclick="add_widget_separator(this)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="100" height="10" viewBox="0 0 100 10"
                        class="divider p-10 primary-hover" style="width:100%;height:auto;">
                        <path
                            d="M97.6 6.55 99.15 5 97.6 3.45 96.25 4.8c-9.34.01-26.3.02-43.36.04l-.61-.61-.65.65-1.3-1.3.65-.65-.78-.78-.77.77.65.65-1.3 1.3-.65-.65-.6.6c-.02 0-.03-.02-.05-.02-9.28.01-26.23.02-43.3.04L2.8 3.45 1.25 5 2.8 6.55 4.15 5.2c17.08-.02 34.05-.03 43.33-.04.01 0 .01-.01.02-.01l.62.62.65-.65 1.3 1.3-.65.65.77.77.77-.77-.65-.65 1.3-1.3.65.65.58-.58c17.05-.01 34-.03 43.36-.04l1.4 1.4z">
                        </path>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                        class="icon primary-color-bg" style="display: none;">
                        <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                    </svg></div>
                <div class="item" onclick="add_widget_separator(this)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="100" height="10" viewBox="0 0 100 10"
                        class="divider p-10 primary-hover" style="width:100%;height:auto;">
                        <path
                            d="M96.34.74c-.72 0-1.3.59-1.3 1.3 0 .48.39.87.87.87.34 0 .62-.28.62-.62 0-.15-.12-.27-.27-.27-.15 0-.27.12-.27.27 0 .05-.04.08-.08.08-.19 0-.34-.15-.34-.34 0-.43.35-.77.77-.77.84 0 1.52.68 1.52 1.52 0 1.55-1.26 2.81-2.81 2.81H4.95c-1.55 0-2.81-1.26-2.81-2.81 0-.84.68-1.52 1.52-1.52.43 0 .77.35.77.77 0 .19-.15.34-.34.34-.05 0-.08-.04-.08-.08 0-.15-.12-.27-.27-.27-.15 0-.27.12-.27.27 0 .34.28.62.62.62.48 0 .87-.39.87-.87 0-.72-.59-1.3-1.3-1.3-1.13 0-2.05.92-2.05 2.05 0 1.84 1.5 3.34 3.34 3.34h90.09c1.84 0 3.34-1.5 3.34-3.34.01-1.13-.91-2.05-2.04-2.05z">
                        </path>
                        <path d="M32.21 2.81h31.75v.53H32.21zM32.21 8.47h31.75V9H32.21z"></path>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                        class="icon primary-color-bg" style="display: none;">
                        <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                    </svg></div>
                <div class="item" onclick="add_widget_separator(this)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="100" height="10" viewBox="0 0 100 10"
                        class="divider p-10 primary-hover" style="width:100%;height:auto;">
                        <path
                            d="M37.91 4.78H2.34A.825.825 0 0 0 .72 5a.825.825 0 0 0 1.62.22h35.57c.12 0 .22-.1.22-.22s-.1-.22-.22-.22z">
                        </path>
                        <circle cx="44.43" cy="5" r="1.38"></circle>
                        <circle cx="39.8" cy="5" r=".83"></circle>
                        <circle cx="49.9" cy="5" r="2.49"></circle>
                        <circle cx="55.36" cy="5" r="1.38"></circle>
                        <circle cx="59.99" cy="5" r=".83"></circle>
                        <path
                            d="M98.45 4.17c-.38 0-.69.26-.79.61H61.88c-.12 0-.22.1-.22.22s.1.22.22.22h35.78A.825.825 0 0 0 99.28 5c0-.46-.37-.83-.83-.83z">
                        </path>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                        class="icon primary-color-bg" style="display: none;">
                        <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                    </svg></div>
                <div class="item" onclick="add_widget_separator(this)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="100" height="10" viewBox="0 0 100 10"
                        class="divider p-10 primary-hover" style="width:100%;height:auto;">
                        <path
                            d="M97.03 6.21c-.25 0-.46.16-.55.37H68.9c-.02-.38-.15-.69-.41-.94-1.04-1-3.94-.65-7.29-.25-4.86.58-10.9 1.31-12.23-2.19l-.23-.61-.19.63c-1.12 3.69-7.97 2.92-13.47 2.3-3.57-.4-6.4-.72-7.13.23-.17.22-.22.5-.16.82H3.92a.59.59 0 0 0-.55-.37c-.33 0-.6.27-.6.6 0 .33.27.6.6.6.25 0 .46-.16.55-.37h24.51l-.12-.31c-.18-.46-.04-.64 0-.69.57-.75 3.56-.42 6.72-.06 5.41.61 12.09 1.36 13.75-2.11 1.79 3.27 7.69 2.56 12.48 1.99 3.11-.37 6.04-.73 6.93.12.21.2.3.47.27.82l-.02.24h28.05c.09.22.3.37.55.37.33 0 .6-.27.6-.6a.615.615 0 0 0-.61-.59z">
                        </path>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                        class="icon primary-color-bg" style="display: none;">
                        <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                    </svg></div>
                <div class="item" onclick="add_widget_separator(this)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="110" height="10" viewBox="0 0 110 10"
                        class="divider p-10 primary-hover" style="width:100%;height:auto;">
                        <path
                            d="M107.58 3.55c-.39-.33-.88-.49-1.38-.45-.78.07-1.37.77-1.3 1.56.05.61.58 1.06 1.18 1.01.49-.04.85-.42.85-.88 0-.09-.06-.16-.14-.2a.365.365 0 0 0-.29-.15.38.38 0 0 0-.38.38c0 .12.06.22.14.29-.07.04-.14.07-.21.07a.622.622 0 0 1-.66-.57c-.04-.53.34-.99.86-1.04a1.422 1.422 0 0 1 1.53 1.31c.09 1.07-.47 1.82-.95 2.27-1 .91-2.65 1.38-4.02 1.15-2.81-.48-3.57-2.2-3.37-3.52.16-1.01.96-2 2.13-1.84.76.1 1.13.71 1.23 1.2.06.32.02.72-.21 1.02a.374.374 0 0 0-.63.28c0 .19.14.34.32.37.07.05.16.07.25.03.6-.34.89-1.04.75-1.78-.16-.85-.8-1.47-1.64-1.58-1.3-.18-2.45.79-2.68 2.25-.02.15-.02.3-.02.45H11.08c0-.15 0-.3-.02-.45-.22-1.46-1.38-2.43-2.68-2.25-.83.1-1.47.72-1.64 1.57-.14.75.15 1.45.75 1.79.08.05.17.02.25-.03a.376.376 0 1 0-.31-.65c-.24-.3-.27-.69-.21-1.02.09-.49.47-1.09 1.23-1.2 1.18-.16 1.98.83 2.13 1.84.2 1.32-.56 3.04-3.37 3.52-1.37.24-3.03-.23-4.02-1.14-.49-.44-1.04-1.19-.95-2.27.03-.38.21-.73.5-.98.29-.25.65-.36 1.03-.33.52.04.9.51.86 1.04-.04.34-.33.59-.67.57a.605.605 0 0 1-.21-.08c.08-.07.14-.17.14-.29a.38.38 0 0 0-.38-.38c-.12 0-.22.06-.29.15-.08.04-.14.1-.14.2 0 .46.36.84.85.88.6.05 1.13-.4 1.18-1.01A1.45 1.45 0 0 0 3.8 3.1c-.5-.04-1 .12-1.38.45-.39.33-.62.79-.67 1.3-.08 1 .3 1.92 1.11 2.66.92.84 2.29 1.34 3.61 1.34.28 0 .55-.02.82-.07 2.41-.41 3.55-1.75 3.75-3.13h87.92c.21 1.38 1.34 2.72 3.75 3.13.27.05.54.07.82.07 1.31 0 2.69-.49 3.61-1.34.81-.74 1.19-1.66 1.11-2.66-.05-.51-.28-.97-.67-1.3z">
                        </path>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                        class="icon primary-color-bg" style="display: none;">
                        <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                    </svg></div>
                <div class="item" onclick="add_widget_separator(this)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="110" height="10" viewBox="0 0 110 10"
                        class="divider p-10 primary-hover" style="width:100%;height:auto;">
                        <path
                            d="M105.81 4.23c.62-1.05-.24-1.7-.24-1.7.08 1.22-.79 2.12-1.28 2.53H100.71a.975.975 0 0 0-.94-.74c-.46 0-.83.32-.94.74H61.39c.08-.47.08-.95.01-1.41-.32-2.09-1.96-3.47-3.81-3.21-1.18.16-2.09 1.04-2.32 2.24-.18.92.13 1.8.78 2.32.08.21.28.35.52.35a.56.56 0 1 0 0-1.12c-.17 0-.31.07-.41.19-.43-.47-.51-1.13-.4-1.66.14-.75.73-1.68 1.9-1.84 1.8-.25 3.02 1.26 3.26 2.8.07.49.06 1.01-.06 1.53-.01.02-.02.04-.02.06 0 .01.01.01.01.02-.4 1.59-1.83 3.16-4.97 3.7-2.05.35-4.52-.36-6-1.72-.73-.67-1.56-1.8-1.43-3.42.05-.59.32-1.13.77-1.51.45-.38 1.01-.57 1.59-.52.82.07 1.43.81 1.36 1.64-.05.56-.54.98-1.08.93a.766.766 0 0 1-.47-.2c.17-.1.29-.27.29-.48a.56.56 0 1 0-1.12 0c0 .17.08.31.19.41.16.41.57.72 1.07.76.82.07 1.55-.55 1.62-1.38.09-1.11-.72-2.08-1.81-2.18a2.62 2.62 0 0 0-1.95.63 2.63 2.63 0 0 0-.97 1.85c-.04.43 0 .85.08 1.25-8.25 0-21.13 0-37.32-.03a.973.973 0 0 0-.94-.75c-.46 0-.83.32-.94.75H5.26c-.55-.45-1.57-1.46-1.3-2.53 0 0-.93.83-.24 1.7C4.33 5 3.25 3.38 2 5.3c1.24 1.92 2.22.23 1.72 1.07-.62 1.05.24 1.7.24 1.7-.08-1.22.79-2.12 1.28-2.52H8.81c.12.43.49.74.94.74.46 0 .82-.32.94-.74 16.28.02 29.2.03 37.45.03.25.76.71 1.46 1.38 2.08 1.33 1.22 3.32 1.94 5.23 1.94.4 0 .8-.03 1.19-.1 3.15-.54 4.82-2.17 5.33-3.95h37.57c.11.42.48.74.94.74.46 0 .83-.32.94-.74h3.57c.54.45 1.55 1.46 1.29 2.52 0 0 .93-.84.24-1.7-.61-.76.48.85 1.72-1.07-1.25-1.92-2.23-.23-1.73-1.07z">
                        </path>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                        class="icon primary-color-bg" style="display: none;">
                        <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                    </svg></div>
                <div class="item" onclick="add_widget_separator(this)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="110" height="13.5" viewBox="0 0 110 13.5"
                        class="divider p-10 primary-hover" style="width:100%;height:auto;">
                        <path
                            d="M106.38 3.51c-3.29-2.34-9.91-1.99-19.65 1.04-15.39 4.79-24.96 7.58-31.09 6.3 1.51-.54 2.77-1.35 3.83-2.48 1.7-1.79 2.26-3.78 1.55-5.45-.54-1.27-1.79-2.14-3.11-2.15-1.28-.01-2.39.75-3.11 2.09-.72-1.34-1.84-2.1-3.11-2.09-1.32.01-2.57.88-3.11 2.15-.71 1.67-.15 3.66 1.55 5.45 1.06 1.12 2.33 1.94 3.83 2.48-6.13 1.28-15.69-1.51-31.08-6.3C13.12 1.52 6.5 1.17 3.21 3.51 1.7 4.58.9 6.23.82 8.39a4.196 4.196 0 0 0 4.04 4.33h.09c1.45 0 2.65-1.15 2.69-2.61.03-.97-.73-1.8-1.71-1.83-.32-.01-.62.1-.85.32-.22.23-.36.52-.37.84-.01.22.07.43.22.6.15.16.36.26.58.26.33.01.62-.25.63-.59 0-.13-.1-.25-.23-.25s-.25.1-.25.23c0 .07-.06.12-.13.12a.32.32 0 0 1-.24-.11.302.302 0 0 1-.09-.24c0-.19.08-.37.22-.5s.32-.2.51-.19c.71.03 1.26.62 1.24 1.33a2.22 2.22 0 0 1-2.29 2.14A3.715 3.715 0 0 1 1.3 8.41c.07-2.01.8-3.52 2.18-4.5 3.16-2.25 9.63-1.87 19.23 1.11 10.53 3.28 17.87 5.49 23.69 6.29 3.42.47 6.15.4 8.38-.2 2.24.61 4.97.68 8.38.2C69 10.5 76.34 8.3 86.87 5.02c9.6-2.99 16.07-3.36 19.23-1.11 1.38.98 2.11 2.5 2.18 4.5a3.715 3.715 0 0 1-3.58 3.83c-1.21.04-2.25-.92-2.29-2.14-.02-.71.53-1.3 1.24-1.33.19-.01.37.06.51.19s.22.3.22.49c0 .09-.03.18-.09.25a.32.32 0 0 1-.24.11c-.07 0-.13-.05-.13-.12 0-.13-.12-.24-.25-.23-.13 0-.24.12-.23.25.01.34.3.6.63.59.22-.01.43-.1.58-.26.15-.16.23-.37.22-.6-.01-.32-.14-.61-.38-.83-.23-.22-.54-.33-.85-.32-.97.03-1.74.85-1.71 1.83a2.701 2.701 0 0 0 2.69 2.61h.09a4.19 4.19 0 0 0 4.04-4.33c-.06-2.17-.86-3.82-2.37-4.89zM50.47 8.05c-1.56-1.65-2.09-3.44-1.46-4.93.47-1.1 1.54-1.85 2.67-1.86 1.19-.01 2.23.78 2.86 2.17.04.1.15.14.25.12.1.01.21-.02.25-.12.62-1.39 1.67-2.18 2.86-2.17 1.13.01 2.21.76 2.67 1.86.63 1.49.1 3.28-1.46 4.93-1.2 1.26-2.62 2.11-4.33 2.6-1.7-.49-3.12-1.34-4.31-2.6z">
                        </path>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                        class="icon primary-color-bg" style="display: none;">
                        <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                    </svg></div>
                <div class="item" onclick="add_widget_separator(this)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="110" height="10" viewBox="0 0 110 10"
                        class="divider p-10 primary-hover" style="width:100%;height:auto;">
                        <path
                            d="m50.03 5.07 4.74 2.73 4.73-2.73-4.73-2.73zM105 5.96l2.96-.89-2.96-.89-2.16.65H71.96l-2.54-1.46-2.93 1.68-2.92-1.68-2.96 1.7 2.96 1.71 2.92-1.69 2.93 1.69 2.54-1.47h30.88zM43.04 5.05l-2.92-1.68-2.55 1.46H6.54l-2.17-.65-2.96.89 2.96.89 2.17-.65h31.03l2.55 1.47 2.92-1.69 2.93 1.69 2.96-1.71-2.96-1.7z">
                        </path>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                        class="icon primary-color-bg" style="display: none;">
                        <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                    </svg></div>
                <div class="item" onclick="add_widget_separator(this)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="105" height="10" viewBox="0 0 105 10"
                        class="divider p-10 primary-hover" style="width:100%;height:auto;">
                        <path
                            d="M103.96 3.67c-.51 0-.91.36-1.02.83H60.7c-.07 0-.13.04-.17.09-.31-1.46-1.34-2.56-2.79-2.96-1.6-.44-3.33.08-4.39 1.32-.51.59-.82 1.28-1.13 1.95-.36.78-.69 1.52-1.3 2.1-1.01.96-2.52 1.3-3.85.86-1.23-.4-2.07-1.36-2.3-2.64-.27-1.48.71-2.9 2.19-3.17.56-.1 1.13.02 1.59.34.47.32.78.81.88 1.37.14.76-.27 1.49-.95 1.8a.457.457 0 0 0-.4-.25c-.26 0-.46.21-.46.46a.456.456 0 0 0 .81.29 2.124 2.124 0 0 0 1.46-2.4c-.12-.66-.5-1.25-1.07-1.64-.57-.39-1.26-.54-1.94-.42a3.185 3.185 0 0 0-2.6 2.93c-.02-.01-.04-.03-.06-.03H2.09c-.11-.47-.52-.83-1.02-.83a1.071 1.071 0 0 0 0 2.14c.51 0 .91-.36 1.02-.83h42.13c.03 0 .04-.02.07-.03.01.12.01.24.03.36.27 1.45 1.22 2.55 2.62 3 .43.14.88.21 1.32.21 1.1 0 2.19-.41 2.99-1.18.67-.64 1.04-1.45 1.4-2.24.31-.67.59-1.3 1.06-1.84.95-1.1 2.49-1.56 3.92-1.17 1.33.36 2.23 1.34 2.48 2.7.13.71-.03 1.44-.44 2.04-.41.6-1.03 1-1.75 1.13a2.14 2.14 0 0 1-2.48-1.71c-.14-.75.23-1.45.86-1.78.08.13.22.22.38.22.26 0 .46-.21.46-.46 0-.26-.21-.46-.46-.46-.15 0-.28.08-.37.19-.94.36-1.53 1.34-1.34 2.36a2.605 2.605 0 0 0 3.02 2.09c.84-.15 1.56-.62 2.05-1.32.44-.64.62-1.4.53-2.16.04.03.08.05.13.05h42.24c.11.47.51.83 1.02.83a1.071 1.071 0 0 0 0-2.14z">
                        </path>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                        class="icon primary-color-bg" style="display: none;">
                        <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                    </svg></div>
                <div class="item" onclick="add_widget_separator(this)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="105" height="10" viewBox="0 0 105 10"
                        class="divider p-10 primary-hover" style="width:100%;height:auto;">
                        <path
                            d="M102.07 4.06c-.48 0-.86.35-.96.8H59.79c.34-.38.56-.88.64-1.48a1.93 1.93 0 0 0-.39-1.45c-.32-.42-.78-.68-1.3-.75a1.517 1.517 0 0 0-1.69 1.3c-.08.64.37 1.22 1 1.31A.91.91 0 0 0 59.08 3c.01-.11-.06-.21-.17-.22-.11-.01-.21.06-.22.17a.513.513 0 0 1-.58.44.765.765 0 0 1-.66-.86c.04-.29.19-.55.42-.73.23-.18.53-.26.82-.22.86.11 1.46.9 1.35 1.76-.08.61-.33 1.08-.7 1.41-.32-.21-.7-.36-1.13-.42-.76-.1-1.66.06-2.54.45-1.24-.6-2.43-1.69-3.06-3.18-.01-.02-.03-.03-.05-.05-.02-.02-.03-.04-.05-.06-.02-.01-.05 0-.08 0s-.05-.01-.08 0-.04.04-.05.06c-.02.02-.04.03-.05.05-.64 1.48-1.83 2.57-3.07 3.18-.88-.39-1.78-.55-2.54-.45-.43.06-.81.2-1.13.42-.37-.34-.62-.81-.7-1.41-.05-.42.06-.83.31-1.16.26-.33.62-.55 1.04-.6.29-.04.58.04.82.22.23.18.39.44.42.73a.76.76 0 0 1-.66.86.513.513 0 0 1-.58-.44.188.188 0 0 0-.22-.17c-.11.01-.19.11-.17.22.03.24.16.46.35.61.19.15.43.21.68.18.64-.08 1.09-.67 1-1.31a1.5 1.5 0 0 0-.58-1c-.32-.24-.71-.35-1.11-.3-.52.07-.98.34-1.3.75-.32.42-.46.93-.39 1.45.08.6.3 1.1.64 1.48H3.8a.986.986 0 0 0-.96-.8c-.55 0-1 .45-1 1s.45 1 1 1c.48 0 .86-.35.96-.8h41.16c-.28.37-.47.82-.54 1.36-.14 1.07.62 2.06 1.69 2.21.07.01.13.01.2.01.33 0 .65-.11.91-.31.32-.24.52-.6.58-1 .08-.64-.37-1.22-1-1.31-.24-.03-.48.03-.68.18s-.32.36-.35.61c-.01.11.06.21.17.22.11.01.21-.06.22-.17a.513.513 0 0 1 .58-.44c.42.06.72.44.66.86-.04.29-.19.55-.42.73-.23.18-.52.26-.82.22-.86-.11-1.46-.9-1.35-1.76.08-.61.33-1.08.7-1.41.32.21.7.36 1.13.42.16.02.32.03.48.03.64 0 1.35-.17 2.05-.48 1.24.6 2.43 1.69 3.07 3.18.01.02.03.03.05.05.02.02.03.04.05.05.02.01.05 0 .08 0s.05.01.08 0c.02-.01.03-.03.05-.05.02-.02.04-.03.05-.05.64-1.49 1.83-2.58 3.07-3.18.7.31 1.41.48 2.05.48.17 0 .33-.01.48-.03.43-.06.81-.2 1.13-.42.37.34.62.81.7 1.41.05.42-.06.83-.31 1.16-.26.33-.62.55-1.04.6-.29.04-.58-.04-.82-.22-.23-.18-.39-.44-.42-.73a.76.76 0 0 1 .66-.86.513.513 0 0 1 .58.44c.01.11.12.19.22.17.11-.01.19-.11.17-.22-.03-.24-.16-.46-.35-.61s-.43-.21-.68-.18c-.64.08-1.09.67-1 1.31.05.4.26.75.58 1 .27.2.58.31.91.31.07 0 .13 0 .2-.01.52-.07.98-.34 1.3-.75.32-.42.46-.93.39-1.45-.07-.54-.26-1-.54-1.36h41.23c.09.45.48.8.96.8a1.005 1.005 0 0 0 0-2.01zM46.69 5.28a2.34 2.34 0 0 1-.82-.28c.24-.13.51-.24.82-.28.59-.08 1.26.03 1.94.28-.68.25-1.35.36-1.94.28zm5.73 2.62a6.72 6.72 0 0 0-2.8-2.9 6.72 6.72 0 0 0 2.8-2.9 6.72 6.72 0 0 0 2.8 2.9 6.72 6.72 0 0 0-2.8 2.9zm5.73-2.62c-.58.08-1.26-.03-1.94-.28.68-.25 1.36-.36 1.95-.28.31.04.58.15.82.28-.25.13-.52.24-.83.28z">
                        </path>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                        class="icon primary-color-bg" style="display: none;">
                        <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                    </svg></div>
                <div class="item" onclick="add_widget_separator(this)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="105" height="13" viewBox="0 0 105 13"
                        class="divider p-10 primary-hover" style="width:100%;height:auto;">
                        <path
                            d="M101.99 5.47a1.33 1.33 0 0 0-.98-.27c-.6.08-1.14.38-1.52.86-.32.41-.47.9-.47 1.41H62.75c.02-.45 0-.9-.11-1.35-.22-.88-.77-1.63-1.55-2.1a3.38 3.38 0 0 0-2.58-.39c-.63.16-1.17.55-1.51 1.11-.34.56-.44 1.22-.28 1.86.24.96 1.21 1.55 2.17 1.31.13-.03.21-.17.18-.3a.252.252 0 0 0-.3-.18c-.7.17-1.4-.25-1.57-.95A1.92 1.92 0 0 1 57.42 5c.27-.45.7-.77 1.21-.89.75-.19 1.54-.07 2.2.33.67.4 1.14 1.04 1.32 1.79.57 2.28-.83 4.6-3.12 5.17-1.61.4-3.28.15-4.7-.71-.6-.36-1.12-.81-1.56-1.34.52-.68.92-1.48 1.17-2.36.87-3.04-1.29-5.7-1.39-5.81l-.22-.26-.18.29C50.2 4.28 51 6.89 51.03 6.99c.21.87.59 1.67 1.11 2.37-1.5 1.77-3.86 2.63-6.19 2.05a4.283 4.283 0 0 1-3.12-5.17c.19-.75.66-1.39 1.32-1.79.67-.4 1.45-.52 2.2-.33.52.11.95.43 1.22.88s.35.98.22 1.49c-.08.34-.29.62-.59.8-.3.18-.65.23-.98.15a.252.252 0 0 0-.3.18c-.03.13.05.27.18.3.96.24 1.93-.35 2.17-1.31.16-.64.06-1.3-.28-1.86s-.88-.96-1.51-1.11c-.88-.22-1.8-.08-2.58.39-.78.47-1.33 1.21-1.55 2.1-.11.46-.13.91-.11 1.35H6.04c0-.51-.18-1-.51-1.41-.38-.49-.93-.8-1.54-.87a1.33 1.33 0 0 0-1.48 1.15c-.03.22.03.44.16.61.14.18.33.29.55.31.14.02.26-.08.28-.21a.256.256 0 0 0-.22-.28.348.348 0 0 1-.22-.12.361.361 0 0 1-.06-.25c.03-.22.14-.42.32-.56s.4-.2.62-.17c.48.06.91.3 1.22.68.3.39.44.86.38 1.32l-.04.28h36.77a4.777 4.777 0 0 0 3.56 3.92c2.49.62 5-.28 6.62-2.14.46.53 1 .99 1.62 1.37 1.06.64 2.24.97 3.45.97.54 0 1.08-.07 1.62-.2a4.764 4.764 0 0 0 3.56-3.92h36.58c.03 0 .05-.03.07-.04.03-.01.06-.02.08-.05.02-.02.02-.05.04-.09.01-.03.03-.05.03-.07 0-.01-.01-.01-.01-.01 0-.01.01-.01 0-.02-.06-.47.07-.94.36-1.32.29-.38.72-.62 1.19-.68.22-.03.44.03.62.17s.29.34.32.56a.29.29 0 0 1-.07.24c-.05.07-.13.11-.22.13-.13.02-.23.14-.21.27.02.13.14.23.27.21.22-.03.41-.14.55-.31a.83.83 0 0 0 .17-.61c-.02-.34-.2-.65-.48-.87zM51.52 6.85c-.01-.02-.71-2.33.87-5.07.51.74 1.72 2.84 1.08 5.08-.22.77-.57 1.48-1.01 2.09-.43-.63-.75-1.33-.94-2.1z">
                        </path>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                        class="icon primary-color-bg" style="display: none;">
                        <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                    </svg></div>
            </div>
            <input type="text" name="recid_widget_separator" id="recid_widget_separator" value="">
        </div>
        <!-- <div class="jetp-footer p-20-10" style="display: none;"> -->
        <div id="div_btn_widget_separator_delete" >
        <!-- <button class="linear-warning w-120px mr-a"><svg
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path
                        d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z">
                    </path>
                </svg><span><span wudooh="true"
                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Delete</font>
                        </font>
                    </span></span></button> -->
        </div>
                <!-- </div> -->
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>

<script>
    function change_comm_method(opt){

        document.getElementById("div_comm_tel").style.display = 'none';
        document.getElementById("div_comm_mobile").style.display = 'none';
        document.getElementById("div_comm_sms").style.display = 'none';
        document.getElementById("div_comm_email").style.display = 'none';
        document.getElementById("div_comm_whatsapp").style.display = 'none';
        
        document.getElementById("div_comm_"+opt).style.display = 'block';            
    }
    </script>


<style type="text/css" id="widgetStyleId">
        .jetp-lb0hm {
            background: #FFFFFF;
        }

        .jetp-ngl4yv {
            margin-top: 25px;
            margin-bottom: 25px;
        }

        .jetp-feffm {
            color: #000;
            text-align: center;
        }

        .jetp-qdqrai {
            font-size: 13px;
        }

        .jetp-btd1mq {
            font-size: 15px;
        }

        .jetp-lxpam {
            font-size: 17px;
        }

        .jetp-qpo9lj {
            font-size: 19px;
        }

        .jetp-5822r8 {
            font-size: 21px;
        }

        .jetp-4u4q8j {
            font-size: 23px;
        }

        .jetp-3xq83p {
            font-size: 25px;
        }

        .jetp-ykszmm {
            transition: all 0.3s;
            line-height: 1.5;
            font-size: 17px;
            width: 100%;
            background: #2196f3;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px 10px;
            min-height: 50px;
            cursor: pointer;
            opacity: 0.9;
            margin-bottom: 10px;
        }

        .jetp-ykszmm:hover {
            opacity: 1;
            color: #fff;
        }

        .jetp-q1ley {
            background: #E6E4E0;
            width: 100%;
            height: auto;
            display: block;
            margin-bottom: 10px;
        }

        .jetp-kogby {
            border-radius: 100%;
            width: 60px;
            height: 60px;
            border: solid 1px #ddd;
            margin: 0 5px;
            transition: all 0.3s;
            background: #fff;
        }

        .jetp-kogby:hover {
            background: #eee;
            transform: scale(1.1);
        }

        .jetp-q346uk {
            width: 100%;
            height: auto;
            background: #f1f1f1;
            margin: auto;
            display: block;
        }

        .jetp-b6x308 {
            display: flex;
            width: 55px;
            height: 55px;
            color: #fff;
            border-radius: 50%;
            align-items: center;
            justify-content: center;
            margin: 5px;
            opacity: 0.9;
        }

        .jetp-b6x308:hover {
            opacity: 1;
            color: #fff;
        }

        .jetp-p928fi {
            color: #444444;
        }

        .jetp-zs0p7 {
            margin-bottom: 10px;
        }

        .jetp-k9u3p {
            background: transparent;
            line-height: 1.5;
            font-size: 15px;
            width: 100%;
            border: solid 2px;
            color: #000;
            border-color: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px 10px;
            min-height: 50px;
            opacity: 0.9;
            margin-bottom: 10px;
            transition: all 0.5s;
        }

        .jetp-k9u3p:hover {
            opacity: 1;
        }

        .jetp-k9u3p.active {
            border-color: #2196F3;
        }

        .jetp-kxy58n {
            color: #ddd;
        }

        .jetp-kxy58n.active {
            color: #2196F3;
        }

        .jetp-32496t {
            color: #fff;
            border: none;
            min-width: 150px;
            margin: 0 auto;
            border-radius: 25px;
            background: #4CAF50;
            width: 40%;
        }

        .jetp-tsi1 {
            color: #E91E63;
            font-size: 13px;
            line-height: 1;
            font-weight: bold;
        }

        .jetp-tsi1.active {
            animation: shakeX 1.2s;
        }

        .jetp-3artbb {
            color: #000000;
        }

        .jetp-4ee9sc {
            opacity: 0.8;
            cursor: pointer;
            width: 35px;
            height: 35px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 100%;
            transition: all 0.3s;
        }

        .jetp-4ee9sc:hover {
            background: rgba(0, 0, 0, 0.15);
        }

        .wscrollbar::-webkit-scrollbar {
            width: 10px;
            height: 10px;
        }

        .wscrollbar::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.05);
        }

        .wscrollbar::-webkit-scrollbar-thumb {
            background: rgba(0, 0, 0, 0.15);
        }

        .wscrollbar:hover::-webkit-scrollbar-thumb {
            background: rgba(0, 0, 0, 0.2);
        }

        .wscrollbar::-webkit-scrollbar-thumb:hover {
            background: rgba(0, 0, 0, 0.4);
        }

        .wspinner {
            display: inline-block;
            width: 28px;
            height: 28px;
            border: solid 5px;
            border-radius: 100%;
            animation: wspinner 1s infinite linear;
            border-color: rgba(0, 0, 0, .1);
            border-top-color: #fff;
            -webkit-animation: wspinner 1s infinite linear;
        }

        @keyframes wspinner {
            0% {
                transform: rotate(0);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @-webkit-keyframes wspinner {
            0% {
                -webkit-transform: rotate(0);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }
    </style>

<script>
// Simple list
Sortable.create(simpleList, { /* options */ });

// List with handle
Sortable.create(listWithHandle, {
  handle: '.glyphicon-move',
  animation: 150
});

// ------------------------------------------------------------------  //


function add_widget_link() {    

    document.getElementById('widget_default').style.display = 'none';
    var vlink_text = document.getElementById('link_text').value;
    var vlink_url =  document.getElementById('link_url').value;
    var recid_widget_link = document.getElementById('recid_widget_link').value ;
    
     document.getElementById('link_text').value='';
    document.getElementById('link_url').value='';
    document.getElementById('recid_widget_link').value='';
    
    $.ajax({
        url: "{{ route('card_designer.add_widget_link') }}",
        type: "POST",
        data: { 
            link_text: vlink_text,
            link_url: vlink_url,
            recid_widget_link: recid_widget_link,
            _token: "{{ csrf_token() }}"
        },
        success: function(result) {
            // alert('Link added successfully');
            
            // Assuming 'result' contains the new HTML to be added
            var newHtml = '<div class="list-group-item">' + result + '</div>';
            // alert('recid_widget_link: '+recid_widget_link);
            if(recid_widget_link == ''){
                $('#simpleList').append(newHtml);
            }else{
                document.getElementById('div_widget_link'+recid_widget_link).innerHTML = newHtml;
            }

            hide_div('div_widgets_link');
        },
        error: function(xhr, status, error) {
            // Handle the error
            console.log('Error: ' + error);
        }
    });
}


function edit_widget_link(recid) {
    document.getElementById('widget_default').style.display = 'none';

    var delete_btn_code = ' <button id="btn_widget_link_delete" class="linear-warning w-120px mr-a" style="display: flex;" onclick="delete_widget_link('+recid+')"> \
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon"> \
                    <path d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z"> \
                    </path> \
                </svg><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;"> \
                        <font style="vertical-align: inherit;"> \
                            <font style="vertical-align: inherit;">Delete</font> \
                        </font> \
                    </span></span> \
            </button>';
    
    $.ajax({
        url: "{{ url('card_designer/edit_widget_link') }}",
        type: "POST",
        data: { 
            recid_widget_link: recid,
            _token: "{{ csrf_token() }}"
        },
        success: function(result) {

            document.getElementById('link_text').value = result.link_text;
            document.getElementById('link_url').value = result.link_url;

            document.getElementById('recid_widget_link').value = result.id;            
            document.getElementById('div_btn_widget_link_delete').innerHTML = delete_btn_code;
            document.getElementById('div_widgets_link').style.display='flex';
        },
        error: function(xhr, status, error) {
            // Handle the error
            console.log('Error: ' + error);
        }
    });
}


function delete_widget_link(recid) {
    document.getElementById('widget_default').style.display = 'none';

    if(confirm('Are you sure ?')){
    
        $.ajax({
            url: "{{ url('card_designer/delete_widget_link') }}",
            type: "POST",
            data: { 
                recid_widget_link: recid,
                _token: "{{ csrf_token() }}"
            },
            success: function(result) {
                // alert('Link added successfully');
                // alert(result);
                document.getElementById('div_widget_link'+recid).style.display='none';
                document.getElementById('div_widgets_link').style.display='none';
            },
            error: function(xhr, status, error) {
                // Handle the error
                console.log('Error: ' + error);
            }
        });
    }
}

// ------------------------------------------------------ //


function add_widget_separator(item) {
    document.getElementById('widget_default').style.display = 'none';
    var vseparator = item.querySelector('svg').outerHTML;
    var recid_widget_separator = document.getElementById('recid_widget_separator').value ;
    
    $.ajax({
        url: "{{ route('card_designer.add_widget_separator') }}",
        type: "POST",
        data: {
            separator: vseparator,
            recid_widget_separator: recid_widget_separator,
            _token: "{{ csrf_token() }}"
        },
        success: function(result) {
            console.log(result);
            
            var newHtml = '<div class="list-group-item">' + result + '</div>';
            if(recid_widget_separator == ''){
                $('#simpleList').append(newHtml);
            }else{
                document.getElementById('div_widget_separator'+recid_widget_separator).innerHTML = newHtml;
            }

            hide_div('div_widgets_separator');
        },
        error: function(xhr, status, error) {
            // Handle the error
            console.log('Error: ' + error);
        }
    });
}


function edit_widget_separator(recid) {
    document.getElementById('widget_default').style.display = 'none';

    var delete_btn_code = ' <button id="btn_widget_separator_delete" class="linear-warning w-120px mr-a" style="display: flex;" onclick="delete_widget_separator('+recid+')"> \
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon"> \
                    <path d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z"> \
                    </path> \
                </svg><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;"> \
                        <font style="vertical-align: inherit;"> \
                            <font style="vertical-align: inherit;">Delete</font> \
                        </font> \
                    </span></span> \
            </button>';
    
    $.ajax({
        url: "{{ url('card_designer/edit_widget_separator') }}",
        type: "POST",
        data: { 
            recid_widget_separator: recid,
            _token: "{{ csrf_token() }}"
        },
        success: function(result) {

            // document.getElementById('link_text').value = result.link_text;
            // document.getElementById('link_url').value = result.link_url;
            document.getElementById('recid_widget_separator').value = result.id;
            
            document.getElementById('div_btn_widget_separator_delete').innerHTML = delete_btn_code;
            document.getElementById('div_widgets_separator').style.display='flex';
        },
        error: function(xhr, status, error) {
            // Handle the error
            console.log('Error: ' + error);
        }
    });
}


function delete_widget_separator(recid) {
    document.getElementById('widget_default').style.display = 'none';

    if(confirm('Are you sure ?')){
    
        $.ajax({
            url: "{{ url('card_designer/delete_widget_separator') }}",
            type: "POST",
            data: { 
                recid_widget_separator: recid,
                _token: "{{ csrf_token() }}"
            },
            success: function(result) {
                // alert('Link added successfully');
                // alert(result);
                document.getElementById('div_widget_separator'+recid).style.display='none';
                document.getElementById('div_widgets_separator').style.display='none';
            },
            error: function(xhr, status, error) {
                // Handle the error
                console.log('Error: ' + error);
            }
        });
    }
}

// ------------------------------------------------------ //




function add_widget_social_network() {

    document.getElementById('widget_default').style.display = 'none';
    var vsn_title = document.getElementById('sn_title').value;
    var vsn_facebook = document.getElementById('sn_facebook').value;
    var vsn_twitter = document.getElementById('sn_twitter').value;
    var vsn_instagram = document.getElementById('sn_instagram').value;
    var vsn_telegram = document.getElementById('sn_telegram').value;
    var vsn_whatsapp = document.getElementById('sn_whatsapp').value;
    var vsn_pinterest = document.getElementById('sn_pinterest').value;

    var recid_widget_social_network = document.getElementById('recid_widget_social_network').value ;
    
    
    $.ajax({
        url: "{{ route('card_designer.add_widget_social_network') }}",
        type: "POST",
        data: {
            sn_title: vsn_title,
            sn_facebook: vsn_facebook,
            sn_twitter: vsn_twitter,
            sn_instagram: vsn_instagram,
            sn_telegram: vsn_telegram,
            sn_whatsapp: vsn_whatsapp,
            sn_pinterest: vsn_pinterest,
            recid_widget_social_network: recid_widget_social_network,
            _token: "{{ csrf_token() }}"
        },
        success: function(result) {
            console.log(result);
            
            var newHtml = '<div class="list-group-item">' + result + '</div>';
            if(recid_widget_social_network == ''){
                $('#simpleList').append(newHtml);
            }else{
                document.getElementById('div_widget_social_network'+recid_widget_social_network).innerHTML = newHtml;
            }

            hide_div('div_widgets_social_network');
        },
        error: function(xhr, status, error) {
            // Handle the error
            console.log('Error: ' + error);
        }
    });
}


function edit_widget_social_network(recid) {
    document.getElementById('widget_default').style.display = 'none';

    var delete_btn_code = ' <button id="btn_widget_social_network_delete" class="linear-warning w-120px mr-a" style="display: flex;" onclick="delete_widget_social_network('+recid+')"> \
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon"> \
                    <path d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z"> \
                    </path> \
                </svg><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;"> \
                        <font style="vertical-align: inherit;"> \
                            <font style="vertical-align: inherit;">Delete</font> \
                        </font> \
                    </span></span> \
            </button>';
    
    $.ajax({
        url: "{{ url('card_designer/edit_widget_social_network') }}",
        type: "POST",
        data: { 
            recid_widget_social_network: recid,
            _token: "{{ csrf_token() }}"
        },
        success: function(result) {

            document.getElementById('sn_title').value = result.sn_title;
            document.getElementById('sn_facebook').value = result.sn_facebook;
            document.getElementById('sn_twitter').value = result.sn_twitter;
            document.getElementById('sn_instagram').value = result.sn_instagram;
            document.getElementById('sn_telegram').value = result.sn_telegram;
            document.getElementById('sn_whatsapp').value = result.sn_whatsapp;
            document.getElementById('sn_pinterest').value = result.sn_pinterest;

            document.getElementById('recid_widget_social_network').value = result.id;
            
            document.getElementById('div_btn_widget_social_network_delete').innerHTML = delete_btn_code;
            document.getElementById('div_widgets_social_network').style.display='flex';
        },
        error: function(xhr, status, error) {
            // Handle the error
            console.log('Error: ' + error);
        }
    });
}


function delete_widget_social_network(recid) {
    document.getElementById('widget_default').style.display = 'none';

    if(confirm('Are you sure ?')){
    
        $.ajax({
            url: "{{ url('card_designer/delete_widget_social_network') }}",
            type: "POST",
            data: { 
                recid_widget_social_network: recid,
                _token: "{{ csrf_token() }}"
            },
            success: function(result) {
                // alert('Link added successfully');
                // alert(result);
                document.getElementById('div_widget_social_network'+recid).style.display='none';
                document.getElementById('div_widgets_social_network').style.display='none';
            },
            error: function(xhr, status, error) {
                // Handle the error
                console.log('Error: ' + error);
            }
        });
    }
}

// ------------------------------------------------------ //


function add_widget_video() {
    document.getElementById('widget_default').style.display = 'none';
    var vvideo_link = document.getElementById('video_link').value;
    var recid_widget_video = document.getElementById('recid_widget_video').value ;
    
    $.ajax({
        url: "{{ route('card_designer.add_widget_video') }}",
        type: "POST",
        data: {
            video_link: vvideo_link,
            recid_widget_video: recid_widget_video,
            _token: "{{ csrf_token() }}"
        },
        success: function(result) {
            console.log(result);
            
            var newHtml = '<div class="list-group-item">' + result + '</div>';
            if(recid_widget_video == ''){
                $('#simpleList').append(newHtml);
            }else{
                document.getElementById('div_widget_video'+recid_widget_video).innerHTML = newHtml;
            }

            hide_div('div_widgets_video');
        },
        error: function(xhr, status, error) {
            // Handle the error
            console.log('Error: ' + error);
        }
    });
}


function edit_widget_video(recid) {
    document.getElementById('widget_default').style.display = 'none';

    var delete_btn_code = ' <button id="btn_widget_video_delete" class="linear-warning w-120px mr-a" style="display: flex;" onclick="delete_widget_video('+recid+')"> \
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon"> \
                    <path d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z"> \
                    </path> \
                </svg><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;"> \
                        <font style="vertical-align: inherit;"> \
                            <font style="vertical-align: inherit;">Delete</font> \
                        </font> \
                    </span></span> \
            </button>';
    
    $.ajax({
        url: "{{ url('card_designer/edit_widget_video') }}",
        type: "POST",
        data: { 
            recid_widget_video: recid,
            _token: "{{ csrf_token() }}"
        },
        success: function(result) {

            document.getElementById('video_link').value = result.video_link;

            document.getElementById('recid_widget_video').value = result.id;            
            document.getElementById('div_btn_widget_video_delete').innerHTML = delete_btn_code;
            document.getElementById('div_widgets_video').style.display='flex';
        },
        error: function(xhr, status, error) {
            // Handle the error
            console.log('Error: ' + error);
        }
    });
}


function delete_widget_video(recid) {
    document.getElementById('widget_default').style.display = 'none';

    if(confirm('Are you sure ?')){
    
        $.ajax({
            url: "{{ url('card_designer/delete_widget_video') }}",
            type: "POST",
            data: { 
                recid_widget_video: recid,
                _token: "{{ csrf_token() }}"
            },
            success: function(result) {
                // alert('Link added successfully');
                // alert(result);
                document.getElementById('div_widget_video'+recid).style.display='none';
                document.getElementById('div_widgets_video').style.display='none';
            },
            error: function(xhr, status, error) {
                // Handle the error
                console.log('Error: ' + error);
            }
        });
    }
}

// ------------------------------------------------------ //


function add_widget_user_text() {
    document.getElementById('widget_default').style.display = 'none';
    var vuser_text = document.getElementById('user_text').value;
    var vuser_text_font_size = document.getElementById('user_text_font_size').value;
    var vuser_text_alignment = document.getElementById('user_text_alignment').value;
    var recid_widget_user_text = document.getElementById('recid_widget_user_text').value ;
    
    $.ajax({
        url: "{{ route('card_designer.add_widget_user_text') }}",
        type: "POST",
        data: {
            user_text: vuser_text,
            user_text_alignment: vuser_text_alignment,
            user_text_font_size: vuser_text_font_size,
            recid_widget_user_text: recid_widget_user_text,
            _token: "{{ csrf_token() }}"
        },
        success: function(result) {
            console.log(result);
            
            var newHtml = '<div class="list-group-item">' + result + '</div>';
            if(recid_widget_user_text == ''){
                $('#simpleList').append(newHtml);
            }else{
                document.getElementById('div_widget_user_text'+recid_widget_user_text).innerHTML = newHtml;
            }

            hide_div('div_widgets_text_description');
        },
        error: function(xhr, status, error) {
            // Handle the error
            console.log('Error: ' + error);
        }
    });
}


function edit_widget_user_text(recid) {
    document.getElementById('widget_default').style.display = 'none';

    var delete_btn_code = ' <button id="btn_widget_user_text_delete" class="linear-warning w-120px mr-a" style="display: flex;" onclick="delete_widget_user_text('+recid+')"> \
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon"> \
                    <path d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z"> \
                    </path> \
                </svg><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;"> \
                        <font style="vertical-align: inherit;"> \
                            <font style="vertical-align: inherit;">Delete</font> \
                        </font> \
                    </span></span> \
            </button>';
    
    $.ajax({
        url: "{{ url('card_designer/edit_widget_user_text') }}",
        type: "POST",
        data: { 
            recid_widget_user_text: recid,
            _token: "{{ csrf_token() }}"
        },
        success: function(result) {

            document.getElementById('user_text').value = result.user_text;
            document.getElementById('user_text_font_size').value = result.user_text_font_size;
            document.getElementById('user_text_alignment').value = result.user_text_alignment;

            document.getElementById('recid_widget_user_text').value = result.id;            
            document.getElementById('div_btn_widget_text_description_delete').innerHTML = delete_btn_code;
            document.getElementById('div_widgets_text_description').style.display='flex';
        },
        error: function(xhr, status, error) {
            // Handle the error
            console.log('Error: ' + error);
        }
    });
}


function delete_widget_user_text(recid) {
    document.getElementById('widget_default').style.display = 'none';

    if(confirm('Are you sure ?')){
    
        $.ajax({
            url: "{{ url('card_designer/delete_widget_user_text') }}",
            type: "POST",
            data: { 
                recid_widget_user_text: recid,
                _token: "{{ csrf_token() }}"
            },
            success: function(result) {
                // alert('Link added successfully');
                // alert(result);
                document.getElementById('div_widget_user_text'+recid).style.display='none';
                document.getElementById('div_widgets_text_description').style.display='none';
            },
            error: function(xhr, status, error) {
                // Handle the error
                console.log('Error: ' + error);
            }
        });
    }
}

// ------------------------------------------------------ //


function add_widget_attend_quest() {
    document.getElementById('widget_default').style.display = 'none';
    var vattend_quest_title = document.getElementById('attend_quest_title').value;
    var vattend_quest_yes_title = document.getElementById('attend_quest_yes_title').value;
    var vattend_quest_no_title = document.getElementById('attend_quest_no_title').value;
    var vattend_quest_mandatory = document.getElementById('attend_quest_mandatory').value;
    var recid_widget_attend_quest = document.getElementById('recid_widget_attend_quest').value ;
    
    
    $.ajax({
        url: "{{ route('card_designer.add_widget_attend_quest') }}",
        type: "POST",
        data: {
            attend_quest_title: vattend_quest_title,
            attend_quest_yes_title: vattend_quest_yes_title,
            attend_quest_no_title: vattend_quest_no_title,
            attend_quest_mandatory: vattend_quest_mandatory,
            recid_widget_attend_quest: recid_widget_attend_quest,
            _token: "{{ csrf_token() }}"
        },
        success: function(result) {
            console.log(result);
            
            var newHtml = '<div class="list-group-item">' + result + '</div>';
            if(recid_widget_attend_quest == ''){
                $('#simpleList').append(newHtml);
            }else{
                document.getElementById('div_widget_attend_quest'+recid_widget_attend_quest).innerHTML = newHtml;
            }

            hide_div('div_widgets_question');
        },
        error: function(xhr, status, error) {
            // Handle the error
            console.log('Error: ' + error);
        }
    });
}


function edit_widget_attend_quest(recid) {
    document.getElementById('widget_default').style.display = 'none';

    var delete_btn_code = '<button id="btn_widget_attend_quest_delete" class="linear-warning w-120px mr-a" style="display: flex;" onclick="delete_widget_attend_quest('+recid+')"> \
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon"> \
                    <path d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z"> \
                    </path> \
                </svg><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;"> \
                        <font style="vertical-align: inherit;"> \
                            <font style="vertical-align: inherit;">Delete</font> \
                        </font> \
                    </span></span> \
            </button>';
    
    $.ajax({
        url: "{{ url('card_designer/edit_widget_attend_quest') }}",
        type: "POST",
        data: { 
            recid_widget_attend_quest: recid,
            _token: "{{ csrf_token() }}"
        },
        success: function(result) {

            document.getElementById('attend_quest_title').value = result.attend_quest_title;
            document.getElementById('attend_quest_yes_title').value = result.attend_quest_yes_title;
            document.getElementById('attend_quest_no_title').value = result.attend_quest_no_title;
            document.getElementById('attend_quest_mandatory').value = result.attend_quest_mandatory;
            
            document.getElementById('recid_widget_attend_quest').value = result.id;            
            document.getElementById('div_btn_widget_question_delete').innerHTML = delete_btn_code;
            document.getElementById('div_widgets_question').style.display='flex';
        },
        error: function(xhr, status, error) {
            // Handle the error
            console.log('Error: ' + error);
        }
    });
}


function delete_widget_attend_quest(recid) {
    document.getElementById('widget_default').style.display = 'none';

    if(confirm('Are you sure ?')){
    
        $.ajax({
            url: "{{ url('card_designer/delete_widget_attend_quest') }}",
            type: "POST",
            data: { 
                recid_widget_attend_quest: recid,
                _token: "{{ csrf_token() }}"
            },
            success: function(result) {
                // alert('Link added successfully');
                // alert(result);
                document.getElementById('div_widget_attend_quest'+recid).style.display='none';
                document.getElementById('div_widgets_question').style.display='none';
            },
            error: function(xhr, status, error) {
                // Handle the error
                console.log('Error: ' + error);
            }
        });
    }
}

// ------------------------------------------------------ //


function add_widget_text_question() {
    document.getElementById('widget_default').style.display = 'none';
    var vtext_question_title = document.getElementById('text_question_title').value;
    var vtext_question_type = document.getElementById('text_question_type').value;
    var recid_widget_text_question = document.getElementById('recid_widget_text_question').value ;

    var vtext_question_mandatory = '';
    if(document.getElementById('text_question_mandatory').checked){
        vtext_question_mandatory = 'yes';
    }
    
    var vtext_question_foryesno = '';
    if(document.getElementById('text_question_foryes').checked){
        vtext_question_foryesno = 'yes';
    }else if(document.getElementById('text_question_forno').checked){
        vtext_question_foryesno = 'no';
    }
    
    
    $.ajax({
        url: "{{ route('card_designer.add_widget_text_question') }}",
        type: "POST",
        data: {
            text_question_title: vtext_question_title,
            text_question_type: vtext_question_type,
            text_question_mandatory: vtext_question_mandatory,
            text_question_foryesno: vtext_question_foryesno,
            recid_widget_text_question: recid_widget_text_question,
            _token: "{{ csrf_token() }}"
        },
        success: function(result) {
            console.log(result);
            
            var newHtml = '<div class="list-group-item">' + result + '</div>';
            if(recid_widget_text_question == ''){
                $('#simpleList').append(newHtml);
            }else{
                document.getElementById('div_widget_text_question'+recid_widget_text_question).innerHTML = newHtml;
            }

            hide_div('div_widgets_text_question');
        },
        error: function(xhr, status, error) {
            // Handle the error
            console.log('Error: ' + error);
        }
    });
}


function edit_widget_text_question(recid) {
    document.getElementById('widget_default').style.display = 'none';

    var delete_btn_code = ' <button id="btn_widget_text_question_delete" class="linear-warning w-120px mr-a" style="display: flex;" onclick="delete_widget_text_question('+recid+')"> \
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon"> \
                    <path d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z"> \
                    </path> \
                </svg><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;"> \
                        <font style="vertical-align: inherit;"> \
                            <font style="vertical-align: inherit;">Delete</font> \
                        </font> \
                    </span></span> \
            </button>';
    
    $.ajax({
        url: "{{ url('card_designer/edit_widget_text_question') }}",
        type: "POST",
        data: { 
            recid_widget_text_question: recid,
            _token: "{{ csrf_token() }}"
        },
        success: function(result) {

            document.getElementById('text_question_title').value = result.text_question_title;
            document.getElementById('text_question_type').value = result.text_question_type;
            document.getElementById('text_question_foryes').value = result.text_question_foryes;
            document.getElementById('text_question_mandatory').value = result.text_question_mandatory;
            
            document.getElementById('recid_widget_text_question').value = result.id;            
            document.getElementById('div_btn_widget_text_question_delete').innerHTML = delete_btn_code;
            document.getElementById('div_widgets_text_question').style.display='flex';
        },
        error: function(xhr, status, error) {
            // Handle the error
            console.log('Error: ' + error);
        }
    });
}


function delete_widget_text_question(recid) {
    document.getElementById('widget_default').style.display = 'none';

    if(confirm('Are you sure ?')){
    
        $.ajax({
            url: "{{ url('card_designer/delete_widget_text_question') }}",
            type: "POST",
            data: { 
                recid_widget_text_question: recid,
                _token: "{{ csrf_token() }}"
            },
            success: function(result) {
                // alert('Link added successfully');
                // alert(result);
                document.getElementById('div_widget_text_question'+recid).style.display='none';
                document.getElementById('div_widgets_text_question').style.display='none';
            },
            error: function(xhr, status, error) {
                // Handle the error
                console.log('Error: ' + error);
            }
        });
    }
}

                            
function show_participating_options(){
    if(document.getElementById('presence_status').checked){
        document.getElementById('div_isparticipating').style.display = 'block';
    }else{
        document.getElementById('div_isparticipating').style.display = 'none';
    }
}

// ------------------------------------------------------ //

function add_widget_countdown(){
    document.getElementById('widget_default').style.display = 'none';
    var vcountdown_title = document.getElementById('countdown_title').value;
    var vcountdown_date = document.getElementById('countdown_date').value;
    var vcountdown_time = document.getElementById('countdown_time').value;
    var recid_widget_countdown = document.getElementById('recid_widget_countdown').value ;
    
    $.ajax({
        url: "{{ route('card_designer.add_widget_countdown') }}",
        type: "POST",
        data: {
            countdown_title: vcountdown_title,
            countdown_date: vcountdown_date,
            countdown_time: vcountdown_time,
            recid_widget_countdown: recid_widget_countdown,
            _token: "{{ csrf_token() }}"
        },
        success: function(result) {
            console.log(result);
            
            var newHtml = '<div class="list-group-item">' + result + '</div>';
            if(recid_widget_countdown == ''){
                $('#simpleList').append(newHtml);
            }else{
                document.getElementById('div_widget_countdown'+recid_widget_countdown).innerHTML = newHtml;
            }

            hide_div('div_widgets_timer');
        },
        error: function(xhr, status, error) {
            // Handle the error
            console.log('Error: ' + error);
        }
    });
}


function edit_widget_countdown(recid) {
    document.getElementById('widget_default').style.display = 'none';

    var delete_btn_code = ' <button id="btn_widget_countdown_delete" class="linear-warning w-120px mr-a" style="display: flex;" onclick="delete_widget_countdown('+recid+')"> \
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon"> \
                    <path d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z"> \
                    </path> \
                </svg><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;"> \
                        <font style="vertical-align: inherit;"> \
                            <font style="vertical-align: inherit;">Delete</font> \
                        </font> \
                    </span></span> \
            </button>';
    
    $.ajax({
        url: "{{ url('card_designer/edit_widget_countdown') }}",
        type: "POST",
        data: { 
            recid_widget_countdown: recid,
            _token: "{{ csrf_token() }}"
        },
        success: function(result) {

            document.getElementById('countdown_title').value = result.countdown_title;
            document.getElementById('countdown_date').value = result.countdown_date;
            document.getElementById('countdown_time').value = result.countdown_time;

            document.getElementById('recid_widget_countdown').value = result.id;            
            document.getElementById('div_btn_widget_timer_delete').innerHTML = delete_btn_code;
            document.getElementById('div_widgets_timer').style.display='flex';
        },
        error: function(xhr, status, error) {
            // Handle the error
            console.log('Error: ' + error);
        }
    });
}


function delete_widget_countdown(recid) {
    document.getElementById('widget_default').style.display = 'none';

    if(confirm('Are you sure ?')){
    
        $.ajax({
            url: "{{ url('card_designer/delete_widget_countdown') }}",
            type: "POST",
            data: { 
                recid_widget_countdown: recid,
                _token: "{{ csrf_token() }}"
            },
            success: function(result) {
                // alert('Link added successfully');
                // alert(result);
                document.getElementById('div_widget_countdown'+recid).style.display='none';
                document.getElementById('div_widgets_timer').style.display='none';
            },
            error: function(xhr, status, error) {
                // Handle the error
                console.log('Error: ' + error);
            }
        });
    }
}

// ------------------------------------------------------ //



function add_widget_optional_question(){
    document.getElementById('widget_default').style.display = 'none';
    var voptnl_quest_title = document.getElementById('optnl_quest_title').value;
    var voptnl_quest_type = document.getElementById('optnl_quest_type').value;
    // var vcountdown_time = document.getElementById('optnl_quest_options').value;
    var recid_widget_optional_question = document.getElementById('recid_widget_optional_question').value ;

    var options = document.querySelectorAll('input[name="optnl_quest_options[]"]');
    var voptnl_quest_options = Array.from(options).map(option => option.value);
    
    var voptnl_quest_mandatory = '';
    if(document.getElementById('optnl_quest_mandatory').checked){
        voptnl_quest_mandatory = 'yes';
    }
    
    var voptnl_quest_foryesno = '';
    if(document.getElementById('optnl_quest_foryes').checked){
        voptnl_quest_foryesno = 'yes';
    }else if(document.getElementById('optnl_quest_forno').checked){
        voptnl_quest_foryesno = 'no';
    }

    $.ajax({
        url: "{{ route('card_designer.add_widget_optional_question') }}",
        type: "POST",
        data: {
            optnl_quest_title: voptnl_quest_title,
            optnl_quest_type: voptnl_quest_type,
            optnl_quest_options: voptnl_quest_options,
            optnl_quest_mandatory: voptnl_quest_mandatory,
            optnl_quest_foryesno: voptnl_quest_foryesno,
            recid_widget_optional_question: recid_widget_optional_question,
            _token: "{{ csrf_token() }}"
        },
        success: function(result) {
            console.log(result);
            
            var newHtml = '<div class="list-group-item">' + result + '</div>';
            if(recid_widget_optional_question == ''){
                $('#simpleList').append(newHtml);
            }else{
                document.getElementById('div_widgets_optional_question'+recid_widget_optional_question).innerHTML = newHtml;
            }

            hide_div('div_widgets_optional_question');
        },
        error: function(xhr, status, error) {
            // Handle the error
            console.log('Error: ' + error);
        }
    });
}

function show_optnl_quest_participating_options(){
    if(document.getElementById('optnl_quest_presence_status').checked){
        document.getElementById('div_optnl_quest_isparticipating').style.display = 'block';
    }else{
        document.getElementById('div_optnl_quest_isparticipating').style.display = 'none';
    }
}


function edit_widget_optional_question(recid) {
    document.getElementById('widget_default').style.display = 'none';

    var delete_btn_code = ' <button id="btn_widget_optional_question_delete" class="linear-warning w-120px mr-a" style="display: flex;" onclick="delete_widget_optional_question('+recid+')"> \
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon"> \
                    <path d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z"> \
                    </path> \
                </svg><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;"> \
                        <font style="vertical-align: inherit;"> \
                            <font style="vertical-align: inherit;">Delete</font> \
                        </font> \
                    </span></span> \
            </button>';
    
    $.ajax({
        url: "{{ url('card_designer/edit_widget_optional_question') }}",
        type: "POST",
        data: { 
            recid_widget_optional_question: recid,
            _token: "{{ csrf_token() }}"
        },
        success: function(result) {

            document.getElementById('optnl_quest_title').value = result.optnl_quest_title;
            document.getElementById('optnl_quest_type').value = result.optnl_quest_type;
            //error:  document.getElementById('optnl_quest_options').value = result.optnl_quest_options;
            document.getElementById('optnl_quest_mandatory').value = result.optnl_quest_mandatory;
            //error:  document.getElementById('optnl_quest_foryesno').value = result.optnl_quest_foryesno;

            document.getElementById('recid_widget_optional_question').value = result.id;            
            document.getElementById('div_btn_widget_optional_question_delete').innerHTML = delete_btn_code;
            document.getElementById('div_widgets_optional_question').style.display='flex';
        },
        error: function(xhr, status, error) {
            // Handle the error
            console.log('Error: ' + error);
        }
    });
}


function delete_widget_optional_question(recid) {
    document.getElementById('widget_default').style.display = 'none';

    if(confirm('Are you sure ?')){
    
        $.ajax({
            url: "{{ url('card_designer/delete_widget_optional_question') }}",
            type: "POST",
            data: { 
                recid_widget_optional_question: recid,
                _token: "{{ csrf_token() }}"
            },
            success: function(result) {
                // alert('Link added successfully');
                // alert(result);
                document.getElementById('div_widgets_optional_question'+recid).style.display='none';
                document.getElementById('div_widgets_optional_question').style.display='none';
            },
            error: function(xhr, status, error) {
                // Handle the error
                console.log('Error: ' + error);
            }
        });
    }
}

// ------------------------------------------------------ //



function add_widget_contact_comm() {
    document.getElementById('widget_default').style.display = 'none';

    var comm_type = document.getElementById('comm_type').value;
    var comm_title = document.getElementById('comm_title').value;
    var comm_tel = document.getElementById('comm_tel').value;
    var comm_mobile = document.getElementById('comm_mobile').value;
    var comm_sms_no = document.getElementById('comm_sms_no').value; 
    var comm_sms_text = document.getElementById('comm_sms_text').value;
    var comm_email = document.getElementById('comm_email').value;
    var comm_whatsapp_no = document.getElementById('comm_whatsapp_no').value;
    var comm_whatsapp_text = document.getElementById('comm_whatsapp_text').value;  
    var recid_widget_contact_comm = document.getElementById('recid_widget_contact_comm').value ;      
    
    
    $.ajax({
        url: "{{ route('card_designer.add_widget_contact_comm') }}",
        type: "POST",
        data: {
            comm_type: comm_type,
            comm_title: comm_title,
            comm_tel: comm_tel,
            comm_mobile: comm_mobile,
            comm_sms_no: comm_sms_no,
            comm_sms_text: comm_sms_text,
            comm_email: comm_email,
            comm_whatsapp_no: comm_whatsapp_no,
            comm_whatsapp_text: comm_whatsapp_text,
            recid_widget_contact_comm: recid_widget_contact_comm,
            _token: "{{ csrf_token() }}"
        },
        success: function(result) {
            console.log(result);
            
            var newHtml = '<div class="list-group-item">' + result + '</div>';
            if(recid_widget_contact_comm == ''){
                $('#simpleList').append(newHtml);
            }else{
                document.getElementById('div_widget_contact_comm'+recid_widget_contact_comm).innerHTML = newHtml;
            }

            hide_div('div_widgets_comm_landline');
        },
        error: function(xhr, status, error) {
            // Handle the error
            console.log('Error: ' + error);
        }
    });
}


function edit_widget_contact_comm(recid) {
    document.getElementById('widget_default').style.display = 'none';

    var delete_btn_code = ' <button id="btn_widget_contact_comm_delete" class="linear-warning w-120px mr-a" style="display: flex;" onclick="delete_widget_contact_comm('+recid+')"> \
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon"> \
                    <path d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z"> \
                    </path> \
                </svg><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;"> \
                        <font style="vertical-align: inherit;"> \
                            <font style="vertical-align: inherit;">Delete</font> \
                        </font> \
                    </span></span> \
            </button>';
    
    $.ajax({
        url: "{{ url('card_designer/edit_widget_contact_comm') }}",
        type: "POST",
        data: { 
            recid_widget_contact_comm: recid,
            _token: "{{ csrf_token() }}"
        },
        success: function(result) {

            document.getElementById('comm_type').value = result.comm_type;
            document.getElementById('comm_title').value = result.comm_title;
            document.getElementById('comm_tel').value = result.comm_tel;
            document.getElementById('comm_mobile').value = result.comm_mobile;
            document.getElementById('comm_sms_no').value = result.comm_sms_no;
            document.getElementById('comm_sms_text').value = result.comm_sms_text;
            document.getElementById('comm_email').value = result.comm_email;
            document.getElementById('comm_whatsapp_no').value = result.comm_whatsapp_no;
            document.getElementById('comm_whatsapp_text').value = result.comm_whatsapp_text;

            document.getElementById('recid_widget_contact_comm').value = result.id;            
            document.getElementById('div_btn_widget_contact_comm_delete').innerHTML = delete_btn_code;
            document.getElementById('div_widgets_comm_landline').style.display='flex';
        },
        error: function(xhr, status, error) {
            // Handle the error
            console.log('Error: ' + error);
        }
    });
}


function delete_widget_contact_comm(recid) {
    document.getElementById('widget_default').style.display = 'none';

    if(confirm('Are you sure ?')){
    
        $.ajax({
            url: "{{ url('card_designer/delete_widget_contact_comm') }}",
            type: "POST",
            data: { 
                recid_widget_contact_comm: recid,
                _token: "{{ csrf_token() }}"
            },
            success: function(result) {
                // alert('Link added successfully');
                // alert(result);
                document.getElementById('div_widget_contact_comm'+recid).style.display='none';
                document.getElementById('div_widgets_comm_landline').style.display='none';
            },
            error: function(xhr, status, error) {
                // Handle the error
                console.log('Error: ' + error);
            }
        });
    }
}

// ------------------------------------------------------ //



function add_widget_memorial() {
    document.getElementById('widget_default').style.display = 'none';
    var memorial_title = document.getElementById('memorial_title').value;
    var memorial_text = document.getElementById('memorial_text').value;
    var recid_widget_memorial = document.getElementById('recid_widget_memorial').value ;

    alert('recid_widget_memorial: '+recid_widget_memorial);
    var display_oncard = '';
    if(document.getElementById('display_oncard').checked){
        display_oncard='Y';
    }

    var memorial_answer_mandatory = '';
    if(document.getElementById('memorial_answer_mandatory').checked){
        memorial_answer_mandatory='Y';
    }

    var memorial_presence_status = '';
    if(document.getElementById('memorial_presence_status').checked){
        memorial_presence_status = 'Y';
    }

    var memorial_presence_yesno = '';
    if(document.getElementById('memorial_presence_yes').checked){
        memorial_presence_yesno='Yes';
    }else if(document.getElementById('memorial_presence_no').checked){
        memorial_presence_yesno = 'No';
    }

   
    $.ajax({
        url: "{{ route('card_designer.add_widget_memorial') }}",
        type: "POST",
        data: {

            memorial_title: memorial_title,
            memorial_text: memorial_text,
            memorial_presence_yesno: memorial_presence_yesno,
            display_oncard: display_oncard,
            memorial_answer_mandatory: memorial_answer_mandatory,
            memorial_presence_status: memorial_presence_status,
            recid_widget_memorial: recid_widget_memorial,
            _token: "{{ csrf_token() }}"
        },
        success: function(result) {
            console.log(result);
            
            var newHtml = '<div class="list-group-item">' + result + '</div>';
            if(recid_widget_memorial == ''){
                $('#simpleList').append(newHtml);
            }else{
                document.getElementById('div_widget_memorial'+recid_widget_memorial).innerHTML = newHtml;
            }

            hide_div('div_widgets_memorial');
        },
        error: function(xhr, status, error) {
            // Handle the error
            console.log('Error: ' + error);
        }
    });
}


function edit_widget_memorial(recid) {
    document.getElementById('widget_default').style.display = 'none';
    // alert('recid: '+recid);
    var delete_btn_code = ' <button id="btn_widget_memorial_delete" class="linear-warning w-120px mr-a" style="display: flex;" onclick="delete_widget_memorial('+recid+')"> \
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon"> \
                    <path d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z"> \
                    </path> \
                </svg><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;"> \
                        <font style="vertical-align: inherit;"> \
                            <font style="vertical-align: inherit;">Delete</font> \
                        </font> \
                    </span></span> \
            </button>';
    
    $.ajax({
        url: "{{ url('card_designer/edit_widget_memorial') }}",
        type: "POST",
        data: { 
            recid_widget_memorial: recid,
            _token: "{{ csrf_token() }}"
        },
        success: function(result) {

            alert(result.memorial_title);
            document.getElementById('memorial_title').value = result.memorial_title;
            document.getElementById('memorial_text').value = result.memorial_text;
            // document.getElementById('memorial_presence_yesno').value = result.memorial_presence_yesno;
            document.getElementById('display_oncard').value = result.display_oncard;
            document.getElementById('memorial_answer_mandatory').value = result.memorial_answer_mandatory;
            document.getElementById('memorial_presence_status').value = result.memorial_presence_status;
            
            document.getElementById('recid_widget_memorial').value = result.id;            
            document.getElementById('div_btn_widget_memorial_delete').innerHTML = delete_btn_code;
            document.getElementById('div_widgets_memorial').style.display='flex';

        },
        error: function(xhr, status, error) {
            // Handle the error
            console.log('Error: ' + error);
        }
    });
}


function delete_widget_memorial(recid) {
    document.getElementById('widget_default').style.display = 'none';

    if(confirm('Are you sure ?')){
    
        $.ajax({
            url: "{{ url('card_designer/delete_widget_memorial') }}",
            type: "POST",
            data: { 
                recid_widget_memorial: recid,
                _token: "{{ csrf_token() }}"
            },
            success: function(result) {
                // alert('Link added successfully');
                // alert(result);
                document.getElementById('div_widget_memorial'+recid).style.display='none';
                document.getElementById('div_widgets_memorial').style.display='none';
            },
            error: function(xhr, status, error) {
                // Handle the error
                console.log('Error: ' + error);
            }
        });
    }
}

// ------------------------------------------------------ //



function add_widget_image() {
    document.getElementById('widget_default').style.display = 'none';
    
    var widgetImageInput = document.getElementById('widget_image');
    var file = widgetImageInput.files[0];
    var recid_widget_image = document.getElementById('recid_widget_image').value ;

    if (file) {
        var formData = new FormData();
        formData.append('widget_image', file);
        formData.append('_token', "{{ csrf_token() }}");

        $.ajax({
            url: "{{ route('card_designer.add_widget_image') }}",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(result) {
                console.log(result);
                
                var newHtml = '<div class="list-group-item">' + result + '</div>';
                if(recid_widget_image == ''){
                    $('#simpleList').append(newHtml);
                }else{
                    document.getElementById('div_widget_image'+recid_widget_image).innerHTML = newHtml;
                }

                hide_div('div_widgets_image');
            },
            error: function(xhr, status, error) {
                // Handle the error
                console.log('Error: ' + error);
            }
        });
    } else {
        console.log('No file selected.');
    }
}


function edit_widget_image(recid) {
    document.getElementById('widget_default').style.display = 'none';

    var delete_btn_code = '<button id="btn_widget_image_delete" class="linear-warning w-120px mr-a" style="display: flex;" onclick="delete_widget_image('+recid+')"> \
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:ximage="http://www.w3.org/1999/ximage" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon"> \
                    <path d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z"> \
                    </path> \
                </svg><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;"> \
                        <font style="vertical-align: inherit;"> \
                            <font style="vertical-align: inherit;">Delete</font> \
                        </font> \
                    </span></span> \
            </button>';
    
    $.ajax({
        url: "{{ url('card_designer/edit_widget_image') }}",
        type: "POST",
        data: { 
            recid_widget_image: recid,
            _token: "{{ csrf_token() }}"
        },
        success: function(result) {

            // document.getElementById('widget_image').value = result.widget_image;

            document.getElementById('recid_widget_image').value = result.id;            
            document.getElementById('div_btn_widget_image_delete').innerHTML = delete_btn_code;
            document.getElementById('div_widgets_image').style.display='flex';
        },
        error: function(xhr, status, error) {
            // Handle the error
            console.log('Error: ' + error);
        }
    });
}


function delete_widget_image(recid) {
    document.getElementById('widget_default').style.display = 'none';

    if(confirm('Are you sure ?')){
    
        $.ajax({
            url: "{{ url('card_designer/delete_widget_image') }}",
            type: "POST",
            data: { 
                recid_widget_image: recid,
                _token: "{{ csrf_token() }}"
            },
            success: function(result) {
                // alert('image added successfully');
                // alert(result);
                document.getElementById('div_widget_image'+recid).style.display='none';
                document.getElementById('div_widgets_image').style.display='none';
            },
            error: function(xhr, status, error) {
                // Handle the error
                console.log('Error: ' + error);
            }
        });
    }
}

// ------------------------------------------------------ //


</script>
