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
                            <h2 class="text-center">Email Verification Code</h2>
                            <br>

                            <form method="POST" class="simple-form" action="{{route('auth.verifyCode')}}">
                                @csrf
                                <div class="form-group">
                                    <div class="input-with-icon">
                                        <input id="text" type="text" class="form-control" name="code" value="" required placeholder="Verification Code">
                                        <i class="ti-email"></i>
                                    </div>
                                </div>

                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-md full-width btn-theme-light-2 rounded">
                                        Verify
                                    </button>
                                    <div class="text-center">
                                        <a href="{{route('auth.code.resend')}}" class="btn btn-link">Resend code</a>
                                    </div>
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