<?php

namespace App\Http\Controllers;

class FootballStandingsController extends Controller
{
    public function showStandings()
    {
        return view('football.standings');
    }
}
