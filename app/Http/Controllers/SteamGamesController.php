<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SteamGamesController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->search;
        $response = Http::get("https://www.cheapshark.com/api/1.0/games?title={$search}")->json();
        // dd($response);
        return view('welcome', [
            'games' => $response,
            'search' => $search
        ]);
    }
}
