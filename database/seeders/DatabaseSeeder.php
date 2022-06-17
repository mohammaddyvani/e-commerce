<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AddressSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            BrandSeeder::class,
            ProductSeeder::class,
            TransactionSeeder::class,
            DetailTransactionSeeder::class,
            HotDealSeeder::class,
            HotDealDetailSeeder::class,

        ]);

    }
}
