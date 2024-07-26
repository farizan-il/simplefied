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
}
