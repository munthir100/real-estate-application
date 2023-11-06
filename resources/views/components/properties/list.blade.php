<div class="col-lg-6 col-sm-12">
    <div class="property-listing property-1" data-lat="30.221926" data-long="-85.6242">
        <div class="listing-img-wrapper">
            <a href="{{route('properties.details',$property->id)}}">
                @php
                $firstImage = $property->getFirstMedia('images');

                @endphp
                <img src="{{$property->getFirstMediaUrl('images')}}" data-src="{{$property->getFirstMediaUrl('images')}}" class="img-fluid mx-auto lazy" alt="{{$property->title}}" />
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
                        <h6 class="listing-card-info-price">
                            {{$property->currency->code}}
                            @if(!$property->price)
                            0
                            @else
                            {{$property->price}}
                            @endif
                        </h6>
                    </div>
                </div>
            </div>

            <div class="price-features-wrapper">
                <div class="list-fx-features">
                    <div class="listing-card-info-icon">
                        <div class="inc-fleat-icon">
                            <img src="{{$property->getFirstMedia()}}" width="13" alt="" />
                        </div>
                        @if(!$property->number_of_beds)
                        0
                        @else
                        {{$property->number_of_beds}}
                        @endif
                    </div>

                    <div class="listing-card-info-icon">
                        <div class="inc-fleat-icon">
                            <img src="{{$property->getFirstMedia()}}" width="13" alt="" />
                        </div>
                        @if(!$property->number_of_bathrooms)
                        0
                        @else
                        {{$property->number_of_bathrooms}}
                        @endif Bath
                    </div>

                    <div class="listing-card-info-icon">
                        <div class="inc-fleat-icon">
                            <img src="{{$property->getFirstMedia()}}" width="13" alt="" />
                        </div>
                        @if(!$property->square)
                        0
                        @else
                        {{$property->square}}
                        @endif m²
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