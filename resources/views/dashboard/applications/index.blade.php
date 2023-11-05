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
                                <a href="{{route('dashboard.applications.create')}}" class="btn btn-outline-secondary"><i class="fas fa-plus"></i> Create</a>
                            </div>

                            <!-- Table -->
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr role="row">

                                        <th class="text-center">Name</th>
                                        <th class="text-center">Created at</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Operations</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($properties as $property)

                                    <tr role="row">
                                        <td>{{$property->title}}</td>
                                        <td>{{ $property->created_at->diffForHumans() }}</td>

                                        <td>
                                            <span class="label-warning status-label">Pending</span>

                                        </td>

                                        <td>
                                            <div class="table-actions text-center">
                                                <a href="{{route('dashboard.properties.edit',$property->id)}}" class="btn btn-icon btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-edit"></i></a>

                                                <a href="#" class="btn btn-icon btn-sm btn-danger deleteDialog" data-section="https://resido.thesky9.com/en/account/properties/18" role="button" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </a>

                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr class="odd">
                                        <td valign="top" colspan="9" class="dataTables_empty">No data to display</td>
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