<section id="pricing-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 text-center">
                <div class="sec-heading center">
                    <h2>{{__('See Our Packages')}}</h2>
                    <p>{{__('see our latest pricing and select your subscription package')}}</p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($plans as $plan)
            <div class="col-lg-4 col-md-4">
                @if($plan->name != 'Standard Plan')
                <div class="pricing-wrap  standard-pr ">
                    @else
                    <div class="pricing-wrap  platinum-pr recommended ">

                        @endif
                        <div class="pricing-header">
                            <h4 class="pr-value">
                                ${{$plan->price}}
                            </h4>
                            <h4 class="pr-title">{{__($plan->name)}}</h4>
                        </div>
                        <div class="pricing-body">
                            <ul>
                                <li class="available">{{$plan->num_properties_allowed}} {{__('Property Advertisement Allowed')}}.</li>
                                <li class="available">{{$plan->priority_support}} {{__('Priority Of Support')}}.</li>
                                <li class="available">{{$plan->num_affiliate_users}} Allowed Users For Affiliate.</li>
                                <li class="available">{{__('Add Your Logo')}}</li>
                            </ul>
                        </div>
                        <div class="pricing-bottom">
                            <a href="{{route('plans.subscribe',$plan->id)}}" class="btn-pricing">{{__('Choose Plan')}}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</section>