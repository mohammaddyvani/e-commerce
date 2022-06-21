<?php

namespace Database\Seeders;

use App\Models\Restock;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Restock::insert([
            [
                'product_id' => 1,
                'quantity' => 2,
            ]
        ]);
    }
}
