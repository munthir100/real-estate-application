<div class="full-search-2 eclip-search italian-search hero-search-radius shadow-hard">
    <div class="hero-search-content">
        <form action="{{route('properties')}}" method="GET" id="frmhomesearch">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 b-r">
                    <div class="form-group">
                        <div class="choose-property-type">
                            <ul>
                                <li>
                                    <input id="cp-sale" value="sale" class="checkbox-custom" name="type" type="radio" checked>
                                    <label for="cp-sale" class="checkbox-custom-label">For Sale</label>
                                </li>
                                <li>
                                    <input id="cp-rent" value="rent" class="checkbox-custom" name="type" type="radio">
                                    <label for="cp-rent" class="checkbox-custom-label">For Rent</label>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-5 col-sm-12 p-0 elio">
                    <div class="form-group">
                        <div class="input-with-icon">
                            <div class="input-with-icon">
                                <input type="text" class="form-control" name="city" value="" placeholder="Search for a location">
                                <img src="{{asset('themes/resido/img/pin.svg')}}" width="20">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-sm-12">
                    <div class="form-group">
                        <button type="submit" class="btn search-btn">Search</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>