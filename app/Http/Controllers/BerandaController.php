<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $pageTitle = 'Beranda eKuliner';
        return view('beranda', ['pageTitle' => $pageTitle]);
    }
}
