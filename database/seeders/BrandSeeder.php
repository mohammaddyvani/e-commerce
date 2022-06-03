<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::insert([
            [
                'id' => 101,
                'name' => 'Apple',
            ],
            [
                'id' => 102,
                'name' => 'Infinix',
            ],
            [
                'id' => 103,
                'name' => 'OnePlus',
            ],
            [
                'id' => 104,
                'name' => 'Oppo',
            ],
            [
                'id' => 105,
                'name' => 'Realme',
            ],
            [
                'id' => 106,
                'name' => 'Samsung',
            ],
            [
                'id' => 107,
                'name' => 'Vivo',
            ],
            [
                'id' => 108,
                'name' => 'Xiaomi',
            ]
        ]);
    }
}
