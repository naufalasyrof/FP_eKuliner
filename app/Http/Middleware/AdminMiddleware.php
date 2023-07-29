<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Periksa apakah pengguna saat ini adalah admin berdasarkan level yang ada di tabel 'users'
        if (auth()->check() && auth()->user()->level === '1') {
            return redirect()->route('admin.index');
        }

        // Jika pengguna bukan admin, Anda dapat mengarahkan ke halaman tertentu atau memberikan respons sesuai kebutuhan.
        // Contoh:
        return redirect()->route('beranda');
    }
}
