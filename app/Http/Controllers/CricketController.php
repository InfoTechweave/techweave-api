<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CricketController extends Controller
{
    // public function index()
    // {
    //     $featuredMatches = $this->fetchFeaturedMatches();
    //     return view('home', ['featuredMatches' => $featuredMatches]);
    // }
    // public function fetchFeaturedMatches()
    // {
    //     $PROJ_KEY = 'RS_P_1765988307742887937'; 
    //     $API_TOKEN = '<script>localStorage.getItem("rs-token")</script>';
    
    //     $response = Http::withHeaders([
    //         'rs-token' => $API_TOKEN,
    //     ])->get("https://api.sports.roanuz.com/v5/cricket/${PROJ_KEY}/featured-matches-2");
    
    //     $featuredMatches = $response->json();
    
    //     // Pass the $featuredMatches variable to the view
    //     return view('home', ['featuredMatches' => $featuredMatches]);
    // }
      
}
