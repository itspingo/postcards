<div id="div_widget_social_network{{$recid_widget_social_network}}"  onclick="edit_widget_social_network({{$recid_widget_social_network}})">
<div class="widget p-20-10" item="jetp-ygemh">
    <div>
        <section class="jetp-ngl4yv">
            <div class="jetp-feffm jetp-qpo9lj jetp-zs0p7">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">{{$sn_title}}</font>
                </font>
            </div>
            <div
                style="display: flex; flex-wrap: wrap; justify-content: center; align-items: center;">
                
                @if($sn_instagram != '')
                    <a class="jetp-b6x308" href="{{$sn_instagram}}"
                    target="_blank"
                    style="background: linear-gradient(45deg, rgb(240, 148, 51) 0px, rgb(230, 104, 60) 25%, rgb(220, 39, 67) 50%, rgb(204, 35, 102) 75%, rgb(188, 24, 136) 100%); padding: 0px;"><svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        fill="currentColor" width="32" height="32" viewBox="0 0 32 32"
                        class="icon" style="width: 48px; height: 48px;">
                        <path
                            d="M12.3 7C9.4 7 7 9.4 7 12.3v7.4c0 2.9 2.4 5.3 5.3 5.3h7.4c2.9 0 5.3-2.4 5.3-5.3v-7.4C25 9.4 22.6 7 19.7 7h-7.4zm0 1.6h7.4c2 0 3.7 1.6 3.7 3.7v7.4c0 2-1.6 3.7-3.7 3.7h-7.4c-2 0-3.7-1.6-3.7-3.7v-7.4c0-2 1.7-3.7 3.7-3.7zm8.5 1.8c-.4 0-.7.3-.7.7 0 .4.3.7.7.7s.7-.3.7-.7c.1-.3-.3-.7-.7-.7zm-4.8.7c-2.7 0-4.9 2.2-4.9 4.9s2.2 4.9 4.9 4.9 4.9-2.2 4.9-4.9-2.2-4.9-4.9-4.9zm0 1.6c1.8 0 3.3 1.5 3.3 3.3s-1.5 3.3-3.3 3.3-3.3-1.5-3.3-3.3 1.5-3.3 3.3-3.3z">
                        </path>
                    </svg></a>
                @endif
                    
                @if($sn_telegram != '')
                    <a class="jetp-b6x308" href="{{$sn_telegram}}"
                    target="_blank"
                    style="background: linear-gradient(315deg, rgb(64, 175, 238), rgba(64, 175, 238, 0.7)); padding: 0px;"><svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        fill="currentColor" width="48" height="48" viewBox="0 0 48 48"
                        class="icon" style="width: 48px; height: 48px;">
                        <path
                            d="M10.7874 23.4709C17.7667 20.3663 22.4206 18.3195 24.7493 17.3305C31.3979 14.507 32.7795 14.0165 33.68 14.0002C33.878 13.9968 34.3208 14.0469 34.6077 14.2845C34.8499 14.4852 34.9165 14.7563 34.9484 14.9465C34.9803 15.1368 35.02 15.5702 34.9884 15.9088C34.6281 19.774 33.0692 29.1539 32.276 33.483C31.9404 35.3148 31.2796 35.929 30.6399 35.9891C29.2496 36.1197 28.1938 35.051 26.8473 34.1497C24.7401 32.7395 23.5498 31.8615 21.5044 30.4854C19.1407 28.895 20.673 28.0209 22.0201 26.5923C22.3726 26.2185 28.4983 20.5295 28.6169 20.0135C28.6317 19.9489 28.6455 19.7083 28.5055 19.5813C28.3655 19.4543 28.1589 19.4977 28.0098 19.5322C27.7985 19.5812 24.4323 21.8529 17.9113 26.3473C16.9558 27.0172 16.0904 27.3435 15.315 27.3264C14.4602 27.3076 12.8159 26.833 11.5935 26.4273C10.0942 25.9296 8.90254 25.6666 9.0063 24.8215C9.06035 24.3813 9.65403 23.9311 10.7874 23.4709Z">
                        </path>
                    </svg></a>
                    @endif
                    
                    @if($sn_whatsapp != '')
                    <a class="jetp-b6x308"
                    href="whatsapp://send?phone={{$sn_whatsapp}}" target="_blank"
                    style="background: linear-gradient(315deg, rgb(47, 190, 57), rgba(47, 190, 57, 0.7)); padding: 0px;"><svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        fill="currentColor" width="48" height="48" viewBox="0 0 48 48"
                        class="icon" style="width: 48px; height: 48px;">
                        <path
                            d="M34.7507 13.2115C32.1777 10.5628 28.621 9.125 24.9885 9.125C17.2696 9.125 11.0642 15.4061 11.1399 23.0493C11.1399 25.4709 11.821 27.8169 12.9561 29.9358L10.9885 37.125L18.3291 35.2331C20.3723 36.3682 22.6426 36.898 24.9128 36.898C32.5561 36.898 38.7615 30.6169 38.7615 22.9736C38.7615 19.2655 37.3237 15.7845 34.7507 13.2115ZM24.9885 34.552C22.9453 34.552 20.902 34.0223 19.1615 32.9628L18.7074 32.7358L14.3183 33.8709L15.4534 29.5574L15.1507 29.1034C11.821 23.7304 13.4101 16.6169 18.8588 13.2872C24.3074 9.95743 31.3453 11.5466 34.675 16.9953C38.0047 22.4439 36.4156 29.4818 30.9669 32.8115C29.2264 33.9466 27.1074 34.552 24.9885 34.552ZM31.648 26.152L30.8156 25.7736C30.8156 25.7736 29.6047 25.2439 28.848 24.8655C28.7723 24.8655 28.6966 24.7899 28.621 24.7899C28.3939 24.7899 28.2426 24.8655 28.0912 24.9412C28.0912 24.9412 28.0156 25.0169 26.9561 26.2277C26.8804 26.3791 26.7291 26.4547 26.5777 26.4547H26.502C26.4264 26.4547 26.275 26.3791 26.1993 26.3034L25.821 26.152C24.9885 25.7736 24.2318 25.3196 23.6264 24.7142C23.475 24.5628 23.248 24.4115 23.0966 24.2601C22.5669 23.7304 22.0372 23.125 21.6588 22.4439L21.5831 22.2926C21.5074 22.2169 21.5074 22.1412 21.4318 21.9899C21.4318 21.8385 21.4318 21.6872 21.5074 21.6115C21.5074 21.6115 21.8101 21.2331 22.0372 21.0061C22.1885 20.8547 22.2642 20.6277 22.4156 20.4764C22.5669 20.2493 22.6426 19.9466 22.5669 19.7196C22.4912 19.3412 21.5831 17.298 21.3561 16.8439C21.2047 16.6169 21.0534 16.5412 20.8264 16.4655H20.5993C20.448 16.4655 20.221 16.4655 19.9939 16.4655C19.8426 16.4655 19.6912 16.5412 19.5399 16.5412L19.4642 16.6169C19.3128 16.6926 19.1615 16.8439 19.0101 16.9196C18.8588 17.0709 18.7831 17.2223 18.6318 17.3736C18.102 18.0547 17.7993 18.8872 17.7993 19.7196C17.7993 20.325 17.9507 20.9304 18.1777 21.4601L18.2534 21.6872C18.9345 23.125 19.8426 24.4115 21.0534 25.5466L21.3561 25.8493C21.5831 26.0764 21.8101 26.2277 21.9615 26.4547C23.5507 27.8169 25.3669 28.8007 27.4101 29.3304C27.6372 29.4061 27.9399 29.4061 28.1669 29.4818C28.3939 29.4818 28.6966 29.4818 28.9237 29.4818C29.302 29.4818 29.7561 29.3304 30.0588 29.1791C30.2858 29.0277 30.4372 29.0277 30.5885 28.8764L30.7399 28.725C30.8912 28.5736 31.0426 28.498 31.1939 28.3466C31.3453 28.1953 31.4966 28.0439 31.5723 27.8926C31.7237 27.5899 31.7993 27.2115 31.875 26.8331C31.875 26.6818 31.875 26.4547 31.875 26.3034C31.875 26.3034 31.7993 26.2277 31.648 26.152Z">
                        </path>
                    </svg></a>
                    @endif
                    
                    @if($sn_twitter != '')
                    <a class="jetp-b6x308" href="{{$sn_twitter}}"
                    target="_blank"
                    style="background: linear-gradient(315deg, rgb(34, 34, 34), rgba(0, 0, 0, 0.5));"><svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                        class="icon" style="width: 48px; height: 48px;">
                        <path
                            d="M 2.3671875 3 L 9.4628906 13.140625 L 2.7402344 21 L 5.3808594 21 L 10.644531 14.830078 L 14.960938 21 L 21.871094 21 L 14.449219 10.375 L 20.740234 3 L 18.140625 3 L 13.271484 8.6875 L 9.2988281 3 L 2.3671875 3 z M 6.2070312 5 L 8.2558594 5 L 18.033203 19 L 16.001953 19 L 6.2070312 5 z">
                        </path>
                    </svg></a>
                    @endif

                    @if($sn_facebook != '')
                    <a class="jetp-b6x308" href="{{$sn_facebook}}"
                    target="_blank"
                    style="background: linear-gradient(315deg, rgb(48, 73, 125), rgba(48, 73, 125, 0.7)); padding: 0px;"><svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        fill="currentColor" width="32" height="32" viewBox="0 0 32 32"
                        class="icon" style="width: 48px; height: 48px;">
                        <path
                            d="M13.69 24.903h3.679v-8.904h2.454l.325-3.068h-2.779l.004-1.536c0-.8.076-1.229 1.224-1.229h1.534V7.097h-2.455c-2.949 0-3.986 1.489-3.986 3.992v1.842h-1.838V16h1.838v8.903z">
                        </path>
                    </svg></a>
                    @endif

                    @if($sn_pinterest != '')
                    <a class="jetp-b6x308" href="{{$sn_pinterest}}"
                    target="_blank"
                    style="background: linear-gradient(315deg, rgb(200, 35, 44), rgba(200, 35, 44, 0.7)); padding: 0px;"><svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        fill="currentColor" width="32" height="32" viewBox="0 0 32 32"
                        class="icon" style="width: 48px; height: 48px;">
                        <path
                            d="M24.007 12.481c0 4.658-2.59 8.139-6.407 8.139-1.283 0-2.488-.693-2.901-1.481 0 0-.69 2.736-.835 3.264-.514 1.866-2.027 3.733-2.144 3.886-.082.106-.263.073-.282-.068-.033-.238-.418-2.592.036-4.513l1.527-6.471s-.379-.758-.379-1.879c0-1.76 1.02-3.074 2.29-3.074 1.08 0 1.601.81 1.601 1.782 0 1.086-.691 2.71-1.048 4.214-.298 1.26.632 2.288 1.874 2.288 2.25 0 3.765-2.89 3.765-6.314 0-2.602-1.752-4.551-4.941-4.551-3.601 0-5.846 2.686-5.846 5.687 0 1.035.306 1.765.784 2.329.219.26.25.364.17.662-.058.219-.187.744-.243.953-.079.301-.323.408-.594.297-1.659-.677-2.432-2.495-2.432-4.537 0-3.373 2.845-7.418 8.487-7.418 4.535.003 7.518 3.283 7.518 6.805z">
                        </path>
                    </svg></a>
                    @endif


            </div>
        </section>
    </div>
    <div class="overlay"></div>
</div>
</div>