@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-6">
                <img src="{{ Vite::asset('resources/images/img-1.png') }}" alt="image" width="85%">
            </div>
            <div class="py-4 col-6">
                <h1 class="mt-5"><b>Lorem ipsum dolor sit amet</b></h1>
                <p>onsectetur adipiscing elit. Maecenas enim sem, facilisis vitae arcu ac, pretium pharetra risus. Mauris
                    accumsan vel augue vitae rhoncus.</p>
                <button type="button" class="btn btn-warning">Warning</button>
                <button type="button" class="btn btn-outline-warning mx-3">Warning</button>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-warning p-5">
        <div class="container">
            <div class="row mx-5">
                <div class="col-5">
                    <h1 class="mt-5"><b>Lorem ipsum dolor sit amet</b></h1>
                    <p>onsectetur adipiscing elit. Maecenas enim sem, facilisis vitae arcu ac, pretium pharetra risus.
                        Mauris
                        accumsan vel augue vitae rhoncus.</p>
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
        <div class="row py-5">
            <h2 align="center"><b>Media Sosial</b></h2>
        </div>
        <div class="row mx-5 text-center text-dark">
            <div class="col-4 p-5">
                <i class="bi bi-cash-coin fs-1"></i>
                <h3 class="mt-3"><b>Gratis</b></h3>
                <p class="text-agakwhite mx-4">Tanpa dipungut biaya pendaftaran ataupun sertifikat</p>
            </div>
            <div class="col-4 p-5">
                <i class="bi bi-cloud-download fs-1"></i>
                <h3 class="mt-3"><b>Unduh</b></h3>
                <p class="text-agakwhite mx-4">Tersedia fitur unduhan agar bisa ditonton tanpa koneksi internet</p>
            </div>
            <div class="col-4 p-5">
                <i class="bi bi-calendar2-check fs-1"></i>
                <h3 class="mt-3"><b>Fleksibel</b></h3>
                <p class="text-agakwhite mx-4">Bisa atur jadwal kursus sesuai dengan prefrensi pribadi</p>
            </div>
        </div>
    </div>
@endsection
