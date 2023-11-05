@php
$statusClass = '';

switch ($statusId) {
case \App\Models\Status::PUBLISHED:
$statusClass = 'success';
$status = 'overdue';
break;
case \App\Models\Status::PENDING:
$statusClass = 'warning';
$status = 'Pending';
break;
default:
$statusClass = 'warning';
break;
}
@endphp


<span class="label-{{$statusClass}} status-label">{{$status}}</span>