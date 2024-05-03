<?php

namespace Database\Seeders;

use App\Models\Satuan;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = ['pcs', 'unit', 'liter', 'kg', 'dozen', 'pack'];
        $typeLength = count($type);

        // Loop through and create dummy products
        for ($i = 0; $i < $typeLength; $i++) {
            $randomId = rand(100000, 999999);
            while (Satuan::where('id', $randomId)->exists()) {
                $randomId = rand(100000, 999999);
            }
            Satuan::create([
                'id' => $randomId,
                'satuan' => $type[$i], // Example value for kode_satuan
            ]);
        }
    }
}
