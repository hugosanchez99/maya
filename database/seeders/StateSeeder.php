<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = [
            [
                'name' => 'Chiapas',
            ],
            [
                'name' => 'Tabasco',
            ],
            [
                'name' => 'Campeche',
            ],
            [
                'name' => 'Yucatan',
            ],
            [
                'name' => 'Quintana Roo'
            ]
        ];

        foreach ($states as $state) {
            State::factory(1)->create($state);
        }
    }
}
