<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    @vite('resources/sass/app.scss')
</head>
<div class="container-sm mt-5">
    <form action="{{ route('produk.update', ['produk', $produk->id]) }}" method="POST">
        @csrf
        @method('put')
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-6">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Edit</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="id" class="form-label">Kode Produk</label>
                        <input class="form-control @error('id') is-invalid @enderror" type="text" name="id"
                            id="id"
                            value="{{ $errors->any() ? old('id') : $produk->id }}" disabled>
                        @error('id')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    {{-- Input untuk nama barang --}}
                    <div class="col-md-6 mb-3">
                        <label for="nama_produk" class="form-label">Nama Produk</label>
                        <input class="form-control @error('nama_produk') is-invalid @enderror" type="text"
                            name="nama_produk" id="nama_produk"
                            value="{{ $errors->any() ? old('nama_produk') : $produk->nama_produk }}">
                            @error('nama_produk')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                    </div>
                    {{-- Input untuk harga barang --}}
                    <div class="col-md-12 mb-3">
                        <label for="kategori" class="form-label">Kategori Menu</label>
                        <select name="kategori" id="kategori" class="form-select" >
                            <option selected>Pilih Kategori</option>
                            <option value="1">Makanan</option>
                            <option value="2">Minuman</option>
                        </select>
                    </div>
                    {{-- Input untuk stok barang --}}
                    <div class="col-md-6 mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input class="form-control @error('harga') is-invalid @enderror" type="text" name="harga"
                            id="harga"
                            value="{{ $errors->any() ? old('harga') : $produk->harga }}">
                            @error('harga')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                    </div>
                    {{-- Input untuk stok barang --}}
                    <div class="col-md-6 mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input class="form-control @error('stok') is-invalid @enderror" type="text" name="stok"
                            id="stok"
                            value="{{ $errors->any() ? old('stok') : $produk->stok }}">
                            @error('stok')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="picture" class="form-label">Picture</label>
                        <input type="file" class="form-control" name="picture" id="picture">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 d-grid">
                        <a href="{{ route('produk.index') }}" class="btn btn-outline-warning btn-lg mt-3"><i
                                class="bi-arrow-left-circle me-2"></i> Cancel</a>
                    </div>
                    <div class="col-md-6 d-grid">
                        <button type="submit" class="btn btn-warning btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                            Save</button>
                    </div>
                </div>
            </div>
    </form>


</div>
</body>

</html>
