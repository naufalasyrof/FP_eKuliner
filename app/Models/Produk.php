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

    public function getDecryptedGambarAttribute()
    {
        $encryptedFilename = $this->attributes['picture'];
        // Lakukan proses dekripsi encryptedFilename ke dalam nama file asli
        // Contoh dekripsi, gantikan sesuai dengan metode enkripsi yang digunakan
        $decryptedFilename = decrypt($encryptedFilename);
        // Mengembalikan URL gambar dari storage menggunakan nama file asli
        return asset('storage/files/' . $decryptedFilename);
    }
}
