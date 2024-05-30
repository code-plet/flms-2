<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\League;
use App\Models\Player;
use App\Models\Season;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $context = [
            'clubs' => DB::table('Clubs')->orderBy('name')->get(),
            'players' => DB::table('Players')->orderBy('first_name')->get(),
            'leagues' => DB::table('Leagues')->orderBy('league_name')->get(),
            'seasons' => Season::all()
        ];

        return view('home', $context);
    }
}
