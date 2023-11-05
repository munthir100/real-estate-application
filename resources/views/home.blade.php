@extends('layouts.app-layout')
@section('title','Home')

@section('content')
<div id="app">
    <div id="ismain-homes">
        <div class="ck-content">
            <div>
                <div class="image-cover hero-banner" style="background:#eff6ff url(https://resido.thesky9.com/storage/banners/home-2.png) no-repeat;">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-9 col-md-11 col-sm-12">
                                <div class="inner-banner-text text-center">
                                    <p class="lead-i">Amet consectetur adipisicing New</p>
                                    <h2>Find Your Perfect Place.</h2>
                                </div>
                                <div class="full-search-2 eclip-search italian-search hero-search-radius shadow-hard mt-5">
                                    <form action="https://resido.thesky9.com/en/properties" method="GET" id="frmhomesearch">
                                        <div class="hero-search-content">
                                            <div class="row">

                                                <div class="col-lg-4 col-md-4 col-sm-12 b-r">
                                                    <div class="form-group">
                                                        <div class="choose-property-type">
                                                            <ul>
                                                                <li>
                                                                    <input id="cp-sale" value="sale" class="checkbox-custom" name="type" type="radio" checked>
                                                                    <label for="cp-sale" class="checkbox-custom-label">For Sale</label>
                                                                </li>
                                                                <li>
                                                                    <input id="cp-rent" value="rent" class="checkbox-custom" name="type" type="radio">
                                                                    <label for="cp-rent" class="checkbox-custom-label">For Rent</label>
                                                                </li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-5 col-md-4 col-sm-10 p-0 elio">
                                                    <div class="form-group">
                                                        <div class="input-with-icon">
                                                            <div class="input-with-icon">
                                                                <input type="text" class="form-control" name="k" value="" placeholder="Search for a location">
                                                                <img src="https://resido.thesky9.com/themes/resido/img/pin.svg" width="20">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-1 col-md-1 col-sm-2">
                                                    <div class="form-group">
                                                        <a class="collapsed ad-search" data-bs-toggle="collapse" data-parent="#search" data-bs-target="#advance-search" href="javascript:void(0);" aria-expanded="false" aria-controls="advance-search"><i class="fa fa-sliders-h"></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-3 col-sm-12">
                                                    <div class="form-group">
                                                        <button class="btn search-btn" type="submit">Search</button>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- Collapse Advance Search Form -->
                                            <div class="collapse" id="advance-search" aria-expanded="false" role="banner">

                                                <!-- row -->
                                                <div class="row">

                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <div class="form-group mb-2">
                                                            <div class="input-with-icon">
                                                                <select data-placeholder="City" class="form-control city_id" data-url="https://resido.thesky9.com/en/ajax/cities" name="city_id" id="city_id">
                                                                </select>

                                                                <i class="ti-location-pin"></i>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <div class="form-group mb-2">
                                                            <div class="input-with-icon">
                                                                <select id="select-bedroom" data-placeholder="Bedroom" name="bedroom" class="form-control">
                                                                    <option value="">&nbsp;</option>
                                                                    <option value="1">
                                                                        1
                                                                    </option>
                                                                    <option value="2">
                                                                        2
                                                                    </option>
                                                                    <option value="3">
                                                                        3
                                                                    </option>
                                                                    <option value="4">
                                                                        4
                                                                    </option>
                                                                    <option value="5">
                                                                        5
                                                                    </option>
                                                                </select>

                                                                <i class="fas fa-bed"></i>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <div class="form-group mb-2">
                                                            <div class="input-with-icon">
                                                                <select id="select-bathroom" data-placeholder="Bathroom" name="bathroom" class="form-control">
                                                                    <option value="">&nbsp;</option>
                                                                    <option value="1">
                                                                        1
                                                                    </option>
                                                                    <option value="2">
                                                                        2
                                                                    </option>
                                                                    <option value="3">
                                                                        3
                                                                    </option>
                                                                    <option value="4">
                                                                        4
                                                                    </option>
                                                                    <option value="5">
                                                                        5
                                                                    </option>
                                                                </select>

                                                                <i class="fas fa-bath"></i>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- /row -->

                                                <!-- row -->
                                                <div class="row">

                                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                                        <div class="form-group simple mb-2">
                                                            <select id="minprice" data-placeholder="No Min" name="min_price" class="form-control">
                                                                <option value="">&nbsp;</option>
                                                                <option value="500">
                                                                    500
                                                                </option>
                                                                <option value="1000">
                                                                    1000
                                                                </option>
                                                                <option value="2000">
                                                                    2000
                                                                </option>
                                                                <option value="5000">
                                                                    5000
                                                                </option>
                                                                <option value="10000">
                                                                    10000
                                                                </option>
                                                            </select>

                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                                        <div class="form-group simple mb-2">
                                                            <select id="maxprice" data-placeholder="No Max" name="max_price" class="form-control">
                                                                <option value="">&nbsp;</option>
                                                                <option value="1000">
                                                                    1000
                                                                </option>
                                                                <option value="2000">
                                                                    2000
                                                                </option>
                                                                <option value="5000">
                                                                    5000
                                                                </option>
                                                                <option value="10000">
                                                                    10000
                                                                </option>
                                                                <option value="50000">
                                                                    50000
                                                                </option>
                                                            </select>

                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                                        <div class="form-group mb-2">
                                                            <input type="text" class="form-control" name="min_square" value="" placeholder="Min Area">

                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                                        <div class="form-group mb-2">
                                                            <input type="text" class="form-control" name="max_square" value="" placeholder="Max Area">

                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- /row -->


                                                <!-- row -->
                                                <div class="row">

                                                    <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                                                        <h4 class="text-dark">Amenities &amp; Features</h4>
                                                        <ul class="no-ul-list second-row">
                                                            <li>
                                                                <input id="features-0" class="input-filter checkbox-custom" name="features[]" type="checkbox" value="1">
                                                                <label for="features-0" class="checkbox-custom-label">Wifi</label>
                                                            </li>
                                                            <li>
                                                                <input id="features-1" class="input-filter checkbox-custom" name="features[]" type="checkbox" value="2">
                                                                <label for="features-1" class="checkbox-custom-label">Parking</label>
                                                            </li>
                                                            <li>
                                                                <input id="features-2" class="input-filter checkbox-custom" name="features[]" type="checkbox" value="3">
                                                                <label for="features-2" class="checkbox-custom-label">Swimming pool</label>
                                                            </li>
                                                            <li>
                                                                <input id="features-3" class="input-filter checkbox-custom" name="features[]" type="checkbox" value="4">
                                                                <label for="features-3" class="checkbox-custom-label">Balcony</label>
                                                            </li>
                                                            <li>
                                                                <input id="features-4" class="input-filter checkbox-custom" name="features[]" type="checkbox" value="5">
                                                                <label for="features-4" class="checkbox-custom-label">Garden</label>
                                                            </li>
                                                            <li>
                                                                <input id="features-5" class="input-filter checkbox-custom" name="features[]" type="checkbox" value="6">
                                                                <label for="features-5" class="checkbox-custom-label">Security</label>
                                                            </li>
                                                            <li>
                                                                <input id="features-6" class="input-filter checkbox-custom" name="features[]" type="checkbox" value="7">
                                                                <label for="features-6" class="checkbox-custom-label">Fitness center</label>
                                                            </li>
                                                            <li>
                                                                <input id="features-7" class="input-filter checkbox-custom" name="features[]" type="checkbox" value="8">
                                                                <label for="features-7" class="checkbox-custom-label">Air Conditioning</label>
                                                            </li>
                                                            <li>
                                                                <input id="features-8" class="input-filter checkbox-custom" name="features[]" type="checkbox" value="9">
                                                                <label for="features-8" class="checkbox-custom-label">Central Heating </label>
                                                            </li>
                                                            <li>
                                                                <input id="features-9" class="input-filter checkbox-custom" name="features[]" type="checkbox" value="10">
                                                                <label for="features-9" class="checkbox-custom-label">Laundry Room</label>
                                                            </li>
                                                            <li>
                                                                <input id="features-10" class="input-filter checkbox-custom" name="features[]" type="checkbox" value="11">
                                                                <label for="features-10" class="checkbox-custom-label">Pets Allow</label>
                                                            </li>
                                                            <li>
                                                                <input id="features-11" class="input-filter checkbox-custom" name="features[]" type="checkbox" value="12">
                                                                <label for="features-11" class="checkbox-custom-label">Spa &amp; Massage</label>
                                                            </li>
                                                        </ul>

                                                    </div>

                                                </div>
                                                <!-- /row -->

                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================ Hero Banner End ================================== -->
            </div>


            <div>
                <section class="bg-light">
                    <div class="container">

                        <div class="row justify-content-center">
                            <div class="col-lg-12 text-center">
                                <div class="sec-heading center">
                                    <h2>Explore Good Places</h2>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                                </div>
                            </div>
                        </div>

                        <div class="row list-layout">
                            <!-- Single Property -->
                            @foreach($properties as $property)
                            <div class="col-lg-6 col-sm-12">
                                <div class="property-listing property-1" data-lat="30.221926" data-long="-85.6242">
                                    <div class="listing-img-wrapper">
                                        <a href="https://resido.thesky9.com/en/properties/2318-camryns-crossing">
                                            <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-3-400xauto.jpg" class="img-fluid mx-auto lazy" alt="{{$property->title}}" />
                                        </a>
                                        <div class="icon-actions-wrapper">
                                            <a href="JavaScript:Void(0);" data-id="16" class="add-to-wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="listing-content">

                                        <div class="listing-detail-wrapper-box">
                                            <div class="listing-detail-wrapper">
                                                <div class="listing-short-detail">
                                                    <h4 class="listing-name">
                                                        <a href="https://resido.thesky9.com/en/properties/2318-camryns-crossing" title="{{$property->title}}">{{$property->title}}</a>
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
                                                        <img src="https://resido.thesky9.com/themes/resido/img/bed.svg" width="13" alt="" />
                                                    </div>
                                                    {{$property->number_of_beds}} Beds
                                                </div>

                                                <div class="listing-card-info-icon">
                                                    <div class="inc-fleat-icon">
                                                        <img src="https://resido.thesky9.com/themes/resido/img/bathtub.svg" width="13" alt="" />
                                                    </div>
                                                    {{$property->number_of_bathrooms}} Bath
                                                </div>

                                                <div class="listing-card-info-icon">
                                                    <div class="inc-fleat-icon">
                                                        <img src="https://resido.thesky9.com/themes/resido/img/move.svg" width="13" alt="" />
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
                                                <a href="https://resido.thesky9.com/en/properties/2318-camryns-crossing" class="more-btn">View</a>
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
                                <a href="https://resido.thesky9.com/en/properties" class="btn btn-theme-light-2 rounded">Browse More Properties</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div>
                <x-plans :plans="$plans"/>
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