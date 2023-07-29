@extends('layouts.app')
@section('content')
<div class="container-sm my-5">
    <div class="row justify-content-center">
        <div class="p-5 bg-light rounded-3 col-xl-4 border">
            <div class="mb-3 text-center">
                <i class="bi-person-circle fs-1"></i>
                <h4>Detail Pesanan</h4>
            </div>
            <hr>
            @foreach($pesanans as $pesanans)
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="firstName" class="form-label">No. Pesanan</label>
                    <h5>{{$pesanans->id}}</h5>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="lastName" class="form-label">Nama Produk</label>
                    <h5>{{$pesanans->nama_produk}}</h5>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="email" class="form-label">Tanggal Pemesanan</label>
                    <h5>{{$pesanans->tanggal}}</h5>
                </div>
            </div>
            @endforeach
            <hr>
            <div class="row">
                <div class="col-md-12 d-grid">
                    <a href="{{route('profile.index')}}" class="btn btn-outline-dark btn-lg mt-3"><i
                            class="bi-arrow-left-circle
    me-2"></i> Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@vite('resources/js/app.js')
@endsection