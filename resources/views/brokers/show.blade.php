@extends('layouts.app-layout')
@section('title','Home')

@section('content')

<div id="app">
    <!-- ============================ Page Title Start================================== -->
    <div class="image-cover page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1 class="ipt-title">{{__('Broker Detail')}}</h1>
                    <span class="ipn-subtitle">{{$user->first_name}} {{$user->middle_name}}</span>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ Agency Name Start================================== -->
    <section class="agent-page p-0 gray-simple">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="agency agency-list overlio-40">

                        <div class="agency-avatar">
                            <img src="https://resido.thesky9.com/storage/accounts/1-150x150.jpg" alt="{{$user->first_name}} {{$user->last_name}}" class="img-thumbnail">
                        </div>

                        <div class="agency-content">
                            <div class="agency-name">
                                <h4><a href="#">{{$user->first_name}} {{$user->middle_name}}</a></h4>
                                <span><i class="lni-phone-handset"></i>{{$user->phone}}</span>
                            </div>

                            <div class="agency-desc">
                                <p>{{$user->description}}</p>
                            </div>

                            <div class="prt-detio">
                                <span>{{$user->accepted_properties_count}} {{__('Property')}}</span>
                            </div>

                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================ About Agency ================================== -->
    <section class="min gray-simple">
        <div class="container">
            <div class="row">
                <!-- property main detail -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <!-- Single Block Wrap -->
                    <div class="block-wrap">

                        <div class="block-header">
                            <h4 class="block-title">{{__('Broker info')}}</h4>
                        </div>

                        <div class="block-body">
                            <ul class="dw-proprty-info">
                                <li><strong>{{__('Email')}}</strong>{{$user->email}}</li>
                                <li><strong>{{__('Phone')}}</strong>{{$user->phone}}</li>
                                <li><strong>{{__('Joined on')}}</strong> {{$user->created_at->diffForHumans()}}
                                <li><strong>{{__('license number')}}</strong> {{$user->broker->license_number}}
                                <li><strong>{{__('Val license number')}}</strong> {{$user->broker->val_license_number}}
                                <li><strong>{{__('Commertial registration')}}</strong> {{$user->broker->commercial_registration}}
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Single Block Wrap -->
                    <div class="block-wraps">
                        <div class="block-wraps-header">
                            <div class="block-header">
                                <ul class="nav nav-tabs customize-tab" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation"><a class="nav-link" id="tab-type-1" data-bs-toggle="tab" href="#tab-content-type-1" role="tab" aria-selected="false">{{__('For Sale')}}</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link active" id="tab-type-2" data-bs-toggle="tab" href="#tab-content-type-2" role="tab" aria-selected="true">{{__('For Rent')}}</a></li>
                                </ul>
                            </div>
                            <div class="block-body">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade" role="tabpanel" id="tab-content-type-1" aria-labelledby="tab-type-1">
                                        <div class="row">
                                            @foreach($user->acceptedProperties->where('property_type_id',App\Models\PropertyType::SALE) as $property)
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="property-listing property-2" data-lat="{{$property->location->latitude}}" data-long="{{$property->location->longitude}}">
                                                    <div class="listing-img-wrapper">
                                                        <div class="list-img-slide">
                                                            <div class="click not-slider">
                                                                <div><a href="{{route('properties.details',$property->id)}}"><img src="{{$property->getFirstMediaUrl('images')}}" data-src="https://resido.thesky9.com/storage/properties/p-5-400xauto.jpg" class="img-fluid mx-auto lazy entered loaded" alt="{{$property->title}}" data-ll-status="loaded"></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="listing-detail-wrapper">
                                                        <div class="listing-short-detail-wrap">
                                                            <div class="listing-short-detail">
                                                                <div class="list-price d-flex justify-content-between">
                                                                    <span>
                                                                        <x-properties.property-type-span :property="$property" />
                                                                    </span>
                                                                    <h6 class="listing-card-info-price"> {{__($property->currency->code)}} {{$property->price}} </h6>
                                                                </div>
                                                                <h4 class="listing-name"><a href="{{route('properties.details',$property->id)}}" class="prt-link-detail" title="{{$property->title}}">{{$property->title}}</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="price-features-wrapper">
                                                        <div class="list-fx-features">
                                                            <div class="listing-card-info-icon">
                                                                <div class="inc-fleat-icon">
                                                                    <img src="{{asset('themes/resido/img/bed.svg')}}" width="13" alt="">
                                                                </div> {{$property->number_of_bedrooms}} {{__('Beds')}}
                                                            </div>
                                                            <div class="listing-card-info-icon">
                                                                <div class="inc-fleat-icon">
                                                                    <img src="{{asset('themes/resido/img/bathtub.svg')}}" width="13" alt="">
                                                                </div> {{$property->number_of_bathrooms}} {{__('Bath')}}
                                                            </div>
                                                            <div class="listing-card-info-icon">
                                                                <div class="inc-fleat-icon">
                                                                    <img src="{{asset('themes/resido/img/move.svg')}}" width="13" alt="">
                                                                </div> {{$property->square}} m²
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="listing-detail-footer">
                                                        <div class="footer-first">
                                                            <div class="foot-location d-flex">
                                                                <img src="{{asset('themes/resido/img/pin.svg')}}" width="18" alt="{{$property->location->name}}"> {{$property->location->name}}
                                                            </div>
                                                        </div>
                                                        <div class="footer-flex"><a href="{{route('properties.details',$property->id)}}" class="prt-view">{{__('View')}}</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show active" role="tabpanel" id="tab-content-type-2" aria-labelledby="tab-type-2">
                                        <div class="row">
                                            @foreach($user->acceptedProperties->where('property_type_id',App\Models\PropertyType::RENT) as $property)
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="property-listing property-2" data-lat="{{$property->location->latitude}}" data-long="{{$property->location->longitude}}">
                                                    <div class="listing-img-wrapper">
                                                        <div class="list-img-slide">
                                                            <div class="click not-slider">
                                                                <div><a href="{{route('properties.details',$property->id)}}"><img src="{{$property->getFirstMediaUrl('images')}}" data-src="https://resido.thesky9.com/storage/properties/p-5-400xauto.jpg" class="img-fluid mx-auto lazy entered loaded" alt="{{$property->title}}" data-ll-status="loaded"></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="listing-detail-wrapper">
                                                        <div class="listing-short-detail-wrap">
                                                            <div class="listing-short-detail">
                                                                <div class="list-price d-flex justify-content-between">
                                                                    <span>
                                                                        <x-properties.property-type-span :property="$property" />
                                                                    </span>
                                                                    <h6 class="listing-card-info-price"> {{__($property->currency->code)}} {{$property->price}} </h6>
                                                                </div>
                                                                <h4 class="listing-name"><a href="{{route('properties.details',$property->id)}}" class="prt-link-detail" title="{{$property->title}}">{{$property->title}}</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="price-features-wrapper">
                                                        <div class="list-fx-features">
                                                            <div class="listing-card-info-icon">
                                                                <div class="inc-fleat-icon">
                                                                    <img src="{{asset('themes/resido/img/bed.svg')}}" width="13" alt="">
                                                                </div> {{$property->number_of_bedrooms}} {{__('Beds')}}
                                                            </div>
                                                            <div class="listing-card-info-icon">
                                                                <div class="inc-fleat-icon">
                                                                    <img src="{{asset('themes/resido/img/bathtub.svg')}}" width="13" alt="">
                                                                </div> {{$property->number_of_bathrooms}} {{__('Bath')}}
                                                            </div>
                                                            <div class="listing-card-info-icon">
                                                                <div class="inc-fleat-icon">
                                                                    <img src="{{asset('themes/resido/img/move.svg')}}" width="13" alt="">
                                                                </div> {{$property->square}} m²
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="listing-detail-footer">
                                                        <div class="footer-first">
                                                            <div class="foot-location d-flex">
                                                                <img src="{{asset('themes/resido/img/pin.svg')}}" width="18" alt="{{$property->location->name}}"> {{$property->location->name}}
                                                            </div>
                                                        </div>
                                                        <div class="footer-flex"><a href="{{route('properties.details',$property->id)}}" class="prt-view">{{__('View')}}</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection