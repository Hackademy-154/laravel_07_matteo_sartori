<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Film extends Model
{
    use HasFactory;
    protected $fillable = [ 
        'title',
        'plot',
        'duration',
        'img'
    ];
}
