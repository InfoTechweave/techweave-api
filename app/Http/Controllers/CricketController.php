<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class CricketController extends Controller
{
   
    public function getFeaturedMatches()
    {
        $PROJ_KEY = 'RS_P_1765988307742887937';
        $user = Auth::user();
        if (!$user) {
            return response()->json([
                'error' => 'User not authenticated.',
            ], 401);
        }
         $API_TOKEN = $user->token;
         $response = Http::withHeaders([
            'rs-token' => $API_TOKEN,
        ])->withoutVerifying()->get("https://api.sports.roanuz.com/v5/cricket/{$PROJ_KEY}/featured-matches-2/");
        
        if ($response->successful()) {
            $matches = $response->json();
            return view('home', ['matches' => $matches]);
        } else {
            return response()->json([
                'error' => 'Failed to fetch data from the API.',
                'details' => $response->body(),
            ], 400);
        }
    }
   
}
    