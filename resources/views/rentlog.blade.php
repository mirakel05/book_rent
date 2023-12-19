@extends('layouts.mainlayout')

@section('title', 'Rent Log')
@section('rentlog', 'active')

@section('content')
    <div class="container-fluid">
        <x-rent-log-table :rentlog='$rent_logs' />
    </div>
@endsection
