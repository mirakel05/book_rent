@extends('layouts.mainlayout')

@section('title', 'Dashboard')
@section('dashboard', 'active')
@section('laporan', 'show')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 text-capitalize">Welcome, {{ auth()->user()->username }}</h1>
        </div>
        @if (session('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    text: '{{ session('success') }}'
                })
            </script>
        @endif
        <div class="row">
            <div class="col-xl-4 col-md-6 mb-4 ">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text font-weight-bold text-primary text-uppercase mb-1">
                                    <h3>Buku</h3>
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $book_count }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-book fa-3x text-gray-500"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    <h3>Kategori</h3>
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $category_count }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-list fa-3x text-gray-500"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    <h3>User</h3>
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $user_count }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-3x text-gray-500"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card shadow mb-4 col-12">
                <div>
                    <x-rent-log-table :rentlog='$rent_logs' />
                </div>
            </div>
        </div>
    </div>
@endsection
