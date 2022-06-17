<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DetailTransaction;

class DetailTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetailTransaction::insert([
            'id' => 1,
            'id_transaction' => 1,
            'id_product' => 1,
            'quantity' => 1,
            'price' => 14990000,
        ]);
    }
}
