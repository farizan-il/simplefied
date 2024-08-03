<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'userprofile';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_credentials_id',
        'role_id',
        'nama',
        'jenisKelamin'
    ];
    public function credentials(){
        return $this->belongsTo(UserCredentials::class, 'user_credentials_id', 'id');
    }
    public function role(){
        return $this->belongsTo(UserRole::class, 'role_id', 'id');
    }
}
