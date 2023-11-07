@extends('dashboard.layouts.dashboard-layout')
@section('content')
<section class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="filter_search_opt">
                    <a href="javascript:void(0);" class="open_search_menu">
                        Dashboard Navigation
                        <i class="ml-2 ti-menu"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            @include('dashboard.layouts.dashboard-sidebar')

            <div class="col-lg-9 col-md-12">
                <div id="app">
                    <div class="dashboard-wraper1">
                        <form accept-charset="UTF-8" id="botble-real-estate-forms-account-property-form" class="js-base-form dirty-check" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="row">

                                <div class="col-md-9">
                                    <div class="dashboard-wraper">
                                        <div class="main-form">
                                            <div class="form-body">
                                                <div class="form-group mb-3">

                                                    <label for="title" class="control-label required">Title</label>
                                                    <input readonly value="{{$property->title}}" class="form-control" placeholder="Title" data-counter="120" v-pre name="title" type="text" id="title">



                                                </div>


                                                <div class="form-group mb-3 ">
                                                    <div id="edit-slug-box" data-field-name="name" class="hidden">
                                                        <label for="current-slug" class="control-label me-1 required">Permalink</label>
                                                        <span class="d-inline-block" id="sample-permalink" dir="ltr">
                                                            : <a class="permalink" href="https://resido.thesky9.com/en/properties/" target="_blank">
                                                                <span class="default-slug">https://resido.thesky9.com/en/properties/<span id="editable-post-name"></span></span>
                                                            </a>
                                                        </span>
                                                        <span id="edit-slug-buttons">
                                                            <button class="btn btn-secondary ms-1" id="change_slug" type="button">Edit</button>
                                                            <button class="save btn btn-secondary ms-1" id="btn-ok" type="button">OK</button>
                                                            <button class="cancel button-link ms-1" type="button">Cancel</button>
                                                        </span>

                                                        <input readonly id="current-slug" name="slug" type="hidden" value="">
                                                        <div id="slug_id" data-url="https://resido.thesky9.com/ajax/slug/create" data-view="https://resido.thesky9.com/en/properties/" data-id="0"></div>
                                                        <input readonly name="slug_id" type="hidden" value="0">
                                                        <input readonly name="is_slug_editable" type="hidden" value="1">
                                                    </div>


                                                </div>

                                                <div class="form-group mb-3">

                                                    <label for="description" class="control-label">Description</label>
                                                    <textarea readonly class="form-control" rows="4" placeholder="Short description" data-counter="350" v-pre name="description" cols="50" id="description">
                                                    {{$property->description}}
                                                    </textarea>



                                                </div>

  

                                                <div class="form-group mb-3">

                                                    <label for="images" class="control-label">Images</label>

                                                    <input class="form-control" v-pre name="images[]" type="file" id="images" multiple>
                                                    <!-- <div id="multiple-upload" class="dropzone needsclick">
                                                        <div class="dz-message needsclick">
                                                            Drop files here or click to upload.<br>
                                                        </div>
                                                    </div> -->


                                                </div>

                                                <div id="preview-template" style="display: none;">
                                                    <div class="dz-preview dz-file-preview">
                                                        <div class="dz-image"><img data-dz-thumbnail="" /></div>
                                                        <div class="dz-details">
                                                            <div class="dz-size"><SPAN data-dz-size=""></SPAN></div>
                                                            <div class="dz-filename"><SPAN data-dz-name=""></SPAN></div>
                                                        </div>
                                                        <div class="dz-progress"><SPAN class="dz-upload" data-dz-uploadprogress=""></SPAN></div>
                                                        <div class="dz-error-message"><SPAN data-dz-errormessage=""></SPAN></div>
                                                        <div class="dz-success-mark">
                                                            <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                                                <title>Check</title>
                                                                <defs></defs>
                                                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                                                    <path d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" stroke-opacity="0.198794158" stroke="#747474" fill-opacity="0.816519475" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div class="dz-error-mark">
                                                            <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                                                <title>Error</title>
                                                                <defs></defs>
                                                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                                                    <g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474" stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475">
                                                                        <path d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" sketch:type="MSShapeGroup"></path>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group mb-3">

                                                    <label for="city_id" class="control-label">City</label>

                                                    <div class="ui-select-wrapper form-group ">
                                                        <select disabled class="form-control select-search-full ui-select" v-pre id="city_id" name="city_id">
                                                            @foreach($cities as $city)
                                                            <option value="{{$city->id}}">{{$city->name}} ({{$city->town->name}})</option>
                                                            @endforeach
                                                        </select>

                                                        <svg class="svg-next-icon svg-next-icon-size-16">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                <path d="M10 16l-4-4h8l-4 4zm0-12L6 8h8l-4-4z"></path>
                                                            </svg>
                                                        </svg>
                                                    </div>



                                                </div>

                                                <div class="form-group mb-3">

                                                    <label for="location" class="control-label required">Property location</label>
                                                    <input readonly value="{{$property->location->name}}" class="form-control" placeholder="Property location" data-counter="300" v-pre name="location" type="text" id="location">



                                                </div>

                                                <div class="row">
                                                    <div></div>


                                                    <div class="form-group mb-3 col-md-6">

                                                        <label for="latitude" class="control-label">Latitude</label>
                                                        <input readonly value="{{$property->location->longitude}}" class="form-control" placeholder="Ex: 1.462260" data-counter="25" v-pre name="latitude" type="text" id="latitude">
                                                        <a class="help-block" href="https://www.latlong.net/convert-address-to-lat-long.html" target="_blank" rel="nofollow">
                                                            Go here to get Latitude from address. </a>



                                                    </div>

                                                    <div class="form-group mb-3 col-md-6">

                                                        <label for="longitude" class="control-label">Longitude</label>
                                                        <input readonly value="{{$property->location->latitude}}" class="form-control" placeholder="Ex: 103.812530" data-counter="25" v-pre name="longitude" type="text" id="longitude">
                                                        <a class="help-block" href="https://www.latlong.net/convert-address-to-lat-long.html" target="_blank" rel="nofollow">
                                                            Go here to get Longitude from address. </a>



                                                    </div>

                                                </div>


                                                <div class="row">


                                                    <div class="form-group mb-3 col-md-3">

                                                        <label for="number_of_bedrooms" class="control-label">Number bedrooms</label>
                                                        <input readonly value="{{$property->number_of_bedrooms}}" class="form-control" placeholder="Number bedrooms" v-pre name="number_of_bedrooms" type="number" id="number_of_bedrooms">



                                                    </div>

                                                    <div class="form-group mb-3 col-md-3">

                                                        <label for="number_of_bathrooms" class="control-label">Number bathrooms</label>
                                                        <input readonly value="{{$property->number_of_bathrooms}}" class="form-control" placeholder="Number bathrooms" v-pre name="number_of_bathrooms" type="number" id="number_of_bathrooms">



                                                    </div>

                                                    <div class="form-group mb-3 col-md-3">

                                                        <label for="number_of_floors" class="control-label">Number floors</label>
                                                        <input readonly value="{{$property->number_of_floors}}" class="form-control" placeholder="Number floors" v-pre name="number_of_floors" type="number" id="number_of_floor">



                                                    </div>

                                                    <div class="form-group mb-3 col-md-3">

                                                        <label for="square" class="control-label">Square (m&sup2;)</label>
                                                        <input readonly value="{{$property->square}}" class="form-control" placeholder="Square :unit" v-pre name="square" type="number" id="square">



                                                    </div>

                                                </div>


                                                <div class="row">


                                                    <div class="form-group mb-3 col-md-4">

                                                        <label for="price" class="control-label">Price</label>
                                                        <input readonly value="{{$property->price}}" class="form-control input-mask-number" id="price-number" placeholder="Price" v-pre name="price" type="text">



                                                    </div>

                                                    <div class="form-group mb-3 col-md-4">

                                                        <label for="currency_id" class="control-label">Currency</label>

                                                        <div class="ui-select-wrapper form-group ">
                                                            <select disabled class="form-control select-full ui-select" v-pre id="currency_id" name="currency_id">
                                                                @if($property->currency_id == App\Models\Currency::USD)
                                                                <option selected value="{{App\Models\Currency::USD}}">USD</option>
                                                                <option value="{{App\Models\Currency::SAR}}">SAR</option>
                                                                @else
                                                                <option value="{{App\Models\Currency::USD}}">USD</option>
                                                                <option selected value="{{App\Models\Currency::SAR}}">SAR</option>
                                                                @endif
                                                            </select>
                                                            <svg class="svg-next-icon svg-next-icon-size-16">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                    <path d="M10 16l-4-4h8l-4 4zm0-12L6 8h8l-4-4z"></path>
                                                                </svg>
                                                            </svg>
                                                        </div>



                                                    </div>

                                                    <div class="form-group period-form-group mb-3 col-md-4">

                                                        <label for="period" class="control-label required">Period</label>

                                                        <div class="ui-select-wrapper form-group ">
                                                            <select disabled class="form-control select-search-full ui-select" v-pre id="period" name="period">
                                                                <option value="day">Day</option>
                                                                <option value="month">Month</option>
                                                                <option value="year">Year</option>
                                                            </select>
                                                            <svg class="svg-next-icon svg-next-icon-size-16">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                    <path d="M10 16l-4-4h8l-4 4zm0-12L6 8h8l-4-4z"></path>
                                                                </svg>
                                                            </svg>
                                                        </div>



                                                    </div>

                                                </div>


                                                <div class="form-group mb-3">

                                                    <label for="auto_renew" class="control-label">Renew automatically (you will be charged again in 45 days)?</label>

                                                    <div class="onoffswitch">
                                                        <input readonly value="{{$property->auto_renw}}" name="auto_renew" type="hidden" value="0">
                                                        @if($property->auto_renew)
                                                        <input readonly checked class="onoffswitch-checkbox" id="auto_renw" name="auto_renew" type="checkbox" value="1" class="form-control" v-pre>
                                                        @else
                                                        <input readonly class="onoffswitch-checkbox" id="auto_renw" name="auto_renew" type="checkbox" value="1" class="form-control" v-pre>
                                                        @endif
                                                        <label class="onoffswitch-label" for="auto_renw">
                                                            <span class="onoffswitch-inner"></span>
                                                            <span class="onoffswitch-switch"></span>
                                                        </label>
                                                    </div>



                                                </div>

                                                <div class="form-group mb-3">

                                                    <label for="label" class="control-label">Property label</label>
                                                    <input readonly value="{{$property->label}}" class="form-control" v-pre name="label" type="text" id="label">



                                                </div>

                                                <div class="clearfix"></div>
                                            </div>
                                        </div>

                                        <div class="widget meta-boxes">
                                            <div class="widget-title">
                                                <h4>
                                                    <span> Distance key between facilities</span>
                                                </h4>
                                            </div>
                                            <div class="widget-body">
                                                <div id="app-real-estate">
                                                    @if(count($facilities) > 0)
                                                    <facilities-component :selected_facilities="[]" :facilities="{{ json_encode($facilities) }}"></facilities-component>
                                                    @else
                                                    <p>No facilities available.</p>
                                                    @endif
                                                </div>


                                            </div>
                                        </div>


                                        <div class="widget meta-boxes">
                                            <div class="widget-title">
                                                <h4>
                                                    <span> Type</span>
                                                </h4>
                                            </div>
                                            <div class="widget-body">
                                                <div class="form-group">
                                                    <label for="description" class="control-label required">Type</label>
                                                    <div class="ui-select-wrapper form-group">
                                                        <select disabled class="form-control ui-select is-valid" name="property_type_id" id="property_type_id">
                                                            @if($property->property_type_id == App\Models\PropertyType::SALE)
                                                            <option value="1" selected data-code="sale">For Sale</option>
                                                            <option value="2" data-code="rent">For Rent</option>
                                                            @else
                                                            <option value="1" data-code="sale">For Sale</option>
                                                            <option value="2" selected data-code="rent">For Rent</option>
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="widget meta-boxes">
                                            <div class="widget-title">
                                                <h4>
                                                    <span> Features</span>
                                                </h4>
                                            </div>
                                            <div class="widget-body">
                                                @foreach($features as $feature)
                                                <label class="checkbox-inline">
                                                    <input readonly type="checkbox" name="features[]" value="{{ $feature->id }}" {{ $property->features->contains($feature->id) ? 'checked' : '' }}>
                                                    {{ $feature->name }}
                                                </label>&nbsp;
                                                @endforeach

                                            </div>
                                        </div>



                                        <div class="meta-box-sortables" id="advanced-sortables">
                                            <div class="widget meta-boxes" id="youtube">
                                                <div class="widget-title">
                                                    <h4><span>Addition Information</span></h4>
                                                </div>
                                                <div class="widget-body">


                                                    <div class="form-group mb-3">
                                                        <label class="control-label" for="video_url">Youtube Video URL</label>
                                                        <input readonly value="{{$property->video_url}}" id="video_url" class="form-control" placeholder="https://www.youtube.com/watch?v=FN7ALfpGxiI" data-counter="255" name="video[url]" type="text" value="">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="widget meta-boxes" id="seo_wrap">
                                                <div class="widget-title">
                                                    <h4><span>Search Engine Optimize</span></h4>
                                                </div>
                                                <div class="widget-body">
                                                    <a class="btn-trigger-show-seo-detail" href="#" v-pre>Edit SEO meta</a>
                                                    <div class="seo-preview" v-pre>
                                                        <p class="default-seo-description ">
                                                            Setup meta title &amp; description to make your site easy to discovered on search engines such as Google</p>
                                                        <div class="existed-seo-meta  hidden ">
                                                            <span class="page-title-seo">

                                                            </span>

                                                            <div class="page-url-seo ws-nm">
                                                                <p>-</p>
                                                            </div>

                                                            <div class="ws-nm">
                                                                <span style="color: #70757a;">Nov 02, 2023
                                                                    - </span>
                                                                <span class="page-description-seo">

                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="seo-edit-section hidden" v-pre>
                                                        <hr>
                                                        <div class="form-group mb-3">
                                                            <label class="control-label" for="seo_title">SEO Title</label>
                                                            <input readonly value="{{$property->seo_title}}" class="form-control" id="seo_title" placeholder="SEO Title" data-counter="120" name="seo_meta[seo_title]" type="text">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label class="control-label" for="seo_description">SEO description</label>
                                                            <textarea readonly class="form-control" rows="3" id="seo_description" placeholder="SEO description" data-counter="160" name="seo_meta[seo_description]" cols="50">
                                                            {{$property->seo_description}}
                                                            </textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                        </form>
                        <div class="col-md-3 right-sidebar">
                            <div class="dashboard-wraper">
                                <div class="widget meta-boxes form-actions form-actions-default action-horizontal">
                                    <div class="widget-title">
                                        <h4>
                                            <span>Publish</span>
                                        </h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="btn-set">
                                            @if($property->status_id == App\Models\Status::ACCEPTED)
                                            <form action="{{route('admin.properties.reject',$property->id)}}" method="post">
                                                @csrf

                                                <button type="submit" name="submit" value="save" class="btn btn-sm btn-danger">
                                                    <i class="fa fa-times"></i> Reject
                                                </button>
                                            </form>
                                            @else
                                            <form action="{{route('admin.properties.accept',$property->id)}}" method="post">
                                                @csrf

                                                <button type="submit" name="submit" value="apply" class="btn btn-sm btn-success">
                                                    <i class="fa fa-check-circle"></i> Accept
                                                </button>
                                            </form>
                                            @endif


                                            &nbsp;
                                        </div>
                                    </div>
                                </div>
                                <div class="meta-box-sortables" id="top-sortables">
                                    <div class="widget meta-boxes" id="additional_property_fields">
                                        <div class="widget-title">
                                            <h4><span>Custom layout</span></h4>
                                        </div>
                                        <div class="widget-body">
                                            <div class="form-group mb-3">
                                                <label for="header_layout" class="control-label">Header layout</label>
                                                <div class="ui-select-wrapper form-group ">
                                                    <select disabled class="form-control ui-select" id="header_layout" name="header_layout">
                                                        <option value="layout-1">Layout 1</option>
                                                        <option value="layout-2">Layout 2</option>
                                                        <option value="layout-3">Layout 3</option>
                                                    </select>
                                                    <svg class="svg-next-icon svg-next-icon-size-16">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                            <path d="M10 16l-4-4h8l-4 4zm0-12L6 8h8l-4-4z"></path>
                                                        </svg>
                                                    </svg>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="widget meta-boxes">
                                    <div class="widget-title">
                                        <h4><label for="category_id" class="control-label">Category</label></h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="ui-select-wrapper form-group ">
                                            <select disabled class="form-control select-search-full ui-select" v-pre id="category_id" name="category_id">
                                                @if($property->category_id)
                                                <option selected="selected" value="{{$property->category_id}}">{{$property->category->name}}</option>
                                                @endif
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                            <svg class="svg-next-icon svg-next-icon-size-16">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M10 16l-4-4h8l-4 4zm0-12L6 8h8l-4-4z"></path>
                                                </svg>
                                            </svg>
                                        </div>




                                    </div>
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
@endsection