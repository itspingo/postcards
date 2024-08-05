@extends('layouts.website')
@section('content')

<section class="category-container">



    <div class="category-head-wrapper">
        <h1 class="text-bold"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">categories</font>
                </font>
            </span></h1>


        <div class="breadcrumb text-regular">
            <ol itemscope="" itemtype="https://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><a itemprop="item" href="https://post.ddev.site//"><span itemprop="name"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Home</font>
                                </font>
                            </span></span></a> <svg class="icon" viewBox="0 0 16 16">
                        <path fill="currentColor" d="M11.354 1.646a.5.5 0 010 .708L5.707 8l5.647 5.646a.5.5 0 01-.708.708l-6-6a.5.5 0 010-.708l6-6a.5.5 0 01.708 0z">
                        </path>
                    </svg>
                    <meta itemprop="position" content="1">
                </li>
                <li><span><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">categories</font>
                            </font>
                        </span></span></li>
            </ol>
        </div>
    </div>


    <div class="category-wrapper">

        @foreach($rows as $row)

        <a href="{{'category/'.str_replace(' ','-',$row->title)}}" class="category">
            <div class="cover" style="background-color: #1EBBA4; opacity: 0.7;"></div>
            <div class="cover">
                <div class="icon-cover" >
                    <picture>
                        <source srcset="{{url('storage/'.str_replace('public/','',$row->cat_image))}}" type="image/webp">
                        <img width="42" height="42" src="{{url('storage/'.str_replace('public/','',$row->cat_image))}}" alt="{{$row->title}}">
                    </picture>
                </div>
                <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">{{$row->title}}</font>
                        </font>
                    </span></div>
            </div>
        </a>
        @endforeach


<!--
        <a href="https://post.ddev.site//category/wedding-invitation" class="category">
            <div class="cover" style="background-color: #E94FB1; opacity: 0.7;"></div>
            <div class="cover">
                <div class="icon-cover" style="background-color: #E94FB1">
                    <picture>
                        <source srcset="{{url('website/assets/images/hand-holding-heart-solid.webp')}}" type="image/webp">
                        <img width="42" height="42" src="./categories_files/hand-holding-heart-solid.webp')}}" alt="wedding invitation">
                    </picture>
                </div>
                <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">wedding invitation</font>
                        </font>
                    </span></div>
            </div>
        </a>

        <a href="https://post.ddev.site//category/birthday-invitation" class="category">
            <div class="cover" style="background-color: #E66A3F; opacity: 0.7;"></div>
            <div class="cover">
                <div class="icon-cover" style="background-color: #E66A3F">
                    <picture>
                        <source srcset="{{url('website/assets/images/gift-solid.webp')}}" type="image/webp">
                        <img width="42" height="42" src="./categories_files/gift-solid.webp')}}" alt="birthday invitation">
                    </picture>
                </div>
                <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">birthday invitation</font>
                        </font>
                    </span></div>
            </div>
        </a>

        <a href="https://post.ddev.site//category/condolences-card" class="category">
            <div class="cover" style="background-color: #7D4AE4; opacity: 0.7;"></div>
            <div class="cover">
                <div class="icon-cover" style="background-color: #7D4AE4">
                    <picture>
                        <source srcset="{{url('website/assets/images/sad-tear.webp')}}" type="image/webp">
                        <img width="42" height="42" src="./categories_files/sad-tear.webp')}}" alt="condolences">
                    </picture>
                </div>
                <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">condolences</font>
                        </font>
                    </span></div>
            </div>
        </a><a href="https://post.ddev.site//category/business" class="category">
            <div class="cover" style="background-color: #ff5722; opacity: 0.7;"></div>
            <div class="cover">
                <div class="icon-cover" style="background-color: #ff5722">
                    <picture>
                        <source srcset="{{url('website/assets/images/business.webp')}}" type="image/webp">
                        <img width="42" height="42" src="./categories_files/business.webp')}}" alt="businesses">
                    </picture>
                </div>
                <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">businesses</font>
                        </font>
                    </span></div>
            </div>
        </a><a href="https://post.ddev.site//category/love-card" class="category">
            <div class="cover" style="background-color: #3D80E9; opacity: 0.7;"></div>
            <div class="cover">
                <div class="icon-cover" style="background-color: #3D80E9">
                    <picture>
                        <source srcset="{{url('website/assets/images/heartbeat-solid.webp')}}" type="image/webp">
                        <img width="42" height="42" src="./categories_files/heartbeat-solid.webp')}}" alt="Romantic">
                    </picture>
                </div>
                <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Romantic</font>
                        </font>
                    </span></div>
            </div>
        </a><a href="https://post.ddev.site//category/school" class="category">
            <div class="cover" style="background-color: #D3BB2D; opacity: 0.7;"></div>
            <div class="cover">
                <div class="icon-cover" style="background-color: #D3BB2D">
                    <picture>
                        <source srcset="{{url('website/assets/images/graduation-cap-solid.webp')}}" type="image/webp">
                        <img width="42" height="42" src="./categories_files/graduation-cap-solid.webp')}}" alt="School">
                    </picture>
                </div>
                <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">School</font>
                        </font>
                    </span></div>
            </div>
        </a><a href="https://post.ddev.site//category/good-day-night-card" class="category">
            <div class="cover" style="background-color: #55C549; opacity: 0.7;"></div>
            <div class="cover">
                <div class="icon-cover" style="background-color: #55C549">
                    <picture>
                        <source srcset="{{url('website/assets/images/cloud-moon-solid.webp')}}" type="image/webp">
                        <img width="42" height="42" src="./categories_files/cloud-moon-solid.webp')}}" alt="good day and night">
                    </picture>
                </div>
                <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">good day and night</font>
                        </font>
                    </span></div>
            </div>
        </a><a href="https://post.ddev.site//category/wedding-card" class="category">
            <div class="cover" style="background-color: #E94FB1; opacity: 0.7;"></div>
            <div class="cover">
                <div class="icon-cover" style="background-color: #E94FB1">
                    <picture>
                        <source srcset="{{url('website/assets/images/gem.webp')}}" type="image/webp">
                        <img width="42" height="42" src="./categories_files/gem.webp')}}" alt="Congratulations on the marriage">
                    </picture>
                </div>
                <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Congratulations on the marriage</font>
                        </font>
                    </span></div>
            </div>
        </a><a href="https://post.ddev.site//category/religious-card" class="category">
            <div class="cover" style="background-color: #7D4AE4; opacity: 0.7;"></div>
            <div class="cover">
                <div class="icon-cover" style="background-color: #7D4AE4">
                    <picture>
                        <source srcset="{{url('website/assets/images/mosque-solid.webp')}}" type="image/webp">
                        <img width="42" height="42" src="./categories_files/mosque-solid.webp')}}" alt="Religious holidays">
                    </picture>
                </div>
                <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Religious holidays</font>
                        </font>
                    </span></div>
            </div>
        </a><a href="https://post.ddev.site//category/miss-card" class="category">
            <div class="cover" style="background-color: #E66A3F; opacity: 0.7;"></div>
            <div class="cover">
                <div class="icon-cover" style="background-color: #E66A3F">
                    <picture>
                        <source srcset="{{url('website/assets/images/heart-broken-solid.webp')}}" type="image/webp">
                        <img width="42" height="42" src="./categories_files/heart-broken-solid.webp')}}" alt="Homesick">
                    </picture>
                </div>
                <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Homesick</font>
                        </font>
                    </span></div>
            </div>
        </a><a href="https://post.ddev.site//category/greeting-card" class="category">
            <div class="cover" style="background-color: #1EBBA4; opacity: 0.7;"></div>
            <div class="cover">
                <div class="icon-cover" style="background-color: #1EBBA4">
                    <picture>
                        <source srcset="{{url('website/assets/images/mail-bulk-solid.webp')}}" type="image/webp">
                        <img width="42" height="42" src="./categories_files/mail-bulk-solid.webp')}}" alt="Other">
                    </picture>
                </div>
                <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Other</font>
                        </font>
                    </span></div>
            </div>
        </a><a href="https://post.ddev.site//category/anniversary-card" class="category">
            <div class="cover" style="background-color: #29A8C2; opacity: 0.7;"></div>
            <div class="cover">
                <div class="icon-cover" style="background-color: #29A8C2">
                    <picture>
                        <source srcset="{{url('website/assets/images/ring-solid.webp')}}" type="image/webp">
                        <img width="42" height="42" src="./categories_files/ring-solid.webp')}}" alt="anniversary">
                    </picture>
                </div>
                <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">anniversary</font>
                        </font>
                    </span></div>
            </div>
        </a><a href="https://post.ddev.site//category/jobs-card" class="category">
            <div class="cover" style="background-color: #1EBBA4; opacity: 0.7;"></div>
            <div class="cover">
                <div class="icon-cover" style="background-color: #1EBBA4">
                    <picture>
                        <source srcset="{{url('website/assets/images/briefcase-solid.webp')}}" type="image/webp">
                        <img width="42" height="42" src="./categories_files/briefcase-solid.webp')}}" alt="Congratulations jobs">
                    </picture>
                </div>
                <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Congratulations jobs</font>
                        </font>
                    </span></div>
            </div>
        </a><a href="https://post.ddev.site//category/father-day-card" class="category">
            <div class="cover" style="background-color: #D3BB2D; opacity: 0.7;"></div>
            <div class="cover">
                <div class="icon-cover" style="background-color: #D3BB2D">
                    <picture>
                        <source srcset="{{url('website/assets/images/male-solid.webp')}}" type="image/webp">
                        <img width="42" height="42" src="./categories_files/male-solid.webp')}}" alt="father&#39;s Day">
                    </picture>
                </div>
                <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">father's Day</font>
                        </font>
                    </span></div>
            </div>
        </a><a href="https://post.ddev.site//category/nowruz-card" class="category">
            <div class="cover" style="background-color: #29A8C2; opacity: 0.7;"></div>
            <div class="cover">
                <div class="icon-cover" style="background-color: #29A8C2">
                    <picture>
                        <source srcset="{{url('website/assets/images/fish-solid.webp')}}" type="image/webp">
                        <img width="42" height="42" src="./categories_files/fish-solid.webp')}}" alt="happy Norooz">
                    </picture>
                </div>
                <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">happy Norooz</font>
                        </font>
                    </span></div>
            </div>
        </a><a href="https://post.ddev.site//category/mother-day-card" class="category">
            <div class="cover" style="background-color: #55C549; opacity: 0.7;"></div>
            <div class="cover">
                <div class="icon-cover" style="background-color: #55C549">
                    <picture>
                        <source srcset="{{url('website/assets/images/female-solid.webp')}}" type="image/webp">
                        <img width="42" height="42" src="./categories_files/female-solid.webp')}}" alt="mother&#39;s Day">
                    </picture>
                </div>
                <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">mother's Day</font>
                        </font>
                    </span></div>
            </div>
        </a><a href="https://post.ddev.site//category/yalda-card" class="category">
            <div class="cover" style="background-color: #E94FB1; opacity: 0.7;"></div>
            <div class="cover">
                <div class="icon-cover" style="background-color: #E94FB1">
                    <picture>
                        <source srcset="{{url('website/assets/images/apple-alt-solid.webp')}}" type="image/webp">
                        <img width="42" height="42" src="./categories_files/apple-alt-solid.webp')}}" alt="Yalda night">
                    </picture>
                </div>
                <div class="title"><span wudooh="true" style="font-size:1.05em;line-height:1.1em;font-family:&quot;Sahl Naskh&quot;;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Yalda night</font>
                        </font>
                    </span></div>
            </div>
        </a>

-->
    </div>
</section>
@endsection
