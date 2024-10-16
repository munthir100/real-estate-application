@extends('layouts.app-layout')
@section('title','Login')

@section('content')

<div id="app">
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="modal-content" id="registermodal">
                        <div class="modal-body">
                            <h2 class="text-center">{{__('Login')}}</h2>
                            <br>

                            <div class="login-form">
                                <form method="POST" class="simple-form" action="{{route('login')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label>{{__('Email / Phone')}}</label>
                                        <div class="input-with-icon">
                                            <input id="email" type="text" class="form-control" placeholder="{{__('Email / Phone')}}" name="email" value="" autofocus>
                                            <i class="ti-user"></i>
                                        </div>
                                        @if($errors->has('email'))

                                        <span class="invalid-feedback d-block">
                                            <strong>
                                                {{ $errors->first('email') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group ">
                                        <label>{{__('Password')}}</label>
                                        <div class="input-with-icon">
                                            <input id="password" type="password" class="form-control" placeholder="{{__('Password')}}" name="password">
                                            <i class="ti-unlock"></i>
                                        </div>
                                        @error('password')

                                        <span class="invalid-feedback d-block">
                                            <strong>
                                                {{$message}}
                                            </strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="remember">
                                                        {{__('Remember Me')}}
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 text-md-center">
                                                <a class="link">
                                                    {{__('Forgot Your Password?')}}
                                                </a>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <button type="submit" class="btn btn-md full-width btn-theme-light-2 rounded">
                                            {{__('Login')}}
                                        </button>
                                    </div>

                                    <div class="form-group text-center">
                                        <p>{{__('Do not have an account?')}} <a href="{{route('registerForm')}}" class="link d-block d-sm-inline-block text-sm-left text-center">{{__('Register a new account')}}</a>
                                        </p>
                                    </div>

                                    <div class="text-center">

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection