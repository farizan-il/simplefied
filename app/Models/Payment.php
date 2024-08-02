<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'payment';
    protected $primaryKey = 'id';

    protected $fillable = [
        'namaPayment',
        'icon',
        'noRef',
        'refNama'
    ];

}
