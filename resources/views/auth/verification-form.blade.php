@extends('layouts.app-layout')
@section('title','Login')

@section('content')

<div id="app">
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h2 class="text-center">{{__('Email OTP')}}</h2>
                            <br>

                            <form method="POST" class="simple-form" action="{{route('auth.verifyCode')}}">
                                @csrf
                                <div class="form-group">
                                    <div class="input-with-icon">
                                        <input id="text" type="text" class="form-control" name="otp" value="" required placeholder="{{__('Verification Code')}}">
                                        <i class="ti-email"></i>
                                    </div>
                                </div>

                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-md full-width btn-theme-light-2 rounded">
                                        {{__('Verify')}}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection