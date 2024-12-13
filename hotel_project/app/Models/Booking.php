<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'name',
        'email',
        'phone',
        'checkIn',
        'checkOut',
    ];
    public function room()
    {
        return $this->hasOne('App\Models\Room','id','room_id');
    }
}
