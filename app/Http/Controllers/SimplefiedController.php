<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\DetailModul;
use App\Models\Modul;
use App\Models\Tentang;
use App\Models\Transaksi;
use App\Models\UserCredentials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SimplefiedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tentang = Tentang::all();

        $kegiatan = Kegiatan::with('kategori')
            ->withCount(['transaksi' => function ($query) {
                $query->where('status', 'lunas');
            }])
            ->get();

        if (Auth::check()) {
            $userId = Auth::user()->id;

            // Dapatkan ID kegiatan yang sudah dibeli oleh pengguna
            $boughtKursusIds = Transaksi::where('user_credentials_id', $userId)
                ->where('status', 'lunas')
                ->pluck('kegiatan_id')
                ->toArray();

            // Eksklusikan kursus yang sudah dibeli oleh pengguna
            $kegiatan = $kegiatan->reject(function ($item) use ($boughtKursusIds) {
                return in_array($item->id, $boughtKursusIds);
            });
        }

        return view('simplefied.home', [
            'title' => 'Simplefied | Home',
            'kursus' => $kegiatan,
            'tentang' => $tentang,
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
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kegiatan = Kegiatan::find($id);
        $modul = Modul::where('id_kegiatan', $id)->get();
        $user = UserCredentials::find($id);

        return view('simplefied.PaymentCourse', [
            'title' => 'Payment Kursus',
            'item' => $modul,
            'kegiatan' => $kegiatan,
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = UserCredentials::find($id);
        $kegiatan = Kegiatan::with('kategori')->find($id);
        $modul = Modul::all();
        $submodul = DetailModul::all();
        $syarat = explode('/', $kegiatan->syarat);
        
        $hal = explode('/', $kegiatan->keuntungan);
        $totalHal = count($hal);
        $middleIndex = ceil($totalHal / 2);
        $halKiri = array_slice($hal, 0, $middleIndex);
        $halKanan = array_slice($hal, $middleIndex);

        return view('simplefied.DetailCourse', [
            'title' => 'Simplefied | Home',
            'kursus' => $kegiatan,
            'modul' => $modul,
            'submodul' => $submodul,
            'syarat' => $syarat,
            'halKiri' => $halKiri,
            'halKanan' => $halKanan,
            'user' => $user
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
