<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

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

    // try {
    //     //code...
    //     $apiUrl = 'https://api.sports.roanuz.com/v5/cricket/RS_P_1765988307742887937/featured-matches-2/';

    //     $response = Http::withHeaders([
    //         'rs-token' => $API_TOKEN,
    //     ])->withOptions(['verify' => false])->get($apiUrl);
      
    //     $featuredMatches = $response->json();
    //     return view('home', ['featuredMatches' => $featuredMatches]);
    // } catch (\Throwable $th) {
    //     //throw $th;
    //     \Log::info($th );
    // }
    //     // Pass the $featuredMatches variable to the view
       
    // }

    // public function getFeaturedMatches(Request $request)
    // {
    //     // Define the API URL
    //     try {
    //         //code...
       
    //     // Retrieve the token and code from the request
    //     $token = $request->input('token');
    //     $code = $request->input('code');
    //     \Log::info($token);
    //     \Log::info($code);
    //     $apiUrl = 'https://api.sports.roanuz.com/v5/cricket/'+$code+'/featured-matches-2/';

    //     // Make an API call using Laravel's HTTP client
    //     $response = Http::withHeaders([
    //         'rs-token' =>  $token, // Assuming the token is used as a Bearer token
    //     ])->withOptions(['verify' => false])->get($apiUrl, [
    //         'code' => $code // Add code as a query parameter if necessary
    //     ]);

    //     // Check if the request was successful
    //     if ($response->successful()) {
    //         // Get the response data
    //         $data = $response->json();

    //         // Pass the data to the Blade view (replace 'your_blade_view' with your view)
    //         return $data;
    //     } else {
    //         // Handle error response
    //         // You can log the error, display a message, etc.
    //         return response()->json([
    //             'message' => 'Failed to fetch data from the API',
    //             'error' => $response->body(),
    //         ], $response->status());
    //     }
    // } catch (\Throwable $th) {
    //     //throw $th;
    // }
    // }
   
    // public function getFeaturedMatches()
    // {
    //       $PROJ_KEY = 'RS_P_1765988307742887937';
    //       $user = Auth::user();
    //       if (!$user) {
    //           return response()->json([
    //               'error' => 'User not authenticated.',
    //           ], 401);
    //       }
    //       $API_TOKEN = $user->token;
  
    //       $response = Http::withHeaders([
    //           'rs-token' => $API_TOKEN,
    //       ])->get("https://api.sports.roanuz.com/v5/cricket/{$PROJ_KEY}/featured-matches-2/");
    //       if ($response->successful()) {
    //           $matches = $response->json();
    //           return view('home', compact('matches'));
    //       } else {
    //           return response()->json([
    //               'error' => 'Failed to fetch data from the API.',
    //               'details' => $response->body()
    //           ], 400);
    //       }
    //   }

    // }
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
    