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

                <!-- <div class="plan"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon" style="color: rgb(192, 192, 192);">
                        <path d="M2,2V5.5C3.1,5.5 4,6.62 4,8C4,9.38 3.1,10.5 2,10.5V13.5C3.1,13.5 4,14.62 4,16C4,17.38 3.1,18.5 2,18.5V22H5.5C5.5,20.9 6.62,20 8,20C9.38,20 10.5,20.9 10.5,22H13.5C13.5,20.9 14.62,20 16,20C17.38,20 18.5,20.9 18.5,22H22V18.5C20.9,18.5 20,17.38 20,16V16C20,14.62 20.9,13.5 22,13.5V10.5C20.9,10.5 20,9.38 20,8V8C20,6.62 20.9,5.5 22,5.5V2H18.5C18.5,3.1 17.38,4 16,4C14.62,4 13.5,3.1 13.5,2H10.5C10.5,3.1 9.38,4 8,4C6.62,4 5.5,3.1 5.5,2H2M6,6H18V18H6V6M9,7A2,2 0 0,0 7,9A2,2 0 0,0 9,11A2,2 0 0,0 11,9A2,2 0 0,0 9,7M17,10L14,13L12,12L7,17H17V10Z">
                        </path>
                    </svg>
                    <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Silver stamp</font>
                            </font>
                        </span></div>
                    <div class="detail"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">There are 0 stamps in stock
                                </font>
                            </font>
                        </span></div>
                </div> -->

                <!-- <div class="plan"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor" width="24" height="24" viewBox="0 0 24 24" class="icon" style="color: rgb(255, 194, 0);">
                        <path d="M2,2V5.5C3.1,5.5 4,6.62 4,8C4,9.38 3.1,10.5 2,10.5V13.5C3.1,13.5 4,14.62 4,16C4,17.38 3.1,18.5 2,18.5V22H5.5C5.5,20.9 6.62,20 8,20C9.38,20 10.5,20.9 10.5,22H13.5C13.5,20.9 14.62,20 16,20C17.38,20 18.5,20.9 18.5,22H22V18.5C20.9,18.5 20,17.38 20,16V16C20,14.62 20.9,13.5 22,13.5V10.5C20.9,10.5 20,9.38 20,8V8C20,6.62 20.9,5.5 22,5.5V2H18.5C18.5,3.1 17.38,4 16,4C14.62,4 13.5,3.1 13.5,2H10.5C10.5,3.1 9.38,4 8,4C6.62,4 5.5,3.1 5.5,2H2M6,6H18V18H6V6M9,7A2,2 0 0,0 7,9A2,2 0 0,0 9,11A2,2 0 0,0 11,9A2,2 0 0,0 9,7M17,10L14,13L12,12L7,17H17V10Z">
                        </path>
                    </svg>
                    <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Golden stamp</font>
                            </font>
                        </span></div>
                    <div class="detail"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">There are 0 stamps in stock
                                </font>
                            </font>
                        </span></div>
                </div> -->


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