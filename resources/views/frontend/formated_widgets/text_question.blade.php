<div id="div_widget_text_question{{$recid_widget_text_question}}"  onclick="edit_widget_text_question({{$recid_widget_text_question}})">
<div class="widget p-20-10" item="jetp-nz0tlo">
    <div>
        <section class="jetp-ngl4yv"> 
            <div class="jetp-feffm jetp-lxpam jetp-zs0p7"><svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                    width="24" height="24" viewBox="0 0 24 24" class="icon"
                    style="width: 14px; height: 14px; vertical-align: middle; margin: 0px 3px;">
                    <path
                        d="M21 13H14.4L19.1 17.7L17.7 19.1L13 14.4V21H11V14.3L6.3 19L4.9 17.6L9.4 13H3V11H9.6L4.9 6.3L6.3 4.9L11 9.6V3H13V9.4L17.6 4.8L19 6.3L14.3 11H21V13Z">
                    </path>
                </svg><span>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">{{$text_question_title}}</font>
                    </font>
                </span></div>

                @if($text_question_type == 'name')
                    <input type="text" id="text_question_answer" name="text_question_answer" maxlength="60" class="jetp-k9u3p" >
                @elseif($text_question_type == 'number')
                    <input type="number"  id="text_question_answer" name="text_question_answer"  maxlength="60" class="jetp-k9u3p">
                @elseif($text_question_type == 'phone')
                    <input type="tel"  id="text_question_answer" name="text_question_answer"  maxlength="60" class="jetp-k9u3p">
                @elseif($text_question_type == 'email')
                    <input type="email"  id="text_question_answer" name="text_question_answer"  maxlength="60" class="jetp-k9u3p">
                @elseif($text_question_type == 'single_line')
                    <input type="text"  id="text_question_answer" name="text_question_answer"  maxlength="60" class="jetp-k9u3p">
                @elseif($text_question_type == 'multi_line')
                    <textarea  id="text_question_answer" name="text_question_answer"  class="jetp-k9u3p"></textarea>               
                @endif

            <div class="jetp-feffm jetp-qdqrai"
                style="margin: -5px 0px 5px; opacity: 0.7; text-align: unset; display: none;">
            </div>
            <div class="jetp-tsi1" style="display: none;"></div>
        </section>
    </div>
    <div class="overlay"></div>
</div>
</div>