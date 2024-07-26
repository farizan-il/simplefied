<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailModul extends Model
{
    use HasFactory, HasUlids;

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
