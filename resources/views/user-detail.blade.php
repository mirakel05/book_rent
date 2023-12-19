@extends('layouts.mainlayout')

@section('title', 'Detail User')
@section('user', 'active')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="card shadow mb-4 col-12">
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-primary">Detail User</h4>
                    <div class="mt-2 d-flex justify-content-start">
                        @if ($user->status == 'inactive')
                            <a href="/user-approve/{{ $user->slug }}" class="btn btn-info mx-1"><i class="fa fa-check">
                                    Setujui User</i></a>
                        @endif
                        <a href="/users" class="btn btn-primary"><i class="fa fa-undo"> Kembali</i></a>
                    </div>
                    <br>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <div>
                        <label for="" class="col-sm-2 col-form-label">Name :</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" readonly value="{{ $user->username }}">
                        </div>
                    </div>
                    <div>
                        <label for="" class="col-sm-2 col-form-label">Phone :</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" readonly
                                @if ($user->phone) value="{{ $user->phone }}"
                            @else
                                value="-" @endif>
                        </div>
                    </div>
                    <div>
                        <label for="" class="col-sm-2 col-form-label">Alamat :</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" readonly value="{{ $user->address }}">
                        </div>
                    </div>
                    <div>
                        <label for="" class="col-sm-2 col-form-label">Status :</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" readonly value="{{ $user->status }}">
                        </div>
                    </div>
                </div>
                <div>
                    <x-rent-log-table :rentlog='$rent_logs' />
                </div>
            </div>
        </div>
    </div>
@endsection
