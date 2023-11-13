<div class="col-lg-6 col-md-12">
                <div class="property-listing property-2 " data-lat="{{$property->location->longitude}}" data-long="{{$property->location->latitude}}">
                    <div class="listing-img-wrapper">
                        <div class="list-img-slide">
                            <div class="click ">
                                <div>
                                    <a href="{{route('properties.details',$property->id)}}">
                                        <img src="{{$property->getFirstMediaUrl('images')}}" data-src="{{$property->getFirstMediaUrl('images')}}" class="img-fluid mx-auto lazy" alt="{{$property->title}}" />
                                    </a>
                                </div>
                               <!-- multiple -->
                            </div>
                        </div>
                    </div>

                    <div class="listing-detail-wrapper">
                        <div class="listing-short-detail-wrap">
                            <div class="listing-short-detail">
                                <div class="list-price d-flex justify-content-between">
                                    @if($property->property_type_id == App\Models\PropertyType::SALE)
                                    <span class="prt-types sale">{{__('For Sale')}}</span>
                                    @else
                                    <span class="prt-types rent">{{__('For rent')}}</span>
                                    @endif
                                    <h6 class="listing-card-info-price">
                                        {{$property->currency->code}}{{$property->price}}
                                    </h6>
                                </div>
                                <h4 class="listing-name">
                                    <a href="{{route('properties.details',$property->id)}}" class="prt-link-detail" title="{{$property->title}}">{{$property->title}}</a>
                                </h4>
                                <div class="rating_wrap" data-star="3.1666666666667">
                                    <div class="rating">
                                        <div class="product_rate" style="width: 63.333333333333%;"></div>
                                    </div>
                                    <span class="reviews_text">( 3 Reviews)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="price-features-wrapper">
                        <div class="list-fx-features">
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon">
                                    <img src="{{asset('themes/resido/img/bed.svg')}}" width="13" alt="" />
                                </div>
                                {{$property->number_of_beds}} {{__('Beds')}}
                            </div>

                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon">
                                    <img src="{{asset('themes/resido/img/bathtub.svg')}}" width="13" alt="" />
                                </div>
                                {{$property->number_of_bathrooms}} {{__('Bath')}}
                            </div>
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon">
                                    <img src="{{asset('themes/resido/img/move.svg')}}" width="13" alt="" />
                                </div>
                                {{$property->square}} {{__('m²')}}
                            </div>
                        </div>
                    </div>

                    <div class="listing-detail-footer">
                        <div class="footer-first">
                            <div class="foot-location d-flex">
                                <img src="{{asset('themes/resido/img/pin.svg')}}" width="18" alt="{{$property->title}}" />
                                {{$property->location->name}}
                            </div>
                        </div>
                        <div class="footer-flex">
                            <a href="{{route('properties.details',$property->id)}}" class="prt-view">{{__('View')}}</a>
                        </div>
                    </div>
                </div>

            </div>