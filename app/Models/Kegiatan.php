<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'Kegiatan';
    protected $primaryKey = "id";

    protected $fillable = [
        'id_kategori',
        'user_credentials_id',
        'title',
        'subtitle',
        'harga',
        'deskripsi',
        'foto',
        'keuntungan',
        'syarat',
        'instruktur'
    ];

    public function kategori (){
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id');
    }

    public function credentials (){
        return $this->belongsTo(UserCredentials::class, 'user_credentials_id', 'id');
    }

    public function transaksi (){
        return $this->hasMany(Transaksi::class, 'kegiatan_id');
    }
}
