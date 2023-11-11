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
                            <h2 class="text-center">Register</h2>
                            <br>

                            <form method="POST" class="simple-form" action="{{route('register')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <input id="first_name" type="text" class="form-control" name="first_name" value="" required autofocus placeholder="First name">
                                                <i class="ti-user"></i>

                                                @error('first_name')
                                                <span class="d-block invalid-feedback">
                                                    <strong>
                                                        {{$message}}
                                                    </strong>
                                                </span>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <input id="last_name" type="text" class="form-control" name="last_name" value="" required placeholder="Last name">
                                                <i class="ti-user"></i>

                                                @error('last_name')
                                                <span class="d-block invalid-feedback">
                                                    <strong>
                                                        {{$message}}
                                                    </strong>
                                                </span>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <input id="email" type="email" class="form-control" name="email" value="" required placeholder="Email">
                                                <i class="ti-email"></i>

                                                @error('email')
                                                <span class="d-block invalid-feedback">
                                                    <strong>
                                                        {{$message}}
                                                    </strong>
                                                </span>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <input id="username" type="text" class="form-control" name="username" value="" required placeholder="Username">
                                                <i class="ti-user"></i>

                                                @error('username')
                                                <span class="d-block invalid-feedback">
                                                    <strong>
                                                        {{$message}}
                                                    </strong>
                                                </span>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <input id="phone" type="number" class="form-control" name="phone" value="" required placeholder="phone">
                                                <i class="ti-mobile"></i>

                                                @error('phone')
                                                <span class="d-block invalid-feedback">
                                                    <strong>
                                                        {{$message}}
                                                    </strong>
                                                </span>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <input id="birth_date" type="date" class="form-control" name="birth_date" value="" required placeholder="birth_date">
                                                <i class="fas fa-birthday-cake"></i>


                                                @error('birth_date')
                                                <span class="d-block invalid-feedback">
                                                    <strong>
                                                        {{$message}}
                                                    </strong>
                                                </span>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <select id="maxprice" data-placeholder="Gender" name="gender" class="form-control">
                                                    <option value="male">male</option>
                                                    <option value="female">female</option>
                                                </select>
                                                <i class="fas fa-male"></i>


                                                @error('birth_date')
                                                <span class="d-block invalid-feedback">
                                                    <strong>
                                                        {{$message}}
                                                    </strong>
                                                </span>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                                                <i class="ti-unlock"></i>

                                                @error('password')
                                                <span class="d-block invalid-feedback">
                                                    <strong>
                                                        {{$message}}
                                                    </strong>
                                                </span>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
                                                <i class="ti-unlock"></i>

                                                @error('password')
                                                <span class="d-block invalid-feedback">
                                                    <strong>
                                                        {{$message}}
                                                    </strong>
                                                </span>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>




                                    <div class="col-lg-6 col-md-6" id="commercial-info" style="display: none;">
                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <input id="commertial_number" type="text" class="form-control" name="commertial_number" placeholder="Commercial Registration Number">
                                                <i class="ti-agenda"></i>
                                            </div>
                                        </div>
                                        @error('commercial_number')
                                        <span class="d-block invalid-feedback">
                                            <strong>
                                                {{$message}}
                                            </strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6 col-md-6" id="company-info" style="display: none;">
                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <input id="company_name" type="text" class="form-control" name="company_name" placeholder="Name of Company">
                                                <i class="ti-home"></i>
                                            </div>
                                        </div>
                                        @error('company_name')
                                        <span class="d-block invalid-feedback">
                                            <strong>
                                                {{$message}}
                                            </strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6 col-md-6" id="tax-number" style="display: none;">
                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <input id="tax_number" type="text" class="form-control" name="tax_number" placeholder="Tax Number">
                                                <i class="ti-receipt"></i>
                                            </div>
                                        </div>
                                        @error('password')
                                        <span class="d-block invalid-feedback">
                                            <strong>
                                                {{$message}}
                                            </strong>
                                        </span>
                                        @enderror
                                    </div>


                                    <div class="col-lg-6 col-md-6" id="office-name" style="display: none;">
                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <input id="office_name" type="text" class="form-control" name="office_name" placeholder="Name of Office">
                                                <i class="ti-home"></i>
                                            </div>
                                        </div>
                                        @error('password')
                                        <span class="d-block invalid-feedback">
                                            <strong>
                                                {{$message}}
                                            </strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6 col-md-6">

                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <select id="user_type" name="user_type" class="form-control">
                                                    <option value="regular">Regular User</option>
                                                    <option value="broker">Broker</option>
                                                </select>
                                                <i class="ti-user"></i>
                                            </div>
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
                                <div class="form-group">
                                    <button type="submit" class="btn btn-md full-width btn-theme-light-2 rounded">
                                        Register
                                    </button>
                                </div>

                                <div class="form-group text-center">
                                    <p>Have an account already?
                                        <a href="{{route('loginForm')}}" class="link d-block d-sm-inline-block text-sm-left text-center">Login</a>
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