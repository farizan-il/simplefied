<?php

namespace App\Http\Controllers;

use App\Models\UserCredentials;
use App\Models\UserVerification;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VerifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Authentifikasi.auth-verifikasi', [
            'title' => 'Verifikasi Email'
        ]);
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
        $validated = $request->validate([
            'verifikasi' => 'required|string'
        ]);

        $token = $validated['verifikasi'];
        $verification = UserVerification::where('token', $token)->first();

        if ($verification && $verification->expired >= Carbon::now()) {
            // Token valid dan tidak kedaluwarsa
            $credentials = UserCredentials::find($verification->user_credentials_id);
            $credentials->isLocked = 1;
            $credentials->save();

            return redirect('/login')->with('success', 'Verifikasi berhasil! Silakan login.');
        } else {
            // Token tidak valid atau kedaluwarsa
            return redirect('/verifikasi')->with('error', 'Token verifikasi tidak valid atau telah kedaluwarsa.');
        }
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
