<div id="div_widget_contact_comm{{$recid_widget_contact_comm}}"  onclick="edit_widget_contact_comm({{$recid_widget_contact_comm}})"><div class="widget p-20-10" item="jetp-wvch3x">
    <div>
        @if($comm_type=='email')
        <section class="jetp-ngl4yv">
            <a class="jetp-ykszmm" href="mailto:{{$comm_email}}"><span style="flex: 1 1 0%; margin: 0px 5px;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">{{$comm_title}}</font>
                    </font>
                </span>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon" style="margin: 0px 5px;">
                    <path d="M12,15C12.81,15 13.5,14.7 14.11,14.11C14.7,13.5 15,12.81 15,12C15,11.19 14.7,10.5 14.11,9.89C13.5,9.3 12.81,9 12,9C11.19,9 10.5,9.3 9.89,9.89C9.3,10.5 9,11.19 9,12C9,12.81 9.3,13.5 9.89,14.11C10.5,14.7 11.19,15 12,15M12,2C14.75,2 17.1,3 19.05,4.95C21,6.9 22,9.25 22,12V13.45C22,14.45 21.65,15.3 21,16C20.3,16.67 19.5,17 18.5,17C17.3,17 16.31,16.5 15.56,15.5C14.56,16.5 13.38,17 12,17C10.63,17 9.45,16.5 8.46,15.54C7.5,14.55 7,13.38 7,12C7,10.63 7.5,9.45 8.46,8.46C9.45,7.5 10.63,7 12,7C13.38,7 14.55,7.5 15.54,8.46C16.5,9.45 17,10.63 17,12V13.45C17,13.86 17.16,14.22 17.46,14.53C17.76,14.84 18.11,15 18.5,15C18.92,15 19.27,14.84 19.57,14.53C19.87,14.22 20,13.86 20,13.45V12C20,9.81 19.23,7.93 17.65,6.35C16.07,4.77 14.19,4 12,4C9.81,4 7.93,4.77 6.35,6.35C4.77,7.93 4,9.81 4,12C4,14.19 4.77,16.07 6.35,17.65C7.93,19.23 9.81,20 12,20H17V22H12C9.25,22 6.9,21 4.95,19.05C3,17.1 2,14.75 2,12C2,9.25 3,6.9 4.95,4.95C6.9,3 9.25,2 12,2Z">
                    </path>
                </svg>
            </a>
        </section>
        @endif

        @if($comm_type=='tel')
        <section class="jetp-ngl4yv">
            <a class="jetp-ykszmm" href="tel:{{$comm_tel}}"><span style="flex: 1 1 0%; margin: 0px 5px;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">{{$comm_title}}</font>
                    </font>
                </span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon" style="margin: 0px 5px;">
                    <path d="M20,15.5C18.83,15.5 17.67,15.34 16.56,15.05C16.3,14.97 16,15.05 15.84,15.21L13.21,17.84C10.36,16.45 8.55,14.64 7.16,11.79L9.79,9.16C9.95,9 10.03,8.7 9.95,8.44C9.66,7.33 9.5,6.17 9.5,5C9.5,4.45 9.05,4 8.5,4H5C4.45,4 4,4.45 4,5C4,12.18 9.82,18 17,18C17.55,18 18,17.55 18,17V15.5C18,15.5 20,15.5 20,15.5Z"></path>
                </svg>
            </a>
        </section>
        @endif


        @if($comm_type=='mobile')
        <section class="jetp-ngl4yv">
            <a class="jetp-ykszmm" href="tel:{{$comm_mobile}}"><span style="flex: 1 1 0%; margin: 0px 5px;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">{{$comm_title}}</font>
                    </font>
                </span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon" style="margin: 0px 5px;">
                    <path d="M17 1H7C5.34 1 4 2.34 4 4V20C4 21.66 5.34 23 7 23H17C18.66 23 20 21.66 20 20V4C20 2.34 18.66 1 17 1M12 22C11.45 22 11 21.55 11 21C11 20.45 11.45 20 12 20C12.55 20 13 20.45 13 21C13 21.55 12.55 22 12 22M17 18H7V4H17V18Z"></path>
                </svg>
            </a>
        </section>
        @endif



        @if($comm_type=='sms')
        <section class="jetp-ngl4yv">
            <a class="jetp-ykszmm" href="sms:{{$comm_sms_no}}?body={{$comm_sms_text}}"><span style="flex: 1 1 0%; margin: 0px 5px;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">{{$comm_title}}</font>
                    </font>
                </span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon" style="margin: 0px 5px;">
                    <path d="M20,2H4C2.9,2 2,2.9 2,4V20L6,16H20C21.1,16 22,15.1 22,14V4C22,2.9 21.1,2 20,2M20,14H6.83L4,16.83V4H20V14M6,6H18V8H6V6M6,10H14V12H6V10Z"></path>
                </svg>

            </a>
        </section>
        @endif



        @if($comm_type=='whatsapp')
        <section class="jetp-ngl4yv">
            <a class="jetp-ykszmm" href="{{'https://wa.me/'.$comm_whatsapp_no.'?text='.urlencode($comm_whatsapp_text)}}"><span style="flex: 1 1 0%; margin: 0px 5px;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">{{$comm_title}}</font>
                    </font>
                </span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon" style="margin: 0px 5px;">
                    <path d="M12.07,2A9.93,9.93,0,0,0,2,11.93a9.78,9.78,0,0,0,1.44,5.17L2,22l5-1.3a10,10,0,0,0,5.05,1.3h0A9.94,9.94,0,1,0,12.07,2ZM11.94,20A8.07,8.07,0,0,1,7,18.55L6.7,18.35l-3,.79.79-2.93-.19-.31A8,8,0,1,1,11.94,20Zm4.48-5.85c-.25-.13-1.46-.72-1.69-.8s-.39-.13-.55.13-.63.8-.77,1-.28.2-.53.07a6.79,6.79,0,0,1-2-1.22,7.55,7.55,0,0,1-1.39-1.74c-.13-.26-.01-.4.1-.53a3.23,3.23,0,0,0,.33-.44.47.47,0,0,0,0-.47c-.07-.13-.55-1.32-.75-1.82s-.39-.4-.55-.41-.31-.01-.47-.01a.91.91,0,0,0-.67.31,2.79,2.79,0,0,0-.88,2.08A4.83,4.83,0,0,0,9.2,15.26c1.15,1.95,2.84,3.18,3.25,3.35a6.93,6.93,0,0,0,3.18.88,4.47,4.47,0,0,0,2.76-.94,2.33,2.33,0,0,0,1.1-1.82,2.12,2.12,0,0,0-.42-1.82C16.72,14.59,16.58,14.56,16.42,14.47Z"></path>
                </svg>


            </a>
        </section>
        @endif


    </div>
    <div class="overlay"></div>
</div>
</div>