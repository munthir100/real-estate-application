@extends('layouts.app-layout')
@section('title','Home')

@section('content')
<div id="app">
    <div id="ismain-homes">
        <div class="ck-content">
            <div>
                <div class="image-cover hero-banner" style="background:#eff6ff url(https://resido.thesky9.com/storage/banners/home-2.png) no-repeat;">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-9 col-md-11 col-sm-12">
                                <div class="inner-banner-text text-center">
                                    <p class="lead-i">Amet consectetur adipisicing New</p>
                                    <h2>Find Your Perfect Place.</h2>
                                </div>
                                <div class="full-search-2 eclip-search italian-search hero-search-radius shadow-hard mt-5">
                                    <form action="https://resido.thesky9.com/en/properties" method="GET" id="frmhomesearch">
                                        <div class="hero-search-content">
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

                                                <div class="col-lg-5 col-md-4 col-sm-10 p-0 elio">
                                                    <div class="form-group">
                                                        <div class="input-with-icon">
                                                            <div class="input-with-icon">
                                                                <input type="text" class="form-control" name="k" value="" placeholder="Search for a location">
                                                                <img src="https://resido.thesky9.com/themes/resido/img/pin.svg" width="20">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-1 col-md-1 col-sm-2">
                                                    <div class="form-group">
                                                        <a class="collapsed ad-search" data-bs-toggle="collapse" data-parent="#search" data-bs-target="#advance-search" href="javascript:void(0);" aria-expanded="false" aria-controls="advance-search"><i class="fa fa-sliders-h"></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-3 col-sm-12">
                                                    <div class="form-group">
                                                        <button class="btn search-btn" type="submit">Search</button>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- Collapse Advance Search Form -->
                                            <div class="collapse" id="advance-search" aria-expanded="false" role="banner">

                                                <!-- row -->
                                                <div class="row">

                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <div class="form-group mb-2">
                                                            <div class="input-with-icon">
                                                                <select data-placeholder="City" class="form-control city_id" data-url="https://resido.thesky9.com/en/ajax/cities" name="city_id" id="city_id">
                                                                </select>

                                                                <i class="ti-location-pin"></i>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <div class="form-group mb-2">
                                                            <div class="input-with-icon">
                                                                <select id="select-bedroom" data-placeholder="Bedroom" name="bedroom" class="form-control">
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

                                                                <i class="fas fa-bed"></i>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <div class="form-group mb-2">
                                                            <div class="input-with-icon">
                                                                <select id="select-bathroom" data-placeholder="Bathroom" name="bathroom" class="form-control">
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

                                                                <i class="fas fa-bath"></i>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- /row -->

                                                <!-- row -->
                                                <div class="row">

                                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                                        <div class="form-group simple mb-2">
                                                            <select id="minprice" data-placeholder="No Min" name="min_price" class="form-control">
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

                                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                                        <div class="form-group simple mb-2">
                                                            <select id="maxprice" data-placeholder="No Max" name="max_price" class="form-control">
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

                                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                                        <div class="form-group mb-2">
                                                            <input type="text" class="form-control" name="min_square" value="" placeholder="Min Area">

                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                                        <div class="form-group mb-2">
                                                            <input type="text" class="form-control" name="max_square" value="" placeholder="Max Area">

                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- /row -->


                                                <!-- row -->
                                                <div class="row">

                                                    <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                                                        <h4 class="text-dark">Amenities &amp; Features</h4>
                                                        <ul class="no-ul-list second-row">
                                                            <li>
                                                                <input id="features-0" class="input-filter checkbox-custom" name="features[]" type="checkbox" value="1">
                                                                <label for="features-0" class="checkbox-custom-label">Wifi</label>
                                                            </li>
                                                            <li>
                                                                <input id="features-1" class="input-filter checkbox-custom" name="features[]" type="checkbox" value="2">
                                                                <label for="features-1" class="checkbox-custom-label">Parking</label>
                                                            </li>
                                                            <li>
                                                                <input id="features-2" class="input-filter checkbox-custom" name="features[]" type="checkbox" value="3">
                                                                <label for="features-2" class="checkbox-custom-label">Swimming pool</label>
                                                            </li>
                                                            <li>
                                                                <input id="features-3" class="input-filter checkbox-custom" name="features[]" type="checkbox" value="4">
                                                                <label for="features-3" class="checkbox-custom-label">Balcony</label>
                                                            </li>
                                                            <li>
                                                                <input id="features-4" class="input-filter checkbox-custom" name="features[]" type="checkbox" value="5">
                                                                <label for="features-4" class="checkbox-custom-label">Garden</label>
                                                            </li>
                                                            <li>
                                                                <input id="features-5" class="input-filter checkbox-custom" name="features[]" type="checkbox" value="6">
                                                                <label for="features-5" class="checkbox-custom-label">Security</label>
                                                            </li>
                                                            <li>
                                                                <input id="features-6" class="input-filter checkbox-custom" name="features[]" type="checkbox" value="7">
                                                                <label for="features-6" class="checkbox-custom-label">Fitness center</label>
                                                            </li>
                                                            <li>
                                                                <input id="features-7" class="input-filter checkbox-custom" name="features[]" type="checkbox" value="8">
                                                                <label for="features-7" class="checkbox-custom-label">Air Conditioning</label>
                                                            </li>
                                                            <li>
                                                                <input id="features-8" class="input-filter checkbox-custom" name="features[]" type="checkbox" value="9">
                                                                <label for="features-8" class="checkbox-custom-label">Central Heating </label>
                                                            </li>
                                                            <li>
                                                                <input id="features-9" class="input-filter checkbox-custom" name="features[]" type="checkbox" value="10">
                                                                <label for="features-9" class="checkbox-custom-label">Laundry Room</label>
                                                            </li>
                                                            <li>
                                                                <input id="features-10" class="input-filter checkbox-custom" name="features[]" type="checkbox" value="11">
                                                                <label for="features-10" class="checkbox-custom-label">Pets Allow</label>
                                                            </li>
                                                            <li>
                                                                <input id="features-11" class="input-filter checkbox-custom" name="features[]" type="checkbox" value="12">
                                                                <label for="features-11" class="checkbox-custom-label">Spa &amp; Massage</label>
                                                            </li>
                                                        </ul>

                                                    </div>

                                                </div>
                                                <!-- /row -->

                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================ Hero Banner End ================================== -->
            </div>
            <div>
                <section class="bg-light">
                    <div class="container">

                        <div class="row justify-content-center">
                            <div class="col-lg-12 text-center">
                                <div class="sec-heading center">
                                    <h2>Explore Good Places</h2>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                                </div>
                            </div>
                        </div>

                        <div class="row list-layout">
                            <!-- Single Property -->
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="property-listing property-2 " data-lat="30.1548681" data-long="-85.7709976">
                                    <div class="listing-img-wrapper">
                                        <div class="list-img-slide">
                                            <div class="click ">
                                                <div>
                                                    <a href="https://resido.thesky9.com/en/properties/4113-holiday-drive">
                                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-16-400xauto.jpg" class="img-fluid mx-auto lazy" alt="4113 Holiday Drive" />
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="https://resido.thesky9.com/en/properties/4113-holiday-drive">
                                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-3-400xauto.jpg" class="img-fluid mx-auto lazy" alt="4113 Holiday Drive" />
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="https://resido.thesky9.com/en/properties/4113-holiday-drive">
                                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-15-400xauto.jpg" class="img-fluid mx-auto lazy" alt="4113 Holiday Drive" />
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="https://resido.thesky9.com/en/properties/4113-holiday-drive">
                                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-2-400xauto.jpg" class="img-fluid mx-auto lazy" alt="4113 Holiday Drive" />
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="https://resido.thesky9.com/en/properties/4113-holiday-drive">
                                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-4-400xauto.jpg" class="img-fluid mx-auto lazy" alt="4113 Holiday Drive" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="icon-actions-wrapper">
                                            <a href="JavaScript:Void(0);" data-id="14" class="add-to-wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="listing-detail-wrapper">
                                        <div class="listing-short-detail-wrap">
                                            <div class="listing-short-detail">
                                                <div class="list-price d-flex justify-content-between">
                                                    <span>
                                                        <span class="prt-types rent">For Rent</span>
                                                    </span>
                                                    <h6 class="listing-card-info-price">
                                                        $175,939 / month
                                                    </h6>
                                                </div>
                                                <h4 class="listing-name">
                                                    <a href="https://resido.thesky9.com/en/properties/4113-holiday-drive" class="prt-link-detail" title="4113 Holiday Drive">4113 Holiday Drive</a>
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
                                                    <img src="https://resido.thesky9.com/themes/resido/img/bed.svg" width="13" alt="" />
                                                </div>
                                                1 Beds
                                            </div>

                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon">
                                                    <img src="https://resido.thesky9.com/themes/resido/img/bathtub.svg" width="13" alt="" />
                                                </div>
                                                2 Bath
                                            </div>
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon">
                                                    <img src="https://resido.thesky9.com/themes/resido/img/move.svg" width="13" alt="" />
                                                </div>
                                                112 m²
                                            </div>
                                        </div>
                                    </div>

                                    <div class="listing-detail-footer">
                                        <div class="footer-first">
                                            <div class="foot-location d-flex">
                                                <img src="https://resido.thesky9.com/themes/resido/img/pin.svg" width="18" alt="Hampton, Virginia" />
                                                Hampton, Virginia
                                            </div>
                                        </div>
                                        <div class="footer-flex">
                                            <a href="https://resido.thesky9.com/en/properties/4113-holiday-drive" class="prt-view">View</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- End Single Property -->
                            <!-- Single Property -->
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="property-listing property-2 " data-lat="30.1354251" data-long="-85.5573034">
                                    <div class="listing-img-wrapper">
                                        <div class="list-img-slide">
                                            <div class="click ">
                                                <div>
                                                    <a href="https://resido.thesky9.com/en/properties/545-tracey-drive">
                                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-9-400xauto.jpg" class="img-fluid mx-auto lazy" alt="545 Tracey Drive" />
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="https://resido.thesky9.com/en/properties/545-tracey-drive">
                                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-18-400xauto.jpg" class="img-fluid mx-auto lazy" alt="545 Tracey Drive" />
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="https://resido.thesky9.com/en/properties/545-tracey-drive">
                                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-15-400xauto.jpg" class="img-fluid mx-auto lazy" alt="545 Tracey Drive" />
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="https://resido.thesky9.com/en/properties/545-tracey-drive">
                                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-7-400xauto.jpg" class="img-fluid mx-auto lazy" alt="545 Tracey Drive" />
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="https://resido.thesky9.com/en/properties/545-tracey-drive">
                                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-19-400xauto.jpg" class="img-fluid mx-auto lazy" alt="545 Tracey Drive" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="icon-actions-wrapper">
                                            <a href="JavaScript:Void(0);" data-id="15" class="add-to-wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="listing-detail-wrapper">
                                        <div class="listing-short-detail-wrap">
                                            <div class="listing-short-detail">
                                                <div class="list-price d-flex justify-content-between">
                                                    <span>
                                                        <span class="prt-types rent">For Rent</span>
                                                    </span>
                                                    <h6 class="listing-card-info-price">
                                                        $277,057 / month
                                                    </h6>
                                                </div>
                                                <h4 class="listing-name">
                                                    <a href="https://resido.thesky9.com/en/properties/545-tracey-drive" class="prt-link-detail" title="545 Tracey Drive">545 Tracey Drive</a>
                                                </h4>
                                                <div class="rating_wrap" data-star="3.0416666666667">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: 60.833333333333%;"></div>
                                                    </div>
                                                    <span class="reviews_text">( 6 Reviews)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="price-features-wrapper">
                                        <div class="list-fx-features">
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon">
                                                    <img src="https://resido.thesky9.com/themes/resido/img/bed.svg" width="13" alt="" />
                                                </div>
                                                2 Beds
                                            </div>

                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon">
                                                    <img src="https://resido.thesky9.com/themes/resido/img/bathtub.svg" width="13" alt="" />
                                                </div>
                                                3 Bath
                                            </div>
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon">
                                                    <img src="https://resido.thesky9.com/themes/resido/img/move.svg" width="13" alt="" />
                                                </div>
                                                72 m²
                                            </div>
                                        </div>
                                    </div>

                                    <div class="listing-detail-footer">
                                        <div class="footer-first">
                                            <div class="foot-location d-flex">
                                                <img src="https://resido.thesky9.com/themes/resido/img/pin.svg" width="18" alt="Hampton, Virginia" />
                                                Hampton, Virginia
                                            </div>
                                        </div>
                                        <div class="footer-flex">
                                            <a href="https://resido.thesky9.com/en/properties/545-tracey-drive" class="prt-view">View</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- End Single Property -->
                            <!-- Single Property -->
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="property-listing property-2 " data-lat="38.142768" data-long="-85.7717132">
                                    <div class="listing-img-wrapper">
                                        <div class="list-img-slide">
                                            <div class="click ">
                                                <div>
                                                    <a href="https://resido.thesky9.com/en/properties/2203-7th-street-road">
                                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-2-400xauto.jpg" class="img-fluid mx-auto lazy" alt="2203 7th Street Road" />
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="https://resido.thesky9.com/en/properties/2203-7th-street-road">
                                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-18-400xauto.jpg" class="img-fluid mx-auto lazy" alt="2203 7th Street Road" />
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="https://resido.thesky9.com/en/properties/2203-7th-street-road">
                                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-17-400xauto.jpg" class="img-fluid mx-auto lazy" alt="2203 7th Street Road" />
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="https://resido.thesky9.com/en/properties/2203-7th-street-road">
                                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-19-400xauto.jpg" class="img-fluid mx-auto lazy" alt="2203 7th Street Road" />
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="https://resido.thesky9.com/en/properties/2203-7th-street-road">
                                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-6-400xauto.jpg" class="img-fluid mx-auto lazy" alt="2203 7th Street Road" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="icon-actions-wrapper">
                                            <a href="JavaScript:Void(0);" data-id="3" class="add-to-wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="listing-detail-wrapper">
                                        <div class="listing-short-detail-wrap">
                                            <div class="listing-short-detail">
                                                <div class="list-price d-flex justify-content-between">
                                                    <span>
                                                        <span class="prt-types rent">For Rent</span>
                                                    </span>
                                                    <h6 class="listing-card-info-price">
                                                        $218,103 / month
                                                    </h6>
                                                </div>
                                                <h4 class="listing-name">
                                                    <a href="https://resido.thesky9.com/en/properties/2203-7th-street-road" class="prt-link-detail" title="2203 7th Street Road">2203 7th Street Road</a>
                                                </h4>
                                                <div class="rating_wrap" data-star="2.8125">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: 56.25%;"></div>
                                                    </div>
                                                    <span class="reviews_text">( 4 Reviews)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="price-features-wrapper">
                                        <div class="list-fx-features">
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon">
                                                    <img src="https://resido.thesky9.com/themes/resido/img/bed.svg" width="13" alt="" />
                                                </div>
                                                1 Beds
                                            </div>

                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon">
                                                    <img src="https://resido.thesky9.com/themes/resido/img/bathtub.svg" width="13" alt="" />
                                                </div>
                                                5 Bath
                                            </div>
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon">
                                                    <img src="https://resido.thesky9.com/themes/resido/img/move.svg" width="13" alt="" />
                                                </div>
                                                460 m²
                                            </div>
                                        </div>
                                    </div>

                                    <div class="listing-detail-footer">
                                        <div class="footer-first">
                                            <div class="foot-location d-flex">
                                                <img src="https://resido.thesky9.com/themes/resido/img/pin.svg" width="18" alt="Mesa, Arizona" />
                                                Mesa, Arizona
                                            </div>
                                        </div>
                                        <div class="footer-flex">
                                            <a href="https://resido.thesky9.com/en/properties/2203-7th-street-road" class="prt-view">View</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- End Single Property -->
                            <!-- Single Property -->
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="property-listing property-2 " data-lat="44.771005" data-long="-72.048664">
                                    <div class="listing-img-wrapper">
                                        <div class="list-img-slide">
                                            <div class="click ">
                                                <div>
                                                    <a href="https://resido.thesky9.com/en/properties/7431-candace-way">
                                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-3-400xauto.jpg" class="img-fluid mx-auto lazy" alt="7431 Candace Way" />
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="https://resido.thesky9.com/en/properties/7431-candace-way">
                                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-18-400xauto.jpg" class="img-fluid mx-auto lazy" alt="7431 Candace Way" />
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="https://resido.thesky9.com/en/properties/7431-candace-way">
                                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-13-400xauto.jpg" class="img-fluid mx-auto lazy" alt="7431 Candace Way" />
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="https://resido.thesky9.com/en/properties/7431-candace-way">
                                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-10-400xauto.jpg" class="img-fluid mx-auto lazy" alt="7431 Candace Way" />
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="https://resido.thesky9.com/en/properties/7431-candace-way">
                                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-14-400xauto.jpg" class="img-fluid mx-auto lazy" alt="7431 Candace Way" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="icon-actions-wrapper">
                                            <a href="JavaScript:Void(0);" data-id="4" class="add-to-wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="listing-detail-wrapper">
                                        <div class="listing-short-detail-wrap">
                                            <div class="listing-short-detail">
                                                <div class="list-price d-flex justify-content-between">
                                                    <span>
                                                        <span class="prt-types rent">For Rent</span>
                                                    </span>
                                                    <h6 class="listing-card-info-price">
                                                        $423,759 / month
                                                    </h6>
                                                </div>
                                                <h4 class="listing-name">
                                                    <a href="https://resido.thesky9.com/en/properties/7431-candace-way" class="prt-link-detail" title="7431 Candace Way">7431 Candace Way</a>
                                                </h4>
                                                <div class="rating_wrap" data-star="3.25">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: 65%;"></div>
                                                    </div>
                                                    <span class="reviews_text">( 5 Reviews)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="price-features-wrapper">
                                        <div class="list-fx-features">
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon">
                                                    <img src="https://resido.thesky9.com/themes/resido/img/bed.svg" width="13" alt="" />
                                                </div>
                                                2 Beds
                                            </div>

                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon">
                                                    <img src="https://resido.thesky9.com/themes/resido/img/bathtub.svg" width="13" alt="" />
                                                </div>
                                                5 Bath
                                            </div>
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon">
                                                    <img src="https://resido.thesky9.com/themes/resido/img/move.svg" width="13" alt="" />
                                                </div>
                                                449 m²
                                            </div>
                                        </div>
                                    </div>

                                    <div class="listing-detail-footer">
                                        <div class="footer-first">
                                            <div class="foot-location d-flex">
                                                <img src="https://resido.thesky9.com/themes/resido/img/pin.svg" width="18" alt="Lakewood, Colorado" />
                                                Lakewood, Colorado
                                            </div>
                                        </div>
                                        <div class="footer-flex">
                                            <a href="https://resido.thesky9.com/en/properties/7431-candace-way" class="prt-view">View</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- End Single Property -->
                            <!-- Single Property -->
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="property-listing property-2 " data-lat="38.9582381" data-long="-77.0244287">
                                    <div class="listing-img-wrapper">
                                        <div class="list-img-slide">
                                            <div class="click ">
                                                <div>
                                                    <a href="https://resido.thesky9.com/en/properties/802-madison-street-northwest">
                                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-5-400xauto.jpg" class="img-fluid mx-auto lazy" alt="802 Madison Street Northwest" />
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="https://resido.thesky9.com/en/properties/802-madison-street-northwest">
                                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-5-400xauto.jpg" class="img-fluid mx-auto lazy" alt="802 Madison Street Northwest" />
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="https://resido.thesky9.com/en/properties/802-madison-street-northwest">
                                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-8-400xauto.jpg" class="img-fluid mx-auto lazy" alt="802 Madison Street Northwest" />
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="https://resido.thesky9.com/en/properties/802-madison-street-northwest">
                                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-10-400xauto.jpg" class="img-fluid mx-auto lazy" alt="802 Madison Street Northwest" />
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="https://resido.thesky9.com/en/properties/802-madison-street-northwest">
                                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-8-400xauto.jpg" class="img-fluid mx-auto lazy" alt="802 Madison Street Northwest" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="icon-actions-wrapper">
                                            <a href="JavaScript:Void(0);" data-id="8" class="add-to-wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="listing-detail-wrapper">
                                        <div class="listing-short-detail-wrap">
                                            <div class="listing-short-detail">
                                                <div class="list-price d-flex justify-content-between">
                                                    <span>
                                                        <span class="prt-types rent">For Rent</span>
                                                    </span>
                                                    <h6 class="listing-card-info-price">
                                                        $220,375 / month
                                                    </h6>
                                                </div>
                                                <h4 class="listing-name">
                                                    <a href="https://resido.thesky9.com/en/properties/802-madison-street-northwest" class="prt-link-detail" title="802 Madison Street Northwest">802 Madison Street Northwest</a>
                                                </h4>
                                                <div class="rating_wrap" data-star="3.0833333333333">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: 61.666666666667%;"></div>
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
                                                    <img src="https://resido.thesky9.com/themes/resido/img/bed.svg" width="13" alt="" />
                                                </div>
                                                3 Beds
                                            </div>

                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon">
                                                    <img src="https://resido.thesky9.com/themes/resido/img/bathtub.svg" width="13" alt="" />
                                                </div>
                                                4 Bath
                                            </div>
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon">
                                                    <img src="https://resido.thesky9.com/themes/resido/img/move.svg" width="13" alt="" />
                                                </div>
                                                244 m²
                                            </div>
                                        </div>
                                    </div>

                                    <div class="listing-detail-footer">
                                        <div class="footer-first">
                                            <div class="foot-location d-flex">
                                                <img src="https://resido.thesky9.com/themes/resido/img/pin.svg" width="18" alt="Newark, New Jersey" />
                                                Newark, New Jersey
                                            </div>
                                        </div>
                                        <div class="footer-flex">
                                            <a href="https://resido.thesky9.com/en/properties/802-madison-street-northwest" class="prt-view">View</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- End Single Property -->
                            <!-- Single Property -->
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="property-listing property-2 " data-lat="38.9256252" data-long="-77.0982646">
                                    <div class="listing-img-wrapper">
                                        <div class="list-img-slide">
                                            <div class="click ">
                                                <div>
                                                    <a href="https://resido.thesky9.com/en/properties/2811-battery-place-northwest">
                                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-6-400xauto.jpg" class="img-fluid mx-auto lazy" alt="2811 Battery Place Northwest" />
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="https://resido.thesky9.com/en/properties/2811-battery-place-northwest">
                                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-19-400xauto.jpg" class="img-fluid mx-auto lazy" alt="2811 Battery Place Northwest" />
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="https://resido.thesky9.com/en/properties/2811-battery-place-northwest">
                                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-17-400xauto.jpg" class="img-fluid mx-auto lazy" alt="2811 Battery Place Northwest" />
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="https://resido.thesky9.com/en/properties/2811-battery-place-northwest">
                                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-19-400xauto.jpg" class="img-fluid mx-auto lazy" alt="2811 Battery Place Northwest" />
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="https://resido.thesky9.com/en/properties/2811-battery-place-northwest">
                                                        <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-8-400xauto.jpg" class="img-fluid mx-auto lazy" alt="2811 Battery Place Northwest" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="icon-actions-wrapper">
                                            <a href="JavaScript:Void(0);" data-id="9" class="add-to-wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="listing-detail-wrapper">
                                        <div class="listing-short-detail-wrap">
                                            <div class="listing-short-detail">
                                                <div class="list-price d-flex justify-content-between">
                                                    <span>
                                                        <span class="prt-types rent">For Rent</span>
                                                    </span>
                                                    <h6 class="listing-card-info-price">
                                                        $423,262 / month
                                                    </h6>
                                                </div>
                                                <h4 class="listing-name">
                                                    <a href="https://resido.thesky9.com/en/properties/2811-battery-place-northwest" class="prt-link-detail" title="2811 Battery Place Northwest">2811 Battery Place Northwest</a>
                                                </h4>
                                                <div class="rating_wrap" data-star="2.8">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: 56%;"></div>
                                                    </div>
                                                    <span class="reviews_text">( 5 Reviews)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="price-features-wrapper">
                                        <div class="list-fx-features">
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon">
                                                    <img src="https://resido.thesky9.com/themes/resido/img/bed.svg" width="13" alt="" />
                                                </div>
                                                5 Beds
                                            </div>

                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon">
                                                    <img src="https://resido.thesky9.com/themes/resido/img/bathtub.svg" width="13" alt="" />
                                                </div>
                                                2 Bath
                                            </div>
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon">
                                                    <img src="https://resido.thesky9.com/themes/resido/img/move.svg" width="13" alt="" />
                                                </div>
                                                122 m²
                                            </div>
                                        </div>
                                    </div>

                                    <div class="listing-detail-footer">
                                        <div class="footer-first">
                                            <div class="foot-location d-flex">
                                                <img src="https://resido.thesky9.com/themes/resido/img/pin.svg" width="18" alt="Peoria, Illinois" />
                                                Peoria, Illinois
                                            </div>
                                        </div>
                                        <div class="footer-flex">
                                            <a href="https://resido.thesky9.com/en/properties/2811-battery-place-northwest" class="prt-view">View</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- End Single Property -->
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                <a href="https://resido.thesky9.com/en/properties" class="btn btn-theme-light-2 rounded">Browse More Properties</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div>
                <section>
                    <div class="container">

                        <div class="row justify-content-center">
                            <div class="col-lg-7 col-md-10 text-center">
                                <div class="sec-heading center">
                                    <h2>Find By Locations</h2>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                                </div>
                            </div>
                        </div>

                        <div class="row list-layout">
                            <div class="col-lg-4 col-md-4">
                                <div class="location-property-wrap">
                                    <div class="location-property-thumb">
                                        <a href="https://resido.thesky9.com/en/city/newark">
                                            <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/cities/c-1-400xauto.png" class="w-100 lazy" alt="Newark" />
                                        </a>
                                    </div>
                                    <div class="location-property-content">
                                        <div class="lp-content-flex">
                                            <h4 class="lp-content-title">Newark</h4>
                                            <span>5 Properties</span>
                                        </div>
                                        <div class="lp-content-right">
                                            <a href="https://resido.thesky9.com/en/city/newark" class="lp-property-view">
                                                <i class="ti-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="location-property-wrap">
                                    <div class="location-property-thumb">
                                        <a href="https://resido.thesky9.com/en/city/peoria">
                                            <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/cities/c-2-400xauto.png" class="w-100 lazy" alt="Peoria" />
                                        </a>
                                    </div>
                                    <div class="location-property-content">
                                        <div class="lp-content-flex">
                                            <h4 class="lp-content-title">Peoria</h4>
                                            <span>4 Properties</span>
                                        </div>
                                        <div class="lp-content-right">
                                            <a href="https://resido.thesky9.com/en/city/peoria" class="lp-property-view">
                                                <i class="ti-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="location-property-wrap">
                                    <div class="location-property-thumb">
                                        <a href="https://resido.thesky9.com/en/city/ofallon">
                                            <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/cities/c-3-400xauto.png" class="w-100 lazy" alt="O&#039;Fallon" />
                                        </a>
                                    </div>
                                    <div class="location-property-content">
                                        <div class="lp-content-flex">
                                            <h4 class="lp-content-title">O&#039;Fallon</h4>
                                            <span>2 Properties</span>
                                        </div>
                                        <div class="lp-content-right">
                                            <a href="https://resido.thesky9.com/en/city/ofallon" class="lp-property-view">
                                                <i class="ti-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="location-property-wrap">
                                    <div class="location-property-thumb">
                                        <a href="https://resido.thesky9.com/en/city/hampton">
                                            <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/cities/c-4-400xauto.png" class="w-100 lazy" alt="Hampton" />
                                        </a>
                                    </div>
                                    <div class="location-property-content">
                                        <div class="lp-content-flex">
                                            <h4 class="lp-content-title">Hampton</h4>
                                            <span>4 Properties</span>
                                        </div>
                                        <div class="lp-content-right">
                                            <a href="https://resido.thesky9.com/en/city/hampton" class="lp-property-view">
                                                <i class="ti-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="location-property-wrap">
                                    <div class="location-property-thumb">
                                        <a href="https://resido.thesky9.com/en/city/lakewood">
                                            <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/cities/c-5-400xauto.png" class="w-100 lazy" alt="Lakewood" />
                                        </a>
                                    </div>
                                    <div class="location-property-content">
                                        <div class="lp-content-flex">
                                            <h4 class="lp-content-title">Lakewood</h4>
                                            <span>1 Properties</span>
                                        </div>
                                        <div class="lp-content-right">
                                            <a href="https://resido.thesky9.com/en/city/lakewood" class="lp-property-view">
                                                <i class="ti-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="location-property-wrap">
                                    <div class="location-property-thumb">
                                        <a href="https://resido.thesky9.com/en/city/mesa">
                                            <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/cities/c-6-400xauto.png" class="w-100 lazy" alt="Mesa" />
                                        </a>
                                    </div>
                                    <div class="location-property-content">
                                        <div class="lp-content-flex">
                                            <h4 class="lp-content-title">Mesa</h4>
                                            <span>1 Properties</span>
                                        </div>
                                        <div class="lp-content-right">
                                            <a href="https://resido.thesky9.com/en/city/mesa" class="lp-property-view">
                                                <i class="ti-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                <a href="https://resido.thesky9.com/en/properties" class="btn btn-theme-light-2 rounded">Browse More Locations</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div>
                <section class="bg-light">
                    <div class="container">

                        <div class="row justify-content-center">
                            <div class="col-lg-12 text-center">
                                <div class="sec-heading center">
                                    <h2>Explore Good Places</h2>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                                </div>
                            </div>
                        </div>

                        <div class="row list-layout">
                            <!-- Single Property -->
                            <div class="col-lg-6 col-sm-12">
                                <div class="property-listing property-1" data-lat="30.221926" data-long="-85.6242">
                                    <div class="listing-img-wrapper">
                                        <a href="https://resido.thesky9.com/en/properties/2318-camryns-crossing">
                                            <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-3-400xauto.jpg" class="img-fluid mx-auto lazy" alt="2318 Camryns Crossing" />
                                        </a>
                                        <div class="icon-actions-wrapper">
                                            <a href="JavaScript:Void(0);" data-id="16" class="add-to-wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="listing-content">

                                        <div class="listing-detail-wrapper-box">
                                            <div class="listing-detail-wrapper">
                                                <div class="listing-short-detail">
                                                    <h4 class="listing-name">
                                                        <a href="https://resido.thesky9.com/en/properties/2318-camryns-crossing" title="2318 Camryns Crossing">2318 Camryns Crossing</a>
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
                                                        <span class="prt-types sale">For Sale</span>
                                                    </div>
                                                    <h6 class="listing-card-info-price"> $482,154 </h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="price-features-wrapper">
                                            <div class="list-fx-features">
                                                <div class="listing-card-info-icon">
                                                    <div class="inc-fleat-icon">
                                                        <img src="https://resido.thesky9.com/themes/resido/img/bed.svg" width="13" alt="" />
                                                    </div>
                                                    3 Beds
                                                </div>

                                                <div class="listing-card-info-icon">
                                                    <div class="inc-fleat-icon">
                                                        <img src="https://resido.thesky9.com/themes/resido/img/bathtub.svg" width="13" alt="" />
                                                    </div>
                                                    5 Bath
                                                </div>

                                                <div class="listing-card-info-icon">
                                                    <div class="inc-fleat-icon">
                                                        <img src="https://resido.thesky9.com/themes/resido/img/move.svg" width="13" alt="" />
                                                    </div>
                                                    245 m²
                                                </div>
                                            </div>
                                        </div>

                                        <div class="listing-footer-wrapper">
                                            <div class="listing-locate" title="Newark, New Jersey">
                                                <span class="listing-location"><i class="ti-location-pin"></i>Newark, New Jersey</span>
                                            </div>
                                            <div class="listing-detail-btn">
                                                <a href="https://resido.thesky9.com/en/properties/2318-camryns-crossing" class="more-btn">View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- End Single Property -->
                            <!-- Single Property -->
                            <div class="col-lg-6 col-sm-12">
                                <div class="property-listing property-1" data-lat="30.1825289" data-long="-85.676771">
                                    <div class="listing-img-wrapper">
                                        <a href="https://resido.thesky9.com/en/properties/1025-west-19th-street">
                                            <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-3-400xauto.jpg" class="img-fluid mx-auto lazy" alt="1025 West 19th Street" />
                                        </a>
                                        <div class="icon-actions-wrapper">
                                            <a href="JavaScript:Void(0);" data-id="17" class="add-to-wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="listing-content">

                                        <div class="listing-detail-wrapper-box">
                                            <div class="listing-detail-wrapper">
                                                <div class="listing-short-detail">
                                                    <h4 class="listing-name">
                                                        <a href="https://resido.thesky9.com/en/properties/1025-west-19th-street" title="1025 West 19th Street">1025 West 19th Street</a>
                                                    </h4>
                                                </div>
                                                <div class="list-price">
                                                    <div>
                                                        <div class="rating_wrap" data-star="3.3125">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width: 66.25%;"></div>
                                                            </div>
                                                            <span class="reviews_text">( 4 Reviews)</span>
                                                        </div>
                                                        <span class="prt-types sale">For Sale</span>
                                                    </div>
                                                    <h6 class="listing-card-info-price"> $353,877 </h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="price-features-wrapper">
                                            <div class="list-fx-features">
                                                <div class="listing-card-info-icon">
                                                    <div class="inc-fleat-icon">
                                                        <img src="https://resido.thesky9.com/themes/resido/img/bed.svg" width="13" alt="" />
                                                    </div>
                                                    5 Beds
                                                </div>

                                                <div class="listing-card-info-icon">
                                                    <div class="inc-fleat-icon">
                                                        <img src="https://resido.thesky9.com/themes/resido/img/bathtub.svg" width="13" alt="" />
                                                    </div>
                                                    1 Bath
                                                </div>

                                                <div class="listing-card-info-icon">
                                                    <div class="inc-fleat-icon">
                                                        <img src="https://resido.thesky9.com/themes/resido/img/move.svg" width="13" alt="" />
                                                    </div>
                                                    243 m²
                                                </div>
                                            </div>
                                        </div>

                                        <div class="listing-footer-wrapper">
                                            <div class="listing-locate" title="O'Fallon, Missouri">
                                                <span class="listing-location"><i class="ti-location-pin"></i>O'Fallon, Missouri</span>
                                            </div>
                                            <div class="listing-detail-btn">
                                                <a href="https://resido.thesky9.com/en/properties/1025-west-19th-street" class="more-btn">View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- End Single Property -->
                            <!-- Single Property -->
                            <div class="col-lg-6 col-sm-12">
                                <div class="property-listing property-1" data-lat="38.1343013" data-long="-85.6498512">
                                    <div class="listing-img-wrapper">
                                        <a href="https://resido.thesky9.com/en/properties/6007-applegate-lane">
                                            <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-1-400xauto.jpg" class="img-fluid mx-auto lazy" alt="6007 Applegate Lane" />
                                        </a>
                                        <div class="icon-actions-wrapper">
                                            <a href="JavaScript:Void(0);" data-id="1" class="add-to-wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="listing-content">

                                        <div class="listing-detail-wrapper-box">
                                            <div class="listing-detail-wrapper">
                                                <div class="listing-short-detail">
                                                    <h4 class="listing-name">
                                                        <a href="https://resido.thesky9.com/en/properties/6007-applegate-lane" title="6007 Applegate Lane">6007 Applegate Lane</a>
                                                    </h4>
                                                </div>
                                                <div class="list-price">
                                                    <div>
                                                        <div class="rating_wrap" data-star="2.75">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width: 55%;"></div>
                                                            </div>
                                                            <span class="reviews_text">( 4 Reviews)</span>
                                                        </div>
                                                        <span class="prt-types sale">For Sale</span>
                                                    </div>
                                                    <h6 class="listing-card-info-price"> $284,473 </h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="price-features-wrapper">
                                            <div class="list-fx-features">
                                                <div class="listing-card-info-icon">
                                                    <div class="inc-fleat-icon">
                                                        <img src="https://resido.thesky9.com/themes/resido/img/bed.svg" width="13" alt="" />
                                                    </div>
                                                    3 Beds
                                                </div>

                                                <div class="listing-card-info-icon">
                                                    <div class="inc-fleat-icon">
                                                        <img src="https://resido.thesky9.com/themes/resido/img/bathtub.svg" width="13" alt="" />
                                                    </div>
                                                    1 Bath
                                                </div>

                                                <div class="listing-card-info-icon">
                                                    <div class="inc-fleat-icon">
                                                        <img src="https://resido.thesky9.com/themes/resido/img/move.svg" width="13" alt="" />
                                                    </div>
                                                    290 m²
                                                </div>
                                            </div>
                                        </div>

                                        <div class="listing-footer-wrapper">
                                            <div class="listing-locate" title="Hampton, Virginia">
                                                <span class="listing-location"><i class="ti-location-pin"></i>Hampton, Virginia</span>
                                            </div>
                                            <div class="listing-detail-btn">
                                                <a href="https://resido.thesky9.com/en/properties/6007-applegate-lane" class="more-btn">View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- End Single Property -->
                            <!-- Single Property -->
                            <div class="col-lg-6 col-sm-12">
                                <div class="property-listing property-1" data-lat="38.263793" data-long="-85.700243">
                                    <div class="listing-img-wrapper">
                                        <a href="https://resido.thesky9.com/en/properties/2721-lindsay-avenue">
                                            <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-9-400xauto.jpg" class="img-fluid mx-auto lazy" alt="2721 Lindsay Avenue" />
                                        </a>
                                        <div class="icon-actions-wrapper">
                                            <a href="JavaScript:Void(0);" data-id="2" class="add-to-wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="listing-content">

                                        <div class="listing-detail-wrapper-box">
                                            <div class="listing-detail-wrapper">
                                                <div class="listing-short-detail">
                                                    <h4 class="listing-name">
                                                        <a href="https://resido.thesky9.com/en/properties/2721-lindsay-avenue" title="2721 Lindsay Avenue">2721 Lindsay Avenue</a>
                                                    </h4>
                                                </div>
                                                <div class="list-price">
                                                    <div>
                                                        <div class="rating_wrap" data-star="3.2916666666667">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width: 65.833333333333%;"></div>
                                                            </div>
                                                            <span class="reviews_text">( 6 Reviews)</span>
                                                        </div>
                                                        <span class="prt-types sale">For Sale</span>
                                                    </div>
                                                    <h6 class="listing-card-info-price"> $209,179 </h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="price-features-wrapper">
                                            <div class="list-fx-features">
                                                <div class="listing-card-info-icon">
                                                    <div class="inc-fleat-icon">
                                                        <img src="https://resido.thesky9.com/themes/resido/img/bed.svg" width="13" alt="" />
                                                    </div>
                                                    3 Beds
                                                </div>

                                                <div class="listing-card-info-icon">
                                                    <div class="inc-fleat-icon">
                                                        <img src="https://resido.thesky9.com/themes/resido/img/bathtub.svg" width="13" alt="" />
                                                    </div>
                                                    5 Bath
                                                </div>

                                                <div class="listing-card-info-icon">
                                                    <div class="inc-fleat-icon">
                                                        <img src="https://resido.thesky9.com/themes/resido/img/move.svg" width="13" alt="" />
                                                    </div>
                                                    465 m²
                                                </div>
                                            </div>
                                        </div>

                                        <div class="listing-footer-wrapper">
                                            <div class="listing-locate" title="Hampton, Virginia">
                                                <span class="listing-location"><i class="ti-location-pin"></i>Hampton, Virginia</span>
                                            </div>
                                            <div class="listing-detail-btn">
                                                <a href="https://resido.thesky9.com/en/properties/2721-lindsay-avenue" class="more-btn">View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- End Single Property -->
                            <!-- Single Property -->
                            <div class="col-lg-6 col-sm-12">
                                <div class="property-listing property-1" data-lat="38.1286407" data-long="-85.8678042">
                                    <div class="listing-img-wrapper">
                                        <a href="https://resido.thesky9.com/en/properties/8502-madrone-avenue">
                                            <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-13-400xauto.jpg" class="img-fluid mx-auto lazy" alt="8502 Madrone Avenue" />
                                        </a>
                                        <div class="icon-actions-wrapper">
                                            <a href="JavaScript:Void(0);" data-id="5" class="add-to-wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="listing-content">

                                        <div class="listing-detail-wrapper-box">
                                            <div class="listing-detail-wrapper">
                                                <div class="listing-short-detail">
                                                    <h4 class="listing-name">
                                                        <a href="https://resido.thesky9.com/en/properties/8502-madrone-avenue" title="8502 Madrone Avenue">8502 Madrone Avenue</a>
                                                    </h4>
                                                </div>
                                                <div class="list-price">
                                                    <div>
                                                        <div class="rating_wrap" data-star="3.3333333333333">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width: 66.666666666667%;"></div>
                                                            </div>
                                                            <span class="reviews_text">( 3 Reviews)</span>
                                                        </div>
                                                        <span class="prt-types sale">For Sale</span>
                                                    </div>
                                                    <h6 class="listing-card-info-price"> $276,575 </h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="price-features-wrapper">
                                            <div class="list-fx-features">
                                                <div class="listing-card-info-icon">
                                                    <div class="inc-fleat-icon">
                                                        <img src="https://resido.thesky9.com/themes/resido/img/bed.svg" width="13" alt="" />
                                                    </div>
                                                    2 Beds
                                                </div>

                                                <div class="listing-card-info-icon">
                                                    <div class="inc-fleat-icon">
                                                        <img src="https://resido.thesky9.com/themes/resido/img/bathtub.svg" width="13" alt="" />
                                                    </div>
                                                    5 Bath
                                                </div>

                                                <div class="listing-card-info-icon">
                                                    <div class="inc-fleat-icon">
                                                        <img src="https://resido.thesky9.com/themes/resido/img/move.svg" width="13" alt="" />
                                                    </div>
                                                    159 m²
                                                </div>
                                            </div>
                                        </div>

                                        <div class="listing-footer-wrapper">
                                            <div class="listing-locate" title="Peoria, Illinois">
                                                <span class="listing-location"><i class="ti-location-pin"></i>Peoria, Illinois</span>
                                            </div>
                                            <div class="listing-detail-btn">
                                                <a href="https://resido.thesky9.com/en/properties/8502-madrone-avenue" class="more-btn">View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- End Single Property -->
                            <!-- Single Property -->
                            <div class="col-lg-6 col-sm-12">
                                <div class="property-listing property-1" data-lat="38.867033" data-long="-76.979235">
                                    <div class="listing-img-wrapper">
                                        <a href="https://resido.thesky9.com/en/properties/1745-t-street-southeast">
                                            <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/properties/p-9-400xauto.jpg" class="img-fluid mx-auto lazy" alt="1745 T Street Southeast" />
                                        </a>
                                        <div class="icon-actions-wrapper">
                                            <a href="JavaScript:Void(0);" data-id="6" class="add-to-wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="listing-content">

                                        <div class="listing-detail-wrapper-box">
                                            <div class="listing-detail-wrapper">
                                                <div class="listing-short-detail">
                                                    <h4 class="listing-name">
                                                        <a href="https://resido.thesky9.com/en/properties/1745-t-street-southeast" title="1745 T Street Southeast">1745 T Street Southeast</a>
                                                    </h4>
                                                </div>
                                                <div class="list-price">
                                                    <div>
                                                        <div class="rating_wrap" data-star="2.75">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width: 55%;"></div>
                                                            </div>
                                                            <span class="reviews_text">( 5 Reviews)</span>
                                                        </div>
                                                        <span class="prt-types sale">For Sale</span>
                                                    </div>
                                                    <h6 class="listing-card-info-price"> $228,604 </h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="price-features-wrapper">
                                            <div class="list-fx-features">
                                                <div class="listing-card-info-icon">
                                                    <div class="inc-fleat-icon">
                                                        <img src="https://resido.thesky9.com/themes/resido/img/bed.svg" width="13" alt="" />
                                                    </div>
                                                    5 Beds
                                                </div>

                                                <div class="listing-card-info-icon">
                                                    <div class="inc-fleat-icon">
                                                        <img src="https://resido.thesky9.com/themes/resido/img/bathtub.svg" width="13" alt="" />
                                                    </div>
                                                    1 Bath
                                                </div>

                                                <div class="listing-card-info-icon">
                                                    <div class="inc-fleat-icon">
                                                        <img src="https://resido.thesky9.com/themes/resido/img/move.svg" width="13" alt="" />
                                                    </div>
                                                    169 m²
                                                </div>
                                            </div>
                                        </div>

                                        <div class="listing-footer-wrapper">
                                            <div class="listing-locate" title="Newark, New Jersey">
                                                <span class="listing-location"><i class="ti-location-pin"></i>Newark, New Jersey</span>
                                            </div>
                                            <div class="listing-detail-btn">
                                                <a href="https://resido.thesky9.com/en/properties/1745-t-street-southeast" class="more-btn">View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- End Single Property -->
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                <a href="https://resido.thesky9.com/en/properties" class="btn btn-theme-light-2 rounded">Browse More Properties</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div>
                <section class="bg-orange">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7 col-md-10 text-center">
                                <div class="sec-heading center">
                                    <h2>Good Reviews By Customers</h2>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-md-12">
                                <div class="smart-textimonials smart-center">
                                    <div class="item">
                                        <div class="item-box">
                                            <div class="smart-tes-author">
                                                <div class="st-author-box">
                                                    <div class="st-author-thumb">
                                                        <div class="quotes bg-blue"><i class="ti-quote-right"></i></div>
                                                        <img src="testimonials/1.jpg" class="img-fluid" alt="Adam Williams" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="smart-tes-content">
                                                <p>
                                                    Mouse, who seemed ready to sink into the.
                                                </p>
                                            </div>

                                            <div class="st-author-info">
                                                <h4 class="st-author-title">Adam Williams</h4>
                                                <span class="st-author-subtitle">CEO Of Microwoft</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-box">
                                            <div class="smart-tes-author">
                                                <div class="st-author-box">
                                                    <div class="st-author-thumb">
                                                        <div class="quotes bg-blue"><i class="ti-quote-right"></i></div>
                                                        <img src="testimonials/2.jpg" class="img-fluid" alt="Retha Deowalim" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="smart-tes-content">
                                                <p>
                                                    It did so indeed, and much sooner than she had.
                                                </p>
                                            </div>

                                            <div class="st-author-info">
                                                <h4 class="st-author-title">Retha Deowalim</h4>
                                                <span class="st-author-subtitle">CEO Of Apple</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-box">
                                            <div class="smart-tes-author">
                                                <div class="st-author-box">
                                                    <div class="st-author-thumb">
                                                        <div class="quotes bg-blue"><i class="ti-quote-right"></i></div>
                                                        <img src="testimonials/3.jpg" class="img-fluid" alt="Sam J. Wasim" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="smart-tes-content">
                                                <p>
                                                    THESE?' said the Rabbit's voice; and the other.
                                                </p>
                                            </div>

                                            <div class="st-author-info">
                                                <h4 class="st-author-title">Sam J. Wasim</h4>
                                                <span class="st-author-subtitle">Pio Founder</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-box">
                                            <div class="smart-tes-author">
                                                <div class="st-author-box">
                                                    <div class="st-author-thumb">
                                                        <div class="quotes bg-blue"><i class="ti-quote-right"></i></div>
                                                        <img src="testimonials/4.jpg" class="img-fluid" alt="Usan Gulwarm" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="smart-tes-content">
                                                <p>
                                                    At last the Gryphon interrupted in a low.
                                                </p>
                                            </div>

                                            <div class="st-author-info">
                                                <h4 class="st-author-title">Usan Gulwarm</h4>
                                                <span class="st-author-subtitle">CEO Of Facewarm</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-box">
                                            <div class="smart-tes-author">
                                                <div class="st-author-box">
                                                    <div class="st-author-thumb">
                                                        <div class="quotes bg-blue"><i class="ti-quote-right"></i></div>
                                                        <img src="testimonials/5.jpg" class="img-fluid" alt="Shilpa Shethy" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="smart-tes-content">
                                                <p>
                                                    On which Seven looked up eagerly, half hoping.
                                                </p>
                                            </div>

                                            <div class="st-author-info">
                                                <h4 class="st-author-title">Shilpa Shethy</h4>
                                                <span class="st-author-subtitle">CEO Of Zapple</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div>
                <section id="pricing-section">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7 col-md-10 text-center">
                                <div class="sec-heading center">
                                    <h2>See Our Packages</h2>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-lg-4 col-md-4">
                                <div class="pricing-wrap  standard-pr ">
                                    <div class="pricing-header">
                                        <h4 class="pr-value">
                                            $0
                                        </h4>
                                        <h4 class="pr-title">Free First Post</h4>
                                    </div>
                                    <div class="pricing-body">
                                        <ul>
                                            <li class="available">Buy credits to post your listing(s)</li>
                                            <li class="available">60-Day Job Postings</li>
                                            <li class="available">No Expiration on Credits.</li>
                                            <li class="available">Specialist Assistance</li>
                                            <li class="available">Get More Eyes</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-bottom">
                                        <a href="https://resido.thesky9.com/en/account/packages/1/subscribe" class="btn-pricing">Choose Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="pricing-wrap  platinum-pr recommended ">
                                    <div class="pricing-header">
                                        <h4 class="pr-value">
                                            $250
                                        </h4>
                                        <h4 class="pr-title">Single Post</h4>
                                    </div>
                                    <div class="pricing-body">
                                        <ul>
                                            <li class="available">Buy credits to post your listing(s)</li>
                                            <li class="available">60-Day Job Postings</li>
                                            <li class="available">No Expiration on Credits.</li>
                                            <li class="available">Specialist Assistance</li>
                                            <li class="available">Get More Eyes</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-bottom">
                                        <a href="https://resido.thesky9.com/en/account/packages/2/subscribe" class="btn-pricing">Choose Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="pricing-wrap  standard-pr ">
                                    <div class="pricing-header">
                                        <h4 class="pr-value">
                                            $1,000
                                        </h4>
                                        <h4 class="pr-title">5 Posts</h4>
                                    </div>
                                    <div class="pricing-body">
                                        <ul>
                                            <li class="available">Buy credits to post your listing(s)</li>
                                            <li class="available">60-Day Job Postings</li>
                                            <li class="available">No Expiration on Credits.</li>
                                            <li class="available">Specialist Assistance</li>
                                            <li class="available">Get More Eyes</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-bottom">
                                        <a href="https://resido.thesky9.com/en/account/packages/3/subscribe" class="btn-pricing">Choose Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div>
                <div class="raw-html-embed">
                    <section class="bg-light">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                                    <div class="content_block_2">
                                        <div class="content-box">
                                            <div class="sec-title light">
                                                <p class="text-blue">Download apps</p>
                                                <h2>Download App Free App For Android And IPhone</h2>
                                            </div>
                                            <div class="text">
                                                <p></p>
                                            </div>
                                            <div class="btn-box clearfix mt-5">
                                                <a href="" class="download-btn play-store"><i class="fab fa-google-play"></i> <span>Download on</span>
                                                </a>
                                                <h3><a href="" class="download-btn play-store">Google Play</a></h3><a href="" class="download-btn play-store"></a>
                                                <a href="" class="download-btn app-store"><i class="fab fa-apple"></i> <span>Download on</span>
                                                </a>
                                                <h3><a href="" class="download-btn app-store">App Store</a></h3><a href="" class="download-btn app-store"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                                    <div class="image-box">
                                        <figure class="image">
                                            <img src="/storage/banners/app.png" alt="image" class="img-fluid">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection