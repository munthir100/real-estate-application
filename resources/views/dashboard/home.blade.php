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
                    <x-dashboard.properties.properties-count :properties="$properties"/>
                    <div class="dashboard-wraper">
                        <div class="page-content">
                            <!-- Search Form and Create Button on the same line -->
                            <div class="d-flex justify-content-between mb-3">
                                <div class="col-2">

                                    <div class="input-group">
                                        <form action="search" method="get">
                                            @csrf
                                            <input type="text" class="form-control" id="searchInput" placeholder="{{__('Search')}}">
                                        </form>

                                    </div>
                                </div>
                                <a href="{{route('dashboard.properties.create')}}" class="btn btn-info"><i class="fas fa-plus"></i> {{__('Create')}}</a>
                            </div>

                            <!-- Table -->
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr role="row">

                                        <th class="text-center">{{__('Name')}}</th>
                                        <th class="text-center">{{__('Created at')}}</th>
                                        <th class="text-center">{{__('Status')}}</th>
                                        <th class="text-center">{{__('Operations')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($properties as $property)
                                    <tr role="row">
                                        <td>{{ $property->title }}</td>
                                        <td>{{ $property->created_at->diffForHumans() }}</td>
                                        <td>
                                            <x-status-class :statusId="$property->status_id" />
                                        </td>
                                        <td>
                                            <div class="table-actions text-center">
                                                <a href="{{ route('dashboard.properties.edit', $property->id) }}" class="btn btn-icon btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-original-title="{{__('Edit')}}"><i class="fa fa-edit"></i></a>
                                                <button href="#" class="btn btn-icon btn-sm btn-danger delete-button" data-bs-toggle="modal" data-bs-target="#modal-confirm-delete-{{ $property->id }}">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Modal for delete confirmation -->
                                    <div class="modal fade modal-confirm-delete" id="modal-confirm-delete-{{ $property->id }}" role="dialog" tabindex="-1">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header bg-danger">
                                                    <h4 class="modal-title"><i class="til_img"></i><strong>{{__('Confirm delete')}}</strong></h4>
                                                    <button class="btn-close" data-bs-dismiss="modal" type="button" aria-hidden="true"></button>
                                                </div>
                                                <div class="modal-body with-padding" data-select2-dropdown-parent>
                                                    <div>{{__('Do you really want to delete this record?')}}</div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-warning" data-bs-dismiss="modal" type="button">{{__('Cancel')}}</button>

                                                    <button type="button" class="btn btn-danger delete-crud-entry" id="delete-button{{ $property->id }}" data-property-id="{{ $property->id }}">{{__('Delete')}}<button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <x-dashboard.delete-property :property="$property" />

                                    @empty
                                    <tr role="row">
                                        <td colspan="5" class="text-center" style="height: 100px;">{{__('No properties found')}}.</td>
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



@endsection