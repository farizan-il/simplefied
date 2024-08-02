<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Kegiatan;
use App\Models\Modul;
use App\Models\Payment;
use App\Models\UserCredentials;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kegiatan = Kegiatan::with('kategori')->get();
        return view('simplefied.paymentcourse', [
            'title' => 'Simplefied | Payment Course',
            'kursus' => $kegiatan
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $payment = Payment::all();
        $kegiatan = Kegiatan::find($id);
        $kategori = Kategori::all();
        $modul = Modul::where('id_kegiatan', $id)->get();
        $user = UserCredentials::find($id);

        if ($kegiatan->id_kategori == $Kategori->) {
            # code...
        } else {
            # code...
        }
        

        return view('simplefied.PaymentCourse', [
            'title' => 'Payment Kursus',
            'item' => $modul,
            'kegiatan' => $kegiatan,
            'user' => $user,
            'payment' => $payment
        ]);
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
