@extends('layouts.app-layout')
@section('title','Home')

@section('content')

<div id="app">
    <!-- ============================ Page Title Start================================== -->
    <div class="image-cover page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1 class="ipt-title">{{__('Broker Detail')}}</h1>
                    <span class="ipn-subtitle">{{$user->first_name}} {{$user->middle_name}}</span>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ Agency Name Start================================== -->
    <section class="agent-page p-0 gray-simple">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="agency agency-list overlio-40">

                        <div class="agency-avatar">
                            <img src="https://resido.thesky9.com/storage/accounts/1-150x150.jpg" alt="{{$user->first_name}} {{$user->last_name}}" class="img-thumbnail">
                        </div>

                        <div class="agency-content">
                            <div class="agency-name">
                                <h4><a href="#">{{$user->first_name}} {{$user->middle_name}}</a></h4>
                                <span><i class="lni-phone-handset"></i>{{$user->phone}}</span>
                            </div>

                            <div class="agency-desc">
                                <p>{{$user->description}}</p>
                            </div>

                  
                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================ About Agency ================================== -->
   

</div>
@endsection