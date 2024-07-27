<div id="div_widget_memorial{{$recid_widget_memorial}}"  onclick="edit_widget_memorial({{$recid_widget_memorial}})">
<div class="widget p-20-10" item="jetp-0ez0d">
    <div>
        <section class="jetp-ngl4yv">
            <div class="jetp-feffm jetp-lxpam jetp-zs0p7">
                @if($memorial_answer_mandatory != '')
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon" style="width: 14px; height: 14px; vertical-align: middle; margin: 0px 3px;">
                    <path d="M21 13H14.4L19.1 17.7L17.7 19.1L13 14.4V21H11V14.3L6.3 19L4.9 17.6L9.4 13H3V11H9.6L4.9 6.3L6.3 4.9L11 9.6V3H13V9.4L17.6 4.8L19 6.3L14.3 11H21V13Z">
                    </path>
                </svg>
                @endif
                <span>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">{{$memorial_title}}</font>
                    </font>
                </span></div>


            <div class="jetp-k9u3p" style="flex-direction: column; padding: 0px;">
                <textarea id="memorial_text" name="memorial_text" rows="5" maxlength="300" placeholder="Enter your message" class="jetp-k9u3p" style="resize: none; background: none; border: none; margin: 0px;">{{$memorial_text}}</textarea>
            </div>


            <div class="jetp-tsi1" style="display: none;"></div>
        </section>
    </div>
    <div class="overlay"></div>
</div>
</div>
