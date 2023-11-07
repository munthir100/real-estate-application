@extends('layouts.app-layout')
@section('title','Home')

@section('content')
<div id="app">
    <div class="page-title">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <x-properties.search-bar />

                </div>
            </div>
        </div>
    </div>

    <!-- ============================ All Property ================================== -->
    <section class="gray">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="filter_search_opt">
                        <a href="javascript:void(0);" class="open_search_menu">Search Property<i class="ml-2 ti-menu"></i></a>
                    </div>
                </div>
            </div>

            <x-properties.list-pagination :properties="$properties" />
        </div>
    </section>

</div>
@endsection