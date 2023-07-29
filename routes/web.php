<?php
use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProdukController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TentangKamiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes();
Route::get('/', function () {
    return view('beranda');
});

Route::get('beranda', BerandaController::class)->name('beranda');
Route::get('katalog', KatalogController::class)->name('katalog');
Route::get('tentangkami', TentangKamiController::class)->name('tentangkami');
Route::get('profile', ProfileController::class)->name('profile');
Route::get('pesanan', [PesananController::class, 'index'])->name('pesanan');

Route::get('admin', [AdminController::class, 'index'])->name('admin');

Route::group(['namespace' => 'admin', 'prefix' => 'admin'],
    function() {
        //dashboard
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    }
);

Route::prefix('admin')->group(function () {
    //dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    //produk katalog
    Route::resource('produk', ProdukController::class);
    // Rute untuk menampilkan daftar produk
    Route::get('dashboard/produk', [ProdukController::class, 'index'])->name('admin.dashboard.produk');
    // Rute untuk menampilkan detail produk
    Route::get('dashboard/produk/{id}', [ProdukController::class, 'show'])->name('admin.dashboard.show');
    Route::get('dashboard/produk/{produk}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
    Route::put('dashboard/produk/{produk}', [ProdukController::class, 'update'])->name('produk.update');
    Route::delete('dashboard/produk/{produk}', [ProdukController::class, 'destroy'])->name('produk.destroy');
    Route::get('/produk/{filename}', function ($filename) {
        $filePath = 'files/' . $filename;

        if (Storage::disk('public')->exists($filePath)) {
            $file = Storage::disk('public')->get($filePath);
            $mime = Storage::disk('public')->mimeType($filePath);

            return Response::make($file, 200, ['Content-Type' => $mime]);
        } else {
            abort(404);
        }
    })->name('produk.image');

    //rute orderan
    Route::resource('pesanan', OrderController::class);
    Route::get('produk/getData', [ProdukController::class, 'getData'])->name('produk.getData');


    Route::get('download-file/produk{id}', [ProdukController::class, 'downloadFile'])->name('produk.downloadFile');


});
