<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailModul extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'detailmodul';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_modul',
        'File',
        'DetailModul',
    ];
    public function modul()
    {
        return $this->belongsTo(Modul::class);
    }

}
