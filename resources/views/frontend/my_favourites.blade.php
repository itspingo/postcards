@extends('layouts.user_area')
@section('content')

<div class="jetp-placeholder">
    <div id="div_cards" class="jetp-explore-cards">
        <header class="jetp-header fixed">
            <button class="fr icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                </svg>
            </button>
            <div class="title">
                <span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">my Favourite cards</font>
                    </font>
                </span>
            </div>
        </header>

        <div class="cards-container">
            @foreach ($favourites as $mycard)
            <div class="card-item">
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
                    <img class="envelope lazy entered loaded" src="{{ $mycard->flap_image }}" style="width:150px; height:120px; transform: scaleY(-1); margin-bottom:98px;">
                    <img class="envelope lazy entered loaded" src="{{ $mycard->envelop_inside_image }}" style="width:150px; height:200px; margin-bottom:20px;">
                    <img class="envelope lazy entered loaded" data-src="{{ $mycard->back_image }}" data-srcset="{{ $mycard->back_image }}" data-ll-status="loaded" srcset="{{ $mycard->back_image }}" src="{{ $mycard->back_image }}" style="width:150px; height:100px">
                    <img class="envelope lazy entered loaded" src="{{ url('website/assets/images/flap-shadow.png') }}" style="width:150px; height:200px; margin-bottom:98px;">
                    @else
                    <img class="envelope lazy entered loaded" width="200" height="269" data-src="{{ url('website/assets/images/1002.webp') }}" data-srcset="{{ url('website/assets/images/1002.webp') }}" data-ll-status="loaded" srcset="{{ url('website/assets/images/1002.webp') }}" src="{{ url('website/assets/images/1002.webp') }}">
                    @endif

                    @if ($mycard->card_image)
                    <div class="inner">
                        <img class="card lazy front entered loaded" width="200" height="284" data-src="{{ url('storage/' . str_replace('public/', '', $mycard->card_image)) }}" data-ll-status="loaded" src="{{ url('storage/' . str_replace('public/', '', $mycard->card_image)) }}">
                    </div>
                    @else
                    <div class="inner">
                        <img class="card lazy front entered loaded" width="200" height="284" data-src="/userdata/thumb/B2405/29/n7eqfec7mfckfge.jpg" data-ll-status="loaded" src="{{ url('website/assets/images/n7eqfec7mfckfge.jpg') }}">
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>



<style>
    .cards-container {
    display: flex;
    flex-wrap: wrap;
    gap: 10px; /* Space between cards */
}

.card-item {
    flex: 1 1 calc(25% - 10px); /* Each card will take up 25% of the container width minus the gap */
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 50px 5px; /* Add vertical margin to create space between rows and minimal horizontal margin */
    max-width: calc(25% - 10px); /* Ensure a maximum width to maintain 4 cards per line */
    box-sizing: border-box; /* Include padding and border in the element's total width and height */
}

.picture {
    position: relative;
    width: 100%;
    display: flex;
    justify-content: flex-start;
    align-items: center;
}

.envelope {
    position: absolute;
    width: 150px; 
    height: 200px; 
    left: 20px;
    z-index: 1;
}

.envelope:nth-child(1) {
    z-index: 1; /* Back part of the envelope */
    margin-bottom: 98px;
}

.envelope:nth-child(2) {
    z-index: 2; /* Inside part of the envelope */
    margin-top: 15px;
    margin-bottom: 20px;
}

.envelope:nth-child(3) {
    z-index: 3; /* Flap part of the envelope */
}

.envelope:nth-child(4) {
    z-index: 4; /* Flap shadow */
    margin-bottom: -98px;
}

.inner {
    position: relative;
    z-index: 5;
    width: 60%;
    margin-left: auto;
    display: flex;
    justify-content: flex-start;
}

.card {
    position: relative;
    z-index: 5;
    width: 100%;
    margin-left: 50px;
    height: auto;
    transform: translateX(-20%); /* Move the card image to cover half of the envelope */
}


</style>
  
    @endsection