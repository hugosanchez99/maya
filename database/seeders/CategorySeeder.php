<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Zona Arqueologica'
            ],
            [
                'name' => 'Playas'
            ],
            [
                'name' => 'Cascadas'
            ],
            [
                'name' => 'Museos'
            ],
            [
                'name' => 'Pueblos Magicos'
            ],
        ];

        foreach ($categories as $category ) {
            Category::create($category);
        }
    }
}
