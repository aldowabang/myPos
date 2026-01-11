<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produks;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Nasi Goreng Spesial',
                'price' => 25000,
                'stock' => 100,
            ],
            [
                'name' => 'Es Teh Manis',
                'price' => 5000,
                'stock' => 200,
            ],
            [
                'name' => 'Ayam Bakar',
                'price' => 30000,
                'stock' => 50,
            ],
            [
                'name' => 'Jus Alpukat',
                'price' => 15000,
                'stock' => 80,
            ],
            [
                'name' => 'Mie Goreng Seafood',
                'price' => 28000,
                'stock' => 60,
            ],
        ];

        foreach ($products as $product) {
            Produks::create($product);
        }
    }
}
