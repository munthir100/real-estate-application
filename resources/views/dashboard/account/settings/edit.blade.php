@extends('layouts.app-layout')
@section('title', Auth::user()->first_name . ' ' . Auth::user()->middle_name)

@section('content')
<section class="bg-light">
    <div class="container-fluid">


        <div class="row">
            @include('dashboard.layouts.dashboard-sidebar')

            <div class="col-lg-9 col-md-12">
                <div id="app">
                    <div class="dashboard-wraper settings crop-avatar">
                        <!-- Basic Information -->
                        <div class="form-submit">
                            <!-- Setting Title -->
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="with-actions">{{__('Account Information')}}</h4>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-8 order-lg-0">
                                    <form action="{{route('dashboard.account.settings.update-profile')}}" id="setting-form" method="POST" enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <div class="form-group">
                                            <label for="first_name">{{__('First name')}}</label>
                                            <input type="text" class="form-control" name="first_name" id="first_name" required value="{{Auth::user()->first_name}}">
                                            @if($errors->has('first_name'))
                                            <span class="invalid-feedback d-block">
                                                <strong>
                                                    {{ $errors->first('first_name') }}
                                                </strong>
                                            </span>
                                            @endif
                                        </div>
                                        <!-- Name -->
                                        <div class="form-group">
                                            <label for="middle_name">{{__('Middle name')}}</label>
                                            <input type="text" class="form-control" name="middle_name" id="middle_name" required value="{{Auth::user()->middle_name}}">
                                            @if($errors->has('middle_name'))
                                            <span class="invalid-feedback d-block">
                                                <strong>
                                                    {{ $errors->first('middle_name') }}
                                                </strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="last_name">{{__('Last name')}}</label>
                                            <input type="text" class="form-control" name="last_name" id="last_name" required value="{{Auth::user()->last_name}}">
                                            @if($errors->has('last_name'))
                                            <span class="invalid-feedback d-block">
                                                <strong>
                                                    {{ $errors->first('last_name') }}
                                                </strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="username">{{__('Username')}}</label>
                                            <input type="text" class="form-control" name="username" id="username" required value="{{Auth::user()->username}}">
                                            @if($errors->has('Username'))
                                            <span class="invalid-feedback d-block">
                                                <strong>
                                                    {{ $errors->first('Username') }}
                                                </strong>
                                            </span>
                                            @endif
                                        </div>
                                        <!-- Phone -->
                                        <div class="form-group">
                                            <label for="phone">{{__('Phone')}}</label>
                                            <input type="text" class="form-control" name="phone" id="phone" required value="{{Auth::user()->phone}}">

                                        </div>
                                        <!--Short description-->
                                        <div class="form-group">
                                            <label for="description">{{__('Short description')}}</label>
                                            <textarea class="form-control" name="description" id="description" rows="3" maxlength="300" placeholder="{{__('Tell something about yourself...')}}">{{Auth::user()->description}}</textarea>
                                            @if($errors->has('description'))
                                            <span class="invalid-feedback d-block">
                                                <strong>
                                                    {{ $errors->first('description') }}
                                                </strong>
                                            </span>
                                            @endif
                                        </div>
                                        <!-- Email -->
                                        <div class="form-group">
                                            <label for="email">{{__('Email')}}</label>
                                            <input type="email" class="form-control" name="email" id="email" disabled="disabled" placeholder="{{Auth::user()->email}}" required value="{{Auth::user()->email}}">
                                            <small class="f7 green">{{__('Verified')}}<i class="ml1 far fa-check-circle"></i></small>
                                            @if($errors->has('email'))
                                            <span class="invalid-feedback d-block">
                                                <strong>
                                                    {{ $errors->first('email') }}
                                                </strong>
                                            </span>
                                            @endif
                                        </div>

                                        <!-- Birthday -->
                                        <div class="form-group">
                                            <label for="birth_date">{{__('Birth Date')}}</label>
                                            <input type="date" class="form-control" name="birth_date" id="birth_date" placeholder="{{Auth::user()->birth_date}}" required value="{{Auth::user()->birth_date}}">
                                            @if($errors->has('birth_date'))
                                            <span class="invalid-feedback d-block">
                                                <strong>
                                                    {{ $errors->first('birth_date') }}
                                                </strong>
                                            </span>
                                            @endif
                                        </div>

                                        <!-- Gender -->
                                        <div class="form-group">
                                            <label for="gender">{{__('Gender')}}</label>
                                            <select class="form-control" name="gender" id="gender">
                                                @if(Auth::user()->gender === 'male')
                                                <option value="male" selected>{{__('Male')}}</option>
                                                <option value="female">{{__('Female')}}</option>
                                                @else
                                                <option value="female" selected>{{__('Male')}}</option>
                                                <option value="male">{{__('male')}}</option>
                                                @endif
                                            </select>
                                            @if($errors->has('gender'))
                                            <span class="invalid-feedback d-block">
                                                <strong>
                                                    {{ $errors->first('gender') }}
                                                </strong>
                                            </span>
                                            @endif
                                        </div>
                                        <input type="file" name="profile_image" id="profileImage" hidden>
                                        @if(request()->user()->isBroker)

                                        <x-broker.legal-info />
                                        @endif
                                        <button type="submit" class="btn btn-primary fw6">{{__('Save')}}</button>
                                    </form>
                                </div>

                                <div class="col-lg-4 order-lg-12">
                                    <form id="avatar-upload-form" enctype="multipart/form-data" action="javascript:void(0)" onsubmit="return false">
                                        <div class="avatar-upload-container">
                                            <div class="form-group">
                                                <label for="account-avatar">{{__('Profile picture')}}</label>
                                                <div id="account-avatar">
                                                    <div class="profile-image">
                                                        <label for="profileImage">
                                                            <div class="avatar-view mt-card-avatar">
                                                                @php
                                                                $user = Auth::user();
                                                                $profileImage = optional($user)->getFirstMediaUrl('profile_images');
                                                                @endphp

                                                                <img class="br2" src="{{ $profileImage ?: asset('custom/profile.jpeg') }}" style="width: 200px;">

                                                                <div class="mt-overlay br2">
                                                                    <span><i class="fa fa-edit"></i></span>
                                                                </div>
                                                            </div>
                                                        </label>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Print messages -->
                                            <div id="print-msg" class="alert dn"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection


@section('styles')
<link media="all" type="text/css" rel="stylesheet" href="{{asset('vendor/core/plugins/language/css/language-public.css?v=2.2.0')}}">
<link media="all" type="text/css" rel="stylesheet" href="themes/resido/plugins/animation.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/resido/plugins/bootstrap/bootstrap.min.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/resido/plugins/ion.rangeSlider.min.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/resido/plugins/dropzone.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/resido/plugins/select2.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/resido/plugins/slick.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/resido/plugins/slick-theme.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/resido/plugins/fontawesome/css/fontawesome.min.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/resido/plugins/icofont.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/resido/plugins/light-box.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/resido/plugins/line-icon.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/resido/plugins/themify.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/resido/css/style.css?v=2.22.0">
<link media="all" type="text/css" rel="stylesheet" href="{{asset('vendor/core/core/table/css/table.css')}}">
<link media="all" type="text/css" rel="stylesheet" href="{{asset('vendor/core/core/base/libraries/datatables/media/css/dataTables.bootstrap.min.css')}}">
<link media="all" type="text/css" rel="stylesheet" href="{{asset('vendor/core/core/base/libraries/datatables/extensions/Buttons/css/buttons.bootstrap.min.css')}}">
<link media="all" type="text/css" rel="stylesheet" href="{{asset('vendor/core/core/base/libraries/datatables/extensions/Responsive/css/responsive.bootstrap.min.css')}}">
<link media="all" type="text/css" rel="stylesheet" href="themes/resido/css/account.css')}}">
<link media="all" type="text/css" rel="stylesheet" href="{{asset('vendor/core/plugins/real-estate/css/app_custom.css')}}">
<link media="all" type="text/css" rel="stylesheet" href="{{asset('themes/resido/css/style.integration.css?v=1698022316')}}">

@endsection



@section('scripts')

<script src="{{asset('themes/resido/plugins/bootstrap/popper.min.js')}}"></script>
<script src="{{asset('themes/resido/plugins/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('themes/resido/plugins/rangeslider.js')}}"></script>
<script src="{{asset('themes/resido/plugins/select2.min.js')}}"></script>
<script src="{{asset('themes/resido/plugins/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('themes/resido/plugins/slick.js')}}"></script>
<script src="{{asset('themes/resido/plugins/slider-bg.js')}}"></script>
<script src="{{asset('themes/resido/plugins/lightbox.js')}}"></script>
<script src="{{asset('themes/resido/plugins/imagesloaded.js')}}"></script>
<script src="{{asset('themes/resido/plugins/lazyload.min.js')}}"></script>
<script src="{{asset('themes/resido/js/wishlist.js?v=2.22.0')}}"></script>
<script src="{{asset('themes/resido/js/app.js?v=2.22.0')}}"></script>
<script src="{{asset('vendor/core/core/media/libraries/lodash/lodash.min.js')}}"></script>

<script src="{{asset('vendor/core/core/base/libraries/select2/js/select2.min.js?v=2.22.0')}}"></script>
<script src="{{asset('vendor/core/core/base/libraries/bootstrap-datepicker/js/bootstrap-datepicker.min.js?v=2.22.0')}}"></script>
<script src="{{asset('vendor/core/core/base/js/core.js?v=2.22.0')}}"></script>
<script src="{{asset('vendor/core/core/base/libraries/toastr/toastr.min.js?v=2.22.0')}}"></script>
<script src="{{asset('vendor/core/core/base/libraries/mcustom-scrollbar/jquery.mCustomScrollbar.js?v=2.22.0')}}"></script>
<script src="{{asset('vendor/core/core/base/libraries/stickytableheaders/jquery.stickytableheaders.js?v=2.22.0')}}"></script>
<script src="{{asset('vendor/core/core/base/libraries/fancybox/jquery.fancybox.min.js?v=2.22.0')}}"></script>
<script src="{{asset('vendor/core/core/base/libraries/datatables/media/js/jquery.dataTables.min.js?v=2.22.0')}}"></script>
<script src="{{asset('vendor/core/core/base/libraries/datatables/media/js/dataTables.bootstrap.min.js?v=2.22.0')}}"></script>
<script src="{{asset('vendor/core/core/base/libraries/datatables/extensions/Buttons/js/dataTables.buttons.min.js?v=2.22.0')}}"></script>
<script src="{{asset('vendor/core/core/base/libraries/datatables/extensions/Buttons/js/buttons.bootstrap.min.js?v=2.22.0')}}"></script>
<script src="{{asset('vendor/core/core/base/libraries/datatables/extensions/Responsive/js/dataTables.responsive.min.js?v=2.22.0')}}"></script>
<script src="{{asset('vendor/core/core/base/libraries/moment-with-locales.min.js?v=2.22.0')}}"></script>
<script src="{{asset('vendor/core/plugins/language/js/language-global.js?v=2.22.0')}}"></script>
<script src="{{asset('vendor/core/core/base/libraries/bootstrap3-typeahead.min.js?v=2.22.0')}}"></script>
<script src="{{asset('vendor/core/core/table/js/table.js?v=2.22.0')}}"></script>
<script src="{{asset('vendor/core/core/table/js/filter.js?v=2.22.0')}}"></script>
<script src="{{asset('vendor/core/plugins/language/js/language-public.js?v=2.2.0')}}"></script>

@endsection