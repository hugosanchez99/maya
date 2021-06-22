<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Place;
use App\Models\State;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $states = State::all();

        return view('welcome', compact('states'));
    }

    public function state(State $state)
    {

        $estados = State::where('id', '!=', $state->id)
            ->get();

        $places = Place::where('state_id', $state->id)->get();


        return view('posts.states', compact('state', 'estados', 'places'));
    }

    public function place(Place $place)
    {
        $similares = Place::where('state_id', $place->state->id)
                            ->where('id', '!=', $place->id)
                            ->get();

        return view('posts.places', compact('similares', 'place'));
    }
}
