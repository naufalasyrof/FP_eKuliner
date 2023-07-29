<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    
    @vite('resources/css/admin.css')
    @vite('resources/sass/app.scss')
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>E-Kuliner</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paperclip me-2"></i>Reports</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-shopping-cart me-2"></i>Orderan</a>
                <a href="{{ route('produk.index') }}"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-gift me-2"></i>Products</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-comment-dots me-2"></i>List Order</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>John Doe
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2>Menu </h2>
                                </div>
                                <div class="col-sm-4">
                                    <div class="col-xs-6">
                                        <a href="{{ route('produk.create') }}" class="btn btn-success"
                                            data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New
                                                Menu</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

            
                        <table class="table table-striped table-hover table-bordered" id="produk-table">

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk <i class="fa fa-sort"></i></th>
                                    <th>Kategori</th>
                                    <th>Stok <i class="fa fa-sort"></i></th>
                                    <th>Price</th>
                                    <th>Picture <i class="fa fa-sort"></i></th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produk as $produks)
                                    <tr>
                                        <td>{{ $produks->id }}</td>
                                        <td>{{ $produks->nama_produk }}</td>
                                        <td>{{ $produks->kategori }}</td>
                                        <td>{{ $produks->stok }}</td>
                                        <td>{{ $produks->harga }}</td>
                                        {{-- <td><img src="{{ asset('storage/app/public/files/' . $produks->gambar) }}" alt="{{ $produks->nama_produk }}" style="max-width: 100px;"></td> --}}
                                        <td>
                                            <img src="{{ Storage::url('public/files/') }}"class="card-img-top"
                                                alt="{{ $produks->nama_produk }}">
                                        </td>

                                        <td>
                                            <a href="{{ route('produk.show', $produks->id) }}"
                                                class="btn btn-outline-dark btn-sm me2 bi-person-lines-fill"
                                                title="View" data-toggle="tooltip"></a>
                                            <a href="{{ route('produk.edit', $produks->id) }}"
                                                class="btn btn-outline-dark btn-sm me2 bi-pencil-square "
                                                title="Edit" data-toggle="tooltip"></a>
                                            {{-- <a href="{{route('produk.destroy', $produks->id)}}" class="btn btn-outline-dark bi-trash" title="Delete" data-toggle="tooltip"></a> --}}
                                            <div>
                                                <form
                                                    action="{{ route('produk.destroy', ['produk' => $produks->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i
                                                            class="bi-trash"></i></button>
                                                </form>
                                            </div>

                                        </td>
                                    </tr>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </body>
                   

</body>
<script>
    $(document).ready(function() {
        $('#produk-table').DataTable();
    });
</script>


</html>
