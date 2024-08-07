@extends('layouts.user_area')
@section('content')


<div class="jetp-placeholder">
    <div class="jetp-my-transactions">
        <header class="jetp-header fixed"><button class="fr icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon localize">
                    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z">
                    </path>
                </svg></button><button class="fl filled save ml-10" style="min-width: 72px;"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Stamp charge</font>
                    </font>
                </span></button>
            <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Transactions</font>
                    </font>
                </span></div>
        </header>
        <div class="jetp-tran">
            <div class="user-plans">

                @foreach($ticket_types as $vticket_type)
                <div class="plan">

                    <img src="{{url('storage/'.str_replace('public/','',$vticket_type->ticket_image))}}" width="80px" height="40px" />
                    <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{$vticket_type->ticket_type}}</font>
                            </font>
                        </span></div>
                    <div class="detail">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Balance of </font>
                        </font><b><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">1</font>
                                </font>
                            </span></b>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"> stamp</font>
                        </font>
                    </div>

                </div>
                @endforeach

            </div>


            @if(isset($transactions) && count($transactions) > 0)
            @foreach($transactions as $transaction)
            <div class="tran">

            
            <img src="{{url('storage/'.str_replace('public/','',getfieldval($transaction->stamp_type,'ticket_types','ticket_image')))}}" height="20px" width="40px" />

                <div class="text" style="margin-top:-30px;">
                    <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{$transaction->feature}}</font>
                            </font>
                        </span></div>
                    <div class="date"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{$transaction->created_at}}</font>
                            </font>
                        </span></div>
                </div>

                <div class="plan-info">
                    <div class="count" style="color: rgb(76, 175, 80);">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">{{$transaction->tokens}}</font>
                        </font>
                    </div>
                    <div class="plan"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{getfieldval($transaction->stamp_type,'ticket_types','ticket_type')}}</font>
                            </font>
                        </span></div>
                </div>

            </div>
            @endforeach
            @else

            <div class="tran">
                <h4 style="margin-left:40px;">
                    No transaction is found
                </h4>
            </div>
            @endif


        </div>
    </div>
</div>


</script>
@endsection