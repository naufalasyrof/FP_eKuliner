<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'pesanan';
        $id = auth()->id();
        $pesanans = DB::table('pesanans')
        ->select('pesanans.*', 'produks.nama_produk')
        ->join('produks', 'produks.id', '=', 'pesanans.produk_id')
        ->where('pesanans.users_id', $id)
        ->where('chart', 1)
        ->get();
        $totalHarga = $pesanans->sum('harga');

        return view('pesanan', [
            'pageTitle' => $pageTitle,
            'pesanans' => $pesanans,
            'totalHarga' => $totalHarga
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('pesanans')->insert([
            'users_id' => $request->id_user,
            'produk_id' => $request->id_produk,
            'harga' => $request->harga,
            'chart' => 1,
            'tanggal' => $request->tanggal
        ]);
        return redirect()->route('pesanan.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $reductionAmount = 1;
        DB::table('pesanans')
            ->where('users_id', $id)
            ->update(['chart' => 0 ]);
            

        return redirect()->route('pesanan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('pesanans')
            ->where('id', $id)
            ->delete();
        return redirect()->route('pesanan.index');
    }

}