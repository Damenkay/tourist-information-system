<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class tourist extends Authenticatable   
{
    use HasFactory;
    protected $guard = 'user';
    protected $table = 'tourists';
    protected $fillable = [
        'username',
        'firstname',
        'lastname',
        'email',
        'age',
        'sex',
        'address' ,
        'password'
    ];

    public function bookings(){
        return $this->hasMany(Booking::class);
    }
}
