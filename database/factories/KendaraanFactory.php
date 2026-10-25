<?php

namespace Database\Factories;

use App\Models\Kendaraan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Kendaraan>
 */
class KendaraanFactory extends Factory
{
   
    public function definition(): array
    {
        return [
    
        'nomor_polisi' => strtoupper(fake()->unique()->bothify('?? #### ??')),
        'merek'=> fake()->randomElement(['Toyota','Honda','Suzuki','Mitsubishi']),
        'tipe'=> fake()->randomElement(['Avanza','Brio','Ertiga','Xenia']),
        'kategori'=> fake()->randomElement(['Mobil','Motor']),
        'tahun'=> fake()->numberBetween([2015,2026]),
        'warna'=> fake()->randomElement(['Hitam','Putih','Merah','Silver']),
        'keterangan'=> null,
        ];
    }
}
