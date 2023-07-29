@extends('layouts.app')
@section('content')
    <section class="section-name padding-y-sm">
        <div class="container">
            <header class="section-heading d-flex justify-content-between">
                <h3 class="section-title my-5" id="Makanan"><b>Katalog Menu Makanan</b></h3>
                <a href="#Minuman" class="btn btn-outline-secondary my-5"><i class="bi bi-arrow-bar-down me-2"></i>Minuman</a>
            </header><!-- sect-heading -->
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @if (Route::has('login'))
                    @auth
                        @foreach ($produks as $produk)
                            @if ($produk->kategori == 'Makanan')
                                <div class="col">
                                    <form action="{{ route('pesanan.store') }}" method="POST">
                                        @csrf
                                        <input class="form-control" type="text" name="id_produk" id="id_produk"
                                            value="{{ $produk->id }}" placeholder="Enter Age" hidden>
                                            <input class="form-control" type="text" name="tanggal" id="id_produk"
                                            value="{{ now()->setTimezone('Asia/Jakarta') }}" placeholder="Enter Age" hidden>
                                        <input class="form-control" type="text" name="id_user" id="id_user"
                                            value="{{ auth()->id() }}" placeholder="Enter Age" id="id_" hidden>
                                        <input class="form-control" type="text" name="harga" id="harga"
                                            value="{{ $produk->harga }}" placeholder="Enter Age" hidden>
                                        <button type="submit" class="btn text-start btn-katalog">
                                            <div class="card card-h">
                                                <img src="{{ Vite::asset('storage/app/public/chickenbaconpasta.png') }}"
                                                    class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $produk->nama_produk }}</h5>
                                                    <p class="card-text">Rp.{{ number_format($produk->harga) }}</p>

                                                </div>
                                            </div>
                                        </button>
                                    </form>
                                </div>
                            @endif
                        @endforeach
                    @else
                        @foreach ($produks as $produk)
                            @if ($produk->kategori == 'Makanan' AND $produks->stok <= 1)
                                <div class="col">
                                    <a href="{{ route('login') }}" class="btn text-start btn-katalog">
                                        <div class="card card-h">
                                            <img src="{{ Vite::asset('resources/images/katalog/chickenbaconpasta.png') }}"
                                                class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $produk->nama_produk }}</h5>
                                                <p class="card-text">Rp.{{ number_format($produk->harga) }}</p>
                                            </div>
                                        </div>
                                    </a>
                                    </form>
                                </div>
                            @endif
                        @endforeach
                    @endauth
                @endif
            </div>
            <header class="section-heading d-flex justify-content-between">
                <h3 class="section-title my-5" id="Minuman"><b>Katalog Menu Minuman</b></h3>
                <a href="#Makanan" class="btn btn-outline-secondary my-5"><i class="bi bi-arrow-bar-up me-2"></i>Makanan</a>
            </header><!-- sect-heading -->
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @if (Route::has('login'))
                    @auth
                        @foreach ($produks as $produks)
                            @if ($produks->kategori == 'Minuman' AND $produks->stok >= 1)
                                <div class="col">
                                    <form action="{{ route('pesanan.store') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn text-start btn-katalog">
                                            <div class="card card-h">
                                                <img src="{{ Vite::asset('resources/images/katalog/Es Kuwut.png') }}"
                                                    class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $produks->nama_produk }}</h5>
                                                    <p class="card-text">Rp.{{ number_format($produks->harga) }}</p>
                                                    <input class="form-control" type="text" name="tanggal" id="id_produk"
                                                    value="{{ now()->setTimezone('Asia/Jakarta') }}" placeholder="Enter Age" hidden>
                                                    <input class="form-control" type="text" name="id_produk"
                                                        id="id_produk"value="{{ $produks->id }}" placeholder="Enter Age"
                                                        hidden>
                                                    <input class="form-control" type="text" name="id_user" id="id_user"
                                                        value="{{ auth()->id() }}" placeholder="Enter Age" hidden>
                                                    <input class="form-control" type="text" name="harga" id="harga"
                                                        value="{{ $produks->harga }}" placeholder="Enter Age" hidden>
                                                </div>
                                            </div>
                                        </button>
                                    </form>
                                </div>
                            @endif
                        @endforeach
                    @else
                        @foreach ($produks as $produks)
                            @if ($produks->kategori == 'Minuman')
                                <div class="col">
                                    <a href="{{ route('login') }}" class="btn text-start btn-katalog">
                                        <div class="card card-h">
                                            <img src="{{ Vite::asset('resources/images/katalog/Es Kuwut.png') }}"
                                                class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $produks->nama_produk }}</h5>
                                                <p class="card-text">Rp.{{ number_format($produks->harga) }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    @endauth
                @endif
            </div>
        </div><!-- container // -->
        <div class="container py-5"></div>
    </section>
@endsection
