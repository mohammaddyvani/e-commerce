<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Address::insert([
            'id' => 1,
            'name' => 'Wildan Ganteng',
            'address' => 'Jl. Ganteng',
            'city' => 'Bandung',
            'districts' => 'Cibiru',
            'province' => 'Jawa Barat',
            'country' => 'Indonesia',
            'postal_code' => '40132',
            'email' => 'mdyvani@gmail.com',
            'phone' => '081212121212',
        ]);
    }
}
