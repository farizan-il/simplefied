<?php

namespace App\Http\Controllers;

use App\Models\UserCredentials;
use App\Models\UserVerification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ResetSandiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $email = session('email'); // Mengambil email dari session

        if (!$email) {
            return redirect()->route('login')->withErrors(['error' => 'Session expired. Please request a new OTP.']);
        }
        return view('authentifikasi.reset-password', compact('email'));
    }


    public function sendOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:usercredentials,email',
        ]);

        $user = UserCredentials::where('email', $request->email)->first();

        if(!$user){
            return back()->withErrors(['error' => 'email tidak terdaftar']);
        }

        // Generate OTP
        $otp = rand(100000, 999999);

        // Save OTP to the UserVerification table with expiry time
        UserVerification::updateOrCreate(
            ['user_credentials_id' => $user->id],
            [
                'token' => $otp,
                'expired' => now()->addMinutes(10) // OTP expires in 10 minutes
            ]
        );

        // Send OTP via email
        Mail::raw("Your OTP code is: $otp", function($message) use ($user) {
            $message->to($user->email)
                    ->subject('Reset Password OTP');
        });

        // Redirect to the OTP entry page
        return redirect()->route('resetpassword.index')->with('email', $user->email);
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:usercredentials,email',
            'otp' => 'required|digits:6',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = UserCredentials::where('email', $request->email)->first();
        $verification = UserVerification::where('user_credentials_id', $user->id)
                        ->where('token', $request->otp)
                        ->where('expired', '>', now())
                        ->first();

        if (!$verification) {
            return redirect()->route('resetpassword.index')->with('error', 'Invalid or expired OTP code');
        }

        // Update the user's password
        $user->password = Hash::make($request->password);
        $user->save();

        // Clear the OTP after successful verification
        $verification->delete();

        return redirect()->route('login')->with('success', 'Password has been reset successfully');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
