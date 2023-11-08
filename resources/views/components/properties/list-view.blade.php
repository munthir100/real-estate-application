<div class="col-lg-12 col-md-12">
    <div class="property-listing property-1" data-lat="{{ $property->location->longitude }}" data-long="{{ $property->location->latitude }}">
        <div class="listing-img-wrapper">
            <a href="{{ route('properties.details', $property->id) }}">
                <img src="{{ asset('themes/resido/img/img-loading.jpg') }}" data-src="{{asset($property->getFirstMedia('images')->getUrl())}}" class="img-fluid mx-auto lazy" alt="{{ $property->title }}" />
            </a>
        </div>

        <div class="listing-content">

            <div class="listing-detail-wrapper-box">
                <div class="listing-detail-wrapper">
                    <div class="listing-short-detail">
                        <h4 class="listing-name">
                            <a href="{{ route('properties.details', $property->id) }}" title="{{ $property->title }}">{{ $property->title }}</a>
                        </h4>
                    </div>
                    <div class="list-price">
                        <div>
                            <span class="prt-types {{ $property->property_type_id == App\Models\PropertyType::SALE ? 'sale' : 'rent' }}">
                                {{ $property->property_type_id == App\Models\PropertyType::SALE ? 'For Sale' : 'For Rent' }}
                            </span>
                            <h6 class="listing-card-info-price"> {{ $property->currency->code }}{{ $property->price }} / {{ $property->price_unit }}</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="price-features-wrapper">
                <div class="list-fx-features">
                    <div class="listing-card-info-icon">
                        <div class="inc-fleat-icon">
                            <img src="{{ asset('themes/resido/img/bed.svg') }}" width="13" alt="Beds" />
                        </div>
                        {{ $property->number_of_beds }} Beds
                    </div>

                    <div class="listing-card-info-icon">
                        <div class="inc-fleat-icon">
                            <img src="{{ asset('themes/resido/img/bathtub.svg') }}" width="13" alt="Bathrooms" />
                        </div>
                        {{ $property->number_of_bathrooms }} Bath
                    </div>

                    <div class="listing-card-info-icon">
                        <div class="inc-fleat-icon">
                            <img src="{{ asset('themes/resido/img/move.svg') }}" width="13" alt="Square Meters" />
                        </div>
                        {{ $property->square }} m²
                    </div>
                </div>
            </div>

            <div class="listing-footer-wrapper">
                <div class="listing-locate" title="{{ $property->location->name }}">
                    <span class="listing-location"><i class="ti-location-pin"></i>{{ $property->location->name }}</span>
                </div>
                <div class="listing-detail-btn">
                    <a href="{{ route('properties.details', $property->id) }}" class="more-btn">View</a>
                </div>
            </div>
        </div>
    </div>
</div>