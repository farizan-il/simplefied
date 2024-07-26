<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'modul';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_kegiatan',
        'judulModul'
    ];

    public function kursus()
    {
        return $this->belongsTo(Kegiatan::class);
    }

    public function detailModuls()
    {
        return $this->hasMany(DetailModul::class);
    }
}
