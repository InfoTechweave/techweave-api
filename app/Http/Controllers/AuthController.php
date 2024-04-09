<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    // public function register(Request $request)
    // {

    //     $user = User::create([
    //         'mobile_number' => $request->mobile_number,
    //     ]);
    //     return Redirect::route('otp')->with('success', 'User registered successfully. You can now login.');
    // }
    public function register(Request $request)
    {
        $user = User::create([
            'mobile_number' => $request->mobile_number,
        ]);
        session(['mobile_number' => $request->mobile_number]);
        $response = Http::get('http://bhashsms.com/api/sendmsg.php', [
            'user' => 'success',
            'pass' => 'sms@123',
            'sender' => 'BHAINF',
            'phone' => $request->mobile_number,
            'text' => 'api test - BHASHSMS',
            'priority' => 'ndnd',
            'stype' => 'normal',
        ]);

        if ($response->successful()) {
            return redirect()->route('otp')->with('mobile_number', $request->mobile_number);
        } else {
            // Handle error if API call fails
            return back()->withErrors('Failed to send OTP. Please try again later.');
        }
    }
}