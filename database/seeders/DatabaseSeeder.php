<?php

namespace Database\Seeders;
use App\Models\Data;

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
        \App\Models\User::factory(30)->create();
        $this->call(PermissionSeeder::class);
        $this->call(StoreSeeder::class);

        Data::factory(2000)->create();
    }
}
