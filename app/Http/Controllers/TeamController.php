<?php

namespace App\Http\Controllers;

use App\League;
use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(League $league, Team $team)
    {
        return view('index')->with(['leagues' => $league->get(), 'teams' => $team->get()]);
    }
}
