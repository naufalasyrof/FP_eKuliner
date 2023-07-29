<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    // protected $fillable = ['id', 'nama_produk', 'kategori','harga','stok'];
    protected $table = 'produks'; // Ganti dengan nama tabel Anda
    protected $primaryKey = 'id'; // Ganti dengan nama primary key Anda
}
   
	

