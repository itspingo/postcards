
<div class="jetp-toast-container"></div>
    <div  id="div_add_text" class="jetp-dialog-overlay show" style="display: none;">
        <div class="jetp-dialog small">
            <div class="jetp-header">
                <div class="jetp-back" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                        height="24" viewBox="0 0 24 24" class="icon localize">
                        <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                    </svg></div>
                <div class="jetp-title no-wrap pr-20"><span wudooh="true"
                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Add text</font>
                        </font>
                    </span></div>
                <div style="display: none;"></div>
                <div class="jetp-close"><svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_add_text')"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                        height="24" viewBox="0 0 24 24" class="icon">
                        <path
                            d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                        </path>
                    </svg></div>
            </div>
            <div class="jetp-content nice-scrollbar">
                <div class="jetp-text-dialog">
                    <textarea placeholder="Enter your text"  id="card_text"
                        style="text-align: right; font-family: Butcherman;"></textarea>
                    <div class="jetp-buttons">
                        
                        
                            <button onclick="showhide('div_text_font',[])"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                                height="24" viewBox="0 0 24 24" class="icon">
                                <path
                                    d="M17,8H20V20H21V21H17V20H18V17H14L12.5,20H14V21H10V20H11L17,8M18,9L14.5,16H18V9M5,3H10C11.11,3 12,3.89 12,5V16H9V11H6V16H3V5C3,3.89 3.89,3 5,3M6,5V9H9V5H6Z">
                                </path>
                            </svg><span><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Font selection</font>
                                    </font>
                                </span></span></button>
                                
                                
                                <span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            
                                            <input type="color" id="font_color" name="font_color" /> 
                                            <label>Color</label>
                                        </font>
                                    </font>
                                </span>
                                



                                <button class="alignment-button" onclick="toggleTextAlignment()">

                                    <svg xmlns="http://www.w3.org/2000/svg" id="icon_center_align"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                                        height="24" viewBox="0 0 24 24" class="icon alignment_icon" style="display: none;">
                                        <path d="M3,3H21V5H3V3M7,7H17V9H7V7M3,11H21V13H3V11M7,15H17V17H7V15M3,19H21V21H3V19Z">
                                        </path>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="icon_right_align"
                                        version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                                        class="icon alignment_icon" style="display: block;">
                                        <path d="M3,3H21V5H3V3M9,7H21V9H9V7M3,11H21V13H3V11M9,15H21V17H9V15M3,19H21V21H3V19Z">
                                        </path>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="icon_left_align"
                                        version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                                        class="icon alignment_icon" style="display: none;">
                                        <path d="M3,3H21V5H3V3M3,7H15V9H3V7M3,11H21V13H3V11M3,15H15V17H3V15M3,19H21V21H3V19Z">
                                        </path>
                                    </svg>

                                    <span><span wudooh="true"
                                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">arrangement</font>
                                            </font>
                                </span></span>
                            </button>
                                
                            
                            </div>
                </div>
            </div> 

            <input type="hidden" id="card_text_font" name="card_text_font" value="Butcherman" />
            <input type="hidden" id="card_text_color" name="card_text_color" value="#000000" />
            <input type="hidden" id="card_text_alignment" name="card_text_alignment" value="right" />
            
            
            <div class="jetp-footer p-20-10" style="display: flex;" ><button class="success" onclick="add_text()"><span wudooh="true"
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


<!-- --------------------  font selection  ----------------------------- -->


    <link id="font_108" href="./text_font2_files/css2(3)" rel="stylesheet">
    <div  id="div_text_font"  class="jetp-dialog-overlay show" style="display: none;">
        <div class="jetp-dialog small">
            <div class="jetp-header">
                <div class="jetp-back" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                        height="24" viewBox="0 0 24 24" class="icon localize">
                        <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                    </svg></div>
                <div class="jetp-title no-wrap pr-20"><span wudooh="true"
                        style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Font selection</font>
                        </font>
                    </span></div>
                <div style="display: none;"></div>
                <div class="jetp-close"><svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_text_font')"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24"
                        height="24" viewBox="0 0 24 24" class="icon">
                        <path
                            d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                        </path>
                    </svg></div>
            </div>
            <div class="jetp-content nice-scrollbar">
                <div class="jetp-font-dialog">
                   

                    <div class="fonts nice-scrollbar p-20-10" >
                        <div class="item font" onclick="selectFont('Mea Culpa')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/64.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/64.webp')}}"></div>                                
                        <div class="item font" onclick="selectFont('Edu NSW ACT')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/65.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/65.webp')}}"></div>
                        <div class="item font" onclick="selectFont('WindSong')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/66.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/66.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Lobster')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/67.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/67.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Mochiy Pop')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/68.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/68.webp')}}"></div>

                        <div class="item font" onclick="selectFont('Square Peg')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/69.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/69.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Amatic SC')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/70.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/70.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Righteous')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/71.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/71.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Great Vibes')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/72.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/72.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Tourney')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/73.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/73.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Special Elite')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/74.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/74.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Tangerine')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/76.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/76.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Handlee')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/77.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/77.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Bhu Tuka')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/78.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/78.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Rock Salt')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/79.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/79.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Rubik Moonrocks')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/80.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/80.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Bad Script')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/81.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/81.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Kalam')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/82.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/82.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Satisfy')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/83.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/83.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Julius Sans')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/84.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/84.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Lilita One')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/85.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/85.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Monoton')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/86.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/86.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Sigmar One')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/87.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/87.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Caveat Brush')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/88.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/88.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Economica')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/89.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/89.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Black Ops')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/90.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/90.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Sansita')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/92.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/92.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Shadows Into Light')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/93.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/93.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Hanalei Fill')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/94.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/94.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Risque')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/95.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/95.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Jim Nightshade')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/96.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/96.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Unlock')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/97.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/97.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Bigelow Rules')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/98.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/98.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Princess Sofia')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/99.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/99.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Barriecito')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/100.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/100.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Flavors')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/101.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/101.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Gluten')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/102.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/102.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Bonbon')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/103.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/103.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Sedgwick Ave')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/104.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/104.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Combo')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/105.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/105.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Rubik Beastly')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/106.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/106.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Snowburst')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/107.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/107.webp')}}"></div>
                       
                        <div class="item font" onclick="selectFont('Miltonian tattoo')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/109.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/109.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Caramel')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/110.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/110.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Ballet')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/111.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/111.webp')}}"></div>
                        <div class="item font" onclick="selectFont('oi')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/112.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/112.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Cedarville Cursive')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/113.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/113.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Hi Melody')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/114.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/114.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Pacifico')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/115.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/115.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Berkshire Swash')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/116.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/116.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Send Flowers')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/117.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/117.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Meddon')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/118.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/118.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Sigmar')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/119.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/119.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Dancing Script')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/120.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/120.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Indie Flower')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/121.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/121.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Russo One')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/122.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/122.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Sacramento')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/123.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/123.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Mitr')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/124.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/124.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Parisienne')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/125.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/125.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Calistoga')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/126.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/126.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Sriracha')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/127.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/127.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Style Script')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/128.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/128.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Allison')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/129.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/129.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Rouge Script')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/130.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/130.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Montez')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/131.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/131.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Sue Ellen Francisco')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/132.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/132.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Wendy One')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/133.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/133.webp')}}"></div>
                        <div class="item font" onclick="selectFont('Ephesis')"><img class="lazy entered loaded"
                                data-src="{{ url('website/assets/images/134.webp')}}" width="380" height="100"
                                data-ll-status="loaded" src="{{ url('website/assets/images/134.webp')}}"></div>
                       
                    </div>
                </div>
            </div>
            <div class="jetp-footer p-20-10" style="display: none;"></div>
            <div class="jetp-loading-wrapper" style="display: none;">
                <div class="spinner large"></div>
            </div>
        </div>
    </div>

<!-- -------------------- end: font selection  ----------------------------- -->


<script>
    let selectedFont = 'Butcherman';
    let selectedColor = '#000000';
    let alignmentState = 'right'; 

    document.getElementById('font_color').addEventListener('input', function() {
        selectedColor = this.value;
        updateTextareaStyles();
    });

    function selectFont(font) {
        // alert(font);
        selectedFont = font;
        updateTextareaStyles();
        hide_div('div_text_font');
    }

    function updateTextareaStyles() {
        const textarea = document.getElementById('card_text');
        textarea.style.fontFamily = selectedFont;
        textarea.style.color = selectedColor;       

        document.getElementById('card_text_font').value = selectedFont;
        document.getElementById('card_text_color').value = selectedColor;
        document.getElementById('card_text_alignment').value = alignmentState;

    }

    function applyColorToText() {
        selectedColor  = document.getElementById('font_color').value;
        updateTextareaStyles();
      
    }

    function toggleTextAlignment() {
			const textarea = document.getElementById('card_text');
			const alignmentButton = document.querySelector('.alignment-button');
			// const icons = ['icon_right_align','icon_center_align','icon_left_align']; //alignmentButton.querySelectorAll('svg');
            const icons = alignmentButton.querySelectorAll('svg');
           
            if (alignmentState === 'right') {
                alignmentState = 'center';
                textarea.style.textAlign = 'center';
                icons[0].style.display = 'none';
                icons[1].style.display = 'block';
                icons[2].style.display = 'none';
            } else if (alignmentState === 'center') {
                alignmentState = 'left';
                textarea.style.textAlign = 'left';
                icons[0].style.display = 'none';
                icons[1].style.display = 'none';
                icons[2].style.display = 'block';
            } else {
                alignmentState = 'right';
                textarea.style.textAlign = 'right';
                icons[0].style.display = 'block';
                icons[1].style.display = 'none';
                icons[2].style.display = 'none';
            }
            
            document.getElementById('card_text_alignment').value = alignmentState;
		}
		
 
</script>