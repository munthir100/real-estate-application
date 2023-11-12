@extends('dashboard.layouts.dashboard-layout')
@section('content')
<section class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="filter_search_opt">
                    <a href="javascript:void(0);" class="open_search_menu">
                        {{__('Dashboard Navigation')}}
                        <i class="ml-2 ti-menu"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            @include('dashboard.layouts.dashboard-sidebar')

            <div class="col-lg-9 col-md-12">
                <div id="app">
                    <div class="dashboard-wraper">
                        <div class="page-content">
                            <!-- Search Form and Create Button on the same line -->
                            <div class="d-flex justify-content-between mb-3">
                                <div class="col-2">

                                    <div class="input-group">
                                        <form method="get">
                                            <input type="text" name="title" class="form-control" id="searchInput" placeholder="Search">
                                        </form>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#createAgentModal"><i class="fas fa-plus"></i> {{__('Create Agent')}}</a>

                            </div>

                            <!-- Table -->
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr role="row">

                                        <th class="text-center">{{__('Full Name')}}</th>
                                        <th class="text-center">{{__('Username')}}</th>
                                        <th class="text-center">{{__('Email')}}</th>
                                        <th class="text-center">{{__('Phone')}}</th>
                                        <th class="text-center">{{__('Operations')}}</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @forelse($agents as $agent)

                                    <tr role="row">
                                        <td>{{$agent->user->first_name}} {{$agent->user->middle_name}}</td>
                                        <td>{{$agent->user->username}}</td>
                                        <td>{{$agent->user->email}}</td>
                                        <td>{{$agent->user->phone}}</td>

                                        <td>
                                            <div class="table-actions text-center">
                                                <a href="{{route('agents.edit',$agent->id)}}" class="btn btn-icon btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-edit"></i></a>
                                                <a class="btn btn-icon btn-sm btn-info" href="{{route('agents.details',$agent->id)}}" data-bs-original-title="View Agent">
                                                    <i class="fa fa-eye"></i>
                                                </a>

                                                <button class="btn btn-icon btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modal-confirm-delete-{{ $agent->id }}" data-property-id="{{$agent->id}}" data-bs-original-title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <x-dashboard.delete-agent :agent="$agent" />



                                    @empty
                                    <tr class="odd">
                                        <td valign="top" colspan="9" class="dataTables_empty">{{__('No data to display')}}</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>


<script>
    $(document).ready(function() {
        $('.delete-crud-entry').click(function(e) {
            e.preventDefault();
            var propertyId = $(this).data('property-id');

            // Create a form element
            var form = $('<form>', {
                'method': 'POST',
                'action': '/properties/' + propertyId, // Update with your route URL
            });

            // Append the CSRF token input field
            form.append('{{ csrf_field() }}');

            // Append the method override field for DELETE
            form.append('<input type="hidden" name="_method" value="DELETE">');

            // Append the form to the body and submit it
            form.appendTo('body').submit();
        });
    });
</script>

<div class="modal fade" id="createAgentModal" tabindex="-1" aria-labelledby="createAgentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createAgentModalLabel">Create Agent</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" accept-charset="UTF-8" id="botble-real-estate-forms-account-property-form" class="js-base-form dirty-check" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="first_name" class="control-label required">{{__('First Name')}}</label>
                                <input required class="form-control" placeholder="{{__('First Name')}}" data-counter="255" v-pre name="first_name" type="text" id="first_name">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="middle_name" class="control-label required">{{__('Middle Name')}}</label>
                                <input required class="form-control" placeholder="{{__('Middle Name')}}" data-counter="255" v-pre name="middle_name" type="text" id="middle_name">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="last_name" class="control-label required">{{__('Last Name')}}</label>
                                <input required class="form-control" placeholder="{{__('Last Name')}}" data-counter="255" v-pre name="last_name" type="text" id="last_name">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="username" class="control-label required">{{__('Username')}}</label>
                                <input required class="form-control" placeholder="{{__('Username')}}" data-counter="255" v-pre name="username" type="text" id="username">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="phone" class="control-label required">{{__('Phone')}}</label>
                                <input required class="form-control" placeholder="{{__('Phone')}}" data-counter="15" v-pre name="phone" type="text" id="phone">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="description" class="control-label required">{{__('Description')}}</label>
                                <textarea required class="form-control" rows="4" placeholder="{{__('Short description')}}" data-counter="350" v-pre name="description" cols="50" id="description"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="birth_date" class="control-label required">{{__('Birth Date')}}</label>
                                <input required class="form-control" placeholder="{{__('Birth Date')}}" v-pre name="birth_date" type="date" id="birth_date">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="email" class="control-label required">{{__('Email')}}</label>
                                <input required class="form-control" placeholder="{{__('Email')}}" data-counter="255" v-pre name="email" type="email" id="email">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="gender" class="control-label required">{{__('Gender')}}</label>
                                <select required class="form-control" v-pre name="{{__('gender')}}" id="gender">
                                    <option value="male">{{__('Male')}}</option>
                                    <option value="female">{{__('Female')}}</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="password" class="control-label required">{{__('Password')}}</label>
                                <input required class="form-control" placeholder="{{__('Password')}}" v-pre name="password" type="password" id="password">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">{{__('Create Agent')}}</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Close')}}</button>
            </div>
        </div>
    </div>
</div>

@endsection