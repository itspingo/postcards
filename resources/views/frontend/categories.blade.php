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

    </div>
</section>
@endsection
