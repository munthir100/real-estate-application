<section>
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 text-center">
                <div class="sec-heading center">
                    <h2>{{__('Find By Locations')}}</h2>
                    <p>{{__('select your fevorite city and choese your real estate property')}}</p>
                </div>
            </div>
        </div>

        <div class="row list-layout">

            @foreach($cities as $city)
            <div class="col-lg-4 col-md-4">
                <div class="location-property-wrap">
                    <div class="location-property-thumb">
                        <a href="{{route('properties',['city_id'=>$city->id])}}">
                            <img src="https://resido.thesky9.com/storage/general/img-loading.jpg" data-src="https://resido.thesky9.com/storage/cities/c-1-400xauto.png" class="w-100 lazy" alt="Newark" />
                        </a>
                    </div>
                    <div class="location-property-content">
                        <div class="lp-content-flex">
                            <h4 class="lp-content-title">{{$city->name}}</h4>
                            <span>
                                @if($city->properties_count == 0)
                                0
                                @else
                                {{$city->properties_count}}

                                @endif
                                {{__('Properties')}}</span>
                        </div>
                        <div class="lp-content-right">
                            <a href="{{route('properties',['city_id'=>$city->id])}}" class="lp-property-view">
                                <i class="ti-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <a href="{{route('properties')}}" class="btn btn-theme-light-2 rounded">{{__('Browse More Locations')}}</a>
            </div>
        </div>
    </div>
</section>