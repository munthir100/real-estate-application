@php
$pendingProperties = $properties->where('status_id',\App\Models\Status::PENDING)->count();
$approvedProperties = $properties->where('status_id',\App\Models\Status::ACCEPTED)->count();
$rejectedgProperties = $properties->where('status_id',\App\Models\Status::REJECTED)->count();
@endphp
<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="dashboard-stat widget-1">
            <div class="dashboard-stat-content">
                <h4>{{$approvedProperties}}</h4>
                <span>Approved properties</span>
            </div>
            <div class="dashboard-stat-icon"><i class="ti-location-pin"></i></div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="dashboard-stat widget-2">
            <div class="dashboard-stat-content">
                <h4>{{$pendingProperties}}</h4>
                <span>Pending approve properties</span>
            </div>
            <div class="dashboard-stat-icon"><i class="ti-pie-chart"></i></div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="dashboard-stat widget-3">
            <div class="dashboard-stat-content">
                <h4>{{$rejectedgProperties}}</h4>
                <span>Rejected properties</span>
            </div>
            <div class="dashboard-stat-icon"><i class="ti-user"></i></div>
        </div>
    </div>
</div>