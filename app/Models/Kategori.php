<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory, HasUuids;
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
