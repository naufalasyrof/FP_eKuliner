@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-6">
                <img src="{{ Vite::asset('resources/images/img-1.png') }}" alt="image" width="85%">
            </div>
            <div class="py-4 col-6">
                <h1 class="mt-4 pb-3"><b>Selamat Datang<br>di eKuliner</b></h1>
                <p>Layanan Pemesanan makanan bebasis website online dari eKuliner untuk Anda para pelanggan setia kami. </p>
                <a type="button" class="btn btn-warning px-4 py-2" href='{{route('katalog')}}'><b>Lihat menu</b></a>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-warning p-5">
        <div class="container">
            <div class="row mx-5">
                <div class="col-5">
                    <h1 class="mt-4 pb-3"><b>Penyedia Makanan dan Minuman Modern Terjangkau</b></h1>
                    <p align="justify">Kami eKuliner merupakan website penyedia makanan dan minuman berbasis IT guna
                        mempermudah dalam melakukan pemesanan dan pembayaran dengan memanfaatkan teknologi digital. eKuliner
                        dijamin halal, enak dan higienis. eKuliner menyediakan berbagai macam makanan indonesia dan makanan
                        western serta makanan asian. </p>
                </div>
                <div class="col-6 mx-5">
                    <div id="carouselExample" class="carousel slide shadow rounded">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ Vite::asset('resources/images/cao-1.jpg') }}" class="d-block w-100 rounded"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ Vite::asset('resources/images/cao-2.jpg') }}" class="d-block w-100 rounded"
                                    alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row py-4">
            <h2 align="center"><b>Kelebihan eKuliner</b></h2>
        </div>
        <div class="row mx-5 text-center text-dark">
            <div class="col-4 p-5">
                <i class="bi bi-file-medical fs-1"></i>
                <h3 class="mt-3"><b>Halal</b></h3>
                <p class="text-agakwhite mx-4">Tersertifikaasi halal oleh MUI</p>
            </div>
            <div class="col-4 p-5">
                <i class="bi bi-cup-hot fs-1"></i>
                <h3 class="mt-3"><b>Citarasa Berkelas</b></h3>
                <p class="text-agakwhite mx-4">Terjamin enak dengan citarasi alami</p>
            </div>
            <div class="col-4 p-5">
                <i class="bi bi-emoji-smile fs-1"></i>
                <h3 class="mt-3"><b>Higenis</b></h3>
                <p class="text-agakwhite mx-4">Terjamin kebersihan dan pemilihan bahan baku langsung dari alam</p>
            </div>
        </div>
    </div>


    </div>
@endsection
