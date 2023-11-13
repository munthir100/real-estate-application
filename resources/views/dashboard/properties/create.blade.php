@extends('dashboard.layouts.dashboard-layout')
@section('content')
<section class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="filter_search_opt">
                    <a href="javascript:void(0);" class="open_search_menu">
                        {{__('Dashboard Navigation')}}
                        <i class="ml-2 ti-menu"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            @include('dashboard.layouts.dashboard-sidebar')

            <div class="col-lg-9 col-md-12">
                <div id="app">
                    <div class="dashboard-wraper1">
                        <x-dashboard.used-version />

                        <form method="POST" action="{{route('dashboard.properties.store')}}" accept-charset="UTF-8" id="botble-real-estate-forms-account-property-form" class="js-base-form dirty-check" enctype="multipart/form-data">
                            @csrf
                            <x-dashboard.properties.creation-form />

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection