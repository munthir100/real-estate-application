@php
$properties->load('location','currency')
@endphp
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12">
        <x-properties.sidebar-search :userSearchCriteria="$userSearchCriteria" />
    </div>

    <div class="col-lg-8 col-md-12 list-layout">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="item-sorting-box">
                    <div class="item-sorting clearfix">
                        <div class="left-column pull-left">
                            <h4 class="m-0">
                                Found {{ $properties->count() > 0 ? ($properties->firstItem() . ' - ' . $properties->lastItem()) : '0' }} Of {{ $properties->total() }} Results
                            </h4>
                        </div>
                    </div>
                    <div class="item-sorting-box-right">
                        <div class="sorting-by">
                            <select id="sort_by" name="sort_by" class="form-control" data-placeholder="Sort by">
                                <option value="">Sort by</option>
                                <option value="">Default</option>
                                <option value="date_asc">Oldest</option>
                                <option value="date_desc">Newest</option>
                                <option value="price_asc">Price: Low to high</option>
                                <option value="price_desc">Price: High to low</option>
                                <option value="name_asc">Name: A-Z</option>
                                <option value="name_desc">Name: Z-A</option>
                            </select>
                        </div>
                        <ul class="shorting-list">
                            <li>
                                <a href="/properties?layout=sidebar&amp;view=grid" class="active"><i class="ti-layout-grid2"></i></a>
                            </li>
                            <li>
                                <a href="/properties?layout=sidebar&amp;view=list" class=""><i class="ti-view-list"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @forelse($properties as $property)
            <div class="col-lg-6 col-md-12">
                <div class="property-listing property-2 " data-lat="30.1548681" data-long="-85.7709976">
                    <div class="listing-img-wrapper">
                        <div class="list-img-slide">
                            <div class="click ">
                                <div>
                                    <a href="{{route('properties.details',$property->id)}}">
                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-16-400xauto.jpg" class="img-fluid mx-auto lazy" alt="{{$property->title}}" />
                                    </a>
                                </div>
                                <div>
                                    <a href="{{route('properties.details',$property->id)}}">
                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-3-400xauto.jpg" class="img-fluid mx-auto lazy" alt="{{$property->title}}" />
                                    </a>
                                </div>
                                <div>
                                    <a href="{{route('properties.details',$property->id)}}">
                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-15-400xauto.jpg" class="img-fluid mx-auto lazy" alt="{{$property->title}}" />
                                    </a>
                                </div>
                                <div>
                                    <a href="{{route('properties.details',$property->id)}}">
                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-2-400xauto.jpg" class="img-fluid mx-auto lazy" alt="{{$property->title}}" />
                                    </a>
                                </div>
                                <div>
                                    <a href="{{route('properties.details',$property->id)}}">
                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-4-400xauto.jpg" class="img-fluid mx-auto lazy" alt="{{$property->title}}" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="listing-detail-wrapper">
                        <div class="listing-short-detail-wrap">
                            <div class="listing-short-detail">
                                <div class="list-price d-flex justify-content-between">
                                    @if($property->property_type_id == App\Models\PropertyType::SALE)
                                    <span class="prt-types sale">For Sale</span>
                                    @else
                                    <span class="prt-types rent">For rent</span>
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

                    <div class="listing-detail-footer">
                        <div class="footer-first">
                            <div class="foot-location d-flex">
                                <img src="{{asset('themes/resido/img/pin.svg')}}" width="18" alt="{{$property->title}}" />
                                {{$property->location->name}}
                            </div>
                        </div>
                        <div class="footer-flex">
                            <a href="{{route('properties.details',$property->id)}}" class="prt-view">View</a>
                        </div>
                    </div>
                </div>

            </div>
            @empty
            <div class="col-lg-12 col-md-12">
                <div class="alert alert-light">
                    <span class="test-light">
                        <p class="text-center">no result found</p>
                    </span>
                </div>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <nav class="d-flex justify-content-center pt-3" aria-label="Page navigation">
                    <nav>
                        <ul class="pagination">
                            @if ($properties->currentPage() > 1)
                            <li class="page-item">
                                <a class="page-link" href="{{ $properties->previousPageUrl() }}" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            @endif

                            @for ($i = 1; $i <= $properties->lastPage(); $i++)
                                <li class="page-item{{ $i == $properties->currentPage() ? ' active' : '' }}">
                                    <a class="page-link" href="{{ $properties->url($i) }}">{{ $i }}</a>
                                </li>
                                @endfor

                                @if ($properties->currentPage() < $properties->lastPage())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $properties->nextPageUrl() }}" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                    @endif
                        </ul>
                    </nav>

                </nav>
            </div>
        </div>
    </div>
</div>