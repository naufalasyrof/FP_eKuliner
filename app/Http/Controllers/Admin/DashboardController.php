<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function index()
    {
        

        $totalProduk = DB::table('produks')->count(); // Menghitung jumlah data produk menggunakan Query Builder
        $totalProduk1 = DB::table('pesanans')->count();
        

        return view('admin.dashboard.index',
        ['totalProduk' => $totalProduk],
        ['totalProduk1' => $totalProduk1],
        

    );

    }


}
