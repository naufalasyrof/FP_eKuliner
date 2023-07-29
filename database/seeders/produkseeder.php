<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class produkseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produks')->insert(
            [
                [
                    'nama_produk' => 'Es Degan',
                    'kategori' => 'Minuman',
                    'stok' => '3',
                    'harga' => 5000,
                    
                ],
                [
                    'nama_produk' => 'Nasi Ayam',
                    'kategori' => 'Makanan',
                    'stok' => '3',
                    'harga' => 10000,
                ]
            ]
        );
    }
}