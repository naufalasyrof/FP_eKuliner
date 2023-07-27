@extends('layouts.app')
@section('content')
    <section class="section-name padding-y-sm">
        <div class="container mb-5">
            <h3 class="section-title my-5"><b>Tentang Kami</b></h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <img src="{{ Vite::asset('resources/images/tentang kami.png') }}" alt="image" width="90%"
                        class="rounded">
                </div>
                <div class="col-7">
                    <h3 class="py-3"><b>eKuliner</b></h3>
                    <p align="justify">Website eKuliner disediakan untuk memenuhi kebutuhan Anda sebagai pengguna diera
                        digital dengan melakukan pemesanan menu dengan digital dan memiliki kemudahan menggunakannya.
                        eKuliner memberikan kesan kepada Anda bahwa memesan makanan tidak perlu menunggu lama dan dalam
                        antrian. Cukup pilih, klik, keranjang dan bayar.</p>
                </div>
            </div>
            <div class="row py-5">
                <h3 class="py-4"><b>Cara Pemesanan</b></h3>
                <div class="container px-5">
                    <div class="position-relative m-4 mx-5">
                        <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="50" aria-valuemin="0"
                            aria-valuemax="100" style="height: 3px;">
                        </div>
                        <button type="button"
                            class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-secondary rounded-pill"
                            style="width: 2rem; height:2rem;">1</button>
                        <button type="button"
                            class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-secondary rounded-pill"
                            style="width: 2rem; height:2rem;">2</button>
                        <button type="button"
                            class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill"
                            style="width: 2rem; height:2rem;">3</button>
                    </div>
                </div>
            </div>
            <div class="row mb-5" style="margin-top: -2%">
                <div class="col-4">
                    <h5 class="text-start">Daftar atau login</h5>
                </div>
                <div class="col-4">
                    <h5 class="text-center">Pilih menu dan masukkan ke keranjang</h5>
                </div>
                <div class="col-4">
                    <h5 class="text-end">Konfirmasi & Pesan</h5>
                </div>
            </div>
        </div>
        <div class="container py-4"></div>
    </section>
@endsection
