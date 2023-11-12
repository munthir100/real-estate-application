@extends('layouts.app-layout')
@section('title','Home')

@section('content')
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <h1 class="ipt-title">{{__('Properties')}}</h1>
                <span class="ipn-subtitle"></span>

            </div>
        </div>
    </div>
</div>
<div id="app">


    <!-- ============================ All Property ================================== -->
    <section class="gray">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="filter_search_opt">
                        <a href="javascript:void(0);" class="open_search_menu">{{__('Search Property')}}<i class="ml-2 ti-menu"></i></a>
                    </div>
                </div>
            </div>

            <x-properties.list-pagination :properties="$properties" :userSearchCriteria="$userSearchCriteria" />
        </div>
    </section>

</div>
@endsection