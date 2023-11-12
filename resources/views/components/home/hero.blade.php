<div class="image-cover hero-banner" style="background:url(https://resido.thesky9.com/storage/banners/banner-1.jpg) no-repeat;">
    <div class="container">
        <div class="hero-search-wrap">
            <div class="hero-search">
                <h1>{{__('Find accessible homes to rent')}}</h1>
            </div>
            <form action="{{route('properties')}}" method="GET" id="frmhomesearch">
                <div class="hero-search-content side-form">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <div class="input-with-icon">
                                    <input type="text" name="location" class="form-control" placeholder="{{__('Search for a location')}}">
                                    <img src="{{asset('themes/resido/img/pin.svg')}}" width="18" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>{{__('Min Price')}}</label>
                                <select id="minprice" data-placeholder="{{__('No Min')}}" name="min_price" class="form-control">
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
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>{{__('Max Price')}}</label>
                                <select id="maxprice" data-placeholder="{{__('No Max')}}" name="max_price" class="form-control">
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
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>{{__('Property Type')}}</label>
                                <select id="ptypes" data-placeholder="{{__('Category')}}" name="category_id" data-url="https://resido.thesky9.com/en/ajax/sub-categories" class="form-control has-sub-category">
                                    <option value="">&nbsp;</option>
                                    <option value="1">
                                        {{__('Apartment')}}
                                    </option>
                                    <option value="2">
                                        {{__('Villa')}}
                                    </option>
                                    <option value="3">
                                        {{__('Condo')}}
                                    </option>
                                    <option value="4">
                                        {{__('House')}}
                                    </option>
                                    <option value="5">
                                        {{__('Land')}}
                                    </option>
                                    <option value="6">
                                        {{__('Commercial property')}}
                                    </option>
                                </select>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>{{__('Bed Rooms')}}</label>
                                <select id="select-bedroom" data-placeholder="{{__('Bedroom')}}" name="bedroom" class="form-control">
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

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>{{__('Property Location')}}</label>
                                <select data-placeholder="City" class="form-control" data-url="" name="city_id" id="">
                                    @foreach($cities as $city)
                                    <option value="{{$city->id}}">{{$city->name}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="hero-search-action">
                    <button class="btn search-btn" type="submit">{{__('Search Result')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>