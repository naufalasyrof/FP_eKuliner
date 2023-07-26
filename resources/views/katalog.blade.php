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
                    <div class="card card-h">
                        <img src="{{ Vite::asset('resources/images/katalog/chickenbaconpasta.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Chicken & Bacon Pasta</h5>
                            <p class="card-text">Rp 56.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-h">
                        <img src="{{ Vite::asset('resources/images/katalog/classiccheesepizza.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Classic Cheese Pizza</h5>
                            <p class="card-text">Rp 64.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-h">
                        <img src="{{ Vite::asset('resources/images/katalog/lasagna.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Lasagna</h5>
                            <p class="card-text">Rp 36.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-h">
                        <img src="{{ Vite::asset('resources/images/katalog/bruschetta.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Bruschetta</h5>
                            <p class="card-text">Rp 56.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-h">
                        <img src="{{ Vite::asset('resources/images/katalog/margheritapizza.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Margherita Pizza</h5>
                            <p class="card-text">Rp 74.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-h">
                        <img src="{{ Vite::asset('resources/images/katalog/Ayam Bakar.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ayam Bakar</h5>
                            <p class="card-text">Rp 28.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-h">
                        <img src="{{ Vite::asset('resources/images/katalog/Asem Kambing.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Asem Kambing</h5>
                            <p class="card-text">Rp 38.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-h">
                        <img src="{{ Vite::asset('resources/images/katalog/Ayam Panggang.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ayam Panggang</h5>
                            <p class="card-text">Rp 34.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-h">
                        <img src="{{ Vite::asset('resources/images/katalog/Garang Asem.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Garang Asem</h5>
                            <p class="card-text">Rp 40.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-h">
                        <img src="{{ Vite::asset('resources/images/katalog/Gurame Asam Pedas.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Gurame Asam Pedas</h5>
                            <p class="card-text">Rp 36.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-h">
                        <img src="{{ Vite::asset('resources/images/katalog/Gurame Bakar.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Gurame Bakar</h5>
                            <p class="card-text">Rp 25.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-h">
                        <img src="{{ Vite::asset('resources/images/katalog/Urap-Urap.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Urap-Urap</h5>
                            <p class="card-text">Rp 10.000</p>
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
                    <div class="card card-h">
                        <img src="{{ Vite::asset('resources/images/katalog/Es Kuwut.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Es Kuwut</h5>
                            <p class="card-text">Rp 10.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-h">
                        <img src="{{ Vite::asset('resources/images/katalog/Aneka Jus.png') }}"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Aneka Jus</h5>
                            <p class="card-text">Rp 10.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-h">
                        <img src="{{ Vite::asset('resources/images/katalog/Es Campur.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Es Campur</h5>
                            <p class="card-text">Rp 10.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-h">
                        <img src="{{ Vite::asset('resources/images/katalog/Es Doger.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Es Doger</h5>
                            <p class="card-text">Rp 10.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-h">
                        <img src="{{ Vite::asset('resources/images/katalog/Es Dawet.png') }}"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Es Dawet</h5>
                            <p class="card-text">Rp 10.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-h">
                        <img src="{{ Vite::asset('resources/images/katalog/Es Kelapa Muda.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Es Kelapa Muda</h5>
                            <p class="card-text">Rp 10.000</p>
                        </div>
                    </div>
                </div>
            </div><!-- container // -->
            <div class="container py-5"></div>
    </section>
@endsection
