<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transaction::insert([
            'id' => 1,
            'id_user' => 2,
            'id_address' => 1,
            'paymet_method' => 'COD',
            'status' => 'pending',
            'total_price' => 39980000,
            'total_payment' => 39980000,
        ]);
    }
}
