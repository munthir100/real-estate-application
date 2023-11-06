@extends('layouts.app-layout')
@section('title','Home')

@section('content')
<div id="app">
    <div id="ismain-homes">
        <div class="ck-content">



            <div>
                <section class="bg-light">
                    <div class="container">

                        <div class="row justify-content-center">
                            <div class="col-lg-12 text-center">
                                <div class="sec-heading center">
                                    <h2>Properties</h2>
                                </div>
                            </div>
                        </div>

                        <div class="row list-layout">
                            <!-- Single Property -->
                            @foreach($properties as $property)
                            <x-properties.list :property="$property" />
                            @endforeach
                            <!-- End Single Property -->
                            <!-- Single Property -->

                            <!-- End Single Property -->
                        </div>

                        <!-- <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                <a href="https://resido.thesky9.com/en/properties" class="btn btn-theme-light-2 rounded">Browse More Properties</a>
                            </div>
                        </div> -->
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