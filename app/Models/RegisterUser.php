<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegisterUser extends Model
{
    protected $table = 'register_user';
    protected $fillable = ['id', 'email', 'name', 'blood_type', 'latitude', 'longitude', 'birth_year', 'gender', 'token'];
}
