<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'cinema_id', 'film_id', 'tickets', 'booking_reference', 'show_time', 'status'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function film(){
        return $this->belongsTo(Film::class);
    }

    public function cinema(){
        return $this->belongsTo(Cinema::class);
    }
}
