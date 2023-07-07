<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tourist extends Model
{
    use HasFactory;
    protected $table = 'tourists';
    protected $fillable = [
        'username',
        'firstname',
        'lastname',
        'username',
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
