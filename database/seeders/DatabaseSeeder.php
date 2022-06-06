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
            BrandSeeder::class,
            ProductSeeder::class,
            DetailTransactionSeeder::class,
            HotDealSeeder::class,
            HotDealDetailSeeder::class,
            TransactionSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,

        ]);

    }
}
