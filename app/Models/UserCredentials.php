<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCredentials extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'usercredentials';
    protected $primaryKey = 'id';
    protected $fillable = [
        'username',
        'email',
        'password',
        'isLocked'
    ];
    protected $hidden = [
        'password'
    ];
    protected $casts = [
        'password' => 'hashed'
    ];
}
