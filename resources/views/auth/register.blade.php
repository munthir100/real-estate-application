@extends('layouts.app-layout')
@section('title','Register')

@section('content')
<div id="app">
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="modal-content" id="sign-up">
                        <div class="modal-body">
                            <h2 class="text-center">{{__('Register')}}</h2>
                            <br>

                            <form method="POST" class="simple-form" action="{{route('register')}}">
                                @csrf
                                <div class="row">

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <input id="username" type="text" class="form-control" name="username" required placeholder="{{__('Email / Phone')}}">
                                                <i class="ti-email"></i>
                                            </div>
                                            @error('username')
                                            <span class="d-block invalid-feedback">
                                                <strong>
                                                    {{$message}}
                                                </strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <input id="password" type="password" class="form-control" name="password" required placeholder="{{__('Password')}}">
                                                <i class="ti-unlock"></i>
                                            </div>
                                            @error('password')
                                            <span class="d-block invalid-feedback">
                                                <strong>
                                                    {{$message}}
                                                </strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12">

                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <select id="user_type" name="user_type" class="form-control">
                                                    <option value="">{{__('Select Account Type')}}</option>
                                                    <option value="seeker">{{__('Real Estate Seeker')}}</option>
                                                    <option value="broker">{{__('Real Estate Broker')}}</option>
                                                    <option value="developer">{{__('Real Estate Developer')}}</option>
                                                </select>
                                                <i class="ti-user"></i>
                                            </div>
                                        </div>
                                        @error('password')
                                        <span class="d-block invalid-feedback mb-2">
                                            <strong>
                                                {{$message}}
                                            </strong>
                                        </span>
                                        @enderror
                                    </div>



                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-md full-width btn-theme-light-2 rounded">
                                        {{__('Register')}}
                                    </button>
                                </div>

                                <div class="form-group text-center">
                                    <p>{{__('Have an account already?')}}
                                        <a href="{{route('loginForm')}}" class="link d-block d-sm-inline-block text-sm-left text-center">{{__('Login')}}</a>
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
    </section>

</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#user_type').on('change', function() {
            if ($(this).val() === 'broker') {
                $('#commercial-info').show();
                $('#company-info').show();
                $('#tax-number').show();
                $('#office-name').show();
            } else {
                $('#commercial-info').hide();
                $('#company-info').hide();
                $('#tax-number').hide();
                $('#office-name').hide();
            }
        });
    });
</script>

@endsection