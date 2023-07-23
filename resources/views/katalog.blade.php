@extends('layouts.app')
@section('content')
    <section class="section-name padding-y-sm">
        <div class="container">
            <header class="section-heading d-flex justify-content-between">
                <h3 class="section-title my-5" id="Makanan"><b>Katalog Menu Makanan</b></h3>
                <a href="#Minuman" class="btn btn-outline-secondary my-5"><i class="bi bi-arrow-bar-down me-2"></i>Minuman</a>
            </header><!-- sect-heading -->
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card">
                        <img src="{{ Vite::asset('resources/images/katalog/chickenbaconpasta.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Chicken & Bacon Pasta</h5>
                            <p class="card-text">Rp 56.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ Vite::asset('resources/images/katalog/classiccheesepizza.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Classic Cheese Pizza</h5>
                            <p class="card-text">Rp 64.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ Vite::asset('resources/images/katalog/lasagna.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Lasagna</h5>
                            <p class="card-text">Rp 36.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ Vite::asset('resources/images/katalog/chickenbaconpasta.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Chicken & Bacon Pasta</h5>
                            <p class="card-text">Rp 56.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ Vite::asset('resources/images/katalog/classiccheesepizza.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Classic Cheese Pizza</h5>
                            <p class="card-text">Rp 64.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ Vite::asset('resources/images/katalog/lasagna.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Lasagna</h5>
                            <p class="card-text">Rp 36.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ Vite::asset('resources/images/katalog/chickenbaconpasta.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Chicken & Bacon Pasta</h5>
                            <p class="card-text">Rp 56.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ Vite::asset('resources/images/katalog/classiccheesepizza.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Classic Cheese Pizza</h5>
                            <p class="card-text">Rp 64.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ Vite::asset('resources/images/katalog/lasagna.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Lasagna</h5>
                            <p class="card-text">Rp 36.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <header class="section-heading d-flex justify-content-between">
                <h3 class="section-title my-5" id="Minuman"><b>Katalog Menu Minuman</b></h3>
                <a href="#Makanan" class="btn btn-outline-secondary my-5"><i class="bi bi-arrow-bar-up me-2"></i>Makanan</a>
            </header><!-- sect-heading -->
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card">
                        <img src="{{ Vite::asset('resources/images/katalog/chickenbaconpasta.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Chicken & Bacon Pasta</h5>
                            <p class="card-text">Rp 56.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ Vite::asset('resources/images/katalog/classiccheesepizza.png') }}"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Classic Cheese Pizza</h5>
                            <p class="card-text">Rp 64.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ Vite::asset('resources/images/katalog/lasagna.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Lasagna</h5>
                            <p class="card-text">Rp 36.000</p>
                        </div>
                    </div>
                </div>
            </div><!-- container // -->
            <div class="container my-5">
            </div>
    </section>
@endsection
