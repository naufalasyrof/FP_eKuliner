<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-4 border">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Detail Menu</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="id" class="form-label">Kode Barang</label>
                        <h5>{{ $produk->id }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="nama_produk" class="form-label">Nama Produk</label>
                        <h5>{{ $produk->nama_produk }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <h5>{{ $produk->kategori }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="stok" class="form-label">Stok </label>
                        <h5>{{ $produk->stok }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="price" class="form-label">Price</label>
                        <h5>{{ $produk->harga }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="picture" class="form-label">Picture </label>
                        @if ($produk->original_filename)
                            <h5>{{ $produks->original_filename }}</h5>
                            <a href="{{ route('produk.downloadFile', ['produkId' => $produk->id]) }}"
                                class="btn btn-primary btn-sm mt-2">
                                <i class="bi bi-download me-1"></i> Download Gambar
                            </a>
                        @else
                            <h5>Tidak ada</h5>
                        @endif

                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 d-grid">
                            <a href="{{ route('produk.index') }}" class="btn btn-outline-warning btn-lg mt-3"><i
                                    class="bi-arrow-left-circle me-2"></i> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>
