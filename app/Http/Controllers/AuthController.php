<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {

        $user = User::create([
            'mobile_number' => $request->mobile_number,
        ]);
        return Redirect::route('otp')->with('success', 'User registered successfully. You can now login.');
    }
    // public function register(Request $request)
    // {
    //     $user = User::create([
    //         'mobile_number' => $request->mobile_number,
    //     ]);
    //     session(['mobile_number' => $request->mobile_number]);
    //     $response = Http::get('http://bhashsms.com/api/sendmsg.php', [
    //         'user' => 'success',
    //         'pass' => 'sms@123',
    //         'sender' => 'BHAINF',
    //         'phone' => $request->mobile_number,
    //         'text' => 'api test - BHASHSMS',
    //         'priority' => 'ndnd',
    //         'stype' => 'normal',
    //     ]);

    //     if ($response->successful()) {
    //         return redirect()->route('otp')->with('mobile_number', $request->mobile_number);
    //     } else {
    //         // Handle error if API call fails
    //         return back()->withErrors('Failed to send OTP. Please try again later.');
    //     }
    // }

    public function login(Request $request)
    {
        $user = User::where('mobile_number', $request->mobile_number)->first(); 
        
        if ($user) {
            Auth::login($user);
            $token = $this->authenticate();
            $script = "<script>localStorage.setItem('rs-token', '" . $token . "'); window.location.href = '/home';</script>";
            return Response::make($script, 200);
            // return redirect()->route('home');
        } else {
            return redirect()->back()->with('error', 'Invalid mobile number.');
        }
    }
    
    public function authenticate()
    {
        $PROJ_KEY = 'RS_P_1765988307742887937';
        $API_KEY = 'RS5:9bf34e6d20d616bada77893cd3013503';

        $response = Http::withoutVerifying()->post("https://api.sports.roanuz.com/v5/core/${PROJ_KEY}/auth/", [
            'api_key' => $API_KEY
        ]);

        if ($response->successful()) {
            $responseData = $response->json();
            $token = $responseData['data']['token'];
            // dd($token);
            return $token;
        } else {
            return null;
        }
    }

    
}
