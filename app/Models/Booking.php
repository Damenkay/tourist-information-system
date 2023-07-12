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

    
    public function tourist(){
    return $this->belongsTo('App\Models\tourist');
    }

    public function tour(){
        return $this->belongsTo(Tour::class);
        }

   
}
