<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Kegiatan;
use App\Models\Modul;
use App\Models\Payment;
use App\Models\Transaksi;
use App\Models\UserCredentials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
        $ValidatedData = $request->validate([
            // 'id_credentials' => 'required|max:255',
            'payment' => 'required|max:255',
            'kegiatan' => 'required',
            'title' => 'required',
            'kategori' => 'required',
            // 'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'harga' => 'required',
            'nama' => 'required|max:255',
            'email' => 'required|max:255'
        ]);

        $addTransaksi = Transaksi::create([
            'user_credentials_id' => Auth::user()->id,
            'payment_id' => $ValidatedData['payment'],
            'namaPelanggan' => $ValidatedData['nama'],
            'emailPelanggan' => $ValidatedData['email'],
            'kegiatan_id' => $ValidatedData['kegiatan'],
            // 'foto' => $validatedData['gambar'],
            'namaKursus' => $ValidatedData['title'],
            'kategoriKursus' => $ValidatedData['kategori'],
            'harga' => $ValidatedData['harga'],
        ]);

        if ($addTransaksi) {
            return redirect()->route('payment.paymentproof', $addTransaksi->id)->with('success', 'Kegiatan berhasil ditambahkan!');
        }else{
            return redirect('/payment')->with('error', 'Kegiatan gagal ditambahkan!');
        }
    }

    public function paymentproof(string $id)
    {
        $transaksi = Transaksi::with('Payment')->find($id);
        $kegiatan = Transaksi::with('Kegiatan')->find($id);

        $namaPayment = null;
        if ($transaksi && $transaksi->payment) {
            $namaPayment = $transaksi->payment->namaPayment;
        }
        
        return view('simplefied.payment.paymentproof', [
            'title' => 'Payment Kursus',
            'namaPayment' => $namaPayment,
            'transaksi' => $transaksi,
            'kegiatan' => $kegiatan
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $payment = Payment::all();
        $kegiatan = Kegiatan::with('kategori')->find($id);

        $modul = Modul::where('id_kegiatan', $id)->get();
        $user = UserCredentials::find($id);

        $namaKategori = null;
        if ($kegiatan && $kegiatan->kategori) {
            $namaKategori = $kegiatan->kategori->namaKategori;
        }
        

        return view('simplefied.PaymentCourse', [
            'title' => 'Payment Kursus',
            'item' => $modul,
            'kegiatan' => $kegiatan,
            'user' => $user,
            'payment' => $payment,
            'kategori' => $namaKategori
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
        $transaksi = Transaksi::findOrFail($id);

        // Validasi file upload
        $request->validate([
            'paymentProof' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048', // Atur aturan validasi sesuai kebutuhan
        ]);

        // Simpan file upload jika ada
        if ($request->hasFile('paymentProof')) {
            $file = $request->file('paymentProof');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            
            // Menggunakan path absolut untuk menyimpan file di htdocs/web-cms-simplefied/public/transaksi-image
            $destinationPath = base_path('../web-cms-simplefied/public/transaksi-image/');
            $file->move($destinationPath, $filename);

            // Simpan nama file di database
            $transaksi->buktitransaksi = $filename;
        }

        $transaksi->save();

        return redirect()->back()->with('success', 'Bukti pembayaran Anda telah diperbarui. Mohon tunggu beberapa menit untuk validasi dari admin. Terima kasih atas kepercayaan Anda. <strong>Klik selesaikan checkout untuk kembali</strong>');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
