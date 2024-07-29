<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCredentials extends Model implements AuthenticatableContract
{
    use HasFactory, HasUuids, Authenticatable;
    protected $table = 'usercredentials';
    protected $primaryKey = 'id';
    protected $fillable = [
        'username',
        'email',
        'password',
    ];
    protected $hidden = [
        'password'
    ];
    protected $casts = [
        'password' => 'hashed'
    ];
}
