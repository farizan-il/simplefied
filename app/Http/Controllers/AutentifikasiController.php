<?php

namespace App\Http\Controllers;

use App\Models\UserCredentials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AutentifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Authentifikasi.auth-login', [
            'title' => 'Login'
        ]);
    }
    
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email_username' => 'required',
            'password' => 'required'
        ]);

        // Ambil data email atau username
        $emailUsername = $request->input('email_username');
        $password = $request->input('password');

        // Cek apakah input adalah email atau username
        $user = UserCredentials::where('email', $emailUsername)
            ->orWhere('username', $emailUsername)
            ->first();

        if ($user && Hash::check($password, $user->password)) {
            Auth::login($user);
            if ($user->isLocked == 1) {
                return redirect('/')->with('success', 'Login berhasil!');
            } else {
                return redirect('/login')->with('error', 'Akun anda belum di aktivasi!');
            }
        } else {
            return redirect('/login')->with('error', 'Pengguna yang anda masukan tidak terdaftarc !');
        }
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
