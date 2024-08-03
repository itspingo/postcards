@extends('layouts.user_area')
@section('content')


<div class="jetp-placeholder">
                    <div class="jetp-charge-plan-page">
                        <header class="jetp-header"><button class="fr icon"><svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                    width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                                    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z">
                                    </path>
                                </svg></button>
                            <div class="title"><span wudooh="true"
                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Stamp charge</font>
                                    </font>
                                </span></div>
                        </header>

                        <div id="payment_status" style="margin-left: 20px;">
                                <h2>
                                    {{$payment_status ?? ''}}
                                </h2>
                            </div>
                        <div class="products">
                            

                            <!-- <div class="product-cover">
                                <div class="product"
                                    style="background: linear-gradient(135deg, rgb(205, 127, 50), rgb(242, 175, 108), rgb(205, 127, 50));">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                                        class="icon stamp fl">
                                        <path
                                            d="M2,2V5.5C3.1,5.5 4,6.62 4,8C4,9.38 3.1,10.5 2,10.5V13.5C3.1,13.5 4,14.62 4,16C4,17.38 3.1,18.5 2,18.5V22H5.5C5.5,20.9 6.62,20 8,20C9.38,20 10.5,20.9 10.5,22H13.5C13.5,20.9 14.62,20 16,20C17.38,20 18.5,20.9 18.5,22H22V18.5C20.9,18.5 20,17.38 20,16V16C20,14.62 20.9,13.5 22,13.5V10.5C20.9,10.5 20,9.38 20,8V8C20,6.62 20.9,5.5 22,5.5V2H18.5C18.5,3.1 17.38,4 16,4C14.62,4 13.5,3.1 13.5,2H10.5C10.5,3.1 9.38,4 8,4C6.62,4 5.5,3.1 5.5,2H2M6,6H18V18H6V6M9,7A2,2 0 0,0 7,9A2,2 0 0,0 9,11A2,2 0 0,0 11,9A2,2 0 0,0 9,7M17,10L14,13L12,12L7,17H17V10Z">
                                        </path>
                                    </svg>
                                    <div class="title"><span wudooh="true"
                                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Bronze stamp</font>
                                            </font>
                                        </span></div>
                                    <div class="price"><span><span wudooh="true"
                                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">1,500 </font>
                                                </font>
                                            </span></span>
                                        <font style="vertical-align: inherit;"><span class="unit-price"><span
                                                    wudooh="true"
                                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                    <font style="vertical-align: inherit;">tomans</font>
                                                </span></span></font><span class="unit-price"> <span wudooh="true"
                                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                <font style="vertical-align: inherit;"></font>
                                            </span></span>
                                    </div>
                                    <div class="detail"><span wudooh="true"
                                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Economical with suitable
                                                    facilities</font>
                                            </font>
                                        </span></div>
                                    <div class="buy fl"><svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                            width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                                            <path
                                                d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z">
                                            </path>
                                        </svg></div>
                                </div>
                            </div> -->

                            @foreach($ticket_types as $vticket_type)
                            <div id="golden-ticket" class="product-cover" onclick="show_chargplan_popup('{{$vticket_type->ticket_type}}','{{$vticket_type->id}}')">
                            <div class="product"
                                                style="background-image: url('{{url('storage/'.str_replace('public/','',$vticket_type->ticket_image))}}'); 
                                                        background-size: cover; 
                                                        background-repeat: no-repeat; 
                                                        background-position: center;">
                                   
                                    <div class="title"><span wudooh="true"
                                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">{{$vticket_type->ticket_type}} stamp</font>
                                            </font>
                                        </span></div>
                                    <div class="price"><span><span wudooh="true"
                                                style="font-size:.5em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Each feature will cost {{$vticket_type->tokens}} tokens </font>
                                                </font>
                                            </span></span>

                                    </div>
                                    <div class="detail"><span wudooh="true"
                                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">{{$vticket_type->short_descr}}</font>
                                            </font>
                                        </span></div>
                                    <div class="buy fl"><svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                            width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                                            <path
                                                d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z">
                                            </path>
                                        </svg></div>
                                </div>
                            </div>
                            @endforeach
                            

                    <?php /* ?>
                            <div id="golden-ticket" class="product-cover" >
                                <div class="product"
                                    style="background: linear-gradient(135deg, rgb(255, 170, 0), rgb(255, 210, 144), rgb(255, 170, 0));">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                                        class="icon stamp fl">
                                        <path
                                            d="M2,2V5.5C3.1,5.5 4,6.62 4,8C4,9.38 3.1,10.5 2,10.5V13.5C3.1,13.5 4,14.62 4,16C4,17.38 3.1,18.5 2,18.5V22H5.5C5.5,20.9 6.62,20 8,20C9.38,20 10.5,20.9 10.5,22H13.5C13.5,20.9 14.62,20 16,20C17.38,20 18.5,20.9 18.5,22H22V18.5C20.9,18.5 20,17.38 20,16V16C20,14.62 20.9,13.5 22,13.5V10.5C20.9,10.5 20,9.38 20,8V8C20,6.62 20.9,5.5 22,5.5V2H18.5C18.5,3.1 17.38,4 16,4C14.62,4 13.5,3.1 13.5,2H10.5C10.5,3.1 9.38,4 8,4C6.62,4 5.5,3.1 5.5,2H2M6,6H18V18H6V6M9,7A2,2 0 0,0 7,9A2,2 0 0,0 9,11A2,2 0 0,0 11,9A2,2 0 0,0 9,7M17,10L14,13L12,12L7,17H17V10Z">
                                        </path>
                                    </svg>
                                    <div class="title"><span wudooh="true"
                                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Golden stamp</font>
                                            </font>
                                        </span></div>
                                    <div class="price"><span><span wudooh="true"
                                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">10$ for 5 Stamps </font>
                                                </font>
                                            </span></span>

                                        <!-- <font style="vertical-align: inherit;"><span class="unit-price"><span
                                                    wudooh="true"
                                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                    <font style="vertical-align: inherit;">tomans</font>
                                                </span></span></font>
                                                <span class="unit-price"> <span wudooh="true"
                                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                <font style="vertical-align: inherit;"></font>
                                            </span></span> -->
                                    </div>
                                    <div class="detail"><span wudooh="true"
                                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Use all plans and features</font>
                                            </font>
                                        </span></div>
                                    <div class="buy fl"><svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                            width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                                            <path
                                                d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z">
                                            </path>
                                        </svg></div>
                                </div>
                            </div>



                            <div id="silver-ticket" class="product-cover">
                                <div class="product"
                                    style="background: linear-gradient(135deg, rgb(148, 148, 148), rgb(216, 216, 216), rgb(148, 148, 148));">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                                        class="icon stamp fl">
                                        <path
                                            d="M2,2V5.5C3.1,5.5 4,6.62 4,8C4,9.38 3.1,10.5 2,10.5V13.5C3.1,13.5 4,14.62 4,16C4,17.38 3.1,18.5 2,18.5V22H5.5C5.5,20.9 6.62,20 8,20C9.38,20 10.5,20.9 10.5,22H13.5C13.5,20.9 14.62,20 16,20C17.38,20 18.5,20.9 18.5,22H22V18.5C20.9,18.5 20,17.38 20,16V16C20,14.62 20.9,13.5 22,13.5V10.5C20.9,10.5 20,9.38 20,8V8C20,6.62 20.9,5.5 22,5.5V2H18.5C18.5,3.1 17.38,4 16,4C14.62,4 13.5,3.1 13.5,2H10.5C10.5,3.1 9.38,4 8,4C6.62,4 5.5,3.1 5.5,2H2M6,6H18V18H6V6M9,7A2,2 0 0,0 7,9A2,2 0 0,0 9,11A2,2 0 0,0 11,9A2,2 0 0,0 9,7M17,10L14,13L12,12L7,17H17V10Z">
                                        </path>
                                    </svg>
                                    <div class="title"><span wudooh="true"
                                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Silver stamp</font>
                                            </font>
                                        </span></div>
                                    <div class="price"><span><span wudooh="true"
                                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">10$ for 10 Stamps  </font>
                                                </font>
                                            </span></span>
                                        <!-- <font style="vertical-align: inherit;"><span class="unit-price"><span
                                                    wudooh="true"
                                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                    <font style="vertical-align: inherit;">tomans</font>
                                                </span></span></font><span class="unit-price"> <span wudooh="true"
                                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                <font style="vertical-align: inherit;"></font>
                                            </span></span> -->
                                    </div>
                                    <div class="detail"><span wudooh="true"
                                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Access to more designs and
                                                    widgets</font>
                                            </font>
                                        </span></div>
                                    <div class="buy fl"><svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                            width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                                            <path
                                                d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z">
                                            </path>
                                        </svg></div>
                                </div>
                            </div>
                            <?php */ ?>
                            
                            <!-- <div class="product-cover">
                                <div class="product"
                                    style="background: linear-gradient(135deg, rgb(202, 9, 87), rgb(225, 106, 154), rgb(202, 9, 87));">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                                        class="icon stamp fl">
                                        <path
                                            d="M2,2V5.5C3.1,5.5 4,6.62 4,8C4,9.38 3.1,10.5 2,10.5V13.5C3.1,13.5 4,14.62 4,16C4,17.38 3.1,18.5 2,18.5V22H5.5C5.5,20.9 6.62,20 8,20C9.38,20 10.5,20.9 10.5,22H13.5C13.5,20.9 14.62,20 16,20C17.38,20 18.5,20.9 18.5,22H22V18.5C20.9,18.5 20,17.38 20,16V16C20,14.62 20.9,13.5 22,13.5V10.5C20.9,10.5 20,9.38 20,8V8C20,6.62 20.9,5.5 22,5.5V2H18.5C18.5,3.1 17.38,4 16,4C14.62,4 13.5,3.1 13.5,2H10.5C10.5,3.1 9.38,4 8,4C6.62,4 5.5,3.1 5.5,2H2M6,6H18V18H6V6M9,7A2,2 0 0,0 7,9A2,2 0 0,0 9,11A2,2 0 0,0 11,9A2,2 0 0,0 9,7M17,10L14,13L12,12L7,17H17V10Z">
                                        </path>
                                    </svg>
                                    <div class="title"><span wudooh="true"
                                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Custom design order</font>
                                            </font>
                                        </span></div>
                                    <div class="price"><span><span wudooh="true"
                                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">149,000 </font>
                                                </font>
                                            </span></span>
                                        <font style="vertical-align: inherit;"><span class="unit-price"><span
                                                    wudooh="true"
                                                    style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                    <font style="vertical-align: inherit;">tomans</font>
                                                </span></span></font><span class="unit-price"> <span wudooh="true"
                                                style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                                <font style="vertical-align: inherit;"></font>
                                            </span></span>
                                    </div>
                                    <div class="detail"><span wudooh="true"
                                            style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">We will design for you with the
                                                    highest quality</font>
                                            </font>
                                        </span></div>
                                    <div class="buy fl"><svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                            width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                                            <path
                                                d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z">
                                            </path>
                                        </svg></div>
                                </div>
                            </div> -->
                        </div>
                        
<!-- ------------------------  popup --------------------------- -->

<div id="div_chargplan_popup" class="jetp-dialog-overlay show" style="display: none;">
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
                        <font style="vertical-align: inherit;">Charge Plan</font>
                    </font>
                </span></div>
            <div style="display: none;"></div>
            <div class="jetp-close"><svg xmlns="http://www.w3.org/2000/svg" onclick="hide_div('div_chargplan_popup')" 
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
                    <div class="label">
                        <span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Amount</font>
                            </font>
                        </span></div>

                    <input type="number" name="charge_amount"  id="charge_amount" value="10" min="10" max="1000"  onchange="check_charge_amount(this)" />
                    <input type="hidden" name="charge_stamp" id="charge_stamp"  value="" />
                    <input type="hidden" name="charge_stamp_id" id="charge_stamp_id"  value="" />
                    

                    <h3>
                        Stamp: <span id="span_stamp_name"></span>
                    </h3>
                </div>
            </div>
        </div>

       

        <div class="jetp-footer p-20-10" style="display: flex;">
            <button class="success w-120px" id="btn_charge_plan"><span wudooh="true"
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


<!-- ----------------------  end popup --------------------------  -->



                    </div>
                </div>

<link href="./chargplan_files/style-v21.1.css" rel="stylesheet">

<style>
    #div_messages {
        padding: 15px;
    }

    /* .jetp-header {
        background-color: #f5f5f5;
        
        padding: 10px;
    } */

    .title {
        font-weight: bold;
        text-align: left;
    }

    .jetp-mycard {
        margin-top: 15px;
    }

    /* #div_messages_box {
        background-color: #fff;
        padding: 20px;
        border: 1px solid #ddd;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    } */
</style>

<style type="text/css" id="widgetStyleId">
        .jetp-12msbk {
            background: #FFFFFF;
        }

        .jetp-onkacn {
            margin-top: 25px;
            margin-bottom: 25px;
        }

        .jetp-3nemy {
            color: #000;
            text-align: center;
        }

        .jetp-p5lyhi {
            font-size: 13px;
        }

        .jetp-5q57mr {
            font-size: 15px;
        }

        .jetp-iezms4 {
            font-size: 17px;
        }

        .jetp-jugvum {
            font-size: 19px;
        }

        .jetp-omoz3c {
            font-size: 21px;
        }

        .jetp-nob5sk {
            font-size: 23px;
        }

        .jetp-r6axo9 {
            font-size: 25px;
        }

        .jetp-8x4k81 {
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

        .jetp-8x4k81:hover {
            opacity: 1;
            color: #fff;
        }

        .jetp-1a2rx {
            background: #E6E4E0;
            width: 100%;
            height: auto;
            display: block;
            margin-bottom: 10px;
        }

        .jetp-p5m5xq {
            border-radius: 100%;
            width: 60px;
            height: 60px;
            border: solid 1px #ddd;
            margin: 0 5px;
            transition: all 0.3s;
            background: #fff;
        }

        .jetp-p5m5xq:hover {
            background: #eee;
            transform: scale(1.1);
        }

        .jetp-koi7gi {
            width: 100%;
            height: auto;
            background: #f1f1f1;
            margin: auto;
            display: block;
        }

        .jetp-tbxfk {
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

        .jetp-tbxfk:hover {
            opacity: 1;
            color: #fff;
        }

        .jetp-yy6dfl {
            color: #444444;
        }

        .jetp-jhswze {
            margin-bottom: 10px;
        }

        .jetp-nzvxzr {
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

        .jetp-nzvxzr:hover {
            opacity: 1;
        }

        .jetp-nzvxzr.active {
            border-color: #2196F3;
        }

        .jetp-ej9a1l {
            color: #ddd;
        }

        .jetp-ej9a1l.active {
            color: #2196F3;
        }

        .jetp-abw4im {
            color: #fff;
            border: none;
            min-width: 150px;
            margin: 0 auto;
            border-radius: 25px;
            background: #4CAF50;
            width: 40%;
        }

        .jetp-n5yl1 {
            color: #E91E63;
            font-size: 13px;
            line-height: 1;
            font-weight: bold;
        }

        .jetp-n5yl1.active {
            animation: shakeX 1.2s;
        }

        .jetp-rrgjll {
            color: #000000;
        }

        .jetp-d1beu8 {
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

        .jetp-d1beu8:hover {
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
    <style id="font_14" type="text/css">
        @font-face {
            font-family: 'font_14';
            src: url('/resources/fonts/design/font_14.ttf') format('truetype');
            font-weight: normal;
        }
    </style>
    <style id="font_46" type="text/css">
        @font-face {
            font-family: 'font_46';
            src: url('/resources/fonts/design/font_46.ttf') format('truetype');
            font-weight: normal;
        }
    </style>



<script src="https://js.stripe.com/v3/"></script>
<script>
    function show_chargplan_popup(vstamp,stampid){
        document.getElementById('span_stamp_name').innerHTML=vstamp;
        document.getElementById('charge_stamp').value=vstamp;
        document.getElementById('charge_stamp_id').value=stampid;
        document.getElementById('div_chargplan_popup').style.display="flex";
    }

    function check_charge_amount(item){
        if(item.value < 10){
            item.value = 10;
        }
    }


</script>

<script>
  const stripe = Stripe("{{ env('STRIPE_PK') }}");

  document.getElementById('btn_charge_plan').addEventListener('click', async () => {
    const chargeAmount = document.getElementById('charge_amount').value;
    const stampType = document.getElementById('charge_stamp').value; //'golden'; // Or dynamically determine this if needed
    const stampId = document.getElementById('charge_stamp_id').value;
    // alert('chargeAmount: '+chargeAmount+' , stampType: '+stampType);
    const response = await fetch('/create-checkout-session', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      body: JSON.stringify({ stampType, chargeAmount, stampId })
    });

    const { id } = await response.json();

    const { error } = await stripe.redirectToCheckout({
      sessionId: id,
    });

    if (error) {
      console.error(error);
      // Handle error
    }
  });
</script>



@endsection