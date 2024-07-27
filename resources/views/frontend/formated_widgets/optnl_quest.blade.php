<div id="div_widgets_optional_question{{$recid_widget_optional_question}}"  onclick="edit_widget_optional_question({{$recid_widget_optional_question}})">
<div class="widget p-20-10" item="jetp-eohspt" draggable="false">
    <div>
        <section class="jetp-ngl4yv">
            <div class="jetp-feffm jetp-lxpam jetp-zs0p7">
                @if($optnl_quest_mandatory != '')
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon" style="width: 14px; height: 14px; vertical-align: middle; margin: 0px 3px;">
                    <path d="M21 13H14.4L19.1 17.7L17.7 19.1L13 14.4V21H11V14.3L6.3 19L4.9 17.6L9.4 13H3V11H9.6L4.9 6.3L6.3 4.9L11 9.6V3H13V9.4L17.6 4.8L19 6.3L14.3 11H21V13Z">
                    </path>
                </svg>
                @endif

                <span>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">{{$optnl_quest_title}}</font>
                    </font>
                </span></div>

                @php
                if($optnl_quest_options){
                    $aroptnl_quest_options = explode(',',$optnl_quest_options);
                }else{
                     $aroptnl_quest_options = [];
                }

                @endphp
                

                @if($optnl_quest_type=='checkbox')
                @foreach($aroptnl_quest_options as $optnl_quest_option)
                <div class="jetp-k9u3p" style="cursor: pointer;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon jetp-kxy58n active" style="display: none;">
                    <path d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3Z">
                    </path>
                </svg><input type="checkbox" value="{{$optnl_quest_option}}">
                <span style="flex: 1 1 0%; margin: 0px 5px;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">{{$optnl_quest_option}}</font>
                    </font>
                </span></div>
                @endforeach
                @endif

                @if($optnl_quest_type=='radio')
                @foreach($aroptnl_quest_options as $optnl_quest_option)
                <div class="jetp-k9u3p" style="cursor: pointer;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon jetp-kxy58n active" style="display: none;">
                        <path d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3Z">
                        </path>
                    </svg><input type="radio" value="{{$optnl_quest_option}}">
                    <span style="flex: 1 1 0%; margin: 0px 5px;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">{{$optnl_quest_option}}</font>
                        </font>
                    </span>
                </div>
                @endforeach
                @endif

                @if($optnl_quest_type=='dropdown')
                <div class="jetp-cover-input m-20-10 mt-20">
                    
                    <select id="optnl_quest_type" name="optnl_quest_type">
                        @foreach($aroptnl_quest_options as $optnl_quest_option)
                        <option value="{{$optnl_quest_option}}"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{$optnl_quest_option}}</font>
                            </font>
                        </span></option>
                       @endforeach
                    </select>
                </div>
                @endif

            <div class="jetp-tsi1" style="display: none;"></div>
        </section>
    </div>
    <div class="overlay"></div>
</div>
</div>