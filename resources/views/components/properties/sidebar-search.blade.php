<div class="simple-sidebar sm-sidebar" id="filter_search" style="left: -310px;">
    <div class="search-sidebar_header">
        <h4 class="ssh_heading">Close Filter</h4>
        <button class="w3-bar-item w3-button w3-large close_search_menu"><i class="ti-close"></i></button>
    </div>

    <!-- Find New Property -->
    <div class="sidebar-widgets">

        <!-- Find New Property -->
        <div class="sidebar-widgets">
            <form action="{{route('properties')}}" method="get" id="filters-form">
                <div class="form-group simple">
                    <div class="input-with-icon">
                        <div class="input-with-icon">
                            <input type="text" class="form-control" name="location" value="{{ $userSearchCriteria['location'] ?? '' }}" placeholder="Search for a location"> <img src="{{asset('themes/resido/img/pin.svg')}}" width="20">
                        </div>

                    </div>
                </div>
                <div class="form-group simple">
                    <select id="select-bedroom" data-placeholder="City" name="city_id" class="form-control">
                        <option value="">&nbsp;</option>
                        @foreach(App\Models\City::all() as $city)
                        <option value="{{ $city->id }}" @if(isset($userSearchCriteria['city_id']) && $userSearchCriteria['city_id']==$city->id) selected @endif>{{ $city->name }}</option>
                        @endforeach
                    </select>

                </div>

                <div class="form-group simple">
                    <div class="simple-input">
                        <select id="ptypes" data-placeholder="Category" name="category_id" data-url="https://resido.thesky9.com/en/ajax/sub-categories" class="form-control has-sub-category">
                            <option value="">&nbsp;</option>
                            @foreach(App\Models\Category::all() as $category)
                            <option value="{{ $category->id }}" @if(isset($userSearchCriteria['category_id']) && $userSearchCriteria['category_id']==$category->id) selected @endif>{{ $category->name }}</option>
                            @endforeach
                        </select>

                    </div>
                </div>

                <div class="form-group simple">
                    <div class="simple-input">
                        <select id="select-type" data-placeholder="Type" class="form-control" name="type">
                            <option value="">-- Select --</option>
                            <option value="sale">For Sale
                            </option>
                            <option value="rent">For Rent
                            </option>
                        </select>

                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group simple">
                            <div class="simple-input">
                                <input type="text" class="form-control" name="min_price" value="{{ $userSearchCriteria['min_price'] ?? '' }}" placeholder="Min Price">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group simple">
                            <div class="simple-input">
                                <input type="text" class="form-control" name="max_price" value="{{ $userSearchCriteria['max_price'] ?? '' }}" placeholder="Max Price">


                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group simple">
                    <div class="simple-input">
                        <input type="text" class="form-control" name="bedroom" value="{{ $userSearchCriteria['bedroom'] ?? '' }}" placeholder="Bedrooms">


                    </div>
                </div>

                <div class="form-group simple">
                    <div class="simple-input">
                        <input type="text" class="form-control" name="bathroom" value="{{ $userSearchCriteria['bathroom'] ?? '' }}" placeholder="Bathroom">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group">
                            <div class="simple-input">
                                <input type="text" class="form-control" name="min_square" value="{{ $userSearchCriteria['min_square'] ?? '' }}" placeholder="Min Area">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group">
                            <div class="simple-input">
                                <input type="text" class="form-control" name="max_square" value="{{ $userSearchCriteria['max_square'] ?? '' }}" placeholder="Max Area">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="single_search_boxed">
                    <div class="widget-boxed-header">
                        <h4>
                            <a href="#features" data-bs-toggle="collapse" aria-expanded="true" role="button" class="">Advanced Search</a>
                        </h4>
                    </div>
                    <div class="widget-boxed-body collapse show" id="features" data-parent="#features">
                        <ul class="no-ul-list second-row">
                            @foreach(App\Models\Feature::all() as $feature)
                            <li>
                                <input id="features-{{ $feature->id }}" class="input-filter checkbox-custom" name="features[]" type="checkbox" value="{{ $feature->id }}" @if(isset($userSearchCriteria['features']) && in_array($feature->id, $userSearchCriteria['features'])) checked @endif>
                                <label for="features-{{ $feature->id }}" class="checkbox-custom-label">{{ $feature->name }}</label>
                            </li>
                            @endforeach


                        </ul>

                    </div>
                </div>

                <input type="hidden" id="filter_sort_by" name="sort_by" value="">

                <button class="btn btn btn-theme-light-2 rounded full-width mt-3" type="submit">Find New Home</button>
            </form>
        </div>
    </div>
</div>