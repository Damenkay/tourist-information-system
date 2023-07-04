<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'bookings';
    protected $fillable = [
        'username',
        'city',
        'destination',
        'arrival_time'
    ];
    public function bookings(){
        return $this->hasMany(Booking::class);
    }
}