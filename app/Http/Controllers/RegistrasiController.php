<?php

namespace App\Http\Controllers;

use App\Models\UserVerification;
use Illuminate\Support\Facades\Hash;
use App\Models\UserCredentials;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationMail;
use Illuminate\Support\Facades\Validator;

class RegistrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Authentifikasi.auth-registrasi', [
            'title' => 'Registrasi'
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
        // Validasi data pw : zanzan342
        $validated = $request->validate([
            'email' => 'required|email|unique:usercredentials,email',
            'username' => 'required|string|max:255|unique:usercredentials,username',
            'nama' => 'required|string|max:255',
            'password' => 'required|string|confirmed',
            'jenisKelamin' => 'required|in:Pria,Wanita',
        ]);
        if (!$validated) {
            return redirect()->back()->withErrors('Validasi data gagal.');
        }

        // Membuat user credentials
        $credentials = UserCredentials::create([
            'email' => $validated['email'],
            'username' => $validated['username'],
            'password' => Hash::make($validated['password']),
            'isLocked' => false,
        ]);

        // Membuat user profile dengan role default
        $validasi = UserProfile::create([
            'user_credentials_id' => $credentials->id,
            'nama' => $validated['nama'],
            'jenisKelamin' => $validated['jenisKelamin'],
        ]);

        if ($validasi) {
            // Buat token verifikasi
            $tokens = [];
            for ($i = 0; $i < 1; $i++) {
                $token = strtoupper(bin2hex(random_bytes(3)));
                $tokens[] = $token;
                
                // Simpan token di database
                UserVerification::create([
                    'user_credentials_id' => $credentials->id,
                    'token' => $token,
                    'expired' => now()->addMinutes(5), // Token expired dalam 5 menit
                ]);
            }

            // Kirim email dengan token verifikasi
            mail::to($credentials->email)->send(new VerificationMail($tokens));

            return redirect('/verifikasi')->with('success', 'Pendaftaran berhasil! Silakan cek email Anda untuk token verifikasi.');
        } else {
            return redirect('/login')->with('error', 'Pendaftaran Gagal! Silakan coba lagi.');
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
