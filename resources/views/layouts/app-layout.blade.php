<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">


<head>

    <title>@yield('title')</title>

    @include('layouts.app-layout-styles')



    @yield('styles')

</head>

<body class="yellow-skin" @if(app()->isLocale('ar')) dir="rtl" @endif>
    <div id="alert-container"></div>


    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

        <!-- ============================================================== -->
        <!-- Top header  -->

        @include('layouts.top-header')
        <!-- ============================================================== -->
        <!-- Start Navigation -->
        @include('layouts.navigation')
        <!-- End Navigation -->
        <div class="clearfix"></div>
        <x-shared.alerts />
        @yield('content')


        @include('layouts.shortcode')

        <!-- ============================ Footer Start ================================== -->
        @include('layouts.footer')
        <!-- ============================ Footer End ================================== -->

        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
    </div>



    @include('layouts.app-layout-scripts')


</body>

</html>