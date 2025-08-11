<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable as AuthAuthenticatable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use AuthAuthenticatable;

    protected $table = 'users';
    protected $fillable = ['name', 'email', 'phone', 'gender', 'password', 'otp', 'otp_expiration', 'is_verified'];
}
