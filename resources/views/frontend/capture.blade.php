@extends('layouts.headless')
@section('content')

<style>
.jetp-mycard .item{
  border: none;
}
.jetp-mycard .item .card{
  height: 230px;
}
  </style>

<div class="jetp-placeholder">
    <div id="div_cards" class="jetp-explore-cards">
       
        <div class="jetp-mycard">




            
            <div class="item is-desktop" style="border:none;">
                <div class="picture">

                    @if ($mycard->background_image)
                    <div class="background lazy entered loaded" data-bg="{{ $mycard->background_image }}"
                        data-bg-hidpi="{{ $mycard->background_image }}"
                        style="background-color: rgb(163, 108, 66); background-image: url(&quot;{{ $mycard->background_image }}&quot;);"
                        data-ll-status="loaded"></div>
                    @else
                    <div class="background lazy entered loaded"
                        data-bg="/data/assets/background_thumbnails/61624_tn_1x.webp"
                        data-bg-hidpi="/data/assets/background_thumbnails/61624_tn_2x.webp"
                        style="background-color: rgb(163, 108, 66); background-image: url(&quot;/data/assets/background_thumbnails/61624_tn_1x.webp&quot;);"
                        data-ll-status="loaded"></div>
                    @endif

                    @if ($mycard->back_image)
                    <img class="envelope lazy entered loaded" src="{{ $mycard->flap_image }}"
                        style="width:150px; height:120px; transform: scaleY(-1); margin-bottom:98px;">
                    <img class="envelope lazy entered loaded" src="{{ $mycard->envelop_inside_image }}"
                        style="width:150px; height:200px; margin-bottom:20px;">

                    <img class="envelope lazy entered loaded" data-src="{{ $mycard->back_image }}"
                        data-srcset="{{ $mycard->back_image }}" data-ll-status="loaded"
                        srcset="{{ $mycard->back_image }}" src="{{ $mycard->back_image }}"
                        style="width:150px; height:100px">

                    <img class="envelope lazy entered loaded"
                        src="{{ url('website/assets/images/flap-shadow.png') }}"
                        style="width:150px; height:200px; margin-bottom:98px;">
                    @else
                    <img class="envelope lazy entered loaded" width="200" height="269"
                        data-src="{{ url('website/assets/images/1002.webp') }}"
                        data-srcset="{{ url('website/assets/images/1002.webp') }}" data-ll-status="loaded"
                        srcset="{{ url('website/assets/images/1002.webp') }}"
                        src="{{ url('website/assets/images/1002.webp') }}">
                    @endif

                    @if ($mycard->card_image)
                    <div class="inner">
                        <img class="card lazy front entered loaded" width="200" height="284" style="height:230px;"
                            data-src="{{ url('storage/' . str_replace('public/', '', $mycard->card_image)) }}"
                            data-ll-status="loaded"
                            src="{{ url('storage/' . str_replace('public/', '', $mycard->card_image)) }}">
                    </div>
                    @else
                    <div class="inner">
                        <img class="card lazy front entered loaded" width="200" height="284"
                            data-src="/userdata/thumb/B2405/29/n7eqfec7mfckfge.jpg" data-ll-status="loaded"
                            src="{{ url('website/assets/images/n7eqfec7mfckfge.jpg') }}">
                        <!-- <img class="card lazy back" width="200" height="284" data-src="" style="display: none;"> -->
                    </div>
                    @endif
                    <div></div>
                </div>
                <div class="info">
                    <div class="row mt-10 mb-10">
                        


                       







                    </div>
                    
                </div>
            </div>
            





        </div>
    </div>
</div>


  @endsection