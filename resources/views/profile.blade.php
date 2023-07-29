@extends('layouts.app')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-6">
                <img src="{{ Vite::asset('resources/images/profile.png') }}" alt="image" width="85%">
            </div>
            <div class="col-6">
                <h4><b>{{ $pageTitle }}</b></h4>
                <hr>
                <div class="justify-content-center">
                    <div class="justify-content-center">
                        <div class="p-5 bg-light rounded-3 border">
                            <div class="mb-3 text-center">
                                <i class="bi-person-circle fs-1"></i>
                                <h4>Nama User</h4>
                            </div>
                            <hr>
                            @foreach($users as $user)
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="email" class="form-label">{{$user->name}}</label>
                                    {{-- <h5>{{ $employee->email }}</h5> --}}
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="age" class="form-label">{{$user->email}}</label>
                                    {{-- <h5>{{ $employee->age }}</h5> --}}
                                </div>
                            </div>
                            @endforeach
                            <hr>
                            <div class="row">
                                <div class="col-md-12 d-grid">
                                    <a href="{{route('beranda')}}" class="btn btn-outline-dark btn-lg mt-3"><i
                                            class="bi-arrow-left-circle me-2"></i> Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container mt-4">

        </div>
        <div class="container mt-4">
            <h4><b>Riwayat Pemesanan</b></h4>
            <hr>
            <div class="row">
                <div class="table-responsive border p-3 rounded-3">
                    <table class="table table-bordered table-hover table-striped
                    mb-0 bg-white">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Pesanan</th>
                                <th>Tanggal Pesanan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pesanans as $pesanan)
                            <tr>
                                <th>{{$pesanan->id}}.</th>
                                <th>{{$pesanan->nama_produk}}</th>
                                <th>{{$pesanan->tanggal}}</th>
                                <th>@include('layouts.actions')</th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
@endsection
