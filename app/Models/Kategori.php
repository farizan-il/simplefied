<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory, HasUlids;
    protected $table = 'Kategori';
    protected $primaryKey = 'id';

    protected $fillable = [
        'namaKategori',
        'JenisKategori',
        'image'
    ];

    public function kegiatan()
    {
        return $this->hasMany(Kegiatan::class, 'id_kategori');
    }
}
