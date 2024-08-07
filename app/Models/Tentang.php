<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'tentang';
    protected $primaryKey = 'id';
    protected $fillable = [
        'label',
        'data',
        'isread'
    ];
}
