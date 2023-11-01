@extends('layouts.app-layout')
@section('title', Auth::user()->first_name . ' ' . Auth::user()->last_name)

@section('content')
<section class="bg-light">
    <div class="container-fluid">


        <div class="row">
            @include('dashboard.layouts.dashboard-sidebar')

            <div class="col-lg-9 col-md-12">
                <div id="app">



                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="dashboard-stat widget-1">
                                <div class="dashboard-stat-content">
                                    <h4>0</h4>
                                    <span>Approved properties</span>
                                </div>
                                <div class="dashboard-stat-icon"><i class="ti-location-pin"></i></div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="dashboard-stat widget-2">
                                <div class="dashboard-stat-content">
                                    <h4>0</h4>
                                    <span>Pending approve properties</span>
                                </div>
                                <div class="dashboard-stat-icon"><i class="ti-pie-chart"></i></div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="dashboard-stat widget-3">
                                <div class="dashboard-stat-content">
                                    <h4>0</h4>
                                    <span>Rejected properties</span>
                                </div>
                                <div class="dashboard-stat-icon"><i class="ti-user"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div id="app" data-v-app="">
                            <div class="dashboard-wraper">
                                <div class="page-content">
                                    <div class="table-wrapper">
                                        <div class="table-configuration-wrap"><span class="configuration-close-btn btn-show-table-options"><i class="fa fa-times"></i></span>
                                            <div class="wrapper-filter">
                                                <p>Filters</p><input class="filter-data-url" type="hidden" value="https://resido.thesky9.com/admin/tables/get-filter-input">
                                                <div class="sample-filter-item-wrap hidden">
                                                    <div class="filter-item form-filter">
                                                        <div class="ui-select-wrapper form-group mb-0"><select class="filter-column-key ui-select" wrapper_class="mb-0" name="filter_columns[]">
                                                                <option value="name">Name</option>
                                                                <option value="moderation_status">Moderation status</option>
                                                                <option value="created_at">Created At</option>
                                                            </select><svg class="svg-next-icon svg-next-icon-size-16"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                    <path d="M10 16l-4-4h8l-4 4zm0-12L6 8h8l-4-4z"></path>
                                                                </svg></svg></div>
                                                        <div class="ui-select-wrapper form-group mb-0"><select class="filter-operator filter-column-operator ui-select" wrapper_class="mb-0" name="filter_operators[]">
                                                                <option value="like">Contains</option>
                                                                <option value="=">Is equal to</option>
                                                                <option value=">">Greater than</option>
                                                                <option value="<">Less than</option>
                                                            </select><svg class="svg-next-icon svg-next-icon-size-16"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                    <path d="M10 16l-4-4h8l-4 4zm0-12L6 8h8l-4-4z"></path>
                                                                </svg></svg></div><span class="filter-column-value-wrap"><input class="form-control filter-column-value" name="filter_values[]" type="text" placeholder="Value"></span><span class="btn-remove-filter-item" title="Delete"><i class="fa fa-trash text-danger"></i></span>
                                                    </div>
                                                </div>
                                                <form method="GET" action="https://resido.thesky9.com/en/account/properties" accept-charset="UTF-8" class="filter-form"><input class="filter-data-table-id" name="filter_table_id" type="hidden" value="botble-real-estate-tables-account-property-table"><input class="filter-data-class" name="class" type="hidden" value="Botble\RealEstate\Tables\AccountPropertyTable">
                                                    <div class="filter_list inline-block filter-items-wrap">
                                                        <div class="filter-item form-filter filter-item-default">
                                                            <div class="ui-select-wrapper form-group mb-0"><select class="filter-column-key ui-select" wrapper_class="mb-0" name="filter_columns[]">
                                                                    <option value="">Select field</option>
                                                                    <option value="name">Name</option>
                                                                    <option value="moderation_status">Moderation status</option>
                                                                    <option value="created_at">Created At</option>
                                                                </select><svg class="svg-next-icon svg-next-icon-size-16"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                        <path d="M10 16l-4-4h8l-4 4zm0-12L6 8h8l-4-4z"></path>
                                                                    </svg></svg></div>
                                                            <div class="ui-select-wrapper form-group mb-0"><select class="filter-operator filter-column-operator ui-select" wrapper_class="mb-0" name="filter_operators[]">
                                                                    <option value="like">Contains</option>
                                                                    <option value="=">Is equal to</option>
                                                                    <option value=">">Greater than</option>
                                                                    <option value="<">Less than</option>
                                                                </select><svg class="svg-next-icon svg-next-icon-size-16"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                        <path d="M10 16l-4-4h8l-4 4zm0-12L6 8h8l-4-4z"></path>
                                                                    </svg></svg></div><span class="filter-column-value-wrap"><input class="form-control filter-column-value" name="filter_values[]" type="text" placeholder="Value"></span><span class="btn-reset-filter-item" title="Reset"><i class="fa fa-eraser text-info" style="font-size: 13px;"></i></span>
                                                        </div>
                                                    </div>
                                                    <div style="margin-top: 10px;"><a class="btn btn-secondary add-more-filter" href="javascript:;">Add additional filter</a><a class="btn btn-info hidden" href="https://resido.thesky9.com/en/account/properties">Reset</a><button class="btn btn-primary btn-apply" type="submit">Apply</button></div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="portlet light portlet-no-padding">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <div class="wrapper-action">
                                                        <div class="btn-group">
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <div class="dropdown dropdown-hover"><a href="javascript:;">Bulk changes <i class="fa fa-angle-right"></i></a>
                                                                        <div class="dropdown-content"><a class="bulk-change-item" data-key="name" data-class-item="Botble\RealEstate\Tables\AccountPropertyTable" data-save-url="https://resido.thesky9.com/admin/tables/bulk-change/save" href="#">Name</a><a class="bulk-change-item" data-key="moderation_status" data-class-item="Botble\RealEstate\Tables\AccountPropertyTable" data-save-url="https://resido.thesky9.com/admin/tables/bulk-change/save" href="#">Moderation status</a><a class="bulk-change-item" data-key="created_at" data-class-item="Botble\RealEstate\Tables\AccountPropertyTable" data-save-url="https://resido.thesky9.com/admin/tables/bulk-change/save" href="#">Created At</a></div>
                                                                    </div>
                                                                </li>
                                                                <li><a data-trigger-bulk-action="" data-method="DELETE" data-table-target="Botble\RealEstate\Tables\AccountPropertyTable" data-target="Botble\Table\BulkActions\DeleteBulkAction" data-confirmation-modal-title="Confirm to perform this action" data-confirmation-modal-message="Are you sure you want to do this action? This cannot be undone." data-confirmation-modal-button="Delete" data-confirmation-modal-cancel-button="Cancel" href="https://resido.thesky9.com/admin/real-estate/properties/items/destroy"> Delete </a></li>
                                                            </ul>
                                                        </div><button class="btn btn-primary btn-show-table-options">Filters</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="table-responsive table-has-actions table-has-filter" style="overflow-x: inherit;">
                                                    <div id="botble-real-estate-tables-account-property-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                                        <div id="botble-real-estate-tables-account-property-table_filter" class="dataTables_filter"><label><input type="search" class="form-control input-sm" placeholder="Search..." aria-controls="botble-real-estate-tables-account-property-table"></label></div>
                                                        <div class="dt-buttons btn-group flex-wrap">

                                                            <button class="btn btn-secondary buttons-reload" tabindex="0" aria-controls="botble-real-estate-tables-account-property-table" type="button"><span><i class="fas fa-sync"></i> Reload</span></button>
                                                        </div>
                                                        <div id="botble-real-estate-tables-account-property-table_processing" class="dataTables_processing panel panel-default" style="display: none;"></div>






                                                        <table class="table table-striped table-hover vertical-middle dataTable no-footer dtr-inline" id="botble-real-estate-tables-account-property-table" role="grid" aria-describedby="botble-real-estate-tables-account-property-table_info">
                                                            <thead>
                                                                <tr role="row">
                                                                    <th width="20" class="text-start no-column-visibility sorting_disabled" rowspan="1" colspan="1" style="width: 20px;" aria-label=""><input class="table-check-all" data-set=".dataTable .checkboxes" name="" type="checkbox"></th>
                                                                    <th title="ID" width="20px" class="column-key-id sorting_desc" tabindex="0" aria-controls="botble-real-estate-tables-account-property-table" rowspan="1" colspan="1" style="width: 20px;" aria-sort="descending" aria-label="IDorderby asc">ID</th>
                                                                    <th title="Image" width="50px" class="no-sort column-key-image sorting_disabled" rowspan="1" colspan="1" style="width: 50px;" aria-label="Image">Image</th>
                                                                    <th title="Name" class="text-start column-key-name sorting" tabindex="0" aria-controls="botble-real-estate-tables-account-property-table" rowspan="1" colspan="1" aria-label="Nameorderby asc">Name</th>
                                                                    <th title="Created At" width="100px" class="text-start column-key-created_at sorting" tabindex="0" aria-controls="botble-real-estate-tables-account-property-table" rowspan="1" colspan="1" style="width: 100px;" aria-label="Created Atorderby asc">Created At</th>
                                                                    <th title="Moderation status" width="150px" class="column-key-moderation_status sorting" tabindex="0" aria-controls="botble-real-estate-tables-account-property-table" rowspan="1" colspan="1" style="width: 150px;" aria-label="Moderation statusorderby asc">Moderation status</th>
                                                                    <th title="Expire date" width="150px" class="column-key-expire_date sorting" tabindex="0" aria-controls="botble-real-estate-tables-account-property-table" rowspan="1" colspan="1" style="width: 150px;" aria-label="Expire dateorderby asc">Expire date</th>
                                                                    <th title="Languages" class="text-center language-header no-sort sorting_disabled" width="80px" rowspan="1" colspan="1" style="width: 80px;" aria-label=""><img src="https://resido.thesky9.com/vendor/core/core/base/images/flags/us.svg" title="English" width="16" alt="English"><img src="https://resido.thesky9.com/vendor/core/core/base/images/flags/vn.svg" title="Tiếng Việt" width="16" alt="Tiếng Việt"></th>
                                                                    <th title="Operations" width="134" class="text-center sorting_disabled" rowspan="1" colspan="1" style="width: 134px;" aria-label="Operations">Operations</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr role="row" class="odd">
                                                                    <td class="text-start no-column-visibility dtr-control">
                                                                        <div class="text-start">
                                                                            <div class="checkbox checkbox-primary table-checkbox">
                                                                                <input class="checkboxes" name="id[]" type="checkbox" value="18">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="column-key-id sorting_1">18</td>
                                                                    <td class=" no-sort  column-key-image"><img src="https://resido.thesky9.com/storage/accounts/homepod-150x150.png" width="50" alt="ali"></td>
                                                                    <td class=" text-start  column-key-name"><a href="https://resido.thesky9.com/en/account/properties/edit/18">ali</a></td>
                                                                    <td class=" text-start  column-key-created_at">2023-11-01</td>
                                                                    <td class="  column-key-moderation_status"><span class="label-warning status-label">Pending</span></td>
                                                                    <td class="  column-key-expire_date">2023-12-16</td>
                                                                    <td class=" text-center language-header no-sort">
                                                                        <div class="text-center language-column">
                                                                            <i class="fa fa-check text-success"></i>
                                                                            <i class="fa fa-check text-success"></i>
                                                                        </div>
                                                                    </td>
                                                                    <td class=" text-center">
                                                                        <div class="table-actions">
                                                                            <a href="https://resido.thesky9.com/en/account/properties/edit/18" class="btn btn-icon btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-edit"></i></a>

                                                                            <a href="#" class="btn btn-icon btn-sm btn-danger deleteDialog" data-section="https://resido.thesky9.com/en/account/properties/18" role="button" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                                                <i class="fa fa-trash"></i>
                                                                            </a>

                                                                            <a href="#" class="btn btn-icon btn-sm btn-info button-renew" data-section="https://resido.thesky9.com/en/account/properties/renew/18" role="button" data-bs-toggle="tooltip" data-bs-original-title="Renew">
                                                                                <i class="fas fa-sync-alt"></i>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>







                                                        <div class="datatables__info_wrap">
                                                            <div class="dataTables_paginate paging_simple_numbers" id="botble-real-estate-tables-account-property-table_paginate" style="display: none;">
                                                                <ul class="pagination">
                                                                    <li class="paginate_button previous disabled" id="botble-real-estate-tables-account-property-table_previous"><a href="#" aria-controls="botble-real-estate-tables-account-property-table" aria-label="&amp;laquo; Previous" data-dt-idx="0" tabindex="0">« Previous</a></li>
                                                                    <li class="paginate_button next disabled" id="botble-real-estate-tables-account-property-table_next"><a href="#" aria-controls="botble-real-estate-tables-account-property-table" aria-label="Next &amp;raquo;" data-dt-idx="1" tabindex="0">Next »</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="dataTables_length" id="botble-real-estate-tables-account-property-table_length" style="display: none;"><label><span class="dt-length-style"><select name="botble-real-estate-tables-account-property-table_length" aria-controls="botble-real-estate-tables-account-property-table" class="form-control input-sm">
                                                                            <option value="10">10</option>
                                                                            <option value="30">30</option>
                                                                            <option value="50">50</option>
                                                                            <option value="100">100</option>
                                                                            <option value="500">500</option>
                                                                            <option value="-1">All</option>
                                                                        </select></span></label></div>
                                                            <div class="dataTables_info" id="botble-real-estate-tables-account-property-table_info" role="status" aria-live="polite" style="display: none;">No record</div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade modal-confirm-delete" role="dialog" tabindex="-1">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger">
                                            <h4 class="modal-title"><i class="til_img"></i><strong>Confirm delete</strong></h4><button class="btn-close" data-bs-dismiss="modal" type="button" aria-hidden="true"></button>
                                        </div>
                                        <div class="modal-body with-padding" data-select2-dropdown-parent="">
                                            <div>Do you really want to delete this record?</div>
                                        </div>
                                        <div class="modal-footer"><button class="float-start btn btn-warning" data-bs-dismiss="modal" type="button">Cancel</button><button class="float-end btn btn-danger delete-crud-entry">Delete</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade delete-many-modal" role="dialog" tabindex="-1">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger">
                                            <h4 class="modal-title"><i class="til_img"></i><strong>Confirm delete</strong></h4><button class="btn-close" data-bs-dismiss="modal" type="button" aria-hidden="true"></button>
                                        </div>
                                        <div class="modal-body with-padding" data-select2-dropdown-parent="">
                                            <div>Do you really want to delete selected record(s)?</div>
                                        </div>
                                        <div class="modal-footer"><button class="float-start btn btn-warning" data-bs-dismiss="modal" type="button">Cancel</button><button class="float-end btn btn-danger delete-many-entry-button">Delete</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade modal-bulk-change-items" role="dialog" tabindex="-1">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header bg-info">
                                            <h4 class="modal-title"><i class="til_img"></i><strong>Bulk changes</strong></h4><button class="btn-close" data-bs-dismiss="modal" type="button" aria-hidden="true"></button>
                                        </div>
                                        <div class="modal-body with-padding" data-select2-dropdown-parent="">
                                            <div>
                                                <div class="modal-bulk-change-content"></div>
                                            </div>
                                        </div>
                                        <div class="modal-footer"><button class="float-start btn btn-warning" data-bs-dismiss="modal" type="button">Cancel</button><button class="float-end btn btn-info confirm-bulk-change-button" data-load-url="https://resido.thesky9.com/admin/tables/bulk-change/data">Submit</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade bulk-action-confirm-modal" role="dialog" tabindex="-1">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger">
                                            <h4 class="modal-title"><i class="til_img"></i><strong></strong></h4><button class="btn-close" data-bs-dismiss="modal" type="button" aria-hidden="true"></button>
                                        </div>
                                        <div class="modal-body with-padding" data-select2-dropdown-parent="">
                                            <div></div>
                                        </div>
                                        <div class="modal-footer"><button class="float-start btn btn-warning" data-bs-dismiss="modal" type="button">Cancel</button><button class="float-end btn btn-danger confirm-trigger-bulk-actions-button"></button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade single-action-confirm-modal" role="dialog" tabindex="-1">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger">
                                            <h4 class="modal-title"><i class="til_img"></i><strong></strong></h4><button class="btn-close" data-bs-dismiss="modal" type="button" aria-hidden="true"></button>
                                        </div>
                                        <div class="modal-body with-padding" data-select2-dropdown-parent="">
                                            <div></div>
                                        </div>
                                        <div class="modal-footer"><button class="float-start btn btn-warning" data-bs-dismiss="modal" type="button">Cancel</button><button class="float-end btn btn-danger confirm-trigger-single-action-button"></button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade modal-confirm-renew" role="dialog" tabindex="-1">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header bg-info">
                                            <h4 class="modal-title"><i class="til_img"></i><strong>Renew confirmation</strong></h4><button class="btn-close" data-bs-dismiss="modal" type="button" aria-hidden="true"></button>
                                        </div>
                                        <div class="modal-body with-padding" data-select2-dropdown-parent="">
                                            <div>Are you sure you want to renew this property, it will takes 1 credit from your credits</div>
                                        </div>
                                        <div class="modal-footer"><button class="float-start btn btn-warning" data-bs-dismiss="modal" type="button">Cancel</button><button class="float-end btn btn-info button-confirm-renew">Yes</button></div>
                                    </div>
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


@section('styles')
<link media="all" type="text/css" rel="stylesheet" href="vendor/core/plugins/language/css/language-public.css?v=2.2.0">
<link media="all" type="text/css" rel="stylesheet" href="themes/resido/plugins/animation.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/resido/plugins/bootstrap/bootstrap.min.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/resido/plugins/ion.rangeSlider.min.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/resido/plugins/dropzone.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/resido/plugins/select2.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/resido/plugins/slick.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/resido/plugins/slick-theme.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/resido/plugins/fontawesome/css/fontawesome.min.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/resido/plugins/icofont.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/resido/plugins/light-box.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/resido/plugins/line-icon.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/resido/plugins/themify.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/resido/css/style.css?v=2.22.0">
<link media="all" type="text/css" rel="stylesheet" href="vendor/core/core/table/css/table.css">
<link media="all" type="text/css" rel="stylesheet" href="vendor/core/core/base/libraries/datatables/media/css/dataTables.bootstrap.min.css">
<link media="all" type="text/css" rel="stylesheet" href="vendor/core/core/base/libraries/datatables/extensions/Buttons/css/buttons.bootstrap.min.css">
<link media="all" type="text/css" rel="stylesheet" href="vendor/core/core/base/libraries/datatables/extensions/Responsive/css/responsive.bootstrap.min.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/resido/css/account.css">
<link media="all" type="text/css" rel="stylesheet" href="vendor/core/plugins/real-estate/css/app_custom.css">
<link media="all" type="text/css" rel="stylesheet" href="themes/resido/css/style.integration.css?v=1698022316">
<link type="application/atom+xml" rel="alternate" title="Properties feed" href="https://resido.thesky9.com/en/feed/properties">
<link type="application/atom+xml" rel="alternate" title="Properties feed" href="https://resido.thesky9.com/vi/feed/properties">
<link href="https://www.google.com" rel="preconnect">
<link href="https://www.gstatic.com" rel="preconnect" crossorigin>

@endsection



@section('scripts')

<script src="themes/resido/plugins/bootstrap/popper.min.js"></script>
<script src="themes/resido/plugins/bootstrap/bootstrap.min.js"></script>
<script src="themes/resido/plugins/rangeslider.js"></script>
<script src="themes/resido/plugins/select2.min.js"></script>
<script src="themes/resido/plugins/jquery.magnific-popup.min.js"></script>
<script src="themes/resido/plugins/slick.js"></script>
<script src="themes/resido/plugins/slider-bg.js"></script>
<script src="themes/resido/plugins/lightbox.js"></script>
<script src="themes/resido/plugins/imagesloaded.js"></script>
<script src="themes/resido/plugins/lazyload.min.js"></script>
<script src="themes/resido/js/wishlist.js?v=2.22.0"></script>
<script src="themes/resido/js/app.js?v=2.22.0"></script>
<script src="vendor/core/core/media/libraries/lodash/lodash.min.js"></script>

<script src="vendor/core/core/base/libraries/select2/js/select2.min.js?v=2.22.0"></script>
<script src="vendor/core/core/base/libraries/bootstrap-datepicker/js/bootstrap-datepicker.min.js?v=2.22.0"></script>
<script src="vendor/core/core/base/js/core.js?v=2.22.0"></script>
<script src="vendor/core/core/base/libraries/toastr/toastr.min.js?v=2.22.0"></script>
<script src="vendor/core/core/base/libraries/mcustom-scrollbar/jquery.mCustomScrollbar.js?v=2.22.0"></script>
<script src="vendor/core/core/base/libraries/stickytableheaders/jquery.stickytableheaders.js?v=2.22.0"></script>
<script src="vendor/core/core/base/libraries/fancybox/jquery.fancybox.min.js?v=2.22.0"></script>
<script src="vendor/core/core/base/libraries/datatables/media/js/jquery.dataTables.min.js?v=2.22.0"></script>
<script src="vendor/core/core/base/libraries/datatables/media/js/dataTables.bootstrap.min.js?v=2.22.0"></script>
<script src="vendor/core/core/base/libraries/datatables/extensions/Buttons/js/dataTables.buttons.min.js?v=2.22.0"></script>
<script src="vendor/core/core/base/libraries/datatables/extensions/Buttons/js/buttons.bootstrap.min.js?v=2.22.0"></script>
<script src="vendor/core/core/base/libraries/datatables/extensions/Responsive/js/dataTables.responsive.min.js?v=2.22.0"></script>
<script src="vendor/core/core/base/libraries/moment-with-locales.min.js?v=2.22.0"></script>
<script src="vendor/core/plugins/language/js/language-global.js?v=2.22.0"></script>
<script src="vendor/core/core/base/libraries/bootstrap3-typeahead.min.js?v=2.22.0"></script>
<script src="vendor/core/core/table/js/table.js?v=2.22.0"></script>
<script src="vendor/core/core/table/js/filter.js?v=2.22.0"></script>
<script src="vendor/core/plugins/language/js/language-public.js?v=2.2.0"></script>

@endsection