@extends('layouts.app-layout')
@section('title','Plans')

@section('content')
<div id="app">
    <div>
        <x-plans :plans="$plans" />
    </div>
</div>
@endsection