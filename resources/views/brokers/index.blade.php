@extends('dashboard.layouts.dashboard-layout')
@section('content')
<div id="app">
    <!-- ============================ Page Title Start================================== -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1 class="ipt-title">All brokers</h1>
                    <span class="ipn-subtitle">Lists of our all expert brokers</span>

                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ Agent List Start ================================== -->
    <section class="gray-simple">
        <div class="container">
            <div class="row">
                @foreach($users as $user)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="agents-grid">
                        <div class="agents-grid-wrap">
                            <div class="fr-grid-thumb">
                                <a href="{{route('brokers.details',$user->id)}}">
                                    <img src="https://resido.thesky9.com/storage/accounts/1.jpg" class="img-fluid mx-auto" alt="{{$user->name}}">
                                </a>
                            </div>

                            <div class="fr-grid-deatil">
                                <div class="fr-grid-deatil-flex">
                                    <h5 class="fr-can-name">
                                        <a href="{{route('brokers.details',$user->id)}}">{{$user->name}}</a>
                                    </h5>
                                </div>
                                <div class="fr-grid-deatil-flex-right">
                                    <div class="agent-email"><a href="mailto:{{$user->email}}"><i class="ti-email"></i></a></div>
                                </div>
                            </div>
                        </div>

                        <div class="fr-grid-info">
                            <ul>
                                <li><strong>Phone:</strong> {{$user->phone}}</li>

                                <li><strong>Email:</strong> {{$user->email}}</li>
                            </ul>
                        </div>

                        <div class="fr-grid-footer">
                            <div class="fr-grid-footer-flex">
                                <span class="fr-position"><i class="fa fa-home"></i>0 properties</span>
                            </div>
                            <div class="fr-grid-footer-flex-right">
                                <a href="{{route('brokers.details',$user->id)}}" class="prt-view" tabindex="0">View</a>
                            </div>
                        </div>

                    </div>

                </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <nav class="d-flex justify-content-center pt-3">

                    </nav>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection