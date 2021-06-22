<?php

namespace App\Http\Livewire;

use App\Models\Place;
use Livewire\Component;

class Navigation extends Component
{
    public $search;

    public function render()
    {
        return view('livewire.navigation');
    }
}
