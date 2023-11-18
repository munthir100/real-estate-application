@extends('layouts.app-layout')
@section('title','Home')

@section('content')
<div id="app">
    <!-- ============================ Property Header Info Start================================== -->
    <section class="bg-title">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-md-12">

                    <div class="property_block_wrap style-4">
                        <div class="prt-detail-title-desc">
                            <x-properties.property-type-span :property="$property" />
                            <h3 class="text-light">{{$property->location->name}}</h3>
                            <!-- <span><i class="lni-map-marker"></i> 36907 Strosin Mountain
                                Cronaville, MN 00489-6879</span> -->
                            <h3 class="prt-price-fix">{{$property->currency->code}} {{$property->price}}</h3>
                            <div class="pbwts-social">
                                <ul>
                                    <li>{{__('Share')}}:</li>
                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u={{route('properties.details',$property->id)}}&title={{$property->description}}." title="{{__('Share on Facebook')}}" target="_blank"><i class="ti-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/intent/tweet?url={{route('properties.details',$property->id)}}&text={{$property->description}}." target="_blank" title="Tweet now"><i class="ti-twitter"></i></a></li>
                                    <li><a href="https://www.linkedin.com/shareArticle?mini=true&url={{route('properties.details',$property->id)}}&summary={{$property->description}}." target="_blank" title="Share on Linkedin"><i class="ti-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Property Header Info End ================================== -->


    <!-- ============================ Property Detail Start ================================== -->
    <section class="property-detail gray-simple">
        <div data-property-id="3"></div>
        <div class="container">
            <div class="row">
                <!-- property main detail -->
                <div class="col-lg-8 col-md-12 col-sm-12">

                    <!-- Single Block Wrap - Features -->
                    <div class="property_block_wrap style-2">
                        <div class="property_block_wrap_header">
                            <a data-bs-toggle="collapse" data-parent="#features" data-bs-target="#clOne" aria-controls="clOne" href="javascript:void(0);" aria-expanded="false">
                                <h4 class="property_block_title">{{__('Detail & Features')}}</h4>
                            </a>
                        </div>
                        <div id="clOne" class="panel-collapse collapse show" aria-labelledby="clOne">
                            <div class="block-body">
                                <ul class="detail_features">
                                    <li>
                                        <strong>{{__('Bedrooms')}}:</strong>
                                        {{$property->number_of_beds}} {{__('Beds')}}
                                    </li>
                                    <li>
                                        <strong>{{__('Bathrooms')}}:</strong>
                                        {{$property->number_of_bathrooms}} {{__('Bath')}}
                                    </li>
                                    <li>
                                        <strong>{{__('Square')}}:</strong>{{$property->square}} m²
                                    </li>
                                    <li>
                                        <strong>{{__('Floors')}}:</strong>{{$property->number_of_floors}}
                                    </li>
                                    <!-- <li> soon
                                        <strong>Property Type:</strong>Apartment
                                    </li> -->
                                </ul>
                            </div>
                        </div>

                    </div>


                    <!-- Single Block Wrap -->
                    <div class="property_block_wrap style-2">

                        <div class="property_block_wrap_header">
                            <a data-bs-toggle="collapse" data-parent="#dsrp" data-bs-target="#clTwo" aria-controls="clTwo" href="javascript:void(0);" aria-expanded="true">
                                <h4 class="property_block_title">{{__('Description')}}</h4>
                            </a>
                        </div>
                        <div id="clTwo" class="panel-collapse collapse show">
                            <div class="block-body">
                                <p>
                                    {{$property->description}}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Block Wrap - Amenities -->
                    <div class="property_block_wrap style-2">

                        <div class="property_block_wrap_header">
                            <a data-bs-toggle="collapse" data-parent="#amen" data-bs-target="#clThree" aria-controls="clThree" href="javascript:void(0);" aria-expanded="true">
                                <h4 class="property_block_title">{{__('Amenities')}}</h4>
                            </a>
                        </div>
                        <div id="clThree" class="panel-collapse collapse show">
                            <div class="block-body">
                                <ul class="avl-features third color">
                                    @foreach($property->features as $feature)

                                    <li>
                                        <i class="icon  fas fa-check "></i>
                                        <span>{{$feature->name}}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>


                    <!-- Single Block Wrap - Video -->


                    <!-- Single Block Wrap -->
                    <div class="property_block_wrap style-2">

                        <div class="property_block_wrap_header">
                            <a data-bs-toggle="collapse" data-parent="#loca" data-bs-target="#clSix" aria-controls="clSix" href="javascript:void(0);" aria-expanded="true" class="collapsed">
                                <h4 class="property_block_title">{{__('Location')}}</h4>
                            </a>
                        </div>

                        <div id="clSix" class="panel-collapse collapse show">
                            <div class="block-body">
                                <div id="zxcvbnm">
                                    <p>{{$property->location->name}}</p>
                                    <div class="traffic-map-container">
                                        <div class="row justify-content-center">
                                            <div class="col-12">
                                                <div id="map" data-lang="{{$property->location->longitude}}" data-lat="{{$property->location->latitude}}" class="w-100 h-100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="property_block_wrap style-2">

                        <div class="property_block_wrap_header">
                            <a data-bs-toggle="collapse" data-parent="#nearby" data-bs-target="#clNine" aria-controls="clNine" href="javascript:void(0);" aria-expanded="true">
                                <h4 class="property_block_title">{{__('Nearby')}}</h4>
                            </a>
                        </div>

                        <div id="clNine" class="panel-collapse collapse show">
                            <div class="block-body">
                                <div class="nearby-wrap">
                                    @foreach($property->facilities as $facility)
                                    <div class="neary_section_list">
                                        <div class="neary_section">
                                            <div class="neary_section_first">
                                                <h4 class="nearby_place_title"><i class=" fas fa-prescription-bottle-alt "></i> {{$facility->name}}</h4>
                                            </div>
                                            <div class="neary_section_last">
                                                <small class="reviews-count">{{$facility->pivot->distance}}km</small>
                                            </div>
                                        </div>

                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="property_block_wrap style-2">
                        <div class="property_block_wrap_header">
                            <a data-bs-toggle="collapse" data-parent="#features" data-bs-target="#clOne" aria-controls="clOne" href="javascript:void(0);" aria-expanded="false">
                                <h4 class="property_block_title">{{__('Youtube Video URL')}}</h4>
                            </a>
                        </div>
                        <div id="clOne" class="panel-collapse collapse show" aria-labelledby="clOne">
                            <div class="block-body">

                            </div>
                        </div>

                    </div>
                    
                    <div class="property_block_wrap style-2">
                        <div class="property_block_wrap_header">
                            <a data-bs-toggle="collapse" data-parent="#features" data-bs-target="#clOne" aria-controls="clOne" href="javascript:void(0);" aria-expanded="false">
                                <h4 class="property_block_title">{{__('Legal Information')}}</h4>
                            </a>
                        </div>
                        <div id="clOne" class="panel-collapse collapse show" aria-labelledby="clOne">
                            <div class="block-body">
                                <iframe width="560" height="315" src="{{ $property->video_url }}" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>

                    </div>













                    <!-- Single Block Wrap - Gallery -->
                    <!-- soon <div class="property_block_wrap style-2">

                        <div class="property_block_wrap_header">
                            <a data-bs-toggle="collapse" data-parent="#clSev" data-bs-target="#clSev" aria-controls="clOne" href="javascript:void(0);" aria-expanded="true" class="collapsed">
                                <h4 class="property_block_title"> Gallery</h4>
                            </a>
                        </div>

                        <div id="clSev" class="panel-collapse collapse show">
                            <div class="block-body">
                                <ul class="list-gallery-inline">
                                    <li>
                                        <a href="https://resido.thesky9.com/storage/properties/p-2.jpg" class="mfp-gallery">
                                            <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-2-400xauto.jpg" class="img-fluid mx-auto lazy" alt="2203 7th Street Road-0" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://resido.thesky9.com/storage/properties/p-18.jpg" class="mfp-gallery">
                                            <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-18-400xauto.jpg" class="img-fluid mx-auto lazy" alt="2203 7th Street Road-1" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://resido.thesky9.com/storage/properties/p-17.jpg" class="mfp-gallery">
                                            <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-17-400xauto.jpg" class="img-fluid mx-auto lazy" alt="2203 7th Street Road-2" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://resido.thesky9.com/storage/properties/p-19.jpg" class="mfp-gallery">
                                            <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-19-400xauto.jpg" class="img-fluid mx-auto lazy" alt="2203 7th Street Road-3" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://resido.thesky9.com/storage/properties/p-6.jpg" class="mfp-gallery">
                                            <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-6-400xauto.jpg" class="img-fluid mx-auto lazy" alt="2203 7th Street Road-4" />
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div> -->








                    <!-- Single Review -->
                    <!-- soon <div id="reviewWrapper">
                        <real-estate-reviews-component api-get-reviews="https://resido.thesky9.com/en/ajax/real-estate-reviews/3" api-get-rating="https://resido.thesky9.com/en/ajax/real-estate-rating/3" :review-fields="[{&quot;field&quot;:&quot;service&quot;},{&quot;field&quot;:&quot;value&quot;},{&quot;field&quot;:&quot;location&quot;},{&quot;field&quot;:&quot;cleanliness&quot;}]">
                        </real-estate-reviews-component>

                        <div class="property_block_wrap style-2">

                            <div class="property_block_wrap_header">
                                <a data-bs-toggle="collapse" data-parent="#comment" data-bs-target="#clTen" aria-controls="clTen" href="javascript:void(0);" aria-expanded="true">
                                    <h4 class="property_block_title">Write a Review</h4>

                                </a>
                                <p class="text-danger">Please <a class="text-danger" href="https://resido.thesky9.com/en/login">login</a> to write review!</p>
                            </div>

                            <div id="clTen" class="panel-collapse collapse show">
                                <div class="block-body">
                                    <form method="POST" action="https://resido.thesky9.com/en/review/create" accept-charset="UTF-8" class="form--review-product"><input name="_token" type="hidden" value="BuZlJMjMYmaK2H1WkZyNltEtcGArXWRQV4BULLXx">
                                        <input type="hidden" name="reviewable_id" value="3">
                                        <input type="hidden" name="reviewable_type" value="Botble\RealEstate\Models\Property">
                                        <div class="row py-3">
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <label for="select-star">Service</label>
                                                        <select class="rating" name="meta[service]" id="select-star-service" data-read-only="false" disabled>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5" selected>5</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <label for="select-star">Value for Money</label>
                                                        <select class="rating" name="meta[value]" id="select-star-value" data-read-only="false" disabled>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5" selected>5</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <label for="select-star">Location</label>
                                                        <select class="rating" name="meta[location]" id="select-star-location" data-read-only="false" disabled>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5" selected>5</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <label for="select-star">Cleanliness</label>
                                                        <select class="rating" name="meta[cleanliness]" id="select-star-cleanliness" data-read-only="false" disabled>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5" selected>5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                <div class="avg-total-pilx">
                                                    <input type="hidden" name="star" value="5">
                                                    <h4 class="high user_commnet_avg_rate">5</h4>
                                                    <span>Average Rating</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <textarea name="comment" class="form-control ht-80" placeholder="Messages" disabled></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <button class="btn btn-theme-light-2 rounded" type="submit" disabled>Submit Review</button>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div> -->
                </div>

                <!-- property Sidebar -->
                <div class="col-lg-4 col-md-12 col-sm-12">

                    <!-- Like And Share -->
                    <div class="like_share_wrap b-0">
                        <ul class="like_share_list justify-content-center">
                            <li class="social_share_list">
                                <a href="JavaScript:void(0);" class="btn btn-likes" data-bs-toggle="tooltip" data-original-title="{{__('Share')}}"><i class="fas fa-share"></i> {{__('Share')}}</a>
                                <div class="social_share_panel">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{route('properties.details',$property->id)}}title={{$property->description}}." target="_blank" class="cl-facebook"><i class="lni-facebook"></i></a>
                                    <a href="https://twitter.com/intent/tweet?url={{route('properties.details',$property->id)}}text={{$property->description}}." target="_blank" class="cl-twitter"><i class="lni-twitter"></i></a>
                                    <a href="https://linkedin.com/shareArticle?mini=true&url={{route('properties.details',$property->id)}}summary={{$property->description}}.&source=Linkedin" target="_blank" class="cl-linkedin"><i class="lni-linkedin"></i></a>
                                    <a href="https://api.whatsapp.com/send?text={{$property->description}}. {{route('properties.details',$property->id)}}" data-action="share/whatsapp/share" target="_blank" class="cl-linkedin"><i class="lni-whatsapp"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="details-sidebar">
                        <!-- Agent Detail -->
                        <div class="sides-widget">
                            <div class="sides-widget-header">
                                <div class="agent-photo">
                                    @php
                                    $user = Auth::user();
                                    $profileImage = optional($user)->getFirstMediaUrl('profile_images');
                                    @endphp
                                    <img src="{{ $profileImage ?: asset('custom/profile.jpeg') }}" alt="{{$property->user->first_name}} {{$property->user->middle_name}}" width="50" height="50">
                                </div>
                                <div class="sides-widget-details">
                                    <h4>
                                        <a href="{{route('brokers.details',$property->user->id)}}"> {{$property->user->first_name}} {{$property->user->middle_name}}</a>
                                    </h4>
                                    <a href="tel:{{$property->user->phone}} "> <span><i class="lni-phone-handset"></i>{{$property->user->phone}} </span></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="sides-widget-body simple-form">
                                <form method="POST" action="#" accept-charset="UTF-8" class="consult-form" id="consult-form"><input name="_token" type="hidden" value="BuZlJMjMYmaK2H1WkZyNltEtcGArXWRQV4BULLXx">
                                    <div class="row">
                                        <input type="hidden" name="data_id" value="3">
                                        <div class="form-group">
                                            <input class="form-control" name="name" id="name" type="text" placeholder="{{__('Name')}} *" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control" placeholder="{{__('Phone')}} *" data-validation-engine="validate[required]" data-errormessage-value-missing="Please enter phone number!">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="email" id="email" type="email" placeholder="{{__('Email')}}">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="{{__('Subject')}} *" value="{{$property->location->name}} " readonly>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="content" class="form-control" rows="5" placeholder="{{__('Message')}}"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-black btn-md rounded full-width" type="submit">{{__('Send Message')}}</button>
                                        </div>
                                        <div class="clearfix"></div>
                                        <br>
                                        <div class="alert alert-success text-success text-left" style="display: none;">
                                            <span></span>
                                        </div>
                                        <div class="alert alert-danger text-danger text-left" style="display: none;">
                                            <span></span>
                                        </div>
                                    </div>


                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <div data-magnific-popup="#trafficMap" data-map-id="trafficMap" data-popup-id="#traffic-popup-map-template" data-map-icon="For Rent: $218,103" data-center="[&quot;38.142768&quot;,&quot;-85.7717132&quot;]">
    </div>



    </script>
    <!-- ============================ Property Detail End ================================== -->

</div>
@section('styles')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
@endsection

@section('scripts')

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script>
    // Get longitude and latitude from data attributes
    var lang = document.getElementById('map').getAttribute('data-lang');
    var lat = document.getElementById('map').getAttribute('data-lat');

    // Initialize the map
    var map = L.map('map').setView([lat, lang], 15);

    // Add a base layer (e.g., OpenStreetMap)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
    }).addTo(map);

    // Add a marker at the property's location
    L.marker([lat, lang]).addTo(map);
</script>
@endsection