<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showtime extends Model
{
    use HasFactory;

    protected $fillable = ['film_id', 'show_date'];

    public function film(){
        return $this->belongsTo(Film::class);
    }
}
