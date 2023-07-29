@extends('layouts.app')
@section('content')
    <section class="h-100 h-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="d-flex justify-content-start">
                                        <a href=""><i class="bi bi-arrow-left-circle me-3 fs-4 text-black"></i></a>
                                        <p class="fs-4"><b>Ringkasan Pesanan</b></p>
                                    </div>
                                    <hr>
                                    <div class="card mb-3">
                                        @foreach ($pesanans as $pesanan)
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex flex-row align-items-center">
                                                        <div class="ms-3 mt-2">
                                                            <h5>{{ $pesanan->nama_produk }}</h5>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-row align-items-center">
                                                        <div style="width: 50px;">
                                                            <h5 class="fw-normal mb-0"></h5>
                                                        </div>
                                                        <div style="width: 150px;">
                                                            <h5 class="mb-0">Rp.{{ number_format($pesanan->harga) }}</h5>
                                                        </div>
                                                        <form
                                                            action="{{ route('pesanan.destroy', ['pesanan' => $pesanan->id]) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-warning mx-2"><i
                                                                    class="bi bi-trash3"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                    </div>

                                </div>
                                <div class="col-lg-5">
                                    <div class="card bg-warning text-black rounded-3">
                                        <div class="card-body">
                                            <div>
                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <h5 class="mb-0">Pembayaran</h5>
                                                </div>
                                                <hr class="my-2">

                                                <div class="">
                                                    <p class="mb-2">Subtotal</p>
                                                    <p class="mb-2 fs-1">Rp.{{ number_format($totalHarga) }}</p>
                                                </div>
                                            </div>
                                            @foreach ($pesanans as $pesanans)
                                            <form action="{{ route('pesanan.update',['pesanan' => $pesanans->users_id])}}"method="POST">
                                                @csrf
                                                @method('put')
                                                <input class="form-control" type="text" name="id_user" id="id_user"
                                                    value="{{ $pesanans->chart }}" placeholder="Enter Age" hidden>
                                                    @endforeach
                                                <button type="submit" class="btn btn-dark btn-block btn-lg mt-4">
                                                    <div class="d-flex justify-content-between px-2">
                                                        <span><i class="bi bi-bag-check me-2"></i>Pesan</span>
                                                    </div>
                                                </button>
                                            </form>
                                            
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-5 py-5">
        </div>
    </section>
@endsection
