@extends('layouts.mainlayout')

@section('title', 'Profile')
@section('profile', 'active')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="card shadow mb-4 col-12">
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-primary text-capitalize">Welcome, {{ auth()->user()->username }}</h4>
                </div>
                <table class="table table-bordered">
                    <tr>
                        <td colspan="4">Username</td>
                        <td class="text-capitalize">{{ auth()->user()->username }}</td>
                    </tr>
                    <tr>
                        <td colspan="4">Phone</td>
                        <td>
                            @if ( auth()->user()->phone )
                                {{ auth()->user()->phone }}
                            @else
                                -
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">Alamat</td>
                        <td class="text-capitalize">
                            @if ( auth()->user()->address )
                                {{ auth()->user()->address }}
                            @else
                                -
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">Status</td>
                        <td>{{ auth()->user()->status }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div>
            <x-rent-log-table :rentlog='$rent_logs' />
        </div>
    </div>
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                text: '{{ session('success') }}'
            })
        </script>
    @endif
@endsection
