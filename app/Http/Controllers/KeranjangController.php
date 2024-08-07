<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $userId = Auth::user()->id;
            $keranjang = Keranjang::with('kegiatan')
                ->where('user_credentials_id', $userId)
                ->get();

            return view('simplefied.keranjang', [
                'title' => 'Keranjang Belanja',
                'keranjang' => $keranjang,
            ]);
        }

        return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu');
    }

    public function addToCart($kegiatanId)
    {
        if (Auth::check()) {
            $userId = Auth::user()->id;

            // Cek jika kursus sudah ada di keranjang
            $exists = Keranjang::where('user_credentials_id', $userId)
                ->where('kegiatan_id', $kegiatanId)
                ->exists();

            if (!$exists) {
                Keranjang::create([
                    'user_credentials_id' => $userId,
                    'kegiatan_id' => $kegiatanId,
                ]);
            }

            return redirect()->back()->with('success', 'Kursus berhasil ditambahkan ke keranjang');
        }

        return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu');
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
