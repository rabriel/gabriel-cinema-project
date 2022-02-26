<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = ['theatre_id', 'title', 'description', 'duration', 'image'];

    public function theatre(){
        return $this->belongsTo(Theatre::class);
    }
}
