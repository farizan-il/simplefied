<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\DetailModul;
use App\Models\Modul;
use Illuminate\Http\Request;

class SimplefiedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kegiatan = Kegiatan::with('kategori')->get();
        return view('simplefied.home', [
            'title' => 'Simplefied | Home',
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kegiatan = Kegiatan::with('kategori')->find($id);
        $modul = Modul::all();
        $submodul = DetailModul::all();
        return view('simplefied.DetailCourse', [
            'title' => 'Simplefied | Home',
            'kursus' => $kegiatan,
            'modul' => $modul,
            'submodul' => $submodul
        ]);
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
