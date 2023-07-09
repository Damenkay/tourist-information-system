<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use HasFactory;
    protected $guard = 'admin';
    protected $table = 'admins';
    protected $fillable = [
        'firstname',
        'lastname',
        'username',
        'email',
        'password'
    ];
}
