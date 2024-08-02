<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'transaksi';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_credentials_id',
        'payment_id',
        'namaPelanggan',
        'emailPelanggan',
        'kegiatan_id',
        'namaKursus',
        'kategoriKursus',
        'harga',
        'status'
    ];

    public function credentials(){
        return $this->belongsTo(UserCredentials::class, 'user_credentials_id', 'id');
    }
    public function payment(){
        return $this->belongsTo(Payment::class, 'payment_id', 'id');
    }
    public function kegiatan(){
        return $this->belongsTo(Kegiatan::class, 'kegiatan_id', 'id');
    }

}
