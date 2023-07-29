<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index (Request $request)
    {
        $pageTitle = 'Profile';
        $id = auth()->id();
        $users = DB::table('users')->where('id', $id)->get();
        $pesanans = DB::table('pesanans')
        ->select('pesanans.*', 'produks.nama_produk')
        ->join('produks', 'produks.id', '=', 'pesanans.produk_id')
        ->where('pesanans.users_id', $id)
        ->where('chart', 0)
        ->get();
        return view('profile', [
            'pageTitle' => $pageTitle,
            'users' => $users,
            'pesanans' => $pesanans
            
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
        

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Profile';
        $users = DB::table('users')->where('id', $id)->get();
        $pesanans = DB::table('pesanans')
        ->select('pesanans.*', 'produks.nama_produk')
        ->join('produks', 'produks.id', '=', 'pesanans.produk_id')
        ->where('pesanans.users_id', $id)
        ->where('chart', 0)
        ->get();
        return view('show', [
            'pageTitle' => $pageTitle,
            'users' => $users,
            'pesanans' => $pesanans]);
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
        return redirect()->route('profile.show');
    }

}