<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tourist extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'firstname',
        'lastname',
        'email',
        'age',
        'address' ,
        'password'
    ];
}
