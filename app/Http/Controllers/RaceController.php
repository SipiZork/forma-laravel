<?php

namespace App\Http\Controllers;

use App\Models\Race;
use App\Models\GrandPrix;
use Illuminate\Http\Request;

class RaceController extends Controller
{
    public function index()
    {
        $races = Race::all()->where('year', 2022);
        $gp = GrandPrix::where('race_id', 1)->get();
        // GrandPrix::race()->all();
        return view('races.index', compact('races', 'gp'));
    }
}
