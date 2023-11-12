@extends('layouts.app-layout')
@section('title','Home')

@section('content')

    <div id="app">
        <div id="ismain-homes">
            <div class="ck-content">
                <div>
                    <x-home.hero :cities="$cities"/>
                    <!-- ============================ Hero Banner End ================================== -->
                </div>


                <div>
                    <section class="bg-light">
                        <div class="container">

                            <div class="row justify-content-center">
                                <div class="col-lg-12 text-center">
                                    <div class="sec-heading center">
                                        <h2>{{__('Explore Good Places')}}</h2>
                                        <p>explore latest real estate properties in our platform</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row list-layout">
                                <!-- Single Property -->
                                @foreach($properties as $property)
                                <div class="col-lg-6 col-sm-12">
                                    <div class="property-listing property-1" data-lat="30.221926" data-long="-85.6242">
                                        <div class="listing-img-wrapper">
                                            <a href="{{route('properties.details',$property->id)}}">
                                                <img src="/storage/general/img-loading.jpg" data-src="/storage/properties/p-3-400xauto.jpg" class="img-fluid mx-auto lazy" alt="{{$property->title}}" />
                                            </a>
                                        </div>

                                        <div class="listing-content">

                                            <div class="listing-detail-wrapper-box">
                                                <div class="listing-detail-wrapper">
                                                    <div class="listing-short-detail">
                                                        <h4 class="listing-name">
                                                            <a href="{{route('properties.details',$property->id)}}" title="{{$property->title}}">{{$property->title}}</a>
                                                        </h4>
                                                    </div>
                                                    <div class="list-price">
                                                        <div>
                                                            <div class="rating_wrap" data-star="3.15">
                                                                <div class="rating">
                                                                    <div class="product_rate" style="width: 63%;"></div>
                                                                </div>
                                                                <span class="reviews_text">( 5 Reviews)</span>
                                                            </div>
                                                            @if($property->property_type_id == App\Models\PropertyType::SALE)
                                                            <span class="prt-types sale">
                                                                For Sale
                                                            </span>
                                                            @else
                                                            <span class="prt-types rent">
                                                                For rent
                                                            </span>
                                                            @endif
                                                        </div>
                                                        <h6 class="listing-card-info-price"> {{$property->currency->code}} {{$property->price}} </h6>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="price-features-wrapper">
                                                <div class="list-fx-features">
                                                    <div class="listing-card-info-icon">
                                                        <div class="inc-fleat-icon">
                                                            <img src="{{asset('themes/resido/img/bed.svg')}}" width="13" alt="" />
                                                        </div>
                                                        {{$property->number_of_beds}} Beds
                                                    </div>

                                                    <div class="listing-card-info-icon">
                                                        <div class="inc-fleat-icon">
                                                            <img src="{{asset('themes/resido/img/bathtub.svg')}}" width="13" alt="" />
                                                        </div>
                                                        {{$property->number_of_bathrooms}} Bath
                                                    </div>

                                                    <div class="listing-card-info-icon">
                                                        <div class="inc-fleat-icon">
                                                            <img src="{{asset('themes/resido/img/move.svg')}}" width="13" alt="" />
                                                        </div>
                                                        {{$property->square}} m²
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="listing-footer-wrapper">
                                                <div class="listing-locate" title="{{$property->location->name}}">
                                                    <span class="listing-location"><i class="ti-location-pin"></i>{{$property->location->name}}</span>
                                                </div>
                                                <div class="listing-detail-btn">
                                                    <a href="{{route('properties.details',$property->id)}}" class="more-btn">View</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                @endforeach
                                <!-- End Single Property -->
                                <!-- Single Property -->

                                <!-- End Single Property -->
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                    <a href="{{route('properties')}}" class="btn btn-theme-light-2 rounded">Browse More Properties</a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div>
                    <x-home.plans :plans="$plans" />
                </div>

                <div>
                    <x-home.cities :cities="$cities" />
                </div>
                <div>
                    <x-home.site-works />
                </div>
                <div>
                    <div class="raw-html-embed">
                        <section class="bg-light">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                                        <div class="content_block_2">
                                            <div class="content-box">
                                                <div class="sec-title light">
                                                    <p class="text-blue">Download apps</p>
                                                    <h2>Download App Free App For Android And IPhone</h2>
                                                </div>
                                                <div class="text">
                                                    <p></p>
                                                </div>
                                                <div class="btn-box clearfix mt-5">
                                                    <a href="" class="download-btn play-store"><i class="fab fa-google-play"></i> <span>Download on</span>
                                                    </a>
                                                    <h3><a href="" class="download-btn play-store">Google Play</a></h3><a href="" class="download-btn play-store"></a>
                                                    <a href="" class="download-btn app-store"><i class="fab fa-apple"></i> <span>Download on</span>
                                                    </a>
                                                    <h3><a href="" class="download-btn app-store">App Store</a></h3><a href="" class="download-btn app-store"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                                        <div class="image-box">
                                            <figure class="image">
                                                <img src="/storage/banners/app.png" alt="image" class="img-fluid">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @endsection