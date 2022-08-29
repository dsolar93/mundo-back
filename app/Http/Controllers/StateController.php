<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;

class StateController extends Controller
{
    public function getState(){

        $state = State::all();
        return $state->toJson(JSON_PRETTY_PRINT);
    }
}
