@extends('layouts.app-layout')
@section('title', Auth::user()->first_name . ' ' . Auth::user()->middle_name)

@section('content')
<section class="bg-light">
    <div class="container-fluid">


        <div class="row">
            @include('dashboard.layouts.dashboard-sidebar')

            <div class="col-lg-9 col-md-12">
                <div id="app">
                    <div class="dashboard-wraper settings">
                        <!-- Basic Information -->
                        <div class="form-submit">
                            <h4>Security</h4>
                            <div class="submit-section">
                                <div class="row">
                                    <form method="POST" action="{{route('dashboard.account.settings.change-password')}}" class="settings-reset">
                                        @method('put')
                                        @csrf
                                        <div class="form-group">
                                            <label for="old-password">Old password</label>
                                            <input required type="password" class="form-control" name="old_password" id="password">
                                            @error('password') <span class="invalid-feedback d-block">{{$message}}</span>@enderror
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="password">New password</label>
                                            <input required type="password" class="form-control" name="new_password" id="password">
                                            @error('new_password') <span class="invalid-feedback d-block">{{$message}}</span>@enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="new_password_confirmation">Confirmation password</label>
                                            <input required type="password" class="form-control" name="new_password_confirmation" id="new_password_confirmation">
                                            @error('new_password_confirmation') <span class="invalid-feedback d-block">{{$message}}</span>@enderror
                                        </div>
                                        <button type="submit" class="btn btn-theme-light-2">Update password</button>
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