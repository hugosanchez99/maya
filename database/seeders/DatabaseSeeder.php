<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::makeDirectory('states');
        Storage::makeDirectory('places');

        $this->call(StateSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(PlaceSeeder::class);
    }
}
