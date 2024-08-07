<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'keranjang';

    protected $fillable = [
        'user_credentials_id',
        'kegiatan_id',
    ];

    public function user()
    {
        return $this->belongsTo(UserCredentials::class, 'user_credentials_id');
    }

    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class, 'kegiatan_id');
    }
}
