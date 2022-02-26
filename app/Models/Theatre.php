<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theatre extends Model
{
    use HasFactory;

    protected $fillable = ['cinema_id', 'name', 'seats'];

    public function cinema(){
        return $this->belongsTo(Cinema::class);
    }
}
