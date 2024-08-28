<div style="margin-left:40px;margin-right:40px;">
    
@if(count($features) > 0)
@foreach($features as $vfeature)
<div class="tran" style="display: flex; align-items: center; margin-bottom: 20px; border: 1px solid #ddd; padding: 10px; border-radius: 5px; background-color: #f9f9f9;">

    

    <div class="text" style="flex-grow: 1;">
        <div class="title" style="font-size: 1.1em; font-weight: bold; margin-bottom: 5px;">
            <span wudooh="true" style="font-family: 'Sahl Naskh', sans-serif;">
                @if($vfeature->feature == "Stamp Image")
                <a onclick="showhide('div_stamp_images',['div_card_features'])">{{$vfeature->feature}}</a>
                @elseif($vfeature->feature == "Stamp Design")
                <a onclick="showhide('div_stamp_designs',['div_card_features'])">{{$vfeature->feature}}</a>

                @elseif($vfeature->feature == "Envelop Design")
                <a onclick="showhide('div_envelop_designs',['div_card_features'])">{{$vfeature->feature}}</a>
                @elseif($vfeature->feature == "Seal Design")
                <a onclick="showhide('div_seal_designs',['div_card_features'])">{{$vfeature->feature}}</a>
                @elseif($vfeature->feature == "Background Image")
                <a onclick="showhide('div_backgrounds',['div_card_features'])">{{$vfeature->feature}}</a>
                @elseif($vfeature->feature == "Envelop Inside Image")
                <a onclick="showhide('div_inside_images',['div_card_features'])">{{$vfeature->feature}}</a>
                @elseif($vfeature->feature == "Music Selection")
                <a onclick="showhide('div_cardmusic',['div_card_features'])">{{$vfeature->feature}}</a>
                
                @endif
                

                'Envelop Design','Seal Design', 'Background Image','Envelop Inside Image', 'Music Selection'


            </span>
        </div>
       
    </div>

    <div class="plan-info" style="text-align: right;">
        <div class="count" style="color: rgb(76, 175, 80); font-weight: bold;">
            {{$vfeature->tokens}}
        </div>
        <div class="plan" style="font-size: 0.9em; color: #666;">
            <span wudooh="true" style="font-family: 'Sahl Naskh', sans-serif;">
                {{getfieldval($vfeature->stamp_type,'ticket_types','ticket_type')}}
            </span>
        </div>
    </div>

</div>
@endforeach
@else

<h4 style="text-align: center; margin-top: 30px;">You do not have any feature that requires any stamp / token to use</h4>
<br><br><br>

@endif

<div class="jetp-footer p-20-10" style="display: flex; justify-content: space-between; align-items: center; background-color: #f5f5f5; padding: 20px; border-radius: 5px;">
    <h3 style="margin: 0;">Your Balance: {{$tokensAvailable}}</h3><br><br>
    @if($tokensAvailable < 0)
    <div align="center">
        <a href="{{url('chargeplan')}}" class="success w-120px" id="btn_charge_plan" style="background-color: #4CAF50; color: white; text-decoration: none; padding: 10px 20px; border-radius: 5px;">
            <span wudooh="true" style="font-family: 'Sahl Naskh', sans-serif;">
                Buy Stamps
            </span>
        </a>
    </div>
    @else
    <div align="center">
        <button class="success w-120px" id="btn_charge_plan" style="background-color: #4CAF50; color: white; border: none; padding: 10px 20px; border-radius: 5px;">
            <span wudooh="true" style="font-family: 'Sahl Naskh', sans-serif;">
                Confirmation
            </span>
        </button>
    </div>
    @endif
    
</div>


</div>