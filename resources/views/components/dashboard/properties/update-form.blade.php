@php
$cities = App\Models\City::all();
$currencies = App\Models\Currency::all();
$categories = App\Models\Category::all();
$features = App\Models\Feature::all();
$facilities = App\Models\Facility::all();
@endphp
<div class="row">

    <div class="col-md-9">
        <div class="dashboard-wraper">
            <div class="main-form">
                <div class="form-body">
                    <div class="form-group mb-3">

                        <label for="title" class="control-label required">{{__('Title')}}</label>
                        <input value="{{$property->title}}" class="form-control" placeholder="{{__('Title')}}" data-counter="120" v-pre name="title" type="text" id="title">



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
                                <button class="cancel button-link ms-1" type="button">{{__('Cancel')}}</button>
                            </span>

                            <input id="current-slug" name="slug" type="hidden" value="">
                            <div id="slug_id" data-url="https://resido.thesky9.com/ajax/slug/create" data-view="https://resido.thesky9.com/en/properties/" data-id="0"></div>
                            <input name="slug_id" type="hidden" value="0">
                            <input name="is_slug_editable" type="hidden" value="1">
                        </div>


                    </div>

                    <div class="form-group mb-3">

                        <label for="description" class="control-label">{{__('Description')}}</label>
                        <textarea class="form-control" rows="4" placeholder="{{__('Short description')}}" data-counter="350" v-pre name="description" cols="50" id="description">
                        {{$property->description}}
                        </textarea>



                    </div>


                    <div class="form-group mb-3">

                        <label for="images" class="control-label">{{__('Images')}}</label>

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
                                    <title>{{__('Check')}}</title>
                                    <defs></defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                        <path d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" stroke-opacity="0.198794158" stroke="#747474" fill-opacity="0.816519475" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="dz-error-mark">
                                <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                    <title>{{__('Error')}}</title>
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

                        <label for="city_id" class="control-label">{{__('City')}}</label>

                        <div class="ui-select-wrapper form-group ">
                            <select class="form-control select-search-full ui-select" v-pre id="city_id" name="city_id">
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

                        <label for="location" class="control-label required">{{__('Property location')}}</label>
                        <input value="{{$property->location->name}}" class="form-control" placeholder="Property location" data-counter="300" v-pre name="location" type="text" id="location">



                    </div>

                    <div class="row">
                        <div></div>


                        <div class="form-group mb-3 col-md-6">

                            <label for="latitude" class="control-label">{{__('Latitude')}}</label>
                            <input value="{{$property->location->longitude}}" class="form-control" placeholder="Ex: 1.462260" data-counter="25" v-pre name="latitude" type="text" id="latitude">
                            <a class="help-block" href="https://www.latlong.net/convert-address-to-lat-long.html" target="_blank" rel="nofollow">
                                {{__('Go here to get Latitude from address')}}. </a>



                        </div>

                        <div class="form-group mb-3 col-md-6">

                            <label for="longitude" class="control-label">{{__('Longitude')}}</label>
                            <input value="{{$property->location->latitude}}" class="form-control" placeholder="Ex: 103.812530" data-counter="25" v-pre name="longitude" type="text" id="longitude">
                            <a class="help-block" href="https://www.latlong.net/convert-address-to-lat-long.html" target="_blank" rel="nofollow">
                                {{__('Go here to get Longitude from address')}}. </a>



                        </div>

                    </div>


                    <div class="row">


                        <div class="form-group mb-3 col-md-3">

                            <label for="number_of_bedrooms" class="control-label">{{__('Number bedrooms')}}</label>
                            <input value="{{$property->number_of_bedrooms}}" class="form-control" placeholder="{{__('Number bedrooms')}}" v-pre name="number_of_bedrooms" type="number" id="number_of_bedrooms">



                        </div>

                        <div class="form-group mb-3 col-md-3">

                            <label for="number_of_bathrooms" class="control-label">{{__('Number bathrooms')}}</label>
                            <input value="{{$property->number_of_bathrooms}}" class="form-control" placeholder="{{__('Number bathrooms')}}" v-pre name="number_of_bathrooms" type="number" id="number_of_bathrooms">



                        </div>

                        <div class="form-group mb-3 col-md-3">

                            <label for="number_of_floors" class="control-label">{{__('Number floors')}}</label>
                            <input value="{{$property->number_of_floors}}" class="form-control" placeholder="Number floors" v-pre name="number_of_floors" type="number" id="number_of_floor">



                        </div>

                        <div class="form-group mb-3 col-md-3">

                            <label for="square" class="control-label">{{__('Square')}} </label>
                            <input value="{{$property->square}}" class="form-control" placeholder="{{__('Square (m²)')}}" v-pre name="square" type="number" id="square">



                        </div>

                    </div>


                    <div class="row">


                        <div class="form-group mb-3 col-md-4">

                            <label for="price" class="control-label">{{__('Price')}}</label>
                            <input value="{{$property->price}}" class="form-control input-mask-number" id="price-number" placeholder="{{__('Price')}}" v-pre name="price" type="text">



                        </div>

                        <div class="form-group mb-3 col-md-4">

                            <label for="currency_id" class="control-label">{{__('Currency')}}</label>

                            <div class="ui-select-wrapper form-group ">
                                <select class="form-control select-full ui-select" v-pre id="currency_id" name="currency_id">
                                    @if($property->currency_id == App\Models\Currency::USD)
                                    <option selected value="{{App\Models\Currency::USD}}">{{__('USD')}}</option>
                                    <option value="{{App\Models\Currency::SAR}}">SAR</option>
                                    @else
                                    <option value="{{App\Models\Currency::USD}}">USD</option>
                                    <option selected value="{{App\Models\Currency::SAR}}">{{__('SAR')}}</option>
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

                            <label for="period" class="control-label required">{{__('Period')}}</label>

                            <div class="ui-select-wrapper form-group ">
                                <select class="form-control select-search-full ui-select" v-pre id="period" name="period">
                                    <option value="day">{{__('Day')}}</option>
                                    <option value="month">{{__('Month')}}</option>
                                    <option value="year">{{__('Year')}}</option>
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

                        <label for="label" class="control-label">{{__('Property label')}}</label>
                        <input value="{{$property->label}}" class="form-control" v-pre name="label" type="text" id="label">



                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="widget meta-boxes">
                <div class="widget-title">
                    <h4>
                        <span> {{__('Distance key between facilities')}}</span>
                    </h4>
                </div>
                <div class="widget-body">
                    <div id="app-real-estate">
                        @if(count($facilities) > 0)
                        <facilities-component :selected_facilities="[]" :facilities="{{ json_encode($facilities) }}"></facilities-component>
                        @else
                        <p>{{__('No facilities available')}}.</p>
                        @endif
                    </div>


                </div>
            </div>


            <div class="widget meta-boxes">
                <div class="widget-title">
                    <h4>
                        <span> {{__('Type')}}</span>
                    </h4>
                </div>
                <div class="widget-body">
                    <div class="form-group">
                        <label for="description" class="control-label required">{{__('Type')}}</label>
                        <div class="ui-select-wrapper form-group">
                            <select class="form-control ui-select is-valid" name="property_type_id" id="property_type_id">
                                @if($property->property_type_id == App\Models\PropertyType::SALE)
                                <option value="1" selected data-code="sale">{{__('For Sale')}}</option>
                                <option value="2" data-code="rent">{{__('For Rent')}}</option>
                                @else
                                <option value="1" selected data-code="sale">{{__('For Sale')}}</option>
                                <option value="2" data-code="rent">{{__('For Rent')}}</option>
                                @endif
                            </select>
                        </div>
                    </div>

                </div>
            </div>


            <div class="widget meta-boxes">
                <div class="widget-title">
                    <h4>
                        <span> {{__('Features')}}</span>
                    </h4>
                </div>
                <div class="widget-body">
                    @foreach($features as $feature)
                    <label class="checkbox-inline">
                        <input type="checkbox" name="features[]" value="{{ $feature->id }}" {{ $property->features->contains($feature->id) ? 'checked' : '' }}>
                        {{ __($feature->name) }}
                    </label>&nbsp;
                    @endforeach

                </div>
            </div>



            <div class="meta-box-sortables" id="advanced-sortables">
                <div class="widget meta-boxes" id="youtube">
                    <div class="widget-title">
                        <h4><span>{{__('Addition Information')}}</span></h4>
                    </div>
                    <div class="widget-body">


                        <div class="form-group mb-3">
                            <label class="control-label" for="video_url">{{__('Youtube Video URL')}}</label>
                            <input value="{{$property->video_url}}" id="video_url" class="form-control" placeholder="https://www.youtube.com/watch?v=FN7ALfpGxiI" data-counter="255" name="video[url]" type="text" value="">
                        </div>

                    </div>
                </div>

                <x-dashboard.properties.legal-information-fields-update :property="$property"/>
                
                <div class="widget meta-boxes" id="seo_wrap">
                    <div class="widget-title">
                        <h4><span>{{__('Search Engine Optimize')}}</span></h4>
                    </div>
                    <div class="widget-body">
                        <a class="btn-trigger-show-seo-detail" href="#" v-pre>{{__('Edit SEO meta')}}</a>
                        <div class="seo-preview" v-pre>
                            <p class="default-seo-description ">
                                {{__('Setup meta title & description to make your site easy to discovered on search engines such as Google')}}
                            </p>
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
                                <label class="control-label" for="seo_title">{{__('SEO Title')}}</label>
                                <input value="{{$property->seo_title}}" class="form-control" id="seo_title" placeholder="{{__('SEO Title')}}" data-counter="120" name="seo_meta[seo_title]" type="text">
                            </div>
                            <div class="form-group mb-3">
                                <label class="control-label" for="seo_description">{{__('SEO description')}}</label>
                                <textarea class="form-control" rows="3" id="seo_description" placeholder="{{__('SEO description')}}" data-counter="160" name="seo_meta[seo_description]" cols="50">
                                {{$property->seo_description}}
                                </textarea>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-md-3 right-sidebar">
        <div class="dashboard-wraper">
            <div class="widget meta-boxes form-actions form-actions-default action-horizontal">
                <div class="widget-title">
                    <h4>
                        <span>{{__('Publish')}}</span>
                    </h4>
                </div>
                <div class="widget-body">
                    <div class="btn-set">
                        <button type="submit" name="submit" value="save" class="btn btn-sm btn-info">
                            <i class="fa fa-save"></i> {{__('Save & Exit')}}
                        </button>

                    </div>
                </div>
            </div>
            <div class="meta-box-sortables" id="top-sortables">
                <div class="widget meta-boxes" id="additional_property_fields">
                    <div class="widget-title">
                        <h4><span>{{__('Custom layout')}}</span></h4>
                    </div>
                    <div class="widget-body">
                        <div class="form-group mb-3">
                            <label for="header_layout" class="control-label">Header layout</label>
                            <div class="ui-select-wrapper form-group ">
                                <select class="form-control ui-select" id="header_layout" name="header_layout">
                                    <option value="layout-1">{{__('Layout 1')}}</option>
                                    <option value="layout-2">{{__('Layout 2')}}</option>
                                    <option value="layout-3">{{__('Layout 3')}}</option>
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
                    <h4><label for="category_id" class="control-label">{{__('Category')}}</label></h4>
                </div>
                <div class="widget-body">
                    <div class="ui-select-wrapper form-group ">
                        <select class="form-control select-search-full ui-select" v-pre id="category_id" name="category_id">
                            @if($property->category_id)
                            <option selected="selected" value="{{$property->category_id}}">{{__($property->category->name)}}</option>
                            @endif
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{__($category->name)}}</option>
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