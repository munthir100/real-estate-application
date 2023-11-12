@extends('dashboard.layouts.dashboard-layout')
@section('content')
<section class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="filter_search_opt">
                    <a href="javascript:void(0);" class="open_search_menu">
                        Dashboard Navigation
                        <i class="ml-2 ti-menu"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            @include('dashboard.layouts.dashboard-sidebar')

            <div class="col-lg-9 col-md-12">
                <div id="app">
                    <div class="dashboard-wraper1">

                        <form method="POST" accept-charset="UTF-8" id="botble-real-estate-forms-account-property-form" class="js-base-form dirty-check" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="first_name" class="control-label required">First Name</label>
                                        <input required class="form-control" placeholder="First Name" data-counter="255" v-pre name="first_name" type="text" id="first_name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="middle_name" class="control-label required">Last Name</label>
                                        <input required class="form-control" placeholder="Last Name" data-counter="255" v-pre name="middle_name" type="text" id="middle_name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="last_name" class="control-label required">Last Name</label>
                                        <input required class="form-control" placeholder="Last Name" data-counter="255" v-pre name="last_name" type="text" id="last_name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="username" class="control-label required">Username</label>
                                        <input required class="form-control" placeholder="Username" data-counter="255" v-pre name="username" type="text" id="username">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="phone" class="control-label required">Phone</label>
                                        <input required class="form-control" placeholder="Phone" data-counter="15" v-pre name="phone" type="text" id="phone">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="description" class="control-label required">Description</label>
                                        <textarea required class="form-control" rows="4" placeholder="Short description" data-counter="350" v-pre name="description" cols="50" id="description"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="birth_date" class="control-label required">Birth Date</label>
                                        <input required class="form-control" placeholder="Birth Date" v-pre name="birth_date" type="date" id="birth_date">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="email" class="control-label required">Email</label>
                                        <input required class="form-control" placeholder="Email" data-counter="255" v-pre name="email" type="email" id="email">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="gender" class="control-label required">Gender</label>
                                        <select required class="form-control" v-pre name="gender" id="gender">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="password" class="control-label required">Password</label>
                                        <input required class="form-control" placeholder="Password" v-pre name="password" type="password" id="password">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Create Agent</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection