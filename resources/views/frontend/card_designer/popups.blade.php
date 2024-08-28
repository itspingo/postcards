<div id="div_stickers" class="jetp-dialog-overlay show" style="display: none;"> <!-- stickers -->
    <div class="jetp-dialog small">
        <div class="jetp-header">
            <div class="jetp-back" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                </svg></div>
            <div class="jetp-title no-wrap pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">Stickers</div>
            <div style="display: none;"></div>
            <div class="jetp-close">
                <svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_stickers')" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg>
            </div>
        </div>
        <div class="jetp-content nice-scrollbar">
            <div class="jetp-sticker-dialog jetp-list-dialog">
                <div class="jetp-category">

                    @foreach($stickers as $sticker)
                    <div class="item" onclick="showmorestickers('{{$sticker->more_images}}')">
                        <img class="picture" src="{{url('storage/'.str_replace('public/','',$sticker->main_image))}}">
                        <div class="title no-wrap">
                            <span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">{{$sticker->title}}</span>
                        </div>
                    </div>
                    @endforeach


                </div>



            </div>
        </div>
        <div class="jetp-footer p-20-10" style="display: none;"></div>
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>


<div id="div_more_stickers" class="jetp-dialog-overlay show" style="display: none;margin-top:20px;margin-left:30px;"> <!-- more sticker images -->
    <div class="jetp-dialog small">
        <div class="jetp-header">
           
            <div class="jetp-title no-wrap pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">More Stickers</div>
            <!-- <div style="display: none;"></div> -->
            <div class="jetp-close">
                <svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_more_stickers')" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg>
            </div>
        </div>
        <div class="jetp-content nice-scrollbar">
            <div class="jetp-sticker-dialog jetp-list-dialog">


                <div class="jetp-item-list">
                    <div class="jetp-header">
                        <div class="jetp-title no-wrap pr-20">
                            <span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">Flowers</span>
                        </div>
                        <div class="jetp-back"><svg xmlns="http://www.w3.org/2000/svg" onclick="showhide('div_stickers',['div_more_stickers'])" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                                <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z">
                                </path>
                            </svg></div>
                    </div>
                    <div id="more_stickers" class="jetp-wrapper nice-scrollbar">

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




<div id="div_recipient_name" class="jetp-dialog-overlay show" style="display: none;"> <!-- add text -->
    <div class="jetp-dialog small">
        <div class="jetp-header">
            <div class="jetp-back" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                </svg></div>
            <div class="jetp-title no-wrap pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Recipient Name</font>
                    </font>
                </span></div>
            <div style="display: none;"></div>
            <div class="jetp-close"><svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_recipient_name')" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg></div>
        </div>
        <div class="jetp-content nice-scrollbar">
            <div class="jetp-text-dialog">
                <textarea placeholder="Enter your text" id="recipient_name" style="text-align: right; font-family: font_46;"></textarea>
               

            </div>
        </div>
        <div class="jetp-footer p-20-10" style="display: flex;">
            <button class="success" onclick="add_recipient_name()">
                <span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">confirmation</font>
                    </font>
                </span></button>
        </div>
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>

<div id="div_sender_name" class="jetp-dialog-overlay show" style="display: none;"> <!-- add text -->
    <div class="jetp-dialog small">
        <div class="jetp-header">
            <div class="jetp-back" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                </svg></div>
            <div class="jetp-title no-wrap pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Sender Name</font>
                    </font>
                </span></div>
            <div style="display: none;"></div>
            <div class="jetp-close"><svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_sender_name')" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg></div>
        </div>
        <div class="jetp-content nice-scrollbar">
            <div class="jetp-text-dialog">
                <textarea placeholder="Enter your text" id="sender_name" style="text-align: right; font-family: font_46;"></textarea>
              

            </div>
        </div>
        <div class="jetp-footer p-20-10" style="display: flex;">
            <button class="success" onclick="add_sender_name()">
                <span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">confirmation</font>
                    </font>
                </span></button>
        </div>
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>




<div id="div_upload_image" class="jetp-dialog-overlay show" style="display: none;">
    <div class="jetp-dialog auto-size small">
        <div class="jetp-header">
            <div class="jetp-back" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                </svg></div>
            <div class="jetp-title no-wrap pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Add image 45</font>
                    </font>
                </span></div>
            <div style="display: none;"></div>
            <div class="jetp-close"><svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_upload_image')" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg></div>
        </div>
        <div class="jetp-content nice-scrollbar align-items-center">
            <div class="jetp-picture-dialog">
                <!-- <div class="jetp-crop-container" style="display: none;"></div> -->
                <div class="jetp-file-picker">
                    <div class="jetp-file-picker-helper"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                            <path d="M19.35,10.04C18.67,6.59 15.64,4 12,4C9.11,4 6.6,5.64 5.35,8.04C2.34,8.36 0,10.91 0,14A6,6 0 0,0 6,20H19A5,5 0 0,0 24,15C24,12.36 21.95,10.22 19.35,10.04M19,18H6A4,4 0 0,1 2,14C2,11.95 3.53,10.24 5.56,10.03L6.63,9.92L7.13,8.97C8.08,7.14 9.94,6 12,6C14.62,6 16.88,7.86 17.39,10.43L17.69,11.93L19.22,12.04C20.78,12.14 22,13.45 22,15A3,3 0 0,1 19,18M8,13H10.55V16H13.45V13H16L12,9L8,13Z">
                            </path>
                        </svg><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        <input type="file" id="upload_image" accept="image/*">
                                    </font>
                                </font>
                            </span>

                        </span></div>
                </div>
            </div>
        </div>
        <div class="jetp-footer p-20-10" style="display: flex;">
            <button class="success" style="display: none;"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">confirmation</font>
                    </font>
                </span></button>
        </div>
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>



<div id="div_upload_bg_image" class="jetp-dialog-overlay show" style="display: none;"> <!-- upload backgound image -->
    <div class="jetp-dialog auto-size small">
        <div class="jetp-header">
            <div class="jetp-back" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                </svg></div>
            <div class="jetp-title no-wrap pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Add background image</font>
                    </font>
                </span></div>
            <div style="display: none;"></div>
            <div class="jetp-close"><svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_upload_bg_image')" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg></div>
        </div>
        <div class="jetp-content nice-scrollbar align-items-center">
            <div class="jetp-picture-dialog">
                <div class="jetp-crop-container" style="display: none;"></div>
                <div class="jetp-file-picker">
                    <div class="jetp-file-picker-helper"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                            <path d="M19.35,10.04C18.67,6.59 15.64,4 12,4C9.11,4 6.6,5.64 5.35,8.04C2.34,8.36 0,10.91 0,14A6,6 0 0,0 6,20H19A5,5 0 0,0 24,15C24,12.36 21.95,10.22 19.35,10.04M19,18H6A4,4 0 0,1 2,14C2,11.95 3.53,10.24 5.56,10.03L6.63,9.92L7.13,8.97C8.08,7.14 9.94,6 12,6C14.62,6 16.88,7.86 17.39,10.43L17.69,11.93L19.22,12.04C20.78,12.14 22,13.45 22,15A3,3 0 0,1 19,18M8,13H10.55V16H13.45V13H16L12,9L8,13Z">
                            </path>
                        </svg><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        <input type="file" id="upload_bg_image" accept="image/*">
                                    </font>
                                </font>
                            </span>

                        </span></div>
                </div>
            </div>
        </div>
        <div class="jetp-footer p-20-10" style="display: flex;"><button class="success" style="display: none;"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">confirmation</font>
                    </font>
                </span></button></div>
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>


<div id="div_crop_image" class="jetp-dialog-overlay show" style="display: none;">
    <div class="jetp-dialog auto-size small">
        <div class="jetp-header">
            <div class="jetp-back" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                </svg></div>
            <div class="jetp-title no-wrap pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Add image - crop</font>
                    </font>
                </span></div>
            <div style="display: none;"></div>
            <div class="jetp-close" onclick="hide_div('div_crop_image')"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg></div>
        </div>


        <div class="jetp-content nice-scrollbar align-items-center">
            <div class="jetp-picture-dialog">
                <div class="jetp-crop-container">
                    <!-- <img src="blob:https://post.ddev.site//b3ce3e13-ead5-41c8-a066-6f375455d8ae" class="cropper-hidden"> -->
                    <div class="cropper-container cropper-bg" touch-action="none" style="width: 1183px; height: 458px;">
                        <div class="cropper-wrap-box">
                            <div class="cropper-canvas" style="max-width: 100%; max-height: 100%;  display: flex; justify-content: center; align-items: center;">
                                <img id="image_to_crop" src="" alt="The image to crop" class="cropper-hide" style="display:block; transform: none;">
                            </div>
                        </div>
                        <div class="cropper-drag-box cropper-crop cropper-modal" data-cropper-action="crop"></div>

                    </div>
                </div>
               
            </div>
        </div>

        <div class="jetp-footer p-20-10" style="display: flex;"><button id="crop_button" class="success" style="display: block;"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">confirmation</font>
                    </font>
                </span></button></div>
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>



<div id="div_crop_image_context" class="jetp-dialog-overlay show" style="display: none;">
    <div class="jetp-dialog auto-size small">
        <div class="jetp-header">
            <div class="jetp-back" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                </svg></div>
            <div class="jetp-title no-wrap pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Add Context</font>
                    </font>
                </span></div>
            <div style="display: none;"></div>
            <div class="jetp-close" onclick="hide_div('div_crop_image_context')"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg></div>
        </div>


        <div class="jetp-content nice-scrollbar align-items-center">
            <div class="jetp-picture-dialog">
                <div class="jetp-crop-container">
                    <!-- <img src="blob:https://post.ddev.site//b3ce3e13-ead5-41c8-a066-6f375455d8ae" class="cropper-hidden"> -->
                    <div class="cropper-container cropper-bg" touch-action="none" style="width: 1183px; height: 458px;">
                        <div class="cropper-wrap-box">
                            <div class="cropper-canvas" style="max-width: 100%; max-height: 100%;  display: flex; justify-content: center; align-items: center;">
                                <img id="image_to_crop_context" src="" alt="The image to crop" class="cropper-hide" style="display:block; transform: none;">
                            </div>
                        </div>
                        <div class="cropper-drag-box cropper-crop cropper-modal" data-cropper-action="crop"></div>

                    </div>
                </div>
              
            </div>
        </div>

        <div class="jetp-footer p-20-10" style="display: flex;"><button id="crop_button_context" class="success" style="display: block;"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">confirmation</font>
                    </font>
                </span></button></div>
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>


<div id="div_backgrounds" class="jetp-dialog-overlay show" style="display: none;"> <!-- stickers -->
    <div class="jetp-dialog small">
        <div class="jetp-header">
            <div class="jetp-back" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                </svg></div>
            <div class="jetp-title no-wrap pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">Backgrounds</div>
            <div style="display: none;"></div>
            <div class="jetp-close">
                <svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_backgrounds')" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg>
            </div>
        </div>
        <div class="jetp-content nice-scrollbar">
            <div class="jetp-sticker-dialog jetp-list-dialog">
                <div class="jetp-category">

                    @foreach($backgrounds as $background)
                    <div class="item" onclick="showmorebackgrounds('{{$background->id}}','{{$background->more_images}}')">
                        <img class="picture" src="{{url('storage/'.str_replace('public/','',$background->main_image))}}">
                        <div class="title no-wrap">
                            <span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">{{$background->title}}</span>
                            @if($background->ticket_type_id != '')
                            <br>
                            <div class="plan">
                                <span class="ml-5"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <img src="storage/{{str_replace('public/','',getfieldval($background->ticket_type_id,'ticket_types','ticket_image'))}}" width="20px" height="15px" />
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Can be used with stamps</font>
                                    </font>
                                </span></span>
                            </div>
                            @endif
                        </div>
                    </div>
                    @endforeach


                </div>



            </div>
        </div>
        <div class="jetp-footer p-20-10" style="display: none;"></div>
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>

<div id="div_more_backgrounds" class="jetp-dialog-overlay show" style="display: none;"> <!-- more backgrounds images -->
    <div class="jetp-dialog small">
        <div class="jetp-header">

            <div class="jetp-title no-wrap pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">More Backgrounds</div>
            <!-- <div style="display: none;"></div> -->
            <div class="jetp-close">
                <svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_more_backgrounds')" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg>
            </div>
        </div>
        <div class="jetp-content nice-scrollbar">
            <div class="jetp-sticker-dialog jetp-list-dialog">


                <div class="jetp-item-list">
                    <div class="jetp-header">
                        <div class="jetp-title no-wrap pr-20">
                            <span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;"><span id="span_title_background"></span></span>
                        </div>
                        <div class="jetp-back"><svg xmlns="http://www.w3.org/2000/svg" onclick="showhide('div_backgrounds',['div_more_backgrounds'])" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                                <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z">
                                </path>
                            </svg></div>
                    </div>
                    <div id="more_backgrounds" class="jetp-wrapper nice-scrollbar">

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


<div id="div_inside_images" class="jetp-dialog-overlay show" style="display: none;"> <!-- stickers -->
    <div class="jetp-dialog small">
        <div class="jetp-header">
            <div class="jetp-back" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                </svg></div>
            <div class="jetp-title no-wrap pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">Inside Images</div>
            <div style="display: none;"></div>
            <div class="jetp-close">
                <svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_inside_images')" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg>
            </div>
        </div>
        <div class="jetp-content nice-scrollbar">
            <div class="jetp-sticker-dialog jetp-list-dialog">
                <div class="jetp-category">

                    @foreach($inside_images as $inside_image)
                    <div class="item" onclick="showmoreinsideimages('{{$inside_image->id}}','{{$inside_image->more_images}}')">
                        <img class="picture" src="{{url('storage/'.str_replace('public/','',$inside_image->main_image))}}">
                        <div class="title no-wrap">
                            <span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">{{$inside_image->title}}</span>
                            @if($inside_image->ticket_type_id != '')
                            <br>
                            <div class="plan">
                                <span class="ml-5"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <img src="storage/{{str_replace('public/','',getfieldval($inside_image->ticket_type_id,'ticket_types','ticket_image'))}}" width="20px" height="15px" />
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Can be used with stamps</font>
                                    </font>
                                </span></span>
                            </div>
                            @endif
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="jetp-footer p-20-10" style="display: none;"></div>
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>

<div id="div_more_inside_images" class="jetp-dialog-overlay show" style="display: none;"> <!-- more backgrounds images -->
    <div class="jetp-dialog small">
        <div class="jetp-header">

            <div class="jetp-title no-wrap pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">More Inside Images</div>
            <!-- <div style="display: none;"></div> -->
            <div class="jetp-close">
                <svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_more_inside_images')" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg>
            </div>
        </div>
        <div class="jetp-content nice-scrollbar">
            <div class="jetp-sticker-dialog jetp-list-dialog">


                <div class="jetp-item-list">
                    <div class="jetp-header">
                        <div class="jetp-title no-wrap pr-20">
                            <span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;"><span id="span_title_background"></span></span>
                        </div>

                        <div class="jetp-back"><svg xmlns="http://www.w3.org/2000/svg" onclick="showhide('div_inside_images',['div_more_inside_images'])" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                                <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z">
                                </path>
                            </svg></div>
                    </div>
                    <div id="more_inside_images" class="jetp-wrapper nice-scrollbar">

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






<div id="div_stamp_images" class="jetp-dialog-overlay show" style="display: none;"> <!-- stickers -->
    <div class="jetp-dialog small">
        <div class="jetp-header">
            <div class="jetp-back" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                </svg></div>
            <div class="jetp-title no-wrap pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">stamp Images</div>
            <div style="display: none;"></div>
            <div class="jetp-close">
                <svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_stamp_images')" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg>
            </div>
        </div>
        <div class="jetp-content nice-scrollbar">
            <div class="jetp-sticker-dialog jetp-list-dialog">
                <div class="jetp-category">

                    @foreach($stamp_images as $stamp_image)
                    <div class="item" onclick="showmorestampimages('{{$stamp_image->id}}','{{$stamp_image->more_images}}')">
                        <img class="picture" src="{{url('storage/'.str_replace('public/','',$stamp_image->main_image))}}">
                        <div class="title no-wrap">
                            <span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">{{$stamp_image->title}}</span>
                            @if($stamp_image->ticket_type_id != '')
                            <br>
                            <div class="plan">
                                <span class="ml-5"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <img src="storage/{{str_replace('public/','',getfieldval($stamp_image->ticket_type_id,'ticket_types','ticket_image'))}}" width="20px" height="15px" />
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Can be used with stamps</font>
                                    </font>
                                </span></span>
                            </div>
                            @endif
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="jetp-footer p-20-10" style="display: none;"></div>
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>

<div id="div_more_stamp_images" class="jetp-dialog-overlay show" style="display: none;"> <!-- more backgrounds images -->
    <div class="jetp-dialog small">
        <div class="jetp-header">

            <div class="jetp-title no-wrap pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">More stamp Images</div>
            <!-- <div style="display: none;"></div> -->
            <div class="jetp-close">
                <svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_more_stamp_images')" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg>
            </div>
        </div>
        <div class="jetp-content nice-scrollbar">
            <div class="jetp-sticker-dialog jetp-list-dialog">


                <div class="jetp-item-list">
                    <div class="jetp-header">
                        <div class="jetp-title no-wrap pr-20">
                            <span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;"><span id="span_title_background"></span></span>
                        </div>
                        <div class="jetp-back"><svg xmlns="http://www.w3.org/2000/svg" onclick="showhide('div_stamp_images',['div_more_stamp_images'])" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                                <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z">
                                </path>
                            </svg></div>
                    </div>
                    <div id="more_stamp_images" class="jetp-wrapper nice-scrollbar">

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





<div id="div_stamp_designs" class="jetp-dialog-overlay show" style="display: none;"> <!-- stamps designs -->
    <div class="jetp-dialog small">
        <div class="jetp-header">
            <div class="jetp-back" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                </svg></div>
            <div class="jetp-title no-wrap pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">stamp Images</div>
            <div style="display: none;"></div>
            <div class="jetp-close">
                <svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_stamp_designs')" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg>
            </div>
        </div>
        <div class="jetp-content nice-scrollbar">
            <div class="jetp-sticker-dialog jetp-list-dialog">
                <div class="jetp-category">

                    @foreach($stamp_designs as $stamp_design)
                    <div class="item" onclick="showmorestampdesigns('{{$stamp_design->id}}','{{$stamp_design->more_images}}')">
                        <img class="picture" src="{{url('storage/'.str_replace('public/','',$stamp_design->main_image))}}">
                        <div class="title no-wrap">
                            <span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">{{$stamp_design->title}}</span>
                            @if($stamp_design->ticket_type_id != '')
                            <br>
                            <div class="plan">
                                <span class="ml-5"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <img src="storage/{{str_replace('public/','',getfieldval($stamp_design->ticket_type_id,'ticket_types','ticket_image'))}}" width="20px" height="15px" />
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Can be used with stamps</font>
                                    </font>
                                </span></span>
                            </div>
                            @endif
                        </div>


                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="jetp-footer p-20-10" style="display: none;"></div>
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>

<div id="div_more_stamp_designs" class="jetp-dialog-overlay show" style="display: none;">
    <div class="jetp-dialog small">
        <div class="jetp-header">

            <div class="jetp-title no-wrap pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">More stamp Images</div>
            <!-- <div style="display: none;"></div> -->
            <div class="jetp-close">
                <svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_more_stamp_designs')" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg>
            </div>
        </div>
        <div class="jetp-content nice-scrollbar">
            <div class="jetp-sticker-dialog jetp-list-dialog">


                <div class="jetp-item-list">
                    <div class="jetp-header">
                        <div class="jetp-title no-wrap pr-20">
                            <span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;"><span id="span_title_background"></span></span>
                        </div>
                        <div class="jetp-back"><svg xmlns="http://www.w3.org/2000/svg" onclick="showhide('div_stamp_designs',['div_more_stamp_designs'])" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                                <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z">
                                </path>
                            </svg></div>
                    </div>
                    <div id="more_stamp_designs" class="jetp-wrapper nice-scrollbar">

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





<div id="div_seal_designs" class="jetp-dialog-overlay show" style="display: none;"> <!-- seals designs -->
    <div class="jetp-dialog small">
        <div class="jetp-header">
            <div class="jetp-back" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                </svg></div>
            <div class="jetp-title no-wrap pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">seal Images</div>
            <div style="display: none;"></div>
            <div class="jetp-close">
                <svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_seal_designs')" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg>
            </div>
        </div>
        <div class="jetp-content nice-scrollbar">
            <div class="jetp-sticker-dialog jetp-list-dialog">
                <div class="jetp-category">

                    @foreach($seal_designs as $seal_design)
                    <div class="item" onclick="showmoresealdesigns('{{$seal_design->id}}','{{$seal_design->more_images}}')">
                        <img class="picture" src="{{url('storage/'.str_replace('public/','',$seal_design->main_image))}}">
                        <div class="title no-wrap">
                            <span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">{{$seal_design->title}}</span>
                            @if($seal_design->ticket_type_id != '')
                            <br>
                            <div class="plan">
                                <span class="ml-5"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <img src="storage/{{str_replace('public/','',getfieldval($seal_design->ticket_type_id,'ticket_types','ticket_image'))}}" width="20px" height="15px" />
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Can be used with stamps</font>
                                    </font>
                                </span></span>
                            </div>
                            @endif
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="jetp-footer p-20-10" style="display: none;"></div>
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>

<div id="div_more_seal_designs" class="jetp-dialog-overlay show" style="display: none;">
    <div class="jetp-dialog small">
        <div class="jetp-header">

            <div class="jetp-title no-wrap pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">More seal Images</div>
            <!-- <div style="display: none;"></div> -->
            <div class="jetp-close">
                <svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_more_seal_designs')" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg>
            </div>
        </div>
        <div class="jetp-content nice-scrollbar">
            <div class="jetp-sticker-dialog jetp-list-dialog">


                <div class="jetp-item-list">
                    <div class="jetp-header">
                        <div class="jetp-title no-wrap pr-20">
                            <span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;"><span id="span_title_background"></span></span>
                        </div>
                        <div class="jetp-back"><svg xmlns="http://www.w3.org/2000/svg" onclick="showhide('div_seal_designs',['div_more_seal_designs'])" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                                <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z">
                                </path>
                            </svg></div>
                    </div>
                    <div id="more_seal_designs" class="jetp-wrapper nice-scrollbar">

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





<div id="div_envelop_designs" class="jetp-dialog-overlay show" style="display: none;"> <!-- envelops designs -->
    <div class="jetp-dialog small">
        <div class="jetp-header">
            <div class="jetp-back" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                </svg></div>
            <div class="jetp-title no-wrap pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">envelop Images</div>
            <div style="display: none;"></div>
            <div class="jetp-close">
                <svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_envelop_designs')" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg>
            </div>
        </div>
        <div class="jetp-content nice-scrollbar">
            <div class="jetp-sticker-dialog jetp-list-dialog">
                <div class="jetp-category">

                    @foreach($envelop_designs as $envelop_design)
                    <div class="item" onclick="showmoreenvelopdesigns('{{$envelop_design->id}}','{{$envelop_design->design_parts}}')">
                        <img class="picture" src="{{url('storage/'.str_replace('public/','',$envelop_design->main_image))}}">
                        <div class="title no-wrap">
                            <span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">{{$envelop_design->title}}</span>
                            @if($envelop_design->ticket_type_id != '')
                            <br>
                            <div class="plan">
                                <span class="ml-5"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <img src="storage/{{str_replace('public/','',getfieldval($envelop_design->ticket_type_id,'ticket_types','ticket_image'))}}" width="20px" height="15px" />
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Can be used with stamps</font>
                                    </font>
                                </span></span>
                            </div>
                            @endif
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="jetp-footer p-20-10" style="display: none;"></div>
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>

<div id="div_more_envelop_designs" class="jetp-dialog-overlay show" style="display: none;">
    <div class="jetp-dialog small">
        <div class="jetp-header">

            <div class="jetp-title no-wrap pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">More envelop Images</div>
            <!-- <div style="display: none;"></div> -->
            <div class="jetp-close">
                <svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_more_envelop_designs')" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg>
            </div>
        </div>
        <div class="jetp-content nice-scrollbar">
            <div class="jetp-sticker-dialog jetp-list-dialog">


                <div class="jetp-item-list">
                    <div class="jetp-header">
                        <div class="jetp-title no-wrap pr-20">
                            <span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;"><span id="span_title_background"></span></span>
                        </div>
                        <div class="jetp-back"><svg xmlns="http://www.w3.org/2000/svg" onclick="showhide('div_envelop_designs',['div_more_envelop_designs'])" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                                <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z">
                                </path>
                            </svg></div>
                    </div>
                    <div id="more_envelop_designs" class="jetp-wrapper nice-scrollbar">

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





<div id="div_cardmusic" class="jetp-dialog-overlay show" style="display: none;">
    <div class="jetp-dialog small">
        <div class="jetp-header">
            <div class="jetp-back" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                </svg></div>
            <div class="jetp-title no-wrap pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">Music Categories</div>
            <div style="display: none;"></div>
            <div class="jetp-close">
                <svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_cardmusic')" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg>
            </div>
        </div>

        <div class="jetp-content nice-scrollbar">
            <div class="jetp-sticker-dialog jetp-list-dialog">
                <div class="jetp-category">

                    @foreach($cardmusic as $card_music)
                    <div class="item" onclick="showmorecardmusic('{{$card_music->id}}','{{$card_music->music_files}}')">
                        <!-- <img class="picture" src="{{url('storage/'.str_replace('public/','',$card_music->main_image))}}"> -->
                        <div class="title no-wrap">
                            <span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">{{$card_music->music_category}}</span>
                            @if($card_music->ticket_type_id != '')
                            <br>
                            <div class="plan">
                                <span class="ml-5"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <img src="storage/{{str_replace('public/','',getfieldval($card_music->ticket_type_id,'ticket_types','ticket_image'))}}" width="20px" height="15px" />
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Can be used with stamps</font>
                                    </font>
                                </span></span>
                            </div>
                            @endif
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="jetp-footer p-20-10" style="display: none;"></div>
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>

<div id="div_more_cardmusic" class="jetp-dialog-overlay show" style="display: none;">
    <div class="jetp-dialog small">
        <div class="jetp-header">

            <div class="jetp-title no-wrap pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">Music files</div>
            <!-- <div style="display: none;"></div> -->
            <div class="jetp-close">
                <svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_more_cardmusic')" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg>
            </div>
        </div>
        <div class="jetp-content nice-scrollbar">
            <div class="jetp-sticker-dialog jetp-list-dialog">
                <div id="more_cardmusic" class="jetp-category">



                </div>
            </div>
        </div>


        <div class="jetp-footer p-20-10" style="display: none;"></div>
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>


<div id="div_card_features" class="jetp-dialog-overlay show" style="display: none;">
    <div class="jetp-dialog small">
        <div class="jetp-header">
            <div class="jetp-back" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                </svg></div>
            <div class="jetp-title no-wrap pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">Card Features</div>
            <div style="display: none;"></div>
            <div class="jetp-close">
                <svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_card_features')" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg>
            </div>
        </div>

        <div class="jetp-content nice-scrollbar">
            <div class="jetp-sticker-dialog jetp-list-dialog">
                <div class="jetp-category">

                   <div id="card_features_list"></div>

                </div>
            </div>
        </div>
        <div class="jetp-footer p-20-10" style="display: none;"></div>
        <div class="jetp-loading-wrapper" style="display: none;">
            <div class="spinner large"></div>
        </div>
    </div>
</div>


<div id="div_effects" class="jetp-dialog-overlay show" style="display: none;">
    <div class="jetp-dialog small">
        <div class="jetp-header">
            <div class="jetp-back" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                </svg></div>
            <div class="jetp-title no-wrap pr-20"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">Effects</div>
            <div style="display: none;"></div>
            <div class="jetp-close">
                <svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_effects')" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon">
                    <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                    </path>
                </svg>
            </div>
        </div>

        <button id="themeToggle" title="Switch Theme" class="theme" style="display: none;"></button>

        <div class="jetp-content nice-scrollbar">
            <div class="jetp-sticker-dialog jetp-list-dialog">
                <div class="jetp-category">





                    <div class="item" style="display: flex; justify-content: space-between; align-items: center; padding: 10px;">
                        <span style="margin-right: 20px;">Realistic</span> <!-- Adjust margin as needed -->
                        <div class="group" data-name="realistic" style="display: flex; align-items: center;">
                            <label class="run">
                                <i class="fa-solid fa-wand-magic-sparkles"></i>
                            </label>
                            <div class="editor" style="display:none;"></div>
                        </div>
                    </div>


                    <div class="item" style="display: flex; justify-content: space-between; align-items: center; padding: 10px;">
                        <span style="margin-right: 20px;">Cannon</span>
                        <div class="group" data-name="cannon" style="display: flex; align-items: center;">
                            <label class="run" style="margin: 0;">
                                <i class="fa-solid fa-wand-magic-sparkles"></i>
                            </label>
                            <div class="editor" style="display:none;"></div>
                        </div>
                    </div>

                    <div class="item" style="display: flex; justify-content: space-between; align-items: center; padding: 10px;">
                        <span style="margin-right: 20px;">Random</span>
                        <div class="group" data-name="random" style="display: flex; align-items: center;">
                            <label class="run" style="margin: 0;">
                                <i class="fa-solid fa-wand-magic-sparkles"></i>
                            </label>
                            <div class="editor" style="display:none;"></div>
                        </div>
                    </div>

                    <div class="item" style="display: flex; justify-content: space-between; align-items: center; padding: 10px;">
                        <span style="margin-right: 20px;">Stars</span>
                        <div class="group" data-name="stars" style="display: flex; align-items: center;">
                            <label class="run" style="margin: 0;">
                                <i class="fa-solid fa-wand-magic-sparkles"></i>
                            </label>
                            <div class="editor" style="display:none;"></div>
                        </div>
                    </div>

                    <div class="item" style="display: flex; justify-content: space-between; align-items: center; padding: 10px;">
                        <span style="margin-right: 20px;">Snow</span>
                        <div class="group" data-name="snow" style="display: flex; align-items: center;">
                            <label class="run" style="margin: 0;">
                                <i class="fa-solid fa-wand-magic-sparkles"></i>
                            </label>
                            <div class="editor" style="display:none;"></div>
                        </div>
                    </div>

                    <div class="item" style="display: flex; justify-content: space-between; align-items: center; padding: 10px;">
                        <span style="margin-right: 20px;">Continuous</span>
                        <div class="group" data-name="continuous" style="display: flex; align-items: center;">
                            <label class="run" style="margin: 0;">
                                <i class="fa-solid fa-wand-magic-sparkles"></i>
                            </label>
                            <div class="editor" style="display:none;"></div>
                        </div>
                    </div>

                    <div class="item" style="display: flex; justify-content: space-between; align-items: center; padding: 10px;">
                        <span style="margin-right: 20px;">Paths</span>
                        <div class="group" data-name="paths" style="display: flex; align-items: center;">
                            <label class="run" style="margin: 0;">
                                <i class="fa-solid fa-wand-magic-sparkles"></i>
                            </label>
                            <div class="editor" style="display:none;"></div>
                        </div>
                    </div>

                    <div class="item" style="display: flex; justify-content: space-between; align-items: center; padding: 10px;">
                        <span style="margin-right: 20px;">Emoji</span>
                        <div class="group" data-name="emoji" style="display: flex; align-items: center;">
                            <label class="run" style="margin: 0;">
                                <i class="fa-solid fa-wand-magic-sparkles"></i>
                            </label>
                            <div class="editor" style="display:none;"></div>
                        </div>
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

@include('frontend.card_designer.widgets')
