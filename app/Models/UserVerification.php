<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserVerification extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'userverification';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_credentials_id',
        'token',
        'expired'
    ];
    protected $hidden = [
        'token'
    ];
    
}
