<?php


namespace Database\Factories;

use App\Models\Produk;
use App\Models\ProdukModel;
use Illuminate\Database\Eloquent\Factories\Factory;



class ProdukFactory extends Factory
{
    /**
     * Summary of model
     * @var
     */
    protected $model = Produk::class;


    public function definition()
    {

        return [
            'nama_produk' => $this->faker->word,
            'kategori' => $this->faker->paragraph,
            'stok' => $this->faker->numberBetween(10,50),
            'price' => $this->faker->randomNumber(5),
            // Tambahkan kolom-kolom lain sesuai kebutuhan tabel "produk" Anda
        ];


    }

}
