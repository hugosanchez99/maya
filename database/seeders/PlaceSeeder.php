<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Image;
use App\Models\Place;
use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $places = [
            // Chiapas
            [
                'name' => 'Palenque',
                'category_id' => 5,
                'state_id' => 1,
            ],
            [
                'name' => 'San Cristobal',
                'category_id' => 5,
                'state_id' => 1,
            ],
            [
                'name' => 'Comitan de Dominguez',
                'category_id' => 5,
                'state_id' => 1,
            ],
            [
                'name' => 'Zona Arqueologica de Palenque',
                'category_id' => 1,
                'state_id' => 1,
            ],
            [
                'name' => 'Bonampak',
                'category_id' => 1,
                'state_id' => 1,
            ],
            [
                'name' => 'Cascadas Roberto Barrios',
                'category_id' => 3,
                'state_id' => 1,
            ],
            // Tabasco
            [
                'name' => 'Zona Arqueologica de Comalcalco',
                'category_id' => 1,
                'state_id' => 2,
            ],
            [
                'name' => 'Zona Arqueologica de Moral Reforma',
                'category_id' => 1,
                'state_id' => 2,
            ],
            [
                'name' => 'Cascadas de Agua Selva',
                'category_id' => 3,
                'state_id' => 2,
            ],
            [
                'name' => 'Sanchez Magallanes',
                'category_id' => 2,
                'state_id' => 2,
            ],
            [
                'name' => 'Tapijulapa',
                'category_id' => 5,
                'state_id' => 2,
            ],
            [
                'name' => 'Parque-Museo La Venta',
                'category_id' => 4,
                'state_id' => 2,
            ],
            // Campeche
            [
                'name' => 'Calakmul',
                'category_id' => 1,
                'state_id' => 3,
            ],
            [
                'name' => 'Seyba Playa',
                'category_id' => 3,
                'state_id' => 3,
            ],
            [
                'name' => 'Palizada',
                'category_id' => 5,
                'state_id' => 3,
            ],
            [
                'name' => 'Campeche',
                'category_id' => 4,
                'state_id' => 3,
            ],
            [
                'name' => 'Zona Arqueologica de Edzna',
                'category_id' => 1,
                'state_id' => 3,
            ],
            // Yucatan
            [
                'name' => 'Zona Arqueologica de Chichen Itza',
                'category_id' => 1,
                'state_id' => 4,
            ],
            [
                'name' => 'Zona Arqueologica de Uxmal',
                'category_id' => 1,
                'state_id' => 4,
            ],
            [
                'name' => 'Valladolid',
                'category_id' => 5,
                'state_id' => 4,
            ],
            [
                'name' => 'Sisal',
                'category_id' => 5,
                'state_id' => 4,
            ],
            [
                'name' => 'Izamal',
                'category_id' => 5,
                'state_id' => 4,
            ],
            [
                'name' => 'Gran Museo Mundo Maya',
                'category_id' => 4,
                'state_id' => 4,
            ],
            // Quintana Roo
            [
                'name' => 'Cancún',
                'category_id' => 2,
                'state_id' => 5,
            ],
            [
                'name' => 'Playa del Carmen',
                'category_id' => 2,
                'state_id' => 5,
            ],
            [
                'name' => 'Tulum',
                'category_id' => 1,
                'state_id' => 5,
            ],
            [
                'name' => 'Isla Mujeres',
                'category_id' => 2,
                'state_id' => 5,
            ],
            [
                'name' => 'Bacalar',
                'category_id' => 2,
                'state_id' => 5,
            ],
        ];

        foreach ($places as $place) {
            Place::factory(1)->create($place)->each(function (Place $place) {
                Image::factory(4)->create([
                    'imageable_id' => $place->id,
                    'imageable_type' => Place::class,
                ]);
                Comment::factory(5)->create();
            });
        }
    }
}
