@php
$statusClass = '';

switch ($statusId) {
case \App\Models\Status::ACCEPTED:
$statusClass = 'success';
$status = 'Accepted';
break;
case \App\Models\Status::PENDING:
$statusClass = 'warning';
$status = 'Pending';
break;
case \App\Models\Status::REJECTED:
$statusClass = 'danger';
$status = 'Rejected';
break;
default:
$statusClass = 'warning';
break;
}
@endphp


<span class="label-{{$statusClass}} status-label">{{$status}}</span>